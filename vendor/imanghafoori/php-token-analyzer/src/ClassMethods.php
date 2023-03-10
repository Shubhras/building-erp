<?php

namespace Imanghafoori\TokenAnalyzer;

class ClassMethods
{
    public static function read($tokens)
    {
        $level = $i = 0;
        $class = [
            'name' => null,
            'methods' => [],
            'type' => '',
        ];
        $methods = [];

        while (isset($tokens[$i])) {
            $token = $tokens[$i];

            // to support multiple classes per file.
            if ($token === '{' || $token === T_CURLY_OPEN) {
                $level++;
            } elseif ($token === '}') {
                $level--;

                // we have finished collecting the first valid class.
                if ($level === 0 && $class['name'] !== null) {
                    break;
                }
            }

            if ($token[0] === T_CLASS && $tokens[$i - 1][0] !== T_DOUBLE_COLON && $tokens[$i - 2][0] !== T_NEW) {
                $class['name'] = $tokens[$i + 2];
                $class['type'] = T_CLASS;
                $class['is_abstract'] = ($tokens[$i - 2][0] === T_ABSTRACT);
                $class['is_final'] = ($tokens[$i - 2][0] === T_FINAL);
            } elseif ($token[0] === T_INTERFACE) {
                $class['name'] = $tokens[$i + 2];
                $class['type'] = T_INTERFACE;
            } elseif ($token[0] === T_TRAIT) {
                $class['name'] = $tokens[$i + 2];
                $class['type'] = T_TRAIT;
            }

            if ($class['name'] === null || $tokens[$i][0] !== T_FUNCTION) {
                $i++;
                continue;
            }

            if (! \is_array($name = $tokens[$i + 2])) {
                $i++;
                continue;
            }

            [$visibility, $isStatic, $isAbstract, $isFinal] = self::findVisibility($tokens, $i - 2);
            [, $signature, $endSignature] = Ifs::readCondition($tokens, $i + 2);
            [$char, $charIndex] = TokenManager::forwardTo($tokens, $endSignature, [':', ';', '{']);

            [$returnType, $hasNullableReturnType, $char, $charIndex] = self::processReturnType($char, $tokens, $charIndex);

            if ($char == '{') {
                [$body, $i] = TokenManager::readBody($tokens, $charIndex);
            } elseif ($char == ';') {
                $body = [];
            } else {
                throw new \ErrorException(Refactor::toString($tokens));
            }

            $i++;
            $methods[] = [
                'name' => $name,
                'visibility' => $visibility,
                'signature' => $signature,
                'body' => Refactor::toString($body),
                'startBodyIndex' => [$charIndex, $i],
                'returnType' => $returnType,
                'nullable_return_type' => $hasNullableReturnType,
                'is_static' => $isStatic,
                'is_final' => $isFinal,
                'is_abstract' => $isAbstract,
            ];
        }

        $class['methods'] = $methods;

        return $class;
    }

    private static function findVisibility($tokens, $i)
    {
        $isStatic = $tokens[$i][0] === T_STATIC && $i -= 2;
        $isAbstract = $tokens[$i][0] === T_ABSTRACT && $i -= 2;
        $isFinal = $tokens[$i][0] === T_FINAL && $i -= 2;

        $hasModifier = \in_array($tokens[$i][0], [T_PUBLIC, T_PROTECTED, T_PRIVATE]);
        $visibility = $hasModifier ? $tokens[$i] : [T_PUBLIC, 'public'];

        // We have to cover both syntax:
        //     public abstract function x() {
        //     abstract public function x() {
        ! $isAbstract && $isAbstract = $tokens[$i - 2][0] === T_ABSTRACT;
        ! $isFinal && $isFinal = $tokens[$i - 2][0] === T_FINAL;

        return [$visibility, $isStatic, $isAbstract, $isFinal];
    }

    private static function processReturnType($endingChar, $tokens, $charIndex)
    {
        // No return type is defined.
        if ($endingChar != ':') {
            return [null, null, $endingChar, $charIndex];
        }

        [$returnType, $returnTypeIndex] = TokenManager::getNextToken($tokens, $charIndex);

        // In case the return type is like this: function c() : ?string {...
        // Or like this: function c() : null { ...
        $hasNullableReturnType = ($returnType == '?' || isset($returnType[1]) && $returnType[1] == 'null');

        if ($hasNullableReturnType && ! (isset($returnType[1]) && $returnType[1] == 'null')) {
            [$returnType, $returnTypeIndex] = TokenManager::getNextToken($tokens, $returnTypeIndex);
        }

        [$endingChar, $charIndex] = TokenManager::getNextToken($tokens, $returnTypeIndex);

        $returnType = [$returnType];

        while ($endingChar == '|') {
            [$returnType2, $charIndex] = TokenManager::getNextToken($tokens, $charIndex);
            $returnType[] = $returnType2;
            [$endingChar, $charIndex] = TokenManager::getNextToken($tokens, $charIndex);
        }

        return [$returnType, $hasNullableReturnType, $endingChar, $charIndex];
    }
}

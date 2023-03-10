<?php

namespace Imanghafoori\LaravelMicroscope\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Str;
use Imanghafoori\LaravelMicroscope\BladeFiles;
use Imanghafoori\LaravelMicroscope\CheckClassReferencesAreValid;
use Imanghafoori\LaravelMicroscope\Checks\CheckClassReferences;
use Imanghafoori\LaravelMicroscope\Checks\FacadeAliases;
use Imanghafoori\LaravelMicroscope\ErrorReporters\ErrorPrinter;
use Imanghafoori\LaravelMicroscope\FileReaders\Paths;
use Imanghafoori\LaravelMicroscope\ForPsr4LoadedClasses;
use Imanghafoori\LaravelMicroscope\LaravelPaths\LaravelPaths;
use Imanghafoori\LaravelMicroscope\SpyClasses\RoutePaths;
use Imanghafoori\LaravelMicroscope\Traits\LogsErrors;
use Imanghafoori\TokenAnalyzer\ParseUseStatement;

class CheckImports extends Command
{
    use LogsErrors;

    protected $signature = 'check:imports {--w|wrong} {--f|file=} {--d|folder=} {--detailed : Show files being checked} {--s|nofix : avoids the automatic fixes}';

    protected $description = 'Checks the validity of use statements';

    public function handle(ErrorPrinter $errorPrinter)
    {
        event('microscope.start.command');
        $this->info('Checking imports...');

        $this->option('nofix') && config(['microscope.no_fix' => true]);

        $errorPrinter->printer = $this->output;

        $fileName = ltrim($this->option('file'), '=');
        $folder = ltrim($this->option('folder'), '=');

        $this->checkFilePaths(RoutePaths::get($fileName, $folder));

        $this->checkFolders([
            app()->configPath(),
            LaravelPaths::seedersDir(),
            LaravelPaths::migrationDirs(),
            LaravelPaths::factoryDirs(),
        ], $fileName, $folder);

        $paramProvider = function ($tokens) {
            $imports = ParseUseStatement::parseUseStatements($tokens);

            return $imports[0] ?: [$imports[1]];
        };
        FacadeAliases::$command = $this;
        ForPsr4LoadedClasses::check([CheckClassReferencesAreValid::class, FacadeAliases::class], $paramProvider, $fileName, $folder);

        // Checks the blade files for class references.
        BladeFiles::check([CheckClassReferences::class], $fileName, $folder);

        $this->finishCommand($errorPrinter);
        $this->getOutput()->writeln(
            'Overall, <fg=blue>'.CheckClassReferences::$refCount.
            ' import'.(CheckClassReferences::$refCount == 1 ? '' : 's').
            '</> were checked within <fg=blue>'.ForPsr4LoadedClasses::$checkedFilesNum.' class</>'.
            (ForPsr4LoadedClasses::$checkedFilesNum === 1 ? '' : 'es').
            ' and <fg=blue>'.BladeFiles::$checkedFilesNum.' blade file'.
            (BladeFiles::$checkedFilesNum === 1 ? '' : 's').'</>.'
        );
        $this->getOutput()->writeln(' - <fg=yellow>'.CheckClassReferences::$unusedImportsCount.' unused</> import'.(CheckClassReferences::$unusedImportsCount == 1 ? '' : 's').' found.');
        $this->getOutput()->writeln(' - <fg=red>'.CheckClassReferences::$wrongImportsCount.' wrong</> import'.(CheckClassReferences::$wrongImportsCount == 1 ? '' : 's').' found.');

        $errorPrinter->printTime();

        if (random_int(1, 7) == 2 && Str::startsWith(request()->server('argv')[1] ?? '', 'check:im')) {
            ErrorPrinter::thanks($this);
        }

        return $errorPrinter->hasErrors() ? 1 : 0;
    }

    private function checkFilePaths($paths)
    {
        foreach ($paths as $path) {
            $tokens = token_get_all(file_get_contents($path));
            CheckClassReferences::check($tokens, $path);
            CheckClassReferencesAreValid::checkAtSignStrings($tokens, $path, true);
        }
    }

    private function checkFolders($dirs, $file, $folder)
    {
        foreach ($dirs as $dir) {
            $this->checkFilePaths(Paths::getAbsFilePaths($dir, $file, $folder));
        }
    }
}

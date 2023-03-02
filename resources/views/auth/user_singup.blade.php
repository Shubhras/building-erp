<?php
$style = 'style=';
$display = 'display:';
?>

<div class="tab-pane fade show" id="business" role="tabpanel" aria-labelledby="personal-tab">
    <form action="#">
        <div class="row">
            <div class="col-12">
                <div class="single-input">
                    <!-- <div class="form-group mb-5"> -->
                    {{ Form::label('first_name', __('messages.user.first_name').':',) }}<span class="required"></span>
                    {{ Form::text('first_name', null, ['class' => 'input', 'required','placeholder' => 'Enter Your First Name','id' => 'firstName',  'tabindex' => '1']) }}
                    <!-- </div> -->
                </div>
                <input type="hidden" value="sads" name="t_id">

                <div class="single-input">
                    {{ Form::label('last_name', __('messages.user.last_name').':', ['class' => 'form-label']) }}<span
                        class="required"></span>
                    {{ Form::text('last_name', null, ['class' => 'input', 'required','placeholder' => 'Enter Your Last Name',  'tabindex' => '2']) }}
                </div>
                <div class="single-input">
                    {{ Form::label('email', __('messages.user.email').':', ['class' => 'form-label']) }}<span
                        class="required"></span>
                    {{ Form::email('email', null, ['class' => 'input', 'required','placeholder' => 'Enter Your Email',  'tabindex' => '3']) }}
                </div>
                <div class="single-input">
                    <div class="form-group mobile-overlapping  mb-5">
                        <label Form::label>{{ __('messages.web_contact.phone_number') }}
                            <span class="required"></span>
                        </label>
                        {{ Form::tel('phone', null, ['class' => 'input phoneNumber', 'id' => 'phoneNumber', 'required' ,'placeholder' => 'Enter Your Phone Number', 'onkeyup' => 'if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,"")', 'tabindex' => '5']) }}
                        {{ Form::hidden('prefix_code',null,['class'=>'prefix_code']) }}
                        <span class="text-success valid-msg d-none fw-400 fs-small mt-2">✓
                            &nbsp;
                            {{__('messages.valid')}}</span>
                        <span class="text-danger error-msg d-none fw-400 fs-small mt-2"></span>
                    </div>
                </div>
                <div class="single-input">
                    {{ Form::label('password', __('messages.user.password').':', ['class' => 'form-label']) }}
                    <span class="required"></span>
                    {{ Form::password('password', ['class' => 'input','required','placeholder' => 'Enter Your Password','min' => '6','max' => '10', 'tabindex' => '10']) }}
                </div>
                <div class="single-input">
                    {{ Form::label('password_confirmation', __('messages.user.password_confirmation').':', ['class' => 'form-label']) }}
                    <span class="required"></span>
                    {{ Form::password('password_confirmation', ['class' => 'input','required','placeholder' => 'Enter Your Confirm Password','min' => '6','max' => '10', 'tabindex' => '11']) }}
                </div>

               {{-- <button type="submit" class="w-100" style="background-color:#4743c9;color:#fff">{{ Form::submit(__('messages.common.save'), ['class' => 'btn btn-primary me-2','id' => 'btnSave']) }}</button> --}}
               <button type="submit" class="cmn-btn w-100">{{ __('auth.submit') }}</button>
            </div>
    </form>
</div>
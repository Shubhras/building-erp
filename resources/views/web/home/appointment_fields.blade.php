<?php
$style = 'style=';
$display = 'display:';
?>
<style>
    @import url("https://fonts.googleapis.com/css2?family=Jost:wght@200;300;400;500;600;700;800;900&display=swap");
    .box-set{
    box-shadow: 0 5px 20px rgb(173 181 189 / 20%);
    padding: 40px 30px 10px 30px;
    border-radius: 20px;
    }
    .verify-button {
    border: 1px solid;
    padding: 15px 30px;
    border-radius: 20px;
    margin: 10px;
    color: #fff;
    font-size: 20px;
    font-family: "Jost", sans-serif;
    background-color: #4743c9;
}

.verify-button1 {
    border: 1px solid;
    padding: 15px 30px;
    border-radius: 20px;
    margin: 10px;
    color: #fff;
    font-size: 20px;
    font-family: "Jost", sans-serif;
    background-color: #4743c9;
    min-width: 25%
}
a:hover {
    color: #fff;
    background-color:#4743c9;
}
.form-label1 {
    margin: 0;
    font-family: "Jost", sans-serif;
    font-size: 18px;
    font-weight: 400;
    line-height: 30px;
    color: #0c266c;
    font-weight: 600;
}
.iti--separate-dial-code{
    width:100% !important;
}
.set-user{
    font-size: 35px;
    color: #0c266c;
    font-weight: 600;
    font-family: "Jost", sans-serif;
}
header {
  background-color: #e1ddef;
}
.form-control { 
     color: #0c266c;
    }
</style>
<div class="row align-items-center justify-content-center pt-120" style="border: none;">
    <div class="col-xl-6 order-xl-0 order-1" style="border: none;">
        <div class="sec-img d-rtl">
            <img src="/assets1/images/security-call-action.png" class="max-un" alt="image">
        </div>
    </div>
    <div class="col-xl-6" style="border: none;">
        <div class="d-lg-flex align-items-center justify-content-between mb-4 pt-4">
            {{--  <h2 class="mb-3">{{ __('messages.web_appointment.make_an_appointment') }}</h2>--}}
              <h2 class="mb-3 set-user">User Sign Up</h2>
          </div>
          <div class="row mb-4">
            <div class="col-md-12 box-set">
              <div class="">
                  <div class="form-group mb-4">
                      {{ Form::label('first_name', __('messages.user.first_name').':', ['class' => 'form-label1']) }}<span
                              class="required"></span>
                      {{ Form::text('first_name', null, ['class' => 'form-control', 'required','placeholder' => __('Enter First Name') ,'id' => 'firstName','tabindex' => '1']) }}
                  </div>
              </div>
              <input type="hidden" value="{{ Request::segment(2) }}" name="t_id">
              <div class="">
                  <div class="form-group mb-4">
                      {{ Form::label('last_name', __('messages.user.last_name').':', ['class' => 'form-label1']) }}<span
                              class="required"></span>
                      {{ Form::text('last_name', null, ['class' => 'form-control', 'required', 'placeholder' => __('Enter Last Name') , 'tabindex' => '2']) }}
                  </div>
              </div>
              <div class="">
                  <div class="form-group mb-4">
                      {{ Form::label('email', __('messages.user.email').':', ['class' => 'form-label1']) }}<span
                              class="required"></span>
                      {{ Form::email('email', null, ['class' => 'form-control', 'required' ,'placeholder' => __('Enter First Name') ,'placeholder' => __('Enter Your Email') , 'tabindex' => '3']) }}
                  </div>
              </div>
            {{--   <div class="">
                  <div class="form-group mb-4">
                      {{ Form::label('dob', __('messages.user.dob').':', ['class' => 'form-label1']) }}
                      {{ Form::text('dob', null, ['class' => (getLoggedInUser()->theme_mode) ? 'form-control bg-light patientBirthDate' : 'form-control bg-white patientBirthDate', 'autocomplete' => 'off', 'tabindex' => '4']) }}
                  </div>
              </div>
              --}}
              <div class="col-md-12">
                  <div class="form-group mobile-overlapping  mb-4 ">
                      {{ Form::label('phone', __('messages.user.phone').':', ['class' => 'form-label1']) }}<span
                              class="required"></span><br>
                      {{ Form::tel('phone', null, ['class' => 'form-control phoneNumber', 'id' => 'phoneNumber', 'required','placeholder' => __('Enter Phone Number') , 'onkeyup' => 'if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,"")', 'tabindex' => '5']) }}
                      {{ Form::hidden('prefix_code',null,['class'=>'prefix_code']) }}
                      <span class="text-success valid-msg d-none fw-400 fs-small mt-2">✓ &nbsp; {{__('messages.valid')}}</span>
                      <span class="text-danger error-msg d-none fw-400 fs-small mt-2"></span>
                  </div>
              </div>
              <div class="col-md-12">
                  <div class="form-group mb-4">
                      {{ Form::label('password', __('messages.user.password').':', ['class' => 'form-label1']) }}
                      <span class="required"></span>
                      {{ Form::password('password', ['class' => 'form-control','required','placeholder' => __('Enter Your Password') ,'min' => '6','max' => '10', 'tabindex' => '10']) }}
                  </div>
              </div>
              <div class="col-md-12">
                  <div class="form-group mb-4">
                      {{ Form::label('password_confirmation', __('messages.user.password_confirmation').':', ['class' => 'form-label1']) }}
                      <span class="required"></span>
                      {{ Form::password('password_confirmation', ['class' => 'form-control','required','placeholder' => __('Enter Confirm Password') ,'min' => '6','max' => '10', 'tabindex' => '11']) }}
                  </div>
              </div>
            <div class="d-flex justify-content-end">
              {{ Form::submit(__('messages.common.save'), ['class' => 'verify-button  verify-button1 me-2','id' => 'btnSave']) }}
          </div>
          </div>
          
    
          </div>
    </div>
</div>

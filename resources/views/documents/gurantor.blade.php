<div class="modal-dialog" style="max-width:850px;">
    <div class="modal-content">
        <div class="modal-header">
            <h1 class="modal-title fs-5 heading-bold" id="gurantorModalLabel">Add a guarantor to Your Rental
                Application</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <section class="vh-120 bg-image">
                <div class="mask d-flex align-items-center h-100 gradient-custom-3">
                    <div class="container h-100">
                        <div class="row d-flex justify-content-center align-items-center h-100">
                            <div class="col-12">
                                <div class="card" style="border-radius: 15px;">
                                    <div class="card-body p-5">
                                        <h2 class="text-start mb-10 heading-bold">Guarantor</h2>
                                        <h2 style="margin-top: -25px; margin-bottom: 30px; color: #706e6e;">if
                                            over the age of 18 or required your landlord provide their name and
                                            email below and <span style="color:#262525; font-weight:600;">we
                                                will send them an invite to apply.Continue filling out this
                                                application with your information only.</span></h2>
                                        <form action="{{route('coApplicant')}}" method="POST">
                                            @csrf
                                            <div class="form-outline">
                                                <label class="form-label" for="form3Example1cg">Enter Your Full
                                                    Name</label>
                                                <input type="text" id="form3Example1cg"
                                                    placeholder="Enter Your Full Name" class="form-control"
                                                    name="name[]" />
                                                <input type="hidden" value="<?php echo Auth::user()->id;?>"
                                                    name="user_id">
                                                <input type="hidden" value="<?php echo Auth::user()->tenant_id;?>"
                                                    name="tenant_id">
                                                <input type="hidden" value="gurantor" name="role">
                                                <div class="row">
                                                    <h2 class="mt-5" style="color: #706e6e;">Please provide either
                                                        an email address and phone number</h2>
                                                    <div class="form-outline mb-4 col-md-6">
                                                        <label class="form-label" for="form3Example3cg">Enter Your
                                                            Email</label>
                                                        <input type="email" id="form3Example3cg"
                                                            placeholder="Enter Your Email" class="form-control"
                                                            name="email[]" />
                                                    </div>

                                                    <div class="form-outline mb-4 col-md-6">
                                                        <label class="form-label" for="form3Example4cg">Enter Your
                                                            Phone Number</label>
                                                        <input type="number" id="form3Example4cg"
                                                            placeholder="Enter Your Phone Number" class="form-control"
                                                            name="phone[]" />
                                                    </div>
                                                </div>
                                                <hr>
                                                <div class="col-lg-12"
                                                    style="text-align:end; margin: 30px 18px 10px 8px;">
                                                    <button class="verify-button btn btn-primary" type="submit"
                                                        style="border: 1px px solid; padding: 15px 30px; border-radius: 20px; margin: 10px; color: #fff; font-size: 20px; font-weight:600; background-color: #4743c9; text-decoration: none; cursor:pointer;">Continue</button>
                                                </div>

                                                <div class="form-check d-flex justify-content-center mb-5">
                                                </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>
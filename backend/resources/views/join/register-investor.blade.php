@include('../include/.top')
<style>
    .navbar {
        background-color: #2E8B57;
    }
</style>
</head>

<body>
    @include('../include/.nav')
    @include('../Homepage/.login')
    <section>
        <div class="container" style="margin-top: 20vh">
            <h3 class="fw-semibold">Investor Registration Form</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse vulputate commodo bibendum. Aliquam
                nisi nibh, pellentesque eget elit a, vehicula gravida magna. Duis aliquam eleifend dui elementum
                consequat. Phasellus ultricies nec sapien in tristique. Mauris ipsum sem, fringilla nec elementum id,
                mattis vitae urna. Vestibulum luctus orci sodales ipsum euismod aliquet. Maecenas interdum, velit a
                fringilla dapibus, ante nisl aliquam urna, quis dictum libero dolor eget risus. Maecenas mattis
                dignissim auctor.</p>
            <h5 class="ps-4 py-2 mt-5 mb-4 bg-success">Personal Information</h5>
            <form class="needs-validation" id="investorForm" action="{{ route('investors.store_investor') }}" method="POST"
                enctype="multipart/form-data">
                @csrf
                <div class="row mb-3">
                    <label for="company_name" class="form-label col-md-3">Company Name</label>
                    <div class="col-sm-12 col-md-7">
                        <input type="text" id="company_name" name="company_name" class="form-control" maxlength="100"
                            required />
                        <div class="invalid-feedback">Please provide your company name.</div>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="type_of_investor" class="form-label col-md-3">Type of Investor</label>
                    <div class="col-sm-12 col-md-3">
                        <select class="form-select rounded-0" id="type_of_investor" name="type_of_investor"
                            aria-label="type_of_investor" required>
                            <option value="" selected>Select Investor Type</option>
                            <option value="1">
                                Individual
                            </option>
                            <option value="2">
                                Institutional
                            </option>
                            <option value="3">
                                Venture Capitalist
                            </option>
                            <option value="4">
                                Angel Investor
                            </option>
                            <option value="5">
                                Others
                            </option>
                        </select>
                    </div>
                    <div class="invalid-feedback">Choose one of the options above</div>
                </div>
                <div class="row mb-3">
                    <div class="input-group col">
                        <label for="investment_size" class="form-label col-md-3">Investment Size</label>
                        <div class="row g-2">
                            <div class="col-sm-12 col-md-6">
                                <select class="form-select" id="investmentdetail" name="investmentdetail">
                                    <option value="PHP">PHP - Philippine Peso</option>
                                </select>
                            </div>
                            <div class="col-sm-12 col-md-3">
                                <input type="text" class="form-control" id="investment_size" name="investment_size"
                                    required="required" maxlength="4000" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="country_residence" class="form-label col-md-3">Country of Residence</label>
                    <div class="col-sm-12 col-md-3">
                        <select class="form-select" id="country_residence" name="country_residence"
                            aria-label="country " required="required">
                            <option selected="selected" disabled="disabled" value="">Select Country</option>
                            <option value="PH">PH</option>
                        </select>
                        <div class="invalid-feedback">Choose one.</div>
                    </div>
                </div>
                <h5 class="ps-4 py-2 mt-5 mb-4 bg-success">Contact Information</h5>
                <div class="row mb-3">
                    <div class="input-group col-md-9 col-lg-10">
                        <label class="form-label col-md-3">Full Name</label>
                        <div class="row g-2">
                            <div class="col-sm-12 col-md">
                                <div class="form-floating">
                                    <input type="text" id="investor_last_name" name="investor_last_name"
                                        class="form-control" aria-label="investor_last_name" aria-describedby=""
                                        required="required" maxlength="100" />
                                    <label for="investor_last_name" class="form-label">Last Name</label>
                                    <div class="invalid-feedback">Please provide your surname.</div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md">
                                <div class="form-floating">
                                    <input type="text" id="investor_first_name" name="investor_first_name"
                                        class="form-control" aria-describedby="" required="required" maxlength="100" />
                                    <label for="investor_first_name" class="form-label">First Name</label>
                                    <div class="invalid-feedback">Please provide your first name.</div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md">
                                <div class="form-floating">
                                    <input type="text" id="investor_middle_name" name="investor_middle_name"
                                        class="form-control" aria-describedby="" required="required"
                                        maxlength="100" />
                                    <label for="investor_middle_name" class="form-label">Middle Name</label>
                                    <div class="invalid-feedback">Please provide your middle name.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mb-3 mt-3">
                    <label for="investor_image" name="investor_image" class="form-label col-md-3">Investor
                        Image</label>
                    <div class="col-sm-12 col-md-7">
                        <input class="form-control" type="file" accept="image/png, image/gif, image/jpeg"
                            id="investor_image" name="investor_image" aria-describedby="" required />
                        <div class="invalid-feedback">
                            Please provide a investor image.
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="investor_birthday" name="investor_birthday"
                        class="form-label col-md-3">Birthdate</label>
                    <div class="col-sm-12 col-md-3">
                        <input type="date" id="investor_birthday" name="investor_birthday" class="form-control"
                            aria-describedby="" required />
                        <div class="invalid-feedback">
                            Please provide your date of birth.
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="Gender" name="Gender" class="form-label col-md-3">Gender</label>
                    <div class="col-sm-12 col-md-3">
                        <select class="form-select" id="gender" name="gender" required>
                            <option value="" disabled selected>Select Gender</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                        </select>
                        <div class="invalid-feedback">
                            Please select your gender.
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="contact_number" class="form-label col-md-3">Contact No.</label>
                    <div class="col-sm-12 col-md-3">
                        <input type="number" class="form-control" id="contact_number" name="contact_number"
                            maxlength="100" required />
                        <div class="invalid-feedback">Please provide your contact number.</div>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="email_address" class="form-label col-md-3">Email Address</label>
                    <div class="col-sm-12 col-md-3">
                        <input type="email_address" id="email_address" name="email_address" class="form-control"
                            maxlength="100" required />
                        <div class="invalid-feedback">Please provide your email address.</div>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="password" class="col-form-label col-md-3">Password &nbsp;</label>
                    <div class="col-sm-12 col-md-4">
                        <input type="password" id="password" name="password" class="form-control"
                            required="required" />
                        <div class="invalid-feedback">
                            Please provide a password.
                        </div>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="password_confirmation" class="col-form-label col-md-3">Confirm Password &nbsp;</label>
                    <div class="col-sm-12 col-md-4">
                        <input type="password" id="password_confirmation" name="password_confirmation"
                            class="form-control" required="required" />
                        <div class="invalid-feedback">
                            Passwords must match.
                        </div>
                    </div>
                </div>
                <h5 class="ps-4 py-2 mt-5 mb-4 bg-success">Type of business you wanted to support</h5>
                <div class="mb-3">
                    <textarea class="form-control" id="business_to_support" name="business_to_support" style="height: 100px"
                        maxlength="4000"></textarea>
                </div>
                <h5 class="ps-4 py-2 mt-5 mb-4 bg-success">Industry problem that you wanted to be address</h5>
                <div class="mb-3">
                    <textarea class="form-control" id="industry_problem" name="industry_problem" style="height: 100px"
                        maxlength="4000"></textarea>
                </div>
                <h5 class="ps-4 py-2 mt-5 mb-4 bg-success">Terms &amp; Agreements</h5>
                <div class="form-check my-5">
                    <input class="form-check-input" id="agreeMentor" type="checkbox" />
                    <label class="form-check-label" for="agreeMentor">
                        Upon submitting this form, I consent to the processing of my personal information internally.
                        Other forms of processing of my information, such as sharing it outside the community, shall
                        further require my written consent.
                    </label>
                </div>
                <button type="submit" class="btn btn-primary mb-3">Submit</button>
            </form>
        </div>
    </section>
    <script>
        document.getElementById("investorForm").addEventListener("submit", function(event) {
            const agreeCheckbox = document.getElementById("agreeMentor");
            if (!agreeCheckbox.checked) {
                event.preventDefault();
                alert("Please agree to the Terms & Agreements before submitting.");
            }
        });
    </script>


    @include('../include/.footer')
    @include('../include/.end')

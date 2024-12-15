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
            <h3 class="fw-semibold">Mentor Registration Form</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse vulputate commodo bibendum. Aliquam
                nisi nibh, pellentesque eget elit a, vehicula gravida magna. Duis aliquam eleifend dui elementum
                consequat. Phasellus ultricies nec sapien in tristique. Mauris ipsum sem, fringilla nec elementum id,
                mattis vitae urna. Vestibulum luctus orci sodales ipsum euismod aliquet. Maecenas interdum, velit a
                fringilla dapibus, ante nisl aliquam urna, quis dictum libero dolor eget risus. Maecenas mattis
                dignissim auctor.</p>
            <h5 class="ps-4 py-2 mt-5 mb-4  bg-success">Personal Information</h5>
            <form action="{{ route('mentors.store_Mentor') }}" id="mentorForm" method="POST" enctype='multipart/form-data'>
                @csrf
                <div class="row mb-3">
                    <div class="input-group col-md-9 col-lg-10">
                        <label class="form-label col-md-3">Full Name</label>
                        <div class="row g-2">
                            <div class="col-sm-12 col-md">
                                <div class="form-floating">
                                    <input type="text" id="mentor_last_name" name="mentor_last_name"
                                        class="form-control" aria-label="mentor_last_name" aria-describedby=""
                                        required="required" />
                                    <label for="mentor_last_name" class="form-label">Last Name</label>
                                    <div class="invalid-feedback">Please provide your surname.</div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md">
                                <div class="form-floating">
                                    <input type="text" id="mentor_first_name" name="mentor_first_name"
                                        class="form-control" aria-describedby="" required="required" />
                                    <label for="mentor_first_name" class="form-label">First Name</label>
                                    <div class="invalid-feedback">Please provide your first name.</div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md">
                                <div class="form-floating">
                                    <input type="text" id="mentor_middle_name" name="mentor_middle_name"
                                        class="form-control" aria-describedby="" required="required" />
                                    <label for="mentor_middle_name" class="form-label">Middle Name</label>
                                    <div class="invalid-feedback">Please provide your middle name.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="mentor_birthday" class="form-label col-md-3">Mentor Birthdate</label>
                    <div class="col-sm-12 col-md-3">
                        <input type="date" id="mentor_birthday" name="mentor_birthday" class="form-control"
                            required />
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="mentor_image" class="form-label col-md-3">Mentor Image</label>
                    <div class="col-sm-12 col-md col-lg-4">
                        <input class="form-control" type="file" accept="image/png, image/gif, image/jpeg"
                            id="mentor_image" name="mentor_image" aria-describedby="" required />
                        <div class="invalid-feedback">
                            Please provide a mentor image.
                        </div>
                    </div>
                    <div class="offset-md-3 col-md-9">
                        <small class="help-block d-block my-3">
                            <i class="fa-solid fa-circle-info text-info"></i>
                            Image must be less than or equal to 700kb size, 250px x 250px dimension and jpeg/png file.
                        </small>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="email_address" class="col-form-label col-md-3">Email Address &nbsp;</label>
                    <div class="col-sm-12 col-md-4">
                        <input type="email" id="email_address" name="email_address" class="form-control"
                            required="required" />
                        <div class="invalid-feedback">
                            Please provide an email address.
                        </div>
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

                <div class="row mb-3">
                    <label for="gender" name="gender" class="form-label col-md-3">Gender</label>
                    <div class="col-sm-12 col-md-3">
                        <select class="form-select" id="gender" name="gender" aria-label="gender " required>
                            <option selected="selected" disabled value="">Select Your Gender</option>
                            <option value="M">Male</option>
                            <option value="F">Female</option>
                        </select>
                        <div class="invalid-feedback">
                            Choose one.
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="contact_number" class="col-form-label col-md-3">Contact Number</label>
                    <div class="col-sm-12 col-md-4">
                        <input type="number" class="form-control" id="contact_number" name="contact_number"
                            required />
                        <div class="invalid-feedback">
                            Please provide your contact number.
                        </div>
                    </div>
                    <div class="offset-md-3 col-md-9">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="country_residence" class="col-form-label col-md-3">Country of Residence</label>
                    <div class="col-sm-12 col-md-4">
                        <select class="form-select" id="country_residence" name="country_residence"
                            aria-label="country_residence" required="required">
                            <option selected="selected">Select Country</option>
                        </select>
                        <div class="invalid-feedback">
                            Choose one.
                        </div>
                    </div>
                </div>
                <h5 class="ps-4 py-2 mt-5 mb-4  bg-success">Educational Background &amp; Experience</h5>
                <div class="row mb-3">
                    <label for="current_occupation" class="col-form-label col-md-3">Current Occupation/Role
                        &nbsp;</label>
                    <div class="col-sm-12 col-md">
                        <input type="text" id="current_occupation" name="current_occupation"
                            class="form-control" />
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="company" class="col-form-label col-md-3">
                        Organization/
                        <br />
                        Company
                    </label>
                    <div class="col-sm-12 col-md">
                        <input type="text" id="company" name="company" class="form-control" />
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="designation" class="col-form-label col-md-3">Designation &nbsp;</label>
                    <div class="col-md">
                        <input type="text" id="designation" name="designation" class="form-control" />
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="year_of_experience" class="form-label col-md-3">Years of Industry Experience</label>
                    <div class="col-md-2">
                        <div class="row ">
                            <div class="input-group">
                                <input type="text" id="year_of_experience" name="year_of_experience"
                                    class="form-control" />
                                <span class="input-group-text">years</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="industry_name" class="col-form-label col-md-3">Industry Name</label>
                    <div class="col-sm-12 col-md-4">
                        <select class="form-select" id="industry_name" name="industry_name"
                            aria-label="industry_name" required="required">
                            <option selected="selected" disabled value="">Select Industry</option>
                            <option>
                                Biowaste to New Products, Raw Materials, or Bioenergy
                            </option>
                            <option>
                                Food Innovation
                            </option>
                            <option>
                                IOT for sustainable community
                            </option>
                            <option>
                                Smart Agriculture and Fisheries
                            </option>
                            <option>
                                Others
                            </option>
                        </select>
                        <div class="invalid-feedback">
                            Choose one.
                        </div>
                    </div>
                </div>
                {{-- <div class="row mb-3">
                    <label for="educbackground" class="form-label col-md-3">Course/Program</label>
                    <div class="col-md-9">
                        <div class="row ">
                            <div class="input-group">
                                <input type="text" id="educbackground" class="form-control" name="educbackground"/>
                            </div>
                        </div>
                    </div>
                </div> --}}
                <h5 class="ps-4 py-2 mt-5 mb-4  bg-success">Vision &amp; Expectations</h5>
                <div class="mb-3">
                    <label for="why_interested" class="col-form-label mb-3 bg-success">Why are you interested in
                        mentoring our
                        startup?</label>
                    <div>
                        <textarea class="form-control" id="why_interested" name="why_interested" style="height: 100px" maxlength="4000"></textarea>
                        <small class="help-block d-block my-3">
                            <i class="fa-solid fa-circle-info text-info"></i>
                            &nbsp;Maximum of 4000 characters.
                        </small>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="what_can_offer" class="col-form-label mb-3 bg-success">What do you believe you can
                        offer our startup
                        in terms of guidance and support?</label>
                    <div>
                        <textarea class="form-control" name="what_can_offer" id="what_can_offer" style="height: 100px" maxlength="4000"></textarea>

                        <small class="help-block d-block my-3">
                            <i class="fa-solid fa-circle-info text-info"></i>
                            &nbsp;Maximum of 4000 characters.
                        </small>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="already_mentored_startups" class="col-form-label bg-success mb-3">Have you previously
                        mentored any
                        startups or individuals? &nbsp;</label>
                    <div class="col-sm-12 col-md-4">
                        <select class="form-select" name="already_mentored_startups" id="already_mentored_startups"
                            aria-label="previous-mentorship">
                            <option selected="selected">Choose your answer...</option>
                            <option value="1">Yes</option>
                            <option value="0">No</option>
                        </select>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="conflict_of_interest" class="col-form-label mb-3 bg-success">Are there any conflicts
                        of interest or
                        other startups you're currently
                        mentoring that we should be aware of? &nbsp;</label>
                    <div class="col-sm-12">
                        <textarea class="form-control" id="conflict_of_interest" name="conflict_of_interest" style="height: 100px"
                            maxlength="4000"></textarea>
                        <small class="help-block d-block my-3">
                            <i class="fa-solid fa-circle-info text-info"></i>
                            &nbsp;Maximum of 4000 characters.
                        </small>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="other_notes" class="col-form-label mb-3 bg-success">Any other notes or
                        comments?</label>
                    <div class="col-sm-12">
                        <textarea class="form-control" id="other_notes" name="other_notes" style="height: 100px" maxlength="4000"></textarea>
                        <small class="help-block d-block my-3">
                            <i class="fa-solid fa-circle-info text-info"></i>
                            &nbsp;Maximum of 4000 characters.
                        </small>
                    </div>
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
        document.getElementById("mentorForm").addEventListener("submit", function(event) {
            const agreeCheckbox = document.getElementById("agreeMentor");
            if (!agreeCheckbox.checked) {
                event.preventDefault();
                alert("Please agree to the Terms & Agreements before submitting.");
            }
        });
    </script>


    @include('../include/.footer')
    @include('../include/.end')

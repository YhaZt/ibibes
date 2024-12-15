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
            <h3 class="fw-semibold">Incubatee Registration Form</h3>
            <p>This form ensures that all information provided will be treated with strict confidentiality and used
                solely for the incubation application process. It explicitly guarantees that your information will not
                be used for direct marketing or any other non-research purposes. By checking the box, you confirm your
                agreement to these terms.
            </p>
            <p> Ang form na ito ay tinitiyak na ang lahat ng impormasyong ibibigay ay ituturing na kumpidensyal at
                gagamitin lamang para sa proseso ng aplikasyon sa incubation. Tinutukoy rin nito na ang iyong
                impormasyon ay hindi gagamitin para sa direktang marketing o anumang layunin na hindi nauugnay sa
                pananaliksik. Sa pag-check sa kahon, pinapatunayan mo ang iyong pagsang-ayon sa mga kundisyong ito.
            </p>
            <input class="form-check-input mt-2 bg-success" id="agreeMentor" type="checkbox" />
            <h5 class="ps-4 py-2 mt-5 mb-4 bg-success">Fill up this form:</h5>
            <form action="{{ route('incubatees.store_Incubatee') }}" id="incubateeForm" method="POST"
                enctype="multipart/form-data">
                @csrf
                {{-- <div class="row mb-3">
                <label for="companyName" name="companyName" class="form-label col-md-3">Company Name</label>
                <div class="col-sm-12 col-md-7">
                    <input type="text" id="companyName" name="companyName" class="form-control" aria-describedby=""
                        required />
                    <div class="invalid-feedback">
                        Please provide a company name.
                    </div>
                </div>
            </div>
            <div class="row mb-3">
                <label for="productname" class="form-label col-md-3">Product Name</label>
                <div class="col-sm-12 col-md-7">
                    <input type="text" id="productname" name="productname" class="form-control" aria-describedby=""
                        required />
                    <div class="invalid-feedback">
                        Please provide a product name.
                    </div>
                </div>
                <div class="offset-md-3 col-md-9">
                    <small class="help-block d-block my-3">
                        <i class="fa-solid fa-circle-info text-info"></i>
                        If your company will be housing the product, please indicate the name. Else, put N/A.
                    </small>
                </div>
            </div>
            <div class="row mb-3">
                <label for="productimage" class="form-label col-md-3">Company Image</label>
                <div class="col-sm-12 col-md-7 mb-3">
                    <input class="form-control" type="file" accept="image/png, image/jpeg" id="productimage"
                        name="productimage" aria-describedby="" required onchange="" />
                    <div class="invalid-feedback">
                        Please provide a company image.
                    </div>
                </div>
                <label for="applicationfile" class="form-label col-md-3">Application File</label>
                <div class="col-sm-12 col-md-7">
                    <input class="form-control" type="file" accept="pdf" id="applicationfile"
                        name="applicationfile" aria-describedby="" required onchange="" />
                    <div class="invalid-feedback">
                        Please provide a application file.
                    </div>
                </div>
            </div>
            <div class="mb-3">
                <label for="productdescription" name="productdescription" class="form-label col-md-3">Product
                    Description</label>
                <div class="col-sm-12">
                    <textarea class="form-control" id="productdescription" name="productdescription" style="height: 100px" required></textarea>
                    <div class="invalid-feedback">
                        Please provide a product description.
                    </div>
                    <small class="help-block d-block mt-3 mb-4">
                        <i class="fa-solid fa-circle-info text-info"></i>
                        Please provide a brief description of your innovative idea/product. Jot the strengths.
                    </small>
                </div>
            </div> --}}
                <div class="col-sm-12 col-md">
                    <div class="form-floating">
                        <input type="text" id="are_you" name="are_you" class="form-control mb-3"
                            value="{{ implode(', ', $categories) }}" readonly />
                        <label for="are_you" name="are_you" class="form-label">I'm a</label>
                    </div>
                </div>
                <div class="row">
                    <label for="innovation" class="form-label col-md-3">Area of Interest</label>
                    <div class="col-sm-12 col-md-7">
                        <select class="form-select" id="innovation" name="innovation" aria-label="innovation" required>
                            <option selected="selected" disabled value="">Select Your Area of Interest</option>
                            <option value="biowaste">Biowaste to New Products, Raw Materials, or Bioenergy</option>
                            <option value="food">Food Innovation</option>
                            <option value="iot">IoT for Sustainable Communities</option>
                            <option value="smart">Smart Agriculture and Fisheries</option>
                            <option value="others">Others</option>
                        </select>
                        <div class="invalid-feedback">Please choose one of the options above.</div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-9 offset-md-3">
                            <small class="help-block d-block my-3">
                                <i class="fa-solid fa-circle-info text-info"></i>
                                To which industry/ies does your innovative idea/product belong to?
                            </small>
                            <div id="description" class="mt-3"></div>
                            <div id="innovation-container" class="mt-3" style="display: none;">
                                <label for="other_innovation" class="form-label">Please Specify:</label>
                                <input type="text" id="other_innovation" name="other_innovation" class="form-control"
                                    placeholder="Enter your area of interest">
                            </div>
                        </div>
                    </div>

                    <h5 class="ps-4 py-2 mt-5 mb-4 bg-success">Answer this Questions</h5>
                    <div class="row mb-3">
                        <label for="way_to" class="form-label col-md-3">Anong problema ang nakikita mong dapat
                            ma-solusyonan sa napili mong area of interest?</label>
                        <div class="col-sm-12 col-md-3">
                            <textarea type="text" class="form-control" id="way_to" name="way_to" required> </textarea>
                            <div class="invalid-feedback">
                                Please provide your answer.
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="product_to" name="product_to" class="form-label col-md-3">Ano ang nakikita mong
                            solusyon sa problema na maaaring gawing produkto o serbisyo na pwedeng pagkakitaan?</label>
                        <div class="col-sm-12 col-md-3">
                            <textarea type="text" class="form-control" id="product_to" name="product_to" required> </textarea>
                            <div class="invalid-feedback">
                                Please provide your answer.
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="solution_to" name="solution_to" class="form-label col-md-3">Ano ang nakikita mong
                            paraan upang maisakatauparan ang iyong produkto o serbisyo?</label>
                        <div class="col-sm-12 col-md-3">
                            <textarea type="text" class="form-control" id="solution_to" name="solution_to" required> </textarea>
                            <div class="invalid-feedback">
                                Please provide your answer.
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="help_from" name="help_from" class="form-label col-md-3">Sino sa palagay mo ang
                            makakatulong sa iyong nais na produkto o serbisyo?</label>
                        <div class="col-sm-12 col-md-3">
                            <textarea type="text" class="form-control" id="help_from" name="help_from" required> </textarea>
                            <div class="invalid-feedback">
                                Please provide your answer.
                            </div>
                        </div>
                    </div>

                    {{-- <div class="row">
                <label for="technology" class="form-label col-md-3">Technology Readiness</label>
                <div class="col-sm-12 col-md-7">
                    <select class="form-select" id="trl" name="technology" aria-label="TRL" required>
                        <option selected="selected" disabled value="">Select Your Technology Readiness</option>
                        <option>
                            TRL 0-Idea
                        </option>
                        <option>
                            TRL 1-Basic research
                        </option>
                        <option>
                            TRL 2-Technology formulation
                        </option>
                        <option>
                            TRL 3-Applied research
                        </option>
                        <option>
                            TRL 4-Small scale prototype
                        </option>
                        <option>
                            TRL 5-Large scale prototype
                        </option>
                        <option>
                            TRL 6-Prototype system
                        </option>
                        <option>
                            TRL 7-Demonstration system
                        </option>
                        <option>
                            TRL 8-First of a kind commercial system
                        </option>
                        <option>
                            TRL 9-Full commercial application
                        </option>
                    </select>
                    <div class="invalid-feedback">
                        Please choose one of the options above.
                    </div>
                </div>
            </div> --}}
                    {{-- <div class="row mb-3">
                <div class="col-md-9 offset-md-3">
                    <small class="help-block d-block my-3">
                        <i class="fa-solid fa-circle-info text-info"></i>
                        Technology Readiness Levels (TRL) are a type of measurement system used to assess the maturity
                        level of a particular technology. Select one (1) of the choices to determine the TRL number of
                        your innovation.
                    </small>
                </div>
            </div>
            <div class="mb-3">
                <label for="grants" class="form-label col-md-12">Have you already received any grants, incubation or
                    accelerations from other organizations prior to applying at MinSU i-BIBES?</label>
                <div class="row">
                    <div class="col-md-3"></div>
                    <div class="col-md-4">
                        <select class="form-select" id="grants" name="grants" aria-label="grants" required>
                            <option selected="selected" disabled value="">Select Grants</option>
                            <option value="1">Yes</option>
                            <option value="0">No</option>
                        </select>
                    </div>
                </div>
            </div> --}}
                    <h5 class="ps-4 py-2 mt-5 mb-4 bg-success">Founder Information</h5>
                    <div id="founderContainer">
                        <div class="founder-form-template row mb-3">
                            <div class="input-group col-md-9 col-lg-10">
                                <label class="form-label col-md-3">Full Name </label>
                                <div class="row g-2">
                                    <div class="col-sm-12 col-md">
                                        <div class="form-floating">
                                            <input type="text" id="surName" name="founders[0][surName]"
                                                class="form-control" required />
                                            <label for="Surname" class="form-label">Last Name</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md">
                                        <div class="form-floating">
                                            <input type="text" id="firstName" name="founders[0][firstName]"
                                                class="form-control" required />
                                            <label for="firstName" name="firstName" class="form-label">First
                                                Name</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md">
                                        <div class="form-floating">
                                            <input type="text" id="middleName" name="founders[0][middleName]"
                                                class="form-control" required />
                                            <label for="MiddleName" name="MiddleName" class="form-label">Middle
                                                Name</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3 mt-3">
                                <label for="founderimage" name="founderimage" class="form-label col-md-3">Founder
                                    Image</label>
                                <div class="col-sm-12 col-md-7">
                                    <input class="form-control" type="file"
                                        accept="image/png, image/gif, image/jpeg" id="founderimage"
                                        name="founders[0][founderimage]" required />
                                </div>
                            </div>
                            {{-- <div class="row mb-3">
                        <label for="BirthDate" name="BirthDate" class="form-label col-md-3">Birthdate</label>
                        <div class="col-sm-12 col-md-3">
                            <input type="date" id="birthDateTest" name="founders[0][birthDateTest]" class="form-control" required />
                        </div>
                    </div> --}}
                            <div class="col-sm-12 col-md">
                                <label for="address" name="address" class="form-label col-md-3">Address</label>
                                <div class="form-floating">
                                    <input type="text" id="address" name="founders[0][address]"
                                        class="form-control mb-3" required />
                                    <label for="address" name="address" class="form-label">Address</label>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="Gender" name="Gender" class="form-label col-md-3">Gender</label>
                                <div class="col-sm-12 col-md-3">
                                    <select class="form-select" id="gender" name="founders[0][gender]" required>
                                        <option value="" disabled selected>Select Gender</option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                        <option value="Transgender">Transgender</option>
                                        <option value="Non-binary">Non-binary</option>
                                        <option value="Prefer not to say">Prefer not to say</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="age" name="age" class="form-label col-md-3">Age</label>
                                <div class="col-sm-12 col-md-3">
                                    <select class="form-select" id="age" name="founders[0][age]" required>
                                        <option value="" disabled selected>Select Age</option>
                                        <option value="18-24">18-24</option>
                                        <option value="25-34">25-34</option>
                                        <option value="35-44">35-44</option>
                                        <option value="45-54">45-54</option>
                                        <option value="55-64">55-64</option>
                                        <option value="65 and over">65 and over</option>
                                    </select>
                                </div>
                            </div>
                            <small class="help-block d-block my-3">
                                <i class="fa-solid fa-circle-info text-info"></i>
                                This will be the primary contact details of the MinSU i-BIBES to the startup.
                            </small>
                            <div class="col-sm-12 col-md">
                                <div class="form-floating">
                                    <input type="email" id="email" name="founders[0][email_address]" class="form-control" required />

                                    <label for="email" name="email" class="form-label">Email</label>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md">
                                <div class="form-floating">
                                    <input type="text" id="contact" name="founders[0][contact]"
                                        class="form-control" required />
                                    <label for="contact" name="contact" class="form-label">Contact Number</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button type="button" class="btn btn-primary mt-3 mb-3" id="addFounderBtn">Add Another
                        Founder</button>
                    {{-- <h5 class="ps-4 py-2 mt-5 mb-4 bg-success">Contact Information</h5>
            <small class="help-block d-block my-3">
                <i class="fa-solid fa-circle-info text-info"></i>
                This will be the primary contact details of the MinSU i-BIBES to the startup.
            </small>
            <div class="row mb-3">
                <label for="email" class="form-label col-md-3">Email Address</label>
                <div class="col-sm-12 col-md-3">
                    <input type="email" id="incubateeEmail" name="email" class="form-control "
                        aria-describedby="" required />
                    <div class="invalid-feedback">
                        Please provide an email address.
                    </div>
                </div>
            </div>
            <div class="row mb-3">
                <label for="Contact" name="contact" class="form-label col-md-3">Contact No.</label>
                <div class="col-sm-12 col-md-3">
                    <input type="text" class="form-control" id="contact" name="contact" required />
                    <div class="invalid-feedback">
                        Please provide your contact number.
                    </div>
                </div>
            </div> --}}
                    {{-- <div class="row mb-3">
                <label for="password" class="col-form-label col-md-3">Password &nbsp;</label>
                <div class="col-sm-12 col-md-4">
                    <input type="password" id="password" name="password" class="form-control" required="required" />
                    <div class="invalid-feedback">
                        Please provide a password.
                    </div>
                </div>
            </div>

            <div class="row mb-3">
                <label for="password_confirmation" class="col-form-label col-md-3">Confirm Password &nbsp;</label>
                <div class="col-sm-12 col-md-4">
                    <input type="password" id="password_confirmation" name="password_confirmation" class="form-control" required="required" />
                    <div class="invalid-feedback">
                        Passwords must match.
                    </div>
                </div>
            </div> --}}

                    <div class="row mb-3">
                        <div class="col-sm-12">
                            <label for="seen_in" class="form-label">How did you learn about the MinSU i-BIBES
                                Incubation Program</label>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-3 ps-3 py-1">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="Social Media"
                                    name="seen_in[]" id="social_media">
                                <label class="form-check-label" for="social_media">Social Media</label>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-3 ps-3 py-1">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox"
                                    value="Official communication that you received" name="seen_in[]"
                                    id="official_communication">
                                <label class="form-check-label" for="official_communication">Official communication
                                    that you received</label>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-3 ps-3 py-1">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox"
                                    value="From an Administrator/Colleague" name="seen_in[]" id="admin_colleague">
                                <label class="form-check-label" for="admin_colleague">From an
                                    Administrator/Colleague</label>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-3 ps-3 py-1">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="Others" name="seen_in[]"
                                    id="others">
                                <label class="form-check-label" for="others">Others</label>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md">
                            <div class="form-floating">
                                <input type="hidden" id="deleteflag" name="deleteflag" value="0"
                                    class="form-control" />
                            </div>
                        </div>
                    </div>
                    <h5 class="ps-4 py-2 mt-5 mb-4 bg-success">Terms &amp; Agreements</h5>
                    <div class="form-check my-5">
                        <input class="form-check-input" id="agreeMentor" type="checkbox" />
                        <label class="form-check-label" for="agreeMentor">
                            Upon submitting this form, I consent to the processing of my personal information
                            internally. Other forms of processing of my information, such as sharing it outside the
                            community, shall further require my written consent.
                        </label>
                    </div>
                    <button type="submit" class="btn btn-primary mt-3 mb-3">Submit</button>
            </form>
        </div>
    </section>
    <script>
        document.getElementById("innovation").addEventListener("change", function() {
            const descriptions = {
                biowaste: `
            <strong>Biowaste to New Products, Raw Materials or Bioenergy</strong>
            <p>
                Mga waste mula sa agrikultura na may malaking potensyal na mapakinabangan sa paglikha ng makabagong produkto, bagong materyal o bilang alternatibong mapagkukunan ng enerhiya.
                Ilan sa mga halimbawa ng biowaste ay ang mga sumusunod: balat at buto ng calamansi, balat ng palay, katawan at balat ng saging, balat at buto ng iba't ibang prutas at gulay, pati na rin ang mga nabulok na prutas o gulay, at iba pa.
            </p>
        `,
                food: `
            <strong>Food Innovation</strong>
            <p>
                Mga makabago at malikhaing paraan ng paglikha ng pagkain mula sa mga produktong agrikultural. Ang mga inobasyong ito ay nagdadagdag ng halaga sa mga ani at nagbibigay ng karagdagang kita sa mga magsasaka.
                Ilan sa mga tanyag na halimbawa ay: Banana Chips, Cassava Chips, Calamansi Concentrate, Rice Flour, at iba pa.
            </p>
        `,
                iot: `
            <strong>IoT for Sustainable Communities</strong>
            <p>
                Mga makabagong teknolohiya gamit ang Internet of Things (IoT) na nagbibigay ng solusyon sa mga hamon ng modernong komunidad, na nagtutulak ng mas maunlad at mas sustainable na pamumuhay.
                Ilan sa mga halimbawa ay: Online Shopping Apps; Mobile Applications – Tulad ng apps para sa pagbabayad ng bills, pamimili, o pag-book ng transportasyon, na nagpapadali sa pamumuhay; Community Management Systems – Aplikasyon para sa epektibong pamamahala ng resources, gaya ng tubig, kuryente, at basura; at iba pa.
            </p>
        `,
                smart: `
            <strong>Smart Agriculture and Fisheries</strong>
            <p>
                Mga makabagong teknolohiya sa agrikultura at pangingisda na nagpapataas ng produktibidad at tumutulong sa sustainable na paggamit ng resources.
                Ilan sa mga halimbawa ay: Smart Greenhouse Systems – Pinapabuti ang kontrol sa temperatura, halumigmig, at ilaw upang mapalago ang tanim sa mas epektibong paraan; Crop and Livestock Monitoring – Mga sensor o aplikasyon para sa masusing pagmo-monitor ng kalagayan ng pananim at mga alagang hayop; Planting and Harvesting Apps – Mga tool para sa pagpaplano ng tamang panahon ng pagtatanim at pag-aani; Fishpond Monitoring Systems – Mga device para sukatin ang kalidad ng tubig at kondisyon ng isda sa fishponds; Marine GPS and Tracking – Para sa ligtas at epektibong pangingisda sa karagatan; at iba pa.
            </p>
        `
            };
            const selectedValue = this.value;
            const descriptionDiv = document.getElementById("description");
            const otherInputContainer = document.getElementById("innovation-container");
            if (selectedValue === "others") {
                descriptionDiv.innerHTML = "";
                otherInputContainer.style.display = "block";
            } else {
                descriptionDiv.innerHTML = descriptions[selectedValue] || "";
                otherInputContainer.style.display = "none";
            }
        });
    </script>
    <script>
        document.getElementById("incubateeForm").addEventListener("submit", function(event) {
            const agreeCheckbox = document.getElementById("agreeMentor");
            if (!agreeCheckbox.checked) {
                event.preventDefault();
                alert("Please agree to the Terms & Agreements before submitting.");
            }
        });
        document.getElementById('addFounderBtn').addEventListener('click', function() {
            const template = document.querySelector('.founder-form-template');
            const clone = template.cloneNode(true);
            const index = document.querySelectorAll('.founder-form-template').length;
            clone.querySelectorAll('input').forEach(input => {
                const name = input.getAttribute('name');
                input.setAttribute('name', name.replace(/\[\d+\]/, `[${index}]`));
                input.value = '';
            });
            clone.querySelectorAll('select').forEach(select => {
                const name = select.getAttribute('name');
                select.setAttribute('name', name.replace(/\[\d+\]/, `[${index}]`));
                select.selectedIndex = 0;
            });
            const wrapper = document.createElement('div');
            wrapper.className = 'founder-wrapper mb-3';
            wrapper.appendChild(clone);
            const removeButton = document.createElement('button');
            removeButton.textContent = 'Remove';
            removeButton.type = 'button';
            removeButton.className = 'btn btn-danger mt-2';
            removeButton.addEventListener('click', function() {
                wrapper.remove();
            });
            wrapper.appendChild(removeButton);
            document.getElementById('founderContainer').appendChild(wrapper);
        });
    </script>

    @include('../include/.footer')
    @include('../include/.end')

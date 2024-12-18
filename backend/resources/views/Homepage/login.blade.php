
<div class="offcanvas offcanvas-end" data-bs-scroll="true" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasExampleLabel">Member Login</h5>

        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>

    <div class="offcanvas-body d-flex flex-column">
        <form class="custom-form member-login-form" action="{{ route('login') }}" method="post" role="form">
            @csrf
            <div class="member-login-form-body">
                <div class="mb-4">
                    <label class="form-label mb-2" for="email">Email Address</label>
                    <input type="email" name="email" id="email" class="form-control" placeholder="Email" required>
                </div>
                <div class="mb-4">
                    <label class="form-label mb-2" for="member-login-password">Password</label>
                    <input type="password" name="password" id="member-login-password" pattern="[0-9a-zA-Z]{4,10}" class="form-control" placeholder="Password" required>
                </div>
                <div class="form-check mb-4">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                        Remember me
                    </label>
                </div>
                <div class="col-lg-5 col-md-7 col-8 mx-auto">
                    <button type="submit" class="form-control">Login</button>
                </div>
                <div class="text-center my-4">
                    <a href="#">Forgotten password?</a>
                </div>
            </div>
        </form>

        <div class="mt-auto mb-5">
            <p>
                <strong class="text-white me-3">Any Questions?</strong>
                <a href="tel: 010-020-0340" class="contact-link">
                    010-020-0340
                </a>
            </p>
        </div>
    </div>

    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#3D405B" fill-opacity="1" d="M0,224L34.3,192C68.6,160,137,96,206,90.7C274.3,85,343,139,411,144C480,149,549,107,617,122.7C685.7,139,754,213,823,240C891.4,267,960,245,1029,224C1097.1,203,1166,181,1234,160C1302.9,139,1371,117,1406,106.7L1440,96L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z"></path></svg>
</div>

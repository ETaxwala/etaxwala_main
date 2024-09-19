<!-- Spinner Start -->
<div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
    <div class="spinner-border text-secondary" style="width: 3rem; height: 3rem;" role="status">
        <span class="sr-only">Loading...</span>
    </div>
</div>
<!-- Spinner End -->


<!-- Topbar Start -->
<div class="container-fluid bg-primary px-5 d-none d-lg-block">
    <div class="row gx-0 align-items-center">
        <div class="col-lg-5 text-center text-lg-start mb-lg-0">
            <div class="d-flex">
                <a href="#" class="text-muted me-4"><i class="fas fa-envelope text-secondary me-2"></i>support@etaxwala.com</a>
                <a href="#" class="text-muted me-0"><i class="fas fa-phone-alt text-secondary me-2"></i>+91 7071 070707</a>
            </div>
        </div>
        <div class="col-lg-3 row-cols-1 text-center mb-2 mb-lg-0">
            <div class="d-inline-flex align-items-center" style="height: 45px;">
                <a class="btn btn-sm btn-outline-light btn-square rounded-circle me-2" href=""><i class="fab fa-twitter fw-normal text-secondary"></i></a>
                <a class="btn btn-sm btn-outline-light btn-square rounded-circle me-2" href=""><i class="fab fa-facebook-f fw-normal text-secondary"></i></a>
                <a class="btn btn-sm btn-outline-light btn-square rounded-circle me-2" href=""><i class="fab fa-linkedin-in fw-normal text-secondary"></i></a>
                <a class="btn btn-sm btn-outline-light btn-square rounded-circle me-2" href=""><i class="fab fa-instagram fw-normal text-secondary"></i></a>
                <a class="btn btn-sm btn-outline-light btn-square rounded-circle" href=""><i class="fab fa-youtube fw-normal text-secondary"></i></a>
            </div>
        </div>
        <div class="col-lg-4 text-center text-lg-end">
            <div class="d-inline-flex align-items-center" style="height: 45px;">
                <a href="#" class="text-muted me-2"> Help</a><small> / </small>
                <a href="#" class="text-muted mx-2"> Support</a><small> / </small>
                <a href="#" class="text-muted mx-2"> Contact</a><small> / </small>
                <a href="{{route('admin.loginForm')}}" target="_blank" class="text-muted ms-2"> Login</a>
            </div>
        </div>
    </div>
</div>
<!-- Topbar End -->

<!-- Navbar & Hero Start -->
<div class="container-fluid nav-bar p-0">
    <nav class="navbar navbar-expand-lg navbar-light bg-white px-4 px-lg-5 py-3 py-lg-0">
        <a href="" class="navbar-brand p-0">
            {{-- <h1 class="display-5 text-secondary m-0">ETaxwala</h1> --}}
            <img src="img/logo_black.png" alt="Logo" width="200">
            {{-- <img src="img/logo_black.png" class="img-fluid" alt=""> --}}
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="fa fa-bars"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0">
                <a href="index.html" class="nav-item nav-link active">Home</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link" data-bs-toggle="dropdown"><span class="dropdown-toggle">Registration</span></a>
                    <div class="dropdown-menu m-0">
                        <a href="feature.html" class="dropdown-item">Partnership Firm Registration</a>
                        <a href="countries.html" class="dropdown-item">One Person Company</a>
                        <a href="testimonial.html" class="dropdown-item">Private LTD Company </a>
                        <a href="training.html" class="dropdown-item">Limited Liability Partnership (LLP)</a>
                        <a href="404.html" class="dropdown-item">Section 8 Company NGO</a>
                        <a href="404.html" class="dropdown-item">Producer Company </a>
                        <a href="404.html" class="dropdown-item">Public LTD Company </a>
                        <a href="404.html" class="dropdown-item">Microfinance Company (Section 8)</a>
                        <a href="404.html" class="dropdown-item">Indian Subsidiary Company </a>
                        <a href="404.html" class="dropdown-item">Microfinance Company NBFC (RBI Registered)</a>
                    </div>
                </div>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link" data-bs-toggle="dropdown"><span class="dropdown-toggle">Taxation & Return</span></a>
                    <div class="dropdown-menu m-0">
                        <a href="feature.html" class="dropdown-item">Feature</a>
                        <a href="countries.html" class="dropdown-item">Countries</a>
                        <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                        <a href="training.html" class="dropdown-item">Training</a>
                        <a href="404.html" class="dropdown-item">404 Page</a>
                    </div>
                </div>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link" data-bs-toggle="dropdown"><span class="dropdown-toggle">Audit & Compliances</span></a>
                    <div class="dropdown-menu m-0">
                        <a href="feature.html" class="dropdown-item">Feature</a>
                        <a href="countries.html" class="dropdown-item">Countries</a>
                        <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                        <a href="training.html" class="dropdown-item">Training</a>
                        <a href="404.html" class="dropdown-item">404 Page</a>
                    </div>
                </div>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link" data-bs-toggle="dropdown"><span class="dropdown-toggle">Consultancy</span></a>
                    <div class="dropdown-menu m-0">
                        <a href="feature.html" class="dropdown-item">Feature</a>
                        <a href="countries.html" class="dropdown-item">Countries</a>
                        <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                        <a href="training.html" class="dropdown-item">Training</a>
                        <a href="404.html" class="dropdown-item">404 Page</a>
                    </div>
                </div>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link" data-bs-toggle="dropdown"><span class="dropdown-toggle">Marketing & Branding</span></a>
                    <div class="dropdown-menu m-0">
                        <a href="feature.html" class="dropdown-item">Feature</a>
                        <a href="countries.html" class="dropdown-item">Countries</a>
                        <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                        <a href="training.html" class="dropdown-item">Training</a>
                        <a href="404.html" class="dropdown-item">404 Page</a>
                    </div>
                </div>
            </div>
            {{-- <button class="btn btn-primary btn-md-square border-secondary mb-3 mb-md-3 mb-lg-0 me-3" data-bs-toggle="modal" data-bs-target="#searchModal"><i class="fas fa-search"></i></button> --}}
            {{-- <a href="" class="btn btn-primary border-secondary rounded-pill py-2 px-4 px-lg-3 mb-3 mb-md-3 mb-lg-0">Get A Quote</a> --}}
        </div>
    </nav>
</div>
<!-- Navbar & Hero End -->

<!doctype html>
<html lang="en">

<head>
  <!-- Required Meta Tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Document Title, Description, and Author -->
  <title>Wave - Bootstrap 5 One Page Template</title>
  <meta name="description" content="Wave is a Bootstrap 5 One Page Template.">
  <meta name="author" content="BootstrapBrain">

  <!-- Favicon and Touch Icons -->
  <link rel="icon" type="image/png" sizes="512x512" href="./assets/favicon/favicon-512x512.png">

  <!-- Google Fonts Files -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&family=Satisfy&display=swap" rel="stylesheet">

  <!-- CSS Files -->
  <link rel="stylesheet" href="./assets/css/wave-bsb.css">

  <!-- BSB Head -->
</head>

<body data-bs-spy="scroll" data-bs-target="#bsb-tpl-navbar" data-bs-smooth-scroll="true" tabindex="0">
  <!-- Header -->
  <header id="header" class="sticky-top bsb-tpl-header-sticky bsb-tpl-header-sticky-animationX">

    <!-- Navbar 1 - Bootstrap Brain Component -->
    <nav id="scrollspyNav" class="navbar navbar-expand-lg bsb-tpl-bg-blue bsb-navbar bsb-navbar-hover bsb-navbar-caret bsb-tpl-navbar-sticky" data-bsb-sticky-target="#header">
      <div class="container">
        <a class="navbar-brand" href="index.html">
          <img src="./assets/img/branding/wave-logo.svg" class="bsb-tpl-logo" alt="">
        </a>
        <button class="navbar-toggler border-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
          </svg>
        </button>
        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
          <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Menu</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
          </div>
          <div class="offcanvas-body">
            <ul id="bsb-tpl-navbar" class="navbar-nav justify-content-end flex-grow-1">
              <li class="nav-item">
                <a class="nav-link active" href="#scrollspyNav" aria-current="page" data-bs-dismiss="offcanvas" data-bs-target="#offcanvasNavbar">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#scrollspyServices" data-bs-dismiss="offcanvas" data-bs-target="#offcanvasNavbar">Services</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#scrollspyPortfolio" data-bs-dismiss="offcanvas" data-bs-target="#offcanvasNavbar">Portfolio</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#scrollspyAbout" data-bs-dismiss="offcanvas" data-bs-target="#offcanvasNavbar">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#scrollspyTeam" data-bs-dismiss="offcanvas" data-bs-target="#offcanvasNavbar">Team</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#scrollspyPricing" data-bs-dismiss="offcanvas" data-bs-target="#offcanvasNavbar">Pricing</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#scrollspyBlog" data-bs-dismiss="offcanvas" data-bs-target="#offcanvasNavbar">Blog</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#scrollspyContact" data-bs-dismiss="offcanvas" data-bs-target="#offcanvasNavbar">Contact</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </nav>

  </header>

  <!-- Hero 2 - Bootstrap Brain Component -->
  <section id="scrollspyHero" class="bsb-hero-2 bsb-tpl-bg-blue py-5 py-xl-8 py-xxl-10">
    <div class="container overflow-hidden">
      <div class="row gy-3 gy-lg-0 align-items-lg-center justify-content-lg-between">
        <div class="col-12 col-lg-6 order-1 order-lg-0">
          <h1 class="display-3 fw-bolder mb-3">We provide easy <br><mark class="bsb-tpl-highlight bsb-tpl-highlight-blue"><span class="bsb-tpl-font-hw display-2 text-accent fw-normal">solutions</span></mark> for startups at affordable rates.</h1>
          <p class="fs-4 mb-5">Our methods are straight, comfortable, and established to ensure evolution and acceleration.</p>
          <div class="d-grid gap-2 d-sm-flex">
            <button type="button" class="btn btn-primary bsb-btn-3xl rounded-pill">Free Consultation</button>
            <button type="button" class="btn btn-outline-primary bsb-btn-3xl rounded-pill">Buy Credits</button>
          </div>
        </div>
        <div class="col-12 col-lg-5 text-center">
          <img class="img-fluid" loading="lazy" src="./assets/img/hero/hero-home.jpg" alt="" style="-webkit-mask-image: url(./assets/img/hero/hero-blob-1.svg); mask-image: url(./assets/img/hero/hero-blob-1.svg);">
        </div>
      </div>
    </div>
  </section>

  <!-- Main -->
  <main id="main">

    <!-- Section - Services -->
    <!-- Service 3 - Bootstrap Brain Component -->
    <section id="scrollspyServices" class="py-5 py-xl-8 bsb-section-py-xxl-1">
      <div class="container mb-5 mb-md-6 mb-xl-10">
        <div class="row justify-content-md-center">
          <div class="col-12 col-md-10 col-lg-9 col-xl-8 col-xxl-7 text-center">
            <h2 class="display-3 fw-bolder mb-4">You will get the <br>perfect <mark class="bsb-tpl-highlight bsb-tpl-highlight-yellow"><span class="bsb-tpl-font-hw display-1 text-accent fw-normal">resolutions</span></mark> with our proficient services.</h2>
          </div>
        </div>
      </div>

      <div class="container overflow-hidden">
        <div class="row gy-5 gx-md-4 gy-lg-0 gx-xxl-5 justify-content-center">
          <div class="col-11 col-sm-6 col-lg-3">
            <div class="badge bsb-tpl-bg-yellow text-primary p-3 mb-4">
              <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-pie-chart" viewBox="0 0 16 16">
                <path d="M7.5 1.018a7 7 0 0 0-4.79 11.566L7.5 7.793V1.018zm1 0V7.5h6.482A7.001 7.001 0 0 0 8.5 1.018zM14.982 8.5H8.207l-4.79 4.79A7 7 0 0 0 14.982 8.5zM0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8z" />
              </svg>
            </div>
            <h4 class="mb-3">Market Research</h4>
            <p class="mb-3 text-secondary">We can help you to understand your target market and identify new opportunities for growth. We offer a variety of market research services, interviews, and focus groups.</p>
            <a href="#!" class="fw-bold text-decoration-none link-primary">
              Learn More
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right-short" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z" />
              </svg>
            </a>
          </div>
          <div class="col-11 col-sm-6 col-lg-3">
            <div class="badge bsb-tpl-bg-green text-primary p-3 mb-4">
              <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-aspect-ratio" viewBox="0 0 16 16">
                <path d="M0 3.5A1.5 1.5 0 0 1 1.5 2h13A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 12.5v-9zM1.5 3a.5.5 0 0 0-.5.5v9a.5.5 0 0 0 .5.5h13a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-13z" />
                <path d="M2 4.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1H3v2.5a.5.5 0 0 1-1 0v-3zm12 7a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1 0-1H13V8.5a.5.5 0 0 1 1 0v3z" />
              </svg>
            </div>
            <h4 class="mb-3">Web Design</h4>
            <p class="mb-3 text-secondary">We can help you to create a visually appealing and user-friendly website. We take into account your brand identity and target audience when designing your website.</p>
            <a href="#!" class="fw-bold text-decoration-none link-primary">
              Learn More
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right-short" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z" />
              </svg>
            </a>
          </div>
          <div class="col-11 col-sm-6 col-lg-3">
            <div class="badge bsb-tpl-bg-pink text-primary p-3 mb-4">
              <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-airplane-engines" viewBox="0 0 16 16">
                <path d="M8 0c-.787 0-1.292.592-1.572 1.151A4.347 4.347 0 0 0 6 3v3.691l-2 1V7.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.191l-1.17.585A1.5 1.5 0 0 0 0 10.618V12a.5.5 0 0 0 .582.493l1.631-.272.313.937a.5.5 0 0 0 .948 0l.405-1.214 2.21-.369.375 2.253-1.318 1.318A.5.5 0 0 0 5.5 16h5a.5.5 0 0 0 .354-.854l-1.318-1.318.375-2.253 2.21.369.405 1.214a.5.5 0 0 0 .948 0l.313-.937 1.63.272A.5.5 0 0 0 16 12v-1.382a1.5 1.5 0 0 0-.83-1.342L14 8.691V7.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v.191l-2-1V3c0-.568-.14-1.271-.428-1.849C9.292.591 8.787 0 8 0ZM7 3c0-.432.11-.979.322-1.401C7.542 1.159 7.787 1 8 1c.213 0 .458.158.678.599C8.889 2.02 9 2.569 9 3v4a.5.5 0 0 0 .276.447l5.448 2.724a.5.5 0 0 1 .276.447v.792l-5.418-.903a.5.5 0 0 0-.575.41l-.5 3a.5.5 0 0 0 .14.437l.646.646H6.707l.647-.646a.5.5 0 0 0 .14-.436l-.5-3a.5.5 0 0 0-.576-.411L1 11.41v-.792a.5.5 0 0 1 .276-.447l5.448-2.724A.5.5 0 0 0 7 7V3Z" />
              </svg>
            </div>
            <h4 class="mb-3">SEO Services</h4>
            <p class="mb-3 text-secondary">We can help you to improve your website's visibility in search engine results pages (SERPs). This can lead to more traffic to your website and more conversions.</p>
            <a href="#!" class="fw-bold text-decoration-none link-primary">
              Learn More
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right-short" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z" />
              </svg>
            </a>
          </div>
          <div class="col-11 col-sm-6 col-lg-3">
            <div class="badge bsb-tpl-bg-cyan text-primary p-3 mb-4">
              <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-alarm" viewBox="0 0 16 16">
                <path d="M8.5 5.5a.5.5 0 0 0-1 0v3.362l-1.429 2.38a.5.5 0 1 0 .858.515l1.5-2.5A.5.5 0 0 0 8.5 9V5.5z" />
                <path d="M6.5 0a.5.5 0 0 0 0 1H7v1.07a7.001 7.001 0 0 0-3.273 12.474l-.602.602a.5.5 0 0 0 .707.708l.746-.746A6.97 6.97 0 0 0 8 16a6.97 6.97 0 0 0 3.422-.892l.746.746a.5.5 0 0 0 .707-.708l-.601-.602A7.001 7.001 0 0 0 9 2.07V1h.5a.5.5 0 0 0 0-1h-3zm1.038 3.018a6.093 6.093 0 0 1 .924 0 6 6 0 1 1-.924 0zM0 3.5c0 .753.333 1.429.86 1.887A8.035 8.035 0 0 1 4.387 1.86 2.5 2.5 0 0 0 0 3.5zM13.5 1c-.753 0-1.429.333-1.887.86a8.035 8.035 0 0 1 3.527 3.527A2.5 2.5 0 0 0 13.5 1z" />
              </svg>
            </div>
            <h4 class="mb-3">Content Marketing</h4>
            <p class="mb-3 text-secondary">We can help you to promote your business online through a variety of digital marketing channels, including SEO, PPC, social media marketing, and email marketing.</p>
            <a href="#!" class="fw-bold text-decoration-none link-primary">
              Learn More
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right-short" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z" />
              </svg>
            </a>
          </div>
        </div>
      </div>
    </section>
  </main>

  <!-- Footer 2 - Bootstrap Brain Component -->
  <footer class="footer">

    <!-- Widgets - Bootstrap Brain Component -->
    <section class="bg-light py-4 py-md-5 py-xl-8 border-top border-light">
      <div class="container overflow-hidden">
        <div class="row gy-4 gy-lg-0 justify-content-xl-between">
          <div class="col-12 col-md-4 col-lg-3 col-xl-2">
            <div class="widget">
              <a href="#!">
                <img src="./assets/img/branding/wave-logo.svg" alt="" class="bsb-tpl-logo-footer">
              </a>
            </div>
          </div>
          <div class="col-12 col-md-4 col-lg-3 col-xl-2">
            <div class="widget">
              <h4 class="widget-title mb-4">Get in Touch</h4>
              <address class="mb-4">8014 Edith Blvd NE, Albuquerque, New York, United States</address>
              <p class="mb-1">
                <a class="link-secondary text-decoration-none" href="tel:+15057922430">(505) 792-2430</a>
              </p>
              <p class="mb-0">
                <a class="link-secondary text-decoration-none" href="mailto:demo@yourdomain.com">demo@yourdomain.com</a>
              </p>
            </div>
          </div>
          <div class="col-12 col-md-4 col-lg-3 col-xl-2">
            <div class="widget">
              <h4 class="widget-title mb-4">Learn More</h4>
              <ul class="list-unstyled">
                <li class="mb-2">
                  <a href="#!" class="link-secondary text-decoration-none">About</a>
                </li>
                <li class="mb-2">
                  <a href="#!" class="link-secondary text-decoration-none">Contact</a>
                </li>
                <li class="mb-2">
                  <a href="#!" class="link-secondary text-decoration-none">Advertise</a>
                </li>
                <li class="mb-2">
                  <a href="#!" class="link-secondary text-decoration-none">Terms of Service</a>
                </li>
                <li class="mb-0">
                  <a href="#!" class="link-secondary text-decoration-none">Privacy Policy</a>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-12 col-lg-3 col-xl-4">
            <div class="widget">
              <h4 class="widget-title mb-4">Our Newsletter</h4>
              <p class="mb-4">Subscribe to our newsletter to get our news & discounts delivered to you.</p>
              <form action="#!">
                <div class="row gy-4">
                  <div class="col-12">
                    <div class="input-group">
                      <span class="input-group-text" id="email-newsletter-addon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
                          <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z" />
                        </svg>
                      </span>
                      <input type="email" class="form-control" id="email-newsletter" value="" placeholder="Email Address" aria-label="email-newsletter" aria-describedby="email-newsletter-addon" required>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="d-grid">
                      <button class="btn btn-primary" type="submit">Subscribe</button>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Copyright - Bootstrap Brain Component -->
    <div class="bg-light py-4 py-md-5 py-xl-8 border-top border-light-subtle">
      <div class="container overflow-hidden">
        <div class="row gy-4 gy-md-0">
          <div class="col-xs-12 col-md-7 order-1 order-md-0">
            <div class="copyright text-center text-md-start">
              &copy; 2023. All Rights Reserved.
            </div>
            <div class="credits text-secondary text-center text-md-start mt-2 fs-7">
              Built by <a href="https://bootstrapbrain.com/" class="link-secondary text-decoration-none">BootstrapBrain</a> with <span class="text-primary">&#9829;</span>
            </div>
          </div>

          <div class="col-xs-12 col-md-5 order-0 order-md-1">
            <ul class="nav justify-content-center justify-content-md-end">
              <li class="nav-item">
                <a class="nav-link link-dark" href="#!">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                    <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
                  </svg>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link link-dark" href="#!">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-youtube" viewBox="0 0 16 16">
                    <path d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.007 2.007 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.007 2.007 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31.4 31.4 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.007 2.007 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A99.788 99.788 0 0 1 7.858 2h.193zM6.4 5.209v4.818l4.157-2.408L6.4 5.209z" />
                  </svg>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link link-dark" href="#!">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
                    <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z" />
                  </svg>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link link-dark" href="#!">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                    <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
                  </svg>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>

  </footer>

  <!-- Javascript Files: Vendors -->
  <script src="https://unpkg.com/jquery@3.6.1/dist/jquery.min.js"></script>
  <script src="https://unpkg.com/isotope-layout@3.0.6/dist/isotope.pkgd.min.js"></script>
  <script src="https://unpkg.com/isotope-packery@2.0.1/packery-mode.pkgd.min.js"></script>
  <script src="https://unpkg.com/imagesloaded@5.0.0/imagesloaded.pkgd.min.js"></script>
  <script src="https://unpkg.com/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

  <!-- Javascript Files: Controllers -->
  <script src="./assets/controller/project-2.js"></script>
  <script src="./assets/controller/wave-bsb.js"></script>

  <!-- BSB Body End -->
</body>

</html>

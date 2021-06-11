<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">

    <title>{{ config('app.name', 'Ugacademy') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!--Icon-->
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">
    
</head>

<body class="bg-light">
  <nav class="navbar navbar-light fixed-top bg-light shadow-sm">
    <div class="container-lg">
        <a class="navbar-brand text-danger fw-bold fs-4">Ugacademy</a>
        <div class="dropdown">
          <button class="btn btn-secondary btn-danger px-3" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-bars"></i>
          </button>
          
          <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
            <li>
                <a class="dropdown-item" href="#home">Home</a>
            </li>
            <li>
                <a class="dropdown-item" href="#about">About</a>
            </li>
            <li>
                <a class="dropdown-item" href="#services">Services</a>
            </li>
            <li>
                <a class="dropdown-item" href="#portifolio">Portifolio</a>
            </li>
            <li>
                <a class="dropdown-item" href="#testimonials">Testimonials</a>
            </li>
            <li>
                <a class="dropdown-item" href="#contact">Contact</a>
            </li>
            <li>
                <a class="dropdown-item" href="{{ route('login') }}">{{ __('Login') }}</a>
            </li>
            <li>
                <a class="dropdown-item" href="{{ route('register') }}">{{ __('Register') }}</a>
            </li>
        </ul>
        </div>
    </div>
</nav>
<!--Navbar end-->

  <!--home section start-->
  <section class="home py-3" id="home">
    <div class="container-lg">
        <div class="row min-vh-100 align-items-center align-content-center">
            <div class="col-md-6 ">
                <div class="home-img text-center">
                    <img class="img rounded-circle mw-100" src={{ url('/img/teacher.svg') }} alt="teacher.svg" />
                </div>
            </div>
            <div class="col-md-6 order-md-first">
                <div class="home-text">
                    <p class="text-muted mb-1">Hello there</p>
                    <h1 class="text-danger text-uppercase fs-1 fw-bold">This is UGACADEMY <strong
                            class="text-danger">5</strong></h1>
                    <h3 class="fs-4">Created by Kaneene Joseph Rodney</h3>
                    <p class="mt-4 text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae
                        nostrum ea ad quaerat omnis, aliquam deleniti ipsam. Quas id mollitia asperiores.</p>
                    <a class="btn btn-danger px-3 mt-3" href="login.php">Get Started </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--home section end-->

<!--about section start-->
<section class="about py-2" id="about">
  <div class="container-lg py-4">
      <div class="row justify-content-center">
          <div class="col-md-8">
              <div class="section-title text-center">
                  <h2 class="fw-bold mb-5">About</h2>
              </div>
          </div>
      </div>
      <div class="row">
          <div class="col-md-6">
              <div class="about-text">
                  <h3 class="fs-4 mb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit.</h3>
                  <p class="text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore, nisi
                      ipsum? Autem, ea perferendis natus deserunt vel atque nihil provident ratione.</p>
              </div>
              <div class="row text-center text-uppercase my-3">
                  <div class="col-sm-4">
                      <div class="fact-item">
                          <h4 class="fs-1 fw-bold">100</h4>
                          <p class="text-muted">Projects Complete</p>
                      </div>
                  </div>

                  <div class="col-sm-4">
                      <div class="fact-item">
                          <h4 class="fs-1 fw-bold">90</h4>
                          <p class="text-muted">Happy Clients</p>
                      </div>
                  </div>

                  <div class="col-sm-4">
                      <div class="fact-item">
                          <h4 class="fs-1 fw-bold">95</h4>
                          <p class="text-muted">Positive Review</p>
                      </div>
                  </div>
              </div>
              <div class="row">
                  <div class="col-lg-12 d-flex align-items-center">
                      <a href="#" class="btn px-3 btn-danger me-5">Download Contract</a>
                      <div class="social-links">
                          <a href="#" class="text-dark m-2"><i class="fab fa-facebook"></i></a>
                          <a href="#" class="text-dark m-2"><i class="fab fa-twitter"></i></a>
                          <a href="#" class="text-dark m-2"><i class="fab fa-instagram"></i></a>
                          <a href="#" class="text-dark m-2"><i class="fab fa-linkedin-in"></i></a>
                      </div>
                  </div>
              </div>
          </div>
          <div class="col-md-6 mt-5 mt-md-0">
              <div class="skill-item mb-4">
                  <h3 class="fs-6">HTML</h3>
                  <div class="progress" style="height: 5px;">
                      <div class="progress-bar bg-danger" role="progressbar" style="width: 25%;"
                          aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
              </div>

              <div class="skill-item mb-4">
                  <h3 class="fs-6">CSS</h3>
                  <div class="progress" style="height: 5px;">
                      <div class="progress-bar bg-danger" role="progressbar" style="width: 50%;"
                          aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
              </div>
              <div class="skill-item mb-4">
                  <h3 class="fs-6">Javascript</h3>
                  <div class="progress" style="height: 5px;">
                      <div class="progress-bar bg-danger" role="progressbar" style="width: 75%;"
                          aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
              </div>

              <div class="skill-item">
                  <h3 class="fs-6">Bootstrap</h3>
                  <div class="progress" style="height: 5px;">
                      <div class="progress-bar bg-danger" role="progressbar" style="width: 100%;"
                          aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
              </div>

          </div>
      </div>
  </div>

</section>
<!--about section end-->

<!--service section start-->
<section class="services" id="services">
  <div class="container-lg py-4">
      <div class="row justify-content-center">
          <div class="col-md-8">
              <div class="section-title text-center">
                  <h2 class="fw-bold mb-5">Services</h2>
              </div>
          </div>
      </div>
      <div class="row text-center">
          <div class="col-md-6 col-lg-4 mb-4">
              <div class="service-item shadow-sm p-4 rounded bg-white">
                  <div class="icon my-3 text-danger fs-2">
                      <i class="fas fa-code"></i>
                  </div>
                  <h3 class="fs-5 py-2">Web Development</h3>
                  <p class="text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
              </div>
          </div>

          <div class="col-md-6 col-lg-4 mb-4">
              <div class="service-item shadow-sm p-4 rounded bg-white">
                  <div class="icon my-3 text-danger fs-2">
                      <i class="fas fa-lightbulb"></i>
                  </div>
                  <h3 class="fs-5 py-2">Creative Design </h3>
                  <p class="text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
              </div>
          </div>

          <div class="col-md-6 col-lg-4 mb-4">
              <div class="service-item shadow-sm p-4 rounded bg-white">
                  <div class="icon my-3 text-danger fs-2">
                      <i class="fas fa-image"></i>
                  </div>
                  <h3 class="fs-5 py-2">Photoshop</h3>
                  <p class="text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
              </div>
          </div>
      </div>
  </div>
</section>
<!--service section end-->

<!--portifolio section start-->
<div class="portifolio py-5" id="portifolio">
  <div class="container-lg py-4">
      <div class="row justify-content-center">
          <div class="col-md-8">
              <div class="section-title text-center">
                  <h2 class="fw-bold mb-5">Featured Activities</h2>
              </div>
          </div>
      </div>
      <div class="row">
          <div class="col-md-6 col-lg-4">
              <div class="portifolio-item">
                  <img class="w-100 img-thumbnail" src="img/undraw/checkboxes.svg" alt="checkboxes.svg" />
                  <h3 class="text-capitalize fs-5 my-2">Check Progress</h3>
                  <p class="mb-4"><a class="text-danger text-decoration-none" href="#">Live Demo</a></p>
              </div>
          </div>
          <div class="col-md-6 col-lg-4">
              <div class="portifolio-item">
                  <img class="w-100 img-thumbnail" src="img/undraw/checkboxes.svg" alt="checkboxes.svg" />
                  <h3 class="text-capitalize fs-5 my-2">Check Progress</h3>
                  <p class="mb-4"><a class="text-danger text-decoration-none" href="#">Live Demo</a></p>
              </div>
          </div>
          <div class="col-md-6 col-lg-4">
              <div class="portifolio-item">
                  <img class="w-100 img-thumbnail" src="img/undraw/checkboxes.svg" alt="checkboxes.svg" />
                  <h3 class="text-capitalize fs-5 my-2">Check Progress</h3>
                  <p class="mb-4"><a class="text-danger text-decoration-none" href="#">Live Demo</a></p>
              </div>
          </div>
          <div class="col-md-6 col-lg-4">
              <div class="portifolio-item">
                  <img class="w-100 img-thumbnail" src="img/undraw/checkboxes.svg" alt="checkboxes.svg" />
                  <h3 class="text-capitalize fs-5 my-2">Check Progress</h3>
                  <p class="mb-4"><a class="text-danger text-decoration-none" href="#">Live Demo</a></p>
              </div>
          </div>
          <div class="col-md-6 col-lg-4">
              <div class="portifolio-item">
                  <img class="w-100 img-thumbnail" src="img/undraw/checkboxes.svg" alt="checkboxes.svg" />
                  <h3 class="text-capitalize fs-5 my-2">Check Progress</h3>
                  <p class="mb-4"><a class="text-danger text-decoration-none" href="#">Live Demo</a></p>
              </div>
          </div>
          <div class="col-md-6 col-lg-4">
              <div class="portifolio-item">
                  <img class="w-100 img-thumbnail" src="img/undraw/checkboxes.svg" alt="checkboxes.svg" />
                  <h3 class="text-capitalize fs-5 my-2">Check Progress</h3>
                  <p class="mb-4"><a class="text-danger text-decoration-none" href="#">Live Demo</a></p>
              </div>
          </div>

      </div>
  </div>
</div>
<!--portifolio section end-->
<!--freelancer available section start-->
<section class="freelancer-section py-5 bg-danger">
  <div class="container-lg py-4">
      <div class="row justify-content-center">
          <div class="col-md-8 text-center">
              <p class="text-light fs-5">I design and develop web applications !</p>
              <h2 class="text-white mb-4 fs-1">I'm Available for freelance projects</h2>
              <a href="#contact" class="btn btn-outline-light">Hire Me</a>
          </div>
      </div>
  </div>
</section>
<!--freelancer available section end-->
<!--testimonials section start-->
<section class="testimonials py-5" id="testimonials">
  <div class="container-lg py-4">
      <div class="row justify-content-center">
          <div class="col-md-8">
              <div class="section-title text-center">
                  <h2 class="fw-bold mb-5">Testimonials</h2>
              </div>
          </div>
      </div>

      <div class="row justify-content-center">
          <div class="col-lg-8 col-xl-7">
              <div id="carousel1" class="carousel slide" data-bs-ride="carousel">
                  <ol class="carousel-indicators">
                      <li data-bs-ride="#carousel1" data-bs-slide-to="0" class="active bg-danger"></li>
                      <li class="bg-danger" data-bs-ride="#carousel1" data-bs-slide-to="1"></li>
                      <li class="bg-danger" data-bs-ride="#carousel1" data-bs-slide-to="2"></li>
                  </ol>
                  <div class="carousel-inner p1">
                      <!--testi item start-->
                      <div class="testi-item carousel-item active bg-white shadow-sm rounded p-4 mb-5">
                          <div class="testi-author-info d-flex align-items-center">
                              <img src="img/profile.jpg" alt="profile.jpg" class="rounded-circle" />
                              <div class="author ms-3">
                                  <h3 class="fs-6 mb-1">Kaneene Joseph</h3>
                                  <p class="text-muted m-0">SEO Manager</p>
                              </div>
                          </div>
                          <p class="text-muted mt-3">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ea
                              quia sapiente quod sequi cupiditate officia, reiciendis voluptatem unde dignissimos.
                          </p>
                          <div class="rating text-danger">
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                          </div>
                      </div>
                      <!--testi item end-->
                      <!--testi item start-->
                      <div class="testi-item carousel-item bg-white shadow-sm rounded p-4 mb-5">
                          <div class="testi-author-info d-flex align-items-center">
                              <img src="img/profile.jpg" alt="profile.jpg" class="rounded-circle" />
                              <div class="author ms-3">
                                  <h3 class="fs-6 mb-1">Kiyingi Joseph</h3>
                                  <p class="text-muted m-0">SEO Manager</p>
                              </div>
                          </div>
                          <p class="text-muted mt-3">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ea
                              quia sapiente quod sequi cupiditate officia, reiciendis voluptatem unde dignissimos.
                          </p>
                          <div class="rating text-danger">
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                          </div>
                      </div>
                      <!--testi item end-->
                      <!--testi item start-->
                      <div class="testi-item carousel-item bg-white shadow-sm rounded p-4 mb-5">
                          <div class="testi-author-info d-flex align-items-center">
                              <img src={{ url('/img/teacher.svg') }} alt="profile.jpg" class="rounded-circle" />
                              <div class="author ms-3">
                                  <h3 class="fs-6 m-1">Kane Joseph</h3>
                                  <p class="text-muted m-0">SEO Manager</p>
                              </div>
                          </div>
                          <p class="text-muted mt-3">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ea
                              quia sapiente quod sequi cupiditate officia, reiciendis voluptatem unde dignissimos.
                          </p>
                          <div class="rating text-danger">
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                          </div>
                      </div>
                      <!--testi item end-->
                  </div>
              </div>
          </div>
      </div>
  </div>
</section>
<!--testimonials section end-->

<!--contact section start-->
<section class="contact py-5" id="contact">
  <div class="container-lg py-4">
      <div class="row justify-content-center">
          <div class="col-md-8">
              <div class="section-title text-center">
                  <h2 class="fw-bold mb-5">Contact Us</h2>
              </div>
          </div>
      </div>
      <div class="row">
          <div class="col-md-5">
              <div class="contact-item d-flex mb-3">
                  <div class="icon">
                      <i class="fas fa-envelope fs-4 text-danger"></i>
                  </div>
                  <div class="text ms-3">
                      <h3 class="fs-5">Email</h3>
                      <p class="text-muted">kaneenejoseph@gmail.com</p>
                  </div>
              </div>

              <div class="contact-item d-flex mb-3">
                  <div class="icon">
                      <i class="fas fa-phone fs-4 text-danger"></i>
                  </div>
                  <div class="text ms-3">
                      <h3 class="fs-5">Phone</h3>
                      <p class="text-muted">+256 703 102 219</p>
                  </div>
              </div>

              <div class="contact-item d-flex mb-3">
                  <div class="icon">
                      <i class="fas fa-map-marker-alt fs-4 text-danger"></i>
                  </div>
                  <div class="text ms-3">
                      <h3 class="fs-5">Visit Office</h3>
                      <p class="text-muted">256 Main Street, Jinja</p>
                  </div>
              </div>


          </div>
          <div class="col-md-7">
              <div class="contact-form">
                  <form method="POST" action="">
                      <div class="row">
                          <div class="col-md-6 mb-4">
                              <input type="text" placeholder="Your Name"
                                  class="form-control form-control-lg fs-6 border-0 shadow-sm" />
                          </div>
                          <div class="col-md-6 mb-4">
                              <input type="text" placeholder="Your Email"
                                  class="form-control form-control-lg fs-6 border-0 shadow-sm" />
                          </div>
                      </div>
                      <div class="row">
                          <div class="col-lg-12 mb-4">
                              <input type="text" placeholder="Subject"
                                  class="form-control form-control-lg fs-6 border-0 shadow-sm" />
                          </div>
                      </div>

                      <div class="row">
                          <div class="col-lg-12 mb-4">
                              <textarea type="text" rows="5" placeholder="Your Message"
                                  class="form-control form-control-lg fs-6 border-0 shadow-sm"></textarea>
                          </div>
                      </div>

                      <div class="row">
                          <div class="col-lg-12">
                              <button type="submit" class="btn btn-danger px-3" type="text">Send Message</button>
                          </div>
                      </div>
                  </form>
              </div>
          </div>
      </div>
  </div>
</section>
<!--contact section end-->

<!--footer start-->
<footer class="footer bg-dark border-top py-4">
  <div class="container-lg">
      <div class="row">
          <div class="col-md-3">
              <h6 class="text-white">About Ugacademy</h6>

              <p><a href="#" class="m-0 text-center text-muted cus-link">Features</a></p>
              <p><a href="#" class="m-0 text-center text-muted cus-link">Templates</a></p>
              <p><a href="#" class="m-0 text-center text-muted cus-link">Integrations</a></p>
              <p><a href="#" class="m-0 text-center text-muted cus-link">Team</a></p>
          </div>

          <div class="col-md-3">
              <h6 class="text-white">Help & Resources</h6>

              <p><a href="#" class="m-0 text-center text-muted cus-link">Contact</a></p>
              <p><a href="#" class="m-0 text-center text-muted cus-link">Help Center</a></p>
              <p><a href="#" class="m-0 text-center text-muted cus-link">Blog</a></p>
          </div>

          <div class="col-md-3">
              <h6 class="text-white">Commercial</h6>

              <p><a href="#" class="m-0 text-center text-muted cus-link">Why Ugacademy</a></p>
              <p><a href="#" class="m-0 text-center text-muted cus-link">Pricing</a></p>
              <p><a href="#" class="m-0 text-center text-muted cus-link">Custom Template</a></p>
              <h6 class="fw-5 text-white">Stay Tuned!</h6>
              <div class="social-links">
                          <a href="#" class="text-danger me-2"><i class="fab fa-facebook"></i></a>
                          <a href="#" class="text-danger me-2"><i class="fab fa-twitter"></i></a>
                          <a href="#" class="text-danger me-2"><i class="fab fa-google-plus"></i></a>
                          <a href="#" class="text-danger me-2"><i class="fab fa-pinterest"></i></a>
                      </div>
          </div>

          <div class="col-md-3">
              <h6 class="text-white">Try Ugacademy for Free</h6>

              <p><a href="#" class="m-0 text-center text-muted cus-link">Start a 14 day Free Trial on any of our paid</a></p>
              <p><a href="#" class="m-0 text-center text-muted cus-link">plans. No credit card required.</a></p>
              <button class="btn btn-danger">GET STARTED</button>
          </div>
          <div class=" col-lg-12 mt-5">
              <p class="m-0 text-center text-light">&copy;2021 Ugacademy All rights reserved. Terms of Use and Privacy Policy </p>
          </div>
      </div>
  </div>
</footer>
<!--footer end-->


  
</body>
</html>
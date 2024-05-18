<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-learning website</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ url('frontend/css/style.css') }}">

    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>




    <style>
      /* Style the search bar (you can customize this as needed) */
      .search-bar {
          display: none; /* Initially hide the search bar */
      }
  </style>


  </head>
<body>
          <!-- container-fluid -->
    <div class="container-fluid">
          <!-- navigation bar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light navi">
  <a class="navbar-brand" href="#">
    <div class="icon-logo">

    <img src="{{url('frontend/images/image.jpg')}}" height="80" ></a>

</div>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="{{url('home')}}">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{url('contact')}}">Contact Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{url('about')}}">About</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Resources
        </a>
        <!-- dropdown menu -->
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="{{url('course')}}">Course</a>
            <a class="dropdown-item" href="article.html">Article</a>
            <a class="dropdown-item" href="#">System</a>
            <div class="dropdown-divider"></div>
            <div class="dropdown">
              <a class="dropdown-item dropdown-toggle" href="#" id="navbarDropdownFeatures" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Features
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdownFeatures">
                  <a class="dropdown-item" href="#">Feature 1</a>
                  <a class="dropdown-item" href="#">Feature 2</a>
                  <a class="dropdown-item" href="#">Feature 3</a>
                  <!-- Add more features as needed -->
              </div>
          </div>


        </div>
    </li>
      <!-- <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li> -->
    </ul>
    <form class="form-inline my-2 my-lg-0" id="searchForm" style="display: none;">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <!-- <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button> -->
  </form>

  <!-- Search icon -->
  <i class="bi bi-search clickable" id="searchIcon"></i>
  <form class="form-inline my-2 my-lg-0">

    <!-- <button class="btn btn-outline-success my-2 my-sm-0" id="login" type="submit">
      <a href="login.html">Login</a></button> -->
      <a href="{{url('login')}}" class="btn btn-primary my-2 my-sm-0" id="login" type="submit">Login</a>
      <a href="{{url('signup')}}" class="btn btn-success my-2 my-sm-0" id="login" type="submit">Create Account</a>

    <!-- <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Create Account</button> -->

  </form>

  </div>
</nav>
</div>
        <div class="modal-header">
          <marquee direction="left"
          onmouseover=this.stop()
          onmouseout=this.start()
          scrollamount="10">
          <header>

            <h1 class="title-text"><em>Enrich Your Mind: Education at Your Fingertips</em></h1>

          </header>
        </marquee>
        </div>
        <div class="container-fluid">
        <div class="bgimage">
          <p class="top-head text">The Best Online Learning Platform</p>
        </div>
        </div>
        <!-- subdivision -->
        <section class="py-5">

          <div>
            <h2 class="text-center-1">Our Course</h2>
          </div>

          <div class="container-fluid">

            <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
              <ol class="carousel-indicators">
                  <li data-target="#carouselExampleSlidesOnly" data-slide-to="0" class="active"></li>
                  <li data-target="#carouselExampleSlidesOnly" data-slide-to="1"></li>
                  <li data-target="#carouselExampleSlidesOnly" data-slide-to="2"></li>
                  <li data-target="#carouselExampleSlidesOnly" data-slide-to="0"></li>



              </ol>
              <div class="carousel-inner">
                  <div class="carousel-item active">
                      <div class="row">
                          <div class="col-lg-3">
                              <div class="single-box">
                                  <div class="card course-card">
                                      <div class="imag-area">
                                          <img src="{{url('frontend/images/still-life-851328_1280.jpg')}}" alt="" class="img-fluid rounded-top">
                                      </div>
                                      <div class="card-body">
                                          <b>Website</b>
                                          <p class="card-text">
                                              <b>Duration</b>
                                              <b>Price</b>
                                          </p>
                                          <a href="{{url('course')}}"><button class="btn btn-outline-success btn-block">Enroll now</button></a>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="col-lg-3">
                              <div class="card course-card">
                                  <div>
                                      <img src="{{url('frontend/images/still-life-851328_1280.jpg')}}" alt="" class="img-fluid rounded-top">
                                  </div>
                                  <div class="card-body">
                                      <b>Website</b>
                                      <p class="card-text">
                                          <b>Duration</b>
                                          <b>Price</b>
                                      </p>
                                      <a href="{{url('course')}}"><button class="btn btn-outline-success btn-block">Enroll now</button></a>
                                  </div>
                              </div>
                          </div>

                          <div class="col-lg-3">
                            <div class="card course-card">
                                <div>
                                    <img src="{{url('frontend/images/still-life-851328_1280.jpg')}}" alt="" class="img-fluid rounded-top">
                                </div>
                                <div class="card-body">
                                    <b>Website</b>
                                    <p class="card-text">
                                        <b>Duration</b>
                                        <b>Price</b>
                                    </p>
                                    <a href="{{url('course')}}"><button class="btn btn-outline-success btn-block">Enroll now</button></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                          <div class="card course-card">
                              <div>
                                  <img src="{{url('frontend/images/still-life-851328_1280.jpg')}}" alt="" class="img-fluid rounded-top">
                              </div>
                              <div class="card-body">
                                  <b>Website</b>
                                  <p class="card-text">
                                      <b>Duration</b>
                                      <b>Price</b>
                                  </p>
                                  <a href="{{url('course')}}"><button class="btn btn-outline-success btn-block">Enroll now</button></a>
                              </div>
                          </div>
                      </div>
                      {{--  <div class="col-lg-2">
                        <div class="card course-card">
                            <div>
                                <img src="{{url('frontend/images/still-life-851328_1280.jpg')}}" alt="" class="img-fluid rounded-top">
                            </div>
                            <div class="card-body">
                                <b>Website</b>
                                <p class="card-text">
                                    <b>Duration</b>
                                    <b>Price</b>
                                </p>
                                <a href="{{url('course')}}"><button class="btn btn-outline-success btn-block">Enroll now</button></a>
                            </div>
                        </div>
                    </div>
                          <div class="col-lg-2">
                              <div class="card course-card">
                                  <div>
                                      <img src="{{url('frontend/images/still-life-851328_1280.jpg')}}" alt="" class="img-fluid rounded-top">
                                  </div>
                                  <div class="card-body">
                                      <b>Website</b>
                                      <p class="card-text">
                                          <b>Duration</b>
                                          <b>Price</b>
                                      </p>
                                      <a href="{{url('course')}}"><button class="btn btn-outline-success btn-block">Enroll now</button></a>
                                  </div>
                              </div>
                          </div>  --}}
                      </div>
                  </div>

                  <div class="carousel-item">
                      <div class="row">
                          <div class="col-lg-3">
                              <div class="card course-card">
                                  <div>
                                      <img src="{{url('frontend/images/still-life-851328_1280.jpg')}}" alt="" class="img-fluid rounded-top">
                                  </div>
                                  <div class="card-body">
                                      <b>Website</b>
                                      <p class="card-text">
                                          <b>Duration</b>
                                          <b>Price</b>
                                      </p>
                                      <a href="{{url('course')}}"><button class="btn btn-outline-success btn-block">Enroll now</button></a>
                                  </div>
                              </div>
                          </div>

                          <div class="col-lg-3">
                              <div class="card course-card">
                                  <div>
                                      <img src="{{url('frontend/images/na.jpg')}}" alt="" class="img-fluid rounded-top">
                                  </div>
                                  <div class="card-body">
                                      <b>Website</b>
                                      <p class="card-text">
                                          <b>Duration</b>
                                          <b>Price</b>
                                      </p>
                                      <a href="{{url('course')}}"><button class="btn btn-outline-success btn-block">Enroll now</button></a>
                                  </div>
                              </div>
                          </div>
                          <div class="col-lg-3">
                            <div class="card course-card">
                                <div>
                                    <img src="{{url('frontend/images/na.jpg')}}" alt="" class="img-fluid rounded-top">
                                </div>
                                <div class="card-body">
                                    <b>Website</b>
                                    <p class="card-text">
                                        <b>Duration</b>
                                        <b>Price</b>
                                    </p>
                                    <a href="{{url('course')}}"><button class="btn btn-outline-success btn-block">Enroll now</button></a>
                                </div>
                            </div>
                        </div>
                          <div class="col-lg-3">
                            <div class="card course-card">
                                <div>
                                    <img src="{{url('frontend/images/na.jpg')}}" alt="" class="img-fluid rounded-top">
                                </div>
                                <div class="card-body">
                                    <b>Website</b>
                                    <p class="card-text">
                                        <b>Duration</b>
                                        <b>Price</b>
                                    </p>
                                    <a href="{{url('course')}}"><button class="btn btn-outline-success btn-block">Enroll now</button></a>
                                </div>
                            </div>
                        </div>
                        {{--  <div class="col-lg-2">
                          <div class="card course-card">
                              <div>
                                  <img src="{{url('frontend/images/na.jpg')}}" alt="" class="img-fluid rounded-top">
                              </div>
                              <div class="card-body">
                                  <b>Website</b>
                                  <p class="card-text">
                                      <b>Duration</b>
                                      <b>Price</b>
                                  </p>
                                  <a href="{{url('course')}}"><button class="btn btn-outline-success btn-block">Enroll now</button></a>
                              </div>
                          </div>
                      </div>

                          <div class="col-lg-2">
                              <div class="card course-card">
                                  <div>
                                      <img src="{{url('frontend/images/li.jpg')}}" alt="" class="img-fluid rounded-top">
                                  </div>
                                  <div class="card-body">
                                      <b>Website</b>
                                      <p class="card-text">
                                          <b>Duration</b>
                                          <b>Price</b>
                                      </p>
                                      <a href="{{url('course')}}"><button class="btn btn-outline-success btn-block">Enroll now</button></a>
                                  </div>
                              </div>
                          </div>  --}}
                      </div>
                  </div>
              </div>
              <a class="carousel-control-prev" href="#carouselExampleSlidesOnly" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleSlidesOnly" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
              </a>

          </div>




        </section>
        <!-- content creator -->
        <h3 class="text-center-1">Content Heading</h3>
        <div class="main-div">

          <div class="main1">

            <h2 class="text-center t1">Content 1</h2>
              <p class="para1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit quidem officia quibusdam ab repellendus minus itaque odit atque totam placeat facere vel rem, nisi quam.</p>
              <a href="content1.html" class="btn btn-secondary my-2 my-sm-0 btn1" id="login" type="submit">View More</a>
  </div>


          <div class="main2">
            <h2 class="text-center t1">Content 2</h2>
            <p class="para1">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quibusdam adipisci amet labore quod laudantium animi impedit molestiae quo deserunt, aspernatur vero asperiores </p>
            <a href="content2.html" class="btn btn-secondary my-2 my-sm-0 btn1" id="login" type="submit">View More</a>
          </div>
          <div class="main3">
            <h2 class="text-center t1">Content 3</h2>
            <p class="para1">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quibusdam adipisci amet labore quod laudantium animi impedit molestiae quo deserunt, aspernatur vero asperiores </p>
            <a href="content3.html" class="btn btn-secondary my-2 my-sm-0 btn1" id="login" type="submit">View More</a>
          </div>




        </div>



        <!-- Slider -->


        <h3 class="text-center-1">Slider</h3>
        <div class="container">
          <div class="row">
              <div class="col-md-12">
                  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                      <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                      </ol>
                      <div class="carousel-inner">
                        <div class="carousel-item active">
                          <img class="d-block w-100" src="https://images.unsplash.com/photo-1517694712202-14dd9538aa97?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D
                          " alt="First slide">
                        </div>
                        <div class="carousel-item">
                          <img class="d-block w-100" src="https://images.unsplash.com/photo-1502945015378-0e284ca1a5be?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D
                          " alt="Second slide">
                        </div>
                        <div class="carousel-item">
                          <img class="d-block w-100" src="https://images.unsplash.com/photo-1584697964358-3e14ca57658b?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D
                          " alt="Third slide">
                        </div>
                        <div class="carousel-item">
                          <img class="d-block w-100" src="https://images.unsplash.com/photo-1522204523234-8729aa6e3d5f?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D
                          " alt="Fourth slide">
                        </div>
                      </div>
                      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                      </a>
                      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                      </a>
                    </div>
                    </div>
                    </div>
              </div>

              <!-- Team Start -->
    <div class="container-xxl py-5">
      <div class="container">
          <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
              <h6 class="section-title bg-white text-center text-primary px-3">Instructors</h6>
              <h1 class="mb-5">Expert Instructors</h1>
          </div>

          <div class="row g-4">
              <div class="col-lg-3 col-md-6 wow fadeInUp expert" data-wow-delay="0.1s">
                  <div class="team-item bg-light">
                      <div class="overflow-hidden">
                          <img class="img-fluid" src="{{url('frontend/images/bapi_image.jpeg')}}" alt="">
                      </div>
                      <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                          <div class="bg-light d-flex justify-content-center pt-2 px-1">
                              <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="bi bi-facebook"></i></a>
                              <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="bi bi-twitter"></i></a>
                              <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="bi bi-instagram"></i></a>
                          </div>
                      </div>
                      <div class="text-center p-4">
                          <h5 class="mb-0">Bapi Shaikh</h5>
                          <small>Developer</small>
                      </div>
                  </div>
              </div>
              <div class="col-lg-3 col-md-6 wow fadeInUp expert" data-wow-delay="0.3s">
                  <div class="team-item bg-light">
                      <div class="overflow-hidden">
                          <img class="img-fluid" src="{{url('frontend/images/library-5219747_1280.jpg')}}" alt="">
                      </div>
                      <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                          <div class="bg-light d-flex justify-content-center pt-2 px-1">
                            <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="bi bi-facebook"></i></a>
                            <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="bi bi-twitter"></i></a>
                            <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="bi bi-instagram"></i></a>
                          </div>
                      </div>
                      <div class="text-center p-4">
                          <h5 class="mb-0">Instructor Name</h5>
                          <small>Designation</small>
                      </div>
                  </div>
              </div>
              <div class="col-lg-3 col-md-6 wow fadeInUp expert" data-wow-delay="0.5s">
                  <div class="team-item bg-light">
                      <div class="overflow-hidden">
                          <img class="img-fluid" src="{{url('frontend/images/na.jpg')}}" alt="">
                      </div>
                      <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                          <div class="bg-light d-flex justify-content-center pt-2 px-1">
                              <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="bi bi-facebook"></i></a>
                              <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="bi bi-twitter"></i></a>
                              <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="bi bi-instagram"></i></a>
                          </div>
                      </div>
                      <div class="text-center p-4">
                          <h5 class="mb-0">Souparna Biswas</h5>
                          <small>Designer</small>
                      </div>
                  </div>
              </div>

              <div class="col-lg-3 col-md-6 wow fadeInUp expert" data-wow-delay="0.7s">
                  <div class="team-item bg-light">
                      <div class="overflow-hidden">
                          <img class="img-fluid" src="{{url('frontend/images/images.jpg')}}" alt="">
                      </div>
                      <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                          <div class="bg-light d-flex justify-content-center pt-2 px-1">
                              <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="bi bi-facebook"></i></a>
                              <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="bi bi-twitter"></i></a>
                              <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="bi bi-instagram"></i></a>
                          </div>
                      </div>
                      <div class="text-center p-4">
                          <h5 class="mb-0">Instructor Name</h5>
                          <small>Designation</small>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <!-- Team End -->

        <!-- contextimage -->


    <!-- Remove the container if you want to extend the Footer to full width. -->
    <div class="container-fluid">

      <!-- Footer -->
      <footer class="text-center text-lg-start text-white" style="background-color: #b8acac">
        <div class="container p-4">
          <section class="">
            <div class="row">
              <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mt-3">
                <h6 class="text-uppercase mb-4 font-weight-bold">Learning Academy</h6>
                <p>
                  "Empowering Minds" suggests that the academy aims to equip students with the knowledge, skills, and confidence to navigate the complexities of the world.
              </div>

              <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
                <h6 class="text-uppercase mb-4 font-weight-bold">Products</h6>
                <p>
                  <a href="#" class="text-white">MDBootstrap</a>
                </p>
                <p>
                  <a href="#" class="text-white">MDWordPress</a>
                </p>
                <p>
                  <a href="#" class="text-white">BrandFlow</a>
                </p>
                <p>
                  <a href="#" class="text-white">Bootstrap Angular</a>
                </p>
              </div>

              <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
                <h6 class="text-uppercase mb-4 font-weight-bold">Useful Links</h6>
                <p>
                  <a href="#" class="text-white">Your Account</a>
                </p>
                <p>
                  <a href="#" class="text-white">Become an Affiliate</a>
                </p>
                <p>
                  <a href="#" class="text-white">Shipping Rates</a>
                </p>
                <p>
                  <a href="#" class="text-white">Help & Support</a>
                </p>
              </div>

              <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
                <h6 class="text-uppercase mb-4 font-weight-bold">Contact</h6>
                <p><i class="bi bi-house-door mr-3"></i> Kolkata, 700004, West Bengal</p>
                <p><i class="bi bi-envelope mr-3"></i> abc@gmail.com</p>
                <p><i class="bi bi-phone mr-3"></i> +1234567890</p>
                <p><i class="bi bi-printer mr-3"></i> +1234567890</p>
              </div>
            </div>
          </section>

          <hr class="my-3">

          <section class="p-3">
            <div class="row d-flex align-items-center">
              <div class="col-md-7 col-lg-8 text-center text-md-start">
                <div class="p-3">
                  © 2024 Copyright:
                  <a class="text-white" href="https://www.youtube.com/">Youtube.com</a>
                </div>
              </div>
              <div class="col-md-5 col-lg-4 ml-lg-0 text-center text-md-end">
                <a href="https://www.facebook.com/" class="btn btn-outline-primary btn-floating m-1" role="button">
                  <i class="bi bi-facebook"></i>
                </a>
                <a href="#" class="btn btn-outline-info btn-floating m-1" role="button">
                  <i class="bi bi-twitter"></i>
                </a>
                <a href="#" class="btn btn-outline-danger btn-floating m-1" role="button">
                  <i class="bi bi-google"></i>
                </a>
                <a href="#" class="btn btn-outline-success btn-floating m-1" role="button">
                  <i class="bi bi-instagram"></i>
                </a>
              </div>
            </div>
          </section>
        </div>
      </footer>

      <!-- Footer -->
    </div>
    <!-- End of .container -->


    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="{{url('frontend/js/search.js')}}">

</script>




</body>
</html>

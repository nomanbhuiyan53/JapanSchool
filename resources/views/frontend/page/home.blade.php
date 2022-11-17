<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
    <link rel="stylesheet" href="{{ asset('assets/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/home.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body>
    
    <div class="container-fluid maincontainer">
        <!-- slider  -->
        

          <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
           
            <div class="carousel-inner">
              <div class="carousel-item active" data-bs-interval="5000">
                <img src="{{ asset('assets/image/homebg.jpg') }}" class="d-block w-100 slidImage" alt="...">
                <div class="carousel-caption d-none d-md-block slidercaption">
                    <p class="slidTitle">NTERNSHIP AND EXCHANGE <br> PROGRAMS <br> ABROAD</p>
                </div>
              </div>
              <div class="carousel-item" data-bs-interval="2000">
                <img src="{{ asset('assets/image/bgtwo.jpeg') }}" class="d-block w-100 slidImage" alt="...">
                <div class="carousel-caption d-none d-md-block slidercaption">
                    <p class="slidTitle">NTERNSHIP AND EXCHANGE <br> PROGRAMS <br> ABROAD</p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="{{ asset('assets/image/bgthree.jpeg') }}" class="d-block w-100 slidImage" alt="...">
                <div class="carousel-caption d-none d-md-block slidercaption">
                    <p class="slidTitle">NTERNSHIP AND EXCHANGE <br> PROGRAMS <br> ABROAD</p>
                </div>
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>

           <!-- nav bar start -->
         <nav class="navbar homeNav navbar-expand-lg ">
            <div class="container-fluid">
              <a class="navbar-brand" href="#"><img class="logo" src="image/logo.png" alt=""></a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class=" collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="cmhover nav-link leftmarg" href="#">PROGRAMS</a>
                    <div class="dropmenu">
                        <ul>
                            <li><a href="{{ route('program.one') }}">STUDY, EARN AND LIVE IN JAPAN PROGRAM</a></li>
                            <li><a href="{{ route('program.two') }}">STUDENT INTERNSHIP ABROAD PROGRAM - JAPAN</a></li>
                            <li><a href="{{ route('program.three') }}">FACULTY IMMERSION PROGRAM</a></li>
                           
                        </ul>
                    </div>
                  </li>
                  <li class="nav-item ">
                    <a class="nav-link leftmarg" href="{{ route('test.modul') }}">TESTIMONIAL</a>
                  <li class="nav-item">
                  <li class="nav-item ">
                    <a class="abouthover leftmarg nav-link" href="">ABOUT</a>
                    <div class="abouth">
                      <ul>
                          <li><a href="">about one</a></li>
                          <li><a href="">about two</a></li>
                          <li><a href="">about three</a></li>
                          
                      </ul>
                  </div>
                  <li class="nav-item">
                    <a href="" class="btn leftmarg btn-warning">CONTACT</a>
                  </li>
                </ul>
                
              </div>
            </div>
          </nav>

          <!-- main contain -->
          <div class="container mainsection">
            <!-- headline -->
            <div class="row ">
                <div class="col-md-2"></div>
                <div class="col-md-8 text-center ">
                    <h3 style="font-weight: 400;">BRYDGE (Better Road for Youth Development and Gainful Employment) is a company that provides outbound international study, internship training and cross-cultural skill enhancement opportunities for students and young professionals.</h3>

                    <br><br>
                    <a href="header.html" class="contactBtn"> Contact Us </a>
                    <br><br><br>
                    <hr>
                </div>
                
            </div>

            <!-- learn more card view  -->
            <div class="row cardRow">
                <div class="col-md-2"></div>
                <div class="col-md-8">
                    <div class="row ">
                        <div class="col-md-6">
                            <div class="card border-0" style="width: 100%;">
                                <img src="{{ asset('assets/image/headerbg2.jpeg') }}" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h3>Study, Earn and Live in Japan Program</h3>
                                  <p class="card-text">A 2-year program that focuses on studying the Nihongo language in Japan while having the privilege to earn money at the same time.</p>
                                  <br>
                                  <a href="{{ route('program.one') }}" class="contactBtn"> Learn More </a>
                                </div>
                              </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card border-0" style="width: 100%;">
                                <img src="{{ asset('assets/image/bgtwo.jpeg') }}" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h3>Student Internship Abroad Program (SIAP) – Japan</h3>
                                  <p class="card-text">A 3-12 month internship program for 3rd or 4th year college students, in world-renowned establishments in Japan. </p>
                                  <br><a href="{{ route('program.two') }}" class="contactBtn"> Learn More </a>
                                </div>
                              </div>
                        </div>
                    
                        <div class="col-md-6 mt-3">
                            <div class="card border-0" style="width: 100%;">
                                <img src="{{ asset('assets/image/stdbg.jpeg') }}" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h3>Faculty Immersion Program</h3>
                                  <p class="card-text">Upgrade faculty qualification, improving delivery of training and classroom teaching practices, through industry visit and immersion in host establishments abroad</p>
                                  <br><a href="{{ route('program.three') }}" class="contactBtn"> Learn More </a>
                                </div>
                              </div>
                        </div>
                    </div>
                    
                </div>

            </div>

          </div>
    </div>

    <div class="container-fluid mt-5 footer">
       <div class="row ">
        <div class="col text-center">
            <br>
            <h4><a href="">Follow us on Facebook to get the latest updates
            </a></h4><br>
            <span class="socal"><i class="bi bi-envelope"></i> <i class="bi bi-facebook"></i></span><br>
            <p>© BRYDGE Philippines Inc., . Designed by Designstaq.</p>
        </div>
       </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
  <script>
    $('.cmhover').mouseenter(function () { 
        $('.dropmenu').slideDown();
        
    });
    $('.dropmenu').mouseleave(function () { 
        $('.dropmenu').css({'display':'none'});
    });


  // about hover effect

  $('.abouthover').mouseenter(function () { 
        $('.abouth').slideDown();
        
    });
    $('.abouth').mouseleave(function () { 
        $('.abouth').css({'display':'none'});
    });

    
  </script>
</html>

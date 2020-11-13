<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"/>
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <link rel="stylesheet" href="{{ asset('css/gradientify.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animatedbg.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <script src="{{ asset('js/modernizr.js') }}"></script>


    <title>Sway Dev | We Do Web And Software</title>
  </head>
  <body>
    <div class="container-fluid header gradientbg">
      <br>
        <nav data-aos="fade-down" class="navbar navbar-light bg-light navbar-expand-lg">
            <a class="navbar-brand" href="{{ url('/') }}">
              <img src="{{ asset('imgs/sd_logo.png') }}" width="100" class="d-inline-block align-top" alt="">
            </a>
  
                <br><br>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>
  
            <div class="collapse navbar-collapse" id="navbarNav">
  
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Get A Website</a>
                    </li>
                </ul>
  
            </div>
        </nav>

        <div class="row header-content container">

            <div class="col-md-6 header-headers">
              <h2 class="heading">YOUR <span class="font-blue">ONLINE</span> PRESENCE MATTERS</h2>
              <br>
              <p class="subheading">We put your name on the web with elegant, professional and dynamic websites.</p>
              <br>
        
              <div class="row container">
                <div class="col-xs-6 button-div">
                  <a href="{{ url('/getwebsite') }}" class="btn btn-primary bttn-primary">Order A Website</a>
                </div>
                <br>
                <br>
                <div class="col-xs-6 button-div button-contact ">
                  <a href="tel:0623629473" class="btn btn-primary bttn-secondary"><i class="fas fa-phone"></i></a>
                </div>
                <br>
                <div class="col-xs-6 button-div button-contact ">
                  <a href="mailto:tshego@swaydev.co.za" class="btn btn-danger bttn-secondary"><i class="fas fa-envelope"></i></a>
                </div>
              </div>
              <hr style="background-color: red; max-width: 200px;">
              <h6>Register your domain</h6>
              <br>
              {!! Form::open(['action' => 'IndexController@searchDomain', 'method' => 'post']) !!}
                <div class="input-group mb-3 input-group-lg">
                    {!! Form::text('domain', '', ['class' => 'awesome form-control', 'placeholder' => 'www.yourdomain.co.za', 'style' => 'height: 60px;', 'aria-describedby' => 'basic-addon2']) !!}
                  <div class="input-group-append">
                    <span class="input-group-text" id="basic-addon2">{{ Form::submit('Register', ['class' => 'btn bttn-primary']) }}</span>
                  </div>
                </div>
              {!! Form::close() !!}
              <p>Powered by KaGantsa (Pty) Ltd</p>
              <br>
        
            </div>
        
            
        
            <div id="carousel-example-multi" class="carousel slide carousel-multi-item v-2 col-sm-6 header-projects" data-ride="carousel">
            
            
              <div class="carousel-inner v-2" role="listbox">
                <h3>Our Work</h3>
                {{-- <hr class="section-hr"> --}}
                <br>
            
                <div class="carousel-item active">
                  <div class="col-12 col-md-4 example-project">
                    <div class="container">
                      <img class="img-fluid" src="{{ asset('imgs/kasie.png') }}">
                      <br><br>
                      <h5>Kasie FM</h5>
                      <a href="https://www.kasiefm.co.za">www.kasiefm.co.za</a>
                    </div>
                  </div>
                </div>
        
                <div class="carousel-item">
                    <div class="col-12 col-md-4 example-project">
                        <div class="container">
                          <img class="img-fluid" src="{{ asset('imgs/valrey.png') }}">
                          <br><br>
                          <h5>Valrey Nkoana Personal Website</h5>
                          <a href="https://www.valreynkoana.co.za">www.valreynkoana.co.za</a>
                        </div>
                    </div>
                </div>
                
                <div class="carousel-item">
                    <div class="col-12 col-md-4 example-project">
                        <div class="container">
                          <img class="img-fluid" src="{{ asset('imgs/regata.png') }}">
                          <br><br>
                          <h5>Regatammogo</h5>
                          <a href="https://www.regatammogo.co.za">www.regatammogo.co.za</a>
                        </div>
                    </div>
                </div>
        
              </div>
        
              <br><br>
              
              <!--Controls-->
              <div class="btn-group" role="group" aria-label="Basic example" style="margin:auto; width: 140px;">
                <a style="margin:auto;" class="btn btn-primary custom-control" href="#carousel-example-multi" data-slide="prev"><i class="fas fa-chevron-left"></i></a>
                <a style="margin:auto;" class="btn btn-primary custom-control" href="#carousel-example-multi" data-slide="next"><i class="fas fa-chevron-right"></i></a>
              </div>
              <!--/.Controls-->
            
            </div>
        
          </div>
    </div>

    <br>
    <br>

    <div class="container reasons-container">

        <h3 class="section-header">Why a website is crucial for you.</h3>
        {{-- <hr class="section-hr"> --}}
        <br><br><br>
        <div class="row">
            <div class="col-md-4">
                <i class="reason-icon fas fa-user-tie"></i>
                <br><br>
                <h4>Professional</h4>
                <hr class="section-hr">
                <br>
                <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin word</p>
                <br><br>
            </div>

            <div class="col-md-4">
                <i class="reason-icon fas fa-globe"></i>
                <br><br>
                <h4>Accessible</h4>
                <hr class="section-hr">
                <br>
                <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin word</p>
                <br><br>
            </div>

            <div class="col-md-4">
                <i class="reason-icon fas fa-eye"></i>
                <br><br>
                <h4>Views and Impressions</h4>
                <hr class="section-hr">
                <br>
                <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin word</p>
                <br><br>
            </div>
        </div>
      
      </div>


      <div class="finesse">
        <div class="container">
          <h1 class="finesse-header">Be Found On The Web</h1>
        </div>
      </div>
      
      <br>
      <br>

      <div class="container services-sec">

        <h3 class="section-header">How Sway Dev Can Help You</h3>
        <hr class="section-hr">
        <p class="section-subhead">Our Servies Include Everything You Need To Set Up Your Online Presence</p>
      
        <br>
        <br>
        <br>
      
        <div class="row">
            <div class="col-xs-6 col-sm-6 col-md-3 each-service">
                <i class="fas fa-laptop-code service-icon"></i>
                <h5 class="service-title">Web Development</h5>
                <br><br>
            </div>

            <div class="col-xs-6 col-sm-6 col-md-3 each-service">
                <i class="fas fa-crop service-icon"></i>
                <h5 class="service-title">Web Design</h5>
                <br><br>
            </div>

            <div class="col-xs-6 col-sm-6 col-md-3 each-service">
                <i class="fas fa-rocket service-icon"></i>
                <h5 class="service-title">Web Deployment</h5>
                <br><br>
            </div>

            <div class="col-xs-6 col-sm-6 col-md-3 each-service">
                <i class="fas fa-chart-line service-icon"></i>
                <h5 class="service-title">Search Engine Optimization</h5>
                <br><br>
            </div>

            <div class="col-xs-6 col-sm-6 col-md-3 each-service">
                <i class="fas fa-shopping-cart service-icon"></i>
                <h5 class="service-title">E-commerce</h5>
                <br><br>
            </div>

            <div class="col-xs-6 col-sm-6 col-md-3 each-service">
                <i class="fab fa-wordpress service-icon"></i>
                <h5 class="service-title">WordPress Development</h5>
                <br><br>
            </div>

            <div class="col-xs-6 col-sm-6 col-md-3 each-service">
                <i class="fas fa-toolbox service-icon"></i>
                <h5 class="service-title">Web Maintenance</h5>
                <br><br>
            </div>

            <div class="col-xs-6 col-sm-6 col-md-3 each-service">
                <i class="fas fa-server service-icon"></i>
                <h5 class="service-title">Web Hosting - Powered By KaGantsa</h5>
                <br><br>
            </div>
        </div>
      </div>

      <br>
      <br>

      <div class="container-fluid dashboard-sec">
        <div class="row">
          <div class="col-md-6">
            <img class="dashboard-img" src="{{ asset('/imgs/Screenshot.png') }}" alt="">
          </div>
          <div class="col-md-6">
            <br><br>
            <div class="container dashboard-expl"> 
              <h3>Our websites come with a content management system.</h3>
              <hr class="section-hr">
              <p>The content management system allows give you freedom with your website, allowing you to make changes at anytime, anywhere. They are tailor made to your specific needs and come with user guide that gets you all set up within seconds.</p>
            </div>
          </div>
        </div>
      </div>

      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>

      <div class="container call-to-action">

          <section class="cd-intro">
            <h1 class="secton-header cd-headline letters type">
              <span>We Build</span>
              <span class="cd-words-wrapper waiting">
                <b class="is-visible">Professional</b>
                <b>Dynamic</b>
                <b>Neat</b>
                <b>Mint</b>
              </span>
              <span>Websites</span>
            </h1>
          </section>
          
          <hr class="section-hr">
      
          <br><br><br>
      
        <div class="row">
          <div class="col-sm-6 button-container">
            <a class="btn btn-primary bttn-primary cta1" href="{{ url('/getwebsite') }}">Get Qoute</a>
            <br>
            <br>
            <br>
            <br>
          </div>
      
          <div class="col-sm-6 button-container">
            <a class="btn btn-primary bttn-secondary cta2" href="{{ url('/getwebsite') }}">Contact Us</a>
          </div>
        </div>
      
      </div>


        <div class="waves">
          <svg width="100%" height="200px" fill="none" version="1.1"
           xmlns="http://www.w3.org/2000/svg">
            <linearGradient id="grad1" x1="0%" y1="0%" x2="100%" y2="0%">
              <stop offset="0%" stop-color="#051e3e" />
              <stop offset="50%" stop-color="#451e3e" />
              <stop offset="100%" stop-color="#183253" />
            </linearGradient>
            <path
              fill="url(#grad1)"
              d="
                M0 67
                C 273,183
                  822,-40
                  1920.00,106
      
                V 359
                H 0
                V 67
                Z">
              <animate
                repeatCount="indefinite"
                fill="url(#grad1)"
                attributeName="d"
                dur="15s"
                attributeType="XML"
                values="
                  M0 77
                  C 473,283
                    822,-40
                    1920,116
      
                  V 359
                  H 0
                  V 67
                  Z;
      
                  M0 77
                  C 473,-40
                    1222,283
                    1920,136
      
                  V 359
                  H 0
                  V 67
                  Z;
      
                  M0 77
                  C 973,260
                    1722,-53
                    1920,120
      
                  V 359
                  H 0
                  V 67
                  Z;
      
                  M0 77
                  C 473,283
                    822,-40
                    1920,116
      
                  V 359
                  H 0
                  V 67
                  Z
                  ">
              </animate>
            </path>
          </svg>
        </div>
      
      
      

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
  </body>
</html>
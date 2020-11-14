
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('css/about.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <script src="{{ asset('js/modernizr.js') }}"></script>
    
    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-140892374-2"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-140892374-2');
</script>
    
    <link rel="icon" href="{{ asset('imgs/sd_favicon1.png') }}" type="image/gif" sizes="16x16">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

    <title>SwayDev | About us</title>
  </head>
  <body>

    <br>
    @include('layouts.navbar')
    <br>
    <div class="wave">
      <div class="container about-cont">

        <h2 class="section-header">About Sway Dev</h2>
        <hr class="section-hr">

        <br>
        <br>

        <div class="row">

            <div class="col-md-4 container about-bio">
                <img class="img-fluid about-img" src="{{ asset('imgs/sd_fav.png') }}" alt="SwayDev">
                <br>
                <br>
                <h5 class="about-name">Sway Dev (Pty) Ltd</h5>
                <br>
                <p>Enterprise No.: 2019/573140/07</p>
                <br>
            </div>
            <div class="col-md-8 container">
                <p class="about-desc">Sway Dev is a website design and development agency based in Johannesburg
operating cross borders. With our passion for digital technology and our young take, we
build solutions that help empower and grow our clients.</p>
            </div>

        </div>

        </div>

    </div>
    
    <br>
    <br>

    <div class="values-sec">
        <div class="container row" style="margin:auto;">
            <div class="col-md-4  each-value">
                <h5>Mission</h5>
                <hr class="section-hr">
                <p>Our core mission is to build quality digital products that empower and help our clients grow. We strive consistently
    deliver on our promises to our clients.</p>
                <br>
                <br>
            </div>
            <div class="col-md-4  each-value">
                <h5>Vision</h5>
                <hr class="section-hr">
                <p>Our vision is to be a leading software agency
that contributes to the accessibility, adoption and development of value-adding technology in South Africa, Africa and the world.</p>
                <br>
                <br>
            </div>
            <div class="col-md-4  each-value">
                <h5>Values</h5>
                <hr class="section-hr">
                <p>We have three core values that speak to who are internally and the relationships we have
with our customers.
<br>
- Teamwork <br>
- Quality Websites <br>
- (TBC)</p>
            <br>
            <br>

            </div>
        </div>
    </div>

    <br>
    <br>
    
    <div class='container team-section'>
        <h3 class="section-header">Meet The Team</h3>
        <br>
        <p>Swaydev is made up of young professionals with diverse a set of skills.</p>
        <br>

        <div class="row">
            <div class="col-md-4">
                <div class="member">
                    <img class="img-fluid member-img" src="{{ asset('imgs/male.jpg') }}" alt="Member image">
                    <br>
                    <br>
                    <h5>Tshegofatso Moloto</h5>
                    <p>Full-stack Developer</p>
                    <hr class="section-hr">
                    <small>tshego@swaydev.co.za</small>
                    <br>
                    <br>
                </div>
            </div>

            <div class="col-md-4">
                <div class="member">
                    <img class="img-fluid member-img" src="{{ asset('imgs/female.jpg') }}" alt="Member image">
                    <br>
                    <br>
                    <h5>Shiluva Hlungwani</h5>
                    <p>Front-end Developer</p>
                    <hr class="section-hr">
                    <small>shiluva@swaydev.co.za</small>
                    <br>
                    <br>
                </div>
            </div>

            <div class="col-md-4">
                <div class="member">
                    <img class="img-fluid member-img" src="{{ asset('imgs/male.jpg') }}" alt="Member image">
                    <br>
                    <br>
                    <h5>Lwazi Nontuma</h5>
                    <p>Designer/Creative Director</p>
                    <hr class="section-hr">
                    <small>lwazi@swaydev.co.za</small>
                    <br>
                    <br>
                </div>
            </div>
        </div>
    </div>
    <br>
    <br>
    <br>

    <div class="projects-sec">
        <h3 class="section-header">Featured Projects</h3>
        <br>
        <br>
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner container">
                <div class="carousel-item active row">
                    <div class="row">
                        <div class='col-md-6'>
                            <div class="container">
                                <img class="img-fluid" src="{{ asset('imgs/kasie.png') }}">
                                <br><br>
                                <a href="https://www.kasiefm.co.za"><h3>www.kasiefm.co.za</h3></a>
                                <br>
                                <br>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="container">
                                <img class="img-fluid" style="max-width: 300px" src="{{ asset('imgs/valrey.png') }}">
                                <br><br>
                                <a href="https://www.valreynkoana.co.za"><h3>www.valreynkoana.co.za</h3></a>
                                <br>
                                <br>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="container">
                                <img class="img-fluid" src="{{ asset('imgs/regata.png') }}">
                                <br><br>
                                <a href="https://www.regatammogo.co.za"><h3>www.regatammogo.co.za</h3></a>
                                <br>
                                <br>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="container">
                                <img class="img-fluid" src="{{ asset('imgs/Capture.png') }}">
                                <br><br>
                                <a href="https://www.mathebulacs.co.za"><h3>www.mathebulacs.co.za</h3></a>
                                <br>
                                <br>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="container">
                                <img class="img-fluid" src="{{ asset('imgs/khewethu.png') }}">
                                <br><br>
                                <a href="https://www.khewethu.co.za"><h3>www.khewethu.co.za</h3></a>
                                <br>
                                <br>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="container">
                                <img class="img-fluid" src="{{ asset('imgs/blm.png') }}">
                                <br><br>
                                <a href="https://www.blm-sa.co.za"><h3>www.blm-sa.org</h3></a>
                                <br>
                                <br>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>

    <br>
    <br>
    <br>
    <div class="container" style="text-align:center;">
        <img src="{{ asset('/imgs/sd_logo.png') }}" class="img-fluid" style="max-width: 300px; margin:auto;">
    </div>

    @include('layouts.footer')

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>

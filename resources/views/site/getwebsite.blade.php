
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('css/getwebsite.css') }}">
    
    <link rel="icon" href="{{ asset('imgs/sd_favicon1.png') }}" type="image/gif" sizes="16x16">
    
    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-140892374-2"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-140892374-2');
</script>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

    <title>SwayDev | Get a website</title>
  </head>
  <body>
    <br>
    @include('layouts.navbar')
      <br>
      <h1 class="section-header">Get A Quote</h1>

        <br><br>


        <form class="qoute-form container row" style="margin: auto;"  action="https://formspree.io/info@swaydev.co.za" method="post">
            <div class="col-md-6">
                <div class="bg-uni-curve">
                    <label class="form-sec"><p>Website information</p></label>
                    <hr class="form-hr">
                    <br>
                    <div class="form-group">
                        <label for="domain"><small>What domain name would you like to use? E.g. www.yourbrand.co.za</small></label>
                        <br>
                        <input type="text" class="form-control crd-text-input" name="domainname">
                    </div>

                    <!-- Select type of website -->
                    <div class="form-group">
                        <label for="select-type"><small>What type of website would you like?</small></label>
                        <br>
                        <select class="form-control crd-text-input" id="select-type">
                        <option class="type-value" value="1500">Personal Website - R1500</option>
                        <option class="type-value" value="1800">Web Portfolio - R1800</option>
                        <option class="type-value" value="1800">CV Website - R1800</option>
                        <option class="type-value" value="2200">Business Website - R2200</option>
                        <option class="type-value" value="2500">Organizational Website - R2500</option>
                        <option class="type-value" value="3900">Online Store - R3900</option>
                        </select>

                        <br>
                        <br>

                        <!-- Select number of pages -->
                        <label for="select-type"><small>Select number of pages</small></label>
                        <br>
                        <select class="form-control crd-text-input" id="select-pages">
                        <option class="pages" value="5">5 pages +R0</option>
                        <option class="pages" value="10">10 pages +R200</option>
                        <option class="pages" value="15">15 pages +R350</option>
                        <option class="pages" value="20">20 pages +R550</option>
                        </select>
                    </div>

                    <!-- Include Search Engine Optimization or not -->
                    <label for="select-seo"><small>Would you like Search Engine Optimization included in your package? Seach Engine Optimization is the process of ranking your website on search engine results for related keyword searches.</small></label>
                    <div class="form-group">
                        <div class="form-check form-check-inline">
                        <input class="form-check-input form-check-label" id='select-seo' type="radio" name="seo" value="yes">
                        <label class="form-check-label" for="yes-seo">Yes</label>
                        </div>
                        <div class="form-check form-check-inline">
                        <input class="form-check-input form-check-label" id='select-seo' type="radio" name="seo" value="no">
                        <label class="form-check-label" for="no-seo">No</label>
                        </div>
                    </div>

                    <!-- Include professional e-mail or not -->
                    <label for="select-pro-email"><small>Would you like a professional e-mail included in your package? E.g. info@yourbrand.co.za</small></label>
                    <div class="form-group">
                        <div class="form-check form-check-inline">
                        <input class="form-check-input form-check-label" type="radio" name="pro-email" id="yes-pro-email" value="yes">
                        <label class="form-check-label" for="yes-pro-email">Yes</label>
                        </div>
                        <div class="form-check form-check-inline">
                        <input class="form-check-input form-check-label" type="radio" name="pro-email" id="no-pro-email" value="no">
                        <label class="form-check-label" for="no-pro-email">No</label>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="message"><small>Is there anything else you would like to add on to your website?</small></label>
                        <textarea class="form-control crd-text-input" name="message" placeholder="Message..."></textarea>
                    </div> 
                </div>           
            </div>


            <div class='col-md-6'>
                <div class='bg-uni-curve'>
                    <label class="form-sec"><p>Personal information</p></label>
                    <hr class="form-hr">
                    <br>

                    <div class="form-group">
                        <label for="email"><small>Fullname</small></label>
                        <input class="form-control crd-text-input" type="name" name="name">
                    </div>

                    <div class="form-group">
                        <label for="email"><small>E-mail address</small></label>
                        <input class="form-control crd-text-input" type="email" name="email">
                    </div>

                    <div class="form-group">
                        <label for="phonenumber"><small>Phone number *optional </small></label>
                        <input class="form-control crd-text-input" type="contact" name="phonenumber">
                    </div>

                    <br>
                    <button type="submit" name="button" class="btn bttn-primary">Get Quote</button>
                    <br><br>
                    <small>Once your enquiry has been received, you will be contacted back with a quote and will be asked a couple of questions to further understand your requirements.</small>
                </div>
            </div>
        </form>

      <br>
      <br>   
      <hr class="page-hr">
      <br>
      <br>
      <h1 class="section-header">Get In Touch</h1>
      <br>
      <br>

    <div class="row container contact-sec"  style="margin:auto;">
        <div class="col-md-6">
            <div class="contact-form container bg-uni-curve">
                <form action="https://formspree.io/info@swaydev.co.za" method="post">
                    <div class="form-group">
                    <label for="name"><small>Full name</small></label>
                    <input class="form-control crd-text-input" type="name" name="fullname">
                    </div>

                    <div class="form-group">
                    <label for="email"><small>E-mail address</small></label>
                    <input class="form-control crd-text-input" type="email" name="email">
                    </div>

                    <div class="form-group">
                    <label for="message"><small>Find out more about us or ask us anything web related.</small></label>
                    <textarea class="form-control crd-text-input" name="message" placeholder="Message..."></textarea>
                    </div>
                    <br>
                    <button class="btn bttn-primary" type="submit" name="button">Submit</button>
                </form>
            </div>
        </div>

        <div class="col-md-6">
            <br><br>
            <div class="contact-detals container">
                
                <h4><i class="fas fa-phone"></i>062 362 9473<a class='btn bttn-primary' href="tel:0623629473">Call</a></h4>
                    
                <br>
                
                <h4><i class="fas fa-envelope"></i> info@swaydev.co.za<a class='btn bttn-primary' href="mailto:info@swaydev.co.za">E-mail</a></h4>
                
                
                <br>
                
                <a href="https://www.instagram.com/sway_dev/"><h4><i class="fab fa-instagram"></i> @sway_dev</h4></a>
                
                <br>
                <a href="https://twitter.com/sway_dev"><h4><i class="fab fa-twitter"></i> @SwayDev</h4></a>
            
            </div>
        </div>
    </div>
    @include('layouts.footer')

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="{{ asset('js/main.js') }}"></script>
  </body>
</html>

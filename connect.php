<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>MRRI</title>
    <link rel="stylesheet" href="assets/styles/style.css">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Font awesome icons -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nanum+Myeongjo:400,700" rel="stylesheet">
    <!-- Jquery  -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    
    <style>
            body{
                font-family: 'Nanum Myeongjo', serif;
        
            }
    </style>
        <script>
            $(document).ready(function(){
                // Add smooth scrolling to all links
                $("a").on('click', function(event) {
                if (this.hash !== "") {
                    event.preventDefault();
            
                    // Store hash
                    var hash = this.hash;
        
                    $('html, body').animate({
                    scrollTop: $(hash).offset().top
                    }, 650, function(){
                    // Add hash (#) to URL when done scrolling (default click behavior)
                    window.location.hash = hash;
                    });
                } // End if
                });
            });
        </script>
</head>
<body>
<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light" id="top" style="background: #ffffff !important;">
        <div class="d-flex flex-grow-1">
            <span class="w-100 d-lg-none d-block"><!-- hidden spacer to center brand on mobile --></span>
            <a class="navbar-brand d-none d-lg-inline-block" href="index.html">
                <img src="/assets/images/MRRI-horizontaltransparent.png" alt="logo" width="285" height="100">
            </a>
            <a class="navbar-brand-two mx-auto d-lg-none d-inline-block" href="index.html">
                <img src="/assets/images/MRRI-verticaltransparent.png" alt="logo" width="40" height="40">
            </a>
            <div class="w-100 text-right">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#myNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </div>
        <div class="collapse navbar-collapse flex-grow-1 text-right" id="myNavbar">
            <ul class="navbar-nav ml-auto flex-nowrap">
                <li class="nav-item">
                    <a href="index.html" class="nav-link m-2 menu-item nav-active">Home</a>
                </li>
                <li class="nav-item">
                        <a href="founders.html" class="nav-link m-2 menu-item">Founders</a>
                    </li>
                <li class="nav-item">
                    <a href="donate.html" class="nav-link m-2 menu-item">Donate</a>
                </li>
                <li class="nav-item">
                    <a href="connect.php" class="nav-link m-2 menu-item">Connect</a>
                </li>
            </ul>
        </div>
</nav>
<div class="rainbow-header"></div>
<br>
<!-- contact form -->
<br>
<div class="main-container">
    <div class="container-fluid">
    <form id="contact-form" method="post" action="form.php">
        <h5>Want to know more? Shoot us an email!</h5>
        <br>
        <div class="form-row">
          <div class="col-md-6">
            <input type="text" name="first_name" class="form-control" placeholder="First name">
          </div>
          <div class="col-md-6">
            <input type="text" name="last_name" class="form-control" placeholder="Last name">
          </div>
        </div>
        <br>
        <div class="form-row">
            <div class="col-md-12">
                <input type="email" name="email" class="form-control" id="exampleFormControlInput1" placeholder="Email">
                <br>
                <textarea class="form-control" name="message" id="exampleFormControlTextarea1" rows="3" placeholder="Your Message"></textarea>
            </div>
        </div>
        <br>
        <div class="form-row">
            <button type="button" name="submit" class="btn btn-outline-info">Submit</button>
        </div>
    </form> 
    </div>  
</div>
<br>

<!-- Footer -->
<footer>
        <div class="row row-footer text-center text-md-left">
            <!-- Social Media Icons -->
            <div class="col-md-4">
                <h6 class="text-uppercase mb-4 font-weight-bold">Follow us!</h6>
                <div class="text-center text-md-left">
                    <ul class="list-unstyled list-inline">
                    <li class="list-inline-item">
                        <a class="btn-floating btn-sm rgba-white-slight mx-1" href="https://www.facebook.com/pg/MidwestRainbowResearch/about/?ref=page_internal" target="_blank">
                        <i class="fab fa-facebook-f fa-lg"></i>
                        </a>
                    </li>
                    <!-- <li class="list-inline-item">
                        <a class="btn-floating btn-sm rgba-white-slight mx-1">
                        <i class="fab fa-linkedin-in fa-lg"></i>
                        </a>
                    </li> -->
                    </ul>
                </div>
            </div>
        <!-- Contact -->
            <div class="col-md-4">
                <h6 class="text-uppercase mb-4 font-weight-bold">Contact</h6>
                <p><i class="fas fa-home mr-3"></i> Kansas City, MO</p>
                <a href="mailto:inoru@midwestrainbow.org">
                    <p><i class="fas fa-envelope mr-3"></i> inoru@midwestrainbow.org</p>
                </a>
            </div>
        <!--Copy right  -->
            <div class="col-md-4">
                <br>
                <br>
                <div class="text-center text-md-left">
                    <p class="copy-right">© 2019 Copyright:
                    <a href="index.html">
                    <strong> Midwest Rainbow Research Institute</strong>
                    </a>
                    </p>
                </div>
            </div>
        </div>
        <hr>
        <!-- Back to top Nav -->
        <div class="row row-footer d-flex align-items-center">
            <div class="col-sm-12 col-md-12 col-lg-12">
                <div class="triangle text-center text-md-left">
                    <a href="#top" class="top-page" title="Back to top">
                        <i class="fa fa-arrow-up"></i>
                    </a> 
                </div>
            </div>
        </div>
    </footer>

    <!-- Popper -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>







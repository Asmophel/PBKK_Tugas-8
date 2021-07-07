<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Apo Studio - Contact Page</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600" rel="stylesheet" /> <!-- https://fonts.google.com/ -->    
    <link href="css/bootstrap.min.css" rel="stylesheet" /> <!-- https://getbootstrap.com/ -->
    <link href="fontawesome/css/all.min.css" rel="stylesheet" /> <!-- https://fontawesome.com/ -->
    <link href="css/templatemo-business-oriented.css" rel="stylesheet" />
</head>

<body>
    <div id="parallax-1" class="parallax-window" data-parallax="scroll" data-image-src="img/biz-oriented-header.jpg">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="tm-logo">
                        <i class="fas fa-industry fa-5x mr-5"></i>
                        <span class="text-uppercase tm-logo-text">Apo Studio</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="tm-nav-container-outer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <nav class="navbar navbar-expand-lg" id="tm-main-nav">
                        <button class="navbar-toggler toggler-example" type="button" data-toggle="collapse"
                            data-target="#navbar-nav" aria-controls="navbar-nav" aria-expanded="false"
                            aria-label="Toggle navigation">
                            <span class="dark-blue-text"><i class="fas fa-bars"></i></span>
                        </button>
                        <div class="collapse navbar-collapse tm-nav" id="navbar-nav">                            
                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item">
                                    <a class="nav-link tm-nav-link" href="/">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link tm-nav-link" href="/about">About</a>
                                </li>
                                <li class="nav-item active">
                                    <a class="nav-link tm-nav-link" href="#">Contact <span class="sr-only">(current)</span></a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid mt-7 mb-25">
        <div class="row">
            <div class="col-12">
                <section class="tm-address-box mx-auto">
                    <h3 class="tm-title-gray mb-4 text-center">Alamat</h3>
                    <hr class="mb-5 tm-hr tm-hr-s mx-auto">
                    <p class="mb-8 mx-auto text-center tm-address-text">Jl. Jalan no. 5 Surabaya</p>
                </section>
            </div>
            <div class="col-12">
                <section class="tm-address-box mx-auto">
                    <h3 class="tm-title-gray mb-4 text-center">Social Media</h3>
                    <hr class="mb-5 tm-hr tm-hr-s mx-auto">
                    
                    <p class="mb-8 mx-auto text-center tm-address-text">
                            <a  href="https://fb.com">
                                <i class="fab fa-facebook fa-2x tm-social-icon"></i>
                            </a> Apo Studio
                    </p>
                    <p class="mb-8 mx-auto text-center tm-address-text">
                            <a href="https://twitter.com">
                                <i class="fab fa-twitter fa-2x tm-social-icon"></i>
                            </a> @ApoStudio
                    </p>
                    <p class="mb-8 mx-auto text-center tm-address-text">
                        <a href="https://linkedin.com">
                            <i class="fab fa-linkedin fa-2x tm-social-icon"></i>
                        </a> Apo Studio
                </p>
                </section>
            </div>
        </div>
    </div>

    <footer class="container-fluid">
        <div class="row">
            <p class="col-lg-9 col-md-8 mb-5 mb-md-0">
                Copyright &copy; PBKK A - <span class="tm-text-primary">Apo Studio</span>
            </p>
            <div class="col-lg-3 col-md-4 text-center">
                <a rel="nofollow" target="_blank" href="https://fb.com" class="tm-social-link">
                    <i class="fab fa-facebook fa-2x tm-social-icon"></i>
                </a>
                <a href="https://twitter.com" class="tm-social-link">
                    <i class="fab fa-twitter fa-2x tm-social-icon"></i>
                </a>
                <a href="https://linkedin.com" class="tm-social-link">
                    <i class="fab fa-linkedin fa-2x tm-social-icon"></i>
                </a>
            </div>
        </div>
    </footer>

    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/parallax.min.js"></script> <!-- https://pixelcog.github.io/parallax.js/ -->
    <script src="js/tooplate-script.js"></script>
    <script>
        $(document).ready(function () {
            $('#parallax-1').parallax({ imageSrc: 'img/biz-oriented-header.jpg' });
        });
    </script>
</body>
</html>
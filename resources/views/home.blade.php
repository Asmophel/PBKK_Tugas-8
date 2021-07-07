<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Apo Studio - Home</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" /> <!-- https://fonts.google.com/ -->
    {{-- <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('fontawesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/templatemo-business-oriented.css') }}"> --}}
    <link href="/css/bootstrap.min.css" rel="stylesheet" /> <!-- https://getbootstrap.com/ -->
    <link href="/fontawesome/css/all.min.css" rel="stylesheet" /> <!-- https://fontawesome.com/ -->
    <link href="/css/templatemo-business-oriented.css" rel="stylesheet" />
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
                        <button class="navbar-toggler toggler-example" type="button" data-toggle="collapse" data-target="#navbar-nav" 
                            aria-controls="navbar-nav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="dark-blue-text"><i class="fas fa-bars"></i></span>
                        </button>
                        <div class="collapse navbar-collapse tm-nav" id="navbar-nav">
                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item active">
                                    <a class="nav-link tm-nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link tm-nav-link" href="/about">About</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link tm-nav-link" href="/contacts">Contact</a>
                                </li>
                            </ul>                            
                        </div>                        
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid mt-7">
        <div class="row mb-6">
            <section class="col-lg-6 mb-lg-0 mb-5">
                <div class="tm-intro">
                    <h3 class="tm-title-gray mb-4">Butuh Dokumentasi untuk Eventmu?</h3>
                    <hr class="mb-5 tm-hr">
                    <p class="mb-5">Apo Studio menawarkan jasa dokumentasi pada eventmu. Apo Studio memiliki Tim yang berpengalaman dan Professional</p>
                    <p class="mb-5">Apo Studio telah dipercaya banyak Event Organizer untuk Dokumentasi Event</p>
                    <img src="img/biz-oriented-1.jpg" alt="Company Background Image" class="img-fluid tm-mb-3">
                </div>
            </section>
            <section class="col-lg-6">
                <h3 class="tm-title-gray mb-4">Paket Jasa</h3>
                <hr class="mb-5 tm-hr">
                <div class="tm-strategy-box mb-5">
                    <img src="img/gold.jpg" alt="Image" class="img-fluid tm-strategy-img">
                    <div>
                        <h4 class="tm-text-primary">Gold</h4>
                        <p class="tm-strategy-text">Quisque consectetur ipsum justo, sed posuere massa pretium nec. In scelerisque, odio et maximus feugiat, nisl libero porta turpis, quis imperdiet odio.</p>
                    </div>
                </div>
                <div class="tm-strategy-box mb-5">
                    <img src="img/silver.jpg" alt="Image" class="img-fluid tm-strategy-img">
                    <div>
                        <h4 class="tm-text-primary">Silver</h4>
                        <p class="tm-strategy-text">Fusce non diam vel diam egestas accumsan quis aliquam metus. Nulla porta ullamcorper mauris maximus feugiat. Donec ac tincidunt dui.</p>
                    </div>
                </div>
                <div class="tm-strategy-box mb-5">
                    <img src="img/bronze.jpg" alt="Image" class="img-fluid tm-strategy-img">
                    <div>
                        <h4 class="tm-text-primary">Bronze</h4>
                        <p class="tm-strategy-text">Suspendisse gravida, ipsum a gravida euismod, metus enim hendrerit ante, vel hendrerit sapien sem non nisl. Maecenas tempus risus ipsum.</p>
                    </div>
                </div>
            </section>
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

    <script src="../js/jquery-3.4.1.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/parallax.min.js"></script> <!-- https://pixelcog.github.io/parallax.js/ -->
    <script src="../js/tooplate-script.js"></script>
    <script>
        $(document).ready(function () {
            $('#parallax-1').parallax({ imageSrc: 'img/biz-oriented-header.jpg' });
            $('#parallax-2').parallax({ imageSrc: 'img/biz-oriented-footer.jpg' });
        });
    </script>
</body>

</html>
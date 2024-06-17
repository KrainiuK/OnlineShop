<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
            crossorigin="anonymous"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.0/font/bootstrap-icons.min.css"
          rel="stylesheet">
    <link rel="stylesheet" href="/css/style.css">
    <title>Main Page</title>
</head>
<body>
<header>
    <!-- Head of the website -->
    <nav class="navbar navbar-expand-md sticky-top bs-emphasis-color">
        <div class="container-fluid">
            <a href="#" class="navbar-brand"><img src="/img/laptop.png" alt=""><span
                    class="navbar-brand-first">MY</span><span class="navbar-brand-second">PC</span></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item active">
                        <a href="#" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">About us</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">Account</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link"><i class="bi bi-bag-dash-fill"></i>MyCart</a>
                    </li>
                </ul>
            </div>

        </div>
    </nav>
</header>
<main>
    <!-- Carousel -->
    <div class="carousel slide" data-bs-ride="carousel" id="slides">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#slides" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#slides" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#slides" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/accesories.png" alt="">
                <div class="carousel-caption">
                    <h2 class="display-2">NEW ACCESSORIES</h2>
                    <button type="button" class="btn btn-warning">Shop now</button>
                </div>
            </div>
            <div class="carousel-item">
                <img src="img/buynewparts.png" alt="">
                <div class="carousel-caption">
                    <h2 class="display-2">UPGRADE MY PC</h2>
                    <button type="button" class="btn btn-warning">Shop now</button>
                </div>
            </div>
            <div class="carousel-item">
                <img src="img/bestheadphones.jpg" alt="">
                <div class="carousel-caption">
                    <h2 class="display-2">GAMING HEADPHONES</h2>
                    <button type="button" class="btn btn-warning">Shop now</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Product section -->
    <div class="row align-items-center product-section">
        <div class="col-md-4">
            <a href="#"><img src="img/gamingDesktops.png" alt="" class="img-fluid"></a>
            <p>Gaming Desktops</p>
        </div>
        <div class="col-md-4">
            <a href="#"><img src="img/gamingLaptops.png" alt="" class="img-fluid"></a>
            <p>Gaming Laptops</p>
        </div>
        <div class="col-md-4">
            <a href="#"><img src="img/GearShop.png" alt="" class="img-fluid"></a>
            <p>Accessories</p>
        </div>
    </div>
    <!-- Review section -->
    <div class="row review-section">
        <div class="col-md-6 featured-review">
            <div class="fluid-col-container-left text-light my-4 my-md-5 wow fadeInLeftSubtle" style="padding-left: 20px">
                <h2 class="font-weight-bold text-uppercase">CHRONOS</h2>
                <h3 class="text-warning">CHRONOS Gaming Desktop Awarded Editor’s Choice by PCMag</h3>
                <h4><em>"Origin's compact Chronos gaming desktop delivers impressive style and performance...” - PCMAG</em></h4>
                <a href="#" class="btn btn-outline-white btn-lg waves-effect waves-light">Shop Now</a>
            </div>
        </div>
        <div class="col-md-6">
            <div class="container-fluid">
                <div class="carousel slide  carousel-fade" data-bs-ride="carousel" id="carousel-reviews">
                    <div class="carousel-inner" style="display: flex; align-items: center">
                        <div class="carousel-item active" >
                            <h3 class="text-danger">"Great Experience!!!"</h3>
                            <p>"Nick was my sales Rep and from the minute I ordered the computer to the time it went out in
                                shipping I got updated on every process, step-by-step. Polite, knowledgeable, and of course
                                the best...</p>
                        </div>
                        <div class="carousel-item">
                            <h3 class="text-danger">"Amazing new PC ordering experience!"</h3>
                            <p>"After months of research, and being let down with support/responses from at least 5 other
                                system integrators, I have finally landed here at Origin PC, and let me tell you I am so
                                very glad I ...</p>
                        </div>
                        <div class="carousel-item">
                            <h3 class="text-danger">"Amazing service and PC quality"</h3>
                            <p>"I ordered the 7000x with a hardline custom loop. My sales rep was Arturo, super cool and
                                nice. He had a lot of product knowledge, as well as keeping me updated through the entire
                                process. The...</p>
                        </div>
                        <div class="carousel-item">
                            <h3 class="text-danger">"Amazing Experience Overall. "</h3>
                            <p>"My experience with Origin Pc has left me extremely satisfied with my purchase, speedy and
                                truly HELPFUL customer support, amazing communication from their team throughout the whole
                                process, quick...</p>
                        </div>
                    </div>
                    <div class="carousel-indicators">
                        <ul class="carousel-indicators">
                            <li data-bs-target="#carousel-reviews" data-bs-slide-to="0" class="active"></li>
                            <li data-bs-target="#carousel-reviews" data-bs-slide-to="1"></li>
                            <li data-bs-target="#carousel-reviews" data-bs-slide-to="2"></li>
                            <li data-bs-target="#carousel-reviews" data-bs-slide-to="3"></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<!-- Footer of the website -->
<footer class="container-fluid">
    <div class="container-fluid">
        <div class="row padding">
            <div class="col-12">
                <h2>Contact us</h2>
            </div>
            <div class="col-12 social padding">
                <a href="#"><i class="bi bi-instagram"></i></a>
                <a href="#"><i class="bi bi-youtube"></i></a>
                <a href="#"><i class="bi bi-facebook"></i></a>
                <a href="#"><svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-twitter-x" viewBox="0 0 16 16">
                    <path d="M12.6.75h2.454l-5.36 6.142L16 15.25h-4.937l-3.867-5.07-4.425 5.07H.316l5.733-6.57L0 .75h5.063l3.495 4.633L12.601.75Zm-.86 13.028h1.36L4.323 2.145H2.865z"/>
                </svg></a>
            </div>
        </div>
    </div>
</footer>

</body>
</html>

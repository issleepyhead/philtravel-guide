<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Web System project">
    <meta name="keywords" content="Travel, PhilTravel, Guide, PhilTravelGuide, Philippines, Tourist Spots">
    <meta name="author" content="our team">
    <meta property="og:title" content="Philippines Travel Guide"/>
    <meta property="og:image" content="https://ranmij.github.io/website/assets/img/logo.png"/>
    <meta property="og:image:type" content="image/png" />
    <meta property="og:description" content="Want to visit a fun and exciting place? Visit us!"/>
    <meta property="og:url" content="https://ranmij.github.io/website/"/>
    <meta property="og:image:width" content="1200" />
    <meta property="og:image:height" content="627" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/style.css">
    <link rel="shortcut icon" href="<?= base_url() ?>assets/img/favicon.png" type="image/png">
    <title><?= $title ?></title>
</head>
<body>
    <!-- Begin Navbar -->
    <header class="hero">
        <nav class="navbar navbar-expand-lg py-3 fixed-top nav-wrapper navbar-dark bg-dark" id="navbar">
            <div class="container px-4 px-lg-5 nav-content mx-auto nav-c">
                <a class="navbar-brand" href="<?= base_url() ?>">
                    <img src="<?= base_url() ?>assets/img/logo.png" alt="logo">
                </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                <div class="collapse navbar-collapse justify-content-end nav-inner" id="navbarNav">
                    <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url() ?>">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url() ?>destinations">Destinations</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url() ?>regions">Regions</a>
                    </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="slider-container" id="s-container">
            <div></div>
            <div></div>
            <div></div>
        </div>
        <div class="slider-dots d-flex justify-content-center align-content-center">
            <div>
                <span class="dot"></span>
                <span class="dot"></span>
                <span class="dot"></span>
            </div>
        </div>
        <div class="content-wrap d-flex align-items-center justify-content-center">
            <div class="slider-content px-4 px-lg-5">
                <h1>PhilTravel Guide</h1>
                <p>Experience the beautiful wonders of the Philippines</p>
                <a href="<?= base_url() ?>destinations">Explore</a>
            </div>
        </div>
    </header>
    <section class="about-section py-5 py-3">
        <div class="wrap-sides px-4 px-lg-5 mx-auto">
            <div class="container-left reveal p-lg-5">
                <h1 class="h1 text-center py-3">PhilTravel Guide</h1>
                <p>We are here to help you decide which place you are going to visit next, we assure you that you will experience the joy of traveling in one of Philippines' well known spots.</p>
            </div>
            <div class="container-right reveal">
            </div>
        </div>
    </section>
    <section class="gallery-view container py-3">
        <div class="content-container mx-auto">
            <div class="gallery-container">
                
                <?php
                    foreach($images as $value):
                ?>
                    <img src="<?= base_url() . $value->image_path ?>" alt="" class="img">
                <?php
                    endforeach;
                ?>
            </div>
            <div class="gallery-caption py-3">
                <h2 class="display-6">Visit these exciting places!</h2>
            </div>
        </div>
    </section>
    <footer class="bg-dark text-white py-5">
        <div class="footer-container px-4 px-lg-5">
            <div class="boxes d-flex">
                <div class="box">
                    <h5 class="display-6">About Us</h5>
                    <p>We guide people to places where they can have a whole new level of experience and fun.</p>
                </div>
                <div class="box">
                    <span><a href="<?= base_url() . 'team' ?>">Our Team</a></span>
                    <span><a href="<?= base_url() . 'faq' ?>">FAQ</a></span>
                </div>
                <div class="box"></div>
            </div>
            <div class="bottom-view">
                <hr/>
                <div class="b-c">
                    <span>© 2022 Copyright: <a class="text-white" href="#" style="text-decoration:none;">PhilTravel Guide</a></span>
                    <section>
                        <a class="btn btn-outline-light" href="#!" role="button">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                  
                        <a class="btn btn-outline-light" href="#!" role="button">
                            <i class="fab fa-github"></i>
                        </a>
                        <a class="btn btn-outline-light" href="#!" role="button">
                            <i class="fab fa-twitter"></i>
                        </a>
                    </section>
                </div>
            </div>
        </div>
    </footer>
    <!-- End Navbar -->
    <!-- Bootstrap Script -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
    <script src="<?= base_url() ?>assets/js/index.js"></script>
</body>
</html>
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
        <link rel="stylesheet" href="<?= base_url() ?>assets/css/faq.css">
        <link rel="shortcut icon" href="<?= base_url() ?>assets/img/favicon.png" type="image/png">
        <title>FAQ</title>
    </head>
    <body>
        <header class="hero">
            <nav class="navbar navbar-expand-lg sticky-top navbar-dark bg-dark nav-wrapper" id="navbar">
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
        </header>
        <div class="c-c px-lg-5 px-4 py-4">
            <div class="cc-c mt-2 py-3">
                <h2 class="t-q display-6">What can I do with this website?</h2>
                <p>PhilTravel is your partner in creating a memorable experience in the Philippines. View the latest and popular places around the country. You’ll be able to find photos, backgrounds and different kind of activities that you can enjoy in every destination that you will visit.</p>
            </div>
            <div class="c mt-2 py-3">
                <h2 class="t-q display-6">Which destination are featured?</h2>
                <p>Currently, PhilTravel is limited to 5 destinations for every Region in the Philippines, but we will update it regularly.</p>
            </div>
            <div class="c mt-2 py-3">
                <h2 class="t-q display-6">What sets the PhilTravel apart from other travel guides?</h2>
                <p>PhilTravel is a project to give access to the most recent and correct information. Users can check what things they can do and what they need to do in order to get in the certain destination.</p>
            </div>
            <div class="c mt-2 py-3">
                <h2 class="t-q display-6">I’m having problems with the website. Whom should I contact?</h2>
                <p>If you are experiencing any problem with the Website, please reach us at examplemonlng@gmail.com</p>
            </div>
            <div class="c mt-2 py-3">
                <h2 class="t-q display-6">Do u have travel guides / articles for destination I will be visiting?</h2>
                <p>Yes, we have a wide range of travel information you can choose from and read. We have a list of activities, top attractions, the perfect time to visit, and more.</p>
            </div>
        </div>
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
    </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    
</html>
<?php include 'header.php'; ?>

<style>
    .stat-card {
        padding: 40px 20px;
        transition: transform 0.3s ease;
    }

    .stat-card:hover {
        transform: translateY(-5px);
    }

    .stat-icon {
        margin-bottom: 25px;
    }

    .stat-icon img {
        width: 75px;
        height: 75px;
        object-fit: contain;
    }

    .stat-number {
        font-size: 60px;
        font-weight: 900;
        color: #1e3a8a;
        margin-bottom: 15px;
        line-height: 1;
        position: relative;
    }

    .stat-icon::after {
        content: '';
        display: block;
        width: 60px;
        height: 4px;
        background: #dc2626;
        margin: 15px auto 0;
        border-radius: 2px;
    }

    .stat-label {
        font-size: 16px;
        font-weight: 600;
        color: #1e3a8a;
        letter-spacing: 1.5px;
        text-transform: uppercase;
        margin-top: 20px;
    }

    /* Mobile Responsive */
    @media (max-width: 768px) {
        .icons-banner-section {
            padding: 50px 0;
        }

        .stat-card {
            padding: 40px 20px;
            margin-bottom: 20px;
        }

        .stat-icon img {
            width: 80px;
            height: 80px;
        }

        .stat-number {
            font-size: 56px;
            margin-bottom: 15px;
        }

        .stat-number::after {
            width: 60px;
            height: 4px;
            margin: 15px auto 0;
        }

        .stat-label {
            font-size: 16px;
            margin-top: 20px;
            letter-spacing: 2px;
        }
    }

    @media (max-width: 576px) {
        .icons-banner-section {
            padding: 40px 0;
        }

        .stat-card {
            padding: 35px 15px;
        }

        .stat-icon img {
            width: 70px;
            height: 70px;
        }

        .stat-number {
            font-size: 48px;
        }

        .stat-number::after {
            width: 50px;
            height: 3px;
        }

        .stat-label {
            font-size: 15px;
        }
    }

    /* Gallery uniform image sizing and zoom effect */
    .gallery .gthumb .gallery-uniform-img {
        width: 100%;
        height: 222px;
        object-fit: cover;
        object-position: center;
        transition: transform 0.3s;
    }

    @media (max-width: 991.98px) {
        .papare-news-col {
            margin-bottom: 20px;
        }
    }

    /* Hide on mobile only */
    @media (max-width: 768px) {
        .hide-mobile {
            display: none !important;
        }
    }

    /* Increase hero banner height on mobile only */
    @media (max-width: 768px) {

        .main-slider,
        .home2-slider,
        .rev_slider_wrapper,
        .fullwidthbanner-container,
        .rev_slider {
            height: 400px !important;
            /* Adjust this value as needed */
            min-height: 400px !important;
        }

        .main-slider img {
            height: 400px !important;
            object-fit: cover !important;
        }

        /* Ensure slider images maintain aspect ratio and crop from sides */
        .tp-revslider-slidesli {
            height: 400px !important;
        }

        .tp-revslider-slidesli .slotholder,
        .tp-revslider-slidesli .tp-bgimg {
            height: 400px !important;
            object-fit: cover !important;
            object-position: center center !important;
        }
    }

    /* For very small mobile screens */
    @media (max-width: 576px) {

        .main-slider,
        .home2-slider,
        .rev_slider_wrapper,
        .fullwidthbanner-container,
        .rev_slider {
            height: 250px !important;
            min-height: 250px !important;
        }

        .main-slider img {
            height: 250px !important;
        }

        .tp-revslider-slidesli {
            height: 250px !important;
        }

        .tp-revslider-slidesli .slotholder,
        .tp-revslider-slidesli .tp-bgimg {
            height: 250px !important;
        }
    }

    /* Reduce gap between hero section and content on mobile only */
    @media (max-width: 768px) {
        .main-content {
            margin-top: -30px;
            /* Adjust this value as needed */
        }

        /* Alternative: Target the first section after hero */
        .main-content .wf100:first-child {
            padding-top: 30px;
            /* Reduce from default padding */
        }

        /* Or if targeting the specific section */
        section.wf100.p80 {
            padding-top: 30px !important;
        }
    }

    /* Hide original text on mobile */
    @media (min-width: 280px) and (max-width: 575px) {
        .slide-content-box h1 span {
            font-size: 24px !important;
            font-weight: 700 !important;
        }
    }
</style>
<!---navigation Bar with past Seasons-->
<div class="logo-navbar">
                <div class="container">
                    <div class="row">
                        <div class="col-md-2 col-sm-5">
                            <div class="logo"><a href="index.php"><img src="home/images/logo-dark.png" alt="" width="60%" style="max-width:100px; height:auto;"></a></div>
                        </div>
                        <div class="col-md-10 col-sm-7">
                            <nav class="main-nav">
                                <ul>
                                    <li class="nav-item"> <a href="index.php">Home</a></li>
                                    <li class="nav-item"> <a href="index.php#matches">Updates</a></li>
                                    <li class="nav-item"> <a href="index.php#blog">News</a></li>
                                    <li class="nav-item"> <a href="index.php#gallery">Gallery</a></li>
                                    <li class="nav-item drop-down"> <a href="gallary.php">Past Season</a>
                                        <ul>
                                            <li><a href="#gallery1">Season 1(2024)</a></li>
                                            <li><a href="index.php">Season 2(2025)</a></li>
                                        </ul>
                                    </li>
                                     <li class="nav-item"> <a href="index.php">About</a></li>   
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
 </div>
<!---End of navigation Bar with past Seasons-->


<section class="wf100 p0-80 players-squad portfolio filter-gallery" id="gallery1">
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6">
                <div class="section-title">
                    <h2>Season 01 Gallery</h2>
                </div>
            </div>
            <div class="col-md-6">
                <div id="filters" class="button-group">
                    <button class="button is-checked" data-filter="*">All Results</button>
                    <button class="button" data-filter=".f1">Photography</button>
                    <button class="button" data-filter=".f2">Videos </button>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <ul class="gallery isotope items">
                    <li class="item f1">
                        <div class="gthumb">
                            <div class="hv-info">
                                <h6><a href="#" target="_blank">Opening Ceremony</a></h6>
                            </div>
                            <a class="gt-link" href="home/images/Update2026_02/new1.jpg" target="_blank"
                                data-rel="prettyPhoto[gallery1]"><i class="far fa-image"></i></a>
                            <img src="home/images/Update2026_02/new1.jpg" alt="">
                        </div>
                    </li>
                    <li class="item f1">
                        <div class="gthumb">
                            <div class="hv-info">
                                <h6><a href="#" target="_blank">Thrilled Spectators</a></h6>
                            </div>
                            <a class="gt-link" href="home/images/Update2026_02/new1.jpg" target="_blank"
                                data-rel="prettyPhoto[gallery1]"><i class="far fa-image"></i></a>
                            <img src="home/images/Update2026_02/new1.jpg" alt="">
                        </div>
                    </li>
                    <li class="item f2">
                            <div class="gthumb">
                                <div class="hv-info">
                                    <a href="https://web.facebook.com/PremierHockeyLeagueSL/videos/1233314825158362" target="_blank" class="play"><i class="fas fa-play"></i></a>
                                    <h6 class="mt-5"><a href="https://web.facebook.com/PremierHockeyLeagueSL/videos/1233314825158362" target="_blank">Season 1 Highlights</a></h6>
                                </div>
                                <a class="gt-link" href="https://web.facebook.com/PremierHockeyLeagueSL/videos/1233314825158362" target="_blank" data-rel="prettyPhoto[gallery1]"><i class="fas fa-play"></i></a>
                                <img src="home/img/gallery-3.png" alt="">
                            </div>
                        </li> 
                    <li class="item f1">
                        <div class="gthumb">
                            <div class="hv-info">
                                <h6><a href="#" target="_blank">Closing Ceremony</a></h6>
                            </div>
                            <a class="gt-link" href="home/images/Update2026_02/new3.jpg" target="_blank"
                                data-rel="prettyPhoto[gallery1]"><i class="far fa-image"></i></a>
                            <img src="home/images/Update2026_02/new3.jpg" alt="">
                        </div>
                    </li>
                    <li class="item f1">
                        <div class="gthumb">
                            <div class="hv-info">
                                <h6><a href="#" target="_blank">Tournament Officials</a></h6>
                            </div>
                            <a class="gt-link" href="hhome/images/Update2026_02/new4.jpg" target="_blank"
                                data-rel="prettyPhoto[gallery1]"><i class="far fa-image"></i></a>
                            <img src="home/images/Update2026_02/new4.jpg" alt="">
                        </div>
                    </li> 
                    <li class="item f2">
                        <div class="gthumb">
                            <div class="hv-info">
                                <a href="https://web.facebook.com/PremierHockeyLeagueSL/videos/1654738011821443"
                                    target="_blank" class="play"><i class="fas fa-play"></i></a>
                                <h6 class="mt-5"><a
                                        href="https://web.facebook.com/PremierHockeyLeagueSL/videos/1654738011821443"
                                        target="_blank">Match Hype</a></h6>
                            </div>
                            <a class="gt-link"
                                href="https://web.facebook.com/PremierHockeyLeagueSL/videos/1654738011821443"
                                target="_blank" data-rel="prettyPhoto[gallery1]"><i class="fas fa-play"></i></a>
                            <img src="home/img/gallery-6.png" alt="">
                        </div>
                    </li> 
                    <li class="item f1">
                        <div class="gthumb">
                            <div class="hv-info">
                                <h6><a href="#" target="_blank">Inspiring Future Stars</a></h6>
                            </div>
                            <a class="gt-link" href="home/img/gallery-7.png" target="_blank"
                                data-rel="prettyPhoto[gallery1]"><i class="far fa-image"></i></a>
                            <img src="home/img/gallery-7.png" alt="">
                        </div>
                    </li>
                    <li class="item f1">
                        <div class="gthumb">
                            <div class="hv-info">
                                <h6><a href="#" target="_blank">Excitement</a></h6>
                            </div>
                            <a class="gt-link" href="home/img/gallery-8.png" target="_blank"
                                data-rel="prettyPhoto[gallery1]"><i class="far fa-image"></i></a>
                            <img src="home/img/gallery-8.png" alt="">
                        </div>
                    </li>
                    <li class="item f1">
                        <div class="gthumb">
                            <div class="hv-info">
                                <h6><a href="#" target="_blank">Champions</a></h6>
                            </div>
                            <a class="gt-link" href="home/img/gal1.jpg" target="_blank"
                                data-rel="prettyPhoto[gallery1]"><i class="far fa-image"></i></a>
                            <img src="home/img/gal1.jpg" alt="" class="gallery-uniform-img">
                        </div>
                    </li>
                    <li class="item f1">
                        <div class="gthumb">
                            <div class="hv-info">
                                <h6><a href="#" target="_blank">Teamwork</a></h6>
                            </div>
                            <a class="gt-link" href="home/img/gal2.jpg" target="_blank"
                                data-rel="prettyPhoto[gallery1]"><i class="far fa-image"></i></a>
                            <img src="home/img/gal2.jpg" alt="" class="gallery-uniform-img">
                        </div>
                    </li>
                    <li class="item f1">
                        <div class="gthumb">
                            <div class="hv-info">
                                <h6><a href="#" target="_blank">Strength</a></h6>
                            </div>
                            <a class="gt-link" href="home/img/gal3.jpg" target="_blank"
                                data-rel="prettyPhoto[gallery1]"><i class="far fa-image"></i></a>
                            <img src="home/img/gal3.jpg" alt="" class="gallery-uniform-img">
                        </div>
                    </li>
                    <li class="item f1">
                        <div class="gthumb">
                            <div class="hv-info">
                                <h6><a href="#" target="_blank">Spectatorship</a></h6>
                            </div>
                            <a class="gt-link" href="home/img/gal4.jpg" target="_blank"
                                data-rel="prettyPhoto[gallery1]"><i class="far fa-image"></i></a>
                            <img src="home/img/gal4.jpg" alt="" class="gallery-uniform-img">
                        </div>
                    </li>
                    <li class="item f1">
                        <div class="gthumb">
                            <div class="hv-info">
                                <h6><a href="#" target="_blank">Smiles</a></h6>
                            </div>
                            <a class="gt-link" href="home/img/gal5.jpg" target="_blank"
                                data-rel="prettyPhoto[gallery1]"><i class="far fa-image"></i></a>
                            <img src="home/img/gal5.jpg" alt="" class="gallery-uniform-img">
                        </div>
                    </li>
                    <li class="item f1">
                        <div class="gthumb">
                            <div class="hv-info">
                                <h6><a href="#" target="_blank">Cheer</a></h6>
                            </div>
                            <a class="gt-link" href="home/img/gal6.jpg" target="_blank"
                                data-rel="prettyPhoto[gallery1]"><i class="far fa-image"></i></a>
                            <img src="home/img/gal6.jpg" alt="" class="gallery-uniform-img">
                        </div>
                    </li>
                    <li class="item f1">
                        <div class="gthumb">
                            <div class="hv-info">
                                <h6><a href="#" target="_blank">Battles</a></h6>
                            </div>
                            <a class="gt-link" href="home/img/gal7.jpg" target="_blank"
                                data-rel="prettyPhoto[gallery1]"><i class="far fa-image"></i></a>
                            <img src="home/img/gal7.jpg" alt="" class="gallery-uniform-img">
                        </div>
                    </li>
                    <li class="item f1">
                        <div class="gthumb">
                            <div class="hv-info">
                                <h6><a href="#" target="_blank">Effort</a></h6>
                            </div>
                            <a class="gt-link" href="home/img/gal8.jpg" target="_blank"
                                data-rel="prettyPhoto[gallery1]"><i class="far fa-image"></i></a>
                            <img src="home/img/gal8.jpg" alt="" class="gallery-uniform-img">
                        </div>
                    </li>
                    <li class="item f1">
                        <div class="gthumb">
                            <div class="hv-info">
                                <h6><a href="#" target="_blank">Brotherhood</a></h6>
                            </div>
                            <a class="gt-link" href="home/img/gal9.jpg" target="_blank"
                                data-rel="prettyPhoto[gallery1]"><i class="far fa-image"></i></a>
                            <img src="home/img/gal9.jpg" alt="" class="gallery-uniform-img">
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!--League Players Squad End-->
<!-- </div> --> 

<!-- <section class="wf100 p0-80 players-squad portfolio filter-gallery" id="">
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6">
                <div class="section-title">
                    <h2>Season 01 Gallery</h2>
                </div>
            </div>
            <div class="col-md-6">
                <div id="filters" class="button-group">
                    <button class="button is-checked" data-filter="*">All Results</button>
                    <button class="button" data-filter=".f1">Photography</button>
                    <button class="button" data-filter=".f2">Videos </button>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <ul class="gallery isotope items">
                    <li class="item f1">
                        <div class="gthumb">
                            <div class="hv-info">
                                <h6><a href="#" target="_blank">Opening Ceremony</a></h6>
                            </div>
                            <a class="gt-link" href="home/images/Update2026_02/new1.jpg" target="_blank"
                                data-rel="prettyPhoto[gallery1]"><i class="far fa-image"></i></a>
                            <img src="home/images/Update2026_02/new1.jpg" alt="">
                        </div>
                    </li>
                    <li class="item f1">
                        <div class="gthumb">
                            <div class="hv-info">
                                <h6><a href="#" target="_blank">Thrilled Spectators</a></h6>
                            </div>
                            <a class="gt-link" href="home/images/Update2026_02/new1.jpg" target="_blank"
                                data-rel="prettyPhoto[gallery1]"><i class="far fa-image"></i></a>
                            <img src="home/images/Update2026_02/new1.jpg" alt="">
                        </div>
                    </li>
                    <li class="item f2">
                            <div class="gthumb">
                                <div class="hv-info">
                                    <a href="https://web.facebook.com/PremierHockeyLeagueSL/videos/1233314825158362" target="_blank" class="play"><i class="fas fa-play"></i></a>
                                    <h6 class="mt-5"><a href="https://web.facebook.com/PremierHockeyLeagueSL/videos/1233314825158362" target="_blank">Season 1 Highlights</a></h6>
                                </div>
                                <a class="gt-link" href="https://web.facebook.com/PremierHockeyLeagueSL/videos/1233314825158362" target="_blank" data-rel="prettyPhoto[gallery1]"><i class="fas fa-play"></i></a>
                                <img src="home/img/gallery-3.png" alt="">
                            </div>
                        </li> 
                    <li class="item f1">
                        <div class="gthumb">
                            <div class="hv-info">
                                <h6><a href="#" target="_blank">Closing Ceremony</a></h6>
                            </div>
                            <a class="gt-link" href="home/images/Update2026_02/new3.jpg" target="_blank"
                                data-rel="prettyPhoto[gallery1]"><i class="far fa-image"></i></a>
                            <img src="home/images/Update2026_02/new3.jpg" alt="">
                        </div>
                    </li>
                    <li class="item f1">
                        <div class="gthumb">
                            <div class="hv-info">
                                <h6><a href="#" target="_blank">Tournament Officials</a></h6>
                            </div>
                            <a class="gt-link" href="hhome/images/Update2026_02/new4.jpg" target="_blank"
                                data-rel="prettyPhoto[gallery1]"><i class="far fa-image"></i></a>
                            <img src="home/images/Update2026_02/new4.jpg" alt="">
                        </div>
                    </li>
                     <li class="item f2">
                        <div class="gthumb">
                            <div class="hv-info">
                                <a href="https://web.facebook.com/PremierHockeyLeagueSL/videos/1654738011821443"
                                    target="_blank" class="play"><i class="fas fa-play"></i></a>
                                <h6 class="mt-5"><a
                                        href="https://web.facebook.com/PremierHockeyLeagueSL/videos/1654738011821443"
                                        target="_blank">Match Hype</a></h6>
                            </div>
                            <a class="gt-link"
                                href="https://web.facebook.com/PremierHockeyLeagueSL/videos/1654738011821443"
                                target="_blank" data-rel="prettyPhoto[gallery1]"><i class="fas fa-play"></i></a>
                            <img src="home/img/gallery-6.png" alt="">
                        </div>
                    </li>
                    <li class="item f1">
                        <div class="gthumb">
                            <div class="hv-info">
                                <h6><a href="#" target="_blank">Inspiring Future Stars</a></h6>
                            </div>
                            <a class="gt-link" href="home/img/gallery-7.png" target="_blank"
                                data-rel="prettyPhoto[gallery1]"><i class="far fa-image"></i></a>
                            <img src="home/img/gallery-7.png" alt="">
                        </div>
                    </li>
                    <li class="item f1">
                        <div class="gthumb">
                            <div class="hv-info">
                                <h6><a href="#" target="_blank">Excitement</a></h6>
                            </div>
                            <a class="gt-link" href="home/img/gallery-8.png" target="_blank"
                                data-rel="prettyPhoto[gallery1]"><i class="far fa-image"></i></a>
                            <img src="home/img/gallery-8.png" alt="">
                        </div>
                    </li>
                    <li class="item f1">
                        <div class="gthumb">
                            <div class="hv-info">
                                <h6><a href="#" target="_blank">Champions</a></h6>
                            </div>
                            <a class="gt-link" href="home/img/gal1.jpg" target="_blank"
                                data-rel="prettyPhoto[gallery1]"><i class="far fa-image"></i></a>
                            <img src="home/img/gal1.jpg" alt="" class="gallery-uniform-img">
                        </div>
                    </li>
                    <li class="item f1">
                        <div class="gthumb">
                            <div class="hv-info">
                                <h6><a href="#" target="_blank">Teamwork</a></h6>
                            </div>
                            <a class="gt-link" href="home/img/gal2.jpg" target="_blank"
                                data-rel="prettyPhoto[gallery1]"><i class="far fa-image"></i></a>
                            <img src="home/img/gal2.jpg" alt="" class="gallery-uniform-img">
                        </div>
                    </li>
                    <li class="item f1">
                        <div class="gthumb">
                            <div class="hv-info">
                                <h6><a href="#" target="_blank">Strength</a></h6>
                            </div>
                            <a class="gt-link" href="home/img/gal3.jpg" target="_blank"
                                data-rel="prettyPhoto[gallery1]"><i class="far fa-image"></i></a>
                            <img src="home/img/gal3.jpg" alt="" class="gallery-uniform-img">
                        </div>
                    </li>
                    <li class="item f1">
                        <div class="gthumb">
                            <div class="hv-info">
                                <h6><a href="#" target="_blank">Spectatorship</a></h6>
                            </div>
                            <a class="gt-link" href="home/img/gal4.jpg" target="_blank"
                                data-rel="prettyPhoto[gallery1]"><i class="far fa-image"></i></a>
                            <img src="home/img/gal4.jpg" alt="" class="gallery-uniform-img">
                        </div>
                    </li>
                    <li class="item f1">
                        <div class="gthumb">
                            <div class="hv-info">
                                <h6><a href="#" target="_blank">Smiles</a></h6>
                            </div>
                            <a class="gt-link" href="home/img/gal5.jpg" target="_blank"
                                data-rel="prettyPhoto[gallery1]"><i class="far fa-image"></i></a>
                            <img src="home/img/gal5.jpg" alt="" class="gallery-uniform-img">
                        </div>
                    </li>
                    <li class="item f1">
                        <div class="gthumb">
                            <div class="hv-info">
                                <h6><a href="#" target="_blank">Cheer</a></h6>
                            </div>
                            <a class="gt-link" href="home/img/gal6.jpg" target="_blank"
                                data-rel="prettyPhoto[gallery1]"><i class="far fa-image"></i></a>
                            <img src="home/img/gal6.jpg" alt="" class="gallery-uniform-img">
                        </div>
                    </li>
                    <li class="item f1">
                        <div class="gthumb">
                            <div class="hv-info">
                                <h6><a href="#" target="_blank">Battles</a></h6>
                            </div>
                            <a class="gt-link" href="home/img/gal7.jpg" target="_blank"
                                data-rel="prettyPhoto[gallery1]"><i class="far fa-image"></i></a>
                            <img src="home/img/gal7.jpg" alt="" class="gallery-uniform-img">
                        </div>
                    </li>
                    <li class="item f1">
                        <div class="gthumb">
                            <div class="hv-info">
                                <h6><a href="#" target="_blank">Effort</a></h6>
                            </div>
                            <a class="gt-link" href="home/img/gal8.jpg" target="_blank"
                                data-rel="prettyPhoto[gallery1]"><i class="far fa-image"></i></a>
                            <img src="home/img/gal8.jpg" alt="" class="gallery-uniform-img">
                        </div>
                    </li>
                    <li class="item f1">
                        <div class="gthumb">
                            <div class="hv-info">
                                <h6><a href="#" target="_blank">Brotherhood</a></h6>
                            </div>
                            <a class="gt-link" href="home/img/gal9.jpg" target="_blank"
                                data-rel="prettyPhoto[gallery1]"><i class="far fa-image"></i></a>
                            <img src="home/img/gal9.jpg" alt="" class="gallery-uniform-img">
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section> -->
<!--League Players Squad End-->
<!-- </div>  -->

 <!-- <section class="wf100 p0-80 players-squad portfolio filter-gallery" id="">
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6">
                <div class="section-title">
                    <h2>Season 01 Gallery</h2>
                </div>
            </div>
            <div class="col-md-6">
                <div id="filters" class="button-group">
                    <button class="button is-checked" data-filter="*">All Results</button>
                    <button class="button" data-filter=".f1">Photography</button>
                    <button class="button" data-filter=".f2">Videos </button>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <ul class="gallery isotope items">
                    <li class="item f1">
                        <div class="gthumb">
                            <div class="hv-info">
                                <h6><a href="#" target="_blank">Opening Ceremony</a></h6>
                            </div>
                            <a class="gt-link" href="home/img/gallery-1.png" target="_blank"
                                data-rel="prettyPhoto[gallery1]"><i class="far fa-image"></i></a>
                            <img src="home/img/gallery-1.png" alt="">
                        </div>
                    </li>
                    <li class="item f1">
                        <div class="gthumb">
                            <div class="hv-info">
                                <h6><a href="#" target="_blank">Thrilled Spectators</a></h6>
                            </div>
                            <a class="gt-link" href="home/img/seasongallery2.jpg" target="_blank"
                                data-rel="prettyPhoto[gallery1]"><i class="far fa-image"></i></a>
                            <img src="home/img/seasongallery2.jpg" alt="">
                        </div>
                    </li>
                    <li class="item f2">
                            <div class="gthumb">
                                <div class="hv-info">
                                    <a href="https://web.facebook.com/PremierHockeyLeagueSL/videos/1233314825158362" target="_blank" class="play"><i class="fas fa-play"></i></a>
                                    <h6 class="mt-5"><a href="https://web.facebook.com/PremierHockeyLeagueSL/videos/1233314825158362" target="_blank">Season 1 Highlights</a></h6>
                                </div>
                                <a class="gt-link" href="https://web.facebook.com/PremierHockeyLeagueSL/videos/1233314825158362" target="_blank" data-rel="prettyPhoto[gallery1]"><i class="fas fa-play"></i></a>
                                <img src="home/img/gallery-3.png" alt="">
                            </div>
                        </li>
                    <li class="item f1">
                        <div class="gthumb">
                            <div class="hv-info">
                                <h6><a href="#" target="_blank">Closing Ceremony</a></h6>
                            </div>
                            <a class="gt-link" href="home/img/seasongallery3.jpg" target="_blank"
                                data-rel="prettyPhoto[gallery1]"><i class="far fa-image"></i></a>
                            <img src="home/img/seasongallery3.jpg" alt="">
                        </div>
                    </li>
                    
                    <li class="item f1">
                        <div class="gthumb">
                            <div class="hv-info">
                                <h6><a href="#" target="_blank">Tournament Officials</a></h6>
                            </div>
                            <a class="gt-link" href="home/img/seasongallery4.jpg" target="_blank"
                                data-rel="prettyPhoto[gallery1]"><i class="far fa-image"></i></a>
                            <img src="home/img/seasongallery4.jpg" alt="">
                        </div>
                    </li>

                    <li class="item f2">
                        <div class="gthumb">
                            <div class="hv-info">
                                <a href="https://web.facebook.com/PremierHockeyLeagueSL/videos/1654738011821443"
                                    target="_blank" class="play"><i class="fas fa-play"></i></a>
                                <h6 class="mt-5"><a
                                        href="https://web.facebook.com/PremierHockeyLeagueSL/videos/1654738011821443"
                                        target="_blank">Match Hype</a></h6>
                            </div>
                            <a class="gt-link"
                                href="https://web.facebook.com/PremierHockeyLeagueSL/videos/1654738011821443"
                                target="_blank" data-rel="prettyPhoto[gallery1]"><i class="fas fa-play"></i></a>
                            <img src="home/img/gallery-6.png" alt="">
                        </div>
                    </li> 
                    <li class="item f1">
                        <div class="gthumb">
                            <div class="hv-info">
                                <h6><a href="#" target="_blank">Inspiring Future Stars</a></h6>
                            </div>
                            <a class="gt-link" href="home/img/seasongallery5.jpg" target="_blank"
                                data-rel="prettyPhoto[gallery1]"><i class="far fa-image"></i></a>
                            <img src="home/img/seasongallery5.jpg" alt="">
                        </div>
                    </li>
                    <li class="item f1">
                        <div class="gthumb">
                            <div class="hv-info">
                                <h6><a href="#" target="_blank">Excitement</a></h6>
                            </div>
                            <a class="gt-link" href="home/img/seasongallery6.jpg" target="_blank"
                                data-rel="prettyPhoto[gallery1]"><i class="far fa-image"></i></a>
                            <img src="home/img/seasongallery6.jpg" alt="">
                        </div>
                    </li>
                    <li class="item f1">
                        <div class="gthumb">
                            <div class="hv-info">
                                <h6><a href="#" target="_blank">Champions</a></h6>
                            </div>
                            <a class="gt-link" href="home/img/seasongallery7.jpg" target="_blank"
                                data-rel="prettyPhoto[gallery1]"><i class="far fa-image"></i></a>
                            <img src="home/img/seasongallery7.jpg" alt="" class="gallery-uniform-img">
                        </div>
                    </li>
                    <li class="item f1">
                        <div class="gthumb">
                            <div class="hv-info">
                                <h6><a href="#" target="_blank">Teamwork</a></h6>
                            </div>
                            <a class="gt-link" href="home/img/seasongallery8.jpg" target="_blank"
                                data-rel="prettyPhoto[gallery1]"><i class="far fa-image"></i></a>
                            <img src="home/img/seasongallery8.jpg" alt="" class="gallery-uniform-img">
                        </div>
                    </li>
                    <li class="item f1">
                        <div class="gthumb">
                            <div class="hv-info">
                                <h6><a href="#" target="_blank">Strength</a></h6>
                            </div>
                            <a class="gt-link" href="home/img/seasongallery9.jpg" target="_blank"
                                data-rel="prettyPhoto[gallery1]"><i class="far fa-image"></i></a>
                            <img src="home/img/seasongallery9.jpg" alt="" class="gallery-uniform-img">
                        </div>
                    </li>
                    <li class="item f1">
                        <div class="gthumb">
                            <div class="hv-info">
                                <h6><a href="#" target="_blank">Cheer</a></h6>
                            </div>
                            <a class="gt-link" href="home/img/seasongallery10.jpg" target="_blank"
                                data-rel="prettyPhoto[gallery1]"><i class="far fa-image"></i></a>
                            <img src="home/img/seasongallery10.jpg" alt="" class="gallery-uniform-img">
                        </div>
                    </li>
                    <li class="item f1">
                        <div class="gthumb">
                            <div class="hv-info">
                                <h6><a href="#" target="_blank">Spectatorship</a></h6>
                            </div>
                            <a class="gt-link" href="home/img/seasongallery12.jpg" target="_blank"
                                data-rel="prettyPhoto[gallery1]"><i class="far fa-image"></i></a>
                            <img src="home/img/seasongallery12.jpg" alt="" class="gallery-uniform-img">
                        </div>
                    </li>
                    <li class="item f1">
                        <div class="gthumb">
                            <div class="hv-info">
                                <h6><a href="#" target="_blank">Smiles</a></h6>
                            </div>
                            <a class="gt-link" href="home/img/seasongallery11.jpg" target="_blank"
                                data-rel="prettyPhoto[gallery1]"><i class="far fa-image"></i></a>
                            <img src="home/img/seasongallery11.jpg" alt="" class="gallery-uniform-img">
                        </div>
                    </li>
                    <li class="item f1">
                        <div class="gthumb">
                            <div class="hv-info">
                                <h6><a href="#" target="_blank">Battles</a></h6>
                            </div>
                            <a class="gt-link" href="home/img/seasongallery13.jpg" target="_blank"
                                data-rel="prettyPhoto[gallery1]"><i class="far fa-image"></i></a>
                            <img src="home/img/seasongallery13.jpg" alt="" class="gallery-uniform-img">
                        </div>
                    </li>
                    <li class="item f1">
                        <div class="gthumb">
                            <div class="hv-info">
                                <h6><a href="#" target="_blank">Effort</a></h6>
                            </div>
                            <a class="gt-link" href="home/img/seasongallery14.jpg" target="_blank"
                                data-rel="prettyPhoto[gallery1]"><i class="far fa-image"></i></a>
                            <img src="home/img/seasongallery14.jpg" alt="" class="gallery-uniform-img">
                        </div>
                    </li>
                    <li class="item f1">
                        <div class="gthumb">
                            <div class="hv-info">
                                <h6><a href="#" target="_blank">Brotherhood</a></h6>
                            </div>
                            <a class="gt-link" href="home/img/gal9.jpg" target="_blank"
                                data-rel="prettyPhoto[gallery1]"><i class="far fa-image"></i></a>
                            <img src="home/img/gal9.jpg" alt="" class="gallery-uniform-img">
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section> -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const track = document.getElementById('launchSliderTrack');
        const prevBtn = document.getElementById('prevBtn');
        const nextBtn = document.getElementById('nextBtn');
        const dots = document.querySelectorAll('.dot');

        let currentSlide = 0; // Current individual slide position (0-9)
        const totalSlides = 10;
        let slidesToShow = 4;

        // Adjust slides to show based on screen size
        function updateSlidesToShow() {
            if (window.innerWidth <= 768) {
                slidesToShow = 1;
            } else {
                slidesToShow = 4;
            }
        }

        // Update slider position
        function updateSlider() {
            let translateX = 0;

            if (slidesToShow === 4) {
                // Desktop: Group-based navigation
                if (currentSlide === 0) {
                    translateX = 0; // Show slides 1-4
                } else if (currentSlide === 1) {
                    translateX = -40; // Show slides 5-8 (move 4 slides = 40%)
                } else if (currentSlide === 2) {
                    translateX = -60; // Show slides 9-10 + 1-2 (move 6 slides = 60%)
                }

                // Update dots
                dots.forEach((dot, index) => {
                    dot.classList.toggle('active', index === currentSlide);
                });
            } else {
                // Mobile: Individual slide navigation
                translateX = -(currentSlide * 100);
            }

            track.style.transform = `translateX(${translateX}%)`;
        }

        // Next slide with looping
        function nextSlide() {
            if (slidesToShow === 4) {
                // Desktop: Move to next group
                if (currentSlide === 0) currentSlide = 1;
                else if (currentSlide === 1) currentSlide = 2;
                else currentSlide = 0; // Loop back to start
            } else {
                // Mobile: Move to next individual slide
                currentSlide = (currentSlide + 1) % totalSlides;
            }
            updateSlider();
        }

        // Previous slide with looping
        function prevSlide() {
            if (slidesToShow === 4) {
                // Desktop: Move to previous group
                if (currentSlide === 0) currentSlide = 2;
                else if (currentSlide === 1) currentSlide = 0;
                else currentSlide = 1; // From group 3 to group 2
            } else {
                // Mobile: Move to previous individual slide
                currentSlide = (currentSlide - 1 + totalSlides) % totalSlides;
            }
            updateSlider();
        }

        // Event listeners
        nextBtn.addEventListener('click', nextSlide);
        prevBtn.addEventListener('click', prevSlide);

        // Dot navigation (desktop only)
        dots.forEach((dot, index) => {
            dot.addEventListener('click', () => {
                if (slidesToShow === 4) {
                    // Jump to specific group
                    if (index === 0) currentSlide = 0; // Show images 1-4
                    else if (index === 1) currentSlide = 1; // Show images 5-8
                    else if (index === 2) currentSlide = 2; // Show images 9-10 + 1-2
                    updateSlider();
                }
            });
        });

        // Handle window resize
        window.addEventListener('resize', () => {
            const oldSlidesToShow = slidesToShow;
            updateSlidesToShow();

            // Reset position when switching between desktop and mobile
            if (oldSlidesToShow !== slidesToShow) {
                currentSlide = 0;
            }

            updateSlider();
        });

        // Initialize
        updateSlidesToShow();
        updateSlider();
    });

    // Counter Animation Function
    function animateCounters() {
        const counters = document.querySelectorAll('.counter');

        counters.forEach(counter => {
            const target = parseInt(counter.getAttribute('data-target'));
            const increment = target / 100; // Animation duration control
            let current = 0;

            const updateCounter = () => {
                if (current < target) {
                    current += increment;
                    if (current > target) current = target;

                    // Format number (add leading zero for single digits if needed)
                    if (target < 10) {
                        counter.textContent = String(Math.floor(current)).padStart(2, '0');
                    } else {
                        counter.textContent = Math.floor(current);
                    }

                    requestAnimationFrame(updateCounter);
                } else {
                    // Ensure final value is exact
                    if (target < 10) {
                        counter.textContent = String(target).padStart(2, '0');
                    } else {
                        counter.textContent = target;
                    }
                }
            };

            updateCounter();
        });
    }

    // Intersection Observer for triggering animation when in viewport
    function initCounterAnimation() {
        const iconsBanner = document.querySelector('.icons-banner-section');

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    // Add small delay before starting animation
                    setTimeout(() => {
                        animateCounters();
                    }, 200);
                    observer.unobserve(entry.target); // Only animate once
                }
            });
        }, {
            threshold: 0.5 // Trigger when 50% of the element is visible
        });

        if (iconsBanner) {
            observer.observe(iconsBanner);
        }
    }

    // Initialize when DOM is loaded
    document.addEventListener('DOMContentLoaded', function() {
        initCounterAnimation();
    });
</script>

<?php include 'footer.php'; ?>
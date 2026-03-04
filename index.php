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
                                            <li><a href="">Season 1(2024)</a></li>
                                            <li><a href="">Season 2(2025)</a></li>
                                        </ul>
                                    </li>
                                     <li class="nav-item"> <a href="#">About</a></li>   
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
 </div>
<!---End of navigation Bar with past Seasons-->

<!--Main Slider Start-->
<div class="main-slider">
    <div class="home2-slider rev_slider_wrapper">
        <!-- START REVOLUTION SLIDER -->
        <div class="rev_slider_wrapper fullwidthbanner-container">
            <div id="rev-slider2" class="rev_slider fullwidthabanner">
                <ul>
                    <li data-transition="fade">
                        <img src="home/images/Update2026_02/topBanner-1.png" alt="" width="1920" height="750"
                            data-bgposition="top center" data-bgfit="cover" data-bgrepeat="no-repeat"
                            data-bgparallax="1">
                        <div class="tp-caption tp-resizeme" data-x="right" data-hoffset="350" data-y="top"
                            data-voffset="0" data-transform_idle="o:1;"
                            data-transform_in="x:[-75%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0.01;s:3000;e:Power3.easeOut;"
                            data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"
                            data-mask_in="x:[100%];y:0;s:inherit;e:inherit;" data-splitin="none" data-splitout="none"
                            data-start="700">
                        </div>
                        <div class="tp-caption tp-resizeme" data-x="right" data-hoffset="850" data-y="bottom"
                            data-voffset="100" data-transform_idle="o:1;"
                            data-transform_in="x:[-75%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0.01;s:3000;e:Power3.easeOut;"
                            data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"
                            data-mask_in="x:[100%];y:0;s:inherit;e:inherit;" data-splitin="none" data-splitout="none"
                            data-start="700">
                        </div>
                        <div class="tp-caption tp-resizeme" data-x="left" data-hoffset="290" data-y="top"
                            data-voffset="170" data-transform_idle="o:1;"
                            data-transform_in="x:[-75%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0.01;s:3000;e:Power3.easeOut;"
                            data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"
                            data-mask_in="x:[100%];y:0;s:inherit;e:inherit;" data-splitin="none" data-splitout="none"
                            data-start="700">
                            <div class="slide-content-box">
                                <!-- <h1><span>November 8-29</span><br></h1> -->
                            </div>
                        </div>
                        <div class="tp-caption tp-resizeme" data-x="left" data-hoffset="400" data-y="top"
                            data-voffset="430" data-transform_idle="o:1;"
                            data-transform_in="x:[-175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0.01;s:3000;e:Power3.easeOut;"
                            data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"
                            data-mask_in="x:[100%];y:0;s:inherit;e:inherit;" data-splitin="none" data-splitout="none"
                            data-start="700">
                        </div>
                    </li>

                    <li data-transition="fade">
                        <img src="home/images/Update2026_02/topBanner-2.png" alt="" width="1920" height="750"
                            data-bgposition="top center" data-bgfit="cover" data-bgrepeat="no-repeat"
                            data-bgparallax="1">
                        <div class="tp-caption tp-resizeme" data-x="right" data-hoffset="350" data-y="top"
                            data-voffset="0" data-transform_idle="o:1;"
                            data-transform_in="x:[-75%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0.01;s:3000;e:Power3.easeOut;"
                            data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"
                            data-mask_in="x:[100%];y:0;s:inherit;e:inherit;" data-splitin="none" data-splitout="none"
                            data-start="700">
                        </div>
                        <div class="tp-caption tp-resizeme" data-x="left" data-hoffset="400" data-y="top"
                            data-voffset="205" data-transform_idle="o:1;"
                            data-transform_in="x:[-75%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0.01;s:3000;e:Power3.easeOut;"
                            data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"
                            data-mask_in="x:[100%];y:0;s:inherit;e:inherit;" data-splitin="none" data-splitout="none"
                            data-start="700">
                            <div class="slide-content-box">
                                <h1></h1>
                            </div>
                        </div>
                        <!-- <div class="tp-caption tp-resizeme" data-x="left" data-hoffset="400" data-y="top" data-voffset="430" data-transform_idle="o:1;" data-transform_in="x:[-175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0.01;s:3000;e:Power3.easeOut;" data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-mask_in="x:[100%];y:0;s:inherit;e:inherit;" data-splitin="none" data-splitout="none" data-start="700">
                            <div class="slide-content-box"> <a href="#">View Latest News</a> </div>
                        </div> -->
                    </li>
                    <li data-transition="fade">
                        <img src="home/images/Update2026_02/topBanner-3.png" alt="" width="1920" height="750"
                            data-bgposition="top center" data-bgfit="cover" data-bgrepeat="no-repeat"
                            data-bgparallax="1">
                        <div class="tp-caption tp-resizeme" data-x="right" data-hoffset="350" data-y="top"
                            data-voffset="0" data-transform_idle="o:1;"
                            data-transform_in="x:[-75%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0.01;s:3000;e:Power3.easeOut;"
                            data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"
                            data-mask_in="x:[100%];y:0;s:inherit;e:inherit;" data-splitin="none" data-splitout="none"
                            data-start="700">
                        </div>
                        <div class="tp-caption tp-resizeme" data-x="left" data-hoffset="400" data-y="top"
                            data-voffset="205" data-transform_idle="o:1;"
                            data-transform_in="x:[-75%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0.01;s:3000;e:Power3.easeOut;"
                            data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"
                            data-mask_in="x:[100%];y:0;s:inherit;e:inherit;" data-splitin="none" data-splitout="none"
                            data-start="700">
                            <div class="slide-content-box">
                                <h1></h1>
                            </div>
                        </div>
                        <!-- <div class="tp-caption tp-resizeme" data-x="left" data-hoffset="400" data-y="top" data-voffset="430" data-transform_idle="o:1;" data-transform_in="x:[-175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0.01;s:3000;e:Power3.easeOut;" data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-mask_in="x:[100%];y:0;s:inherit;e:inherit;" data-splitin="none" data-splitout="none" data-start="700">
                            <div class="slide-content-box"> <a href="#">View Latest News</a> </div>
                        </div> -->
                    </li>
                    <li data-transition="fade">
                        <img src="home/images/Update2026_02/topBanner-4.png" alt="" width="1920" height="750"
                            data-bgposition="top center" data-bgfit="cover" data-bgrepeat="no-repeat"
                            data-bgparallax="1">
                        <div class="tp-caption tp-resizeme" data-x="right" data-hoffset="350" data-y="top"
                            data-voffset="0" data-transform_idle="o:1;"
                            data-transform_in="x:[-75%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0.01;s:3000;e:Power3.easeOut;"
                            data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"
                            data-mask_in="x:[100%];y:0;s:inherit;e:inherit;" data-splitin="none" data-splitout="none"
                            data-start="700">
                        </div>
                        <div class="tp-caption tp-resizeme" data-x="left" data-hoffset="400" data-y="top"
                            data-voffset="205" data-transform_idle="o:1;"
                            data-transform_in="x:[-75%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0.01;s:3000;e:Power3.easeOut;"
                            data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"
                            data-mask_in="x:[100%];y:0;s:inherit;e:inherit;" data-splitin="none" data-splitout="none"
                            data-start="700">
                            <div class="slide-content-box">
                                <h1></h1>
                            </div>
                        </div>
                        <!-- <div class="tp-caption tp-resizeme" data-x="left" data-hoffset="400" data-y="top" data-voffset="430" data-transform_idle="o:1;" data-transform_in="x:[-175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0.01;s:3000;e:Power3.easeOut;" data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-mask_in="x:[100%];y:0;s:inherit;e:inherit;" data-splitin="none" data-splitout="none" data-start="700">
                            <div class="slide-content-box"> <a href="#">View Latest News</a> </div>
                        </div> -->
                    </li>
                    <li data-transition="fade">
                        <img src="home/images/Update2026_02/topBanner-5.png" alt="" width="1920" height="750"
                            data-bgposition="top center" data-bgfit="cover" data-bgrepeat="no-repeat"
                            data-bgparallax="1">
                        <div class="tp-caption tp-resizeme" data-x="right" data-hoffset="350" data-y="top"
                            data-voffset="0" data-transform_idle="o:1;"
                            data-transform_in="x:[-75%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0.01;s:3000;e:Power3.easeOut;"
                            data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"
                            data-mask_in="x:[100%];y:0;s:inherit;e:inherit;" data-splitin="none" data-splitout="none"
                            data-start="700">
                        </div>
                        <div class="tp-caption tp-resizeme" data-x="left" data-hoffset="400" data-y="top"
                            data-voffset="205" data-transform_idle="o:1;"
                            data-transform_in="x:[-75%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0.01;s:3000;e:Power3.easeOut;"
                            data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"
                            data-mask_in="x:[100%];y:0;s:inherit;e:inherit;" data-splitin="none" data-splitout="none"
                            data-start="700">
                            <div class="slide-content-box">
                                <h1></h1>
                            </div>
                        </div>
                        <!-- <div class="tp-caption tp-resizeme" data-x="left" data-hoffset="400" data-y="top" data-voffset="430" data-transform_idle="o:1;" data-transform_in="x:[-175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0.01;s:3000;e:Power3.easeOut;" data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-mask_in="x:[100%];y:0;s:inherit;e:inherit;" data-splitin="none" data-splitout="none" data-start="700">
                            <div class="slide-content-box"> <a href="#">View Latest News</a> </div>
                        </div> -->
                    </li>
                    <li data-transition="fade">
                        <img src="home/images/Update2026_02/topBanner-8.png" alt="" width="1920" height="750"
                            data-bgposition="top center" data-bgfit="cover" data-bgrepeat="no-repeat"
                            data-bgparallax="1">
                        <div class="tp-caption tp-resizeme" data-x="right" data-hoffset="350" data-y="top"
                            data-voffset="0" data-transform_idle="o:1;"
                            data-transform_in="x:[-75%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0.01;s:3000;e:Power3.easeOut;"
                            data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"
                            data-mask_in="x:[100%];y:0;s:inherit;e:inherit;" data-splitin="none" data-splitout="none"
                            data-start="700">
                        </div>
                        <div class="tp-caption tp-resizeme" data-x="left" data-hoffset="400" data-y="top"
                            data-voffset="205" data-transform_idle="o:1;"
                            data-transform_in="x:[-75%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0.01;s:3000;e:Power3.easeOut;"
                            data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"
                            data-mask_in="x:[100%];y:0;s:inherit;e:inherit;" data-splitin="none" data-splitout="none"
                            data-start="700">
                            <div class="slide-content-box">
                                <h1></h1>
                            </div>
                        </div>
                        <!-- <div class="tp-caption tp-resizeme" data-x="left" data-hoffset="400" data-y="top" data-voffset="430" data-transform_idle="o:1;" data-transform_in="x:[-175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0.01;s:3000;e:Power3.easeOut;" data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-mask_in="x:[100%];y:0;s:inherit;e:inherit;" data-splitin="none" data-splitout="none" data-start="700">
                            <div class="slide-content-box"> <a href="#">View Latest News</a> </div>
                        </div> -->
                    </li>
                    <li data-transition="fade">
                        <img src="home/images/Update2026_02/topBanner-9.png" alt="" width="1920" height="750"
                            data-bgposition="top center" data-bgfit="cover" data-bgrepeat="no-repeat"
                            data-bgparallax="1">
                        <div class="tp-caption tp-resizeme" data-x="right" data-hoffset="350" data-y="top"
                            data-voffset="0" data-transform_idle="o:1;"
                            data-transform_in="x:[-75%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0.01;s:3000;e:Power3.easeOut;"
                            data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"
                            data-mask_in="x:[100%];y:0;s:inherit;e:inherit;" data-splitin="none" data-splitout="none"
                            data-start="700">
                        </div>
                        <div class="tp-caption tp-resizeme" data-x="left" data-hoffset="400" data-y="top"
                            data-voffset="205" data-transform_idle="o:1;"
                            data-transform_in="x:[-75%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0.01;s:3000;e:Power3.easeOut;"
                            data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"
                            data-mask_in="x:[100%];y:0;s:inherit;e:inherit;" data-splitin="none" data-splitout="none"
                            data-start="700">
                            <div class="slide-content-box">
                                <h1></h1>
                            </div>
                        </div>
                        <!-- <div class="tp-caption tp-resizeme" data-x="left" data-hoffset="400" data-y="top" data-voffset="430" data-transform_idle="o:1;" data-transform_in="x:[-175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0.01;s:3000;e:Power3.easeOut;" data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-mask_in="x:[100%];y:0;s:inherit;e:inherit;" data-splitin="none" data-splitout="none" data-start="700">
                            <div class="slide-content-box"> <a href="#">View Latest News</a> </div>
                        </div> -->
                    </li>
                    <li data-transition="fade">
                        <img src="home/images/Update2026_02/topBanner-11.png" alt="" width="1920" height="750"
                            data-bgposition="top center" data-bgfit="cover" data-bgrepeat="no-repeat"
                            data-bgparallax="1">
                        <div class="tp-caption tp-resizeme" data-x="right" data-hoffset="350" data-y="top"
                            data-voffset="0" data-transform_idle="o:1;"
                            data-transform_in="x:[-75%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0.01;s:3000;e:Power3.easeOut;"
                            data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"
                            data-mask_in="x:[100%];y:0;s:inherit;e:inherit;" data-splitin="none" data-splitout="none"
                            data-start="700">
                        </div>
                        <div class="tp-caption tp-resizeme" data-x="left" data-hoffset="400" data-y="top"
                            data-voffset="205" data-transform_idle="o:1;"
                            data-transform_in="x:[-75%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0.01;s:3000;e:Power3.easeOut;"
                            data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"
                            data-mask_in="x:[100%];y:0;s:inherit;e:inherit;" data-splitin="none" data-splitout="none"
                            data-start="700">
                            <div class="slide-content-box">
                                <h1></h1>
                            </div>
                        </div>
                        <!-- <div class="tp-caption tp-resizeme" data-x="left" data-hoffset="400" data-y="top" data-voffset="430" data-transform_idle="o:1;" data-transform_in="x:[-175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0.01;s:3000;e:Power3.easeOut;" data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-mask_in="x:[100%];y:0;s:inherit;e:inherit;" data-splitin="none" data-splitout="none" data-start="700">
                            <div class="slide-content-box"> <a href="#">View Latest News</a> </div>
                        </div> -->
                    </li>
                    <li data-transition="fade">
                        <img src="home/images/Update2026_02/topBanner-12.png" alt="" width="1920" height="750"
                            data-bgposition="top center" data-bgfit="cover" data-bgrepeat="no-repeat"
                            data-bgparallax="1">
                        <div class="tp-caption tp-resizeme" data-x="right" data-hoffset="350" data-y="top"
                            data-voffset="0" data-transform_idle="o:1;"
                            data-transform_in="x:[-75%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0.01;s:3000;e:Power3.easeOut;"
                            data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"
                            data-mask_in="x:[100%];y:0;s:inherit;e:inherit;" data-splitin="none" data-splitout="none"
                            data-start="700">
                        </div>
                        <div class="tp-caption tp-resizeme" data-x="left" data-hoffset="400" data-y="top"
                            data-voffset="205" data-transform_idle="o:1;"
                            data-transform_in="x:[-75%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0.01;s:3000;e:Power3.easeOut;"
                            data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"
                            data-mask_in="x:[100%];y:0;s:inherit;e:inherit;" data-splitin="none" data-splitout="none"
                            data-start="700">
                            <div class="slide-content-box">
                                <h1></h1>
                            </div>
                        </div>
                        <!-- <div class="tp-caption tp-resizeme" data-x="left" data-hoffset="400" data-y="top" data-voffset="430" data-transform_idle="o:1;" data-transform_in="x:[-175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0.01;s:3000;e:Power3.easeOut;" data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-mask_in="x:[100%];y:0;s:inherit;e:inherit;" data-splitin="none" data-splitout="none" data-start="700">
                            <div class="slide-content-box"> <a href="#">View Latest News</a> </div>
                        </div> -->
                    </li>
                    <li data-transition="fade">
                        <img src="home/images/Update2026_02/topBanner-14.png" alt="" width="1920" height="750"
                            data-bgposition="top center" data-bgfit="cover" data-bgrepeat="no-repeat"
                            data-bgparallax="1">
                        <div class="tp-caption tp-resizeme" data-x="right" data-hoffset="350" data-y="top"
                            data-voffset="0" data-transform_idle="o:1;"
                            data-transform_in="x:[-75%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0.01;s:3000;e:Power3.easeOut;"
                            data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"
                            data-mask_in="x:[100%];y:0;s:inherit;e:inherit;" data-splitin="none" data-splitout="none"
                            data-start="700">
                        </div>
                        <div class="tp-caption tp-resizeme" data-x="left" data-hoffset="400" data-y="top"
                            data-voffset="205" data-transform_idle="o:1;"
                            data-transform_in="x:[-75%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0.01;s:3000;e:Power3.easeOut;"
                            data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"
                            data-mask_in="x:[100%];y:0;s:inherit;e:inherit;" data-splitin="none" data-splitout="none"
                            data-start="700">
                            <div class="slide-content-box">
                                <h1></h1>
                            </div>
                        </div>
                        <!-- <div class="tp-caption tp-resizeme" data-x="left" data-hoffset="400" data-y="top" data-voffset="430" data-transform_idle="o:1;" data-transform_in="x:[-175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0.01;s:3000;e:Power3.easeOut;" data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-mask_in="x:[100%];y:0;s:inherit;e:inherit;" data-splitin="none" data-splitout="none" data-start="700">
                            <div class="slide-content-box"> <a href="#">View Latest News</a> </div>
                        </div> -->
                    </li>
                </ul>
            </div>
        </div>
        <!-- END REVOLUTION SLIDER -->
    </div>
</div>
<!--Main Slider End-->

<!--Main Content Start-->
<div class="main-content wf100">
    <!--Slide tabs start-->
    <div class="slider-tabs wf100 hide-mobile">
        <div class="container">
            <div class="row">
                <ul>
                    <li class="col-lg-4">
                        <div class="slidetab-box"> <span style="color: #c21831">9</span>
                            <h6 style="font-size: 45px;"><a href="#">Teams</a></h6>
                        </div>
                    </li>
                    <li class="col-lg-4">
                        <div class="slidetab-box"> <span style="color: #c21831">250</span>
                            <h6 style="font-size: 45px; margin-left: 15px;"><a href="#">Players</a></h6>
                        </div>
                    </li>
                    <li class="col-lg-4">
                        <div class="slidetab-box"> <span style="color: #c21831">49</span>
                            <h6 style="font-size: 45px;"><a href="#">Matches</a></h6>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>


<section class="wf100 p80">
         <div class="container"> 
             <div class="row"> 
                 <!-- <div class="col-lg-4 col-md-6"> 
                      
                     <div class="next-match-widget"> 
                         <h5 class="title">Live Scores</h5> 
                         <div class="nmw-wrap"> 
                             <ul class="match-teams-vs"> 
                                 <li class="team-logo"><img src="home/images/logos/AF.png" width="50%" 
                                         alt=""> <strong>Skyhawks</strong> </li> 
                                 <li class="mvs"> <strong class="vs">VS</strong> </li> 
                                 <li class="team-logo"><img src="home/images/logos/RCHC.png" width="50%" 
                                         alt=""> 
                                     <strong>Royals</strong> 
                                 </li> 
                             </ul> 
                              <ul class="nmw-txt">
                                  <li><strong>Super Euro League</strong></li> 
                                 <li>20 December, 2020</li> 
                                 <li>04:00 PM GMT+</li> 
                                 <li><span>New Expo Stadium, NYK</span></li> 
                             </ul>  
                             <div class="defaultCountdown is-countdown"><span 
                                     class="countdown-row countdown-show2"><span class="countdown-section"><span 
                                             class="countdown-amount">3</span><span 
                                             class="countdown-period"></span></span><span 
                                         class="countdown-section"><span class="countdown-amount">4</span><span 
                                             class="countdown-period"></span></span></div> 
                             <div class="buy-ticket"><a href="#">08 November, 2025</a></div> 
                         </div> 
                     </div> 
                     
                 </div>  -->
                 <div class="col-lg-4 col-md-6"> 
                        
                     <div class="next-match-fixtures"> 
                         <ul class="match-teams-vs"> 
                             <li class="team-logo"><img src="home/images/logos/Wennappuwa.png" width="50%" 
                                     alt=""> 
                                 <strong>Wennappuwa 
                                 </strong> 
                             </li> 
                             <li class="mvs"> 
                                 <p> <strong style="font-size: 9.3px;">Astro Hockey Turf Colombo</strong> 11 November, 
                                     2025 
                                     05:00 PM IST </p> 
                                 <strong class="vs">VS</strong> 
                             </li> 
                             <li class="team-logo"><img src="home/images/logos/Navy.png" width="50%" 
                                     alt=""> 
                                 <strong>Navy</strong> 
                             </li> 
                         </ul> 
                         <ul class="nmf-loc"> 
                             <li style="font-size: 20px;"> 0</li>
                             <li style="font-size: 20px;"> 0</li> 
                         </ul> 
                     </div> 
                        
                     <div class="next-match-fixtures mb-4"> 
                         <ul class="match-teams-vs"> 
                             <li class="team-logo"><img src="home/images/logos/RCHC.png" width="50%" 
                                     alt=""> 
                                 <strong>Royals</strong> 
                             </li> 
                             <li class="mvs"> 
                                 <p> <strong style="font-size: 9.3px;">Astro Hockey Turf Colombo</strong> 11 November, 
                                     2025 
                                     06:30 PM IST </p> 
                                 <strong class="vs">VS</strong> 
                             </li> 
                             <li class="team-logo"><img src="home/images/logos/BRC.png" width="50%" 
                                     alt=""> <strong>BRC </strong> </li> 
                         </ul> 
                         <ul class="nmf-loc"> 
                            <li style="font-size: 20px;"> 0</li>
                             <li style="font-size: 20px;"> 0</li> 
                         </ul> 
                     </div> 
                        
                     <div class="next-match-fixtures mb-4"> 
                         <ul class="match-teams-vs"> 
                             <li class="team-logo"><img src="home/images/logos/Army.png" width="50%" 
                                     alt=""> 
                                 <strong>Defenders</strong> 
                             </li> 
                             <li class="mvs"> 
                                 <p> <strong style="font-size: 9.3px;">Astro Hockey Turf Colombo</strong> 11 November, 
                                     2025 
                                     08:00 PM IST </p> 
                                 <strong class="vs">VS</strong> 
                             </li> 
                             <li class="team-logo"><img src="home/images/logos/CH&FC.png" width="50%" 
                                     alt=""> <strong>Wizards </strong> </li> 
                         </ul> 
                         <ul class="nmf-loc"> 
                             <li style="font-size: 20px;"> 0</li>
                             <li style="font-size: 20px;"> 0</li>  
                         </ul> 
                     </div> 
                        

                 </div> 
                
                 <div class="col-lg-4"> 
                     <div class="point-table-widget"> 
                         <table> 
                             <thead> 
                                 <tr> 
                                     <th>P</th> 
                                     <th>Team</th> 
                                 </tr> 
                             </thead> 
                             <tbody> 
                                 <tr> 
                                     <td>1</td> 
                                     <td><img src="home/images/logos/Army.png" width="15%" alt=""> 
                                         <strong>Defenders Hockey Club</strong> 
                                     </td> 

                                 </tr> 
                                 <tr> 
                                     <td>2</td> 
                                     <td><img src="home/images/logos/AF.png" width="18%" alt=""> 
                                         <strong>Air Force Skyhawks 
                                         </strong> 
                                     </td> 
                                 </tr> 
                                 <tr> 
                                     <td>3</td> 
                                     <td><img src="home/images/logos/Police.png" width="17%" alt=""> 
                                         <strong>Police Warriors</strong> 
                                     </td> 

                                 </tr> 
                                 <tr> 
                                     <td>4</td> 
                                     <td><img src="home/images/logos/Navy.png" width="18%" alt=""> 
                                         <strong>Navy Sea Guardians</strong> 
                                     </td> 

                                 </tr> 
                                 <!-- <tr> 
                                     <td>5</td> 
                                     <td><img src="home/images/logos/CH&FC.png" width="15%" alt=""> 
                                         <strong>CH&FC Wizards</strong> 
                                     </td> 

                                 </tr> 
                                 <tr> 
                                     <td>6</td> 
                                     <td><img src="home/images/logos/CR&FC.png" width="15%" alt=""> 
                                         <strong>CR Raptors 
                                         </strong> 
                                     </td> 

                                 </tr>  -->
                                 <tr> 
                                     <td>5</td> 
                                     <td><img src="home/images/logos/BRC.png" width="15%" alt=""> 
                                         <strong>BRC Strikers</strong> 
                                     </td> 

                                 </tr> 
                                 <tr> 
                                     <td>6</td> 
                                     <td><img src="home/images/logos/RCHC.png" width="15%" alt=""> 
                                         <strong>Royals</strong> 
                                     </td> 

                                 </tr> 
                                 <tr> 
                                     <td>7</td> 
                                     <td><img src="home/images/logos/Wennappuwa.png" width="15%" alt=""> 
                                         <strong>Wennappuwa Supereroi</strong> 
                                     </td> 

                                 </tr> 
                             </tbody> 
                         </table> 
                     </div> 
                 </div> 
             </div> 
         </div> 
     </section>  

    <!--Slide tabs end-->
    <!-- <section class="wf100 p80">-->
    <!--    <div class="container">-->
    <!--        <div class="row">-->
    <!--            <div class="col-lg-4 col-md-6">-->
                    <!--Next Match Widget Start-->
    <!--                <div class="next-match-widget">-->
    <!--                    <h5 class="title">Live Scores</h5>-->
    <!--                    <div class="nmw-wrap">-->
    <!--                        <ul class="match-teams-vs">-->
    <!--                            <li class="team-logo"><img src="home/images/logos/AF.png" width="50%"-->
    <!--                                    alt=""> <strong>Skyhawks</strong> </li>-->
    <!--                            <li class="mvs"> <strong class="vs">VS</strong> </li>-->
    <!--                            <li class="team-logo"><img src="home/images/logos/RCHC.png" width="50%"-->
    <!--                                    alt="">-->
    <!--                                <strong>Royals</strong>-->
    <!--                            </li>-->
    <!--                        </ul>-->
                            <!-- <ul class="nmw-txt">
                                  <li><strong>Super Euro League</strong></li>-->
    <!--                            <li>20 December, 2020</li>-->
    <!--                            <li>04:00 PM GMT+</li>-->
    <!--                            <li><span>New Expo Stadium, NYK</span></li>-->
    <!--                        </ul> -->
    <!--                        <div class="defaultCountdown is-countdown"><span-->
    <!--                                class="countdown-row countdown-show2"><span class="countdown-section"><span-->
    <!--                                        class="countdown-amount">3</span><span-->
    <!--                                        class="countdown-period"></span></span><span-->
    <!--                                    class="countdown-section"><span class="countdown-amount">4</span><span-->
    <!--                                        class="countdown-period"></span></span></div>-->
    <!--                        <div class="buy-ticket"><a href="#">08 November, 2025</a></div>-->
    <!--                    </div>-->
    <!--                </div>-->
                    <!--Next Match Widget End-->
    <!--            </div>-->
    <!--            <div class="col-lg-4 col-md-6">-->
                    <!--Next Match Fixtures Width Start  -->
    <!--                <div class="next-match-fixtures">-->
    <!--                    <ul class="match-teams-vs">-->
    <!--                        <li class="team-logo"><img src="home/images/logos/Wennappuwa.png" width="50%"-->
    <!--                                alt="">-->
    <!--                            <strong>Wennappuwa-->
    <!--                            </strong>-->
    <!--                        </li>-->
    <!--                        <li class="mvs">-->
    <!--                            <p> <strong style="font-size: 9.3px;">Astro Hockey Turf Colombo</strong> 11 November,-->
    <!--                                2025-->
    <!--                                05:00 PM IST </p>-->
    <!--                            <strong class="vs">VS</strong>-->
    <!--                        </li>-->
    <!--                        <li class="team-logo"><img src="home/images/logos/Navy.png" width="50%"-->
    <!--                                alt="">-->
    <!--                            <strong>Navy</strong>-->
    <!--                        </li>-->
    <!--                    </ul>-->
    <!--                    <ul class="nmf-loc">-->
    <!--                        <li><i class="fas fa-location-arrow"></i> Visit Facebook for Live</li>-->
    <!--                        <li><a href="#" style="font-size: 9px;"><i class="fas fa-eye"></i> Live On "PEO-->
    <!--                                Sports"</a></li>-->
    <!--                    </ul>-->
    <!--                </div>-->
                    <!--Next Match Fixtures Width End  -->
                    <!--Next Match Fixtures Width Start  -->
    <!--                <div class="next-match-fixtures mb-4">-->
    <!--                    <ul class="match-teams-vs">-->
    <!--                        <li class="team-logo"><img src="home/images/logos/RCHC.png" width="50%"-->
    <!--                                alt="">-->
    <!--                            <strong>Royals</strong>-->
    <!--                        </li>-->
    <!--                        <li class="mvs">-->
    <!--                            <p> <strong style="font-size: 9.3px;">Astro Hockey Turf Colombo</strong> 11 November,-->
    <!--                                2025-->
    <!--                                06:30 PM IST </p>-->
    <!--                            <strong class="vs">VS</strong>-->
    <!--                        </li>-->
    <!--                        <li class="team-logo"><img src="home/images/logos/BRC.png" width="50%"-->
    <!--                                alt=""> <strong>BRC </strong> </li>-->
    <!--                    </ul>-->
    <!--                    <ul class="nmf-loc">-->
    <!--                        <li><i class="fas fa-location-arrow"></i> Visit Facebook for Live</li>-->
    <!--                        <li><a href="#" style="font-size: 9px;"><i class="fas fa-eye"></i> Live On "PEO-->
    <!--                                Sports"</a></li>-->
    <!--                    </ul>-->
    <!--                </div>-->
                    <!--Next Match Fixtures Width End  -->
                    <!--Next Match Fixtures Width Start  -->
    <!--                <div class="next-match-fixtures mb-4">-->
    <!--                    <ul class="match-teams-vs">-->
    <!--                        <li class="team-logo"><img src="home/images/logos/Army.png" width="50%"-->
    <!--                                alt="">-->
    <!--                            <strong>Defenders</strong>-->
    <!--                        </li>-->
    <!--                        <li class="mvs">-->
    <!--                            <p> <strong style="font-size: 9.3px;">Astro Hockey Turf Colombo</strong> 11 November,-->
    <!--                                2025-->
    <!--                                08:00 PM IST </p>-->
    <!--                            <strong class="vs">VS</strong>-->
    <!--                        </li>-->
    <!--                        <li class="team-logo"><img src="home/images/logos/CH&FC.png" width="50%"-->
    <!--                                alt=""> <strong>Wizards </strong> </li>-->
    <!--                    </ul>-->
    <!--                    <ul class="nmf-loc">-->
    <!--                        <li><i class="fas fa-location-arrow"></i> Visit Facebook for Live</li>-->
    <!--                        <li><a href="#" style="font-size: 9px;"><i class="fas fa-eye"></i> Live On "PEO-->
    <!--                                Sports"</a></li>-->
    <!--                    </ul>-->
    <!--                </div>-->
                    <!--Next Match Fixtures Width End  -->

    <!--            </div>-->
                
    <!--            <div class="col-lg-4">-->
    <!--                <div class="point-table-widget">-->
    <!--                    <table>-->
    <!--                        <thead>-->
    <!--                            <tr>-->
    <!--                                <th>P</th>-->
    <!--                                <th>Team</th>-->
    <!--                            </tr>-->
    <!--                        </thead>-->
    <!--                        <tbody>-->
    <!--                            <tr>-->
    <!--                                <td>1</td>-->
    <!--                                <td><img src="home/images/logos/Army.png" width="15%" alt="">-->
    <!--                                    <strong>Defenders Hockey Club</strong>-->
    <!--                                </td>-->

    <!--                            </tr>-->
    <!--                            <tr>-->
    <!--                                <td>2</td>-->
    <!--                                <td><img src="home/images/logos/AF.png" width="18%" alt="">-->
    <!--                                    <strong>Air Force Skyhawks-->
    <!--                                    </strong>-->
    <!--                                </td>-->
    <!--                            </tr>-->
    <!--                            <tr>-->
    <!--                                <td>3</td>-->
    <!--                                <td><img src="home/images/logos/Police.png" width="17%" alt="">-->
    <!--                                    <strong>Police Warriors</strong>-->
    <!--                                </td>-->

    <!--                            </tr>-->
    <!--                            <tr>-->
    <!--                                <td>4</td>-->
    <!--                                <td><img src="home/images/logos/Navy.png" width="18%" alt="">-->
    <!--                                    <strong>Navy Sea Guardians</strong>-->
    <!--                                </td>-->

    <!--                            </tr>-->
    <!--                            <tr>-->
    <!--                                <td>5</td>-->
    <!--                                <td><img src="home/images/logos/CH&FC.png" width="15%" alt="">-->
    <!--                                    <strong>CH&FC Wizards</strong>-->
    <!--                                </td>-->

    <!--                            </tr>-->
    <!--                            <tr>-->
    <!--                                <td>6</td>-->
    <!--                                <td><img src="home/images/logos/CR&FC.png" width="15%" alt="">-->
    <!--                                    <strong>CR Raptors-->
    <!--                                    </strong>-->
    <!--                                </td>-->

    <!--                            </tr>-->
    <!--                            <tr>-->
    <!--                                <td>7</td>-->
    <!--                                <td><img src="home/images/logos/BRC.png" width="15%" alt="">-->
    <!--                                    <strong>BRC Strikers</strong>-->
    <!--                                </td>-->

    <!--                            </tr>-->
    <!--                            <tr>-->
    <!--                                <td>8</td>-->
    <!--                                <td><img src="home/images/logos/RCHC.png" width="15%" alt="">-->
    <!--                                    <strong>Royals</strong>-->
    <!--                                </td>-->

    <!--                            </tr>-->
    <!--                            <tr>-->
    <!--                                <td>9</td>-->
    <!--                                <td><img src="home/images/logos/Wennappuwa.png" width="15%" alt="">-->
    <!--                                    <strong>Wennappuwa Supereroi</strong>-->
    <!--                                </td>-->

    <!--                            </tr>-->
    <!--                        </tbody>-->
    <!--                    </table>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</section> -->

    

    <!--section instead of sport Widgets Start-->
    <section class="wf100 p8" id="matches">
        <div class="container">
            <div style="width: auto; height: 50px;">
            </div>
            <div class="row">
                <div class="col-lg-8">
                    <div class="section-title">
                        <h2><b>PHL 2025 – A Powerful Finish!</b></h2>
                    </div>
                    <p class="text-justify">
                        PHL 2025 concluded in style with 8 teams, 200 players, including 35+ foreign players, and 4 international umpires, delivering a truly competitive and globally enriched tournament
                    </p>
                    <p class="text-justify">
                        🏆 <b>Joint Champions:</b> Royals & Police Warriors<br>
                        🥈 <b>2nd Runner-Up:</b> Air Force Skyhawks
                    </p>
                    <p class="text-justify">
                        .With the valued support of the Ministry of Youth and Sports of Sri Lanka, PHL continues to elevate the standard of hockey in the country.
                    </p>
                    <p><b>Stay tuned for updates on an enhanced and bigger Premier Hockey League 2026!</b></p>
                </div>
                <div class="col-lg-4">
                    <div class="video-responsive">
                        <video controls poster="" 
                            style=" width: 100%; height: 100%; border-radius: 4px;">
                            <source src="home/images/Update2026_02/phlintro.mp4" type="video/mp4">
                            Your browser does not support the video
                        </video>
                    </div>
                </div>
            </div>
            <div>
                <!--slider start-->
                <div class="launch-slider-container">
                    <div class="launch-slider-wrapper">
                        <div class="launch-slider-track" id="launchSliderTrack">
                            <div class="launch-slide">
                                <img src="home/images/Update2026_02/imageslider_1.jpg" alt="Launch Photo 1">
                            </div>
                            <div class="launch-slide">
                                <img src="home/images/Update2026_02/imageslider_2.jpg" alt="Launch Photo 2">
                            </div>
                            <div class="launch-slide">
                                <img src="home/images/Update2026_02/imageslider_3.jpg" alt="Launch Photo 3">
                            </div>
                            <div class="launch-slide">
                                <img src="home/images/Update2026_02/imageslider_4.jpg" alt="Launch Photo 4">
                            </div>
                            <div class="launch-slide">
                                <img src="home/images/Update2026_02/imageslider_5.jpg" alt="Launch Photo 5">
                            </div>
                            <div class="launch-slide">
                                <img src="home/images/Update2026_02/imageslider_6.jpg" alt="Launch Photo 6">
                            </div>
                            <div class="launch-slide">
                                <img src="home/images/Update2026_02/imageslider_7.jpg" alt="Launch Photo 7">
                            </div>
                            <div class="launch-slide">
                                <img src="home/images/Update2026_02/imageslider_8.jpg" alt="Launch Photo 8">
                            </div>
                        </div>

                        <!-- Navigation Arrows -->
                        <button class="slider-nav prev" id="prevBtn">
                            <i class="fas fa-chevron-left"></i>
                        </button>
                        <button class="slider-nav next" id="nextBtn">
                            <i class="fas fa-chevron-right"></i>
                        </button>
                    </div>

                    <!-- Dots Indicator -->
                    <div class="slider-dots" id="sliderDots">
                        <span class="dot active" data-slide="0"></span>
                        <span class="dot" data-slide="1"></span>
                    </div>
                </div>
                <!--slider end-->
            </div>
            <!--IOC banner start-->
            <!-- <div class="row justify-content-center"
                style="margin-top: clamp(10px, 2vw, 30px); margin-bottom: clamp(60px, 8vw, 120px); padding: 0 10px;">
                <div class="justify-content-center">
                    <img src="home/images/newUpdate/TitleSponser.png" alt="IOC"
                        style="max-width: 920px; width: min(90vw, 100%); height: auto; display: block; margin-left: auto; margin-right: auto; border-radius: 4px;">
                </div>
            </div> -->
            <!--IOC banner end-->
            <!-- <div style="width: auto; height: 20px;">
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title">
                        <h2>Team Line Up</h2>
                    </div>
                </div>
            </div> -->

            <!-- <div class="row justify-content-between" style="margin-top: 20px;"> -->
                     <?php    
            //     $teams = [
            //         ['name' => '', 'logo' => 'home/images/logos/Army.png'],
            //         ['name' => '', 'logo' => 'home/images/logos/AF.png'],
            //         ['name' => '', 'logo' => 'home/images/logos/Police.png'],
            //         ['name' => '', 'logo' => 'home/images/logos/Navy.png'],
            //         ['name' => '', 'logo' => 'home/images/logos/CH&FC.png'],
            //         ['name' => '', 'logo' => 'home/images/logos/CR&FC.png'],
            //         ['name' => '', 'logo' => 'home/images/logos/BRC.png'],
            //         // ['name' => '', 'logo' => 'home/images/logos/OSSC.png'],
            //         ['name' => '', 'logo' => 'home/images/logos/RCHC.png'],
            //         ['name' => '', 'logo' => 'home/images/logos/Wennappuwa.png'],
            //     ];
            //     foreach ($teams as $i => $team) {
            //         echo '<div class="col-6 col-md-2 mb-4 text-center" style="padding: 0 0px;">';
            //         echo '<div style="background:#fff; border-radius:12px; box-shadow:0 2px 12px #e3e2e2ff; padding:20px;">';
            //         echo '<img src="' . $team['logo'] . '" alt="' . $team['name'] . '" style="width:150px; height:150px; object-fit:contain; border-radius:12px; background:#fff; margin-bottom:10px;">';
            //         echo '<div style="font-weight:500; color:#333;">' . $team['name'] . '</div>';
            //         echo '</div></div>';
            //         // Add clearfix after every 5 images for desktop only
            //         if (($i + 1) % 5 == 0) {
            //             echo '<div class="w-100 d-none d-md-block"></div>';
            //         }
            //         // Add clearfix after every 2 images for mobile only
            //         if (($i + 1) % 2 == 0) {
            //             echo '<div class="w-100 d-block d-md-none"></div>';
            //         }
            //     }
            //     ?>
                 </div>

        </div>
    </section>
    <!--section instead of sport Widgets End-->

    <!--Team Squad Start-->
    <section class="team-squad wf100 p80-50" id="players">
        <div class="container">
            <!--Blogs Start-->
            <section class="wf100 p80" id="blog">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="section-title">
                                <h2>News and Media</h2>
                            </div>
                        </div>
                    </div>
                    <!--papare start-->
                    <div class="row" style="margin-bottom: 20px;">
                        <div class="col-lg-8 papare-news-col">
                            <!--News Box Start-->
                            <div class="news-list-post">
                                <div class="post-thumb">
                                    <a href="https://www.facebook.com/media/set/?set=a.122201233802327269&type=3"
                                        target="_blank"><i class="fas fa-link"></i></a>
                                    <img src="home/images/newUpdate/papare.png" alt="" style="height: 273px">
                                </div>
                                <div class="post-txt">
                                    <!-- <h4><a href="https://www.facebook.com/media/set?vanity=thepapare&set=a.1264800585688387" target="_blank">ThePapare </a></h4> -->
                                    <img src="home/images/newUpdate/ThePapareLogo.png" alt=""
                                        style="height: 60px; margin-bottom: 20px;">
                                    <p><b>PHL 2025 Awards Ceremony</b></p>
                                    <p>Relive the proud and memorable moments from the Official Awards Ceremony as we celebrated excellence, sportsmanship, and the champions who defined this season.</p>
                                    <a href="https://www.facebook.com/photo/?fbid=122201228078327269&set=a.122201233802327269"
                                        target="_blank" class="rm">MORE</a>
                                </div>
                            </div>
                            <!--News Box End-->
                        </div>
                        <!--Side 2 News Start-->
                        <div class="col-lg-4">
                            <!--Box Start-->
                            <div>
                                <div>
                                    <!-- <span>Facebook</span> 
                                    <a href="https://www.facebook.com/share/v/1HSSJSd36s/" target="_blank"><i class="fas fa-link"></i></a> -->
                                    <iframe src="https://www.facebook.com/plugins/video.php?height=476&href=https%3A%2F%2Fwww.facebook.com%2Freel%2F1837627120286699%2F&show_text=false&width=476&t=0" 
                                        style="width: 100%; height: 273px; object-fit: cover; border-radius: 4px;" 
                                        scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" allowFullScreen="true"></iframe>
                                </div>
                            </div>
                            <!--Box End-->
                        </div>
                        <!--Side 2 News End-->
                    </div>
                    <!--papare end -->

                    <!--Knockout start-->
                    <div class="row">
                        <div class="col-lg-8 papare-news-col">
                            <!--News Box Start-->
                            <div class="news-list-post">
                                <div class="post-thumb">
                                    <a href="https://www.facebook.com/media/set/?set=a.122194002548327269&type=3" target="_blank"><i
                                            class="fas fa-link"></i></a>
                                    <img src="home/images/newUpdate/launch1.jpg" alt=""
                                        style="height: 273px; width: 100%; object-fit: cover;">
                                </div>
                                <div class="post-txt">
                                    <!-- <h4><a href="https://www.facebook.com/share/p/14wJZ2JYQu/" target="_blank">KNOCKOUT</a></h4> -->
                                    <img src="home/images/newUpdate/knockLogo.png" alt=""
                                        style="height: 35px; margin-bottom: 20px;">
                                    <p><b>Grand Opening – PHL 2025</b></p>
                                    <p>A spectacular and glamorous curtain-raiser that set the stage for an electrifying season of world-class hockey</p>
                                    <a href="https://www.facebook.com/photo/?fbid=122193996722327269&set=a.122194002548327269" target="_blank"
                                        class="rm">MORE</a>
                                </div>
                            </div>
                            <!--News Box End-->
                        </div>
                        <!--Side 2 News Start-->
                        <div class="col-lg-4">
                            <!--Box Start-->
                            <div>
                                <div>
                                    <!-- <span>Facebook</span>  -->
                                    <!-- <a href="https://www.facebook.com/photo?fbid=122180340884327269&set=a.122093632634327269" target="_blank"><i class="fas fa-link"></i></a> -->
                                    
                                    <iframe src="https://www.facebook.com/plugins/video.php?height=476&href=https%3A%2F%2Fwww.facebook.com%2Freel%2F871772972135270%2F&show_text=false&width=265&t=0" 
                                        style="width: 100%; height: 273px; object-fit: cover; border-radius: 4px;" scrolling="no" 
                                        frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" allowFullScreen="true"></iframe>
                                </div>
                            </div>
                            <!--Box End-->
                        </div>
                        <!--Side 2 News End-->
                    </div>
                    <!--knockout end -->

                </div>
                <div class="videonews wf100">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div id="videonews-slider" class="owl-carousel owl-theme">
                                    <!--Start-->
                                    <!-- <div class="hvideo-box">
                                        <span class="vtime">0:32</span>
                                        <img src="home/img/vid-01.png" alt="">
                                        <div class="hv-info">
                                            <a href="https://www.facebook.com/watch/?v=1879100382813956&rdid=qNyBFhWwSQBJh0Po" target="_blank" class="play"><i class="fas fa-play"></i></a>
                                            <h4 style="font-size: 20px;"><a href="https://www.facebook.com/watch/?v=1879100382813956&rdid=qNyBFhWwSQBJh0Po" target="_blank">Irshad Mirza - India (SL Airforce Team : Season 1)</a></h4>
                                        </div>
                                    </div> -->
                                    <!--End-->
                                    <!--Start-->
                                    <!-- <div class="hvideo-box">
                                        <span class="vtime">0:57</span>
                                        <img src="home/img/vid-02.png" alt="">
                                        <div class="hv-info">
                                            <a href="https://web.facebook.com/PremierHockeyLeagueSL/videos/4103569059918327" target="_blank" class="play"><i class="fas fa-play"></i></a>
                                            <h4 style="font-size: 20px;"><a href="https://web.facebook.com/PremierHockeyLeagueSL/videos/4103569059918327" target="_blank">Mohsin Jutt - Pakistan (SL Police Team : Season 1)</a></h4>
                                        </div>
                                    </div> -->
                                    <!--End-->
                                    <!--Start-->
                                    <!-- <div class="hvideo-box">
                                        <span class="vtime">0:35</span>
                                        <img src="home/img/vid-03.png" alt="">
                                        <div class="hv-info">
                                            <a href="https://web.facebook.com/PremierHockeyLeagueSL/videos/594435080400857" target="_blank" class="play"><i class="fas fa-play"></i></a>
                                            <h4 style="font-size: 20px;"><a href="https://web.facebook.com/PremierHockeyLeagueSL/videos/594435080400857" target="_blank">Ammad Butt - Pakistan (OSSC : Season 1)</a></h4>
                                        </div>
                                    </div> -->
                                    <!--End-->

                                    <!--Start-->
                                    <div>
                                        <figure>
                                    <video controls poster="home/images/newUpdate/Jehan.png"
                                        style="width: 100%; height: 273px; object-fit: cover; border-radius: 4px;">
                                        <source src="home/images/newUpdate/JehanMubarak.mp4" type="video/mp4">
                                        Your browser does not support the video
                                    </video>
                                

                                            <figcaption
                                                style="text-align:center; font-size:18px; margin-top:8px; color:#333; font-weight: bold;">
                                                <!-- Irshad Mirza - India (SL Airforce Team : Season 1) -->
                                            </figcaption>
                                        </figure>
                                    </div>
                                    <!--end-->

                                    <!--Start-->
                                    <div>
                                        
                                        <iframe src="https://www.facebook.com/plugins/video.php?height=314&href=https%3A%2F%2Fwww.facebook.com%2Freel%2F1592614331907394%2F&show_text=false&width=560&t=0"
                                            width="100%" height="273px" style="object-fit: cover; border-radius: 4px" 
                                            scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" allowFullScreen="true"></iframe>
                                        <figcaption
                                            style="text-align:center; font-size:18px; margin-top:8px; color:#333; font-weight: bold;">
                                            Mohsin Jutt - Pakistan (SL Police Team : Season 1)
                                        </figcaption>
                                    </div>
                                    <!--end-->

                                    <!--Start-->
                                    <div>
                                        <iframe src="https://www.facebook.com/plugins/video.php?height=476&href=https%3A%2F%2Fwww.facebook.com%2Freel%2F3207643926073081%2F&show_text=false&width=265&t=0" 
                                            width="265" height="273px" style="border:none;overflow:hidden" 
                                            scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" allowFullScreen="true"></iframe>
                                        <figcaption
                                            style="text-align:center; font-size:18px; margin-top:8px; color:#333; font-weight: bold;">
                                            Ammad Butt - Pakistan (OSSC : Season 1)
                                        </figcaption>
                                    </div>
                                    <!--end-->

                                    <!--Start-->
                                    <div>
                                        <iframe src="https://www.facebook.com/plugins/video.php?height=314&href=https%3A%2F%2Fwww.facebook.com%2Freel%2F1164072211757896%2F&show_text=false&width=560&t=0" 
                                            width="100%" height="314" style="border:none;overflow:hidden" 
                                            scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" allowFullScreen="true"></iframe>
                                        <figcaption
                                            style="text-align:center; font-size:18px; margin-top:8px; color:#333; font-weight: bold;">
                                            Abdul Manan - Pakistan (SL Police Team : Season 1)
                                        </figcaption>
                                    </div>
                                    <!--end-->

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--News & Media Gallery End-->

        </div>
</div>
</section>
<!--Team Squad End-->

<!--Hope Start-->
<section class="wf100 p0-80 players-squad portfolio filter-gallery" id="gallery">
    <div class="container mt-5">
        <div style="width: auto; height: 100px;">
        </div>
        <div class="row">
            <div class="col-lg-8">

                <div class="section-title">
                    <h2>PHL Sri Lanka</h2>
                </div>
                <p class="text-justify">
                    The PHL was inagurated in 2024 with the vision of elevating Sri Lankan hockey. <br>
                    Our key objectives were to:
                </p>
                <ul class="text-justify">
                    <li>Create high-level competition to enhance player performance.</li>
                    <li>Introduce modern hockey skills and tactics aligned with international standards.</li>
                    <li>Establish a structured, professional league for long-term development.</li>
                    <li>Boost audience engagement attract corporate sponsorships.</li>
                    <li>Strengthen Sri Lanka's presence in the Asian hockey landscape.</li>
                </ul>
            </div>
            <div class="col-lg-4">
                <div class="video-responsive">
                    <video controls poster="home/img/gallery-3.png"
                        style=" width: 100%; height: 273px; object-fit: cover; border-radius: 4px;">
                        <source src="home/images/newUpdate/highlight.mp4" type="video/mp4">
                        Your browser does not support the video
                    </video>
                </div>
            </div>
        </div>

        <!--Icons Banner start-->
        <div class="icons-banner-section" style="padding: 60px 0; margin-bottom: -60px;">
            <div class="container">
                <div class="row justify-content-center">
                    <!-- Teams -->
                    <div class="col-6 col-md-2 mb-4 text-center">
                        <div class="stat-card">
                            <div class="stat-icon">
                                <img src="home/images/newUpdate/teamsIcon.png" alt="Teams">
                            </div>
                            <div class="stat-number">
                                <span class="counter" data-target="08">0</span>
                            </div>
                            <div class="stat-label">TEAMS</div>
                        </div>
                    </div>

                    <!-- Players -->
                    <div class="col-6 col-md-2 mb-4 text-center">
                        <div class="stat-card">
                            <div class="stat-icon">
                                <img src="home/images/newUpdate/playersIcon.png" alt="Players">
                            </div>
                            <div class="stat-number">
                                <span class="counter" data-target="200">0</span>
                            </div>
                            <div class="stat-label">PLAYERS</div>
                        </div>
                    </div>

                    <!-- Matches -->
                    <div class="col-6 col-md-2 mb-4 text-center">
                        <div class="stat-card">
                            <div class="stat-icon">
                                <img src="home/images/newUpdate/matchesIcon.png" alt="Matches">
                            </div>
                            <div class="stat-number">
                                <span class="counter" data-target="32">0</span>
                            </div>
                            <div class="stat-label">MATCHES</div>
                        </div>
                    </div>

                    <!-- Cards -->
                    <div class="col-6 col-md-2 hide-mobile mb-4 text-center">
                        <div class="stat-card">
                            <div class="stat-icon">
                                <img src="home/images/newUpdate/cardsIcon.png" alt="Cards">
                            </div>
                            <div class="stat-number">
                                <span class="counter" data-target="41">0</span>
                            </div>
                            <div class="stat-label">CARDS</div>
                        </div>
                    </div>

                    <!-- Goals -->
                    <div class="col-6 col-md-2 mb-4 text-center">
                        <div class="stat-card">
                            <div class="stat-icon">
                                <img src="home/images/newUpdate/goalsIcon.png" alt="Goals">
                            </div>
                            <div class="stat-number">
                                <span class="counter" data-target="227">0</span>
                            </div>
                            <div class="stat-label">GOALS</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Icons Banner end-->

    </div>
</section>
<!--Hope End-->

<!--League Players Squad Start-->
<!-- <section class="wf100 p0-80 players-squad portfolio filter-gallery" id="gallery">
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
                        </li> -->
                    <!-- <li class="item f1">
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
                    </li> -->
                    <!-- <li class="item f2">
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
                    </li> -->
                    <!-- <li class="item f1">
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
<!-- </div> --> 

<section class="wf100 p0-80 players-squad portfolio filter-gallery" id="gallery">
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
                            <a class="gt-link" href="home/images/Update2026_02/seasongallery1.jpg" target="_blank"
                                data-rel="prettyPhoto[gallery1]"><i class="far fa-image"></i></a>
                            <img src="home/images/Update2026_02/seasongallery1.jpg" alt="">
                        </div>
                    </li>
                    <li class="item f1">
                        <div class="gthumb">
                            <div class="hv-info">
                                <h6><a href="#" target="_blank">Thrilled Spectators</a></h6>
                            </div>
                            <a class="gt-link" href="home/images/Update2026_02/seasongallery2.jpg" target="_blank"
                                data-rel="prettyPhoto[gallery1]"><i class="far fa-image"></i></a>
                            <img src="home/images/Update2026_02/seasongallery2.jpg" alt="">
                        </div>
                    </li>
                    <!-- <li class="item f2">
                            <div class="gthumb">
                                <div class="hv-info">
                                    <a href="https://web.facebook.com/PremierHockeyLeagueSL/videos/1233314825158362" target="_blank" class="play"><i class="fas fa-play"></i></a>
                                    <h6 class="mt-5"><a href="https://web.facebook.com/PremierHockeyLeagueSL/videos/1233314825158362" target="_blank">Season 1 Highlights</a></h6>
                                </div>
                                <a class="gt-link" href="https://web.facebook.com/PremierHockeyLeagueSL/videos/1233314825158362" target="_blank" data-rel="prettyPhoto[gallery1]"><i class="fas fa-play"></i></a>
                                <img src="home/img/gallery-3.png" alt="">
                            </div>
                        </li> -->
                    <li class="item f1">
                        <div class="gthumb">
                            <div class="hv-info">
                                <h6><a href="#" target="_blank">Closing Ceremony</a></h6>
                            </div>
                            <a class="gt-link" href="home/images/Update2026_02/seasongallery3.jpg" target="_blank"
                                data-rel="prettyPhoto[gallery1]"><i class="far fa-image"></i></a>
                            <img src="home/images/Update2026_02/seasongallery3.jpg" alt="">
                        </div>
                    </li>
                    <li class="item f1">
                        <div class="gthumb">
                            <div class="hv-info">
                                <h6><a href="#" target="_blank">Tournament Officials</a></h6>
                            </div>
                            <a class="gt-link" href="home/images/Update2026_02/seasongallery4.jpg" target="_blank"
                                data-rel="prettyPhoto[gallery1]"><i class="far fa-image"></i></a>
                            <img src="home/images/Update2026_02/seasongallery4.jpg" alt="">
                        </div>
                    </li>
                    <!-- <li class="item f2">
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
                    </li> -->
                    <li class="item f1">
                        <div class="gthumb">
                            <div class="hv-info">
                                <h6><a href="#" target="_blank">Inspiring Future Stars</a></h6>
                            </div>
                            <a class="gt-link" href="home/images/Update2026_02/seasongallery5.jpg" target="_blank"
                                data-rel="prettyPhoto[gallery1]"><i class="far fa-image"></i></a>
                            <img src="home/images/Update2026_02/seasongallery5.jpg" alt="">
                        </div>
                    </li>
                    <li class="item f1">
                        <div class="gthumb">
                            <div class="hv-info">
                                <h6><a href="#" target="_blank">Excitement</a></h6>
                            </div>
                            <a class="gt-link" href="home/images/Update2026_02/seasongallery6.jpg" target="_blank"
                                data-rel="prettyPhoto[gallery1]"><i class="far fa-image"></i></a>
                            <img src="home/images/Update2026_02/seasongallery6.jpg" alt="">
                        </div>
                    </li>
                    <li class="item f1">
                        <div class="gthumb">
                            <div class="hv-info">
                                <h6><a href="#" target="_blank">Champions</a></h6>
                            </div>
                            <a class="gt-link" href="home/images/Update2026_02/seasongallery7.jpg" target="_blank"
                                data-rel="prettyPhoto[gallery1]"><i class="far fa-image"></i></a>
                            <img src="home/images/Update2026_02/seasongallery7.jpg" alt="" class="gallery-uniform-img">
                        </div>
                    </li>
                    <li class="item f1">
                        <div class="gthumb">
                            <div class="hv-info">
                                <h6><a href="#" target="_blank">Teamwork</a></h6>
                            </div>
                            <a class="gt-link" href="home/images/Update2026_02/seasongallery8.jpg" target="_blank"
                                data-rel="prettyPhoto[gallery1]"><i class="far fa-image"></i></a>
                            <img src="home/images/Update2026_02/seasongallery8.jpg" alt="" class="gallery-uniform-img">
                        </div>
                    </li>
                    <li class="item f1">
                        <div class="gthumb">
                            <div class="hv-info">
                                <h6><a href="#" target="_blank">Strength</a></h6>
                            </div>
                            <a class="gt-link" href="home/images/Update2026_02/seasongallery9.jpg" target="_blank"
                                data-rel="prettyPhoto[gallery1]"><i class="far fa-image"></i></a>
                            <img src="home/images/Update2026_02/seasongallery9.jpg" alt="" class="gallery-uniform-img">
                        </div>
                    </li>
                    <li class="item f1">
                        <div class="gthumb">
                            <div class="hv-info">
                                <h6><a href="#" target="_blank">Cheer</a></h6>
                            </div>
                            <a class="gt-link" href="home/images/Update2026_02/seasongallery10.jpg" target="_blank"
                                data-rel="prettyPhoto[gallery1]"><i class="far fa-image"></i></a>
                            <img src="home/images/Update2026_02/seasongallery10.jpg" alt="" class="gallery-uniform-img">
                        </div>
                    </li>
                    <li class="item f1">
                        <div class="gthumb">
                            <div class="hv-info">
                                <h6><a href="#" target="_blank">Spectatorship</a></h6>
                            </div>
                            <a class="gt-link" href="home/images/Update2026_02/seasongallery12.jpg" target="_blank"
                                data-rel="prettyPhoto[gallery1]"><i class="far fa-image"></i></a>
                            <img src="home/images/Update2026_02/seasongallery12.jpg" alt="" class="gallery-uniform-img">
                        </div>
                    </li>
                    <li class="item f1">
                        <div class="gthumb">
                            <div class="hv-info">
                                <h6><a href="#" target="_blank">Smiles</a></h6>
                            </div>
                            <a class="gt-link" href="home/images/Update2026_02/seasongallery11.jpg" target="_blank"
                                data-rel="prettyPhoto[gallery1]"><i class="far fa-image"></i></a>
                            <img src="home/images/Update2026_02/seasongallery11.jpg" alt="" class="gallery-uniform-img">
                        </div>
                    </li>
                    <li class="item f1">
                        <div class="gthumb">
                            <div class="hv-info">
                                <h6><a href="#" target="_blank">Battles</a></h6>
                            </div>
                            <a class="gt-link" href="home/images/Update2026_02/seasongallery13.jpg" target="_blank"
                                data-rel="prettyPhoto[gallery1]"><i class="far fa-image"></i></a>
                            <img src="home/images/Update2026_02/seasongallery13.jpg" alt="" class="gallery-uniform-img">
                        </div>
                    </li>
                    <li class="item f1">
                        <div class="gthumb">
                            <div class="hv-info">
                                <h6><a href="#" target="_blank">Effort</a></h6>
                            </div>
                            <a class="gt-link" href="home/images/Update2026_02/seasongallery14.jpg" target="_blank"
                                data-rel="prettyPhoto[gallery1]"><i class="far fa-image"></i></a>
                            <img src="home/images/Update2026_02/seasongallery14.jpg" alt="" class="gallery-uniform-img">
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
</div>
<!--Main Content End-->

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

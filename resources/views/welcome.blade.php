<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Ulina - Fashion Ecommerce Responsive HTML Template</title>
    <meta name="description" content="Fashion Ecommerce Responsive HTML Template." />
    <meta name="keywords"
        content="HTML, CSS, JavaScript, jQuery, Animation, Bootstrap, Font Awesome, Revolution Slider, Fasion, Ecommerce, Shop, WooCommerce" />
    <meta name="author" content="uiuxom" />

    <!-- BEGIN: CSS -->
    <link rel="stylesheet" href="css/bootstrap.css" />
    <link rel="stylesheet" href="css/animate.css" />
    <link rel="stylesheet" href="css/fontawesome-all.css" />
    <link rel="stylesheet" href="css/owl.theme.default.min.css" />
    <link rel="stylesheet" href="css/owl.carousel.min.css" />
    <link rel="stylesheet" href="css/lightcase.css" />
    <link rel="stylesheet" href="css/slick.css" />
    <link rel="stylesheet" href="css/nice-select.css" />
    <link rel="stylesheet" href="css/settings.css" />
    <link rel="stylesheet" href="css/ulina-icons.css" />
    <link rel="stylesheet" href="css/ignore_for_wp.css" />
    <link rel="stylesheet" href="css/preset.css" />
    <link rel="stylesheet" href="css/theme.css" />
    <link rel="stylesheet" href="css/responsive.css" />
    <!-- END: CSS -->

    <!-- BEGIN: Favicon -->
    <link rel="icon" type="image/png" href="images/favicon.png" />
    <!-- END: Favicon -->
</head>

<body>
    <!-- BEGIN: PreLoder Section -->
    <section class="preloader" id="preloader">
        <div class="spinner-eff spinner-eff-1">
            <div class="bar bar-top"></div>
            <div class="bar bar-right"></div>
            <div class="bar bar-bottom"></div>
            <div class="bar bar-left"></div>
        </div>
    </section>
    <!-- END: PreLoder Section -->

    <!-- BEGIN: Header 01 Section -->
    @include('header')
    <!-- END: Header 01 Section -->

    <!-- BEGIN: Search Popup Section -->
    <section class="popup_search_sec">
        <div class="popup_search_overlay"></div>
        <div class="pop_search_background">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-md-6">
                        <div class="popup_logo">
                            <a href="index.html"><img src="images/logo2.png" alt="Ulina" /></a>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6">
                        <a href="javascript:void(0);" id="search_Closer" class="search_Closer"></a>
                    </div>
                </div>
            </div>
            <div class="middle_search">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 text-center">
                            <div class="popup_search_form">
                                <form method="get" action="#">
                                    <input type="search" name="s" id="s"
                                        placeholder="Type Words and Hit Enter" />
                                    <button type="submit">
                                        <i class="fa-solid fa-search"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END: Search Popup Section -->

    <!-- BEGIN: Slider Section -->
    <section class="sliderSection01">
        <div class="rev_slider_wrapper">
            <div id="rev_slider_1" class="rev_slider fullwidthabanner" style="display: none" data-version="5.4.1">
                <ul>
                    <li data-index="rs-3046" data-transition="random-premium" data-slotamount="default"
                        data-hideafterloop="0" data-hideslideonmobile="off" data-easein="Power3.easeInOut"
                        data-easeout="Power3.easeInOut" data-masterspeed="1000" data-thumb="" data-rotate="0"
                        data-saveperformance="off" data-title="" data-param1="01" data-param2="" data-param3=""
                        data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9=""
                        data-param10="" data-description="">
                        <img src="images/slider/1.png" alt="Ulina Slider" class="rev-slidebg" />
                        <div class="tp-caption tp-resizeme layer01 shapeImage"
                            data-frames='[{"delay":1200,"speed":500,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"power3.inOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"power3.inOut"}]'
                            data-x="['right','right','right','right']" data-hoffset="['192','-100','0','0']"
                            data-y="['bottom','bottom','bottom','bottom']" data-voffset="['71','71','-300','0']"
                            data-width="['auto','auto','60%','auto']" data-height="auto"
                            data-visibility="['on','on','on','off']" data-basealign="slide">
                            <img src="images/slider/s1.png" alt="Slider Shape" />
                        </div>
                        <div class="tp-caption tp-resizeme rs-parallaxlevel-2 layer03 personImage"
                            data-frames='[{"delay":1300,"speed":600,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"power3.inOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"power3.inOut"}]'
                            data-x="['right','right','right','right']" data-hoffset="['300','0','0','0']"
                            data-y="['bottom','bottom','bottom','bottom']" data-voffset="['0','0','-300','0']"
                            data-width="['auto','auto','60%','80%']" data-height="auto"
                            data-visibility="['on','on','on','off']" data-textAlign="['left','left','left','right']"
                            data-basealign="slide">
                            <img src="images/slider/person_1.png" alt="Slider Shape" />
                        </div>
                        <div class="tp-caption jost theSubTitle" data-x="['left','left','left','center']"
                            data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']"
                            data-voffset="['-38','-38','-38','-58']" data-fontsize="['21','21','21','21']"
                            data-fontweight="['500','500','500','500']" data-lineheight="['21','21','21','21']"
                            data-width="['auto','auto','auto','100%']" data-height="none" data-whitespace="nowrap"
                            data-color="['#7b9496','#7b9496','#7b9496','#7b9496']" data-type="text"
                            data-responsive_offset="off"
                            data-frames='[{"delay":1100,"speed":400,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"power4.inOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"power3.inOut"}]'
                            data-textAlign="['left','left','left','center']" data-paddingtop="['0','0','0','0']"
                            data-paddingright="['0','0','0','0']" data-paddingbottom="['0','0','0','0']"
                            data-paddingleft="['0','0','0','0']" data-marginleft="['0','10','10','0']">
                            SUMMER SALE IS ON
                        </div>
                        <div class="tp-caption jost textLayer theTitles" data-x="['left','left','left','center']"
                            data-hoffset="['-5','-5','0','0']" data-y="['middle','middle','middle','middle']"
                            data-voffset="['68','68','68','28']" data-fontsize="['72','72','52','52']"
                            data-fontweight="['400','400','400','400']" data-lineheight="['84','84','64','64']"
                            data-width="['550','550','450','100%']" data-height="none" data-whitespace="normal"
                            data-color="['#52586d','#52586d','#52586d','#52586d']" data-type="text"
                            data-responsive_offset="off"
                            data-frames='[{"delay":1200,"speed":500,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"power4.inOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"power3.inOut"}]'
                            data-textAlign="['left','left','left','center']" data-paddingtop="['0','0','0','0']"
                            data-paddingright="['0','0','0','0']" data-paddingbottom="['0','0','0','0']"
                            data-paddingleft="['0','0','0','0']" data-marginleft="['0','0','0','0']">
                            Discover Men’s Latest Fashion
                        </div>
                        <div class="tp-caption ws_nowrap textLayer theBTNS" data-x="['left','left','left','center']"
                            data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']"
                            data-voffset="['231','231','211','171']" data-fontsize="['16','16','16','16']"
                            data-fontweight="500" data-lineheight="['55','55','55','55']"
                            data-width="['auto','auto','auto','100%']" data-height="auto" data-whitesapce="normal"
                            data-color="#FFFFFF" data-type="text" data-responsive_offset="off"
                            data-frames='[{"delay":1300,"speed":600,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"power4.inOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"power3.inOut"}]'
                            data-textAlign="['center','center','center','center']" data-paddingtop="['0','0','0','0']"
                            data-paddingright="['0','0','0','0']" data-paddingbottom="['0','0','0','0']"
                            data-paddingleft="['0','0','0','0']" data-marginleft="['0','0','0','0']">
                            <a class="ulinaBTN ulinaSliderBTN" href="collections.html"><span>Explore Now</span></a>
                        </div>
                    </li>
                    <li data-index="rs-3047" data-transition="random-premium" data-slotamount="default"
                        data-hideafterloop="0" data-hideslideonmobile="off" data-easein="Power3.easeInOut"
                        data-easeout="Power3.easeInOut" data-masterspeed="1000" data-thumb="" data-rotate="0"
                        data-saveperformance="off" data-title="" data-param1="01" data-param2="" data-param3=""
                        data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9=""
                        data-param10="" data-description="">
                        <img src="images/slider/1.png" alt="Ulina Slider" class="rev-slidebg" />
                        <div class="tp-caption tp-resizeme layer01 shapeImage"
                            data-frames='[{"delay":1200,"speed":500,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"power3.inOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"power3.inOut"}]'
                            data-x="['right','right','right','right']" data-hoffset="['192','-100','0','0']"
                            data-y="['bottom','bottom','bottom','bottom']" data-voffset="['71','71','-300','0']"
                            data-width="['auto','auto','60%','auto']" data-height="auto"
                            data-visibility="['on','on','on','off']" data-basealign="slide">
                            <img src="images/slider/s1.png" alt="Slider Shape" />
                        </div>
                        <div class="tp-caption tp-resizeme rs-parallaxlevel-2 layer03 personImage"
                            data-frames='[{"delay":1300,"speed":600,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"power3.inOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"power3.inOut"}]'
                            data-x="['right','right','right','right']" data-hoffset="['300','0','0','0']"
                            data-y="['bottom','bottom','bottom','bottom']" data-voffset="['0','0','-300','0']"
                            data-width="['auto','auto','60%','80%']" data-height="auto"
                            data-visibility="['on','on','on','off']" data-textAlign="['left','left','left','right']"
                            data-basealign="slide">
                            <img src="images/slider/person_2.png" alt="Slider Shape" />
                        </div>
                        <div class="tp-caption jost theSubTitle" data-x="['left','left','left','center']"
                            data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']"
                            data-voffset="['-38','-38','-38','-58']" data-fontsize="['21','21','21','21']"
                            data-fontweight="['500','500','500','500']" data-lineheight="['21','21','21','21']"
                            data-width="['auto','auto','auto','100%']" data-height="none" data-whitespace="nowrap"
                            data-color="['#7b9496','#7b9496','#7b9496','#7b9496']" data-type="text"
                            data-responsive_offset="off"
                            data-frames='[{"delay":1100,"speed":400,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"power4.inOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"power3.inOut"}]'
                            data-textAlign="['left','left','left','center']" data-paddingtop="['0','0','0','0']"
                            data-paddingright="['0','0','0','0']" data-paddingbottom="['0','0','0','0']"
                            data-paddingleft="['0','0','0','0']" data-marginleft="['0','10','10','0']">
                            SUMMER SALE IS ON
                        </div>
                        <div class="tp-caption jost textLayer theTitles" data-x="['left','left','left','center']"
                            data-hoffset="['-5','-5','0','0']" data-y="['middle','middle','middle','middle']"
                            data-voffset="['68','68','68','28']" data-fontsize="['72','72','52','52']"
                            data-fontweight="['400','400','400','400']" data-lineheight="['84','84','64','64']"
                            data-width="['550','550','450','100%']" data-height="none" data-whitespace="normal"
                            data-color="['#52586d','#52586d','#52586d','#52586d']" data-type="text"
                            data-responsive_offset="off"
                            data-frames='[{"delay":1200,"speed":500,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"power4.inOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"power3.inOut"}]'
                            data-textAlign="['left','left','left','center']" data-paddingtop="['0','0','0','0']"
                            data-paddingright="['0','0','0','0']" data-paddingbottom="['0','0','0','0']"
                            data-paddingleft="['0','0','0','0']" data-marginleft="['0','0','0','0']">
                            Discover Women Latest Fashion
                        </div>
                        <div class="tp-caption ws_nowrap textLayer theBTNS" data-x="['left','left','left','center']"
                            data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']"
                            data-voffset="['231','231','211','171']" data-fontsize="['16','16','16','16']"
                            data-fontweight="500" data-lineheight="['55','55','55','55']"
                            data-width="['auto','auto','auto','100%']" data-height="auto" data-whitesapce="normal"
                            data-color="#FFFFFF" data-type="text" data-responsive_offset="off"
                            data-frames='[{"delay":1300,"speed":600,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"power4.inOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"power3.inOut"}]'
                            data-textAlign="['center','center','center','center']" data-paddingtop="['0','0','0','0']"
                            data-paddingright="['0','0','0','0']" data-paddingbottom="['0','0','0','0']"
                            data-paddingleft="['0','0','0','0']" data-marginleft="['0','0','0','0']">
                            <a class="ulinaBTN ulinaSliderBTN" href="collections.html"><span>Explore Now</span></a>
                        </div>
                    </li>
                    <li data-index="rs-3048" data-transition="random-premium" data-slotamount="default"
                        data-hideafterloop="0" data-hideslideonmobile="off" data-easein="Power3.easeInOut"
                        data-easeout="Power3.easeInOut" data-masterspeed="1000" data-thumb="" data-rotate="0"
                        data-saveperformance="off" data-title="" data-param1="01" data-param2="" data-param3=""
                        data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9=""
                        data-param10="" data-description="">
                        <img src="images/slider/1.png" alt="Ulina Slider" class="rev-slidebg" />
                        <div class="tp-caption tp-resizeme layer01 shapeImage"
                            data-frames='[{"delay":1200,"speed":500,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"power3.inOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"power3.inOut"}]'
                            data-x="['right','right','right','right']" data-hoffset="['192','-100','0','0']"
                            data-y="['bottom','bottom','bottom','bottom']" data-voffset="['71','71','-300','0']"
                            data-width="['auto','auto','60%','auto']" data-height="auto"
                            data-visibility="['on','on','on','off']" data-basealign="slide">
                            <img src="images/slider/s1.png" alt="Slider Shape" />
                        </div>
                        <div class="tp-caption tp-resizeme rs-parallaxlevel-2 layer03 personImage"
                            data-frames='[{"delay":1300,"speed":600,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"power3.inOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"power3.inOut"}]'
                            data-x="['right','right','right','right']" data-hoffset="['300','0','0','0']"
                            data-y="['bottom','bottom','bottom','bottom']" data-voffset="['0','0','-300','0']"
                            data-width="['auto','auto','60%','80%']" data-height="auto"
                            data-visibility="['on','on','on','off']" data-textAlign="['left','left','left','right']"
                            data-basealign="slide">
                            <img src="images/slider/person_3.png" alt="Slider Shape" />
                        </div>
                        <div class="tp-caption jost theSubTitle" data-x="['left','left','left','center']"
                            data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']"
                            data-voffset="['-38','-38','-38','-58']" data-fontsize="['21','21','21','21']"
                            data-fontweight="['500','500','500','500']" data-lineheight="['21','21','21','21']"
                            data-width="['auto','auto','auto','100%']" data-height="none" data-whitespace="nowrap"
                            data-color="['#7b9496','#7b9496','#7b9496','#7b9496']" data-type="text"
                            data-responsive_offset="off"
                            data-frames='[{"delay":1100,"speed":400,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"power4.inOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"power3.inOut"}]'
                            data-textAlign="['left','left','left','center']" data-paddingtop="['0','0','0','0']"
                            data-paddingright="['0','0','0','0']" data-paddingbottom="['0','0','0','0']"
                            data-paddingleft="['0','0','0','0']" data-marginleft="['0','10','10','0']">
                            SUMMER SALE IS ON
                        </div>
                        <div class="tp-caption jost textLayer theTitles" data-x="['left','left','left','center']"
                            data-hoffset="['-5','-5','0','0']" data-y="['middle','middle','middle','middle']"
                            data-voffset="['68','68','68','28']" data-fontsize="['72','72','52','52']"
                            data-fontweight="['400','400','400','400']" data-lineheight="['84','84','64','64']"
                            data-width="['550','550','450','100%']" data-height="none" data-whitespace="normal"
                            data-color="['#52586d','#52586d','#52586d','#52586d']" data-type="text"
                            data-responsive_offset="off"
                            data-frames='[{"delay":1200,"speed":500,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"power4.inOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"power3.inOut"}]'
                            data-textAlign="['left','left','left','center']" data-paddingtop="['0','0','0','0']"
                            data-paddingright="['0','0','0','0']" data-paddingbottom="['0','0','0','0']"
                            data-paddingleft="['0','0','0','0']" data-marginleft="['0','0','0','0']">
                            Discover Summer Latest Fashion
                        </div>
                        <div class="tp-caption ws_nowrap textLayer theBTNS" data-x="['left','left','left','center']"
                            data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']"
                            data-voffset="['231','231','211','171']" data-fontsize="['16','16','16','16']"
                            data-fontweight="500" data-lineheight="['55','55','55','55']"
                            data-width="['auto','auto','auto','100%']" data-height="auto" data-whitesapce="normal"
                            data-color="#FFFFFF" data-type="text" data-responsive_offset="off"
                            data-frames='[{"delay":1300,"speed":600,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"power4.inOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"power3.inOut"}]'
                            data-textAlign="['center','center','center','center']" data-paddingtop="['0','0','0','0']"
                            data-paddingright="['0','0','0','0']" data-paddingbottom="['0','0','0','0']"
                            data-paddingleft="['0','0','0','0']" data-marginleft="['0','0','0','0']">
                            <a class="ulinaBTN ulinaSliderBTN" href="collections.html"><span>Explore Now</span></a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <!-- END: Slider Section -->

    <!-- BEGIN: Feature Section -->
    <section class="featureSection">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-xl-3">
                    <div class="iconBox01">
                        <i class="ulina-fast-delivery"></i>
                        <h3>Free Shipping</h3>
                        <p>Ut enim ad minim veniam liquip ami tomader</p>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3">
                    <div class="iconBox01">
                        <i class="ulina-credit-card tm5"></i>
                        <h3>Secure Payments</h3>
                        <p>Eonim ad minim veniam liquip tomader</p>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3">
                    <div class="iconBox01">
                        <i class="ulina-refund tm1"></i>
                        <h3>Easy Returns</h3>
                        <p>Be enim ad minim veniam liquipa ami tomader</p>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3">
                    <div class="iconBox01">
                        <i class="ulina-hours-support t1"></i>
                        <h3>24/7 Support</h3>
                        <p>Ut enim ad minim veniam liquip ami tomader</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END: Feature Section -->

    <!-- BEGIN: Lookbook Section -->
    <section class="lookbookSection">
        <div class="container">
            <div class="row masonryGrid" id="masonryGrid">
                <div class="col-md-6 col-xl-4 shafItem">
                    <div class="lookBook01 lb01M0 overLayAnim01">
                        <div class="lbContent">
                            <h3>Get 40% Off</h3>
                            <h2>Man’s Latest Collection</h2>
                            <a href="collections.html" class="ulinaLink"><i class="fa-solid fa-angle-right"></i>Shop
                                Now</a>
                        </div>
                        <img src="images/home1/1.png" alt="Mans Latest Collection" />
                    </div>
                </div>
                <div class="col-md-6 col-xl-4 shafItem">
                    <div class="lookBook01 lb01M1 overLayAnim01">
                        <div class="lbContent">
                            <h3>Couple Fashion</h3>
                            <h2>Best Collection for Stylish Couple</h2>
                            <a href="collections.html" class="ulinaLink"><i
                                    class="fa-solid fa-angle-right"></i>Explore Now</a>
                        </div>
                        <img src="images/home1/2.png" alt="Mans Latest Collection" />
                    </div>
                </div>
                <div class="col-md-6 col-xl-4 shafItem">
                    <div class="lookBook01 lb01M2 overLayAnim01">
                        <div class="lbContent">
                            <h3>Be Stylish</h3>
                            <h2>Girl’s Latest Fashion</h2>
                            <a href="collections.html" class="ulinaLink"><i class="fa-solid fa-angle-right"></i>Shop
                                Now</a>
                        </div>
                        <img src="images/home1/3.html" alt="Mans Latest Collection" />
                    </div>
                </div>
                <div class="col-md-6 col-xl-4 shafItem">
                    <div class="lookBook01 lb01M3 overLayAnim01">
                        <img src="images/home1/4.png" alt="Mans Latest Collection" />
                        <div class="lbContent">
                            <h3>New Arrival</h3>
                            <h2>Exclusive Shoes Collection</h2>
                            <a href="collections.html" class="ulinaLink"><i
                                    class="fa-solid fa-angle-right"></i>Explore Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-4 shafItem">
                    <div class="lookBook01 lb01M4 overLayAnim01">
                        <div class="lbContent">
                            <h3>New in 2022</h3>
                            <h2>Discover New Bag Collection</h2>
                            <a href="collections.html" class="ulinaLink"><i
                                    class="fa-solid fa-angle-right"></i>Explore Now</a>
                        </div>
                        <img src="images/home1/6.png" alt="Mans Latest Collection" />
                    </div>
                </div>
                <div class="col-md-6 col-xl-4 shafItem">
                    <div class="lookBook01 lb01M5 overLayAnim01">
                        <div class="lbContent">
                            <h3>Get 40% Off</h3>
                            <h2>Ulina Trendy Sunglass</h2>
                            <a href="collections.html" class="ulinaLink"><i class="fa-solid fa-angle-right"></i>Shop
                                Now</a>
                        </div>
                        <img src="images/home1/5.png" alt="Mans Latest Collection" />
                    </div>
                </div>
                <div class="col-lg-1 col-sm-1 shafSizer"></div>
            </div>
        </div>
    </section>
    <!-- END: Lookbook Section -->

    <!-- BEGIN: Deal Product Section -->
    <section class="dealProductSection">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="dealProductContent">
                        <h5>Featured Product</h5>
                        <h2>Ulima Fashionable Jeans</h2>
                        <p>
                            Ut enim ad minim veniam, quis nostrud exercitation ullamco
                            laboris nisi ut aliquip ex ea commodo consequa uis aute irure
                            dolor
                        </p>
                        <div class="dpcPriceWrap">
                            <div class="pi01Price">
                                <ins>$199</ins>
                                <del>$399</del>
                            </div>
                            <a href="shop_details1.html" class="ulinaBTN"><span>Buy Now</span></a>
                        </div>
                        <div class="countDownWrap">
                            <h6>Ends in</h6>
                            <div class="ulinaCountDown" data-day="26" data-month="07" data-year="2022"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="dealProductImage">
                        <img src="images/home1/7.png" alt="Ulima Fashionable Jeans" />
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END: Deal Product Section -->

    <!-- BEGIN: Lookbook Section 2 -->
    <section class="lookbookSection2">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="lookBook01 lb01M6 overLayAnim02">
                        <div class="lbContent">
                            <h3>Get 40% Off</h3>
                            <h2>Women’s New Collection</h2>
                            <a href="collections.html" class="ulinaLink"><i class="fa-solid fa-angle-right"></i>Shop
                                Now</a>
                        </div>
                        <img src="images/home1/8.jpg" alt="Women’s New Collection" />
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="lookBook01 lb01M6 overLayAnim02">
                        <div class="lbContent">
                            <h3>Stay Upto Date</h3>
                            <h2>Men’s Trendy Fashion</h2>
                            <a href="collections.html" class="ulinaLink"><i class="fa-solid fa-angle-right"></i>Shop
                                Now</a>
                        </div>
                        <img src="images/home1/9.jpg" alt="Men’s Trendy Fashion" />
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END: Lookbook Section 2 -->

    <!-- BEGIN: Category Section -->
    <section class="categorySection">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="secTitle">Shop By Category</h2>
                    <p class="secDesc">Showing our latest arrival on this summer</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="categoryCarousel owl-carousel">
                        <div class="categoryItem01 text-center">
                            <div class="ci01Thumb">
                                <img src="images/categoy/1.jpg" alt="Cloths" />
                            </div>
                            <h3><a href="shop_full_width.html">Cloths</a></h3>
                            <p>192 Items</p>
                        </div>
                        <div class="categoryItem01 text-center">
                            <div class="ci01Thumb">
                                <img src="images/categoy/2.jpg" alt="Bags" />
                            </div>
                            <h3><a href="shop_left_sidebar.html">Bags</a></h3>
                            <p>139 Items</p>
                        </div>
                        <div class="categoryItem01 text-center">
                            <div class="ci01Thumb">
                                <img src="images/categoy/3.jpg" alt="Watches" />
                            </div>
                            <h3><a href="shop_right_sidebar.html">Watches</a></h3>
                            <p>162 Items</p>
                        </div>
                        <div class="categoryItem01 text-center">
                            <div class="ci01Thumb">
                                <img src="images/categoy/4.jpg" alt="Jewellery" />
                            </div>
                            <h3><a href="shop_full_width.html">Jewellery</a></h3>
                            <p>187 Items</p>
                        </div>
                        <div class="categoryItem01 text-center">
                            <div class="ci01Thumb">
                                <img src="images/categoy/5.jpg" alt="Women" />
                            </div>
                            <h3><a href="shop_right_sidebar.html">Women</a></h3>
                            <p>362 Items</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END: Category Section -->

    <!-- BEGIN: Testimonial Section -->
    <section class="testimonialSection">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-xl-3">
                    <div class="testimoniLeft">
                        <h2 class="secTitle">What Customers Say About Us</h2>
                        <p class="secDesc">
                            Bobore et dolore magna aliqua. Ut enim ad minim veniam, quis
                            nostrud exercitat ion ullamco laboris
                        </p>
                        <div class="testimonalNav">
                            <button class="tprev">
                                <i class="fa-solid fa-angle-left"></i>
                            </button>
                            <button class="tnext">
                                <i class="fa-solid fa-angle-right"></i>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-xl-9">
                    <div class="testimonialSliderWrap">
                        <div class="testimonialCarousel owl-carousel">
                            <div class="testimonialItem01">
                                <div class="ti01Header clearfix">
                                    <i class="ulina-quote"></i>
                                    <div class="ti01Rating float-end">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star-half-alt"></i>
                                    </div>
                                </div>
                                <div class="ti01Content">
                                    Lorem ipsum dolor sit amet, conseet eotur adipisicing elit,
                                    sed do eiusmoed tempor incididunt ut labore et doleore magna
                                    aliqua. Ut enim ad mire oknim veniam, quis nostrud
                                    exercitation ull mco laboris nisi ut aliquip.
                                </div>
                                <div class="ti01Author">
                                    <img src="images/author/1.jpg" alt="Sanjida Ema" />
                                    <h3>Sanjida Ema</h3>
                                    <span>Journalist</span>
                                </div>
                            </div>
                            <div class="testimonialItem01">
                                <div class="ti01Header clearfix">
                                    <i class="ulina-quote"></i>
                                    <div class="ti01Rating float-end">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star-half-alt"></i>
                                    </div>
                                </div>
                                <div class="ti01Content">
                                    Lorem ipsum dolor sit amet, conseet eotur adipisicing elit,
                                    sed do eiusmoed tempor incididunt ut labore et doleore magna
                                    aliqua. Ut enim ad mire oknim veniam, quis nostrud
                                    exercitation ull mco laboris nisi ut aliquip.
                                </div>
                                <div class="ti01Author">
                                    <img src="images/author/2.jpg" alt="Mike Anderson" />
                                    <h3>Mike Anderson</h3>
                                    <span>Web Developer</span>
                                </div>
                            </div>
                            <div class="testimonialItem01">
                                <div class="ti01Header clearfix">
                                    <i class="ulina-quote"></i>
                                    <div class="ti01Rating float-end">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star-half-alt"></i>
                                    </div>
                                </div>
                                <div class="ti01Content">
                                    Lorem ipsum dolor sit amet, conseet eotur adipisicing elit,
                                    sed do eiusmoed tempor incididunt ut labore et doleore magna
                                    aliqua. Ut enim ad mire oknim veniam, quis nostrud
                                    exercitation ull mco laboris nisi ut aliquip.
                                </div>
                                <div class="ti01Author">
                                    <img src="images/author/3.png" alt="Nelson Rich" />
                                    <h3>Nelson Rich</h3>
                                    <span>Designer</span>
                                </div>
                            </div>
                            <div class="testimonialItem01">
                                <div class="ti01Header clearfix">
                                    <i class="ulina-quote"></i>
                                    <div class="ti01Rating float-end">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star-half-alt"></i>
                                    </div>
                                </div>
                                <div class="ti01Content">
                                    Lorem ipsum dolor sit amet, conseet eotur adipisicing elit,
                                    sed do eiusmoed tempor incididunt ut labore et doleore magna
                                    aliqua. Ut enim ad mire oknim veniam, quis nostrud
                                    exercitation ull mco laboris nisi ut aliquip.
                                </div>
                                <div class="ti01Author">
                                    <img src="images/author/4.png" alt="Nelson Rich" />
                                    <h3>Mark Smith</h3>
                                    <span>Marketer</span>
                                </div>
                            </div>
                            <div class="testimonialItem01">
                                <div class="ti01Header clearfix">
                                    <i class="ulina-quote"></i>
                                    <div class="ti01Rating float-end">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star-half-alt"></i>
                                    </div>
                                </div>
                                <div class="ti01Content">
                                    Lorem ipsum dolor sit amet, conseet eotur adipisicing elit,
                                    sed do eiusmoed tempor incididunt ut labore et doleore magna
                                    aliqua. Ut enim ad mire oknim veniam, quis nostrud
                                    exercitation ull mco laboris nisi ut aliquip.
                                </div>
                                <div class="ti01Author">
                                    <img src="images/author/5.png" alt="Sarah Jones" />
                                    <h3>Sarah Jones</h3>
                                    <span>Researcher</span>
                                </div>
                            </div>
                            <div class="testimonialItem01">
                                <div class="ti01Header clearfix">
                                    <i class="ulina-quote"></i>
                                    <div class="ti01Rating float-end">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star-half-alt"></i>
                                    </div>
                                </div>
                                <div class="ti01Content">
                                    Lorem ipsum dolor sit amet, conseet eotur adipisicing elit,
                                    sed do eiusmoed tempor incididunt ut labore et doleore magna
                                    aliqua. Ut enim ad mire oknim veniam, quis nostrud
                                    exercitation ull mco laboris nisi ut aliquip.
                                </div>
                                <div class="ti01Author">
                                    <img src="images/author/6.png" alt="Sarah Jones" />
                                    <h3>John Anderson</h3>
                                    <span>Blogger</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END: Testimonial Section -->


    @include('footer')

    <!-- BEGIN: Back To Top -->
    <a href="javascript:void(0);" id="backtotop"><i class="fa-solid fa-angles-up"></i></a>
    <!-- END: Back To Top -->

    <!-- BEGIN: Product QuickView  -->
    <div class="modal fade productQuickView" id="productQuickView" tabindex="-1"
        data-aria-labelledby="exampleModalLabel" aria-modal="true" role="dialog">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <button type="button" class="quickViewCloser" data-bs-dismiss="modal" aria-label="Close">
                    <span></span>
                </button>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="productGalleryWrap">
                                <div class="productGalleryPopup">
                                    <div class="pgImage">
                                        <img src="images/product_details/p1.jpg" alt="Product Image" />
                                    </div>
                                    <div class="pgImage">
                                        <img src="images/product_details/p2.jpg" alt="Product Image" />
                                    </div>
                                    <div class="pgImage">
                                        <img src="images/product_details/p3.jpg" alt="Product Image" />
                                    </div>
                                    <div class="pgImage">
                                        <img src="images/product_details/p4.jpg" alt="Product Image" />
                                    </div>
                                    <div class="pgImage">
                                        <img src="images/product_details/p5.jpg" alt="Product Image" />
                                    </div>
                                </div>
                                <div class="productGalleryThumbWrap">
                                    <div class="productGalleryThumbPopup">
                                        <div class="pgtImage">
                                            <img src="images/product_details/t1.jpg" alt="Product Image" />
                                        </div>
                                        <div class="pgtImage">
                                            <img src="images/product_details/t2.jpg" alt="Product Image" />
                                        </div>
                                        <div class="pgtImage">
                                            <img src="images/product_details/t3.jpg" alt="Product Image" />
                                        </div>
                                        <div class="pgtImage">
                                            <img src="images/product_details/t4.jpg" alt="Product Image" />
                                        </div>
                                        <div class="pgtImage">
                                            <img src="images/product_details/t5.jpg" alt="Product Image" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="productContent">
                                <div class="pcCategory">
                                    <a href="shop_right_sidebar.html">Fashion</a>,
                                    <a href="shop_left_sidebar.html">Sports</a>
                                </div>
                                <h2>
                                    <a href="shop_details1.html">Ulina luxurious shirt for men</a>
                                </h2>
                                <div class="pi01Price">
                                    <ins>$108</ins>
                                    <del>$120</del>
                                </div>
                                <div class="productRadingsStock clearfix">
                                    <div class="productRatings float-start">
                                        <div class="productRatingWrap">
                                            <div class="star-rating"><span></span></div>
                                        </div>
                                        <div class="ratingCounts">52 Reviews</div>
                                    </div>
                                    <div class="productStock float-end">
                                        <span>Available :</span> 12
                                    </div>
                                </div>
                                <div class="pcExcerpt">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                    sed do eiusncididunt ut labo re et dolore magna aliqua. Ut
                                    enim ad minim veniam
                                </div>
                                <div class="pcVariations">
                                    <div class="pcVariation">
                                        <span>Color</span>
                                        <div class="pcvContainer">
                                            <div class="pi01VCItem">
                                                <input checked type="radio" name="color_4_6" value="Blue"
                                                    id="color_4_634_1_blue" />
                                                <label for="color_4_634_1_blue"></label>
                                            </div>
                                            <div class="pi01VCItem yellows">
                                                <input type="radio" name="color_4_6" value="Yellow"
                                                    id="color_4_6sdf_2_blue" />
                                                <label for="color_4_6sdf_2_blue"></label>
                                            </div>
                                            <div class="pi01VCItem reds">
                                                <input type="radio" name="color_4_6" value="Red"
                                                    id="color_4_6_3_blue" />
                                                <label for="color_4_6_3_blue"></label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="pcVariation pcv2">
                                        <span>Size</span>
                                        <div class="pcvContainer">
                                            <div class="pswItem">
                                                <input checked="" type="radio" name="ws_1" value="S"
                                                    id="ws_1_s" />
                                                <label for="ws_1_s">S</label>
                                            </div>
                                            <div class="pswItem">
                                                <input type="radio" name="ws_1" value="M"
                                                    id="ws_1_m" />
                                                <label for="ws_1_m">M</label>
                                            </div>
                                            <div class="pswItem">
                                                <input type="radio" name="ws_1" value="L"
                                                    id="ws_1_l" />
                                                <label for="ws_1_l">L</label>
                                            </div>
                                            <div class="pswItem">
                                                <input type="radio" name="ws_1" value="XL"
                                                    id="ws_1_xl" />
                                                <label for="ws_1_xl">XL</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="pcBtns">
                                    <div class="quantity clearfix">
                                        <button type="button" name="btnMinus" class="qtyBtn btnMinus">
                                            _
                                        </button>
                                        <input type="number" class="carqty input-text qty text" name="quantity"
                                            value="01" />
                                        <button type="button" name="btnPlus" class="qtyBtn btnPlus">
                                            +
                                        </button>
                                    </div>
                                    <button type="submit" class="ulinaBTN">
                                        <span>Add to Cart</span>
                                    </button>
                                </div>
                                <div class="pcMeta">
                                    <p>
                                        <span>Sku</span>
                                        <a href="javascript:void(0);">3489 JE0765</a>
                                    </p>
                                    <p class="pcmTags">
                                        <span>Tags:</span>
                                        <a href="javascript:void(0);">Fashion</a>,
                                        <a href="javascript:void(0);">Bags</a>,
                                        <a href="javascript:void(0);">Girls</a>
                                    </p>
                                    <p class="pcmSocial">
                                        <span>Share</span>
                                        <a class="fac" href="javascript:void(0);"><i
                                                class="fa-brands fa-facebook-f"></i></a>
                                        <a class="twi" href="javascript:void(0);"><i
                                                class="fa-brands fa-twitter"></i></a>
                                        <a class="lin" href="javascript:void(0);"><i
                                                class="fa-brands fa-linkedin-in"></i></a>
                                        <a class="ins" href="javascript:void(0);"><i
                                                class="fa-brands fa-instagram"></i></a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END: Product QuickView -->

    <!-- BEGIN: JS -->
    <script src="js/jquery.js"></script>
    <script src="js/jquery-ui.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/shuffle.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/owl.carousel.filter.js"></script>
    <script src="js/jquery.appear.js"></script>
    <script src="js/lightcase.js"></script>
    <script src="js/jquery.nice-select.js"></script>
    <script src="js/slick.js"></script>
    <script src="js/jquery.plugin.min.js"></script>
    <script src="js/jquery.countdown.min.js"></script>
    <script src="js/circle-progress.js"></script>

    <script src="js/gmaps.js"></script>
    <script src="https://maps.google.com/maps/api/js?key=AIzaSyCA_EDGVQleQtHIp2fZ-V56QFRbRL8cXT8"></script>

    <script src="js/jquery.themepunch.tools.min.js"></script>
    <script src="js/jquery.themepunch.revolution.min.js"></script>

    <script src="js/extensions/revolution.extension.actions.min.js"></script>
    <script src="js/extensions/revolution.extension.carousel.min.js"></script>
    <script src="js/extensions/revolution.extension.kenburn.min.js"></script>
    <script src="js/extensions/revolution.extension.layeranimation.min.js"></script>
    <script src="js/extensions/revolution.extension.migration.min.js"></script>
    <script src="js/extensions/revolution.extension.navigation.min.js"></script>
    <script src="js/extensions/revolution.extension.parallax.min.js"></script>
    <script src="js/extensions/revolution.extension.slideanims.min.js"></script>
    <script src="js/extensions/revolution.extension.video.min.js"></script>

    <script src="js/theme.js"></script>
    <!-- END: JS -->
</body>

</html>

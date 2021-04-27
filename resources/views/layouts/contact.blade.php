<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="multikart">
    <meta name="keywords" content="multikart">
    <meta name="author" content="multikart">
    <link rel="icon" href="/images/favicon/1.png" type="image/x-icon" />
    <link rel="shortcut icon" href="/images/favicon/1.png" type="image/x-icon" />
    <title>Online-Shopping | Contact Us</title>

    <!--Google font-->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">

    <!-- Icons -->
    <link rel="stylesheet" type="text/css" href="/css/fontawesome.css">

    <!--Slick slider css-->
    <link rel="stylesheet" type="text/css" href="/css/slick.css">
    <link rel="stylesheet" type="text/css" href="/css/slick-theme.css">

    <!-- Animate icon -->
    <link rel="stylesheet" type="text/css" href="/css/animate.css">

    <!-- Themify icon -->
    <link rel="stylesheet" type="text/css" href="/css/themify-icons.css">

    <!-- Bootstrap css -->
    <link rel="stylesheet" type="text/css" href="/css/bootstrap.css">

    <!-- Theme css -->
    <link rel="stylesheet" type="text/css" href="/css/color1.css" media="screen" id="color">


</head>

<body>

    <!-- header start -->
    <header>
        <div class="mobile-fix-option"></div>
        <div class="top-header">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="header-contact">
                            <ul>
                                <li>Bienvenue Dans Notre Market TEPYACH</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 text-right">
                        <ul class="header-dropdown">
                            <li class="mobile-wishlist"><a href="#"><i class="fa fa-heart" aria-hidden="true"></i></a>
                            </li>
                            <li class="onhover-dropdown mobile-account">
                                <i class="fa fa-user" aria-hidden="true"></i> Mon Compte
                                <ul class="onhover-show-div">
                                    <li><a href="#" data-lng="en">Connexion</a></li>
                                    <li><a href="#" data-lng="es">Inscription</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- End Header -->

    <!-- breadcrumb start -->
    <div class="breadcrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="page-title">
                        <h2>contact</h2>
                    </div>
                </div>
                <div class="col-sm-6">
                    <nav aria-label="breadcrumb" class="theme-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                            <li class="breadcrumb-item active">contact</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb End -->

    <!--section start-->
    <section class="contact-page section-b-space">
        <div class="container">
            <div class="row section-b-space">
                <div class="col-lg-7 map">
                    <iframe
                        src="https://www.google.com/maps/place/TalabaStore+(E-COMMERCE)/@36.678917,2.898778,15z/data=!4m5!3m4!1s0x0:0xeec0f6d39b49d7a0!8m2!3d36.678917!4d2.898778"
                        allowfullscreen></iframe>
                </div>
                <div class="col-lg-5">
                    <div class="contact-right">
                        <ul>
                            <li>
                                <div class="contact-icon"><img src="/images/icon/phone.png"
                                        alt="Generic placeholder image">
                                    <h6>Contact Us</h6>
                                </div>
                                <div class="media-body">
                                    <p>+213 (0) 770 75 17 79</p>
                                </div>
                            </li>
                            <li>
                                <div class="contact-icon"><i class="fa fa-map-marker" aria-hidden="true"></i>
                                    <h6>Address</h6>
                                </div>
                                <div class="media-body">
                                    <p>Rahmania, Alger.</p>
                                    <p>Algérie</p>
                                </div>
                            </li>
                            <li>
                                <div class="contact-icon"><img src="/images/icon/email.png"
                                        alt="Generic placeholder image">
                                    <h6>Address</h6>
                                </div>
                                <div class="media-body">
                                    <p>contact@talabastore.com</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <form class="theme-form" action="{{ route('contact_path') }}" method="POST">
                        {{ csrf_field() }}
                        <div class="form-row">
                            <div class="col-md-6">
                                <label for="name">Nom</label>
                                <input type="text" name="name" class="form-control" id="name" placeholder="Enter Votre nom" required="required" value="{{ old('name') }}">
                                {!! $errors->first('name', '<span class="help-bloc">:message</span>') !!}
                            </div>
                            <div class="col-md-6">
                                <label for="email">Email</label>
                                <input type="text" name="email" class="form-control" id="email" placeholder="Email" required="required" value="{{ old('email') }}">
                                {!! $errors->first('email', '<span class="help-bloc">:message</span>') !!}
                            </div>
                            <div class="col-md-12">
                                <label for="review">Ecrivez Votre Message</label>
                                <textarea class="form-control" name="message" placeholder="Ecrivez votre Message"
                                    id="exampleFormControlTextarea1" rows="6">{{ old('message') }}</textarea>
                                {!! $errors->first('message', '<span class="help-bloc">:message</span>') !!}
                            </div>
                            <div class="col-md-12">
                                <button class="btn btn-solid" type="submit">Envoyez Votre Message !</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!--Section ends-->

    <!--footer section -->
    <footer class="footer-light">
        <section class="section-b-space light-layout">
            <div class="container">
                <div class="row footer-theme partition-f">
                    <div class="col-lg-4 col-md-6">
                        <div class="footer-title footer-mobile-title">
                            <h4>about</h4>
                        </div>
                        <div class="footer-contant">
                            <div class="footer-logo"><img src="../assets/images/icon/layout3/logo.png" alt=""></div>
                            <p>Rendez-nous visite sur nos comptes de réseaux sociaux pour découvrir les bonnes nouvelles</p>
                            <div class="footer-social">
                                <ul>
                                    <li><a href="https://www.facebook.com/talabastore/"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                    <li><a href="https://www.linkedin.com/company/talabastore"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                    <li><a href="https://twitter.com/TalabaStore"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                    <li><a href="https://www.instagram.com/talabastore/"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                    <li><a href="https://www.youtube.com/channel/UCWyHFU6BgT1hzt9Fpoh6cBQ"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col offset-xl-1">
                        <div class="sub-title">
                            <div class="footer-title">
                                <h4>Foire aux questions</h4>
                            </div>
                            <div class="footer-contant">
                                <ul>
                                    <li><a href="/about">Comment ça marche</a></li>
                                    <li><a href="/about">Notre Entreprise</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="sub-title">
                            <div class="footer-title">
                                <h4>Plus d'informations</h4>
                            </div>
                            <div class="footer-contant">
                                <ul>
                                    <li><a href="#">Laissez nous un message</a></li>
                                    <li><a href="#">Conditions générales</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="sub-title">
                            <div class="footer-title">
                                <h4>Market informations</h4>
                            </div>
                            <div class="footer-contant">
                                <ul class="contact-list">
                                    <li><i class="fa fa-map-marker"></i><a href="https://www.google.com/maps/place/TalabaStore+(E-COMMERCE)/@36.678917,2.898778,15z/data=!4m5!3m4!1s0x0:0xeec0f6d39b49d7a0!8m2!3d36.678917!4d2.898778">Rahmania, Alger, Algérie</a></li>
                                    <li><i class="fa fa-phone"></i>+213 (0) 770 75 17 79</li>
                                    <li><i class="fa fa-envelope-o"></i>contact@talabastore.dz</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="sub-footer">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-md-6 col-sm-12">
                        <div class="footer-end">
                            <p><i class="fa fa-copyright" aria-hidden="true"></i> Copyright {{ date('Y') }} TALABASTORE - Tous les droits réservés</p>
                        </div>
                    </div>
                    <div class="col-xl-6 col-md-6 col-sm-12">
                        <div class="payment-card-bottom">
                            <ul>
                                <li>
                                    <a href="#"><img src="/images/icon/visa.png" alt=""></a>
                                </li>
                                <li>
                                    <a href="#"><img src="/images/icon/mastercard.png" alt=""></a>
                                </li>
                                <li>
                                    <a href="#"><img src="/images/icon/paypal.png" alt=""></a>
                                </li>
                                <li>
                                    <a href="#"><img src="/images/icon/american-express.png" alt=""></a>
                                </li>
                                <li>
                                    <a href="#"><img src="/images/icon/discover.png" alt=""></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--footer section end -->

    <!-- theme setting -->

    <div id="setting_box" class="setting-box">
        <a href="javascript:void(0)" class="overlay" onclick="closeSetting()"></a>
        <div class="setting_box_body">
            <div onclick="closeSetting()">
                <div class="sidebar-back text-left"><i class="fa fa-angle-left pr-2" aria-hidden="true"></i> Back</div>
            </div>
            <div class="setting-body">
                <div class="setting-title">
                    <h4>layout</h4>
                </div>
                <div class="setting-contant">
                    <div class="row demo-section">
                        <div class="col-sm-6 col-12 text-center demo-effects">
                            <div class="set-position">
                                <div class="layout-container demo1"></div>
                                <div class="demo-text">
                                    <h4>Fashion</h4>
                                    <div class="btn-group demo-btn" role="group" aria-label="Basic example"> <button
                                            type="button" onClick="window.open('index.html')"
                                            class="btn new-tab-btn">Preview</button></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-12 text-center demo-effects">
                            <div class="set-position">
                                <div class="layout-container demo43">
                                    <div class="ribbon-1"><span>n</span><span>e</span><span>w</span></div>
                                </div>
                                <div class="demo-text">
                                    <h4>game</h4>
                                    <div class="btn-group demo-btn" role="group" aria-label="Basic example"> <button
                                            type="button" onClick="window.open('game.html')"
                                            class="btn new-tab-btn">Preview</button> </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-12 text-center demo-effects">
                            <div class="set-position">
                                <div class="layout-container demo44">
                                    <div class="ribbon-1"><span>n</span><span>e</span><span>w</span></div>
                                </div>
                                <div class="demo-text">
                                    <h4>gym</h4>
                                    <div class="btn-group demo-btn" role="group" aria-label="Basic example"> <button
                                            type="button" onClick="window.open('gym-product.html')"
                                            class="btn new-tab-btn">Preview</button> </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-12 text-center demo-effects">
                            <div class="set-position">
                                <div class="layout-container demo45">
                                    <div class="ribbon-1"><span>n</span><span>e</span><span>w</span></div>
                                </div>
                                <div class="demo-text">
                                    <h4>tools</h4>
                                    <div class="btn-group demo-btn" role="group" aria-label="Basic example"> <button
                                            type="button" onClick="window.open('tools.html')"
                                            class="btn new-tab-btn">Preview</button> </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-12 text-center demo-effects">
                            <div class="set-position">
                                <div class="layout-container demo46">
                                    <div class="ribbon-1"><span>n</span><span>e</span><span>w</span></div>
                                </div>
                                <div class="demo-text">
                                    <h4>marijuana</h4>
                                    <div class="btn-group demo-btn" role="group" aria-label="Basic example"> <button
                                            type="button" onClick="window.open('marijuana.html')"
                                            class="btn new-tab-btn">Preview</button> </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-12 text-center demo-effects">
                            <div class="set-position">
                                <div class="layout-container demo47">
                                    <div class="ribbon-1"><span>n</span><span>e</span><span>w</span></div>
                                </div>
                                <div class="demo-text">
                                    <h4>metro</h4>
                                    <div class="btn-group demo-btn" role="group" aria-label="Basic example"> <button
                                            type="button" onClick="window.open('metro.html')"
                                            class="btn new-tab-btn">Preview</button> </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-12 text-center demo-effects">
                            <div class="set-position">
                                <div class="layout-container demo48">
                                    <div class="ribbon-1"><span>n</span><span>e</span><span>w</span></div>
                                </div>
                                <div class="demo-text">
                                    <h4>pets</h4>
                                    <div class="btn-group demo-btn" role="group" aria-label="Basic example"> <button
                                            type="button" onClick="window.open('pets.html')"
                                            class="btn new-tab-btn">Preview</button> </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-12 text-center demo-effects">
                            <div class="set-position">
                                <div class="layout-container demo49">
                                    <div class="ribbon-1"><span>n</span><span>e</span><span>w</span></div>
                                </div>
                                <div class="demo-text">
                                    <h4>video slider</h4>
                                    <div class="btn-group demo-btn" role="group" aria-label="Basic example"> <button
                                            type="button" onClick="window.open('video-slider.html')"
                                            class="btn new-tab-btn">Preview</button> </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-12 text-center demo-effects">
                            <div class="set-position">
                                <div class="layout-container demo50">
                                    <div class="ribbon-1"><span>n</span><span>e</span><span>w</span></div>
                                </div>
                                <div class="demo-text">
                                    <h4>left menu</h4>
                                    <div class="btn-group demo-btn" role="group" aria-label="Basic example"> <button
                                            type="button" onClick="window.open('left_sidebar-demo.html')"
                                            class="btn new-tab-btn">Preview</button> </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-12 text-center demo-effects">
                            <div class="set-position">
                                <div class="layout-container demo51">
                                    <div class="ribbon-1"><span>n</span><span>e</span><span>w</span></div>
                                </div>
                                <div class="demo-text">
                                    <h4>jewellery</h4>
                                    <div class="btn-group demo-btn" role="group" aria-label="Basic example"> <button
                                            type="button" onClick="window.open('jewellery.html')"
                                            class="btn new-tab-btn">Preview</button> </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-12 text-center demo-effects">
                            <div class="set-position">
                                <div class="layout-container demo2"></div>
                                <div class="demo-text">
                                    <h4>Fashion</h4>
                                    <div class="btn-group demo-btn" role="group" aria-label="Basic example"> <button
                                            type="button" onClick="window.open('fashion-2.html')"
                                            class="btn new-tab-btn">Preview</button></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-12 text-center demo-effects">
                            <div class="set-position">
                                <div class="layout-container demo3"></div>
                                <div class="demo-text">
                                    <h4>Fashion</h4>
                                    <div class="btn-group demo-btn" role="group" aria-label="Basic example"> <button
                                            type="button" onClick="window.open('fashion-3.html')"
                                            class="btn new-tab-btn">Preview</button></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-12 text-center demo-effects">
                            <div class="set-position">
                                <div class="layout-container demo4"></div>
                                <div class="demo-text">
                                    <h4>Shoes</h4>
                                    <div class="btn-group demo-btn" role="group" aria-label="Basic example"> <button
                                            type="button" onClick="window.open('shoes.html')"
                                            class="btn new-tab-btn">Preview</button></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-12 text-center demo-effects">
                            <div class="set-position">
                                <div class="layout-container demo5"></div>
                                <div class="demo-text">
                                    <h4>Bags</h4>
                                    <div class="btn-group demo-btn" role="group" aria-label="Basic example"> <button
                                            type="button" onClick="window.open('bags.html')"
                                            class="btn new-tab-btn">Preview</button></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-12 text-center demo-effects">
                            <div class="set-position">
                                <div class="layout-container demo6"></div>
                                <div class="demo-text">
                                    <h4>Watch</h4>
                                    <div class="btn-group demo-btn" role="group" aria-label="Basic example"> <button
                                            type="button" onClick="window.open('watch.html')"
                                            class="btn new-tab-btn">Preview</button></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-12 text-center demo-effects">
                            <div class="set-position">
                                <div class="layout-container demo7"></div>
                                <div class="demo-text">
                                    <h4>Kids</h4>
                                    <div class="btn-group demo-btn" role="group" aria-label="Basic example"> <button
                                            type="button" onClick="window.open('kids.html')"
                                            class="btn new-tab-btn">Preview</button></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-12 text-center demo-effects">
                            <div class="set-position">
                                <div class="layout-container demo8"></div>
                                <div class="demo-text">
                                    <h4>Flower</h4>
                                    <div class="btn-group demo-btn" role="group" aria-label="Basic example"> <button
                                            type="button" onClick="window.open('flower.html')"
                                            class="btn new-tab-btn">Preview</button></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-12 text-center demo-effects">
                            <div class="set-position">
                                <div class="layout-container demo9"></div>
                                <div class="demo-text">
                                    <h4>Nursery</h4>
                                    <div class="btn-group demo-btn" role="group" aria-label="Basic example"> <button
                                            type="button" onClick="window.open('nursery.html')"
                                            class="btn new-tab-btn">Preview</button></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-12 text-center demo-effects">
                            <div class="set-position">
                                <div class="layout-container demo10"></div>
                                <div class="demo-text">
                                    <h4>Vegetables</h4>
                                    <div class="btn-group demo-btn" role="group" aria-label="Basic example"> <button
                                            type="button" onClick="window.open('vegetables.html')"
                                            class="btn new-tab-btn">Preview</button></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-12 text-center demo-effects">
                            <div class="set-position">
                                <div class="layout-container demo11"></div>
                                <div class="demo-text">
                                    <h4>Beauty</h4>
                                    <div class="btn-group demo-btn" role="group" aria-label="Basic example"> <button
                                            type="button" onClick="window.open('beauty.html')"
                                            class="btn new-tab-btn">Preview</button></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-12 text-center demo-effects">
                            <div class="set-position">
                                <div class="layout-container demo12"></div>
                                <div class="demo-text">
                                    <h4>Instagram Shop</h4>
                                    <div class="btn-group demo-btn" role="group" aria-label="Basic example"> <button
                                            type="button" onClick="window.open('instagram-shop.html')"
                                            class="btn new-tab-btn">Preview</button></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-12 text-center demo-effects effect-2">
                            <div class="set-position">
                                <div class="layout-container demo13"></div>
                                <div class="demo-text">
                                    <h4>Lookbook</h4>
                                    <div class="btn-group demo-btn" role="group" aria-label="Basic example"> <button
                                            type="button" onClick="window.open('lookbook-demo.html')"
                                            class="btn new-tab-btn">Preview</button></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-12 text-center demo-effects">
                            <div class="set-position">
                                <div class="layout-container demo14"></div>
                                <div class="demo-text">
                                    <h4>Light</h4>
                                    <div class="btn-group demo-btn" role="group" aria-label="Basic example"> <button
                                            type="button" onClick="window.open('light.html')"
                                            class="btn new-tab-btn">Preview</button></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-12 text-center demo-effects">
                            <div class="set-position">
                                <div class="layout-container demo15"></div>
                                <div class="demo-text">
                                    <h4>Full Page</h4>
                                    <div class="btn-group demo-btn" role="group" aria-label="Basic example"> <button
                                            type="button" onClick="window.open('full-page.html')"
                                            class="btn new-tab-btn">Preview</button></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-12 text-center demo-effects">
                            <div class="set-position">
                                <div class="layout-container demo16"></div>
                                <div class="demo-text">
                                    <h4>Electronic-1</h4>
                                    <div class="btn-group demo-btn" role="group" aria-label="Basic example"> <button
                                            type="button" onClick="window.open('electronic-1.html')"
                                            class="btn new-tab-btn">Preview</button></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-12 text-center demo-effects">
                            <div class="set-position">
                                <div class="layout-container demo17"></div>
                                <div class="demo-text">
                                    <h4>Electronic-2</h4>
                                    <div class="btn-group demo-btn" role="group" aria-label="Basic example"> <button
                                            type="button" onClick="window.open('electronic-2.html')"
                                            class="btn new-tab-btn">Preview</button></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-12 text-center demo-effects effect-2">
                            <div class="set-position">
                                <div class="layout-container demo18"></div>
                                <div class="demo-text">
                                    <h4>Video</h4>
                                    <div class="btn-group demo-btn" role="group" aria-label="Basic example"> <button
                                            type="button" onClick="window.open('video.html')"
                                            class="btn new-tab-btn">Preview</button></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-12 text-center demo-effects">
                            <div class="set-position">
                                <div class="layout-container demo19"></div>
                                <div class="demo-text">
                                    <h4>Goggles</h4>
                                    <div class="btn-group demo-btn" role="group" aria-label="Basic example"> <button
                                            type="button" onClick="window.open('goggles.html')"
                                            class="btn new-tab-btn">Preview</button></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-12 text-center demo-effects mb-0">
                            <div class="set-position">
                                <div class="layout-container demo20"></div>
                                <div class="demo-text">
                                    <h4>Parallax</h4>
                                    <div class="btn-group demo-btn" role="group" aria-label="Basic example"> <button
                                            type="button" onClick="window.open('parallax.html')"
                                            class="btn new-tab-btn">Preview</button></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-12 text-center demo-effects mb-0">
                            <div class="set-position">
                                <div class="layout-container demo21"></div>
                                <div class="demo-text">
                                    <h4>Furniture</h4>
                                    <div class="btn-group demo-btn" role="group" aria-label="Basic example"> <button
                                            type="button" onClick="window.open('furniture.html')"
                                            class="btn new-tab-btn">Preview</button></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="setting-title">
                    <h4>shop</h4>
                </div>
                <div class="setting-contant">
                    <div class="row demo-section">
                        <div class="col-sm-6 col-12 text-center demo-effects">
                            <div class="set-position">
                                <div class="layout-container demo22"></div>
                                <div class="demo-text">
                                    <h4>left sidebar</h4>
                                    <div class="btn-group demo-btn" role="group" aria-label="Basic example"> <button
                                            type="button" onClick="window.open('category-page.html')"
                                            class="btn new-tab-btn">Preview</button></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-12 text-center demo-effects">
                            <div class="set-position">
                                <div class="layout-container demo24"></div>
                                <div class="demo-text">
                                    <h4>right sidebar</h4>
                                    <div class="btn-group demo-btn" role="group" aria-label="Basic example"> <button
                                            type="button" onClick="window.open('category-page(right).html')"
                                            class="btn new-tab-btn">Preview</button> </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-12 text-center demo-effects">
                            <div class="set-position">
                                <div class="layout-container demo23"></div>
                                <div class="demo-text">
                                    <h4>no sidebar</h4>
                                    <div class="btn-group demo-btn" role="group" aria-label="Basic example"> <button
                                            type="button" onClick="window.open('category-page(no-sidebar).html')"
                                            class="btn new-tab-btn">Preview</button> </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-12 text-center demo-effects">
                            <div class="set-position">
                                <div class="layout-container demo25"></div>
                                <div class="demo-text">
                                    <h4>popup</h4>
                                    <div class="btn-group demo-btn" role="group" aria-label="Basic example"> <button
                                            type="button" onClick="window.open('category-page(sidebar-popup).html')"
                                            class="btn new-tab-btn">Preview</button> </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-12 text-center demo-effects">
                            <div class="set-position">
                                <div class="layout-container demo52">
                                    <div class="ribbon-1"><span>n</span><span>e</span><span>w</span></div>
                                </div>
                                <div class="demo-text">
                                    <h4>metro</h4>
                                    <div class="btn-group demo-btn" role="group" aria-label="Basic example"> <button
                                            type="button" onClick="window.open('category-page(metro).html')"
                                            class="btn new-tab-btn">Preview</button> </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-12 text-center demo-effects">
                            <div class="set-position">
                                <div class="layout-container demo53">
                                    <div class="ribbon-1"><span>n</span><span>e</span><span>w</span></div>
                                </div>
                                <div class="demo-text">
                                    <h4>full width</h4>
                                    <div class="btn-group demo-btn" role="group" aria-label="Basic example"> <button
                                            type="button" onClick="window.open('category-page(full-width).html')"
                                            class="btn new-tab-btn">Preview</button> </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-12 text-center demo-effects">
                            <div class="set-position">
                                <div class="layout-container demo26"></div>
                                <div class="demo-text">
                                    <h4>infinite scroll</h4>
                                    <div class="btn-group demo-btn" role="group" aria-label="Basic example"> <button
                                            type="button" onClick="window.open('category-page(infinite-scroll).html')"
                                            class="btn new-tab-btn">Preview</button> </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-12 text-center demo-effects">
                            <div class="set-position">
                                <div class="layout-container demo54"></div>
                                <div class="demo-text">
                                    <h4>three grid</h4>
                                    <div class="btn-group demo-btn" role="group" aria-label="Basic example"> <button
                                            type="button" onClick="window.open('category-page(3-grid).html')"
                                            class="btn new-tab-btn">Preview</button> </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-12 text-center demo-effects mb-0">
                            <div class="set-position">
                                <div class="layout-container demo55"></div>
                                <div class="demo-text">
                                    <h4>six grid</h4>
                                    <div class="btn-group demo-btn" role="group" aria-label="Basic example"> <button
                                            type="button" onClick="window.open('category-page(6-grid).html')"
                                            class="btn new-tab-btn">Preview</button> </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-12 text-center demo-effects mb-0">
                            <div class="set-position">
                                <div class="layout-container demo56"></div>
                                <div class="demo-text">
                                    <h4>list view</h4>
                                    <div class="btn-group demo-btn" role="group" aria-label="Basic example"> <button
                                            type="button" onClick="window.open('category-page(list-view).html')"
                                            class="btn new-tab-btn">Preview</button> </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="setting-title">
                    <h4>product</h4>
                </div>
                <div class="setting-contant">
                    <div class="row demo-section">
                        <div class="col-sm-6 col-12 text-center demo-effects">
                            <div class="set-position">
                                <div class="layout-container demo40">
                                    <div class="ribbon-1"><span>n</span><span>e</span><span>w</span></div>
                                </div>
                                <div class="demo-text">
                                    <h4>four image </h4>
                                    <div class="btn-group demo-btn" role="group" aria-label="Basic example"> <button
                                            type="button" onClick="window.open('product-page(4-image).html')"
                                            class="btn new-tab-btn">Preview</button> </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-12 text-center demo-effects">
                            <div class="set-position">
                                <div class="layout-container demo33"></div>
                                <div class="demo-text">
                                    <h4>left sidebar</h4>
                                    <div class="btn-group demo-btn" role="group" aria-label="Basic example"> <button
                                            type="button" onClick="window.open('product-page.html')"
                                            class="btn new-tab-btn">Preview</button></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-12 text-center demo-effects">
                            <div class="set-position">
                                <div class="layout-container demo36"></div>
                                <div class="demo-text">
                                    <h4>right sidebar</h4>
                                    <div class="btn-group demo-btn" role="group" aria-label="Basic example"> <button
                                            type="button" onClick="window.open('product-page(right-sidebar).html')"
                                            class="btn new-tab-btn">Preview</button> </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-12 text-center demo-effects">
                            <div class="set-position">
                                <div class="layout-container demo34"></div>
                                <div class="demo-text">
                                    <h4>no sidebar</h4>
                                    <div class="btn-group demo-btn" role="group" aria-label="Basic example"> <button
                                            type="button" onClick="window.open('product-page(no-sidebar).html')"
                                            class="btn new-tab-btn">Preview</button> </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-12 text-center demo-effects">
                            <div class="set-position">
                                <div class="layout-container demo41">
                                    <div class="ribbon-1"><span>n</span><span>e</span><span>w</span></div>
                                </div>
                                <div class="demo-text">
                                    <h4>bundle</h4>
                                    <div class="btn-group demo-btn" role="group" aria-label="Basic example"> <button
                                            type="button" onClick="window.open('product-page(bundle).html')"
                                            class="btn new-tab-btn">Preview</button> </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-12 text-center demo-effects">
                            <div class="set-position">
                                <div class="layout-container demo42">
                                    <div class="ribbon-1"><span>n</span><span>e</span><span>w</span></div>
                                </div>
                                <div class="demo-text">
                                    <h4>image swatch</h4>
                                    <div class="btn-group demo-btn" role="group" aria-label="Basic example"> <button
                                            type="button" onClick="window.open('product-page(image-swatch).html')"
                                            class="btn new-tab-btn">Preview</button> </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-12 text-center demo-effects">
                            <div class="set-position">
                                <div class="layout-container demo32"></div>
                                <div class="demo-text">
                                    <h4>left image</h4>
                                    <div class="btn-group demo-btn" role="group" aria-label="Basic example"> <button
                                            type="button" onClick="window.open('product-page(left-image).html')"
                                            class="btn new-tab-btn">Preview</button> </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-12 text-center demo-effects">
                            <div class="set-position">
                                <div class="layout-container demo35"></div>
                                <div class="demo-text">
                                    <h4>right image</h4>
                                    <div class="btn-group demo-btn" role="group" aria-label="Basic example"> <button
                                            type="button" onClick="window.open('product-page(right-image).html')"
                                            class="btn new-tab-btn">Preview</button> </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-12 text-center demo-effects">
                            <div class="set-position">
                                <div class="layout-container demo31">
                                    <div class="ribbon-1"><span>n</span><span>e</span><span>w</span></div>
                                </div>
                                <div class="demo-text">
                                    <h4>image outside</h4>
                                    <div class="btn-group demo-btn" role="group" aria-label="Basic example"> <button
                                            type="button" onClick="window.open('product-page(image-outside).html')"
                                            class="btn new-tab-btn">Preview</button> </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-12 text-center demo-effects">
                            <div class="set-position">
                                <div class="layout-container demo27"></div>
                                <div class="demo-text">
                                    <h4>3-col left</h4>
                                    <div class="btn-group demo-btn" role="group" aria-label="Basic example"> <button
                                            type="button" onClick="window.open('product-page(3-col-left).html')"
                                            class="btn new-tab-btn">Preview</button> </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-12 text-center demo-effects">
                            <div class="set-position">
                                <div class="layout-container demo28"></div>
                                <div class="demo-text">
                                    <h4>3-col right</h4>
                                    <div class="btn-group demo-btn" role="group" aria-label="Basic example"> <button
                                            type="button" onClick="window.open('product-page(3-col-right).html')"
                                            class="btn new-tab-btn">Preview</button> </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-12 text-center demo-effects">
                            <div class="set-position">
                                <div class="layout-container demo29"></div>
                                <div class="demo-text">
                                    <h4>3-col bottom</h4>
                                    <div class="btn-group demo-btn" role="group" aria-label="Basic example"> <button
                                            type="button" onClick="window.open('product-page(3-column).html')"
                                            class="btn new-tab-btn">Preview</button> </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-12 text-center demo-effects">
                            <div class="set-position">
                                <div class="layout-container demo37"></div>
                                <div class="demo-text">
                                    <h4>sticky</h4>
                                    <div class="btn-group demo-btn" role="group" aria-label="Basic example"> <button
                                            type="button" onClick="window.open('product-page(sticky).html')"
                                            class="btn new-tab-btn">Preview</button> </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-12 text-center demo-effects">
                            <div class="set-position">
                                <div class="layout-container demo30"></div>
                                <div class="demo-text">
                                    <h4>accordian</h4>
                                    <div class="btn-group demo-btn" role="group" aria-label="Basic example"> <button
                                            type="button" onClick="window.open('product-page(accordian).html')"
                                            class="btn new-tab-btn">Preview</button> </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-12 text-center demo-effects mb-0">
                            <div class="set-position">
                                <div class="layout-container demo38"></div>
                                <div class="demo-text">
                                    <h4>vertical tab</h4>
                                    <div class="btn-group demo-btn" role="group" aria-label="Basic example"> <button
                                            type="button" onClick="window.open('product-page(vertical-tab).html')"
                                            class="btn new-tab-btn">Preview</button> </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="setting-title">
                    <h4>color picker</h4>
                </div>
                <div class="setting-contant">
                    <ul class="color-box">
                        <li>
                            <input id="ColorPicker1" type="color" value="#f0b54d" name="Background">
                            <span>theme deafult color</span>
                        </li>
                    </ul>
                </div>
                <div class="setting-title">
                    <h4>RTL</h4>
                </div>
                <div class="setting-contant">
                    <ul class="setting_buttons">
                        <li class="active" id="ltr_btn"><a href="javascript:void(0)" class="btn setting_btn">LTR</a>
                        </li>
                        <li id="rtl_btn"><a href="javascript:void(0)" class="btn setting_btn">RTL</a></li>
                    </ul>
                </div>
                <div class="buy_btn">
                    <a href="https://themeforest.net/item/multikart-responsive-ecommerce-html-template/22809967?s_rank=1"
                        target="_blank" class="btn btn-block purchase_btn"><i class="fa fa-shopping-cart"
                            aria-hidden="true"></i> purchase Multikart now!</a>
                    <a href="https://themeforest.net/item/multikart-responsive-angular-ecommerce-template/22905358?s_rank=3"
                        target="_blank" class="btn btn-block purchase_btn"><img src="../assets/images/icon/angular.png"
                            alt="" class="img-fluid"> Multikart Angular</a>
                    <a href="https://themeforest.net/item/multikart-responsive-react-ecommerce-template/23067773?s_rank=2"
                        target="_blank" class="btn btn-block purchase_btn"><img src="../assets/images/icon/react.png"
                            alt="" class="img-fluid"> Multikart React</a>
                    <a href="https://themeforest.net/item/multikart-multipurpose-shopify-sections-theme/23093831?s_rank=1"
                        target="_blank" class="btn btn-block purchase_btn"><img src="../assets/images/icon/shopify.png"
                            alt="" class="img-fluid"> Multikart Shopify</a>
                </div>
            </div>
        </div>
    </div>
    <!-- theme setting -->

    <!-- tap to top -->
    <div class="tap-top">
        <div><i class="fa fa-angle-double-up"></i></div>
    </div>
    <!-- tap to top End -->

    
    <!-- latest jquery-->
    <script src="/js/jquery-3.3.1.min.js"></script>

    <!-- menu js-->
    <script src="/js/menu.js"></script>

    <!-- lazyload js-->
    <script src="/js/lazysizes.min.js"></script>

    <!-- popper js-->
    <script src="/js/popper.min.js"></script>

    <!-- slick js-->
    <script src="/js/slick.js"></script>

    <!-- Bootstrap js-->
    <script src="/js/bootstrap.js"></script>

    <!-- Bootstrap Notification js-->
    <script src="/js/bootstrap-notify.min.js"></script>

    <!-- Theme js-->
    <script src="/js/script.js"></script>

    <script>
        $(window).on('load', function () {
            setTimeout(function () {
                $('#exampleModal').modal('show');
            }, 2500);
        });

        function openSearch() {
            document.getElementById("search-overlay").style.display = "block";
        }

        function closeSearch() {
            document.getElementById("search-overlay").style.display = "none";
        }
    </script>
    @include('flashy::message')


</body>
</html>
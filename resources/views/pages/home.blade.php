@extends("partials.layouts.app")

@section("content")
    <!-- BEGIN content_for_index --><div id="shopify-section-1602823096e2ac33af" class="shopify-section"><section class="slider-content">
            <div class="home-slider owl-carousel owl-theme" id="home-slider">

                <div class="item">
                    <div class="slide-image slider-content-left" style="background-image: url('//cdn.shopify.com/s/files/1/0509/6331/6893/files/slider2.jpg?v=1605097068');">
                        <div class="container">
                            <div class="row">
                                <div class="col">
                                    <div class="slider-text-info slider-text-left">

                                        <h6 style="color:#222222;">Top Sales</h6>



                                        <h2 style="color:#105caa;">Bluetooth Headphone</h2>



                                        <span class="side-text" style="color:#1a1f27;">Aspire to fit different head sizes and shapes</span>



                                        <a href="/collections/speakers" class="btn btn-style">Shop now</a>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="item">
                    <div class="slide-image slider-content-right" style="background-image: url('//cdn.shopify.com/s/files/1/0509/6331/6893/files/slider1-new.jpg?v=1606986023');">
                        <div class="container">
                            <div class="row">
                                <div class="col">
                                    <div class="slider-text-info slider-text-right">

                                        <h6 style="color:#222222;">New arrival</h6>



                                        <h2 style="color:#105caa;">Qilive Headphones</h2>



                                        <span class="side-text" style="color:#1a1f27;">Aspire to fit different head sizes and shapes</span>



                                        <a href="/collections/headphone" class="btn btn-style">Shop now</a>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>

        <!-- Hero Section End -->
        <script>
            $('#home-slider').owlCarousel({
                loop: false,
                rewind: true,fade: true,margin: 0,
                nav: true,
                navText: ['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'],
                dots: false,
                singleItem : true,
                animateOut: 'fadeOut',
                responsive:{
                    0:{
                        items: 1,
                        dots: true
                    },
                    479:{
                        items: 1,
                        dots: true
                    },
                    768:{
                        items: 1
                    },
                    979:{
                        items: 1
                    },
                    1199:{
                        items: 1
                    }
                }
            });
        </script>

        <style>

            .slider-content .home-slider .slide-image{
                background-repeat: no-repeat;
                background-position: center center;
                background-size: cover;
                height: 700px;
                position: relative;
                display: flex;
                align-items: center;
                justify-content: center;}
            @media (max-width: 1599px) and (min-width: 1360px){
                .slider-content .home-slider .slide-image{
                    height: 520px;
                }
            }
            @media (max-width: 1366px) and (min-width: 767px){
                .slider-content .home-slider .slide-image{
                    height: 497px;
                }
            }
            @media (max-width: 1359px) and (min-width: 1200px){
                .slider-content .home-slider .slide-image{
                    height: 460px;
                }
            }
            @media (max-width: 1199px){
                .slider-content .home-slider .slide-image{
                    height: 375px;
                }
            }
            @media (max-width: 991px){
                .slider-content .home-slider .slide-image{
                    height: 350px;
                }
            }
            @media (max-width: 767px){
                .slider-content .home-slider .slide-image.slider-content-right{
                    background-position: right 70% bottom;
                }
                .slider-content .home-slider .slide-image.slider-content-left{
                    background-position: left 75% bottom;
                }
            }
            .slider-content .home-slider .slide-image .slider-text-info{
                width: calc(60% - 30px);}
            .slider-content .home-slider .slide-image.slider-content-left .slider-text-info{
                margin-right: auto;
            }
            .slider-content .home-slider .slide-image.slider-content-right .slider-text-info{
                margin-left: auto;
            }
            .slider-content .home-slider .slide-image.slider-content-center .slider-text-info{
                margin-left: auto;
                margin-right: auto;
            }
            .slider-content .home-slider .slide-image .slider-text-info.slider-text-left{text-align: left;}
            .slider-content .home-slider .slide-image .slider-text-info.slider-text-right{text-align: right;}
            .slider-content .home-slider .slide-image .slider-text-info.slider-text-center{
                text-align: center;
            }

            @media (max-width: 1199px){}
            @media (max-width: 767px){
                .slider-content .home-slider .slide-image .slider-text-info{
                    width: calc(75% - 15px);
                }
                .slider-content .home-slider .slide-image.slider-content-left .slider-text-info{
                    left: 15px;
                    margin-right: auto;
                }
                .slider-content .home-slider .slide-image.slider-content-right .slider-text-info{
                    right: 15px;
                    margin-left: auto;
                }
                .slider-content .home-slider .slide-image.slider-content-center .slider-text-info{
                    left: 15px;
                    right: 15px;
                }
            }

            /* effect transition css */
            .slider-content .home-slider .owl-item.active .slide-image .slider-text-info h6{
                -webkit-animation-name: fadeInUp;
                animation-name: fadeInUp;
                -webkit-animation-delay: 0.3s;
                animation-delay: 0.3s;
                -webkit-animation-fill-mode: both;
                animation-fill-mode: both;
                -webkit-animation-duration: 0.3s;
                animation-duration: 0.3s;
            }
            .slider-content .home-slider .owl-item.active .slide-image .slider-text-info h2{
                -webkit-animation-name: fadeInUp;
                animation-name: fadeInUp;
                -webkit-animation-delay: 0.6s;
                animation-delay: 0.6s;
                -webkit-animation-fill-mode: both;
                animation-fill-mode: both;
                -webkit-animation-duration: 0.6s;
                animation-duration:0.6;
            }
            .slider-content .home-slider .owl-item.active .slide-image .slider-text-info span{
                -webkit-animation-name: fadeInUp;
                animation-name: fadeInUp;
                -webkit-animation-delay: 0.9s;
                animation-delay: 0.9s;
                -webkit-animation-fill-mode: both;
                animation-fill-mode: both;
                -webkit-animation-duration: 0.9s;
                animation-duration: 0.9s;
            }
            .slider-content .home-slider .owl-item.active .slide-image .slider-text-info a{
                -webkit-animation-name: fadeInUp;
                animation-name: fadeInUp;
                -webkit-animation-delay: 1.2s;
                animation-delay: 1.2s;
                -webkit-animation-fill-mode: both;
                animation-fill-mode: both;
                -webkit-animation-duration: 1.2s;
                animation-duration: 1.2s;
            }

            .slider-content .home-slider .slide-image .slider-text-info h6{
                font-size: 20px;
                text-transform: capitalize;
                font-weight: 400;
                line-height: 1;
            }
            .slider-content .home-slider .slide-image .slider-text-info h2{
                font-size: 50px;
                margin-top: 30px;
                line-height: 1;
                text-transform: uppercase;
            }
            .slider-content .home-slider .slide-image .slider-text-info span{
                display: block;
                font-size: 24px;
                margin-top: 30px;
                line-height: 1;
                font-family: 'Courgette', cursive;
            }
            .slider-content .home-slider .slide-image .slider-text-info a{
                margin-top: 36px;
            }
            @media (max-width: 1599px) and (min-width: 1200px){
                .slider-content .home-slider .slide-image .slider-text-info h2{
                    margin-top: 20px;
                }
                .slider-content .home-slider .slide-image .slider-text-info span{
                    margin-top: 20px;
                }
                .slider-content .home-slider .slide-image .slider-text-info a{
                    margin-top: 26px;
                }
            }
            @media (max-width: 1199px){
                .slider-content .home-slider .slide-image .slider-text-info h6{
                    font-size: 16px;
                }
                .slider-content .home-slider .slide-image .slider-text-info h2{
                    font-size: 30px;
                    margin-top: 19px;
                }
                .slider-content .home-slider .slide-image .slider-text-info span{
                    font-size: 18px;
                    margin-top: 19px;
                }
                .slider-content .home-slider .slide-image .slider-text-info a{
                    margin-top: 23px;
                }
            }
            @media (max-width: 767px){
                .slider-content .home-slider .slide-image .slider-text-info h6{
                    font-size: 16px;
                }
                .slider-content .home-slider .slide-image .slider-text-info h2{
                    font-size: 24px;
                    margin-top: 17px;
                }
                .slider-content .home-slider .slide-image .slider-text-info span{
                    font-size: 16px;
                    margin-top: 17px;
                }
                .slider-content .home-slider .slide-image .slider-text-info a{
                    margin-top: 19px;
                }
            }

            /* slider property css */
            .slider-content .home-slider.owl-carousel .owl-nav{
                margin-top: 0;
            }
            .slider-content .home-slider.owl-carousel .owl-nav button{
                font-size: 24px;
                color: #fff;
                position: absolute;
                bottom: 50%;

                transform: translateY(50%);

                width: 40px;
                height: 40px;
                display: flex;
                align-items: center;
                justify-content: center;
                background-color: #105caa;
                margin: 0;
                border-radius: 0px;
                opacity: 0;
                visibility: hidden;
            }
            .slider-content .home-slider.owl-carousel .owl-nav button:hover{
                background-color: #222222;
            }
            .slider-content .home-slider.owl-carousel:hover .owl-nav button{
                opacity: 1;
                visibility: visible;
            }
            .slider-content .home-slider.owl-carousel .owl-nav button i{
                line-height: 35px;
            }
            .slider-content .home-slider.owl-carousel .owl-nav button.owl-prev{

                left: 0px;

            }
            .slider-content .home-slider.owl-carousel .owl-nav button.owl-next{

                right: 0px;

            }
            .slider-content .home-slider.owl-carousel:hover .owl-nav button.owl-prev{

                left: 15px;

            }
            .slider-content .home-slider.owl-carousel:hover .owl-nav button.owl-next{

                right: 15px;

            }
            .slider-content .home-slider.owl-carousel .owl-dots{
                position: absolute;
                bottom: 15px;
                left: 15px;
                right: 15px;
                line-height: 0;
            }
            .slider-content .home-slider.owl-carousel .owl-dots button{

                margin-right: 5px;

            }
            .slider-content .home-slider.owl-carousel .owl-dots button:last-child{

                margin-right: 0px;

            }
            .slider-content .home-slider.owl-carousel .owl-dots button span{
                margin: 0;
                width: 8px;
                height: 8px;
                background-color: #000;
                border-radius: 50%;
            }
            .slider-content .home-slider.owl-carousel .owl-dots button:hover span,
            .slider-content .home-slider.owl-carousel .owl-dots button.active span{
                background-color: #105caa;
            }
            @media (max-width: 1199px){
                .slider-content .home-slider.owl-carousel .owl-nav button{
                    opacity: 1;
                    visibility: visible;
                }
                .slider-content .home-slider.owl-carousel .owl-nav button.owl-prev,
                .slider-content .home-slider.owl-carousel:hover .owl-nav button.owl-prev{

                    left: 10px;

                }
                .slider-content .home-slider.owl-carousel .owl-nav button.owl-next,
                .slider-content .home-slider.owl-carousel:hover .owl-nav button.owl-next{

                    right: 10px;

                }
            }
            @media (max-width: 767px){
                .slider-content .home-slider.owl-carousel .owl-nav{
                    display: none;
                }
            }

            /* slider banner css */
            ul.slider-banner-block li.slider-banner{
                margin-top: 30px;
            }
            ul.slider-banner-block li.slider-banner:first-child{
                margin-top: 0px;
            }
            @media (max-width: 991px){
                ul.slider-banner-block{
                    display: -ms-flexbox;
                    display: flex;
                    -ms-flex-wrap: wrap;
                    flex-wrap: wrap;margin-left: -30px;}
                ul.slider-banner-block li.slider-banner{
                    width: calc(50% - 30px);margin-left: 30px;}
                ul.slider-banner-block li.slider-banner:first-child{
                    margin-top: 30px;
                }
            }
            @media (max-width: 767px){
                ul.slider-banner-block{margin-left: -15px;}
                ul.slider-banner-block li.slider-banner{
                    width: calc(100% - 15px);
                    margin-top: 20px;margin-left: 15px;}
            }
        </style></div><div id="shopify-section-1602778990b61c2961" class="shopify-section"><!-- Browuse categoryies -->
        <section class="slider-category" >
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12">

                        <div class="section-capture">
                            <div class="section-title">

                                <h2>Top category</h2>


                            </div>
                        </div>

                        <div class="cat-slider owl-carousel owl-theme" id="category-slider">


                            <div class="item">
                                <div class="category-wrap">
                                    <a href="/collections/headphone" class="banner-hover">
                                        <span class="cat-img"><img class="img-fluid" src="//cdn.shopify.com/s/files/1/0509/6331/6893/files/cat-2.2.jpg?v=1605066711"></span>
                                    </a>
                                    <a href="/collections/headphone" class="cat-title"><span>Headphone</span></a>
                                </div>
                            </div>


                            <div class="item">
                                <div class="category-wrap">
                                    <a href="/collections/vr-box" class="banner-hover">
                                        <span class="cat-img"><img class="img-fluid" src="//cdn.shopify.com/s/files/1/0509/6331/6893/files/cat-4.jpg?v=1605066504"></span>
                                    </a>
                                    <a href="/collections/vr-box" class="cat-title"><span>VR Box</span></a>
                                </div>
                            </div>


                            <div class="item">
                                <div class="category-wrap">
                                    <a href="/collections/smartphone" class="banner-hover">
                                        <span class="cat-img"><img class="img-fluid" src="//cdn.shopify.com/s/files/1/0509/6331/6893/files/cat-5.jpg?v=1606992721"></span>
                                    </a>
                                    <a href="/collections/smartphone" class="cat-title"><span>Smartphone</span></a>
                                </div>
                            </div>


                            <div class="item">
                                <div class="category-wrap">
                                    <a href="/collections/camera" class="banner-hover">
                                        <span class="cat-img"><img class="img-fluid" src="//cdn.shopify.com/s/files/1/0509/6331/6893/files/cat-6.jpg?v=1605067354"></span>
                                    </a>
                                    <a href="/collections/camera" class="cat-title"><span>Camera</span></a>
                                </div>
                            </div>


                            <div class="item">
                                <div class="category-wrap">
                                    <a href="/collections/laptop" class="banner-hover">
                                        <span class="cat-img"><img class="img-fluid" src="//cdn.shopify.com/s/files/1/0509/6331/6893/files/cat-1.jpg?v=1605065685"></span>
                                    </a>
                                    <a href="/collections/laptop" class="cat-title"><span>Laptop</span></a>
                                </div>
                            </div>


                            <div class="item">
                                <div class="category-wrap">
                                    <a href="/collections/pen-drives" class="banner-hover">
                                        <span class="cat-img"><img class="img-fluid" src="//cdn.shopify.com/s/files/1/0509/6331/6893/files/cat-7-new.jpg?v=1606986099"></span>
                                    </a>
                                    <a href="/collections/pen-drives" class="cat-title"><span>Pen Drives</span></a>
                                </div>
                            </div>


                            <div class="item">
                                <div class="category-wrap">
                                    <a href="/collections/speakers" class="banner-hover">
                                        <span class="cat-img"><img class="img-fluid" src="//cdn.shopify.com/s/files/1/0509/6331/6893/files/cat-3.jpg?v=1605066269"></span>
                                    </a>
                                    <a href="/collections/speakers" class="cat-title"><span>Speakers</span></a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <script type="text/javascript">
            $('#category-slider').owlCarousel({
                loop: false,
                rewind: true,
                margin: 30,
                nav: false,
                navText: ['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'],
                dots: false,autoplay: true,
                autoplayTimeout: 5000,
                autoplayHoverPause: true,
                responsive:{
                    0:{
                        items: 1,
                        margin: 15
                    },
                    479:{
                        items: 1,
                        margin: 15
                    },
                    768:{
                        items: 3
                    },
                    979:{
                        items: 4
                    },
                    1199:{
                        items: 4
                    },
                    1359:{
                        items: 4
                    }
                }
            });
        </script>

        <style>
            .slider-category {
                padding-top:60px;
                padding-bottom:0px;




            }
            @media (max-width: 767px) {
                .slider-category {
                    padding-top:40px;
                    padding-bottom:0px;
                }
            }
            .cat-slider .category-wrap,
            .cat-slider .category-wrap:hover{
                -webkit-transition: all 0.3s ease-in-out 0s;
                -o-transition: all 0.3s ease-in-out 0s;
                transition: all 0.3s ease-in-out 0s;
            }
            .cat-slider .category-wrap a{
                position: relative;
                display: block;
            }
            .cat-slider .category-wrap a span.cat-img{
                display: block;
            }

            .cat-slider .category-wrap a.cat-title{
                color: #fff;
                font-size: 16px;
                position: absolute;
                bottom: 0px;
                left: 0;
                right: 0;
                padding: 8px 0;
                text-align: center;
                text-transform: uppercase;
                letter-spacing: 1px;
                font-weight: 500;
                white-space: nowrap;
                overflow: hidden;
                text-overflow: ellipsis;
                background-color:#105caa;
                z-index: 1;
                transform: translateY(100%);
            }
            .cat-slider .category-wrap a.cat-title:hover{
                background-color:#222222;
            }
            .cat-slider .category-wrap:hover a.cat-title{
                transform: translateY(0%);
            }
            @media (max-width: 1199px){
                .cat-slider .category-wrap a.cat-title{
                    position: unset;
                    width: 100%;
                    transform: translateY(0%);
                }
            }
        </style></div><div id="shopify-section-1537092551066" class="shopify-section"><!-- product-area start -->
        <div class="product-area product-tab-ptb">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-12">

                        <div class="section-capture tab">
                            <div class="section-title">

                                <h2>Trending collection</h2>


                            </div>
                            <ul class="nav nav-tabs" role="tablist">



                                <li role="presentation">
                                    <a class="active show" role="tab" data-toggle="tab" href="#tab-1584168950333">New products</a>
                                </li>




                                <li role="presentation">
                                    <a class="" role="tab" data-toggle="tab" href="#tab-1574764873111">Featured products</a>
                                </li>




                                <li role="presentation">
                                    <a class="" role="tab" data-toggle="tab" href="#tab-1592830767075">Best Seller</a>
                                </li>


                            </ul>
                        </div>

                        <div class="tab-content tabs">


                            <div class="tab-pane fade active show" id="tab-1584168950333" role="tabpanel">
                                <div class="swiper-container" id="feture_pro_tab">
                                    <div class="swiper-wrapper">

                                        <div class="swiper-slide">
                                            <div class="single-product-wrap stock-out">
                                                <div class="product-image stock-out">
                                                    <a class="pro-img" href="/products/refrigerator">
                                                        <img class="img-fluid img1" src="//cdn.shopify.com/s/files/1/0509/6331/6893/products/pro58_300X350_crop_center.jpg?v=1606987893" alt="Refrigerator">
                                                        <img class="img-fluid img2" src="//cdn.shopify.com/s/files/1/0509/6331/6893/products/pro59_300X350_crop_center.jpg?v=1606987893" alt="Refrigerator" />
                                                    </a>
                                                    <div class="product-label">










                                                        <span class="soldout-title">Soldout</span>
                                                    </div>

                                                </div>
                                                <div class="product-content">
                                                    <div class="product-ratting">
                                                        <span class="shopify-product-reviews-badge" data-id="5822868979869"></span>
                                                    </div>
                                                    <h6>
                                                        <a href="/products/refrigerator" title="Refrigerator">Refrigerator</a>
                                                    </h6>
                                                    <div class="price-box">
                                                        <span class="new-price"><span class=money>Rs. 120.00</span></span>

                                                        <span class="old-price"><span class=money>Rs. 130.00</span></span>

                                                    </div>
                                                    <p class="product-description">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been t...
                                                    </p>

                                                </div>
                                            </div>
                                            <style>
                                                a.add-to-cart.disabled{
                                                    color: #eaeaea;
                                                    background-color: #ababab;
                                                    opacity: .65;
                                                    pointer-events: none;
                                                }
                                            </style>
                                        </div>

                                        <div class="swiper-slide">
                                            <div class="single-product-wrap ">
                                                <div class="product-image ">
                                                    <a class="pro-img" href="/products/jbl-speaker">
                                                        <img class="img-fluid img1" src="//cdn.shopify.com/s/files/1/0509/6331/6893/products/pro37_9c497408-cd03-4ba8-b516-981c770bbaae_300X350_crop_center.jpg?v=1606987296" alt="JBL Speaker">
                                                        <img class="img-fluid img2" src="//cdn.shopify.com/s/files/1/0509/6331/6893/products/pro36_20b3e4a6-54ec-42a8-a760-3f40b78c2bc9_300X350_crop_center.jpg?v=1606987296" alt="JBL Speaker" />
                                                    </a>
                                                    <div class="product-label">
















                                                        <span class="new-title">New</span>





                                                    </div>

                                                    <div class="product-action">

                                                        <a href="javascript:void(0);" onclick="Shopify.addItem(37032003666077, 1); return false;" class="add-to-cart ajax-spin-cart" data-toggle="tooltip" data-placement="top" title="Add to cart">
                <span>
                    <span class="cart-title"><i class="ti-shopping-cart"></i></span>
                    <span class="cart-loading animated infinite rotateOut"><i class="ion-load-a"></i></span>
                    <span class="cart-added"><i class="ion-android-done"></i></span>
                    <span class="cart-unavailable"><i class="ion-android-alert"></i></span>
                </span>
                                                        </a>

                                                        <a href="javascript:void(0);" onclick="quiqview('jbl-speaker')" class="quick-view" data-toggle="tooltip" data-placement="top" title="Quickview">
                                                            <i class="ti-eye"></i>
                                                        </a>

                                                        <a class="wishlist" href="/account/login" title="Wishlist" data-toggle="tooltip" data-placement="top" title="Wishlist">
                                                            <i class="ti-heart"></i>
                                                        </a>

                                                    </div>

                                                </div>
                                                <div class="product-content">
                                                    <div class="product-ratting">
                                                        <span class="shopify-product-reviews-badge" data-id="5822868717725"></span>
                                                    </div>
                                                    <h6>
                                                        <a href="/products/jbl-speaker" title="JBL Speaker">JBL Speaker</a>
                                                    </h6>
                                                    <div class="price-box">
                                                        <span class="new-price"><span class=money>Rs. 60.00</span></span>

                                                    </div>
                                                    <p class="product-description">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been t...
                                                    </p>

                                                    <div class="product-action">

                                                        <a href="javascript:void(0);" onclick="Shopify.addItem(37032003666077, 1); return false;" class="add-to-cart ajax-spin-cart" data-toggle="tooltip" data-placement="top" title="Add to cart">
                <span>
                    <span class="cart-title"><i class="ti-shopping-cart"></i></span>
                    <span class="cart-loading animated infinite rotateOut"><i class="ion-load-a"></i></span>
                    <span class="cart-added"><i class="ion-android-done"></i></span>
                    <span class="cart-unavailable"><i class="ion-android-alert"></i></span>
                </span>
                                                        </a>

                                                        <a href="javascript:void(0);" onclick="quiqview('jbl-speaker')" class="quick-view" data-toggle="tooltip" data-placement="top" title="Quickview">
                                                            <i class="ti-eye"></i>
                                                        </a>

                                                        <a class="wishlist" href="/account/login" title="Wishlist" data-toggle="tooltip" data-placement="top" title="Wishlist">
                                                            <i class="ti-heart"></i>
                                                        </a>

                                                    </div>

                                                </div>
                                            </div>
                                            <style>
                                                a.add-to-cart.disabled{
                                                    color: #eaeaea;
                                                    background-color: #ababab;
                                                    opacity: .65;
                                                    pointer-events: none;
                                                }
                                            </style>
                                        </div>

                                        <div class="swiper-slide">
                                            <div class="single-product-wrap ">
                                                <div class="product-image ">
                                                    <a class="pro-img" href="/products/laptop">
                                                        <img class="img-fluid img1" src="//cdn.shopify.com/s/files/1/0509/6331/6893/products/pro11_eca584c8-e1e1-404d-996d-af35cc9909c2_300X350_crop_center.jpg?v=1606987596" alt="Laptop">
                                                        <img class="img-fluid img2" src="//cdn.shopify.com/s/files/1/0509/6331/6893/products/pro12_300X350_crop_center.jpg?v=1606987596" alt="Laptop" />
                                                    </a>
                                                    <div class="product-label">
















                                                        <span class="new-title">New</span>





                                                        <span class="percent-count">-5%</span>



                                                    </div>

                                                    <div class="product-action">

                                                        <a href="javascript:void(0);" onclick="Shopify.addItem(37031998619805, 1); return false;" class="add-to-cart ajax-spin-cart" data-toggle="tooltip" data-placement="top" title="Add to cart">
                <span>
                    <span class="cart-title"><i class="ti-shopping-cart"></i></span>
                    <span class="cart-loading animated infinite rotateOut"><i class="ion-load-a"></i></span>
                    <span class="cart-added"><i class="ion-android-done"></i></span>
                    <span class="cart-unavailable"><i class="ion-android-alert"></i></span>
                </span>
                                                        </a>

                                                        <a href="javascript:void(0);" onclick="quiqview('laptop')" class="quick-view" data-toggle="tooltip" data-placement="top" title="Quickview">
                                                            <i class="ti-eye"></i>
                                                        </a>

                                                        <a class="wishlist" href="/account/login" title="Wishlist" data-toggle="tooltip" data-placement="top" title="Wishlist">
                                                            <i class="ti-heart"></i>
                                                        </a>

                                                    </div>

                                                </div>
                                                <div class="product-content">
                                                    <div class="product-ratting">
                                                        <span class="shopify-product-reviews-badge" data-id="5822867701917"></span>
                                                    </div>
                                                    <h6>
                                                        <a href="/products/laptop" title="Laptop">Laptop</a>
                                                    </h6>
                                                    <div class="price-box">
                                                        <span class="new-price"><span class=money>Rs. 200.00</span></span>

                                                        <span class="old-price"><span class=money>Rs. 210.00</span></span>

                                                    </div>
                                                    <p class="product-description">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been t...
                                                    </p>

                                                    <div class="product-action">

                                                        <a href="javascript:void(0);" onclick="Shopify.addItem(37031998619805, 1); return false;" class="add-to-cart ajax-spin-cart" data-toggle="tooltip" data-placement="top" title="Add to cart">
                <span>
                    <span class="cart-title"><i class="ti-shopping-cart"></i></span>
                    <span class="cart-loading animated infinite rotateOut"><i class="ion-load-a"></i></span>
                    <span class="cart-added"><i class="ion-android-done"></i></span>
                    <span class="cart-unavailable"><i class="ion-android-alert"></i></span>
                </span>
                                                        </a>

                                                        <a href="javascript:void(0);" onclick="quiqview('laptop')" class="quick-view" data-toggle="tooltip" data-placement="top" title="Quickview">
                                                            <i class="ti-eye"></i>
                                                        </a>

                                                        <a class="wishlist" href="/account/login" title="Wishlist" data-toggle="tooltip" data-placement="top" title="Wishlist">
                                                            <i class="ti-heart"></i>
                                                        </a>

                                                    </div>

                                                </div>
                                            </div>
                                            <style>
                                                a.add-to-cart.disabled{
                                                    color: #eaeaea;
                                                    background-color: #ababab;
                                                    opacity: .65;
                                                    pointer-events: none;
                                                }
                                            </style>
                                        </div>

                                        <div class="swiper-slide">
                                            <div class="single-product-wrap ">
                                                <div class="product-image ">
                                                    <a class="pro-img" href="/products/boat">
                                                        <img class="img-fluid img1" src="//cdn.shopify.com/s/files/1/0509/6331/6893/products/pro3_66116319-ea9e-48c4-aee5-c0de6bf84624_300X350_crop_center.jpg?v=1606986643" alt="Boat">
                                                        <img class="img-fluid img2" src="//cdn.shopify.com/s/files/1/0509/6331/6893/products/pro2_2c303381-fe9a-46fb-81cf-d0e8963ae517_300X350_crop_center.jpg?v=1606986647" alt="Boat" />
                                                    </a>
                                                    <div class="product-label">














                                                        <span class="sale-title">Sale</span>







                                                        <span class="percent-count">-6%</span>



                                                    </div>

                                                    <div class="product-action">

                                                        <a href="javascript:void(0);" onclick="Shopify.addItem(37031997571229, 1); return false;" class="add-to-cart ajax-spin-cart" data-toggle="tooltip" data-placement="top" title="Add to cart">
                <span>
                    <span class="cart-title"><i class="ti-shopping-cart"></i></span>
                    <span class="cart-loading animated infinite rotateOut"><i class="ion-load-a"></i></span>
                    <span class="cart-added"><i class="ion-android-done"></i></span>
                    <span class="cart-unavailable"><i class="ion-android-alert"></i></span>
                </span>
                                                        </a>

                                                        <a href="javascript:void(0);" onclick="quiqview('boat')" class="quick-view" data-toggle="tooltip" data-placement="top" title="Quickview">
                                                            <i class="ti-eye"></i>
                                                        </a>

                                                        <a class="wishlist" href="/account/login" title="Wishlist" data-toggle="tooltip" data-placement="top" title="Wishlist">
                                                            <i class="ti-heart"></i>
                                                        </a>

                                                    </div>

                                                </div>
                                                <div class="product-content">
                                                    <div class="product-ratting">
                                                        <span class="shopify-product-reviews-badge" data-id="5822867472541"></span>
                                                    </div>
                                                    <h6>
                                                        <a href="/products/boat" title="Boat">Boat</a>
                                                    </h6>
                                                    <div class="price-box">
                                                        <span class="new-price"><span class=money>Rs. 150.00</span></span>

                                                        <span class="old-price"><span class=money>Rs. 160.00</span></span>

                                                    </div>
                                                    <p class="product-description">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been t...
                                                    </p>

                                                    <div class="product-action">

                                                        <a href="javascript:void(0);" onclick="Shopify.addItem(37031997571229, 1); return false;" class="add-to-cart ajax-spin-cart" data-toggle="tooltip" data-placement="top" title="Add to cart">
                <span>
                    <span class="cart-title"><i class="ti-shopping-cart"></i></span>
                    <span class="cart-loading animated infinite rotateOut"><i class="ion-load-a"></i></span>
                    <span class="cart-added"><i class="ion-android-done"></i></span>
                    <span class="cart-unavailable"><i class="ion-android-alert"></i></span>
                </span>
                                                        </a>

                                                        <a href="javascript:void(0);" onclick="quiqview('boat')" class="quick-view" data-toggle="tooltip" data-placement="top" title="Quickview">
                                                            <i class="ti-eye"></i>
                                                        </a>

                                                        <a class="wishlist" href="/account/login" title="Wishlist" data-toggle="tooltip" data-placement="top" title="Wishlist">
                                                            <i class="ti-heart"></i>
                                                        </a>

                                                    </div>

                                                </div>
                                            </div>
                                            <style>
                                                a.add-to-cart.disabled{
                                                    color: #eaeaea;
                                                    background-color: #ababab;
                                                    opacity: .65;
                                                    pointer-events: none;
                                                }
                                            </style>
                                        </div>

                                        <div class="swiper-slide">
                                            <div class="single-product-wrap ">
                                                <div class="product-image ">
                                                    <a class="pro-img" href="/products/i-phone">
                                                        <img class="img-fluid img1" src="//cdn.shopify.com/s/files/1/0509/6331/6893/products/pro15_300X350_crop_center.jpg?v=1606987157" alt="I Phone">
                                                        <img class="img-fluid img2" src="//cdn.shopify.com/s/files/1/0509/6331/6893/products/pro18_300X350_crop_center.jpg?v=1606987162" alt="I Phone" />
                                                    </a>
                                                    <div class="product-label">
















                                                        <span class="new-title">New</span>





                                                        <span class="percent-count">-2%</span>



                                                    </div>

                                                    <div class="product-action">

                                                        <a href="javascript:void(0);" onclick="Shopify.addItem(37032002125981, 1); return false;" class="add-to-cart ajax-spin-cart" data-toggle="tooltip" data-placement="top" title="Add to cart">
                <span>
                    <span class="cart-title"><i class="ti-shopping-cart"></i></span>
                    <span class="cart-loading animated infinite rotateOut"><i class="ion-load-a"></i></span>
                    <span class="cart-added"><i class="ion-android-done"></i></span>
                    <span class="cart-unavailable"><i class="ion-android-alert"></i></span>
                </span>
                                                        </a>

                                                        <a href="javascript:void(0);" onclick="quiqview('i-phone')" class="quick-view" data-toggle="tooltip" data-placement="top" title="Quickview">
                                                            <i class="ti-eye"></i>
                                                        </a>

                                                        <a class="wishlist" href="/account/login" title="Wishlist" data-toggle="tooltip" data-placement="top" title="Wishlist">
                                                            <i class="ti-heart"></i>
                                                        </a>

                                                    </div>

                                                </div>
                                                <div class="product-content">
                                                    <div class="product-ratting">
                                                        <span class="shopify-product-reviews-badge" data-id="5822868193437"></span>
                                                    </div>
                                                    <h6>
                                                        <a href="/products/i-phone" title="I Phone">I Phone</a>
                                                    </h6>
                                                    <div class="price-box">
                                                        <span class="new-price"><span class=money>Rs. 225.00</span></span>

                                                        <span class="old-price"><span class=money>Rs. 230.00</span></span>

                                                    </div>
                                                    <p class="product-description">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been t...
                                                    </p>

                                                    <div class="product-action">

                                                        <a href="javascript:void(0);" onclick="Shopify.addItem(37032002125981, 1); return false;" class="add-to-cart ajax-spin-cart" data-toggle="tooltip" data-placement="top" title="Add to cart">
                <span>
                    <span class="cart-title"><i class="ti-shopping-cart"></i></span>
                    <span class="cart-loading animated infinite rotateOut"><i class="ion-load-a"></i></span>
                    <span class="cart-added"><i class="ion-android-done"></i></span>
                    <span class="cart-unavailable"><i class="ion-android-alert"></i></span>
                </span>
                                                        </a>

                                                        <a href="javascript:void(0);" onclick="quiqview('i-phone')" class="quick-view" data-toggle="tooltip" data-placement="top" title="Quickview">
                                                            <i class="ti-eye"></i>
                                                        </a>

                                                        <a class="wishlist" href="/account/login" title="Wishlist" data-toggle="tooltip" data-placement="top" title="Wishlist">
                                                            <i class="ti-heart"></i>
                                                        </a>

                                                    </div>

                                                </div>
                                            </div>
                                            <style>
                                                a.add-to-cart.disabled{
                                                    color: #eaeaea;
                                                    background-color: #ababab;
                                                    opacity: .65;
                                                    pointer-events: none;
                                                }
                                            </style>
                                        </div>

                                        <div class="swiper-slide">
                                            <div class="single-product-wrap ">
                                                <div class="product-image ">
                                                    <a class="pro-img" href="/products/watch">
                                                        <img class="img-fluid img1" src="//cdn.shopify.com/s/files/1/0509/6331/6893/products/pro20_300X350_crop_center.jpg?v=1606987984" alt="Watch">
                                                        <img class="img-fluid img2" src="//cdn.shopify.com/s/files/1/0509/6331/6893/products/pro21_300X350_crop_center.jpg?v=1606987984" alt="Watch" />
                                                    </a>
                                                    <div class="product-label">
















                                                        <span class="new-title">New</span>





                                                        <span class="percent-count">-22%</span>



                                                    </div>

                                                    <div class="product-action">

                                                        <a href="javascript:void(0);" onclick="Shopify.addItem(37032004419741, 1); return false;" class="add-to-cart ajax-spin-cart" data-toggle="tooltip" data-placement="top" title="Add to cart">
                <span>
                    <span class="cart-title"><i class="ti-shopping-cart"></i></span>
                    <span class="cart-loading animated infinite rotateOut"><i class="ion-load-a"></i></span>
                    <span class="cart-added"><i class="ion-android-done"></i></span>
                    <span class="cart-unavailable"><i class="ion-android-alert"></i></span>
                </span>
                                                        </a>

                                                        <a href="javascript:void(0);" onclick="quiqview('watch')" class="quick-view" data-toggle="tooltip" data-placement="top" title="Quickview">
                                                            <i class="ti-eye"></i>
                                                        </a>

                                                        <a class="wishlist" href="/account/login" title="Wishlist" data-toggle="tooltip" data-placement="top" title="Wishlist">
                                                            <i class="ti-heart"></i>
                                                        </a>

                                                    </div>

                                                </div>
                                                <div class="product-content">
                                                    <div class="product-ratting">
                                                        <span class="shopify-product-reviews-badge" data-id="5822868848797"></span>
                                                    </div>
                                                    <h6>
                                                        <a href="/products/watch" title="Watch">Watch</a>
                                                    </h6>
                                                    <div class="price-box">
                                                        <span class="new-price"><span class=money>Rs. 110.00</span></span>

                                                        <span class="old-price"><span class=money>Rs. 130.00</span></span>

                                                    </div>
                                                    <p class="product-description">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been t...
                                                    </p>

                                                    <div class="product-action">

                                                        <a href="javascript:void(0);" onclick="Shopify.addItem(37032004419741, 1); return false;" class="add-to-cart ajax-spin-cart" data-toggle="tooltip" data-placement="top" title="Add to cart">
                <span>
                    <span class="cart-title"><i class="ti-shopping-cart"></i></span>
                    <span class="cart-loading animated infinite rotateOut"><i class="ion-load-a"></i></span>
                    <span class="cart-added"><i class="ion-android-done"></i></span>
                    <span class="cart-unavailable"><i class="ion-android-alert"></i></span>
                </span>
                                                        </a>

                                                        <a href="javascript:void(0);" onclick="quiqview('watch')" class="quick-view" data-toggle="tooltip" data-placement="top" title="Quickview">
                                                            <i class="ti-eye"></i>
                                                        </a>

                                                        <a class="wishlist" href="/account/login" title="Wishlist" data-toggle="tooltip" data-placement="top" title="Wishlist">
                                                            <i class="ti-heart"></i>
                                                        </a>

                                                    </div>

                                                </div>
                                            </div>
                                            <style>
                                                a.add-to-cart.disabled{
                                                    color: #eaeaea;
                                                    background-color: #ababab;
                                                    opacity: .65;
                                                    pointer-events: none;
                                                }
                                            </style>
                                        </div>

                                        <div class="swiper-slide">
                                            <div class="single-product-wrap ">
                                                <div class="product-image ">
                                                    <a class="pro-img" href="/products/earbuds">
                                                        <img class="img-fluid img1" src="//cdn.shopify.com/s/files/1/0509/6331/6893/products/pro8_300X350_crop_center.jpg?v=1606987015" alt="Earbuds">
                                                        <img class="img-fluid img2" src="//cdn.shopify.com/s/files/1/0509/6331/6893/products/pro9_300X350_crop_center.jpg?v=1606987015" alt="Earbuds" />
                                                    </a>
                                                    <div class="product-label">
















                                                        <span class="new-title">New</span>





                                                        <span class="percent-count">-8%</span>



                                                    </div>

                                                    <div class="product-action">

                                                        <a href="javascript:void(0);" onclick="Shopify.addItem(37031996981405, 1); return false;" class="add-to-cart ajax-spin-cart" data-toggle="tooltip" data-placement="top" title="Add to cart">
                <span>
                    <span class="cart-title"><i class="ti-shopping-cart"></i></span>
                    <span class="cart-loading animated infinite rotateOut"><i class="ion-load-a"></i></span>
                    <span class="cart-added"><i class="ion-android-done"></i></span>
                    <span class="cart-unavailable"><i class="ion-android-alert"></i></span>
                </span>
                                                        </a>

                                                        <a href="javascript:void(0);" onclick="quiqview('earbuds')" class="quick-view" data-toggle="tooltip" data-placement="top" title="Quickview">
                                                            <i class="ti-eye"></i>
                                                        </a>

                                                        <a class="wishlist" href="/account/login" title="Wishlist" data-toggle="tooltip" data-placement="top" title="Wishlist">
                                                            <i class="ti-heart"></i>
                                                        </a>

                                                    </div>

                                                </div>
                                                <div class="product-content">
                                                    <div class="product-ratting">
                                                        <span class="shopify-product-reviews-badge" data-id="5822867341469"></span>
                                                    </div>
                                                    <h6>
                                                        <a href="/products/earbuds" title="Earbuds">Earbuds</a>
                                                    </h6>
                                                    <div class="price-box">
                                                        <span class="new-price"><span class=money>Rs. 120.00</span></span>

                                                        <span class="old-price"><span class=money>Rs. 130.00</span></span>

                                                    </div>
                                                    <p class="product-description">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been t...
                                                    </p>

                                                    <div class="product-action">

                                                        <a href="javascript:void(0);" onclick="Shopify.addItem(37031996981405, 1); return false;" class="add-to-cart ajax-spin-cart" data-toggle="tooltip" data-placement="top" title="Add to cart">
                <span>
                    <span class="cart-title"><i class="ti-shopping-cart"></i></span>
                    <span class="cart-loading animated infinite rotateOut"><i class="ion-load-a"></i></span>
                    <span class="cart-added"><i class="ion-android-done"></i></span>
                    <span class="cart-unavailable"><i class="ion-android-alert"></i></span>
                </span>
                                                        </a>

                                                        <a href="javascript:void(0);" onclick="quiqview('earbuds')" class="quick-view" data-toggle="tooltip" data-placement="top" title="Quickview">
                                                            <i class="ti-eye"></i>
                                                        </a>

                                                        <a class="wishlist" href="/account/login" title="Wishlist" data-toggle="tooltip" data-placement="top" title="Wishlist">
                                                            <i class="ti-heart"></i>
                                                        </a>

                                                    </div>

                                                </div>
                                            </div>
                                            <style>
                                                a.add-to-cart.disabled{
                                                    color: #eaeaea;
                                                    background-color: #ababab;
                                                    opacity: .65;
                                                    pointer-events: none;
                                                }
                                            </style>
                                        </div>

                                        <div class="swiper-slide">
                                            <div class="single-product-wrap ">
                                                <div class="product-image ">
                                                    <a class="pro-img" href="/products/juice-machine">
                                                        <img class="img-fluid img1" src="//cdn.shopify.com/s/files/1/0509/6331/6893/products/pro64_300X350_crop_center.jpg?v=1606987366" alt="Juice machine">
                                                        <img class="img-fluid img2" src="//cdn.shopify.com/s/files/1/0509/6331/6893/products/pro67_300X350_crop_center.jpg?v=1606987366" alt="Juice machine" />
                                                    </a>
                                                    <div class="product-label">
















                                                        <span class="new-title">New</span>





                                                        <span class="percent-count">-3%</span>



                                                    </div>

                                                    <div class="product-action">

                                                        <a href="javascript:void(0);" onclick="Shopify.addItem(37031999439005, 1); return false;" class="add-to-cart ajax-spin-cart" data-toggle="tooltip" data-placement="top" title="Add to cart">
                <span>
                    <span class="cart-title"><i class="ti-shopping-cart"></i></span>
                    <span class="cart-loading animated infinite rotateOut"><i class="ion-load-a"></i></span>
                    <span class="cart-added"><i class="ion-android-done"></i></span>
                    <span class="cart-unavailable"><i class="ion-android-alert"></i></span>
                </span>
                                                        </a>

                                                        <a href="javascript:void(0);" onclick="quiqview('juice-machine')" class="quick-view" data-toggle="tooltip" data-placement="top" title="Quickview">
                                                            <i class="ti-eye"></i>
                                                        </a>

                                                        <a class="wishlist" href="/account/login" title="Wishlist" data-toggle="tooltip" data-placement="top" title="Wishlist">
                                                            <i class="ti-heart"></i>
                                                        </a>

                                                    </div>

                                                </div>
                                                <div class="product-content">
                                                    <div class="product-ratting">
                                                        <span class="shopify-product-reviews-badge" data-id="5822867865757"></span>
                                                    </div>
                                                    <h6>
                                                        <a href="/products/juice-machine" title="Juice machine">Juice machine</a>
                                                    </h6>
                                                    <div class="price-box">
                                                        <span class="new-price"><span class=money>Rs. 150.00</span></span>

                                                        <span class="old-price"><span class=money>Rs. 155.00</span></span>

                                                    </div>
                                                    <p class="product-description">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been t...
                                                    </p>

                                                    <div class="product-action">

                                                        <a href="javascript:void(0);" onclick="Shopify.addItem(37031999439005, 1); return false;" class="add-to-cart ajax-spin-cart" data-toggle="tooltip" data-placement="top" title="Add to cart">
                <span>
                    <span class="cart-title"><i class="ti-shopping-cart"></i></span>
                    <span class="cart-loading animated infinite rotateOut"><i class="ion-load-a"></i></span>
                    <span class="cart-added"><i class="ion-android-done"></i></span>
                    <span class="cart-unavailable"><i class="ion-android-alert"></i></span>
                </span>
                                                        </a>

                                                        <a href="javascript:void(0);" onclick="quiqview('juice-machine')" class="quick-view" data-toggle="tooltip" data-placement="top" title="Quickview">
                                                            <i class="ti-eye"></i>
                                                        </a>

                                                        <a class="wishlist" href="/account/login" title="Wishlist" data-toggle="tooltip" data-placement="top" title="Wishlist">
                                                            <i class="ti-heart"></i>
                                                        </a>

                                                    </div>

                                                </div>
                                            </div>
                                            <style>
                                                a.add-to-cart.disabled{
                                                    color: #eaeaea;
                                                    background-color: #ababab;
                                                    opacity: .65;
                                                    pointer-events: none;
                                                }
                                            </style>
                                        </div>

                                        <div class="swiper-slide">
                                            <div class="single-product-wrap ">
                                                <div class="product-image ">
                                                    <a class="pro-img" href="/products/headphone">
                                                        <img class="img-fluid img1" src="//cdn.shopify.com/s/files/1/0509/6331/6893/products/pro6_9e76ac99-ba1d-43fe-a895-2fa8d1a90b81_300X350_crop_center.jpg?v=1606987093" alt="Headphone">
                                                        <img class="img-fluid img2" src="//cdn.shopify.com/s/files/1/0509/6331/6893/products/pro7_767bbe8e-0b76-4faa-944f-21f5efc9600b_300X350_crop_center.jpg?v=1606987093" alt="Headphone" />
                                                    </a>
                                                    <div class="product-label">
















                                                        <span class="new-title">New</span>





                                                        <span class="percent-count">-7%</span>



                                                    </div>

                                                    <div class="product-action">

                                                        <a href="javascript:void(0);" onclick="Shopify.addItem(37032000880797, 1); return false;" class="add-to-cart ajax-spin-cart" data-toggle="tooltip" data-placement="top" title="Add to cart">
                <span>
                    <span class="cart-title"><i class="ti-shopping-cart"></i></span>
                    <span class="cart-loading animated infinite rotateOut"><i class="ion-load-a"></i></span>
                    <span class="cart-added"><i class="ion-android-done"></i></span>
                    <span class="cart-unavailable"><i class="ion-android-alert"></i></span>
                </span>
                                                        </a>

                                                        <a href="javascript:void(0);" onclick="quiqview('headphone')" class="quick-view" data-toggle="tooltip" data-placement="top" title="Quickview">
                                                            <i class="ti-eye"></i>
                                                        </a>

                                                        <a class="wishlist" href="/account/login" title="Wishlist" data-toggle="tooltip" data-placement="top" title="Wishlist">
                                                            <i class="ti-heart"></i>
                                                        </a>

                                                    </div>

                                                </div>
                                                <div class="product-content">
                                                    <div class="product-ratting">
                                                        <span class="shopify-product-reviews-badge" data-id="5822868095133"></span>
                                                    </div>
                                                    <h6>
                                                        <a href="/products/headphone" title="Headphone">Headphone</a>
                                                    </h6>
                                                    <div class="price-box">
                                                        <span class="new-price"><span class=money>Rs. 232.00</span></span>

                                                        <span class="old-price"><span class=money>Rs. 250.00</span></span>

                                                    </div>
                                                    <p class="product-description">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been t...
                                                    </p>

                                                    <div class="product-action">

                                                        <a href="javascript:void(0);" onclick="Shopify.addItem(37032000880797, 1); return false;" class="add-to-cart ajax-spin-cart" data-toggle="tooltip" data-placement="top" title="Add to cart">
                <span>
                    <span class="cart-title"><i class="ti-shopping-cart"></i></span>
                    <span class="cart-loading animated infinite rotateOut"><i class="ion-load-a"></i></span>
                    <span class="cart-added"><i class="ion-android-done"></i></span>
                    <span class="cart-unavailable"><i class="ion-android-alert"></i></span>
                </span>
                                                        </a>

                                                        <a href="javascript:void(0);" onclick="quiqview('headphone')" class="quick-view" data-toggle="tooltip" data-placement="top" title="Quickview">
                                                            <i class="ti-eye"></i>
                                                        </a>

                                                        <a class="wishlist" href="/account/login" title="Wishlist" data-toggle="tooltip" data-placement="top" title="Wishlist">
                                                            <i class="ti-heart"></i>
                                                        </a>

                                                    </div>

                                                </div>
                                            </div>
                                            <style>
                                                a.add-to-cart.disabled{
                                                    color: #eaeaea;
                                                    background-color: #ababab;
                                                    opacity: .65;
                                                    pointer-events: none;
                                                }
                                            </style>
                                        </div>

                                        <div class="swiper-slide">
                                            <div class="single-product-wrap ">
                                                <div class="product-image ">
                                                    <a class="pro-img" href="/products/mouse">
                                                        <img class="img-fluid img1" src="//cdn.shopify.com/s/files/1/0509/6331/6893/products/pro31_eacb8fbe-be63-4404-8e9f-5297769290b7_300X350_crop_center.jpg?v=1606987707" alt="Mouse">
                                                        <img class="img-fluid img2" src="//cdn.shopify.com/s/files/1/0509/6331/6893/products/pro33_300X350_crop_center.jpg?v=1606987711" alt="Mouse" />
                                                    </a>
                                                    <div class="product-label">
















                                                        <span class="new-title">New</span>





                                                        <span class="percent-count">-17%</span>



                                                    </div>

                                                    <div class="product-action">

                                                        <a href="javascript:void(0);" onclick="Shopify.addItem(37032005435549, 1); return false;" class="add-to-cart ajax-spin-cart" data-toggle="tooltip" data-placement="top" title="Add to cart">
                <span>
                    <span class="cart-title"><i class="ti-shopping-cart"></i></span>
                    <span class="cart-loading animated infinite rotateOut"><i class="ion-load-a"></i></span>
                    <span class="cart-added"><i class="ion-android-done"></i></span>
                    <span class="cart-unavailable"><i class="ion-android-alert"></i></span>
                </span>
                                                        </a>

                                                        <a href="javascript:void(0);" onclick="quiqview('mouse')" class="quick-view" data-toggle="tooltip" data-placement="top" title="Quickview">
                                                            <i class="ti-eye"></i>
                                                        </a>

                                                        <a class="wishlist" href="/account/login" title="Wishlist" data-toggle="tooltip" data-placement="top" title="Wishlist">
                                                            <i class="ti-heart"></i>
                                                        </a>

                                                    </div>

                                                </div>
                                                <div class="product-content">
                                                    <div class="product-ratting">
                                                        <span class="shopify-product-reviews-badge" data-id="5822869012637"></span>
                                                    </div>
                                                    <h6>
                                                        <a href="/products/mouse" title="Mouse">Mouse</a>
                                                    </h6>
                                                    <div class="price-box">
                                                        <span class="new-price"><span class=money>Rs. 25.00</span></span>

                                                        <span class="old-price"><span class=money>Rs. 30.00</span></span>

                                                    </div>
                                                    <p class="product-description">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been t...
                                                    </p>

                                                    <div class="product-action">

                                                        <a href="javascript:void(0);" onclick="Shopify.addItem(37032005435549, 1); return false;" class="add-to-cart ajax-spin-cart" data-toggle="tooltip" data-placement="top" title="Add to cart">
                <span>
                    <span class="cart-title"><i class="ti-shopping-cart"></i></span>
                    <span class="cart-loading animated infinite rotateOut"><i class="ion-load-a"></i></span>
                    <span class="cart-added"><i class="ion-android-done"></i></span>
                    <span class="cart-unavailable"><i class="ion-android-alert"></i></span>
                </span>
                                                        </a>

                                                        <a href="javascript:void(0);" onclick="quiqview('mouse')" class="quick-view" data-toggle="tooltip" data-placement="top" title="Quickview">
                                                            <i class="ti-eye"></i>
                                                        </a>

                                                        <a class="wishlist" href="/account/login" title="Wishlist" data-toggle="tooltip" data-placement="top" title="Wishlist">
                                                            <i class="ti-heart"></i>
                                                        </a>

                                                    </div>

                                                </div>
                                            </div>
                                            <style>
                                                a.add-to-cart.disabled{
                                                    color: #eaeaea;
                                                    background-color: #ababab;
                                                    opacity: .65;
                                                    pointer-events: none;
                                                }
                                            </style>
                                        </div>

                                        <div class="swiper-slide">
                                            <div class="single-product-wrap ">
                                                <div class="product-image ">
                                                    <a class="pro-img" href="/products/camera">
                                                        <img class="img-fluid img1" src="//cdn.shopify.com/s/files/1/0509/6331/6893/products/pro39_300X350_crop_center.jpg?v=1606986847" alt="Camera">
                                                        <img class="img-fluid img2" src="//cdn.shopify.com/s/files/1/0509/6331/6893/products/pro38_300X350_crop_center.jpg?v=1606986847" alt="Camera" />
                                                    </a>
                                                    <div class="product-label">














                                                        <span class="sale-title">Sale</span>







                                                        <span class="percent-count">-3%</span>



                                                    </div>

                                                    <div class="product-action">

                                                        <a href="javascript:void(0);" onclick="Shopify.addItem(37032002584733, 1); return false;" class="add-to-cart ajax-spin-cart" data-toggle="tooltip" data-placement="top" title="Add to cart">
                <span>
                    <span class="cart-title"><i class="ti-shopping-cart"></i></span>
                    <span class="cart-loading animated infinite rotateOut"><i class="ion-load-a"></i></span>
                    <span class="cart-added"><i class="ion-android-done"></i></span>
                    <span class="cart-unavailable"><i class="ion-android-alert"></i></span>
                </span>
                                                        </a>

                                                        <a href="javascript:void(0);" onclick="quiqview('camera')" class="quick-view" data-toggle="tooltip" data-placement="top" title="Quickview">
                                                            <i class="ti-eye"></i>
                                                        </a>

                                                        <a class="wishlist" href="/account/login" title="Wishlist" data-toggle="tooltip" data-placement="top" title="Wishlist">
                                                            <i class="ti-heart"></i>
                                                        </a>

                                                    </div>

                                                </div>
                                                <div class="product-content">
                                                    <div class="product-ratting">
                                                        <span class="shopify-product-reviews-badge" data-id="5822868455581"></span>
                                                    </div>
                                                    <h6>
                                                        <a href="/products/camera" title="Camera">Camera</a>
                                                    </h6>
                                                    <div class="price-box">
                                                        <span class="new-price"><span class=money>Rs. 150.00</span></span>

                                                        <span class="old-price"><span class=money>Rs. 155.00</span></span>

                                                    </div>
                                                    <p class="product-description">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been t...
                                                    </p>

                                                    <div class="product-action">

                                                        <a href="javascript:void(0);" onclick="Shopify.addItem(37032002584733, 1); return false;" class="add-to-cart ajax-spin-cart" data-toggle="tooltip" data-placement="top" title="Add to cart">
                <span>
                    <span class="cart-title"><i class="ti-shopping-cart"></i></span>
                    <span class="cart-loading animated infinite rotateOut"><i class="ion-load-a"></i></span>
                    <span class="cart-added"><i class="ion-android-done"></i></span>
                    <span class="cart-unavailable"><i class="ion-android-alert"></i></span>
                </span>
                                                        </a>

                                                        <a href="javascript:void(0);" onclick="quiqview('camera')" class="quick-view" data-toggle="tooltip" data-placement="top" title="Quickview">
                                                            <i class="ti-eye"></i>
                                                        </a>

                                                        <a class="wishlist" href="/account/login" title="Wishlist" data-toggle="tooltip" data-placement="top" title="Wishlist">
                                                            <i class="ti-heart"></i>
                                                        </a>

                                                    </div>

                                                </div>
                                            </div>
                                            <style>
                                                a.add-to-cart.disabled{
                                                    color: #eaeaea;
                                                    background-color: #ababab;
                                                    opacity: .65;
                                                    pointer-events: none;
                                                }
                                            </style>
                                        </div>

                                        <div class="swiper-slide">
                                            <div class="single-product-wrap ">
                                                <div class="product-image ">
                                                    <a class="pro-img" href="/products/pen-drive">
                                                        <img class="img-fluid img1" src="//cdn.shopify.com/s/files/1/0509/6331/6893/products/pro48_300X350_crop_center.jpg?v=1606987770" alt="Pen drive">
                                                        <img class="img-fluid img2" src="//cdn.shopify.com/s/files/1/0509/6331/6893/products/pro49_300X350_crop_center.jpg?v=1606987770" alt="Pen drive" />
                                                    </a>
                                                    <div class="product-label">














                                                        <span class="sale-title">Sale</span>







                                                        <span class="percent-count">-17%</span>



                                                    </div>

                                                    <div class="product-action">

                                                        <a href="javascript:void(0);" onclick="Shopify.addItem(37031999930525, 1); return false;" class="add-to-cart ajax-spin-cart" data-toggle="tooltip" data-placement="top" title="Add to cart">
                <span>
                    <span class="cart-title"><i class="ti-shopping-cart"></i></span>
                    <span class="cart-loading animated infinite rotateOut"><i class="ion-load-a"></i></span>
                    <span class="cart-added"><i class="ion-android-done"></i></span>
                    <span class="cart-unavailable"><i class="ion-android-alert"></i></span>
                </span>
                                                        </a>

                                                        <a href="javascript:void(0);" onclick="quiqview('pen-drive')" class="quick-view" data-toggle="tooltip" data-placement="top" title="Quickview">
                                                            <i class="ti-eye"></i>
                                                        </a>

                                                        <a class="wishlist" href="/account/login" title="Wishlist" data-toggle="tooltip" data-placement="top" title="Wishlist">
                                                            <i class="ti-heart"></i>
                                                        </a>

                                                    </div>

                                                </div>
                                                <div class="product-content">
                                                    <div class="product-ratting">
                                                        <span class="shopify-product-reviews-badge" data-id="5822867964061"></span>
                                                    </div>
                                                    <h6>
                                                        <a href="/products/pen-drive" title="Pen drive">Pen drive</a>
                                                    </h6>
                                                    <div class="price-box">
                                                        <span class="new-price"><span class=money>Rs. 100.00</span></span>

                                                        <span class="old-price"><span class=money>Rs. 120.00</span></span>

                                                    </div>
                                                    <p class="product-description">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been t...
                                                    </p>

                                                    <div class="product-action">

                                                        <a href="javascript:void(0);" onclick="Shopify.addItem(37031999930525, 1); return false;" class="add-to-cart ajax-spin-cart" data-toggle="tooltip" data-placement="top" title="Add to cart">
                <span>
                    <span class="cart-title"><i class="ti-shopping-cart"></i></span>
                    <span class="cart-loading animated infinite rotateOut"><i class="ion-load-a"></i></span>
                    <span class="cart-added"><i class="ion-android-done"></i></span>
                    <span class="cart-unavailable"><i class="ion-android-alert"></i></span>
                </span>
                                                        </a>

                                                        <a href="javascript:void(0);" onclick="quiqview('pen-drive')" class="quick-view" data-toggle="tooltip" data-placement="top" title="Quickview">
                                                            <i class="ti-eye"></i>
                                                        </a>

                                                        <a class="wishlist" href="/account/login" title="Wishlist" data-toggle="tooltip" data-placement="top" title="Wishlist">
                                                            <i class="ti-heart"></i>
                                                        </a>

                                                    </div>

                                                </div>
                                            </div>
                                            <style>
                                                a.add-to-cart.disabled{
                                                    color: #eaeaea;
                                                    background-color: #ababab;
                                                    opacity: .65;
                                                    pointer-events: none;
                                                }
                                            </style>
                                        </div>

                                    </div>
                                    <div class="swiper-buttons">
                                        <button class="swiper-prev"><i class="fa fa-angle-left"></i></button>
                                        <button class="swiper-next"><i class="fa fa-angle-right"></i></button>
                                    </div>
                                </div>
                            </div>



                            <div class="tab-pane fade" id="tab-1574764873111" role="tabpanel">
                                <div class="swiper-container" id="feture_pro_tab">
                                    <div class="swiper-wrapper">

                                        <div class="swiper-slide">
                                            <div class="single-product-wrap stock-out">
                                                <div class="product-image stock-out">
                                                    <a class="pro-img" href="/products/refrigerator">
                                                        <img class="img-fluid img1" src="//cdn.shopify.com/s/files/1/0509/6331/6893/products/pro58_300X350_crop_center.jpg?v=1606987893" alt="Refrigerator">
                                                        <img class="img-fluid img2" src="//cdn.shopify.com/s/files/1/0509/6331/6893/products/pro59_300X350_crop_center.jpg?v=1606987893" alt="Refrigerator" />
                                                    </a>
                                                    <div class="product-label">










                                                        <span class="soldout-title">Soldout</span>
                                                    </div>

                                                </div>
                                                <div class="product-content">
                                                    <div class="product-ratting">
                                                        <span class="shopify-product-reviews-badge" data-id="5822868979869"></span>
                                                    </div>
                                                    <h6>
                                                        <a href="/products/refrigerator" title="Refrigerator">Refrigerator</a>
                                                    </h6>
                                                    <div class="price-box">
                                                        <span class="new-price"><span class=money>Rs. 120.00</span></span>

                                                        <span class="old-price"><span class=money>Rs. 130.00</span></span>

                                                    </div>
                                                    <p class="product-description">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been t...
                                                    </p>

                                                </div>
                                            </div>
                                            <style>
                                                a.add-to-cart.disabled{
                                                    color: #eaeaea;
                                                    background-color: #ababab;
                                                    opacity: .65;
                                                    pointer-events: none;
                                                }
                                            </style>
                                        </div>

                                        <div class="swiper-slide">
                                            <div class="single-product-wrap ">
                                                <div class="product-image ">
                                                    <a class="pro-img" href="/products/jbl-speaker">
                                                        <img class="img-fluid img1" src="//cdn.shopify.com/s/files/1/0509/6331/6893/products/pro37_9c497408-cd03-4ba8-b516-981c770bbaae_300X350_crop_center.jpg?v=1606987296" alt="JBL Speaker">
                                                        <img class="img-fluid img2" src="//cdn.shopify.com/s/files/1/0509/6331/6893/products/pro36_20b3e4a6-54ec-42a8-a760-3f40b78c2bc9_300X350_crop_center.jpg?v=1606987296" alt="JBL Speaker" />
                                                    </a>
                                                    <div class="product-label">
















                                                        <span class="new-title">New</span>





                                                    </div>

                                                    <div class="product-action">

                                                        <a href="javascript:void(0);" onclick="Shopify.addItem(37032003666077, 1); return false;" class="add-to-cart ajax-spin-cart" data-toggle="tooltip" data-placement="top" title="Add to cart">
                <span>
                    <span class="cart-title"><i class="ti-shopping-cart"></i></span>
                    <span class="cart-loading animated infinite rotateOut"><i class="ion-load-a"></i></span>
                    <span class="cart-added"><i class="ion-android-done"></i></span>
                    <span class="cart-unavailable"><i class="ion-android-alert"></i></span>
                </span>
                                                        </a>

                                                        <a href="javascript:void(0);" onclick="quiqview('jbl-speaker')" class="quick-view" data-toggle="tooltip" data-placement="top" title="Quickview">
                                                            <i class="ti-eye"></i>
                                                        </a>

                                                        <a class="wishlist" href="/account/login" title="Wishlist" data-toggle="tooltip" data-placement="top" title="Wishlist">
                                                            <i class="ti-heart"></i>
                                                        </a>

                                                    </div>

                                                </div>
                                                <div class="product-content">
                                                    <div class="product-ratting">
                                                        <span class="shopify-product-reviews-badge" data-id="5822868717725"></span>
                                                    </div>
                                                    <h6>
                                                        <a href="/products/jbl-speaker" title="JBL Speaker">JBL Speaker</a>
                                                    </h6>
                                                    <div class="price-box">
                                                        <span class="new-price"><span class=money>Rs. 60.00</span></span>

                                                    </div>
                                                    <p class="product-description">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been t...
                                                    </p>

                                                    <div class="product-action">

                                                        <a href="javascript:void(0);" onclick="Shopify.addItem(37032003666077, 1); return false;" class="add-to-cart ajax-spin-cart" data-toggle="tooltip" data-placement="top" title="Add to cart">
                <span>
                    <span class="cart-title"><i class="ti-shopping-cart"></i></span>
                    <span class="cart-loading animated infinite rotateOut"><i class="ion-load-a"></i></span>
                    <span class="cart-added"><i class="ion-android-done"></i></span>
                    <span class="cart-unavailable"><i class="ion-android-alert"></i></span>
                </span>
                                                        </a>

                                                        <a href="javascript:void(0);" onclick="quiqview('jbl-speaker')" class="quick-view" data-toggle="tooltip" data-placement="top" title="Quickview">
                                                            <i class="ti-eye"></i>
                                                        </a>

                                                        <a class="wishlist" href="/account/login" title="Wishlist" data-toggle="tooltip" data-placement="top" title="Wishlist">
                                                            <i class="ti-heart"></i>
                                                        </a>

                                                    </div>

                                                </div>
                                            </div>
                                            <style>
                                                a.add-to-cart.disabled{
                                                    color: #eaeaea;
                                                    background-color: #ababab;
                                                    opacity: .65;
                                                    pointer-events: none;
                                                }
                                            </style>
                                        </div>

                                        <div class="swiper-slide">
                                            <div class="single-product-wrap ">
                                                <div class="product-image ">
                                                    <a class="pro-img" href="/products/laptop">
                                                        <img class="img-fluid img1" src="//cdn.shopify.com/s/files/1/0509/6331/6893/products/pro11_eca584c8-e1e1-404d-996d-af35cc9909c2_300X350_crop_center.jpg?v=1606987596" alt="Laptop">
                                                        <img class="img-fluid img2" src="//cdn.shopify.com/s/files/1/0509/6331/6893/products/pro12_300X350_crop_center.jpg?v=1606987596" alt="Laptop" />
                                                    </a>
                                                    <div class="product-label">
















                                                        <span class="new-title">New</span>





                                                        <span class="percent-count">-5%</span>



                                                    </div>

                                                    <div class="product-action">

                                                        <a href="javascript:void(0);" onclick="Shopify.addItem(37031998619805, 1); return false;" class="add-to-cart ajax-spin-cart" data-toggle="tooltip" data-placement="top" title="Add to cart">
                <span>
                    <span class="cart-title"><i class="ti-shopping-cart"></i></span>
                    <span class="cart-loading animated infinite rotateOut"><i class="ion-load-a"></i></span>
                    <span class="cart-added"><i class="ion-android-done"></i></span>
                    <span class="cart-unavailable"><i class="ion-android-alert"></i></span>
                </span>
                                                        </a>

                                                        <a href="javascript:void(0);" onclick="quiqview('laptop')" class="quick-view" data-toggle="tooltip" data-placement="top" title="Quickview">
                                                            <i class="ti-eye"></i>
                                                        </a>

                                                        <a class="wishlist" href="/account/login" title="Wishlist" data-toggle="tooltip" data-placement="top" title="Wishlist">
                                                            <i class="ti-heart"></i>
                                                        </a>

                                                    </div>

                                                </div>
                                                <div class="product-content">
                                                    <div class="product-ratting">
                                                        <span class="shopify-product-reviews-badge" data-id="5822867701917"></span>
                                                    </div>
                                                    <h6>
                                                        <a href="/products/laptop" title="Laptop">Laptop</a>
                                                    </h6>
                                                    <div class="price-box">
                                                        <span class="new-price"><span class=money>Rs. 200.00</span></span>

                                                        <span class="old-price"><span class=money>Rs. 210.00</span></span>

                                                    </div>
                                                    <p class="product-description">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been t...
                                                    </p>

                                                    <div class="product-action">

                                                        <a href="javascript:void(0);" onclick="Shopify.addItem(37031998619805, 1); return false;" class="add-to-cart ajax-spin-cart" data-toggle="tooltip" data-placement="top" title="Add to cart">
                <span>
                    <span class="cart-title"><i class="ti-shopping-cart"></i></span>
                    <span class="cart-loading animated infinite rotateOut"><i class="ion-load-a"></i></span>
                    <span class="cart-added"><i class="ion-android-done"></i></span>
                    <span class="cart-unavailable"><i class="ion-android-alert"></i></span>
                </span>
                                                        </a>

                                                        <a href="javascript:void(0);" onclick="quiqview('laptop')" class="quick-view" data-toggle="tooltip" data-placement="top" title="Quickview">
                                                            <i class="ti-eye"></i>
                                                        </a>

                                                        <a class="wishlist" href="/account/login" title="Wishlist" data-toggle="tooltip" data-placement="top" title="Wishlist">
                                                            <i class="ti-heart"></i>
                                                        </a>

                                                    </div>

                                                </div>
                                            </div>
                                            <style>
                                                a.add-to-cart.disabled{
                                                    color: #eaeaea;
                                                    background-color: #ababab;
                                                    opacity: .65;
                                                    pointer-events: none;
                                                }
                                            </style>
                                        </div>

                                        <div class="swiper-slide">
                                            <div class="single-product-wrap ">
                                                <div class="product-image ">
                                                    <a class="pro-img" href="/products/boat">
                                                        <img class="img-fluid img1" src="//cdn.shopify.com/s/files/1/0509/6331/6893/products/pro3_66116319-ea9e-48c4-aee5-c0de6bf84624_300X350_crop_center.jpg?v=1606986643" alt="Boat">
                                                        <img class="img-fluid img2" src="//cdn.shopify.com/s/files/1/0509/6331/6893/products/pro2_2c303381-fe9a-46fb-81cf-d0e8963ae517_300X350_crop_center.jpg?v=1606986647" alt="Boat" />
                                                    </a>
                                                    <div class="product-label">














                                                        <span class="sale-title">Sale</span>







                                                        <span class="percent-count">-6%</span>



                                                    </div>

                                                    <div class="product-action">

                                                        <a href="javascript:void(0);" onclick="Shopify.addItem(37031997571229, 1); return false;" class="add-to-cart ajax-spin-cart" data-toggle="tooltip" data-placement="top" title="Add to cart">
                <span>
                    <span class="cart-title"><i class="ti-shopping-cart"></i></span>
                    <span class="cart-loading animated infinite rotateOut"><i class="ion-load-a"></i></span>
                    <span class="cart-added"><i class="ion-android-done"></i></span>
                    <span class="cart-unavailable"><i class="ion-android-alert"></i></span>
                </span>
                                                        </a>

                                                        <a href="javascript:void(0);" onclick="quiqview('boat')" class="quick-view" data-toggle="tooltip" data-placement="top" title="Quickview">
                                                            <i class="ti-eye"></i>
                                                        </a>

                                                        <a class="wishlist" href="/account/login" title="Wishlist" data-toggle="tooltip" data-placement="top" title="Wishlist">
                                                            <i class="ti-heart"></i>
                                                        </a>

                                                    </div>

                                                </div>
                                                <div class="product-content">
                                                    <div class="product-ratting">
                                                        <span class="shopify-product-reviews-badge" data-id="5822867472541"></span>
                                                    </div>
                                                    <h6>
                                                        <a href="/products/boat" title="Boat">Boat</a>
                                                    </h6>
                                                    <div class="price-box">
                                                        <span class="new-price"><span class=money>Rs. 150.00</span></span>

                                                        <span class="old-price"><span class=money>Rs. 160.00</span></span>

                                                    </div>
                                                    <p class="product-description">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been t...
                                                    </p>

                                                    <div class="product-action">

                                                        <a href="javascript:void(0);" onclick="Shopify.addItem(37031997571229, 1); return false;" class="add-to-cart ajax-spin-cart" data-toggle="tooltip" data-placement="top" title="Add to cart">
                <span>
                    <span class="cart-title"><i class="ti-shopping-cart"></i></span>
                    <span class="cart-loading animated infinite rotateOut"><i class="ion-load-a"></i></span>
                    <span class="cart-added"><i class="ion-android-done"></i></span>
                    <span class="cart-unavailable"><i class="ion-android-alert"></i></span>
                </span>
                                                        </a>

                                                        <a href="javascript:void(0);" onclick="quiqview('boat')" class="quick-view" data-toggle="tooltip" data-placement="top" title="Quickview">
                                                            <i class="ti-eye"></i>
                                                        </a>

                                                        <a class="wishlist" href="/account/login" title="Wishlist" data-toggle="tooltip" data-placement="top" title="Wishlist">
                                                            <i class="ti-heart"></i>
                                                        </a>

                                                    </div>

                                                </div>
                                            </div>
                                            <style>
                                                a.add-to-cart.disabled{
                                                    color: #eaeaea;
                                                    background-color: #ababab;
                                                    opacity: .65;
                                                    pointer-events: none;
                                                }
                                            </style>
                                        </div>

                                        <div class="swiper-slide">
                                            <div class="single-product-wrap ">
                                                <div class="product-image ">
                                                    <a class="pro-img" href="/products/i-phone">
                                                        <img class="img-fluid img1" src="//cdn.shopify.com/s/files/1/0509/6331/6893/products/pro15_300X350_crop_center.jpg?v=1606987157" alt="I Phone">
                                                        <img class="img-fluid img2" src="//cdn.shopify.com/s/files/1/0509/6331/6893/products/pro18_300X350_crop_center.jpg?v=1606987162" alt="I Phone" />
                                                    </a>
                                                    <div class="product-label">
















                                                        <span class="new-title">New</span>





                                                        <span class="percent-count">-2%</span>



                                                    </div>

                                                    <div class="product-action">

                                                        <a href="javascript:void(0);" onclick="Shopify.addItem(37032002125981, 1); return false;" class="add-to-cart ajax-spin-cart" data-toggle="tooltip" data-placement="top" title="Add to cart">
                <span>
                    <span class="cart-title"><i class="ti-shopping-cart"></i></span>
                    <span class="cart-loading animated infinite rotateOut"><i class="ion-load-a"></i></span>
                    <span class="cart-added"><i class="ion-android-done"></i></span>
                    <span class="cart-unavailable"><i class="ion-android-alert"></i></span>
                </span>
                                                        </a>

                                                        <a href="javascript:void(0);" onclick="quiqview('i-phone')" class="quick-view" data-toggle="tooltip" data-placement="top" title="Quickview">
                                                            <i class="ti-eye"></i>
                                                        </a>

                                                        <a class="wishlist" href="/account/login" title="Wishlist" data-toggle="tooltip" data-placement="top" title="Wishlist">
                                                            <i class="ti-heart"></i>
                                                        </a>

                                                    </div>

                                                </div>
                                                <div class="product-content">
                                                    <div class="product-ratting">
                                                        <span class="shopify-product-reviews-badge" data-id="5822868193437"></span>
                                                    </div>
                                                    <h6>
                                                        <a href="/products/i-phone" title="I Phone">I Phone</a>
                                                    </h6>
                                                    <div class="price-box">
                                                        <span class="new-price"><span class=money>Rs. 225.00</span></span>

                                                        <span class="old-price"><span class=money>Rs. 230.00</span></span>

                                                    </div>
                                                    <p class="product-description">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been t...
                                                    </p>

                                                    <div class="product-action">

                                                        <a href="javascript:void(0);" onclick="Shopify.addItem(37032002125981, 1); return false;" class="add-to-cart ajax-spin-cart" data-toggle="tooltip" data-placement="top" title="Add to cart">
                <span>
                    <span class="cart-title"><i class="ti-shopping-cart"></i></span>
                    <span class="cart-loading animated infinite rotateOut"><i class="ion-load-a"></i></span>
                    <span class="cart-added"><i class="ion-android-done"></i></span>
                    <span class="cart-unavailable"><i class="ion-android-alert"></i></span>
                </span>
                                                        </a>

                                                        <a href="javascript:void(0);" onclick="quiqview('i-phone')" class="quick-view" data-toggle="tooltip" data-placement="top" title="Quickview">
                                                            <i class="ti-eye"></i>
                                                        </a>

                                                        <a class="wishlist" href="/account/login" title="Wishlist" data-toggle="tooltip" data-placement="top" title="Wishlist">
                                                            <i class="ti-heart"></i>
                                                        </a>

                                                    </div>

                                                </div>
                                            </div>
                                            <style>
                                                a.add-to-cart.disabled{
                                                    color: #eaeaea;
                                                    background-color: #ababab;
                                                    opacity: .65;
                                                    pointer-events: none;
                                                }
                                            </style>
                                        </div>

                                        <div class="swiper-slide">
                                            <div class="single-product-wrap ">
                                                <div class="product-image ">
                                                    <a class="pro-img" href="/products/watch">
                                                        <img class="img-fluid img1" src="//cdn.shopify.com/s/files/1/0509/6331/6893/products/pro20_300X350_crop_center.jpg?v=1606987984" alt="Watch">
                                                        <img class="img-fluid img2" src="//cdn.shopify.com/s/files/1/0509/6331/6893/products/pro21_300X350_crop_center.jpg?v=1606987984" alt="Watch" />
                                                    </a>
                                                    <div class="product-label">
















                                                        <span class="new-title">New</span>





                                                        <span class="percent-count">-22%</span>



                                                    </div>

                                                    <div class="product-action">

                                                        <a href="javascript:void(0);" onclick="Shopify.addItem(37032004419741, 1); return false;" class="add-to-cart ajax-spin-cart" data-toggle="tooltip" data-placement="top" title="Add to cart">
                <span>
                    <span class="cart-title"><i class="ti-shopping-cart"></i></span>
                    <span class="cart-loading animated infinite rotateOut"><i class="ion-load-a"></i></span>
                    <span class="cart-added"><i class="ion-android-done"></i></span>
                    <span class="cart-unavailable"><i class="ion-android-alert"></i></span>
                </span>
                                                        </a>

                                                        <a href="javascript:void(0);" onclick="quiqview('watch')" class="quick-view" data-toggle="tooltip" data-placement="top" title="Quickview">
                                                            <i class="ti-eye"></i>
                                                        </a>

                                                        <a class="wishlist" href="/account/login" title="Wishlist" data-toggle="tooltip" data-placement="top" title="Wishlist">
                                                            <i class="ti-heart"></i>
                                                        </a>

                                                    </div>

                                                </div>
                                                <div class="product-content">
                                                    <div class="product-ratting">
                                                        <span class="shopify-product-reviews-badge" data-id="5822868848797"></span>
                                                    </div>
                                                    <h6>
                                                        <a href="/products/watch" title="Watch">Watch</a>
                                                    </h6>
                                                    <div class="price-box">
                                                        <span class="new-price"><span class=money>Rs. 110.00</span></span>

                                                        <span class="old-price"><span class=money>Rs. 130.00</span></span>

                                                    </div>
                                                    <p class="product-description">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been t...
                                                    </p>

                                                    <div class="product-action">

                                                        <a href="javascript:void(0);" onclick="Shopify.addItem(37032004419741, 1); return false;" class="add-to-cart ajax-spin-cart" data-toggle="tooltip" data-placement="top" title="Add to cart">
                <span>
                    <span class="cart-title"><i class="ti-shopping-cart"></i></span>
                    <span class="cart-loading animated infinite rotateOut"><i class="ion-load-a"></i></span>
                    <span class="cart-added"><i class="ion-android-done"></i></span>
                    <span class="cart-unavailable"><i class="ion-android-alert"></i></span>
                </span>
                                                        </a>

                                                        <a href="javascript:void(0);" onclick="quiqview('watch')" class="quick-view" data-toggle="tooltip" data-placement="top" title="Quickview">
                                                            <i class="ti-eye"></i>
                                                        </a>

                                                        <a class="wishlist" href="/account/login" title="Wishlist" data-toggle="tooltip" data-placement="top" title="Wishlist">
                                                            <i class="ti-heart"></i>
                                                        </a>

                                                    </div>

                                                </div>
                                            </div>
                                            <style>
                                                a.add-to-cart.disabled{
                                                    color: #eaeaea;
                                                    background-color: #ababab;
                                                    opacity: .65;
                                                    pointer-events: none;
                                                }
                                            </style>
                                        </div>

                                        <div class="swiper-slide">
                                            <div class="single-product-wrap ">
                                                <div class="product-image ">
                                                    <a class="pro-img" href="/products/earbuds">
                                                        <img class="img-fluid img1" src="//cdn.shopify.com/s/files/1/0509/6331/6893/products/pro8_300X350_crop_center.jpg?v=1606987015" alt="Earbuds">
                                                        <img class="img-fluid img2" src="//cdn.shopify.com/s/files/1/0509/6331/6893/products/pro9_300X350_crop_center.jpg?v=1606987015" alt="Earbuds" />
                                                    </a>
                                                    <div class="product-label">
















                                                        <span class="new-title">New</span>





                                                        <span class="percent-count">-8%</span>



                                                    </div>

                                                    <div class="product-action">

                                                        <a href="javascript:void(0);" onclick="Shopify.addItem(37031996981405, 1); return false;" class="add-to-cart ajax-spin-cart" data-toggle="tooltip" data-placement="top" title="Add to cart">
                <span>
                    <span class="cart-title"><i class="ti-shopping-cart"></i></span>
                    <span class="cart-loading animated infinite rotateOut"><i class="ion-load-a"></i></span>
                    <span class="cart-added"><i class="ion-android-done"></i></span>
                    <span class="cart-unavailable"><i class="ion-android-alert"></i></span>
                </span>
                                                        </a>

                                                        <a href="javascript:void(0);" onclick="quiqview('earbuds')" class="quick-view" data-toggle="tooltip" data-placement="top" title="Quickview">
                                                            <i class="ti-eye"></i>
                                                        </a>

                                                        <a class="wishlist" href="/account/login" title="Wishlist" data-toggle="tooltip" data-placement="top" title="Wishlist">
                                                            <i class="ti-heart"></i>
                                                        </a>

                                                    </div>

                                                </div>
                                                <div class="product-content">
                                                    <div class="product-ratting">
                                                        <span class="shopify-product-reviews-badge" data-id="5822867341469"></span>
                                                    </div>
                                                    <h6>
                                                        <a href="/products/earbuds" title="Earbuds">Earbuds</a>
                                                    </h6>
                                                    <div class="price-box">
                                                        <span class="new-price"><span class=money>Rs. 120.00</span></span>

                                                        <span class="old-price"><span class=money>Rs. 130.00</span></span>

                                                    </div>
                                                    <p class="product-description">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been t...
                                                    </p>

                                                    <div class="product-action">

                                                        <a href="javascript:void(0);" onclick="Shopify.addItem(37031996981405, 1); return false;" class="add-to-cart ajax-spin-cart" data-toggle="tooltip" data-placement="top" title="Add to cart">
                <span>
                    <span class="cart-title"><i class="ti-shopping-cart"></i></span>
                    <span class="cart-loading animated infinite rotateOut"><i class="ion-load-a"></i></span>
                    <span class="cart-added"><i class="ion-android-done"></i></span>
                    <span class="cart-unavailable"><i class="ion-android-alert"></i></span>
                </span>
                                                        </a>

                                                        <a href="javascript:void(0);" onclick="quiqview('earbuds')" class="quick-view" data-toggle="tooltip" data-placement="top" title="Quickview">
                                                            <i class="ti-eye"></i>
                                                        </a>

                                                        <a class="wishlist" href="/account/login" title="Wishlist" data-toggle="tooltip" data-placement="top" title="Wishlist">
                                                            <i class="ti-heart"></i>
                                                        </a>

                                                    </div>

                                                </div>
                                            </div>
                                            <style>
                                                a.add-to-cart.disabled{
                                                    color: #eaeaea;
                                                    background-color: #ababab;
                                                    opacity: .65;
                                                    pointer-events: none;
                                                }
                                            </style>
                                        </div>

                                        <div class="swiper-slide">
                                            <div class="single-product-wrap ">
                                                <div class="product-image ">
                                                    <a class="pro-img" href="/products/juice-machine">
                                                        <img class="img-fluid img1" src="//cdn.shopify.com/s/files/1/0509/6331/6893/products/pro64_300X350_crop_center.jpg?v=1606987366" alt="Juice machine">
                                                        <img class="img-fluid img2" src="//cdn.shopify.com/s/files/1/0509/6331/6893/products/pro67_300X350_crop_center.jpg?v=1606987366" alt="Juice machine" />
                                                    </a>
                                                    <div class="product-label">
















                                                        <span class="new-title">New</span>





                                                        <span class="percent-count">-3%</span>



                                                    </div>

                                                    <div class="product-action">

                                                        <a href="javascript:void(0);" onclick="Shopify.addItem(37031999439005, 1); return false;" class="add-to-cart ajax-spin-cart" data-toggle="tooltip" data-placement="top" title="Add to cart">
                <span>
                    <span class="cart-title"><i class="ti-shopping-cart"></i></span>
                    <span class="cart-loading animated infinite rotateOut"><i class="ion-load-a"></i></span>
                    <span class="cart-added"><i class="ion-android-done"></i></span>
                    <span class="cart-unavailable"><i class="ion-android-alert"></i></span>
                </span>
                                                        </a>

                                                        <a href="javascript:void(0);" onclick="quiqview('juice-machine')" class="quick-view" data-toggle="tooltip" data-placement="top" title="Quickview">
                                                            <i class="ti-eye"></i>
                                                        </a>

                                                        <a class="wishlist" href="/account/login" title="Wishlist" data-toggle="tooltip" data-placement="top" title="Wishlist">
                                                            <i class="ti-heart"></i>
                                                        </a>

                                                    </div>

                                                </div>
                                                <div class="product-content">
                                                    <div class="product-ratting">
                                                        <span class="shopify-product-reviews-badge" data-id="5822867865757"></span>
                                                    </div>
                                                    <h6>
                                                        <a href="/products/juice-machine" title="Juice machine">Juice machine</a>
                                                    </h6>
                                                    <div class="price-box">
                                                        <span class="new-price"><span class=money>Rs. 150.00</span></span>

                                                        <span class="old-price"><span class=money>Rs. 155.00</span></span>

                                                    </div>
                                                    <p class="product-description">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been t...
                                                    </p>

                                                    <div class="product-action">

                                                        <a href="javascript:void(0);" onclick="Shopify.addItem(37031999439005, 1); return false;" class="add-to-cart ajax-spin-cart" data-toggle="tooltip" data-placement="top" title="Add to cart">
                <span>
                    <span class="cart-title"><i class="ti-shopping-cart"></i></span>
                    <span class="cart-loading animated infinite rotateOut"><i class="ion-load-a"></i></span>
                    <span class="cart-added"><i class="ion-android-done"></i></span>
                    <span class="cart-unavailable"><i class="ion-android-alert"></i></span>
                </span>
                                                        </a>

                                                        <a href="javascript:void(0);" onclick="quiqview('juice-machine')" class="quick-view" data-toggle="tooltip" data-placement="top" title="Quickview">
                                                            <i class="ti-eye"></i>
                                                        </a>

                                                        <a class="wishlist" href="/account/login" title="Wishlist" data-toggle="tooltip" data-placement="top" title="Wishlist">
                                                            <i class="ti-heart"></i>
                                                        </a>

                                                    </div>

                                                </div>
                                            </div>
                                            <style>
                                                a.add-to-cart.disabled{
                                                    color: #eaeaea;
                                                    background-color: #ababab;
                                                    opacity: .65;
                                                    pointer-events: none;
                                                }
                                            </style>
                                        </div>

                                        <div class="swiper-slide">
                                            <div class="single-product-wrap ">
                                                <div class="product-image ">
                                                    <a class="pro-img" href="/products/headphone">
                                                        <img class="img-fluid img1" src="//cdn.shopify.com/s/files/1/0509/6331/6893/products/pro6_9e76ac99-ba1d-43fe-a895-2fa8d1a90b81_300X350_crop_center.jpg?v=1606987093" alt="Headphone">
                                                        <img class="img-fluid img2" src="//cdn.shopify.com/s/files/1/0509/6331/6893/products/pro7_767bbe8e-0b76-4faa-944f-21f5efc9600b_300X350_crop_center.jpg?v=1606987093" alt="Headphone" />
                                                    </a>
                                                    <div class="product-label">
















                                                        <span class="new-title">New</span>





                                                        <span class="percent-count">-7%</span>



                                                    </div>

                                                    <div class="product-action">

                                                        <a href="javascript:void(0);" onclick="Shopify.addItem(37032000880797, 1); return false;" class="add-to-cart ajax-spin-cart" data-toggle="tooltip" data-placement="top" title="Add to cart">
                <span>
                    <span class="cart-title"><i class="ti-shopping-cart"></i></span>
                    <span class="cart-loading animated infinite rotateOut"><i class="ion-load-a"></i></span>
                    <span class="cart-added"><i class="ion-android-done"></i></span>
                    <span class="cart-unavailable"><i class="ion-android-alert"></i></span>
                </span>
                                                        </a>

                                                        <a href="javascript:void(0);" onclick="quiqview('headphone')" class="quick-view" data-toggle="tooltip" data-placement="top" title="Quickview">
                                                            <i class="ti-eye"></i>
                                                        </a>

                                                        <a class="wishlist" href="/account/login" title="Wishlist" data-toggle="tooltip" data-placement="top" title="Wishlist">
                                                            <i class="ti-heart"></i>
                                                        </a>

                                                    </div>

                                                </div>
                                                <div class="product-content">
                                                    <div class="product-ratting">
                                                        <span class="shopify-product-reviews-badge" data-id="5822868095133"></span>
                                                    </div>
                                                    <h6>
                                                        <a href="/products/headphone" title="Headphone">Headphone</a>
                                                    </h6>
                                                    <div class="price-box">
                                                        <span class="new-price"><span class=money>Rs. 232.00</span></span>

                                                        <span class="old-price"><span class=money>Rs. 250.00</span></span>

                                                    </div>
                                                    <p class="product-description">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been t...
                                                    </p>

                                                    <div class="product-action">

                                                        <a href="javascript:void(0);" onclick="Shopify.addItem(37032000880797, 1); return false;" class="add-to-cart ajax-spin-cart" data-toggle="tooltip" data-placement="top" title="Add to cart">
                <span>
                    <span class="cart-title"><i class="ti-shopping-cart"></i></span>
                    <span class="cart-loading animated infinite rotateOut"><i class="ion-load-a"></i></span>
                    <span class="cart-added"><i class="ion-android-done"></i></span>
                    <span class="cart-unavailable"><i class="ion-android-alert"></i></span>
                </span>
                                                        </a>

                                                        <a href="javascript:void(0);" onclick="quiqview('headphone')" class="quick-view" data-toggle="tooltip" data-placement="top" title="Quickview">
                                                            <i class="ti-eye"></i>
                                                        </a>

                                                        <a class="wishlist" href="/account/login" title="Wishlist" data-toggle="tooltip" data-placement="top" title="Wishlist">
                                                            <i class="ti-heart"></i>
                                                        </a>

                                                    </div>

                                                </div>
                                            </div>
                                            <style>
                                                a.add-to-cart.disabled{
                                                    color: #eaeaea;
                                                    background-color: #ababab;
                                                    opacity: .65;
                                                    pointer-events: none;
                                                }
                                            </style>
                                        </div>

                                        <div class="swiper-slide">
                                            <div class="single-product-wrap ">
                                                <div class="product-image ">
                                                    <a class="pro-img" href="/products/mouse">
                                                        <img class="img-fluid img1" src="//cdn.shopify.com/s/files/1/0509/6331/6893/products/pro31_eacb8fbe-be63-4404-8e9f-5297769290b7_300X350_crop_center.jpg?v=1606987707" alt="Mouse">
                                                        <img class="img-fluid img2" src="//cdn.shopify.com/s/files/1/0509/6331/6893/products/pro33_300X350_crop_center.jpg?v=1606987711" alt="Mouse" />
                                                    </a>
                                                    <div class="product-label">
















                                                        <span class="new-title">New</span>





                                                        <span class="percent-count">-17%</span>



                                                    </div>

                                                    <div class="product-action">

                                                        <a href="javascript:void(0);" onclick="Shopify.addItem(37032005435549, 1); return false;" class="add-to-cart ajax-spin-cart" data-toggle="tooltip" data-placement="top" title="Add to cart">
                <span>
                    <span class="cart-title"><i class="ti-shopping-cart"></i></span>
                    <span class="cart-loading animated infinite rotateOut"><i class="ion-load-a"></i></span>
                    <span class="cart-added"><i class="ion-android-done"></i></span>
                    <span class="cart-unavailable"><i class="ion-android-alert"></i></span>
                </span>
                                                        </a>

                                                        <a href="javascript:void(0);" onclick="quiqview('mouse')" class="quick-view" data-toggle="tooltip" data-placement="top" title="Quickview">
                                                            <i class="ti-eye"></i>
                                                        </a>

                                                        <a class="wishlist" href="/account/login" title="Wishlist" data-toggle="tooltip" data-placement="top" title="Wishlist">
                                                            <i class="ti-heart"></i>
                                                        </a>

                                                    </div>

                                                </div>
                                                <div class="product-content">
                                                    <div class="product-ratting">
                                                        <span class="shopify-product-reviews-badge" data-id="5822869012637"></span>
                                                    </div>
                                                    <h6>
                                                        <a href="/products/mouse" title="Mouse">Mouse</a>
                                                    </h6>
                                                    <div class="price-box">
                                                        <span class="new-price"><span class=money>Rs. 25.00</span></span>

                                                        <span class="old-price"><span class=money>Rs. 30.00</span></span>

                                                    </div>
                                                    <p class="product-description">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been t...
                                                    </p>

                                                    <div class="product-action">

                                                        <a href="javascript:void(0);" onclick="Shopify.addItem(37032005435549, 1); return false;" class="add-to-cart ajax-spin-cart" data-toggle="tooltip" data-placement="top" title="Add to cart">
                <span>
                    <span class="cart-title"><i class="ti-shopping-cart"></i></span>
                    <span class="cart-loading animated infinite rotateOut"><i class="ion-load-a"></i></span>
                    <span class="cart-added"><i class="ion-android-done"></i></span>
                    <span class="cart-unavailable"><i class="ion-android-alert"></i></span>
                </span>
                                                        </a>

                                                        <a href="javascript:void(0);" onclick="quiqview('mouse')" class="quick-view" data-toggle="tooltip" data-placement="top" title="Quickview">
                                                            <i class="ti-eye"></i>
                                                        </a>

                                                        <a class="wishlist" href="/account/login" title="Wishlist" data-toggle="tooltip" data-placement="top" title="Wishlist">
                                                            <i class="ti-heart"></i>
                                                        </a>

                                                    </div>

                                                </div>
                                            </div>
                                            <style>
                                                a.add-to-cart.disabled{
                                                    color: #eaeaea;
                                                    background-color: #ababab;
                                                    opacity: .65;
                                                    pointer-events: none;
                                                }
                                            </style>
                                        </div>

                                        <div class="swiper-slide">
                                            <div class="single-product-wrap ">
                                                <div class="product-image ">
                                                    <a class="pro-img" href="/products/camera">
                                                        <img class="img-fluid img1" src="//cdn.shopify.com/s/files/1/0509/6331/6893/products/pro39_300X350_crop_center.jpg?v=1606986847" alt="Camera">
                                                        <img class="img-fluid img2" src="//cdn.shopify.com/s/files/1/0509/6331/6893/products/pro38_300X350_crop_center.jpg?v=1606986847" alt="Camera" />
                                                    </a>
                                                    <div class="product-label">














                                                        <span class="sale-title">Sale</span>







                                                        <span class="percent-count">-3%</span>



                                                    </div>

                                                    <div class="product-action">

                                                        <a href="javascript:void(0);" onclick="Shopify.addItem(37032002584733, 1); return false;" class="add-to-cart ajax-spin-cart" data-toggle="tooltip" data-placement="top" title="Add to cart">
                <span>
                    <span class="cart-title"><i class="ti-shopping-cart"></i></span>
                    <span class="cart-loading animated infinite rotateOut"><i class="ion-load-a"></i></span>
                    <span class="cart-added"><i class="ion-android-done"></i></span>
                    <span class="cart-unavailable"><i class="ion-android-alert"></i></span>
                </span>
                                                        </a>

                                                        <a href="javascript:void(0);" onclick="quiqview('camera')" class="quick-view" data-toggle="tooltip" data-placement="top" title="Quickview">
                                                            <i class="ti-eye"></i>
                                                        </a>

                                                        <a class="wishlist" href="/account/login" title="Wishlist" data-toggle="tooltip" data-placement="top" title="Wishlist">
                                                            <i class="ti-heart"></i>
                                                        </a>

                                                    </div>

                                                </div>
                                                <div class="product-content">
                                                    <div class="product-ratting">
                                                        <span class="shopify-product-reviews-badge" data-id="5822868455581"></span>
                                                    </div>
                                                    <h6>
                                                        <a href="/products/camera" title="Camera">Camera</a>
                                                    </h6>
                                                    <div class="price-box">
                                                        <span class="new-price"><span class=money>Rs. 150.00</span></span>

                                                        <span class="old-price"><span class=money>Rs. 155.00</span></span>

                                                    </div>
                                                    <p class="product-description">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been t...
                                                    </p>

                                                    <div class="product-action">

                                                        <a href="javascript:void(0);" onclick="Shopify.addItem(37032002584733, 1); return false;" class="add-to-cart ajax-spin-cart" data-toggle="tooltip" data-placement="top" title="Add to cart">
                <span>
                    <span class="cart-title"><i class="ti-shopping-cart"></i></span>
                    <span class="cart-loading animated infinite rotateOut"><i class="ion-load-a"></i></span>
                    <span class="cart-added"><i class="ion-android-done"></i></span>
                    <span class="cart-unavailable"><i class="ion-android-alert"></i></span>
                </span>
                                                        </a>

                                                        <a href="javascript:void(0);" onclick="quiqview('camera')" class="quick-view" data-toggle="tooltip" data-placement="top" title="Quickview">
                                                            <i class="ti-eye"></i>
                                                        </a>

                                                        <a class="wishlist" href="/account/login" title="Wishlist" data-toggle="tooltip" data-placement="top" title="Wishlist">
                                                            <i class="ti-heart"></i>
                                                        </a>

                                                    </div>

                                                </div>
                                            </div>
                                            <style>
                                                a.add-to-cart.disabled{
                                                    color: #eaeaea;
                                                    background-color: #ababab;
                                                    opacity: .65;
                                                    pointer-events: none;
                                                }
                                            </style>
                                        </div>

                                        <div class="swiper-slide">
                                            <div class="single-product-wrap ">
                                                <div class="product-image ">
                                                    <a class="pro-img" href="/products/pen-drive">
                                                        <img class="img-fluid img1" src="//cdn.shopify.com/s/files/1/0509/6331/6893/products/pro48_300X350_crop_center.jpg?v=1606987770" alt="Pen drive">
                                                        <img class="img-fluid img2" src="//cdn.shopify.com/s/files/1/0509/6331/6893/products/pro49_300X350_crop_center.jpg?v=1606987770" alt="Pen drive" />
                                                    </a>
                                                    <div class="product-label">














                                                        <span class="sale-title">Sale</span>







                                                        <span class="percent-count">-17%</span>



                                                    </div>

                                                    <div class="product-action">

                                                        <a href="javascript:void(0);" onclick="Shopify.addItem(37031999930525, 1); return false;" class="add-to-cart ajax-spin-cart" data-toggle="tooltip" data-placement="top" title="Add to cart">
                <span>
                    <span class="cart-title"><i class="ti-shopping-cart"></i></span>
                    <span class="cart-loading animated infinite rotateOut"><i class="ion-load-a"></i></span>
                    <span class="cart-added"><i class="ion-android-done"></i></span>
                    <span class="cart-unavailable"><i class="ion-android-alert"></i></span>
                </span>
                                                        </a>

                                                        <a href="javascript:void(0);" onclick="quiqview('pen-drive')" class="quick-view" data-toggle="tooltip" data-placement="top" title="Quickview">
                                                            <i class="ti-eye"></i>
                                                        </a>

                                                        <a class="wishlist" href="/account/login" title="Wishlist" data-toggle="tooltip" data-placement="top" title="Wishlist">
                                                            <i class="ti-heart"></i>
                                                        </a>

                                                    </div>

                                                </div>
                                                <div class="product-content">
                                                    <div class="product-ratting">
                                                        <span class="shopify-product-reviews-badge" data-id="5822867964061"></span>
                                                    </div>
                                                    <h6>
                                                        <a href="/products/pen-drive" title="Pen drive">Pen drive</a>
                                                    </h6>
                                                    <div class="price-box">
                                                        <span class="new-price"><span class=money>Rs. 100.00</span></span>

                                                        <span class="old-price"><span class=money>Rs. 120.00</span></span>

                                                    </div>
                                                    <p class="product-description">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been t...
                                                    </p>

                                                    <div class="product-action">

                                                        <a href="javascript:void(0);" onclick="Shopify.addItem(37031999930525, 1); return false;" class="add-to-cart ajax-spin-cart" data-toggle="tooltip" data-placement="top" title="Add to cart">
                <span>
                    <span class="cart-title"><i class="ti-shopping-cart"></i></span>
                    <span class="cart-loading animated infinite rotateOut"><i class="ion-load-a"></i></span>
                    <span class="cart-added"><i class="ion-android-done"></i></span>
                    <span class="cart-unavailable"><i class="ion-android-alert"></i></span>
                </span>
                                                        </a>

                                                        <a href="javascript:void(0);" onclick="quiqview('pen-drive')" class="quick-view" data-toggle="tooltip" data-placement="top" title="Quickview">
                                                            <i class="ti-eye"></i>
                                                        </a>

                                                        <a class="wishlist" href="/account/login" title="Wishlist" data-toggle="tooltip" data-placement="top" title="Wishlist">
                                                            <i class="ti-heart"></i>
                                                        </a>

                                                    </div>

                                                </div>
                                            </div>
                                            <style>
                                                a.add-to-cart.disabled{
                                                    color: #eaeaea;
                                                    background-color: #ababab;
                                                    opacity: .65;
                                                    pointer-events: none;
                                                }
                                            </style>
                                        </div>

                                    </div>
                                    <div class="swiper-buttons">
                                        <button class="swiper-prev"><i class="fa fa-angle-left"></i></button>
                                        <button class="swiper-next"><i class="fa fa-angle-right"></i></button>
                                    </div>
                                </div>
                            </div>



                            <div class="tab-pane fade" id="tab-1592830767075" role="tabpanel">
                                <div class="swiper-container" id="feture_pro_tab">
                                    <div class="swiper-wrapper">

                                        <div class="swiper-slide">
                                            <div class="single-product-wrap stock-out">
                                                <div class="product-image stock-out">
                                                    <a class="pro-img" href="/products/refrigerator">
                                                        <img class="img-fluid img1" src="//cdn.shopify.com/s/files/1/0509/6331/6893/products/pro58_300X350_crop_center.jpg?v=1606987893" alt="Refrigerator">
                                                        <img class="img-fluid img2" src="//cdn.shopify.com/s/files/1/0509/6331/6893/products/pro59_300X350_crop_center.jpg?v=1606987893" alt="Refrigerator" />
                                                    </a>
                                                    <div class="product-label">










                                                        <span class="soldout-title">Soldout</span>
                                                    </div>

                                                </div>
                                                <div class="product-content">
                                                    <div class="product-ratting">
                                                        <span class="shopify-product-reviews-badge" data-id="5822868979869"></span>
                                                    </div>
                                                    <h6>
                                                        <a href="/products/refrigerator" title="Refrigerator">Refrigerator</a>
                                                    </h6>
                                                    <div class="price-box">
                                                        <span class="new-price"><span class=money>Rs. 120.00</span></span>

                                                        <span class="old-price"><span class=money>Rs. 130.00</span></span>

                                                    </div>
                                                    <p class="product-description">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been t...
                                                    </p>

                                                </div>
                                            </div>
                                            <style>
                                                a.add-to-cart.disabled{
                                                    color: #eaeaea;
                                                    background-color: #ababab;
                                                    opacity: .65;
                                                    pointer-events: none;
                                                }
                                            </style>
                                        </div>

                                        <div class="swiper-slide">
                                            <div class="single-product-wrap ">
                                                <div class="product-image ">
                                                    <a class="pro-img" href="/products/jbl-speaker">
                                                        <img class="img-fluid img1" src="//cdn.shopify.com/s/files/1/0509/6331/6893/products/pro37_9c497408-cd03-4ba8-b516-981c770bbaae_300X350_crop_center.jpg?v=1606987296" alt="JBL Speaker">
                                                        <img class="img-fluid img2" src="//cdn.shopify.com/s/files/1/0509/6331/6893/products/pro36_20b3e4a6-54ec-42a8-a760-3f40b78c2bc9_300X350_crop_center.jpg?v=1606987296" alt="JBL Speaker" />
                                                    </a>
                                                    <div class="product-label">
















                                                        <span class="new-title">New</span>





                                                    </div>

                                                    <div class="product-action">

                                                        <a href="javascript:void(0);" onclick="Shopify.addItem(37032003666077, 1); return false;" class="add-to-cart ajax-spin-cart" data-toggle="tooltip" data-placement="top" title="Add to cart">
                <span>
                    <span class="cart-title"><i class="ti-shopping-cart"></i></span>
                    <span class="cart-loading animated infinite rotateOut"><i class="ion-load-a"></i></span>
                    <span class="cart-added"><i class="ion-android-done"></i></span>
                    <span class="cart-unavailable"><i class="ion-android-alert"></i></span>
                </span>
                                                        </a>

                                                        <a href="javascript:void(0);" onclick="quiqview('jbl-speaker')" class="quick-view" data-toggle="tooltip" data-placement="top" title="Quickview">
                                                            <i class="ti-eye"></i>
                                                        </a>

                                                        <a class="wishlist" href="/account/login" title="Wishlist" data-toggle="tooltip" data-placement="top" title="Wishlist">
                                                            <i class="ti-heart"></i>
                                                        </a>

                                                    </div>

                                                </div>
                                                <div class="product-content">
                                                    <div class="product-ratting">
                                                        <span class="shopify-product-reviews-badge" data-id="5822868717725"></span>
                                                    </div>
                                                    <h6>
                                                        <a href="/products/jbl-speaker" title="JBL Speaker">JBL Speaker</a>
                                                    </h6>
                                                    <div class="price-box">
                                                        <span class="new-price"><span class=money>Rs. 60.00</span></span>

                                                    </div>
                                                    <p class="product-description">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been t...
                                                    </p>

                                                    <div class="product-action">

                                                        <a href="javascript:void(0);" onclick="Shopify.addItem(37032003666077, 1); return false;" class="add-to-cart ajax-spin-cart" data-toggle="tooltip" data-placement="top" title="Add to cart">
                <span>
                    <span class="cart-title"><i class="ti-shopping-cart"></i></span>
                    <span class="cart-loading animated infinite rotateOut"><i class="ion-load-a"></i></span>
                    <span class="cart-added"><i class="ion-android-done"></i></span>
                    <span class="cart-unavailable"><i class="ion-android-alert"></i></span>
                </span>
                                                        </a>

                                                        <a href="javascript:void(0);" onclick="quiqview('jbl-speaker')" class="quick-view" data-toggle="tooltip" data-placement="top" title="Quickview">
                                                            <i class="ti-eye"></i>
                                                        </a>

                                                        <a class="wishlist" href="/account/login" title="Wishlist" data-toggle="tooltip" data-placement="top" title="Wishlist">
                                                            <i class="ti-heart"></i>
                                                        </a>

                                                    </div>

                                                </div>
                                            </div>
                                            <style>
                                                a.add-to-cart.disabled{
                                                    color: #eaeaea;
                                                    background-color: #ababab;
                                                    opacity: .65;
                                                    pointer-events: none;
                                                }
                                            </style>
                                        </div>

                                        <div class="swiper-slide">
                                            <div class="single-product-wrap ">
                                                <div class="product-image ">
                                                    <a class="pro-img" href="/products/laptop">
                                                        <img class="img-fluid img1" src="//cdn.shopify.com/s/files/1/0509/6331/6893/products/pro11_eca584c8-e1e1-404d-996d-af35cc9909c2_300X350_crop_center.jpg?v=1606987596" alt="Laptop">
                                                        <img class="img-fluid img2" src="//cdn.shopify.com/s/files/1/0509/6331/6893/products/pro12_300X350_crop_center.jpg?v=1606987596" alt="Laptop" />
                                                    </a>
                                                    <div class="product-label">
















                                                        <span class="new-title">New</span>





                                                        <span class="percent-count">-5%</span>



                                                    </div>

                                                    <div class="product-action">

                                                        <a href="javascript:void(0);" onclick="Shopify.addItem(37031998619805, 1); return false;" class="add-to-cart ajax-spin-cart" data-toggle="tooltip" data-placement="top" title="Add to cart">
                <span>
                    <span class="cart-title"><i class="ti-shopping-cart"></i></span>
                    <span class="cart-loading animated infinite rotateOut"><i class="ion-load-a"></i></span>
                    <span class="cart-added"><i class="ion-android-done"></i></span>
                    <span class="cart-unavailable"><i class="ion-android-alert"></i></span>
                </span>
                                                        </a>

                                                        <a href="javascript:void(0);" onclick="quiqview('laptop')" class="quick-view" data-toggle="tooltip" data-placement="top" title="Quickview">
                                                            <i class="ti-eye"></i>
                                                        </a>

                                                        <a class="wishlist" href="/account/login" title="Wishlist" data-toggle="tooltip" data-placement="top" title="Wishlist">
                                                            <i class="ti-heart"></i>
                                                        </a>

                                                    </div>

                                                </div>
                                                <div class="product-content">
                                                    <div class="product-ratting">
                                                        <span class="shopify-product-reviews-badge" data-id="5822867701917"></span>
                                                    </div>
                                                    <h6>
                                                        <a href="/products/laptop" title="Laptop">Laptop</a>
                                                    </h6>
                                                    <div class="price-box">
                                                        <span class="new-price"><span class=money>Rs. 200.00</span></span>

                                                        <span class="old-price"><span class=money>Rs. 210.00</span></span>

                                                    </div>
                                                    <p class="product-description">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been t...
                                                    </p>

                                                    <div class="product-action">

                                                        <a href="javascript:void(0);" onclick="Shopify.addItem(37031998619805, 1); return false;" class="add-to-cart ajax-spin-cart" data-toggle="tooltip" data-placement="top" title="Add to cart">
                <span>
                    <span class="cart-title"><i class="ti-shopping-cart"></i></span>
                    <span class="cart-loading animated infinite rotateOut"><i class="ion-load-a"></i></span>
                    <span class="cart-added"><i class="ion-android-done"></i></span>
                    <span class="cart-unavailable"><i class="ion-android-alert"></i></span>
                </span>
                                                        </a>

                                                        <a href="javascript:void(0);" onclick="quiqview('laptop')" class="quick-view" data-toggle="tooltip" data-placement="top" title="Quickview">
                                                            <i class="ti-eye"></i>
                                                        </a>

                                                        <a class="wishlist" href="/account/login" title="Wishlist" data-toggle="tooltip" data-placement="top" title="Wishlist">
                                                            <i class="ti-heart"></i>
                                                        </a>

                                                    </div>

                                                </div>
                                            </div>
                                            <style>
                                                a.add-to-cart.disabled{
                                                    color: #eaeaea;
                                                    background-color: #ababab;
                                                    opacity: .65;
                                                    pointer-events: none;
                                                }
                                            </style>
                                        </div>

                                        <div class="swiper-slide">
                                            <div class="single-product-wrap ">
                                                <div class="product-image ">
                                                    <a class="pro-img" href="/products/boat">
                                                        <img class="img-fluid img1" src="//cdn.shopify.com/s/files/1/0509/6331/6893/products/pro3_66116319-ea9e-48c4-aee5-c0de6bf84624_300X350_crop_center.jpg?v=1606986643" alt="Boat">
                                                        <img class="img-fluid img2" src="//cdn.shopify.com/s/files/1/0509/6331/6893/products/pro2_2c303381-fe9a-46fb-81cf-d0e8963ae517_300X350_crop_center.jpg?v=1606986647" alt="Boat" />
                                                    </a>
                                                    <div class="product-label">














                                                        <span class="sale-title">Sale</span>







                                                        <span class="percent-count">-6%</span>



                                                    </div>

                                                    <div class="product-action">

                                                        <a href="javascript:void(0);" onclick="Shopify.addItem(37031997571229, 1); return false;" class="add-to-cart ajax-spin-cart" data-toggle="tooltip" data-placement="top" title="Add to cart">
                <span>
                    <span class="cart-title"><i class="ti-shopping-cart"></i></span>
                    <span class="cart-loading animated infinite rotateOut"><i class="ion-load-a"></i></span>
                    <span class="cart-added"><i class="ion-android-done"></i></span>
                    <span class="cart-unavailable"><i class="ion-android-alert"></i></span>
                </span>
                                                        </a>

                                                        <a href="javascript:void(0);" onclick="quiqview('boat')" class="quick-view" data-toggle="tooltip" data-placement="top" title="Quickview">
                                                            <i class="ti-eye"></i>
                                                        </a>

                                                        <a class="wishlist" href="/account/login" title="Wishlist" data-toggle="tooltip" data-placement="top" title="Wishlist">
                                                            <i class="ti-heart"></i>
                                                        </a>

                                                    </div>

                                                </div>
                                                <div class="product-content">
                                                    <div class="product-ratting">
                                                        <span class="shopify-product-reviews-badge" data-id="5822867472541"></span>
                                                    </div>
                                                    <h6>
                                                        <a href="/products/boat" title="Boat">Boat</a>
                                                    </h6>
                                                    <div class="price-box">
                                                        <span class="new-price"><span class=money>Rs. 150.00</span></span>

                                                        <span class="old-price"><span class=money>Rs. 160.00</span></span>

                                                    </div>
                                                    <p class="product-description">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been t...
                                                    </p>

                                                    <div class="product-action">

                                                        <a href="javascript:void(0);" onclick="Shopify.addItem(37031997571229, 1); return false;" class="add-to-cart ajax-spin-cart" data-toggle="tooltip" data-placement="top" title="Add to cart">
                <span>
                    <span class="cart-title"><i class="ti-shopping-cart"></i></span>
                    <span class="cart-loading animated infinite rotateOut"><i class="ion-load-a"></i></span>
                    <span class="cart-added"><i class="ion-android-done"></i></span>
                    <span class="cart-unavailable"><i class="ion-android-alert"></i></span>
                </span>
                                                        </a>

                                                        <a href="javascript:void(0);" onclick="quiqview('boat')" class="quick-view" data-toggle="tooltip" data-placement="top" title="Quickview">
                                                            <i class="ti-eye"></i>
                                                        </a>

                                                        <a class="wishlist" href="/account/login" title="Wishlist" data-toggle="tooltip" data-placement="top" title="Wishlist">
                                                            <i class="ti-heart"></i>
                                                        </a>

                                                    </div>

                                                </div>
                                            </div>
                                            <style>
                                                a.add-to-cart.disabled{
                                                    color: #eaeaea;
                                                    background-color: #ababab;
                                                    opacity: .65;
                                                    pointer-events: none;
                                                }
                                            </style>
                                        </div>

                                        <div class="swiper-slide">
                                            <div class="single-product-wrap ">
                                                <div class="product-image ">
                                                    <a class="pro-img" href="/products/i-phone">
                                                        <img class="img-fluid img1" src="//cdn.shopify.com/s/files/1/0509/6331/6893/products/pro15_300X350_crop_center.jpg?v=1606987157" alt="I Phone">
                                                        <img class="img-fluid img2" src="//cdn.shopify.com/s/files/1/0509/6331/6893/products/pro18_300X350_crop_center.jpg?v=1606987162" alt="I Phone" />
                                                    </a>
                                                    <div class="product-label">
















                                                        <span class="new-title">New</span>





                                                        <span class="percent-count">-2%</span>



                                                    </div>

                                                    <div class="product-action">

                                                        <a href="javascript:void(0);" onclick="Shopify.addItem(37032002125981, 1); return false;" class="add-to-cart ajax-spin-cart" data-toggle="tooltip" data-placement="top" title="Add to cart">
                <span>
                    <span class="cart-title"><i class="ti-shopping-cart"></i></span>
                    <span class="cart-loading animated infinite rotateOut"><i class="ion-load-a"></i></span>
                    <span class="cart-added"><i class="ion-android-done"></i></span>
                    <span class="cart-unavailable"><i class="ion-android-alert"></i></span>
                </span>
                                                        </a>

                                                        <a href="javascript:void(0);" onclick="quiqview('i-phone')" class="quick-view" data-toggle="tooltip" data-placement="top" title="Quickview">
                                                            <i class="ti-eye"></i>
                                                        </a>

                                                        <a class="wishlist" href="/account/login" title="Wishlist" data-toggle="tooltip" data-placement="top" title="Wishlist">
                                                            <i class="ti-heart"></i>
                                                        </a>

                                                    </div>

                                                </div>
                                                <div class="product-content">
                                                    <div class="product-ratting">
                                                        <span class="shopify-product-reviews-badge" data-id="5822868193437"></span>
                                                    </div>
                                                    <h6>
                                                        <a href="/products/i-phone" title="I Phone">I Phone</a>
                                                    </h6>
                                                    <div class="price-box">
                                                        <span class="new-price"><span class=money>Rs. 225.00</span></span>

                                                        <span class="old-price"><span class=money>Rs. 230.00</span></span>

                                                    </div>
                                                    <p class="product-description">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been t...
                                                    </p>

                                                    <div class="product-action">

                                                        <a href="javascript:void(0);" onclick="Shopify.addItem(37032002125981, 1); return false;" class="add-to-cart ajax-spin-cart" data-toggle="tooltip" data-placement="top" title="Add to cart">
                <span>
                    <span class="cart-title"><i class="ti-shopping-cart"></i></span>
                    <span class="cart-loading animated infinite rotateOut"><i class="ion-load-a"></i></span>
                    <span class="cart-added"><i class="ion-android-done"></i></span>
                    <span class="cart-unavailable"><i class="ion-android-alert"></i></span>
                </span>
                                                        </a>

                                                        <a href="javascript:void(0);" onclick="quiqview('i-phone')" class="quick-view" data-toggle="tooltip" data-placement="top" title="Quickview">
                                                            <i class="ti-eye"></i>
                                                        </a>

                                                        <a class="wishlist" href="/account/login" title="Wishlist" data-toggle="tooltip" data-placement="top" title="Wishlist">
                                                            <i class="ti-heart"></i>
                                                        </a>

                                                    </div>

                                                </div>
                                            </div>
                                            <style>
                                                a.add-to-cart.disabled{
                                                    color: #eaeaea;
                                                    background-color: #ababab;
                                                    opacity: .65;
                                                    pointer-events: none;
                                                }
                                            </style>
                                        </div>

                                        <div class="swiper-slide">
                                            <div class="single-product-wrap ">
                                                <div class="product-image ">
                                                    <a class="pro-img" href="/products/watch">
                                                        <img class="img-fluid img1" src="//cdn.shopify.com/s/files/1/0509/6331/6893/products/pro20_300X350_crop_center.jpg?v=1606987984" alt="Watch">
                                                        <img class="img-fluid img2" src="//cdn.shopify.com/s/files/1/0509/6331/6893/products/pro21_300X350_crop_center.jpg?v=1606987984" alt="Watch" />
                                                    </a>
                                                    <div class="product-label">
















                                                        <span class="new-title">New</span>





                                                        <span class="percent-count">-22%</span>



                                                    </div>

                                                    <div class="product-action">

                                                        <a href="javascript:void(0);" onclick="Shopify.addItem(37032004419741, 1); return false;" class="add-to-cart ajax-spin-cart" data-toggle="tooltip" data-placement="top" title="Add to cart">
                <span>
                    <span class="cart-title"><i class="ti-shopping-cart"></i></span>
                    <span class="cart-loading animated infinite rotateOut"><i class="ion-load-a"></i></span>
                    <span class="cart-added"><i class="ion-android-done"></i></span>
                    <span class="cart-unavailable"><i class="ion-android-alert"></i></span>
                </span>
                                                        </a>

                                                        <a href="javascript:void(0);" onclick="quiqview('watch')" class="quick-view" data-toggle="tooltip" data-placement="top" title="Quickview">
                                                            <i class="ti-eye"></i>
                                                        </a>

                                                        <a class="wishlist" href="/account/login" title="Wishlist" data-toggle="tooltip" data-placement="top" title="Wishlist">
                                                            <i class="ti-heart"></i>
                                                        </a>

                                                    </div>

                                                </div>
                                                <div class="product-content">
                                                    <div class="product-ratting">
                                                        <span class="shopify-product-reviews-badge" data-id="5822868848797"></span>
                                                    </div>
                                                    <h6>
                                                        <a href="/products/watch" title="Watch">Watch</a>
                                                    </h6>
                                                    <div class="price-box">
                                                        <span class="new-price"><span class=money>Rs. 110.00</span></span>

                                                        <span class="old-price"><span class=money>Rs. 130.00</span></span>

                                                    </div>
                                                    <p class="product-description">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been t...
                                                    </p>

                                                    <div class="product-action">

                                                        <a href="javascript:void(0);" onclick="Shopify.addItem(37032004419741, 1); return false;" class="add-to-cart ajax-spin-cart" data-toggle="tooltip" data-placement="top" title="Add to cart">
                <span>
                    <span class="cart-title"><i class="ti-shopping-cart"></i></span>
                    <span class="cart-loading animated infinite rotateOut"><i class="ion-load-a"></i></span>
                    <span class="cart-added"><i class="ion-android-done"></i></span>
                    <span class="cart-unavailable"><i class="ion-android-alert"></i></span>
                </span>
                                                        </a>

                                                        <a href="javascript:void(0);" onclick="quiqview('watch')" class="quick-view" data-toggle="tooltip" data-placement="top" title="Quickview">
                                                            <i class="ti-eye"></i>
                                                        </a>

                                                        <a class="wishlist" href="/account/login" title="Wishlist" data-toggle="tooltip" data-placement="top" title="Wishlist">
                                                            <i class="ti-heart"></i>
                                                        </a>

                                                    </div>

                                                </div>
                                            </div>
                                            <style>
                                                a.add-to-cart.disabled{
                                                    color: #eaeaea;
                                                    background-color: #ababab;
                                                    opacity: .65;
                                                    pointer-events: none;
                                                }
                                            </style>
                                        </div>

                                        <div class="swiper-slide">
                                            <div class="single-product-wrap ">
                                                <div class="product-image ">
                                                    <a class="pro-img" href="/products/earbuds">
                                                        <img class="img-fluid img1" src="//cdn.shopify.com/s/files/1/0509/6331/6893/products/pro8_300X350_crop_center.jpg?v=1606987015" alt="Earbuds">
                                                        <img class="img-fluid img2" src="//cdn.shopify.com/s/files/1/0509/6331/6893/products/pro9_300X350_crop_center.jpg?v=1606987015" alt="Earbuds" />
                                                    </a>
                                                    <div class="product-label">
















                                                        <span class="new-title">New</span>





                                                        <span class="percent-count">-8%</span>



                                                    </div>

                                                    <div class="product-action">

                                                        <a href="javascript:void(0);" onclick="Shopify.addItem(37031996981405, 1); return false;" class="add-to-cart ajax-spin-cart" data-toggle="tooltip" data-placement="top" title="Add to cart">
                <span>
                    <span class="cart-title"><i class="ti-shopping-cart"></i></span>
                    <span class="cart-loading animated infinite rotateOut"><i class="ion-load-a"></i></span>
                    <span class="cart-added"><i class="ion-android-done"></i></span>
                    <span class="cart-unavailable"><i class="ion-android-alert"></i></span>
                </span>
                                                        </a>

                                                        <a href="javascript:void(0);" onclick="quiqview('earbuds')" class="quick-view" data-toggle="tooltip" data-placement="top" title="Quickview">
                                                            <i class="ti-eye"></i>
                                                        </a>

                                                        <a class="wishlist" href="/account/login" title="Wishlist" data-toggle="tooltip" data-placement="top" title="Wishlist">
                                                            <i class="ti-heart"></i>
                                                        </a>

                                                    </div>

                                                </div>
                                                <div class="product-content">
                                                    <div class="product-ratting">
                                                        <span class="shopify-product-reviews-badge" data-id="5822867341469"></span>
                                                    </div>
                                                    <h6>
                                                        <a href="/products/earbuds" title="Earbuds">Earbuds</a>
                                                    </h6>
                                                    <div class="price-box">
                                                        <span class="new-price"><span class=money>Rs. 120.00</span></span>

                                                        <span class="old-price"><span class=money>Rs. 130.00</span></span>

                                                    </div>
                                                    <p class="product-description">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been t...
                                                    </p>

                                                    <div class="product-action">

                                                        <a href="javascript:void(0);" onclick="Shopify.addItem(37031996981405, 1); return false;" class="add-to-cart ajax-spin-cart" data-toggle="tooltip" data-placement="top" title="Add to cart">
                <span>
                    <span class="cart-title"><i class="ti-shopping-cart"></i></span>
                    <span class="cart-loading animated infinite rotateOut"><i class="ion-load-a"></i></span>
                    <span class="cart-added"><i class="ion-android-done"></i></span>
                    <span class="cart-unavailable"><i class="ion-android-alert"></i></span>
                </span>
                                                        </a>

                                                        <a href="javascript:void(0);" onclick="quiqview('earbuds')" class="quick-view" data-toggle="tooltip" data-placement="top" title="Quickview">
                                                            <i class="ti-eye"></i>
                                                        </a>

                                                        <a class="wishlist" href="/account/login" title="Wishlist" data-toggle="tooltip" data-placement="top" title="Wishlist">
                                                            <i class="ti-heart"></i>
                                                        </a>

                                                    </div>

                                                </div>
                                            </div>
                                            <style>
                                                a.add-to-cart.disabled{
                                                    color: #eaeaea;
                                                    background-color: #ababab;
                                                    opacity: .65;
                                                    pointer-events: none;
                                                }
                                            </style>
                                        </div>

                                        <div class="swiper-slide">
                                            <div class="single-product-wrap ">
                                                <div class="product-image ">
                                                    <a class="pro-img" href="/products/juice-machine">
                                                        <img class="img-fluid img1" src="//cdn.shopify.com/s/files/1/0509/6331/6893/products/pro64_300X350_crop_center.jpg?v=1606987366" alt="Juice machine">
                                                        <img class="img-fluid img2" src="//cdn.shopify.com/s/files/1/0509/6331/6893/products/pro67_300X350_crop_center.jpg?v=1606987366" alt="Juice machine" />
                                                    </a>
                                                    <div class="product-label">
















                                                        <span class="new-title">New</span>





                                                        <span class="percent-count">-3%</span>



                                                    </div>

                                                    <div class="product-action">

                                                        <a href="javascript:void(0);" onclick="Shopify.addItem(37031999439005, 1); return false;" class="add-to-cart ajax-spin-cart" data-toggle="tooltip" data-placement="top" title="Add to cart">
                <span>
                    <span class="cart-title"><i class="ti-shopping-cart"></i></span>
                    <span class="cart-loading animated infinite rotateOut"><i class="ion-load-a"></i></span>
                    <span class="cart-added"><i class="ion-android-done"></i></span>
                    <span class="cart-unavailable"><i class="ion-android-alert"></i></span>
                </span>
                                                        </a>

                                                        <a href="javascript:void(0);" onclick="quiqview('juice-machine')" class="quick-view" data-toggle="tooltip" data-placement="top" title="Quickview">
                                                            <i class="ti-eye"></i>
                                                        </a>

                                                        <a class="wishlist" href="/account/login" title="Wishlist" data-toggle="tooltip" data-placement="top" title="Wishlist">
                                                            <i class="ti-heart"></i>
                                                        </a>

                                                    </div>

                                                </div>
                                                <div class="product-content">
                                                    <div class="product-ratting">
                                                        <span class="shopify-product-reviews-badge" data-id="5822867865757"></span>
                                                    </div>
                                                    <h6>
                                                        <a href="/products/juice-machine" title="Juice machine">Juice machine</a>
                                                    </h6>
                                                    <div class="price-box">
                                                        <span class="new-price"><span class=money>Rs. 150.00</span></span>

                                                        <span class="old-price"><span class=money>Rs. 155.00</span></span>

                                                    </div>
                                                    <p class="product-description">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been t...
                                                    </p>

                                                    <div class="product-action">

                                                        <a href="javascript:void(0);" onclick="Shopify.addItem(37031999439005, 1); return false;" class="add-to-cart ajax-spin-cart" data-toggle="tooltip" data-placement="top" title="Add to cart">
                <span>
                    <span class="cart-title"><i class="ti-shopping-cart"></i></span>
                    <span class="cart-loading animated infinite rotateOut"><i class="ion-load-a"></i></span>
                    <span class="cart-added"><i class="ion-android-done"></i></span>
                    <span class="cart-unavailable"><i class="ion-android-alert"></i></span>
                </span>
                                                        </a>

                                                        <a href="javascript:void(0);" onclick="quiqview('juice-machine')" class="quick-view" data-toggle="tooltip" data-placement="top" title="Quickview">
                                                            <i class="ti-eye"></i>
                                                        </a>

                                                        <a class="wishlist" href="/account/login" title="Wishlist" data-toggle="tooltip" data-placement="top" title="Wishlist">
                                                            <i class="ti-heart"></i>
                                                        </a>

                                                    </div>

                                                </div>
                                            </div>
                                            <style>
                                                a.add-to-cart.disabled{
                                                    color: #eaeaea;
                                                    background-color: #ababab;
                                                    opacity: .65;
                                                    pointer-events: none;
                                                }
                                            </style>
                                        </div>

                                        <div class="swiper-slide">
                                            <div class="single-product-wrap ">
                                                <div class="product-image ">
                                                    <a class="pro-img" href="/products/headphone">
                                                        <img class="img-fluid img1" src="//cdn.shopify.com/s/files/1/0509/6331/6893/products/pro6_9e76ac99-ba1d-43fe-a895-2fa8d1a90b81_300X350_crop_center.jpg?v=1606987093" alt="Headphone">
                                                        <img class="img-fluid img2" src="//cdn.shopify.com/s/files/1/0509/6331/6893/products/pro7_767bbe8e-0b76-4faa-944f-21f5efc9600b_300X350_crop_center.jpg?v=1606987093" alt="Headphone" />
                                                    </a>
                                                    <div class="product-label">
















                                                        <span class="new-title">New</span>





                                                        <span class="percent-count">-7%</span>



                                                    </div>

                                                    <div class="product-action">

                                                        <a href="javascript:void(0);" onclick="Shopify.addItem(37032000880797, 1); return false;" class="add-to-cart ajax-spin-cart" data-toggle="tooltip" data-placement="top" title="Add to cart">
                <span>
                    <span class="cart-title"><i class="ti-shopping-cart"></i></span>
                    <span class="cart-loading animated infinite rotateOut"><i class="ion-load-a"></i></span>
                    <span class="cart-added"><i class="ion-android-done"></i></span>
                    <span class="cart-unavailable"><i class="ion-android-alert"></i></span>
                </span>
                                                        </a>

                                                        <a href="javascript:void(0);" onclick="quiqview('headphone')" class="quick-view" data-toggle="tooltip" data-placement="top" title="Quickview">
                                                            <i class="ti-eye"></i>
                                                        </a>

                                                        <a class="wishlist" href="/account/login" title="Wishlist" data-toggle="tooltip" data-placement="top" title="Wishlist">
                                                            <i class="ti-heart"></i>
                                                        </a>

                                                    </div>

                                                </div>
                                                <div class="product-content">
                                                    <div class="product-ratting">
                                                        <span class="shopify-product-reviews-badge" data-id="5822868095133"></span>
                                                    </div>
                                                    <h6>
                                                        <a href="/products/headphone" title="Headphone">Headphone</a>
                                                    </h6>
                                                    <div class="price-box">
                                                        <span class="new-price"><span class=money>Rs. 232.00</span></span>

                                                        <span class="old-price"><span class=money>Rs. 250.00</span></span>

                                                    </div>
                                                    <p class="product-description">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been t...
                                                    </p>

                                                    <div class="product-action">

                                                        <a href="javascript:void(0);" onclick="Shopify.addItem(37032000880797, 1); return false;" class="add-to-cart ajax-spin-cart" data-toggle="tooltip" data-placement="top" title="Add to cart">
                <span>
                    <span class="cart-title"><i class="ti-shopping-cart"></i></span>
                    <span class="cart-loading animated infinite rotateOut"><i class="ion-load-a"></i></span>
                    <span class="cart-added"><i class="ion-android-done"></i></span>
                    <span class="cart-unavailable"><i class="ion-android-alert"></i></span>
                </span>
                                                        </a>

                                                        <a href="javascript:void(0);" onclick="quiqview('headphone')" class="quick-view" data-toggle="tooltip" data-placement="top" title="Quickview">
                                                            <i class="ti-eye"></i>
                                                        </a>

                                                        <a class="wishlist" href="/account/login" title="Wishlist" data-toggle="tooltip" data-placement="top" title="Wishlist">
                                                            <i class="ti-heart"></i>
                                                        </a>

                                                    </div>

                                                </div>
                                            </div>
                                            <style>
                                                a.add-to-cart.disabled{
                                                    color: #eaeaea;
                                                    background-color: #ababab;
                                                    opacity: .65;
                                                    pointer-events: none;
                                                }
                                            </style>
                                        </div>

                                        <div class="swiper-slide">
                                            <div class="single-product-wrap ">
                                                <div class="product-image ">
                                                    <a class="pro-img" href="/products/mouse">
                                                        <img class="img-fluid img1" src="//cdn.shopify.com/s/files/1/0509/6331/6893/products/pro31_eacb8fbe-be63-4404-8e9f-5297769290b7_300X350_crop_center.jpg?v=1606987707" alt="Mouse">
                                                        <img class="img-fluid img2" src="//cdn.shopify.com/s/files/1/0509/6331/6893/products/pro33_300X350_crop_center.jpg?v=1606987711" alt="Mouse" />
                                                    </a>
                                                    <div class="product-label">
















                                                        <span class="new-title">New</span>





                                                        <span class="percent-count">-17%</span>



                                                    </div>

                                                    <div class="product-action">

                                                        <a href="javascript:void(0);" onclick="Shopify.addItem(37032005435549, 1); return false;" class="add-to-cart ajax-spin-cart" data-toggle="tooltip" data-placement="top" title="Add to cart">
                <span>
                    <span class="cart-title"><i class="ti-shopping-cart"></i></span>
                    <span class="cart-loading animated infinite rotateOut"><i class="ion-load-a"></i></span>
                    <span class="cart-added"><i class="ion-android-done"></i></span>
                    <span class="cart-unavailable"><i class="ion-android-alert"></i></span>
                </span>
                                                        </a>

                                                        <a href="javascript:void(0);" onclick="quiqview('mouse')" class="quick-view" data-toggle="tooltip" data-placement="top" title="Quickview">
                                                            <i class="ti-eye"></i>
                                                        </a>

                                                        <a class="wishlist" href="/account/login" title="Wishlist" data-toggle="tooltip" data-placement="top" title="Wishlist">
                                                            <i class="ti-heart"></i>
                                                        </a>

                                                    </div>

                                                </div>
                                                <div class="product-content">
                                                    <div class="product-ratting">
                                                        <span class="shopify-product-reviews-badge" data-id="5822869012637"></span>
                                                    </div>
                                                    <h6>
                                                        <a href="/products/mouse" title="Mouse">Mouse</a>
                                                    </h6>
                                                    <div class="price-box">
                                                        <span class="new-price"><span class=money>Rs. 25.00</span></span>

                                                        <span class="old-price"><span class=money>Rs. 30.00</span></span>

                                                    </div>
                                                    <p class="product-description">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been t...
                                                    </p>

                                                    <div class="product-action">

                                                        <a href="javascript:void(0);" onclick="Shopify.addItem(37032005435549, 1); return false;" class="add-to-cart ajax-spin-cart" data-toggle="tooltip" data-placement="top" title="Add to cart">
                <span>
                    <span class="cart-title"><i class="ti-shopping-cart"></i></span>
                    <span class="cart-loading animated infinite rotateOut"><i class="ion-load-a"></i></span>
                    <span class="cart-added"><i class="ion-android-done"></i></span>
                    <span class="cart-unavailable"><i class="ion-android-alert"></i></span>
                </span>
                                                        </a>

                                                        <a href="javascript:void(0);" onclick="quiqview('mouse')" class="quick-view" data-toggle="tooltip" data-placement="top" title="Quickview">
                                                            <i class="ti-eye"></i>
                                                        </a>

                                                        <a class="wishlist" href="/account/login" title="Wishlist" data-toggle="tooltip" data-placement="top" title="Wishlist">
                                                            <i class="ti-heart"></i>
                                                        </a>

                                                    </div>

                                                </div>
                                            </div>
                                            <style>
                                                a.add-to-cart.disabled{
                                                    color: #eaeaea;
                                                    background-color: #ababab;
                                                    opacity: .65;
                                                    pointer-events: none;
                                                }
                                            </style>
                                        </div>

                                        <div class="swiper-slide">
                                            <div class="single-product-wrap ">
                                                <div class="product-image ">
                                                    <a class="pro-img" href="/products/camera">
                                                        <img class="img-fluid img1" src="//cdn.shopify.com/s/files/1/0509/6331/6893/products/pro39_300X350_crop_center.jpg?v=1606986847" alt="Camera">
                                                        <img class="img-fluid img2" src="//cdn.shopify.com/s/files/1/0509/6331/6893/products/pro38_300X350_crop_center.jpg?v=1606986847" alt="Camera" />
                                                    </a>
                                                    <div class="product-label">














                                                        <span class="sale-title">Sale</span>







                                                        <span class="percent-count">-3%</span>



                                                    </div>

                                                    <div class="product-action">

                                                        <a href="javascript:void(0);" onclick="Shopify.addItem(37032002584733, 1); return false;" class="add-to-cart ajax-spin-cart" data-toggle="tooltip" data-placement="top" title="Add to cart">
                <span>
                    <span class="cart-title"><i class="ti-shopping-cart"></i></span>
                    <span class="cart-loading animated infinite rotateOut"><i class="ion-load-a"></i></span>
                    <span class="cart-added"><i class="ion-android-done"></i></span>
                    <span class="cart-unavailable"><i class="ion-android-alert"></i></span>
                </span>
                                                        </a>

                                                        <a href="javascript:void(0);" onclick="quiqview('camera')" class="quick-view" data-toggle="tooltip" data-placement="top" title="Quickview">
                                                            <i class="ti-eye"></i>
                                                        </a>

                                                        <a class="wishlist" href="/account/login" title="Wishlist" data-toggle="tooltip" data-placement="top" title="Wishlist">
                                                            <i class="ti-heart"></i>
                                                        </a>

                                                    </div>

                                                </div>
                                                <div class="product-content">
                                                    <div class="product-ratting">
                                                        <span class="shopify-product-reviews-badge" data-id="5822868455581"></span>
                                                    </div>
                                                    <h6>
                                                        <a href="/products/camera" title="Camera">Camera</a>
                                                    </h6>
                                                    <div class="price-box">
                                                        <span class="new-price"><span class=money>Rs. 150.00</span></span>

                                                        <span class="old-price"><span class=money>Rs. 155.00</span></span>

                                                    </div>
                                                    <p class="product-description">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been t...
                                                    </p>

                                                    <div class="product-action">

                                                        <a href="javascript:void(0);" onclick="Shopify.addItem(37032002584733, 1); return false;" class="add-to-cart ajax-spin-cart" data-toggle="tooltip" data-placement="top" title="Add to cart">
                <span>
                    <span class="cart-title"><i class="ti-shopping-cart"></i></span>
                    <span class="cart-loading animated infinite rotateOut"><i class="ion-load-a"></i></span>
                    <span class="cart-added"><i class="ion-android-done"></i></span>
                    <span class="cart-unavailable"><i class="ion-android-alert"></i></span>
                </span>
                                                        </a>

                                                        <a href="javascript:void(0);" onclick="quiqview('camera')" class="quick-view" data-toggle="tooltip" data-placement="top" title="Quickview">
                                                            <i class="ti-eye"></i>
                                                        </a>

                                                        <a class="wishlist" href="/account/login" title="Wishlist" data-toggle="tooltip" data-placement="top" title="Wishlist">
                                                            <i class="ti-heart"></i>
                                                        </a>

                                                    </div>

                                                </div>
                                            </div>
                                            <style>
                                                a.add-to-cart.disabled{
                                                    color: #eaeaea;
                                                    background-color: #ababab;
                                                    opacity: .65;
                                                    pointer-events: none;
                                                }
                                            </style>
                                        </div>

                                        <div class="swiper-slide">
                                            <div class="single-product-wrap ">
                                                <div class="product-image ">
                                                    <a class="pro-img" href="/products/pen-drive">
                                                        <img class="img-fluid img1" src="//cdn.shopify.com/s/files/1/0509/6331/6893/products/pro48_300X350_crop_center.jpg?v=1606987770" alt="Pen drive">
                                                        <img class="img-fluid img2" src="//cdn.shopify.com/s/files/1/0509/6331/6893/products/pro49_300X350_crop_center.jpg?v=1606987770" alt="Pen drive" />
                                                    </a>
                                                    <div class="product-label">














                                                        <span class="sale-title">Sale</span>







                                                        <span class="percent-count">-17%</span>



                                                    </div>

                                                    <div class="product-action">

                                                        <a href="javascript:void(0);" onclick="Shopify.addItem(37031999930525, 1); return false;" class="add-to-cart ajax-spin-cart" data-toggle="tooltip" data-placement="top" title="Add to cart">
                <span>
                    <span class="cart-title"><i class="ti-shopping-cart"></i></span>
                    <span class="cart-loading animated infinite rotateOut"><i class="ion-load-a"></i></span>
                    <span class="cart-added"><i class="ion-android-done"></i></span>
                    <span class="cart-unavailable"><i class="ion-android-alert"></i></span>
                </span>
                                                        </a>

                                                        <a href="javascript:void(0);" onclick="quiqview('pen-drive')" class="quick-view" data-toggle="tooltip" data-placement="top" title="Quickview">
                                                            <i class="ti-eye"></i>
                                                        </a>

                                                        <a class="wishlist" href="/account/login" title="Wishlist" data-toggle="tooltip" data-placement="top" title="Wishlist">
                                                            <i class="ti-heart"></i>
                                                        </a>

                                                    </div>

                                                </div>
                                                <div class="product-content">
                                                    <div class="product-ratting">
                                                        <span class="shopify-product-reviews-badge" data-id="5822867964061"></span>
                                                    </div>
                                                    <h6>
                                                        <a href="/products/pen-drive" title="Pen drive">Pen drive</a>
                                                    </h6>
                                                    <div class="price-box">
                                                        <span class="new-price"><span class=money>Rs. 100.00</span></span>

                                                        <span class="old-price"><span class=money>Rs. 120.00</span></span>

                                                    </div>
                                                    <p class="product-description">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been t...
                                                    </p>

                                                    <div class="product-action">

                                                        <a href="javascript:void(0);" onclick="Shopify.addItem(37031999930525, 1); return false;" class="add-to-cart ajax-spin-cart" data-toggle="tooltip" data-placement="top" title="Add to cart">
                <span>
                    <span class="cart-title"><i class="ti-shopping-cart"></i></span>
                    <span class="cart-loading animated infinite rotateOut"><i class="ion-load-a"></i></span>
                    <span class="cart-added"><i class="ion-android-done"></i></span>
                    <span class="cart-unavailable"><i class="ion-android-alert"></i></span>
                </span>
                                                        </a>

                                                        <a href="javascript:void(0);" onclick="quiqview('pen-drive')" class="quick-view" data-toggle="tooltip" data-placement="top" title="Quickview">
                                                            <i class="ti-eye"></i>
                                                        </a>

                                                        <a class="wishlist" href="/account/login" title="Wishlist" data-toggle="tooltip" data-placement="top" title="Wishlist">
                                                            <i class="ti-heart"></i>
                                                        </a>

                                                    </div>

                                                </div>
                                            </div>
                                            <style>
                                                a.add-to-cart.disabled{
                                                    color: #eaeaea;
                                                    background-color: #ababab;
                                                    opacity: .65;
                                                    pointer-events: none;
                                                }
                                            </style>
                                        </div>

                                    </div>
                                    <div class="swiper-buttons">
                                        <button class="swiper-prev"><i class="fa fa-angle-left"></i></button>
                                        <button class="swiper-next"><i class="fa fa-angle-right"></i></button>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- product-area end -->
        <script>
            var swiper = new Swiper('.swiper-container#feture_pro_tab', {
                slidesPerColumn: 2,
                slidesPerView: 4,
                spaceBetween: 30,
                observer: true,
                observeParents: true,navigation: {
                    nextEl: '.swiper-next',
                    prevEl: '.swiper-prev',
                },
                breakpoints: {
                    0: {
                        slidesPerView: 2,
                        spaceBetween: 15
                    },
                    640: {
                        slidesPerView: 2,
                        spaceBetween: 15
                    },
                    768: {
                        slidesPerView: 3
                    },
                    979: {
                        slidesPerView: 3
                    },
                    1199: {
                        slidesPerView: 4
                    }
                }
            });
        </script>

        <style>
            .product-tab-ptb {
                padding-top: 60px;
                padding-bottom: 0px;
                background-color: rgba(0,0,0,0);
            }
            @media (max-width: 767px) {
                .product-tab-ptb {
                    padding-top: 40px;
                    padding-bottom: 0px;
                }
        </style></div><div id="shopify-section-16063068571823b007" class="shopify-section"><!-- banner-area start -->
        <section class="banner-grid banner1">
            <div class="container">
                <div class="row">

                    <div class="col-xl-6 col-lg-6 col-md-6 col-12 nth-child">
                        <div class="banner-block">
                            <a href="/collections/electronic" class="banner-hover">
                                <img class="img-fluid" src="//cdn.shopify.com/s/files/1/0509/6331/6893/files/banner-latest-new11.jpg?v=1607058454">
                            </a>
                            <div class="banner-content banner-text-right banner-content-right">

                                <h6>Diffuser shaped stove</h6>



                                <span>20% off</span>



                                <a href="/collections/electronic" class="btn btn-style3">Shop Now</a>

                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6 col-lg-6 col-md-6 col-12 nth-child">
                        <div class="banner-block">
                            <a href="/collections/headphone" class="banner-hover">
                                <img class="img-fluid" src="//cdn.shopify.com/s/files/1/0509/6331/6893/files/banner-latest-new2.jpg?v=1606985950">
                            </a>
                            <div class="banner-content banner-text-right banner-content-right">

                                <h6>Bluetooth Earbuds</h6>



                                <span>50% Off</span>



                                <a href="/collections/headphone" class="btn btn-style3">Shop now</a>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- banner-area end -->

        <style>
            .banner1{
                padding-top: 60px;
                padding-bottom: 0px;
            }
            @media(max-width: 767px){
                .banner1{
                    padding-top: 40px;
                    padding-bottom: 0px;
                }
            }

            @media(max-width: 767px){
                .banner-grid.banner1 .nth-child{
                    margin-top: 15px;
                }
                .banner-grid.banner1 .nth-child:first-child{
                    margin-top: 0px;
                }
            }

            .banner1 .banner-block{
                position: relative;
            }
            .banner1 .banner-block .banner-content{
                width: calc(60% - 30px);
                position: absolute;
                bottom: 50%;
                transform: translateY(50%);
            }
            @media (max-width: 1199px) {
                .banner1 .banner-block .banner-content{
                    width: calc(80% - 30px);
                }
            }
            @media (max-width: 1199px) {
                .banner1 .banner-block .banner-content{
                    width: calc(90% - 30px);
                }
            }
            .banner1 .banner-block .banner-content.banner-content-left{left: 30px;}
            .banner1 .banner-block .banner-content.banner-content-right{right: 30px;}
            .banner1 .banner-block .banner-content.banner-content-center{
                left: 30px;
                right: 30px;
                margin: 0 auto;
            }
            .banner1 .banner-block .banner-content.banner-text-left{text-align: left;}
            .banner1 .banner-block .banner-content.banner-text-right{text-align: right;}
            .banner1 .banner-block .banner-content.banner-text-center{
                text-align: center;
            }
            @media (max-width: 1199px) {
                .banner1 .banner-block .banner-content.banner-content-left{left: 15px;}
                .banner1 .banner-block .banner-content.banner-content-right{right: 15px;}
                .banner1 .banner-block .banner-content.banner-content-center{
                    left: 15px;
                    right: 15px;
                    margin: 0 auto;
                }
            }
            /* banner text css */
            .banner1 .banner-block .banner-content h6{
                font-size: 18px;
                text-transform: uppercase;
                font-weight: 600;
                line-height: 1;
            }
            .banner1 .banner-block .banner-content span{
                display: block;
                color: #222;
                font-size: 16px;
                margin-top: 25px;
                text-transform: uppercase;
                font-weight: 600;
                line-height: 1;
            }
            .banner1 .banner-block .banner-content a{
                margin-top: 27px;
            }
            @media (max-width: 1199px) {}
            @media (max-width: 991px) {
                .banner1 .banner-block .banner-content span{
                    margin-top: 15px;
                }
                .banner1 .banner-block .banner-content a{
                    margin-top: 16px;
                }
            }
            @media (max-width: 767px) {
                .banner1 .banner-block .banner-content span{
                    font-size: 14px;
                }
            }
        </style></div><div id="shopify-section-1602497780788" class="shopify-section"><section class="our-service-area" >
            <div class="container">
                <div class="row">
                    <div class="col">
                        <ul class="single-service">

                            <li class="ser-box">
                                <div class="ser-block">
                                    <a href="javascript:void(0)">

                                        <img class="img-fluid img1" src="//cdn.shopify.com/s/files/1/0509/6331/6893/files/service-icon1_45x45_crop_center.png?v=1605082532">


                                    </a>
                                    <div class="service-text">

                                        <h6>Free Fast Delivery</h6>


                                        <p>Fast Order Delivery Tracking</p>

                                    </div>
                                </div>
                            </li>

                            <li class="ser-box">
                                <div class="ser-block">
                                    <a href="javascript:void(0)">

                                        <img class="img-fluid img1" src="//cdn.shopify.com/s/files/1/0509/6331/6893/files/service-icon2_45x45_crop_center.png?v=1605082549">


                                    </a>
                                    <div class="service-text">

                                        <h6>24 X 7 Supports</h6>


                                        <p>If You Need Help, We Offer</p>

                                    </div>
                                </div>
                            </li>

                            <li class="ser-box">
                                <div class="ser-block">
                                    <a href="javascript:void(0)">

                                        <img class="img-fluid img1" src="//cdn.shopify.com/s/files/1/0509/6331/6893/files/service-icon3_45x45_crop_center.png?v=1605082568">


                                    </a>
                                    <div class="service-text">

                                        <h6>Best Quality</h6>


                                        <p>The Best Quality Squishies</p>

                                    </div>
                                </div>
                            </li>

                            <li class="ser-box">
                                <div class="ser-block">
                                    <a href="javascript:void(0)">

                                        <img class="img-fluid img1" src="//cdn.shopify.com/s/files/1/0509/6331/6893/files/service-icon4_45x45_crop_center.png?v=1605082594">


                                    </a>
                                    <div class="service-text">

                                        <h6>Gift Voucher</h6>


                                        <p>Terms And Conditions For</p>

                                    </div>
                                </div>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <style>
            .our-service-area {
                padding-top:60px;
                padding-bottom:0px;




            }
            @media (max-width: 767px) {
                .our-service-area {
                    padding-top:40px;
                    padding-bottom:0px;
                }
            }
            ul.single-service{
                display: flex;
                -ms-flex-wrap: wrap;
                flex-wrap: wrap;
            }
            ul.single-service li{
                width: 25%;
            }
            ul.single-service li .ser-block{
                display: flex;
                align-items: center;
                justify-content: center;
                flex-direction: column;
            }
            ul.single-service li.ser-box .ser-block a{
                display: block;
                color: #2f2f2f;
                font-size: 45px;
                position: relative;
                overflow: hidden;
                line-height: 0;
            }
            ul.single-service li.ser-box .ser-block a img.img1{

            }
            ul.single-service li.ser-box .ser-block a img.img2{
                position: absolute;left: 0;
                -webkit-transform: translateX(45px);
                -o-transform: translateX(45px);
                transform: translateX(45px);opacity: 0;
                visibility: hidden;
            }
            ul.single-service li.ser-box:hover .ser-block a img.img1{
                -webkit-transform: rotateY(-360deg);
                -o-transform: rotateY(-360deg);
                transform: rotateY(-360deg);
            }
            ul.single-service li.ser-box:hover .ser-block a img.img2{
                opacity: 1;
                visibility: visible;
                -webkit-transform: translateX(0px);
                -o-transform: translateX(0px);
                transform: translateX(0px);
            }
            ul.single-service li.ser-box .ser-block a img,
            ul.single-service li.ser-box:hover .ser-block a img{
                -webkit-transition: all 0.3s ease-in-out 0s;
                -o-transition: all 0.3s ease-in-out 0s;
                transition: all 0.3s ease-in-out 0s;
            }
            ul.single-service li.ser-box .ser-block .service-text{
                margin-top: 28px;
                text-align: center;
            }
            ul.single-service li.ser-box .ser-block h6{
                font-size: 18px;
                text-transform: capitalize;
                line-height: 1;
            }
            ul.single-service li.ser-box .ser-block p{
                color: #666;
                margin-top: 7px;
                text-transform: capitalize;
                overflow: hidden;
                white-space: nowrap;
                text-overflow: ellipsis;
            }
            @media (max-width: 1199px) {
                ul.single-service{
                    -ms-flex-wrap: nowrap;
                    flex-wrap: nowrap;
                    overflow-x: auto;
                    scrollbar-width: thin;
                    -webkit-scrollbar-width: thin;
                }
                ul.single-service::-webkit-scrollbar {
                    height: 1px;
                }
                ul.single-service li.ser-box{
                    min-width: 270px;
                }
            }
            @media (max-width: 767px) {
                ul.single-service li.ser-box .ser-block .service-text{
                    margin-top: 18px;
                }
            }
        </style></div><div id="shopify-section-1601375672118" class="shopify-section"><section class="collection-category">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12">
                        <div class="section-capture">
                            <div class="section-title">

                                <h2>Special Products</h2>


                            </div>
                        </div>

                        <div class="collection-slider owl-carousel owl-theme" id="pro-special">


                            <div class="item">
                                <div class="single-product-wrap stock-out">
                                    <div class="product-image stock-out">
                                        <a class="pro-img" href="/products/refrigerator">
                                            <img class="img-fluid img1" src="//cdn.shopify.com/s/files/1/0509/6331/6893/products/pro58_300X350_crop_center.jpg?v=1606987893" alt="Refrigerator">
                                            <img class="img-fluid img2" src="//cdn.shopify.com/s/files/1/0509/6331/6893/products/pro59_300X350_crop_center.jpg?v=1606987893" alt="Refrigerator" />
                                        </a>
                                        <div class="product-label">










                                            <span class="soldout-title">Soldout</span>
                                        </div>

                                    </div>
                                    <div class="product-content">
                                        <div class="product-ratting">
                                            <span class="shopify-product-reviews-badge" data-id="5822868979869"></span>
                                        </div>
                                        <h6>
                                            <a href="/products/refrigerator" title="Refrigerator">Refrigerator</a>
                                        </h6>
                                        <div class="price-box">
                                            <span class="new-price"><span class=money>Rs. 120.00</span></span>

                                            <span class="old-price"><span class=money>Rs. 130.00</span></span>

                                        </div>
                                        <p class="product-description">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been t...
                                        </p>

                                    </div>
                                </div>
                                <style>
                                    a.add-to-cart.disabled{
                                        color: #eaeaea;
                                        background-color: #ababab;
                                        opacity: .65;
                                        pointer-events: none;
                                    }
                                </style>
                            </div>

                            <div class="item">
                                <div class="single-product-wrap ">
                                    <div class="product-image ">
                                        <a class="pro-img" href="/products/jbl-speaker">
                                            <img class="img-fluid img1" src="//cdn.shopify.com/s/files/1/0509/6331/6893/products/pro37_9c497408-cd03-4ba8-b516-981c770bbaae_300X350_crop_center.jpg?v=1606987296" alt="JBL Speaker">
                                            <img class="img-fluid img2" src="//cdn.shopify.com/s/files/1/0509/6331/6893/products/pro36_20b3e4a6-54ec-42a8-a760-3f40b78c2bc9_300X350_crop_center.jpg?v=1606987296" alt="JBL Speaker" />
                                        </a>
                                        <div class="product-label">
















                                            <span class="new-title">New</span>





                                        </div>

                                        <div class="product-action">

                                            <a href="javascript:void(0);" onclick="Shopify.addItem(37032003666077, 1); return false;" class="add-to-cart ajax-spin-cart" data-toggle="tooltip" data-placement="top" title="Add to cart">
                <span>
                    <span class="cart-title"><i class="ti-shopping-cart"></i></span>
                    <span class="cart-loading animated infinite rotateOut"><i class="ion-load-a"></i></span>
                    <span class="cart-added"><i class="ion-android-done"></i></span>
                    <span class="cart-unavailable"><i class="ion-android-alert"></i></span>
                </span>
                                            </a>

                                            <a href="javascript:void(0);" onclick="quiqview('jbl-speaker')" class="quick-view" data-toggle="tooltip" data-placement="top" title="Quickview">
                                                <i class="ti-eye"></i>
                                            </a>

                                            <a class="wishlist" href="/account/login" title="Wishlist" data-toggle="tooltip" data-placement="top" title="Wishlist">
                                                <i class="ti-heart"></i>
                                            </a>

                                        </div>

                                    </div>
                                    <div class="product-content">
                                        <div class="product-ratting">
                                            <span class="shopify-product-reviews-badge" data-id="5822868717725"></span>
                                        </div>
                                        <h6>
                                            <a href="/products/jbl-speaker" title="JBL Speaker">JBL Speaker</a>
                                        </h6>
                                        <div class="price-box">
                                            <span class="new-price"><span class=money>Rs. 60.00</span></span>

                                        </div>
                                        <p class="product-description">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been t...
                                        </p>

                                        <div class="product-action">

                                            <a href="javascript:void(0);" onclick="Shopify.addItem(37032003666077, 1); return false;" class="add-to-cart ajax-spin-cart" data-toggle="tooltip" data-placement="top" title="Add to cart">
                <span>
                    <span class="cart-title"><i class="ti-shopping-cart"></i></span>
                    <span class="cart-loading animated infinite rotateOut"><i class="ion-load-a"></i></span>
                    <span class="cart-added"><i class="ion-android-done"></i></span>
                    <span class="cart-unavailable"><i class="ion-android-alert"></i></span>
                </span>
                                            </a>

                                            <a href="javascript:void(0);" onclick="quiqview('jbl-speaker')" class="quick-view" data-toggle="tooltip" data-placement="top" title="Quickview">
                                                <i class="ti-eye"></i>
                                            </a>

                                            <a class="wishlist" href="/account/login" title="Wishlist" data-toggle="tooltip" data-placement="top" title="Wishlist">
                                                <i class="ti-heart"></i>
                                            </a>

                                        </div>

                                    </div>
                                </div>
                                <style>
                                    a.add-to-cart.disabled{
                                        color: #eaeaea;
                                        background-color: #ababab;
                                        opacity: .65;
                                        pointer-events: none;
                                    }
                                </style>
                            </div>

                            <div class="item">
                                <div class="single-product-wrap ">
                                    <div class="product-image ">
                                        <a class="pro-img" href="/products/laptop">
                                            <img class="img-fluid img1" src="//cdn.shopify.com/s/files/1/0509/6331/6893/products/pro11_eca584c8-e1e1-404d-996d-af35cc9909c2_300X350_crop_center.jpg?v=1606987596" alt="Laptop">
                                            <img class="img-fluid img2" src="//cdn.shopify.com/s/files/1/0509/6331/6893/products/pro12_300X350_crop_center.jpg?v=1606987596" alt="Laptop" />
                                        </a>
                                        <div class="product-label">
















                                            <span class="new-title">New</span>





                                            <span class="percent-count">-5%</span>



                                        </div>

                                        <div class="product-action">

                                            <a href="javascript:void(0);" onclick="Shopify.addItem(37031998619805, 1); return false;" class="add-to-cart ajax-spin-cart" data-toggle="tooltip" data-placement="top" title="Add to cart">
                <span>
                    <span class="cart-title"><i class="ti-shopping-cart"></i></span>
                    <span class="cart-loading animated infinite rotateOut"><i class="ion-load-a"></i></span>
                    <span class="cart-added"><i class="ion-android-done"></i></span>
                    <span class="cart-unavailable"><i class="ion-android-alert"></i></span>
                </span>
                                            </a>

                                            <a href="javascript:void(0);" onclick="quiqview('laptop')" class="quick-view" data-toggle="tooltip" data-placement="top" title="Quickview">
                                                <i class="ti-eye"></i>
                                            </a>

                                            <a class="wishlist" href="/account/login" title="Wishlist" data-toggle="tooltip" data-placement="top" title="Wishlist">
                                                <i class="ti-heart"></i>
                                            </a>

                                        </div>

                                    </div>
                                    <div class="product-content">
                                        <div class="product-ratting">
                                            <span class="shopify-product-reviews-badge" data-id="5822867701917"></span>
                                        </div>
                                        <h6>
                                            <a href="/products/laptop" title="Laptop">Laptop</a>
                                        </h6>
                                        <div class="price-box">
                                            <span class="new-price"><span class=money>Rs. 200.00</span></span>

                                            <span class="old-price"><span class=money>Rs. 210.00</span></span>

                                        </div>
                                        <p class="product-description">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been t...
                                        </p>

                                        <div class="product-action">

                                            <a href="javascript:void(0);" onclick="Shopify.addItem(37031998619805, 1); return false;" class="add-to-cart ajax-spin-cart" data-toggle="tooltip" data-placement="top" title="Add to cart">
                <span>
                    <span class="cart-title"><i class="ti-shopping-cart"></i></span>
                    <span class="cart-loading animated infinite rotateOut"><i class="ion-load-a"></i></span>
                    <span class="cart-added"><i class="ion-android-done"></i></span>
                    <span class="cart-unavailable"><i class="ion-android-alert"></i></span>
                </span>
                                            </a>

                                            <a href="javascript:void(0);" onclick="quiqview('laptop')" class="quick-view" data-toggle="tooltip" data-placement="top" title="Quickview">
                                                <i class="ti-eye"></i>
                                            </a>

                                            <a class="wishlist" href="/account/login" title="Wishlist" data-toggle="tooltip" data-placement="top" title="Wishlist">
                                                <i class="ti-heart"></i>
                                            </a>

                                        </div>

                                    </div>
                                </div>
                                <style>
                                    a.add-to-cart.disabled{
                                        color: #eaeaea;
                                        background-color: #ababab;
                                        opacity: .65;
                                        pointer-events: none;
                                    }
                                </style>
                            </div>

                            <div class="item">
                                <div class="single-product-wrap ">
                                    <div class="product-image ">
                                        <a class="pro-img" href="/products/boat">
                                            <img class="img-fluid img1" src="//cdn.shopify.com/s/files/1/0509/6331/6893/products/pro3_66116319-ea9e-48c4-aee5-c0de6bf84624_300X350_crop_center.jpg?v=1606986643" alt="Boat">
                                            <img class="img-fluid img2" src="//cdn.shopify.com/s/files/1/0509/6331/6893/products/pro2_2c303381-fe9a-46fb-81cf-d0e8963ae517_300X350_crop_center.jpg?v=1606986647" alt="Boat" />
                                        </a>
                                        <div class="product-label">














                                            <span class="sale-title">Sale</span>







                                            <span class="percent-count">-6%</span>



                                        </div>

                                        <div class="product-action">

                                            <a href="javascript:void(0);" onclick="Shopify.addItem(37031997571229, 1); return false;" class="add-to-cart ajax-spin-cart" data-toggle="tooltip" data-placement="top" title="Add to cart">
                <span>
                    <span class="cart-title"><i class="ti-shopping-cart"></i></span>
                    <span class="cart-loading animated infinite rotateOut"><i class="ion-load-a"></i></span>
                    <span class="cart-added"><i class="ion-android-done"></i></span>
                    <span class="cart-unavailable"><i class="ion-android-alert"></i></span>
                </span>
                                            </a>

                                            <a href="javascript:void(0);" onclick="quiqview('boat')" class="quick-view" data-toggle="tooltip" data-placement="top" title="Quickview">
                                                <i class="ti-eye"></i>
                                            </a>

                                            <a class="wishlist" href="/account/login" title="Wishlist" data-toggle="tooltip" data-placement="top" title="Wishlist">
                                                <i class="ti-heart"></i>
                                            </a>

                                        </div>

                                    </div>
                                    <div class="product-content">
                                        <div class="product-ratting">
                                            <span class="shopify-product-reviews-badge" data-id="5822867472541"></span>
                                        </div>
                                        <h6>
                                            <a href="/products/boat" title="Boat">Boat</a>
                                        </h6>
                                        <div class="price-box">
                                            <span class="new-price"><span class=money>Rs. 150.00</span></span>

                                            <span class="old-price"><span class=money>Rs. 160.00</span></span>

                                        </div>
                                        <p class="product-description">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been t...
                                        </p>

                                        <div class="product-action">

                                            <a href="javascript:void(0);" onclick="Shopify.addItem(37031997571229, 1); return false;" class="add-to-cart ajax-spin-cart" data-toggle="tooltip" data-placement="top" title="Add to cart">
                <span>
                    <span class="cart-title"><i class="ti-shopping-cart"></i></span>
                    <span class="cart-loading animated infinite rotateOut"><i class="ion-load-a"></i></span>
                    <span class="cart-added"><i class="ion-android-done"></i></span>
                    <span class="cart-unavailable"><i class="ion-android-alert"></i></span>
                </span>
                                            </a>

                                            <a href="javascript:void(0);" onclick="quiqview('boat')" class="quick-view" data-toggle="tooltip" data-placement="top" title="Quickview">
                                                <i class="ti-eye"></i>
                                            </a>

                                            <a class="wishlist" href="/account/login" title="Wishlist" data-toggle="tooltip" data-placement="top" title="Wishlist">
                                                <i class="ti-heart"></i>
                                            </a>

                                        </div>

                                    </div>
                                </div>
                                <style>
                                    a.add-to-cart.disabled{
                                        color: #eaeaea;
                                        background-color: #ababab;
                                        opacity: .65;
                                        pointer-events: none;
                                    }
                                </style>
                            </div>

                            <div class="item">
                                <div class="single-product-wrap ">
                                    <div class="product-image ">
                                        <a class="pro-img" href="/products/i-phone">
                                            <img class="img-fluid img1" src="//cdn.shopify.com/s/files/1/0509/6331/6893/products/pro15_300X350_crop_center.jpg?v=1606987157" alt="I Phone">
                                            <img class="img-fluid img2" src="//cdn.shopify.com/s/files/1/0509/6331/6893/products/pro18_300X350_crop_center.jpg?v=1606987162" alt="I Phone" />
                                        </a>
                                        <div class="product-label">
















                                            <span class="new-title">New</span>





                                            <span class="percent-count">-2%</span>



                                        </div>

                                        <div class="product-action">

                                            <a href="javascript:void(0);" onclick="Shopify.addItem(37032002125981, 1); return false;" class="add-to-cart ajax-spin-cart" data-toggle="tooltip" data-placement="top" title="Add to cart">
                <span>
                    <span class="cart-title"><i class="ti-shopping-cart"></i></span>
                    <span class="cart-loading animated infinite rotateOut"><i class="ion-load-a"></i></span>
                    <span class="cart-added"><i class="ion-android-done"></i></span>
                    <span class="cart-unavailable"><i class="ion-android-alert"></i></span>
                </span>
                                            </a>

                                            <a href="javascript:void(0);" onclick="quiqview('i-phone')" class="quick-view" data-toggle="tooltip" data-placement="top" title="Quickview">
                                                <i class="ti-eye"></i>
                                            </a>

                                            <a class="wishlist" href="/account/login" title="Wishlist" data-toggle="tooltip" data-placement="top" title="Wishlist">
                                                <i class="ti-heart"></i>
                                            </a>

                                        </div>

                                    </div>
                                    <div class="product-content">
                                        <div class="product-ratting">
                                            <span class="shopify-product-reviews-badge" data-id="5822868193437"></span>
                                        </div>
                                        <h6>
                                            <a href="/products/i-phone" title="I Phone">I Phone</a>
                                        </h6>
                                        <div class="price-box">
                                            <span class="new-price"><span class=money>Rs. 225.00</span></span>

                                            <span class="old-price"><span class=money>Rs. 230.00</span></span>

                                        </div>
                                        <p class="product-description">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been t...
                                        </p>

                                        <div class="product-action">

                                            <a href="javascript:void(0);" onclick="Shopify.addItem(37032002125981, 1); return false;" class="add-to-cart ajax-spin-cart" data-toggle="tooltip" data-placement="top" title="Add to cart">
                <span>
                    <span class="cart-title"><i class="ti-shopping-cart"></i></span>
                    <span class="cart-loading animated infinite rotateOut"><i class="ion-load-a"></i></span>
                    <span class="cart-added"><i class="ion-android-done"></i></span>
                    <span class="cart-unavailable"><i class="ion-android-alert"></i></span>
                </span>
                                            </a>

                                            <a href="javascript:void(0);" onclick="quiqview('i-phone')" class="quick-view" data-toggle="tooltip" data-placement="top" title="Quickview">
                                                <i class="ti-eye"></i>
                                            </a>

                                            <a class="wishlist" href="/account/login" title="Wishlist" data-toggle="tooltip" data-placement="top" title="Wishlist">
                                                <i class="ti-heart"></i>
                                            </a>

                                        </div>

                                    </div>
                                </div>
                                <style>
                                    a.add-to-cart.disabled{
                                        color: #eaeaea;
                                        background-color: #ababab;
                                        opacity: .65;
                                        pointer-events: none;
                                    }
                                </style>
                            </div>

                            <div class="item">
                                <div class="single-product-wrap ">
                                    <div class="product-image ">
                                        <a class="pro-img" href="/products/watch">
                                            <img class="img-fluid img1" src="//cdn.shopify.com/s/files/1/0509/6331/6893/products/pro20_300X350_crop_center.jpg?v=1606987984" alt="Watch">
                                            <img class="img-fluid img2" src="//cdn.shopify.com/s/files/1/0509/6331/6893/products/pro21_300X350_crop_center.jpg?v=1606987984" alt="Watch" />
                                        </a>
                                        <div class="product-label">

                                     <span class="new-title">New</span>
                                         <span class="percent-count">-22%</span>
                                        </div>
                                        <div class="product-action">
                                            <a href="javascript:void(0);" onclick="Shopify.addItem(37032004419741, 1); return false;" class="add-to-cart ajax-spin-cart" data-toggle="tooltip" data-placement="top" title="Add to cart">
                <span>
                    <span class="cart-title"><i class="ti-shopping-cart"></i></span>
                    <span class="cart-loading animated infinite rotateOut"><i class="ion-load-a"></i></span>
                    <span class="cart-added"><i class="ion-android-done"></i></span>
                    <span class="cart-unavailable"><i class="ion-android-alert"></i></span>
                </span>
                                            </a>
                                            <a href="javascript:void(0);" onclick="quiqview('watch')" class="quick-view" data-toggle="tooltip" data-placement="top" title="Quickview">
                                                <i class="ti-eye"></i>
                                            </a>
                                            <a class="wishlist" href="/account/login" title="Wishlist" data-toggle="tooltip" data-placement="top" title="Wishlist">
                                                <i class="ti-heart"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <div class="product-ratting">
                                            <span class="shopify-product-reviews-badge" data-id="5822868848797"></span>
                                        </div>
                                        <h6>
                                            <a href="/products/watch" title="Watch">Watch</a>
                                        </h6>
                                        <div class="price-box">
                                            <span class="new-price"><span class=money>Rs. 110.00</span></span>

                                            <span class="old-price"><span class=money>Rs. 130.00</span></span>

                                        </div>
                                        <p class="product-description">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been t...
                                        </p>

                                        <div class="product-action">

                                            <a href="javascript:void(0);" onclick="Shopify.addItem(37032004419741, 1); return false;" class="add-to-cart ajax-spin-cart" data-toggle="tooltip" data-placement="top" title="Add to cart">
                <span>
                    <span class="cart-title"><i class="ti-shopping-cart"></i></span>
                    <span class="cart-loading animated infinite rotateOut"><i class="ion-load-a"></i></span>
                    <span class="cart-added"><i class="ion-android-done"></i></span>
                    <span class="cart-unavailable"><i class="ion-android-alert"></i></span>
                </span>
                                            </a>

                                            <a href="javascript:void(0);" onclick="quiqview('watch')" class="quick-view" data-toggle="tooltip" data-placement="top" title="Quickview">
                                                <i class="ti-eye"></i>
                                            </a>

                                            <a class="wishlist" href="/account/login" title="Wishlist" data-toggle="tooltip" data-placement="top" title="Wishlist">
                                                <i class="ti-heart"></i>
                                            </a>

                                        </div>

                                    </div>
                                </div>
                                <style>
                                    a.add-to-cart.disabled{
                                        color: #eaeaea;
                                        background-color: #ababab;
                                        opacity: .65;
                                        pointer-events: none;
                                    }
                                </style>
                            </div>

                            <div class="item">
                                <div class="single-product-wrap ">
                                    <div class="product-image ">
                                        <a class="pro-img" href="/products/earbuds">
                                            <img class="img-fluid img1" src="//cdn.shopify.com/s/files/1/0509/6331/6893/products/pro8_300X350_crop_center.jpg?v=1606987015" alt="Earbuds">
                                            <img class="img-fluid img2" src="//cdn.shopify.com/s/files/1/0509/6331/6893/products/pro9_300X350_crop_center.jpg?v=1606987015" alt="Earbuds" />
                                        </a>
                                        <div class="product-label">
                                       <span class="new-title">New</span>
                                            <span class="percent-count">-8%</span>
                                        </div>
                                        <div class="product-action">

                                            <a href="javascript:void(0);" onclick="Shopify.addItem(37031996981405, 1); return false;" class="add-to-cart ajax-spin-cart" data-toggle="tooltip" data-placement="top" title="Add to cart">
                <span>
                    <span class="cart-title"><i class="ti-shopping-cart"></i></span>
                    <span class="cart-loading animated infinite rotateOut"><i class="ion-load-a"></i></span>
                    <span class="cart-added"><i class="ion-android-done"></i></span>
                    <span class="cart-unavailable"><i class="ion-android-alert"></i></span>
                </span>
                                            </a>
                                            <a href="javascript:void(0);" onclick="quiqview('earbuds')" class="quick-view" data-toggle="tooltip" data-placement="top" title="Quickview">
                                                <i class="ti-eye"></i>
                                            </a>
                                            <a class="wishlist" href="/account/login" title="Wishlist" data-toggle="tooltip" data-placement="top" title="Wishlist">
                                                <i class="ti-heart"></i>
                                            </a>

                                        </div>

                                    </div>
                                    <div class="product-content">
                                        <div class="product-ratting">
                                            <span class="shopify-product-reviews-badge" data-id="5822867341469"></span>
                                        </div>
                                        <h6>
                                            <a href="/products/earbuds" title="Earbuds">Earbuds</a>
                                        </h6>
                                        <div class="price-box">
                                            <span class="new-price"><span class=money>Rs. 120.00</span></span>

                                            <span class="old-price"><span class=money>Rs. 130.00</span></span>

                                        </div>
                                        <p class="product-description">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been t...
                                        </p>

                                        <div class="product-action">

                                            <a href="javascript:void(0);" onclick="Shopify.addItem(37031996981405, 1); return false;" class="add-to-cart ajax-spin-cart" data-toggle="tooltip" data-placement="top" title="Add to cart">
                <span>
                    <span class="cart-title"><i class="ti-shopping-cart"></i></span>
                    <span class="cart-loading animated infinite rotateOut"><i class="ion-load-a"></i></span>
                    <span class="cart-added"><i class="ion-android-done"></i></span>
                    <span class="cart-unavailable"><i class="ion-android-alert"></i></span>
                </span>
                                            </a>

                                            <a href="javascript:void(0);" onclick="quiqview('earbuds')" class="quick-view" data-toggle="tooltip" data-placement="top" title="Quickview">
                                                <i class="ti-eye"></i>
                                            </a>

                                            <a class="wishlist" href="/account/login" title="Wishlist" data-toggle="tooltip" data-placement="top" title="Wishlist">
                                                <i class="ti-heart"></i>
                                            </a>

                                        </div>

                                    </div>
                                </div>
                                <style>
                                    a.add-to-cart.disabled{
                                        color: #eaeaea;
                                        background-color: #ababab;
                                        opacity: .65;
                                        pointer-events: none;
                                    }
                                </style>
                            </div>

                            <div class="item">
                                <div class="single-product-wrap ">
                                    <div class="product-image ">
                                        <a class="pro-img" href="/products/juice-machine">
                                            <img class="img-fluid img1" src="//cdn.shopify.com/s/files/1/0509/6331/6893/products/pro64_300X350_crop_center.jpg?v=1606987366" alt="Juice machine">
                                            <img class="img-fluid img2" src="//cdn.shopify.com/s/files/1/0509/6331/6893/products/pro67_300X350_crop_center.jpg?v=1606987366" alt="Juice machine" />
                                        </a>
                                        <div class="product-label">
                                            <span class="new-title">New</span>
                                            <span class="percent-count">-3%</span>
                                        </div>
                                        <div class="product-action">

                                            <a href="javascript:void(0);" onclick="Shopify.addItem(37031999439005, 1); return false;" class="add-to-cart ajax-spin-cart" data-toggle="tooltip" data-placement="top" title="Add to cart">
                <span>
                    <span class="cart-title"><i class="ti-shopping-cart"></i></span>
                    <span class="cart-loading animated infinite rotateOut"><i class="ion-load-a"></i></span>
                    <span class="cart-added"><i class="ion-android-done"></i></span>
                    <span class="cart-unavailable"><i class="ion-android-alert"></i></span>
                </span>
                                            </a>

                                            <a href="javascript:void(0);" onclick="quiqview('juice-machine')" class="quick-view" data-toggle="tooltip" data-placement="top" title="Quickview">
                                                <i class="ti-eye"></i>
                                            </a>

                                            <a class="wishlist" href="/account/login" title="Wishlist" data-toggle="tooltip" data-placement="top" title="Wishlist">
                                                <i class="ti-heart"></i>
                                            </a>

                                        </div>

                                    </div>
                                    <div class="product-content">
                                        <div class="product-ratting">
                                            <span class="shopify-product-reviews-badge" data-id="5822867865757"></span>
                                        </div>
                                        <h6>
                                            <a href="/products/juice-machine" title="Juice machine">Juice machine</a>
                                        </h6>
                                        <div class="price-box">
                                            <span class="new-price"><span class=money>Rs. 150.00</span></span>

                                            <span class="old-price"><span class=money>Rs. 155.00</span></span>

                                        </div>
                                        <p class="product-description">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been t...
                                        </p>

                                        <div class="product-action">

                                            <a href="javascript:void(0);" onclick="Shopify.addItem(37031999439005, 1); return false;" class="add-to-cart ajax-spin-cart" data-toggle="tooltip" data-placement="top" title="Add to cart">
                <span>
                    <span class="cart-title"><i class="ti-shopping-cart"></i></span>
                    <span class="cart-loading animated infinite rotateOut"><i class="ion-load-a"></i></span>
                    <span class="cart-added"><i class="ion-android-done"></i></span>
                    <span class="cart-unavailable"><i class="ion-android-alert"></i></span>
                </span>
                                            </a>

                                            <a href="javascript:void(0);" onclick="quiqview('juice-machine')" class="quick-view" data-toggle="tooltip" data-placement="top" title="Quickview">
                                                <i class="ti-eye"></i>
                                            </a>

                                            <a class="wishlist" href="/account/login" title="Wishlist" data-toggle="tooltip" data-placement="top" title="Wishlist">
                                                <i class="ti-heart"></i>
                                            </a>

                                        </div>

                                    </div>
                                </div>
                                <style>
                                    a.add-to-cart.disabled{
                                        color: #eaeaea;
                                        background-color: #ababab;
                                        opacity: .65;
                                        pointer-events: none;
                                    }
                                </style>
                            </div>

                            <div class="item">
                                <div class="single-product-wrap ">
                                    <div class="product-image ">
                                        <a class="pro-img" href="/products/headphone">
                                            <img class="img-fluid img1" src="//cdn.shopify.com/s/files/1/0509/6331/6893/products/pro6_9e76ac99-ba1d-43fe-a895-2fa8d1a90b81_300X350_crop_center.jpg?v=1606987093" alt="Headphone">
                                            <img class="img-fluid img2" src="//cdn.shopify.com/s/files/1/0509/6331/6893/products/pro7_767bbe8e-0b76-4faa-944f-21f5efc9600b_300X350_crop_center.jpg?v=1606987093" alt="Headphone" />
                                        </a>
                                        <div class="product-label">

                               <span class="new-title">New</span>

                                         <span class="percent-count">-7%</span>
                                      </div>
                                        <div class="product-action">

                                            <a href="javascript:void(0);" onclick="Shopify.addItem(37032000880797, 1); return false;" class="add-to-cart ajax-spin-cart" data-toggle="tooltip" data-placement="top" title="Add to cart">
                <span>
                    <span class="cart-title"><i class="ti-shopping-cart"></i></span>
                    <span class="cart-loading animated infinite rotateOut"><i class="ion-load-a"></i></span>
                    <span class="cart-added"><i class="ion-android-done"></i></span>
                    <span class="cart-unavailable"><i class="ion-android-alert"></i></span>
                </span>
                                            </a>
                                            <a href="javascript:void(0);" onclick="quiqview('headphone')" class="quick-view" data-toggle="tooltip" data-placement="top" title="Quickview">
                                                <i class="ti-eye"></i>
                                            </a>

                                            <a class="wishlist" href="/account/login" title="Wishlist" data-toggle="tooltip" data-placement="top" title="Wishlist">
                                                <i class="ti-heart"></i>
                                            </a>

                                        </div>

                                    </div>
                                    <div class="product-content">
                                        <div class="product-ratting">
                                            <span class="shopify-product-reviews-badge" data-id="5822868095133"></span>
                                        </div>
                                        <h6>
                                            <a href="/products/headphone" title="Headphone">Headphone</a>
                                        </h6>
                                        <div class="price-box">
                                            <span class="new-price"><span class=money>Rs. 232.00</span></span>

                                            <span class="old-price"><span class=money>Rs. 250.00</span></span>

                                        </div>
                                        <p class="product-description">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been t...
                                        </p>

                                        <div class="product-action">

                                            <a href="javascript:void(0);" onclick="Shopify.addItem(37032000880797, 1); return false;" class="add-to-cart ajax-spin-cart" data-toggle="tooltip" data-placement="top" title="Add to cart">
                <span>
                    <span class="cart-title"><i class="ti-shopping-cart"></i></span>
                    <span class="cart-loading animated infinite rotateOut"><i class="ion-load-a"></i></span>
                    <span class="cart-added"><i class="ion-android-done"></i></span>
                    <span class="cart-unavailable"><i class="ion-android-alert"></i></span>
                </span>
                                            </a>

                                            <a href="javascript:void(0);" onclick="quiqview('headphone')" class="quick-view" data-toggle="tooltip" data-placement="top" title="Quickview">
                                                <i class="ti-eye"></i>
                                            </a>

                                            <a class="wishlist" href="/account/login" title="Wishlist" data-toggle="tooltip" data-placement="top" title="Wishlist">
                                                <i class="ti-heart"></i>
                                            </a>

                                        </div>

                                    </div>
                                </div>
                                <style>
                                    a.add-to-cart.disabled{
                                        color: #eaeaea;
                                        background-color: #ababab;
                                        opacity: .65;
                                        pointer-events: none;
                                    }
                                </style>
                            </div>

                            <div class="item">
                                <div class="single-product-wrap ">
                                    <div class="product-image ">
                                        <a class="pro-img" href="/products/mouse">
                                            <img class="img-fluid img1" src="//cdn.shopify.com/s/files/1/0509/6331/6893/products/pro31_eacb8fbe-be63-4404-8e9f-5297769290b7_300X350_crop_center.jpg?v=1606987707" alt="Mouse">
                                            <img class="img-fluid img2" src="//cdn.shopify.com/s/files/1/0509/6331/6893/products/pro33_300X350_crop_center.jpg?v=1606987711" alt="Mouse" />
                                        </a>
                                        <div class="product-label">
                                         <span class="new-title">New</span>

                                            <span class="percent-count">-17%</span>
                                        </div>

                                        <div class="product-action">

                                            <a href="javascript:void(0);" onclick="Shopify.addItem(37032005435549, 1); return false;" class="add-to-cart ajax-spin-cart" data-toggle="tooltip" data-placement="top" title="Add to cart">
                <span>
                    <span class="cart-title"><i class="ti-shopping-cart"></i></span>
                    <span class="cart-loading animated infinite rotateOut"><i class="ion-load-a"></i></span>
                    <span class="cart-added"><i class="ion-android-done"></i></span>
                    <span class="cart-unavailable"><i class="ion-android-alert"></i></span>
                </span>
                                            </a>

                                            <a href="javascript:void(0);" onclick="quiqview('mouse')" class="quick-view" data-toggle="tooltip" data-placement="top" title="Quickview">
                                                <i class="ti-eye"></i>
                                            </a>

                                            <a class="wishlist" href="/account/login" title="Wishlist" data-toggle="tooltip" data-placement="top" title="Wishlist">
                                                <i class="ti-heart"></i>
                                            </a>

                                        </div>

                                    </div>
                                    <div class="product-content">
                                        <div class="product-ratting">
                                            <span class="shopify-product-reviews-badge" data-id="5822869012637"></span>
                                        </div>
                                        <h6>
                                            <a href="/products/mouse" title="Mouse">Mouse</a>
                                        </h6>
                                        <div class="price-box">
                                            <span class="new-price"><span class=money>Rs. 25.00</span></span>

                                            <span class="old-price"><span class=money>Rs. 30.00</span></span>

                                        </div>
                                        <p class="product-description">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been t...
                                        </p>

                                        <div class="product-action">

                                            <a href="javascript:void(0);" onclick="Shopify.addItem(37032005435549, 1); return false;" class="add-to-cart ajax-spin-cart" data-toggle="tooltip" data-placement="top" title="Add to cart">
                <span>
                    <span class="cart-title"><i class="ti-shopping-cart"></i></span>
                    <span class="cart-loading animated infinite rotateOut"><i class="ion-load-a"></i></span>
                    <span class="cart-added"><i class="ion-android-done"></i></span>
                    <span class="cart-unavailable"><i class="ion-android-alert"></i></span>
                </span>
                                            </a>

                                            <a href="javascript:void(0);" onclick="quiqview('mouse')" class="quick-view" data-toggle="tooltip" data-placement="top" title="Quickview">
                                                <i class="ti-eye"></i>
                                            </a>

                                            <a class="wishlist" href="/account/login" title="Wishlist" data-toggle="tooltip" data-placement="top" title="Wishlist">
                                                <i class="ti-heart"></i>
                                            </a>

                                        </div>

                                    </div>
                                </div>
                                <style>
                                    a.add-to-cart.disabled{
                                        color: #eaeaea;
                                        background-color: #ababab;
                                        opacity: .65;
                                        pointer-events: none;
                                    }
                                </style>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>

        <script type="text/javascript">
            $('#pro-special').owlCarousel({
                loop: false,
                rewind: true,
                margin: 30,
                nav: true,
                navText: ['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'],
                dots: false,// autoplay: true,
                // sautoplayTimeout: 5000,
                // autoplayHoverPause: true,
                responsive:{
                    0:{
                        items: 2,
                        margin: 15
                    },
                    479:{
                        items: 2,
                        margin: 15
                    },
                    768:{
                        items: 3
                    },
                    979:{
                        items: 4
                    },
                    1199: {
                        items: 4
                    }
                }
            });
        </script>


        <style>
            .collection-category{
                padding-top: 60px;
                padding-bottom: 0px;
            }
            @media (max-width: 767px){
                .collection-category {
                    padding-top: 40px;
                    padding-bottom: 0px;
                }
            }
        </style></div><div id="shopify-section-1602494866072" class="shopify-section"><!-- banner-area start -->
        <section class="banner-grid custom-banner">
            <div class="custom-banner-img">
                <ul class="banner-block">
                    <li class="big-banner">
                        <a href="/collections/headphone" class="banner-hover">
                            <img class="img-fluid" src="//cdn.shopify.com/s/files/1/0509/6331/6893/files/full-banner-new12-new.jpg?v=1607058056">
                        </a>
                    </li>
                </ul>
            </div>
        </section>
        <!-- banner-area end -->

        <style>
            .custom-banner{
                padding-top: 60px;
                padding-bottom: 0px;
            }
            @media (max-width: 767px){
                .custom-banner{
                    padding-top: 40px;
                    padding-bottom: 0px;
                }
            }

            .custom-banner ul.banner-block {
                display: flex;margin-left: -30px;}
            .custom-banner ul.banner-block li {margin-left: 30px;}
            @media (max-width: 767px){
                .custom-banner ul.banner-block {
                    flex-direction: column;
                }
                .custom-banner ul.banner-block li {
                    margin-top: 20px;
                }
                .custom-banner ul.banner-block li:first-child {
                    margin-top: 0px;
                }
            }
        </style></div><div id="shopify-section-1601375328465" class="shopify-section"><!-- deal start -->
        <section class="deal-section">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="section-capture">
                            <div class="section-title">

                                <h2>Deal of the day</h2>


                            </div>
                        </div>
                        <div class="deal-slider owl-carousel owl-theme" id="deal-slider">

                            <div class="item">
                                <div class="single-product-wrap">
                                    <div class="product-image">
                                        <a class="pro-img" href="/products/camera">
                                            <img class="img-fluid img1" src="//cdn.shopify.com/s/files/1/0509/6331/6893/products/pro39_350X400_crop_center.jpg?v=1606986847" alt="">
                                        </a>
                                        <div class="product-label">

                                           <span class="sale-title">Sale</span>
                                            <span class="percent-count">-3%</span>
                                        </div>

                                        <div class="product-action">

                                            <a href="javascript:void(0);" onclick="Shopify.addItem(37032002584733, 1); return false;" class="add-to-cart ajax-spin-cart" data-toggle="tooltip" data-placement="top" title="Add to cart">
                <span>
                    <span class="cart-title"><i class="ti-shopping-cart"></i></span>
                    <span class="cart-loading animated infinite rotateOut"><i class="ion-load-a"></i></span>
                    <span class="cart-added"><i class="ion-android-done"></i></span>
                    <span class="cart-unavailable"><i class="ion-android-alert"></i></span>
                </span>
                                            </a>
                                            <a href="javascript:void(0);" onclick="quiqview('camera')" class="quick-view" data-toggle="tooltip" data-placement="top" title="Quickview">
                                                <i class="ti-eye"></i>
                                            </a>

                                            <a class="wishlist" href="/account/login" title="Wishlist" data-toggle="tooltip" data-placement="top" title="Wishlist">
                                                <i class="ti-heart"></i>
                                            </a>

                                        </div>

                                    </div>
                                    <div class="product-content">
                                        <h6><a href="/products/camera" title="Camera">Camera</a></h6>
                                        <div class="product-ratting">
                                            <span class="shopify-product-reviews-badge" data-id="5822868455581"></span>
                                        </div>
                                        <div class="price-box">
                                            <span class="new-price"><span class=money>Rs. 150.00</span></span>

                                            <span class="old-price"><span class=money>Rs. 155.00</span></span>

                                        </div>
                                        <p class="product-description">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lo...
                                        </p>



                                        <div class="timer-section counter-event-5822868455581" id="counter-event" data-enddate="2021/02/25"></div>

                                    </div>
                                </div>
                                <script>
                                    $('.counter-event-5822868455581').countdown($('.counter-event-5822868455581').attr("data-enddate")).on('update.countdown', function (event) {
                                        var $this = $(this).html(event.strftime('' + '<ul class="contdown_row"><li class="countdown_section"><span id="days" class="countdown_timer">%-D</span><span class="countdown_title">Day</span></li>' + '<li class="countdown_section"><span id="hours" class="countdown_timer">%H</span><span class="countdown_title">Hrs</span></li>' + '<li class="countdown_section"><span id="minutes" class="countdown_timer">%M</span><span class="countdown_title">Min</span></li>' + '<li class="countdown_section"><span id="seconds" class="countdown_timer">%S</span><span class="countdown_title">sec</span></li></ul>'))
                                    });
                                </script>
                            </div>

                            <div class="item">
                                <div class="single-product-wrap">
                                    <div class="product-image">
                                        <a class="pro-img" href="/products/pen-drive">
                                            <img class="img-fluid img1" src="//cdn.shopify.com/s/files/1/0509/6331/6893/products/pro48_350X400_crop_center.jpg?v=1606987770" alt="">
                                        </a>
                                        <div class="product-label">
                                            <span class="sale-title">Sale</span>
                                            <span class="percent-count">-17%</span>
                                        </div>
                                        <div class="product-action">

                                            <a href="javascript:void(0);" onclick="Shopify.addItem(37031999930525, 1); return false;" class="add-to-cart ajax-spin-cart" data-toggle="tooltip" data-placement="top" title="Add to cart">
                <span>
                    <span class="cart-title"><i class="ti-shopping-cart"></i></span>
                    <span class="cart-loading animated infinite rotateOut"><i class="ion-load-a"></i></span>
                    <span class="cart-added"><i class="ion-android-done"></i></span>
                    <span class="cart-unavailable"><i class="ion-android-alert"></i></span>
                </span>
                                            </a>

                                            <a href="javascript:void(0);" onclick="quiqview('pen-drive')" class="quick-view" data-toggle="tooltip" data-placement="top" title="Quickview">
                                                <i class="ti-eye"></i>
                                            </a>

                                            <a class="wishlist" href="/account/login" title="Wishlist" data-toggle="tooltip" data-placement="top" title="Wishlist">
                                                <i class="ti-heart"></i>
                                            </a>

                                        </div>

                                    </div>
                                    <div class="product-content">
                                        <h6><a href="/products/pen-drive" title="Pen drive">Pen drive</a></h6>
                                        <div class="product-ratting">
                                            <span class="shopify-product-reviews-badge" data-id="5822867964061"></span>
                                        </div>
                                        <div class="price-box">
                                            <span class="new-price"><span class=money>Rs. 100.00</span></span>

                                            <span class="old-price"><span class=money>Rs. 120.00</span></span>

                                        </div>
                                        <p class="product-description">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lo...
                                        </p>

                                       <div class="timer-section counter-event-5822867964061" id="counter-event" data-enddate="2020/12/25"></div>
                                    </div>
                                </div>
                                <script>
                                    $('.counter-event-5822867964061').countdown($('.counter-event-5822867964061').attr("data-enddate")).on('update.countdown', function (event) {
                                        var $this = $(this).html(event.strftime('' + '<ul class="contdown_row"><li class="countdown_section"><span id="days" class="countdown_timer">%-D</span><span class="countdown_title">Day</span></li>' + '<li class="countdown_section"><span id="hours" class="countdown_timer">%H</span><span class="countdown_title">Hrs</span></li>' + '<li class="countdown_section"><span id="minutes" class="countdown_timer">%M</span><span class="countdown_title">Min</span></li>' + '<li class="countdown_section"><span id="seconds" class="countdown_timer">%S</span><span class="countdown_title">sec</span></li></ul>'))
                                    });
                                </script>
                            </div>

                            <div class="item">
                                <div class="single-product-wrap">
                                    <div class="product-image">
                                        <a class="pro-img" href="/products/boat">
                                            <img class="img-fluid img1" src="//cdn.shopify.com/s/files/1/0509/6331/6893/products/pro3_66116319-ea9e-48c4-aee5-c0de6bf84624_350X400_crop_center.jpg?v=1606986643" alt="">
                                        </a>
                                        <div class="product-label">

                                         <span class="sale-title">Sale</span>
                                           <span class="percent-count">-6%</span>
                                        </div>
                                        <div class="product-action">

                                            <a href="javascript:void(0);" onclick="Shopify.addItem(37031997571229, 1); return false;" class="add-to-cart ajax-spin-cart" data-toggle="tooltip" data-placement="top" title="Add to cart">
                <span>
                    <span class="cart-title"><i class="ti-shopping-cart"></i></span>
                    <span class="cart-loading animated infinite rotateOut"><i class="ion-load-a"></i></span>
                    <span class="cart-added"><i class="ion-android-done"></i></span>
                    <span class="cart-unavailable"><i class="ion-android-alert"></i></span>
                </span>
                                            </a>

                                            <a href="javascript:void(0);" onclick="quiqview('boat')" class="quick-view" data-toggle="tooltip" data-placement="top" title="Quickview">
                                                <i class="ti-eye"></i>
                                            </a>

                                            <a class="wishlist" href="/account/login" title="Wishlist" data-toggle="tooltip" data-placement="top" title="Wishlist">
                                                <i class="ti-heart"></i>
                                            </a>

                                        </div>

                                    </div>
                                    <div class="product-content">
                                        <h6><a href="/products/boat" title="Boat">Boat</a></h6>
                                        <div class="product-ratting">
                                            <span class="shopify-product-reviews-badge" data-id="5822867472541"></span>
                                        </div>
                                        <div class="price-box">
                                            <span class="new-price"><span class=money>Rs. 150.00</span></span>

                                            <span class="old-price"><span class=money>Rs. 160.00</span></span>

                                        </div>
                                        <p class="product-description">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lo...
                                        </p>
                                        <div class="timer-section counter-event-5822867472541" id="counter-event" data-enddate="2021/05/25"></div>

                                    </div>
                                </div>
                                <script>
                                    $('.counter-event-5822867472541').countdown($('.counter-event-5822867472541').attr("data-enddate")).on('update.countdown', function (event) {
                                        var $this = $(this).html(event.strftime('' + '<ul class="contdown_row"><li class="countdown_section"><span id="days" class="countdown_timer">%-D</span><span class="countdown_title">Day</span></li>' + '<li class="countdown_section"><span id="hours" class="countdown_timer">%H</span><span class="countdown_title">Hrs</span></li>' + '<li class="countdown_section"><span id="minutes" class="countdown_timer">%M</span><span class="countdown_title">Min</span></li>' + '<li class="countdown_section"><span id="seconds" class="countdown_timer">%S</span><span class="countdown_title">sec</span></li></ul>'))
                                    });
                                </script>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- deal end -->
        <script type="text/javascript">
            $('#deal-slider').owlCarousel({
                loop: false,
                rewind: true,
                margin: 30,
                nav: false,
                navText: ['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'],
                dots: false,autoplay: true,
                autoplayTimeout: 5000,
                autoplayHoverPause: true,
                responsive:{
                    0:{
                        items: 1,
                        margin: 15
                    },
                    479:{
                        items: 1,
                        margin: 15
                    },
                    768:{
                        items: 1
                    },
                    979:{
                        items: 1
                    },
                    1199: {
                        items: 2
                    }
                }
            });
        </script>

        <style>
            .deal-section{
                padding-top: 60px;
                padding-bottom: 0px;


            }
            @media (max-width: 767px) {
                .deal-section{
                    padding-top: 40px;
                    padding-bottom: 0px;
                }
            }
            .deal-slider .single-product-wrap{
                display: flex;
                align-items: center;
                -ms-flex-wrap: wrap;
                flex-wrap: wrap;
            }
            .deal-slider .single-product-wrap .product-image{
                width: 41.67%;
            }
            .deal-slider .single-product-wrap:hover .product-image a.pro-img .img1{
                opacity: 1;
                visibility: visible;
            }
            .deal-slider .single-product-wrap .product-content{
                width: calc(58.33% - 30px);
                align-items: flex-start;
                padding-top: 0;margin-left: 30px;
                text-align: left;}
            .deal-slider .single-product-wrap .product-content h6{
                font-size: 16px;
                margin-top: 0;
            }
            .deal-slider .single-product-wrap .product-content .product-ratting{
                margin-top: 7px;
            }
            .deal-slider .single-product-wrap .product-content .price-box{
                margin-top: 12px;
            }
            .deal-slider .single-product-wrap .product-content .price-box .old-price{margin-left: 5px;}
            .deal-slider .single-product-wrap .product-content p.product-description{
                display: block;
                margin-top: 20px;
            }
            .deal-slider .single-product-wrap .product-content .timer-section{
                margin-top: 22px;
                width: 100%;
            }
            @media (max-width: 1199px) {
                .deal-slider .single-product-wrap .product-image{
                    width: 33.33%;
                }
                .deal-slider .single-product-wrap .product-content {
                    width: calc(66.67% - 30px);
                }
                .deal-slider .single-product-wrap .product-content .timer-section{
                    width: 250px;
                }
            }
            @media (max-width: 767px) {
                .deal-slider .single-product-wrap{
                    flex-direction: column;
                }
                .deal-slider .single-product-wrap .product-image{
                    width: 100%;
                }
                .deal-slider .single-product-wrap .product-content{
                    width: 100%;margin-left: 0px;margin-top: 15px;
                }
                .deal-slider .single-product-wrap .product-content .price-box{
                    align-items: flex-end;
                    flex-direction: row;
                    min-height: auto;
                }
                .deal-slider .single-product-wrap .product-content .price-box .old-price{
                    margin-top: 0;
                }
                .deal-slider .single-product-wrap .product-content p.product-description{
                    margin-top: 10px;
                }
                .deal-slider .single-product-wrap .product-content .timer-section{
                    margin-top: 12px;
                }
                .deal-slider .single-product-wrap .product-content .timer-section{
                    width: 100%;
                }
            }
        </style></div><div id="shopify-section-1580272775130" class="shopify-section"><section class="blog-wrap">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">

                        <div class="section-capture">
                            <div class="section-title">

                                <h2>Blog & Events</h2>


                            </div>
                        </div>
                        <div class="blog-slider owl-carousel owl-theme" id="blog-slider">

                            <div class="item">
                                <div class="blog-post">
                                    <a href="/blogs/news/all-the-lorem-ipsum-generators-1" class="blog-img">
                                        <img class="img-fluid" src="//cdn.shopify.com/s/files/1/0509/6331/6893/articles/blog1_1024x1024.jpg?v=1605085470" alt="All the Lorem Ipsum generators" />
                                        <span class="blog-icon"><i class="ti-link"></i></span>
                                        <span class="date-time">
      <span class="date">23</span>
      <span class="time">Aug</span>
      <span class="year">2020</span>
    </span>
                                    </a>
                                    <div class="blog-post-content">
                                        <h2 class="blog-title">
                                            <a href="/blogs/news/all-the-lorem-ipsum-generators-1">All the Lorem Ipsum generators</a>
                                        </h2>
                                        <p class="blog-desc">Lorem ipsum dolor sit amet, consectetuer adipiscing elit doli. Aenean commodo ligula eget dolor. ...</p>
                                        <a href="/blogs/news/all-the-lorem-ipsum-generators-1" class="read-btn" aria-label="Read more: All the Lorem Ipsum generators">
                                            <span>Read More</span>

                                        </a>
                                    </div>

                                </div>
                            </div>

                            <div class="item">
                                <div class="blog-post">
                                    <a href="/blogs/news/it-is-a-long-established-fact-that" class="blog-img">
                                        <img class="img-fluid" src="//cdn.shopify.com/s/files/1/0509/6331/6893/articles/blog2_3d3c0a3b-b5d1-4bb0-988a-8f3c3992f16b_1024x1024.jpg?v=1605085498" alt="It is a long established fact that" />
                                        <span class="blog-icon"><i class="ti-link"></i></span>
                                        <span class="date-time">
      <span class="date">23</span>
      <span class="time">Aug</span>
      <span class="year">2020</span>
    </span>
                                    </a>
                                    <div class="blog-post-content">
                                        <h2 class="blog-title">
                                            <a href="/blogs/news/it-is-a-long-established-fact-that">It is a long established fact that</a>
                                        </h2>
                                        <p class="blog-desc">Lorem ipsum dolor sit amet, consectetuer adipiscing elit doli. Aenean commodo ligula eget dolor. ...</p>
                                        <a href="/blogs/news/it-is-a-long-established-fact-that" class="read-btn" aria-label="Read more: It is a long established fact that">
                                            <span>Read More</span>

                                        </a>
                                    </div>

                                </div>
                            </div>

                            <div class="item">
                                <div class="blog-post">
                                    <a href="/blogs/news/repeat-predefined-chunks" class="blog-img">
                                        <img class="img-fluid" src="//cdn.shopify.com/s/files/1/0509/6331/6893/articles/blog4_1024x1024.jpg?v=1605085602" alt="Repeat predefined chunks" />
                                        <span class="blog-icon"><i class="ti-link"></i></span>
                                        <span class="date-time">
      <span class="date">23</span>
      <span class="time">Aug</span>
      <span class="year">2020</span>
    </span>
                                    </a>
                                    <div class="blog-post-content">
                                        <h2 class="blog-title">
                                            <a href="/blogs/news/repeat-predefined-chunks">Repeat predefined chunks</a>
                                        </h2>
                                        <p class="blog-desc">Lorem ipsum dolor sit amet, consectetuer adipiscing elit doli. Aenean commodo ligula eget dolor. ...</p>
                                        <a href="/blogs/news/repeat-predefined-chunks" class="read-btn" aria-label="Read more: Repeat predefined chunks">
                                            <span>Read More</span>

                                        </a>
                                    </div>

                                </div>
                            </div>

                            <div class="item">
                                <div class="blog-post">
                                    <a href="/blogs/news/the-standard-chunk-of-lorem" class="blog-img">
                                        <img class="img-fluid" src="//cdn.shopify.com/s/files/1/0509/6331/6893/articles/blog3_1024x1024.jpg?v=1605085551" alt="The standard chunk of Lorem" />
                                        <span class="blog-icon"><i class="ti-link"></i></span>
                                        <span class="date-time">
      <span class="date">23</span>
      <span class="time">Aug</span>
      <span class="year">2020</span>
    </span>
                                    </a>
                                    <div class="blog-post-content">
                                        <h2 class="blog-title">
                                            <a href="/blogs/news/the-standard-chunk-of-lorem">The standard chunk of Lorem</a>
                                        </h2>
                                        <p class="blog-desc">Lorem ipsum dolor sit amet, consectetuer adipiscing elit doli. Aenean commodo ligula eget dolor. ...</p>
                                        <a href="/blogs/news/the-standard-chunk-of-lorem" class="read-btn" aria-label="Read more: The standard chunk of Lorem">
                                            <span>Read More</span>

                                        </a>
                                    </div>

                                </div>
                            </div>

                            <div class="item">
                                <div class="blog-post">
                                   <a href="/blogs/news/this-book-is-a-treatise-on" class="blog-img">
                                        <img class="img-fluid" src="//cdn.shopify.com/s/files/1/0509/6331/6893/articles/blog7_617746e1-8066-47fa-969d-3a15b90a9f57_1024x1024.jpg?v=1605085941" alt="This book is a treatise on" />
                                        <span class="blog-icon"><i class="ti-link"></i></span>
                                        <span class="date-time">
      <span class="date">23</span>
      <span class="time">Aug</span>
      <span class="year">2020</span>
    </span>
                                    </a>
                                    <div class="blog-post-content">
                                        <h2 class="blog-title">
                                            <a href="/blogs/news/this-book-is-a-treatise-on">This book is a treatise on</a>
                                        </h2>
                                        <p class="blog-desc">Lorem ipsum dolor sit amet, consectetuer adipiscing elit doli. Aenean commodo ligula eget dolor. ...</p>
                                        <a href="/blogs/news/this-book-is-a-treatise-on" class="read-btn" aria-label="Read more: This book is a treatise on">
                                            <span>Read More</span>

                                        </a>
                                    </div>

                                </div>
                            </div>

                            <div class="item">
                                <div class="blog-post">
                                    <a href="/blogs/news/lorem-ipsum-which-looks" class="blog-img">
                                        <img class="img-fluid" src="//cdn.shopify.com/s/files/1/0509/6331/6893/articles/blog5_1024x1024.jpg?v=1605085906" alt="Lorem Ipsum which looks" />
                                        <span class="blog-icon"><i class="ti-link"></i></span>
                                        <span class="date-time">
      <span class="date">23</span>
      <span class="time">Aug</span>
      <span class="year">2020</span>
    </span>
                                    </a>
                                    <div class="blog-post-content">
                                        <h2 class="blog-title">
                                            <a href="/blogs/news/lorem-ipsum-which-looks">Lorem Ipsum which looks</a>
                                        </h2>
                                        <p class="blog-desc">Lorem ipsum dolor sit amet, consectetuer adipiscing elit doli. Aenean commodo ligula eget dolor. ...</p>
                                        <a href="/blogs/news/lorem-ipsum-which-looks" class="read-btn" aria-label="Read more: Lorem Ipsum which looks">
                                            <span>Read More</span>

                                        </a>
                                    </div>

                                </div>
                            </div>

                            <div class="item">
                                <div class="blog-post">



                                    <a href="/blogs/news/all-the-lorem-ipsum-generators" class="blog-img">
                                        <img class="img-fluid" src="//cdn.shopify.com/s/files/1/0509/6331/6893/articles/blog8_2a24142c-5302-4c73-90b4-3ec5b7edaa98_1024x1024.jpg?v=1605085977" alt="All the Lorem Ipsum generators" />
                                        <span class="blog-icon"><i class="ti-link"></i></span>
                                        <span class="date-time">
      <span class="date">23</span>
      <span class="time">Aug</span>
      <span class="year">2020</span>
    </span>
                                    </a>
                                    <div class="blog-post-content">
                                        <h2 class="blog-title">
                                            <a href="/blogs/news/all-the-lorem-ipsum-generators">All the Lorem Ipsum generators</a>
                                        </h2>
                                        <p class="blog-desc">Lorem ipsum dolor sit amet, consectetuer adipiscing elit doli. Aenean commodo ligula eget dolor. ...</p>
                                        <a href="/blogs/news/all-the-lorem-ipsum-generators" class="read-btn" aria-label="Read more: All the Lorem Ipsum generators">
                                            <span>Read More</span>

                                        </a>
                                    </div>

                                </div>
                            </div>

                            <div class="item">
                                <div class="blog-post">
                                    <a href="/blogs/news/various-versions-have-evolved-over" class="blog-img">
                                        <img class="img-fluid" src="//cdn.shopify.com/s/files/1/0509/6331/6893/articles/blog6_1024x1024.jpg?v=1605086027" alt="Various versions have evolved over" />
                                        <span class="blog-icon"><i class="ti-link"></i></span>
                                        <span class="date-time">
      <span class="date">23</span>
      <span class="time">Aug</span>
      <span class="year">2020</span>
    </span>
                                    </a>
                                    <div class="blog-post-content">
                                        <h2 class="blog-title">
                                            <a href="/blogs/news/various-versions-have-evolved-over">Various versions have evolved over</a>
                                        </h2>
                                        <p class="blog-desc">Lorem ipsum dolor sit amet, consectetuer adipiscing elit doli. Aenean commodo ligula eget dolor. ...</p>
                                        <a href="/blogs/news/various-versions-have-evolved-over" class="read-btn" aria-label="Read more: Various versions have evolved over">
                                            <span>Read More</span>

                                        </a>
                                    </div>

                                </div>
                            </div>

                        </div>


                    </div>
                </div>
            </div>
        </section>
        <script type="text/javascript">
            $('#blog-slider').owlCarousel({
                loop: false,
                rewind: true,
                margin: 30,
                nav: true,
                navText: ['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'],
                dots: false,responsive:{
                    0:{
                        items: 1,
                        margin: 15
                    },
                    479:{
                        items: 1,
                        margin: 15
                    },
                    768:{
                        items: 2
                    },
                    979:{
                        items: 2
                    },
                    1199: {
                        items: 3
                    }
                }
            });
        </script>

        <style>
            .blog-wrap {
                padding-top:60px;
                padding-bottom:0px;

            }
            @media (max-width: 767px) {
                .blog-wrap {
                    padding-top:40px;
                    padding-bottom:0px;
                }
            }

        </style></div><!-- END content_for_index -->
@endsection

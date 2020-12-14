@extends("partials.layouts.app")

@section("content")

    <div id="shopify-section-product-template" class="shopify-section">
        <section class="product-details-page">
            <div class="container">
                <div class="row">
                    <div class="col-xl-5 col-lg-6 col-md-6 col-12 product_details">
                        <div class="product_detail_img">

                            <!-- product_big_images start -->
                            <div class="product_img_top">
                                <button class="full-view"><i class="fa fa-expand"></i></button>
                                <img id="zoom_mw" class="product-zoom img-fluid"
                                     src="//cdn.shopify.com/s/files/1/0509/6331/6893/products/pro3_66116319-ea9e-48c4-aee5-c0de6bf84624.jpg?v=1606986643"
                                     alt="Boat"
                                     data-zoom-image="//cdn.shopify.com/s/files/1/0509/6331/6893/products/pro3_66116319-ea9e-48c4-aee5-c0de6bf84624.jpg?v=1606986643">
                            </div>
                            <!-- product_big_images end -->

                            <!-- Start Small images -->
                            <div class="owl-carousel owl-theme pro-detail-slider" id="pro-detail-slider">

                                <div id="gallery_01" role="presentation" class="item ">
                                    <a class="product-single__thumbnail active"
                                       href="//cdn.shopify.com/s/files/1/0509/6331/6893/products/pro3_66116319-ea9e-48c4-aee5-c0de6bf84624.jpg?v=1606986643"
                                       data-image="//cdn.shopify.com/s/files/1/0509/6331/6893/products/pro3_66116319-ea9e-48c4-aee5-c0de6bf84624.jpg?v=1606986643"
                                       data-zoom-image="//cdn.shopify.com/s/files/1/0509/6331/6893/products/pro3_66116319-ea9e-48c4-aee5-c0de6bf84624.jpg?v=1606986643"
                                       data-image-id="20237562151069">
                                        <img class="img-fluid"
                                             src="//cdn.shopify.com/s/files/1/0509/6331/6893/products/pro3_66116319-ea9e-48c4-aee5-c0de6bf84624_100x120_crop_center.jpg?v=1606986643"
                                             alt="Boat">
                                    </a>
                                </div>

                                <div id="gallery_01" role="presentation" class="item ">
                                    <a class="product-single__thumbnail "
                                       href="//cdn.shopify.com/s/files/1/0509/6331/6893/products/pro2_2c303381-fe9a-46fb-81cf-d0e8963ae517.jpg?v=1606986647"
                                       data-image="//cdn.shopify.com/s/files/1/0509/6331/6893/products/pro2_2c303381-fe9a-46fb-81cf-d0e8963ae517.jpg?v=1606986647"
                                       data-zoom-image="//cdn.shopify.com/s/files/1/0509/6331/6893/products/pro2_2c303381-fe9a-46fb-81cf-d0e8963ae517.jpg?v=1606986647"
                                       data-image-id="20237568639133">
                                        <img class="img-fluid"
                                             src="//cdn.shopify.com/s/files/1/0509/6331/6893/products/pro2_2c303381-fe9a-46fb-81cf-d0e8963ae517_100x120_crop_center.jpg?v=1606986647"
                                             alt="Boat">
                                    </a>
                                </div>

                                <div id="gallery_01" role="presentation" class="item ">
                                    <a class="product-single__thumbnail "
                                       href="//cdn.shopify.com/s/files/1/0509/6331/6893/products/pro4_f4f60b9b-a25c-4900-97e0-498d250f2661.jpg?v=1606986647"
                                       data-image="//cdn.shopify.com/s/files/1/0509/6331/6893/products/pro4_f4f60b9b-a25c-4900-97e0-498d250f2661.jpg?v=1606986647"
                                       data-zoom-image="//cdn.shopify.com/s/files/1/0509/6331/6893/products/pro4_f4f60b9b-a25c-4900-97e0-498d250f2661.jpg?v=1606986647"
                                       data-image-id="20237562019997">
                                        <img class="img-fluid"
                                             src="//cdn.shopify.com/s/files/1/0509/6331/6893/products/pro4_f4f60b9b-a25c-4900-97e0-498d250f2661_100x120_crop_center.jpg?v=1606986647"
                                             alt="Boat">
                                    </a>
                                </div>

                                <div id="gallery_01" role="presentation" class="item ">
                                    <a class="product-single__thumbnail "
                                       href="//cdn.shopify.com/s/files/1/0509/6331/6893/products/pro6_f525318a-37b9-4997-8507-6500cccc856b.jpg?v=1606986647"
                                       data-image="//cdn.shopify.com/s/files/1/0509/6331/6893/products/pro6_f525318a-37b9-4997-8507-6500cccc856b.jpg?v=1606986647"
                                       data-zoom-image="//cdn.shopify.com/s/files/1/0509/6331/6893/products/pro6_f525318a-37b9-4997-8507-6500cccc856b.jpg?v=1606986647"
                                       data-image-id="20237561888925">
                                        <img class="img-fluid"
                                             src="//cdn.shopify.com/s/files/1/0509/6331/6893/products/pro6_f525318a-37b9-4997-8507-6500cccc856b_100x120_crop_center.jpg?v=1606986647"
                                             alt="Boat">
                                    </a>
                                </div>

                                <div id="gallery_01" role="presentation" class="item ">
                                    <a class="product-single__thumbnail "
                                       href="//cdn.shopify.com/s/files/1/0509/6331/6893/products/pro25_68386676-26f5-4a6c-a645-f155765783a1.jpg?v=1606986647"
                                       data-image="//cdn.shopify.com/s/files/1/0509/6331/6893/products/pro25_68386676-26f5-4a6c-a645-f155765783a1.jpg?v=1606986647"
                                       data-zoom-image="//cdn.shopify.com/s/files/1/0509/6331/6893/products/pro25_68386676-26f5-4a6c-a645-f155765783a1.jpg?v=1606986647"
                                       data-image-id="20237561790621">
                                        <img class="img-fluid"
                                             src="//cdn.shopify.com/s/files/1/0509/6331/6893/products/pro25_68386676-26f5-4a6c-a645-f155765783a1_100x120_crop_center.jpg?v=1606986647"
                                             alt="Boat">
                                    </a>
                                </div>

                                <div id="gallery_01" role="presentation" class="item ">
                                    <a class="product-single__thumbnail "
                                       href="//cdn.shopify.com/s/files/1/0509/6331/6893/products/pro26_40eeee54-fffb-46f4-8dcc-4b034b2deb22.jpg?v=1606986647"
                                       data-image="//cdn.shopify.com/s/files/1/0509/6331/6893/products/pro26_40eeee54-fffb-46f4-8dcc-4b034b2deb22.jpg?v=1606986647"
                                       data-zoom-image="//cdn.shopify.com/s/files/1/0509/6331/6893/products/pro26_40eeee54-fffb-46f4-8dcc-4b034b2deb22.jpg?v=1606986647"
                                       data-image-id="20237561921693">
                                        <img class="img-fluid"
                                             src="//cdn.shopify.com/s/files/1/0509/6331/6893/products/pro26_40eeee54-fffb-46f4-8dcc-4b034b2deb22_100x120_crop_center.jpg?v=1606986647"
                                             alt="Boat">
                                    </a>
                                </div>

                            </div>
                            <!-- End Small images -->

                        </div>
                    </div>
                    <div class="col-xl-7 col-lg-6 col-md-6 col-12 product_details">
                        <div class="product_details_info">
                            <div class="pro-nprist">
                                <div class="product-title">
                                    <h6>Boat</h6>
                                </div>
                                <div class="product-ratting">
                                    <span class="shopify-product-reviews-badge" data-id="5822867472541"></span>
                                </div>
                                <div class="pro-prlb pro-sale">
                                    <div class="price-box" id="ProductPrice">
                                        <span class="new-price"><span class=money>Rs. 150.00</span></span><span
                                            class="old-price"><span class=money>Rs. 160.00</span></span></div>


                                    <div class="product-label" id="ProductDiscount">
                                        <span class="percent-count">6</span>
                                    </div>


                                </div>
                                <div class="available-desc pro-sale">
                                    <div class="product-inventory unavailable">
                                        <h6>
                                            <span>Availability:</span>

                                            <span id="variant-inventory" class="in-stock text-success">In Stock <i
                                                    class="fa fa-check"></i></span>

                                        </h6>
                                    </div>
                                    <div class="stock-inventory">

                                        <span>Hurry up! only</span>
                                        <span class="available-stock">14</span>
                                        <span>products left in stock!</span>

                                    </div>


                                    <div class="timer-section counter-event-5822867472541" id="counter-event"
                                         data-enddate="2021/05/25"></div>

                                    <div class="product-description">
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                            Lorem Ipsum has been the industry's standa...</p>
                                    </div>
                                </div>
                            </div>
                            <div class="pro-detail-action">
                                <form action="/cart/add" method="post" class="cart" enctype="multipart/form-data"
                                      id="add-item-form">
                                    <div class="product-variant-option">
                                        <div class="select-variant">
                                            <select name="id" id="productSelect" class="product-single__variants">

                                                <option selected="selected" data-sku="Boat-1" value="37031997571229">
                                                    black
                                                </option>

                                                <option data-sku="Boat-2" value="37031997603997">gray</option>

                                                <option data-sku="Boat-3" value="37031997636765">gold</option>

                                            </select>
                                        </div>
                                        <div class="swatch-variant">


                                            <style>
                                                label[for="product-select-option-0"] {
                                                    display: none;
                                                }

                                                #product-select-option-0 {
                                                    display: none;
                                                }

                                                #product-select-option-0 + .custom-style-select-box {
                                                    display: none !important;
                                                }
                                            </style>
                                            <script>
                                                $(window).load(function () {
                                                    $('.selector-wrapper:eq(0)').hide();
                                                });
                                            </script>


                                            <div class="swatch clearfix Color" data-option-index="0">
                                                <h6 class="header">Color:</h6>


                                                <div data-value="black" class="swatch-element color black available">
                                                    <input id="swatch-0-black" type="radio" name="option-0"
                                                           value="black" checked/>

                                                    <label for="swatch-0-black"
                                                           style="background-image: url(//cdn.shopify.com/s/files/1/0509/6331/6893/products/pro3_66116319-ea9e-48c4-aee5-c0de6bf84624_small.jpg?v=1606986643;"
                                                           data-toggle="tooltip" data-placement="top" title="black">

                                                    </label>

                                                </div>


                                                <script>
                                                    jQuery('.swatch[data-option-index="0"] .black').removeClass('soldout').addClass('available').find(':radio').removeAttr('disabled');
                                                </script>


                                                <div data-value="gray" class="swatch-element color gray available">
                                                    <input id="swatch-0-gray" type="radio" name="option-0"
                                                           value="gray"/>

                                                    <label for="swatch-0-gray"
                                                           style="background-image: url(//cdn.shopify.com/s/files/1/0509/6331/6893/products/pro2_2c303381-fe9a-46fb-81cf-d0e8963ae517_small.jpg?v=1606986647;"
                                                           data-toggle="tooltip" data-placement="top" title="gray">

                                                    </label>

                                                </div>


                                                <script>
                                                    jQuery('.swatch[data-option-index="0"] .gray').removeClass('soldout').addClass('available').find(':radio').removeAttr('disabled');
                                                </script>


                                                <div data-value="gold" class="swatch-element color gold available">
                                                    <input id="swatch-0-gold" type="radio" name="option-0"
                                                           value="gold"/>

                                                    <label for="swatch-0-gold"
                                                           style="background-image: url(//cdn.shopify.com/s/files/1/0509/6331/6893/products/pro6_f525318a-37b9-4997-8507-6500cccc856b_small.jpg?v=1606986647;"
                                                           data-toggle="tooltip" data-placement="top" title="gold">

                                                    </label>

                                                </div>


                                                <script>
                                                    jQuery('.swatch[data-option-index="0"] .gold').removeClass('soldout').addClass('available').find(':radio').removeAttr('disabled');
                                                </script>


                                            </div>


                                        </div>
                                        <script>
                                            jQuery(function () {
                                                jQuery('.swatch :radio').change(function () {
                                                    var optionIndex = jQuery(this).closest('.swatch').attr('data-option-index');
                                                    var optionValue = jQuery(this).val();
                                                    jQuery(this)
                                                        .closest('form')
                                                        .find('.single-option-selector')
                                                        .eq(optionIndex)
                                                        .val(optionValue)
                                                        .trigger('change');
                                                });
                                            });
                                        </script>
                                    </div>

                                    <style>.product-variant-option .selector-wrapper {
                                            display: none;
                                        }

                                        /* swatch variant css */
                                        .product-variant-option .swatch-variant .swatch {
                                            display: flex;
                                            -ms-flex-wrap: wrap;
                                            flex-wrap: wrap;
                                            align-items: center;
                                            margin-top: 15px;
                                        }

                                        .product-variant-option .swatch-variant .swatch:first-of-type {
                                            margin-top: 0;
                                        }

                                        .product-variant-option .swatch-variant .swatch h6 {
                                            font-size: 16px;
                                            text-transform: capitalize;
                                            line-height: 1;
                                        }

                                        .product-variant-option .swatch-variant .swatch .swatch-element {

                                            margin-left: 5px;

                                        }

                                        .product-variant-option .swatch-variant .swatch .swatch-element:first-of-type {

                                            margin-left: 15px;

                                        }

                                        .product-variant-option .swatch-variant .swatch .swatch-element label {
                                            margin-bottom: 0;
                                        }

                                        .product-variant-option .swatch-variant .swatch.Size .swatch-element label,
                                        .product-variant-option .swatch-variant .swatch.Material .swatch-element label {
                                            font-size: 14px;
                                        }

                                        .product-variant-option .swatch-variant .swatch.Size .swatch-element label {
                                            color: #fff;
                                            padding: 8px 10px;
                                            background-color: #222222;
                                            border: 1px solid #222222;
                                            font-weight: 600;
                                        }

                                        .product-variant-option .swatch-variant .swatch.Size .swatch-element label:hover,
                                        .product-variant-option .swatch-variant .swatch.Size .swatch-element input:checked + label {
                                            background-color: #105caa;
                                            border: 1px solid #105caa;
                                        }

                                        .product-variant-option .swatch-variant .swatch.Material .swatch-element label {
                                            position: relative;
                                        }

                                        .product-variant-option .swatch-variant .swatch.Material .swatch-element label::after {
                                            content: ",";
                                        }

                                        .product-variant-option .swatch-variant .swatch.Material .swatch-element:last-of-type label::after {
                                            content: "";
                                        }

                                        .product-variant-option .swatch-variant .swatch.Color .swatch-element label {
                                            display: block;
                                            height: 45px;
                                            width: 40px;
                                            background-repeat: no-repeat;
                                            background-position: center;
                                            background-size: cover;

                                        }

                                        .product-variant-option .swatch-variant .swatch.Color .swatch-element input:checked + label {
                                            border: 1px solid #105caa;
                                        }

                                        /* select variant css */
                                        .product-variant-option .select-variant .selector-wrapper {
                                            display: flex;
                                            -ms-flex-wrap: wrap;
                                            flex-wrap: wrap;
                                            align-items: center;
                                            margin-top: 15px;
                                        }

                                        .product-variant-option .select-variant .selector-wrapper:first-of-type {
                                            margin-top: 0;
                                        }

                                        .product-variant-option .select-variant .selector-wrapper label {
                                            display: block;
                                            color: #222;
                                            font-size: 16px;
                                            margin-bottom: 0;
                                            font-weight: 600;
                                            position: relative;
                                            text-transform: capitalize;
                                            line-height: 1;
                                        }

                                        .product-variant-option .select-variant .selector-wrapper label::after {
                                            content: ":";
                                        }

                                        .product-variant-option .select-variant .selector-wrapper select.single-option-selector {

                                            margin-left: 15px;

                                            padding: 10px 30px 10px 15px;
                                            text-transform: capitalize;
                                        }
                                    </style>
                                    <div class="product-actions">
                                        <div class="product-quantity-action">
                                            <h6>Quntity:</h6>
                                            <div class="product-quantity">

                                                <div class="cart-plus-minus">
                                                    <input value="1" type="text" name="quantity" min="1"
                                                           pattern="[0-9]*">
                                                </div>

                                            </div>

                                        </div>

                                        <div class="pro-detail-button">

                                            <button type="submit" class="btn add-to-cart ajax-spin-cart" id="AddToCart"
                                                    data-toggle="tooltip" data-placement="top" title="AddToCart">
                                                <span class="cart-title" id="AddToCartText">Add to cart</span>
                                                <span class="cart-loading animated infinite rotateOut"><i
                                                        class="ion-load-a"></i></span>
                                                <span class="cart-added"><i class="ion-android-done"></i></span>
                                                <span class="cart-unavailable"></span>
                                            </button>


                                            <script>
                                                jQuery('.ajax-spin-cart').click(function (e) {
                                                    e.preventDefault();
                                                    Shopify.addItemFromForm('add-item-form');
                                                });
                                            </script>
                                            <style>
                                                .pro-detail-button button {
                                                    color: #fff;
                                                    font-size: 14px;
                                                    padding: 10px 15px;
                                                    background-color: #222;
                                                    text-align: center;
                                                    text-transform: uppercase;
                                                    font-weight: 400;
                                                    border-radius: 0;
                                                    line-height: normal;
                                                }

                                                .pro-detail-button button:hover {
                                                    background-color: #105caa;
                                                }

                                                .pro-detail-button button.btn[disabled],
                                                .pro-detail-button button.btn.disabled {
                                                    color: #eaeaea;
                                                    background-color: #ababab;
                                                    opacity: .65;
                                                    pointer-events: none;
                                                }
                                            </style>

                                            <a class="btn wishlist" href="/account/login" data-toggle="tooltip"
                                               data-placement="top" title="Wishlist">Add to wishlist</a>

                                            <style>
                                                .pro-detail-button a.wishlist {
                                                    color: #fff;
                                                    font-size: 14px;
                                                    padding: 10px 15px;
                                                    background-color: #222;
                                                    text-align: center;
                                                    text-transform: uppercase;
                                                    font-weight: 400;
                                                    border-radius: 0px;
                                                    line-height: normal;
                                                }

                                                .pro-detail-button a.wishlist:hover {
                                                    background-color: #105caa;
                                                }
                                            </style>
                                        </div>

                                        <div class="pro-aff-che">
                                            <a href="javascript:void(0)" class="btn btn-cart btn_theme"
                                               onClick="instantBuy()" data-toggle="tooltip" data-placement="top"
                                               title="Direct to checkout">
                                                <span>Buy now</span>
                                            </a>

                                            <style>
                                                .pro-aff-che a {
                                                    color: #fff;
                                                    font-size: 14px;
                                                    padding: 10px 15px;
                                                    background-color: #105caa;
                                                    text-align: center;
                                                    text-transform: uppercase;
                                                    font-weight: 400;
                                                    border-radius: 0;
                                                    line-height: normal;
                                                }

                                                .pro-aff-che a:hover {
                                                    background-color: #222;
                                                }

                                                .pro-aff-che a.btn[disabled],
                                                .pro-aff-che a.btn.disabled {
                                                    color: #eaeaea;
                                                    background-color: #ababab;
                                                    opacity: .65;
                                                    pointer-events: none;
                                                }
                                            </style>


                                            <a href="https://www.amazon.in/"
                                               class="affiliate-product btn affiliate-product">
                                                <span class="cart-text">Buy from amazon</span>
                                            </a>

                                            <style>
                                                .pro-aff-che a {
                                                    color: #fff;
                                                    font-size: 14px;
                                                    padding: 10px 15px;
                                                    background-color: #105caa;
                                                    text-align: center;
                                                    text-transform: uppercase;
                                                    font-weight: 400;
                                                    border-radius: 0;
                                                    line-height: normal;
                                                }

                                                .pro-aff-che a:hover {
                                                    background-color: #222;
                                                }

                                                .pro-aff-che a.btn[disabled],
                                                .pro-aff-che a.btn.disabled {
                                                    color: #eaeaea;
                                                    background-color: #ababab;
                                                    opacity: .65;
                                                    pointer-events: none;
                                                }
                                            </style>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="pro-skss">
                                <div class="product-sku">
                                    <h6>Product code:</h6>
                                    <span class="variant-sku">Boat-1</span>
                                </div>
                                <!-- Share -->
                                <div class="share-icons">


                                    <h6>Share:</h6>
                                    <ul class="pro_social_link">
                                        <li>
                                            <a target="_blank"
                                               href="//www.facebook.com/sharer.php?u=https://electon-store.myshopify.com/products/boat"
                                               class="facebook" title="Share on Facebook" tabindex="0"><i
                                                    class="ion-social-facebook"></i></a>
                                        </li>
                                        <li>
                                            <a target="_blank"
                                               href="//twitter.com/share?text=Boat&amp;url=https://electon-store.myshopify.com/products/boat;source=webclient"
                                               class="twitter" title="Share on Twitter" tabindex="0"><i
                                                    class="ion-social-twitter"></i></a>
                                        </li>
                                        <li>
                                            <a target="_blank"
                                               href="//plus.google.com/share?url=https://electon-store.myshopify.com/products/boat"
                                               class="googleplus" title="Share on Google+" tabindex="0"><i
                                                    class="ion-social-googleplus"></i></a>
                                        </li>

                                        <li>
                                            <a target="_blank"
                                               href="//pinterest.com/pin/create/button/?url=https://electon-store.myshopify.com/products/boat&amp;media=http://cdn.shopify.com/s/files/1/0509/6331/6893/products/pro3_66116319-ea9e-48c4-aee5-c0de6bf84624_1024x1024.jpg?v=1606986643&amp;description=Boat"
                                               class="pinterest" title="Share on Pinterest" tabindex="0"><i
                                                    class="ion-social-pinterest"></i></a>
                                        </li>

                                    </ul>
                                </div>
                                <style>
                                    ul.pro_social_link {
                                        display: -ms-flexbox;
                                        display: flex;
                                        -ms-flex-wrap: wrap;
                                        flex-wrap: wrap;
                                    }

                                    ul.pro_social_link li {
                                        margin-right: 15px;
                                        line-height: 0;
                                    }

                                    ul.pro_social_link li:last-child {
                                        margin-right: 0px;
                                    }

                                    ul.pro_social_link li a {
                                        font-size: 18px;
                                        line-height: 0;
                                    }

                                    ul.pro_social_link li a.facebook {
                                        color: #3b5999;
                                    }

                                    ul.pro_social_link li a.twitter {
                                        color: #55acee;
                                    }

                                    ul.pro_social_link li a.googleplus {
                                        color: #dd4b39;
                                    }

                                    ul.pro_social_link li a.pinterest {
                                        color: #bd081c;
                                    }
                                </style>


                                <div class="product-payment-image">
                                    <a href="javascript:void(0)" class="payment-icon">
                                        <img src="//cdn.shopify.com/s/files/1/0509/6331/6893/files/p3.png?v=1605093090"
                                             class="img-fluid" alt="electon-store">
                                        <img src="//cdn.shopify.com/s/files/1/0509/6331/6893/files/p1.png?v=1605093104"
                                             class="img-fluid" alt="electon-store">
                                        <img src="//cdn.shopify.com/s/files/1/0509/6331/6893/files/p2.png?v=1605093119"
                                             class="img-fluid" alt="electon-store">
                                        <img src="//cdn.shopify.com/s/files/1/0509/6331/6893/files/p4.png?v=1605093133"
                                             class="img-fluid" alt="electon-store">
                                        <img src="//cdn.shopify.com/s/files/1/0509/6331/6893/files/p5.png?v=1605093145"
                                             class="img-fluid" alt="electon-store">
                                    </a>
                                    <style>
                                        .payment-icon {
                                            display: flex;
                                        }

                                        .payment-icon img {

                                            margin-right: 5px;

                                        }

                                        }
                                        .payment-icon img:last-child {

                                            margin-right: 0px;

                                        }

                                        }
                                    </style>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <script>
            $('.counter-event-5822867472541').countdown($('.counter-event-5822867472541').attr("data-enddate")).on('update.countdown', function (event) {
                var $this = $(this).html(event.strftime('' + '<ul class="contdown_row"><li class="countdown_section"><span id="days" class="countdown_timer">%-D</span><span class="countdown_title">Day</span></li>' + '<li class="countdown_section"><span id="hours" class="countdown_timer">%H</span><span class="countdown_title">Hrs</span></li>' + '<li class="countdown_section"><span id="minutes" class="countdown_timer">%M</span><span class="countdown_title">Min</span></li>' + '<li class="countdown_section"><span id="seconds" class="countdown_timer">%S</span><span class="countdown_title">sec</span></li></ul>'))
            });
        </script>


        <script>
            $('#pro-detail-slider').owlCarousel({
                loop: false,
                rewind: true,
                margin: 15,
                nav: true,
                navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'], dots: false,
                responsive: {
                    0: {
                        items: 3
                    },
                    480: {
                        items: 3
                    },
                    768: {
                        items: 3
                    },
                    979: {
                        items: 4
                    },
                    1199: {
                        items: 5
                    }
                }
            });

            function instantBuy() {
                var $ = jQuery;
                var formParams = $('form.cart').serialize();
                $.ajax({
                    url: "/cart/add",
                    type: "post",
                    data: formParams,
                    success: function () {
                        window.location.href = "/checkout";
                    },
                    error: function () {
                    }
                })
            }

            function addToCart() {
                $('form.cart').submit();
            }

            var selectCallback = function (variant, selector) {
                timber.productPage({
                    money_format: "<span class=money>Rs. 700</span>",
                    variant: variant,
                    selector: selector
                });
                if (variant) {
                    // Current variant select+
                    var form = jQuery('#' + selector.domIdPrefix).closest('form');
                    for (var i = 0, size = variant.options.size; i < size; i++) {
                        var val = variant.options[i].replace(/'/g, "&#039;");
                        var radioButton = form.find(".swatch[data-option-index='" + i + "'] :radio[value='" + val + "']");
                        if (radioButton.size()) {
                            radioButton.get(0).checked = true;
                        }
                    }
                    // Current sku pass
                    $('.variant-sku').text(variant.sku);
                    $('.btn-cart').removeClass('disabled').prop('disabled', false);
                    $('.affiliate-product').removeClass('disabled').prop('disabled', false);
                } else {
                    $('.variant-sku').empty();
                    $('.btn-cart').addClass('disabled').prop('disabled', true);
                    $('.affiliate-product').addClass('disabled').prop('disabled', true);
                }

                if (variant) {

                    if (variant.price < variant.compare_at_price) {

                        $('#ProductPrice').html('<span class="new-price">' + Shopify.formatMoney(variant.price, "<span class=money>Rs. 700</span>") + '</span><span class="old-price">' + Shopify.formatMoney(variant.compare_at_price, "<span class=money>Rs. 700</span>") + '</span>');
                    } else {

                        $('#ProductPrice').html('<span class="new-price">' + Shopify.formatMoney(variant.price, "<span class=money>Rs. 700</span>") + '</span>');
                    }

                }
                if (variant) {

                    if (variant.price < variant.compare_at_price) {

                        $('#ProductDiscount').html('<span class="percent-count">' + ((variant.compare_at_price - variant.price) * 100.0 / (variant.compare_at_price)).toFixed() + '</span>');
                    }
                    $('.btn-cart').removeClass('disabled').prop('disabled', false);
                    $('.affiliate-product').removeClass('disabled').prop('disabled', false);

                } else {
                    $('.btn-cart').addClass('disabled').prop('disabled', true);
                    $('.affiliate-product').addClass('disabled').prop('disabled', true);
                }
                if (variant && variant.featured_image) {
                    jQuery('#pro-detail-slider a[data-image-id="' + variant.featured_image.id + '"]').trigger('click');
                }


            };
            jQuery(function ($) {
                new Shopify.OptionSelectors('productSelect', {
                    product: {
                        "id": 5822867472541,
                        "title": "Boat",
                        "handle": "boat",
                        "description": "[sale_products]365[\/sale_products][affiliate_link]https:\/\/www.amazon.in\/[\/affiliate_link][product_timer]2021\/05\/25[\/product_timer][product_video]\u003ciframe src=\"https:\/\/www.youtube.com\/embed\/DpQO36cUpzs\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen=\"\"\u003e\u003c\/iframe\u003e[\/product_video] [short_description]Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book[\/short_description] [product_description]\n\u003cdiv class=\"more-description\"\u003e\n\u003ch6\u003eMore Detail\u003c\/h6\u003e\n\u003cul\u003e\n\u003cli\u003eLorem Ipsum is simply dummy text of the printing and typesetting industry\u003c\/li\u003e\n\u003cli\u003eLorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book\u003c\/li\u003e\n\u003cli\u003eIt has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged\u003c\/li\u003e\n\u003cli\u003eIt was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum\u003c\/li\u003e\n\u003cli\u003eContrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old\u003c\/li\u003e\n\u003c\/ul\u003e\n\u003c\/div\u003e\n\u003cdiv class=\"more-description\"\u003e\n\u003ch6\u003eKey Specification\u003c\/h6\u003e\n\u003cul\u003e\n\u003cli\u003eIt is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout\u003c\/li\u003e\n\u003cli\u003eThe point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy\u003c\/li\u003e\n\u003cli\u003eVarious versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like)\u003c\/li\u003e\n\u003cli\u003eThere are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable\u003c\/li\u003e\n\u003cli\u003eIf you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text\u003c\/li\u003e\n\u003c\/ul\u003e\n\u003c\/div\u003e\n[\/product_description]",
                        "published_at": "2020-11-10T07:59:48-05:00",
                        "created_at": "2020-11-10T07:59:52-05:00",
                        "vendor": "electon-store",
                        "type": "Headphone",
                        "tags": ["color_black", "color_blue", "color_gold", "color_gray", "price_0-100", "price_100-200", "tag_headphone"],
                        "price": 15000,
                        "price_min": 15000,
                        "price_max": 15800,
                        "available": true,
                        "price_varies": true,
                        "compare_at_price": 16000,
                        "compare_at_price_min": 16000,
                        "compare_at_price_max": 16800,
                        "compare_at_price_varies": true,
                        "variants": [{
                            "id": 37031997571229,
                            "title": "black",
                            "option1": "black",
                            "option2": null,
                            "option3": null,
                            "sku": "Boat-1",
                            "requires_shipping": true,
                            "taxable": false,
                            "featured_image": {
                                "id": 20237562151069,
                                "product_id": 5822867472541,
                                "position": 1,
                                "created_at": "2020-12-03T04:09:39-05:00",
                                "updated_at": "2020-12-03T04:10:43-05:00",
                                "alt": null,
                                "width": 770,
                                "height": 1000,
                                "src": "https:\/\/cdn.shopify.com\/s\/files\/1\/0509\/6331\/6893\/products\/pro3_66116319-ea9e-48c4-aee5-c0de6bf84624.jpg?v=1606986643",
                                "variant_ids": [37031997571229]
                            },
                            "available": true,
                            "name": "Boat - black",
                            "public_title": "black",
                            "options": ["black"],
                            "price": 15000,
                            "weight": 0,
                            "compare_at_price": 16000,
                            "inventory_management": "shopify",
                            "barcode": "123",
                            "featured_media": {
                                "alt": null,
                                "id": 12413167796381,
                                "position": 1,
                                "preview_image": {
                                    "aspect_ratio": 0.77,
                                    "height": 1000,
                                    "width": 770,
                                    "src": "https:\/\/cdn.shopify.com\/s\/files\/1\/0509\/6331\/6893\/products\/pro3_66116319-ea9e-48c4-aee5-c0de6bf84624.jpg?v=1606986579"
                                }
                            }
                        }, {
                            "id": 37031997603997,
                            "title": "gray",
                            "option1": "gray",
                            "option2": null,
                            "option3": null,
                            "sku": "Boat-2",
                            "requires_shipping": true,
                            "taxable": false,
                            "featured_image": {
                                "id": 20237568639133,
                                "product_id": 5822867472541,
                                "position": 2,
                                "created_at": "2020-12-03T04:10:09-05:00",
                                "updated_at": "2020-12-03T04:10:47-05:00",
                                "alt": null,
                                "width": 770,
                                "height": 1000,
                                "src": "https:\/\/cdn.shopify.com\/s\/files\/1\/0509\/6331\/6893\/products\/pro2_2c303381-fe9a-46fb-81cf-d0e8963ae517.jpg?v=1606986647",
                                "variant_ids": [37031997603997]
                            },
                            "available": true,
                            "name": "Boat - gray",
                            "public_title": "gray",
                            "options": ["gray"],
                            "price": 15800,
                            "weight": 0,
                            "compare_at_price": 16800,
                            "inventory_management": "shopify",
                            "barcode": "",
                            "featured_media": {
                                "alt": null,
                                "id": 12413175038109,
                                "position": 2,
                                "preview_image": {
                                    "aspect_ratio": 0.77,
                                    "height": 1000,
                                    "width": 770,
                                    "src": "https:\/\/cdn.shopify.com\/s\/files\/1\/0509\/6331\/6893\/products\/pro2_2c303381-fe9a-46fb-81cf-d0e8963ae517.jpg?v=1606986609"
                                }
                            }
                        }, {
                            "id": 37031997636765,
                            "title": "gold",
                            "option1": "gold",
                            "option2": null,
                            "option3": null,
                            "sku": "Boat-3",
                            "requires_shipping": true,
                            "taxable": true,
                            "featured_image": {
                                "id": 20237561888925,
                                "product_id": 5822867472541,
                                "position": 4,
                                "created_at": "2020-12-03T04:09:38-05:00",
                                "updated_at": "2020-12-03T04:10:47-05:00",
                                "alt": null,
                                "width": 770,
                                "height": 1000,
                                "src": "https:\/\/cdn.shopify.com\/s\/files\/1\/0509\/6331\/6893\/products\/pro6_f525318a-37b9-4997-8507-6500cccc856b.jpg?v=1606986647",
                                "variant_ids": [37031997636765]
                            },
                            "available": true,
                            "name": "Boat - gold",
                            "public_title": "gold",
                            "options": ["gold"],
                            "price": 15000,
                            "weight": 0,
                            "compare_at_price": 16000,
                            "inventory_management": "shopify",
                            "barcode": "",
                            "featured_media": {
                                "alt": null,
                                "id": 12413167861917,
                                "position": 4,
                                "preview_image": {
                                    "aspect_ratio": 0.77,
                                    "height": 1000,
                                    "width": 770,
                                    "src": "https:\/\/cdn.shopify.com\/s\/files\/1\/0509\/6331\/6893\/products\/pro6_f525318a-37b9-4997-8507-6500cccc856b.jpg?v=1606986578"
                                }
                            }
                        }],
                        "images": ["\/\/cdn.shopify.com\/s\/files\/1\/0509\/6331\/6893\/products\/pro3_66116319-ea9e-48c4-aee5-c0de6bf84624.jpg?v=1606986643", "\/\/cdn.shopify.com\/s\/files\/1\/0509\/6331\/6893\/products\/pro2_2c303381-fe9a-46fb-81cf-d0e8963ae517.jpg?v=1606986647", "\/\/cdn.shopify.com\/s\/files\/1\/0509\/6331\/6893\/products\/pro4_f4f60b9b-a25c-4900-97e0-498d250f2661.jpg?v=1606986647", "\/\/cdn.shopify.com\/s\/files\/1\/0509\/6331\/6893\/products\/pro6_f525318a-37b9-4997-8507-6500cccc856b.jpg?v=1606986647", "\/\/cdn.shopify.com\/s\/files\/1\/0509\/6331\/6893\/products\/pro25_68386676-26f5-4a6c-a645-f155765783a1.jpg?v=1606986647", "\/\/cdn.shopify.com\/s\/files\/1\/0509\/6331\/6893\/products\/pro26_40eeee54-fffb-46f4-8dcc-4b034b2deb22.jpg?v=1606986647"],
                        "featured_image": "\/\/cdn.shopify.com\/s\/files\/1\/0509\/6331\/6893\/products\/pro3_66116319-ea9e-48c4-aee5-c0de6bf84624.jpg?v=1606986643",
                        "options": ["Color"],
                        "media": [{
                            "alt": null,
                            "id": 12413167796381,
                            "position": 1,
                            "preview_image": {
                                "aspect_ratio": 0.77,
                                "height": 1000,
                                "width": 770,
                                "src": "https:\/\/cdn.shopify.com\/s\/files\/1\/0509\/6331\/6893\/products\/pro3_66116319-ea9e-48c4-aee5-c0de6bf84624.jpg?v=1606986579"
                            },
                            "aspect_ratio": 0.77,
                            "height": 1000,
                            "media_type": "image",
                            "src": "https:\/\/cdn.shopify.com\/s\/files\/1\/0509\/6331\/6893\/products\/pro3_66116319-ea9e-48c4-aee5-c0de6bf84624.jpg?v=1606986579",
                            "width": 770
                        }, {
                            "alt": null,
                            "id": 12413175038109,
                            "position": 2,
                            "preview_image": {
                                "aspect_ratio": 0.77,
                                "height": 1000,
                                "width": 770,
                                "src": "https:\/\/cdn.shopify.com\/s\/files\/1\/0509\/6331\/6893\/products\/pro2_2c303381-fe9a-46fb-81cf-d0e8963ae517.jpg?v=1606986609"
                            },
                            "aspect_ratio": 0.77,
                            "height": 1000,
                            "media_type": "image",
                            "src": "https:\/\/cdn.shopify.com\/s\/files\/1\/0509\/6331\/6893\/products\/pro2_2c303381-fe9a-46fb-81cf-d0e8963ae517.jpg?v=1606986609",
                            "width": 770
                        }, {
                            "alt": null,
                            "id": 12413167829149,
                            "position": 3,
                            "preview_image": {
                                "aspect_ratio": 0.77,
                                "height": 1000,
                                "width": 770,
                                "src": "https:\/\/cdn.shopify.com\/s\/files\/1\/0509\/6331\/6893\/products\/pro4_f4f60b9b-a25c-4900-97e0-498d250f2661.jpg?v=1606986578"
                            },
                            "aspect_ratio": 0.77,
                            "height": 1000,
                            "media_type": "image",
                            "src": "https:\/\/cdn.shopify.com\/s\/files\/1\/0509\/6331\/6893\/products\/pro4_f4f60b9b-a25c-4900-97e0-498d250f2661.jpg?v=1606986578",
                            "width": 770
                        }, {
                            "alt": null,
                            "id": 12413167861917,
                            "position": 4,
                            "preview_image": {
                                "aspect_ratio": 0.77,
                                "height": 1000,
                                "width": 770,
                                "src": "https:\/\/cdn.shopify.com\/s\/files\/1\/0509\/6331\/6893\/products\/pro6_f525318a-37b9-4997-8507-6500cccc856b.jpg?v=1606986578"
                            },
                            "aspect_ratio": 0.77,
                            "height": 1000,
                            "media_type": "image",
                            "src": "https:\/\/cdn.shopify.com\/s\/files\/1\/0509\/6331\/6893\/products\/pro6_f525318a-37b9-4997-8507-6500cccc856b.jpg?v=1606986578",
                            "width": 770
                        }, {
                            "alt": null,
                            "id": 12413167927453,
                            "position": 5,
                            "preview_image": {
                                "aspect_ratio": 0.77,
                                "height": 1000,
                                "width": 770,
                                "src": "https:\/\/cdn.shopify.com\/s\/files\/1\/0509\/6331\/6893\/products\/pro25_68386676-26f5-4a6c-a645-f155765783a1.jpg?v=1606986578"
                            },
                            "aspect_ratio": 0.77,
                            "height": 1000,
                            "media_type": "image",
                            "src": "https:\/\/cdn.shopify.com\/s\/files\/1\/0509\/6331\/6893\/products\/pro25_68386676-26f5-4a6c-a645-f155765783a1.jpg?v=1606986578",
                            "width": 770
                        }, {
                            "alt": null,
                            "id": 12413167960221,
                            "position": 6,
                            "preview_image": {
                                "aspect_ratio": 0.77,
                                "height": 1000,
                                "width": 770,
                                "src": "https:\/\/cdn.shopify.com\/s\/files\/1\/0509\/6331\/6893\/products\/pro26_40eeee54-fffb-46f4-8dcc-4b034b2deb22.jpg?v=1606986578"
                            },
                            "aspect_ratio": 0.77,
                            "height": 1000,
                            "media_type": "image",
                            "src": "https:\/\/cdn.shopify.com\/s\/files\/1\/0509\/6331\/6893\/products\/pro26_40eeee54-fffb-46f4-8dcc-4b034b2deb22.jpg?v=1606986578",
                            "width": 770
                        }],
                        "content": "[sale_products]365[\/sale_products][affiliate_link]https:\/\/www.amazon.in\/[\/affiliate_link][product_timer]2021\/05\/25[\/product_timer][product_video]\u003ciframe src=\"https:\/\/www.youtube.com\/embed\/DpQO36cUpzs\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen=\"\"\u003e\u003c\/iframe\u003e[\/product_video] [short_description]Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book[\/short_description] [product_description]\n\u003cdiv class=\"more-description\"\u003e\n\u003ch6\u003eMore Detail\u003c\/h6\u003e\n\u003cul\u003e\n\u003cli\u003eLorem Ipsum is simply dummy text of the printing and typesetting industry\u003c\/li\u003e\n\u003cli\u003eLorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book\u003c\/li\u003e\n\u003cli\u003eIt has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged\u003c\/li\u003e\n\u003cli\u003eIt was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum\u003c\/li\u003e\n\u003cli\u003eContrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old\u003c\/li\u003e\n\u003c\/ul\u003e\n\u003c\/div\u003e\n\u003cdiv class=\"more-description\"\u003e\n\u003ch6\u003eKey Specification\u003c\/h6\u003e\n\u003cul\u003e\n\u003cli\u003eIt is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout\u003c\/li\u003e\n\u003cli\u003eThe point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy\u003c\/li\u003e\n\u003cli\u003eVarious versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like)\u003c\/li\u003e\n\u003cli\u003eThere are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable\u003c\/li\u003e\n\u003cli\u003eIf you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text\u003c\/li\u003e\n\u003c\/ul\u003e\n\u003c\/div\u003e\n[\/product_description]"
                    },
                    onVariantSelected: selectCallback,
                    enableHistoryState: true
                });
                // Add label if only one product option and it isn't 'Title'. Could be 'Size'.

                $('.selector-wrapper:eq(0)').prepend('<label for="productSelect-option-0">Color</label>');

                // Hide selectors if we only have 1 variant and its title contains 'Default'.

            });


            $("#zoom_mw").elevateZoom({
                gallery: 'gallery_01',
                zoomType: 'inner',
                responsive: false,
                cursor: 'crosshair',
                galleryActiveClass: 'active',
                imageCrossfade: true,
                loadingIcon: ''
            });
            //pass the images to Fancybox
            $("#zoom_mw").bind("click", function (e) {
                var ez = $('#zoom_mw').data('elevateZoom');
                $.fancybox(ez.getGalleryList());
                return false;
            });
        </script>

        <style>
            .product-details-page {
                padding-top: 60px;
                padding-bottom: 0px;
            }

            /* product detail col css */
            @media (max-width: 767px) {
                .product-details-page {
                    padding-top: 40px;
                    padding-bottom: 0px;
                }

                .product-details-page .product_details {
                    margin-top: 20px;
                }

                .product-details-page .product_details:first-child {
                    margin-top: 0;
                }
            }

            /* product image css */
            .product-details-page .product_details .product_detail_img {
                position: relative;
            }

            .product_detail_img .product_img_top {
                position: relative;
                border: 2px solid #e2e2e2;
                overflow: hidden;
            }

            .product_detail_img .product_img_top button.full-view {
                color: #222;
                font-size: 28px;
                position: absolute;
                bottom: 15px;
                right: 15px;
                height: 40px;
                width: 40px;
                background-color: #fff;
                border: 2px solid #222;
                z-index: 1;
                line-height: 0;
                opacity: 0.5;
            }

            .product_detail_img .product_img_top button.full-view:hover {
                opacity: 0.8;
            }

            .product_detail_img .product_img_top .zoomWrapper {
                width: 100% !important;
            }

            .product_detail_img .product_img_top .zoomWrapper img {
                display: block;
                min-width: 100%;
            }

            .product_detail_img .product_img_top .zoomWrapper img.active-zoom {
                height: auto !important;
                width: 100% !important
            }

            .product-details-page .pro-detail-slider {
                margin-top: 15px;
            }

            .product-details-page .pro-detail-slider a.product-single__thumbnail {
                display: block;
            }

            .product-details-page .pro-detail-slider a.product-single__thumbnail img {
                border: 1px solid #e2e2e2;
            }

            .product-details-page .pro-detail-slider a.product-single__thumbnail img:hover {
                border: 1px solid #222;
            }

            .product-details-page .pro-detail-slider a.product-single__thumbnail.active img {
                border: 1px solid #105caa;
            }

            /* product slider css */
            .pro-detail-slider.owl-carousel .owl-nav {
                margin-top: 0;
                line-height: 0;
            }

            .pro-detail-slider.owl-carousel .owl-nav button {
                font-size: 18px;
                position: absolute;
                bottom: 50%;

                transform: translateY(50%);

                width: 30px;
                height: 30px;
                background-color: #fff;
                margin: 0;
                border: 1px solid #e2e2e2;
                border-radius: 0;
            }

            .pro-detail-slider.owl-carousel .owl-nav button:hover {
                background-color: #105caa;
                border: 1px solid #105caa;
            }

            .pro-detail-slider.owl-carousel .owl-nav button.owl-prev {

                left: -15px;

            }

            .pro-detail-slider.owl-carousel .owl-nav button.owl-next {

                right: -15px;

            }

            /* product detail title css*/
            .product_details_info .pro-nprist .product-title h6 {
                font-size: 16px;
                text-transform: capitalize;
                line-height: 1;
            }

            /* product detail rating css*/
            .product_details_info .pro-nprist .product-ratting {
                margin-top: 17px;
            }

            .product_details_info .pro-nprist .product-ratting .spr-badge {
                display: flex;
                align-items: center;
                line-height: 1;
            }

            .product_details_info .pro-nprist .product-ratting .spr-badge-starrating .spr-icon {
                font-size: 14px !important;
            }

            .product_details_info .pro-nprist .product-ratting .spr-badge-caption {
                display: block;

                margin-left: 15px;

            }

            /* product detail price css*/
            .product_details_info .pro-nprist .pro-prlb {
                margin-top: 18px;
            }

            .product_details_info .pro-nprist .pro-prlb.pro-sale {
                display: flex;
                align-items: center;
                margin-top: 19px;
            }

            .product_details_info .pro-nprist .pro-prlb .price-box .new-price {
                font-size: 16px;
            }

            .product_details_info .pro-nprist .pro-prlb .product-label {

                margin-left: 5px;

            }

            .product_details_info .pro-nprist .pro-prlb .product-label span {
                color: #fff;
                position: unset;
                width: auto;
                background-color: #105caa;
            }

            .product_details_info .pro-nprist .pro-prlb .product-label span::before {
                content: "-";
            }

            .product_details_info .pro-nprist .pro-prlb .product-label span::after {
                content: "%";
            }

            .product_details_info .available-desc {
                margin-top: 27px;
                padding-top: 28px;
                border-top: 1px solid #e2e2e2;
            }

            .product_details_info .available-desc.pro-sale {
                margin-top: 30px;
            }

            @media (max-width: 767px) {
                .product_details_info .available-desc.pro-sale {
                    margin-top: 20px;
                    padding-top: 18px;
                }

                .product_details_info .available-desc {
                    margin-top: 17px;
                    padding-top: 18px;
                }
            }

            /* product detail stock css*/
            .product_details_info .pro-nprist .product-inventory {
            }

            .product_details_info .pro-nprist .product-inventory h6 {
                display: flex;
                align-items: center;
                line-height: 1;
            }

            .product_details_info .pro-nprist .product-inventory span.in-stock,
            .product_details_info .pro-nprist .product-inventory span.out-stock {
                font-size: 14px;

                margin-left: 15px;

            }

            .product_details_info .pro-nprist .stock-inventory {
                margin-top: 10px;
                line-height: 1;
            }

            .product_details_info .pro-nprist .stock-inventory span.available-stock {
                color: #105caa;
                font-weight: 600;
            }

            .product_details_info .pro-nprist .timer-section {
                margin: 15px 0 0px;
            }

            .product_details_info .pro-nprist .product-description {
                margin-top: 8px;
            }

            /* product variant css */
            .product_details_info .pro-detail-action {
                margin-top: 22px;
                padding-top: 30px;
                border-top: 1px solid #e2e2e2;
            }

            @media (max-width: 767px) {
                .product_details_info .pro-detail-action {
                    margin-top: 12px;
                    padding-top: 20px;
                }
            }

            /* product details quantity css*/
            .product_details_info .pro-detail-action .product-actions {
                margin-top: 15px;
            }

            .product_details_info .pro-detail-action .product-actions .product-quantity-action {
                display: flex;
                align-items: center;
            }

            .product_details_info .pro-detail-action .product-actions .product-quantity-action h6 {
                font-size: 16px;
                text-transform: capitalize;
                line-height: 1;
            }

            .product_details_info .pro-detail-action .product-actions .product-quantity-action .product-quantity {

                margin-left: 15px;

            }

            /* product detail action button css */
            .product_details_info .pro-detail-action .product-actions .pro-detail-button {
                display: flex;
                -ms-flex-wrap: wrap;
                flex-wrap: wrap;
                margin-top: 15px;

                margin-left: -15px;

            }

            .product_details_info .pro-detail-action .product-actions .pro-detail-button button.add-to-cart,
            .product_details_info .pro-detail-action .product-actions .pro-detail-button a.wishlist {
                width: calc(50% - 15px);

                margin-left: 15px;

            }

            @media (max-width: 991px) {
                .product_details_info .pro-detail-action .product-actions .pro-detail-button button.add-to-cart,
                .product_details_info .pro-detail-action .product-actions .pro-detail-button a.wishlist {
                    width: calc(100% - 15px);
                }

                .product_details_info .pro-detail-action .product-actions .pro-detail-button a.wishlist {
                    margin-top: 15px;
                }
            }

            /* product detail other button css */
            .product_details_info .pro-detail-action .product-actions .pro-aff-che {
                display: flex;
                -ms-flex-wrap: wrap;
                flex-wrap: wrap;
                margin-top: 15px;

                margin-left: -15px;

            }

            .product_details_info .pro-detail-action .product-actions .pro-aff-che a {
                width: calc(50% - 15px);

                margin-left: 15px;

            }

            @media (max-width: 991px) {
                .product_details_info .pro-detail-action .product-actions .pro-aff-che a {
                    width: calc(100% - 15px);
                    margin-top: 15px;
                }

                .product_details_info .pro-detail-action .product-actions .pro-aff-che a:first-of-type {
                    margin-top: 0px;
                }
            }

            /* product detail sku social css */
            .product_details_info .pro-skss {
                margin-top: 30px;
                padding-top: 25px;
                border-top: 1px solid #e2e2e2;
            }

            .product_details_info .pro-skss .product-sku,
            .product_details_info .pro-skss .share-icons {
                display: flex;
                align-items: center;
            }

            .product_details_info .pro-skss .share-icons {
                margin-top: 25px;
            }

            .product_details_info .pro-skss .product-sku h6,
            .product_details_info .pro-skss .share-icons h6 {
                font-size: 16px;
                text-transform: capitalize;
                line-height: 1;
            }

            .product_details_info .pro-skss .product-sku span,
            .product_details_info .pro-skss .share-icons ul {

                margin-left: 15px;

            }

            @media (max-width: 767px) {
                .product_details_info .pro-skss {
                    margin-top: 20px;
                    padding-top: 15px;
                }

                .product_details_info .pro-skss .share-icons {
                    margin-top: 15px;
                }
            }

            /* product detail payment img css */
            .product_details_info .pro-skss .product-payment-image {
                margin-top: 28px;
            }

            .template-product.mfp-zoom-out-cur {
                overflow: hidden;
            }

            .template-product.mfp-zoom-out-cur .mfp-wrap button.mfp-close,
            .template-product.mfp-zoom-out-cur .mfp-wrap button.mfp-arrow {
                font-size: 30px;
            }

            @media (max-width: 767px) {
                .product_details_info .pro-skss .product-payment-image {
                    margin-top: 18px;
                }
            }
        </style>
    </div>
    <div id="shopify-section-single-product-tab" class="shopify-section">
        <section class="product-description-tab">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="tab">
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation">
                                    <a class="active show" href="#pro-dec" data-toggle="tab" role="tab"
                                       aria-selected="true">
                                        Description
                                    </a>
                                </li>


                                <li role="presentation">
                                    <a href="#pro-review" data-toggle="tab" role="tab" aria-selected="false">
                                        Reviews
                                    </a>
                                </li>


                                <li role="presentation">
                                    <a href="#product-video" data-toggle="tab" aria-selected="false">
                                        Video
                                    </a>
                                </li>


                                <li role="presentation">
                                    <a href="#comment-box" data-toggle="tab" aria-selected="false">
                                        Comments
                                    </a>
                                </li>


                                <li role="presentation">
                                    <a href="#custom-tab-1" data-toggle="tab" role="tab" aria-selected="false">
                                        size-gude
                                    </a>
                                </li>


                            </ul>
                        </div>

                        <div class="description-review-text tab-content">
                            <div class="tab-pane active" id="pro-dec" role="tabpanel">
                                <div class="more-description">
                                    <h6>More Detail</h6>
                                    <ul>
                                        <li>Lorem Ipsum is simply dummy text of the printing and typesetting industry
                                        </li>
                                        <li>Lorem Ipsum has been the industry's standard dummy text ever since the
                                            1500s, when an unknown printer took a galley of type and scrambled it to
                                            make a type specimen book
                                        </li>
                                        <li>It has survived not only five centuries, but also the leap into electronic
                                            typesetting, remaining essentially unchanged
                                        </li>
                                        <li>It was popularised in the 1960s with the release of Letraset sheets
                                            containing Lorem Ipsum passages, and more recently with desktop publishing
                                            software like Aldus PageMaker including versions of Lorem Ipsum
                                        </li>
                                        <li>Contrary to popular belief, Lorem Ipsum is not simply random text. It has
                                            roots in a piece of classical Latin literature from 45 BC, making it over
                                            2000 years old
                                        </li>
                                    </ul>
                                </div>
                                <div class="more-description">
                                    <h6>Key Specification</h6>
                                    <ul>
                                        <li>It is a long established fact that a reader will be distracted by the
                                            readable content of a page when looking at its layout
                                        </li>
                                        <li>The point of using Lorem Ipsum is that it has a more-or-less normal
                                            distribution of letters, as opposed to using 'Content here, content here',
                                            making it look like readable English. Many desktop publishing packages and
                                            web page editors now use Lorem Ipsum as their default model text, and a
                                            search for 'lorem ipsum' will uncover many web sites still in their infancy
                                        </li>
                                        <li>Various versions have evolved over the years, sometimes by accident,
                                            sometimes on purpose (injected humour and the like)
                                        </li>
                                        <li>There are many variations of passages of Lorem Ipsum available, but the
                                            majority have suffered alteration in some form, by injected humour, or
                                            randomised words which don't look even slightly believable
                                        </li>
                                        <li>If you are going to use a passage of Lorem Ipsum, you need to be sure there
                                            isn't anything embarrassing hidden in the middle of text
                                        </li>
                                    </ul>
                                </div>

                            </div>


                            <div class="tab-pane" id="pro-review" role="tabpanel">
                                <div id="shopify-product-reviews" data-id="5822867472541"></div>
                            </div>


                            <div class="tab-pane" id="product-video" role="tabpanel">


                                <div class="youtube-video">
                                    <iframe src="https://www.youtube.com/embed/DpQO36cUpzs" frameborder="0"
                                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                            allowfullscreen=""></iframe>
                                </div>
                            </div>


                            <div role="tabpanel" class="tab-pane" id="comment-box">
                                <div class="fb-comment-box">
                                    <!-- facebook comment box start -->

                                    <div class="fb-comments"
                                         data-href="https://electon-store.myshopify.com/products/boat" data-width="100%"
                                         data-numposts="10"></div>
                                    <div id="fb-root"></div>
                                    <script>(function (d, s, id) {
                                            var js, fjs = d.getElementsByTagName(s)[0];
                                            if (d.getElementById(id)) return;
                                            js = d.createElement(s);
                                            js.id = id;
                                            js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.8";
                                            fjs.parentNode.insertBefore(js, fjs);
                                        }(document, 'script', 'facebook-jssdk'));</script>

                                    <!-- facebook comment box end -->
                                </div>
                            </div>


                            <div class="tab-pane" id="custom-tab-1" role="tabpanel">

                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </section>


        <style>
            .product-description-tab {
                padding-top: 60px;
                padding-bottom: 0px;
            }

            @media (max-width: 767px) {
                .product-description-tab {
                    padding-top: 40px;
                    padding-bottom: 0px;
                }
            }

            /* product detail tab css */
            .product-description-tab .tab {
                display: flex;
                justify-content: center;
            }

            .product-description-tab .tab ul.nav-tabs {
                display: flex;
                border: 1px solid #e2e2e2;
            }

            .product-description-tab .tab ul.nav-tabs li {
                margin: -1px 0;

                border-right: 1px solid #e2e2e2;

            }

            .product-description-tab .tab ul.nav-tabs li:last-child {

                border-right: none;

            }

            .product-description-tab .tab ul.nav-tabs li a {
                color: #105caa;
                font-size: 14px;
                padding: 12px 15px;
                font-weight: 600;
            }

            .product-description-tab .tab ul.nav-tabs li a.active {
                color: #fff;
                background-color: #105caa;
            }

            .product-description-tab .tab ul.nav-tabs li a,
            .product-description-tab .tab ul.nav-tabs li:hover a {
                -webkit-transition: all 0s ease-in-out 0s;
                -o-transition: all 0s ease-in-out 0s;
                transition: all 0s ease-in-out 0s;
            }

            @media (max-width: 767px) {
                .product-description-tab .tab ul.nav-tabs {
                    justify-content: flex-start;
                }

                .product-description-tab .tab ul.nav-tabs li {
                    margin: 0px 0;
                }
            }

            /* product extra detail tab css */
            .product-description-tab .description-review-text .more-description {
                margin-top: 22px;
            }

            .product-description-tab .description-review-text .more-description:first-child {
                margin-top: 29px;
            }

            .product-description-tab .description-review-text .more-description h6 {
                font-size: 16px;
                text-transform: capitalize;
                line-height: 1;
            }

            .product-description-tab .description-review-text .more-description ul {

                padding-left: 17px;

                list-style: square;
            }

            .product-description-tab .description-review-text .more-description ul li {
                margin-top: 4px;
            }

            .product-description-tab .description-review-text .more-description ul li:first-child {
                margin-top: 10px;
            }

            @media (max-width: 767px) {
                .product-description-tab .description-review-text .more-description {
                    margin-top: 12px;
                }

                .product-description-tab .description-review-text .more-description:first-child {
                    margin-top: 19px;
                }
            }

            /* product review tab css */
            .product-description-tab .description-review-text #shopify-product-reviews {
                margin: 0px 0 0;
            }

            .product-description-tab .description-review-text .spr-container {
                padding: 0;
                border: none;
            }

            .product-description-tab .description-review-text .spr-container .spr-header {
                margin-top: 30px;
            }

            .product-description-tab .description-review-text .spr-container .spr-header h2.spr-header-title {
                font-size: 16px;
                margin-bottom: 0;
                text-transform: capitalize;
                line-height: 1;
            }

            .product-description-tab .description-review-text .spr-container .spr-header .spr-summary .spr-summary-starrating {
                display: flex;
                margin: 15px 0 0;
                line-height: 0;
            }

            .product-description-tab .description-review-text .spr-container .spr-header .spr-summary .spr-summary-starrating .spr-icon {
                display: block;
                font-size: 14px !important;
                width: 16px;
                height: auto;
                position: unset;

                margin-right: 5px;

                line-height: 0;
            }

            .product-description-tab .description-review-text .spr-container .spr-header .spr-summary .spr-summary-starrating .spr-icon:last-child {

                margin-right: 0px;

            }

            .product-description-tab .description-review-text .spr-container .spr-header .spr-summary .spr-summary-starrating .spr-icon-star:before,
            .product-description-tab .description-review-text .spr-container .spr-header .spr-summary .spr-summary-starrating .spr-icon-star-half-alt:before {
                color: #ffb503;
            }

            .product-description-tab .description-review-text .spr-container .spr-header .spr-summary .spr-summary-caption {
                display: block;
                margin-top: 10px;
                line-height: 1;
            }

            .product-description-tab .description-review-text .spr-container .spr-header .spr-summary .spr-summary-actions {
                display: block;
                margin-top: 13px;

                text-align: left;

            }

            .product-description-tab .description-review-text .spr-container .spr-header .spr-summary .spr-summary-actions-newreview {
                float: none;
            }

            .product-description-tab .description-review-text .spr-container .spr-header .spr-summary .spr-summary-actions-newreview,
            .product-description-tab .description-review-text .spr-container .spr-content .spr-form form .spr-button {
                color: #fff;
                font-size: 14px;
                padding: 10px 20px;
                background-color: #222;
                text-transform: uppercase;
                border: none;
                border-radius: 0;
                line-height: 1;
            }

            .product-description-tab .description-review-text .spr-container .spr-header .spr-summary .spr-summary-actions-newreview:hover,
            .product-description-tab .description-review-text .spr-container .spr-content .spr-form form .spr-button:hover {
                background-color: #105caa;
            }

            .product-description-tab .description-review-text .spr-container .spr-content .spr-form {
                margin: 30px 0 0 0;
                padding: 30px 0 0 0;
                border-top: 1px solid #eee;
            }

            .product-description-tab .description-review-text .spr-container .spr-content .spr-form form h3.spr-form-title {
                font-size: 16px;
                text-transform: capitalize;
                line-height: 1;
            }

            .product-description-tab .description-review-text .spr-container .spr-content .spr-form form fieldset label.spr-form-label {
                display: block;
                font-size: 14px;
                margin-bottom: 10px;
                line-height: 1;
            }

            .product-description-tab .description-review-text .spr-container .spr-content .spr-form form fieldset .spr-form-contact-name {
                margin: 15px 0 0px 0;
            }

            .product-description-tab .description-review-text .spr-container .spr-content .spr-form form fieldset .spr-form-contact-email,
            .product-description-tab .description-review-text .spr-container .spr-content .spr-form form fieldset .spr-form-review-rating,
            .product-description-tab .description-review-text .spr-container .spr-content .spr-form form fieldset .spr-form-review-title,
            .product-description-tab .description-review-text .spr-container .spr-content .spr-form form fieldset .spr-form-review-body {
                margin: 15px 0 0px 0;
            }

            .product-description-tab .description-review-text .spr-container .spr-content .spr-form form fieldset .spr-form-review-rating .spr-starrating {
                display: flex;
            }

            .product-description-tab .description-review-text .spr-container .spr-content .spr-form form fieldset .spr-form-review-rating .spr-starrating a {
                display: block;
                font-size: 14px !important;
                width: 16px;
                height: auto;
                position: unset;

                margin-right: 5px;

                opacity: 1;
                line-height: 0;
            }

            .product-description-tab .description-review-text .spr-container .spr-content .spr-form form fieldset .spr-form-review-rating .spr-starrating a:last-child {

                margin-right: 0px;

            }

            .product-description-tab .description-review-text .spr-container .spr-content .spr-form form fieldset .spr-form-review-rating .spr-starrating a.spr-icon.spr-icon-star-empty::before {
                content: '\e800';
                color: #ccc;
            }

            .product-description-tab .description-review-text .spr-container .spr-content .spr-form form fieldset .spr-form-review-rating .spr-starrating a.spr-icon,
            .product-description-tab .description-review-text .spr-container .spr-content .spr-form form fieldset .spr-form-review-rating .spr-starrating a.spr-icon.spr-icon-star.spr-icon-star-hover::before {
                color: #ffb503;
            }

            .product-description-tab .description-review-text .spr-container .spr-content .spr-form form .spr-button {
                float: none;
                margin-top: 15px;
            }

            .product-description-tab .description-review-text .spr-container .spr-content .spr-form form .spr-form-message-success {
                color: #28a745;
                margin-top: 15px;
                font-weight: 600;
                line-height: 1;
            }

            .product-description-tab .description-review-text .spr-container .spr-content .spr-reviews {
                margin: 0px 0 0 0;
                padding: 0px 0;
            }

            .product-description-tab .description-review-text .spr-container .spr-content .spr-reviews .spr-review {
                padding: 30px 0 0;
                margin-top: 25px;
                border-top: 1px solid #eee;
            }

            .product-description-tab .description-review-text .spr-container .spr-content .spr-reviews .spr-review:first-child {
                margin-top: 30px;
            }

            .product-description-tab .description-review-text .spr-container .spr-content .spr-reviews .spr-review .spr-review-header-starratings {
                display: block;
                margin: 0;
                line-height: 0;
            }

            .product-description-tab .description-review-text .spr-container .spr-content .spr-reviews .spr-review .spr-review-header-starratings .spr-icon {
                font-size: 14px !important;
                position: unset;
                height: auto;
                width: auto;

                margin-right: 5px;

                opacity: 1;
            }

            .product-description-tab .description-review-text .spr-container .spr-content .spr-reviews .spr-review .spr-review-header-starratings .spr-icon:last-child {

                margin-right: 0px;

            }

            .product-description-tab .description-review-text .spr-container .spr-content .spr-reviews .spr-review .spr-review-header-starratings .spr-icon-star:before {
                color: #ffb503;
            }

            .product-description-tab .description-review-text .spr-container .spr-content .spr-reviews .spr-review .spr-review-header-starratings .spr-icon-star-empty:before {
                content: '\e800';
                color: #ccc;
            }

            .product-description-tab .description-review-text .spr-container .spr-content .spr-reviews .spr-review .spr-review-header h3.spr-review-header-title {
                font-size: 16px;
                margin-top: 10px;
                text-transform: capitalize;
                line-height: 1;
            }

            .product-description-tab .description-review-text .spr-container .spr-content .spr-reviews .spr-review .spr-review-header span.spr-review-header-byline {
                display: block;
                font-size: 14px;
                margin: 10px 0px 0 0;
                text-transform: capitalize;
                font-style: normal;
                opacity: 1;
                line-height: 1;
            }

            .product-description-tab .description-review-text .spr-container .spr-content .spr-reviews .spr-review .spr-review-header span.spr-review-header-byline strong {
                font-weight: 600;
            }

            .product-description-tab .description-review-text .spr-container .spr-content .spr-reviews .spr-review .spr-review-content {
                margin: 10px 0 0px 0;
            }

            .product-description-tab .description-review-text .spr-container .spr-content .spr-reviews .spr-review .spr-review-content p.spr-review-content-body {
                font-size: 14px;
            }

            .product-description-tab .description-review-text .spr-container .spr-content .spr-reviews .spr-review .spr-review-footer {
                display: none;
            }

            @media (max-width: 767px) {
                .product-description-tab .description-review-text .spr-container .spr-header {
                    margin-top: 20px;
                }

                .product-description-tab .description-review-text .spr-container .spr-header h2.spr-header-title,
                .product-description-tab .description-review-text .spr-container .spr-header .spr-summary .spr-summary-caption {
                    text-align: left;
                }

                .product-description-tab .description-review-text .spr-container .spr-content .spr-form {
                    margin: 20px 0 0 0;
                    padding: 20px 0 0 0;
                }

                .product-description-tab .description-review-text .spr-container .spr-content .spr-reviews .spr-review {
                    padding: 20px 0 0;
                    margin-top: 15px;
                }

                .product-description-tab .description-review-text .spr-container .spr-content .spr-reviews .spr-review:first-child {
                    margin-top: 20px;
                }
            }

            /* product review form error css */
            .product-description-tab .description-review-text .spr-container .spr-content .spr-form form .spr-form-message-error {
                padding: 10px 15px;
                margin: 15px 0 0;
            }

            /* product video tab css */
            .product-description-tab .description-review-text .youtube-video {
                margin-top: 30px;
            }

            .product-description-tab .description-review-text .youtube-video .video-wrapper {
                padding-bottom: 0;
                line-height: 0;
            }

            .product-description-tab .description-review-text .youtube-video .video-wrapper iframe {
                height: 350px;
                width: 100%;
                position: unset;
            }

            @media (max-width: 767px) {
                .product-description-tab .description-review-text .youtube-video {
                    margin-top: 20px;
                }
            }

            /* product facebook comment css */
            .product-description-tab .description-review-text .fb-comment-box {
                margin-top: 22px;
            }

            @media (max-width: 767px) {
                .product-description-tab .description-review-text .fb-comment-box {
                    margin-top: 12px;
                }
            }

            /* product size chart css */
            .product-description-tab .description-review-text .size-chart {
                margin-top: 30px;
            }

            @media (max-width: 767px) {
                .product-description-tab .description-review-text .size-chart {
                    margin-top: 20px;
                }
            }
        </style>
    </div>
    <div id="shopify-section-related-product" class="shopify-section"><!-- PRODUCT SECTION START -->


        <section class="related-product">
            <div class="container">
                <div class="row">
                    <div class="col">

                        <div class="section-capture">
                            <div class="section-title">

                                <h2 class="heading-home">Related Product</h2>


                            </div>
                        </div>

                        <div class="product-related-slider owl-carousel owl-theme" id="related-slider">


                            <div class="item">
                                <div class="single-product-wrap stock-out">
                                    <div class="product-image stock-out">
                                        <a class="pro-img" href="{{url("/collections/electronic/details")}}">
                                            <img class="img-fluid img1"
                                                 src="//cdn.shopify.com/s/files/1/0509/6331/6893/products/pro58_300X350_crop_center.jpg?v=1606987893"
                                                 alt="Refrigerator">
                                            <img class="img-fluid img2"
                                                 src="//cdn.shopify.com/s/files/1/0509/6331/6893/products/pro59_300X350_crop_center.jpg?v=1606987893"
                                                 alt="Refrigerator"/>
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
                                            <a href="/collections/electronic/products/refrigerator"
                                               title="Refrigerator">Refrigerator</a>
                                        </h6>
                                        <div class="price-box">
                                            <span class="new-price"><span class=money>Rs. 120.00</span></span>

                                            <span class="old-price"><span class=money>Rs. 130.00</span></span>

                                        </div>
                                        <p class="product-description">Lorem Ipsum is simply dummy text of the printing
                                            and typesetting industry. Lorem Ipsum has been t...
                                        </p>

                                    </div>
                                </div>
                                <style>
                                    a.add-to-cart.disabled {
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
                                        <a class="pro-img" href="{{url("/collections/electronic/details")}}">
                                            <img class="img-fluid img1"
                                                 src="//cdn.shopify.com/s/files/1/0509/6331/6893/products/pro37_9c497408-cd03-4ba8-b516-981c770bbaae_300X350_crop_center.jpg?v=1606987296"
                                                 alt="JBL Speaker">
                                            <img class="img-fluid img2"
                                                 src="//cdn.shopify.com/s/files/1/0509/6331/6893/products/pro36_20b3e4a6-54ec-42a8-a760-3f40b78c2bc9_300X350_crop_center.jpg?v=1606987296"
                                                 alt="JBL Speaker"/>
                                        </a>
                                        <div class="product-label">


                                            <span class="new-title">New</span>


                                        </div>

                                        <div class="product-action">

                                            <a href="javascript:void(0);"
                                               onclick="Shopify.addItem(37032003666077, 1); return false;"
                                               class="add-to-cart ajax-spin-cart" data-toggle="tooltip"
                                               data-placement="top" title="Add to cart">
                <span>
                    <span class="cart-title"><i class="ti-shopping-cart"></i></span>
                    <span class="cart-loading animated infinite rotateOut"><i class="ion-load-a"></i></span>
                    <span class="cart-added"><i class="ion-android-done"></i></span>
                    <span class="cart-unavailable"><i class="ion-android-alert"></i></span>
                </span>
                                            </a>

                                            <a href="javascript:void(0);" onclick="quiqview('jbl-speaker')"
                                               class="quick-view" data-toggle="tooltip" data-placement="top"
                                               title="Quickview">
                                                <i class="ti-eye"></i>
                                            </a>

                                            <a class="wishlist" href="/account/login" title="Wishlist"
                                               data-toggle="tooltip" data-placement="top" title="Wishlist">
                                                <i class="ti-heart"></i>
                                            </a>

                                        </div>

                                    </div>
                                    <div class="product-content">
                                        <div class="product-ratting">
                                            <span class="shopify-product-reviews-badge" data-id="5822868717725"></span>
                                        </div>
                                        <h6>
                                            <a href="/collections/electronic/products/jbl-speaker" title="JBL Speaker">JBL
                                                Speaker</a>
                                        </h6>
                                        <div class="price-box">
                                            <span class="new-price"><span class=money>Rs. 60.00</span></span>

                                        </div>
                                        <p class="product-description">Lorem Ipsum is simply dummy text of the printing
                                            and typesetting industry. Lorem Ipsum has been t...
                                        </p>

                                        <div class="product-action">

                                            <a href="javascript:void(0);"
                                               onclick="Shopify.addItem(37032003666077, 1); return false;"
                                               class="add-to-cart ajax-spin-cart" data-toggle="tooltip"
                                               data-placement="top" title="Add to cart">
                <span>
                    <span class="cart-title"><i class="ti-shopping-cart"></i></span>
                    <span class="cart-loading animated infinite rotateOut"><i class="ion-load-a"></i></span>
                    <span class="cart-added"><i class="ion-android-done"></i></span>
                    <span class="cart-unavailable"><i class="ion-android-alert"></i></span>
                </span>
                                            </a>

                                            <a href="javascript:void(0);" onclick="quiqview('jbl-speaker')"
                                               class="quick-view" data-toggle="tooltip" data-placement="top"
                                               title="Quickview">
                                                <i class="ti-eye"></i>
                                            </a>

                                            <a class="wishlist" href="/account/login" title="Wishlist"
                                               data-toggle="tooltip" data-placement="top" title="Wishlist">
                                                <i class="ti-heart"></i>
                                            </a>

                                        </div>

                                    </div>
                                </div>
                                <style>
                                    a.add-to-cart.disabled {
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
                                        <a class="pro-img" href="{{url("/collections/electronic/details")}}">
                                            <img class="img-fluid img1"
                                                 src="//cdn.shopify.com/s/files/1/0509/6331/6893/products/pro11_eca584c8-e1e1-404d-996d-af35cc9909c2_300X350_crop_center.jpg?v=1606987596"
                                                 alt="Laptop">
                                            <img class="img-fluid img2"
                                                 src="//cdn.shopify.com/s/files/1/0509/6331/6893/products/pro12_300X350_crop_center.jpg?v=1606987596"
                                                 alt="Laptop"/>
                                        </a>
                                        <div class="product-label">


                                            <span class="new-title">New</span>


                                            <span class="percent-count">-5%</span>


                                        </div>

                                        <div class="product-action">

                                            <a href="javascript:void(0);"
                                               onclick="Shopify.addItem(37031998619805, 1); return false;"
                                               class="add-to-cart ajax-spin-cart" data-toggle="tooltip"
                                               data-placement="top" title="Add to cart">
                <span>
                    <span class="cart-title"><i class="ti-shopping-cart"></i></span>
                    <span class="cart-loading animated infinite rotateOut"><i class="ion-load-a"></i></span>
                    <span class="cart-added"><i class="ion-android-done"></i></span>
                    <span class="cart-unavailable"><i class="ion-android-alert"></i></span>
                </span>
                                            </a>

                                            <a href="javascript:void(0);" onclick="quiqview('laptop')"
                                               class="quick-view" data-toggle="tooltip" data-placement="top"
                                               title="Quickview">
                                                <i class="ti-eye"></i>
                                            </a>

                                            <a class="wishlist" href="/account/login" title="Wishlist"
                                               data-toggle="tooltip" data-placement="top" title="Wishlist">
                                                <i class="ti-heart"></i>
                                            </a>

                                        </div>

                                    </div>
                                    <div class="product-content">
                                        <div class="product-ratting">
                                            <span class="shopify-product-reviews-badge" data-id="5822867701917"></span>
                                        </div>
                                        <h6>
                                            <a href="/collections/electronic/products/laptop" title="Laptop">Laptop</a>
                                        </h6>
                                        <div class="price-box">
                                            <span class="new-price"><span class=money>Rs. 200.00</span></span>

                                            <span class="old-price"><span class=money>Rs. 210.00</span></span>

                                        </div>
                                        <p class="product-description">Lorem Ipsum is simply dummy text of the printing
                                            and typesetting industry. Lorem Ipsum has been t...
                                        </p>

                                        <div class="product-action">

                                            <a href="javascript:void(0);"
                                               onclick="Shopify.addItem(37031998619805, 1); return false;"
                                               class="add-to-cart ajax-spin-cart" data-toggle="tooltip"
                                               data-placement="top" title="Add to cart">
                <span>
                    <span class="cart-title"><i class="ti-shopping-cart"></i></span>
                    <span class="cart-loading animated infinite rotateOut"><i class="ion-load-a"></i></span>
                    <span class="cart-added"><i class="ion-android-done"></i></span>
                    <span class="cart-unavailable"><i class="ion-android-alert"></i></span>
                </span>
                                            </a>

                                            <a href="javascript:void(0);" onclick="quiqview('laptop')"
                                               class="quick-view" data-toggle="tooltip" data-placement="top"
                                               title="Quickview">
                                                <i class="ti-eye"></i>
                                            </a>

                                            <a class="wishlist" href="/account/login" title="Wishlist"
                                               data-toggle="tooltip" data-placement="top" title="Wishlist">
                                                <i class="ti-heart"></i>
                                            </a>

                                        </div>

                                    </div>
                                </div>
                                <style>
                                    a.add-to-cart.disabled {
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
                                        <a class="pro-img" href="{{url("/collections/electronic/details")}}">
                                            <img class="img-fluid img1"
                                                 src="//cdn.shopify.com/s/files/1/0509/6331/6893/products/pro15_300X350_crop_center.jpg?v=1606987157"
                                                 alt="I Phone">
                                            <img class="img-fluid img2"
                                                 src="//cdn.shopify.com/s/files/1/0509/6331/6893/products/pro18_300X350_crop_center.jpg?v=1606987162"
                                                 alt="I Phone"/>
                                        </a>
                                        <div class="product-label">


                                            <span class="new-title">New</span>


                                            <span class="percent-count">-2%</span>


                                        </div>

                                        <div class="product-action">

                                            <a href="javascript:void(0);"
                                               onclick="Shopify.addItem(37032002125981, 1); return false;"
                                               class="add-to-cart ajax-spin-cart" data-toggle="tooltip"
                                               data-placement="top" title="Add to cart">
                <span>
                    <span class="cart-title"><i class="ti-shopping-cart"></i></span>
                    <span class="cart-loading animated infinite rotateOut"><i class="ion-load-a"></i></span>
                    <span class="cart-added"><i class="ion-android-done"></i></span>
                    <span class="cart-unavailable"><i class="ion-android-alert"></i></span>
                </span>
                                            </a>

                                            <a href="javascript:void(0);" onclick="quiqview('i-phone')"
                                               class="quick-view" data-toggle="tooltip" data-placement="top"
                                               title="Quickview">
                                                <i class="ti-eye"></i>
                                            </a>

                                            <a class="wishlist" href="/account/login" title="Wishlist"
                                               data-toggle="tooltip" data-placement="top" title="Wishlist">
                                                <i class="ti-heart"></i>
                                            </a>

                                        </div>

                                    </div>
                                    <div class="product-content">
                                        <div class="product-ratting">
                                            <span class="shopify-product-reviews-badge" data-id="5822868193437"></span>
                                        </div>
                                        <h6>
                                            <a href="/collections/electronic/products/i-phone" title="I Phone">I
                                                Phone</a>
                                        </h6>
                                        <div class="price-box">
                                            <span class="new-price"><span class=money>Rs. 225.00</span></span>

                                            <span class="old-price"><span class=money>Rs. 230.00</span></span>

                                        </div>
                                        <p class="product-description">Lorem Ipsum is simply dummy text of the printing
                                            and typesetting industry. Lorem Ipsum has been t...
                                        </p>

                                        <div class="product-action">

                                            <a href="javascript:void(0);"
                                               onclick="Shopify.addItem(37032002125981, 1); return false;"
                                               class="add-to-cart ajax-spin-cart" data-toggle="tooltip"
                                               data-placement="top" title="Add to cart">
                <span>
                    <span class="cart-title"><i class="ti-shopping-cart"></i></span>
                    <span class="cart-loading animated infinite rotateOut"><i class="ion-load-a"></i></span>
                    <span class="cart-added"><i class="ion-android-done"></i></span>
                    <span class="cart-unavailable"><i class="ion-android-alert"></i></span>
                </span>
                                            </a>

                                            <a href="javascript:void(0);" onclick="quiqview('i-phone')"
                                               class="quick-view" data-toggle="tooltip" data-placement="top"
                                               title="Quickview">
                                                <i class="ti-eye"></i>
                                            </a>

                                            <a class="wishlist" href="/account/login" title="Wishlist"
                                               data-toggle="tooltip" data-placement="top" title="Wishlist">
                                                <i class="ti-heart"></i>
                                            </a>

                                        </div>

                                    </div>
                                </div>
                                <style>
                                    a.add-to-cart.disabled {
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
                                        <a class="pro-img" href="{{url("/collections/electronic/details")}}">
                                            <img class="img-fluid img1"
                                                 src="//cdn.shopify.com/s/files/1/0509/6331/6893/products/pro20_300X350_crop_center.jpg?v=1606987984"
                                                 alt="Watch">
                                            <img class="img-fluid img2"
                                                 src="//cdn.shopify.com/s/files/1/0509/6331/6893/products/pro21_300X350_crop_center.jpg?v=1606987984"
                                                 alt="Watch"/>
                                        </a>
                                        <div class="product-label">


                                            <span class="new-title">New</span>


                                            <span class="percent-count">-22%</span>


                                        </div>

                                        <div class="product-action">

                                            <a href="javascript:void(0);"
                                               onclick="Shopify.addItem(37032004419741, 1); return false;"
                                               class="add-to-cart ajax-spin-cart" data-toggle="tooltip"
                                               data-placement="top" title="Add to cart">
                <span>
                    <span class="cart-title"><i class="ti-shopping-cart"></i></span>
                    <span class="cart-loading animated infinite rotateOut"><i class="ion-load-a"></i></span>
                    <span class="cart-added"><i class="ion-android-done"></i></span>
                    <span class="cart-unavailable"><i class="ion-android-alert"></i></span>
                </span>
                                            </a>

                                            <a href="javascript:void(0);" onclick="quiqview('watch')" class="quick-view"
                                               data-toggle="tooltip" data-placement="top" title="Quickview">
                                                <i class="ti-eye"></i>
                                            </a>

                                            <a class="wishlist" href="/account/login" title="Wishlist"
                                               data-toggle="tooltip" data-placement="top" title="Wishlist">
                                                <i class="ti-heart"></i>
                                            </a>

                                        </div>

                                    </div>
                                    <div class="product-content">
                                        <div class="product-ratting">
                                            <span class="shopify-product-reviews-badge" data-id="5822868848797"></span>
                                        </div>
                                        <h6>
                                            <a href="/collections/electronic/products/watch" title="Watch">Watch</a>
                                        </h6>
                                        <div class="price-box">
                                            <span class="new-price"><span class=money>Rs. 110.00</span></span>

                                            <span class="old-price"><span class=money>Rs. 130.00</span></span>

                                        </div>
                                        <p class="product-description">Lorem Ipsum is simply dummy text of the printing
                                            and typesetting industry. Lorem Ipsum has been t...
                                        </p>

                                        <div class="product-action">

                                            <a href="javascript:void(0);"
                                               onclick="Shopify.addItem(37032004419741, 1); return false;"
                                               class="add-to-cart ajax-spin-cart" data-toggle="tooltip"
                                               data-placement="top" title="Add to cart">
                <span>
                    <span class="cart-title"><i class="ti-shopping-cart"></i></span>
                    <span class="cart-loading animated infinite rotateOut"><i class="ion-load-a"></i></span>
                    <span class="cart-added"><i class="ion-android-done"></i></span>
                    <span class="cart-unavailable"><i class="ion-android-alert"></i></span>
                </span>
                                            </a>

                                            <a href="javascript:void(0);" onclick="quiqview('watch')" class="quick-view"
                                               data-toggle="tooltip" data-placement="top" title="Quickview">
                                                <i class="ti-eye"></i>
                                            </a>

                                            <a class="wishlist" href="/account/login" title="Wishlist"
                                               data-toggle="tooltip" data-placement="top" title="Wishlist">
                                                <i class="ti-heart"></i>
                                            </a>

                                        </div>

                                    </div>
                                </div>
                                <style>
                                    a.add-to-cart.disabled {
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
                                        <a class="pro-img" href="{{url("/collections/electronic/details")}}">
                                            <img class="img-fluid img1"
                                                 src="//cdn.shopify.com/s/files/1/0509/6331/6893/products/pro8_300X350_crop_center.jpg?v=1606987015"
                                                 alt="Earbuds">
                                            <img class="img-fluid img2"
                                                 src="//cdn.shopify.com/s/files/1/0509/6331/6893/products/pro9_300X350_crop_center.jpg?v=1606987015"
                                                 alt="Earbuds"/>
                                        </a>
                                        <div class="product-label">


                                            <span class="new-title">New</span>


                                            <span class="percent-count">-8%</span>


                                        </div>

                                        <div class="product-action">

                                            <a href="javascript:void(0);"
                                               onclick="Shopify.addItem(37031996981405, 1); return false;"
                                               class="add-to-cart ajax-spin-cart" data-toggle="tooltip"
                                               data-placement="top" title="Add to cart">
                <span>
                    <span class="cart-title"><i class="ti-shopping-cart"></i></span>
                    <span class="cart-loading animated infinite rotateOut"><i class="ion-load-a"></i></span>
                    <span class="cart-added"><i class="ion-android-done"></i></span>
                    <span class="cart-unavailable"><i class="ion-android-alert"></i></span>
                </span>
                                            </a>

                                            <a href="javascript:void(0);" onclick="quiqview('earbuds')"
                                               class="quick-view" data-toggle="tooltip" data-placement="top"
                                               title="Quickview">
                                                <i class="ti-eye"></i>
                                            </a>

                                            <a class="wishlist" href="/account/login" title="Wishlist"
                                               data-toggle="tooltip" data-placement="top" title="Wishlist">
                                                <i class="ti-heart"></i>
                                            </a>

                                        </div>

                                    </div>
                                    <div class="product-content">
                                        <div class="product-ratting">
                                            <span class="shopify-product-reviews-badge" data-id="5822867341469"></span>
                                        </div>
                                        <h6>
                                            <a href="/collections/electronic/products/earbuds"
                                               title="Earbuds">Earbuds</a>
                                        </h6>
                                        <div class="price-box">
                                            <span class="new-price"><span class=money>Rs. 120.00</span></span>

                                            <span class="old-price"><span class=money>Rs. 130.00</span></span>

                                        </div>
                                        <p class="product-description">Lorem Ipsum is simply dummy text of the printing
                                            and typesetting industry. Lorem Ipsum has been t...
                                        </p>

                                        <div class="product-action">

                                            <a href="javascript:void(0);"
                                               onclick="Shopify.addItem(37031996981405, 1); return false;"
                                               class="add-to-cart ajax-spin-cart" data-toggle="tooltip"
                                               data-placement="top" title="Add to cart">
                <span>
                    <span class="cart-title"><i class="ti-shopping-cart"></i></span>
                    <span class="cart-loading animated infinite rotateOut"><i class="ion-load-a"></i></span>
                    <span class="cart-added"><i class="ion-android-done"></i></span>
                    <span class="cart-unavailable"><i class="ion-android-alert"></i></span>
                </span>
                                            </a>

                                            <a href="javascript:void(0);" onclick="quiqview('earbuds')"
                                               class="quick-view" data-toggle="tooltip" data-placement="top"
                                               title="Quickview">
                                                <i class="ti-eye"></i>
                                            </a>

                                            <a class="wishlist" href="/account/login" title="Wishlist"
                                               data-toggle="tooltip" data-placement="top" title="Wishlist">
                                                <i class="ti-heart"></i>
                                            </a>

                                        </div>

                                    </div>
                                </div>
                                <style>
                                    a.add-to-cart.disabled {
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
                                        <a class="pro-img" href="{{url("/collections/electronic/details")}}">
                                            <img class="img-fluid img1"
                                                 src="//cdn.shopify.com/s/files/1/0509/6331/6893/products/pro64_300X350_crop_center.jpg?v=1606987366"
                                                 alt="Juice machine">
                                            <img class="img-fluid img2"
                                                 src="//cdn.shopify.com/s/files/1/0509/6331/6893/products/pro67_300X350_crop_center.jpg?v=1606987366"
                                                 alt="Juice machine"/>
                                        </a>
                                        <div class="product-label">


                                            <span class="new-title">New</span>


                                            <span class="percent-count">-3%</span>


                                        </div>

                                        <div class="product-action">

                                            <a href="javascript:void(0);"
                                               onclick="Shopify.addItem(37031999439005, 1); return false;"
                                               class="add-to-cart ajax-spin-cart" data-toggle="tooltip"
                                               data-placement="top" title="Add to cart">
                <span>
                    <span class="cart-title"><i class="ti-shopping-cart"></i></span>
                    <span class="cart-loading animated infinite rotateOut"><i class="ion-load-a"></i></span>
                    <span class="cart-added"><i class="ion-android-done"></i></span>
                    <span class="cart-unavailable"><i class="ion-android-alert"></i></span>
                </span>
                                            </a>

                                            <a href="javascript:void(0);" onclick="quiqview('juice-machine')"
                                               class="quick-view" data-toggle="tooltip" data-placement="top"
                                               title="Quickview">
                                                <i class="ti-eye"></i>
                                            </a>

                                            <a class="wishlist" href="/account/login" title="Wishlist"
                                               data-toggle="tooltip" data-placement="top" title="Wishlist">
                                                <i class="ti-heart"></i>
                                            </a>

                                        </div>

                                    </div>
                                    <div class="product-content">
                                        <div class="product-ratting">
                                            <span class="shopify-product-reviews-badge" data-id="5822867865757"></span>
                                        </div>
                                        <h6>
                                            <a href="/collections/electronic/products/juice-machine"
                                               title="Juice machine">Juice machine</a>
                                        </h6>
                                        <div class="price-box">
                                            <span class="new-price"><span class=money>Rs. 150.00</span></span>

                                            <span class="old-price"><span class=money>Rs. 155.00</span></span>

                                        </div>
                                        <p class="product-description">Lorem Ipsum is simply dummy text of the printing
                                            and typesetting industry. Lorem Ipsum has been t...
                                        </p>

                                        <div class="product-action">

                                            <a href="javascript:void(0);"
                                               onclick="Shopify.addItem(37031999439005, 1); return false;"
                                               class="add-to-cart ajax-spin-cart" data-toggle="tooltip"
                                               data-placement="top" title="Add to cart">
                <span>
                    <span class="cart-title"><i class="ti-shopping-cart"></i></span>
                    <span class="cart-loading animated infinite rotateOut"><i class="ion-load-a"></i></span>
                    <span class="cart-added"><i class="ion-android-done"></i></span>
                    <span class="cart-unavailable"><i class="ion-android-alert"></i></span>
                </span>
                                            </a>

                                            <a href="javascript:void(0);" onclick="quiqview('juice-machine')"
                                               class="quick-view" data-toggle="tooltip" data-placement="top"
                                               title="Quickview">
                                                <i class="ti-eye"></i>
                                            </a>

                                            <a class="wishlist" href="/account/login" title="Wishlist"
                                               data-toggle="tooltip" data-placement="top" title="Wishlist">
                                                <i class="ti-heart"></i>
                                            </a>

                                        </div>

                                    </div>
                                </div>
                                <style>
                                    a.add-to-cart.disabled {
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
                                        <a class="pro-img" href="{{url("/collections/electronic/details")}}">
                                            <img class="img-fluid img1"
                                                 src="//cdn.shopify.com/s/files/1/0509/6331/6893/products/pro6_9e76ac99-ba1d-43fe-a895-2fa8d1a90b81_300X350_crop_center.jpg?v=1606987093"
                                                 alt="Headphone">
                                            <img class="img-fluid img2"
                                                 src="//cdn.shopify.com/s/files/1/0509/6331/6893/products/pro7_767bbe8e-0b76-4faa-944f-21f5efc9600b_300X350_crop_center.jpg?v=1606987093"
                                                 alt="Headphone"/>
                                        </a>
                                        <div class="product-label">


                                            <span class="new-title">New</span>


                                            <span class="percent-count">-7%</span>


                                        </div>

                                        <div class="product-action">

                                            <a href="javascript:void(0);"
                                               onclick="Shopify.addItem(37032000880797, 1); return false;"
                                               class="add-to-cart ajax-spin-cart" data-toggle="tooltip"
                                               data-placement="top" title="Add to cart">
                <span>
                    <span class="cart-title"><i class="ti-shopping-cart"></i></span>
                    <span class="cart-loading animated infinite rotateOut"><i class="ion-load-a"></i></span>
                    <span class="cart-added"><i class="ion-android-done"></i></span>
                    <span class="cart-unavailable"><i class="ion-android-alert"></i></span>
                </span>
                                            </a>

                                            <a href="javascript:void(0);" onclick="quiqview('headphone')"
                                               class="quick-view" data-toggle="tooltip" data-placement="top"
                                               title="Quickview">
                                                <i class="ti-eye"></i>
                                            </a>

                                            <a class="wishlist" href="/account/login" title="Wishlist"
                                               data-toggle="tooltip" data-placement="top" title="Wishlist">
                                                <i class="ti-heart"></i>
                                            </a>

                                        </div>

                                    </div>
                                    <div class="product-content">
                                        <div class="product-ratting">
                                            <span class="shopify-product-reviews-badge" data-id="5822868095133"></span>
                                        </div>
                                        <h6>
                                            <a href="/collections/electronic/products/headphone" title="Headphone">Headphone</a>
                                        </h6>
                                        <div class="price-box">
                                            <span class="new-price"><span class=money>Rs. 232.00</span></span>

                                            <span class="old-price"><span class=money>Rs. 250.00</span></span>

                                        </div>
                                        <p class="product-description">Lorem Ipsum is simply dummy text of the printing
                                            and typesetting industry. Lorem Ipsum has been t...
                                        </p>

                                        <div class="product-action">

                                            <a href="javascript:void(0);"
                                               onclick="Shopify.addItem(37032000880797, 1); return false;"
                                               class="add-to-cart ajax-spin-cart" data-toggle="tooltip"
                                               data-placement="top" title="Add to cart">
                <span>
                    <span class="cart-title"><i class="ti-shopping-cart"></i></span>
                    <span class="cart-loading animated infinite rotateOut"><i class="ion-load-a"></i></span>
                    <span class="cart-added"><i class="ion-android-done"></i></span>
                    <span class="cart-unavailable"><i class="ion-android-alert"></i></span>
                </span>
                                            </a>

                                            <a href="javascript:void(0);" onclick="quiqview('headphone')"
                                               class="quick-view" data-toggle="tooltip" data-placement="top"
                                               title="Quickview">
                                                <i class="ti-eye"></i>
                                            </a>

                                            <a class="wishlist" href="/account/login" title="Wishlist"
                                               data-toggle="tooltip" data-placement="top" title="Wishlist">
                                                <i class="ti-heart"></i>
                                            </a>

                                        </div>

                                    </div>
                                </div>
                                <style>
                                    a.add-to-cart.disabled {
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
                                        <a class="pro-img" href="{{url("/collections/electronic/details")}}">
                                            <img class="img-fluid img1"
                                                 src="//cdn.shopify.com/s/files/1/0509/6331/6893/products/pro31_eacb8fbe-be63-4404-8e9f-5297769290b7_300X350_crop_center.jpg?v=1606987707"
                                                 alt="Mouse">
                                            <img class="img-fluid img2"
                                                 src="//cdn.shopify.com/s/files/1/0509/6331/6893/products/pro33_300X350_crop_center.jpg?v=1606987711"
                                                 alt="Mouse"/>
                                        </a>
                                        <div class="product-label">


                                            <span class="new-title">New</span>


                                            <span class="percent-count">-17%</span>


                                        </div>

                                        <div class="product-action">

                                            <a href="javascript:void(0);"
                                               onclick="Shopify.addItem(37032005435549, 1); return false;"
                                               class="add-to-cart ajax-spin-cart" data-toggle="tooltip"
                                               data-placement="top" title="Add to cart">
                <span>
                    <span class="cart-title"><i class="ti-shopping-cart"></i></span>
                    <span class="cart-loading animated infinite rotateOut"><i class="ion-load-a"></i></span>
                    <span class="cart-added"><i class="ion-android-done"></i></span>
                    <span class="cart-unavailable"><i class="ion-android-alert"></i></span>
                </span>
                                            </a>

                                            <a href="javascript:void(0);" onclick="quiqview('mouse')" class="quick-view"
                                               data-toggle="tooltip" data-placement="top" title="Quickview">
                                                <i class="ti-eye"></i>
                                            </a>

                                            <a class="wishlist" href="/account/login" title="Wishlist"
                                               data-toggle="tooltip" data-placement="top" title="Wishlist">
                                                <i class="ti-heart"></i>
                                            </a>

                                        </div>

                                    </div>
                                    <div class="product-content">
                                        <div class="product-ratting">
                                            <span class="shopify-product-reviews-badge" data-id="5822869012637"></span>
                                        </div>
                                        <h6>
                                            <a href="/collections/electronic/products/mouse" title="Mouse">Mouse</a>
                                        </h6>
                                        <div class="price-box">
                                            <span class="new-price"><span class=money>Rs. 25.00</span></span>

                                            <span class="old-price"><span class=money>Rs. 30.00</span></span>

                                        </div>
                                        <p class="product-description">Lorem Ipsum is simply dummy text of the printing
                                            and typesetting industry. Lorem Ipsum has been t...
                                        </p>

                                        <div class="product-action">

                                            <a href="javascript:void(0);"
                                               onclick="Shopify.addItem(37032005435549, 1); return false;"
                                               class="add-to-cart ajax-spin-cart" data-toggle="tooltip"
                                               data-placement="top" title="Add to cart">
                <span>
                    <span class="cart-title"><i class="ti-shopping-cart"></i></span>
                    <span class="cart-loading animated infinite rotateOut"><i class="ion-load-a"></i></span>
                    <span class="cart-added"><i class="ion-android-done"></i></span>
                    <span class="cart-unavailable"><i class="ion-android-alert"></i></span>
                </span>
                                            </a>

                                            <a href="javascript:void(0);" onclick="quiqview('mouse')" class="quick-view"
                                               data-toggle="tooltip" data-placement="top" title="Quickview">
                                                <i class="ti-eye"></i>
                                            </a>

                                            <a class="wishlist" href="/account/login" title="Wishlist"
                                               data-toggle="tooltip" data-placement="top" title="Wishlist">
                                                <i class="ti-heart"></i>
                                            </a>

                                        </div>

                                    </div>
                                </div>
                                <style>
                                    a.add-to-cart.disabled {
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
                                        <a class="pro-img" href="{{url("/collections/electronic/details")}}">
                                            <img class="img-fluid img1"
                                                 src="//cdn.shopify.com/s/files/1/0509/6331/6893/products/pro39_300X350_crop_center.jpg?v=1606986847"
                                                 alt="Camera">
                                            <img class="img-fluid img2"
                                                 src="//cdn.shopify.com/s/files/1/0509/6331/6893/products/pro38_300X350_crop_center.jpg?v=1606986847"
                                                 alt="Camera"/>
                                        </a>
                                        <div class="product-label">


                                            <span class="sale-title">Sale</span>


                                            <span class="percent-count">-3%</span>


                                        </div>

                                        <div class="product-action">

                                            <a href="javascript:void(0);"
                                               onclick="Shopify.addItem(37032002584733, 1); return false;"
                                               class="add-to-cart ajax-spin-cart" data-toggle="tooltip"
                                               data-placement="top" title="Add to cart">
                <span>
                    <span class="cart-title"><i class="ti-shopping-cart"></i></span>
                    <span class="cart-loading animated infinite rotateOut"><i class="ion-load-a"></i></span>
                    <span class="cart-added"><i class="ion-android-done"></i></span>
                    <span class="cart-unavailable"><i class="ion-android-alert"></i></span>
                </span>
                                            </a>

                                            <a href="javascript:void(0);" onclick="quiqview('camera')"
                                               class="quick-view" data-toggle="tooltip" data-placement="top"
                                               title="Quickview">
                                                <i class="ti-eye"></i>
                                            </a>

                                            <a class="wishlist" href="/account/login" title="Wishlist"
                                               data-toggle="tooltip" data-placement="top" title="Wishlist">
                                                <i class="ti-heart"></i>
                                            </a>

                                        </div>

                                    </div>
                                    <div class="product-content">
                                        <div class="product-ratting">
                                            <span class="shopify-product-reviews-badge" data-id="5822868455581"></span>
                                        </div>
                                        <h6>
                                            <a href="/collections/electronic/products/camera" title="Camera">Camera</a>
                                        </h6>
                                        <div class="price-box">
                                            <span class="new-price"><span class=money>Rs. 150.00</span></span>

                                            <span class="old-price"><span class=money>Rs. 155.00</span></span>

                                        </div>
                                        <p class="product-description">Lorem Ipsum is simply dummy text of the printing
                                            and typesetting industry. Lorem Ipsum has been t...
                                        </p>

                                        <div class="product-action">

                                            <a href="javascript:void(0);"
                                               onclick="Shopify.addItem(37032002584733, 1); return false;"
                                               class="add-to-cart ajax-spin-cart" data-toggle="tooltip"
                                               data-placement="top" title="Add to cart">
                <span>
                    <span class="cart-title"><i class="ti-shopping-cart"></i></span>
                    <span class="cart-loading animated infinite rotateOut"><i class="ion-load-a"></i></span>
                    <span class="cart-added"><i class="ion-android-done"></i></span>
                    <span class="cart-unavailable"><i class="ion-android-alert"></i></span>
                </span>
                                            </a>

                                            <a href="javascript:void(0);" onclick="quiqview('camera')"
                                               class="quick-view" data-toggle="tooltip" data-placement="top"
                                               title="Quickview">
                                                <i class="ti-eye"></i>
                                            </a>

                                            <a class="wishlist" href="/account/login" title="Wishlist"
                                               data-toggle="tooltip" data-placement="top" title="Wishlist">
                                                <i class="ti-heart"></i>
                                            </a>

                                        </div>

                                    </div>
                                </div>
                                <style>
                                    a.add-to-cart.disabled {
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
                                        <a class="pro-img" href="{{url("/collections/electronic/details")}}">
                                            <img class="img-fluid img1"
                                                 src="//cdn.shopify.com/s/files/1/0509/6331/6893/products/pro48_300X350_crop_center.jpg?v=1606987770"
                                                 alt="Pen drive">
                                            <img class="img-fluid img2"
                                                 src="//cdn.shopify.com/s/files/1/0509/6331/6893/products/pro49_300X350_crop_center.jpg?v=1606987770"
                                                 alt="Pen drive"/>
                                        </a>
                                        <div class="product-label">


                                            <span class="sale-title">Sale</span>


                                            <span class="percent-count">-17%</span>


                                        </div>

                                        <div class="product-action">

                                            <a href="javascript:void(0);"
                                               onclick="Shopify.addItem(37031999930525, 1); return false;"
                                               class="add-to-cart ajax-spin-cart" data-toggle="tooltip"
                                               data-placement="top" title="Add to cart">
                <span>
                    <span class="cart-title"><i class="ti-shopping-cart"></i></span>
                    <span class="cart-loading animated infinite rotateOut"><i class="ion-load-a"></i></span>
                    <span class="cart-added"><i class="ion-android-done"></i></span>
                    <span class="cart-unavailable"><i class="ion-android-alert"></i></span>
                </span>
                                            </a>

                                            <a href="javascript:void(0);" onclick="quiqview('pen-drive')"
                                               class="quick-view" data-toggle="tooltip" data-placement="top"
                                               title="Quickview">
                                                <i class="ti-eye"></i>
                                            </a>

                                            <a class="wishlist" href="/account/login" title="Wishlist"
                                               data-toggle="tooltip" data-placement="top" title="Wishlist">
                                                <i class="ti-heart"></i>
                                            </a>

                                        </div>

                                    </div>
                                    <div class="product-content">
                                        <div class="product-ratting">
                                            <span class="shopify-product-reviews-badge" data-id="5822867964061"></span>
                                        </div>
                                        <h6>
                                            <a href="/collections/electronic/products/pen-drive" title="Pen drive">Pen
                                                drive</a>
                                        </h6>
                                        <div class="price-box">
                                            <span class="new-price"><span class=money>Rs. 100.00</span></span>

                                            <span class="old-price"><span class=money>Rs. 120.00</span></span>

                                        </div>
                                        <p class="product-description">Lorem Ipsum is simply dummy text of the printing
                                            and typesetting industry. Lorem Ipsum has been t...
                                        </p>

                                        <div class="product-action">

                                            <a href="javascript:void(0);"
                                               onclick="Shopify.addItem(37031999930525, 1); return false;"
                                               class="add-to-cart ajax-spin-cart" data-toggle="tooltip"
                                               data-placement="top" title="Add to cart">
                <span>
                    <span class="cart-title"><i class="ti-shopping-cart"></i></span>
                    <span class="cart-loading animated infinite rotateOut"><i class="ion-load-a"></i></span>
                    <span class="cart-added"><i class="ion-android-done"></i></span>
                    <span class="cart-unavailable"><i class="ion-android-alert"></i></span>
                </span>
                                            </a>

                                            <a href="javascript:void(0);" onclick="quiqview('pen-drive')"
                                               class="quick-view" data-toggle="tooltip" data-placement="top"
                                               title="Quickview">
                                                <i class="ti-eye"></i>
                                            </a>

                                            <a class="wishlist" href="/account/login" title="Wishlist"
                                               data-toggle="tooltip" data-placement="top" title="Wishlist">
                                                <i class="ti-heart"></i>
                                            </a>

                                        </div>

                                    </div>
                                </div>
                                <style>
                                    a.add-to-cart.disabled {
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

        <!-- PRODUCT SECTION END -->

        <script>
            $('#related-slider').owlCarousel({
                loop: false,
                rewind: true,
                margin: 30,
                nav: true,
                navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
                dots: false, autoplay: true,
                sautoplayTimeout: 5000,
                autoplayHoverPause: true,
                responsive: {
                    0: {
                        items: 2,
                        margin: 15
                    },
                    479: {
                        items: 2,
                        margin: 15
                    },
                    768: {
                        items: 3
                    },
                    979: {
                        items: 4
                    },
                    1199: {
                        items: 4
                    }
                }
            });
        </script>

        <style>
            .related-product {
                padding-top: 60px;
                padding-bottom: 60px;
            }

            @media (max-width: 767px) {
                .related-product {
                    padding-top: 40px;
                    padding-bottom: 40px;
                }
            }
        </style>


    </div>

@endsection

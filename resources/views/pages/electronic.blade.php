@extends("partials.layouts.app")

@section("content")
    <div id="shopify-section-collection-template" class="shopify-section"><!-- Start Shop Page -->
        <div class="main-content-wrap shop-page section-ptb">
            <div class="container">
                <div class="row position-left">
                    <div class="col-lg-9 col-md-8 col-12 pro-grli-wrap">
                        <div class="ajax-filter-loader">
                            <div class="load-block">
                                <div class="overlay__content">
                                    <span class="spinner"></span>
                                </div>
                            </div>
                        </div>
                        <div class="collection-img-wrap">
                            <h6 class="st-title">Electronic</h6>
                            <div class="collection-info">
                                <div class="collection-image">

                                    <img class="img-fluid"
                                         src="//cdn.shopify.com/s/files/1/0509/6331/6893/collections/mega-menu_150x150_crop_center.jpg?v=1605005220"
                                         alt="Headphone"/>

                                </div>
                                <div class="collection-description">

                                    <p><span data-mce-fragment="1">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna ali...
                                    </p>

                                </div>
                            </div>
                        </div><!-- shop-top-bar start -->
                        <div class="shop-top-bar">

                            <div class="product-view-mode">
                                <!-- shop-item-filter-list start -->
                                <a class=" list-change-view grid-three" data-grid-view="3"><i
                                        class="ti-layout-grid3"></i></a>
                                <a class=" list-change-view list-one" data-grid-view="1"><i
                                        class="ti-layout-list-thumb"></i></a>
                                <!-- shop-item-filter-list end -->
                            </div>


                            <!-- product-short start -->
                            <div class="product-short">
                                <label for="SortBy">Sort by</label>
                                <select class="nice-select" name="sortby" id="SortBy">
                                    <option value="manual">Featured</option>
                                    <option value="best-selling">Best Selling</option>
                                    <option value="title-ascending">Alphabetically, A-Z</option>
                                    <option value="title-descending">Alphabetically, Z-A</option>
                                    <option value="price-ascending">Price, low to high</option>
                                    <option value="price-descending">Price, high to low</option>
                                    <option value="created-descending">Date, new to old</option>
                                    <option value="created-ascending">Date, old to new</option>
                                </select>
                            </div>

                            <!-- product-short end -->
                        </div>
                        <!-- shop-top-bar end -->
                        <script>
                            Shopify.queryParams = {};
                            if (location.search.length) {
                                for (var aKeyValue, i = 0, aCouples = location.search.substr(1).split('&'); i < aCouples.length; i++) {
                                    aKeyValue = aCouples[i].split('=');
                                    if (aKeyValue.length > 1) {
                                        Shopify.queryParams[decodeURIComponent(aKeyValue[0])] = decodeURIComponent(aKeyValue[1]);
                                    }
                                }
                            }

                            var $select = $('#SortBy');
                            $('a[href="#sort"]').click(function () {
                                $select.val($(this).data('select'));
                                event.preventDefault();
                                Shopify.queryParams.sort_by = jQuery(this).data('select');
                                location.search = jQuery.param(Shopify.queryParams);
                            });

                            $('.list-change-view').on("click", function () {
                                event.preventDefault();
                                var data_grid = $(this).attr('data-grid-view');
                                if ($('.shop-product-wrap').hasClass('grid-1') || $('.shop-product-wrap').hasClass('grid-2') || $('.shop-product-wrap').hasClass('grid-3') || $('.shop-product-wrap').hasClass('grid-4')) {

                                    $('.shop-product-wrap').removeClass('grid-1');
                                    $('.shop-product-wrap').removeClass('grid-2');
                                    $('.shop-product-wrap').removeClass('grid-3');
                                    $('.shop-product-wrap').removeClass('grid-4');
                                    $('.shop-product-wrap').addClass('grid-' + data_grid);
                                } else {
                                    $('.shop-product-wrap').addClass('grid-' + data_grid);
                                }


                            });

                            $(function () {
                                $('#SortBy')
                                    .val('best-selling')
                                    .bind('change', function () {
                                            Shopify.queryParams.sort_by = jQuery(this).val();
                                            location.search = jQuery.param(Shopify.queryParams);
                                        }
                                    );
                            });
                        </script>
                        <style>
                            .shop-top-bar {
                                display: flex;
                                align-items: center;
                                justify-content: space-between;
                                padding: 15px;
                                margin-top: 30px;
                                background-color: #f5f5f5;
                            }

                            .shop-top-bar .product-view-mode {
                                display: flex;
                            }

                            .shop-top-bar .product-view-mode .list-change-view {
                                display: block;
                                cursor: pointer;
                                font-size: 17px;

                                margin-right: 15px;

                                line-height: 0;
                            }

                            .shop-top-bar .product-view-mode .list-change-view:last-child {

                                margin-right: 0px;

                            }

                            .product-short {
                                display: flex;
                                align-items: center;
                            }

                            .product-short label {
                                font-size: 16px;
                                margin-bottom: 0;

                                margin-right: 15px;

                                font-weight: 600;
                            }

                            .product-short select {
                                padding: 10px 30px 10px 15px;
                                min-width: 200px;
                                background-color: #fff;
                            }

                            @media (max-width: 767px) {
                                .shop-top-bar {
                                    align-items: flex-start;
                                    flex-direction: column;
                                    margin-top: 20px;
                                }

                                .product-short {
                                    width: 100%;
                                    margin-top: 15px;
                                }

                                .product-short label {
                                    width: 80px;
                                }

                                .product-short select {
                                    min-width: auto;
                                    width: 100%;
                                }
                            }
                        </style>
                        <div class="get-data-products">
                            <div class="shop-grid">
                                <div class="product-grid-view">
                                    <div class="shop-product-wrap grid-3">
                                        <div class="row">
                                            <div class="col">
                                                <ul class="product-view">
                                                    <li class="st-col-item">
                                                        <div class="single-product-wrap stock-out">
                                                            <div class="product-image stock-out">
                                                                <a class="pro-img"
                                                                   href="{{url("/collections/electronic/details")}}">
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
                                                                    <span class="shopify-product-reviews-badge"
                                                                          data-id="5822868979869"></span>
                                                                </div>
                                                                <h6>
                                                                    <a href="/collections/headphone/products/refrigerator"
                                                                       title="Refrigerator">Refrigerator</a>
                                                                </h6>
                                                                <div class="price-box">
                                                                    <span class="new-price"><span
                                                                            class=money>Rs. 120.00</span></span>

                                                                    <span class="old-price"><span
                                                                            class=money>Rs. 130.00</span></span>

                                                                </div>
                                                                <p class="product-description">Lorem Ipsum is simply
                                                                    dummy text of the printing and typesetting industry.
                                                                    Lorem Ipsum has been t...
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
                                                    </li>
                                                    <li class="st-col-item">
                                                        <div class="single-product-wrap ">
                                                            <div class="product-image ">
                                                                <a class="pro-img"
                                                                   href="{{url("/collections/electronic/details")}}">
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
                                                                       class="add-to-cart ajax-spin-cart"
                                                                       data-toggle="tooltip" data-placement="top"
                                                                       title="Add to cart">
                <span>
                    <span class="cart-title"><i class="ti-shopping-cart"></i></span>
                    <span class="cart-loading animated infinite rotateOut"><i class="ion-load-a"></i></span>
                    <span class="cart-added"><i class="ion-android-done"></i></span>
                    <span class="cart-unavailable"><i class="ion-android-alert"></i></span>
                </span>
                                                                    </a>

                                                                    <a href="javascript:void(0);"
                                                                       onclick="quiqview('jbl-speaker')"
                                                                       class="quick-view" data-toggle="tooltip"
                                                                       data-placement="top" title="Quickview">
                                                                        <i class="ti-eye"></i>
                                                                    </a>

                                                                    <a class="wishlist" href="/account/login"
                                                                       title="Wishlist" data-toggle="tooltip"
                                                                       data-placement="top" title="Wishlist">
                                                                        <i class="ti-heart"></i>
                                                                    </a>

                                                                </div>

                                                            </div>
                                                            <div class="product-content">
                                                                <div class="product-ratting">
                                                                    <span class="shopify-product-reviews-badge"
                                                                          data-id="5822868717725"></span>
                                                                </div>
                                                                <h6>
                                                                    <a href="/collections/headphone/products/jbl-speaker"
                                                                       title="JBL Speaker">JBL Speaker</a>
                                                                </h6>
                                                                <div class="price-box">
                                                                    <span class="new-price"><span
                                                                            class=money>Rs. 60.00</span></span>

                                                                </div>
                                                                <p class="product-description">Lorem Ipsum is simply
                                                                    dummy text of the printing and typesetting industry.
                                                                    Lorem Ipsum has been t...
                                                                </p>

                                                                <div class="product-action">

                                                                    <a href="javascript:void(0);"
                                                                       onclick="Shopify.addItem(37032003666077, 1); return false;"
                                                                       class="add-to-cart ajax-spin-cart"
                                                                       data-toggle="tooltip" data-placement="top"
                                                                       title="Add to cart">
                <span>
                    <span class="cart-title"><i class="ti-shopping-cart"></i></span>
                    <span class="cart-loading animated infinite rotateOut"><i class="ion-load-a"></i></span>
                    <span class="cart-added"><i class="ion-android-done"></i></span>
                    <span class="cart-unavailable"><i class="ion-android-alert"></i></span>
                </span>
                                                                    </a>

                                                                    <a href="javascript:void(0);"
                                                                       onclick="quiqview('jbl-speaker')"
                                                                       class="quick-view" data-toggle="tooltip"
                                                                       data-placement="top" title="Quickview">
                                                                        <i class="ti-eye"></i>
                                                                    </a>

                                                                    <a class="wishlist" href="/account/login"
                                                                       title="Wishlist" data-toggle="tooltip"
                                                                       data-placement="top" title="Wishlist">
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
                                                    </li>
                                                    <li class="st-col-item">
                                                        <div class="single-product-wrap ">
                                                            <div class="product-image ">
                                                                <a class="pro-img"
                                                                   href="{{url("/collections/electronic/details")}}">
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
                                                                       class="add-to-cart ajax-spin-cart"
                                                                       data-toggle="tooltip" data-placement="top"
                                                                       title="Add to cart">
                <span>
                    <span class="cart-title"><i class="ti-shopping-cart"></i></span>
                    <span class="cart-loading animated infinite rotateOut"><i class="ion-load-a"></i></span>
                    <span class="cart-added"><i class="ion-android-done"></i></span>
                    <span class="cart-unavailable"><i class="ion-android-alert"></i></span>
                </span>
                                                                    </a>

                                                                    <a href="javascript:void(0);"
                                                                       onclick="quiqview('laptop')" class="quick-view"
                                                                       data-toggle="tooltip" data-placement="top"
                                                                       title="Quickview">
                                                                        <i class="ti-eye"></i>
                                                                    </a>

                                                                    <a class="wishlist" href="/account/login"
                                                                       title="Wishlist" data-toggle="tooltip"
                                                                       data-placement="top" title="Wishlist">
                                                                        <i class="ti-heart"></i>
                                                                    </a>

                                                                </div>

                                                            </div>
                                                            <div class="product-content">
                                                                <div class="product-ratting">
                                                                    <span class="shopify-product-reviews-badge"
                                                                          data-id="5822867701917"></span>
                                                                </div>
                                                                <h6>
                                                                    <a href="/collections/headphone/products/laptop"
                                                                       title="Laptop">Laptop</a>
                                                                </h6>
                                                                <div class="price-box">
                                                                    <span class="new-price"><span
                                                                            class=money>Rs. 200.00</span></span>

                                                                    <span class="old-price"><span
                                                                            class=money>Rs. 210.00</span></span>

                                                                </div>
                                                                <p class="product-description">Lorem Ipsum is simply
                                                                    dummy text of the printing and typesetting industry.
                                                                    Lorem Ipsum has been t...
                                                                </p>

                                                                <div class="product-action">

                                                                    <a href="javascript:void(0);"
                                                                       onclick="Shopify.addItem(37031998619805, 1); return false;"
                                                                       class="add-to-cart ajax-spin-cart"
                                                                       data-toggle="tooltip" data-placement="top"
                                                                       title="Add to cart">
                <span>
                    <span class="cart-title"><i class="ti-shopping-cart"></i></span>
                    <span class="cart-loading animated infinite rotateOut"><i class="ion-load-a"></i></span>
                    <span class="cart-added"><i class="ion-android-done"></i></span>
                    <span class="cart-unavailable"><i class="ion-android-alert"></i></span>
                </span>
                                                                    </a>

                                                                    <a href="javascript:void(0);"
                                                                       onclick="quiqview('laptop')" class="quick-view"
                                                                       data-toggle="tooltip" data-placement="top"
                                                                       title="Quickview">
                                                                        <i class="ti-eye"></i>
                                                                    </a>

                                                                    <a class="wishlist" href="/account/login"
                                                                       title="Wishlist" data-toggle="tooltip"
                                                                       data-placement="top" title="Wishlist">
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
                                                    </li>
                                                    <li class="st-col-item">
                                                        <div class="single-product-wrap ">
                                                            <div class="product-image ">
                                                                <a class="pro-img"
                                                                   href="{{url("/collections/electronic/details")}}">
                                                                    <img class="img-fluid img1"
                                                                         src="//cdn.shopify.com/s/files/1/0509/6331/6893/products/pro3_66116319-ea9e-48c4-aee5-c0de6bf84624_300X350_crop_center.jpg?v=1606986643"
                                                                         alt="Boat">
                                                                    <img class="img-fluid img2"
                                                                         src="//cdn.shopify.com/s/files/1/0509/6331/6893/products/pro2_2c303381-fe9a-46fb-81cf-d0e8963ae517_300X350_crop_center.jpg?v=1606986647"
                                                                         alt="Boat"/>
                                                                </a>
                                                                <div class="product-label">


                                                                    <span class="sale-title">Sale</span>


                                                                    <span class="percent-count">-6%</span>


                                                                </div>

                                                                <div class="product-action">

                                                                    <a href="javascript:void(0);"
                                                                       onclick="Shopify.addItem(37031997571229, 1); return false;"
                                                                       class="add-to-cart ajax-spin-cart"
                                                                       data-toggle="tooltip" data-placement="top"
                                                                       title="Add to cart">
                <span>
                    <span class="cart-title"><i class="ti-shopping-cart"></i></span>
                    <span class="cart-loading animated infinite rotateOut"><i class="ion-load-a"></i></span>
                    <span class="cart-added"><i class="ion-android-done"></i></span>
                    <span class="cart-unavailable"><i class="ion-android-alert"></i></span>
                </span>
                                                                    </a>

                                                                    <a href="javascript:void(0);"
                                                                       onclick="quiqview('boat')" class="quick-view"
                                                                       data-toggle="tooltip" data-placement="top"
                                                                       title="Quickview">
                                                                        <i class="ti-eye"></i>
                                                                    </a>

                                                                    <a class="wishlist" href="/account/login"
                                                                       title="Wishlist" data-toggle="tooltip"
                                                                       data-placement="top" title="Wishlist">
                                                                        <i class="ti-heart"></i>
                                                                    </a>

                                                                </div>

                                                            </div>
                                                            <div class="product-content">
                                                                <div class="product-ratting">
                                                                    <span class="shopify-product-reviews-badge"
                                                                          data-id="5822867472541"></span>
                                                                </div>
                                                                <h6>
                                                                    <a href="/collections/headphone/products/boat"
                                                                       title="Boat">Boat</a>
                                                                </h6>
                                                                <div class="price-box">
                                                                    <span class="new-price"><span
                                                                            class=money>Rs. 150.00</span></span>

                                                                    <span class="old-price"><span
                                                                            class=money>Rs. 160.00</span></span>

                                                                </div>
                                                                <p class="product-description">Lorem Ipsum is simply
                                                                    dummy text of the printing and typesetting industry.
                                                                    Lorem Ipsum has been t...
                                                                </p>

                                                                <div class="product-action">

                                                                    <a href="javascript:void(0);"
                                                                       onclick="Shopify.addItem(37031997571229, 1); return false;"
                                                                       class="add-to-cart ajax-spin-cart"
                                                                       data-toggle="tooltip" data-placement="top"
                                                                       title="Add to cart">
                <span>
                    <span class="cart-title"><i class="ti-shopping-cart"></i></span>
                    <span class="cart-loading animated infinite rotateOut"><i class="ion-load-a"></i></span>
                    <span class="cart-added"><i class="ion-android-done"></i></span>
                    <span class="cart-unavailable"><i class="ion-android-alert"></i></span>
                </span>
                                                                    </a>

                                                                    <a href="javascript:void(0);"
                                                                       onclick="quiqview('boat')" class="quick-view"
                                                                       data-toggle="tooltip" data-placement="top"
                                                                       title="Quickview">
                                                                        <i class="ti-eye"></i>
                                                                    </a>

                                                                    <a class="wishlist" href="/account/login"
                                                                       title="Wishlist" data-toggle="tooltip"
                                                                       data-placement="top" title="Wishlist">
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
                                                    </li>
                                                    <li class="st-col-item">
                                                        <div class="single-product-wrap ">
                                                            <div class="product-image ">
                                                                <a class="pro-img"
                                                                   href="{{url("/collections/electronic/details")}}">
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
                                                                       class="add-to-cart ajax-spin-cart"
                                                                       data-toggle="tooltip" data-placement="top"
                                                                       title="Add to cart">
                <span>
                    <span class="cart-title"><i class="ti-shopping-cart"></i></span>
                    <span class="cart-loading animated infinite rotateOut"><i class="ion-load-a"></i></span>
                    <span class="cart-added"><i class="ion-android-done"></i></span>
                    <span class="cart-unavailable"><i class="ion-android-alert"></i></span>
                </span>
                                                                    </a>

                                                                    <a href="javascript:void(0);"
                                                                       onclick="quiqview('i-phone')" class="quick-view"
                                                                       data-toggle="tooltip" data-placement="top"
                                                                       title="Quickview">
                                                                        <i class="ti-eye"></i>
                                                                    </a>

                                                                    <a class="wishlist" href="/account/login"
                                                                       title="Wishlist" data-toggle="tooltip"
                                                                       data-placement="top" title="Wishlist">
                                                                        <i class="ti-heart"></i>
                                                                    </a>

                                                                </div>

                                                            </div>
                                                            <div class="product-content">
                                                                <div class="product-ratting">
                                                                    <span class="shopify-product-reviews-badge"
                                                                          data-id="5822868193437"></span>
                                                                </div>
                                                                <h6>
                                                                    <a href="/collections/headphone/products/i-phone"
                                                                       title="I Phone">I Phone</a>
                                                                </h6>
                                                                <div class="price-box">
                                                                    <span class="new-price"><span
                                                                            class=money>Rs. 225.00</span></span>

                                                                    <span class="old-price"><span
                                                                            class=money>Rs. 230.00</span></span>

                                                                </div>
                                                                <p class="product-description">Lorem Ipsum is simply
                                                                    dummy text of the printing and typesetting industry.
                                                                    Lorem Ipsum has been t...
                                                                </p>

                                                                <div class="product-action">

                                                                    <a href="javascript:void(0);"
                                                                       onclick="Shopify.addItem(37032002125981, 1); return false;"
                                                                       class="add-to-cart ajax-spin-cart"
                                                                       data-toggle="tooltip" data-placement="top"
                                                                       title="Add to cart">
                <span>
                    <span class="cart-title"><i class="ti-shopping-cart"></i></span>
                    <span class="cart-loading animated infinite rotateOut"><i class="ion-load-a"></i></span>
                    <span class="cart-added"><i class="ion-android-done"></i></span>
                    <span class="cart-unavailable"><i class="ion-android-alert"></i></span>
                </span>
                                                                    </a>

                                                                    <a href="javascript:void(0);"
                                                                       onclick="quiqview('i-phone')" class="quick-view"
                                                                       data-toggle="tooltip" data-placement="top"
                                                                       title="Quickview">
                                                                        <i class="ti-eye"></i>
                                                                    </a>

                                                                    <a class="wishlist" href="/account/login"
                                                                       title="Wishlist" data-toggle="tooltip"
                                                                       data-placement="top" title="Wishlist">
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
                                                    </li>
                                                    <li class="st-col-item">
                                                        <div class="single-product-wrap ">
                                                            <div class="product-image ">
                                                                <a class="pro-img"
                                                                   href="{{url("/collections/electronic/details")}}">
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
                                                                       class="add-to-cart ajax-spin-cart"
                                                                       data-toggle="tooltip" data-placement="top"
                                                                       title="Add to cart">
                <span>
                    <span class="cart-title"><i class="ti-shopping-cart"></i></span>
                    <span class="cart-loading animated infinite rotateOut"><i class="ion-load-a"></i></span>
                    <span class="cart-added"><i class="ion-android-done"></i></span>
                    <span class="cart-unavailable"><i class="ion-android-alert"></i></span>
                </span>
                                                                    </a>

                                                                    <a href="javascript:void(0);"
                                                                       onclick="quiqview('watch')" class="quick-view"
                                                                       data-toggle="tooltip" data-placement="top"
                                                                       title="Quickview">
                                                                        <i class="ti-eye"></i>
                                                                    </a>

                                                                    <a class="wishlist" href="/account/login"
                                                                       title="Wishlist" data-toggle="tooltip"
                                                                       data-placement="top" title="Wishlist">
                                                                        <i class="ti-heart"></i>
                                                                    </a>

                                                                </div>

                                                            </div>
                                                            <div class="product-content">
                                                                <div class="product-ratting">
                                                                    <span class="shopify-product-reviews-badge"
                                                                          data-id="5822868848797"></span>
                                                                </div>
                                                                <h6>
                                                                    <a href="/collections/headphone/products/watch"
                                                                       title="Watch">Watch</a>
                                                                </h6>
                                                                <div class="price-box">
                                                                    <span class="new-price"><span
                                                                            class=money>Rs. 110.00</span></span>

                                                                    <span class="old-price"><span
                                                                            class=money>Rs. 130.00</span></span>

                                                                </div>
                                                                <p class="product-description">Lorem Ipsum is simply
                                                                    dummy text of the printing and typesetting industry.
                                                                    Lorem Ipsum has been t...
                                                                </p>

                                                                <div class="product-action">

                                                                    <a href="javascript:void(0);"
                                                                       onclick="Shopify.addItem(37032004419741, 1); return false;"
                                                                       class="add-to-cart ajax-spin-cart"
                                                                       data-toggle="tooltip" data-placement="top"
                                                                       title="Add to cart">
                <span>
                    <span class="cart-title"><i class="ti-shopping-cart"></i></span>
                    <span class="cart-loading animated infinite rotateOut"><i class="ion-load-a"></i></span>
                    <span class="cart-added"><i class="ion-android-done"></i></span>
                    <span class="cart-unavailable"><i class="ion-android-alert"></i></span>
                </span>
                                                                    </a>

                                                                    <a href="javascript:void(0);"
                                                                       onclick="quiqview('watch')" class="quick-view"
                                                                       data-toggle="tooltip" data-placement="top"
                                                                       title="Quickview">
                                                                        <i class="ti-eye"></i>
                                                                    </a>

                                                                    <a class="wishlist" href="/account/login"
                                                                       title="Wishlist" data-toggle="tooltip"
                                                                       data-placement="top" title="Wishlist">
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
                                                    </li>
                                                    <li class="st-col-item">
                                                        <div class="single-product-wrap ">
                                                            <div class="product-image ">
                                                                <a class="pro-img"
                                                                   href="{{url("/collections/electronic/details")}}">
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
                                                                       class="add-to-cart ajax-spin-cart"
                                                                       data-toggle="tooltip" data-placement="top"
                                                                       title="Add to cart">
                <span>
                    <span class="cart-title"><i class="ti-shopping-cart"></i></span>
                    <span class="cart-loading animated infinite rotateOut"><i class="ion-load-a"></i></span>
                    <span class="cart-added"><i class="ion-android-done"></i></span>
                    <span class="cart-unavailable"><i class="ion-android-alert"></i></span>
                </span>
                                                                    </a>

                                                                    <a href="javascript:void(0);"
                                                                       onclick="quiqview('earbuds')" class="quick-view"
                                                                       data-toggle="tooltip" data-placement="top"
                                                                       title="Quickview">
                                                                        <i class="ti-eye"></i>
                                                                    </a>

                                                                    <a class="wishlist" href="/account/login"
                                                                       title="Wishlist" data-toggle="tooltip"
                                                                       data-placement="top" title="Wishlist">
                                                                        <i class="ti-heart"></i>
                                                                    </a>

                                                                </div>

                                                            </div>
                                                            <div class="product-content">
                                                                <div class="product-ratting">
                                                                    <span class="shopify-product-reviews-badge"
                                                                          data-id="5822867341469"></span>
                                                                </div>
                                                                <h6>
                                                                    <a href="/collections/headphone/products/earbuds"
                                                                       title="Earbuds">Earbuds</a>
                                                                </h6>
                                                                <div class="price-box">
                                                                    <span class="new-price"><span
                                                                            class=money>Rs. 120.00</span></span>

                                                                    <span class="old-price"><span
                                                                            class=money>Rs. 130.00</span></span>

                                                                </div>
                                                                <p class="product-description">Lorem Ipsum is simply
                                                                    dummy text of the printing and typesetting industry.
                                                                    Lorem Ipsum has been t...
                                                                </p>

                                                                <div class="product-action">

                                                                    <a href="javascript:void(0);"
                                                                       onclick="Shopify.addItem(37031996981405, 1); return false;"
                                                                       class="add-to-cart ajax-spin-cart"
                                                                       data-toggle="tooltip" data-placement="top"
                                                                       title="Add to cart">
                <span>
                    <span class="cart-title"><i class="ti-shopping-cart"></i></span>
                    <span class="cart-loading animated infinite rotateOut"><i class="ion-load-a"></i></span>
                    <span class="cart-added"><i class="ion-android-done"></i></span>
                    <span class="cart-unavailable"><i class="ion-android-alert"></i></span>
                </span>
                                                                    </a>

                                                                    <a href="javascript:void(0);"
                                                                       onclick="quiqview('earbuds')" class="quick-view"
                                                                       data-toggle="tooltip" data-placement="top"
                                                                       title="Quickview">
                                                                        <i class="ti-eye"></i>
                                                                    </a>

                                                                    <a class="wishlist" href="/account/login"
                                                                       title="Wishlist" data-toggle="tooltip"
                                                                       data-placement="top" title="Wishlist">
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
                                                    </li>
                                                    <li class="st-col-item">
                                                        <div class="single-product-wrap ">
                                                            <div class="product-image ">
                                                                <a class="pro-img"
                                                                   href="{{url("/collections/electronic/details")}}">
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
                                                                       class="add-to-cart ajax-spin-cart"
                                                                       data-toggle="tooltip" data-placement="top"
                                                                       title="Add to cart">
                <span>
                    <span class="cart-title"><i class="ti-shopping-cart"></i></span>
                    <span class="cart-loading animated infinite rotateOut"><i class="ion-load-a"></i></span>
                    <span class="cart-added"><i class="ion-android-done"></i></span>
                    <span class="cart-unavailable"><i class="ion-android-alert"></i></span>
                </span>
                                                                    </a>

                                                                    <a href="javascript:void(0);"
                                                                       onclick="quiqview('juice-machine')"
                                                                       class="quick-view" data-toggle="tooltip"
                                                                       data-placement="top" title="Quickview">
                                                                        <i class="ti-eye"></i>
                                                                    </a>

                                                                    <a class="wishlist" href="/account/login"
                                                                       title="Wishlist" data-toggle="tooltip"
                                                                       data-placement="top" title="Wishlist">
                                                                        <i class="ti-heart"></i>
                                                                    </a>

                                                                </div>

                                                            </div>
                                                            <div class="product-content">
                                                                <div class="product-ratting">
                                                                    <span class="shopify-product-reviews-badge"
                                                                          data-id="5822867865757"></span>
                                                                </div>
                                                                <h6>
                                                                    <a href="/collections/headphone/products/juice-machine"
                                                                       title="Juice machine">Juice machine</a>
                                                                </h6>
                                                                <div class="price-box">
                                                                    <span class="new-price"><span
                                                                            class=money>Rs. 150.00</span></span>

                                                                    <span class="old-price"><span
                                                                            class=money>Rs. 155.00</span></span>

                                                                </div>
                                                                <p class="product-description">Lorem Ipsum is simply
                                                                    dummy text of the printing and typesetting industry.
                                                                    Lorem Ipsum has been t...
                                                                </p>

                                                                <div class="product-action">

                                                                    <a href="javascript:void(0);"
                                                                       onclick="Shopify.addItem(37031999439005, 1); return false;"
                                                                       class="add-to-cart ajax-spin-cart"
                                                                       data-toggle="tooltip" data-placement="top"
                                                                       title="Add to cart">
                <span>
                    <span class="cart-title"><i class="ti-shopping-cart"></i></span>
                    <span class="cart-loading animated infinite rotateOut"><i class="ion-load-a"></i></span>
                    <span class="cart-added"><i class="ion-android-done"></i></span>
                    <span class="cart-unavailable"><i class="ion-android-alert"></i></span>
                </span>
                                                                    </a>

                                                                    <a href="javascript:void(0);"
                                                                       onclick="quiqview('juice-machine')"
                                                                       class="quick-view" data-toggle="tooltip"
                                                                       data-placement="top" title="Quickview">
                                                                        <i class="ti-eye"></i>
                                                                    </a>

                                                                    <a class="wishlist" href="/account/login"
                                                                       title="Wishlist" data-toggle="tooltip"
                                                                       data-placement="top" title="Wishlist">
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
                                                    </li>
                                                    <li class="st-col-item">
                                                        <div class="single-product-wrap ">
                                                            <div class="product-image ">
                                                                <a class="pro-img"
                                                                   href="{{url("/collections/electronic/details")}}">
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
                                                                       class="add-to-cart ajax-spin-cart"
                                                                       data-toggle="tooltip" data-placement="top"
                                                                       title="Add to cart">
                <span>
                    <span class="cart-title"><i class="ti-shopping-cart"></i></span>
                    <span class="cart-loading animated infinite rotateOut"><i class="ion-load-a"></i></span>
                    <span class="cart-added"><i class="ion-android-done"></i></span>
                    <span class="cart-unavailable"><i class="ion-android-alert"></i></span>
                </span>
                                                                    </a>

                                                                    <a href="javascript:void(0);"
                                                                       onclick="quiqview('headphone')"
                                                                       class="quick-view" data-toggle="tooltip"
                                                                       data-placement="top" title="Quickview">
                                                                        <i class="ti-eye"></i>
                                                                    </a>

                                                                    <a class="wishlist" href="/account/login"
                                                                       title="Wishlist" data-toggle="tooltip"
                                                                       data-placement="top" title="Wishlist">
                                                                        <i class="ti-heart"></i>
                                                                    </a>

                                                                </div>

                                                            </div>
                                                            <div class="product-content">
                                                                <div class="product-ratting">
                                                                    <span class="shopify-product-reviews-badge"
                                                                          data-id="5822868095133"></span>
                                                                </div>
                                                                <h6>
                                                                    <a href="/collections/headphone/products/headphone"
                                                                       title="Headphone">Headphone</a>
                                                                </h6>
                                                                <div class="price-box">
                                                                    <span class="new-price"><span
                                                                            class=money>Rs. 232.00</span></span>

                                                                    <span class="old-price"><span
                                                                            class=money>Rs. 250.00</span></span>

                                                                </div>
                                                                <p class="product-description">Lorem Ipsum is simply
                                                                    dummy text of the printing and typesetting industry.
                                                                    Lorem Ipsum has been t...
                                                                </p>

                                                                <div class="product-action">

                                                                    <a href="javascript:void(0);"
                                                                       onclick="Shopify.addItem(37032000880797, 1); return false;"
                                                                       class="add-to-cart ajax-spin-cart"
                                                                       data-toggle="tooltip" data-placement="top"
                                                                       title="Add to cart">
                <span>
                    <span class="cart-title"><i class="ti-shopping-cart"></i></span>
                    <span class="cart-loading animated infinite rotateOut"><i class="ion-load-a"></i></span>
                    <span class="cart-added"><i class="ion-android-done"></i></span>
                    <span class="cart-unavailable"><i class="ion-android-alert"></i></span>
                </span>
                                                                    </a>

                                                                    <a href="javascript:void(0);"
                                                                       onclick="quiqview('headphone')"
                                                                       class="quick-view" data-toggle="tooltip"
                                                                       data-placement="top" title="Quickview">
                                                                        <i class="ti-eye"></i>
                                                                    </a>

                                                                    <a class="wishlist" href="/account/login"
                                                                       title="Wishlist" data-toggle="tooltip"
                                                                       data-placement="top" title="Wishlist">
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
                                                    </li>
                                                    <li class="st-col-item">
                                                        <div class="single-product-wrap ">
                                                            <div class="product-image ">
                                                                <a class="pro-img"
                                                                   href="{{url("/collections/electronic/details")}}">
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
                                                                       class="add-to-cart ajax-spin-cart"
                                                                       data-toggle="tooltip" data-placement="top"
                                                                       title="Add to cart">
                <span>
                    <span class="cart-title"><i class="ti-shopping-cart"></i></span>
                    <span class="cart-loading animated infinite rotateOut"><i class="ion-load-a"></i></span>
                    <span class="cart-added"><i class="ion-android-done"></i></span>
                    <span class="cart-unavailable"><i class="ion-android-alert"></i></span>
                </span>
                                                                    </a>

                                                                    <a href="javascript:void(0);"
                                                                       onclick="quiqview('mouse')" class="quick-view"
                                                                       data-toggle="tooltip" data-placement="top"
                                                                       title="Quickview">
                                                                        <i class="ti-eye"></i>
                                                                    </a>

                                                                    <a class="wishlist" href="/account/login"
                                                                       title="Wishlist" data-toggle="tooltip"
                                                                       data-placement="top" title="Wishlist">
                                                                        <i class="ti-heart"></i>
                                                                    </a>

                                                                </div>

                                                            </div>
                                                            <div class="product-content">
                                                                <div class="product-ratting">
                                                                    <span class="shopify-product-reviews-badge"
                                                                          data-id="5822869012637"></span>
                                                                </div>
                                                                <h6>
                                                                    <a href="/collections/headphone/products/mouse"
                                                                       title="Mouse">Mouse</a>
                                                                </h6>
                                                                <div class="price-box">
                                                                    <span class="new-price"><span
                                                                            class=money>Rs. 25.00</span></span>

                                                                    <span class="old-price"><span
                                                                            class=money>Rs. 30.00</span></span>

                                                                </div>
                                                                <p class="product-description">Lorem Ipsum is simply
                                                                    dummy text of the printing and typesetting industry.
                                                                    Lorem Ipsum has been t...
                                                                </p>

                                                                <div class="product-action">

                                                                    <a href="javascript:void(0);"
                                                                       onclick="Shopify.addItem(37032005435549, 1); return false;"
                                                                       class="add-to-cart ajax-spin-cart"
                                                                       data-toggle="tooltip" data-placement="top"
                                                                       title="Add to cart">
                <span>
                    <span class="cart-title"><i class="ti-shopping-cart"></i></span>
                    <span class="cart-loading animated infinite rotateOut"><i class="ion-load-a"></i></span>
                    <span class="cart-added"><i class="ion-android-done"></i></span>
                    <span class="cart-unavailable"><i class="ion-android-alert"></i></span>
                </span>
                                                                    </a>

                                                                    <a href="javascript:void(0);"
                                                                       onclick="quiqview('mouse')" class="quick-view"
                                                                       data-toggle="tooltip" data-placement="top"
                                                                       title="Quickview">
                                                                        <i class="ti-eye"></i>
                                                                    </a>

                                                                    <a class="wishlist" href="/account/login"
                                                                       title="Wishlist" data-toggle="tooltip"
                                                                       data-placement="top" title="Wishlist">
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
                                                    </li>
                                                    <li class="st-col-item">
                                                        <div class="single-product-wrap ">
                                                            <div class="product-image ">
                                                                <a class="pro-img"
                                                                   href="{{url("/collections/electronic/details")}}">
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
                                                                       class="add-to-cart ajax-spin-cart"
                                                                       data-toggle="tooltip" data-placement="top"
                                                                       title="Add to cart">
                <span>
                    <span class="cart-title"><i class="ti-shopping-cart"></i></span>
                    <span class="cart-loading animated infinite rotateOut"><i class="ion-load-a"></i></span>
                    <span class="cart-added"><i class="ion-android-done"></i></span>
                    <span class="cart-unavailable"><i class="ion-android-alert"></i></span>
                </span>
                                                                    </a>

                                                                    <a href="javascript:void(0);"
                                                                       onclick="quiqview('camera')" class="quick-view"
                                                                       data-toggle="tooltip" data-placement="top"
                                                                       title="Quickview">
                                                                        <i class="ti-eye"></i>
                                                                    </a>

                                                                    <a class="wishlist" href="/account/login"
                                                                       title="Wishlist" data-toggle="tooltip"
                                                                       data-placement="top" title="Wishlist">
                                                                        <i class="ti-heart"></i>
                                                                    </a>

                                                                </div>

                                                            </div>
                                                            <div class="product-content">
                                                                <div class="product-ratting">
                                                                    <span class="shopify-product-reviews-badge"
                                                                          data-id="5822868455581"></span>
                                                                </div>
                                                                <h6>
                                                                    <a href="/collections/headphone/products/camera"
                                                                       title="Camera">Camera</a>
                                                                </h6>
                                                                <div class="price-box">
                                                                    <span class="new-price"><span
                                                                            class=money>Rs. 150.00</span></span>

                                                                    <span class="old-price"><span
                                                                            class=money>Rs. 155.00</span></span>

                                                                </div>
                                                                <p class="product-description">Lorem Ipsum is simply
                                                                    dummy text of the printing and typesetting industry.
                                                                    Lorem Ipsum has been t...
                                                                </p>

                                                                <div class="product-action">

                                                                    <a href="javascript:void(0);"
                                                                       onclick="Shopify.addItem(37032002584733, 1); return false;"
                                                                       class="add-to-cart ajax-spin-cart"
                                                                       data-toggle="tooltip" data-placement="top"
                                                                       title="Add to cart">
                <span>
                    <span class="cart-title"><i class="ti-shopping-cart"></i></span>
                    <span class="cart-loading animated infinite rotateOut"><i class="ion-load-a"></i></span>
                    <span class="cart-added"><i class="ion-android-done"></i></span>
                    <span class="cart-unavailable"><i class="ion-android-alert"></i></span>
                </span>
                                                                    </a>

                                                                    <a href="javascript:void(0);"
                                                                       onclick="quiqview('camera')" class="quick-view"
                                                                       data-toggle="tooltip" data-placement="top"
                                                                       title="Quickview">
                                                                        <i class="ti-eye"></i>
                                                                    </a>

                                                                    <a class="wishlist" href="/account/login"
                                                                       title="Wishlist" data-toggle="tooltip"
                                                                       data-placement="top" title="Wishlist">
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
                                                    </li>
                                                    <li class="st-col-item">
                                                        <div class="single-product-wrap ">
                                                            <div class="product-image ">
                                                                <a class="pro-img"
                                                                   href="{{url("/collections/electronic/details")}}">
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
                                                                       class="add-to-cart ajax-spin-cart"
                                                                       data-toggle="tooltip" data-placement="top"
                                                                       title="Add to cart">
                <span>
                    <span class="cart-title"><i class="ti-shopping-cart"></i></span>
                    <span class="cart-loading animated infinite rotateOut"><i class="ion-load-a"></i></span>
                    <span class="cart-added"><i class="ion-android-done"></i></span>
                    <span class="cart-unavailable"><i class="ion-android-alert"></i></span>
                </span>
                                                                    </a>

                                                                    <a href="javascript:void(0);"
                                                                       onclick="quiqview('pen-drive')"
                                                                       class="quick-view" data-toggle="tooltip"
                                                                       data-placement="top" title="Quickview">
                                                                        <i class="ti-eye"></i>
                                                                    </a>

                                                                    <a class="wishlist" href="/account/login"
                                                                       title="Wishlist" data-toggle="tooltip"
                                                                       data-placement="top" title="Wishlist">
                                                                        <i class="ti-heart"></i>
                                                                    </a>

                                                                </div>

                                                            </div>
                                                            <div class="product-content">
                                                                <div class="product-ratting">
                                                                    <span class="shopify-product-reviews-badge"
                                                                          data-id="5822867964061"></span>
                                                                </div>
                                                                <h6>
                                                                    <a href="/collections/headphone/products/pen-drive"
                                                                       title="Pen drive">Pen drive</a>
                                                                </h6>
                                                                <div class="price-box">
                                                                    <span class="new-price"><span
                                                                            class=money>Rs. 100.00</span></span>

                                                                    <span class="old-price"><span
                                                                            class=money>Rs. 120.00</span></span>

                                                                </div>
                                                                <p class="product-description">Lorem Ipsum is simply
                                                                    dummy text of the printing and typesetting industry.
                                                                    Lorem Ipsum has been t...
                                                                </p>

                                                                <div class="product-action">

                                                                    <a href="javascript:void(0);"
                                                                       onclick="Shopify.addItem(37031999930525, 1); return false;"
                                                                       class="add-to-cart ajax-spin-cart"
                                                                       data-toggle="tooltip" data-placement="top"
                                                                       title="Add to cart">
                <span>
                    <span class="cart-title"><i class="ti-shopping-cart"></i></span>
                    <span class="cart-loading animated infinite rotateOut"><i class="ion-load-a"></i></span>
                    <span class="cart-added"><i class="ion-android-done"></i></span>
                    <span class="cart-unavailable"><i class="ion-android-alert"></i></span>
                </span>
                                                                    </a>

                                                                    <a href="javascript:void(0);"
                                                                       onclick="quiqview('pen-drive')"
                                                                       class="quick-view" data-toggle="tooltip"
                                                                       data-placement="top" title="Quickview">
                                                                        <i class="ti-eye"></i>
                                                                    </a>

                                                                    <a class="wishlist" href="/account/login"
                                                                       title="Wishlist" data-toggle="tooltip"
                                                                       data-placement="top" title="Wishlist">
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
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="paginatoin-area">
                                        <ul class="paginate">

                                            <li class="page-numerous">
                                                <p>
                                                    Showing
                                                    1 - 12
                                                    of
                                                    12
                                                    result
                                                </p>
                                            </li>


                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-12 pro-grli-wrap">
                        <div class="shop-sidebar-wrap">
                            <div class="shop-sidebar-inner">
                                <div class="shop-sidebar sidebar-filter">
                                    <div class="clear-content">
                                        <h6 class="title">Filter :</h6>
                                        <a href="/collections/all" class="clear">Clear All</a>
                                    </div>
                                    <ul class="filter-selected">
                                        <li class="tag-selected-filter"></li>
                                    </ul>
                                </div>
                                <div class="shop-sidebar sidebar-wedget"><h6 class="title">Categories</h6>
                                    <a class="title" data-toggle="collapse" href="#collapse-Categories">Categories</a>
                                    <div class="collapse scroll-top" id="collapse-Categories">
                                        <ul class="scrollbar">

                                            <li class=""><input type="checkbox" class="cust-checkbox"
                                                                name="Best Seller"><a href="/collections/best-seller"
                                                                                      class="cust-checkbox-label"
                                                                                      title="Best Seller">
                                                    <span class="filter-name">Best Seller</span>
                                                    <span class="count-check">12</span>
                                                    <span class="cust-check"></span>
                                                </a>
                                            </li>
                                            <li class=""><input type="checkbox" class="cust-checkbox" name="Camera"><a
                                                    href="/collections/camera" class="cust-checkbox-label"
                                                    title="Camera">
                                                    <span class="filter-name">Camera</span>
                                                    <span class="count-check">12</span>
                                                    <span class="cust-check"></span>
                                                </a>
                                            </li>
                                            <li class=""><input type="checkbox" class="cust-checkbox" name="Computer"><a
                                                    href="/collections/computer" class="cust-checkbox-label"
                                                    title="Computer">
                                                    <span class="filter-name">Computer</span>
                                                    <span class="count-check">12</span>
                                                    <span class="cust-check"></span>
                                                </a>
                                            </li>
                                            <li class=""><input type="checkbox" class="cust-checkbox"
                                                                name="Deal Collection"><a
                                                    href="/collections/deal-collection" class="cust-checkbox-label"
                                                    title="Deal Collection">
                                                    <span class="filter-name">Deal Collection</span>
                                                    <span class="count-check">3</span>
                                                    <span class="cust-check"></span>
                                                </a>
                                            </li>
                                            <li class=""><input type="checkbox" class="cust-checkbox" name="Electronic"><a
                                                    href="/collections/electronic" class="cust-checkbox-label"
                                                    title="Electronic">
                                                    <span class="filter-name">Electronic</span>
                                                    <span class="count-check">12</span>
                                                    <span class="cust-check"></span>
                                                </a>
                                            </li>
                                            <li class=""><input type="checkbox" class="cust-checkbox"
                                                                name="Featured products"><a
                                                    href="/collections/featured-products" class="cust-checkbox-label"
                                                    title="Featured products">
                                                    <span class="filter-name">Featured products</span>
                                                    <span class="count-check">12</span>
                                                    <span class="cust-check"></span>
                                                </a>
                                            </li>
                                            <li class="active"><input type="checkbox" checked="checked" name="Headphone"
                                                                      class="cust-checkbox"><a
                                                    href="/collections/headphone" class="cust-checkbox-label"
                                                    title="Headphone">
                                                    <span class="filter-name">Headphone</span>
                                                    <span class="count-check">12</span>
                                                    <span class="cust-check"></span>
                                                </a>
                                            </li>
                                            <li class=""><input type="checkbox" class="cust-checkbox"
                                                                name="Home Appliance"><a
                                                    href="/collections/home-appliance" class="cust-checkbox-label"
                                                    title="Home Appliance">
                                                    <span class="filter-name">Home Appliance</span>
                                                    <span class="count-check">12</span>
                                                    <span class="cust-check"></span>
                                                </a>
                                            </li>
                                            <li class=""><input type="checkbox" class="cust-checkbox" name="Laptop"><a
                                                    href="/collections/laptop" class="cust-checkbox-label"
                                                    title="Laptop">
                                                    <span class="filter-name">Laptop</span>
                                                    <span class="count-check">12</span>
                                                    <span class="cust-check"></span>
                                                </a>
                                            </li>
                                            <li class=""><input type="checkbox" class="cust-checkbox"
                                                                name="New products"><a href="/collections/new-products"
                                                                                       class="cust-checkbox-label"
                                                                                       title="New products">
                                                    <span class="filter-name">New products</span>
                                                    <span class="count-check">12</span>
                                                    <span class="cust-check"></span>
                                                </a>
                                            </li>
                                            <li class=""><input type="checkbox" class="cust-checkbox" name="Pen Drives"><a
                                                    href="/collections/pen-drives" class="cust-checkbox-label"
                                                    title="Pen Drives">
                                                    <span class="filter-name">Pen Drives</span>
                                                    <span class="count-check">12</span>
                                                    <span class="cust-check"></span>
                                                </a>
                                            </li>
                                            <li class=""><input type="checkbox" class="cust-checkbox"
                                                                name="Refrigerator"><a href="/collections/refrigerator"
                                                                                       class="cust-checkbox-label"
                                                                                       title="Refrigerator">
                                                    <span class="filter-name">Refrigerator</span>
                                                    <span class="count-check">12</span>
                                                    <span class="cust-check"></span>
                                                </a>
                                            </li>
                                            <li class=""><input type="checkbox" class="cust-checkbox" name="Smartphone"><a
                                                    href="/collections/smartphone" class="cust-checkbox-label"
                                                    title="Smartphone">
                                                    <span class="filter-name">Smartphone</span>
                                                    <span class="count-check">12</span>
                                                    <span class="cust-check"></span>
                                                </a>
                                            </li>
                                            <li class=""><input type="checkbox" class="cust-checkbox" name="Speakers"><a
                                                    href="/collections/speakers" class="cust-checkbox-label"
                                                    title="Speakers">
                                                    <span class="filter-name">Speakers</span>
                                                    <span class="count-check">12</span>
                                                    <span class="cust-check"></span>
                                                </a>
                                            </li>
                                            <li class=""><input type="checkbox" class="cust-checkbox"
                                                                name="Special Produts"><a
                                                    href="/collections/special-produts" class="cust-checkbox-label"
                                                    title="Special Produts">
                                                    <span class="filter-name">Special Produts</span>
                                                    <span class="count-check">12</span>
                                                    <span class="cust-check"></span>
                                                </a>
                                            </li>
                                            <li class=""><input type="checkbox" class="cust-checkbox" name="VR Box"><a
                                                    href="/collections/vr-box" class="cust-checkbox-label"
                                                    title="VR Box">
                                                    <span class="filter-name">VR Box</span>
                                                    <span class="count-check">12</span>
                                                    <span class="cust-check"></span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>


                                <form id="custom-collection-filter" action="/collections/headphone">


                                    <div class="shop-sidebar sidebar-wedget Color">

                                        <h6 class="title">Color</h6>
                                        <a class="title" data-toggle="collapse" href="#collapse1">Color</a>
                                        <div class="collapse scroll-top" id="collapse1">
                                            <ul class="multiple-filters scrollbar">


                                                <li class="color">
                                                    <label class="cust-checkbox-label color">
                                                        <span class="filter-name">black</span>

                                                        <input type="checkbox" data-tag="color_black"
                                                               data-remove-tag="black" name="color" value="color_black"
                                                               class="cust-checkbox">

                                                        <span class="cust-check" data-tag="color_black"
                                                              data-remove-tag="black"
                                                              style="background: black no-repeat center; background-size: initial;"></span>
                                                    </label>
                                                </li>


                                                <li class="color">
                                                    <label class="cust-checkbox-label color">
                                                        <span class="filter-name">blue</span>

                                                        <input type="checkbox" data-tag="color_blue"
                                                               data-remove-tag="blue" name="color" value="color_blue"
                                                               class="cust-checkbox">

                                                        <span class="cust-check" data-tag="color_blue"
                                                              data-remove-tag="blue"
                                                              style="background: blue no-repeat center; background-size: initial;"></span>
                                                    </label>
                                                </li>


                                                <li class="color">
                                                    <label class="cust-checkbox-label color">
                                                        <span class="filter-name">brown</span>

                                                        <input type="checkbox" data-tag="color_brown"
                                                               data-remove-tag="brown" name="color" value="color_brown"
                                                               class="cust-checkbox">

                                                        <span class="cust-check" data-tag="color_brown"
                                                              data-remove-tag="brown"
                                                              style="background: brown no-repeat center; background-size: initial;"></span>
                                                    </label>
                                                </li>


                                                <li class="color">
                                                    <label class="cust-checkbox-label color">
                                                        <span class="filter-name">gold</span>

                                                        <input type="checkbox" data-tag="color_gold"
                                                               data-remove-tag="gold" name="color" value="color_gold"
                                                               class="cust-checkbox">

                                                        <span class="cust-check" data-tag="color_gold"
                                                              data-remove-tag="gold"
                                                              style="background: gold no-repeat center; background-size: initial;"></span>
                                                    </label>
                                                </li>


                                                <li class="color">
                                                    <label class="cust-checkbox-label color">
                                                        <span class="filter-name">gray</span>

                                                        <input type="checkbox" data-tag="color_gray"
                                                               data-remove-tag="gray" name="color" value="color_gray"
                                                               class="cust-checkbox">

                                                        <span class="cust-check" data-tag="color_gray"
                                                              data-remove-tag="gray"
                                                              style="background: gray no-repeat center; background-size: initial;"></span>
                                                    </label>
                                                </li>


                                                <li class="color">
                                                    <label class="cust-checkbox-label color">
                                                        <span class="filter-name">green</span>

                                                        <input type="checkbox" data-tag="color_green"
                                                               data-remove-tag="green" name="color" value="color_green"
                                                               class="cust-checkbox">

                                                        <span class="cust-check" data-tag="color_green"
                                                              data-remove-tag="green"
                                                              style="background: green no-repeat center; background-size: initial;"></span>
                                                    </label>
                                                </li>


                                                <li class="color">
                                                    <label class="cust-checkbox-label color">
                                                        <span class="filter-name">pink</span>

                                                        <input type="checkbox" data-tag="color_pink"
                                                               data-remove-tag="pink" name="color" value="color_pink"
                                                               class="cust-checkbox">

                                                        <span class="cust-check" data-tag="color_pink"
                                                              data-remove-tag="pink"
                                                              style="background: pink no-repeat center; background-size: initial;"></span>
                                                    </label>
                                                </li>


                                                <li class="color">
                                                    <label class="cust-checkbox-label color">
                                                        <span class="filter-name">red</span>

                                                        <input type="checkbox" data-tag="color_red"
                                                               data-remove-tag="red" name="color" value="color_red"
                                                               class="cust-checkbox">

                                                        <span class="cust-check" data-tag="color_red"
                                                              data-remove-tag="red"
                                                              style="background: red no-repeat center; background-size: initial;"></span>
                                                    </label>
                                                </li>


                                                <li class="color">
                                                    <label class="cust-checkbox-label color">
                                                        <span class="filter-name">whitesmoke</span>

                                                        <input type="checkbox" data-tag="color_whitesmoke"
                                                               data-remove-tag="whitesmoke" name="color"
                                                               value="color_whitesmoke" class="cust-checkbox">

                                                        <span class="cust-check" data-tag="color_whitesmoke"
                                                              data-remove-tag="whitesmoke"
                                                              style="background: whitesmoke no-repeat center; background-size: initial;"></span>
                                                    </label>
                                                </li>


                                            </ul>
                                        </div>
                                    </div>

                                    <div class="shop-sidebar sidebar-wedget Price">

                                        <h6 class="title">Price</h6>
                                        <a class="title" data-toggle="collapse" href="#collapse2">Price</a>
                                        <div class="collapse scroll-top" id="collapse2">
                                            <ul class="multiple-filters scrollbar">


                                                <li class="price">
                                                    <label class="cust-checkbox-label price">
                                                        <span class="filter-name">0-100</span>

                                                        <input type="checkbox" data-tag="price_0-100"
                                                               data-remove-tag="0-100" name="price" value="price_0-100"
                                                               class="cust-checkbox">

                                                        <span class="cust-check" data-tag="price_0-100"
                                                              data-remove-tag="0-100"
                                                              style="background: 0-100 no-repeat center; background-size: initial;"></span>
                                                    </label>
                                                </li>


                                                <li class="price">
                                                    <label class="cust-checkbox-label price">
                                                        <span class="filter-name">100-200</span>

                                                        <input type="checkbox" data-tag="price_100-200"
                                                               data-remove-tag="100-200" name="price"
                                                               value="price_100-200" class="cust-checkbox">

                                                        <span class="cust-check" data-tag="price_100-200"
                                                              data-remove-tag="100-200"
                                                              style="background: 100-200 no-repeat center; background-size: initial;"></span>
                                                    </label>
                                                </li>


                                                <li class="price">
                                                    <label class="cust-checkbox-label price">
                                                        <span class="filter-name">200-300</span>

                                                        <input type="checkbox" data-tag="price_200-300"
                                                               data-remove-tag="200-300" name="price"
                                                               value="price_200-300" class="cust-checkbox">

                                                        <span class="cust-check" data-tag="price_200-300"
                                                              data-remove-tag="200-300"
                                                              style="background: 200-300 no-repeat center; background-size: initial;"></span>
                                                    </label>
                                                </li>


                                            </ul>
                                        </div>
                                    </div>

                                    <div class="shop-sidebar sidebar-wedget Size">

                                        <h6 class="title">Size</h6>
                                        <a class="title" data-toggle="collapse" href="#collapse3">Size</a>
                                        <div class="collapse scroll-top" id="collapse3">
                                            <ul class="multiple-filters scrollbar">


                                                <li class="size">
                                                    <label class="cust-checkbox-label size">
                                                        <span class="filter-name">128gb</span>

                                                        <input type="checkbox" data-tag="size_128gb"
                                                               data-remove-tag="128gb" name="size" value="size_128gb"
                                                               class="cust-checkbox">

                                                        <span class="cust-check" data-tag="size_128gb"
                                                              data-remove-tag="128gb"
                                                              style="background: 128gb no-repeat center; background-size: initial;"></span>
                                                    </label>
                                                </li>


                                                <li class="size">
                                                    <label class="cust-checkbox-label size">
                                                        <span class="filter-name">128MP</span>

                                                        <input type="checkbox" data-tag="size_128MP"
                                                               data-remove-tag="128MP" name="size" value="size_128MP"
                                                               class="cust-checkbox">

                                                        <span class="cust-check" data-tag="size_128MP"
                                                              data-remove-tag="128MP"
                                                              style="background: 128MP no-repeat center; background-size: initial;"></span>
                                                    </label>
                                                </li>


                                                <li class="size">
                                                    <label class="cust-checkbox-label size">
                                                        <span class="filter-name">16gb</span>

                                                        <input type="checkbox" data-tag="size_16gb"
                                                               data-remove-tag="16gb" name="size" value="size_16gb"
                                                               class="cust-checkbox">

                                                        <span class="cust-check" data-tag="size_16gb"
                                                              data-remove-tag="16gb"
                                                              style="background: 16gb no-repeat center; background-size: initial;"></span>
                                                    </label>
                                                </li>


                                                <li class="size">
                                                    <label class="cust-checkbox-label size">
                                                        <span class="filter-name">1l</span>

                                                        <input type="checkbox" data-tag="size_1l" data-remove-tag="1l"
                                                               name="size" value="size_1l" class="cust-checkbox">

                                                        <span class="cust-check" data-tag="size_1l" data-remove-tag="1l"
                                                              style="background: 1l no-repeat center; background-size: initial;"></span>
                                                    </label>
                                                </li>


                                                <li class="size">
                                                    <label class="cust-checkbox-label size">
                                                        <span class="filter-name">2l</span>

                                                        <input type="checkbox" data-tag="size_2l" data-remove-tag="2l"
                                                               name="size" value="size_2l" class="cust-checkbox">

                                                        <span class="cust-check" data-tag="size_2l" data-remove-tag="2l"
                                                              style="background: 2l no-repeat center; background-size: initial;"></span>
                                                    </label>
                                                </li>


                                                <li class="size">
                                                    <label class="cust-checkbox-label size">
                                                        <span class="filter-name">2tb</span>

                                                        <input type="checkbox" data-tag="size_2tb" data-remove-tag="2tb"
                                                               name="size" value="size_2tb" class="cust-checkbox">

                                                        <span class="cust-check" data-tag="size_2tb"
                                                              data-remove-tag="2tb"
                                                              style="background: 2tb no-repeat center; background-size: initial;"></span>
                                                    </label>
                                                </li>


                                                <li class="size">
                                                    <label class="cust-checkbox-label size">
                                                        <span class="filter-name">32gb</span>

                                                        <input type="checkbox" data-tag="size_32gb"
                                                               data-remove-tag="32gb" name="size" value="size_32gb"
                                                               class="cust-checkbox">

                                                        <span class="cust-check" data-tag="size_32gb"
                                                              data-remove-tag="32gb"
                                                              style="background: 32gb no-repeat center; background-size: initial;"></span>
                                                    </label>
                                                </li>


                                                <li class="size">
                                                    <label class="cust-checkbox-label size">
                                                        <span class="filter-name">3l</span>

                                                        <input type="checkbox" data-tag="size_3l" data-remove-tag="3l"
                                                               name="size" value="size_3l" class="cust-checkbox">

                                                        <span class="cust-check" data-tag="size_3l" data-remove-tag="3l"
                                                              style="background: 3l no-repeat center; background-size: initial;"></span>
                                                    </label>
                                                </li>


                                                <li class="size">
                                                    <label class="cust-checkbox-label size">
                                                        <span class="filter-name">3tb</span>

                                                        <input type="checkbox" data-tag="size_3tb" data-remove-tag="3tb"
                                                               name="size" value="size_3tb" class="cust-checkbox">

                                                        <span class="cust-check" data-tag="size_3tb"
                                                              data-remove-tag="3tb"
                                                              style="background: 3tb no-repeat center; background-size: initial;"></span>
                                                    </label>
                                                </li>


                                                <li class="size">
                                                    <label class="cust-checkbox-label size">
                                                        <span class="filter-name">48MP</span>

                                                        <input type="checkbox" data-tag="size_48MP"
                                                               data-remove-tag="48MP" name="size" value="size_48MP"
                                                               class="cust-checkbox">

                                                        <span class="cust-check" data-tag="size_48MP"
                                                              data-remove-tag="48MP"
                                                              style="background: 48MP no-repeat center; background-size: initial;"></span>
                                                    </label>
                                                </li>


                                                <li class="size">
                                                    <label class="cust-checkbox-label size">
                                                        <span class="filter-name">4l</span>

                                                        <input type="checkbox" data-tag="size_4l" data-remove-tag="4l"
                                                               name="size" value="size_4l" class="cust-checkbox">

                                                        <span class="cust-check" data-tag="size_4l" data-remove-tag="4l"
                                                              style="background: 4l no-repeat center; background-size: initial;"></span>
                                                    </label>
                                                </li>


                                                <li class="size">
                                                    <label class="cust-checkbox-label size">
                                                        <span class="filter-name">4tb</span>

                                                        <input type="checkbox" data-tag="size_4tb" data-remove-tag="4tb"
                                                               name="size" value="size_4tb" class="cust-checkbox">

                                                        <span class="cust-check" data-tag="size_4tb"
                                                              data-remove-tag="4tb"
                                                              style="background: 4tb no-repeat center; background-size: initial;"></span>
                                                    </label>
                                                </li>


                                                <li class="size">
                                                    <label class="cust-checkbox-label size">
                                                        <span class="filter-name">5l</span>

                                                        <input type="checkbox" data-tag="size_5l" data-remove-tag="5l"
                                                               name="size" value="size_5l" class="cust-checkbox">

                                                        <span class="cust-check" data-tag="size_5l" data-remove-tag="5l"
                                                              style="background: 5l no-repeat center; background-size: initial;"></span>
                                                    </label>
                                                </li>


                                                <li class="size">
                                                    <label class="cust-checkbox-label size">
                                                        <span class="filter-name">64gb</span>

                                                        <input type="checkbox" data-tag="size_64gb"
                                                               data-remove-tag="64gb" name="size" value="size_64gb"
                                                               class="cust-checkbox">

                                                        <span class="cust-check" data-tag="size_64gb"
                                                              data-remove-tag="64gb"
                                                              style="background: 64gb no-repeat center; background-size: initial;"></span>
                                                    </label>
                                                </li>


                                                <li class="size">
                                                    <label class="cust-checkbox-label size">
                                                        <span class="filter-name">64MP</span>

                                                        <input type="checkbox" data-tag="size_64MP"
                                                               data-remove-tag="64MP" name="size" value="size_64MP"
                                                               class="cust-checkbox">

                                                        <span class="cust-check" data-tag="size_64MP"
                                                              data-remove-tag="64MP"
                                                              style="background: 64MP no-repeat center; background-size: initial;"></span>
                                                    </label>
                                                </li>


                                                <li class="size">
                                                    <label class="cust-checkbox-label size">
                                                        <span class="filter-name">6l</span>

                                                        <input type="checkbox" data-tag="size_6l" data-remove-tag="6l"
                                                               name="size" value="size_6l" class="cust-checkbox">

                                                        <span class="cust-check" data-tag="size_6l" data-remove-tag="6l"
                                                              style="background: 6l no-repeat center; background-size: initial;"></span>
                                                    </label>
                                                </li>


                                            </ul>
                                        </div>
                                    </div>

                                    <div class="shop-sidebar sidebar-wedget Tag">

                                        <h6 class="title">Tag</h6>
                                        <a class="title" data-toggle="collapse" href="#collapse4">Tag</a>
                                        <div class="collapse scroll-top" id="collapse4">
                                            <ul class="multiple-filters scrollbar">


                                                <li class="tag">
                                                    <label class="cust-checkbox-label tag">
                                                        <span class="filter-name">camera</span>

                                                        <input type="checkbox" data-tag="tag_camera"
                                                               data-remove-tag="camera" name="tag" value="tag_camera"
                                                               class="cust-checkbox">

                                                        <span class="cust-check" data-tag="tag_camera"
                                                              data-remove-tag="camera"
                                                              style="background: camera no-repeat center; background-size: initial;"></span>
                                                    </label>
                                                </li>


                                                <li class="tag">
                                                    <label class="cust-checkbox-label tag">
                                                        <span class="filter-name">earphone</span>

                                                        <input type="checkbox" data-tag="tag_earphone"
                                                               data-remove-tag="earphone" name="tag"
                                                               value="tag_earphone" class="cust-checkbox">

                                                        <span class="cust-check" data-tag="tag_earphone"
                                                              data-remove-tag="earphone"
                                                              style="background: earphone no-repeat center; background-size: initial;"></span>
                                                    </label>
                                                </li>


                                                <li class="tag">
                                                    <label class="cust-checkbox-label tag">
                                                        <span class="filter-name">headphone</span>

                                                        <input type="checkbox" data-tag="tag_headphone"
                                                               data-remove-tag="headphone" name="tag"
                                                               value="tag_headphone" class="cust-checkbox">

                                                        <span class="cust-check" data-tag="tag_headphone"
                                                              data-remove-tag="headphone"
                                                              style="background: headphone no-repeat center; background-size: initial;"></span>
                                                    </label>
                                                </li>


                                                <li class="tag">
                                                    <label class="cust-checkbox-label tag">
                                                        <span class="filter-name">Juice-machine</span>

                                                        <input type="checkbox" data-tag="tag_Juice-machine"
                                                               data-remove-tag="Juice-machine" name="tag"
                                                               value="tag_Juice-machine" class="cust-checkbox">

                                                        <span class="cust-check" data-tag="tag_Juice-machine"
                                                              data-remove-tag="Juice-machine"
                                                              style="background: Juice-machine no-repeat center; background-size: initial;"></span>
                                                    </label>
                                                </li>


                                                <li class="tag">
                                                    <label class="cust-checkbox-label tag">
                                                        <span class="filter-name">laptop</span>

                                                        <input type="checkbox" data-tag="tag_laptop"
                                                               data-remove-tag="laptop" name="tag" value="tag_laptop"
                                                               class="cust-checkbox">

                                                        <span class="cust-check" data-tag="tag_laptop"
                                                              data-remove-tag="laptop"
                                                              style="background: laptop no-repeat center; background-size: initial;"></span>
                                                    </label>
                                                </li>


                                                <li class="tag">
                                                    <label class="cust-checkbox-label tag">
                                                        <span class="filter-name">mouse</span>

                                                        <input type="checkbox" data-tag="tag_mouse"
                                                               data-remove-tag="mouse" name="tag" value="tag_mouse"
                                                               class="cust-checkbox">

                                                        <span class="cust-check" data-tag="tag_mouse"
                                                              data-remove-tag="mouse"
                                                              style="background: mouse no-repeat center; background-size: initial;"></span>
                                                    </label>
                                                </li>


                                                <li class="tag">
                                                    <label class="cust-checkbox-label tag">
                                                        <span class="filter-name">pen-drive</span>

                                                        <input type="checkbox" data-tag="tag_pen-drive"
                                                               data-remove-tag="pen-drive" name="tag"
                                                               value="tag_pen-drive" class="cust-checkbox">

                                                        <span class="cust-check" data-tag="tag_pen-drive"
                                                              data-remove-tag="pen-drive"
                                                              style="background: pen-drive no-repeat center; background-size: initial;"></span>
                                                    </label>
                                                </li>


                                                <li class="tag">
                                                    <label class="cust-checkbox-label tag">
                                                        <span class="filter-name">refrigerator</span>

                                                        <input type="checkbox" data-tag="tag_refrigerator"
                                                               data-remove-tag="refrigerator" name="tag"
                                                               value="tag_refrigerator" class="cust-checkbox">

                                                        <span class="cust-check" data-tag="tag_refrigerator"
                                                              data-remove-tag="refrigerator"
                                                              style="background: refrigerator no-repeat center; background-size: initial;"></span>
                                                    </label>
                                                </li>


                                                <li class="tag">
                                                    <label class="cust-checkbox-label tag">
                                                        <span class="filter-name">speaker</span>

                                                        <input type="checkbox" data-tag="tag_speaker"
                                                               data-remove-tag="speaker" name="tag" value="tag_speaker"
                                                               class="cust-checkbox">

                                                        <span class="cust-check" data-tag="tag_speaker"
                                                              data-remove-tag="speaker"
                                                              style="background: speaker no-repeat center; background-size: initial;"></span>
                                                    </label>
                                                </li>


                                                <li class="tag">
                                                    <label class="cust-checkbox-label tag">
                                                        <span class="filter-name">watch</span>

                                                        <input type="checkbox" data-tag="tag_watch"
                                                               data-remove-tag="watch" name="tag" value="tag_watch"
                                                               class="cust-checkbox">

                                                        <span class="cust-check" data-tag="tag_watch"
                                                              data-remove-tag="watch"
                                                              style="background: watch no-repeat center; background-size: initial;"></span>
                                                    </label>
                                                </li>


                                            </ul>
                                        </div>
                                    </div>

                                </form>

                                <script>
                                    var arr = [];
                                    $('.multiple-filters li input').each(function () {

                                        $(this).on('click', function (i) {
                                            $('.ajax-filter-loader').css('display', 'block');


                                            if ($(this).hasClass('active-filter')) {

                                                var remove_elements = $(this).attr('data-tag');

                                                var new_url = removeItemAll(arr, remove_elements);
                                                $(this).removeClass('active-filter');
                                                $(this).next('span').removeClass('active-filter');
                                                $('#' + remove_elements).remove();

                                            } else {

                                                if ($('.st-active-filter').length >= 1) {

                                                    arr.push($(this).attr('data-tag'));
                                                    $(this).addClass('active-filter');
                                                    $(this).next('span').addClass('active-filter');
                                                    var new_url = arr.join("+");

                                                } else {

                                                    arr.push($(this).attr('data-tag'));
                                                    $(this).addClass('active-filter');
                                                    $(this).next('span').addClass('active-filter');
                                                    var new_url = arr.join("+");

                                                }
                                                var new_data_tag = $(this).attr('data-tag');
                                                var remove_ele = $(this).attr('data-remove-tag');
                                                $('.tag-selected-filter').append('<a href="javascript:void(0);" class="remove-filter" id=' + new_data_tag + ' data-tag=' + new_data_tag + '><span class="remove-filter-selected">' + remove_ele + '<i class="ion-close-round"></i></span></a>');
                                            }


                                            var shop = '/collections/headphone/';


                                            if (typeof new_url === "undefined") {
                                                var redirect_url = shop;
                                            } else {
                                                var redirect_url = shop + new_url;
                                            }
                                            //console.log(redirect_url);

                                            $.get({
                                                url: redirect_url,
                                                success: function (data) {
                                                    setTimeout(function () {
                                                        var get_data = $(data).find('.shop-grid').html();
                                                        ///console.log(get_data);
                                                        $('.get-data-products').html(get_data);
                                                        $('.st-col-item').css('display', 'block');
                                                        $('.ajax-filter-loader').css('display', 'none');
                                                        SPR.registerCallbacks();
                                                        SPR.initRatingHandler();
                                                        SPR.initDomEls();
                                                        SPR.loadProducts();
                                                        SPR.loadBadges();
                                                    }, 300);

                                                }
                                            });
                                            window.history.pushState({path: redirect_url}, '', redirect_url);


                                            if ($('.remove-filter').length >= 1) {
                                                $('.sidebar-filter').css('display', 'block');
                                            } else {
                                                $('.sidebar-filter').css('display', 'none');
                                            }


                                        });

                                    });

                                    $(document).on("click", ".remove-filter", function () {

                                        $('.ajax-filter-loader').css('display', 'block');
                                        var remove_elements = $(this).attr('data-tag');
                                        var url = location.href
                                        var lastURLSegment = url.substr(url.lastIndexOf('/') + 1);
                                        console.log(arr);
                                        var new_url = removeItemAll(arr, remove_elements);
                                        if (arr.length == 1) {
                                            var redirect_url = new_url;
                                        } else {
                                            var redirect_url = new_url.join("+");
                                        }
                                        console.log(redirect_url);

                                        var shop = '/collections/headphone/';


                                        if (typeof new_url === "undefined") {
                                            ///alert('sdsd');
                                            var redirect_new_url = shop;

                                        } else {
                                            var redirect_url = shop + redirect_url;
                                        }

                                        $.get({
                                            url: redirect_url,
                                            success: function (data) {
                                                setTimeout(function () {
                                                    var get_data = $(data).find('.shop-grid').html();
                                                    ///console.log(get_data);
                                                    $('.get-data-products').html(get_data);
                                                    $('.st-col-item').css('display', 'block');
                                                    $('.ajax-filter-loader').css('display', 'none');
                                                    SPR.registerCallbacks();
                                                    SPR.initRatingHandler();
                                                    SPR.initDomEls();
                                                    SPR.loadProducts();
                                                    SPR.loadBadges();
                                                }, 300);
                                            }
                                        });
                                        window.history.pushState({path: redirect_url}, '', redirect_url);
                                        $(this).remove();
                                        $('.active-filter').each(function () {
                                            //console.log($(this).val());
                                            if ($(this).val() == remove_elements) {
                                                $(this).removeClass('active-filter');
                                                $(this).next('span').removeClass('active-filter');
                                            }
                                        });
                                        if ($('.st-active-filter').length >= 1) {
                                            $('.sidebar-filter').css('display', 'block');
                                        } else {
                                            $('.sidebar-filter').css('display', 'none');
                                        }
                                    });


                                    (function ($) {
                                        //alert('sfsfrer');
                                        $(window).on("load", function () {
                                            $(".scrollbar").mCustomScrollbar({theme: "dark-3"});
                                        });

                                        var url = location.href;
                                        var lastURLSegment = url.substr(url.lastIndexOf('/') + 1);
                                        var active_filter = lastURLSegment.split("+");
                                        console.log(active_filter);
                                        if (active_filter.length != null) {


                                            $('.cust-checkbox').each(function () {

                                                if (jQuery.inArray($(this).val(), active_filter) != -1) {
                                                    //alert('fff');

                                                    var remove_ele = $(this).val().split("_");

                                                    $(this).addClass('active-filter');
                                                    $(this).next('span').addClass('active-filter');
                                                    $('.tag-selected-filter').append('<a href="javascript:void(0);" class="remove-filter" id=' + active_filter + ' data-tag=' + active_filter + '><span class="remove-filter-selected">' + remove_ele[1] + '<i class="ion-close-round"></i></span></a>');
                                                    $('.tag-selected-filter').addClass('st-active-filter');
                                                    arr.push($(this).val());
                                                }
                                            });

                                            if ($('.remove-filter').length >= 1) {
                                                $('.sidebar-filter').css('display', 'block');
                                            } else {
                                                $('.sidebar-filter').css('display', 'none');
                                            }

                                        }

                                    })(jQuery);

                                    function removeItemAll(arr, value) {
                                        var i = 0;
                                        while (i < arr.length) {
                                            if (arr[i] === value) {
                                                arr.splice(i, 1);
                                            } else {

                                                ++i;
                                            }
                                        }
                                        return arr;
                                    }

                                </script>

                            </div>
                            <script>
                                $(".sidebar-wedget li.active a").removeAttr("href");
                            </script>
                            <style>
                                .shop-sidebar-inner .shop-sidebar.sidebar-filter {
                                    display: none;
                                }

                                .shop-sidebar-inner .shop-sidebar {
                                    margin-bottom: 30px;
                                    border: 1px solid #e2e2e2;
                                }

                                .shop-sidebar-inner form .shop-sidebar:last-child {
                                    margin-bottom: 0;
                                }

                                .shop-sidebar .title {
                                    font-size: 16px;
                                    padding: 10px 15px;
                                    background-color: #f8f8f8;
                                    font-weight: 600;
                                    text-transform: capitalize;
                                }

                                .shop-sidebar a.title {
                                    display: none;
                                }

                                .shop-sidebar .collapse:not(.show) {
                                    display: block;
                                }

                                .shop-sidebar ul.scrollbar {
                                    max-height: 275px;
                                    overflow-y: auto;
                                    border-top: 1px solid #e2e2e2;
                                }

                                .shop-sidebar ul.scrollbar li {
                                    padding: 12px 15px;
                                    border-top: 1px solid #e2e2e2;
                                }

                                .shop-sidebar ul.scrollbar li:first-of-type {
                                    border-top: none;
                                }

                                @media (max-width: 767px) {
                                    .shop-sidebar-inner .shop-sidebar {
                                        margin-bottom: 20px;
                                    }

                                    .shop-sidebar .title {
                                        display: none;
                                    }

                                    .shop-sidebar a.title {
                                        display: flex;
                                        align-items: center;
                                        justify-content: space-between;
                                        position: relative;
                                        -webkit-transition: all 0s ease-in-out 0s;
                                        -o-transition: all 0s ease-in-out 0s;
                                        transition: all 0s ease-in-out 0s;
                                    }

                                    .shop-sidebar a.title[aria-expanded="false"] {
                                        color: #222;
                                    }

                                    .shop-sidebar a.title[aria-expanded="true"] {
                                        color: #105caa;
                                    }

                                    .shop-sidebar a.title::after {
                                        color: #999;
                                        content: "\e61a";
                                        font-family: 'themify';
                                    }

                                    .shop-sidebar a.title[aria-expanded="true"]::after {
                                        content: "\e622";
                                        color: #105caa;
                                    }

                                    .shop-sidebar .collapse:not(.show) {
                                        display: none;
                                    }
                                }

                                /* clear content */
                                .shop-sidebar.sidebar-filter .clear-content {
                                    position: relative;
                                }

                                .shop-sidebar.sidebar-filter .clear-content .title {
                                    display: block;
                                }

                                .shop-sidebar.sidebar-filter a.clear {
                                    position: absolute;

                                    right: 15px;

                                    bottom: 50%;
                                    transform: translateY(50%);
                                    -webkit-transition: all 0.0s ease-in-out 0s;
                                    -o-transition: all 0.0s ease-in-out 0s;
                                    transition: all 0.0s ease-in-out 0s;
                                }

                                .sidebar-filter ul.filter-selected {
                                    padding: 10px 15px;
                                }

                                .sidebar-filter ul.filter-selected li {
                                    display: -ms-flexbox;
                                    display: flex;
                                    -ms-flex-wrap: wrap;
                                    flex-wrap: wrap;

                                    margin-left: -5px;

                                }

                                .sidebar-filter ul.filter-selected li a {
                                    color: #fff;
                                    display: flex;
                                    align-items: center;
                                    padding: 5px 5px;

                                    margin: 5px 0 0 5px;

                                    background-color: #105caa;
                                    text-transform: capitalize;
                                    line-height: 1;
                                }

                                .sidebar-filter ul.filter-selected li a span {
                                    display: flex;
                                    align-items: center;
                                }

                                .sidebar-filter ul.filter-selected li a span i {
                                    font-size: 10px;

                                    margin-left: 5px;

                                }

                                /* variant content css */
                                .shop-sidebar ul.scrollbar li .cust-checkbox-label {
                                    color: #222;
                                    font-size: 14px;
                                    display: flex;
                                    align-items: center;
                                    justify-content: space-between;
                                    position: relative;

                                    padding-left: 25px;

                                    cursor: pointer;
                                    -webkit-user-select: none;
                                    -moz-user-select: none;
                                    -ms-user-select: none;
                                    user-select: none;
                                    text-transform: capitalize;
                                }

                                .shop-sidebar ul.scrollbar li label.cust-checkbox-label {
                                    margin-bottom: 0;
                                }

                                .shop-sidebar ul.scrollbar li .cust-checkbox-label span.filter-name {
                                    width: 100%;
                                    text-overflow: ellipsis;
                                    white-space: nowrap;
                                    overflow: hidden;
                                }

                                .shop-sidebar ul.scrollbar li input.cust-checkbox,
                                .shop-sidebar ul.scrollbar li .cust-checkbox-label input.cust-checkbox {
                                    position: absolute;
                                    opacity: 0;
                                    cursor: pointer;
                                    height: 0;
                                    width: 0;
                                }

                                .shop-sidebar ul.scrollbar li .cust-checkbox-label .cust-check {
                                    position: absolute;

                                    left: 0;

                                    width: 17px;
                                    height: 17px;
                                    display: flex;
                                    align-items: center;
                                    justify-content: center;
                                    border: 1px solid #e2e2e2e2;
                                    background-color: #fff;
                                }

                                .shop-sidebar ul.scrollbar li:hover .cust-checkbox-label .cust-check,
                                .shop-sidebar ul.scrollbar li.active .cust-checkbox-label .cust-check {
                                    box-shadow: inset 0 0px 3px rgba(0, 0, 0, 0.2);
                                }

                                .shop-sidebar ul.scrollbar li.active .cust-checkbox.active-filter a.cust-checkbox-label .cust-check:after,
                                .shop-sidebar ul.scrollbar li .cust-checkbox-label .cust-check.active-filter:after,
                                .shop-sidebar ul.scrollbar li.active a.cust-checkbox-label .cust-check:after {
                                    content: "\f00c";
                                    font: normal normal normal 12px/1 FontAwesome;
                                    color: #bbb;
                                }

                                /* sidebar color filter css */
                                .shop-sidebar.Color ul.scrollbar {
                                    display: -ms-flexbox;
                                    display: flex;
                                    -ms-flex-wrap: wrap;
                                    flex-wrap: wrap;
                                    padding: 10px 15px 15px;

                                    margin-left: -5px;

                                }

                                .shop-sidebar.Color ul.scrollbar li.color {
                                    padding: 0;

                                    margin: 5px 0 0 5px;

                                    border-top: none;
                                }

                                .shop-sidebar.Color ul.scrollbar li.color .cust-checkbox-label.color {

                                    padding-left: 0;

                                }

                                .shop-sidebar.Color ul.scrollbar li.color .cust-checkbox-label.color span.filter-name {
                                    display: none;
                                }

                                .shop-sidebar.Color ul.scrollbar li.color .cust-checkbox-label.color span.cust-check {
                                    position: unset;
                                    width: 30px;
                                    height: 30px;
                                }

                                .shop-sidebar.Color ul.scrollbar li.color .cust-checkbox-label.color span.cust-check.active-filter:after {
                                    font: normal normal normal 14px/1 FontAwesome;
                                }
                            </style>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Shop Page -->

        <style>
            .shop-page .position-left {
                flex-direction: row-reverse;
            }

            @media (max-width: 767px) {
                .shop-page .position-left,
                .shop-page .position-right {
                    flex-direction: column-reverse;
                }

                .shop-page .pro-grli-wrap {
                    margin-top: 20px;
                }

                .shop-page .pro-grli-wrap:last-child {
                    margin-top: 0px;
                }
            }

            /* collection info css */
            .collection-img-wrap h6 {
                font-size: 16px;
                padding: 15px;
                background-color: #f8f8f8;
                text-transform: uppercase;
                border: 1px solid #e2e2e2;
                border-bottom: none;
                line-height: 1;
            }

            .collection-img-wrap .collection-info {
                display: flex;
                padding: 15px;
                border: 1px solid #e2e2e2;
            }

            .collection-img-wrap .collection-info .collection-image img {
                border: 1px solid #e2e2e2;
            }

            .collection-img-wrap .collection-info .collection-description {
                width: calc(100% - 100px);

                padding-left: 15px;

            }

            @media (max-width: 767px) {
                .collection-img-wrap .collection-info {
                    flex-direction: column;
                }

                .collection-img-wrap .collection-info .collection-description {
                    width: 100%;
                    margin-top: 8px;

                    padding-left: 0px;

                }
            }

            /* loader filter */
            .ajax-filter-loader {
                position: fixed;
                top: 0;

                left: 0;

                width: 100%;
                height: 100%;
                background-color: rgba(0, 0, 0, 0.3);
                z-index: 100;
                display: none;
            }

            .ajax-filter-loader .load-block {
                position: absolute;
                top: 0;

                left: 0;

                width: 100%;
                height: 100%;
            }

            .ajax-filter-loader .load-block .overlay__content {
                position: absolute;
                top: 50%;

                left: 50%;
                transform: translate(-50%, -50%);

            }

            .ajax-filter-loader .load-block .overlay__content .spinner {
                display: inline-block;
                width: 75px;
                height: 75px;
                border-width: 2px;
                border-color: rgba(0, 0, 0, 0.05);
                border-top-color: #fff;
                border-style: solid;
                border-radius: 100%;
                animation: spin 1s infinite linear;
            }

            @keyframes spin {
                100% {
                    transform: rotate(360deg);
                }
            }

            .empty-product {
                display: flex;
                align-items: center;
                flex-direction: column;
                text-align: center;
                margin-top: 30px;
            }

            .empty-product span {
                display: block;
                color: #105caa;
                font-size: 50px;
                line-height: 0;
            }

            .empty-product h2 {
                color: #105caa;
                font-size: 30px;
                margin-top: 22px;
                text-transform: uppercase;
                line-height: 1;
            }

            .empty-product p {
                margin-top: 18px;
            }

            @media (max-width: 767px) {
                .empty-product {
                    margin-top: 20px;
                }

                .empty-product h2 {
                    margin-top: 12px;
                }

                .empty-product p {
                    margin-top: 8px;
                }
            }
        </style>
    </div>
@endsection

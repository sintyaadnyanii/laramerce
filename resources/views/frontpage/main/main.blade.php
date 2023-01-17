@extends('layouts.front-layout')
@section('body')
    <div class="common-home res layout-1">
        <div id="wrapper" class="wrapper-fluid banners-effect-7">
            @include('frontpage.frontpage-navbar')
            <!-- Main Container  -->
            <div class="main-container">
                <div id="content">
                    <div class="slider-full">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 col-md-offset-3 block-slide">
                                    <div class="row">
                                        <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 block-left">
                                            <div class="module sohomepage-slider ">
                                                <div class="yt-content-slider" data-rtl="yes" data-autoplay="no"
                                                    data-autoheight="no" data-delay="4" data-speed="0.6" data-margin="0"
                                                    data-items_column0="1" data-items_column1="1" data-items_column2="1"
                                                    data-items_column3="1" data-items_column4="1" data-arrows="no"
                                                    data-pagination="yes" data-lazyload="yes" data-loop="no"
                                                    data-hoverpause="yes">
                                                    <div class="yt-content-slide">
                                                        <a title="slide1" href="#"><img
                                                                src="image/catalog/demo/slideshow/home1/slide1.jpg"
                                                                alt="slide img" class="responsive"></a>
                                                    </div>
                                                    <div class="yt-content-slide">
                                                        <a title="slide2" href="#"><img
                                                                src="image/catalog/demo/slideshow/home1/slide2.jpg"
                                                                alt="slide img" class="responsive"></a>
                                                    </div>
                                                    <div class="yt-content-slide">
                                                        <a title="slide3" href="#"><img
                                                                src="image/catalog/demo/slideshow/home1/slide3.jpg"
                                                                alt="slide img" class="responsive"></a>
                                                    </div>
                                                </div>
                                                <div class="loadeding"></div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-4 col-sm-12 col-xs-12 block-right">
                                            <div class="module">
                                                <div class="block-image-1">
                                                    <ul class="static-image">
                                                        <li><a title="Static Image" href="#"><img
                                                                    src="image/catalog/demo/banners/home1/1.jpg"
                                                                    alt="Static Image"></a></li>
                                                        <li><a title="Static Image" href="#"><img
                                                                    src="image/catalog/demo/banners/home1/2.jpg"
                                                                    alt="Static Image"></a></li>
                                                        <li><a title="Static Image" href="#"><img
                                                                    src="image/catalog/demo/banners/home1/3.jpg"
                                                                    alt="Static Image"></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="main-content">
                        <div class="container">
                            <div class="block block_0">
                                <div class="block-categories module">
                                    <h3 class="modtitle"><span>Featured Categories</span></h3>
                                    <div class="yt-content-slider cate-content" data-rtl="yes" data-autoplay="no"
                                        data-autoheight="no" data-delay="4" data-speed="0.6" data-margin="30"
                                        data-items_column0="5" data-items_column1="4" data-items_column2="4"
                                        data-items_column3="3" data-items_column4="2" data-arrows="no" data-pagination="yes"
                                        data-lazyload="yes" data-loop="no" data-hoverpause="yes">
                                        <div class="cate cate1">
                                            <div class="inner"><a href="#"><img
                                                        src="image/catalog/demo/banners/home1/cate1.jpg"
                                                        alt="Static Image"></a><a class="title-cate"
                                                    href="#">Watches</a>
                                            </div>
                                        </div>
                                        <div class="cate cate2">
                                            <div class="inner"><a href="#"><img
                                                        src="image/catalog/demo/banners/home1/cate2.jpg"
                                                        alt="Static Image"></a><a class="title-cate" href="#">Bags</a>
                                            </div>
                                        </div>
                                        <div class="cate cate3">
                                            <div class="inner"><a href="#"><img
                                                        src="image/catalog/demo/banners/home1/cate3.jpg"
                                                        alt="Static Image"></a><a class="title-cate"
                                                    href="#">Swimwears</a></div>
                                        </div>
                                        <div class="cate cate4">
                                            <div class="inner"><a href="#"><img
                                                        src="image/catalog/demo/banners/home1/cate4.jpg"
                                                        alt="Static Image"></a><a class="title-cate"
                                                    href="#">Shoes</a>
                                            </div>
                                        </div>
                                        <div class="cate cate5">
                                            <div class="inner"><a href="#"><img
                                                        src="image/catalog/demo/banners/home1/cate5.jpg"
                                                        alt="Static Image"></a><a class="title-cate"
                                                    href="#">Fashion</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="block block_1">
                                <div class="row products-listing grid">
                                    <div class="column small-11 small-centered product-layout col-md-9">
                                        <div class="custom_deals_featured">
                                            <h2 class="modtitle font-ct"><span>Today Deals</span></h2>
                                            <div class="modcontent">
                                                <div class="slider slider-img slider-single">
                                                    <div class="slick-slide" data-slick-index="1">
                                                        <div class="product-item">
                                                            <div class="product-item-container">
                                                                <div class="left-block">
                                                                    <div class="product-image-container second_img">
                                                                        <a href="#" target="_self"
                                                                            title="Pastrami bacon">
                                                                            <img src="image/catalog/demo/product/300/1.jpg"
                                                                                class="img-1 img-responsive"
                                                                                alt="Pastrami bacon">
                                                                        </a>
                                                                    </div>
                                                                    <div class="box-label">
                                                                        <span class="label-product label-sale">-20%</span>
                                                                    </div>
                                                                </div>
                                                                <div class="right-block">
                                                                    <div class="caption">
                                                                        <h4><a href="#" target="_self"
                                                                                title="Deserunt mollitia"
                                                                                tabindex="0">Deserunt
                                                                                mollitia</a></h4>
                                                                        <div class="rating">
                                                                            <span class="fa fa-stack"><i
                                                                                    class="fa fa-star fa-stack-2x"></i><i
                                                                                    class="fa fa-star-o fa-stack-2x"></i></span>
                                                                            <span class="fa fa-stack"><i
                                                                                    class="fa fa-star fa-stack-2x"></i><i
                                                                                    class="fa fa-star-o fa-stack-2x"></i></span>
                                                                            <span class="fa fa-stack"><i
                                                                                    class="fa fa-star fa-stack-2x"></i><i
                                                                                    class="fa fa-star-o fa-stack-2x"></i></span>
                                                                            <span class="fa fa-stack"><i
                                                                                    class="fa fa-star fa-stack-2x"></i><i
                                                                                    class="fa fa-star-o fa-stack-2x"></i></span>
                                                                            <span class="fa fa-stack"><i
                                                                                    class="fa fa-star-o fa-stack-2x"></i></span>
                                                                        </div>
                                                                        <p class="des_deal">
                                                                            The 30-inch Apple Cinema HD Display delivers an
                                                                            amazing 2560 x 1600 pixel resolution. Designed
                                                                            specifically for the creative professional, this
                                                                            dis..</p>
                                                                        <p class="price font-ct">
                                                                            <span class="price-new">$98.00</span>
                                                                            <span class="price-old">$122.00</span>
                                                                        </p>
                                                                        <!--countdown box-->
                                                                        <div class="item-time-w">
                                                                            <div class="item-time">
                                                                                <div class="item-timer">
                                                                                    <div class="defaultCountdown-30"></div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!--end countdown box-->
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="slick-slide" data-slick-index="2">
                                                        <div class="product-item">
                                                            <div class="product-item-container">
                                                                <div class="left-block">
                                                                    <div class="product-image-container second_img">
                                                                        <a href="#" target="_self"
                                                                            title="Pastrami bacon">
                                                                            <img src="image/catalog/demo/product/300/2.jpg"
                                                                                class="img-1 img-responsive"
                                                                                alt="Pastrami bacon">

                                                                        </a>
                                                                    </div>
                                                                    <div class="box-label">
                                                                        <span class="label-product label-sale">-18%</span>
                                                                    </div>
                                                                </div>
                                                                <div class="right-block">
                                                                    <div class="caption">
                                                                        <h4><a href="#" target="_self"
                                                                                title="Deserunt mollitia"
                                                                                tabindex="0">Cuid
                                                                                densinteu</a></h4>
                                                                        <div class="rating">
                                                                            <span class="fa fa-stack"><i
                                                                                    class="fa fa-star fa-stack-2x"></i><i
                                                                                    class="fa fa-star-o fa-stack-2x"></i></span>
                                                                            <span class="fa fa-stack"><i
                                                                                    class="fa fa-star fa-stack-2x"></i><i
                                                                                    class="fa fa-star-o fa-stack-2x"></i></span>
                                                                            <span class="fa fa-stack"><i
                                                                                    class="fa fa-star fa-stack-2x"></i><i
                                                                                    class="fa fa-star-o fa-stack-2x"></i></span>
                                                                            <span class="fa fa-stack"><i
                                                                                    class="fa fa-star fa-stack-2x"></i><i
                                                                                    class="fa fa-star-o fa-stack-2x"></i></span>
                                                                            <span class="fa fa-stack"><i
                                                                                    class="fa fa-star-o fa-stack-2x"></i></span>
                                                                        </div>
                                                                        <p class="des_deal">
                                                                            The 30-inch Apple Cinema HD Display delivers an
                                                                            amazing 2560 x 1600 pixel resolution. Designed
                                                                            specifically for the creative professional, this
                                                                            dis..</p>
                                                                        <p class="price font-ct">
                                                                            <span class="price-new">$198.00</span>
                                                                            <span class="price-old">$222.00</span>
                                                                        </p>
                                                                        <!--countdown box-->
                                                                        <div class="item-time-w">
                                                                            <div class="item-time">
                                                                                <div class="item-timer">
                                                                                    <div class="defaultCountdown-30">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!--end countdown box-->
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="slick-slide" data-slick-index="3">
                                                        <div class="product-item">
                                                            <div class="product-item-container">
                                                                <div class="left-block">
                                                                    <div class="product-image-container second_img">
                                                                        <a href="#" target="_self"
                                                                            title="Pastrami bacon">
                                                                            <img src="image/catalog/demo/product/300/3.jpg"
                                                                                class="img-1 img-responsive"
                                                                                alt="Pastrami bacon">
                                                                        </a>
                                                                    </div>
                                                                    <div class="box-label">
                                                                        <span class="label-product label-sale">-10%</span>
                                                                    </div>
                                                                </div>
                                                                <div class="right-block">
                                                                    <div class="caption">
                                                                        <h4><a href="#" target="_self"
                                                                                title="Deserunt mollitia"
                                                                                tabindex="0">Dail
                                                                                mirentukan</a></h4>
                                                                        <div class="rating">
                                                                            <span class="fa fa-stack"><i
                                                                                    class="fa fa-star fa-stack-2x"></i><i
                                                                                    class="fa fa-star-o fa-stack-2x"></i></span>
                                                                            <span class="fa fa-stack"><i
                                                                                    class="fa fa-star fa-stack-2x"></i><i
                                                                                    class="fa fa-star-o fa-stack-2x"></i></span>
                                                                            <span class="fa fa-stack"><i
                                                                                    class="fa fa-star fa-stack-2x"></i><i
                                                                                    class="fa fa-star-o fa-stack-2x"></i></span>
                                                                            <span class="fa fa-stack"><i
                                                                                    class="fa fa-star fa-stack-2x"></i><i
                                                                                    class="fa fa-star-o fa-stack-2x"></i></span>
                                                                            <span class="fa fa-stack"><i
                                                                                    class="fa fa-star-o fa-stack-2x"></i></span>
                                                                        </div>
                                                                        <p class="des_deal">
                                                                            The 30-inch Apple Cinema HD Display delivers an
                                                                            amazing 2560 x 1600 pixel resolution. Designed
                                                                            specifically for the creative professional, this
                                                                            dis..</p>
                                                                        <p class="price font-ct">
                                                                            <span class="price-new">$100.00</span>
                                                                            <span class="price-old">$110.00</span>
                                                                        </p>
                                                                        <!--countdown box-->
                                                                        <div class="item-time-w">
                                                                            <div class="item-time">
                                                                                <div class="item-timer">
                                                                                    <div class="defaultCountdown-30">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!--end countdown box-->
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="slick-slide" data-slick-index="4">
                                                        <div class="product-item">
                                                            <div class="product-item-container">
                                                                <div class="left-block">
                                                                    <div class="product-image-container second_img">
                                                                        <a href="#" target="_self"
                                                                            title="Pastrami bacon">
                                                                            <img src="image/catalog/demo/product/300/4.jpg"
                                                                                class="img-1 img-responsive"
                                                                                alt="Pastrami bacon">
                                                                        </a>
                                                                    </div>
                                                                    <div class="box-label">
                                                                        <span class="label-product label-sale">-15%</span>
                                                                    </div>
                                                                </div>
                                                                <div class="right-block">
                                                                    <div class="caption">
                                                                        <h4><a href="#" target="_self"
                                                                                title="Deserunt mollitia"
                                                                                tabindex="0">Salmon
                                                                                Sokara</a></h4>
                                                                        <div class="rating">
                                                                            <span class="fa fa-stack"><i
                                                                                    class="fa fa-star fa-stack-2x"></i><i
                                                                                    class="fa fa-star-o fa-stack-2x"></i></span>
                                                                            <span class="fa fa-stack"><i
                                                                                    class="fa fa-star fa-stack-2x"></i><i
                                                                                    class="fa fa-star-o fa-stack-2x"></i></span>
                                                                            <span class="fa fa-stack"><i
                                                                                    class="fa fa-star fa-stack-2x"></i><i
                                                                                    class="fa fa-star-o fa-stack-2x"></i></span>
                                                                            <span class="fa fa-stack"><i
                                                                                    class="fa fa-star fa-stack-2x"></i><i
                                                                                    class="fa fa-star-o fa-stack-2x"></i></span>
                                                                            <span class="fa fa-stack"><i
                                                                                    class="fa fa-star-o fa-stack-2x"></i></span>
                                                                        </div>
                                                                        <p class="des_deal">
                                                                            The 30-inch Apple Cinema HD Display delivers an
                                                                            amazing 2560 x 1600 pixel resolution. Designed
                                                                            specifically for the creative professional, this
                                                                            dis..</p>
                                                                        <p class="price font-ct">
                                                                            <span class="price-new">$160.00</span>
                                                                            <span class="price-old">$190.00</span>
                                                                        </p>
                                                                        <!--countdown box-->
                                                                        <div class="item-time-w">
                                                                            <div class="item-time">
                                                                                <div class="item-timer">
                                                                                    <div class="defaultCountdown-30">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!--end countdown box-->
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="slick-slide" data-slick-index="5">
                                                        <div class="product-item">
                                                            <div class="product-item-container">
                                                                <div class="left-block">
                                                                    <div class="product-image-container second_img">
                                                                        <a href="#" target="_self"
                                                                            title="Pastrami bacon">
                                                                            <img src="image/catalog/demo/product/300/5.jpg"
                                                                                class="img-1 img-responsive"
                                                                                alt="Pastrami bacon">
                                                                        </a>
                                                                    </div>
                                                                    <div class="box-label">
                                                                        <span class="label-product label-sale">-20%</span>
                                                                    </div>
                                                                </div>
                                                                <div class="right-block">
                                                                    <div class="caption">
                                                                        <h4><a href="#" target="_self"
                                                                                title="Molliti Deserunt"
                                                                                tabindex="0">Molliti
                                                                                Deserunt</a></h4>
                                                                        <div class="rating">
                                                                            <span class="fa fa-stack"><i
                                                                                    class="fa fa-star fa-stack-2x"></i><i
                                                                                    class="fa fa-star-o fa-stack-2x"></i></span>
                                                                            <span class="fa fa-stack"><i
                                                                                    class="fa fa-star fa-stack-2x"></i><i
                                                                                    class="fa fa-star-o fa-stack-2x"></i></span>
                                                                            <span class="fa fa-stack"><i
                                                                                    class="fa fa-star fa-stack-2x"></i><i
                                                                                    class="fa fa-star-o fa-stack-2x"></i></span>
                                                                            <span class="fa fa-stack"><i
                                                                                    class="fa fa-star fa-stack-2x"></i><i
                                                                                    class="fa fa-star-o fa-stack-2x"></i></span>
                                                                            <span class="fa fa-stack"><i
                                                                                    class="fa fa-star-o fa-stack-2x"></i></span>
                                                                        </div>
                                                                        <p class="des_deal">
                                                                            There are many variations of passages of Lorem
                                                                            Ipsum available, but the majority have suffered
                                                                            alteration the creative professional, this dis..
                                                                        </p>
                                                                        <p class="price font-ct">
                                                                            <span class="price-new">$98.00</span>
                                                                            <span class="price-old">$122.00</span>
                                                                        </p>
                                                                        <!--countdown box-->
                                                                        <div class="item-time-w">
                                                                            <div class="item-time">
                                                                                <div class="item-timer">
                                                                                    <div class="defaultCountdown-30">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!--end countdown box-->
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="slick-slide" data-slick-index="6">
                                                        <div class="product-item">
                                                            <div class="product-item-container">
                                                                <div class="left-block">
                                                                    <div class="product-image-container second_img">
                                                                        <a href="#" target="_self"
                                                                            title="Pastrami bacon">
                                                                            <img src="image/catalog/demo/product/300/6.jpg"
                                                                                class="img-1 img-responsive"
                                                                                alt="Pastrami bacon">
                                                                        </a>
                                                                    </div>
                                                                    <div class="box-label">
                                                                        <span class="label-product label-sale">-5%</span>
                                                                    </div>
                                                                </div>
                                                                <div class="right-block">
                                                                    <div class="caption">
                                                                        <h4><a href="#" target="_self"
                                                                                title="Delivers Deserunt"
                                                                                tabindex="0">Delivers
                                                                                Deserunt</a></h4>
                                                                        <div class="rating">
                                                                            <span class="fa fa-stack"><i
                                                                                    class="fa fa-star fa-stack-2x"></i><i
                                                                                    class="fa fa-star-o fa-stack-2x"></i></span>
                                                                            <span class="fa fa-stack"><i
                                                                                    class="fa fa-star fa-stack-2x"></i><i
                                                                                    class="fa fa-star-o fa-stack-2x"></i></span>
                                                                            <span class="fa fa-stack"><i
                                                                                    class="fa fa-star fa-stack-2x"></i><i
                                                                                    class="fa fa-star-o fa-stack-2x"></i></span>
                                                                            <span class="fa fa-stack"><i
                                                                                    class="fa fa-star fa-stack-2x"></i><i
                                                                                    class="fa fa-star-o fa-stack-2x"></i></span>
                                                                            <span class="fa fa-stack"><i
                                                                                    class="fa fa-star-o fa-stack-2x"></i></span>
                                                                        </div>
                                                                        <p class="des_deal">
                                                                            The 30-inch Apple Cinema HD Display delivers an
                                                                            amazing 2560 x 1600 pixel resolution. Designed
                                                                            specifically for the creative professional, this
                                                                            dis..</p>
                                                                        <p class="price font-ct">
                                                                            <span class="price-new">$200.00</span>
                                                                            <span class="price-old">$210.00</span>
                                                                        </p>
                                                                        <!--countdown box-->
                                                                        <div class="item-time-w">
                                                                            <div class="item-time">
                                                                                <div class="item-timer">
                                                                                    <div class="defaultCountdown-30">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!--end countdown box-->
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="slick-slide" data-slick-index="7">
                                                        <div class="product-item">
                                                            <div class="product-item-container">
                                                                <div class="left-block">
                                                                    <div class="product-image-container second_img">
                                                                        <a href="#" target="_self"
                                                                            title="Pastrami bacon">
                                                                            <img src="image/catalog/demo/product/300/7.jpg"
                                                                                class="img-1 img-responsive"
                                                                                alt="Pastrami bacon">
                                                                        </a>
                                                                    </div>
                                                                    <div class="box-label">
                                                                        <span class="label-product label-sale">-12%</span>
                                                                    </div>
                                                                </div>
                                                                <div class="right-block">
                                                                    <div class="caption">
                                                                        <h4><a href="#" target="_self"
                                                                                title="Pastrami mollitia"
                                                                                tabindex="0">Pastrami
                                                                                mollitia</a></h4>
                                                                        <div class="rating">
                                                                            <span class="fa fa-stack"><i
                                                                                    class="fa fa-star fa-stack-2x"></i><i
                                                                                    class="fa fa-star-o fa-stack-2x"></i></span>
                                                                            <span class="fa fa-stack"><i
                                                                                    class="fa fa-star fa-stack-2x"></i><i
                                                                                    class="fa fa-star-o fa-stack-2x"></i></span>
                                                                            <span class="fa fa-stack"><i
                                                                                    class="fa fa-star fa-stack-2x"></i><i
                                                                                    class="fa fa-star-o fa-stack-2x"></i></span>
                                                                            <span class="fa fa-stack"><i
                                                                                    class="fa fa-star fa-stack-2x"></i><i
                                                                                    class="fa fa-star-o fa-stack-2x"></i></span>
                                                                            <span class="fa fa-stack"><i
                                                                                    class="fa fa-star-o fa-stack-2x"></i></span>
                                                                        </div>
                                                                        <p class="des_deal">
                                                                            There are many variations of passages of Lorem
                                                                            Ipsum available, but the majority have suffered
                                                                            alteration the creative professional, this dis..
                                                                        </p>
                                                                        <p class="price font-ct">
                                                                            <span class="price-new">$118.00</span>
                                                                            <span class="price-old">$142.00</span>
                                                                        </p>
                                                                        <!--countdown box-->
                                                                        <div class="item-time-w">
                                                                            <div class="item-time">
                                                                                <div class="item-timer">
                                                                                    <div class="defaultCountdown-30">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!--end countdown box-->
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="slick-slide" data-slick-index="8">
                                                        <div class="product-item">
                                                            <div class="product-item-container">
                                                                <div class="left-block">
                                                                    <div class="product-image-container second_img">
                                                                        <a href="#" target="_self"
                                                                            title="Fession molliti">
                                                                            <img src="image/catalog/demo/product/300/3.jpg"
                                                                                class="img-1 img-responsive"
                                                                                alt="Fession molliti">
                                                                        </a>
                                                                    </div>
                                                                    <div class="box-label">
                                                                        <span class="label-product label-sale">-16%</span>
                                                                    </div>
                                                                </div>
                                                                <div class="right-block">
                                                                    <div class="caption">
                                                                        <h4><a href="#" target="_self"
                                                                                title="Fession molliti"
                                                                                tabindex="0">Fession
                                                                                molliti</a></h4>
                                                                        <div class="rating">
                                                                            <span class="fa fa-stack"><i
                                                                                    class="fa fa-star fa-stack-2x"></i><i
                                                                                    class="fa fa-star-o fa-stack-2x"></i></span>
                                                                            <span class="fa fa-stack"><i
                                                                                    class="fa fa-star fa-stack-2x"></i><i
                                                                                    class="fa fa-star-o fa-stack-2x"></i></span>
                                                                            <span class="fa fa-stack"><i
                                                                                    class="fa fa-star fa-stack-2x"></i><i
                                                                                    class="fa fa-star-o fa-stack-2x"></i></span>
                                                                            <span class="fa fa-stack"><i
                                                                                    class="fa fa-star fa-stack-2x"></i><i
                                                                                    class="fa fa-star-o fa-stack-2x"></i></span>
                                                                            <span class="fa fa-stack"><i
                                                                                    class="fa fa-star-o fa-stack-2x"></i></span>
                                                                        </div>
                                                                        <p class="des_deal">
                                                                            The 30-inch Apple Cinema HD Display delivers an
                                                                            amazing 2560 x 1600 pixel resolution. Designed
                                                                            specifically for the creative professional, this
                                                                            dis..</p>
                                                                        <p class="price font-ct">
                                                                            <span class="price-new">$98.00</span>
                                                                            <span class="price-old">$122.00</span>
                                                                        </p>
                                                                        <!--countdown box-->
                                                                        <div class="item-time-w">
                                                                            <div class="item-time">
                                                                                <div class="item-timer">
                                                                                    <div class="defaultCountdown-30">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!--end countdown box-->
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="slider slider-item slider-nav">
                                                    <div class="item-slick" data-slick-index="1">
                                                        <div class="item-img">
                                                            <img src="image/catalog/demo/product/80/1.jpg"
                                                                class="img-1 img-responsive" alt="Pastrami bacon">
                                                            <div class="box-label">
                                                                <span class="label-product label-sale">-20%</span>
                                                            </div>
                                                        </div>
                                                        <span class="title">Deserunt mollitia</span>
                                                    </div>
                                                    <div class="item-slick" data-slick-index="2">
                                                        <div class="item-img">
                                                            <img src="image/catalog/demo/product/80/2.jpg"
                                                                class="img-1 img-responsive" alt="Pastrami bacon">
                                                            <div class="box-label">
                                                                <span class="label-product label-sale">-18%</span>
                                                            </div>
                                                        </div>
                                                        <span class="title">Cuid densinteu</span>
                                                    </div>
                                                    <div class="item-slick" data-slick-index="3">
                                                        <div class="item-img">
                                                            <img src="image/catalog/demo/product/80/3.jpg"
                                                                class="img-1 img-responsive" alt="Pastrami bacon">
                                                            <div class="box-label">
                                                                <span class="label-product label-sale">-10%</span>
                                                            </div>
                                                        </div>
                                                        <span class="title">Dail mirentukan</span>
                                                    </div>
                                                    <div class="item-slick" data-slick-index="4">
                                                        <div class="item-img">
                                                            <img src="image/catalog/demo/product/80/4.jpg"
                                                                class="img-1 img-responsive" alt="Pastrami bacon">
                                                            <div class="box-label">
                                                                <span class="label-product label-sale">-15%</span>
                                                            </div>
                                                        </div>
                                                        <span class="title">Salmon Sokara</span>
                                                    </div>
                                                    <div class="item-slick" data-slick-index="5">
                                                        <div class="item-img">
                                                            <img src="image/catalog/demo/product/80/5.jpg"
                                                                class="img-1 img-responsive" alt="Pastrami bacon">
                                                            <div class="box-label">
                                                                <span class="label-product label-sale">-20%</span>
                                                            </div>
                                                        </div>
                                                        <span class="title">Molliti Deserunt</span>
                                                    </div>
                                                    <div class="item-slick" data-slick-index="6">
                                                        <div class="item-img">
                                                            <img src="image/catalog/demo/product/80/6.jpg"
                                                                class="img-1 img-responsive" alt="Pastrami bacon">
                                                            <div class="box-label">
                                                                <span class="label-product label-sale">-5%</span>
                                                            </div>
                                                        </div>
                                                        <span class="title">Delivers Deserunt</span>
                                                    </div>
                                                    <div class="item-slick" data-slick-index="7">
                                                        <div class="item-img">
                                                            <img src="image/catalog/demo/product/80/7.jpg"
                                                                class="img-1 img-responsive" alt="Pastrami mollitia">
                                                            <div class="box-label">
                                                                <span class="label-product label-sale">-12%</span>
                                                            </div>
                                                        </div>
                                                        <span class="title">Pastrami mollitia</span>
                                                    </div>
                                                    <div class="item-slick" data-slick-index="8">
                                                        <div class="item-img">
                                                            <img src="image/catalog/demo/product/80/8.jpg"
                                                                class="img-1 img-responsive" alt="Fession molliti">
                                                            <div class="box-label">
                                                                <span class="label-product label-sale">-16%</span>
                                                            </div>
                                                        </div>
                                                        <span class="title">Fession molliti</span>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3">

                                        <div class="module best-seller best-seller-custom">
                                            <h3 class="modtitle">
                                                <span><i class="fa fa-diamond fa-hidden"></i>Best Sellers</span>
                                            </h3>
                                            <div class="modcontent">
                                                <div id="so_extra_slider_1" class="so-extraslider">
                                                    <!-- Begin extraslider-inner -->
                                                    <div class="yt-content-slider extraslider-inner" data-rtl="yes"
                                                        data-pagination="no" data-autoplay="no" data-delay="4"
                                                        data-speed="0.6" data-margin="0" data-items_column0="1"
                                                        data-items_column1="1" data-items_column2="1"
                                                        data-items_column3="1" data-items_column4="1" data-arrows="yes"
                                                        data-lazyload="yes" data-loop="no" data-buttonpage="top">
                                                        <div class="item ">
                                                            <div class="item-wrap style1">
                                                                <div class="item-wrap-inner">
                                                                    <div class="media-left">
                                                                        <div class="item-image">
                                                                            <div class="item-img-info">
                                                                                <a href="#" target="_self"
                                                                                    title="Mandouille short ">
                                                                                    <img src="image/catalog/demo/product/80/10.jpg"
                                                                                        alt="Mandouille short">
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="media-body">
                                                                        <div class="item-info">
                                                                            <div class="item-title">
                                                                                <a href="#" target="_self"
                                                                                    title="Mandouille short">Mandouille
                                                                                    short </a>
                                                                            </div>
                                                                            <div class="rating">
                                                                                <span class="fa fa-stack"><i
                                                                                        class="fa fa-star fa-stack-2x"></i></span>
                                                                                <span class="fa fa-stack"><i
                                                                                        class="fa fa-star fa-stack-2x"></i></span>
                                                                                <span class="fa fa-stack"><i
                                                                                        class="fa fa-star fa-stack-2x"></i></span>
                                                                                <span class="fa fa-stack"><i
                                                                                        class="fa fa-star fa-stack-2x"></i></span>
                                                                                <span class="fa fa-stack"><i
                                                                                        class="fa fa-star-o fa-stack-2x"></i></span>
                                                                            </div>
                                                                            <div class="content_price price">
                                                                                <span
                                                                                    class="price-new product-price">$55.00
                                                                                </span>&nbsp;&nbsp;

                                                                                <span class="price-old">$76.00
                                                                                </span>&nbsp;

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <!-- End item-info -->
                                                                    <!-- End item-wrap-inner -->
                                                                </div>
                                                            </div>
                                                            <!-- End item-wrap -->
                                                            <div class="item-wrap style1">
                                                                <div class="item-wrap-inner">
                                                                    <div class="media-left">
                                                                        <div class="item-image">
                                                                            <div class="item-img-info">
                                                                                <a href="#" target="_self"
                                                                                    title="Xancetta bresao ">
                                                                                    <img src="image/catalog/demo/product/80/9.jpg"
                                                                                        alt="Xancetta bresao">
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="media-body">
                                                                        <div class="item-info">
                                                                            <div class="item-title">
                                                                                <a href="#" target="_self"
                                                                                    title="Xancetta bresao">
                                                                                    Xancetta bresao
                                                                                </a>
                                                                            </div>
                                                                            <div class="rating">
                                                                                <span class="fa fa-stack"><i
                                                                                        class="fa fa-star fa-stack-2x"></i></span>
                                                                                <span class="fa fa-stack"><i
                                                                                        class="fa fa-star fa-stack-2x"></i></span>
                                                                                <span class="fa fa-stack"><i
                                                                                        class="fa fa-star fa-stack-2x"></i></span>
                                                                                <span class="fa fa-stack"><i
                                                                                        class="fa fa-star fa-stack-2x"></i></span>
                                                                                <span class="fa fa-stack"><i
                                                                                        class="fa fa-star fa-stack-2x"></i></span>
                                                                            </div>
                                                                            <div class="content_price price">
                                                                                <span
                                                                                    class="price-new product-price">$80.00
                                                                                </span>&nbsp;&nbsp;

                                                                                <span class="price-old">$89.00
                                                                                </span>&nbsp;



                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <!-- End item-info -->
                                                                    <!-- End item-wrap-inner -->
                                                                </div>
                                                            </div>
                                                            <!-- End item-wrap -->
                                                            <div class="item-wrap style1">
                                                                <div class="item-wrap-inner">
                                                                    <div class="media-left">
                                                                        <div class="item-image">
                                                                            <div class="item-img-info">
                                                                                <a href="#" target="_self"
                                                                                    title="Sausage cowbee ">
                                                                                    <img src="image/catalog/demo/product/80/8.jpg"
                                                                                        alt="Sausage cowbee">
                                                                                </a>
                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                    <div class="media-body">
                                                                        <div class="item-info">
                                                                            <div class="item-title">
                                                                                <a href="#" target="_self"
                                                                                    title="Sausage cowbee">
                                                                                    Sausage cowbee
                                                                                </a>
                                                                            </div>
                                                                            <div class="rating">
                                                                                <span class="fa fa-stack"><i
                                                                                        class="fa fa-star fa-stack-2x"></i></span>
                                                                                <span class="fa fa-stack"><i
                                                                                        class="fa fa-star fa-stack-2x"></i></span>
                                                                                <span class="fa fa-stack"><i
                                                                                        class="fa fa-star fa-stack-2x"></i></span>
                                                                                <span class="fa fa-stack"><i
                                                                                        class="fa fa-star fa-stack-2x"></i></span>
                                                                                <span class="fa fa-stack"><i
                                                                                        class="fa fa-star-o fa-stack-2x"></i></span>
                                                                            </div>

                                                                            <div class="content_price price">
                                                                                <span class="price product-price">
                                                                                    $66.00
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <!-- End item-info -->
                                                                    <!-- End item-wrap-inner -->
                                                                </div>
                                                            </div>
                                                            <!-- End item-wrap -->
                                                            <div class="item-wrap style1">
                                                                <div class="item-wrap-inner">
                                                                    <div class="media-left">
                                                                        <div class="item-image">
                                                                            <div class="item-img-info">
                                                                                <a href="#" target="_self"
                                                                                    title="Chicken swinesha ">
                                                                                    <img src="image/catalog/demo/product/80/4.jpg"
                                                                                        alt="Chicken swinesha">
                                                                                </a>
                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                    <div class="media-body">
                                                                        <div class="item-info">
                                                                            <div class="item-title">
                                                                                <a href="#" target="_self"
                                                                                    title="Chicken swinesha">
                                                                                    Chicken swinesha
                                                                                </a>
                                                                            </div>
                                                                            <div class="rating">
                                                                                <span class="fa fa-stack">
                                                                                    <i class="fa fa-star fa-stack-2x"></i>
                                                                                </span>
                                                                                <span class="fa fa-stack">
                                                                                    <i class="fa fa-star fa-stack-2x"></i>
                                                                                </span>
                                                                                <span class="fa fa-stack">
                                                                                    <i class="fa fa-star fa-stack-2x"></i>
                                                                                </span>
                                                                                <span class="fa fa-stack">
                                                                                    <i class="fa fa-star fa-stack-2x"></i>
                                                                                </span>
                                                                                <span class="fa fa-stack">
                                                                                    <i class="fa fa-star fa-stack-2x"></i>
                                                                                </span>
                                                                            </div>
                                                                            <div class="content_price price">
                                                                                <span
                                                                                    class="price-new product-price">$45.00
                                                                                </span>&nbsp;&nbsp;

                                                                                <span class="price-old">$56.00
                                                                                </span>&nbsp;



                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <!-- End item-info -->
                                                                    <!-- End item-wrap-inner -->
                                                                </div>
                                                            </div>
                                                            <div class="item-wrap style1">
                                                                <div class="item-wrap-inner">
                                                                    <div class="media-left">
                                                                        <div class="item-image">
                                                                            <div class="item-img-info">
                                                                                <a href="#" target="_self"
                                                                                    title="Chicken swinesha ">
                                                                                    <img src="image/catalog/demo/product/80/7.jpg"
                                                                                        alt="Chicken swinesha">
                                                                                </a>
                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                    <div class="media-body">
                                                                        <div class="item-info">
                                                                            <div class="item-title">
                                                                                <a href="#" target="_self"
                                                                                    title="Swinesha Sokana">
                                                                                    Swinesha Sokana
                                                                                </a>
                                                                            </div>
                                                                            <div class="rating">
                                                                                <span class="fa fa-stack">
                                                                                    <i class="fa fa-star fa-stack-2x"></i>
                                                                                </span>
                                                                                <span class="fa fa-stack">
                                                                                    <i class="fa fa-star fa-stack-2x"></i>
                                                                                </span>
                                                                                <span class="fa fa-stack">
                                                                                    <i class="fa fa-star fa-stack-2x"></i>
                                                                                </span>
                                                                                <span class="fa fa-stack">
                                                                                    <i class="fa fa-star fa-stack-2x"></i>
                                                                                </span>
                                                                                <span class="fa fa-stack">
                                                                                    <i class="fa fa-star fa-stack-2x"></i>
                                                                                </span>
                                                                            </div>
                                                                            <div class="content_price price">
                                                                                <span
                                                                                    class="price-new product-price">$45.00
                                                                                </span>&nbsp;&nbsp;

                                                                                <span class="price-old">$56.00
                                                                                </span>&nbsp;



                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <!-- End item-info -->
                                                                    <!-- End item-wrap-inner -->
                                                                </div>
                                                            </div>
                                                            <!-- End item-wrap -->
                                                        </div>
                                                        <div class="item ">
                                                            <div class="item-wrap style1">
                                                                <div class="item-wrap-inner">
                                                                    <div class="media-left">
                                                                        <div class="item-image">
                                                                            <div class="item-img-info">
                                                                                <a href="#" target="_self"
                                                                                    title="Qeserunt shortloin ">
                                                                                    <img src="image/catalog/demo/product/80/5.jpg"
                                                                                        alt="Qeserunt shortloin">
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="media-body">
                                                                        <div class="item-info">
                                                                            <div class="item-title">
                                                                                <a href="#" target="_self"
                                                                                    title="Qeserunt shortloin">
                                                                                    Qeserunt shortloin
                                                                                </a>
                                                                            </div>
                                                                            <div class="rating">
                                                                                <span class="fa fa-stack">
                                                                                    <i class="fa fa-star fa-stack-2x"></i>
                                                                                </span>
                                                                                <span class="fa fa-stack">
                                                                                    <i class="fa fa-star fa-stack-2x"></i>
                                                                                </span>
                                                                                <span class="fa fa-stack">
                                                                                    <i class="fa fa-star fa-stack-2x"></i>
                                                                                </span>
                                                                                <span class="fa fa-stack">
                                                                                    <i class="fa fa-star fa-stack-2x"></i>
                                                                                </span>
                                                                                <span class="fa fa-stack">
                                                                                    <i class="fa fa-star fa-stack-2x"></i>
                                                                                </span>
                                                                            </div>
                                                                            <div class="content_price price">
                                                                                <span class="price product-price">
                                                                                    $88.00
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- End item-wrap -->
                                                            <div class="item-wrap style1">
                                                                <div class="item-wrap-inner">
                                                                    <div class="media-left">
                                                                        <div class="item-image">
                                                                            <div class="item-img-info">
                                                                                <a href="#" target="_self"
                                                                                    title="Consecte quichuck ">
                                                                                    <img src="image/catalog/demo/product/80/6.jpg"
                                                                                        alt="Consecte quichuck">
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="media-body">
                                                                        <div class="item-info">
                                                                            <div class="item-title">
                                                                                <a href="#" target="_self"
                                                                                    title="Consecte quichuck">
                                                                                    Consecte quichuck
                                                                                </a>
                                                                            </div>
                                                                            <div class="rating">
                                                                                <span class="fa fa-stack">
                                                                                    <i class="fa fa-star fa-stack-2x"></i>
                                                                                </span>
                                                                                <span class="fa fa-stack">
                                                                                    <i class="fa fa-star fa-stack-2x"></i>
                                                                                </span>
                                                                                <span class="fa fa-stack">
                                                                                    <i class="fa fa-star fa-stack-2x"></i>
                                                                                </span>
                                                                                <span class="fa fa-stack">
                                                                                    <i class="fa fa-star fa-stack-2x"></i>
                                                                                </span>
                                                                                <span class="fa fa-stack">
                                                                                    <i class="fa fa-star fa-stack-2x"></i>
                                                                                </span>
                                                                            </div>
                                                                            <div class="content_price price">
                                                                                <span
                                                                                    class="price-new product-price">$55.00
                                                                                </span>&nbsp;&nbsp;
                                                                                <span class="price-old">$61.00
                                                                                </span>&nbsp;
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <!-- End item-info -->
                                                                    <!-- End item-wrap-inner -->
                                                                </div>
                                                            </div>
                                                            <!-- End item-wrap -->
                                                            <div class="item-wrap style1">
                                                                <div class="item-wrap-inner">
                                                                    <div class="media-left">
                                                                        <div class="item-image">
                                                                            <div class="item-img-info">
                                                                                <a href="#" target="_self"
                                                                                    title="Neatball bresaola ">
                                                                                    <img src="image/catalog/demo/product/80/7.jpg"
                                                                                        alt="Neatball bresaola">
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="media-body">
                                                                        <div class="item-info">
                                                                            <div class="item-title">
                                                                                <a href="#" target="_self"
                                                                                    title="Neatball bresaola">
                                                                                    Neatball bresaola
                                                                                </a>
                                                                            </div>
                                                                            <div class="rating">
                                                                                <span class="fa fa-stack">
                                                                                    <i class="fa fa-star fa-stack-2x"></i>
                                                                                </span>
                                                                                <span class="fa fa-stack">
                                                                                    <i class="fa fa-star fa-stack-2x"></i>
                                                                                </span>
                                                                                <span class="fa fa-stack">
                                                                                    <i class="fa fa-star fa-stack-2x"></i>
                                                                                </span>
                                                                                <span class="fa fa-stack">
                                                                                    <i class="fa fa-star fa-stack-2x"></i>
                                                                                </span>
                                                                                <span class="fa fa-stack">
                                                                                    <i class="fa fa-star fa-stack-2x"></i>
                                                                                </span>
                                                                            </div>
                                                                            <div class="content_price price">
                                                                                <span
                                                                                    class="price-new product-price">$65.00
                                                                                </span>&nbsp;&nbsp;

                                                                                <span class="price-old">$71.00
                                                                                </span>&nbsp;
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <!-- End item-info -->
                                                                    <!-- End item-wrap-inner -->
                                                                </div>
                                                            </div>
                                                            <!-- End item-wrap -->
                                                            <div class="item-wrap style1">
                                                                <div class="item-wrap-inner">
                                                                    <div class="media-left">
                                                                        <div class="item-image">
                                                                            <div class="item-img-info">
                                                                                <a href="#" target="_self"
                                                                                    title="Yutculpa ullamco ">
                                                                                    <img src="image/catalog/demo/product/80/8.jpg"
                                                                                        alt="Yutculpa ullamco">
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="media-body">
                                                                        <div class="item-info">
                                                                            <div class="item-title">
                                                                                <a href="#" target="_self"
                                                                                    title="Yutculpa ullamco">
                                                                                    Yutculpa ullamco
                                                                                </a>
                                                                            </div>
                                                                            <div class="rating">
                                                                                <span class="fa fa-stack">
                                                                                    <i class="fa fa-star fa-stack-2x"></i>
                                                                                </span>
                                                                                <span class="fa fa-stack">
                                                                                    <i class="fa fa-star fa-stack-2x"></i>
                                                                                </span>
                                                                                <span class="fa fa-stack">
                                                                                    <i class="fa fa-star fa-stack-2x"></i>
                                                                                </span>
                                                                                <span class="fa fa-stack">
                                                                                    <i class="fa fa-star fa-stack-2x"></i>
                                                                                </span>
                                                                                <span class="fa fa-stack">
                                                                                    <i class="fa fa-star fa-stack-2x"></i>
                                                                                </span>
                                                                            </div>
                                                                            <div class="content_price price">
                                                                                <span
                                                                                    class="price-new product-price">$60.00
                                                                                </span>&nbsp;&nbsp;

                                                                                <span class="price-old">$77.00
                                                                                </span>&nbsp;

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <!-- End item-info -->
                                                                    <!-- End item-wrap-inner -->
                                                                </div>
                                                            </div>
                                                            <!-- End item-wrap -->
                                                            <div class="item-wrap style1">
                                                                <div class="item-wrap-inner">
                                                                    <div class="media-left">
                                                                        <div class="item-image">
                                                                            <div class="item-img-info">
                                                                                <a href="#" target="_self"
                                                                                    title="Mandouille short ">
                                                                                    <img src="image/catalog/demo/product/80/1.jpg"
                                                                                        alt="Mandouille short">
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="media-body">
                                                                        <div class="item-info">
                                                                            <div class="item-title">
                                                                                <a href="#" target="_self"
                                                                                    title="Mandouille short">Mandouille
                                                                                    short </a>
                                                                            </div>
                                                                            <div class="rating">
                                                                                <span class="fa fa-stack"><i
                                                                                        class="fa fa-star fa-stack-2x"></i></span>
                                                                                <span class="fa fa-stack"><i
                                                                                        class="fa fa-star fa-stack-2x"></i></span>
                                                                                <span class="fa fa-stack"><i
                                                                                        class="fa fa-star fa-stack-2x"></i></span>
                                                                                <span class="fa fa-stack"><i
                                                                                        class="fa fa-star fa-stack-2x"></i></span>
                                                                                <span class="fa fa-stack"><i
                                                                                        class="fa fa-star-o fa-stack-2x"></i></span>
                                                                            </div>
                                                                            <div class="content_price price">
                                                                                <span
                                                                                    class="price-new product-price">$55.00
                                                                                </span>&nbsp;&nbsp;

                                                                                <span class="price-old">$76.00
                                                                                </span>&nbsp;

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <!-- End item-info -->
                                                                    <!-- End item-wrap-inner -->
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--End extraslider-inner -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="block block_2">
                                <div class="h1-banner2">
                                    <div class="row banners">
                                        <div class="banner21 col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                            <a href="#">
                                                <img src="image/catalog/demo/banners/home1/4.jpg" alt="Image Client">
                                            </a>
                                        </div>
                                        <div class="banner21 col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                            <a href="#">
                                                <img src="image/catalog/demo/banners/home1/5.jpg" alt="Image Client">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="block block_3">
                                <!-- Listing tabs -->
                                <div class="module custom-listingtab default-nav">
                                    <div class="box-title font-ct">
                                        <h2 class="modtitle">Fashion</h2>
                                    </div>
                                    <div class="modcontent">
                                        <div id="so_listing_tabs_1" class="so-listing-tabs first-load">
                                            <div class="loadeding"></div>
                                            <div class="ltabs-wrap">
                                                <div class="ltabs-tabs-container" data-delay="300" data-duration="600"
                                                    data-effect="starwars" data-ajaxurl="" data-type_source="0"
                                                    data-lg="5" data-md="4" data-sm="3" data-xxs="3"
                                                    data-xs="1" data-margin="0">
                                                    <!--Begin Tabs-->
                                                    <div class="ltabs-tabs-wrap">
                                                        <span class="ltabs-tab-selected">Best sellers</span> <span
                                                            class="ltabs-tab-arrow">▼</span>
                                                        <ul class="ltabs-tabs cf font-ct list-sub-cat">
                                                            <li class="ltabs-tab tab-sel" data-category-id="11"
                                                                data-active-content=".items-category-11"> <span
                                                                    class="ltabs-tab-label">Best sellers</span> </li>
                                                            <li class="ltabs-tab" data-category-id="12"
                                                                data-active-content=".items-category-12"> <span
                                                                    class="ltabs-tab-label">Most Rating</span> </li>
                                                            <li class="ltabs-tab" data-category-id="13"
                                                                data-active-content=".items-category-13"> <span
                                                                    class="ltabs-tab-label">New Arrivals</span> </li>
                                                        </ul>

                                                    </div>
                                                    <!-- End Tabs-->
                                                </div>
                                                <div class="wap-listing-tabs products-list grid">
                                                    <div class="item-cat-image banners">
                                                        <div>
                                                            <a href="#" title="" target="_self">
                                                                <img class="categories-loadimage" title=""
                                                                    alt=""
                                                                    src="image/catalog/demo/banners/home1/6-196x540.jpg">

                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="ltabs-items-container">
                                                        <!--Begin Items-->
                                                        <div class="ltabs-items ltabs-items-selected items-category-11"
                                                            data-total="16">
                                                            <div class="ltabs-items-inner ltabs-slider">

                                                                <div class="ltabs-item">
                                                                    <div
                                                                        class="item-inner product-thumb transition product-layout">
                                                                        <div class="product-item-container">
                                                                            <div class="left-block left-b">
                                                                                <div class="product-image-container">
                                                                                    <a href="#" target="_self"
                                                                                        title="Cupim should">
                                                                                        <img src="image/catalog/demo/product/300/fashion/1.jpg"
                                                                                            class="img-responsive"
                                                                                            alt="image">
                                                                                    </a>
                                                                                </div>

                                                                                <!--quickview-->
                                                                                <a class="iframe-link btn-button quickview quickview_handler visible-lg"
                                                                                    href="quickview.html"
                                                                                    title="Quick view"
                                                                                    data-fancybox-type="iframe"><i
                                                                                        class="fa fa-eye"></i><span></span></a>
                                                                                <!--end quickview-->
                                                                            </div>
                                                                            <div class="right-block right-b">

                                                                                <div class="caption">
                                                                                    <h4><a href="#"
                                                                                            title="Cupim should "
                                                                                            target="_self">Cupim should
                                                                                        </a></h4>
                                                                                    <div class="price">
                                                                                        <span class="price-new">$254.00
                                                                                        </span>
                                                                                    </div>
                                                                                    <div
                                                                                        class="button-group so-quickview cartinfo--static">
                                                                                        <button type="button"
                                                                                            class="addToCart"
                                                                                            title="Add to cart"
                                                                                            onclick="cart.add('60 ');"> <i
                                                                                                class="fa fa-shopping-basket"></i>
                                                                                            <span>Add to cart </span>
                                                                                        </button>
                                                                                        <button type="button"
                                                                                            class="wishlist btn-button"
                                                                                            title="Add to Wish List"
                                                                                            onclick="wishlist.add('60');"><i
                                                                                                class="fa fa-heart"></i><span></span>
                                                                                        </button>
                                                                                        <button type="button"
                                                                                            class="compare btn-button"
                                                                                            title="Compare this Product "
                                                                                            onclick="compare.add('60');"><i
                                                                                                class="fa fa-refresh"></i><span></span>
                                                                                        </button>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div
                                                                        class="item-inner product-thumb transition product-layout">
                                                                        <div class="product-item-container">
                                                                            <div class="left-block left-b">

                                                                                <div class="product-image-container">
                                                                                    <a href="#" target="_self"
                                                                                        title="Drutick lanaeger">
                                                                                        <img src="image/catalog/demo/product/300/fashion/7.jpg"
                                                                                            class="img-1 img-responsive"
                                                                                            alt="image">
                                                                                    </a>
                                                                                </div>

                                                                                <!--quickview-->
                                                                                <a class="iframe-link btn-button quickview quickview_handler visible-lg"
                                                                                    href="quickview.html"
                                                                                    title="Quick view"
                                                                                    data-fancybox-type="iframe"><i
                                                                                        class="fa fa-eye"></i><span></span></a>
                                                                                <!--end quickview-->
                                                                            </div>
                                                                            <div class="right-block right-b">
                                                                                <div class="caption">
                                                                                    <h4><a href="#"
                                                                                            title="Drutick lanaeger"
                                                                                            target="_self">Drutick
                                                                                            lanaeger</a></h4>
                                                                                    <div class="price"> <span
                                                                                            class="price-new">$80.00</span>
                                                                                    </div>
                                                                                    <div
                                                                                        class="button-group so-quickview cartinfo--static">
                                                                                        <button type="button"
                                                                                            class="addToCart"
                                                                                            title="Add to cart"
                                                                                            onclick="cart.add('60 ');"> <i
                                                                                                class="fa fa-shopping-basket"></i>
                                                                                            <span>Add to cart </span>
                                                                                        </button>
                                                                                        <button type="button"
                                                                                            class="wishlist btn-button"
                                                                                            title="Add to Wish List"
                                                                                            onclick="wishlist.add('60');"><i
                                                                                                class="fa fa-heart"></i><span></span>
                                                                                        </button>
                                                                                        <button type="button"
                                                                                            class="compare btn-button"
                                                                                            title="Compare this Product "
                                                                                            onclick="compare.add('60');"><i
                                                                                                class="fa fa-refresh"></i><span></span>
                                                                                        </button>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="ltabs-item">
                                                                    <div
                                                                        class="item-inner product-thumb transition product-layout">
                                                                        <div class="product-item-container">
                                                                            <div class="left-block left-b">
                                                                                <div class="product-image-container">
                                                                                    <a href="#" target="_self"
                                                                                        title="Drutick lanaeger">
                                                                                        <img src="image/catalog/demo/product/300/fashion/2.jpg"
                                                                                            class="img-1 img-responsive"
                                                                                            alt="image">
                                                                                    </a>
                                                                                </div>

                                                                                <!--quickview-->
                                                                                <a class="iframe-link btn-button quickview quickview_handler visible-lg"
                                                                                    href="quickview.html"
                                                                                    title="Quick view"
                                                                                    data-fancybox-type="iframe"><i
                                                                                        class="fa fa-eye"></i><span></span></a>
                                                                                <!--end quickview-->
                                                                            </div>
                                                                            <div class="right-block right-b">

                                                                                <div class="caption">
                                                                                    <h4><a href="#"
                                                                                            title="Ercitation incididunt"
                                                                                            target="_self">Ercitat
                                                                                            incidi</a></h4>
                                                                                    <div class="price"> <span
                                                                                            class="price-new">$180.00</span>
                                                                                    </div>
                                                                                    <div
                                                                                        class="button-group so-quickview cartinfo--static">
                                                                                        <button type="button"
                                                                                            class="addToCart"
                                                                                            title="Add to cart"
                                                                                            onclick="cart.add('60 ');"> <i
                                                                                                class="fa fa-shopping-basket"></i>
                                                                                            <span>Add to cart </span>
                                                                                        </button>
                                                                                        <button type="button"
                                                                                            class="wishlist btn-button"
                                                                                            title="Add to Wish List"
                                                                                            onclick="wishlist.add('60');"><i
                                                                                                class="fa fa-heart"></i><span></span>
                                                                                        </button>
                                                                                        <button type="button"
                                                                                            class="compare btn-button"
                                                                                            title="Compare this Product "
                                                                                            onclick="compare.add('60');"><i
                                                                                                class="fa fa-refresh"></i><span></span>
                                                                                        </button>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div
                                                                        class="item-inner product-thumb transition product-layout">
                                                                        <div class="product-item-container">
                                                                            <div class="left-block left-b">
                                                                                <div class="product-image-container">
                                                                                    <a href="#" target="_self"
                                                                                        title="Fatback picanha">
                                                                                        <img src="image/catalog/demo/product/300/fashion/8.jpg"
                                                                                            class="img-1 img-responsive"
                                                                                            alt="image">
                                                                                    </a>
                                                                                </div>
                                                                                <div class="box-label"> <span
                                                                                        class="label-product label-sale">
                                                                                        -13% </span></div>
                                                                                <!--quickview-->
                                                                                <a class="iframe-link btn-button quickview quickview_handler visible-lg"
                                                                                    href="quickview.html"
                                                                                    title="Quick view"
                                                                                    data-fancybox-type="iframe"><i
                                                                                        class="fa fa-eye"></i><span></span></a>
                                                                                <!--end quickview-->
                                                                            </div>
                                                                            <div class="right-block right-b">
                                                                                <div class="caption">
                                                                                    <h4><a href="#"
                                                                                            title="Fatback picanha"
                                                                                            target="_self">Fatback
                                                                                            picanha</a></h4>
                                                                                    <div class="price"> <span
                                                                                            class="price-new">$166.00</span>
                                                                                        <span
                                                                                            class="price-old">$186.00</span>
                                                                                    </div>
                                                                                    <div
                                                                                        class="button-group so-quickview cartinfo--static">
                                                                                        <button type="button"
                                                                                            class="addToCart"
                                                                                            title="Add to cart"
                                                                                            onclick="cart.add('60 ');"> <i
                                                                                                class="fa fa-shopping-basket"></i>
                                                                                            <span>Add to cart </span>
                                                                                        </button>
                                                                                        <button type="button"
                                                                                            class="wishlist btn-button"
                                                                                            title="Add to Wish List"
                                                                                            onclick="wishlist.add('60');"><i
                                                                                                class="fa fa-heart"></i><span></span>
                                                                                        </button>
                                                                                        <button type="button"
                                                                                            class="compare btn-button"
                                                                                            title="Compare this Product "
                                                                                            onclick="compare.add('60');"><i
                                                                                                class="fa fa-refresh"></i><span></span>
                                                                                        </button>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <!-- item listing tab -->
                                                                <div class="ltabs-item">
                                                                    <div
                                                                        class="item-inner product-thumb transition product-layout">
                                                                        <div class="product-item-container">
                                                                            <div class="left-block left-b">
                                                                                <div
                                                                                    class="product-card__gallery product-card__left">
                                                                                    <div class="item-img"
                                                                                        data-src="image/catalog/demo/product/300/fashion/5-2.jpg">
                                                                                        <img src="image/catalog/demo/product/80/fashion/5-2.jpg"
                                                                                            alt="image">
                                                                                    </div>
                                                                                    <div class="item-img thumb-active"
                                                                                        data-src="image/catalog/demo/product/300/fashion/5-3.jpg">
                                                                                        <img src="image/catalog/demo/product/80/fashion/5-3.jpg"
                                                                                            alt="image">
                                                                                    </div>
                                                                                    <div class="item-img"
                                                                                        data-src="image/catalog/demo/product/300/fashion/5-4.jpg">
                                                                                        <img src="image/catalog/demo/product/80/fashion/5-4.jpg"
                                                                                            alt="image">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="product-image-container">
                                                                                    <a href="#" target="_self"
                                                                                        title="Chicken swinesha">
                                                                                        <img src="image/catalog/demo/product/300/fashion/5-2.jpg"
                                                                                            class="img-1 img-responsive"
                                                                                            alt="image">
                                                                                    </a>
                                                                                </div>
                                                                                <div class="box-label"> <span
                                                                                        class="label-product label-sale">
                                                                                        -16% </span></div>
                                                                                <!--countdown box-->
                                                                                <div class="countdown_box hidden-xs">
                                                                                    <div class="countdown_inner">
                                                                                        <div class="item-timer">
                                                                                            <div
                                                                                                class="defaultCountdown-30">
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <!--end countdown box-->
                                                                                <!--quickview-->
                                                                                <a class="iframe-link btn-button quickview quickview_handler visible-lg"
                                                                                    href="quickview.html"
                                                                                    title="Quick view"
                                                                                    data-fancybox-type="iframe"><i
                                                                                        class="fa fa-eye"></i><span></span></a>
                                                                                <!--end quickview-->
                                                                            </div>
                                                                            <div class="right-block right-b">
                                                                                <ul class="colorswatch">
                                                                                    <li class="item-img"
                                                                                        data-src="image/catalog/demo/product/300/fashion/5-3.jpg">
                                                                                        <a href="javascript:void(0);"
                                                                                            title="green"><img
                                                                                                src="image/demo/colors/green.jpg"
                                                                                                alt="image"></a>
                                                                                    </li>
                                                                                    <li class="item-img active"
                                                                                        data-src="image/catalog/demo/product/300/fashion/5-2.jpg">
                                                                                        <a href="javascript:void(0);"
                                                                                            title="red"><img
                                                                                                src="image/demo/colors/red.jpg"
                                                                                                alt="image"></a>
                                                                                    </li>
                                                                                    <li class="item-img"
                                                                                        data-src="image/catalog/demo/product/300/fashion/5-4.jpg">
                                                                                        <a href="javascript:void(0);"
                                                                                            title="gray"><img
                                                                                                src="image/demo/colors/gray.jpg"
                                                                                                alt="image"></a>
                                                                                    </li>

                                                                                </ul>
                                                                                <div class="caption">
                                                                                    <h4><a href="#"
                                                                                            title="Bicola sausagop"
                                                                                            target="_self">Bicola
                                                                                            sausagop</a></h4>
                                                                                    <div class="price"> <span
                                                                                            class="price-new">$120.00</span>
                                                                                        <span
                                                                                            class="price-old">$160.00</span>
                                                                                    </div>
                                                                                    <div
                                                                                        class="button-group so-quickview cartinfo--static">
                                                                                        <button type="button"
                                                                                            class="addToCart"
                                                                                            title="Add to cart"
                                                                                            onclick="cart.add('60 ');"> <i
                                                                                                class="fa fa-shopping-basket"></i>
                                                                                            <span>Add to cart </span>
                                                                                        </button>
                                                                                        <button type="button"
                                                                                            class="wishlist btn-button"
                                                                                            title="Add to Wish List"
                                                                                            onclick="wishlist.add('60');"><i
                                                                                                class="fa fa-heart"></i><span></span>
                                                                                        </button>
                                                                                        <button type="button"
                                                                                            class="compare btn-button"
                                                                                            title="Compare this Product "
                                                                                            onclick="compare.add('60');"><i
                                                                                                class="fa fa-refresh"></i><span></span>
                                                                                        </button>
                                                                                    </div>

                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div
                                                                        class="item-inner product-thumb transition product-layout">
                                                                        <div class="product-item-container">
                                                                            <div class="left-block left-b">
                                                                                <div class="product-image-container">
                                                                                    <a href="#" target="_self"
                                                                                        title="Doenpuis consuat ">
                                                                                        <img src="image/catalog/demo/product/300/fashion/11.jpg"
                                                                                            class="img-1 img-responsive"
                                                                                            alt="image">

                                                                                    </a>
                                                                                </div>
                                                                                <div class="box-label"> <span
                                                                                        class="label-product label-sale">
                                                                                        -13% </span><span
                                                                                        class="label-product label-new">
                                                                                        New </span></div>
                                                                                <!--quickview-->
                                                                                <a class="iframe-link btn-button quickview quickview_handler visible-lg"
                                                                                    href="quickview.html"
                                                                                    title="Quick view"
                                                                                    data-fancybox-type="iframe"><i
                                                                                        class="fa fa-eye"></i><span></span></a>
                                                                                <!--end quickview-->
                                                                            </div>
                                                                            <div class="right-block right-b">

                                                                                <div class="caption">
                                                                                    <h4><a href="#"
                                                                                            title="Doenpuis consuat "
                                                                                            target="_self">Doenpuis
                                                                                            consuat </a></h4>
                                                                                    <div class="price"> <span
                                                                                            class="price-new">$66.00</span>
                                                                                        <span
                                                                                            class="price-old">$76.00</span>
                                                                                    </div>
                                                                                    <div
                                                                                        class="button-group so-quickview cartinfo--static">
                                                                                        <button type="button"
                                                                                            class="addToCart"
                                                                                            title="Add to cart"
                                                                                            onclick="cart.add('60 ');"> <i
                                                                                                class="fa fa-shopping-basket"></i>
                                                                                            <span>Add to cart </span>
                                                                                        </button>
                                                                                        <button type="button"
                                                                                            class="wishlist btn-button"
                                                                                            title="Add to Wish List"
                                                                                            onclick="wishlist.add('60');"><i
                                                                                                class="fa fa-heart"></i><span></span>
                                                                                        </button>
                                                                                        <button type="button"
                                                                                            class="compare btn-button"
                                                                                            title="Compare this Product "
                                                                                            onclick="compare.add('60');"><i
                                                                                                class="fa fa-refresh"></i><span></span>
                                                                                        </button>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <!-- end item listing tab -->
                                                                <div class="ltabs-item">
                                                                    <div
                                                                        class="item-inner product-thumb transition product-layout">
                                                                        <div class="product-item-container">
                                                                            <div class="left-block left-b">
                                                                                <div class="product-image-container">
                                                                                    <a href="#" target="_self"
                                                                                        title="Jalapeno dolore">
                                                                                        <img src="image/catalog/demo/product/300/fashion/3.jpg"
                                                                                            class="img-1 img-responsive"
                                                                                            alt="image">
                                                                                    </a>
                                                                                </div>
                                                                                <div class="box-label"><span
                                                                                        class="label-product label-new">
                                                                                        New </span></div>
                                                                                <!--quickview-->
                                                                                <a class="iframe-link btn-button quickview quickview_handler visible-lg"
                                                                                    href="quickview.html"
                                                                                    title="Quick view"
                                                                                    data-fancybox-type="iframe"><i
                                                                                        class="fa fa-eye"></i><span></span></a>
                                                                                <!--end quickview-->
                                                                            </div>
                                                                            <div class="right-block right-b">

                                                                                <div class="caption">
                                                                                    <h4><a href="#"
                                                                                            title="Jalapeno dolore"
                                                                                            target="_self">Jalapeno
                                                                                            dolore</a></h4>
                                                                                    <div class="price"> <span
                                                                                            class="price-new">$60.00</span>
                                                                                    </div>
                                                                                    <div
                                                                                        class="button-group so-quickview cartinfo--static">
                                                                                        <button type="button"
                                                                                            class="addToCart"
                                                                                            title="Add to cart"
                                                                                            onclick="cart.add('60 ');"> <i
                                                                                                class="fa fa-shopping-basket"></i>
                                                                                            <span>Add to cart </span>
                                                                                        </button>
                                                                                        <button type="button"
                                                                                            class="wishlist btn-button"
                                                                                            title="Add to Wish List"
                                                                                            onclick="wishlist.add('60');"><i
                                                                                                class="fa fa-heart"></i><span></span>
                                                                                        </button>
                                                                                        <button type="button"
                                                                                            class="compare btn-button"
                                                                                            title="Compare this Product "
                                                                                            onclick="compare.add('60');"><i
                                                                                                class="fa fa-refresh"></i><span></span>
                                                                                        </button>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div
                                                                        class="item-inner product-thumb transition product-layout">
                                                                        <div class="product-item-container">
                                                                            <div class="left-block left-b">

                                                                                <div class="product-image-container">
                                                                                    <a href="#" target="_self"
                                                                                        title="Pariatur porking">
                                                                                        <img src="image/catalog/demo/product/300/fashion/9.jpg"
                                                                                            class="img-1 img-responsive"
                                                                                            alt="image">
                                                                                    </a>
                                                                                </div>
                                                                                <!--quickview-->
                                                                                <a class="iframe-link btn-button quickview quickview_handler visible-lg"
                                                                                    href="quickview.html"
                                                                                    title="Quick view"
                                                                                    data-fancybox-type="iframe"><i
                                                                                        class="fa fa-eye"></i><span></span></a>
                                                                                <!--end quickview-->
                                                                            </div>
                                                                            <div class="right-block right-b">

                                                                                <div class="caption">
                                                                                    <h4><a href="#"
                                                                                            title="Pariatur porking"
                                                                                            target="_self">Pariatur
                                                                                            porking</a></h4>
                                                                                    <div class="price"> <span
                                                                                            class="price-new">$78.00</span>
                                                                                    </div>
                                                                                    <div
                                                                                        class="button-group so-quickview cartinfo--static">
                                                                                        <button type="button"
                                                                                            class="addToCart"
                                                                                            title="Add to cart"
                                                                                            onclick="cart.add('60 ');"> <i
                                                                                                class="fa fa-shopping-basket"></i>
                                                                                            <span>Add to cart </span>
                                                                                        </button>
                                                                                        <button type="button"
                                                                                            class="wishlist btn-button"
                                                                                            title="Add to Wish List"
                                                                                            onclick="wishlist.add('60');"><i
                                                                                                class="fa fa-heart"></i><span></span>
                                                                                        </button>
                                                                                        <button type="button"
                                                                                            class="compare btn-button"
                                                                                            title="Compare this Product "
                                                                                            onclick="compare.add('60');"><i
                                                                                                class="fa fa-refresh"></i><span></span>
                                                                                        </button>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="ltabs-item">
                                                                    <div
                                                                        class="item-inner product-thumb transition product-layout">
                                                                        <div class="product-item-container">
                                                                            <div class="left-block left-b">

                                                                                <div class="product-image-container">
                                                                                    <a href="#" target="_self"
                                                                                        title="Ullamco occaeca">
                                                                                        <img src="image/catalog/demo/product/300/fashion/4.jpg"
                                                                                            class="img-1 img-responsive"
                                                                                            alt="image">
                                                                                    </a>
                                                                                </div>
                                                                                <div
                                                                                    class="label-stock label label-success ">
                                                                                    Free Order</div>
                                                                                <div class="box-label"> <span
                                                                                        class="label-product label-sale">
                                                                                        -13% </span></div>
                                                                                <!--quickview-->
                                                                                <a class="iframe-link btn-button quickview quickview_handler visible-lg"
                                                                                    href="quickview.html"
                                                                                    title="Quick view"
                                                                                    data-fancybox-type="iframe"><i
                                                                                        class="fa fa-eye"></i><span></span></a>
                                                                                <!--end quickview-->
                                                                            </div>
                                                                            <div class="right-block right-b">

                                                                                <div class="caption">
                                                                                    <h4><a href="#"
                                                                                            title="Ullamco occaeca"
                                                                                            target="_self">Ullamco
                                                                                            occaeca</a></h4>

                                                                                    <div class="price"> <span
                                                                                            class="price-new">$66.00</span>
                                                                                        <span
                                                                                            class="price-old">$76.00</span>
                                                                                    </div>

                                                                                    <div
                                                                                        class="button-group so-quickview cartinfo--static">
                                                                                        <button type="button"
                                                                                            class="addToCart"
                                                                                            title="Add to cart"
                                                                                            onclick="cart.add('60 ');"> <i
                                                                                                class="fa fa-shopping-basket"></i>
                                                                                            <span>Add to cart </span>
                                                                                        </button>
                                                                                        <button type="button"
                                                                                            class="wishlist btn-button"
                                                                                            title="Add to Wish List"
                                                                                            onclick="wishlist.add('60');"><i
                                                                                                class="fa fa-heart"></i><span></span>
                                                                                        </button>
                                                                                        <button type="button"
                                                                                            class="compare btn-button"
                                                                                            title="Compare this Product "
                                                                                            onclick="compare.add('60');"><i
                                                                                                class="fa fa-refresh"></i><span></span>
                                                                                        </button>
                                                                                    </div>

                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div
                                                                        class="item-inner product-thumb transition product-layout">
                                                                        <div class="product-item-container">
                                                                            <div class="left-block left-b">
                                                                                <div class="product-image-container">
                                                                                    <a href="#" target="_self"
                                                                                        title="Doenpuis consuat">
                                                                                        <img src="image/catalog/demo/product/300/fashion/10.jpg"
                                                                                            class="img-1 img-responsive"
                                                                                            alt="image">
                                                                                    </a>
                                                                                </div>
                                                                                <div class="box-label"> <span
                                                                                        class="label-product label-sale">
                                                                                        -9% </span><span
                                                                                        class="label-product label-new">
                                                                                        New </span></div>
                                                                                <!--quickview-->
                                                                                <a class="iframe-link btn-button quickview quickview_handler visible-lg"
                                                                                    href="quickview.html"
                                                                                    title="Quick view"
                                                                                    data-fancybox-type="iframe"><i
                                                                                        class="fa fa-eye"></i><span></span></a>
                                                                                <!--end quickview-->
                                                                            </div>
                                                                            <div class="right-block right-b">

                                                                                <div class="caption">
                                                                                    <h4><a href="#"
                                                                                            title="Doenpuis consuat"
                                                                                            target="_self">Doenpuis
                                                                                            consuat</a></h4>

                                                                                    <div class="price"> <span
                                                                                            class="price-new">$86.00</span>
                                                                                        <span
                                                                                            class="price-old">$96.00</span>
                                                                                    </div>
                                                                                    <div
                                                                                        class="button-group so-quickview cartinfo--static">
                                                                                        <button type="button"
                                                                                            class="addToCart"
                                                                                            title="Add to cart"
                                                                                            onclick="cart.add('60 ');"> <i
                                                                                                class="fa fa-shopping-basket"></i>
                                                                                            <span>Add to cart </span>
                                                                                        </button>
                                                                                        <button type="button"
                                                                                            class="wishlist btn-button"
                                                                                            title="Add to Wish List"
                                                                                            onclick="wishlist.add('60');"><i
                                                                                                class="fa fa-heart"></i><span></span>
                                                                                        </button>
                                                                                        <button type="button"
                                                                                            class="compare btn-button"
                                                                                            title="Compare this Product "
                                                                                            onclick="compare.add('60');"><i
                                                                                                class="fa fa-refresh"></i><span></span>
                                                                                        </button>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="ltabs-item">
                                                                    <div
                                                                        class="item-inner product-thumb transition product-layout">
                                                                        <div class="product-item-container">
                                                                            <div class="left-block left-b">
                                                                                <div class="product-image-container">
                                                                                    <a href="#" target="_self"
                                                                                        title="dolore Jalapeno">
                                                                                        <img src="image/catalog/demo/product/300/fashion/6.jpg"
                                                                                            class="img-1 img-responsive"
                                                                                            alt="image">
                                                                                    </a>
                                                                                </div>
                                                                                <!--quickview-->
                                                                                <a class="iframe-link btn-button quickview quickview_handler visible-lg"
                                                                                    href="quickview.html"
                                                                                    title="Quick view"
                                                                                    data-fancybox-type="iframe"><i
                                                                                        class="fa fa-eye"></i><span></span></a>
                                                                                <!--end quickview-->
                                                                            </div>
                                                                            <div class="right-block right-b">

                                                                                <div class="caption">
                                                                                    <h4><a href="#"
                                                                                            title="Dolore Jalapeno"
                                                                                            target="_self">Dolore
                                                                                            Jalapeno</a></h4>
                                                                                    <div class="price"> <span
                                                                                            class="price-new">$98.00</span>
                                                                                    </div>
                                                                                    <div
                                                                                        class="button-group so-quickview cartinfo--static">
                                                                                        <button type="button"
                                                                                            class="addToCart"
                                                                                            title="Add to cart"
                                                                                            onclick="cart.add('60 ');"> <i
                                                                                                class="fa fa-shopping-basket"></i>
                                                                                            <span>Add to cart </span>
                                                                                        </button>
                                                                                        <button type="button"
                                                                                            class="wishlist btn-button"
                                                                                            title="Add to Wish List"
                                                                                            onclick="wishlist.add('60');"><i
                                                                                                class="fa fa-heart"></i><span></span>
                                                                                        </button>
                                                                                        <button type="button"
                                                                                            class="compare btn-button"
                                                                                            title="Compare this Product "
                                                                                            onclick="compare.add('60');"><i
                                                                                                class="fa fa-refresh"></i><span></span>
                                                                                        </button>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div
                                                                        class="item-inner product-thumb transition product-layout">
                                                                        <div class="product-item-container">
                                                                            <div class="left-block left-b">
                                                                                <div class="product-image-container">
                                                                                    <a href="#" target="_self"
                                                                                        title="Mapicola incididuv">
                                                                                        <img src="image/catalog/demo/product/300/fashion/12.jpg"
                                                                                            class="img-1 img-responsive"
                                                                                            alt="image">
                                                                                    </a>
                                                                                </div>
                                                                                <div class="box-label"><span
                                                                                        class="label-product label-new">
                                                                                        New </span></div>
                                                                                <!--quickview-->
                                                                                <a class="iframe-link btn-button quickview quickview_handler visible-lg"
                                                                                    href="quickview.html"
                                                                                    title="Quick view"
                                                                                    data-fancybox-type="iframe"><i
                                                                                        class="fa fa-eye"></i><span></span></a>
                                                                                <!--end quickview-->
                                                                            </div>
                                                                            <div class="right-block right-b">

                                                                                <div class="caption">
                                                                                    <h4><a href="#"
                                                                                            title="Mapicola incididuv"
                                                                                            target="_self">Mapicola
                                                                                            incididuv</a></h4>
                                                                                    <div class="price"> <span
                                                                                            class="price-new">$180.00</span>
                                                                                    </div>
                                                                                    <div
                                                                                        class="button-group so-quickview cartinfo--static">
                                                                                        <button type="button"
                                                                                            class="addToCart"
                                                                                            title="Add to cart"
                                                                                            onclick="cart.add('60 ');"> <i
                                                                                                class="fa fa-shopping-basket"></i>
                                                                                            <span>Add to cart </span>
                                                                                        </button>
                                                                                        <button type="button"
                                                                                            class="wishlist btn-button"
                                                                                            title="Add to Wish List"
                                                                                            onclick="wishlist.add('60');"><i
                                                                                                class="fa fa-heart"></i><span></span>
                                                                                        </button>
                                                                                        <button type="button"
                                                                                            class="compare btn-button"
                                                                                            title="Compare this Product "
                                                                                            onclick="compare.add('60');"><i
                                                                                                class="fa fa-refresh"></i><span></span>
                                                                                        </button>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </div>

                                                        </div>
                                                        <div class="ltabs-items items-category-12 grid" data-total="16">
                                                            <div class="ltabs-loading"></div>

                                                        </div>
                                                        <div class="ltabs-items  items-category-13 grid"
                                                            data-total="16">
                                                            <div class="ltabs-loading"></div>
                                                        </div>
                                                        <!--End Items-->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end Listing tabs -->
                            </div>
                            <div class="block block_4">
                                <!-- Listing tabs -->
                                <div class="module custom-listingtab default-nav clearfix img-float">
                                    <div class="box-title font-ct">
                                        <h2 class="modtitle">Electronics</h2>
                                    </div>
                                    <div class="modcontent">
                                        <div id="so_listing_tabs_2" class="so-listing-tabs first-load">
                                            <div class="loadeding"></div>
                                            <div class="ltabs-wrap">
                                                <div class="ltabs-tabs-container" data-delay="300" data-duration="600"
                                                    data-effect="starwars" data-ajaxurl="" data-type_source="0"
                                                    data-lg="5" data-md="4" data-sm="3" data-xxs="3"
                                                    data-xs="1" data-margin="0">
                                                    <!--Begin Tabs-->
                                                    <div class="ltabs-tabs-wrap">
                                                        <span class="ltabs-tab-selected">Best sellers</span> <span
                                                            class="ltabs-tab-arrow">▼</span>
                                                        <div class="ltabs-tabs cf font-ct list-sub-cat">
                                                            <ul class="ltabs-tabs cf">
                                                                <li class="ltabs-tab tab-sel" data-category-id="14"
                                                                    data-active-content=".items-category-14"> <span
                                                                        class="ltabs-tab-label">Best sellers</span> </li>
                                                                <li class="ltabs-tab " data-category-id="15"
                                                                    data-active-content=".items-category-15"> <span
                                                                        class="ltabs-tab-label">New Arrivals</span> </li>
                                                                <li class="ltabs-tab " data-category-id="16"
                                                                    data-active-content=".items-category-16"> <span
                                                                        class="ltabs-tab-label">Most Rating</span> </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <!-- End Tabs-->
                                                </div>
                                                <div class="wap-listing-tabs products-list grid">
                                                    <div class="item-cat-image banners">
                                                        <div>
                                                            <a href="#" title="" target="_self">
                                                                <img class="categories-loadimage" title=""
                                                                    alt=""
                                                                    src="image/catalog/demo/banners/home1/7-196x540.jpg">

                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="ltabs-items-container">
                                                        <!--Begin Items-->
                                                        <div class="ltabs-items ltabs-items-selected items-category-14"
                                                            data-total="16">
                                                            <div class="ltabs-items-inner ltabs-slider">
                                                                <!-- item listing tab -->
                                                                <div class="ltabs-item">
                                                                    <div
                                                                        class="item-inner product-thumb transition product-layout">
                                                                        <div class="product-item-container">
                                                                            <div class="left-block left-b">
                                                                                <div
                                                                                    class="product-card__gallery product-card__left">
                                                                                    <div class="item-img thumb-active"
                                                                                        data-src="image/catalog/demo/product/electronic/600x600/1.jpg">
                                                                                        <img src="image/catalog/demo/product/electronic/90x90/1.jpg"
                                                                                            alt="image">
                                                                                    </div>
                                                                                    <div class="item-img"
                                                                                        data-src="image/catalog/demo/product/electronic/600x600/2-2.jpg">
                                                                                        <img src="image/catalog/demo/product/electronic/90x90/2-2.jpg"
                                                                                            alt="image">
                                                                                    </div>
                                                                                    <div class="item-img"
                                                                                        data-src="image/catalog/demo/product/electronic/600x600/2-1.jpg">
                                                                                        <img src="image/catalog/demo/product/electronic/90x90/2-1.jpg"
                                                                                            alt="image">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="product-image-container">
                                                                                    <a href="#" target="_self"
                                                                                        title="Chicken swinesha">
                                                                                        <img src="image/catalog/demo/product/electronic/600x600/1.jpg"
                                                                                            class="img-1 img-responsive"
                                                                                            alt="image">
                                                                                    </a>
                                                                                </div>
                                                                                <div class="box-label"> <span
                                                                                        class="label-product label-sale">
                                                                                        -16% </span></div>
                                                                                <!--countdown box-->
                                                                                <div class="countdown_box hidden-xs">
                                                                                    <div class="countdown_inner">
                                                                                        <div class="item-timer">
                                                                                            <div
                                                                                                class="defaultCountdown-30">
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <!--end countdown box-->
                                                                                <!--quickview-->
                                                                                <a class="iframe-link btn-button quickview quickview_handler visible-lg"
                                                                                    href="quickview.html"
                                                                                    title="Quick view"
                                                                                    data-fancybox-type="iframe"><i
                                                                                        class="fa fa-eye"></i><span></span></a>
                                                                                <!--end quickview-->
                                                                            </div>
                                                                            <div class="right-block right-b">
                                                                                <div class="caption">
                                                                                    <h4><a href="#"
                                                                                            title="Bicola sausagop"
                                                                                            target="_self">Bicola
                                                                                            sausagop</a></h4>
                                                                                    <div class="price">
                                                                                        <span class="price-new">$114.00
                                                                                        </span>
                                                                                    </div>
                                                                                    <div
                                                                                        class="button-group so-quickview cartinfo--static">
                                                                                        <button type="button"
                                                                                            class="addToCart"
                                                                                            title="Add to cart"
                                                                                            onclick="cart.add('60 ');"> <i
                                                                                                class="fa fa-shopping-basket"></i>
                                                                                            <span>Add to cart </span>
                                                                                        </button>
                                                                                        <button type="button"
                                                                                            class="wishlist btn-button"
                                                                                            title="Add to Wish List"
                                                                                            onclick="wishlist.add('60');"><i
                                                                                                class="fa fa-heart"></i><span></span>
                                                                                        </button>
                                                                                        <button type="button"
                                                                                            class="compare btn-button"
                                                                                            title="Compare this Product "
                                                                                            onclick="compare.add('60');"><i
                                                                                                class="fa fa-refresh"></i><span></span>
                                                                                        </button>
                                                                                    </div>

                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div
                                                                        class="item-inner product-thumb transition product-layout">
                                                                        <div class="product-item-container">
                                                                            <div class="left-block left-b">
                                                                                <div class="product-image-container">
                                                                                    <a href="#" target="_self"
                                                                                        title="Doenpuis consuat ">
                                                                                        <img src="image/catalog/demo/product/electronic/600x600/21.jpg"
                                                                                            class="img-1 img-responsive"
                                                                                            alt="image">

                                                                                    </a>
                                                                                </div>
                                                                                <div class="box-label"> <span
                                                                                        class="label-product label-sale">
                                                                                        -13% </span><span
                                                                                        class="label-product label-new">
                                                                                        New </span></div>
                                                                                <!--quickview-->
                                                                                <a class="iframe-link btn-button quickview quickview_handler visible-lg"
                                                                                    href="quickview.html"
                                                                                    title="Quick view"
                                                                                    data-fancybox-type="iframe"><i
                                                                                        class="fa fa-eye"></i><span></span></a>
                                                                                <!--end quickview-->
                                                                            </div>
                                                                            <div class="right-block right-b">

                                                                                <div class="caption">
                                                                                    <h4><a href="#"
                                                                                            title="Doenpuis consuat "
                                                                                            target="_self">Doenpuis
                                                                                            consuat </a></h4>
                                                                                    <div class="price"> <span
                                                                                            class="price-new">$66.00</span>
                                                                                        <span
                                                                                            class="price-old">$76.00</span>
                                                                                    </div>
                                                                                    <div
                                                                                        class="button-group so-quickview cartinfo--static">
                                                                                        <button type="button"
                                                                                            class="addToCart"
                                                                                            title="Add to cart"
                                                                                            onclick="cart.add('60 ');"> <i
                                                                                                class="fa fa-shopping-basket"></i>
                                                                                            <span>Add to cart </span>
                                                                                        </button>
                                                                                        <button type="button"
                                                                                            class="wishlist btn-button"
                                                                                            title="Add to Wish List"
                                                                                            onclick="wishlist.add('60');"><i
                                                                                                class="fa fa-heart"></i><span></span>
                                                                                        </button>
                                                                                        <button type="button"
                                                                                            class="compare btn-button"
                                                                                            title="Compare this Product "
                                                                                            onclick="compare.add('60');"><i
                                                                                                class="fa fa-refresh"></i><span></span>
                                                                                        </button>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!-- end item listing tab -->
                                                                <div class="ltabs-item">
                                                                    <div
                                                                        class="item-inner product-thumb transition product-layout">
                                                                        <div class="product-item-container">
                                                                            <div class="left-block left-b">
                                                                                <div
                                                                                    class="product-card__gallery product-card__left">
                                                                                    <div class="item-img thumb-active"
                                                                                        data-src="image/catalog/demo/product/electronic/600x600/9.jpg">
                                                                                        <img src="image/catalog/demo/product/electronic/90x90/9.jpg"
                                                                                            alt="image">
                                                                                    </div>
                                                                                    <div class="item-img"
                                                                                        data-src="image/catalog/demo/product/electronic/600x600/10.jpg">
                                                                                        <img src="image/catalog/demo/product/electronic/90x90/10.jpg"
                                                                                            alt="image">
                                                                                    </div>
                                                                                    <div class="item-img"
                                                                                        data-src="image/catalog/demo/product/electronic/600x600/11.jpg">
                                                                                        <img src="image/catalog/demo/product/electronic/90x90/11.jpg"
                                                                                            alt="image">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="product-image-container">
                                                                                    <a href="#" target="_self"
                                                                                        title="Cupim should">
                                                                                        <img src="image/catalog/demo/product/electronic/600x600/9.jpg"
                                                                                            class="img-responsive"
                                                                                            alt="image">
                                                                                    </a>
                                                                                </div>

                                                                                <!--quickview-->
                                                                                <a class="iframe-link btn-button quickview quickview_handler visible-lg"
                                                                                    href="quickview.html"
                                                                                    title="Quick view"
                                                                                    data-fancybox-type="iframe"><i
                                                                                        class="fa fa-eye"></i><span></span></a>
                                                                                <!--end quickview-->
                                                                            </div>
                                                                            <div class="right-block right-b">
                                                                                <ul class="colorswatch">
                                                                                    <li class="item-img active"
                                                                                        data-src="image/catalog/demo/product/electronic/600x600/9.jpg">
                                                                                        <a href="javascript:void(0);"
                                                                                            title="gray"><img
                                                                                                src="image/demo/colors/gray.jpg"
                                                                                                alt="image"></a>
                                                                                    </li>
                                                                                    <li class="item-img"
                                                                                        data-src="image/catalog/demo/product/electronic/600x600/10.jpg">
                                                                                        <a href="javascript:void(0);"
                                                                                            title="pink"><img
                                                                                                src="image/demo/colors/pink.jpg"
                                                                                                alt="image"></a>
                                                                                    </li>
                                                                                    <li class="item-img"
                                                                                        data-src="image/catalog/demo/product/electronic/600x600/11.jpg">
                                                                                        <a href="javascript:void(0);"
                                                                                            title="black"><img
                                                                                                src="image/demo/colors/black.jpg"
                                                                                                alt="image"></a>
                                                                                    </li>
                                                                                </ul>
                                                                                <div class="caption">
                                                                                    <h4><a href="#"
                                                                                            title="Cupim should "
                                                                                            target="_self">Cupim should
                                                                                        </a></h4>
                                                                                    <div class="price">
                                                                                        <span class="price-new">$254.00
                                                                                        </span>
                                                                                    </div>
                                                                                    <div
                                                                                        class="button-group so-quickview cartinfo--static">
                                                                                        <button type="button"
                                                                                            class="addToCart"
                                                                                            title="Add to cart"
                                                                                            onclick="cart.add('60 ');"> <i
                                                                                                class="fa fa-shopping-basket"></i>
                                                                                            <span>Add to cart </span>
                                                                                        </button>
                                                                                        <button type="button"
                                                                                            class="wishlist btn-button"
                                                                                            title="Add to Wish List"
                                                                                            onclick="wishlist.add('60');"><i
                                                                                                class="fa fa-heart"></i><span></span>
                                                                                        </button>
                                                                                        <button type="button"
                                                                                            class="compare btn-button"
                                                                                            title="Compare this Product "
                                                                                            onclick="compare.add('60');"><i
                                                                                                class="fa fa-refresh"></i><span></span>
                                                                                        </button>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div
                                                                        class="item-inner product-thumb transition product-layout">
                                                                        <div class="product-item-container">
                                                                            <div class="left-block left-b">

                                                                                <div class="product-image-container">
                                                                                    <a href="#" target="_self"
                                                                                        title="Drutick lanaeger">
                                                                                        <img src="image/catalog/demo/product/electronic/600x600/3.jpg"
                                                                                            class="img-1 img-responsive"
                                                                                            alt="image">
                                                                                    </a>
                                                                                </div>

                                                                                <!--quickview-->
                                                                                <a class="iframe-link btn-button quickview quickview_handler visible-lg"
                                                                                    href="quickview.html"
                                                                                    title="Quick view"
                                                                                    data-fancybox-type="iframe"><i
                                                                                        class="fa fa-eye"></i><span></span></a>
                                                                                <!--end quickview-->
                                                                            </div>
                                                                            <div class="right-block right-b">
                                                                                <div class="caption">
                                                                                    <h4><a href="#"
                                                                                            title="Drutick lanaeger"
                                                                                            target="_self">Drutick
                                                                                            lanaeger</a></h4>
                                                                                    <div class="price"> <span
                                                                                            class="price-new">$80.00</span>
                                                                                    </div>
                                                                                    <div
                                                                                        class="button-group so-quickview cartinfo--static">
                                                                                        <button type="button"
                                                                                            class="addToCart"
                                                                                            title="Add to cart"
                                                                                            onclick="cart.add('60 ');"> <i
                                                                                                class="fa fa-shopping-basket"></i>
                                                                                            <span>Add to cart </span>
                                                                                        </button>
                                                                                        <button type="button"
                                                                                            class="wishlist btn-button"
                                                                                            title="Add to Wish List"
                                                                                            onclick="wishlist.add('60');"><i
                                                                                                class="fa fa-heart"></i><span></span>
                                                                                        </button>
                                                                                        <button type="button"
                                                                                            class="compare btn-button"
                                                                                            title="Compare this Product "
                                                                                            onclick="compare.add('60');"><i
                                                                                                class="fa fa-refresh"></i><span></span>
                                                                                        </button>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="ltabs-item">
                                                                    <div
                                                                        class="item-inner product-thumb transition product-layout">
                                                                        <div class="product-item-container">
                                                                            <div class="left-block left-b">
                                                                                <div class="product-image-container">
                                                                                    <a href="#" target="_self"
                                                                                        title="Drutick lanaeger">
                                                                                        <img src="image/catalog/demo/product/electronic/600x600/4.jpg"
                                                                                            class="img-1 img-responsive"
                                                                                            alt="image">
                                                                                    </a>
                                                                                </div>

                                                                                <!--quickview-->
                                                                                <a class="iframe-link btn-button quickview quickview_handler visible-lg"
                                                                                    href="quickview.html"
                                                                                    title="Quick view"
                                                                                    data-fancybox-type="iframe"><i
                                                                                        class="fa fa-eye"></i><span></span></a>
                                                                                <!--end quickview-->
                                                                            </div>
                                                                            <div class="right-block right-b">

                                                                                <div class="caption">
                                                                                    <h4><a href="#"
                                                                                            title="Ercitation incididunt"
                                                                                            target="_self">Ercitat
                                                                                            incidi</a></h4>
                                                                                    <div class="price"> <span
                                                                                            class="price-new">$180.00</span>
                                                                                    </div>
                                                                                    <div
                                                                                        class="button-group so-quickview cartinfo--static">
                                                                                        <button type="button"
                                                                                            class="addToCart"
                                                                                            title="Add to cart"
                                                                                            onclick="cart.add('60 ');"> <i
                                                                                                class="fa fa-shopping-basket"></i>
                                                                                            <span>Add to cart </span>
                                                                                        </button>
                                                                                        <button type="button"
                                                                                            class="wishlist btn-button"
                                                                                            title="Add to Wish List"
                                                                                            onclick="wishlist.add('60');"><i
                                                                                                class="fa fa-heart"></i><span></span>
                                                                                        </button>
                                                                                        <button type="button"
                                                                                            class="compare btn-button"
                                                                                            title="Compare this Product "
                                                                                            onclick="compare.add('60');"><i
                                                                                                class="fa fa-refresh"></i><span></span>
                                                                                        </button>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div
                                                                        class="item-inner product-thumb transition product-layout">
                                                                        <div class="product-item-container">
                                                                            <div class="left-block left-b">
                                                                                <div class="product-image-container">
                                                                                    <a href="#" target="_self"
                                                                                        title="Fatback picanha">
                                                                                        <img src="image/catalog/demo/product/electronic/600x600/5.jpg"
                                                                                            class="img-1 img-responsive"
                                                                                            alt="image">
                                                                                    </a>
                                                                                </div>
                                                                                <div class="box-label"> <span
                                                                                        class="label-product label-sale">
                                                                                        -13% </span></div>
                                                                                <!--quickview-->
                                                                                <a class="iframe-link btn-button quickview quickview_handler visible-lg"
                                                                                    href="quickview.html"
                                                                                    title="Quick view"
                                                                                    data-fancybox-type="iframe"><i
                                                                                        class="fa fa-eye"></i><span></span></a>
                                                                                <!--end quickview-->
                                                                            </div>
                                                                            <div class="right-block right-b">
                                                                                <div class="caption">
                                                                                    <h4><a href="#"
                                                                                            title="Fatback picanha"
                                                                                            target="_self">Fatback
                                                                                            picanha</a></h4>
                                                                                    <div class="price"> <span
                                                                                            class="price-new">$210.00</span>
                                                                                    </div>
                                                                                    <div
                                                                                        class="button-group so-quickview cartinfo--static">
                                                                                        <button type="button"
                                                                                            class="addToCart"
                                                                                            title="Add to cart"
                                                                                            onclick="cart.add('60 ');"> <i
                                                                                                class="fa fa-shopping-basket"></i>
                                                                                            <span>Add to cart </span>
                                                                                        </button>
                                                                                        <button type="button"
                                                                                            class="wishlist btn-button"
                                                                                            title="Add to Wish List"
                                                                                            onclick="wishlist.add('60');"><i
                                                                                                class="fa fa-heart"></i><span></span>
                                                                                        </button>
                                                                                        <button type="button"
                                                                                            class="compare btn-button"
                                                                                            title="Compare this Product "
                                                                                            onclick="compare.add('60');"><i
                                                                                                class="fa fa-refresh"></i><span></span>
                                                                                        </button>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="ltabs-item">
                                                                    <div
                                                                        class="item-inner product-thumb transition product-layout">
                                                                        <div class="product-item-container">
                                                                            <div class="left-block left-b">
                                                                                <div class="product-image-container">
                                                                                    <a href="#" target="_self"
                                                                                        title="Jalapeno dolore">
                                                                                        <img src="image/catalog/demo/product/electronic/600x600/6.jpg"
                                                                                            class="img-1 img-responsive"
                                                                                            alt="image">
                                                                                    </a>
                                                                                </div>
                                                                                <div class="box-label"><span
                                                                                        class="label-product label-new">
                                                                                        New </span></div>
                                                                                <!--quickview-->
                                                                                <a class="iframe-link btn-button quickview quickview_handler visible-lg"
                                                                                    href="quickview.html"
                                                                                    title="Quick view"
                                                                                    data-fancybox-type="iframe"><i
                                                                                        class="fa fa-eye"></i><span></span></a>
                                                                                <!--end quickview-->
                                                                            </div>
                                                                            <div class="right-block right-b">

                                                                                <div class="caption">
                                                                                    <h4><a href="#"
                                                                                            title="Jalapeno dolore"
                                                                                            target="_self">Jalapeno
                                                                                            dolore</a></h4>
                                                                                    <div class="price"> <span
                                                                                            class="price-new">$60.00</span>
                                                                                    </div>
                                                                                    <div
                                                                                        class="button-group so-quickview cartinfo--static">
                                                                                        <button type="button"
                                                                                            class="addToCart"
                                                                                            title="Add to cart"
                                                                                            onclick="cart.add('60 ');"> <i
                                                                                                class="fa fa-shopping-basket"></i>
                                                                                            <span>Add to cart </span>
                                                                                        </button>
                                                                                        <button type="button"
                                                                                            class="wishlist btn-button"
                                                                                            title="Add to Wish List"
                                                                                            onclick="wishlist.add('60');"><i
                                                                                                class="fa fa-heart"></i><span></span>
                                                                                        </button>
                                                                                        <button type="button"
                                                                                            class="compare btn-button"
                                                                                            title="Compare this Product "
                                                                                            onclick="compare.add('60');"><i
                                                                                                class="fa fa-refresh"></i><span></span>
                                                                                        </button>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div
                                                                        class="item-inner product-thumb transition product-layout">
                                                                        <div class="product-item-container">
                                                                            <div class="left-block left-b">
                                                                                <div
                                                                                    class="product-card__gallery product-card__left">
                                                                                    <div class="item-img thumb-active"
                                                                                        data-src="image/catalog/demo/product/electronic/600x600/9.jpg">
                                                                                        <img src="image/catalog/demo/product/electronic/90x90/9.jpg"
                                                                                            alt="image">
                                                                                    </div>
                                                                                    <div class="item-img"
                                                                                        data-src="image/catalog/demo/product/electronic/600x600/13.jpg">
                                                                                        <img src="image/catalog/demo/product/electronic/90x90/13.jpg"
                                                                                            alt="image">
                                                                                    </div>

                                                                                </div>
                                                                                <div class="product-image-container">
                                                                                    <a href="#" target="_self"
                                                                                        title="Pariatur porking">
                                                                                        <img src="image/catalog/demo/product/electronic/600x600/12.jpg"
                                                                                            class="img-1 img-responsive"
                                                                                            alt="image">
                                                                                    </a>
                                                                                </div>
                                                                                <!--quickview-->
                                                                                <a class="iframe-link btn-button quickview quickview_handler visible-lg"
                                                                                    href="quickview.html"
                                                                                    title="Quick view"
                                                                                    data-fancybox-type="iframe"><i
                                                                                        class="fa fa-eye"></i><span></span></a>
                                                                                <!--end quickview-->
                                                                            </div>
                                                                            <div class="right-block right-b">

                                                                                <div class="caption">
                                                                                    <h4><a href="#"
                                                                                            title="Pariatur porking"
                                                                                            target="_self">Pariatur
                                                                                            porking</a></h4>
                                                                                    <div class="price"> <span
                                                                                            class="price-new">$78.00</span>
                                                                                    </div>
                                                                                    <div
                                                                                        class="button-group so-quickview cartinfo--static">
                                                                                        <button type="button"
                                                                                            class="addToCart"
                                                                                            title="Add to cart"
                                                                                            onclick="cart.add('60 ');"> <i
                                                                                                class="fa fa-shopping-basket"></i>
                                                                                            <span>Add to cart </span>
                                                                                        </button>
                                                                                        <button type="button"
                                                                                            class="wishlist btn-button"
                                                                                            title="Add to Wish List"
                                                                                            onclick="wishlist.add('60');"><i
                                                                                                class="fa fa-heart"></i><span></span>
                                                                                        </button>
                                                                                        <button type="button"
                                                                                            class="compare btn-button"
                                                                                            title="Compare this Product "
                                                                                            onclick="compare.add('60');"><i
                                                                                                class="fa fa-refresh"></i><span></span>
                                                                                        </button>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="ltabs-item">
                                                                    <div
                                                                        class="item-inner product-thumb transition product-layout">
                                                                        <div class="product-item-container">
                                                                            <div class="left-block left-b">

                                                                                <div class="product-image-container">
                                                                                    <a href="#" target="_self"
                                                                                        title="Ullamco occaeca">
                                                                                        <img src="image/catalog/demo/product/electronic/600x600/11.jpg"
                                                                                            class="img-1 img-responsive"
                                                                                            alt="image">
                                                                                    </a>
                                                                                </div>
                                                                                <div
                                                                                    class="label-stock label label-success ">
                                                                                    Free Order</div>
                                                                                <div class="box-label"> <span
                                                                                        class="label-product label-sale">
                                                                                        -13% </span></div>
                                                                                <!--quickview-->
                                                                                <a class="iframe-link btn-button quickview quickview_handler visible-lg"
                                                                                    href="quickview.html"
                                                                                    title="Quick view"
                                                                                    data-fancybox-type="iframe"><i
                                                                                        class="fa fa-eye"></i><span></span></a>
                                                                                <!--end quickview-->
                                                                            </div>
                                                                            <div class="right-block right-b">

                                                                                <div class="caption">
                                                                                    <h4><a href="#"
                                                                                            title="Ullamco occaeca"
                                                                                            target="_self">Ullamco
                                                                                            occaeca</a></h4>

                                                                                    <div class="price"> <span
                                                                                            class="price-new">$66.00</span>
                                                                                        <span
                                                                                            class="price-old">$76.00</span>
                                                                                    </div>

                                                                                    <div
                                                                                        class="button-group so-quickview cartinfo--static">
                                                                                        <button type="button"
                                                                                            class="addToCart"
                                                                                            title="Add to cart"
                                                                                            onclick="cart.add('60 ');"> <i
                                                                                                class="fa fa-shopping-basket"></i>
                                                                                            <span>Add to cart </span>
                                                                                        </button>
                                                                                        <button type="button"
                                                                                            class="wishlist btn-button"
                                                                                            title="Add to Wish List"
                                                                                            onclick="wishlist.add('60');"><i
                                                                                                class="fa fa-heart"></i><span></span>
                                                                                        </button>
                                                                                        <button type="button"
                                                                                            class="compare btn-button"
                                                                                            title="Compare this Product "
                                                                                            onclick="compare.add('60');"><i
                                                                                                class="fa fa-refresh"></i><span></span>
                                                                                        </button>
                                                                                    </div>

                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div
                                                                        class="item-inner product-thumb transition product-layout">
                                                                        <div class="product-item-container">
                                                                            <div class="left-block left-b">
                                                                                <div class="product-image-container">
                                                                                    <a href="#" target="_self"
                                                                                        title="Doenpuis consuat">
                                                                                        <img src="image/catalog/demo/product/electronic/600x600/18.jpg"
                                                                                            class="img-1 img-responsive"
                                                                                            alt="image">

                                                                                    </a>
                                                                                </div>
                                                                                <div class="box-label"> <span
                                                                                        class="label-product label-sale">
                                                                                        -9% </span><span
                                                                                        class="label-product label-new">
                                                                                        New </span></div>
                                                                                <!--quickview-->
                                                                                <a class="iframe-link btn-button quickview quickview_handler visible-lg"
                                                                                    href="quickview.html"
                                                                                    title="Quick view"
                                                                                    data-fancybox-type="iframe"><i
                                                                                        class="fa fa-eye"></i><span></span></a>
                                                                                <!--end quickview-->
                                                                            </div>
                                                                            <div class="right-block right-b">

                                                                                <div class="caption">
                                                                                    <h4><a href="#"
                                                                                            title="Doenpuis consuat"
                                                                                            target="_self">Doenpuis
                                                                                            consuat</a></h4>

                                                                                    <div class="price"> <span
                                                                                            class="price-new">$86.00</span>
                                                                                        <span
                                                                                            class="price-old">$96.00</span>
                                                                                    </div>
                                                                                    <div
                                                                                        class="button-group so-quickview cartinfo--static">
                                                                                        <button type="button"
                                                                                            class="addToCart"
                                                                                            title="Add to cart"
                                                                                            onclick="cart.add('60 ');"> <i
                                                                                                class="fa fa-shopping-basket"></i>
                                                                                            <span>Add to cart </span>
                                                                                        </button>
                                                                                        <button type="button"
                                                                                            class="wishlist btn-button"
                                                                                            title="Add to Wish List"
                                                                                            onclick="wishlist.add('60');"><i
                                                                                                class="fa fa-heart"></i><span></span>
                                                                                        </button>
                                                                                        <button type="button"
                                                                                            class="compare btn-button"
                                                                                            title="Compare this Product "
                                                                                            onclick="compare.add('60');"><i
                                                                                                class="fa fa-refresh"></i><span></span>
                                                                                        </button>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="ltabs-item">
                                                                    <div
                                                                        class="item-inner product-thumb transition product-layout">
                                                                        <div class="product-item-container">
                                                                            <div class="left-block left-b">
                                                                                <div
                                                                                    class="product-card__gallery product-card__left">
                                                                                    <div class="item-img thumb-active"
                                                                                        data-src="image/catalog/demo/product/electronic/600x600/7-1.jpg">
                                                                                        <img src="image/catalog/demo/product/electronic/90x90/7-1.jpg"
                                                                                            alt="image">
                                                                                    </div>
                                                                                    <div class="item-img"
                                                                                        data-src="image/catalog/demo/product/electronic/600x600/7-2.jpg">
                                                                                        <img src="image/catalog/demo/product/electronic/90x90/7-2.jpg"
                                                                                            alt="image">
                                                                                    </div>
                                                                                    <div class="item-img"
                                                                                        data-src="image/catalog/demo/product/electronic/600x600/7-3.jpg">
                                                                                        <img src="image/catalog/demo/product/electronic/90x90/7-3.jpg"
                                                                                            alt="image">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="product-image-container">
                                                                                    <a href="#" target="_self"
                                                                                        title="dolore Jalapeno">
                                                                                        <img src="image/catalog/demo/product/electronic/600x600/7.jpg"
                                                                                            class="img-1 img-responsive"
                                                                                            alt="image">
                                                                                    </a>
                                                                                </div>
                                                                                <!--quickview-->
                                                                                <a class="iframe-link btn-button quickview quickview_handler visible-lg"
                                                                                    href="quickview.html"
                                                                                    title="Quick view"
                                                                                    data-fancybox-type="iframe"><i
                                                                                        class="fa fa-eye"></i><span></span></a>
                                                                                <!--end quickview-->
                                                                            </div>
                                                                            <div class="right-block right-b">

                                                                                <div class="caption">
                                                                                    <h4><a href="#"
                                                                                            title="Dolore Jalapeno"
                                                                                            target="_self">Dolore
                                                                                            Jalapeno</a></h4>
                                                                                    <div class="price"> <span
                                                                                            class="price-new">$98.00</span>
                                                                                    </div>
                                                                                    <div
                                                                                        class="button-group so-quickview cartinfo--static">
                                                                                        <button type="button"
                                                                                            class="addToCart"
                                                                                            title="Add to cart"
                                                                                            onclick="cart.add('60 ');"> <i
                                                                                                class="fa fa-shopping-basket"></i>
                                                                                            <span>Add to cart </span>
                                                                                        </button>
                                                                                        <button type="button"
                                                                                            class="wishlist btn-button"
                                                                                            title="Add to Wish List"
                                                                                            onclick="wishlist.add('60');"><i
                                                                                                class="fa fa-heart"></i><span></span>
                                                                                        </button>
                                                                                        <button type="button"
                                                                                            class="compare btn-button"
                                                                                            title="Compare this Product "
                                                                                            onclick="compare.add('60');"><i
                                                                                                class="fa fa-refresh"></i><span></span>
                                                                                        </button>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div
                                                                        class="item-inner product-thumb transition product-layout">
                                                                        <div class="product-item-container">
                                                                            <div class="left-block left-b">
                                                                                <div class="product-image-container">
                                                                                    <a href="#" target="_self"
                                                                                        title="Mapicola incididuv">
                                                                                        <img src="image/catalog/demo/product/electronic/600x600/8.jpg"
                                                                                            class="img-1 img-responsive"
                                                                                            alt="image">
                                                                                    </a>
                                                                                </div>
                                                                                <div class="box-label"><span
                                                                                        class="label-product label-new">
                                                                                        New </span></div>
                                                                                <!--quickview-->
                                                                                <a class="iframe-link btn-button quickview quickview_handler visible-lg"
                                                                                    href="quickview.html"
                                                                                    title="Quick view"
                                                                                    data-fancybox-type="iframe"><i
                                                                                        class="fa fa-eye"></i><span></span></a>
                                                                                <!--end quickview-->
                                                                            </div>
                                                                            <div class="right-block right-b">

                                                                                <div class="caption">
                                                                                    <h4><a href="#"
                                                                                            title="Mapicola incididuv"
                                                                                            target="_self">Mapicola
                                                                                            incididuv</a></h4>
                                                                                    <div class="price"> <span
                                                                                            class="price-new">$180.00</span>
                                                                                    </div>
                                                                                    <div
                                                                                        class="button-group so-quickview cartinfo--static">
                                                                                        <button type="button"
                                                                                            class="addToCart"
                                                                                            title="Add to cart"
                                                                                            onclick="cart.add('60 ');"> <i
                                                                                                class="fa fa-shopping-basket"></i>
                                                                                            <span>Add to cart </span>
                                                                                        </button>
                                                                                        <button type="button"
                                                                                            class="wishlist btn-button"
                                                                                            title="Add to Wish List"
                                                                                            onclick="wishlist.add('60');"><i
                                                                                                class="fa fa-heart"></i><span></span>
                                                                                        </button>
                                                                                        <button type="button"
                                                                                            class="compare btn-button"
                                                                                            title="Compare this Product "
                                                                                            onclick="compare.add('60');"><i
                                                                                                class="fa fa-refresh"></i><span></span>
                                                                                        </button>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="ltabs-items items-category-15 grid" data-total="16">
                                                            <div class="ltabs-loading"></div>

                                                        </div>
                                                        <div class="ltabs-items  items-category-16 grid"
                                                            data-total="16">
                                                            <div class="ltabs-loading"></div>
                                                        </div>
                                                        <!--End Items-->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end Listing tabs -->
                            </div>
                            <div class="block block_5">
                                <!-- Listing tabs -->
                                <div class="module custom-listingtab default-nav">
                                    <div class="box-title font-ct">
                                        <h2 class="modtitle">Sports</h2>
                                    </div>
                                    <div class="modcontent">
                                        <div id="so_listing_tabs_3" class="so-listing-tabs first-load">
                                            <div class="loadeding"></div>
                                            <div class="ltabs-wrap">
                                                <div class="ltabs-tabs-container" data-delay="300" data-duration="600"
                                                    data-effect="starwars" data-ajaxurl="" data-type_source="0"
                                                    data-lg="5" data-md="4" data-sm="3" data-xxs="3"
                                                    data-xs="1" data-margin="0">
                                                    <!--Begin Tabs-->
                                                    <div class="ltabs-tabs-wrap">
                                                        <span class="ltabs-tab-selected">Bathroom</span> <span
                                                            class="ltabs-tab-arrow">▼</span>
                                                        <div class="ltabs-tabs cf font-ct list-sub-cat">
                                                            <ul class="ltabs-tabs cf">
                                                                <li class="ltabs-tab tab-sel" data-category-id="17"
                                                                    data-active-content=".items-category-17"> <span
                                                                        class="ltabs-tab-label">Best sellers</span> </li>
                                                                <li class="ltabs-tab " data-category-id="18"
                                                                    data-active-content=".items-category-18"> <span
                                                                        class="ltabs-tab-label">New Arrivals</span> </li>
                                                                <li class="ltabs-tab " data-category-id="19"
                                                                    data-active-content=".items-category-19"> <span
                                                                        class="ltabs-tab-label">Most Rating</span> </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <!-- End Tabs-->
                                                </div>
                                                <div class="wap-listing-tabs products-list grid">
                                                    <div class="item-cat-image banners">
                                                        <div>
                                                            <a href="#" title="" target="_self">
                                                                <img class="categories-loadimage" title=""
                                                                    alt=""
                                                                    src="image/catalog/demo/banners/home1/8-196x540.jpg">
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="ltabs-items-container">
                                                        <!--Begin Items-->
                                                        <div class="ltabs-items ltabs-items-selected items-category-17"
                                                            data-total="16">
                                                            <div class="ltabs-items-inner ltabs-slider">
                                                                <div class="ltabs-item">
                                                                    <div
                                                                        class="item-inner product-thumb transition product-layout">
                                                                        <div class="product-item-container">
                                                                            <div class="left-block left-b">

                                                                                <div class="product-image-container">
                                                                                    <a href="#" target="_self"
                                                                                        title="Ullamco occaeca">
                                                                                        <img src="image/catalog/demo/product/300/sport/1.jpg"
                                                                                            class="img-1 img-responsive"
                                                                                            alt="image">
                                                                                    </a>
                                                                                </div>
                                                                                <div
                                                                                    class="label-stock label label-success ">
                                                                                    Free Order</div>
                                                                                <div class="box-label"> <span
                                                                                        class="label-product label-sale">
                                                                                        -13% </span></div>
                                                                                <!--quickview-->
                                                                                <a class="iframe-link btn-button quickview quickview_handler visible-lg"
                                                                                    href="quickview.html"
                                                                                    title="Quick view"
                                                                                    data-fancybox-type="iframe"><i
                                                                                        class="fa fa-eye"></i><span></span></a>
                                                                                <!--end quickview-->
                                                                            </div>
                                                                            <div class="right-block right-b">

                                                                                <div class="caption">
                                                                                    <h4><a href="#"
                                                                                            title="Ullamco occaeca"
                                                                                            target="_self">Ullamco
                                                                                            occaeca</a></h4>

                                                                                    <div class="price"> <span
                                                                                            class="price-new">$66.00</span>
                                                                                        <span
                                                                                            class="price-old">$76.00</span>
                                                                                    </div>

                                                                                    <div
                                                                                        class="button-group so-quickview cartinfo--static">
                                                                                        <button type="button"
                                                                                            class="addToCart"
                                                                                            title="Add to cart"
                                                                                            onclick="cart.add('60 ');"> <i
                                                                                                class="fa fa-shopping-basket"></i>
                                                                                            <span>Add to cart </span>
                                                                                        </button>
                                                                                        <button type="button"
                                                                                            class="wishlist btn-button"
                                                                                            title="Add to Wish List"
                                                                                            onclick="wishlist.add('60');"><i
                                                                                                class="fa fa-heart"></i><span></span>
                                                                                        </button>
                                                                                        <button type="button"
                                                                                            class="compare btn-button"
                                                                                            title="Compare this Product "
                                                                                            onclick="compare.add('60');"><i
                                                                                                class="fa fa-refresh"></i><span></span>
                                                                                        </button>
                                                                                    </div>

                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div
                                                                        class="item-inner product-thumb transition product-layout">
                                                                        <div class="product-item-container">
                                                                            <div class="left-block left-b">
                                                                                <div class="product-image-container">
                                                                                    <a href="#" target="_self"
                                                                                        title="Doenpuis consuat">
                                                                                        <img src="image/catalog/demo/product/300/sport/7.jpg"
                                                                                            class="img-1 img-responsive"
                                                                                            alt="image">

                                                                                    </a>
                                                                                </div>
                                                                                <div class="box-label"> <span
                                                                                        class="label-product label-sale">
                                                                                        -9% </span><span
                                                                                        class="label-product label-new">
                                                                                        New </span></div>
                                                                                <!--quickview-->
                                                                                <a class="iframe-link btn-button quickview quickview_handler visible-lg"
                                                                                    href="quickview.html"
                                                                                    title="Quick view"
                                                                                    data-fancybox-type="iframe"><i
                                                                                        class="fa fa-eye"></i><span></span></a>
                                                                                <!--end quickview-->
                                                                            </div>
                                                                            <div class="right-block right-b">

                                                                                <div class="caption">
                                                                                    <h4><a href="#"
                                                                                            title="Doenpuis consuat"
                                                                                            target="_self">Doenpuis
                                                                                            consuat</a></h4>

                                                                                    <div class="price"> <span
                                                                                            class="price-new">$86.00</span>
                                                                                        <span
                                                                                            class="price-old">$96.00</span>
                                                                                    </div>
                                                                                    <div
                                                                                        class="button-group so-quickview cartinfo--static">
                                                                                        <button type="button"
                                                                                            class="addToCart"
                                                                                            title="Add to cart"
                                                                                            onclick="cart.add('60 ');"> <i
                                                                                                class="fa fa-shopping-basket"></i>
                                                                                            <span>Add to cart </span>
                                                                                        </button>
                                                                                        <button type="button"
                                                                                            class="wishlist btn-button"
                                                                                            title="Add to Wish List"
                                                                                            onclick="wishlist.add('60');"><i
                                                                                                class="fa fa-heart"></i><span></span>
                                                                                        </button>
                                                                                        <button type="button"
                                                                                            class="compare btn-button"
                                                                                            title="Compare this Product "
                                                                                            onclick="compare.add('60');"><i
                                                                                                class="fa fa-refresh"></i><span></span>
                                                                                        </button>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>


                                                                <div class="ltabs-item">
                                                                    <div
                                                                        class="item-inner product-thumb transition product-layout">
                                                                        <div class="product-item-container">
                                                                            <div class="left-block left-b">
                                                                                <div class="product-image-container">
                                                                                    <a href="#" target="_self"
                                                                                        title="Drutick lanaeger">
                                                                                        <img src="image/catalog/demo/product/300/sport/2.jpg"
                                                                                            class="img-1 img-responsive"
                                                                                            alt="image">
                                                                                    </a>
                                                                                </div>

                                                                                <!--quickview-->
                                                                                <a class="iframe-link btn-button quickview quickview_handler visible-lg"
                                                                                    href="quickview.html"
                                                                                    title="Quick view"
                                                                                    data-fancybox-type="iframe"><i
                                                                                        class="fa fa-eye"></i><span></span></a>
                                                                                <!--end quickview-->
                                                                            </div>
                                                                            <div class="right-block right-b">

                                                                                <div class="caption">
                                                                                    <h4><a href="#"
                                                                                            title="Ercitation incididunt"
                                                                                            target="_self">Ercitat
                                                                                            incidi</a></h4>
                                                                                    <div class="price"> <span
                                                                                            class="price-new">$180.00</span>
                                                                                    </div>
                                                                                    <div
                                                                                        class="button-group so-quickview cartinfo--static">
                                                                                        <button type="button"
                                                                                            class="addToCart"
                                                                                            title="Add to cart"
                                                                                            onclick="cart.add('60 ');"> <i
                                                                                                class="fa fa-shopping-basket"></i>
                                                                                            <span>Add to cart </span>
                                                                                        </button>
                                                                                        <button type="button"
                                                                                            class="wishlist btn-button"
                                                                                            title="Add to Wish List"
                                                                                            onclick="wishlist.add('60');"><i
                                                                                                class="fa fa-heart"></i><span></span>
                                                                                        </button>
                                                                                        <button type="button"
                                                                                            class="compare btn-button"
                                                                                            title="Compare this Product "
                                                                                            onclick="compare.add('60');"><i
                                                                                                class="fa fa-refresh"></i><span></span>
                                                                                        </button>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div
                                                                        class="item-inner product-thumb transition product-layout">
                                                                        <div class="product-item-container">
                                                                            <div class="left-block left-b">
                                                                                <div class="product-image-container">
                                                                                    <a href="#" target="_self"
                                                                                        title="Fatback picanha">
                                                                                        <img src="image/catalog/demo/product/300/sport/8.jpg"
                                                                                            class="img-1 img-responsive"
                                                                                            alt="image">
                                                                                    </a>
                                                                                </div>
                                                                                <div class="box-label"> <span
                                                                                        class="label-product label-sale">
                                                                                        -13% </span></div>
                                                                                <!--quickview-->
                                                                                <a class="iframe-link btn-button quickview quickview_handler visible-lg"
                                                                                    href="quickview.html"
                                                                                    title="Quick view"
                                                                                    data-fancybox-type="iframe"><i
                                                                                        class="fa fa-eye"></i><span></span></a>
                                                                                <!--end quickview-->
                                                                            </div>
                                                                            <div class="right-block right-b">
                                                                                <div class="caption">
                                                                                    <h4><a href="#"
                                                                                            title="Fatback picanha"
                                                                                            target="_self">Fatback
                                                                                            picanha</a></h4>
                                                                                    <div class="price"> <span
                                                                                            class="price-new">$210.00</span>
                                                                                    </div>
                                                                                    <div
                                                                                        class="button-group so-quickview cartinfo--static">
                                                                                        <button type="button"
                                                                                            class="addToCart"
                                                                                            title="Add to cart"
                                                                                            onclick="cart.add('60 ');"> <i
                                                                                                class="fa fa-shopping-basket"></i>
                                                                                            <span>Add to cart </span>
                                                                                        </button>
                                                                                        <button type="button"
                                                                                            class="wishlist btn-button"
                                                                                            title="Add to Wish List"
                                                                                            onclick="wishlist.add('60');"><i
                                                                                                class="fa fa-heart"></i><span></span>
                                                                                        </button>
                                                                                        <button type="button"
                                                                                            class="compare btn-button"
                                                                                            title="Compare this Product "
                                                                                            onclick="compare.add('60');"><i
                                                                                                class="fa fa-refresh"></i><span></span>
                                                                                        </button>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="ltabs-item">
                                                                    <div
                                                                        class="item-inner product-thumb transition product-layout">
                                                                        <div class="product-item-container">
                                                                            <div class="left-block left-b">

                                                                                <div class="product-image-container">
                                                                                    <a href="#" target="_self"
                                                                                        title="Cupim should">
                                                                                        <img src="image/catalog/demo/product/300/sport/3.jpg"
                                                                                            class="img-responsive"
                                                                                            alt="image">
                                                                                    </a>
                                                                                </div>

                                                                                <!--quickview-->
                                                                                <a class="iframe-link btn-button quickview quickview_handler visible-lg"
                                                                                    href="quickview.html"
                                                                                    title="Quick view"
                                                                                    data-fancybox-type="iframe"><i
                                                                                        class="fa fa-eye"></i><span></span></a>
                                                                                <!--end quickview-->
                                                                            </div>
                                                                            <div class="right-block right-b">

                                                                                <div class="caption">
                                                                                    <h4><a href="#"
                                                                                            title="Cupim should "
                                                                                            target="_self">Cupim should
                                                                                        </a></h4>
                                                                                    <div class="price">
                                                                                        <span class="price-new">$254.00
                                                                                        </span>
                                                                                    </div>
                                                                                    <div
                                                                                        class="button-group so-quickview cartinfo--static">
                                                                                        <button type="button"
                                                                                            class="addToCart"
                                                                                            title="Add to cart"
                                                                                            onclick="cart.add('60 ');"> <i
                                                                                                class="fa fa-shopping-basket"></i>
                                                                                            <span>Add to cart </span>
                                                                                        </button>
                                                                                        <button type="button"
                                                                                            class="wishlist btn-button"
                                                                                            title="Add to Wish List"
                                                                                            onclick="wishlist.add('60');"><i
                                                                                                class="fa fa-heart"></i><span></span>
                                                                                        </button>
                                                                                        <button type="button"
                                                                                            class="compare btn-button"
                                                                                            title="Compare this Product "
                                                                                            onclick="compare.add('60');"><i
                                                                                                class="fa fa-refresh"></i><span></span>
                                                                                        </button>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div
                                                                        class="item-inner product-thumb transition product-layout">
                                                                        <div class="product-item-container">
                                                                            <div class="left-block left-b">

                                                                                <div class="product-image-container">
                                                                                    <a href="#" target="_self"
                                                                                        title="Drutick lanaeger">
                                                                                        <img src="image/catalog/demo/product/300/sport/9.jpg"
                                                                                            class="img-1 img-responsive"
                                                                                            alt="image">
                                                                                    </a>
                                                                                </div>

                                                                                <!--quickview-->
                                                                                <a class="iframe-link btn-button quickview quickview_handler visible-lg"
                                                                                    href="quickview.html"
                                                                                    title="Quick view"
                                                                                    data-fancybox-type="iframe"><i
                                                                                        class="fa fa-eye"></i><span></span></a>
                                                                                <!--end quickview-->
                                                                            </div>
                                                                            <div class="right-block right-b">
                                                                                <div class="caption">
                                                                                    <h4><a href="#"
                                                                                            title="Drutick lanaeger"
                                                                                            target="_self">Drutick
                                                                                            lanaeger</a></h4>
                                                                                    <div class="price"> <span
                                                                                            class="price-new">$80.00</span>
                                                                                    </div>
                                                                                    <div
                                                                                        class="button-group so-quickview cartinfo--static">
                                                                                        <button type="button"
                                                                                            class="addToCart"
                                                                                            title="Add to cart"
                                                                                            onclick="cart.add('60 ');"> <i
                                                                                                class="fa fa-shopping-basket"></i>
                                                                                            <span>Add to cart </span>
                                                                                        </button>
                                                                                        <button type="button"
                                                                                            class="wishlist btn-button"
                                                                                            title="Add to Wish List"
                                                                                            onclick="wishlist.add('60');"><i
                                                                                                class="fa fa-heart"></i><span></span>
                                                                                        </button>
                                                                                        <button type="button"
                                                                                            class="compare btn-button"
                                                                                            title="Compare this Product "
                                                                                            onclick="compare.add('60');"><i
                                                                                                class="fa fa-refresh"></i><span></span>
                                                                                        </button>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="ltabs-item">
                                                                    <div
                                                                        class="item-inner product-thumb transition product-layout">
                                                                        <div class="product-item-container">
                                                                            <div class="left-block left-b">
                                                                                <div class="product-image-container">
                                                                                    <a href="#" target="_self"
                                                                                        title="Jalapeno dolore">
                                                                                        <img src="image/catalog/demo/product/300/sport/4.jpg"
                                                                                            class="img-1 img-responsive"
                                                                                            alt="image">
                                                                                    </a>
                                                                                </div>
                                                                                <div class="box-label"><span
                                                                                        class="label-product label-new">
                                                                                        New </span></div>
                                                                                <!--quickview-->
                                                                                <a class="iframe-link btn-button quickview quickview_handler visible-lg"
                                                                                    href="quickview.html"
                                                                                    title="Quick view"
                                                                                    data-fancybox-type="iframe"><i
                                                                                        class="fa fa-eye"></i><span></span></a>
                                                                                <!--end quickview-->
                                                                            </div>
                                                                            <div class="right-block right-b">

                                                                                <div class="caption">
                                                                                    <h4><a href="#"
                                                                                            title="Jalapeno dolore"
                                                                                            target="_self">Jalapeno
                                                                                            dolore</a></h4>
                                                                                    <div class="price"> <span
                                                                                            class="price-new">$60.00</span>
                                                                                    </div>
                                                                                    <div
                                                                                        class="button-group so-quickview cartinfo--static">
                                                                                        <button type="button"
                                                                                            class="addToCart"
                                                                                            title="Add to cart"
                                                                                            onclick="cart.add('60 ');"> <i
                                                                                                class="fa fa-shopping-basket"></i>
                                                                                            <span>Add to cart </span>
                                                                                        </button>
                                                                                        <button type="button"
                                                                                            class="wishlist btn-button"
                                                                                            title="Add to Wish List"
                                                                                            onclick="wishlist.add('60');"><i
                                                                                                class="fa fa-heart"></i><span></span>
                                                                                        </button>
                                                                                        <button type="button"
                                                                                            class="compare btn-button"
                                                                                            title="Compare this Product "
                                                                                            onclick="compare.add('60');"><i
                                                                                                class="fa fa-refresh"></i><span></span>
                                                                                        </button>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div
                                                                        class="item-inner product-thumb transition product-layout">
                                                                        <div class="product-item-container">
                                                                            <div class="left-block left-b">

                                                                                <div class="product-image-container">
                                                                                    <a href="#" target="_self"
                                                                                        title="Pariatur porking">
                                                                                        <img src="image/catalog/demo/product/300/sport/10.jpg"
                                                                                            class="img-1 img-responsive"
                                                                                            alt="image">
                                                                                    </a>
                                                                                </div>
                                                                                <!--quickview-->
                                                                                <a class="iframe-link btn-button quickview quickview_handler visible-lg"
                                                                                    href="quickview.html"
                                                                                    title="Quick view"
                                                                                    data-fancybox-type="iframe"><i
                                                                                        class="fa fa-eye"></i><span></span></a>
                                                                                <!--end quickview-->
                                                                            </div>
                                                                            <div class="right-block right-b">

                                                                                <div class="caption">
                                                                                    <h4><a href="#"
                                                                                            title="Pariatur porking"
                                                                                            target="_self">Pariatur
                                                                                            porking</a></h4>
                                                                                    <div class="price"> <span
                                                                                            class="price-new">$78.00</span>
                                                                                    </div>
                                                                                    <div
                                                                                        class="button-group so-quickview cartinfo--static">
                                                                                        <button type="button"
                                                                                            class="addToCart"
                                                                                            title="Add to cart"
                                                                                            onclick="cart.add('60 ');"> <i
                                                                                                class="fa fa-shopping-basket"></i>
                                                                                            <span>Add to cart </span>
                                                                                        </button>
                                                                                        <button type="button"
                                                                                            class="wishlist btn-button"
                                                                                            title="Add to Wish List"
                                                                                            onclick="wishlist.add('60');"><i
                                                                                                class="fa fa-heart"></i><span></span>
                                                                                        </button>
                                                                                        <button type="button"
                                                                                            class="compare btn-button"
                                                                                            title="Compare this Product "
                                                                                            onclick="compare.add('60');"><i
                                                                                                class="fa fa-refresh"></i><span></span>
                                                                                        </button>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <!-- item listing tab -->
                                                                <div class="ltabs-item">
                                                                    <div
                                                                        class="item-inner product-thumb transition product-layout">
                                                                        <div class="product-item-container">
                                                                            <div class="left-block left-b">

                                                                                <div class="product-image-container">
                                                                                    <a href="#" target="_self"
                                                                                        title="Chicken swinesha">
                                                                                        <img src="image/catalog/demo/product/300/sport/5.jpg"
                                                                                            class="img-1 img-responsive"
                                                                                            alt="image">
                                                                                    </a>
                                                                                </div>
                                                                                <div class="box-label"> <span
                                                                                        class="label-product label-sale">
                                                                                        -16% </span></div>
                                                                                <!--countdown box-->
                                                                                <div class="countdown_box hidden-xs">
                                                                                    <div class="countdown_inner">
                                                                                        <div class="item-timer">
                                                                                            <div
                                                                                                class="defaultCountdown-30">
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <!--end countdown box-->
                                                                                <!--quickview-->
                                                                                <a class="iframe-link btn-button quickview quickview_handler visible-lg"
                                                                                    href="quickview.html"
                                                                                    title="Quick view"
                                                                                    data-fancybox-type="iframe"><i
                                                                                        class="fa fa-eye"></i><span></span></a>
                                                                                <!--end quickview-->
                                                                            </div>
                                                                            <div class="right-block right-b">
                                                                                <div class="caption">
                                                                                    <h4><a href="#"
                                                                                            title="Bicola sausagop"
                                                                                            target="_self">Bicola
                                                                                            sausagop</a></h4>
                                                                                    <div class="price">
                                                                                        <span class="price-new">$114.00
                                                                                        </span>
                                                                                    </div>
                                                                                    <div
                                                                                        class="button-group so-quickview cartinfo--static">
                                                                                        <button type="button"
                                                                                            class="addToCart"
                                                                                            title="Add to cart"
                                                                                            onclick="cart.add('60 ');"> <i
                                                                                                class="fa fa-shopping-basket"></i>
                                                                                            <span>Add to cart </span>
                                                                                        </button>
                                                                                        <button type="button"
                                                                                            class="wishlist btn-button"
                                                                                            title="Add to Wish List"
                                                                                            onclick="wishlist.add('60');"><i
                                                                                                class="fa fa-heart"></i><span></span>
                                                                                        </button>
                                                                                        <button type="button"
                                                                                            class="compare btn-button"
                                                                                            title="Compare this Product "
                                                                                            onclick="compare.add('60');"><i
                                                                                                class="fa fa-refresh"></i><span></span>
                                                                                        </button>
                                                                                    </div>

                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div
                                                                        class="item-inner product-thumb transition product-layout">
                                                                        <div class="product-item-container">
                                                                            <div class="left-block left-b">
                                                                                <div class="product-image-container">
                                                                                    <a href="#" target="_self"
                                                                                        title="Doenpuis consuat ">
                                                                                        <img src="image/catalog/demo/product/300/sport/11.jpg"
                                                                                            class="img-1 img-responsive"
                                                                                            alt="image">

                                                                                    </a>
                                                                                </div>
                                                                                <div class="box-label"> <span
                                                                                        class="label-product label-sale">
                                                                                        -13% </span><span
                                                                                        class="label-product label-new">
                                                                                        New </span></div>
                                                                                <!--quickview-->
                                                                                <a class="iframe-link btn-button quickview quickview_handler visible-lg"
                                                                                    href="quickview.html"
                                                                                    title="Quick view"
                                                                                    data-fancybox-type="iframe"><i
                                                                                        class="fa fa-eye"></i><span></span></a>
                                                                                <!--end quickview-->
                                                                            </div>
                                                                            <div class="right-block right-b">

                                                                                <div class="caption">
                                                                                    <h4><a href="#"
                                                                                            title="Doenpuis consuat "
                                                                                            target="_self">Doenpuis
                                                                                            consuat </a></h4>
                                                                                    <div class="price"> <span
                                                                                            class="price-new">$66.00</span>
                                                                                        <span
                                                                                            class="price-old">$76.00</span>
                                                                                    </div>
                                                                                    <div
                                                                                        class="button-group so-quickview cartinfo--static">
                                                                                        <button type="button"
                                                                                            class="addToCart"
                                                                                            title="Add to cart"
                                                                                            onclick="cart.add('60 ');"> <i
                                                                                                class="fa fa-shopping-basket"></i>
                                                                                            <span>Add to cart </span>
                                                                                        </button>
                                                                                        <button type="button"
                                                                                            class="wishlist btn-button"
                                                                                            title="Add to Wish List"
                                                                                            onclick="wishlist.add('60');"><i
                                                                                                class="fa fa-heart"></i><span></span>
                                                                                        </button>
                                                                                        <button type="button"
                                                                                            class="compare btn-button"
                                                                                            title="Compare this Product "
                                                                                            onclick="compare.add('60');"><i
                                                                                                class="fa fa-refresh"></i><span></span>
                                                                                        </button>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!-- end item listing tab -->

                                                                <div class="ltabs-item">
                                                                    <div
                                                                        class="item-inner product-thumb transition product-layout">
                                                                        <div class="product-item-container">
                                                                            <div class="left-block left-b">

                                                                                <div class="product-image-container">
                                                                                    <a href="#" target="_self"
                                                                                        title="dolore Jalapeno">
                                                                                        <img src="image/catalog/demo/product/300/sport/6.jpg"
                                                                                            class="img-1 img-responsive"
                                                                                            alt="image">
                                                                                    </a>
                                                                                </div>
                                                                                <!--quickview-->
                                                                                <a class="iframe-link btn-button quickview quickview_handler visible-lg"
                                                                                    href="quickview.html"
                                                                                    title="Quick view"
                                                                                    data-fancybox-type="iframe"><i
                                                                                        class="fa fa-eye"></i><span></span></a>
                                                                                <!--end quickview-->
                                                                            </div>
                                                                            <div class="right-block right-b">

                                                                                <div class="caption">
                                                                                    <h4><a href="#"
                                                                                            title="Dolore Jalapeno"
                                                                                            target="_self">Dolore
                                                                                            Jalapeno</a></h4>
                                                                                    <div class="price"> <span
                                                                                            class="price-new">$98.00</span>
                                                                                    </div>
                                                                                    <div
                                                                                        class="button-group so-quickview cartinfo--static">
                                                                                        <button type="button"
                                                                                            class="addToCart"
                                                                                            title="Add to cart"
                                                                                            onclick="cart.add('60 ');"> <i
                                                                                                class="fa fa-shopping-basket"></i>
                                                                                            <span>Add to cart </span>
                                                                                        </button>
                                                                                        <button type="button"
                                                                                            class="wishlist btn-button"
                                                                                            title="Add to Wish List"
                                                                                            onclick="wishlist.add('60');"><i
                                                                                                class="fa fa-heart"></i><span></span>
                                                                                        </button>
                                                                                        <button type="button"
                                                                                            class="compare btn-button"
                                                                                            title="Compare this Product "
                                                                                            onclick="compare.add('60');"><i
                                                                                                class="fa fa-refresh"></i><span></span>
                                                                                        </button>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div
                                                                        class="item-inner product-thumb transition product-layout">
                                                                        <div class="product-item-container">
                                                                            <div class="left-block left-b">
                                                                                <div class="product-image-container">
                                                                                    <a href="#" target="_self"
                                                                                        title="Mapicola incididuv">
                                                                                        <img src="image/catalog/demo/product/300/sport/12.jpg"
                                                                                            class="img-1 img-responsive"
                                                                                            alt="image">
                                                                                    </a>
                                                                                </div>
                                                                                <div class="box-label"><span
                                                                                        class="label-product label-new">
                                                                                        New </span></div>
                                                                                <!--quickview-->
                                                                                <a class="iframe-link btn-button quickview quickview_handler visible-lg"
                                                                                    href="quickview.html"
                                                                                    title="Quick view"
                                                                                    data-fancybox-type="iframe"><i
                                                                                        class="fa fa-eye"></i><span></span></a>
                                                                                <!--end quickview-->
                                                                            </div>
                                                                            <div class="right-block right-b">

                                                                                <div class="caption">
                                                                                    <h4><a href="#"
                                                                                            title="Mapicola incididuv"
                                                                                            target="_self">Mapicola
                                                                                            incididuv</a></h4>
                                                                                    <div class="price"> <span
                                                                                            class="price-new">$180.00</span>
                                                                                    </div>
                                                                                    <div
                                                                                        class="button-group so-quickview cartinfo--static">
                                                                                        <button type="button"
                                                                                            class="addToCart"
                                                                                            title="Add to cart"
                                                                                            onclick="cart.add('60 ');"> <i
                                                                                                class="fa fa-shopping-basket"></i>
                                                                                            <span>Add to cart </span>
                                                                                        </button>
                                                                                        <button type="button"
                                                                                            class="wishlist btn-button"
                                                                                            title="Add to Wish List"
                                                                                            onclick="wishlist.add('60');"><i
                                                                                                class="fa fa-heart"></i><span></span>
                                                                                        </button>
                                                                                        <button type="button"
                                                                                            class="compare btn-button"
                                                                                            title="Compare this Product "
                                                                                            onclick="compare.add('60');"><i
                                                                                                class="fa fa-refresh"></i><span></span>
                                                                                        </button>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                        <div class="ltabs-items items-category-18 grid" data-total="16">
                                                            <div class="ltabs-loading"></div>

                                                        </div>
                                                        <div class="ltabs-items  items-category-19 grid"
                                                            data-total="16">
                                                            <div class="ltabs-loading"></div>
                                                        </div>
                                                        <!--End Items-->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end Listing tabs -->
                            </div>
                            <div class="block block_6">
                                <div class="banners">
                                    <div>
                                        <a href="#">
                                            <img src="image/catalog/demo/banners/home1/9.jpg" alt="Image Client">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="block block_8">
                                <div class="module so-latest-blog custom-ourblog clearfix default-nav">
                                    <h3 class="modtitle"><span>from our blog</span></h3>
                                    <div class="modcontent clearfix">
                                        <div class="so-blog-external">
                                            <div class="yt-content-slider blog-external" data-autoplay="no"
                                                data-autoheight="no" data-delay="4" data-speed="0.6"
                                                data-margin="30" data-items_column0="3" data-items_column1="3"
                                                data-items_column2="2" data-items_column3="2" data-items_column4="1"
                                                data-arrows="no" data-pagination="yes" data-lazyload="yes"
                                                data-loop="no" data-hoverpause="yes">

                                                <div class="media">
                                                    <div class="item">
                                                        <div class="content-img">
                                                            <a href="{{ route('blog-detail') }}" target="_self">
                                                                <img src="image/catalog/blog/370x256/3.jpg"
                                                                    alt="Kire tuma feugiat" />
                                                            </a>
                                                            <div class="entry-date font-ct">
                                                                <div class="day-time">14</div>
                                                                <div class="month-time">Jan</div>
                                                            </div>
                                                        </div>
                                                        <div class="content-detail">
                                                            <div class="media-content">
                                                                <h4 class="media-heading font-ct head-item">
                                                                    <a href="{{ route('blog-detail') }}"
                                                                        title="Kire tuma feugiat" target="_self">Kire
                                                                        tuma feugiat ipsum dolor</a>
                                                                </h4>
                                                                <div class="media-subcontent">
                                                                    <span class="media-author"><i
                                                                            class="fa fa-book"></i>Ytcdemo</span>
                                                                    <span class="media-comment"><i
                                                                            class="fa fa-comments"></i>2
                                                                        Comments</span>
                                                                    <span class="media-view"><i class="fa fa-eye"></i>1
                                                                        View</span>
                                                                </div>
                                                                <div class="readmore">
                                                                    <a href="{{ route('blog-detail') }}"
                                                                        target="_self">Read
                                                                        more</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="media">
                                                    <div class="item">
                                                        <div class="content-img">
                                                            <a href="{{ route('blog-detail') }}" target="_self">
                                                                <img src="image/catalog/blog/370x256/4.jpg"
                                                                    alt="Kire tuma demons vel eum iriure" />
                                                            </a>
                                                            <div class="entry-date font-ct">
                                                                <div class="day-time">12</div>
                                                                <div class="month-time">Nov</div>
                                                            </div>
                                                        </div>
                                                        <div class="content-detail">
                                                            <div class="media-content">
                                                                <h4 class="media-heading font-ct head-item">
                                                                    <a href="{{ route('blog-detail') }}"
                                                                        title="Kire tuma demons vel eum iriure"
                                                                        target="_self">Kire tuma demons vel eum iriure</a>
                                                                </h4>
                                                                <div class="media-subcontent">
                                                                    <span class="media-author"><i
                                                                            class="fa fa-book"></i>Ytcdemo</span>
                                                                    <span class="media-comment"><i
                                                                            class="fa fa-comments"></i>2
                                                                        Comments</span>
                                                                    <span class="media-view"><i class="fa fa-eye"></i>1
                                                                        View</span>
                                                                </div>
                                                                <div class="readmore">
                                                                    <a href="{{ route('blog-detail') }}"
                                                                        target="_self">Read
                                                                        more</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="media">
                                                    <div class="item">
                                                        <div class="content-img">
                                                            <a href="{{ route('blog-detail') }}" target="_self">
                                                                <img src="image/catalog/blog/370x256/5.jpg"
                                                                    alt="minim veniam  justo duo dolores" />
                                                            </a>
                                                            <div class="entry-date font-ct">
                                                                <div class="day-time">10</div>
                                                                <div class="month-time">Feb</div>
                                                            </div>
                                                        </div>
                                                        <div class="content-detail">
                                                            <div class="media-content">
                                                                <h4 class="media-heading font-ct head-item">
                                                                    <a href="{{ route('blog-detail') }}"
                                                                        title="Minim veniam  justo duo dolores"
                                                                        target="_self">Lorem ipsum dolor sit amet</a>
                                                                </h4>
                                                                <div class="media-subcontent">
                                                                    <span class="media-author"><i
                                                                            class="fa fa-book"></i>Ytcdemo</span>
                                                                    <span class="media-comment"><i
                                                                            class="fa fa-comments"></i>2
                                                                        Comments</span>
                                                                    <span class="media-view"><i class="fa fa-eye"></i>1
                                                                        View</span>
                                                                </div>
                                                                <div class="readmore">
                                                                    <a href="{{ route('blog-detail') }}"
                                                                        target="_self">Read
                                                                        more</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="media">
                                                    <div class="item">
                                                        <div class="content-img">
                                                            <a href="{{ route('blog-detail') }}" target="_self">
                                                                <img src="image/catalog/blog/370x256/6.jpg"
                                                                    alt="Duis autem vel eum tempor inviduntt" />
                                                            </a>
                                                            <div class="entry-date font-ct">
                                                                <div class="day-time">10</div>
                                                                <div class="month-time">Nov</div>
                                                            </div>
                                                        </div>
                                                        <div class="content-detail">
                                                            <div class="media-content">
                                                                <h4 class="media-heading font-ct head-item">
                                                                    <a href="{{ route('blog-detail') }}"
                                                                        title="Duis autem vel eum tempor invidunt"
                                                                        target="_self">Duis autem vel eum tempor
                                                                        invidunt</a>
                                                                </h4>
                                                                <div class="media-subcontent">
                                                                    <span class="media-author"><i
                                                                            class="fa fa-book"></i>Ytcdemo</span>
                                                                    <span class="media-comment"><i
                                                                            class="fa fa-comments"></i>2
                                                                        Comments</span>
                                                                    <span class="media-view"><i class="fa fa-eye"></i>1
                                                                        View</span>
                                                                </div>
                                                                <div class="readmore">
                                                                    <a href="{{ route('blog-detail') }}"
                                                                        target="_self">Read
                                                                        more</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- //Main Container -->

            {{-- <div class="model-popup">
    <div id="container-module-newletter" class="hidden-md hidden-sm hidden-xs">
        <div class="so_newletter_custom_popup_bg popup_bg"></div>
        <div class="module main-newsleter-popup so_newletter_custom_popup so_newletter_oca_popup"
            id="so_newletter_custom_popup">
            <div class="so-custom-popup so-custom-oca-popup"
                style="width: 850px; background: url('image/catalog/banners/newletter-bg.jpg') no-repeat white;  ">
                <div class="modcontent">
                    <div class="oca_popup" id="test-popup">
                        <div class="popup-content">
                            <p class="newsletter_promo">Daily Promotion</p>
                            <div class="popup-title">SIGN UP FOR NEWSLETTER </div>
                            <form method="post" name="signup" class="form-group signup">
                                <div class="input-control">
                                    <div class="email"> <input type="email" placeholder="Your email address..."
                                            value="" class="form-control" id="txtemail" name="txtemail">
                                    </div>
                                    <button class="btn btn-default" type="submit"
                                        onclick="return subscribe_newsletter();" name="submit">Subscribe
                                    </button>
                                </div>
                            </form>
                            <label class="hidden-popup"> <input type="checkbox" value="1" name="hidden-popup">
                                <span class="inline">&nbsp;&nbsp;Don't show this popup
                                    again</span> </label>
                        </div>
                    </div>
                </div>
                <!--/.modcontent-->
                <button title="Close" type="button" class="popup-close">×</button>
            </div>
        </div>
    </div>
</div> --}}
            @include('frontpage.frontpage-footer')
        </div>
    </div>
@endsection

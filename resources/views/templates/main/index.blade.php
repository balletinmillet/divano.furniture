@extends(config('view.template.route') . "layouts.site")
@section('title', "Divano - Furniture")
@section('content')

    <section class="header-content">

        <h2 class="d-none">Slider element</h2>

        <div class="container-fluid">

            <div class="owl-slider owl-carousel owl-theme" data-autoplay="true">

                <!--Slide item-->

                <div class="item d-flex align-items-center" style="background-image:url(assets/images/slide-1.jpg)">
                    <div class="container">
                        <div class="caption">
                            <div class="animated" data-start="fadeInUp">
                                <div class="promo pt-3">
                                    <div class="title title-sm p-0">Sofa Grace</div>
                                </div>
                            </div>
                            <div class="animated" data-start="fadeInUp">
                                Score new arrivals from latest items
                                <br />
                                Multipurpose eCommerce template ready
                            </div>
                            <div class="animated" data-start="fadeInUp">
                                <div class="pt-3">
                                    <a href="#" target="_blank" class="btn btn-outline-warning">Buy now</a>
                                    <a href="#" target="_blank" class="btn btn-outline-light"> Get first discount</a>
                                </div>
                            </div>
                            <div class="animated" data-start="fadeInUp">
                                <div class="promo pt-5">
                                    <div class="h6 p-0 m-0">Get special price</div>
                                    <div class="price">
                                        <span>$1499,99</span>
                                        <span>3499,99</span>
                                    </div>
                                    <small class="d-none d-sm-block">** Product prices with discount are available until the end of stock </small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--Slide item-->

                <div class="item d-flex align-items-center" style="background-image:url(assets/images/slide-2.jpg)">
                    <div class="container">
                        <div class="caption">
                            <div class="animated" data-start="fadeInUp">
                                <div class="big-text big-text-sm">
                                    <span>Save now </span>
                                    <span>50%</span>
                                    <span>on new kitchen</span>

                                    <div>
                                        <a href="#" target="_blank" class="btn btn-info btn-block">Shop now</a>
                                    </div>
                                </div>
                            </div>
                            <div class="animated d-none" data-start="fadeInUp">
                                <a href="#" target="_blank" class="btn btn-info">Buy this template</a>
                                <a href="#" target="_blank" class="btn btn-outline-light"> Get first discount</a>
                            </div>

                            <div class="animated" data-start="fadeInUp">
                                <div class="promo pt-5">
                                    <div class="badge badge-secondary">New arrival</div>
                                    <div class="h2 p-0 mt-1">Kitchen Moderna</div>
                                    <div class="price">
                                        <span>$7299,99</span>
                                        <span>8399,99</span>
                                    </div>
                                    <small class="d-none d-sm-block">** Product prices with discount are available until the end of stock </small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--Slide item-->

                <div class="item d-flex align-items-center" style="background-image:url(assets/images/slide-3.jpg)">
                    <div class="container">
                        <div class="caption">
                            <div class="promo text-center">
                                <div class="animated" data-start="fadeInUp">
                                    <div class="title title-sm p-0">Bathroom Furniture</div>
                                </div>
                                <div class="animated" data-start="fadeInUp">
                                    Score new arrivals from latest items
                                    <br />
                                    Multipurpose eCommerce template ready
                                </div>
                                <div class="animated" data-start="fadeInUp">
                                    <a href="#" target="_blank" class="btn btn-light">New collection</a>
                                    <a href="#" target="_blank" class="btn btn-outline-light"> Get first discount</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div> <!--/owl-slider-->
        </div>
    </section>

    <!-- ========================  Featured categories ======================== -->

    <section class="blog blog-block">

        <!--Header-->

        <header>
            <div class="container">
                <h2 class="title">Featured categories</h2>
                <div class="text">
                    <p>We just keep things minimal. <a href="category.html" class="btn btn-main">View more</a></p>
                </div>
            </div>
        </header>

        <!--Content-->

        <div class="container">

            <div class="scroll-wrapper">

                <div class="row scroll text-center">

                    <!--Item-->

                    <div class="col-md-4">
                        <article data-3d>
                            <a href="products-grid.html">
                                <div class="image">
                                    <img src="assets/images/product-1.jpg" alt="" />
                                </div>
                                <div class="entry entry-block">
                                    <div class="label">2020 Collection</div>
                                    <div class="title">
                                        <h2 class="h4">Beedroms</h2>
                                    </div>
                                    <div class="description d-none d-sm-block">
                                        <p>
                                            Top picks four your desire
                                        </p>
                                    </div>
                                </div>
                                <div class="show-more">
                                    <span class="btn btn-clean">Shop now</span>
                                </div>
                            </a>
                        </article>
                    </div>

                    <!--Item-->

                    <div class="col-md-4">
                        <article data-3d>
                            <a href="products-grid.html">
                                <div class="image">
                                    <img src="assets/images/product-2.jpg" alt="" />
                                </div>
                                <div class="entry entry-block">
                                    <div class="label">Modern design</div>
                                    <div class="title">
                                        <h2 class="h4">Kitchens</h2>
                                    </div>
                                    <div class="description d-none d-sm-block">
                                        <p>
                                            Explore popular devices
                                        </p>
                                    </div>
                                </div>
                                <div class="show-more">
                                    <span class="btn btn-clean">Shop now</span>
                                </div>
                            </a>
                        </article>
                    </div>

                    <!--Item-->

                    <div class="col-md-4">
                        <article data-3d>
                            <a href="products-grid.html">
                                <div class="image">
                                    <img src="assets/images/product-3.jpg" alt="" />
                                </div>
                                <div class="entry entry-block">
                                    <div class="label">New discounts</div>
                                    <div class="title">
                                        <h2 class="h4">Living rooms</h2>
                                    </div>
                                    <div class="description d-none d-sm-block">
                                        <p>
                                            Available for quick shipping
                                        </p>
                                    </div>
                                </div>
                                <div class="show-more">
                                    <span class="btn btn-clean">Shop now</span>
                                </div>
                            </a>
                        </article>
                    </div>

                </div><!--/row-->
            </div>

        </div><!--/container-->

    </section>

    <!-- ========================  Popular products  ======================== -->

    <section class="products">

        <!--Header-->

        <header>
            <div class="container">
                <h2 class="title">Popular products</h2>
                <div class="text">
                    <p>
                        Find your perfect match <a href="products-grid.html" class="btn btn-main">View all</a>
                    </p>
                </div>
            </div>
        </header>

        <!--Content-->

        <div class="container">

            <div class="row">

                <!--Product item-->

                <div class="col-6 col-lg-4">
                    <article>
                        <div class="info">
                                <span class="add-favorite">
                                    <a href="javascript:void(0);" data-title="Add to favorites" data-title-added="Added to favorites list">
                                        <i class="icon icon-heart"></i>
                                    </a>
                                </span>
                            <span>
                                    <a href="#productid1" class="mfp-open" data-title="Quick wiew">
                                        <i class="icon icon-eye"></i>
                                    </a>
                                </span>
                        </div>
                        <div class="btn btn-add">
                            <i class="icon icon-cart"></i>
                        </div>
                        <div class="figure-grid">
                            <div class="image">
                                <a href="product.html">
                                    <img src="assets/images/product-10.jpg" alt="" />
                                </a>
                            </div>
                            <div class="text">
                                <h2 class="title h4">
                                    <a href="product.html">Anna</a>
                                </h2>
                                <sub>$ 159,-</sub>
                                <sup>$ 139,-</sup>
                                <span class="description clearfix">
                                        Gubergren amet dolor ea diam takimata consetetur facilisis blandit et aliquyam
                                        lorem ea duo labore diam sit et consetetur nulla
                                    </span>
                            </div>
                        </div>
                    </article>
                </div>

                <!--Product item-->

                <div class="col-6 col-lg-4">
                    <article>
                        <div class="info">
                                <span class="add-favorite">
                                    <a href="javascript:void(0);" data-title="Add to favorites" data-title-added="Added to favorites list">
                                        <i class="icon icon-heart"></i>
                                    </a>
                                </span>
                            <span>
                                    <a href="#productid1" class="mfp-open" data-title="Quick wiew">
                                        <i class="icon icon-eye"></i>
                                    </a>
                                </span>
                        </div>
                        <div class="btn btn-add">
                            <i class="icon icon-cart"></i>
                        </div>
                        <div class="figure-grid">
                            <span class="badge badge-warning">-20%</span>
                            <div class="image">
                                <a href="product.html">
                                    <img src="assets/images/product-9.jpg" alt="" />
                                </a>
                            </div>
                            <div class="text">
                                <h2 class="title h4">
                                    <a href="product.html">Lucy</a>
                                </h2>
                                <sub>$ 319,-</sub>
                                <sup>$ 219,-</sup>
                                <span class="description clearfix">
                                        Gubergren amet dolor ea diam takimata consetetur facilisis blandit et aliquyam
                                        lorem ea duo labore diam sit et consetetur nulla
                                    </span>
                            </div>
                        </div>
                    </article>
                </div>

                <!--Product item-->

                <div class="col-6 col-lg-4">
                    <article>
                        <div class="info">
                                <span class="add-favorite">
                                    <a href="javascript:void(0);" data-title="Add to favorites" data-title-added="Added to favorites list">
                                        <i class="icon icon-heart"></i>
                                    </a>
                                </span>
                            <span>
                                    <a href="#productid1" class="mfp-open" data-title="Quick wiew">
                                        <i class="icon icon-eye"></i>
                                    </a>
                                </span>
                        </div>
                        <div class="btn btn-add">
                            <i class="icon icon-cart"></i>
                        </div>
                        <div class="figure-grid">
                            <span class="badge badge-info">New arrival</span>
                            <div class="image">
                                <a href="product.html">
                                    <img src="assets/images/product-8.jpg" alt="" />
                                </a>
                            </div>
                            <div class="text">
                                <h2 class="title h4">
                                    <a href="product.html">Ella</a>
                                </h2>
                                <sub>$ 899,-</sub>
                                <sup>$ 750,-</sup>
                                <span class="description clearfix">
                                        Gubergren amet dolor ea diam takimata consetetur facilisis blandit et aliquyam
                                        lorem ea duo labore diam sit et consetetur nulla
                                    </span>
                            </div>
                        </div>
                    </article>
                </div>

                <!--Product item-->

                <div class="col-6 col-lg-4">
                    <article>
                        <div class="info">
                                <span class="add-favorite added">
                                    <a href="javascript:void(0);" data-title="Add to favorites" data-title-added="Added to favorites list">
                                        <i class="icon icon-heart"></i>
                                    </a>
                                </span>
                            <span>
                                    <a href="#productid1" class="mfp-open" data-title="Quick wiew">
                                        <i class="icon icon-eye"></i>
                                    </a>
                                </span>
                        </div>
                        <div class="btn btn-add">
                            <i class="icon icon-cart"></i>
                        </div>
                        <div class="figure-grid">
                            <div class="image">
                                <a href="product.html">
                                    <img src="assets/images/product-7.jpg" alt="" />
                                </a>
                            </div>
                            <div class="text">
                                <h2 class="title h4">
                                    <a href="product.html">Grace</a>
                                </h2>
                                <sub>$ 699,-</sub>
                                <sup>$ 499,-</sup>
                                <span class="description clearfix">
                                        Gubergren amet dolor ea diam takimata consetetur facilisis blandit et aliquyam
                                        lorem ea duo labore diam sit et consetetur nulla
                                    </span>
                            </div>
                        </div>
                    </article>
                </div>

                <!--Product item-->

                <div class="col-6 col-lg-4">
                    <article>
                        <div class="info">
                                <span class="add-favorite">
                                    <a href="javascript:void(0);" data-title="Add to favorites" data-title-added="Added to favorites list">
                                        <i class="icon icon-heart"></i>
                                    </a>
                                </span>
                            <span>
                                    <a href="#productid1" class="mfp-open" data-title="Quick wiew">
                                        <i class="icon icon-eye"></i>
                                    </a>
                                </span>
                        </div>
                        <div class="btn btn-add">
                            <i class="icon icon-cart"></i>
                        </div>
                        <div class="figure-grid">
                            <div class="image">
                                <a href="product.html">
                                    <img src="assets/images/product-6.jpg" alt="" />
                                </a>
                            </div>
                            <div class="text">
                                <h2 class="title h4">
                                    <a href="product.html">Nora</a>
                                </h2>
                                <sub>$ 299,-</sub>
                                <sup>$ 199,-</sup>
                                <span class="description clearfix">
                                        Gubergren amet dolor ea diam takimata consetetur facilisis blandit et aliquyam
                                        lorem ea duo labore diam sit et consetetur nulla
                                    </span>
                            </div>
                        </div>
                    </article>
                </div>

                <!--Product item-->

                <div class="col-6 col-lg-4">
                    <article>
                        <div class="info">
                                <span class="add-favorite">
                                    <a href="javascript:void(0);" data-title="Add to favorites" data-title-added="Added to favorites list">
                                        <i class="icon icon-heart"></i>
                                    </a>
                                </span>
                            <span>
                                    <a href="#productid1" class="mfp-open" data-title="Quick wiew">
                                        <i class="icon icon-eye"></i>
                                    </a>
                                </span>
                        </div>
                        <div class="btn btn-add">
                            <i class="icon icon-cart"></i>
                        </div>
                        <div class="figure-grid">
                            <div class="image">
                                <a href="product.html">
                                    <img src="assets/images/product-5.jpg" alt="" />
                                </a>
                            </div>
                            <div class="text">
                                <h2 class="title h4">
                                    <a href="product.html">Sophie</a>
                                </h2>
                                <sub>$ 699,-</sub>
                                <sup>$ 499,-</sup>
                                <span class="description clearfix">
                                        Gubergren amet dolor ea diam takimata consetetur facilisis blandit et aliquyam
                                        lorem ea duo labore diam sit et consetetur nulla
                                    </span>
                            </div>
                        </div>
                    </article>
                </div>

            </div> <!--/row-->

        </div>

    </section>

    <!-- ========================  Product popup ======================== -->

    <div class="popup-main mfp-hide" id="productid1">

        <!--Product popup-->

        <div class="product">

            <!--Popup-title -->

            <div class="popup-title">
                <div class="h3 title">
                    Modern sofa
                    <small>product category</small>
                </div>
            </div>

            <!--Product gallery-->

            <div class="owl-product-gallery owl-theme owl-carousel">
                <img src="assets/images/item-1.jpg" alt="" width="640" />
                <img src="assets/images/item-2.jpg" alt="" width="640" />
            </div>

            <!--Popup info-->

            <div class="popup-content">
                <div class="product-info-wrapper">
                    <div class="row">

                        <!--Left side-->

                        <div class="col-sm-6">
                            <div class="info-box">
                                <strong>Maifacturer</strong>
                                <span>Brand name</span>
                            </div>
                            <div class="info-box">
                                <strong>Materials</strong>
                                <span>Wood, Leather, Acrylic</span>
                            </div>
                            <div class="info-box">
                                <strong>Availability</strong>
                                <span><i class="fa fa-check-square-o"></i> in stock</span>
                            </div>
                        </div>

                        <!--Right side-->

                        <div class="col-sm-6">
                            <div class="info-box">
                                <strong>Available Colors</strong>
                                <div class="product-colors clearfix">
                                    <span class="color-btn color-btn-red"></span>
                                    <span class="color-btn color-btn-blue checked"></span>
                                    <span class="color-btn color-btn-green"></span>
                                    <span class="color-btn color-btn-gray"></span>
                                    <span class="color-btn color-btn-biege"></span>
                                </div>
                            </div>
                            <div class="info-box">
                                <strong>Choose size</strong>
                                <div class="product-colors clearfix">
                                    <span class="color-btn color-btn-biege">S</span>
                                    <span class="color-btn color-btn-biege checked">M</span>
                                    <span class="color-btn color-btn-biege">XL</span>
                                    <span class="color-btn color-btn-biege">XXL</span>
                                </div>
                            </div>
                        </div>

                    </div> <!--/row-->
                </div> <!--/product-info-wrapper-->
            </div> <!--/popup-content-->

            <div class="popup-table">
                <div class="popup-cell">
                    <div class="price">
                        <span class="h3">$ 1999,00 <small>$ 2999,00</small></span>
                    </div>
                </div>
                <div class="popup-cell">
                    <div class="popup-buttons">
                        <a href="product.html"><span class="icon icon-eye"></span> <span class="hidden-xs">View more</span></a>
                        <a href="javascript:void(0);"><span class="icon icon-cart"></span> <span class="hidden-xs">Buy</span></a>
                    </div>
                </div>
            </div>

        </div> <!--/product-->
    </div>

    <!-- ========================  Cards ======================== -->

    <section class="cards">

        <!--Header-->

        <header>
            <div class="container">
                <h2 class="title">Interior inspiration</h2>
                <div class="text">
                    <p>
                        Create an inviting space for yourself and family
                    </p>
                </div>
            </div>
        </header>

        <!--Content-->

        <div class="container-fluid">

            <div class="row">

                <!--Item-->

                <div class="col-lg-8">
                    <figure>
                        <figcaption style="background-image:url(assets/images/box-1.jpg)">
                            <img src="assets/images/box-1.jpg" alt="" />
                        </figcaption>
                        <a href="#interiorId1" class="btn btn-clean">Open up for easy living</a>
                    </figure>
                </div>

                <!--Item-->

                <div class="col-lg-4">
                    <figure>
                        <figcaption style="background-image:url(assets/images/box-2.jpg)">
                            <img src="assets/images/box-2.jpg" alt="" />
                        </figcaption>
                        <a href="#interiorId1" class="btn btn-clean">Traditional looks</a>
                    </figure>
                </div>

                <!--Item-->

                <div class="col-lg-4">
                    <figure>
                        <figcaption style="background-image:url(assets/images/box-3.jpg)">
                            <img src="assets/images/box-3.jpg" alt="" />
                        </figcaption>
                        <a href="#interiorId1" class="btn btn-clean">Sleek and sustainable</a>
                    </figure>
                </div>

                <!--Item-->

                <div class="col-lg-4">
                    <figure>
                        <figcaption style="background-image:url(assets/images/box-4.jpg)">
                            <img src="assets/images/box-4.jpg" alt="" />
                        </figcaption>
                        <a href="#interiorId1" class="btn btn-clean">Compact living</a>
                    </figure>
                </div>

                <!--Item-->

                <div class="col-lg-4">
                    <figure>
                        <figcaption style="background-image:url(assets/images/box-5.jpg)">
                            <img src="assets/images/box-5.jpg" alt="" />
                        </figcaption>
                        <a href="#interiorId1" class="btn btn-clean">Classic design</a>
                    </figure>
                </div>



            </div> <!--/row-->

        </div> <!--/container-fluid-->

    </section>

    <!-- ========================  Blog ======================== -->

    <section class="blog blog-widget blog-animated">

        <!--Header-->

        <header>
            <div class="container">
                <h2 class="h2 title">Design stories</h2>
                <div class="text">
                    <p>
                        Explore and unfold thoughts <a href="blog-grid.html" class="btn btn-main">View all</a>
                    </p>
                </div>
            </div>
        </header>

        <!--Content-->

        <div class="container">

            <div class="row">

                <!--Blog item-->

                <div class="col-md-12 col-lg-4">
                    <article>
                        <a href="article.html" class="blog-link">
                            <div class="image" style="background-image:url(assets/images/product-1.jpg)">
                                <img src="assets/images/product-1.jpg" alt="" />
                            </div>
                            <div class="entry entry-table">
                                <div class="date-wrapper">
                                    <div class="date">
                                        <span>Sep</span>
                                        <strong>08</strong>
                                        <span>2019</span>
                                    </div>
                                </div>
                                <div class="title">
                                    <h2 class="h5">Home Organizers that Add Color to Your Space</h2>
                                </div>
                            </div>
                        </a>
                    </article>
                </div>

                <!--Blog item-->

                <div class="col-md-12 col-lg-4">
                    <article>
                        <a href="article.html" class="blog-link">
                            <div class="image" style="background-image:url(assets/images/product-2.jpg)">
                                <img src="assets/images/product-2.jpg" alt="" />
                            </div>
                            <div class="entry entry-table">
                                <div class="date-wrapper">
                                    <div class="date">
                                        <span>Sep</span>
                                        <strong>04</strong>
                                        <span>2019</span>
                                    </div>
                                </div>
                                <div class="title">
                                    <h2 class="h5">How to use room dividers in small spaces</h2>
                                </div>
                            </div>
                        </a>
                    </article>
                </div>

                <!--Blog item-->

                <div class="col-md-12 col-lg-4">
                    <article>
                        <a href="article.html" class="blog-link">
                            <div class="image" style="background-image:url(assets/images/product-3.jpg)">
                                <img src="assets/images/product-3.jpg" alt="" />
                            </div>
                            <div class="entry entry-table">
                                <div class="date-wrapper">
                                    <div class="date">
                                        <span>Sep</span>
                                        <strong>01</strong>
                                        <span>2019</span>
                                    </div>
                                </div>
                                <div class="title">
                                    <h2 class="h5">How to pick a garden color palette</h2>
                                </div>
                            </div>
                        </a>
                    </article>
                </div>

            </div> <!--/row-->

        </div> <!--/container-->

    </section>

    <!-- ========================  Newsletter ======================== -->

    <section class="banner">

        <div class="container-fluid">

            <div class="banner-image" style="background-image:url(assets/images/gallery-1.jpg)">
                <!--Header-->

                <header>
                    <div class="container">

                        <h2 class="h2 title">Stay in touch!</h2>
                        <div class="text">
                            <p>Be first to know about all new interior features!</p>
                        </div>

                    </div>
                </header>

                <!--Content-->

                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-4">
                            <input type="email" class="form-control" name="name" value="" placeholder="Enter your e-mail">
                        </div>
                        <div class="col-md-4">
                            <a href="#" class="btn btn-clean">Subscribe now</a>
                        </div>
                    </div>
                </div>
            </div>

        </div> <!--/container-fluid-->

    </section>

    <!-- ========================  Instagram ======================== -->

    <section class="instagram">

        <!--Header-->

        <header>
            <h2 class="h6 title">
                <i class="fa fa-instagram fa-3x"></i> <br>
                #DivanoFurniture
            </h2>
        </header>

        <!--Gallery-->

        <div class="container">

            <div class="gallery clearfix">
                <a class="item" href="#">
                    <img src="assets/images/product-1.jpg" alt="Alternate Text">
                </a>
                <a class="item" href="#">
                    <img src="assets/images/product-2.jpg" alt="Alternate Text">
                </a>
                <a class="item" href="#">
                    <img src="assets/images/product-3.jpg" alt="Alternate Text">
                </a>
                <a class="item" href="#">
                    <img src="assets/images/product-4.jpg" alt="Alternate Text">
                </a>
                <a class="item" href="#">
                    <img src="assets/images/product-5.jpg" alt="Alternate Text">
                </a>
                <a class="item" href="#">
                    <img src="assets/images/product-6.jpg" alt="Alternate Text">
                </a>
            </div> <!--/gallery-->

        </div>

    </section>

    <!-- ========================  Benefits ======================== -->

    <section class="benefits">

        <!--Header-->

        <header class="d-none">
            <div class="container">
                <h2 class="h2 title">Benefits</h2>
            </div>
        </header>

        <!--Header-->

        <div class="container">

            <div class="row">

                <!--Icon-->

                <div class="col-6 col-lg-3" data-tilt>
                    <figure>
                        <div class="icon"><i class="icon icon-gift"></i></div>
                        <figcaption>
                                <span>
                                    <strong>Get your gift</strong> <br />
                                    <small>Are you a new customer?</small>
                                </span>
                        </figcaption>
                    </figure>
                </div>

                <!--Icon-->

                <div class="col-6 col-lg-3" data-tilt>
                    <figure>
                        <div class="icon"><i class="icon icon-rocket"></i></div>
                        <figcaption>
                                <span>
                                    <strong>Fast delivery</strong> <br />
                                    <small>We're shipping all over the world</small>
                                </span>
                        </figcaption>
                    </figure>
                </div>

                <!--Icon-->

                <div class="col-6 col-lg-3" data-tilt>
                    <figure>
                        <div class="icon"><i class="icon icon-history"></i></div>
                        <figcaption>
                                <span>
                                    <strong>Money-back guarantee</strong> <br />
                                    <small>30 day money back gurantee</small>
                                </span>
                        </figcaption>
                    </figure>
                </div>

                <!--Icon-->

                <div class="col-6 col-lg-3" data-tilt>
                    <figure>
                        <div class="icon"><i class="icon icon-diamond"></i></div>
                        <figcaption>
                                <span>
                                    <strong>VIP discounts</strong> <br />
                                    <small>Become VIP member</small>
                                </span>
                        </figcaption>
                    </figure>
                </div>
            </div> <!--/row-->

        </div> <!--/container-->

    </section>

@endsection

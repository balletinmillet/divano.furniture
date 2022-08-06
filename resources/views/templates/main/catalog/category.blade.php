@extends(config('view.template.route') . "layouts.site")
@section('title', "Категория " . $category->name)
@section('content')
<section class="products pt-0">

    <!--Header-->

    <header>
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Library</a></li>
                <li class="breadcrumb-item active" aria-current="page">Data</li>
            </ol>
            <h2 class="title">Product grid category</h2>
            <div class="text">
                <p>Suspendisse scelerisque odio eu felis eleifend</p>
            </div>
        </div>
    </header>

    <!-- ======================== Icons ======================== -->

    <section class="owl-icons-wrapper d-none">

        <header class="d-none">
            <h2>Product icons</h2>
        </header>

        <div class="container">

            <div class="owl-icons owl-carousel owl-theme">

                <a href="#">
                    <figure>
                        <div class="image">
                            <img src="assets/icons/icon-sofa.svg" alt="Alternate Text" />
                        </div>
                        <figcaption>Sofa</figcaption>
                    </figure>
                </a>

                <a href="#">
                    <figure>
                        <div class="image">
                            <img src="assets/icons/icon-armchair.svg" alt="Alternate Text" />
                        </div>
                        <figcaption>Armchairs</figcaption>
                    </figure>
                </a>

                <a href="#">
                    <figure>
                        <div class="image">
                            <img src="assets/icons/icon-chair.svg" alt="Alternate Text" />
                        </div>
                        <figcaption>Chairs</figcaption>
                    </figure>
                </a>

                <a href="#">
                    <figure>
                        <div class="image">
                            <img src="assets/icons/icon-dining.svg" alt="Alternate Text" />
                        </div>
                        <figcaption>Dining tables</figcaption>
                    </figure>
                </a>

                <a href="#">
                    <figure>
                        <div class="image">
                            <img src="assets/icons/icon-mediacabinet.svg" alt="Alternate Text" />
                        </div>
                        <figcaption>Media storage</figcaption>
                    </figure>
                </a>

                <a href="#">
                    <figure>
                        <div class="image">
                            <img src="assets/icons/icon-table.svg" alt="Alternate Text" />
                        </div>
                        <figcaption>Tables</figcaption>
                    </figure>
                </a>

                <a href="#">
                    <figure>
                        <div class="image">
                            <img src="assets/icons/icon-bookcase.svg" alt="Alternate Text" />
                        </div>
                        <figcaption>Bookcase</figcaption>
                    </figure>
                </a>

                <a href="#">
                    <figure>
                        <div class="image">
                            <img src="assets/icons/icon-bedroom.svg" alt="Alternate Text" />
                        </div>
                        <figcaption>Bedroom</figcaption>
                    </figure>
                </a>

                <a href="#">
                    <figure>
                        <div class="image">
                            <img src="assets/icons/icon-nightstand.svg" alt="Alternate Text" />
                        </div>
                        <figcaption>Nightstand</figcaption>
                    </figure>
                </a>

                <a href="#">
                    <figure>
                        <div class="image">
                            <img src="assets/icons/icon-kidsroom.svg" alt="Alternate Text" />
                        </div>
                        <figcaption>Children room</figcaption>
                    </figure>
                </a>

                <a href="#">
                    <figure>
                        <div class="image">
                            <img src="assets/icons/icon-kitchen.svg" alt="Alternate Text" />
                        </div>
                        <figcaption>Kitchen</figcaption>
                    </figure>
                </a>

                <a href="#">
                    <figure>
                        <div class="image">
                            <img src="assets/icons/icon-bathroom.svg" alt="Alternate Text" />
                        </div>
                        <figcaption>Bathroom</figcaption>
                    </figure>
                </a>

                <a href="#">
                    <figure>
                        <div class="image">
                            <img src="assets/icons/icon-wardrobe.svg" alt="Alternate Text" />
                        </div>
                        <figcaption>Wardrobe</figcaption>
                    </figure>
                </a>

                <a href="#">
                    <figure>
                        <div class="image">
                            <img src="assets/icons/icon-shocabinet.svg" alt="Alternate Text" />
                        </div>
                        <figcaption>Shoe cabinet</figcaption>
                    </figure>
                </a>

                <a href="#">
                    <figure>
                        <div class="image">
                            <img src="assets/icons/icon-office.svg" alt="Alternate Text" />
                        </div>
                        <figcaption>Office</figcaption>
                    </figure>
                </a>

                <a href="#">
                    <figure>
                        <div class="image">
                            <img src="assets/icons/icon-barset.svg" alt="Alternate Text" />
                        </div>
                        <figcaption>Bar sets</figcaption>
                    </figure>
                </a>

                <a href="#">
                    <figure>
                        <div class="image">
                            <img src="assets/icons/icon-light.svg" alt="Alternate Text" />
                        </div>
                        <figcaption>Lightning</figcaption>
                    </figure>
                </a>

                <a href="#">
                    <figure>
                        <div class="image">
                            <img src="assets/icons/icon-carpet.svg" alt="Alternate Text" />
                        </div>
                        <figcaption>Carpet</figcaption>
                    </figure>
                </a>

                <a href="#">
                    <figure>
                        <div class="image">
                            <img src="assets/icons/icon-accessories.svg" alt="Alternate Text" />
                        </div>
                        <figcaption>Accessories</figcaption>
                    </figure>
                </a>

            </div> <!--/owl-icons-->
        </div>

    </section>


    <!--Content-->

    <div class="container">
        <div class="row">

            <!--Left content-->

            <div class="col-12">

                <!--Product filters-->

                <div class="filters filters-fixed">

                    <div class="filter-scroll">

                        <div class="filter-header">
                            <span class="h4">Filter products</span>
                            <br />Select your options
                        </div>
                        <hr />

                        <!--Colors-->

                        <div class="filter-box active">
                            <div class="title">
                                Colors
                            </div>
                            <div class="filter-content">
                                <div class="product-colors clearfix">
                                    <span class="color-btn color-btn-yellow"></span>
                                    <span class="color-btn color-btn-pink"></span>
                                    <span class="color-btn color-btn-orange"></span>
                                    <span class="color-btn color-btn-red"></span>
                                    <span class="color-btn color-btn-blue checked"></span>
                                    <span class="color-btn color-btn-green"></span>
                                    <span class="color-btn color-btn-gray"></span>
                                    <span class="color-btn color-btn-biege"></span>
                                    <span class="color-btn color-btn-black"></span>
                                    <span class="color-btn color-btn-white"></span>
                                </div>
                            </div>
                        </div>

                        <!--Price-->

                        <div class="filter-box active">
                            <div class="title">Price</div>
                            <div class="filter-content">
                                <div class="price-filter">
                                    <input type="text" id="range-price-slider" value="" name="range" />
                                </div>
                            </div>
                        </div>

                        <!--Type-->

                        <div class="filter-box active">
                            <div class="title">
                                Type
                            </div>
                            <div class="filter-content">
                                        <span class="checkbox">
                                            <input type="radio" name="radiogroup-type" id="typeIdAll" checked="checked">
                                            <label for="typeIdAll">All <i>(1200)</i></label>
                                        </span>
                                <span class="checkbox">
                                            <input type="radio" name="radiogroup-type" id="typeId1">
                                            <label for="typeId1">Sofa <i>(20)</i></label>
                                        </span>
                                <span class="checkbox">
                                            <input type="radio" name="radiogroup-type" id="typeId2">
                                            <label for="typeId2">Armchairs <i>(12)</i></label>
                                        </span>
                                <span class="checkbox">
                                            <input type="radio" name="radiogroup-type" id="typeId3">
                                            <label for="typeId3">Chairs <i>(80)</i></label>
                                        </span>
                                <span class="checkbox">
                                            <input type="radio" name="radiogroup-type" id="typeId4">
                                            <label for="typeId4">Dining tables <i>(140)</i></label>
                                        </span>
                                <span class="checkbox">
                                            <input type="radio" name="radiogroup-type" id="typeId5">
                                            <label for="typeId5">Media storage <i>(20)</i></label>
                                        </span>
                                <span class="checkbox">
                                            <input type="radio" name="radiogroup-type" id="typeId6">
                                            <label for="typeId6">Tables <i>(10)</i></label>
                                        </span>
                                <span class="checkbox">
                                            <input type="radio" name="radiogroup-type" id="typeId7">
                                            <label for="typeId7">Bookcase <i>(450)</i></label>
                                        </span>
                                <span class="checkbox">
                                            <input type="radio" name="radiogroup-type" id="typeId8">
                                            <label for="typeId8">Nightstands <i>(750)</i></label>
                                        </span>
                                <span class="checkbox">
                                            <input type="radio" name="radiogroup-type" id="typeId9">
                                            <label for="typeId9">Children room <i>(960)</i></label>
                                        </span>
                                <span class="checkbox">
                                            <input type="radio" name="radiogroup-type" id="typeId10">
                                            <label for="typeId10">Kitchen <i>(44)</i></label>
                                        </span>
                                <span class="checkbox">
                                            <input type="radio" name="radiogroup-type" id="typeId11">
                                            <label for="typeId11">Bathroom <i>(5)</i></label>
                                        </span>
                                <span class="checkbox">
                                            <input type="radio" name="radiogroup-type" id="typeId12">
                                            <label for="typeId12">Wardrobe <i>(80)</i></label>
                                        </span>
                                <span class="checkbox">
                                            <input type="radio" name="radiogroup-type" id="typeId13">
                                            <label for="typeId13">Shoe cabinet <i>(23)</i></label>
                                        </span>
                                <span class="checkbox">
                                            <input type="radio" name="radiogroup-type" id="typeId14">
                                            <label for="typeId14">Office <i>(24)</i></label>
                                        </span>
                                <span class="checkbox">
                                            <input type="radio" name="radiogroup-type" id="typeId15">
                                            <label for="typeId15">Bar sets <i>(92)</i></label>
                                        </span>
                                <span class="checkbox">
                                            <input type="radio" name="radiogroup-type" id="typeId16">
                                            <label for="typeId16">Lightning <i>(1120)</i></label>
                                        </span>
                            </div>
                        </div>

                        <!--Material-->

                        <div class="filter-box active">
                            <div class="title">
                                Material
                            </div>
                            <div class="filter-content">
                                        <span class="checkbox">
                                            <input type="checkbox" id="matId1">
                                            <label for="matId1">Blend <i>(1200)</i></label>
                                        </span>
                                <span class="checkbox">
                                            <input type="checkbox" id="matId2">
                                            <label for="matId2">Leather <i>(12)</i></label>
                                        </span>
                                <span class="checkbox">
                                            <input type="checkbox" id="matId3">
                                            <label for="matId3">Wood <i>(80)</i></label>
                                        </span>
                                <span class="checkbox">
                                            <input type="checkbox" id="matId4">
                                            <label for="matId4">Shell <i>(80)</i></label>
                                        </span>
                                <span class="checkbox">
                                            <input type="checkbox" id="matId5">
                                            <label for="matId5">Metal <i>(80)</i></label>
                                        </span>
                            </div>
                        </div>

                        <!--Discount-->

                        <div class="filter-box">
                            <div class="title">
                                Discount
                            </div>
                            <div class="filter-content">
                                        <span class="checkbox">
                                            <input type="radio" id="discountId1" name="discountPrice" checked="checked">
                                            <label for="discountId1">Discount price</label>
                                        </span>
                                <span class="checkbox">
                                            <input type="radio" id="discountId2" name="discountPrice">
                                            <label for="discountId2">Regular price</label>
                                        </span>
                            </div>
                        </div>

                        <!--Availability-->

                        <div class="filter-box">
                            <div class="title">
                                Availability
                            </div>
                            <div class="filter-content">
                                        <span class="checkbox">
                                            <input type="checkbox" id="availableId1" checked="checked">
                                            <label for="availableId1">In stock <i>(152)</i></label>
                                        </span>
                                <span class="checkbox">
                                            <input type="checkbox" id="availableId2">
                                            <label for="availableId2">1 Week <i>(100)</i></label>
                                        </span>
                                <span class="checkbox">
                                            <input type="checkbox" id="availableId3">
                                            <label for="availableId3">2 Weeks <i>(80)</i></label>
                                        </span>
                            </div>
                        </div>

                    </div>

                    <!-- Close filters on mobile / update filters-->

                    <div class="toggle-filters-close btn btn-circle">
                        <i class="icon icon-cross"></i>
                    </div>

                </div> <!--/filters-->

            </div>

            <!--Right content-->

            <div class="col-12">

                <!--Sort bar-->

                <div class="sort-bar clearfix">

                    <div class="sort-results pull-left">

                        <!--Showing result per page-->

                        <select>
                            <option value="1">10</option>
                            <option value="2">50</option>
                            <option value="3">100</option>
                            <option value="4">All</option>
                        </select>

                        <!--Items counter-->

                        <span>Showing all <strong>50</strong> of <strong>348</strong> items</span>

                    </div>

                    <!--Sort options-->

                    <div class="sort-options pull-right">

                        <span class="d-none d-sm-inline-block">Sort by</span>

                        <select>
                            <option value="1">Name</option>
                            <option value="2">Popular items</option>
                            <option value="3">Price: lowest</option>
                            <option value="4">Price: highest</option>
                        </select>

                        <!--Grid-list view-->

                        <span class="grid-list">
                                    <a href="products-grid.html"><i class="fa fa-th-large"></i></a>
                                    <a href="products-list.html"><i class="fa fa-align-justify"></i></a>
                                    <a href="javascript:void(0);" class="toggle-filters-mobile">
                                        <i class="fa fa-sliders"></i>
                                        <span class="spinner-grow spinner-grow-sm text-warning" role="status" aria-hidden="true"></span>
                                    </a>
                                </span>

                    </div> <!--/sort-options-->

                </div>

                <!--Products collection-->

                <div class="row">
                    @foreach($category->products as $product)
                        @if($product->skus->count() > 0)
                            @include(config('view.template.route') . 'cards.catalog-sku', ['sku' => $product->mainSku(), 'sku' => $product->mainSku()])
                        @else
                            @include(config('view.template.route') . 'cards.catalog-product', compact('product'))
                        @endif
                    @endforeach
                </div>

                <!--Pagination-->

                <div class="pagination-wrapper">
                    <ul class="pagination justify-content-center">
                        <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link active" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                    </ul>
                </div>

            </div> <!--/product items-->

        </div><!--/row-->

    </div>

</section>

<!-- ========================  Last visited  ======================== -->

<section class="products">

    <header>
        <div class="container">
            <h2 class="title">Last visited</h2>
            <div class="text">
                <p>Check out our latest collections</p>
            </div>
        </div>
    </header>

    <div class="container">

        <div class="scroll-wrapper">

            <div class="row scroll">

                @foreach($lastVisitedProducts as $product)
                    @include(config('view.template.route') . 'cards.product', compact('product'))
                @endforeach

            </div> <!--/row-->
        </div>

    </div> <!--/container-->

</section>

<!-- ========================  Newsletter ======================== -->

<section class="banner">

    <div class="container-fluid">

        <div class="banner-image" style="background-image:url(/assets/images/gallery-1.jpg)">
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


<!-- ========================  Featured categories ======================== -->

<section class="blog blog-block">

    <!--Header-->

    <header>
        <div class="container">
            <h2 class="title">Featured categories</h2>
            <div class="text">
                <p>We just keep things minimal</p>
            </div>
        </div>
    </header>

    <!--Content-->

    <div class="container">

        <div class="row text-center">

            <!--Item-->

            <div class="col-md-4">
                <article data-3d>
                    <a href="products-grid.html">
                        <div class="image">
                            <img src="/assets/images/product-1.jpg" alt="" />
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

            <div class="col-6 col-md-4">
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

            <div class="col-6 col-md-4">
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

    </div><!--/container-->

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

@endsection

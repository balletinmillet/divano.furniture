@extends(config('view.template.route') . "layouts.site")
@section('title', $product->name)
@section('content')
<section class="product pt-0">

    <header>
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Library</a></li>
                <li class="breadcrumb-item active" aria-current="page">Data</li>
            </ol>
            <h2 class="title">{{$product->name}}</h2>
            <div class="text">
                <p>{{$product->description}}</p>
            </div>
        </div>
    </header>

    <div class="main">
        <div class="container">
            <div class="row product-flex">

                <div class="col-lg-4 product-flex-info">
                    <div class="clearfix">

                        <div class="clearfix">

                            <!--price wrapper-->

                            <div class="price">
                                        <span class="h3">
                                            {{$product->price}}
                                            <small>{{$product->price}}</small>
                                        </span>
                            </div>

                            <hr />

                            <!--info-box-->

                            <div class="info-box">
                                <span><strong>Maifacturer</strong></span>
                                <span>{{$product->brand->name}}</span>
                            </div>

                            <!--info-box-->

                            <div class="info-box">
                                <span><strong>Materials</strong></span>
                                <span>Wood, Leather, Acrylic</span>
                            </div>

                            <hr />


                            <div class="info-box">
                                        <span>
                                            Quantity
                                        </span>
                                <span>
                                            <span class="row">
                                                <span class="col-6">
                                                    <input type="number" value="1" class="form-control">
                                                </span>
                                                <span class="col-6">
                                                    <a href="#" class="btn btn-danger">Buy now</a>
                                                </span>
                                            </span>
                                        </span>
                            </div>

                            <hr />

                            <div class="info-box">
                                        <span>
                                            <small>*** We progress your order for shipping as soon as possible. Please note that after your order has been received, we can not change the delivery address. Control your address details in any case before placing your order!</small>
                                        </span>
                            </div>

                            <hr />

                            <div class="info-box info-box-addto added">
                                        <span>
                                            <i class="add"><i class="fa fa-heart-o"></i> Add to favorites</i>
                                            <i class="added"><i class="fa fa-heart"></i> Remove from favorites</i>
                                        </span>
                            </div>

                            <div class="info-box info-box-addto">
                                        <span>
                                            <i class="add"><i class="fa fa-eye-slash"></i> Add to Watch list</i>
                                            <i class="added"><i class="fa fa-eye"></i> Remove from Watch list</i>
                                        </span>
                            </div>

                            <div class="info-box info-box-addto">
                                        <span>
                                            <i class="add"><i class="fa fa-star-o"></i> Add to Collection</i>
                                            <i class="added"><i class="fa fa-star"></i> Remove from Collection</i>
                                        </span>
                            </div>

                        </div> <!--/clearfix-->
                    </div> <!--/product-info-wrapper-->
                </div> <!--/col-lg-4-->
                <!--product item gallery-->

                <div class="col-lg-8 product-flex-gallery">

                    <!--product gallery-->

                    <div class="owl-product-gallery owl-carousel owl-theme open-popup-gallery">
                        <a href="{{Storage::disk('public')->url($product->image ?? 'default/product.big.png')}}">
                            <img src="{{Storage::disk('public')->url($product->image ?? 'default/product.big.png')}}" alt="" />
                        </a>
{{--                        <a href="assets/images/product-9.jpg">
                            <img src="assets/images/product-9.jpg" alt="" />
                        </a>--}}
                    </div>
                </div>

            </div>
        </div>
    </div>

</section>

<!--=========================== Comments & rating ============================-->

<section class="product-details">

    <div class="container">

        <!--Tab links-->

        <ul class="nav nav-pills nav-pills-flat justify-content-center" id="pills-tab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="tab-review-tab" data-toggle="tab" href="#tab-review" role="tab">
                    Reviews
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="tab-desc-tab" data-toggle="tab" href="#tab-desc" role="tab">
                    Description
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="tab-info-tab" data-toggle="tab" href="#tab-shipping" role="tab">
                    Shipping
                </a>
            </li>
        </ul>

        <!--Tab content-->

        <div class="tab-content" id="pills-tabContent">

            <!--Tab description-->

            <div class="tab-pane fade show active" id="tab-review">

                <div class="col-md-8 offset-md-2">

                    <!--Rating-->

                    <div class="rating">

                        <!--Rating overall====-->

                        <div class="rating-overall">

                            <div class="rating-header">

                                <div class="row align-items-center">

                                    <div class="col-2">
                                        <div class="h1 m-0">4.8</div>
                                    </div>

                                    <div class="col-10">
                                        <div class="h3 m-0">User rating overall</div>
                                        <span>4.8 average based on 625 reviews</span>
                                    </div>

                                </div>
                            </div>

                            <div class="row align-items-center">

                                <div class="col-2">
                                    <p>5 <i class="fa fa-star"></i></p>
                                </div>

                                <div class="col-10">
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>

                                <div class="col-2">
                                    <p>4 <i class="fa fa-star"></i></p>
                                </div>

                                <div class="col-10">
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" style="width: 85%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="85"></div>
                                    </div>
                                </div>

                                <div class="col-2">
                                    <p>3 <i class="fa fa-star"></i></p>
                                </div>

                                <div class="col-10">
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="30"></div>
                                    </div>
                                </div>

                                <div class="col-2">
                                    <p>2 <i class="fa fa-star"></i></p>
                                </div>

                                <div class="col-10">
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="20"></div>
                                    </div>
                                </div>

                                <div class="col-2">
                                    <p>1 <i class="fa fa-star"></i></p>
                                </div>

                                <div class="col-10">
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" style="width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="15"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <!--Comments-->

                    <div class="comments">

                        <div class="comment-header">
                            <div class="h3 m-0">Recent comments</div>
                            <span>14 reviews for Bedroom product</span>
                        </div>

                        <div class="comment-wrapper">

                            <!--Comment-->

                            <div class="comment-block">

                                <!--Comment user-->

                                <div class="comment-user">
                                    <div>
                                        <img src="assets/images/user.jpg" alt="Alternate Text" width="70" />
                                    </div>
                                    <div>
                                        <h5>
                                            <span>John Doe</span>
                                            <span class="pull-right">
                                                        <i class="fa fa-star active"></i>
                                                        <i class="fa fa-star active"></i>
                                                        <i class="fa fa-star active"></i>
                                                        <i class="fa fa-star active"></i>
                                                        <i class="fa fa-star"></i>
                                                    </span>
                                            <small>03.05.2017</small>
                                        </h5>
                                    </div>
                                </div>

                                <!--Comment description-->

                                <div class="comment-desc">
                                    <p>
                                        In vestibulum tellus ut nunc accumsan eleifend. Donec mattis cursus ligula, id
                                        iaculis dui feugiat nec. Etiam ut ante sed neque lacinia volutpat. Maecenas
                                        ultricies tempus nibh, sit amet facilisis mauris vulputate in. Phasellus
                                        tempor justo et mollis facilisis. Donec placerat at nulla sed suscipit. Praesent
                                        accumsan, sem sit amet euismod ullamcorper, justo sapien cursus nisl, nec
                                        gravida
                                    </p>
                                </div>

                                <!--Comment reply-->

                                <div class="comment-block">
                                    <div class="comment-user">
                                        <div>
                                            <img src="assets/images/user.jpg" alt="Alternate Text" width="70" />
                                        </div>
                                        <div>
                                            <h5>
                                                Administrator
                                                <small>08.05.2017</small>
                                            </h5>
                                        </div>
                                    </div>
                                    <div class="comment-desc">
                                        <p>
                                            Curabitur sit amet elit quis tellus tincidunt efficitur. Cras lobortis id
                                            elit eu vehicula. Sed porttitor nulla vitae nisl varius luctus. Quisque
                                            a enim nisl. Maecenas facilisis, felis sed blandit scelerisque, sapien
                                            nisl egestas diam, nec blandit diam ipsum eget dolor. Maecenas ultricies
                                            tempus nibh, sit amet facilisis mauris vulputate in.
                                        </p>
                                    </div>
                                </div>
                                <!--/reply-->
                            </div>

                            <!--Comment-->

                            <div class="comment-block">

                                <!--Comment user-->

                                <div class="comment-user">
                                    <div>
                                        <img src="assets/images/user.jpg" alt="Alternate Text" width="70" />
                                    </div>
                                    <div>
                                        <h5>
                                            <span>John Doe</span>
                                            <span class="pull-right">
                                                        <i class="fa fa-star active"></i>
                                                        <i class="fa fa-star active"></i>
                                                        <i class="fa fa-star active"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </span>
                                            <small>03.05.2017</small>
                                        </h5>
                                    </div>
                                </div>

                                <!--Comment description-->

                                <div class="comment-desc">
                                    <p>
                                        Cras lobortis id elit eu vehicula. Sed porttitor nulla vitae nisl varius luctus.
                                        Quisque a enim nisl. Maecenas facilisis, felis sed blandit scelerisque, sapien
                                        nisl egestas diam, nec blandit diam ipsum eget dolor. In vestibulum tellus
                                        ut nunc accumsan eleifend. Donec mattis cursus ligula, id iaculis dui feugiat
                                        nec. Etiam ut ante sed neque lacinia volutpat. Maecenas ultricies tempus
                                        nibh, sit amet facilisis mauris vulputate in. Phasellus tempor justo et mollis
                                        facilisis. Donec placerat at nulla sed suscipit. Praesent accumsan, sem sit
                                        amet euismod ullamcorper, justo sapien cursus nisl, nec gravida
                                    </p>
                                </div>
                            </div>

                        </div><!--/comment-wrapper-->

                        <div class="comment-header text-center">
                            <a href="#" class="btn btn-main">12 comments</a>
                        </div>

                        <!--Add new comment-->

                        <div class="comment-add">

                            <div class="comment-reply-message">
                                <div class="h3 title">Leave a Reply </div>
                                <p>Your email address will not be published.</p>
                            </div>

                            <form action="#" method="post">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="name" value="" placeholder="Your Name" />
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="name" value="" placeholder="Your Email" />
                                </div>
                                <div class="form-group">
                                    <textarea rows="10" class="form-control" placeholder="Your comment"></textarea>
                                </div>
                                <div class="clearfix text-center">
                                    <a href="#" class="btn btn-main">Add comment</a>
                                </div>
                            </form>

                        </div><!--/comment-add-->

                    </div> <!--/comments-->

                </div> <!--/col-md-8-->

            </div> <!--/tab-pane -->
            <!--Tab specification-->

            <div class="tab-pane fade" id="tab-desc">

                <div class="col-md-8 offset-md-2">

                    <div>
                        <div class="h3 m-0">Product specification</div>
                        <span>Additional information</span>
                    </div>

                    <hr />

                    <div class="row">
                        <div class="col-6">
                            <img class="img-fluid" src="assets/images/specs.png" alt="Alternate Text" width="350" />

                        </div>
                        <div class="col-6">
                            <img class="img-fluid" src="assets/images/specs.png" alt="Alternate Text" width="350" />

                        </div>

                    </div> <!--/row-->

                </div> <!--/col-md-8-->

            </div> <!--/tab-pane -->
            <!--Tab review-->

            <div class="tab-pane fade" id="tab-shipping">

                <div class="col-md-8 offset-md-2">

                    <div>
                        <div class="h3 m-0">Shipping information</div>
                        <span>Additional information</span>
                    </div>

                    <hr />

                    <h5>Money Back Guarantee</h5>
                    <p>
                        Our Money Back Guarantee applies to virtually everything on our site, and
                        there's no extra fee for coverage. It’s automatic and covers your purchase price plus
                        original shipping on eligible purchases*. Follow these steps to get your refund.
                    </p>

                    <h5>Need to Return an Item?</h5>

                    <p>
                        Whatever you’re looking for, millions of items on our store are returnable. Before you
                        buy an item, check the seller’s return policy, then follow these easy steps to
                        make a return. If the item you received doesn't match the description in the
                        original listing, or if it arrived faulty or damaged,
                    </p>

                    <h5>Check an open return request</h5>

                    <p>
                        You can keep an eye on the progress of your return request by selecting Check your
                        return status below, or in your Purchase history.
                    </p>

                    <h5>Send the item back</h5>

                    <p>
                        You'll need to send it back within 5 business days. Who covers the shipping costs
                        depends on why you're returning it. Find more information about return shipping.

                        When you send your item back we recommend using tracked shipping. Adding tracking
                        details to your return helps protect against delays or issues in the refund process.
                    </p>
                </div> <!--/col-md-8-->


            </div>  <!--/tab-pane -->

        </div> <!--/tab-content -->
    </div>

</section>

<!-- ========================  Popular products  ======================== -->

<section class="products">

    <header>
        <div class="container">
            <h2 class="title">Popular products</h2>
            <div class="text">
                <p>Check out our latest collections. <br /> Make your dream come true!</p>
            </div>
        </div>
    </header>

    <div class="container">

        <div class="row">

            <!--Product item-->

            <div class="col-6 col-lg-3">
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

            <div class="col-6 col-lg-3">
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

            <div class="col-6 col-lg-3">
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

            <div class="col-6 col-lg-3">
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

        </div> <!--/row-->

        <div class="wrapper-more">
            <a href="products-grid.html" class="btn btn-main btn-sm">View all products</a>
        </div>

    </div> <!--/container-->

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

@extends(config('view.template.route') . "layouts.site")
@section('title', "Каталог")
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
                <h2 class="title">Categories</h2>
            </div>
        </header>

        <!--Content-->
        <div class="container">
            <div class="row">
                @foreach($categories as $category)
                    @include(config('view.template.route') . 'cards.catalog-category', compact('category'))
                @endforeach
            </div>
        </div>

    </section>

    <!-- ========================  Category icons ======================== -->

    <section class="icons-category">

        <!--Header-->

        <header>
            <div class="container">
                <h2 class="title">All categories</h2>
            </div>
        </header>

        <!--Content-->

        <div class="container">
            <div class="row">
                @foreach($categories as $category)
                    @include(config('view.template.route') . 'cards.catalog-icon-category', compact('category'))
                @endforeach
            </div>
        </div>

    </section>

    <!-- ========================  Products ======================== -->

    <section class="products">

        <!--Header-->

        <header>
            <div class="container">
                <h2 class="title">Shop by brand</h2>
            </div>
        </header>

        <div class="container">

            <div class="row">

                <!--Product item-->
                @foreach($brands as $brand)
                    @include(config('view.template.route') . 'cards.catalog-brand', compact('brand'))
                @endforeach

            </div><!--/row-->
        </div>
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

@endsection

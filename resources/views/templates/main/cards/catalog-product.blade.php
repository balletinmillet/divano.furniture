<div class="col-6 col-lg-4">
    <article>
        <div class="info">
        <span class="add-favorite">
            <a href="javascript:void(0);" data-title="{{$product->name}}"
               data-title-added="{{$product->name}}">
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
                <a href="{{route('catalog.product', [$category->code, $product->code])}}">
                    <img src="{{Storage::disk('public')->url($product->image ?? 'default/product.big.png')}}" alt=""/>
                </a>
            </div>
            <div class="text">
                <h2 class="title h4">
                    <a href="{{route('catalog.product', [$category->code, $product->code])}}">{{$product->name}}</a>
                </h2>
                <sub>{{$product->price}}</sub>
                <sup>{{$product->price}}</sup>
                <span class="description clearfix">
                    {{$product->description}}
                </span>
            </div>
        </div>
    </article>
</div>

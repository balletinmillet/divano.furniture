<div class="col-6 col-lg-4">
    <article>
        <div class="figure-block">
            <div class="image">
                <a href="{{route('catalog.category', $category->code)}}">
                    <img src="{{Storage::disk('public')->url($category->image ?? 'default/category.big.png')}}" alt="{{$category->name}}" width="360" />
                </a>
            </div>
            <div class="text">
                <h2 class="title h4">
                    <a href="{{route('catalog.category', $category->code)}}">
                        {{$category->name}}
                    </a>
                </h2>
            </div>
        </div>
    </article>
</div>

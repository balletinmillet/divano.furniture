<div class="col-6 col-md-2">
    <a href="{{route('catalog.category', $category->code)}}">
        <figure>
            <div class="image">
                <img src="{{Storage::disk('public')->url($category->image ?? 'default/category.small.png')}}" alt="{{$category->name}}" />
            </div>
            <figcaption>{{$category->name}}</figcaption>
        </figure>
    </a>
</div>

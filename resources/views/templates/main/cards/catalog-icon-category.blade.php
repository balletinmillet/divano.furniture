<div class="col-6 col-md-2">
    <a href="#">
        <figure>
            <div class="image">
                <img src="{{Storage::disk('public')->url($category->image ?? 'default/category.small.png')}}" alt="Alternate Text" />
            </div>
            <figcaption>Sofa</figcaption>
        </figure>
    </a>
</div>

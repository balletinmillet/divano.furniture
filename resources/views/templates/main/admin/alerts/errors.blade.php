@if($errors->any())
<div class="">
    <div class="x_content bs-example-popovers">
        <div class="alert alert-danger alert-dismissible " role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
            </button>
            @foreach($errors->all() as $error)
            {{ $error }}
            <br>
            @endforeach
        </div>
    </div>
</div>
@endif

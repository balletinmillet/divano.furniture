@if (session('success'))
    <div class="">
        <div class="x_content bs-example-popovers">
            <div class="alert alert-success alert-dismissible " role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                </button>
                {{ session('success') }}
            </div>
        </div>
    </div>
@endif

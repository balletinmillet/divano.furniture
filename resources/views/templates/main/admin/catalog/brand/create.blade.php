@extends(config('view.template.route') . "layouts.admin")
@section('title', "Создать бренд")
@section('content')
<div class="">
    <div class="page-title"></div>
    <div class="clearfix"></div>
    <div class="row">
        <div class="col-md-12 col-sm-12 ">
            <div class="x_panel">
                <div class="x_title">
                    <h2>{{__('admin/catalog.brand.create.title')}}</h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li>
                            <a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <form id="demo-form2" class="form-horizontal form-label-left"
                          action="{{route('admin.catalog.brand.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @include(config('view.template.route') . 'admin.catalog.brand.blocks.form')
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

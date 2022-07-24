@extends(config('view.template.route') . "layouts.admin")
@section('title', "Создать категорию")
@section('content')
<div class="">
    <div class="page-title"></div>
    <div class="clearfix"></div>
    <div class="row">
        <div class="col-md-12 col-sm-12 ">
            <div class="x_panel">
                <div class="x_title">
                    <h2>{{__('admin/catalog.category.edit.title')}} {{$category->name}}</h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <form id="demo-form2" class="form-horizontal form-label-left"
                          action="{{route('admin.catalog.category.update', $category)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        @include(config('view.template.route') . 'admin.catalog.category.blocks.form', compact('category', 'categories'))
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

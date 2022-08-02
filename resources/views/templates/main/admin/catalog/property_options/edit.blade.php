@extends(config('view.template.route') . "layouts.admin")
@section('title', "Редактировать вариант свойства " . $property->name)
@section('content')
<div class="">
    <div class="page-title"></div>
    <div class="clearfix"></div>
    <div class="row">
        <div class="col-md-12 col-sm-12 ">
            <div class="x_panel">
                <div class="x_title">
                    <h2>{{__('admin/catalog.propertyOptions.edit.title')}} {{$propertyOption->name}}</h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <form id="demo-form2" class="form-horizontal form-label-left"
                          action="{{route('admin.catalog.property-options.update', [$property, $propertyOption])}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        @include(config('view.template.route') . 'admin.catalog.property_options.blocks.form', compact('property', 'propertyOption'))
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

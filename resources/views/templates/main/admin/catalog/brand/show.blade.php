@extends(config('view.template.route') . "layouts.admin")
@section('title', $brand->name)
@section('content')
<div class="">
    <div class="clearfix"></div>
    <div class="row">
        <div class="col-md-12 col-sm-12 ">
            <div class="x_panel">
                <div class="x_title">
                    <h6 style="display: inline-block; margin-top: 10px;">
                        {{$brand->name}}
                    </h6>
                    <ul class="nav navbar-right panel_toolbox">
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">

                    <div class="col-md-7 col-sm-7 ">
                        <div class="product-image">
                            <img src="{{$brand->source_image}}" alt="...">
                        </div>
                    </div>

                    <div class="col-md-5 col-sm-5 " style="border:0px solid #e5e5e5;">
                        <h3 class="prod_title">{{$brand->name }}</h3>
                        <p>{{$brand->description }}</p>
                        <br>
                        <div>
                            <a href="{{ route('admin.catalog.brand.edit', $brand) }}" class="btn btn-info btn-xs p-2 mb-2" style="width: 100%;">
                                <i class="fa fa-pencil"></i> {{__('admin/common.button.edit')}}
                            </a>
                        </div>
                        <div>
                            <form action="{{ route('admin.catalog.brand.destroy', $brand) }}"
                                  method="post" onsubmit="return confirm('{{__('admin/common.question.brandDelete')}}')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-xs p-2" style="width: 100%;">
                                    <i class="fa fa-trash-o"></i>
                                    {{__('admin/common.button.delete')}}
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

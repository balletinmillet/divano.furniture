@extends(config('view.template.route') . "layouts.admin")
@section('title', $category->name)
@section('content')
<div class="">
    <div class="clearfix"></div>
    <div class="row">
        <div class="col-md-12 col-sm-12 ">
            <div class="x_panel">
                <div class="x_title">
                    <h6 style="display: inline-block; margin-top: 10px;">
                    @if(!is_null($category->parentCategory))
                        <a href="{{ route('admin.catalog.category.show', $category->parentCategory) }}">{{$category->parentCategory->name}} </a>
                            &nbsp;<i class="fa fa-caret-right"></i> &nbsp;
                            <span> {{$category->name}}</span>
                    @else
                        {{$category->name}}
                    @endif
                    </h6>
                    <ul class="nav navbar-right panel_toolbox">
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">

                    <div class="col-md-7 col-sm-7 ">
                        <div class="product-image">
                            <img src="{{$category->source_image}}" alt="...">
                        </div>
                    </div>

                    <div class="col-md-5 col-sm-5 " style="border:0px solid #e5e5e5;">
                        <h3 class="prod_title">{{$category->name }}</h3>
                        <p>{{$category->description }}</p>
                        <br>
                        <div>
                            <a href="{{ route('admin.catalog.category.edit', $category) }}" class="btn btn-info btn-xs p-2 mb-2" style="width: 100%;">
                                <i class="fa fa-pencil"></i> {{__('admin/common.button.edit')}}
                            </a>
                        </div>
                        <div>
                            <form action="{{ route('admin.catalog.category.destroy', $category) }}"
                                  method="post" onsubmit="return confirm('{{__('admin/common.question.categoryDelete')}}')">
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

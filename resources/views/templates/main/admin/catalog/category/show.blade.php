@extends(config('view.template.route') . "layouts.admin")
@section('title', $category->name)
@section('content')
<div class="right_col" role="main" style="min-height: 3875px;">
    <div class="">
{{--    <div class="page-title">
        <div class="title_left">
            <h3>Создание категории</h3>
        </div>
    </div>--}}
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
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="#">Settings 1</a>
                                    <a class="dropdown-item" href="#">Settings 2</a>
                                </div>
                            </li>
                            <li><a class="close-link"><i class="fa fa-close"></i></a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">

                        <div class="col-md-7 col-sm-7 ">
                            <div class="product-image">
                                <img src="{{Storage::disk('public')->url($category->image ?? 'default/category.big.png')}}" alt="...">
                            </div>
                        </div>

                        <div class="col-md-5 col-sm-5 " style="border:0px solid #e5e5e5;">
                            <h3 class="prod_title">{{$category->name }}</h3>
                            <p>{{$category->description }}</p>
                            <br>
                            <div>
                                <a href="#" class="btn btn-info btn-xs p-2 mb-2" style="width: 100%;">
                                    <i class="fa fa-pencil"></i> Редактировать
                                </a>
                            </div>
                            <div>
                                <a href="#" class="btn btn-danger btn-xs p-2" style="width: 100%;">
                                    <i class="fa fa-trash-o"></i> Удалить
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

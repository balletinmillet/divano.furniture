@extends(config('view.template.route') . "layouts.admin")
@section('title', $product->name)
@section('content')
<div class="">
    <div class="clearfix"></div>
    <div class="row">
        <div class="col-md-12 col-sm-12 ">
            <div class="x_panel">
                <div class="x_title">
                    <h6 style="display: inline-block; margin-top: 10px;">
                    @if(!is_null($product->category))
                        <a href="{{ route('admin.catalog.product.show', $product->category->name) }}">{{$product->category->name}} </a>
                            &nbsp;<i class="fa fa-caret-right"></i> &nbsp;
                            <span> {{$product->name}}</span>
                    @else
                        {{$product->name}}
                    @endif
                    </h6>
                    <ul class="nav navbar-right panel_toolbox">
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">

                    <div class="col-md-7 col-sm-7 ">
                        <div class="product-image">
                            <img src="{{$product->source_image}}" alt="...">
                        </div>
                    </div>

                    <div class="col-md-5 col-sm-5 " style="border:0px solid #e5e5e5;">
                        <h3 class="prod_title">{{$product->name }}</h3>
                        <div class="">
                            <div class="table-responsive">
                                <table class="table properties-table">
                                    <tbody>
                                    <tr>
                                        <th style="width:50%">{{__('admin/common.form.code')}}</th>
                                        <td>{{$product->code}}</td>
                                    </tr>
                                    <tr>
                                        <th style="width:50%">{{__('admin/common.form.productCategory')}}</th>
                                        <td>{{$product->category->name}}</td>
                                    </tr>
                                    <tr>
                                        <th style="width:50%">{{__('admin/common.form.productBrand')}}</th>
                                        <td>{{$product->brand->name}}</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <p>{{$product->description }}</p>
                        <br>
                        <div>
                            <a href="{{ route('admin.catalog.product.edit', $product) }}" class="btn btn-success btn-xs p-2 mb-2" style="width: 100%;">
                                <i class="fa fa-share-alt-square"></i>
                                {{__('admin/common.button.fullSkus')}}
                            </a>
                        </div>
                        <div>
                            <a href="{{ route('admin.catalog.product.edit', $product) }}" class="btn btn-info btn-xs p-2 mb-2" style="width: 100%;">
                                <i class="fa fa-pencil"></i> {{__('admin/common.button.edit')}}
                            </a>
                        </div>
                        <div>
                            <form action="{{ route('admin.catalog.product.destroy', $product) }}"
                                  method="post" onsubmit="return confirm('{{__('admin/common.question.productDelete')}}')">
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

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
                        <a href="{{ route('admin.catalog.category.show', $product->category) }}">{{$product->category->name}} </a>
                        &nbsp;<i class="fa fa-caret-right"></i>
                    @endif
                        <a href="{{ route('admin.catalog.product.show', $product) }}">{{$product->name}} </a>
                        &nbsp;<i class="fa fa-caret-right"></i>
                        <span> {{$sku->id}}</span>

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
                        <h3 class="prod_title">{{__('admin/catalog.sku.show.titlePart1')}} {{$sku->id}}</h3>
                        <div class="">
                            <div class="table-responsive">
                                <table class="table properties-table">
                                    <tbody>
                                    <tr>
                                        <th style="width:50%">{{__('admin/common.form.id')}}</th>
                                        <td>{{$sku->id}}</td>
                                    </tr>
                                    <tr>
                                        <th style="width:50%">{{__('admin/common.form.product')}}</th>
                                        <td> <a href="{{ route('admin.catalog.product.show', $product) }}" target="_blank">{{$product->name}} </a></td>
                                    </tr>
                                    <tr>
                                        <th style="width:50%">{{__('admin/common.form.price')}}</th>
                                        <td>{{$sku->price}}</td>
                                    </tr>
                                    <tr>
                                        <th style="width:50%">{{__('admin/common.form.count')}}</th>
                                        <td>{{$sku->count}}</td>
                                    </tr>
                                    @foreach ($product->properties as $property)
                                        <tr>
                                            <th style="width:50%">{{ $property->name }}</th>
                                        @foreach($property->propertyOptions as $propertyOption)
                                            @isset($sku)
                                                @if($sku->propertyOptions->contains($propertyOption->id))
                                                    <td>{{$propertyOption->name}}</td>
                                                @endif
                                            @endisset
                                        @endforeach
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <br>
                        <div>
                            <a href="{{ route('admin.catalog.sku.edit', [$product, $sku]) }}" class="btn btn-info btn-xs p-2 mb-2" style="width: 100%;">
                                <i class="fa fa-pencil"></i> {{__('admin/common.button.edit')}}
                            </a>
                        </div>
                        <div>
                            <form action="{{ route('admin.catalog.sku.destroy', [$product, $sku]) }}"
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

@extends(config('view.template.route') . "layouts.admin")
@section('title', "Тороговые предложения товара " . $product->name)
@section('content')
<div class="">
    <div class="page-title">
        <div class="title_left">
            <h3></h3>
        </div>
        <div class="title_right">
            <div class="col-md-5 col-sm-5 form-group pull-right top_search">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="{{__('admin/catalog.search.placeholder')}}">
                    <span class="input-group-btn">
                      <button class="btn btn-secondary" type="button">
                          {{__('admin/catalog.search.button.search')}}
                      </button>
                    </span>
                </div>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="row">
        <div class="col-md-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>{{__('admin/catalog.sku.index.titleExtended')}}
                        <a href="{{route('admin.catalog.product.show', $product)}}" target="_blank">"{{$product->name}}"</a>
                    </h2>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">

                    <p>{{__('admin/catalog.sku.index.description')}}</p>

                    <!-- start project list -->
                    <table class="table table-striped projects">
                        <thead>
                        <tr>
                            <th style="width: 5%">{{__('admin/catalog.sku.index.table.id')}}</th>
                            <th style="width: 25%">{{__('admin/catalog.sku.index.table.price')}}</th>
                            <th style="width: 25%">{{__('admin/catalog.sku.index.table.count')}}</th>
                            <th style="width: 35%">{{__('admin/catalog.sku.index.table.actions')}}</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach($skus as $sku)
                                <tr>
                                    <td>{{$sku->id}}</td>
                                    <td>
                                        <a>{{$sku->price}}</a>
                                    </td>
                                    <td>
                                        <a>{{$sku->count}}</a>
                                    </td>
                                    <td>
                                        <a href="{{ route('admin.catalog.sku.show', [$product, $sku]) }}" class="btn btn-primary btn-xs">
                                            <i class="fa fa-folder"></i>
                                            {{__('admin/common.button.open')}}
                                        </a>
                                        <a href="{{ route('admin.catalog.sku.edit', [$product, $sku]) }}" class="btn btn-info btn-xs">
                                            <i class="fa fa-pencil"></i>
                                            {{__('admin/common.button.edit')}}
                                        </a>
                                        <form action="{{ route('admin.catalog.sku.destroy', [$product, $sku]) }}" style="display: inline"
                                              method="post" onsubmit="return confirm('{{__('admin/common.question.skuDelete')}}')">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-xs">
                                                <i class="fa fa-trash-o"></i>
                                                {{__('admin/common.button.delete')}}
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <!-- end project list -->
                </div>
                <div class="x_content">
                    <a href="{{ route('admin.catalog.sku.create', $product) }}" class="btn btn-primary btn-lg">
                        {{__('admin/catalog.sku.index.table.button.create')}}
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

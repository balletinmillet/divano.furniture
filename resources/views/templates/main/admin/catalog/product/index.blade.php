@extends(config('view.template.route') . "layouts.admin")
@section('title', "Товары каталога")
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
                    <h2>{{__('admin/catalog.product.index.title')}}</h2>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">

                    <p>{{__('admin/catalog.product.index.description')}}</p>

                    <!-- start project list -->
                    <table class="table table-striped projects">
                        <thead>
                        <tr>
                            <th style="width: 5%">{{__('admin/catalog.product.index.table.id')}}</th>
                            <th style="width: 17%">{{__('admin/catalog.product.index.table.name')}}</th>
                            <th style="width: 17%">{{__('admin/catalog.product.index.table.code')}}</th>
                            <th style="width: 17%">{{__('admin/catalog.product.index.table.category')}}</th>
                            <th style="width: 40%">{{__('admin/catalog.product.index.table.actions')}}</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach($products as $product)
                                <tr>
                                    <td>{{$product->id}}</td>
                                    <td>
                                        <a>{{$product->name}}</a>
                                    </td>
                                    <td>
                                        <a>{{$product->code}}</a>
                                    </td>
                                    <td>
                                        <a href="{{route('admin.catalog.category.show', $product->category)}}">{{$product->category->name}}</a>
                                    </td>
                                    <td>
                                        <a href="{{ route('admin.catalog.product.show', $product) }}" class="btn btn-primary btn-xs">
                                            <i class="fa fa-folder"></i>
                                            {{__('admin/common.button.open')}}
                                        </a>
                                        <a href="{{ route('admin.catalog.sku.index', $product) }}" class="btn btn btn-success btn-xs">
                                            <i class="fa fa-share-alt-square"></i>
                                            {{__('admin/common.button.sku')}}
                                        </a>
                                        <a href="{{ route('admin.catalog.product.edit', $product) }}" class="btn btn-info btn-xs">
                                            <i class="fa fa-pencil"></i>
                                            {{__('admin/common.button.edit')}}
                                        </a>
                                        <form action="{{ route('admin.catalog.product.destroy', $product) }}" style="display: inline"
                                              method="post" onsubmit="return confirm('{{__('admin/common.question.productDelete')}}')">
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
                    <a href="{{ route('admin.catalog.product.create') }}"  class="btn btn-primary btn-lg">
                        {{__('admin/catalog.product.index.table.button.create')}}
                    </a>
                </div>
                <div class="x_content">
                    {{ $products->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

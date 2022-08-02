@extends(config('view.template.route') . "layouts.admin")
@section('title', $property->name)
@section('content')
<div class="">
    <div class="clearfix"></div>
    <div class="row">
        <div class="col-md-12 col-sm-12 ">
            <div class="x_panel">
                <div class="x_title">
                    <h6 style="display: inline-block; margin-top: 10px;">
                        {{$property->name}}
                    </h6>
                    <ul class="nav navbar-right panel_toolbox">
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">

                    <div class="col-md-12 col-sm-12 " style="border:0px solid #e5e5e5;">
                        <h3 class="prod_title">{{$property->name }}</h3>
                        <div class="col-md-12 col-sm-12 ">
                            <div class="table-responsive">
                                <table class="table properties-table">
                                    <tbody>
                                    <tr>
                                        <th style="width:50%">{{__('admin/common.form.id')}}</th>
                                        <td>{{$property->id}}</td>
                                    </tr>
                                    <tr>
                                        <th style="width:50%">{{__('admin/common.form.code')}}</th>
                                        <td>{{$property->code}}</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="col-md-12 col-sm-12 ">
                            <div>
                                <a href="{{ route('admin.catalog.properties.edit', $property) }}" class="btn btn-info btn-xs p-2 mb-2" style="width: 100%;">
                                    <i class="fa fa-pencil"></i> {{__('admin/common.button.edit')}}
                                </a>
                            </div>
                            <div>
                                <form action="{{ route('admin.catalog.properties.destroy', $property) }}"
                                      method="post" onsubmit="return confirm('{{__('admin/common.question.propertyDelete')}}')">
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
</div>
@endsection

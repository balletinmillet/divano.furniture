@extends(config('view.template.route') . "layouts.admin")
@section('title', "Категории каталога")
@section('content')
    <div class="right_col" role="main">
        <div class="">

            <div class="page-title">
                <div class="title_left">
                    <h3>Projects <small>Listing design</small></h3>
                </div>
                <div class="title_right">
                    <div class="col-md-5 col-sm-5   form-group pull-right top_search">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search for...">
                            <span class="input-group-btn">
                      <button class="btn btn-secondary" type="button">Go!</button>
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
                            <h2>Projects</h2>
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

                            <p>Simple table with project listing with progress and editing options</p>

                            <!-- start project list -->
                            <table class="table table-striped projects">
                                <thead>
                                <tr>
                                    <th style="width: 5%">Ид</th>
                                    <th style="width: 30%">Название</th>
                                    <th style="width: 25%">Код</th>
                                    <th style="width: 45%">Действия</th>
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach($items as $item)
                                        <tr>
                                            <td>{{$item->id}}</td>
                                            <td>
                                                <a>{{$item->name}}</a>
                                            </td>
                                            <td>
                                                <a>{{$item->code}}</a>
                                            </td>
                                            <td>
                                                <a href="{{ route('admin.catalog.category.show', $item) }}" class="btn btn-primary btn-xs"><i class="fa fa-folder"></i> Открыть </a>
                                                <a href="#" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Редактировать </a>
                                                <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Удалить </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <!-- end project list -->
                        </div>
                        <div class="x_content">
                            <a href="{{ route('admin.catalog.category.create') }}"  class="btn btn-primary btn-lg">Создать категорию</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

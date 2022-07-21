@extends(config('view.template.route') . "layouts.admin")
@section('title', "Создать категорию")
@section('content')
<div class="right_col" role="main" style="min-height: 3875px;">
    <div class="">
    <div class="page-title">
        <div class="title_left">
            <h3>Создание категории</h3>
        </div>

        <div class="title_right">
            <div class="col-md-5 col-sm-5  form-group pull-right top_search">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="">
                    <span class="input-group-btn">
                        <button class="btn btn-default" type="button">Поиск</button>
                    </span>
                </div>
            </div>
        </div>
    </div>

    <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>{{--{{$category->name}}--}}</h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a class="dropdown-item" href="#">Settings 1</a>
                                    </li>
                                    <li><a class="dropdown-item" href="#">Settings 2</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a class="close-link"><i class="fa fa-close"></i></a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <br>
                        <form id="demo-form2" type="POST" data-parsley-validate="" class="form-horizontal form-label-left" novalidate="">

                            @csrf

                            <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="name">Название <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 ">
                                    <input type="text" id="name" name="name" required="required" class="form-control ">
                                </div>
                            </div>


                            <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="code">Код <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 ">
                                    <input type="text" id="code" name="code" required="required" class="form-control">
                                </div>
                            </div>

                            <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="parent_id">Родительская категория</label>
                                <div class="col-md-6 col-sm-6 ">
                                    <select class="form-control" name="parent_id">
                                        <option>Верхний уровень</option>
                                        <option>Option one</option>
                                    </select>
                                </div>
                            </div>


                            <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="description">Описание категории</label>
                                <div class="col-md-6 col-sm-6 ">
                                    <textarea class="form-control" name="description" rows="3"></textarea>
                                </div>
                            </div>


                            <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="image">Изображение</label>
                                <div class="col-md-6 col-sm-6 ">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" name="image" accept="image/png, image/jpeg" />
                                        <label class="custom-file-label" for="image">png, jpeg</label>
                                    </div>
                                </div>
                            </div>

                            <div class="ln_solid"></div>
                            <div class="item form-group">
                                <div class="col-md-6 col-sm-6 offset-md-3">
                                    <button type="submit" class="btn btn-success">Сохранить</button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

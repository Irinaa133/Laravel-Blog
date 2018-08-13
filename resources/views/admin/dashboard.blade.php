@extends('admin.layouts.app_admin')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-sm-3 col-6">
                <div class="jumbotron">
                    <p class="text-center"><span class="badge badge-primary">Категорий 0</span></p>
                </div>
            </div>
            <div class="col-sm-3 col-6">
                <div class="jumbotron">
                    <p class="text-center"><span class="badge badge-primary">Материалов 0</span></p>
                </div>
            </div>
            <div class="col-sm-3 col-6">
                <div class="jumbotron">
                    <p class="text-center"><span class="badge badge-primary">Посетителей 0</span></p>
                </div>
            </div>
            <div class="col-sm-3 col-6">
                <div class="jumbotron">
                    <p class="text-center"><span class="badge badge-primary">Сегодня 0</span></p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <a class="btn btn-block btn-light" href="#">Создать категорию</a>
                <div class="list-group">
                    <a class="list-group-item" href="#">
                        <h5 class="mb-1">Категория первая</h5>
                        <p class="text-muted">
                            Количество материалов
                        </p>
                    </a>
                </div>
            </div>

            <div class="col-sm-6">
                <a class="btn btn-block btn-light" href="#">Создать материал</a>
                <div class="list-group">
                    <a class="list-group-item" href="#">
                        <h5 class="mb-1">Материал первый</h5>
                        <p class="text-muted">
                            Категория
                        </p>
                    </a>
                </div>
            </div>

        </div>

@endsection
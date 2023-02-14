@extends('layout.app')

@section('title', 'Создание карточки товара')

@section('content')
    <div class="card">
        <div class="card-header">
            Создание нового товара
        </div>
        <div class="card-body">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form method="POST" action="{{ route('products.store') }}">
                <!-- без данного тега не будет работать !!! -->
                @csrf
                <div class="mb-3">
                    <label for="article" class="form-label">Артикул</label>
                    <input type="text" class="form-control" name="article" id="article">
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label">Описание</label>
                    <textarea class="form-control" id="description" name="description" rows="3"></textarea>
                </div>

                <div class="mb-3">
                    <label for="category" class="form-label">Категория</label>
                    <input type="text" class="form-control" name="category" id="category">
                </div>

                <div class="mb-3">
                    <label for="price" class="form-label">Цена</label>
                    <input type="number" class="form-control" name="price" id="price">
                </div>

                <div class="mb-3">
                    <label for="picturesource" class="form-label">Ссылка на изображение</label>
                    <input type="text" class="form-control" name="picturesource" id="picturesource">
                </div>

                <button type="submit" class="btn btn-success">Создать</button>
                <a href="#">
                    <button type="button" class="btn btn-primary">Отмена</button>
                </a>
            </form>
        </div>
    </div>
@endsection

@extends('layout.app')

@section('title', 'Изменение карточки товара')

@section('content')
    <div class="card">
        <div class="card-header">
            Товар
        </div>
        <div class="card-body">

            <form method="POST" action="{{ route('products.update', $product->id) }}">
                @method('PUT')
                @csrf

                <div class="mb-3">
                    <label for="article" class="form-label">Артикул</label>
                    <input type="text" class="form-control" name="article" id="article" value="{{ $product->article }}">
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label">Описание</label>
                    <textarea class="form-control" id="description" name="description" rows="3" >{{ $product->description }}</textarea>
                </div>

                <div class="mb-3">
                    <label for="category" class="form-label">Категория</label>
                    <input type="text" class="form-control" name="category" id="category" value="{{ $product->category }}">
                </div>

                <div class="mb-3">
                    <label for="price" class="form-label">Цена</label>
                    <input type="number" class="form-control" name="price" id="price" value="{{ $product->price }}">
                </div>

                <div class="mb-3">
                    <label for="picturesource" class="form-label">Ссылка на изображение</label>
                    <input type="text" class="form-control" name="picturesource" id="picturesource" value="{{ $product->picturesource }}">
                </div>

                <button type="submit" class="btn btn-success">Создать</button>
                <a href="#">
                    <button type="button" class="btn btn-primary">Отмена</button>
                </a>
            </form>
        </div>
    </div>
@endsection

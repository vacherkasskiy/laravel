@extends('layout.app')

<!-- parameter can be a string -->
@section('title', 'Карточка товара')

<!-- or a whole section -->
@section('content')
    <div class="card">
        <div class="card-header">
            {{ $product->name }}
        </div>
        <div class="card-body">
            <p>Артикул: {{$product->article}}</p>
            <button class="btn btn-primary">Назад</button>
        </div>
    </div>

<!-- which is have to be closed -->
@endsection

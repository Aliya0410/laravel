@extends('layouts.app')

@section('content')
    <h1>Продукты</h1>
    <div class="products">
        @foreach ($products as $product)
            @component('components.product_card', ['product' => $product])
            @endcomponent
        @endforeach
    </div>
@endsection
    <style>
        .product {
            border: 1px solid #ccc;
            padding: 10px;
            margin-bottom: 10px;
        }
        .out-of-stock {
            background-color: #888;
        }
    </style>

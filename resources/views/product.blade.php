@extends('layouts.app')

@section('content')
    <h1>{{ $product->name }}</h1>
    <p>Цена: {{ $product->cost }}</p>
    <p>Количество: 
        @if ($product->amount > 0)
            {{ $product->amount }}
        @else
            Нет в наличии
        @endif
    </p>

    @if (Auth::check())
        @if (session('success'))
            <div class="success">
                {{ session('success') }}
            </div>
        @endif

        @if ($errors->any())
            <div class="error">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="/products/{{ $product->id }}/order" method="POST">
            @csrf
            <label for="quantity">Количество:</label>
            <input type="number" name="quantity" id="quantity" min="1">
            <button type="submit">Заказать</button>
        </form>
    @endif
@endsection
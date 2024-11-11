@extends('layouts.app')

@section('content')
    <h1>Мои Заказы</h1>
    <ul>
        @forelse ($orders as $order)
            <li>
                Товар: {{ $order->product->name }}
                Количество: {{ $order->quantity }}
                Сумма: {{ $order->total_amount }}
                Статус: {{ $order->status }}
            </li>
        @empty
            <li>У вас нет заказов.</li>
        @endforelse
    </ul>
@endsection
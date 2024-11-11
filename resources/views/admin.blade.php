@extends('layouts.app')

@section('content')
    <h1>Панель администратора</h1>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Название товара</th>
                <th>Количество</th>
                <th>Дата создания</th>
                <th>Email пользователя</th>
                <th>Статус</th>
                <th>Действия</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($orders as $order)
                <tr>
                    <td>{{ $order->product->name }}</td>
                    <td>{{ $order->quantity }}</td>
                    <td>{{ $order->created_at }}</td>
                    <td>{{ $order->user->email }}</td>
                    <td>{{ $order->status }}</td>
                    <td>
                        @if ($order->status === 'new')
                            <form action="{{ route('admin.order.approve', $order->id) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <button type="submit" class="btn btn-success">Одобрить</button>
                            </form>
                        @elseif ($order->status === 'approved' && $order->product->amount >= $order->quantity)
                            <form action="{{ route('admin.order.deliver', $order->id) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <button type="submit" class="btn btn-primary">Отправить</button>
                            </form>
                        @endif
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
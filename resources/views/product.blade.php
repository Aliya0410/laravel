<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $product->name }}</title>
</head>
<body>
<h1>{{ $product->name }}</h1>
    <p>Цена: {{ $product->cost }}</p>
    <p>Количество: {{ $product->amount }}</p>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if ($errors->has('quantity'))
    <div class="alert alert-danger">
        {{ $errors->first('quantity') }}
    </div>
@endif

    <form action="/products/{{ $product->id }}/order" method="POST">
        @csrf
        <label for="quantity">Количество:</label>
        <input type="number" name="quantity" id="quantity" min="1">
        <button type="submit">Заказать</button>
    </form>
</body>
</html>
<<<<<<< HEAD
<div class="product @if ($product->amount < 1) out-of-stock @endif"> 
    @if ($product->amount > 0)
        <a href="/products/{{ $product->id }}">{{ $product->name }}</a>
    @else
        <span>{{ $product->name }}</span> 
    @endif
    <p>Цена: {{ $product->cost }}</p>
    <p>Количество: 
        @if ($product->amount > 0)
            {{ $product->amount }}
        @else
            Нет в наличии
        @endif
    </p>
</div>

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
=======
<div class="product-card"> 
    <h2>{{ $product['name'] }}</h2> 
    <p>Цена: {{ $product['cost'] }}</p> 
    <p>Количество: {{ $product['amount'] }}</p> 
</div> 
>>>>>>> 8faf8bd17ded619649dfc7adf42fec7dde0ee8fb

<!DOCTYPE html> 
<html> 
<head> 
    <title>Products</title> 
</head> 
<body> 
    <h1>Products</h1> 
    <div class="products"> 
        @foreach ($products as $product) 
            @component('components.product_card', ['product' => $product]) 
            @endcomponent
        @endforeach 
    </div> 
</body> 
</html> 
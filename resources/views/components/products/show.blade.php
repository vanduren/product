@props(['product'])

<h1>{{ $product->name }}</h1>
<h2>prijs: {{$product->price}}</h2>
<p>
    {{$product->description}}
</p>

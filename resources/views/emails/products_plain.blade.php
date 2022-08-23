producten overzicht
@foreach ($products as $product)
    {{ $product->name }} - {{ $product->price }}
@endforeach

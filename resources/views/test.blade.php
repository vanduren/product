<!DOCTYPE html>
<html>
<head>
    @vite('resources/css/app.css')
</head>
<body>
    <div class="bg-fuchsia-100">
    @foreach ($products as $product)
        {{$product->name}}<br>
    @endforeach
    </div>
{{$products->links()}}
</body>
</html>

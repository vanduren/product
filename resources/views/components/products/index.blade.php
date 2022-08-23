@props(['products', 'categories'])
{{-- <div style="display: grid; grid-template-columns:repeat({{$categories->count()}}, 1fr);"> --}}
<div style="display: grid; grid-template-columns:repeat(auto-fit, 7.5rem);">
    @foreach ($categories as $category)
        {{-- <a href="{{route('products.index', ['category_id'=>$category->id])}}" class="bg-{{Illuminate\Support\Str::lower($category->name)}}-100">{{$category->name}}</a> --}}
        <a href="{{route('products.index', ['category_id'=>$category->id])}}" class="bg-orange-100 mr-1 text-center">{{$category->name}}</a>
    @endforeach
</div>
<div style="
    display:grid;
    grid-template-columns:max-content max-content max-content;
    column-gap: 5rem">
    @foreach ($products as $product)
        <div>
            <a href="{{route('products.show', $product)}}">
                {{$product->name}}
            </a>
        </div>
        <div>
            {{$product->price}}
        </div>
        <div>
            {{$product->category->name}}
        </div>
    @endforeach
</div>
{{-- <table class="bg-blue-100">
@foreach ($products as $product)
<tr>
    <td>
        <a href="{{route('products.show', $product)}}">
            {{$product->name}}
        </a>
    </td>
    <td>
        {{$product->price}}
    </td>
    <td>
        {{$product->category->name}}
    </td>
</tr>
@endforeach
</table> --}}


<form action="{{route('products.store')}}" method="POST">
    @csrf
    <div>
        naam: <input type="text" name="name">
    </div>
    <div style="color:red;">
        @error('name')
            {{$message}}
        @enderror
    </div>
    <div>
        prijs: <input type="number" name="price" step="0.01" value=0>
    </div>
    <div>
        omschrijving: <textarea name="description"></textarea>
    </div>
    <input type="submit" value="Maak product">
</form>

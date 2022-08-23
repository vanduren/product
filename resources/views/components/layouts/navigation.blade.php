<nav role="navigation">
    <ul>
        <li><a class="active" href="{{route('products.index')}}">Home</a></li>
        <li><a href="#">Producten</a>
            <ul class="dropdown">
                <li><a href="{{route('products.index')}}">Producten overzicht</a></li>
                <li><a href="{{route('products.create')}}">Nieuw product</a></li>
            </ul>
        </li>
        <li><a href="{{route('contact')}}">Contact</a></li>
        <li ><a href="{{route('about')}}">About</a></li>
    </ul>
</nav>

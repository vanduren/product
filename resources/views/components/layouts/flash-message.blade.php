{{-- session() is a helper --}}
@if(session()->has('message'))
    <div style="position: absolute;
                top: 20em;
                left: 50%;
                width: 20%;
                background-color:yellow;
                color:blue;
                border: 3px solid green;
                padding: 10px;">
        <p>
            {{session('message')}}
        </p>
    </div>
@endif

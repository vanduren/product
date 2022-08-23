<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
    <style>
        a {
        text-decoration: none;
        }

        nav {
        font-family: monospace;
        margin-bottom: 2em;
        }

        ul {
        background: darkorange;
        list-style: none;
        margin: 0;
        padding-left: 0;
        }

        li {
        color: #fff;
        background: darkorange;
        display: block;
        float: left;
        padding: 1rem;
        position: relative;
        text-decoration: none;
        transition-duration: 0.5s;
        }

        li a {
        color: #fff;
        }

        li:hover,
        li:focus-within {
        background: red;
        cursor: pointer;
        }

        li:focus-within a {
        outline: none;
        }

        ul li ul {
        background: orange;
        visibility: hidden;
        opacity: 0;
        min-width: 5rem;
        position: absolute;
        transition: all 0.5s ease;
        margin-top: 1rem;
        left: 0;
        display: none;
        }

        ul li:hover > ul,
        ul li:focus-within > ul,
        ul li ul:hover,
        ul li ul:focus {
        visibility: visible;
        opacity: 1;
        display: block
        }

        ul li ul li {
        clear: both;
        width: 100%;
        }
    </style>
    @vite('resources/css/app.css')
</head>
<body>
    {{-- make grid to stack elements --}}
    <div style="display:grid">
        <div style="margin-bottom: 2em;">
            <x-layouts.navigation/>
            <div class="">
                <x-layouts.search route="products.index"/>
            </div>
        </div>
        <div>
            {{$slot}}
        </div>
    </div>
    <x-layouts.flash-message/>
</body>
</html>

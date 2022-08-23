<x-layouts.layout>
    <x-slot name="title">
        producten overzicht
    </x-slot>
    <x-products.search/>
    {{-- :products is name of props and between "" the name of data to be transferred --}}
    <x-products.index :products="$products" :categories="$categories"/>
</x-layouts.layout>

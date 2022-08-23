<div class="ml-2 mr-2">
    <x-layouts.layout>
        <x-slot name="title">
            producten overzicht
        </x-slot>
        <x-products.search/>
        {{-- :products is name of props and between "" the name of data to be transferred --}}

        <x-products.index :products="$products" :categories="$categories"/>
    </x-layouts.layout>
    <div class="grid grid-cols-2">
        {{$products->links()}}
    </div>
</div>

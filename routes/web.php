<?php

use App\Http\Controllers\ProductController;
use App\Mail\MailtrapExample;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('contact', function(){
    return view('pages.contact');
})->name('contact');

Route::get('about', function(){
    return view('pages.about');
})->name('about');

Route::resource('products', ProductController::class);

Route::get('test', function(){
    $products=Product::paginate(20);
    return view('test', ['products' => $products]);
});

Route::get('mail', function(){
    $products = Product::all();
    $categories = Category::all();
    Mail::to('newuser@example.com')->send(new MailtrapExample($products, $categories));
    return 'A message has been sent to Mailtrap!';
});

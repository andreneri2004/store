<?php

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::get('/products', fn (Product $product) => $product->all());
Route::get('/products/{id}', fn(Product $product, $id) => $product->find($id));
Route::delete('/products/{id}', fn(Product $product, $id) => $product->find($id)->delete());

Route::get('/teste', function (Request $request) {
    echo 'cheguei aqui';
});

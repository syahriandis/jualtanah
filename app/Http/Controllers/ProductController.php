<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
   public function show($id)
{
    $produk = 'Produk ' . $id;
    return view('list_product', compact('id', 'produk'));
}

}

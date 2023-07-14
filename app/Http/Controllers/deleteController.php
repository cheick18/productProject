<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class deleteController extends Controller
{
    //
    public function delete($id){
      $product=  new Product();
        $product = Product::find($id);
        if (!$product) {
            return redirect()->route('welcome')->with('error', 'Product not found.');
        }
        $product->delete();
        return redirect('/');

    }
}

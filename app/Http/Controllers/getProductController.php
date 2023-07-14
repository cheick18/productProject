<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class getProductController extends Controller
{
    //
    public function producte(Product $product){
        $user=User::all();
        

        return view('getProduct',compact('user','product'));
    }
    public function update(Request $request, $id){
        $product = Product::find($id);
      
        if (!$product) {
            return redirect()->route('/')->with('error', 'Product not found.');
        }
        $validated = $request->validate([
            'name' => 'required|max:255',
            'description' => 'required',
            'quantity'=> 'required|numeric|min:1|max:100',
            'type' => 'required',
            'picture' => 'required',
            'user_id' => 'required'
        ]);
       
        $product->name= $validated ['name'];
        $product->description= $validated ['description'];
        $product->quantity= $validated ['quantity'];
        $product->picture= $validated ['picture'];
        $product->type= $validated ['type'];
        $product->user_id= $validated ['user_id'];
        $product->save();
       return view('welcome');

    }
}

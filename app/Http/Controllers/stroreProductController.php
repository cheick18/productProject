<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class stroreProductController extends Controller
{
    //
  
    public function create(){
        $user=User::all();


        return view('form',[
            'user'=>$user
        ]);
    }

    public function storeProduct(Request $request){
        $validated = $request->validate([
            'name' => 'required|max:255',
            'description' => 'required',
            'quantity'=> 'required|numeric|min:1|max:100',
            'type' => 'required',
            'picture' => 'required|image',
            'user_id' => 'required'
        ]);
         $user= User::find($validated ['user_id']);
        $product = new Product();
        $product->name= $validated ['name'];
        $product->description= $validated ['description'];
        $product->quantity= $validated ['quantity'];
        $product->picture= $validated ['picture'];
        $product->user_id= $validated ['user_id'];
        $product->type= $validated ['type'];
    
        $user->product()->save($product);
            $product->save();
       
        return view('welcome');


     
    }
    
}

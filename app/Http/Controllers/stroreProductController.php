<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class stroreProductController extends Controller
{
    //

    public function create(){
        return view('form');
    }

    public function storeProduct(Request $request){
        $validated = $request->validate([
            'name' => 'required|max:255',
            'description' => 'required',
            'quantity'=> 'required|numeric|min:1|max:100',
            'type' => 'required',
            'picture' => 'required|image',
        ]);
        dd(Request()->all());
     
     
    }
}

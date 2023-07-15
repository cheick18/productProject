@extends('layouts.nav')
@section('name')$
<div class="container-fluid bg-dark" >
<div class="container">
<div class="row pt-4">
    <div class="col-8 ">
        
        <form action="/updateProduct/{{ $product->id }}" enctype="multipart/form-data" method="PUT">
         @csrf
         @method('PUT')
         <div class="mb-3">
            
            <label for="name" class="form-label">Product name </label>
            <input id="name" class="form-control" type="text" name="name" value="{{ $product->name }}" required autofocus>
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Product description</label>
            <textarea class="form-control" id="description" rows="3" name="description" required autofocus>{{ $product->description }}</textarea>


        </div>
        <div class="mb-3">
            <label for="quantity" class="form-label">Product quantity</label>
            <input id="quantity" class="form-control" type="text" name="quantity" value="{{ $product-> quantity}}" required autofocus>
        </div>
        <div class="mb-3">
            <label for="type" class="form-label">Product type</label>
            <input id="type" class="form-control" type="text" name="type" value="{{ $product->type }}" required autofocus>
        </div>
        <div class="form-group mb-3">
            <label for="users">Users :</label>
            <select class="form-control" id="user_id" name="user_id">
             
                    <option value="{{ $product->user->id }}">{{ $product->user->name }}</option>
             
            </select>
        </div>
        
        <div class="mb-3">
            <label for="picture" class="form-label">Picture</label>
            <input id="picture" class="form-control-file" type="file" name="picture" value="{{ old('picture') }}" required>
        </div>
        <div class="pt-3">
            <button class="btn btn-danger">Edit product</button>

        </div>
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
        </form>
    </div>
    <footer class="bg-text-center text-lg-start text-light border mt-5">
 
        <div class="text-center p-3" >
          © 2020 Copyright:
          <a class="text-dark" href="https://github.com/cheick18/productProject"> By wague cheickne</a>
        </div>
     
    </footer>
</div>
    
@endsection
@extends('layouts.nav')
@section('name')
<div class="container-fluid bg-dark" >
<div class="container">
<div class="row pt-4">
    <div class="col-8 ">
        
        <form action="/pos" enctype="multipart/form-data" method="POST">
         @csrf
         <div class="mb-3">
            <label for="name" class="form-label text-light">Product name</label>
            <input id="name" class="form-control" type="text" name="name" value="{{ old('name') }}" required autofocus>
        </div>

        <div class="mb-3">
            <label for="description" class="form-label  text-light">Product description</label>
            <textarea class="form-control" id="description" rows="3" name="description" required autofocus>{{ old('description') }}</textarea>


        </div>
        <div class="mb-3">
            <label for="quantity" class="form-label  text-light">Product quantity</label>
            <input id="quantity" class="form-control" type="text" name="quantity" value="{{ old('quantity') }}" required autofocus>
        </div>
        <div class="mb-3">
            <label for="type" class="form-label  text-light">Product type</label>
            <input id="type" class="form-control" type="text" name="type" value="{{ old('type') }}" required autofocus>
        </div>
        <div class="form-group mb-3">
            <label for="users" class=" text-light">Users :</label>
            <select class="form-control" id="user_id" name="user_id">
                @foreach ($user as $users)
                    <option value="{{ $users->id }}">{{ $users->name }}</option>
                @endforeach
            </select>
        </div>
        
        <div class="mb-3">
            <label for="picture" class="form-label">Picture</label>
            <input id="picture" class="form-control-file" type="file" name="picture" value="{{ old('picture') }}" required>
        </div>
        <div class="pt-3">
            <button class="btn btn-secondary">Add new product</button>

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
</div>

  
</div>
<footer class="bg-text-center text-lg-start text-light border mt-5">
 
    <div class="text-center p-3" >
      © 2020 Copyright:
      <a class="text-dark" href="https://github.com/cheick18/productProject"> By wague cheickne</a>
    </div>
 
</footer>
    
@endsection
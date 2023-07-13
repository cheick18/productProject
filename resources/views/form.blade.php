@extends('layouts.nav')
@section('name')
<div class="container">
<div class="row pt-4">
    <div class="col-8 ">
        
        <form action="/pos" enctype="multipart/form-data" method="POST">
         @csrf
         <div class="mb-3">
            <label for="name" class="form-label">Product name</label>
            <input id="name" class="form-control" type="text" name="name" value="{{ old('name') }}" required autofocus>
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Product description</label>
            <textarea class="form-control" id="description" rows="3" name="description" required autofocus>{{ old('description') }}</textarea>


        </div>
        <div class="mb-3">
            <label for="quantity" class="form-label">Product quantity</label>
            <input id="quantity" class="form-control" type="text" name="quantity" value="{{ old('quantity') }}" required autofocus>
        </div>
        <div class="mb-3">
            <label for="type" class="form-label">Product type</label>
            <input id="type" class="form-control" type="text" name="type" value="{{ old('type') }}" required autofocus>
        </div>
        <div class="mb-3">
            <label for="picture" class="form-label">Picture</label>
            <input id="picture" class="form-control-file" type="file" name="picture" value="{{ old('picture') }}" required>
        </div>
        <div class="pt-3">
            <button class="btn btn-danger">Add new product</button>

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
    
@endsection
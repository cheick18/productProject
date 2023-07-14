<x-app-layout>
    <x-slot name="header">
      
    </x-slot>

    <div class="py-12 container">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
     
                <div class="row pt-5">
                    <h4>Find our producct</h4>
                        <form method="GET" action="">
                         <div class="col-6">
                            <div class="input-group mb-3 ">
                                <input type="text" class="form-control"  aria-label="Recipient's username" @error('product') is-invalid @enderror" name="key_word" value="{{ old('key_word') }}" required  autofocus>
                                <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Find product</button>
                                @error('key_word')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            
                            </div>
                        </form>
                        </div>
                        
                          
                        
                        </div>
                     
                       
                     
                    </div>
                    @php
                    $prod = Auth::user()->id;
                 
                  @endphp
                
                    @php
                   $product =new  App\Models\Product();
                   $products =new  App\Models\Product();

                @endphp
                
                @php
                    $users = App\Models\User::all();
                @endphp
                @php
                    $product  = App\Models\User::find($prod)->product; 
     $elementNumberByPage = 4;
    $currentPage = Request::get('page', 1);

    $totalItems = $product->count();
    $start = ($currentPage - 1) * $elementNumberByPage;
    $slicedItems = $product->slice($start, $elementNumberByPage);

    $paginator = new \Illuminate\Pagination\LengthAwarePaginator($slicedItems, $totalItems, $elementNumberByPage, $currentPage);
    $paginator->withPath(Request::url());
                @endphp

         

                <div class="container">
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">Product name</th>
                            <th scope="col">Picture</th>
                            <th scope="col">Typet</th>
                            <th scope="col">Update</th>
                            <th scope="col">Delete</th>
                          </tr>
                        </thead>
             <tbody>

                @if(request()->has('key_word'))
                 @php
                $key_word = request()->input('key_word');
                $productfile= \App\Models\Product::query()->where(function ($query) use ($key_word) {
               if ($key_word) {
                   $query->where('name', 'like', "%$key_word%")
                       ->orWhere('picture', 'like', "%$key_word%")
                       ->orWhere('type', 'like', "%$key_word%");
               }
           })
           ->get();
     
               @endphp
                 @foreach ( $productfile as $user)
                 <tr>
                    <td>{{$user->name}}</td>
                    <td> <img src="{{asset('img/'. $user->picture)}}" alt="product image"/></td>
                    <td>{{$user->type}}</td>
                    <td> 
                     <a href="/products/{{ $user->id }}">
                        <img src="{{asset('img/edit.png')}}" alt="product image"/> </a></td>
                         </form>
                        
                    <td> <a href="/deleteProduct/{{ $user->id}}"><img src="{{asset('img/delete.png')}}" alt="product image"/></a></td>
                 </tr>
             
                 @endforeach
             @endif
            @unless(request()->has('key_word'))
             @foreach ($paginator as $user)
             <tr>
                <td>{{$user->name}}</td>
                <td> <img src="{{asset('img/'. $user->picture)}}" alt="product image"/></td>
                <td>{{$user->type}}</td>
                <td> 
                 <a href="/products/{{ $user->id }}">
                    <img src="{{asset('img/edit.png')}}" alt="product image"/> </a></td>
                     </form>
                    
                <td> <a href="/deleteProduct/{{ $user->id}}"><img src="{{asset('img/delete.png')}}" alt="product image"/></a></td>
             </tr>
         
             @endforeach
         </tbody>
       </table>
       {{ $paginator->links() }}
             
@endunless

              
              
            

</x-app-layout>

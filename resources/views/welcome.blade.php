
            @if (Route::has('login'))
                <div class="">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                    @else
                 @extends('layouts.nav')
                 @section('name')
                 <!--
                
                 <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>
                 -->

              
                      
                        @if (Route::has('register'))
              <!--
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
              -->               
                       
                            @endif
                    @endauth
                </div>
            @endif

         <div id="app"> 
            <div id="app">
               <example-component></example-component>
           </div>
       
         </div>
         
  
            @endsection
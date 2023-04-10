@extends('layouts.app')
@section('content')
<div class=" min-h-screen flex items-center justify-center bg-gradient-to-tr from-black to-gray-900">
  <div class=" flex-1 flex flex-col space-y-5 lg:space-y-0 lg:flex-row lg:space-x-10 max-w-6xl sm:p-6 sm:my-2 sm:mx-4 sm:rounded-2xl">
    <!-- Navigation -->
   
    <!-- Content -->
    <div class="flex-1 px-2 sm:px-0">
      <div class="flex justify-between items-center">
        <h3 class="text-3xl font-extralight text-white">Пользователи</h3>
        
      </div>
      <div class="mb-10 sm:mb-0 mt-10 grid gap-4 grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">

      @foreach(\App\Models\User::all() as $users)
        <div class="relative group bg-gray-900 py-10 sm:py-15 px-4 flex flex-col space-y-2 items-center cursor-pointer rounded-md hover:bg-gray-900/80 hover:smooth-hover">
          <img class="w-15 h-15 object-cover object-center rounded-full" src="https://img.icons8.com/ios-glyphs/60/FFFFFF/user--v1.png" alt="cuisine" />
          <h4 class="text-white text-2xl font-bold capitalize text-center">{{ $users->name }}</h4>
          <p class="text-teal-300" >online</p>
        </div>



                


        @endforeach
      </div>
    </div>
  </div>
</div>









@endsection



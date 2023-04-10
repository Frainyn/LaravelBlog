@extends('layouts.app')
@section('content')
    <!-- <div class="container">
        <div class="row">
            <div class="col-12 pt-2">
                 <div class="row">
                    <div class="col-8">
                        <h1 class="display-one">Our Blog!</h1>
                        <p>Enjoy reading our posts. Click on a post to read!</p>
                    </div>
                    <div class="col-4">
                        <p>Create new Post</p>
                        <a href="/blog/create/post" class="btn btn-primary btn-sm">Add Post</a>
                    </div>
                </div>                
                @forelse($posts as $post)
                    <ul>
                        <li><a href="./blog/{{ $post->id }}">{{ ucfirst($post->title) }}</a></li>
                    </ul>
                @empty
                    <p class="text-warning">No blog Posts available</p>
                @endforelse
            </div>
        </div>
    </div>

 -->
  
<div class="fmin-h-screen flex items-center justify-center bg-gradient-to-tr from-black to-gray-900" >



  <div class="max-w-4xl flex items-center h-auto lg:h-screen flex-wrap mx-auto my-32 lg:my-0">
    
	<!--Main Col-->
	<div id="profile" class="w-full lg:w-3/5 rounded-lg   opacity-75 mx-6 lg:mx-0">
	

		<div class="p-4 md:p-12 text-center lg:text-left">
			<!-- Image for mobile view-->
			<div class="block lg:hidden rounded-full shadow-xl mx-auto -mt-16 h-48 w-48 bg-cover bg-center" style="background-image: url('https://images.wallpaperscraft.ru/image/single/chelovek_profil_siluet_118321_3840x2400.jpg')"></div>
			
			
			
			<p class="pt-4 text-base font-bold flex items-center justify-center lg:justify-start text-white">Ваши посты</p>
            
			
            @forelse($posts as $post)
            <ul>
                
                <li class="flex justify-between bg-gray-900 my-5 p-2 align-items-center rounded-lg text-gray-100 "><a href="./blog/{{ $post->id }}">{{ ucfirst($post->title) }}</a>
                    <div>
                        <a href="/blog/{{ $post->id }}/edit">
                            <img class="w-6 h-6 rounded-full mr-4 avatar " data-tippy-content="Edit" src="https://cdn-icons-png.flaticon.com/512/9283/9283120.png" alt="Edit">
                        </a>
                    </div>
                <li>
                
            
                
                
            </ul>
                       
                    
            @empty
                <p class="text-warning">У вас ещё нет ни одного поста</p>
            @endforelse    
			<div class="pt-12 pb-8">
				<a href="/blog/create/post" class="bg-orange-700 hover:bg-orange-900 text-white font-bold py-2 px-4 rounded-full">
				  Добавить пост
                </a> 
			</div>

			
			
			<!-- Use https://simpleicons.org/ to find the svg for your preferred product --> 

		</div>

	</div>
	
	<!--Img Col-->
	<div class="w-full lg:w-2/5">
		<!-- Big profile image for side bar (desktop) -->
		<img src="https://images.wallpaperscraft.ru/image/single/chelovek_profil_siluet_118321_3840x2400.jpg" class="rounded-none lg:rounded-lg shadow-2xl hidden lg:block">
		<!-- Image from: http://unsplash.com/photos/MP0IUfwrn0A -->
		
	</div>
	
	
</div>

	
</div>



















@endsection



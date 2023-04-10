@extends('layouts.app')
@section('content')

<div class=" min-h-screen flex items-center justify-center bg-gradient-to-tr from-black to-gray-900">
	<div class="">
	<!--Title-->
	<div class="text-center pt-8 md:pt-16 ">
		
		<h1 class="font-bold break-normal text-3xl md:text-5xl text-white">\1</h1>
	</div>

	<!--image-->
	<div class="container w-full max-w-6xl mx-auto bg-white bg-cover mt-8 rounded"></div>
	
	<!--Container-->
	<div class="container max-w-5xl mx-auto -mt-32">
	<!-- <form id="delete-frm" class="" action="" method="POST">
                    @method('DELETE')
                    @csrf
                    <button class="btn btn-danger">
				
                        <img class="w-6 h-6 rounded-full mr-4 avatar" data-tippy-content="Del" src="https://cdn-icons-png.flaticon.com/512/9247/9247842.png" alt="Del">
                   
					</button>
                </form>	 -->
		
		<div class="mx-0 sm:mx-6">
			
			<div class="bg-white w-full p-8 md:p-24 text-xl md:text-2xl text-gray-800 leading-normal" style="font-family:Georgia,serif;">
            <h1 class="font-bold break-normal text-3xl md:text-4xl ">{{ $post->title }}</h1>
				<!--Post Content-->
				<p class="py-6">{{ $post->body }}</p>	
						
						
				<!--/ Post Content-->
						
			</div>
            <!--Author-->
            <div class="flex w-full items-center font-sans p-8 md:p-6 bg-gray-200">
                <img class="w-10 h-10 rounded-full mr-4" src="http://i.pravatar.cc/300" alt="Avatar of Author">
                <div class="flex-1">
                    <p class="text-base font-bold text-base md:text-xl leading-none">{{ $post->user->name }}</p>
                    
                    
                </div>
                <div class="justify-end">
                    <button class="bg-transparent border border-gray-500 hover:border-green-500 text-xs text-gray-500 hover:text-green-500 font-bold py-2 px-4 rounded-full">Read More</button>
                </div>
            </div>
            <!--/Author-->
			
		</div>
	

	</div>




	<div class="">
	
		<div class="container w-full max-w-6xl mx-auto px-2 py-8">
			<div class="flex flex-wrap -mx-2">
            @foreach(\App\Models\BlogPost::all()->take(3) as $post)
					
				<div class="w-full md:w-1/3 p-6 flex flex-col flex-grow flex-shrink">
					<div class="flex-1 bg-white rounded-t rounded-b-none overflow-hidden shadow-lg ">
						<a href="/blog/{{ $post->id }}" class="flex flex-wrap no-underline hover:no-underline">
							<img src="https://source.unsplash.com/collection/1{{ $post->id }}5/800x600" class="h-64 w-full rounded-t pb-6">
							<p class="w-full text-gray-600 text-xs md:text-sm px-6"></p>
							<div class="w-full font-bold text-xl text-gray-900 px-6">{{ $post->title }}</div>
							<p class="text-gray-800 font-serif text-base px-6 mb-5">
								{{ Str::limit($post->body, 100) }}
							</p>
						</a>
					</div>
					<div class=" bg-white rounded-b rounded-t-none overflow-hidden shadow-lg p-6  bg-gray-900">
						<div class="flex items-center ">
							<img class="w-6 h-6 rounded-full mr-4 avatar" data-tippy-content="Author Name" src="https://img.icons8.com/ios-glyphs/60/FFFFFF/user--v1.png" alt="Avatar of Author">
							<p class="text-gray-600">{{ $post->user->name }}</p>
						</div>
						
					</div>
					
				</div>
			@endforeach
			</div>
            <footer class="bg-white-900">	
		<div class=" flex items-center px-2 py-8">

			<div class="w-full mx-auto flex flex-wrap items-center">
				<div class="flex w-full md:w-1/2 justify-center md:justify-start text-white font-extrabold">
					<a class="text-gray-900 no-underline hover:text-gray-900 hover:no-underline" href="#">
                    🌍<span class="text-base text-gray-200">FrainynBlog</span>
					</a>
				</div>
				<div class="flex w-full pt-2 content-center justify-between md:w-1/2 md:justify-end">
					<ul class="list-reset flex justify-center flex-1 md:flex-none items-center">
					  <li>
						<a class="inline-block py-2 px-3 text-white no-underline" href="/">Главная</a>
					  </li>
					  <li>
						<a class="inline-block text-gray-900 no-underline hover:text-blue-900 hover:underline py-2 px-3" href="#">Тех. поддержка</a>
					  </li>
					  <li>
						<a class="inline-block text-gray-900 no-underline hover:text-blue-900 hover:underline py-2 px-3" href="#">Контакты</a>
					  </li>
					</ul>
				</div>
			</div>
		</div>
	</footer>
		</div>

</div>

		</div>
       
        </div>
        

    @endsection

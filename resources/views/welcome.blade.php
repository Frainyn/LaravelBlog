@extends('layouts.app')

@section('content')


<div class="bg-gradient-to-b from-black to-gray-900">
<!--Header-->
<div class="w-full m-0 p-0 bg-cover bg-bottom" style="background-image:url('https://mobimg.b-cdn.net/v3/fetch/4d/4dc600c9b096e05962d4507a44df3c73.jpeg'); height: 60vh; max-height:460px;">
			<div class="container max-w-4xl mx-auto pt-16 md:pt-32 text-center break-normal">
				<!--Title-->
					
					


                    @guest
                    @if (Route::has('login'))
                        
                        <a href="{{ route('register') }}" class="text-xl md:text-1xl font-extrabold text-white">

							<h1 class="font-extrabold text-transparent text-5xl bg-clip-text bg-gradient-to-r from-orange-400 to-blue-600 " >
								СОЦИАЛИЗИРУЙСЯ
							</h1>
							<h1 class="font-extrabold text-transparent text-5xl bg-clip-text bg-gradient-to-r from-orange-400 to-blue-600">
								ВСТУПАЙ В НАШИ РЯДЫ
							</h1>
						</a>
						

                        <!-- <p class="text-white font-extrabold text-3xl md:text-5xl">
                            Социализируйся
                        </p>Вступай в наши ряды!</a>

						<h1 class="text-5xl font-extrabold text-transparent bg-clip-text bg-gradient-to-br from-orange-200 to-white-950">
  							Hello, world!
						</h1> -->
						


                    @endif
                    @else

						<a href="/" class="text-xl md:text-2xl font-extrabold text-white">

							<h1 class="font-extrabold text-transparent text-5xl bg-clip-text bg-gradient-to-r from-orange-400 to-blue-600">
								ТЫ ВСЁ СМОЖЕШЬ
							</h1>
							<h1 class="font-extrabold text-transparent text-5xl bg-clip-text bg-gradient-to-r from-orange-400 to-blue-600">
								<a id="navbarDropdown" class="nav-link dropdown-toggle uppercase" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
								{{ Auth::user()->name }}
								</a>
							</h1>
						</a>
                        
                        <!-- <p class=" text-white font-extrabold text-3xl md:text-5xl">Приятного дня</p>
                        <p class="text-xl md:text-2xl text-gray-500">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                            </a>
                        </p> -->
						
                        
                    @endguest



			</div>
		</div>





        


		<!--Container-->
		<div class="container px-4 md:px-0 max-w-6xl mx-auto -mt-32">
			
			<div class="mx-0 sm:mx-6">
				
				<!--Nav-->
				<nav class="mt-0 w-full">
					<div class="container mx-auto flex items-center">
						
						<div class="flex w-1/2 pl-4 text-sm">
							<ul class="list-reset flex justify-between flex-1 md:flex-none items-center">
								<li class="mr-2">
								<a class="inline-block py-2 px-2 text-white no-underline hover:underline" href="post.html">Популярные</a>
								</li>
								<li class="mr-2">
								<a class="inline-block text-gray-600 no-underline hover:text-gray-200 hover:underline py-2 px-2" href="#">Новые</a>
								</li>
								<li class="mr-2">
								<a class="inline-block text-gray-600 no-underline hover:text-gray-200 hover:underline py-2 px-2" href="#">Старые</a>
								</li>
								<li class="mr-2">
								<a class="inline-block text-gray-600 no-underline hover:text-gray-200 hover:underline py-2 px-2" href="post_vue.html">Ваше авторство</a>
								</li>
							</ul>
						</div>
					</div>
				</nav>

				<!-- <div class="bg-blue-200 w-full text-xl md:text-2xl text-gray-800 leading-normal rounded-t"> -->
				
				<div class="">
					
				<!--Lead Card-->
				<div class="flex h-full bg-white rounded overflow-hidden shadow-lg">
					<a href="https://vk.com/chupalov" class="flex flex-wrap no-underline hover:no-underline">
						<div class="w-full md:w-2/3 rounded-t">	
							<img src="https://img.freepik.com/free-photo/medium-shot-couple-with-map_23-2148966557.jpg?w=1060&t=st=1680418631~exp=1680419231~hmac=f6e2be2531fe09864afbb1fbb3c5fb09df769623aef1615656ec1b6b0954a960" class="h-full w-full shadow">
						</div>

						<div class="w-full md:w-1/3 flex flex-col flex-grow flex-shrink">
							<div class="flex-1 bg-white rounded-t rounded-b-none overflow-hidden shadow-lg bg-gradient-to-r from-white-200 to-white-100">
								<p class="w-full text-gray-100 text-xs md:text-sm pt-6 px-6"></p>
								<div class="w-full font-bold text-xl text-gray-100 px-6">👋 FrainynBlog</div>
								<p class="text-gray-100 font-serif text-base px-6 mb-5 ">
									Ваше мнение или история может помочь другому, поэтому не стесняйтесь и делитесь своими впечатлениями, путешествиями! 
								</p>
								<p class="text-gray-100 font-serif text-base px-6 mb-5">
									Только мы можем сделать мир лучше, а это будущее. Ведь каждый из нас ходячая информационная база, так давайте же развиваться вместе! 
								</p>
								<p class="text-gray-100 font-serif text-base px-6 mb-5">
									Нам не важно откуда вы родом, где сейчас живёте, вы человек? Это уже делает вам вечный доступ к этому ресурсу. 
								</p>
							</div>


						</div>

					</a>
				</div>
				<!--/Lead Card-->


				<!--Posts Container-->
				<div class="flex flex-wrap justify-between pt-12 -mx-6">

					<!--1/3 col -->
					@foreach(\App\Models\BlogPost::all() as $post)
					
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
						<div class=" bg-white rounded-b rounded-t-none overflow-hidden shadow-lg p-6 bg-gray-900">
							<div class="flex items-center ">
								<img class="w-6 h-6 rounded-full mr-4 avatar" data-tippy-content="Author Name" src="https://img.icons8.com/ios-glyphs/60/FFFFFF/user--v1.png" alt="Avatar of Author">
								<p class="text-gray-600">{{ $post->user->name }}</p>
							</div>
						</div>
					</div>
					@endforeach
					
				
					
					
					
					<!--1/2 col -->
					<div class="w-full md:w-1/2 p-6 flex flex-col flex-grow flex-shrink">
						<div class="flex-1 bg-gradient-to-r from-white-200 to-white-100 rounded-t rounded-b-none overflow-hidden shadow-lg">
							<a href="#" class="flex flex-wrap no-underline hover:no-underline">
								<img src="https://kartinkin.net/uploads/posts/2022-03/1646417888_21-kartinkin-net-p-massovaya-kultura-kartinki-22.jpg" class="h-full w-full rounded-t pb-6">
								<p class="w-full text-gray-600 text-xs md:text-sm px-6">Переход осуществляется по нажатии на этот блок</p>
								<div class="w-full font-bold text-xl text-gray-300 px-6">Скучно дома?</div>
								<p class="text-gray-300 font-serif text-base px-6 mb-5">
									Для вас это беда? Тогда у нас есть, что вам предложить! 
								</p>
								<p class="text-gray-300 font-serif text-base px-6 mb-5">
									Вы можете посмотреть какие в ближайшее время планируются живые мероприятия. 
								</p>
							</a>
						</div>

					</div>

					<!--1/2 col -->
					<div class="w-full md:w-1/2 p-6 flex flex-col flex-grow flex-shrink">
						<div class="flex-1 bg-gradient-to-r from-white-200 to-white-100 flex-row bg-white rounded-t rounded-b-none overflow-hidden shadow-lg">
							<a href="#" class="flex flex-wrap no-underline hover:no-underline">	
								<img src="https://top-fon.com/uploads/posts/2023-01/1674807096_top-fon-com-p-fon-dlya-prezentatsii-opros-1.jpg" class="h-full w-full rounded-t pb-6">
								<p class="w-full text-gray-600 text-xs md:text-sm px-6">Переход осуществляется по нажатии на этот блок</p>
								<div class="w-full font-bold text-xl text-gray-300 px-6">Сделаем мир лучше ✅</div>
								<p class="text-gray-300 font-serif text-base px-6 mb-5">
								Мы собираем данные об улучшении нашего проекта. Если у вас есть время, то просим вас пройти опрос. Все начинается с нас, нам важно ваше мнение.
								</p>
							</a>
						</div>
					</div>

					

				
			</div>

			
			
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
						<a class="inline-block py-2 px-3 text-white no-underline" href="#">Главная</a>
					  </li>
					  <li>
						<a class="inline-block text-gray-600 no-underline hover:text-gray-200 hover:underline py-2 px-3" href="#">Тех. поддержка</a>
					  </li>
					  <li>
						<a class="inline-block text-gray-600 no-underline hover:text-gray-200 hover:underline py-2 px-3" href="#">Контакты</a>
					  </li>
					</ul>
				</div>
			</div>
        

		
		</div>
	</footer>


	</div>
    
@endsection
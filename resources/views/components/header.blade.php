<header class="text-gray-700 body-font border-b bg-white">
    <div class="container mx-auto flex flex-wrap p-2 flex-col md:flex-row items-center">
        
        <div class="lg:w-1/5 inline-flex  ml-5 lg:ml-0">
            <a href="/" class="flex order-first lg:order-none ml-0 lg:w-t1/5 title-fon font-bold items-center text-gray-900 text-1xl lg:items-center lg:justify-center mb-4 md:mb-0">
                {{ config('app.name', 'Name') }}
            </a>
        </div>

        <nav class="flex flex-wrap md:ml-auto">

            
            <a href="/" class="mr-5 hover:text-gray-900">Главная</a>
            <a href="/blog" class="mr-5 hover:text-gray-900">Личный кабинет</a>
            <a href="/about" class="mr-5 hover:text-gray-900">Контакты</a>
        </nav>
        

        <div class="lg:w-2/5 inline-flex lg:justify-end ml-5 lg:ml-0">
        
            <ul class="flex">
                @guest
                    @if (Route::has('login'))
                        <li class="mr-5">
                            <a class="inline-flex items-center bg-blue-500 border-0 py-1 px-3 focus:outline-none hover:bg-gray-600 rounded text-base mt-4 md:mt-0 text-gray-100" href="{{ route('login') }}">{{ __('Войти') }}</a>
                        </li>
                    @endif

                    @if (Route::has('register'))
                        <li class="">
                            <a class="inline-flex items-center bg-orange-500 border-0 py-1 px-3 focus:outline-none hover:bg-orange-600 rounded text-base mt-4 md:mt-0 text-gray-100" href="{{ route('register') }}">{{ __('Вступить') }}</a>
                        </li>
                    @endif
                @else

                    
                    <li class="">
                        <a class="inline-flex items-center bg-blue-400 border-0 py-1 px-3 focus:outline-none hover:bg-blue-500 rounded text-base mt-4 md:mt-0 lg:mr-32 mr-5 text-gray-100 " href="/blog/create/post">{{ __('Создать запись') }}</a>
                    </li>

                    <li class="mr-5">
                        

                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <a class="inline-flex items-center bg-red-400 border-0 py-1 px-3 focus:outline-none hover:bg-red-500 rounded text-base mt-4 md:mt-0 text-gray-100" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                {{ __('Выйти') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        
        
        </div>
        
            

    </div>
    

</header>
<main >
            @yield('content')
</main>
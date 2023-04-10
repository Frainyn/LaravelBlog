@extends('layouts.app')
@section('title', 'Регистрация')
@section('content')
<!-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> -->






<!-- Container -->
<div class="container mx-auto ">
    <div class="flex justify-center px-6 my-12 ">
        <!-- Row -->
        <div class="w-full xl:w-3/4 lg:w-11/12 flex shadow-md lg:shadow-2xl bg-white rounded-lg">
            <!-- Col -->
            <div
                class="w-full h-auto bg-gray-400 hidden lg:block lg:w-5/12 bg-cover bg-center lg:shadow-2xl"
                style="background-image: url('https://img.freepik.com/free-photo/sunset-and-silhouettes-of-trees-in-the-mountains-generative-ai_169016-29371.jpg?w=996&t=st=1680046566~exp=1680047166~hmac=84b07e7463c9c4dc97310c93d881689e8304bc324023e08f10b65bf3b2757b25')"
            ></div>
            <!-- Col -->
            <div class="w-full lg:w-7/12 bg-white p-5 rounded-lg lg:rounded-l-none lg:shadow-2xl">
            
                <h3 class="pt-4 text-2xl text-center">Создайте свой аккаунт</h3>
                <form method="POST" action="{{ route('register') }}" class="px-8 pt-6 pb-8 mb-4 bg-white rounded">
                    @csrf
                    
                    <div class="mb-4">
                        <label class="block mb-2 text-sm font-bold text-gray-700" for="name">
                            Имя
                        </label>
                        <input
                            class="w-full px-3 py-2 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline "
                            id="name"
                            type="text"
                            placeholder="Введите имя"
                            name="name" value="{{ old('name') }}" required autocomplete="name" autofocus
                        />
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong class="text-red-800">{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label class="block mb-2 text-sm font-bold text-gray-700" for="email">
                            Почта
                        </label>
                        <input
                            class="w-full px-3 py-2 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                            id="email"
                            type="email"
                            placeholder="Введите почту"
                            name="email" value="{{ old('email') }}" required autocomplete="email"
                        />
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong class="text-red-800">Электронная почта уже занята.</strong>
                            </span>
                        @enderror
                    </div>
                    
                    <div class="mb-4">
                        <label class="block mb-2 text-sm font-bold text-gray-700" for="email">
                            Пароль
                        </label>
                        <input
                            class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                            id="password"
                            type="password"
                            placeholder="Введите пароль"
                            name="password" required autocomplete="new-password"
                        />
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong class="text-red-800 ">Используйте не менее 8 символов и проверьте ввод данных</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label class="block mb-2 text-sm font-bold text-gray-700" for="password-confirm">
                            Повторите пароль
                        </label>
                        <input
                            class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                            id="password-confirm" type="password" name="password_confirmation" required autocomplete="new-password" placeholder="Повторите пароль"
                        />
                    </div>
                    
                        <button
                            class="w-full px-4 py-2 font-bold text-white bg-gradient-to-b from-black to-gray-900 rounded-full hover:from-gray-800 to-gray-200 focus:outline-none focus:shadow-outline"
                            type="submit"
                        >
                        {{ __('Регистрация') }}
                        </button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>










@endsection


@extends('layouts.app')

@section('title', 'Вход')

@section('content')

<!-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

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
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
</div> -->



<div class="container mx-auto ">
			<div class="flex justify-center px-30 my-12 ">
				<!-- Row -->
				<div class="w-full h-full xl:w-3/4 lg:w-11/12 flex shadow-md lg:shadow-2xl bg-white rounded-lg">
					<!-- Col -->
					<div
						class="w-full h-auto bg-gray-400 hidden lg:block lg:w-5/12 bg-cover bg-center lg:shadow-2xl"
						style="background-image: url('https://img.freepik.com/free-vector/login-concept-illustration_114360-739.jpg?w=740&t=st=1680044491~exp=1680045091~hmac=624e980c5ad3d7f9ede61d9423ca0a90c583b55a80a696a612945951acc1912d')"
					></div>
					<!-- Col -->
					<div class="w-full lg:w-7/12 bg-white p-5 rounded-lg lg:rounded-l-none lg:shadow-2xl">
					
                        <h3 class="pt-4 text-2xl text-center">Вход в систему</h3>
						<form method="POST" action="{{ route('login') }}" class="px-8 pt-6 pb-8 mb-4 bg-white rounded">
                            @csrf
                            
                        
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
                                        <strong class="text-red-800">Эти учетные данные не соответствуют нашим записям</strong>
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
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
							</div>
                            
							
								<button
									class="w-full px-4 py-2 font-bold text-white bg-teal-400 rounded-full hover:bg-teal-700 focus:outline-none focus:shadow-outline "
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

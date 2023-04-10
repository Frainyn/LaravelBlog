@extends('layouts.app')
@section('title', 'Вход')
@section('content')

<div class=" min-h-screen flex items-center justify-center bg-gradient-to-tr from-black to-gray-900">
<div class="container mx-auto ">
        <h1 class="text-4xl mt-6 tracking-tight leading-10 font-extrabold text-gray-200 sm:text-5xl sm:leading-none md:text-6xl">Редактирование</h1>
        <p class="text-lg mt-2 text-gray-600">Начните редактировать свой пост ниже</p>
<!--         
    <div class="container">
        <div class="row">
            <div class="col-12 pt-2">

                    <form action="" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="control-group col-12">
                                <label for="title">Post Title</label>
                                <input type="text" id="title" class="form-control" name="title"
                                       placeholder="Enter Post Title" value="{{ $post->title }}" required>
                            </div>
                            <div class="control-group col-12 mt-2">
                                <label for="body">Post Body</label>
                                <textarea id="body" class="form-control" name="body" placeholder="Enter Post Body"
                                          rows="5" required>{{ $post->body }}</textarea>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="control-group col-12 text-center">
                                <button id="btn-submit" class="btn btn-primary">
                                    Update Post
                                </button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div> -->


    
        <form action="" method="POST">
            @csrf
            @method('PUT')
            <div class="space-y-8 divide-y divide-gray-200 w-1/2 mt-10"> 
                <div class="sm:col-span-6">
                    <label for="title" class="block text-sm font-medium text-gray-700">Заголовок</label>
                    <input type="text" id="title" class="my-3 form-control @error('title') is-invalid @enderror block w-full transition duration-150 ease-in-out appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" name="title"
                            placeholder="Введите заголовок" value="{{ $post->title }}" required>
                    @error('title')
                    <span class="invalid-feedback">
                    <strong class="text-red-800">Значение не должно быть длиннее 50 символов</strong>
                    </span>
                    @enderror
                </div>
                <div class="sm:col-span-6 pt-5">
                    <label for="body" class="block text-sm font-medium text-gray-700 ">Содержание</label>
                    <textarea id="body" class="my-3 h-300 shadow-sm focus:ring-indigo-500 appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out focus:border-indigo-500 block w-full  border-gray-300" name="body" placeholder="Содержание ждёт"
                                rows="" required style="height:300px">{{ $post->body }}</textarea>
                </div>
            </div>
            <div class="row mt-2">
                <div class="control-group col-12 my-10">
                    <button id="btn-submit" class=" px-4 py-2 text-sm font-medium leading-5 text-white transition duration-150 ease-in-out bg-indigo-500 border border-transparent rounded-md hover:bg-indigo-600 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo active:bg-indigo-700 cursor-pointer">
                        Опубликовать
                    </button>
                </div>
            </div>
        </form>
</div>
</div>

@endsection
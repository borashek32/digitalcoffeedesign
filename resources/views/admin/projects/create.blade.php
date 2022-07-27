@extends('layouts.app')
@section('content')
    <header class="bg-white shadow">
        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Добавление нового проекта
            </h2>
        </div>
    </header>

    <div class="py-4">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg px-4 py-4">
                <form action="{{ route('projects.store') }}" method="POST">
                    @csrf
                    <div class="flex columns-2">
                        <div class="w-full mb-4">
                            <label for="img" class="block text-gray-700 text-sm font-bold mb-2">
                                Фото
                            </label>

                            <div style="display:flex; flex-direction:column">
                                <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-4
                                    leading-tight focus:outline-none focus:shadow-outline @error('img') border-red-500 mb-4
                                    @enderror" id="feature_image" value="{{ old('img') }}" name="img" readonly>

                                <a href="" class="popup_selector hover:bg-blue-400 shadow appearance-none border ml-2 rounded w-40 h-9 text-center py-2 px-3 text-gray-700
                                leading-tight focus:outline-none focus:shadow-outline bg-blue-300" data-inputid="feature_image">
                                    Выбрать фото
                                </a>

                                <img src="{{ old('img') }}" alt="" class="img-uploaded" width="200">
                            </div>

                            @error('img')
                                <div class="text-red-500 mb-2 text-small">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="w-full mb-4 ml-6">
                            <label for="img" class="block text-gray-700 text-sm font-bold mb-2">
                                Категория
                            </label>

                            <select name="category_id" class="w-full form-select border rounded shadow" aria-label="Default select example">
                                <option value="{{ old('category_id') }}" selected>Выберите категорию</option>
                                    @foreach($categories as $category)
                                        <option value="{{ $category->id }}">
                                            {{ $category->name }}
                                        </option>
                                    @endforeach

                                @error('category_id')
                                    <div class="mt-2 text-red-500 mb-2 text-small">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </select>

                            <div class="mt-4">
                                <label for="link" class="block text-gray-700 text-sm font-bold mb-2">
                                    Ссылка на сайт:
                                </label>

                                <input type="text" value="{{ old('title') }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700
                                    leading-tight focus:outline-none focus:shadow-outline @error('link') border-red-500
                                    @enderror" id="link" name="link">

                                @error('link')
                                    <div class="mt-2 text-red-500 mb-2 text-small">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="mb-4">
                        <label for="exampleFormControlInput1" class="block text-gray-700 text-sm font-bold mb-2">
                            Название:
                        </label>

                        <input type="text" value="{{ old('title') }}" class="shadow         appearance-none border rounded w-full py-2 px-3 text-gray-700
                            leading-tight focus:outline-none focus:shadow-outline @error('title') border-red-500
                            @enderror" id="exampleFormControlInput2" name="title">

                        @error('title')
                            <div class="mt-2 text-red-500 mb-2 text-small">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="editor" class="block text-gray-700 text-sm font-bold mb-2">
                            Текст:
                        </label>

                        <textarea
                            rows="10"
                            name="description"
                            id="description"
                            class="editor shadow appearance-none border rounded w-full py-2 px-3 text-gray-700
                            leading-tight focus:outline-none focus:shadow-outline @error('description') border-red-500
                                @enderror">{{ old('description') }}</textarea>

                        @error('description')
                            <div class="mt-2 text-red-500 mb-2 text-small">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                        <span class="flex w-full rounded-md shadow-sm sm:ml-3 sm:w-auto">
                            <input type="submit" value="Сохранить" class="inline-flex justify-center w-full
                            rounded-md border border-transparent px-4 py-2 bg-green-600 text-base leading-6 font-medium
                            text-white shadow-sm hover:bg-green-500 focus:outline-none focus:border-green-700
                            focus:shadow-outline-green transition ease-in-out duration-150 sm:text-sm sm:leading-5">
                        </span>

                        <a href="{{ route('projects.index') }}">
                            <span class="mt-3 flex w-full rounded-md shadow-sm sm:mt-0 sm:w-auto">
                                <button type="button" class="inline-flex justify-center w-full
                                rounded-md border border-gray-300 px-4 py-2 bg-white text-base leading-6 font-medium
                                text-gray-700 shadow-sm hover:text-gray-500 focus:outline-none focus:border-blue-300
                                focus:shadow-outline-blue transition ease-in-out duration-150 sm:text-sm sm:leading-5">
                                    Выход
                                </button>
                            </span>
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <?php
    if(isset($modal)) {
        echo('$(window).load(function(){$("#' . $modal . '").modal(\'show\');});');
    }
    ?>
@endsection('content')

@section('scripts')
    <script src="https://cdn.tiny.cloud/1/9wqo0frucj2lt7oll5gxiukpbasl97x4360r6cbcb554c7cu/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
    <script type="text/javascript" src="{{ asset('js/jquery.colorbox-min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('packages/barryvdh/elfinder/js/standalonepopup.min.js') }}"></script>
@endsection

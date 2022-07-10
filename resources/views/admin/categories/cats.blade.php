<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Управление категориями
    </h2>
</x-slot>
<div class="py-4">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        @if (session()->has('success'))
            <div class="bg-teal-100 rounded-b text-teal-900 px-4 py-3 shadow-md my-3" role="alert">
                <div class="flex">
                    <div>
                        <p class="text-sm">{{ session('success') }}</p>
                    </div>
                </div>
            </div>
        @endif
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg px-4 py-4">
            <div class="flex md:flex-row w-full">
                <div class="w-full md:w-3/10 text-left">
                    <button wire:click="create()" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded my-3">Новая категория</button>
                    @if($isOpen)
                        @include('admin.categories.create')
                    @endif
                </div>
            </div>
            @if(\App\Models\Category::all()->count() > 0)
                <table class="min-w-full">
                <thead>
                <tr class="bg-gray-100">
                    <th class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 tracking-wider">No.</th>
                    <th class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 tracking-wider">Дата</th>
                    <th class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 tracking-wider">Название</th>
                    <th class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 tracking-wider">Ссылка</th>
                    <th class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 tracking-wider">Кол-во проектов</th>
                    <th class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 tracking-wider">Действие</th>
                </tr>
                </thead>
                <tbody>
                @foreach($categories as $category)
                    <tr>
                        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-300 text-sm leading-5">{{ $category->id }}</td>
                        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-300 text-sm leading-5">{{ Date::parse($category->created_at)->format('j F Y') }}</td>
                        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-300 text-sm leading-5">{{ $category->name }}</td>
                        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-300 text-sm leading-5">{{ $category->slug }}</td>
                        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-300 text-sm leading-5">{{ $category->projects->count() }}</td>
                        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-300 text-sm leading-5">
                            <button wire:click="edit({{ $category->id }})" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Редактировать</button>
                            <button wire:click="delete({{ $category->id }})" class="mt-2 bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Удалить</button>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            @else
                <p>Категорий пока не добавлено</p>
            @endif
        </div>
    </div>
</div>

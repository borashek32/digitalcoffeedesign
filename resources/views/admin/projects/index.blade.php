@extends('layouts.app')
@section('content')
    <header class="bg-white shadow">
        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Управление проектами
            </h2>
        </div>
    </header>
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
            <div class="flex justify-between">
                <div class="text-left">
                    <a href="{{ route('projects.create') }}">
                        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                            Новый проект
                        </button>
                    </a>
                </div>
                <div class="text-center">
                    @include('admin.projects.search-projects')
                </div>
            </div>
            @if(\App\Models\Project::all()->count() > 0)
                <table class="table-fixed w-full">
                <thead>
                <tr class="bg-gray-100">
                    <th class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 tracking-wider">Категория</th>
                    <th class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 tracking-wider">Дата</th>
                    <th class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 tracking-wider">Фото</th>
                    <th class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 tracking-wider">Название</th>
                    <th class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 tracking-wider">Статус</th>
                    <th class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 tracking-wider">Действие</th>
                </tr>
                </thead>
                <tbody>
                @foreach($projects as $project)
                    <tr class="trix-content">
                        <td class="px-6 py-4 border-b border-gray-300 text-sm leading-5">{{ $project->category->name }}</td>
                        <td class="px-6 py-4 border-b border-gray-300 text-sm leading-5">{{ Date::parse($project->created_at)->format('j F Y') }}</td>
                        <td class="px-6 py-4 border-b border-gray-300 text-sm leading-5">
                            <img src="{{ asset($project->img) }}" class="w-20" alt="{{ $project->title }}" />
                        </td>
                        <td class="px-6 py-4 border-b border-gray-300 text-sm leading-5">{{ $project->title }}</td>
                        <td class="px-6 py-4 border-b border-gray-300 text-sm leading-5">
                            <input
                                name="status"
                                class="form-check-input appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer"
                                type="checkbox"
                                data-toggle="toggle"
                                id="status"
                                value="{{ $project->id }}"
                                {{ $project->status == '1' ? 'checked' : '' }}
                                >
                        </td>
                        <td class="px-6 py-4 border-b border-gray-300 text-sm leading-5">
                            <button class="mb-2 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                                <a href="{{ route('projects.edit', $project) }}">
                                    Редактировать
                                </a>
                            </button>
                            <form action="{{ route('projects.destroy', $project) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <input type="submit" value="Удалить" class="bg-red-500 hover:bg-red-700
                                    text-white font-bold py-2 px-4 rounded">
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            @else
                <p>В портфолио пока нет проектов.</p>
            @endif
            <div class="mt-4">
                {{ $projects->links('pagination.simple-tailwind') }}
            </div>
        </div>
    </div>
</div>
@endsection('content')

@section('scripts')
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        $('input[name=status]').change(function () {
            var mode=$(this).prop('checked');
            var id=$(this).val();
            $.ajax({
                url: "{{ route('projects.status') }}",
                type: "POST",
                data: {
                    _token: '{{ csrf_token() }}',
                    mode: mode,
                    id: id
                },
                success: function (response) {
                    if(response.status == 200) {
                        Swal.fire({
                        icon: 'success',
                        title: 'Ok',
                        text: 'Статус проекта успешно обновлен'
                        })
                    }
                    else {
                        Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Что-то пошло не так! Попробуйте позже'
                        })
                    }
                }
            })
        });
    </script>
@endsection

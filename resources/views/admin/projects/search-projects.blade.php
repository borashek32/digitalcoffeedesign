<form method="get" action="{{ route('projects.index') }}" class="input-group mb-3">
    <div class="flex">
        <input type="text" class="shadow appearance-none border rounded w-100 py-2 px-3 text-gray-700
            leading-tight focus:outline-none focus:shadow-outline mr-4 "
            placeholder="Поиск" aria-label="Username" id="search" name="search"
            aria-describedby="basic-addon1">

        <button type="submit" class="hover:bg-blue-400 shadow appearance-none border ml-2 rounded w-20 h-9 text-center py-2 px-3 text-gray-700
            leading-tight focus:outline-none focus:shadow-outline bg-blue-200">
            Поиск
        </button>

        <a href="{{ route('projects.index') }}">
            <button type="submit" class="hover:bg-red-400 ml-4 shadow appearance-none border rounded w-20 h-9 text-center py-2 px-3 text-gray-700
            leading-tight focus:outline-none focus:shadow-outline bg-red-200">
                Сброс
            </button>
        </a>
    </div>
    @error('search')<span class="text-red-500">{{ $message }}</span>@enderror
</form>


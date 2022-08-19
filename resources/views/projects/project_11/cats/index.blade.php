@extends('projects.project_11.layouts.main')
@section('title')Personal Blog Admin | Категории @endsection
@section('content')
<div class="page">
    <main class="main">
        <div class="container">
            <div class="admin-post__new-post">
                <h2 class="search__title profile__title admin-post__title">Категории</h2>
                <a href="{{ route('personalblog-cats.create') }}">
                    <button class="buttons__button button_blue">Новая категория</button>
                </a>
            </div>
            @foreach($cats as $cat)
                <div class="admin-post">
                    <div class="admin-post__title">
                        <p class="">{{ $cat->name }}</p>
                    </div>
                    <div class="admin-post__actions">
                        <button class="buttons__button button_blue button_edit-post">
                            <a href="{{ route('personalblog-cats.edit', $cat) }}">
                                Редактировать
                            </a>
                        </button>
                        <form action="{{ route('personalblog-cats.destroy', $cat) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <input type="submit" value="Удалить" class="buttons__button button_red">
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
    </main>
</div>
@endsection
@extends('layout')

@section('title', 'Шаблом №2')

@section('content')

    <div class="content">
        <img class="img1" src="img2.jpg">

        <img class="plus" src="plus.png" data-bs-toggle="modal" data-bs-target="#myModal"
             data-bs-url="{{ route('modal') }}">
        @include('modal2')

        <p>контент2</p>

        @foreach ($second_temp as $temp)
            <p class="sidebar-trigger" data-content="{{ $temp->content }}">{{ $temp->id . ') ' . $temp->content }}</p>
        @endforeach





        <div id="sidebar" class="sidebar2">
            <p>Панель редактирования</p>
            <p>Параметры:</p>
            <p>Текст:</p>

            <form method="POST" action="{{ route('update-text2') }}">
                @csrf
                @foreach ($second_temp as $temp)
                    <input type="checkbox" name="selected_blocks[]" value="{{ $temp->id }}"
                           id="checkbox_{{ $temp->id }}">
                    <label for="checkbox_{{ $temp->id }}">{{ $temp->id }}</label>
                @endforeach
                <textarea id="sidebar-textarea" name="text" rows="10" cols="50"></textarea>

                <button type="submit">Сохранить</button>
            </form>

            <button class="exit">Закрыть</button>
        </div>

    </div>
    @include('script')
@endsection

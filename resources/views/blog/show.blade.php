@extends('layouts.default')

@section('title')
    {{$post->title}}
@endsection

@section('content')
    <main class="flex-grow-1 py-3">
        <a href="{{route('blog')}}">Повернутись назад</a>
        <h1 class="mb-5">Перегляд поста</h1>

        <div class="mb-4">
            <h5>
                <a href="{{route('blog.show', $post->id)}}">{{ $post->title }}</a>
            </h5>
            <p>{{ $post->content }}</p>
        </div>

    </main>
@endsection


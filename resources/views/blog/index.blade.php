@extends('layouts.default')

@section('title')
    Список постів
@endsection

@section('content')
    <main class="flex-grow-1 py-3">
        <h1 class="mb-5">Список постів</h1>

        @if(empty($posts))
            Нема постів(
        @else
            @foreach($posts as $post)
                <div class="mb-4">
                    <h5>
                        <a href="{{route('blog.show', $post->id)}}">{{ $post->title }}</a>
                    </h5>
                    <p>{{ $post->content }}</p>
                </div>
            @endforeach
        @endif
    </main>
@endsection

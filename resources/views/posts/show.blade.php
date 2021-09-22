@extends('layouts.app')

@section('content')

<div class="container">
    <div class="card">

        <div class="post-body ">

            <div class="post">

                <h2 class="post-title">
                    {{ $post->title_post }}
                </h2>

                @if(strlen($post->photo) !== 0)
                <div class="post-img">
                    <img src="{{ $post->photo }}" alt="photo">
                </div>
                @endif

                <div class="post-text">
                    {{ $post->text }}
                </div>

            </div>
            @include('posts.eraseModal')
        </div>

        <div class="card-header post-header">
            <div class="post-info">
                <div class="name-user">{{ $post->author }}</div>
                <div class="post-category">{{ ucfirst($post->category->name) }}</div>
                <div class="date">Creato il: {{ $datePost->format('d/m/Y') }} alle {{ $datePost->format('H:i') }}</div>
            </div>
            <div class="post-edit">
                <a href="{{ route('posts.index') }}">
                    <button class="btn btn-outline-secondary btn-sm">Tutti i Post</button>
                </a>
                <a href="{{ route('posts.edit', $post) }}">
                    <button class="btn btn-outline-primary btn-sm">Modifica</button>
                </a>
                <button type="button" class="btn btn-outline-danger btn-sm erase-button">
                    Elimina
                </button>
            </div>

        </div>
    </div>

</div>
@endsection
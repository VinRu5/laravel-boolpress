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
        </div>

        <div class="card-header post-header">
            <div class="post-info">
                <div class="name-user">{{ Auth::user()->name }}</div>
                <div class="date">{{ $post->created_at }}</div>
            </div>
            <div class="post-edit">
                <a href="{{ route('posts.index') }}">
                    <button class="btn btn-outline-secondary">Tutti i Post</button>
                </a>
            </div>
        </div>
    </div>

</div>
@endsection
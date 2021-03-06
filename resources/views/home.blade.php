@extends('layouts.app')

@section('content')

    <div class="container">

        <div class="row card-header post-header-index">
            <div scope="col-10" class="post-header-title">Posts</div>
            <div scope="col-2">
                <a href="{{ route('posts.create') }}">
                    <button class="btn btn-primary">
                        New

                        <i class="fas fa-plus-square"></i>
                    </button>
                </a>
            </div>
        </div>

        @foreach ($posts as $post)
            <div class="row post-body">
                <div class="col-1">{{ $post->id }}</div>
                <div class="col-10">
                    <div class="row">
                        <div class="col-10">
                            <div class="tilte-post">
                                {{ $post->title_post }}
                            </div>
                            <div class="date-post">
                                {{ $post->created_at }}
                            </div>
                        </div>
                        @if (strlen($post->photo) !== 0)
                            <div class="col-2">
                                <img src="{{ $post->photo }}" alt="picture of {{ $post->title }}" />
                            </div>
                        @endif
                    </div>

                </div>
                <div class="col-1 edit-zone">
                    <a href="{{ route('show', $post) }}">
                        <button class="btn btn-outline-dark btn-sm">
                            <i class="fas fa-info"></i>
                        </button>
                    </a>

                </div>
            </div>
        @endforeach


    </div>

@endsection

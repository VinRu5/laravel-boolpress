@extends('layouts.app')

@section('content')

<div class="container">

    <div class="row card-header post-header-index">
        <div scope="col-10" class="post-header-title">I Miei Posts</div>
        <div scope="col-2">
            <a href="{{ route('posts.create') }}">
                <button class="btn btn-primary">
                    New

                    <i class="fas fa-plus-square"></i>
                </button>
            </a>
        </div>
    </div>

    @foreach($posts as $post)
    <div class="row post-body">
        <div class="col-1">{{$loop->iteration}}</div>
        <div class="col-10">
            <div class="row">
                <div class="col-10">
                    <div class="tilte-post">
                        {{$post->title_post}}
                    </div>
                    <div class="date-post">
                        {{ $post->created_at }}
                    </div>
                </div>
                @if(strlen($post->photo) !== 0)
                <div class="col-2">
                    <img src="{{$post->photo}}" alt="picture of {{$post->title}}" />
                </div>
                @endif
            </div>

        </div>
        <div class="col-1 edit-zone">
            <i class="fas fa-ellipsis-h button-menu"></i>
            <div class="hidden-menu">
                <div class="hidden-menu-inner">

                    <a href="{{ route('posts.show', $post) }}">
                        <button class="btn btn-outline-dark btn-sm">
                            <i class="fas fa-info"></i>
                        </button>
                    </a>
                    <a href="{{ route('posts.edit', $post) }}">
                        <button class="btn btn-outline-dark btn-sm">
                            <i class="fas fa-edit"></i>
                        </button>
                    </a>

            <!-- Button trigger modal -->
            <button type="button" class="btn btn-outline-danger btn-sm erase-button">
                        <i class="fas fa-trash-alt"></i>
                    </button>

                </div>

            </div>

            <!-- Modal -->
            @include('posts.eraseModal')

        </div>
    </div>
    @endforeach


</div>

@endsection
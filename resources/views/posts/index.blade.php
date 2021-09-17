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
    @foreach($posts as $post)
    <div class="row post-body">
        <div class="col-1">{{$post->id}}</div>
        <div class="col-8">
            <div class="tilte-post">
                {{$post->title_post}}
            </div>
            <div class="date-post">
                {{ $post->created_at }}
            </div>
        </div>
        @if(strlen($post->photo) !== 0)
        <div class="col-2 col-lg-1">
            <img src="{{$post->photo}}" alt="picture of {{$post->title}}" />
        </div>
        @endif
        <div class="col-1 edit-zone">
            <i class="fas fa-ellipsis-h button-menu"></i>
            <div class="hidden-menu" style="display: none;">
                <div class="hidden-menu-inner">

                    <a href="{{ route('posts.show', $post) }}">
                        <button class="btn btn-secondary">
                            <i class="fas fa-info"></i>
                        </button>
                    </a>
                    <a href="{{ route('posts.edit', $post) }}">
                        <button class="btn btn-secondary">
                            <i class="fas fa-edit"></i>
                        </button>
                    </a>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Launch demo modal
                    </button>




                </div>
            </div>

        </div>
    </div>
    @endforeach
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection
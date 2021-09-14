@extends('layouts.app')

@section('content')

@foreach($posts as $post)

<div class="col-md-8">
    <div class="card">

        <div class="card-header">
            <div class="name-user">{{ Auth::user()->name }}</div>
            <div class="date">{{ $post->created_at }}</div>
        </div>


        <div class="card-body">

            <div class="post">

                <div class="post-text">
                    {{ $post->text }}
                </div>

                @if(strlen($post->photo) !== 0)
                <div class="post-img">
                    <img src="{{ $post->photo }}" alt="photo">
                </div>
                @endif
            </div>
        </div>
    </div>
</div>
@endforeach

@endsection
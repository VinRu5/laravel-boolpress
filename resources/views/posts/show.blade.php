@extends('layouts.app')

@section('content')
<div class="container">

    <div class="card">

        <div class="card-header">
            <div class="name-user">{{ Auth::user()->name }}</div>
            <div class="date">{{ $postToShow->created_at }}</div>
        </div>


        <div class="card-body">

            <div class="post">

                <h2 class="post-title">
                    {{ $postToShow->title_post }}
                </h2>

                @if(strlen($postToShow->photo) !== 0)
                <div class="post-img">
                    <img src="{{ $postToShow->photo }}" alt="photo">
                </div>
                @endif

                <div class="post-text">
                    {{ $postToShow->text }}
                </div>

            </div>
        </div>
    </div>

</div>
@endsection
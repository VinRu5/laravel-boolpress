@extends('layouts.app')

@section('content')

<div class="container">

    <div class="row card-header">
        <div scope="col-10">Posts</div>
        <div scope="col-2"><button class="btn btn-primary">New</button></div>
    </div>
    @foreach($posts as $post)
    <div class="row card-body">
        <div class="col-1">{{$post->id}}</div>
        <div class="col-8">
            <div class="tilte-post">
                {{$post->title_post}}
            </div>
            <div class="info-post">
                {{ $post->created_at }}
            </div>
        </div>
        @if(strlen($post->photo) !== 0)
        <div class="col-2 col-lg-1"><img src="{{$post->photo}}" alt="picture of {{$post->title}}" /></div>
        @endif
        <div class="col-1"><a href=""><i class="fas fa-ellipsis-h"></i></a></div>
    </div>
    @endforeach
</div>



@endsection
@extends('layouts.app')

@section('content')

<div class="container">
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <form action="{{ route('posts.store') }}" method="post">
        @csrf

        <div class="form-group">

            <label for="title_post">Titolo</label>
            <input type="text" class="form-control" name="title_post" id="title_post">
        </div>

        <div class="form-group">

            <label for="text">Scrivi qui...</label>
            <textarea name="text" class="form-control" id="text" cols="30" rows="10"></textarea>
        </div>


        <div class="form-group">

            <label for="photo">URL Foto</label>
            <input type="text" class="form-control" name="photo" id="photo">
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary">Salva</button>
        </div>

    </form>

</div>



@endsection
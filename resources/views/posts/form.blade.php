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

    @if (strpos($showURL, 'create') !== false)
    <form action="{{ route('posts.store') }}" method="post">
        @csrf
        @endif


        @if (strpos($showURL, 'edit') !== false)
        <form action="{{ route('posts.update', $post) }}" method="POST">
            @csrf
            @method('PUT')
            @endif

            <div class="form-group">

                <label for="title_post">Titolo</label>
                <input type="text" class="form-control" name="title_post" id="title_post" @if (strpos($showURL, 'edit' ) !==false) value="{{ $post->title_post }}" @endif>
            </div>

            <div class="form-group">

                <label for="text">Scrivi qui...</label>
                <textarea name="text" class="form-control" id="text" cols="30" rows="10">
                    @if (strpos($showURL, 'edit' ) !==false)
                    value="{{ $post->text }}"
                    @endif
                    
                </textarea>
            </div>


            <div class="form-group">

                <label for="photo">URL Foto</label>
                <input type="text" class="form-control" name="photo" id="photo" @if (strpos($showURL, 'edit' ) !==false) value="{{ $post->photo }}" @endif>
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary">Salva</button>
            </div>

        </form>

</div>



@endsection
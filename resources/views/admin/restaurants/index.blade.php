@extends('layouts.app')


@section('content')
    <div class="container">
        <div class="row">
            <h1>Gestisci i tuoi ristoranti</h1>
            {{-- @foreach($posts as $post)
                <div class="col-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">{{ $post->title }}</h5>
                            <a href="{{ route('admin.posts.show', ['post' => $post->id]) }}" class="btn btn-primary">Go to post</a>
                            <a href="{{ route('admin.posts.edit', ['post' => $post->id]) }}" class="btn btn-warning">Edit post</a>
                            
                            <form action="{{ route('admin.posts.destroy', ['post' => $post->id]) }}" method="post">
                                @csrf
                                @method('DELETE')

                                <input type="submit" class="btn btn-danger" value="Delete post">
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach --}}
        </div>
    </div>
@endsection
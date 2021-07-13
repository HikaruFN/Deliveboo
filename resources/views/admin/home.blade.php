@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <h1>HOMEPAGE ristoratori loggati</h1>
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                </div>

                <a href="{{ route('admin.restaurants.index') }}" class="btn btn-primary">Vai al tuo ristorante</a>
            </div>
        </div>
    </div>

    {{-- <div class="row">
        @foreach($posts as $post)
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
        @endforeach
    </div> --}}
</div>
@endsection


        @extends('layouts.app')
        @section('content')
            <div class="container">
                <h1>Blog Posts</h1>
                <a href="{{ route('posts.create') }}" class="btn btn-primary mb-3">Create Post</a>
                @foreach ($posts as $post)
                    <div class="card mb-3">
                        <div class="card-body">
                            <h5 class="card-title">{{ $post->title }}</h5>
                            <p class="card-text">{{ Str::limit($post->description, 100) }}</p>
                            <a href="{{ route('posts.show', $post) }}" class="btn btn-info">View</a>
                            <a href="{{ route('posts.edit', $post) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('posts.destroy', $post) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </div>
                    </div>
                @endforeach
            </div>
        @endsection
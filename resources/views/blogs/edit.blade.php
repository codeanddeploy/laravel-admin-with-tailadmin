@extends('layout')

@section('content')
    <h2>Edit Post</h2>

    @include('partials.errors')

    <form action="{{ route('posts.update', $post->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label class="@error('title') is-invalid @enderror">Title</label>
            <input type="text" name="title" value="{{ old('title', $post->title) }}" class="form-control @error('title') is-invalid @enderror">

            @error('title')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label class="@error('content') is-invalid @enderror">Content</label>
            <textarea name="content" class="form-control @error('content') is-invalid @enderror" rows="4" required>{{ $post->content }}</textarea>

            @error('content')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@endsection

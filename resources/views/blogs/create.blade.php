@extends('layout')

@section('content')
    <h2>Create Post</h2>

    @include('partials.errors')

    <form action="{{ route('posts.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label class="@error('title') is-invalid @enderror">Title</label>
            <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" required>
            @error('title')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label class="@error('title') is-invalid @enderror">Content</label>
            <textarea name="content" class="form-control @error('title') is-invalid @enderror" rows="4" required></textarea>
            @error('content')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-success">Submit</button>
    </form>
@endsection
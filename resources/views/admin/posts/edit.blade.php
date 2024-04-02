@extends('layouts.app')

@section('content')
<section>
    <div class="container py-4">
        <h1>Modifica questo Post</h1>
        <form action="{{ route('admin.posts.update', $post) }}" method="POST">
            @csrf
            @method('PATCH')
            <label for="title" class="form-label">Titolo</label>
            <input type="text" name="title" id="title" value="{{ $post->title }}" class="form-control" >

            <label for="content" class="form-label">Contenuto</label>
            <textarea name="content" id="content" rows="4"  value="{{ $post->content }}" class="form-control" ></textarea>

            <label for="slug" class="form-label">Slug</label>
            <input type="text" name="slug" id="slug"  value="{{ $post->slug }}" class="form-control" >

            <button class="btn btn-primary mt-4">Modifica</button>
        </form>
    </div>
</section>
@endsection


@extends('layouts.app')

@section('content')
<section>
    <div class="container py-4">
        <h1>Aggiungi un nuovo Post</h1>
        <form action="{{ route('admin.posts.store') }}" method="POST">
            @csrf
            <label for="title">Titolo</label>
            <input type="text" name="title" id="title">

            <label for="content">Contenuto</label>
            <textarea name="content" id="content" rows="4"></textarea>

            <label for="slug">Slug</label>
            <input type="text" name="slug" id="slug">

            <button class="btn btn-primary">Salva</button>
        </form>
    </div>
</section>
@endsection
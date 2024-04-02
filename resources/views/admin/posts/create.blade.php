@extends('layouts.app')

@section('content')
<section>
    <div class="container">
        <form action="{{ route('admin.posts.store') }}" method="POST">
            @csrf
            <label for="title">Titolo</label>
            <input type="text" name="title" id="title">

            <label for="content">Contenuto</label>
            <textarea name="content" id="content" rows="4"></textarea>

            <label for="slug">Slug</label>
            <input type="text" name="slug" id="slug">

            <button class="btn btn-primary"></button>
        </form>
    </div>

</section>
@endsection
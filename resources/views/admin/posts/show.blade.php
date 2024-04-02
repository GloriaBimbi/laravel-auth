@extends('layouts.app')

@section('content')
<section>
<div class="container mt-5 mb-4">
    <a href="{{ route('admin.posts.index') }}" class="btn btn-primary">Torna alla lista dei Post </a>
    <a href="{{ route('admin.posts.edit', $post) }}" class="btn btn-warning">Modifica questo Post</a>
    <h1 class="mt-5 mb-4">{{$post->title}}</h1>
    <p>{{$post->content}}</p>
</div>
</section>
@endsection

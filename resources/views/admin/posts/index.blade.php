@extends('layouts.app')

@section('content')
<section>
    <div class="container mt-5">
        <a href="{{route('admin.posts.create')}}" class="btn btn-success mb-4">Crea un nuovo Post</a>
        <h1>Lista dei Post</h1>
        <table class="table table-primary table-striped mt-4">
            <thead>
              <tr>
                <th scope="col">Titolo</th>
                <th scope="col">Contenuto</th>
                <th scope="col">Slug</th>
                <th scope="col">Apri dettaglio</th>
                <th scope="col">Elimina</th>
              </tr>
            </thead>
            <tbody>
                @forelse($posts as $post)
                <tr>
                    <td>{{$post->title}}</td>
                    <td>{{$post->content}}</td>
                    <td>{{$post->slug}}</td>
                    <td><a href="{{route('admin.posts.show', $post)}}" class="text-info"><i class="fa-solid fa-eye"></i></a></td>
                    <td><a href="#" class="text-danger"><i class="fa-solid fa-trash"></i></a></td>
                </tr>
                @empty
                <tr>
                    <td colspan="3">Nessun post trovato</td>
                </tr>
                @endforelse
            </tbody>
          </table>
    </div>
</section>
@endsection

@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
@endsection
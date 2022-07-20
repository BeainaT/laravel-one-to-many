@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h1>Posts</h1>
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <a href="{{route('admin.posts.create')}}" class="btn btn-success">Crea un post</a>
                    </div>
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Titolo</th>
                            <th scope="col">Nome Autore</th>
                            <th scope="col">Cognome Autore</th>
                            <th scope="col">Slug</th>
                            <th scope="col">Stato</th>
                            <th scope="col">Azione</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach($posts as $post)
                          <tr>
                            <td>{{$post->id}}</td>
                            <td>{{$post->title}}</td>
                            <td>{{$post->author_name}}</td>
                            <td>{{$post->author_lastname}}</td>
                            <td>{{$post->slug}}</td>
                            <td>
                              @if($post->is_published)
                                <span class="text-success">Pubblicato</span>
                              @else
                                <span class="text-danger">Non pubblicato</span>
                              @endif
                            </td>
                            <td>
                              <a href="{{route('admin.posts.show', $post->id)}}" class="btn">Visualizza</a>
                              <a href="{{route('admin.posts.edit', $post->id)}}" class="btn">Modifica</a>
                              <form action="{{route('admin.posts.destroy', $post->id)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn">Elimina</button>
                              </form>
                            </td>
                          </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h1>Categorie</h1>
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <a href="{{route('admin.categories.create')}}" class="btn btn-success">Crea una categoria</a>
                    </div>
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">Titolo</th>
                            <th scope="col">Slug</th>
                            <th scope="col">Azione</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach($categories as $category)
                          <tr>
                            <td>{{$category->name}}</td>
                            <td>{{$category->slug}}</td>
                            <td>
                              <a href="{{route('admin.categories.show', $category->id)}}" class="btn">Visualizza</a>
                              <a href="{{route('admin.categories.edit', $category->id)}}" class="btn">Modifica</a>
                              <form action="{{route('admin.categories.destroy', $category->id)}}" method="POST">
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
@extends('layouts.app')
@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h1>{{$category->name}}</h1>
                </div>
                <div class="card-body">
                    <div>
                        <a href="{{route('admin.categories.index')}}" class="btn btn-success">tutte le categorie</a>
                    </div>
                    <div>
                        <h5>post associati</h5>
                        <ul>
                            @foreach ($category->posts as $post)
                                <li><a href="{{route('admin.posts.show', $post->id)}}">{{$post->title}}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@extends('layouts.app')
@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h1>{{$post->title}}</h1>
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        {{$post->content}}
                    </div>
                    <hr>
                    <div>
                        <a href="{{route('admin.posts.index')}}" class="btn btn-success">Tutti i post</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
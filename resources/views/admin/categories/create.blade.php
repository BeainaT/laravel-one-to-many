@extends('layouts.app')

@section('content')
  <div class="container">
    <h1>Crea categoria</h1>
    <form action="{{route('admin.categories.store')}}" method="POST">
        @csrf
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="name">Nome categoria</label>
            <input type="text" class="form-control" id="name" name="name" value="{{old('name')}}">
          </div>
        </div>
        <button type="submit" class="btn btn-primary">Crea</button>
      </form>
  </div>
@endsection
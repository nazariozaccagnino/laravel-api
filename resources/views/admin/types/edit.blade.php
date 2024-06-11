@extends('layouts.admin')
@section('content')
<section>
  <div class="container my-2">
    <h1>Edit project: {{$type->name}}</h1>
    <form action="{{route('admin.types.update', $type->slug)}}" method="POST">
      @csrf
      @method('PUT')
      <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" class="form-control" id="name" name="name" value="{{$type->name}}">
      </div>
      @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
      <button type="submit" class="btn btn-primary">Modify</button>
      <a href="{{route('admin.types.index')}}" class="btn btn-secondary">Return</a>
      </div>
    </form>
  </div>
</section>
@endsection
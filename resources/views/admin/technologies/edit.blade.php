@extends('layouts.admin')
@section('content')
<section>
  <div class="container my-2">
    <h1>Edit technology: {{$technology->name}}</h1>
    <form action="{{route('admin.technologies.update', $technology->slug)}}" method="POST">
      @csrf
      @method('PUT')
      <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" class="form-control" id="name" name="name" value="{{$technology->name}}">
      </div>
      @error('title')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
      <div class="py-2">
      <button type="submit" class="btn btn-primary">Modify</button>
      <a href="{{route('admin.technologies.index')}}" class="btn btn-secondary">Return</a>
      </div>
    </form>
  </div>
</section>
@endsection
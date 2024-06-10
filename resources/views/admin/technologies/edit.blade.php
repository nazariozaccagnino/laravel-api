@extends('layouts.admin')
@section('content')
<section>
  <div class="container my-2">
    <h1>Edit project: {{$project->title}}</h1>
    <form action="{{route('admin.projects.update', $project->slug)}}" method="POST">
      @csrf
      @method('PUT')
      <div class="mb-3">
        <label for="title" class="form-label">Title</label>
        <input type="text" class="form-control" id="title" name="title" value="{{$project->title}}">
      </div>
      @error('title')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
      <div class="mb-3">
        <label for="content" class="form-label">Content</label>
        <input type="text" class="form-control" id="content" name="content" value="{{$project->content}}">
      </div>
      <div class="mb-3">
        <img id="uploadPreview" width="100" src="/images/placeholder.png">
        <label for="image" class="form-label">Image</label>
        <input type="file" accept="image/*" class="form-control @error('image') is-invalid @enderror" id="uploadImage"
          name="image" value="{{ old('image') }}" maxlength="255">
        @error('image')
      <div class="alert alert-danger">{{ $message }}</div>
    @enderror
      </div>
      <div class="py-2">
      <button type="submit" class="btn btn-primary">Modify</button>
      <a href="{{route('admin.projects.index')}}" class="btn btn-secondary">Return</a>
      </div>
    </form>
  </div>
</section>
@endsection
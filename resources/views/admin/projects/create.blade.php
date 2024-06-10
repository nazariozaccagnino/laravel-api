@extends('layouts.admin')
@section('content')
<section>
  <div class="container">
    <form action="{{route('admin.projects.store')}}" method="POST" enctype="multipart/form-data">
      @csrf
      <div class="mb-3">
        <label for="title" class="form-label">Title</label>
        <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" placeholder="Insert a title">
      </div>
      @error('title')
      <div class="alert alert-danger">{{ $message }}</div>
    @enderror
      <div class="mb-3">
        <label for="content" class="form-label">Content</label>
        <input type="text" class="form-control" id="content" name="content" placeholder="Insert content">
      </div>
      @error('content')
      <div class="alert alert-danger">{{ $message }}</div>
    @enderror
      <div class="mb-3">
        <img id="uploadPreview" width="100" src="/images/placeholder.jpg" class="p-2">
        <label for="image" class="form-label">Image</label>
        <input type="file" accept="image/*" class="form-control @error('image') is-invalid @enderror" id="uploadImage"
          name="image" value="{{ old('image') }}" maxlength="255">
        @error('image')
      <div class="alert alert-danger">{{ $message }}</div>
    @enderror
      </div>
      <div class="mb-3">
                <label for="type_id" class="form-label">Select type of project</label>
                <select name="type_id" id="type_id" class="form-control @error('type_id') is-invalid @enderror">
                    <option value="">Select type</option>
                  @foreach ($types as $type)
                      <option value="{{$type->id}}" {{ $type->id == old('type_id') ? 'selected' : '' }}>{{$type->name}}</option>
                  @endforeach
                </select>
                @error('type_id')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
              </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    @endsection
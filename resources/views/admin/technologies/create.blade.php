@extends('layouts.admin')
@section('content')
<section>
  <div class="container">
    <form action="{{route('admin.technologies.store')}}" method="POST" enctype="multipart/form-data">
      @csrf
      <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" placeholder="Insert a name for the type of project">
      </div>
      @error('name')
      <div class="alert alert-danger">{{ $message }}</div>
    @enderror
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    @endsection
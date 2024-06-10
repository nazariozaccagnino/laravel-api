@extends('layouts.admin')
@section('content')
<section class="container my-2">
  <h1>My projects</h1>
  @if(session()->has('deleted'))
    <div class="alert alert-danger">{{session()->get('deleted')}}</div>
    @endif
  <table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Slug</th>
        <th scope="col">Actions</th>

      </tr>
    </thead>
    <tbody>
      @foreach($technologies as $technology)
      <tr>
      <th scope="row">{{$technology->id}}</th>
      <td>{{$technology->name}}</td>
      <td>{{$technology->slug}}</td>
      <td>{{$technology->thumbnail}}</td>

      <td>
        <a href="{{route('admin.technologies.show', $technology->slug)}}"><button type="button" class="btn btn-primary btn-sm">Show</button></a>
        <a href="{{route('admin.technologies.edit', $technology->slug)}}"><button type="button" class="btn btn-success btn-sm">Edit</button></a>
        <form action="{{route('admin.technologies.destroy', $technology->slug)}}" method="POST" class="d-inline-block">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger btn-sm" data-item-title="{{ $technology->name }}">Delete
        </button>
        </form>
      </td>
      </tr>
    @endforeach
    </tbody>
  </table>
      <div class="d-flex justify-content-center">
      <a href="{{route('admin.technologies.create', $technology->slug)}}"><button type="button" class="btn btn-warning">Add new project</button></a>
      </div>
    </div>
</section>
@endsection
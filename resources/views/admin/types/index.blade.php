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
      @foreach($types as $type)
      <tr>
      <th scope="row">{{$type->id}}</th>
      <td>{{$type->name}}</td>
      <td>{{$type->slug}}</td>
      <td>
        <a href="{{route('admin.types.show', $type->slug)}}"><button type="button" class="btn btn-primary btn-sm">Show</button></a>
        <a href="{{route('admin.types.edit', $type->slug)}}"><button type="button" class="btn btn-success btn-sm">Edit</button></a>
        <form action="{{route('admin.types.destroy', $type->slug)}}" method="POST" class="d-inline-block">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger btn-sm" data-item-title="{{ $type->name }}">Delete
        </button>
        </form>
      </td>
      </tr>
    @endforeach
    </tbody>
  </table>
      <div class="d-flex justify-content-center">
      <a href="{{route('admin.types.create', $type->slug)}}"><button type="button" class="btn btn-warning">Add new project</button></a>
      </div>
    </div>
</section>
@endsection
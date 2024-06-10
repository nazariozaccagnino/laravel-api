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
        <th scope="col">Title</th>
        <th scope="col">Content</th>
        <th scope="col">Created At</th>
        <th scope="col">Updated At</th>
        <th scope="col">Actions</th>

      </tr>
    </thead>
    <tbody>
      @foreach($projects as $project)
      <tr>
      <th scope="row">{{$project->id}}</th>
      <td>{{$project->title}}</td>
      <td>{{$project->content}}</td>
      <td>{{$project->created_at}}</td>
      <td>{{$project->updated_at}}</td>
      <td>
        <a href="{{route('admin.projects.show', $project->slug)}}"><button type="button" class="btn btn-primary btn-sm">Show</button></a>
        <a href="{{route('admin.projects.edit', $project->slug)}}"><button type="button" class="btn btn-success btn-sm">Edit</button></a>
        <form action="{{route('admin.projects.destroy', $project->slug)}}" method="POST" class="d-inline-block delete-button">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger btn-sm" data-item-title="{{ $project->title }}" data-item-id = "{{ $project->id }}">Delete
        </button>
        </form>
      </td>
      </tr>
    @endforeach
    </tbody>
  </table>
  @include('partials.modal-delete')
      <div class="d-flex justify-content-center">
      <a href="{{route('admin.projects.create', $project->slug)}}"><button type="button" class="btn btn-warning">Add new project</button></a>
      </div>
    </div>
</section>

@endsection
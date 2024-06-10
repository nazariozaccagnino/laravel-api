@extends('layouts.admin')

@section('content')
<section class="my-2">
@if (session()->has('created'))
    <div class="alert alert-success">{{session()->get('created')}}</div>
@endif

    <h1>{{$project->title}}</h1>
    <hr>
    <div>{{$project->content}}</div>
    <hr>
    @if($project->type)
        <p>Type of project: {{$project->type->name}}</p>
    @else
        <p>Type of project not selected</p>
    @endif
    @if($project->technology)
        <p>Technology: {{$project->technology->name}}</p>
    @else
        <p>Technology not selected</p>
    @endif
    <div class="d-flex justify-content-end">
        <div>
        <a href="{{route('admin.projects.index')}}" class="btn btn-primary btn-sm">Return</a>
        </div>
    </div>
    <div>
    </div>
</section>
@endsection
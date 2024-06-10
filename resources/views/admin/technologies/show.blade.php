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
    <div class="d-flex justify-content-end">
        <div>
        <a href="{{route('admin.projects.index')}}" class="btn btn-primary btn-sm">Return</a>
        </div>
    </div>
</section>
@endsection
@extends('layouts.admin')

@section('content')
<section class="my-2">
@if (session()->has('created'))
    <div class="alert alert-success">{{session()->get('created')}}</div>
@endif

    <h1>{{$type->name}}</h1>
    <hr>
    <div class="d-flex justify-content-end">
        <div>
        <a href="{{route('admin.types.index')}}" class="btn btn-primary btn-sm">Return</a>
        </div>
    </div>
</section>
@endsection
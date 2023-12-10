@extends('admin.home')

@section('content')

<h3 class=" my-5">{{$project->title}}</h3>

<div class=" d-flex flex-row">

    <div class="info">

        <div class="description my-2">Description: {{$project->description}}</div>
        <div class="description my-2">Type: {{$project->type->title}}</div>



    </div>
</div>


@endsection

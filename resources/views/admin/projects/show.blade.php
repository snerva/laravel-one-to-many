@extends('layouts.admin')

@section('content')

<div class="container py-4">
    <div class="d-flex gap-4">
        <div class="details">
            @if($project->cover_image)
            <img class="img-fluid" src="{{asset('storage/' . $project->cover_image)}}" alt="">
            @else
            <div class="placeholder p-5 bg-dark">No Image</div>
            @endif
            <h1>{{$project->title}}</h1>
            <div class="category">
                <strong>Type:</strong>
                {{ $project->type ? $project->type->name : 'No type'}}
            </div>
            <p>{{$project->description}}</p>
        </div>
    </div>
</div>
@endsection
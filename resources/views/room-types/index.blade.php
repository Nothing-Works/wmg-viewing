@extends('layouts.app')

@section('content')
<div class="container">
    <div class="p-2 d-flex justify-content-between">
        <h2>All Room Types for {{$property->name}}</h2>
        <a class="btn btn-primary" href="/room-types/{{$property->id}}/create" role="button">Create</a>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="row">
                @foreach ($property->roomTypes as $type)
                <div class="mb-5 col-sm-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">
                                <a href="/rooms/{{$type->id}}">
                                    {{$type->name}}
                                </a>
                            </h5>
                            <a href="/room-types/{{$property->id}}/{{$type->id}}" class="btn btn-primary">Edit It</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection

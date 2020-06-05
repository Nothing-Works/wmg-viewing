@extends('layouts.app')

@section('content')
<div class="container">
    <div class="p-2 d-flex justify-content-between">
        <h2>All Rooms for {{$type->name}}</h2>
        <a class="btn btn-primary" href="/room-type/{{$type->id}}/create" role="button">Create</a>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="row">
                @foreach ($type->rooms as $room)
                <div class="mb-5 col-sm-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">
                                {{$room->name}}
                            </h5>
                            <div class="d-flex justify-content-between">
                                <a href="/room-type/{{$type->id}}/rooms/{{$room->id}}" class="btn btn-primary">Edit
                                    It</a>
                                <a href="/availabilities/create?room={{$room->id}}" class="btn btn-secondary">Set Up</a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection

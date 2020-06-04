@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="d-flex justify-content-between">
                <h1>Edit RoomType for {{$property->name}}</h1>
                <form action="/properties/{{$property->id}}/room-types/{{$type->id}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </div>
            <form action="/properties/{{$property->id}}/room-types/{{$type->id}}" method="POST">
                @csrf
                @method('PATCH')
                <div class="form-group">
                    <label for="name">Room Type</label>
                    <input type="text" class="form-control" name="name" value="{{$type->name}}">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection

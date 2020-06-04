@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="d-flex justify-content-between">
                <h1>Edit Room for {{$room->room_number}}</h1>
                <form action="/room-type/{{$type->id}}/rooms/{{$room->id}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </div>
            <form action="/room-type/{{$type->id}}/rooms/{{$room->id}}" method="POST">
                @csrf
                @method('PATCH')
                <div class="form-group">
                    <label for="name">Room</label>
                    <input type="text" class="form-control" name="room_number" value="{{$room->room_number}}">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection

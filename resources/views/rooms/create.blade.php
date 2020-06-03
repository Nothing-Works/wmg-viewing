@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1>Create Room</h1>
            <form action="/rooms/{{$type->id}}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="name">Room</label>
                    <input type="text" class="form-control" name="room_number">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection

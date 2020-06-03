@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1>Create Room Type</h1>
            <form action="/room-types/{{$property->id}}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="name">Room Type</label>
                    <input type="text" class="form-control" name="name">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection

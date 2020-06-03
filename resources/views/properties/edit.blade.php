@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="d-flex justify-content-between">
                <h1>Edit Property</h1>
                <form action="/properties/{{$property->id}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </div>
            <form action="/properties/{{$property->id}}" method="POST">
                @csrf
                @method('PATCH')
                <div class="form-group">
                    <label for="name">Property Name</label>
                    <input type="text" class="form-control" name="name" value="{{$property->name}}">
                </div>
                <div class="form-group">
                    <label for="address">Property Address</label>
                    <input type="text" class="form-control" name="address" value="{{$property->address}}">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection

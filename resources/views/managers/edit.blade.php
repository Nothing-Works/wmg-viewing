@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="d-flex justify-content-between">
                <h1>Edit Manger</h1>
                <form action="/managers/{{$manager->id}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </div>
            <form action="/managers/{{$manager->id}}" method="POST">
                @csrf
                @method('PATCH')
                <div class="form-group">
                    <label for="name">Manager Name</label>
                    <input type="text" class="form-control" name="name" value="{{$manager->name}}">
                </div>
                <div class="form-group">
                    <label for="email">Manager Email</label>
                    <input type="email" class="form-control" name="email" value="{{$manager->email}}">
                </div>
                <div class="form-group">
                    <label for="password">Manager Password</label>
                    <input type="password" class="form-control" name="password">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection

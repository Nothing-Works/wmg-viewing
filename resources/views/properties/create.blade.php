@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1>Create Property</h1>
            <form action="/properties" method="POST">
                @csrf
                <div class="form-group">
                    <label for="name">Property Name</label>
                    <input type="text" class="form-control" name="name">
                </div>
                <div class="form-group">
                    <label for="address">Property Address</label>
                    <input type="text" class="form-control" name="address">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection

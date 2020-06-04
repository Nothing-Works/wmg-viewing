@extends('layouts.app')

@section('content')
<div class="container">
    <div class="p-2 d-flex justify-content-between">
        <h2>All Managers</h2>
        <a class="btn btn-primary" href="/managers/create" role="button">Create</a>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="row">
                @foreach ($managers as $manager)
                <div class="mb-5 col-sm-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">
                                {{$manager->name}}
                            </h5>
                            <p class="card-text">{{$manager->email}}</p>
                            <a href="/managers/{{$manager->id}}" class="btn btn-primary">Edit It</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection

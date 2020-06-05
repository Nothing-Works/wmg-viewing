@extends('layouts.app')

@section('content')
<div class="container">
    <div class="p-2 d-flex justify-content-between">
        <h2>All Viewings</h2>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="row">
                @foreach ($availabilities as $availability)
                <div class="mb-5 col-sm-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">
                                {{$availability->available->name}}
                            </h5>
                            <p>{{$availability->time}}</p>
                            <p>{{$availability->booked}}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection

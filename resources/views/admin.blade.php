@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Admin</h1>
    <div class="row justify-content-center">
        <div class="col-md-12">
            <ul class="list-group">
                <li class="list-group-item"><a href="/properties">All Properties</a></li>
                <li class="list-group-item"><a href="/managers">All Managers</a></li>
            </ul>
        </div>
    </div>
</div>
@endsection

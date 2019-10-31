@extends('admin.layouts.app')

@section('content')
        <div class="row">
            <h1>Dashboard</h1>
        </div>
        <div class="row">
            <div class="card w-25">
                <div class="card-header">
                    Statistics
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Total Users: <b>{{$users}}</b></li>
                    <li class="list-group-item">Total Posts: <b>{{$posts}}</b></li>
                    <li class="list-group-item">Total Otdels: <b>{{$otdels}}</b></li>
                </ul>
            </div>
        </div>
@endsection
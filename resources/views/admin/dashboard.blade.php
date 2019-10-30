@extends('admin.layouts.app')

@section('content')
    <main role="main" class="mt-4">
        <div class="row">
            <h1 class="h2">Dashboard</h1>
            <br>
        </div>
        <div class="row">
            <div class="card">
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
    </main>
@endsection
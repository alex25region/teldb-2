@extends('admin.layouts.app')

@section('content')
    <form>
        <div class="row justify-content-end mb-3">
            <div class="col-3">
                <input type="text" class="form-control shadow" placeholder="Search..." aria-label="Search...">
            </div>
            <div class="col-2">
                <a class="btn btn-md btn-success shadow" href="{{route('admin.users.create')}}">Add Row</a>
            </div>
        </div>
    </form>

    <div class="row justify-content-center ">

        <div class="card shadow">
            <div class="card-header">
                <h2>Table - Users</h2>
            </div>
            <div class="card-body">
                <table class="table table-sm table-bordered table-striped table-hover text-center">
                    @foreach($otdels as $otdel)
                        <thead>
                            <tr class="thead-dark">
                                <th colspan="8">
                                    <div class="text-primary m-2" style="font-size: 135%; font-weight: bold;"> {{ $otdel->otdel }}
                                        <span class="badge badge-success right"><i class="fa fa-user"></i>&nbsp;{{$otdel->getUsers->count()}}</span></div>

{{--                                    <div class="small">{{ $otdel->address }} </div>--}}
{{--                                    <div class="small">{{ $otdel->telefon }} </div>--}}
{{--                                    <div class="small">{{ $otdel->email }} </div>--}}
                                </th>
                            </tr>
                        </thead>
                       <thead>
                       <tr class="thead-dark">
                            <th>ID</th>
                            <th>Фамилия</th>
                            <th>Имя</th>
                            <th>Отчество</th>
                            <th>Должность</th>
                            <th>IP-телефон</th>
                            <th>Телефон</th>
                            <th>Действия</th>

                       </tr>
                        </thead>
                        <tbody>
                        @foreach($otdel->getUsers as $user)
                            <tr>
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->surname}}</td>
                                <td>{{ $user->firstname }}</td>
                                <td>{{ $user->secondname }}</td>
                                <td>{{ $user->getPost->post }}</td>
                                <td>{{ $user->iptel }}</td>
                                <td>{{ $user->tel}}</td>
                                <td>
                                    <div class="btn-group" role="group">
                                        <a href="{{ route('admin.users.show', $user->id)}}">
                                            <button type="button" class="btn btn-sm btn-secondary mr-1 shadow">Show</button>
                                        </a>
                                        <a href="{{ route('admin.users.edit', $user->id)}}">
                                            <button type="button" class="btn btn-sm btn-primary mr-1 shadow">Edit</button>
                                        </a>
                                        <form action="{{ route('admin.users.destroy', $user->id) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger shadow"
                                                    onclick="return confirm('Are you sure?')">Delete
                                            </button>
                                        </form>
                                    </div>
                                    {{--                                        <a href="{{ route('admin.users.show', $user->id)}}" class="btn btn-sm btn-primary btn-block shadow">Show</a>
                                                                                <a href="{{ route('admin.users.edit', $user->id)}}" class="btn btn-sm btn-primary btn-block">Edit</a>
                                                                                <form action="{{ route('admin.users.destroy', $user->id) }}" method="post">
                                                                                @csrf
                                                                                @method('DELETE')
                                                                                <input type="submit" class="btn btn-sm btn-block btn-danger" value="Delete" onclick="return confirm('Are you sure?')"/>
                                                                                </form>--}}
                                </td>
                            </tr>
                        @endforeach
                        @endforeach
                        </tbody>
                </table>
                <hr>
            </div>
        </div>

    </div>

@endsection


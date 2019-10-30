@extends('admin.layouts.app')

@section('content')

    {{--    <div class="container-fluid">--}}
    <div class="content-wrapper">
        <div class="row justify-content-center ">
            <div class="col-md-11">

                <div class="row justify-content-end">
                    <nav class="navbar">
                        <a class="btn btn-md btn-primary bg-gradient-green" href="{{route('admin.users.create')}}">Add User</a>
                    </nav>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h2>Table - Users</h2>
                    </div>
                    <div class="card-body">
                        <table class="table table-sm table-bordered table-striped text-center">
                            @foreach($otdels as $otdel)
                                <thead class="thead-light">
                                <tr>
                                    <th colspan="10">
                                        {{ $otdel->otdel }} <br>
                                        {{ $otdel->address }} <br>
                                        {{ $otdel->telefon }} <br>
                                        {{ $otdel->email }} <br>


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
                                    <th>Created_at</th>
                                    <th>Update_at</th>
                                    <th>Действия</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($otdel->getUsers as $user)
                                    <tr>
                                        <th>{{ $user->id }}</th>
                                        <td>{{ $user->surname}}</td>
                                        <td>{{ $user->firstname }}</td>
                                        <td>{{ $user->secondname }}</td>
                                        <td>{{ $user->getPost->post }}</td>
                                        <td>{{ $user->iptel }}</td>
                                        <td>{{ $user->tel}}</td>
                                        <td>{{ $user->created_at}}</td>
                                        <td>{{ $user->updated_at}}</td>
                                        <td class="d-flex">
                                            <a href="{{ route('admin.users.edit', $user->id)}}" class="btn btn-sm btn-primary btn-block">Edit</a>
                                            <form action="{{ route('admin.users.destroy', $user->id) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <input type="submit" class="btn btn-sm btn-block btn-danger" value="Delete" onclick="return confirm('Are you sure?')"/>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                @endforeach
                                </tbody>
                        </table>
                    </div>
                    <div class="row justify-content-center">
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection


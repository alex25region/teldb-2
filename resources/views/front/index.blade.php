@extends('front.layout.app')

@section('content')
<div class="content">
    <div class="card">
        <div class="card-header">
            <h2>Table - Users</h2>
        </div>
        <div class="card-body">
            <table class="table table-sm table-bordered table-striped text-center">
                    <thead>
                    <tr class="thead-dark">
                        <th>ID</th>
                        <th>Фамилия</th>
                        <th>Имя</th>
                        <th>Отчество</th>
                        <th>Должность</th>
                        <th>IP-телефон</th>
                        <th>Телефон</th>
                        <th>Отдел</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($users as $user)
                        <tr>
                            <th>{{ $user->id }}</th>
                            <td>{{ $user->surname }}</td>
                            <td>{{ $user->firstname }}</td>
                            <td>{{ $user->secondname }}</td>
                            <td>{{ $user->getPost->post }}</td>
                            <td>{{ $user->iptel }}</td>
                            <td>{{ $user->tel }}</td>
                            <td>{{ $user->getOtdel->otdel}}</td>
                        </tr>
                    @endforeach

                    </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
@extends('admin.layouts.app')

@section('content')
    @include('admin.layouts.messages')
    @include('admin.layouts.search')

    <div class="row justify-content-center ">

        <div class="card shadow" >
            <div class="card-header">
                <h2>Table - Users</h2>
            </div>
            <div class="card-body">
                <table class="table table-sm table-bordered table-striped table-hover text-center" id="myTable">
                    @foreach($otdels as $otdel)
                        <thead class="parent-th">
                            <tr class="thead-dark searchable myHead">
                                <th colspan="6">
                                    <div class=" m-2 big" > {{ $otdel->otdel }}
                                        <span class="badge badge-success"><i class="fa fa-user"></i>&nbsp;{{$otdel->getUsers->count()}}</span>
                                        <a href="{{route('admin.otdels.edit', $otdel->id)}}" title="Edit otdel">
                                        <span class="badge badge-primary"><i class="fa fa-pen"></i>&nbsp;Edit</span>
                                        </a>
                                    </div>
                                </th>
                            </tr>
                        </thead>
                       <thead class="parent-th">
                       <tr class="thead-dark searchable">
                            <th>ID</th>
                            <th>ФИО</th>
                            {{--<th>Имя</th>--}}
                            {{--<th>Отчество</th>--}}
                            <th>Должность</th>
                            <th>IP-телефон</th>
                            <th>Телефон</th>
                            <th>Действия</th>

                       </tr>
                        </thead>
                        <tbody>
                        @foreach($otdel->getUsers as $user)
                            <tr class="searchable">
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->surname}} {{ $user->firstname }} {{ $user->secondname }}</td>
                                {{--<td>{{ $user->firstname }}</td>--}}
                                {{--<td>{{ $user->secondname }}</td>--}}
                                <td>{{ $user->getPost->post }}</td>
                                <td>{{ $user->iptel }}</td>
                                <td>{{ $user->tel}}</td>
                                <td>
                                    <div class="btn-group" role="group">
                                        <a href="{{ route('admin.users.show', $user->id)}}" title="Show" >
                                            <button type="button" class="btn btn-sm btn-secondary mr-1 shadow"><i class="fa fa-eye"></i></button>
                                        </a>
                                        <a href="{{ route('admin.users.edit', $user->id)}}" title="Edit">
                                            <button type="button" class="btn btn-sm btn-primary mr-1 shadow"><i class="fa fa-edit"></i></button>
                                        </a>
                                        <form action="{{ route('admin.users.destroy', $user->id) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger shadow" title="Delete"
                                                    onclick="return confirm('Are you sure?')"><i class="fa fa-trash"></i>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        @endforeach
                        <tr class='notfound'>
                            <td colspan="6">Нет записей</td>
                        </tr>
                        </tbody>
                </table>
                <hr>
            </div>
        </div>

    </div>

@endsection


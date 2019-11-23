@extends('admin.layouts.app')

@section('content')
    @include('admin.layouts.messages')
    @include('admin.layouts.search')
    <div class="row justify-content-center ">

        <div class="card shadow">
            <div class="card-header">
                <h2>Table - Otdels</h2>
            </div>
            <div class="card-body">
                <table class="table table-bordered table-striped table-hover text-center">
                    <thead>
                    <tr class="thead-dark">
                        <th>ID</th>
                        <th>Отдел</th>
                        <th>Адрес</th>
                        <th>Телефон</th>
                        <th>Email</th>
                        <th>Создан</th>
                        <th>Изменен</th>
                        <th>Действия</th>
                    </tr>
                    </thead>
                    <tbody>
                    @forelse($otdels as $otdel)
                        <tr class="searchable">
                            <td> {{ $otdel->id }} </td>
                            <td> {{ $otdel->otdel }} </td>
                            <td class="td1"> {{ $otdel->address }} </td>
                            <td> {{ $otdel->telefon }} </td>
                            <td> {{ $otdel->email }} </td>
                            <td> {{ $otdel->created_at }} </td>
                            <td> {{ $otdel->updated_at}} </td>
                            <td>
                                <div class="btn-group" role="group">
                                    <a href="{{ route('admin.otdels.edit', $otdel->id)}}">
                                        <button type="button" class="btn btn-sm btn-primary mr-1 shadow">Edit</button>
                                    </a>
                                    <form action="{{ route('admin.otdels.destroy', $otdel->id) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger shadow"
                                                onclick="return confirm('Are you sure?')"><i class="fa fa-trash"></i>
                                        </button>
                                    </form>
                                </div>

                            </td>
                        </tr>

                    @empty
                    @endforelse
                    <tr class='notfound'>
                        <td colspan="8">Нет записей</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>


@endsection

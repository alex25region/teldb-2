@extends('admin.layouts.app')

@section('content')

    <form>
        <div class="row justify-content-end mb-3">
            <div class="col-3">
                <input type="text" class="form-control shadow" placeholder="Search..." aria-label="Search...">
            </div>
            <div class="col-2">
                <a class="btn btn-md btn-success shadow" href="{{route('admin.otdels.create')}}">Add Row</a>
            </div>
        </div>
    </form>

    <div class="row justify-content-center ">

        <div class="card shadow">
            <div class="card-header">
                <h2>Table - Otdels</h2>
            </div>
            <div class="card-body">
                <table class="table table-sm table-bordered table-striped table-hover text-center">
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
                    @forelse($otdels as $otdel)
                        <tr>
                            <td> {{ $otdel->id }} </td>
                            <td> {{ $otdel->otdel }} </td>
                            <td> {{ $otdel->address }} </td>
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
                        <tr>
                            <td colspan="8">Нет записей</td>
                        </tr>
                    @endforelse
                </table>
            </div>
        </div>
    </div>

@endsection

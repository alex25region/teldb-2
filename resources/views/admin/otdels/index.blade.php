@extends('admin.layouts.app')

@section('content')

    <div class="content-wrapper">
        <div class="row justify-content-center">
            <div class="col-auto">

                <div class="form-group d-block">
                    <a href="{{route('admin.otdels.create')}}" class="btn btn-success text-center">Create</a>
                </div>
                <table class="table table-sm table-striped">
                    <tr class="thead-light text-center">
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
                            <td class="d-flex">
                                <a href="{{route('admin.otdels.edit', $otdel->id)}}" class="btn btn-sm btn-primary btn-block text-white">
                                    Edit
                                </a>
                                <form action="{{ route('admin.otdels.destroy', $otdel->id) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <input type="submit" class="btn btn-sm btn-block btn-danger" value="Delete" onclick="return confirm('Are you sure?')"/>
                                </form>
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

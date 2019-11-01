@extends('admin.layouts.app')

@section('content')
    @include('admin.layouts.messages')
    <form>
        <div class="row justify-content-end mb-3">
            <div class="col-3">
                <input type="text" class="form-control shadow" placeholder="Search..." aria-label="Search...">
            </div>
            <div class="col-2">
                <a class="btn btn-md btn-success shadow" href="{{route('admin.posts.create')}}">Add Row</a>
            </div>
        </div>
    </form>

    <div class="row justify-content-center ">
        <div class="card shadow">
            <div class="card-header">
                <h2>Table - Posts</h2>
            </div>
            <div class="card-body">
                    <table class="table table-bordered table-striped table-hover text-center">
                        <tr class="thead-dark">
                            <th>ID</th>
                            <th>Должность</th>
                            <th>Создан</th>
                            <th>Обновлен</th>
                            <th>Действия</th>
                        </tr>
                        @forelse($posts as $post)
                            <tr>
                                <td> {{ $post->id }} </td>
                                <td> {{ $post->post }} </td>
                                <td> {{ $post->created_at }} </td>
                                <td> {{ $post->updated_at}} </td>
                                <td>
                                    <div class="btn-group" role="group">
                                        <a href="{{ route('admin.posts.edit', $post->id)}}">
                                            <button type="button" class="btn btn-sm btn-primary mr-1 shadow">Edit</button>
                                        </a>
                                        <form action="{{ route('admin.posts.destroy', $post->id) }}" method="post">
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
                                <td colspan="5">Нет записей</td>
                            </tr>
                        @endforelse
                    </table>
                </div>
            </div>
    </div>


@endsection

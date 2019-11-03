@extends('admin.layouts.app')

@section('content')
    @include('admin.layouts.messages')
    @include('admin.layouts.search')


    <div class="row justify-content-center">
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

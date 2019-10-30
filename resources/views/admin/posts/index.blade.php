@extends('admin.layouts.app')

@section('content')
    <section class="content">
        <div class="content-wrapper">
            <div class="form-group d-block">
                <a href="{{route('admin.posts.create')}}" class="btn btn-success text-center">Create</a>
            </div>
            <div class="row justify-content-center">

                <div class="col-md-11">
                    <table class="table table-bordered table-sm table-striped">
                        <tr class="thead-light">
                            <th>IS</th>
                            <th>Должность</th>
                            <th>Создан</th>
                            <th>Обновлен</th>
                            <th>Действия</th>
                        </tr>
                        @forelse($posts as $post)
                            <tr>
                                <th scope="row"> {{ $post->id }} </th>
                                <td> {{ $post->post }} </td>
                                <td> {{ $post->created_at }} </td>
                                <td> {{ $post->updated_at}} </td>
                                <td class="d-flex">
                                    <a href="{{route('admin.posts.edit', $post->id)}}" class="btn btn-sm btn-primary btn-block text-white">
                                        Edit
                                    </a>
                                    <form action="{{ route('admin.posts.destroy', $post->id) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <input type="submit" class="btn btn-sm btn-block btn-danger" value="Delete" onclick="return confirm('Are you sure?')"/>
                                    </form>
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
    </section>

@endsection
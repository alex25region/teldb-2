@extends('admin.layouts.app')

@section('content')
    @include('admin.layouts.messages')
        <div class="row justify-content-center">
            <div class="col-md-6">

                <div class="card shadow">
                    <div class="card-header">
                        <h3>Create User</h3>
                    </div>
                    <div class="card-body">
                            <form action="{{ route('admin.users.store') }}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label for="surname">Фамилия</label>
                                    <input type="text" class="form-control" id="surname" name="surname"/>
                                </div>
                                <div class="form-group inline">
                                    <label for="firstname">Имя</label>
                                    <input type="text" class="form-control" id="firstname" name="firstname"/>
                                </div>
                                <div class="form-group">
                                    <label class="inline" for="secondname">Отчество</label>
                                    <input type="text" class="form-control" id="secondname" name="secondname"/>
                                </div>
                                <div class="form-group">
                                    <label for="post_id">Должность</label>
                                    <select class="form-control" id="post_id" name="post_id">

                                        @foreach($posts as $post)
                                            <option value="{{ $post->id }}">{{ $post->post }}</option>
                                        @endforeach

                                    </select>
                                </div>
                                <div  class="form-group">
                                    <label class="inline" for="iptel">IP-Телефон</label>
                                    <input type="text" class="form-control" id="iptel" name="iptel"  placeholder/>
                                </div>
                                <div class="form-group"><label for="tel">Телефон</label>
                                    <input type="text" class="form-control" id="tel" name="tel"/>
                                </div>
                                <div class="form-group"><label for="otdel_id">Отдел</label>
                                    <select class="form-control" id="otdel_id" name="otdel_id">

                                        @foreach($otdels as $otdel)
                                            <option value="{{ $otdel->id }}">{{ $otdel->otdel }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group text-right d-block">
                                    <button class="btn btn-lg btn-primary " type="submit">Create</button>
                                    <a href="{{ route('admin.users.index') }}" class="btn btn-lg text btn-danger">Back</a>
                                    </a>
                                </div>
                            </form>
                        </div>
                </div>
            </div>
        </div>


@endsection

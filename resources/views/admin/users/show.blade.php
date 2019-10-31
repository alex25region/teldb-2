@extends('admin.layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow">
                <div class="card-header">
                    <h3>Show User</h3>
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.users.show', $user->id) }}" method="get">
                        <div class="form-group">
                            <label for="id">ID</label>
                            <input type="text" class="form-control" id="id" name="id" value="{{ $user->id }}" disabled/>
                        </div>
                        <div class="form-group">
                            <label for="surname">Фамилия</label>
                            <input type="text" class="form-control" id="surname" name="surname" value="{{ $user->surname }}" disabled/>
                        </div>
                        <div class="form-group inline">
                            <label for="firstname">Имя</label>
                            <input type="text" class="form-control" id="firstname" name="firstname" value="{{ $user->firstname }}"
                                   disabled/>
                        </div>
                        <div class="form-group">
                            <label class="inline" for="secondname">Отчество</label>
                            <input type="text" class="form-control" id="secondname" name="secondname"
                                   value="{{ $user->secondname }}" disabled/>
                        </div>
                        <div class="form-group">
                            <label class="inline" for="post_id">Должность</label>
                            <input type="text" class="form-control" id="post_id" name="post_id" value="{{ $user->getPost->post }}"
                                   disabled/>
                        </div>
                        <div class="form-group">
                            <label class="inline" for="iptel">IP-Телефон</label>
                            <input type="text" class="form-control" id="iptel" name="iptel" value="{{ $user->iptel }}" disabled/>
                        </div>
                        <div class="form-group"><label for="tel">Телефон</label>
                            <input type="text" class="form-control" id="tel" name="tel" value="{{ $user->tel }}" disabled/>
                        </div>
                        <div class="form-group">
                            <label class="inline" for="otdel_id">Отдел</label>
                            <input type="text" class="form-control" id="otdel_id" name="otdel_id" value="{{ $user->getOtdel->otdel }}"
                                   disabled/>
                        </div>
                        <div class="form-group">
                            <label class="inline" for="created_at">Создан</label>
                            <input type="text" class="form-control" id="created_at" name="created_at" value="{{ $user->created_at }}"
                                   disabled/>
                        </div>
                        <div class="form-group">
                            <label class="inline" for="updated_at">Обновлен</label>
                            <input type="text" class="form-control" id="updated_at" name="updated_at" value="{{ $user->updated_at }}"
                                   disabled/>
                        </div>
                        <div class="form-group text-right d-block">
                            <a href="{{ route('admin.users.index') }}" class="btn btn-lg btn-danger">Back</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


@endsection
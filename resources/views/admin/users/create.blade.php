@extends('admin.layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">

                <div class="card">
                    <div class="card-header">
                        Create User
                    </div>
                    <div class="card-body card-success">
                        <div class="text-left contact-clean">

                            <form action="{{ route('admin.users.store') }}" method="post">
                                <div class="form-group">
                                    <label for="surname">Фамилия</label>
                                    <input type="text" class="form-control" id="surname" name="surname"/>adsd
                                </div>
                                <div class="form-group inline">
                                    <label for="name">Имя</label>
                                    <input type="text" class="form-control" id="name" name="name"/>
                                </div>
                                <div class="form-group">
                                    <label class="inline" for="secondname">Отчество</label>
                                    <input type="text" class="form-control" id="secondname" name="secondname"/>
                                </div>
                                <div class="form-group">
                                    <label for="post">Должность</label>
                                    <select class="form-control" id="post" name="post">

                                        @foreach($posts as $post)
                                            <option value="{{ $post->post }}">{{ $post->post }}</option>
                                        @endforeach

                                    </select>
                                </div>
                                <div  class="form-group">
                                    <label class="inline" for="iptel">IP-Телефон</label>
                                    <input type="text" class="form-control" id="iptel" name="iptel"  placeholder/>
                                </div>
                                <div class="form-group"><label for="telefon">Телефон</label>
                                    <input type="text" class="form-control" id="telefon" name="telefon"/>
                                </div>
                                <div class="form-group"><label for="otdel">Отдел</label>
                                    <select class="form-control" id="otdel" name="otdel">

                                        @foreach($otdels as $otdel)
                                            <option value="{{ $otdel->otdel }}">{{ $otdel->otdel }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group text-right d-block">
                                    <button class="btn btn-primary text-uppercase text-center" type="submit">Create</button>
                                </div>
                            </form>
                        </div>



                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
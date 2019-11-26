@extends('admin.layouts.app')

@section('content')
    @include('admin.layouts.messages')
        <div class="row justify-content-center">
            <div class="col-md-6">

                <div class="card shadow">
                    <div class="card-header">
                        <h3>Edit User</h3>
                    </div>
                    <div class="card-body card-success">

                        <div class="text-left contact-clean">

                            <form action="{{ route('admin.users.update', $user->id) }}" method="post">
                                @csrf
                                @method('PUT')
                                <div class="form-group">
                                    <label for="surname">Фамилия</label>
                                    <input type="text" class="form-control" id="surname" name="surname" value="{{ $user->surname }}"/>
                                </div>
                                <div class="form-group inline">
                                    <label for="firstname">Имя</label>
                                    <input type="text" class="form-control" id="firstname" name="firstname" value="{{ $user->firstname }}"/>
                                </div>
                                <div class="form-group">
                                    <label class="inline" for="secondname">Отчество</label>
                                    <input type="text" class="form-control" id="secondname" name="secondname"
                                           value="{{ $user->secondname }}"/>
                                </div>
                                <div class="form-group">
                                    <label for="post_id">Должность</label>
                                    <select class="form-control" id="post_id" name="post_id">

                                        @foreach($posts as $post)
                                            @if( $post->id == $user->getPost->id )
                                                <option value="{{ $post->id }}" selected="selected"> {{ $post->post }}</option>
                                            @else
                                                <option value="{{ $post->id }}"> {{ $post->post }}</option>
                                            @endif
                                        @endforeach

                                    </select>
                                </div>
                                <div class="form-group">
                                    <label class="inline" for="iptel">IP-Телефон</label>
                                    <input type="text" class="form-control" id="iptel" name="iptel" value="{{ $user->iptel }}"/>
                                </div>
                                <div class="form-group"><label for="tel">Телефон</label>
                                    <input type="text" class="form-control" id="tel" name="tel" value="{{ $user->tel }}"/>
                                </div>
                                <div class="form-group"><label for="otdel_id">Отдел</label>
                                    <select class="form-control" id="otdel_id" name="otdel_id">
                                        @foreach($otdels as $otdel)
                                            @if( $otdel->id == $user->getOtdel->id )
                                                <option value="{{ $otdel->id }}" selected="selected"> {{ $otdel->otdel }}</option>
                                            @else
                                                <option value="{{ $otdel->id }}"> {{ $otdel->otdel }}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group text-right d-block">
                                    <input type="submit" class="btn btn-lg btn-primary" value="Update"/>
                                    <a href="{{ route('admin.users.index') }}" class="btn btn-lg btn-danger">Back</a>
                                </div>
                            </form>
                        </div>


                    </div>
                </div>
            </div>
        </div>
@endsection
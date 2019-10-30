@extends('admin.layouts.app')

@section('content')

    <div class="container mt-2">
        <div class="row justify-content-center">
            <div class="col-md-6">

                <div class="card">
                    <div class="card-header">
                        Edit Otdel
                    </div>
                    <div class="card-body card-success">
                        <div class="text-left contact-clean">

                            <form action="{{ route('admin.otdels.update', $otdel->id) }}" method="post">
                                @csrf
                                @method('PUT')
                                {{-- или так: {{ method_field('PUT') }}--}}
                                <div class="form-group">
                                    <label for="otdel">Отдел</label>
                                    <input type="text" class="form-control" id="otdel" name="otdel" value="{{$otdel->otdel}}"/>
                                </div>
                                <div class="form-group">
                                    <label for="address">Адрес</label>
                                    <input type="text" class="form-control" id="address" name="address" value="{{$otdel->address}}"/>
                                </div>
                                <div class="form-group">
                                    <label class="inline" for="telefon">Телефон</label>
                                    <input type="text" class="form-control" id="telefon" name="telefon" value="{{$otdel->telefon}}"/>
                                </div>

                                <div class="form-group">
                                    <label class="inline" for="email">Email</label>
                                    <input type="text" class="form-control" id="email" name="email" value="{{$otdel->email}}"/>
                                </div>
                                <div class="form-group text-right d-block">
                                    <a href="{{ route('admin.otdels.index') }}" class="btn btn-danger">Back</a>
                                    {{--<button class="btn btn-primary text-center" type="submit">Update</button>--}}
                                    <input type="submit" class="btn btn-primary" value="Update"/>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
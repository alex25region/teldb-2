@extends('admin.layouts.app')

@section('content')
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow">
                    <div class="card-header">
                        <h3>Create Otdel</h3>
                    </div>
                    <div class="card-body card-success">

                        <div class="text-left contact-clean">

                            <form action="{{ route('admin.otdels.store') }}" method="post">
                                @csrf

                                <div class="form-group">
                                    <label for="otdel">Отдел</label>
                                    <input type="text" class="form-control" id="otdel" name="otdel"/>
                                </div>
                                <div class="form-group">
                                    <label for="address">Адрес</label>
                                    <input type="text" class="form-control" id="address" name="address"/>
                                </div>
                                <div class="form-group">
                                    <label for="telefon">Телефон</label>
                                    <input type="text" class="form-control" id="telefon" name="telefon"/>
                                </div>

                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="text" class="form-control" id="email" name="email"/>
                                </div>

                                <div class="form-group text-right d-block">
                                    <button class="btn btn-success btn-lg text-center" type="submit">Create</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
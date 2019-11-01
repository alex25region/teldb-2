@extends('admin.layouts.app')

@section('content')
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        Create Post
                    </div>
                    <div class="card-body card-success">
                        <div class="text-left contact-clean">
                            <form action="{{ route('admin.posts.store') }}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label for="post">Должность</label>
                                    <input type="text" class="form-control" id="post" name="post"/>
                                </div>
                                <div class="form-group text-right d-block">
                                    <button class="btn btn-success btn-lg" type="submit">Create</button>
                                    <a href="{{ route('admin.posts.index') }}" class="btn btn-lg text btn-danger">Back</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>


@endsection

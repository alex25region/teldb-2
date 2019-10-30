@extends('admin.layouts.app')

@section('content')
    <div class="container mt-2">
        <div class="row justify-content-center">
            <div class="col-md-6">

                <div class="card">
                    <div class="card-header">
                        Edit Post
                    </div>
                    <div class="card-body card-success">
                        <div class="text-left contact-clean">

                            <form action="{{ route('admin.posts.update', $post->id) }}" method="post">
                                @csrf
                                @method('PUT')
                                {{-- или так: {{ method_field('PUT') }}--}}
                                <div class="form-group">
                                    <label for="post">Отдел</label>
                                    <input type="text" class="form-control" id="post" name="post" value="{{$post->post}}"/>
                                </div>
                                <div class="form-group text-right d-block">
                                    <a href="{{ route('admin.posts.index') }}" class="btn btn-danger">Back</a>
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
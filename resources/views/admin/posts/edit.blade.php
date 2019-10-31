@extends('admin.layouts.app')

@section('content')
        <div class="row justify-content-center">
            <div class="col-md-6">

                <div class="card shadow">
                    <div class="card-header">
                        <h3>Edit Post</h3>
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
                                    <input type="submit" class="btn btn-lg btn-primary" value="Update"/>
                                    <a href="{{ route('admin.otdels.index') }}">
                                        <button  class="btn btn-lg btn-danger">Back</button>
                                    </a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>


@endsection
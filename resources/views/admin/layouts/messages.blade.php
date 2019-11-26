{{--Сообщение об ошибке--}}
@if($errors->any())
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </div>
        </div>
    </div>
@endif

{{--Сообщение об успешности--}}
@if(session('success'))
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;﻿</span>
                </button>
                <strong>{{ session()->get('success') }}</strong>
            </div>
        </div>
    </div>
@endif

{{--Просто сообщение--}}
@if(session('message'))
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="alert alert-info alert-dismissible fade show" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;﻿</span>
                </button>
                <strong>{{ session()->get('message') }}</strong>
            </div>
        </div>
    </div>
@endif


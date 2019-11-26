<form class="form-row form-inline justify-content-end mx-2 mb-3" id="searchform">
    <div class="row">
        <div class="input-group mr-2 w-auto shadow search">
            <input type="text" class="form-control" placeholder="Search..." id="search" autofocus />
            <div class="input-group-append">
                <button class="btn btn-secondary" id="clear" type="button" >
                    <i class="fa fa-times"></i>
                </button>
            </div>
        </div>
        {{--<a class="btn  btn-success shadow " href="{{route('admin.otdels.create')}}">Add Row</a>--}}

        @if(url()->current() == route('admin.users.index'))
            <a class="btn  btn-success shadow " href="{{route('admin.users.create')}}">Add User</a>
        @elseif(url()->current() == route('admin.posts.index'))
            <a class="btn  btn-success shadow " href="{{route('admin.posts.create')}}">Add Post</a>
        @elseif(url()->current() == route('admin.otdels.index'))
            <a class="btn  btn-success shadow " href="{{route('admin.otdels.create')}}">Add Otdel</a>
        @endif

    </div>
</form>

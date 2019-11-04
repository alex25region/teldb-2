<form class="form-row form-inline justify-content-end mx-2 mb-3">
    <div class="row">
        <div class="input-group mr-2 w-auto shadow search">
            <input type="text" class="form-control " placeholder="Search..." id="search" autofocus />
            <div class="input-group-append">
                <button class="btn btn-secondary clear" type="reset">
                    <i class="fa fa-times"></i>
                </button>
            </div>
        </div>
        <a class="btn  btn-success shadow " href="{{route('admin.otdels.create')}}">Add Row</a>
    </div>
</form>

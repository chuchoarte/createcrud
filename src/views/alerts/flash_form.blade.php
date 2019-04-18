@if(Session::has('message'))
    <div class="col-lg-12">
        <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <p>{{ Session::get('message') }}</p>
        </div>
    </div>
@endif
@if(Session::has('alert'))
    <div class="col-lg-12">
        <div class="alert alert-danger">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <p>{{ Session::get('alert') }}</p>
        </div>
    </div>
@endif

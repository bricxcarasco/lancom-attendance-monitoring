@if(session()->has('error'))
    <div class="alert alert-danger alert-dismissible alert-account-all-selector alert-account-error">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <h5><i class="icon fas fa-ban"></i> Error!</h5>
        {{ session()->get('error') }}
    </div>
@endif

@if(session()->has('success'))
    <div class="alert alert-success alert-dismissible alert-account-all-selector alert-account-add">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <h5><i class="icon fas fa-info"></i> Success</h5>
        {{ session()->get('success') }}
    </div>
@endif
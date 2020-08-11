<div class="modal fade" id="add-account-modal">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title"><i class="fas fa-user"></i> Add Administrator Account</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="addAccountForm" action="{{ route('admin.users.administrator.add') }}" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label>Name</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="far fa-user"></i></span>
                            </div>
                            <input type="text" class="form-control account-add-name" name="name">
                        </div>
                        <span class="error-span-message error-add-account-name"></span>
                    </div>

                    <div class="form-group">
                        <label>Email address</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                            </div>
                            <input type="email" class="form-control account-add-email" name="email">
                        </div>
                        <span class="error-span-message error-add-account-email"></span>
                    </div>

                    <div class="form-group row">
                        <div class="col-sm-6">
                            <label>Birthdate</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-birthday-cake"></i></span>
                                </div>
                                <input type="date" class="form-control account-add-birthdate" name="birthdate" data-inputmask-alias="datetime" data-inputmask-inputformat="mm/dd/yyyy" data-mask>
                            </div>
                            <span class="error-span-message error-add-account-birthdate"></span>
                        </div>
                        <div class="col-sm-6">
                            <label>Contact Number</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-phone"></i></span>
                                </div>
                                <input type="text" class="form-control account-add-contact" name="contact">
                            </div>
                            <span class="error-span-message error-add-account-contact"></span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Address</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-map-marked-alt"></i></span>
                            </div>
                            <input type="text" class="form-control account-add-address" name="address">
                        </div>
                        <span class="error-span-message error-add-account-address"></span>
                    </div>

                    <div class="form-group row">
                        <div class="col-sm-6">
                            <label>Password</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-lock"></i></span>
                                </div>
                                <input type="password" class="form-control account-add-password" name="password">
                            </div>
                            <span class="error-span-message error-add-account-password"></span>
                        </div>
                        <div class="col-sm-6">
                            <label>Confirm Password</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-lock"></i></span>
                                </div>
                                <input type="password" class="form-control account-add-confirm-password">
                            </div>
                            <span class="error-span-message error-add-account-confirm-password"></span>
                        </div>
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary btn-modal-add-account">Add Account</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="modal fade" id="edit-account-modal">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title"><i class="fas fa-user-edit"></i> Edit Administrator Account</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="editAccountForm" action="{{ route('admin.users.administrator.edit') }}" method="POST">
                @csrf
                @method('PUT')
                <input type="hidden" id="edit-account-id" name="id"/>
                <div class="modal-body">
                    <div class="form-group">
                        <label>Name</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="far fa-user"></i></span>
                            </div>
                            <input type="text" name="name" class="form-control account-edit-name">
                        </div>
                        <span class="error-span-message error-edit-account-name"></span>
                    </div>

                    <div class="form-group">
                        <label>Email address</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                            </div>
                            <input type="email" name="email" class="form-control account-edit-email">
                        </div>
                        <span class="error-span-message error-edit-account-email"></span>
                    </div>

                    <div class="form-group row">
                        <div class="col-sm-6">
                            <label>Birthdate</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-birthday-cake"></i></span>
                                </div>
                                <input type="date" name="birthdate" class="form-control account-edit-birthdate" data-inputmask-alias="datetime" data-inputmask-inputformat="mm/dd/yyyy" data-mask>
                            </div>
                            <span class="error-span-message error-edit-account-birthdate"></span>
                        </div>

                        <div class="col-sm-6">
                            <label>Contact Number</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-phone"></i></span>
                                </div>
                                <input type="text" name="contact" class="form-control account-edit-contact">
                            </div>
                            <span class="error-span-message error-edit-account-contact"></span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Address</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-map-marked-alt"></i></span>
                            </div>
                            <input type="text" name="address" class="form-control account-edit-address">
                        </div>
                        <span class="error-span-message error-edit-account-address"></span>
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary btn-modal-edit-account">Update Account</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="modal fade" id="change-password-account-modal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title"><i class="fas fa-key"></i> Change Account Password</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="changePasswordAccountForm" action="{{ route('admin.users.administrator.change_password') }}" method="POST">
                @csrf
                @method('PUT')
                <input type="hidden" id="change-password-account-id" name="id"/>
                <div class="modal-body">
                    <div class="form-group">
                        <label>New Password</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-lock"></i></span>
                            </div>
                            <input type="password" name="password" class="form-control account-change-password">
                        </div>
                        <span class="error-span-message error-account-change-password"></span>
                    </div>

                    <div class="form-group">
                        <label>Confirm Password</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-lock"></i></span>
                            </div>
                            <input type="password" name="confirm_password" class="form-control account-change-confirm-password">
                        </div>
                        <span class="error-span-message error-account-change-confirm-password"></span>
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary btn-modal-change-password">Change Password</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="modal fade" id="enable-account-modal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title"><i class="fas fa-thumbs-up"></i> Enable Account</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="enableAccountForm" action="{{ route('admin.users.administrator.enable') }}" method="POST">
                @csrf
                @method('PATCH')
                <div class="modal-body">
                    <input type="hidden" id="enable-account-id" name="id"/>
                    <p><i>Are you sure you want to enable this account?</i></p>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary btn-modal-enable-account">Enable Account</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="modal fade" id="disable-account-modal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title"><i class="fas fa-thumbs-down"></i> Disable Account</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="disableAccountForm" action="{{ route('admin.users.administrator.disable') }}" method="POST">
                @csrf
                @method('PATCH')
                <div class="modal-body">
                    <p><i>Are you sure you want to disable this account?</i></p>
                    <input type="hidden" id="disable-account-id" name="id"/>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary btn-modal-disable-account">Disable Account</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="modal fade" id="delete-account-modal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title"><i class="fas fa-trash"></i> Delete Account</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="deleteAccountForm" action="{{ route('admin.users.administrator.delete') }}" method="POST">
                @csrf
                @method('DELETE')
                <div class="modal-body">
                    <p><i>Are you sure you want to delete this account?</i></p>
                    <input type="hidden" id="delete-account-id" name="id"/>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary btn-modal-delete-account">Delete Account</button>
                </div>
            </form>
        </div>
    </div>
</div>
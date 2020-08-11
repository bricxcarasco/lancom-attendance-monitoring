$(function () {
    $("#tableUserAdministratorAccount").DataTable({
        "responsive": true,
        "autoWidth": false,
    });
});

$(document).ready(function () {
    // Table Buttons
    $('#tableUserAdministratorAccount').on('click', '.btn-edit-account', function() {
        let id = $(this).closest('tr').find('input[type=hidden]').val();
        $('#edit-account-modal').modal('show');
    });

    $('#tableUserAdministratorAccount').on('click', '.btn-change-password-account', function() {
        let id = $(this).closest('tr').find('input[type=hidden]').val();
        $('#change-password-account-modal').modal('show');
        $('#change-password-account-modal #change-password-account-id').val(id);
    });

    $('#tableUserAdministratorAccount').on('click', '.btn-enable-account', function() {
        let id = $(this).closest('tr').find('input[type=hidden]').val();
        $('#enable-account-modal').modal('show');
        $('#enable-account-modal #enable-account-id').val(id);
    });

    $('#tableUserAdministratorAccount').on('click', '.btn-disable-account', function() {
        let id = $(this).closest('tr').find('input[type=hidden]').val();
        $('#disable-account-modal').modal('show');
        $('#disable-account-modal #disable-account-id').val(id);
    });

    $('#tableUserAdministratorAccount').on('click', '.btn-delete-account', function() {
        let id = $(this).closest('tr').find('input[type=hidden]').val();
        $('#delete-account-modal').modal('show');
        $('#delete-account-modal #delete-account-id').val(id);
    });

    // Modal Buttons
    $('#add-account-modal').on('click', '.btn-modal-add-account', () => {
        $('.error-span-message').text("");

        let accountAddName = $('#add-account-modal .account-add-name').val();
        let accountAddEmail = $('#add-account-modal .account-add-email').val();
        let accountAddBirthdate = $('#add-account-modal .account-add-birthdate').val();
        let accountAddAddress = $('#add-account-modal .account-add-address').val();
        let accountAddContact = $('#add-account-modal .account-add-contact').val();
        let accountAddPassword = $('#add-account-modal .account-add-password').val();
        let accountAddConfirmPassword = $('#add-account-modal .account-add-confirm-password').val();

        let accountValidate = accountValidation(accountAddName, accountAddEmail, accountAddBirthdate, accountAddAddress, accountAddContact, accountAddPassword, accountAddConfirmPassword);

        if (accountValidate) {
            $('form#addAccountForm').submit();
        }
    });

    $('#edit-account-modal').on('click', '.btn-modal-edit-account', () => {
        console.log('Hello');
    });

    $('#change-password-account-modal').on('click', '.btn-modal-change-password', () => {
        $('.error-span-message').text("");

        let password = $('#change-password-account-modal .account-change-password').val();
        let confirm_password = $('#change-password-account-modal .account-change-confirm-password').val();

        if (!password || password !== confirm_password) {
            if (!password) {
                $('.error-account-change-password').text("Password is required");
            }

            if (password !== confirm_password) {
                $('.error-account-change-confirm-password').text("Passwords not matched");
            }
        } else {
            $('form#changePasswordAccountForm').submit();
        }

    });

    $('#enable-account-modal').on('click', '.btn-modal-enable-account', () => {
        $('form#enableAccountForm').submit();
    });

    $('#disable-account-modal').on('click', '.btn-modal-disable-account', () => {
        $('form#disableAccountForm').submit();
    });

    $('#delete-account-modal').on('click', '.btn-modal-delete-account', () => {
        $('form#deleteAccountForm').submit();
    });

    // Process Functions
    function accountValidation(name, email, birthdate, address, contact, password, confirm_password) {
        if (!name || !email || !birthdate || !address || !contact || !password || !validateEmail(email) || password !== confirm_password) {
            if (!name) {
                $('.error-add-account-name').text("Name is required");
            }

            if (!email) {
                $('.error-add-account-email').text("Email address is required");
            } else if (!validateEmail(email)) {
                $('.error-add-account-email').text("Invalid email address format");
            }

            if (!birthdate) {
                $('.error-add-account-birthdate').text("Birthdate is required");
            }

            if (!contact) {
                $('.error-add-account-contact').text("Contact number is required");
            }

            if (!address) {
                $('.error-add-account-address').text("Address is required");
            }

            if (!password) {
                $('.error-add-account-password').text("Password is required");
            }

            if (password !== confirm_password) {
                $('.error-add-account-confirm-password').text("Passwords not matched");
            }
        } else {
            return true;
        }
    }

    // Global Functions
    function validateEmail(email) {
        const re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        return re.test(String(email).toLowerCase());
    }
});
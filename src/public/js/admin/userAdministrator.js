$(function () {
    $("#tableUserAdministratorAccount").DataTable({
        "responsive": true,
        "autoWidth": false,
    });
});

$(document).ready(function () {
    // Table Buttons
    $('#tableUserAdministratorAccount').on('click', '.btn-edit-account', () => {
        let id = $(this).closest('tr').find('input[type=hidden]').val();
        $('#edit-account-modal').modal('show');
    });

    $('#tableUserAdministratorAccount').on('click', '.btn-change-password-account', () => {
        let id = $(this).closest('tr').find('input[type=hidden]').val();
        $('#change-password-account-modal').modal('show');
    });

    $('#tableUserAdministratorAccount').on('click', '.btn-enable-account', () => {
        let id = $(this).closest('tr').find('input[type=hidden]').val();
        $('#enable-account-modal').modal('show');
    });

    $('#tableUserAdministratorAccount').on('click', '.btn-disable-account', () => {
        let id = $(this).closest('tr').find('input[type=hidden]').val();
        $('#disable-account-modal').modal('show');
    });

    $('#tableUserAdministratorAccount').on('click', '.btn-delete-account', () => {
        let id = $(this).closest('tr').find('input[type=hidden]').val();
        $('#delete-account-modal').modal('show');
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
        console.log('Hello');
    });

    $('#enable-account-modal').on('click', '.btn-modal-enable-account', () => {
        console.log('Hello');
    });

    $('#disable-account-modal').on('click', '.btn-modal-disable-account', () => {
        console.log('Hello');
    });

    $('#delete-account-modal').on('click', '.btn-modal-delete-account', () => {
        console.log('Hello');
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
                $('.error-add-account-confirm-password').text("Password not matched");
            }
        } else {
            return true;
        }
    }

    function addAcount(name, email, birthdate, address, contact, password) {
        
    }

    // Global Functions
    function validateEmail(email) {
        const re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        return re.test(String(email).toLowerCase());
    }
});
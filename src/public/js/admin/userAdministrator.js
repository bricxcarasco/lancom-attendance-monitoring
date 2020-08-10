$(function () {
    $("#tableUserAdministratorAccount").DataTable({
        "responsive": true,
        "autoWidth": false,
    });
});

$(document).ready(function () {
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
});
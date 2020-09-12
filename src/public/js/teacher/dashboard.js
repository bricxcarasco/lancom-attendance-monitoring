$(function () {

});

$(document).ready(function() {
    $('.enable_click_td').click(function() {
        $('#add-teacher-schedule').modal('show');
        $('#add-teacher-schedule .add-schedule-date').text($(this).data('date'));
        $('#add-teacher-schedule #date').val($(this).data('date'));
    });

    $('#add-teacher-schedule').on('click', '.btn-modal-add-schedule', function() {
        $('form#addTeacherSchedule').submit();
    });

    $('#schedule-view-modal').on('click', '.btn-modal-edit-schedule', function() {
        let schedule = JSON.parse(localStorage.getItem('TeacherSchedule'));
        $('#schedule-view-modal').modal('hide');
        $('#edit-teacher-schedule').modal('show');
        $('#edit-teacher-schedule #edit-id').val(schedule.id);
        $('#edit-teacher-schedule #edit-date').val(schedule.schedule_date);
        $('#edit-teacher-schedule .edit-schedule-date').text(schedule.schedule_date_text);
        $('#edit-teacher-schedule #edit-category').val(schedule.schedule_category);
        $('#edit-teacher-schedule #edit-status').val(schedule.status);
        $('#edit-teacher-schedule #edit-reason').val(schedule.reason);
    });

    $('#edit-teacher-schedule').on('click', '.btn-modal-update-schedule', function() {
        localStorage.removeItem('TeacherSchedule');
        $('form#editTeacherSchedule').submit();
    });
});

function lessonTrigger(id) {
    $.ajax({
        url: `/teacher/lesson/${id}`,
        type: 'GET',
        dataType: 'json',
        success: function(data) {
            $('#lesson-view-modal').modal('show');
            $('#lesson-view-modal .lesson-teacher').text(data.teacher_info.name);
            $('#lesson-view-modal .lesson-student').text(data.student_info.name);
            $('#lesson-view-modal .lesson-date').text(data.schedule_date);
            $('#lesson-view-modal .lesson-time').text(data.schedule_time);
            $('#lesson-view-modal .lesson-date-filed').text(data.date_filed);

            $('#lesson-view-modal .lesson-teacher-login').text(data.teacher_login);
            $('#lesson-view-modal .lesson-teacher-logout').text(data.teacher_logout);
            $('#lesson-view-modal .lesson-teacher-status').text(data.teacher_status_text);
            $("#lesson-view-modal #lesson-teacher-status").removeClass (function (index, className) {
                return (className.match (/(^|\s)badge-\S+/g) || []).join(' ');
            });
            $('#lesson-view-modal #lesson-teacher-status').addClass(`badge-pill badge-${data.teacher_ui_type}`);

            $('#lesson-view-modal .lesson-student-login').text(data.student_login);
            $('#lesson-view-modal .lesson-student-logout').text(data.student_logout);
            $('#lesson-view-modal .lesson-student-status').text(data.student_status_text);
            $("#lesson-view-modal #lesson-student-status").removeClass (function (index, className) {
                return (className.match (/(^|\s)badge-\S+/g) || []).join(' ');
            });
            $('#lesson-view-modal #lesson-student-status').addClass(`badge-pill badge-${data.student_ui_type}`);
        }
    });
}

function scheduleTrigger(id) {
    localStorage.removeItem('TeacherSchedule');
    $.ajax({
        url: `/teacher/schedule/${id}`,
        type: 'GET',
        dataType: 'json',
        success: function(data) {
            localStorage.setItem('TeacherSchedule', JSON.stringify(data));
            console.log(data);
            $('#schedule-view-modal').modal('show');
            $('#schedule-view-modal .schedule-name').text(data.user_info.name);
            $('#schedule-view-modal .schedule-date').text(data.schedule_date_text);
            $('#schedule-view-modal .schedule-leave-category').addClass(data.schedule_category_class)
            $('#schedule-view-modal .schedule-leave-category').text(data.schedule_category_text);
            $('#schedule-view-modal .schedule-leave-type').text(data.leave_type);
            $('#schedule-view-modal .schedule-reason').text(data.reason);
            $('#schedule-view-modal .schedule-date-filed').text(data.date_filed);

            if (data.is_edited === true) {
                $('#schedule-view-modal .btn-modal-edit-schedule').css('display', 'block');
            }
        }
    });
}
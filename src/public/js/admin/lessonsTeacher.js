$(function () {

});

$(document).ready(function() {
    
});

function lessonTrigger(id) {
    $.ajax({
        url: `lesson/${id}`,
        type: 'GET',
        dataType: 'json',
        success: function(data) {
            console.log(data);
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
    $.ajax({
        url: `schedule/${id}`,
        type: 'GET',
        dataType: 'json',
        success: function(data) {
            $('#schedule-view-modal').modal('show');
            $('#schedule-view-modal .schedule-name').text(data.user_info.name);
            $('#schedule-view-modal .schedule-date').text(data.schedule_datetime);
            $('#schedule-view-modal .schedule-leave-type').text(data.leave_type);
            $('#schedule-view-modal .schedule-reason').text(data.reason);
            $('#schedule-view-modal .schedule-date-filed').text(data.date_filed);
        }
    });
}
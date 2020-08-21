$(function () {

});

$(document).ready(function() {
    
});

function lessonTrigger(id) {
    $.ajax({
        url: `/admin/lessons_calendar/student/lesson/${id}`,
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
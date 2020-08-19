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
            $('#lesson-view-modal').modal('show');
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
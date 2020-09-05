<div class="modal fade" id="add-teacher-schedule">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title"><i class="fas fa-calendar-times"></i> Set Schedule</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="addTeacherSchedule" action="{{ route('teacher.schedule.add') }}" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="callout callout-warning">
                        <h6>Date: <span class="schedule-span add-schedule-date"></span></h6>
                    </div>

                    <input type="hidden" name="date" id="date">

                    <div class="form-group">
                        <label>Leave Day Category</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-calendar-alt"></i></span>
                            </div>
                            <select name="category" id="category" class="form-control">
                                <option value="1">Whole Day</option>
                                <option value="2">Half-day Morning</option>
                                <option value="3">Half-day Afternoon</option>
                            </select>
                        </div>
                        <span class="error-span-message error-add-schedule-category"></span>
                    </div>

                    <div class="form-group">
                        <label>Leave Type</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-stream"></i></span>
                            </div>
                            <select name="status" id="status" class="form-control">
                                <option value="1">Sick Leave</option>
                                <option value="2">Vacation Leave</option>
                                <option value="3">Emergency Leave</option>
                                <option value="4">Others</option>
                            </select>
                        </div>
                        <span class="error-span-message error-add-schedule-status"></span>
                    </div>

                    <div class="form-group">
                        <label>Leave Reason</label>
                        <div class="input-group">
                            <textarea type="text" cols="30" rows="5" class="form-control" name="reason"></textarea>
                        </div>
                        <span class="error-span-message error-add-schedule-reason"></span>
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary btn-modal-add-schedule">Set Schedule</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="modal fade" id="lesson-view-modal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title"><span class="schedule-name" class="badge badge-pill badge-success">Lesson View</span></h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="callout callout-info">
                    <h6>Teacher: <span class="lesson-span lesson-teacher"></span></h6>
                    <h6>Student: <span class="lesson-span lesson-student"></span></h6>
                    <h6>Schedule Date: <span class="lesson-span lesson-date"></span></h6>
                    <h6>Schedule Time: <span class="lesson-span lesson-time"></span></h6>
                    <h6>Date Filed: <span class="lesson-span lesson-date-filed"></span></h6>
                </div>

                <div class="callout callout-warning">
                    <h6>Teacher Login: <span class="lesson-span lesson-teacher-login"></span></h6>
                    <h6>Teacher Logout: <span class="lesson-span lesson-teacher-logout"></span></h6>
                    <h6>Teacher Status: <span id="lesson-teacher-status" class="badge badge-pill lesson-span lesson-teacher-status"></span></h6>
                </div>

                <div class="callout callout-success">
                    <h6>Student Login: <span class="lesson-span lesson-student-login"></span></h6>
                    <h6>Student Logout: <span class="lesson-span lesson-student-logout"></span></h6>
                    <h6>Student Status: <span id="lesson-student-status" class="badge badge-pill lesson-span lesson-student-status"></span></h6>
                </div>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="schedule-view-modal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title"><span class="badge badge-pill badge-danger">Not Available</span></h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="callout callout-info">
                    <h6>Name: <span class="schedule-span schedule-name"></span></h6>
                    <h6>Date: <span class="schedule-span schedule-date"></span></h6>
                    <h6>Leave Type: <span class="schedule-span schedule-leave-type"></span></h6>
                    <h6>Reason: <span class="schedule-span schedule-reason"></span></h6>
                    <h6>Date Filed: <span class="schedule-span schedule-date-filed"></span></h6>
                </div>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
@include('templates.student.header')

<link rel="stylesheet" href="{{ asset('css/weekCalendar.css') }}">

<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Profile</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                        <li class="breadcrumb-item active">Profile</li>
                    </ol>
                </div>
            </div>
            @include('admin.templates.alerts')
        </div>
    </section>
    
    <section class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header bg-gradient-info">
                    <h3 class="card-title">Calendar</h3>
                    
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body p-0">

                    Profile

                </div>
            </div>
        </div>
    </section>
</div>

@include('admin.modals.teacher_lessons')
@include('templates.footer')

<script src="{{ asset('js/student/profile.js') }}"></script>

@include('templates.footer-end')

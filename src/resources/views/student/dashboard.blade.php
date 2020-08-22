@include('templates.student.header')

<link rel="stylesheet" href="{{ asset('css/weekCalendar.css') }}">

<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Schedule Calendar</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('student.dashboard') }}">Dashboard</a></li>
                        <li class="breadcrumb-item active">Schedule Calendar</li>
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
                    <h3 class="card-title">My Calendar</h3>
                    
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body p-0">

                    <h3 class="float-left week-range-text">Week Range: <b>{{ $weeklyData['week_range'] }}</b></h3>

                    <nav aria-label="Schedule Navigation Panel">
                        <ul class="pagination float-right pagination-schedule">
                            <li class="page-item"><a class="page-link" href="{{ route ('student.search_date', ['date' => $weeklyData['prev_week_range']]) }}">Previous</a></li>
                            <li class="page-item"><a class="page-link" href="{{ route ('student.dashboard') }}">Now</a></li>
                            <li class="page-item"><a class="page-link" href="{{ route ('student.search_date', ['date' => $weeklyData['next_week_range']]) }}">Next</a></li>
                        </ul>
                    </nav>

                    <table class="table-teacher-schedule">
                        <thead>
                            <tr>
                                <th>PH Time</th>
                                @foreach ($weeklyData['week'] as $week)
                                    <th>
                                        <span class="day">{{ $week->date }}</span>
                                        <span class="long">{{ $week->day }}</span>
                                        <span class="short">{{ $week->day_abbr }}</span>
                                    </th>    
                                @endforeach
                                <th>JA Time</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($weeklyData['time'] as $raw_time)
                                <tr>
                                    <td class="hour">
                                        <span>
                                            {{ $raw_time['time'] }}
                                        </span>
                                    </td>
                                    @foreach ($weeklyData['week_dates'] as $each_date)
                                        @if (array_key_exists($each_date->format('Y-m-d'), $raw_time))
                                            <td class="td-schedule" id="" data-date="{{ $each_date->format('Y-m-d') }}" data-time="{{ $raw_time['time'] }}">
                                                @foreach ($raw_time[$each_date->format('Y-m-d')]->data as $data)
                                                    @if (isset($data->units))
                                                        <span onclick="lessonTrigger(this.id)" id="{{ $data->id }}" class="badge-calendar badge badge-pill badge-info lessonTrigger">{{ $data->user->name }}</span>
                                                    @else
                                                        <span onclick="scheduleTrigger(this.id)" id="{{ $data->id }}" class="badge-calendar badge badge-pill badge-warning scheduleTrigger">{{ $data->user->name }}</span>
                                                    @endif
                                                @endforeach
                                            </td>
                                        @else
                                            <td onclick="" id="" data-date="{{ $each_date->format('Y-m-d') }}" data-time="{{ $raw_time['time'] }}" title="{{ $each_date->format('Y-m-d')." ".$raw_time['time']  }}"></td>
                                        @endif
                                    @endforeach
                                    <td class="hour">
                                        <span>
                                            @php
                                                echo App\Helpers\Constant::JA_TIME[$raw_time['time']];
                                            @endphp
                                        </span>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    <nav aria-label="Schedule Navigation Panel">
                        <ul class="pagination float-right pagination-schedule">
                            <li class="page-item"><a class="page-link" href="{{ route ('student.search_date', ['date' => $weeklyData['prev_week_range']]) }}">Previous</a></li>
                            <li class="page-item"><a class="page-link" href="{{ route ('student.dashboard') }}">Now</a></li>
                            <li class="page-item"><a class="page-link" href="{{ route ('student.search_date', ['date' => $weeklyData['next_week_range']]) }}">Next</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </section>
</div>

@include('admin.modals.teacher_lessons')
@include('templates.footer')

<script src="{{ asset('js/student/dashboard.js') }}"></script>

@include('templates.footer-end')
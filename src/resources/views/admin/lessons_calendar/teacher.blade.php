@include('templates.header')

<link rel="stylesheet" href="{{ asset('css/weekCalendar.css') }}">

<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Teacher Lessons Calendar</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                        <li class="breadcrumb-item active">Teacher Lessons Calendar</li>
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
                    <table>
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
                                            <td id="" data-date="{{ $each_date->format('Y-m-d') }}" data-time="{{ $raw_time['time'] }}">
                                                {{ $each_date->format('Y-m-d') }}
                                            </td>
                                        @else
                                            <td id="" data-date="{{ $each_date->format('Y-m-d') }}" data-time="{{ $raw_time['time'] }}"></td>
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
                </div>
            </div>
        </div>
    </section>
</div>

@include('templates.footer')

<script src="{{ asset('js/admin/lessonsTeacher.js') }}"></script>

@include('templates.footer-end')

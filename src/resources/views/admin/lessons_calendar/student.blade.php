@include('templates.header')

<link rel="stylesheet" href="{{ asset('css/weekCalendar.css') }}">

<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Student Lessons Calendar</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                        <li class="breadcrumb-item active">Student Lessons Calendar</li>
                    </ol>
                </div>
            </div>
            @include('admin.templates.alerts')
        </div>
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header bg-gradient-success">
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
                                <th>
                                    <span class="day">1</span>
                                    <span class="long">Monday</span>
                                    <span class="short">Mon</span>
                                </th>
                                <th>
                                    <span class="day active">2</span>
                                    <span class="long">Tuesday</span>
                                    <span class="short">Tue</span>
                                </th>
                                <th>
                                    <span class="day">3</span>
                                    <span class="long">Wednesday</span>
                                    <span class="short">Wed</span>
                                </th>
                                <th>
                                    <span class="day">4</span>
                                    <span class="long">Thursday</span>
                                    <span class="short">Thurs</span>
                                </th>
                                <th>
                                    <span class="day">5</span>
                                    <span class="long">Friday</span>
                                    <span class="short">Fri</span>
                                </th>
                                <th>
                                    <span class="day">6</span>
                                    <span class="long">Saturday</span>
                                    <span class="short">Sat</span>
                                </th>
                                <th>
                                    <span class="day">7</span>
                                    <span class="long">Sunday</span>
                                    <span class="short">Sun</span>
                                </th>
                                <th>JA Time</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="hour" rowspan="2"><span>08:00</span></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td class="hour" rowspan="2"><span>09:00</span></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="hour" rowspan="2"><span>09:00</span></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td class="hour" rowspan="2"><span>10:00</span></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>

                            <tr>
                                <td class="hour" rowspan="2"><span>10:00</span></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td class="hour" rowspan="2"><span>11:00</span></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="hour" rowspan="2"><span>11:00</span></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td class="hour" rowspan="2"><span>12:00</span></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="hour" rowspan="2"><span>12:00</span></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td class="hour" rowspan="2"><span>01:00</span></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="hour" rowspan="2"><span>01:00</span></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td class="hour" rowspan="2"><span>02:00</span></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="hour" rowspan="2"><span>02:00</span></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td class="hour" rowspan="2"><span>03:00</span></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="hour" rowspan="2"><span>03:00</span></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td class="hour" rowspan="2"><span>04:00</span></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="hour" rowspan="2"><span>04:00</span></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td class="hour" rowspan="2"><span>05:00</span></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="hour" rowspan="2"><span>05:00</span></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td class="hour" rowspan="2"><span>06:00</span></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="hour" rowspan="2"><span>06:00</span></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td class="hour" rowspan="2"><span>07:00</span></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
</div>

@include('templates.footer')

<script src="{{ asset('js/admin/lessonsStudent.js') }}"></script>

@include('templates.footer-end')

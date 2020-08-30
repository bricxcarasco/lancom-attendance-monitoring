<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="{{ route('admin.dashboard') }}" class="brand-link">
        <img src="{{ asset('dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
            style="opacity: .8">
        <span class="brand-text font-weight-light">Lancon AMS</span>
    </a>

    <div class="sidebar">

        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset('dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="{{ route('admin.dashboard') }}" class="d-block">{{ Auth::user()->name }}</a>
            </div>
        </div>


        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

                <li class="nav-item has-treeview menu-open">
                    <a href="{{ route('admin.dashboard') }}" class="nav-link {{ (request()->is('admin')) ? 'active' : null }}">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                <li class="nav-item has-treeview {{ Request::segment(2) === 'lessons_calendar' ? 'menu-open' : null }}">
                    <a href="#" class="nav-link {{ Request::segment(2) === 'lessons_calendar' ? 'active' : null }}">
                        <i class="nav-icon fas fa-copy"></i>
                        <p>
                            Lessons Calendar
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('admin.lessons_calendar.teacher.index') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Instructor Calendar</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.lessons_calendar.student.index') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Student Calendar</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item has-treeview {{ Request::segment(2) === 'users' ? 'menu-open' : null }}">
                    <a href="#" class="nav-link {{ Request::segment(2) === 'users' ? 'active' : null }}">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                            Users Management
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('admin.users.administrator.index') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Administrator</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.users.teacher.index') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Instructor</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.users.student.index') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Student</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item has-treeview">
                    <a href="{{ route('admin.salary.index') }}" class="nav-link {{ Request::segment(2) === 'salary' ? 'active' : null }}">
                        <i class="nav-icon fas fa-money-check-alt"></i>
                        <p>
                            Salary Management
                        </p>
                    </a>
                </li>
                <li class="nav-item has-treeview">
                    <a href="{{ route('admin.profile') }}" class="nav-link {{ Request::segment(2) === 'profile' ? 'active' : null }}">
                        <i class="nav-icon fas fa-user-circle"></i>
                        <p>
                            Profile
                        </p>
                    </a>
                </li>
                <li class="nav-item has-treeview">
                    <form id="logout-user-form" action="{{ route('logout.auth') }}" method="POST">
                        @csrf
                        <a class="nav-link logout-user-link">
                            <i class="nav-icon fas fa-sign-out-alt"></i>
                            <p>
                                Logout
                            </p>
                        </a>
                    </form>
                </li>
            </ul>
        </nav>

    </div>
</aside>

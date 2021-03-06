<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="{{ route('teacher.dashboard') }}" class="brand-link">
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
                <a href="{{ route('teacher.dashboard') }}" class="d-block">{{ Auth::user()->name }}</a>
            </div>
        </div>


        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

                <li class="nav-item has-treeview menu-open">
                    <a href="{{ route('teacher.dashboard') }}" class="nav-link {{ (request()->is('teacher')) ? 'active' : null }}">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>

                <li class="nav-item has-treeview">
                    <a href="{{ route('teacher.profile') }}" class="nav-link {{ Request::segment(2) === 'profile' ? 'active' : null }}">
                        <i class="nav-icon fas fa-user-circle"></i>
                        <p>
                            Profile
                        </p>
                    </a>
                </li>

                <li class="nav-item has-treeview">
                    <a href="{{ route('teacher.salary') }}" class="nav-link {{ Request::segment(2) === 'salary' ? 'active' : null }}">
                        <i class="nav-icon fas fa-money-check-alt"></i>
                        <p>
                            Salary
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

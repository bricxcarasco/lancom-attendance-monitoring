@include('templates.header')

<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>LANCOM Attendance Monitoring System</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Login</h3>
                        </div>
                        
                        <form role="form" action="{{ route('login') }}" method="POST">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="email">Email address</label>
                                    <input type="email" class="form-control" id="email"
                                        placeholder="Enter email">
                                </div>
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="password" class="form-control" id="password" placeholder="Password">
                                </div>
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="remember-me">
                                    <label class="form-check-label" for="remember-me">Remember me</label>
                                </div>
                            </div>

                            <div class="card-footer float-right">
                                <button type="submit" id="login" class="btn btn-primary">Login</button>
                            </div>
                        </form>
                    </div>

                </div>
                <div class="col-md-6">

                </div>
            </div>
        </div>
    </section>
</div>

@include('templates.footer')

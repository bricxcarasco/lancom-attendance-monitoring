@include('templates.student.header')

<link rel="stylesheet" href="{{ asset('css/weekCalendar.css') }}">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Profile</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('student.dashboard') }}">Dashboard</a></li>
                        <li class="breadcrumb-item active">Profile</li>
                    </ol>
                </div>
            </div>
            @include('admin.templates.alerts')
        </div>
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4">

                    <div class="card card-primary card-outline">
                        <div class="card-body box-profile">
                            <div class="text-center">
                                <img class="profile-user-img img-fluid img-circle" src="{{ asset('images').'/'.$user->image }}" alt="User profile picture">
                            </div>

                            <h3 class="profile-username text-center">{{ $user->name }}</h3>

                            <p class="text-muted text-center">{{ $user->bio }}</p>

                            <ul class="list-group list-group-unbordered mb-3">
                                <li class="list-group-item">
                                    <b>Gender</b> <a class="float-right">{{ $user->gender_text }}</a>
                                </li>
                                <li class="list-group-item">
                                    <b>Birthdate</b> <a class="float-right">{{ $user->birthdate_text }}</a>
                                </li>
                                <li class="list-group-item">
                                    <b>Email Address</b> <a class="float-right">{{ $user->email }}</a>
                                </li>
                                <li class="list-group-item">
                                    <b>Account Age</b> <a class="float-right">{{ $user->account_age }}</a>
                                </li>
                            </ul>

                            <a href="#personal_info" id="edit" data-toggle="tab" class="btn btn-warning btn-block"><b>Edit</b></a>
                        </div>
                    </div>
                    
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">About Me</h3>
                        </div>
                        
                        <div class="card-body">
                            <strong><i class="fas fa-book mr-1"></i> Education</strong>
                            <p class="text-muted">
                                {{ $user->education }}
                            </p>
                            <hr>

                            <strong><i class="fas fa-map-marker-alt mr-1"></i> Location</strong>
                            <p class="text-muted">
                                {{ $user->address }}
                            </p>
                            <hr>

                            <strong><i class="fas fa-pencil-alt mr-1"></i> Skills</strong>
                            <p class="text-muted">
                                {{ $user->skills }}
                            </p>
                            <hr>

                            <strong><i class="far fa-file-alt mr-1"></i> Notes</strong>
                            <p class="text-muted">
                                {{ $user->notes }}
                            </p>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header p-2">
                            <ul class="nav nav-pills">
                                <li class="nav-item">
                                    <a class="nav-link active" href="#activity" id="a-activity" data-toggle="tab">Activity</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#personal_info" id="a-personal-info" data-toggle="tab">Personal Information</a>
                                </li>
                            </ul>
                        </div>
                        <div class="card-body">
                            <div class="tab-content">
                                <div class="active tab-pane" id="activity">
                                    
                                    <div class="timeline timeline-inverse">
                                        
                                        <div class="time-label">
                                            <span class="bg-danger">
                                                10 Feb. 2014
                                            </span>
                                        </div>
                                        
                                        <div>
                                            <i class="fas fa-envelope bg-primary"></i>

                                            <div class="timeline-item">
                                                <span class="time"><i class="far fa-clock"></i> 12:05</span>

                                                <h3 class="timeline-header"><a href="#">Support Team</a> sent you an
                                                    email</h3>

                                                <div class="timeline-body">
                                                    Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles,
                                                    weebly ning heekya handango imeem plugg dopplr jibjab, movity
                                                    jajah plickers sifteo edmodo ifttt zimbra. Babblely odeo kaboodle
                                                    quora plaxo ideeli hulu weebly balihoo...
                                                </div>
                                                <div class="timeline-footer">
                                                    <a href="#" class="btn btn-primary btn-sm">Read more</a>
                                                    <a href="#" class="btn btn-danger btn-sm">Delete</a>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div>
                                            <i class="fas fa-user bg-info"></i>

                                            <div class="timeline-item">
                                                <span class="time"><i class="far fa-clock"></i> 5 mins ago</span>

                                                <h3 class="timeline-header border-0"><a href="#">Sarah Young</a>
                                                    accepted your friend request
                                                </h3>
                                            </div>
                                        </div>
                                        
                                        <div>
                                            <i class="fas fa-comments bg-warning"></i>

                                            <div class="timeline-item">
                                                <span class="time"><i class="far fa-clock"></i> 27 mins ago</span>

                                                <h3 class="timeline-header"><a href="#">Jay White</a> commented on your
                                                    post</h3>

                                                <div class="timeline-body">
                                                    Take me to your leader!
                                                    Switzerland is small and neutral!
                                                    We are more like Germany, ambitious and misunderstood!
                                                </div>
                                                <div class="timeline-footer">
                                                    <a href="#" class="btn btn-warning btn-flat btn-sm">View comment</a>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="time-label">
                                            <span class="bg-success">
                                                3 Jan. 2014
                                            </span>
                                        </div>
                                        
                                        <div>
                                            <i class="fas fa-camera bg-purple"></i>

                                            <div class="timeline-item">
                                                <span class="time"><i class="far fa-clock"></i> 2 days ago</span>

                                                <h3 class="timeline-header"><a href="#">Mina Lee</a> uploaded new photos
                                                </h3>

                                                <div class="timeline-body">
                                                    <img src="http://placehold.it/150x100" alt="...">
                                                    <img src="http://placehold.it/150x100" alt="...">
                                                    <img src="http://placehold.it/150x100" alt="...">
                                                    <img src="http://placehold.it/150x100" alt="...">
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div>
                                            <i class="far fa-clock bg-gray"></i>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="tab-pane" id="personal_info">
                                    <form class="form-horizontal" method="POST" action="{{ route('profile.update') }}" enctype="multipart/form-data">
                                        @csrf
                                        <input type="hidden" name="id" value="{{ $user->id }}">
                                        <div class="form-group row">
                                            <label for="inputName" class="col-sm-2 col-form-label">Name</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" value="{{ $user->name }}" id="name" name="name" placeholder="Name">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                                            <div class="col-sm-10">
                                                <input type="email" class="form-control" value="{{ $user->email }}" id="email" name="email" placeholder="Email">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputName2" class="col-sm-2 col-form-label">Birthdate</label>
                                            <div class="col-sm-10">
                                                <input type="date" class="form-control" value="{{ $user->birthdate }}" id="birthdate" name="birthdate" placeholder="Birthdate">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputExperience"
                                                class="col-sm-2 col-form-label">Gender</label>
                                            <div class="col-sm-10">
                                                <select name="gender" id="gender" class="form-control">
                                                    <option value="1">Male</option>
                                                    <option value="2">Female</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputName2" class="col-sm-2 col-form-label">Contact</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" value="{{ $user->contact }}" id="contact" name="contact" placeholder="Contact">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputName2" class="col-sm-2 col-form-label">Address</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" value="{{ $user->address }}" id="address" name="address" placeholder="Address">
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="form-group row">
                                            <label for="inputSkills" class="col-sm-2 col-form-label">Profile Image</label>
                                            <div class="col-sm-10">
                                                <input type="file" id="image_upload" name="image_upload">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputSkills" class="col-sm-2 col-form-label">Bio</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" value="{{ $user->bio }}" id="bio" name="bio" placeholder="Skills">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputSkills" class="col-sm-2 col-form-label">Education</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" value="{{ $user->education }}" id="education" name="education" placeholder="Bio">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputSkills" class="col-sm-2 col-form-label">Skills</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" value="{{ $user->skills }}" id="skills" name="skills" placeholder="Skills">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputSkills" class="col-sm-2 col-form-label">Notes</label>
                                            <div class="col-sm-10">
                                                <textarea name="notes" id="notes" cols="30" rows="5" class="form-control">{{ $user->notes }}</textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="offset-sm-2 col-sm-10">
                                                <button type="submit" class="btn btn-info">Update</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>            
                            </div>
                        </div>
                    </div>
                    
                </div>
                
            </div>
            
        </div>
    </section>
</div>

@include('admin.modals.teacher_lessons')
@include('templates.footer')

<script type="text/javascript">
    let user = {!! json_encode($user->toArray()) !!};
    document.getElementById('gender').value = user.gender;
</script>
<script src="{{ asset('js/student/profile.js') }}"></script>


@include('templates.footer-end')

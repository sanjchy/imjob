<div class="col-lg-4 col-md-4 col-sm-12">
    <div class="profile-card-4 z-depth-3 shadow">
        <div class="card">
            <div class="card-body text-center bg-light rounded-top">
                <div class="user-box">
                    <img src="@if ($user->image)
                    @else
                    {{ asset('storage/user/default/user.png') }}
                    @endif" alt="user avatar">
                </div>
                <h4 class="mb-1 text-dark">{{ $user->name }}</h4>
                <h6 class="text-dark">{{ ucwords($user->role) }}</h6>
            </div>
            <div class="card-body">
                <ul class="list-group shadow-none">
                    <li class="list-group-item">
                        <div class="list-icon">
                            <i class="fa fa-phone-square"></i>
                        </div>
                        <div class="list-details">
                            @if ($user->phone)
                            <span>{{ $user->phone }}</span>
                            @else
                            <span class="text-muted">Not Available</span>
                            @endif
                            <small>Mobile Number</small>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="list-icon">
                            <i class="fa fa-envelope"></i>
                        </div>
                        <div class="list-details">
                            <span>{{ $user->email }}</span>
                            <small>Email Address</small>
                        </div>
                    </li>
                </ul>
                <div class="row text-center mt-4">
                    <div class="col p-2">
                        <h4 class="mb-1 line-height-5">{{ $user->companies->count() ?? 'N/A'}}</h4>
                        <small class="mb-0 font-weight-bold">Companies</small>
                    </div>
                    <div class="col p-2">
                        <h4 class="mb-1 line-height-5">{{ $user->jobs->count() ?? 'N/A'}}</h4>
                        <small class="mb-0 font-weight-bold">Jobs</small>
                    </div>
                    <div class="col p-2">
                        <h4 class="mb-1 line-height-5">{{ $user->candidates->count() ?? 'N/A'}}</h4>
                        <small class="mb-0 font-weight-bold">Candidates</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

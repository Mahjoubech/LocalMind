<div class="mt-3">
    <div class="card">
        <div class="px-3 pt-4 pb-2">
            <div class="d-flex align-items-center justify-content-between">
                <div class="d-flex align-items-center">

                    <img style="width:150px" class="me-3 avatar-sm rounded-circle"
                        src="{{$user->getImage()}}" alt="profile image">
                    <div>

                        <h3 class="card-title mb-0"><a href="{{route('profile')}}"> {{$user->name}}
                            </a></h3>
                        <span class="fs-6 text-muted">{{$user->email}}</span><br>
                         <span class="fs-6 text-muted"><i class="bi bi-geo-alt"></i>{{$user->location}}</span>


                    </div>
                </div>

                @auth
                @if (Auth::id() === $user->id)
                <div>
                    <a href="{{route('user.edit',$user->id)}}">Edit</a>
                </div>
                @endif
                @endauth
            </div>
            <div class="px-2 mt-4">
                <h5 class="fs-5"> About : </h5>

                <p class="fs-6 fw-light">
                    {{$user->about}}
                </p>

                <div class="d-flex justify-content-start">
                    <a href="#" class="fw-light nav-link fs-6 me-3"> <span class="fas fa-user me-1">
                        </span> 120 Followers </a>
                    <a href="#" class="fw-light nav-link fs-6 me-3"> <span class="fas fa-brain me-1">
                        </span> {{$user->question()->count()}} </a>
                    <a href="#" class="fw-light nav-link fs-6"> <span class="fas fa-comment me-1">
                    </span> {{$user->reponses()->count()}} </a>

                </div>
                @auth
@if (Auth::id() !== $user->id)
 <div class="mt-3">
    <form method="POST" action="{{route('users.follow',$user->id)}}">
        <button type="submit" class="btn btn-primary btn-sm"> Follow </button>

    </form>
                </div>
@endif
                @endauth

            </div>
        </div>
    </div>
    <hr>
 </div>

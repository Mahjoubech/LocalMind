<nav class="navbar navbar-expand-lg bg-dark border-bottom border-bottom-dark ticky-top bg-body-tertiary"
        data-bs-theme="dark">
        <div class="container">
            <a class="navbar-brand fw-light" href="/"><span class="fas fa-brain me-1"> </span>Sawlni</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    @guest
                      <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/login">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/register">Register</a>
                    </li>
                    @endguest

                    @auth
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle d-flex align-items-center" href="#" id="profileDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="{{Auth::user()->profile_picture}}" alt="Profile Image" class="rounded-circle" width="30" height="30">
                            <span class="ms-2">{{Auth::user()->name}}</span>
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="profileDropdown">
                            <li><a class="dropdown-item" href="/profile">View Profile</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <form action="{{ route('logout') }}" method="POST" class="d-inline">
                                @csrf
                                <li class="nav-item">
                                    <button type="submit" class="dropdown-item bg-transparent d-flex align-items-center">
                                        <i class="bi bi-box-arrow-right me-2"></i> 
                                        Logout
                                    </button>
                                </li>
                            </form>

                        </ul>
                    </li>

                    @endauth

                </ul>
            </div>
        </div>
    </nav>

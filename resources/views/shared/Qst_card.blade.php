<div class="card mb-3 shadow-sm">
    <!-- Card Header -->
    <div class="card-header d-flex justify-content-between align-items-center bg-white border-0">
      <div class="d-flex align-items-center">
        <img src="{{ $qs->user->getImage() }}" alt="Profile Image" class="rounded-circle me-2" style="width:50px;">
        <h5 class="mb-0">
          <a href="{{ route('profile.show', $qs->user->id) }}" class="text-decoration-none text-dark">
            {{ $qs->user->name }}
          </a>
        </h5>
      </div>
      <div class="d-flex align-items-center">
        <a href="{{ route('Question.show', $qs->id) }}" class="btn btn-outline-secondary btn-sm mx-2">View</a>
        @auth
          @if(Auth::user()->favorites->contains($qs->id))
            <!-- Form to remove from favorites -->
            <form action="{{ route('favorites.destroy', $qs->id) }}" method="POST" class="d-inline">
              @csrf
              @method('delete')
              <button type="submit" class="btn btn-warning btn-sm" title="Remove from favorites">
                <i class="fas fa-bookmark"></i> Saved
              </button>
            </form>
          @else
            <!-- Form to add to favorites -->
            <form action="{{ route('favorites.store') }}" method="POST" class="d-inline">
              @csrf
              <input type="hidden" name="question_id" value="{{ $qs->id }}">
              <button type="submit" class="btn btn-outline-dark btn-sm" title="Save to favorites">
                <i class="far fa-bookmark"></i> Save
              </button>
            </form>
          @endif
        @endauth
     </div>
    </div>

    <!-- Card Body -->
    <div class="card-body">
      @if ($editing ?? false)
        <form action="{{ route('Question.update', $qs->id) }}" method="POST">
          @csrf
          @method('put')
          <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" name="title" class="form-control" value="{{ $qs->title }}">
          </div>
          @error('title')
            <span class="fs-10 text-danger">{{ $message }}</span>
          @enderror
          <div class="mb-3">
            <textarea name="content" class="form-control" id="idea" rows="3">{{ $qs->content }}</textarea>
            @error('content')
              <span class="fs-10 text-danger">{{ $message }}</span>
            @enderror
          </div>
          <div>
            <button type="submit" class="btn btn-dark btn-sm mb-2">Update</button>
          </div>
        </form>
      @else
        <h3 class="fs-6 fw-light text-muted">{{ $qs['title'] }}</h3>
        <p class="fs-6 fw-light text-muted">{{ $qs['content'] }}</p>
        <div class="d-flex justify-content-between mt-3">
          <div>
            <span class="fas fa-heart me-1"></span> {{ $qs->like }}
          </div>
          <div>
            <span class="fas fa-clock me-1"></span>
            <span class="fs-6 fw-light text-muted">{{ $qs->created_at }}</span>
          </div>
        </div>
      @endif
      @auth
        @include('shared.reponse')
      @endauth
    </div>
  </div>


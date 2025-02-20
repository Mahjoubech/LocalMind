<div class="card">
    <div class="px-3 pt-4 pb-2">
        <div class="d-flex align-items-center justify-content-between">
            <div class="d-flex align-items-center">
                <img style="width:50px" class="me-2 avatar-sm rounded-circle"
                    src="https://api.dicebear.com/6.x/fun-emoji/svg?seed=Mario" alt="Mario Avatar">
                <div>
                    <h5 class="card-title mb-0"><a href="#"> Mario
                        </a></h5>
                </div>
            </div>
            <div class="d-flex">
            <form method="POST" action="{{route('Question.delete',$qs->id)}}">
                @csrf
                @method('delete')
                <a class="mx-2" href="{{route('Question.edit',$qs->id)}}">Edit</a>
                <button class="btn btn-danger btn-sm">X</button>
                <a class="mx-2" href="{{route('Question.show',$qs->id)}}">View</a>
            </form>

            </div>

        </div>
    </div>



    <div class="card-body">
        @if ($editing ?? false)
        @csrf
        @method('put')
        <form action="{{route('Question.update',$qs->id)}}" method="post">
            @csrf
            @method('put')
            <div class="mb-3">
                <label for="title">Title</label>
                <input type="text" name="title" class="form-control" value="{{$qs->title}}">
            </div>
            @error('title')
             <span class="fs-10 text-danger">{{$message}}</span>
            @enderror
             <div class="mb-3">
            <textarea name="content" class="form-control" id="idea" rows="3">{{$qs->content}}</textarea>
            @error('content')
            <span class="fs-10 text-danger">{{$message}}</span>
           @enderror
        </div>
        {{-- <div class="">
            <label for="location">location</label>
            <select name="location" id="">
                <option value="chichoua">chichoua</option>
            </select>
        </div> --}}
        <div class="">
            <button class="btn btn-dark mb-2 btn-sm"> update </button>
        </div>
    </form>
        @else
        <h3 class="fs-6 fw-light text-muted">{{$qs['title']}}</h3>
        <p class="fs-6 fw-light text-muted">
           {{ $qs['content']}}
        </p>
        <div class="d-flex justify-content-between">
            <div>
                <a href="#" class="fw-light nav-link fs-6"> <span class="fas fa-heart me-1">
                    </span> {{$qs ->like}} </a>
            </div>
            <div>
                <span class="fs-6 fw-light text-muted"> <span class="fas fa-clock"> </span>
                    {{$qs -> created_at}} </span>
            </div>
        </div>
        <div>
            <div class="mb-3">
                <textarea class="fs-6 form-control" rows="1"></textarea>
            </div>
            <div>
                <button class="btn btn-primary btn-sm"> Post Comment </button>
            </div>


        @endif
        <hr>
        <div class="d-flex align-items-start">
            <img style="width:35px" class="me-2 avatar-sm rounded-circle"
                src="https://api.dicebear.com/6.x/fun-emoji/svg?seed=Luigi"
                alt="Luigi Avatar">
            <div class="w-100">
                <div class="d-flex justify-content-between">
                    <h6 class="">Luigi
                    </h6>
                    <small class="fs-6 fw-light text-muted"> 3 hour
                        ago</small>
                </div>
                <p class="fs-6 mt-3 fw-light">
                    hhhhhhhhhh
                </p>
            </div>
        </div>
    </div>
    </div>

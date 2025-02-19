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
                <button class="btn btn-danger btn-sm">X</button>
            </form>
            <form method="GET" action="{{route('Question.showX',$qs->id)}}">
                @csrf
                <input type="hidden" value="{{$qs->id}}" name="qs">
            <button type="submit">View</button>
        </form>
            </div>

        </div>
    </div>



    <div class="card-body">
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

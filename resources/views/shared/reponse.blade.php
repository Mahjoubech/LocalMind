<div>
    <form action="{{ route('Question.reponsestore',  $qs->id)}}" method="POST">
        <div class="mb-3">
        @csrf
        <textarea name="content" class="fs-6 form-control" rows="1"></textarea>
    </div>
    <div>
        <button class="btn btn-primary btn-sm"> Post Reponse </button>
    </div>
</form>
@foreach ( $qs->responses as $response )
<hr>
<div class="d-flex align-items-start">
    <img style="width:35px" class="me-2 avatar-sm rounded-circle"
        src="https://api.dicebear.com/6.x/fun-emoji/svg?seed=Luigi"
        alt="Luigi Avatar">
    <div class="w-100">
        <div class="d-flex justify-content-between">
            <h6 class="">Luigi
            </h6>
            <small class="fs-6 fw-light text-muted"> {{$response->created_at}}</small>
        </div>
        <p class="fs-6 mt-3 fw-light">
            {{$response->content}}
        </p>
        <div class="d-flex justify-content-between">
        <div>
            <a href="#" class="fw-light nav-link fs-6"> <span class="fas fa-heart me-1">
                </span> {{$response->like}} </a>
        </div>
       </div>
    </div>

</div>
@endforeach

</div>

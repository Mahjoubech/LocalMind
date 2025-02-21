@auth()
<h4> Share yours Questions </h4>
<div class="row">

    <form action="{{route('Question.create')}}" method="post">
        @csrf
        <div class="mb-3">
            <label for="title">Title</label>
            <input type="text" name="title" class="form-control">
        </div>
        @error('title')
         <span class="fs-10 text-danger">{{$message}}</span>
        @enderror
         <div class="mb-3">
        <textarea name="content" class="form-control" id="idea" rows="3"></textarea>
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
        <button class="btn btn-dark"> Share </button>
    </div>
</form>

</div>
@endauth
@guest
    <h4>Login for share Your Questions</h4>
@endguest


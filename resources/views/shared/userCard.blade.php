<div class="mt-3">
    <div class="card">
        <div class="px-3 pt-4 pb-2">
            <div class="d-flex align-items-center justify-content-between">
                <div class="d-flex align-items-center">

                    <img style="width:150px" class="me-3 avatar-sm rounded-circle"
                        src="https://api.dicebear.com/6.x/fun-emoji/svg?seed=Mario" alt="Mario Avatar">
                    <div>
                        @if($editing ?? false)
<input name="name" value="{{$user->name}}" type="text" class="form-control">

                        @error('name')
                <span class="fs-10 text-danger">{{$message}}</span>

                        @enderror
<input name="email" value="{{$user->email}}" type="email" class="form-control">

@error('email')
<span class="fs-10 text-danger">{{$message}}</span>

@enderror
                          <select name="location" id="location">
                            <option value="Casablanca">Casablanca</option>
                            <option value="Rabat">Rabat</option>
                            <option value="Marrakech">Marrakech</option>
                            <option value="Fès">Fès</option>
                            <option value="Tanger">Tanger</option>
                            <option value="Agadir">Agadir</option>
                            <option value="Meknès">Meknès</option>
                            <option value="Oujda">Oujda</option>
                            <option value="Kenitra">Kenitra</option>
                            <option value="Tétouan">Tétouan</option>
                            <option value="Safi">Safi</option>
                            <option value="El Jadida">El Jadida</option>
                            <option value="Béni Mellal">Béni Mellal</option>
                            <option value="Nador">Nador</option>
                            <option value="Taza">Taza</option>
                            <option value="Khouribga">Khouribga</option>
                            <option value="Settat">Settat</option>
                            <option value="Larache">Larache</option>
                            <option value="Khemisset">Khemisset</option>
                            <option value="Mohammedia">Mohammedia</option>
                            <option value="Berkane">Berkane</option>
                            <option value="Errachidia">Errachidia</option>
                            <option value="Guelmim">Guelmim</option>
                            <option value="Ouarzazate">Ouarzazate</option>
                            <option value="Laâyoune">Laâyoune</option>
                            <option value="Dakhla">Dakhla</option>
                            <option value="Tan-Tan">Tan-Tan</option>
                            <option value="Azilal">Azilal</option>
                            <option value="Tiznit">Tiznit</option>
                            <option value="Al Hoceïma">Al Hoceïma</option>
                            <option value="Ifrane">Ifrane</option>
                            <option value="Sidi Ifni">Sidi Ifni</option>
                            <option value="Taourirt">Taourirt</option>
                            <option value="Essaouira">Essaouira</option>
                            <option value="Chefchaouen">Chefchaouen</option>
                            <option value="Boujdour">Boujdour</option>

                          </select>
                        @else
                        <h3 class="card-title mb-0"><a href="#"> {{$user->name}}
                            </a></h3>
                        <span class="fs-6 text-muted">{{$user->email}}</span><br>
                         <span class="fs-6 text-muted"><i class="bi bi-geo-alt"></i>{{$user->location}}</span>

                        @endif
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
                @if($editing ?? false)
                <textarea name="about" type="text"  class="form-control">{{$user->about}}</textarea>
                @error('about')
                <span class="fs-10 text-danger">{{$message}}</span>
                @enderror
<button class="btn btn-dark btn-sm mt-3 mb-3">Save</button>

                @else
                <p class="fs-6 fw-light">
                    This book is a treatise on the theory of ethics, very popular during the
                    Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes
                    from a line in section 1.10.32.
                </p>
                @endif
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
                    <button class="btn btn-primary btn-sm"> Follow </button>
                </div>
@endif
                @endauth

            </div>
        </div>
    </div>
    <hr>
 </div>

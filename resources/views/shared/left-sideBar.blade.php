<div class="card overflow-hidden">
    <div class="card-body pt-3">
        <ul class="nav nav-link-secondary flex-column fw-bold gap-2">
            <li class="nav-item">
                <a class="nav-link text-dark {{(Route::is('qstHome')) ? 'text-white rounded bg-primary ' : ''}}" href="{{route('qstHome')}}">
                    <span>Home</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link taxt-dark {{(Route::is('chat.index')) ? 'text-white bg-primary rounded' : ''}}" href="{{route('chat.index')}}" href="#">
                    <span>Chat</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link taxt-dark {{(Route::is('favorites.index')) ? 'text-white bg-primary rounded' : ''}}" href="{{route('favorites.index')}}">
                    <span>Favorite</span></a>
            </li>
        </ul>
    </div>
    <div class="card-footer text-center py-2">
        <a class="btn btn-link btn-sm" href="{{route('profile')}}">View Profile </a>
    </div>
</div>

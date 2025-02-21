
@extends('layouts.layout')
@section('content')
    <div class="container py-4">
        <div class="row">
            <div class="col-3">
                @include('shared.left-sideBar')
            </div>
            @yield('contents')

        </div>

  

</div>

    </div>

  @endsection


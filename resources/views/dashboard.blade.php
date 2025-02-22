
@extends('layouts.layout')
@section('content')
<div class="container py-4">
        <div class="row">
            <div class="col-3">
                @include('shared.left-sideBar')
            </div>
            <div class="col-6">

            @yield('contentsl')
            </div>
            <div class="col-3">
                @include('shared.search-box')

                @include('shared.follow-box')
            </div>
        </div>



</div>

</div>
  @endsection


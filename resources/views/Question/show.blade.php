@extends('dashboard')
@section('contentsl')
<div class="row">
              @include('shared.success_mssg')
                <hr>
                <div class="mt-3">
                    @include('shared.qst_card')
                 </div>
                 @yield('content')



 </div>


 @endsection


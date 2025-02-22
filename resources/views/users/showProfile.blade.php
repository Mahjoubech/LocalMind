@extends('dashboard')
@section('contentsl')
<div class="row">
              @include('shared.success_mssg')
                <hr>
                @include('shared.userCard')
                 @yield('content')
                <hr>
                @forelse (  $qstuser as $qs)
                <div class="mt-3">
                    @include('shared.qst_card')
                </div>
                  @empty
                  <h3 class="text-center mt-8">No Result Found</h3>
                    @endforelse
                    {{$qstuser->links()}}
 </div>


 @endsection

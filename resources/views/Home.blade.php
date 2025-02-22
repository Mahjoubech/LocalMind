@extends('dashboard')
@section('contentsl')
              @include('shared.success_mssg')
              @include('shared.sub_qst')

                @forelse (  $qst as $qs)
                <hr>

                <div class="mt-3">
                    @include('shared.qst_card')
                </div>
                  @empty
                  <h3 class="text-center mt-8">No Result Found</h3>
                    @endforelse

        {{$qst->withQueryString()->links()}}
        @yield('content')



    @endsection


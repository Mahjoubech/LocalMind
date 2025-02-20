@extends('dashboard')
@section('contents')
<div class="col-6">
              @include('shared.success_mssg')
              @include('shared.sub_qst')

                @foreach (  $qst as $qs)
                <hr>

                <div class="mt-3">
                    @include('shared.qst_card')
              @endforeach
                    </div>

                </div>
            </div>
            </div>
        </div>
        {{$qst->links()}}
        @yield('content')

    </div>

    @endsection


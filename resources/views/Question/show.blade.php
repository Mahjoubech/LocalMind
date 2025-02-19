@extends('dashboard')
@section('contents')
<div class="col-6">
              @include('shared.success_mssg')
                <hr>
                <div class="mt-3">
                    @include('shared.qst_card')

                 </div>

                </div>
            </div>
            </div>
        </div>
        @yield('content')
    </div>

 @endsection


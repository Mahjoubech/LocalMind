@extends('dashboard')
@section('contents')
<!DOCTYPE html>

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
        @yield('content');
    </div>

    @endsection


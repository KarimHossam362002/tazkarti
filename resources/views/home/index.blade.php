@extends('layout')
@section('title', 'Tazkarti | Home')
@section('content')
    <!-- main body -->
    <main>
        <!-- <div class="container"> -->
        <div class="title">
            <h2>{{ __('messages.Home_header') }}</h2>
            <p>{{ __('messages.Home_second_header') }}</p>
        </div>

        <div class="row row-cols-1 row-cols-md-3 g-4 py-5" style="margin-right: 0;">


            <div class="col">

                <div class="card-body">
                    <form action="{{ route('match.home') }}">
                        <div class="mb-5 d-flex justify-content-around">

                            <button type="submit" class="btn btn-primary bg-color-1">
                                <img src="{{ asset('assets/images/stadium.svg') }}" alt>
                                <h2>{{ __('messages.Stadiums') }}</h2>
                                <p>{{ __('messages.Match_Tickets') }}</p>
                            </button>
                        </div>
                    </form>
                </div>

            </div>

            <div class="col">
                <div class="card-body">
                    <form action="{{ route('event.home') }}">
                        <div class="mb-5 d-flex justify-content-around">
                            <button type="submit" class="btn btn-primary bg-color-2">
                                <img src="{{ asset('assets/images/otherEvents.svg') }}" alt>
                                <h2>{{ __('messages.Entertainment') }}</h2>
                                <p>{{ __("messages.Event_Tickets") }}</p>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- </div> -->
    </main>
    <!-- main body -->
@endsection

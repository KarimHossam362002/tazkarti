@extends('layout')
@section('title' , "Tazkarti | Home")
@section('content')
      <!-- main body -->
      <main>
        <!-- <div class="container"> -->
        <div class="title">
          <h2>What is your next plan?</h2>
          <p>Explore and book all exclusive events and matches.</p>
        </div>

        <div class="row row-cols-1 row-cols-md-3 g-4 py-5"
          style="margin-right: 0;">

          <div class="col">

            <div class="card-body">
              <form action="matches.html">
                <div class="mb-5 d-flex justify-content-around">

                  <button type="submit" class="btn btn-primary bg-color-1">
                    <img src="{{ asset('assets/images/stadium.svg') }}" alt>
                    <h2>Sports</h2>
                    <p>Match Tickets</p>
                  </button>
                </div>
              </form>
            </div>

          </div>

          <div class="col">
            <div class="card-body">
              <form action="events/index.html">
                <div class="mb-5 d-flex justify-content-around">
                  <button type="submit" class="btn btn-primary bg-color-2">
                    <img src="{{ asset('assets/images/stadium.svg') }}" alt>
                    <h2>Entertainment</h2>
                    <p>Event Tickets</p>
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

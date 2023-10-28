@extends('main')
@section('title , Tazkarti | Tickets')
@section('content')
@auth

    
<main>
    <div class="container">
        <section>
            <div class="faq">
                <div class="question">
                    <h3>Sports</h3>
                    <svg width="15" height="10"
                        viewBox="0 0 42 25">
                        <path d="M3 3L21 21L39 3"
                            stroke="white"
                            stroke-width="7"
                            stroke-linecap="round" />
                    </svg>

                </div>
                <div class="answer">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Name</th>
                                <th scope="col">Tazkara</th>
                                <th scope="col">Event type</th>
                                <th scope="col">Event Title</th>
                                <th scope="col">Tournament</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">Karim</th>
                                <th>{{ 10399892700077 }}</th>
                                <td>Sports</td>
                                <td>Match</td>
                                <td>TournamentEPL | <span>Pyramdis
                                    </span>vs <span>Zamalek</span></td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
            <div class="faq">
                <div class="question">
                    <h3>Entertainment</h3>
                    <svg width="15" height="10"
                        viewBox="0 0 42 25">
                        <path d="M3 3L21 21L39 3"
                            stroke="white"
                            stroke-width="7"
                            stroke-linecap="round" />
                    </svg>

                </div>
                <div class="answer">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Name</th>
                                <th scope="col">Tazkara</th>
                                <th scope="col">Event type</th>
                                <th scope="col">Event Title</th>
                                <th scope="col">Event</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">Karim
                                    Elsayed</th>
                                <th>10399892700077</th>
                                <td>Entertainment</td>
                                <td>Event</td>
                                <td>NRG Giza</td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>

        </section>
    </div>

</main>


@endauth
@endsection

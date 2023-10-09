@extends('main')
@section('title , Tazkarti | Profile')
@section('content')
<main>

    <div class="container">
        <p class="event_title">Events</p>
        <!-- event container -->

        <div class="events">

            <div class="event_content">
                <img class="event_image"
                    src="{{asset('assets/images/event.jpeg')}}" alt>
                <div><span style="font-size: 12px;">others</span>
                    <a class="event_name" href="#">NEWGIZA
                        Premier Padel P1</a>
                </div>
                <div class="seperate">|</div>
                <div class="top">
                    <div class="top_first">
                        <p>NEWGIZA Sports Club</p>
                        <a style="text-decoration: none;"
                            href="https://www.google.com/maps/place/30%C2%B000'24.3%22N+31%C2%B003'59.9%22E/@30.0067454,31.0666473,17z/data=!3m1!4b1!4m4!3m3!8m2!3d30.0067454!4d31.0666473?entry=ttu">
                            <img class="google_icon_image"
                                src="{{asset('assets/images/googlemap.png')}}"
                                alt>
                            <span
                                class="event_name_location">NEWGIZA
                                Premier Padel P1</span>
                        </a>
                    </div>
                    <div class="top_second">
                        <div class="event_time">Mon 30 Oct
                            2023 </div>
                        <span>-</span>
                        <div class="event_time">Sat 04 Nov
                            2023</div>
                    </div>
                    <p class="event_description">NEWGIZA
                        Sports Club in partnership with CA
                        Sports launched the first Premier
                        Padel Event in Africa in October
                        2022 with the participation of the
                        top 100 world professional players
                        with total cost 550,000€ and prize
                        money 300,000 Euros, making it a
                        landmark moment for the growth of
                        padel in the region. Premier Padel
                        staged</p>
                </div>
                <div class="seperate">|</div>
                <a class="event_details" href="{{ route('event.event') }}">Details</a>
            </div>
        </div>
        <!-- event container -->
        <p class="event_title">Matches</p>

        <!-- match container -->
        <form action="#">
            <div class="match-container">
                <div class="item1">
                    <span>Pyramids Fc</span>
                    <img src="{{asset('assets/images/team.png')}}" alt>
                    <span>vs</span>

                    <img src="{{asset('assets/images/team.png')}}" alt>
                    <span>Pyramids Fc</span>

                </div>
                <div class="item2">
                    <img src="{{asset('assets/images/stadium (1).svg')}}"
                        alt>
                    <span> 30 June Stadium Cairo</span>
                </div>
                <div class="item3">
                    <img src="{{asset('assets/images/calendar.svg')}}"
                        alt>
                    <p>Sun 08 Oct 2023 |
                        <span>Time : 07 : 00 PM</span></p></div>
                <div class="item4">TournamentEPL 2023/2024</div>
                <div class="item5">
                    <button type="submit">Book Ticket</button>
                </div>
            </div>
        </form>
        <!-- match container -->
        <form action="#">
            <div class="match-container">
                <div class="item1">
                    <span>Pyramids Fc</span>
                    <img src="{{asset('assets/images/team.png')}}" alt>
                    <span>vs</span>

                    <img src="{{asset('assets/images/team.png')}}" alt>
                    <span>Pyramids Fc</span>

                </div>
                <div class="item2">
                    <img src="{{asset('assets/images/stadium (1).svg')}}"
                        alt>
                    <span> 30 June Stadium Cairo</span>
                </div>
                <div class="item3">
                    <img src="{{asset('assets/images/calendar.svg')}}"
                        alt>
                    <p>Sun 08 Oct 2023 |
                        <span>Time : 07 : 00 PM</span></p></div>
                <div class="item4">TournamentEPL 2023/2024</div>
                <div class="item5">
                    <button type="submit">Book Ticket</button>
                </div>
            </div>
        </form>
        <!-- match container -->
        <form action="#">
            <div class="match-container">
                <div class="item1">
                    <span>Pyramids Fc</span>
                    <img src="{{asset('assets/images/team.png')}}" alt>
                    <span>vs</span>

                    <img src="{{asset('assets/images/team.png')}}" alt>
                    <span>Pyramids Fc</span>

                </div>
                <div class="item2">
                    <img src="{{asset('assets/images/stadium (1).svg')}}"
                        alt>
                    <span> 30 June Stadium Cairo</span>
                </div>
                <div class="item3">
                    <img src="{{asset('assets/images/calendar.svg')}}"
                        alt>
                    <p>Sun 08 Oct 2023 |
                        <span>Time : 07 : 00 PM</span></p></div>
                <div class="item4">TournamentEPL 2023/2024</div>
                <div class="item5">
                    <button type="submit">Book Ticket</button>
                </div>
            </div>
        </form>
        <!-- match container -->
    </div>
</main>
@endsection

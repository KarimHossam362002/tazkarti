@extends('main')
@section('title , Tazkarti |')
@section('content')


<!-- profile bar -->
<!-- main body -->
<main>

    <div class="container">
        <p class="event_title">Events</p>

        <!-- event container -->
        @foreach ($events as $event )
            
        <div class="events">
            {{-- send event id here --}}
            <form action="{{ route('userTicket.create') }}" method="POST">
                @csrf
            <div class="event_content">
                <img class="event_image"
                    src="{{ asset('assets/images/entertainments/' . $event->image) }}" alt>
                <div><span style="font-size: 12px;">{{ __('messages.others') }}</span>
                    <a class="event_name" href="#">{{$event->name}}</a>
                </div>
                <div class="seperate">|</div>
                <div class="top">
                    <div class="top_first">
                        <p>{{ $event->title }}</p>
                        <a target="_blank" style="text-decoration: none;"
                            href="{{ $event->location }}">
                            <img class="google_icon_image"
                                src="{{ asset('assets/images/googlemap.png') }}"
                                alt>
                            <span
                                class="event_name_location">{{$event->name}}</span>
                        </a>
                    </div>
                    
                    <p class="event_description">{{$event->description}}</p>
                </div>
                <div class="seperate">|</div>
                <button class="event_button" type="submit">Book Ticket</button>
            </div>
            </form>
        </div>
        @endforeach
        <!-- event container -->
        


    </div>
</main>
<!-- main body -->
@endsection

@extends('main')
@section('title , Tazkarti | Profile')
@section('content')
<main>

    <div class="container">
        @if (session()->has('success'))
        <div class="alert alert-success">{{ session()->get('success') }}</div>
    @endif
        <p class="event_title">{{ __('messages.events') }}</p>
         <!-- event container -->
         @foreach ($events as $event )
            
         <div class="events">
             {{-- send event id here --}}
             <form action="{{ route('userTicket.create') }}">
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
                 <button class="event_button" type="submit">{{ __('messages.Book') }}</button>
             </div>
             </form>
         </div>
         @endforeach
        <p class="event_title">{{ __('messages.Match') }}</p>

        <!-- match container -->
        @foreach ($matches as $match )
                
        <form action="#">
            <div class="match-container">
                <div class="item1">
                    @if($match->teams->count()>0)
                    <span>{{ $match->teams[0]->team_name }}</span>
                    <img width="120px" src="{{asset('assets/images/teams/' . $match->teams[0]->team_logo)}}" alt>
                    @endif
                    <span>vs</span>
                    @if ($match->teams->count()>1)
                        
                    <img width="120px" src="{{asset('assets/images/teams/' . $match->teams[1]->team_logo)}}" alt>
                    <span>{{ $match->teams[1]->team_name }}</span>
                    @endif
                    {{-- <img src="{{asset('assets/images/team.png')}}" alt>
                    <span>{{ $match->tournment }}</span> --}}

                </div>
                <div class="item2">
                    <img src="{{asset('assets/images/stadium (1).svg')}}"
                        alt>
                    <span> {{ $match->stadium->name}}</span>
                </div>
                <div class="item3">
                    <img src="{{asset('assets/images/calendar.svg')}}"
                        alt>
                    <p>{{ $match->date }} |
                        <span>Time : {{ $match->time_number }} {{ $match->time_period }}</span></p></div>
                <div class="item4">{{  $match->tournment->tournment_name }}</div>
                {{-- @dd($match) --}}
                <div class="item5">
                    <button type="submit">{{ __('messages.Book') }}</button>
                </div>
            </div>
        </form>
      
        @endforeach
       
        
    </div>
</main>
@endsection

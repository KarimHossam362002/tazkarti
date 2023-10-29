@extends('main')
@section('title , Tazkarti | Matches')
@section('content')
<main>

    <div class="container">

        <p class="event_title">{{ __('messages.matches') }}</p>

        <!-- match container -->
       
            @foreach ($matches as $match )
                
        <form action="#">
            <div class="match-container">
                <div class="item1">
                    @if($match->teams->count()>0)
                    <span>{{ $match->teams[0]->team_name }}</span>
                    <img src="{{asset('assets/images/teams/' . $match->teams[0]->team_logo)}}" alt>
                    @endif
                    <span>vs</span>
                    @if ($match->teams->count()>1)
                        
                    <img src="{{asset('assets/images/teams/' . $match->teams[1]->team_logo)}}" alt>
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
                    <button type="submit">Book Ticket</button>
                </div>
            </div>
        </form>
      
        @endforeach
       
        
    </div>
</main>
@endsection

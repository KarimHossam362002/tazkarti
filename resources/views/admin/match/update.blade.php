@extends('adminlte::page')
@section('content')
    <form action="{{ route('match.update', $match) }}" method="POST" enctype="multipart/form-data">
        @method('PUT')
        @csrf


        @error('time_number')
            <div class="alert alert-danger">
                {{ $message }}
            </div>
        @enderror
        <div>
            <label for="time_number" class="form-label">Time Number:</label>
            <input type="text" value="{{ $match->time_number }}" class="form-control w-50" name="time_number">

        </div>
        @error('time_period')
            <div class="alert alert-danger">
                {{ $message }}
            </div>
        @enderror
        <div class="form-group">
            <label for="time_period">AM/PM:</label>
            <select class="form-control w-50" id="time_period" name="time_period">
                <option value="AM">AM</option>
                <option value="PM">PM</option>
            </select>
        </div>
        @error('date')
            <div class="alert alert-danger">
                {{ $message }}
            </div>
        @enderror
        <div>
            <label for="date" class="form-label">date:</label>
            <input type="text" value="{{ $match->date }}" class="form-control w-50" name="date">

        </div>
        {{-- Tournment name --}}
        <div>
            <label for="tournment_name" class="form-label">Tournment Name:</label>
            <br>
            <select id="tournment_name" class="custom-select w-50" aria-label="Default select example" name="tournment_id">
                @foreach ($tournments as $tournment)
                    <option @if (old('tournment_id') == $tournment->id) selected @endif value="{{ $tournment->id }}">
                        {{ $tournment->tournment_name }}
                    </option>
                @endforeach
            </select>
        </div>
        {{-- Stadium name --}}
        <div>
            <label for="stadium_name" class="form-label">Stadium name:</label>
            <br>
            <select id="stadium_name" class="custom-select w-50" aria-label="Default select example" name="stadium_id">

                @foreach ($stadiums as $stadium)
                    <option value="{{ $stadium->id }}">{{ $stadium->name }}
                    </option>
                @endforeach

            </select>
        </div>
        {{-- Team 1 --}}
        <div>
            <label for="team_name_1" class="form-label">Team 1 name:</label>
            <br>
            <select id="team_name_1" class="custom-select w-50" aria-label="Default select example" name="team_name_1">
                <option value="#" disabled selected>--Select a team--</option>
                @foreach ($teams as $team)
                    <option value="{{ $team->id }}">{{ $team->team_name }}
                    </option>
                @endforeach
            </select>
        </div>
        {{-- Team 2 --}}
        <div>
            <label for="team_name_2" class="form-label">Team 2 name:</label>
            <br>
            <select id="team_name_2" class="custom-select w-50" aria-label="Default select example" name="team_name_2">
                <option value="#" disabled selected>--Select a team--</option>
                @foreach ($teams as $team)
                    <option value="{{ $team->id }}">{{ $team->team_name }}
                    </option>
                @endforeach
            </select>
        </div>
        
        @error('status')
            <div class="alert alert-danger">
                {{ $message }}
            </div>
        @enderror
        <div>
            <label for="status" class="form-label">Status:</label>
            <br>
            <select class="custom-select w-50" aria-label="Default select example" name="status" id="status">
                <option value="0">Hidden</option>
                <option value="1">Shown</option>
            </select>
        </div>

        <input type="submit" class="btn btn-primary" value="Save" />
    </form>
@endsection
@section('js')
    <script src="{{ asset('assets/js/main.js') }}"></script>
@endsection

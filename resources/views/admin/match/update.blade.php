@extends('adminlte::page')
@section('content')

    <form action="{{ route('match.update' , $match) }}" method="POST" enctype="multipart/form-data">
        @method('PUT')
        @csrf

        
            @error('time_number')
            <div class="alert alert-danger">
                {{ $message }}
            </div>
            @enderror
        <div>
            <label for="time_number" class="form-label">Time Number:</label>
           <input type="text"  value="{{ $match->time_number }}" class="form-control w-50"  name="time_number">

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
           <input type="text"  value="{{ $match->date }}" class="form-control w-50"  name="date">

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

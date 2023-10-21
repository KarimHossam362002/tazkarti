@extends('adminlte::page')
@section('content')
    @if (session()->has('success'))
        <div class="alert alert-success">
            {{ session()->get('success') }}
        </div>
    @endif
    <form action="{{ route('match.store') }}" method="post" enctype="multipart/form-data">
        @method('POST')
        @csrf
            @error('time_number')
            <div class="alert alert-danger">
                {{ $message }}
            </div>
            @enderror
                <div class="form-group">
                    <label for="time">Time:</label>
                    <input type="text" class="form-control w-50" id="time" name="time_number" placeholder="16:01">
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
           <input type="text" class="form-control w-50"  name="date">

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
        <input type="submit" class="btn btn-primary" value="Create" />

    </form>
@endsection

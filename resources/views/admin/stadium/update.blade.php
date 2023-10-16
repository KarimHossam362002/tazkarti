@extends('adminlte::page')
@section('content')

    <form action="{{ route('stadium.update' , $stadium) }}" method="POST" enctype="multipart/form-data">
        @method('PUT')
        @csrf

            @error('name')
            <div class="alert alert-danger">
                {{ $message }}
            </div>
            @enderror
        <div>
            <label for="name" class="form-label">Name:</label>
           <input type="text" value="{{ $stadium->name }}" class="form-control w-50"  name="name">

        </div>
            @error('city')
            <div class="alert alert-danger">
                {{ $message }}
            </div>
            @enderror
        <div>
            <label for="city" class="form-label">City:</label>
           <input type="text"  value="{{ $stadium->city }}" class="form-control w-50"  name="city">

        </div>
            @error('location')
            <div class="alert alert-danger">
                {{ $message }}
            </div>
            @enderror
        <div>
            <label for="location" class="form-label">Location:</label>
           <input type="text"  value="{{ $stadium->location }}" class="form-control w-50"  name="location">

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

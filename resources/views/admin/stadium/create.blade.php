@extends('adminlte::page')
@section('content')
    @if (session()->has('success'))
        <div class="alert alert-success">
            {{ session()->get('success') }}
        </div>
    @endif
    <form action="{{ route('stadium.store') }}" method="post" enctype="multipart/form-data">
        @method('POST')
        @csrf
            @error('name')
            <div class="alert alert-danger">
                {{ $message }}
            </div>
            @enderror
        <div>
            <label for="name" class="form-label">Name:</label>
           <input type="text" class="form-control w-50"  name="name">

        </div>
            @error('city')
            <div class="alert alert-danger">
                {{ $message }}
            </div>
            @enderror
        <div>
            <label for="city" class="form-label">City:</label>
           <input type="text" class="form-control w-50"  name="city">

        </div>
            @error('location')
            <div class="alert alert-danger">
                {{ $message }}
            </div>
            @enderror
        <div>
            <label for="location" class="form-label">Location:</label>
           <input type="text" class="form-control w-50"  name="location">

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

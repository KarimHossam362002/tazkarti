@extends('adminlte::page')
@section('content')

    <form action="{{ route('store.update' , $store) }}" method="POST" enctype="multipart/form-data">
        @method('PUT')
        @csrf

            @error('outlet_name')
            <div class="alert alert-danger">
                {{ $message }}
            </div>
            @enderror
        <div>
            <label for="outlet_name" class="form-label">Outlet Name:</label>
           <input type="text" value="{{ $store->outlet_name }}" class="form-control w-50"  name="outlet_name">

        </div>
            @error('city')
            <div class="alert alert-danger">
                {{ $message }}
            </div>
            @enderror
        <div>
            <label for="city" class="form-label">City:</label>
           <input type="text" value="{{ $store->city }}" class="form-control w-50"  name="city">

        </div>
            @error('district')
            <div class="alert alert-danger">
                {{ $message }}
            </div>
            @enderror
        <div>
            <label for="district" class="form-label">District:</label>
           <input type="text"  value="{{ $store->district }}" class="form-control w-50"  name="district">

        </div>
            @error('address')
            <div class="alert alert-danger">
                {{ $message }}
            </div>
            @enderror
        <div>
            <label for="address" class="form-label">Address:</label>
           <input type="text"  value="{{ $store->address }}" class="form-control w-50"  name="address">

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
            @error('dedicated_to')
            <div class="alert alert-danger">
                {{ $message }}
            </div>
            @enderror
        <div>
            <label for="dedicated_to" class="form-label">Dedicated To:</label>
            <br>
            <select class="custom-select w-50" aria-label="Default select example" name="dedicated_to" id="dedicated_to">
                <option value="0">Match</option>
                <option value="1">Entertainment</option>
            </select>
        </div>

        <input type="submit" class="btn btn-primary" value="Save" />
    </form>
@endsection

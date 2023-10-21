@extends('adminlte::page')
@section('content')

    <form action="{{ route('tournment.update' , $tournment) }}" method="POST" enctype="multipart/form-data">
        @method('PUT')
        @csrf

        
            @error('tournment_name')
            <div class="alert alert-danger">
                {{ $message }}
            </div>
            @enderror
        <div>
            <label for="tournment_name" class="form-label">Tournment Name:</label>
           <input type="text"  value="{{ $tournment->tournment_name }}" class="form-control w-50"  name="tournment_name">

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

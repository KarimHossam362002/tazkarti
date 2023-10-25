@extends('adminlte::page')
@section('content')
    @if (session()->has('success'))
        <div class="alert alert-success">
            {{ session()->get('success') }}
        </div>
    @endif
    <form action="{{ route('tournment.store') }}" method="post" enctype="multipart/form-data">
        @method('POST')
        @csrf
            @error('tournment_name')
            <div class="alert alert-danger">
                {{ $message }}
            </div>
            @enderror
                <div class="form-group">
                    <label for="tournment_name">Tournment Name:</label>
                    <input type="text" class="form-control w-50" id="tournment_name" name="tournment_name" >
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

@extends('adminlte::page')
@section('content')

    <form action="{{ route('entertainment.update' , $entertainment) }}" method="POST" enctype="multipart/form-data">
        @method('PUT')
        @csrf

            @error('name')
            <div class="alert alert-danger">
                {{ $message }}
            </div>
            @enderror
        <div>
            <label for="name" class="form-label">Name:</label>
           <input type="text" value="{{ $entertainment->name }}" class="form-control w-50"  name="name">

        </div>
            @error('title')
            <div class="alert alert-danger">
                {{ $message }}
            </div>
            @enderror
        <div>
            <label for="title" class="form-label">title:</label>
           <input type="text"  value="{{ $entertainment->title }}" class="form-control w-50"  name="title">

        </div>
            @error('description')
            <div class="alert alert-danger">
                {{ $message }}
            </div>
            @enderror
        <div>
            <label for="description" class="form-label">description:</label>
           <input type="text"  value="{{ $entertainment->description }}" class="form-control w-50"  name="description">

        </div>
            @error('location')
            <div class="alert alert-danger">
                {{ $message }}
            </div>
            @enderror
        <div>
            <label for="location" class="form-label">location:</label>
           <input type="text"  value="{{ $entertainment->location }}" class="form-control w-50"  name="location">

        </div>
        <label for="exampleInputFile">Image</label>
        @error('image')
            <div class="alert alert-danger">
                {{ $message }}
            </div>
        @enderror
        <div class="input-group w-50">
            <div class="custom-file">
                <input type="file" class="custom-file-input" name="image" id="exampleInputFile">
                <label class="custom-file-label" for="exampleInputFile">Upload</label>
            </div>
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

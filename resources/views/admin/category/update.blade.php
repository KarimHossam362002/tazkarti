@extends('adminlte::page')
@section('content')

    <form action="{{ route('category.update' , $category) }}" method="POST" enctype="multipart/form-data">
        @method('PUT')
        @csrf
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
            @error('title')
            <div class="alert alert-danger">
                {{ $message }}
            </div>
            @enderror
        <div>
            <label for="title" class="form-label">title:</label>
           <input type="text" value="{{ $category->title }}" class="form-control w-50"  name="title">

        </div>
            @error('sub_title')
            <div class="alert alert-danger">
                {{ $message }}
            </div>
            @enderror
        <div>
            <label for="sub_title" class="form-label">sub_title:</label>
           <input type="text"  value="{{ $category->sub_title }}" class="form-control w-50"  name="sub_title">

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

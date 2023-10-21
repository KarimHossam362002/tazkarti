@extends('adminlte::page')
@section('content')

    <form action="{{ route('team.update' , $team) }}" method="POST" enctype="multipart/form-data">
        @method('PUT')
        @csrf
        <label for="exampleInputFile">Team Logo</label>
        @error('team_logo')
            <div class="alert alert-danger">
                {{ $message }}
            </div>
        @enderror
        <div class="input-group w-50">
            <div class="custom-file">
                <input type="file" class="custom-file-input" name="team_logo" id="exampleInputFile">
                <label class="custom-file-label" for="exampleInputFile">Upload</label>
            </div>
        </div>
            @error('team_name')
            <div class="alert alert-danger">
                {{ $message }}
            </div>
            @enderror
        <div>
            <label for="team_name" class="form-label">Team Name:</label>
           <input type="text" value="{{ $team->team_name }}" class="form-control w-50"  name="team_name">

        </div>
        

       
          

        <input type="submit" class="btn btn-primary" value="Save" />
    </form>
@endsection

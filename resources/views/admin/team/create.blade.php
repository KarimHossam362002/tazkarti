@extends('adminlte::page')
@section('content')
    @if (session()->has('success'))
        <div class="alert alert-success">
            {{ session()->get('success') }}
        </div>
    @endif
    <form action="{{ route('team.store') }}" method="post" enctype="multipart/form-data">
        @method('POST')
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
           <input type="text" class="form-control w-50"  name="team_name">

        </div>
        <div>
            <label for="tournment_name" class="form-label">Tournment Name:</label>
            <br>
            <select id="tournment_name" class="custom-select w-50" aria-label="Default select example" name="tournment_id">
                @foreach ($tournments as $tournment)
                    <option value="{{ $tournment->id }}">{{ $tournment->tournment_name }}
                    </option>
                @endforeach
            </select>
        </div>
           

           

        <input type="submit" class="btn btn-primary" value="Create" />
    </form>
@endsection

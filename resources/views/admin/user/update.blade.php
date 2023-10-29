@extends('adminlte::page')
@section('content')
@dd($user->id)
    <form action="{{ route('user.update' , ['id'=>$user->id]) }}" method="POST" enctype="multipart/form-data">
        @method('PUT')
        @csrf
        {{-- <input type="hidden" value="{{ $user->id }}"> --}}
            @error('type')
            <div class="alert alert-danger">
                {{ $message }}
            </div>
            @enderror
        <div>
            <label for="type" class="form-label">Type:</label>
            <br>
            <select class="custom-select w-50" aria-label="Default select example" name="type" id="type">
                <option value="user">User</option>
                <option value="admin">Admin</option>
            </select>
        </div>

        <input type="submit" class="btn btn-primary" value="Save" />
    </form>
@endsection

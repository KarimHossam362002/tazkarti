@extends('main')
@section('title , Tazkarti | Update Profile')
@section('content')
<main>

    <div class="container">
        <div class="contact_container">
        <h1>Update information</h1>
        @if (auth()->check())
        <form action="{{ route('profile.update' , Auth::user()->id) }}" enctype="multipart/form-data" method="POST">
            @method('PUT')
            @csrf
            {{-- <input type="hidden" name="id" value="{{ $user->id }}"> --}}
            {{-- data updated success --}}
            @if (session()->has('success'))
                <div class="alert alert-success">{{ session()->get('success') }}</div>
            @endif
            {{-- if user not exist --}}
            @if (session()->has('user_error'))
                <div class="alert alert-danger">{{ session()->get('error') }}</div>
            @endif
             <label class="custom-file-label" for="exampleInputFile">Image*</label>
            <div class="input-group w-100">
                <div class="custom-file">
                    <input type="file" class="custom-file-input" name="image" id="exampleInputFile">

                </div>
            </div>
            <label for="name">Name*</label>
            @error('name')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
            @enderror
            <input type="text" placeholder="Name" name="name">
            <label for="name">Email*</label>
            @error('email')
            <div class="alert alert-danger">
                {{ $message }}
            </div>
        @enderror
            <input type="text" placeholder="Email" name="email">
            {{-- incorrect old password --}}
            @if (session()->has('error'))
                <div class="alert alert-danger">{{ session()->get('error') }}</div>
            @endif
            <label for="old_password">old password*</label>
            @error('password')
            <div class="alert alert-danger">
                {{ $message }}
            </div>
        @enderror
            <input type="password" placeholder="old_password" name="password">
            <label for="new_password">new password*</label>
            <input type="password" placeholder="new_password" name="new_password">
            <button type="submit">Update</button>
        </form>
        @endif
    </div>
</div>
</main>
@endsection

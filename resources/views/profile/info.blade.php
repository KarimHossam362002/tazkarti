@extends('main')
@section('title , Tazkarti | Update Profile')
@section('content')
<main>

    <div class="container">
        <div class="contact_container">
        <h1>{{ __('messages.update_info') }}</h1>
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
             <label class="custom-file-label" for="exampleInputFile">{{ __('messages.image') }}*</label>
            <div class="input-group w-100">
                <div class="custom-file">
                    <input type="file" class="custom-file-input" name="image" id="exampleInputFile">

                </div>
            </div>
            <label for="name">{{ __('messages.name') }}*</label>
            @error('name')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
            @enderror
            <input type="text" placeholder="Name" name="name">
            <label for="name">{{ __('messages.email_address') }}*</label>
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
            <label for="old_password">{{ __('messages.old_password') }}*</label>
            @error('password')
            <div class="alert alert-danger">
                {{ $message }}
            </div>
        @enderror
            <input type="password" placeholder="{{ __('messages.old_password') }}" name="password" autocomplete="off">
            <label for="new_password">{{ __('messages.new_password') }}*</label>
            <input type="password" placeholder="{{ __('messages.new_password') }}" name="new_password" autocomplete="off">
            <button type="submit">{{ __('messages.update_info') }}</button>
        </form>
        @endif
    </div>
</div>
</main>
@endsection

@extends('second')
@section('title , Tazkarti | Reset Password')
@section('content')
    <main>

        <div class="container">
            <div class="contact_container">
                <h1>Reset Password</h1>
                <form method="POST" action="{{ route('password.update') }}">
                    @csrf
                     <input type="hidden" name="token" value="{{ $token }}">

                   

                    <label for="email">{{ __('Email Address') }}*</label>
                    <input id="email" type="email" @error('email') is-invalid @enderror name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>
                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                    <label for="password">{{ __('Password') }}*</label>
                    <input id="password" type="password" @error ('password') is-invalid @enderror name="password" required autocomplete="new-password">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    <label for="password-confirm">{{ __('Confirm Password') }}*</label>
                    <input id="password-confirm" type="password"  name="password_confirmation" required autocomplete="new-password">
                    
                   
                    <button type="submit">{{ __('Reset Password') }}</button>
                    
                </form>
            </div>
        </div>
    </main>
@endsection

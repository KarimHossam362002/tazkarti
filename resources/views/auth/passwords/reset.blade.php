@extends('second')
@section('title , Tazkarti | Reset Password')
@section('content')
    <main>

        <div class="container">
            <div class="contact_container">
                <h1>{{ __('messages.reset_password') }}</h1>
                <form method="POST" action="{{ route('password.update') }}">
                    @csrf
                     <input type="hidden" name="token" value="{{ $token }}">

                   

                    <label for="email">{{ __('messages.email_address') }}*</label>
                    <input id="email" type="email" @error('email') is-invalid @enderror name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>
                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                    <label for="password">{{ __('messages.password') }}*</label>
                    <input id="password" placeholder="{{ __('messages.password') }}" type="password" @error ('password') is-invalid @enderror name="password" required autocomplete="new-password">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    <label for="password-confirm">{{ __('messages.confirm_password') }}*</label>
                    <input id="password-confirm" placeholder="{{ __('messages.confirm_password') }}" type="password"  name="password_confirmation" required autocomplete="new-password">
                    
                   
                    <button type="submit">{{ __('messages.reset_password') }}</button>
                    
                </form>
            </div>
        </div>
    </main>
@endsection

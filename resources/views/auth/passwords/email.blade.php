@extends('second')
@section('title , Tazkarti | Reset password')
@section('content')
    <main>

        <div class="container">
            <div class="contact_container">
                <h1>{{ __('messages.remember_password') }}</h1>
                <form method="POST" action="{{ route('password.email') }}">
                    @csrf
                    <label for="email">{{ __('messages.email_address') }}*</label>
                    <input id="email" type="email" @error('email') is-invalid @enderror name="email"
                        value="{{ old('email') }}" required autocomplete="email" autofocus>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    <button type="submit">
                        {{ __('messages.Send Password Reset Link') }}
                    </button>
                </form>
            </div>
        </div>
    </main>
@endsection

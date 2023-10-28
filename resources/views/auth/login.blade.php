@extends('second')
@section('title , Tazkarti | Sign in')
@section('content')
    <main>

        <div class="container">
            <div class="contact_container">
                <h1>Sign in</h1>
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <label for="email">{{ __('Email Address') }}*</label>
                    <input id="email" type="email" @error('email') is-invalid @enderror name="email"
                        value="{{ old('email') }}" required autocomplete="email" autofocus>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    <label for="password">{{ __('Password') }}*</label>
                    <input id="password" type="password" @error('password') is-invalid @enderror name="password" required
                        autocomplete="current-password">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    {{-- <div class="row mb-3">
                        <div class="col-md-6 offset-md-4">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                    {{ old('remember') ? 'checked' : '' }}>

                                <label class="form-check-label" for="remember">
                                    {{ __('Remember Me') }}
                                </label>
                            </div>
                        </div>
                    </div> --}}
                    <button type="submit">{{ __('Login') }}</button>
                    @if (Route::has('password.request'))
                        <a class="btn btn-link" href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                    @endif
                </form>
            </div>
        </div>
    </main>
@endsection

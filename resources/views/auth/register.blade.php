@extends('second')
@section('title , Tazkarti | Sign up')
@section('content')
    <main>

        <div class="container">
            <div class="contact_container">
                <h1>{{ __('messages.Register') }}</h1>
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <label for="name">{{ __('messages.name') }}*</label>
                    <input id="name" type="text"@error('name') is-invalid @enderror name="name"
                        value="{{ old('name') }}" required autocomplete="name" autofocus>
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    <label for="email">{{ __('messages.email_address') }}*</label>
                    <input id="email" type="email" @error('email') is-invalid @enderror name="email"
                        value="{{ old('email') }}" required autocomplete="email">
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    <label for="password">{{ __('messages.password') }}*</label>
                    <input id="password" type="password" @error('password') is-invalid @enderror name="password" required
                        autocomplete="new-password">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    <label for="confirm_password">{{ __('messages.confirm_password') }}*</label>
                    <input id="password-confirm" type="password" name="password_confirmation" required
                        autocomplete="new-password">
                    <button type="submit"> {{ __('messages.Register') }}</button>
                </form>
            </div>
        </div>
    </main>
@endsection

@extends('second')
@section('title , Tazkarti | Contact')
@section('content')
 <!-- main body -->
 <main>

    <div class="container">
        <div class="contact_container">
        <h1>{{ __('messages.Contact_nav') }}</h1>
            @if (session()->has('success'))
            <div class="alert alert-success">{{ session()->get('success') }}</div>
            @endif
        <form action="{{ route('contact.store') }}" method="POST">
            @csrf
            @error('subject')
            <div class="alert alert-danger">
                {{ $message }}
            </div>
            @enderror
            <label for="subject">{{ __('messages.subject') }}*</label>
            <select name="subject" id="subject">
                <option value="" selected disabled>--{{ __('messages.select') }}--</option>
                <option value="Technical Support">{{ __('messages.technical_support') }}</option>
                <option value="Suggestion">{{ __('messages.suggestion') }}</option>
                <option value="Complaint">{{ __('messages.complaint') }}</option>
            </select>
            @error('name')
            <div class="alert alert-danger">
                {{ $message }}
            </div>
            @enderror
            <label for="name">{{ __('messages.name') }}*</label>
            <input type="text" placeholder="{{ __('messages.name') }}" name="name">
            @error('email')
            <div class="alert alert-danger">
                {{ $message }}
            </div>
            @enderror
            <label for="email">{{ __('messages.email_address') }}*</label>
            <input type="text" placeholder="{{ __('messages.email_address') }}" name="email">
            @error('phone')
            <div class="alert alert-danger">
                {{ $message }}
            </div>
            @enderror
            <label for="phone">{{ __('messages.phone') }}*</label>
            <input type="text" placeholder="{{ __('messages.phone') }}" name="phone">
            {{-- <label for="tazkarti_id">Tazkarti ID*</label>
            <input type="text" placeholder="Tazkarti ID" name="tazkarti_id"> --}}
            @error('message')
            <div class="alert alert-danger">
                {{ $message }}
            </div>
            @enderror
            <label for="message">{{ __('messages.message') }}*</label>
            <textarea name="message" id="message" cols="30" rows="7" placeholder="{{ __('messages.message') }}"></textarea>
            <button type="submit">{{ __('messages.send') }}</button>
        </form>
    </div>
</div>
</main>
<!-- main body -->
@endsection

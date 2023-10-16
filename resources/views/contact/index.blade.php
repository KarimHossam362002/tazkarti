@extends('second')
@section('title , Tazkarti | Contact')
@section('content')
 <!-- main body -->
 <main>

    <div class="container">
        <div class="contact_container">
        <h1>Contact Us</h1>
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
            <label for="subject">Subject*</label>
            <select name="subject" id="subject">
                <option value="" selected disabled>--Select--</option>
                <option value="Technical Support">Technical Support</option>
                <option value="Suggestion">Suggestion</option>
                <option value="Complaint">Complaint</option>
            </select>
            @error('name')
            <div class="alert alert-danger">
                {{ $message }}
            </div>
            @enderror
            <label for="name">Name*</label>
            <input type="text" placeholder="Name" name="name">
            @error('email')
            <div class="alert alert-danger">
                {{ $message }}
            </div>
            @enderror
            <label for="email">Email*</label>
            <input type="text" placeholder="Email" name="email">
            @error('phone')
            <div class="alert alert-danger">
                {{ $message }}
            </div>
            @enderror
            <label for="phone">Phone*</label>
            <input type="text" placeholder="Phone" name="phone">
            {{-- <label for="tazkarti_id">Tazkarti ID*</label>
            <input type="text" placeholder="Tazkarti ID" name="tazkarti_id"> --}}
            @error('message')
            <div class="alert alert-danger">
                {{ $message }}
            </div>
            @enderror
            <label for="message">Message*</label>
            <textarea name="message" id="message" cols="30" rows="7" placeholder="Message"></textarea>
            <button type="submit">Send</button>
        </form>
    </div>
</div>
</main>
<!-- main body -->
@endsection

@extends('main')
@section('title , Tazkarti | Contact')
@section('content')
 <!-- main body -->
 <main>

    <div class="container">
        <div class="contact_container">
        <h1>Contact Us</h1>
        <form action="#">
            <label for="subject">Subject*</label>
            <select name="subject" id="subject">
                <option value="" selected disabled>--Select--</option>
                <option value="technical_support">Technical Support</option>
                <option value="suggestion">Suggestion</option>
                <option value="complaint">Complaint</option>
            </select>
            <label for="name">Name*</label>
            <input type="text" placeholder="Name" name="name">
            <label for="email">Email*</label>
            <input type="text" placeholder="Email" name="email">
            <label for="phone">Phone*</label>
            <input type="text" placeholder="Phone" name="phone">
            <label for="tazkarti_id">Tazkarti ID*</label>
            <input type="text" placeholder="Tazkarti ID" name="tazkarti_id">
            <label for="message">Message*</label>
            <textarea name="message" id="message" cols="30" rows="7" placeholder="Message"></textarea>
            <button type="submit">Send</button>
        </form>
    </div>
</div>
</main>
<!-- main body -->
@endsection

@extends('second')
@section('title , Tazkarti | Sign up')
@section('content')
<main>

    <div class="container">
        <div class="contact_container">
        <h1>Register</h1>
        <form action="#">
            <label for="name">Name*</label>
            <input type="text" placeholder="Name" name="name">
            <label for="email">Email*</label>
            <input type="text" placeholder="Email" name="email">
            <label for="password">password*</label>
            <input type="text" placeholder="password" name="password">
            <label for="confirm_password">Confirm Password*</label>
            <input type="text" placeholder="confirm password" name="confirm_password">
            <button type="submit">Sign up</button>
        </form>
    </div>
</div>
</main>
@endsection

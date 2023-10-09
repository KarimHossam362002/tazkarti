@extends('second')
@section('title , Tazkarti | Sign in')
@section('content')
<main>

    <div class="container">
        <div class="contact_container">
        <h1>Sign in</h1>
        <form action="#">
            <label for="email">Email*</label>
            <input type="text" placeholder="Email" name="email">
            <label for="password">password*</label>
            <input type="text" placeholder="password" name="password">
            <button type="submit">Log in</button>
        </form>
    </div>
</div>
</main>
@endsection

@extends('main')
@section('title , Tazkarti | Update Profile')
@section('content')
<main>

    <div class="container">
        <div class="contact_container">
        <h1>Update information</h1>
        <form action="#" enctype="multipart/form-data" method="POST">
             <label class="custom-file-label" for="exampleInputFile">Image*</label>
            <div class="input-group w-100">
                <div class="custom-file">
                    <input type="file" class="custom-file-input" name="image" id="exampleInputFile">

                </div>
            </div>
            <label for="name">Name*</label>
            <input type="text" placeholder="Name" name="name">
            <label for="old_password">old password*</label>
            <input type="text" placeholder="old_password" name="old_password">
            <label for="new_password">new password*</label>
            <input type="text" placeholder="new_password" name="new_password">
            <button type="submit">Update</button>
        </form>
    </div>
</div>
</main>
@endsection

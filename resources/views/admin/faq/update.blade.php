@extends('adminlte::page')
@section('content')

    <form action="{{ route('faq.update' , $faq) }}" method="POST" enctype="multipart/form-data">
        @method('PUT')
        @csrf

            @error('question')
            <div class="alert alert-danger">
                {{ $message }}
            </div>
            @enderror
        <div>
            <label for="question" class="form-label">Question:</label>
           <input type="text" value="{{ $faq->question }}" class="form-control w-50"  name="question">

        </div>
            @error('answer')
            <div class="alert alert-danger">
                {{ $message }}
            </div>
            @enderror
        <div>
            <label for="answer" class="form-label">Answer:</label>
           <input type="text"  value="{{ $faq->answer }}" class="form-control w-50"  name="answer">

        </div>

            @error('status')
            <div class="alert alert-danger">
                {{ $message }}
            </div>
            @enderror
        <div>
            <label for="status" class="form-label">Status:</label>
            <br>
            <select class="custom-select w-50" aria-label="Default select example" name="status" id="status">
                <option value="0">Hidden</option>
                <option value="1">Shown</option>
            </select>
        </div>

        <input type="submit" class="btn btn-primary" value="Save" />
    </form>
@endsection

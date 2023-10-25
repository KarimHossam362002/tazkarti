@extends('second')
@section('title , Tazkarti | Stadiums')
@section('content')
<main>
    <h1 class="title">Stadiums</h1>
    <div class="container">
    <table class="table table-default">
        <thead>
            <tr>

                <th scope="col">Stadium name</th>
                <th scope="col">City</th>
                <th scope="col">Location</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($stadiums as $stadium )
            <tr>
                <th scope="row">{{ $stadium->name }}</th>
                <td>{{ $stadium->city }}</td>
                <td><a href="{{ $stadium->location }}"><img
                            style="height: 40px; width: auto;"
                            src="{{asset('assets/images/map-icon.png')}}" alt></a></td>

            </tr>
            @endforeach

            {{-- <tr>
                <th scope="row">Cairo Stadium Sports Hall</th>
                <td>Cairo</td>
                <td><a href="#"><img
                            style="height: 40px; width: auto;"
                            src="{{asset('assets/images/map-icon.png')}}" alt></a></td>

            </tr>
            <tr>
                <th scope="row">Cairo Stadium Sports Hall</th>
                <td>Cairo</td>
                <td><a href="#"><img
                            style="height: 40px; width: auto;"
                            src="{{asset('assets/images/map-icon.png')}}" alt></a></td>

            </tr>
            <tr>
                <th scope="row">Cairo Stadium Sports Hall</th>
                <td>Cairo</td>
                <td><a href="#"><img
                            style="height: 40px; width: auto;"
                            src="{{asset('assets/images/map-icon.png')}}" alt></a></td>

            </tr> --}}

        </tbody>
    </table>
</div>
</main>
@endsection

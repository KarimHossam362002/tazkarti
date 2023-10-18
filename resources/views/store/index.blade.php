@extends('second')
@section('title , Tazkarti | Store')
@section('content')
<main>
    <h1 class="title">Tazkarti Stores</h1>
    <div class="container">
    <table class="table table-default">
        <thead>
            <tr>

                <th scope="col">Dedicated To</th>
                <th scope="col">Outlet Name</th>
                <th scope="col">City</th>
                <th scope="col">District</th>
                <th scope="col">Address</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($stores as $store )
            <tr>
                <th scope="row">{{ $store->dedicated_to == 1 ? 'Entertainment' : 'Match' }}</th>
                <td>{{ $store->outlet_name }}</td>
                <td>{{ $store->city }}</td>
                <td>{{ $store->district }}</td>
                <td>{{ $store->address }}</td>


            </tr>
            @endforeach
           
            {{-- <tr>
                <th scope="row">Entertainment</th>
                <td>Fawry Plus</td>
                <td>Cairo</td>
                <td>Heliopolis</td>
                <td>store 2, ground floor,building 54 othman ibn affan</td>


            </tr>
            <tr>
                <th scope="row">Entertainment</th>
                <td>Fawry Plus</td>
                <td>Cairo</td>
                <td>Heliopolis</td>
                <td>store 2, ground floor,building 54 othman ibn affan</td>


            </tr>
            <tr>
                <th scope="row">Entertainment</th>
                <td>Fawry Plus</td>
                <td>Cairo</td>
                <td>Heliopolis</td>
                <td>store 2, ground floor,building 54 othman ibn affan</td>


            </tr>
            <tr>
                <th scope="row">Entertainment</th>
                <td>Fawry Plus</td>
                <td>Cairo</td>
                <td>Heliopolis</td>
                <td>store 2, ground floor,building 54 othman ibn affan</td>


            </tr> --}}




        </tbody>
    </table>
</div>
</main>
@endsection

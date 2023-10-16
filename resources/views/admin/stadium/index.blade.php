@extends('adminlte::page')
@section('content')
    @if (session()->has('success'))
        <div class="alert alert-success">{{ session()->get('success') }}</div>
    @endif
    @if (session()->has('updated'))
        <div class="alert alert-success">{{ session()->get('updated') }}</div>
    @endif
    <a href="{{ route('stadium.create') }}" class="btn btn-primary">Create record</a>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">Name</th>
                <th scope="col">City</th>
                <th scope="col">Location</th>
                <th scope="col">Status</th>
                <th scope="col">Actions..</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($stadiums as $stadium)
                <tr>
                    <th scope="row">{{ $stadium->id }}</th>
                    <td>{{ $stadium->name }}</td>
                    <td>{{ $stadium->city }}</td>
                    <td> <a target="_blank" href="{{ $stadium->location }}">
                            <img style="height: 40px; width: auto;" src="{{ asset('assets/images/map-icon.png') }}" alt>
                        </a>
                    </td>
                    <td>{{ $stadium->status == 1 ? 'Shown' : 'Hidden' }}</td>
                    <td style="display: flex">
                        <form action="{{ route('stadium.destroy', $stadium) }}" method="POST">
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="btn btn-danger delete-stadium"><i
                                    class="fas fa-trash-alt"></i></button>
                        </form>
                        <a href="{{ route('stadium.edit', $stadium) }}" class="btn btn-warning"><i
                                class="fas fa-edit"></i></a>
                    </td>
                </tr>
            @endforeach

        </tbody>
    </table>


    <div class="row">
        <div class="col-12 mt-5">
            @if ($stadiums->hasPages())
                <nav aria-label="Page navigation">
                    <ul class="pagination justify-content-center">
                        <li class="page-item {{ $stadiums->currentPage() == 1 ? 'disabled' : '' }}">
                            <a class="page-link" href="{{ $stadiums->previousPageUrl() }}" aria-label="Previous">
                                <span class="fa fa-angle-double-left" aria-hidden="true"></span>
                                <span class="sr-only"> {{ 'lang.Previous' }} </span>
                            </a>
                        </li>
                        @foreach ($stadiums->getUrlRange(1, $stadiums->lastPage()) as $pageLink)
                            @php

                                $pageString = strstr($pageLink, 'page=', false);
                                $rev = strrev($pageString);
                                $pageNum = strstr($rev, '=', true);
                                $pageNum = strrev($pageNum);
                            @endphp
                            <li class="page-item {{ substr($pageLink, -1) == $stadiums->currentPage() ? 'active' : '' }}">
                                <a class="page-link" href="{{ $pageLink }}">{{ $pageNum }}
                                </a>
                            </li>
                        @endforeach
                        <li class="page-item {{ $stadiums->currentPage() == $stadiums->lastPage() ? 'disabled' : '' }}">
                            <a class="page-link" href="{{ $stadiums->nextPageUrl() }}" aria-label="Next">
                                <span class="fa fa-angle-double-right" aria-hidden="true"></span>
                                <span class="sr-only"> {{ 'lang.Next' }} </span>
                            </a>
                        </li>
                    </ul>
                </nav>
            @endif

        </div>
    </div>



@section('js')
    <script>
        document.querySelectorAll('.delete-stadium').forEach(btn => {
            btn.addEventListener('click', function(e) {
                const Action = confirm('are you sure you want to delete');
                if (!Action) e.preventDefault();
            })
        })
    </script>
@endsection

@endsection

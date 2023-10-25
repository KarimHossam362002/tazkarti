@extends('adminlte::page')
@section('content')
    @if (session()->has('success'))
        <div class="alert alert-success">{{ session()->get('success') }}</div>
    @endif
    @if (session()->has('updated'))
        <div class="alert alert-success">{{ session()->get('updated') }}</div>
    @endif
    <a href="{{ route('match.create') }}" class="btn btn-primary">Create record</a>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">Date</th>
                <th scope="col">Time</th>
                <th scope="col">Tournment Name</th>
                <th scope="col">Team 1</th>
                <th scope="col">Team 2</th>
     
                {{-- <th scope="col">Time period</th> --}}
                <th scope="col">Status</th>
                <th scope="col">Actions..</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($matches as $match)
                <tr>
                    <th scope="row">{{ $match->id }}</th>
                    <td>{{ $match->date }}</td>
                    <td>{{ $match->time_number . " " .$match->time_period }}</td>
                    <td>{{ $match->tournment?->tournment_name }}</td>
                    <td>
                        @if ($match->teams->count() > 0)
                            {{ $match->teams[0]->team_name }}
                        @else
                            No Team 1
                        @endif
                    </td>
                    
                    <td>
                        @if ($match->teams->count() > 1)
                            {{ $match->teams[1]->team_name }}
                        @else
                            No Team 2
                        @endif
                    </td>
                   
                    {{-- <td>{{ $match->time_period }}</td> --}}
                    
                   
                    <td>{{ $match->status == 1 ? 'Shown' : 'Hidden' }}</td>
                    <td style="display: flex">
                        <form action="{{ route('match.destroy', $match) }}" method="POST">
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="btn btn-danger delete-match"><i
                                    class="fas fa-trash-alt"></i></button>
                        </form>
                        <a href="{{ route('match.edit', $match) }}" class="btn btn-warning"><i
                                class="fas fa-edit"></i></a>
                    </td>
                </tr>
            @endforeach

        </tbody>
    </table>


    <div class="row">
        <div class="col-12 mt-5">
            @if ($matches->hasPages())
                <nav aria-label="Page navigation">
                    <ul class="pagination justify-content-center">
                        <li class="page-item {{ $matches->currentPage() == 1 ? 'disabled' : '' }}">
                            <a class="page-link" href="{{ $matches->previousPageUrl() }}" aria-label="Previous">
                                <span class="fa fa-angle-double-left" aria-hidden="true"></span>
                                <span class="sr-only"> {{ 'lang.Previous' }} </span>
                            </a>
                        </li>
                        @foreach ($matches->getUrlRange(1, $matches->lastPage()) as $pageLink)
                            @php

                                $pageString = strstr($pageLink, 'page=', false);
                                $rev = strrev($pageString);
                                $pageNum = strstr($rev, '=', true);
                                $pageNum = strrev($pageNum);
                            @endphp
                            <li class="page-item {{ substr($pageLink, -1) == $matches->currentPage() ? 'active' : '' }}">
                                <a class="page-link" href="{{ $pageLink }}">{{ $pageNum }}
                                </a>
                            </li>
                        @endforeach
                        <li class="page-item {{ $matches->currentPage() == $matches->lastPage() ? 'disabled' : '' }}">
                            <a class="page-link" href="{{ $matches->nextPageUrl() }}" aria-label="Next">
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
        document.querySelectorAll('.delete-match').forEach(btn => {
            btn.addEventListener('click', function(e) {
                const Action = confirm('are you sure you want to delete');
                if (!Action) e.preventDefault();
            })
        })
    </script>
@endsection

@endsection

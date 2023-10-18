@extends('adminlte::page')
@section('content')
    @if (session()->has('success'))
        <div class="alert alert-success">{{ session()->get('success') }}</div>
    @endif
    @if (session()->has('updated'))
        <div class="alert alert-success">{{ session()->get('updated') }}</div>
    @endif
    <a href="{{ route('entertainment.create') }}" class="btn btn-primary">Create record</a>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">Name</th>
                <th scope="col">title</th>
                <th scope="col">description</th>
                <th scope="col">location</th>
                <th scope="col">image</th>
                <th scope="col">Status</th>
                <th scope="col">Actions..</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($entertainments as $entertainment)
                <tr>
                    <th scope="row">{{ $entertainment->id }}</th>
                    <td>{{ $entertainment->name }}</td>
                    <td>{{ $entertainment->title }}</td>
                    <td>{{ $entertainment->description }}</td>
                    <td> <a target="_blank" href="{{ $entertainment->location }}">
                            <img style="height: 40px; width: auto;" src="{{ asset('assets/images/googlemap.png') }}" alt>
                        </a>
                    </td>
                    <td>
                        <img src="{{ !empty($entertainment->image) ?
                        asset('assets/images/entertainments/' . $entertainment->image)
                        :
                        asset('assets/images/entertainments/defaultEntertainment.jpg') }}"
                        alt="" width="80">
                    </td>
                    <td>{{ $entertainment->status == 1 ? 'Shown' : 'Hidden' }}</td>
                    <td style="display: flex">
                        <form action="{{ route('entertainment.destroy', $entertainment) }}" method="POST">
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="btn btn-danger delete-entertainment"><i
                                    class="fas fa-trash-alt"></i></button>
                        </form>
                        <a href="{{ route('entertainment.edit', $entertainment) }}" class="btn btn-warning"><i
                                class="fas fa-edit"></i></a>
                    </td>
                </tr>
            @endforeach

        </tbody>
    </table>


    <div class="row">
        <div class="col-12 mt-5">
            @if ($entertainments->hasPages())
                <nav aria-label="Page navigation">
                    <ul class="pagination justify-content-center">
                        <li class="page-item {{ $entertainments->currentPage() == 1 ? 'disabled' : '' }}">
                            <a class="page-link" href="{{ $entertainments->previousPageUrl() }}" aria-label="Previous">
                                <span class="fa fa-angle-double-left" aria-hidden="true"></span>
                                <span class="sr-only"> {{ 'lang.Previous' }} </span>
                            </a>
                        </li>
                        @foreach ($entertainments->getUrlRange(1, $entertainments->lastPage()) as $pageLink)
                            @php

                                $pageString = strstr($pageLink, 'page=', false);
                                $rev = strrev($pageString);
                                $pageNum = strstr($rev, '=', true);
                                $pageNum = strrev($pageNum);
                            @endphp
                            <li class="page-item {{ substr($pageLink, -1) == $entertainments->currentPage() ? 'active' : '' }}">
                                <a class="page-link" href="{{ $pageLink }}">{{ $pageNum }}
                                </a>
                            </li>
                        @endforeach
                        <li class="page-item {{ $entertainments->currentPage() == $entertainments->lastPage() ? 'disabled' : '' }}">
                            <a class="page-link" href="{{ $entertainments->nextPageUrl() }}" aria-label="Next">
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
        document.querySelectorAll('.delete-entertainment').forEach(btn => {
            btn.addEventListener('click', function(e) {
                const Action = confirm('are you sure you want to delete');
                if (!Action) e.preventDefault();
            })
        })
    </script>
@endsection

@endsection

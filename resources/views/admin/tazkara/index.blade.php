@extends('adminlte::page')
@section('content')

    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">tazkara</th>
                <th scope="col">Match \ Stadium Name</th>
                <th scope="col">Entertainment Name</th>
                {{-- add user details for the tazkara
                    user name
                    event name or match
                    --}}

            </tr>
        </thead>
        <tbody>
            @foreach ($tazkaras as $tazkara)
                <tr>
                    <th scope="row">{{ $tazkara->id }}</th>
                    <td>{{ $tazkara->tazkara }}</td>
                    <td>{{ $tazkara->match->stadium->name }}</td>
                    <td>{{ $tazkara->entertainment?->title }}</td>
                </tr>
            @endforeach
           

        </tbody>
    </table>


    <div class="row">
        <div class="col-12 mt-5">
            @if ($tazkaras->hasPages())
                <nav aria-label="Page navigation">
                    <ul class="pagination justify-content-center">
                        <li class="page-item {{ $tazkaras->currentPage() == 1 ? 'disabled' : '' }}">
                            <a class="page-link" href="{{ $tazkaras->previousPageUrl() }}" aria-label="Previous">
                                <span class="fa fa-angle-double-left" aria-hidden="true"></span>
                                <span class="sr-only"> {{ 'lang.Previous' }} </span>
                            </a>
                        </li>
                        @foreach ($tazkaras->getUrlRange(1, $tazkaras->lastPage()) as $pageLink)
                            @php

                                $pageString = strstr($pageLink, 'page=', false);
                                $rev = strrev($pageString);
                                $pageNum = strstr($rev, '=', true);
                                $pageNum = strrev($pageNum);
                            @endphp
                            <li class="page-item {{ substr($pageLink, -1) == $tazkaras->currentPage() ? 'active' : '' }}">
                                <a class="page-link" href="{{ $pageLink }}">{{ $pageNum }}
                                </a>
                            </li>
                        @endforeach
                        <li class="page-item {{ $tazkaras->currentPage() == $tazkaras->lastPage() ? 'disabled' : '' }}">
                            <a class="page-link" href="{{ $tazkaras->nextPageUrl() }}" aria-label="Next">
                                <span class="fa fa-angle-double-right" aria-hidden="true"></span>
                                <span class="sr-only"> {{ 'lang.Next' }} </span>
                            </a>
                        </li>
                    </ul>
                </nav>
            @endif
            
        </div>
    </div>



@endsection

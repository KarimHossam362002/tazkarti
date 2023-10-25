@extends('adminlte::page')
@section('content')
@if (session()->has('success'))
<div class="alert alert-success">{{ session()->get('success') }}</div>
@endif
@if (session()->has('updated'))
<div class="alert alert-success">{{ session()->get('updated') }}</div>
@endif
<a href="{{ route('team.create') }}" class="btn btn-primary">Create record</a>
    <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">id</th>
            <th scope="col">Team Name</th>
            {{-- <th scope="col">Sub Title</th> --}}
            <th scope="col">Team Logo</th>
            <th scope="col">Tournment Name</th>
            {{-- <th scope="col">Status</th> --}}
            <th scope="col">Actions..</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($teams as $team )
            <tr>
                <th scope="row">{{ $team->id }}</th>
               <td>{{ $team->team_name }}</td>
                {{-- <td>{{ $team->sub_title }}</td> --}}
                {{-- @dd($team->image) --}}
                <td>
                    <img src="{{ !empty($team->team_logo) ?
                    asset('assets/images/teams/' . $team->team_logo)
                    :
                    asset('assets/images/teams/defaultTeam.png') }}"
                    alt="" width="80">
                </td>
                <td>{{ $team->tournment?->tournment_name }}</td>
                {{-- <td>{{ $team->status == 1 ? "Shown":"Hidden" }}</td> --}}
                <td style="display: flex">
                    <form action="{{ route('team.destroy' , $team->id) }}" method="POST">
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="btn btn-danger delete-team"><i class="fas fa-trash-alt"></i></button>
                    </form>
                    <a href="{{ route('team.edit' , $team->id) }}" class="btn btn-warning"><i class="fas fa-edit"></i></a>
                </td>
              </tr>
            @endforeach

        </tbody>
      </table>


        <div class="row">
            <div class="col-12 mt-5">
                @if ($teams->hasPages())
                    <nav aria-label="Page navigation">
                        <ul class="pagination justify-content-center">
                        <li class="page-item {{ $teams->currentPage() == 1 ? 'disabled' : '' }}">
                            <a class="page-link" href="{{ $teams->previousPageUrl() }}" aria-label="Previous">
                            <span class="fa fa-angle-double-left" aria-hidden="true"></span>
                            <span class="sr-only"> {{ ('lang.Previous') }} </span>
                            </a>
                        </li>
                        @foreach ( $teams->getUrlRange(1, $teams->lastPage()) as $pageLink)
                        @php

                            $pageString = strstr($pageLink, 'page=' , false);
                            $rev = strrev($pageString);
                            $pageNum = strstr($rev, '=' , true);
                            $pageNum = strrev($pageNum);
                        @endphp
                            <li class="page-item {{ substr($pageLink, -1) == $teams->currentPage() ? 'active': '' }}">
                                <a class="page-link" href="{{ $pageLink }}">{{ $pageNum }}
                                </a>
                            </li>
                        @endforeach
                        <li class="page-item {{  $teams->currentPage() == $teams->lastPage() ? 'disabled' : '' }}">
                            <a class="page-link" href="{{ $teams->nextPageUrl() }}" aria-label="Next">
                            <span class="fa fa-angle-double-right" aria-hidden="true"></span>
                            <span class="sr-only"> {{ ('lang.Next') }} </span>
                        </a>
                        </li>
                        </ul>
                    </nav>
                @endif
                </div>
        </div>



@section('js')
<script>
    document.querySelectorAll('.delete-team').forEach(btn => {
        btn.addEventListener('click', function(e) {
            const Action = confirm('are you sure you want to delete');
            if (!Action) e.preventDefault();
        })
    })
</script>
@endsection

@endsection

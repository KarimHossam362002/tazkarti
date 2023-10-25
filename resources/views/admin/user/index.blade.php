@extends('adminlte::page')
@section('content')
{{-- @if (session()->has('success'))
<div class="alert alert-success">{{ session()->get('success') }}</div>
@endif
@if (session()->has('updated'))
<div class="alert alert-success">{{ session()->get('updated') }}</div>
@endif --}}
{{-- <a href="{{ route('category.create') }}" class="btn btn-primary">Create record</a> --}}
    <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">id</th>
            <th scope="col">name</th>
            <th scope="col">email</th>
            <th scope="col">Image</th>
            {{-- <th scope="col">Status</th> --}}
            {{-- <th scope="col">Actions..</th> --}}
          </tr>
        </thead>
        <tbody>
            @foreach ($users as $user )
            <tr>
                <th scope="row">{{ $user->id }}</th>
               <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                {{-- @dd($user->image) --}}
                <td>
                    <img src="{{ !empty($user->image) ?
                    asset('assets/images/users/' . $user->image)
                    :
                    asset('assets/images/users/defaultUser.jpg') }}"
                    alt="" width="80">
                </td>
                {{-- <td>{{ $user->status == 1 ? "Shown":"Hidden" }}</td> --}}
                {{-- <td style="display: flex">
                    <form action="{{ route('user.destroy' , $user->id) }}" method="POST">
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="btn btn-danger delete-user"><i class="fas fa-trash-alt"></i></button>
                    </form>
                    <a href="{{ route('user.edit' , $category->id) }}" class="btn btn-warning"><i class="fas fa-edit"></i></a>
                </td> --}}
              </tr>
            @endforeach

        </tbody>
      </table>


        <div class="row">
            <div class="col-12 mt-5">
                @if ($users->hasPages())
                    <nav aria-label="Page navigation">
                        <ul class="pagination justify-content-center">
                        <li class="page-item {{ $users->currentPage() == 1 ? 'disabled' : '' }}">
                            <a class="page-link" href="{{ $users->previousPageUrl() }}" aria-label="Previous">
                            <span class="fa fa-angle-double-left" aria-hidden="true"></span>
                            <span class="sr-only"> {{ ('lang.Previous') }} </span>
                            </a>
                        </li>
                        @foreach ( $users->getUrlRange(1, $users->lastPage()) as $pageLink)
                        @php

                            $pageString = strstr($pageLink, 'page=' , false);
                            $rev = strrev($pageString);
                            $pageNum = strstr($rev, '=' , true);
                            $pageNum = strrev($pageNum);
                        @endphp
                            <li class="page-item {{ substr($pageLink, -1) == $users->currentPage() ? 'active': '' }}">
                                <a class="page-link" href="{{ $pageLink }}">{{ $pageNum }}
                                </a>
                            </li>
                        @endforeach
                        <li class="page-item {{  $users->currentPage() == $users->lastPage() ? 'disabled' : '' }}">
                            <a class="page-link" href="{{ $users->nextPageUrl() }}" aria-label="Next">
                            <span class="fa fa-angle-double-right" aria-hidden="true"></span>
                            <span class="sr-only"> {{ ('lang.Next') }} </span>
                        </a>
                        </li>
                        </ul>
                    </nav>
                @endif
                </div>
        </div>


{{-- 
@section('js')
<script>
    document.querySelectorAll('.delete-user').forEach(btn => {
        btn.addEventListener('click', function(e) {
            const Action = confirm('are you sure you want to delete');
            if (!Action) e.preventDefault();
        })
    })
</script>
@endsection --}}

@endsection

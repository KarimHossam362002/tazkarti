@extends('adminlte::page')
@section('content')
@if (session()->has('success'))
<div class="alert alert-success">{{ session()->get('success') }}</div>
@endif
@if (session()->has('updated'))
<div class="alert alert-success">{{ session()->get('updated') }}</div>
@endif
<a href="{{ route('store.create') }}" class="btn btn-primary">Create record</a>
    <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">id</th>
            <th scope="col">Outlet Name</th>
            <th scope="col">City</th>
            <th scope="col">District</th>
            <th scope="col">Address</th>
            <th scope="col">Status</th>
            <th scope="col">Dedicated To</th>
            <th scope="col">Actions..</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($stores as $store )
            <tr>
                <th scope="row">{{ $store->id }}</th>
               <td>{{ $store->outlet_name }}</td>
                <td>{{ $store->city }}</td>
                <td>{{ $store->district }}</td>
                <td>{{ $store->address }}</td>


                <td>{{ $store->status == 1 ? "Shown":"Hidden" }}</td>
                <td>{{ $store->dedicated_to == 1 ? "Entertainment":"Match" }}</td>
                <td style="display: flex">
                    <form action="{{ route('store.destroy' , $store->id) }}" method="POST">
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="btn btn-danger delete-store"><i class="fas fa-trash-alt"></i></button>
                    </form>
                    <a href="{{ route('store.edit' , $store->id) }}" class="btn btn-warning"><i class="fas fa-edit"></i></a>
                </td>
              </tr>
            @endforeach

        </tbody>
      </table>


        <div class="row">
            <div class="col-12 mt-5">
                @if ($stores->hasPages())
                    <nav aria-label="Page navigation">
                        <ul class="pagination justify-content-center">
                        <li class="page-item {{ $stores->currentPage() == 1 ? 'disabled' : '' }}">
                            <a class="page-link" href="{{ $stores->previousPageUrl() }}" aria-label="Previous">
                            <span class="fa fa-angle-double-left" aria-hidden="true"></span>
                            <span class="sr-only"> {{ ('lang.Previous') }} </span>
                            </a>
                        </li>
                        @foreach ( $stores->getUrlRange(1, $stores->lastPage()) as $pageLink)
                        @php

                            $pageString = strstr($pageLink, 'page=' , false);
                            $rev = strrev($pageString);
                            $pageNum = strstr($rev, '=' , true);
                            $pageNum = strrev($pageNum);
                        @endphp
                            <li class="page-item {{ substr($pageLink, -1) == $stores->currentPage() ? 'active': '' }}">
                                <a class="page-link" href="{{ $pageLink }}">{{ $pageNum }}
                                </a>
                            </li>
                        @endforeach
                        <li class="page-item {{  $stores->currentPage() == $stores->lastPage() ? 'disabled' : '' }}">
                            <a class="page-link" href="{{ $stores->nextPageUrl() }}" aria-label="Next">
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
    document.querySelectorAll('.delete-store').forEach(btn => {
        btn.addEventListener('click', function(e) {
            const Action = confirm('are you sure you want to delete');
            if (!Action) e.preventDefault();
        })
    })
</script>
@endsection

@endsection

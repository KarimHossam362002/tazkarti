@extends('adminlte::page')
@section('content')
@if (session()->has('success'))
<div class="alert alert-success">{{ session()->get('success') }}</div>
@endif
@if (session()->has('updated'))
<div class="alert alert-success">{{ session()->get('updated') }}</div>
@endif
<a href="{{ route('category.create') }}" class="btn btn-primary">Create record</a>
    <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">id</th>
            <th scope="col">Title</th>
            <th scope="col">Sub Title</th>
            <th scope="col">Image</th>
            <th scope="col">Status</th>
            <th scope="col">Actions..</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($categories as $category )
            <tr>
                <th scope="row">{{ $category->id }}</th>
               <td>{{ $category->title }}</td>
                <td>{{ $category->sub_title }}</td>
                {{-- @dd($category->image) --}}
                <td>
                    <img src="{{ !empty($category->image) ?
                    asset('assets/images/categories/' . $category->image)
                    :
                    asset('assets/images/categories/defaultCategory.jpg') }}"
                    alt="" width="80">
                </td>
                <td>{{ $category->status == 1 ? "Shown":"Hidden" }}</td>
                <td style="display: flex">
                    <form action="{{ route('category.destroy' , $category->id) }}" method="POST">
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="btn btn-danger delete-category"><i class="fas fa-trash-alt"></i></button>
                    </form>
                    <a href="{{ route('category.edit' , $category->id) }}" class="btn btn-warning"><i class="fas fa-edit"></i></a>
                </td>
              </tr>
            @endforeach

        </tbody>
      </table>


        <div class="row">
            <div class="col-12 mt-5">
                @if ($categories->hasPages())
                    <nav aria-label="Page navigation">
                        <ul class="pagination justify-content-center">
                        <li class="page-item {{ $categories->currentPage() == 1 ? 'disabled' : '' }}">
                            <a class="page-link" href="{{ $categories->previousPageUrl() }}" aria-label="Previous">
                            <span class="fa fa-angle-double-left" aria-hidden="true"></span>
                            <span class="sr-only"> {{ ('lang.Previous') }} </span>
                            </a>
                        </li>
                        @foreach ( $categories->getUrlRange(1, $categories->lastPage()) as $pageLink)
                        @php

                            $pageString = strstr($pageLink, 'page=' , false);
                            $rev = strrev($pageString);
                            $pageNum = strstr($rev, '=' , true);
                            $pageNum = strrev($pageNum);
                        @endphp
                            <li class="page-item {{ substr($pageLink, -1) == $categories->currentPage() ? 'active': '' }}">
                                <a class="page-link" href="{{ $pageLink }}">{{ $pageNum }}
                                </a>
                            </li>
                        @endforeach
                        <li class="page-item {{  $categories->currentPage() == $categories->lastPage() ? 'disabled' : '' }}">
                            <a class="page-link" href="{{ $categories->nextPageUrl() }}" aria-label="Next">
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
    document.querySelectorAll('.delete-category').forEach(btn => {
        btn.addEventListener('click', function(e) {
            const Action = confirm('are you sure you want to delete');
            if (!Action) e.preventDefault();
        })
    })
</script>
@endsection

@endsection

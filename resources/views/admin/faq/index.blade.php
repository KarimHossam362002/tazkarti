@extends('adminlte::page')
@section('content')
@if (session()->has('success'))
<div class="alert alert-success">{{ session()->get('success') }}</div>
@endif
@if (session()->has('updated'))
<div class="alert alert-success">{{ session()->get('updated') }}</div>
@endif
<a href="{{ route('faq.create') }}" class="btn btn-primary">Create record</a>
    <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">id</th>
            <th scope="col">Question</th>
            <th scope="col">Answer</th>
            <th scope="col">Status</th>
            <th scope="col">Actions..</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($faqs as $faq )
            <tr>
                <th scope="row">{{ $faq->id }}</th>
               <td>{{ $faq->question }}</td>
                <td>{{ $faq->answer }}</td>


                <td>{{ $faq->status == 1 ? "Shown":"Hidden" }}</td>
                <td style="display: flex">
                    <form action="{{ route('faq.destroy' , $faq->id) }}" method="POST">
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="btn btn-danger delete-faq"><i class="fas fa-trash-alt"></i></button>
                    </form>
                    <a href="{{ route('faq.edit' , $faq->id) }}" class="btn btn-warning"><i class="fas fa-edit"></i></a>
                </td>
              </tr>
            @endforeach

        </tbody>
      </table>


        <div class="row">
            <div class="col-12 mt-5">
                @if ($faqs->hasPages())
                    <nav aria-label="Page navigation">
                        <ul class="pagination justify-content-center">
                        <li class="page-item {{ $faqs->currentPage() == 1 ? 'disabled' : '' }}">
                            <a class="page-link" href="{{ $faqs->previousPageUrl() }}" aria-label="Previous">
                            <span class="fa fa-angle-double-left" aria-hidden="true"></span>
                            <span class="sr-only"> {{ ('lang.Previous') }} </span>
                            </a>
                        </li>
                        @foreach ( $faqs->getUrlRange(1, $faqs->lastPage()) as $pageLink)
                        @php

                            $pageString = strstr($pageLink, 'page=' , false);
                            $rev = strrev($pageString);
                            $pageNum = strstr($rev, '=' , true);
                            $pageNum = strrev($pageNum);
                        @endphp
                            <li class="page-item {{ substr($pageLink, -1) == $faqs->currentPage() ? 'active': '' }}">
                                <a class="page-link" href="{{ $pageLink }}">{{ $pageNum }}
                                </a>
                            </li>
                        @endforeach
                        <li class="page-item {{  $faqs->currentPage() == $faqs->lastPage() ? 'disabled' : '' }}">
                            <a class="page-link" href="{{ $faqs->nextPageUrl() }}" aria-label="Next">
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
    document.querySelectorAll('.delete-faq').forEach(btn => {
        btn.addEventListener('click', function(e) {
            const Action = confirm('are you sure you want to delete');
            if (!Action) e.preventDefault();
        })
    })
</script>
@endsection

@endsection

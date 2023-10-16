@extends('adminlte::page')
@section('content')

    @if (session()->has('success'))
    <div class="alert alert-success">{{ session()->get('success') }}</div>
    @endif

    <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">id</th>
            <th scope="col">Subject</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Phone</th>
            <th scope="col">Message</th>
            <th scope="col">Actions..</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($contacts as $contact )
            <tr>
                <th scope="row">{{ $contact->id }}</th>
               <td>{{ $contact->subject }}</td>
                <td>{{ $contact->name }}</td>
                <td>{{ $contact->email }}</td>
                <td>{{ $contact->phone }}</td>
                <td>{{ $contact->message }}</td>
                <td style="display: flex">
                    <form action="{{ route('contact.destroy' , $contact->id) }}" method="POST">
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="btn btn-danger delete-contact"><i class="fas fa-trash-alt"></i></button>
                    </form>
                    
                </td>
              </tr>
            @endforeach

        </tbody>
      </table>


        <div class="row">
            <div class="col-12 mt-5">
                @if ($contacts->hasPages())
                    <nav aria-label="Page navigation">
                        <ul class="pagination justify-content-center">
                        <li class="page-item {{ $contacts->currentPage() == 1 ? 'disabled' : '' }}">
                            <a class="page-link" href="{{ $contacts->previousPageUrl() }}" aria-label="Previous">
                            <span class="fa fa-angle-double-left" aria-hidden="true"></span>
                            <span class="sr-only"> {{ ('lang.Previous') }} </span>
                            </a>
                        </li>
                        @foreach ( $contacts->getUrlRange(1, $contacts->lastPage()) as $pageLink)
                        @php

                            $pageString = strstr($pageLink, 'page=' , false);
                            $rev = strrev($pageString);
                            $pageNum = strstr($rev, '=' , true);
                            $pageNum = strrev($pageNum);
                        @endphp
                            <li class="page-item {{ substr($pageLink, -1) == $contacts->currentPage() ? 'active': '' }}">
                                <a class="page-link" href="{{ $pageLink }}">{{ $pageNum }}
                                </a>
                            </li>
                        @endforeach
                        <li class="page-item {{  $contacts->currentPage() == $contacts->lastPage() ? 'disabled' : '' }}">
                            <a class="page-link" href="{{ $contacts->nextPageUrl() }}" aria-label="Next">
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
    document.querySelectorAll('.delete-contact').forEach(btn => {
        btn.addEventListener('click', function(e) {
            const Action = confirm('are you sure you want to delete');
            if (!Action) e.preventDefault();
        })
    })
</script>
@endsection

@endsection

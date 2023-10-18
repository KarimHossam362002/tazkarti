@extends('second')
@section('title , Tazkarti |FAQ')
@section('content')
 <!-- main body -->
 <main>
    <h1 class="title">Frequently Asked Questions</h1>
    <div class="container">
        <section>
            @foreach ($faqs as $faq )
            <div class="faq">
                <div class="question">
                    <h3>{{ $faq->question }}</h3>
                    <svg width="15" height="10" viewBox="0 0 42 25">
                        <path d="M3 3L21 21L39 3" stroke="white"
                            stroke-width="7" stroke-linecap="round" />
                    </svg>
                </div>
                <div class="answer">
                    <p>{{$faq->answer}}</p>
                </div>
            </div>
            @endforeach

            {{-- <div class="faq">
                <div class="question">
                    <h3>How much does a Tazkarti ID cost?</h3>
                    <svg width="15" height="10" viewBox="0 0 42 25">
                        <path d="M3 3L21 21L39 3" stroke="white"
                            stroke-width="7" stroke-linecap="round" />
                    </svg>

                </div>
                <div class="answer">
                    <p>It costs 100 Egyptian pounds to obtain
                        Tazkarti ID. However, to get Tazkarti ID,
                        you must purchase a ticket.

                    </p>
                </div>
            </div> --}}
        </section>
    </div>
    <p class="info_line">For any further information or inquiries contact us at our hotline 15355.</p>
</main>
<!-- main body -->
@endsection

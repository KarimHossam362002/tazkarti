@extends("second")
@section("title,'Tazkarti | About")
@section('content')
 <!-- main body -->
 <main>

    <div class="container">
        <h3 class="about_title">{{ __('messages.about_title') }}</h3>
        <p class="about_description">{{__('messages.about_description_1')}}</p>
        <p class="about_description">{{__('messages.about_description_2')}}</p>
        <div class="about_section">
            <p class="about_section_title">{{ __('messages.vision') }}</p>
            <p class="about_section_description">{{__('messages.vision_description')}}</p>
        </div>
        <div class="about_section">
            <p class="about_section_title">{{ __('messages.mission') }}</p>
            <p class="about_section_description">{{__("messages.mission_description")}}</p>
        </div>
        <div class="about_section">
            <p class="about_section_title">{{ __('messages.our_values') }}</p>
            <ul>
                <li
                    style="list-style-type: square; margin-right:10px ;">{{__('messages.our_values_li_1')}}</li>
                <li
                    style="list-style-type: square; margin-right:10px ;">{{__('messages.our_values_li_2')}}</li>
                <li
                    style="list-style-type: square; margin-right:10px ;">{{__('messages.our_values_li_3')}}</li>
                <li
                    style="list-style-type: square; margin-right:10px ;">{{__('messages.our_values_li_4')}}</li>
            </ul>
        </div>
        <p class="about_description">{{__('messages.about_footer_description')}}</p>
    </div>

</main>
<!-- main body -->
@endsection

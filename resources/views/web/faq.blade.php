@extends('layouts.web')

@section('title')
Frequently Asked Questions | Choice Accountants Australia
@endsection

@section('meta')
@show

@section('style')
@endsection

@section('content')
<header class="l-header">
    <div class="container-fluid">
        <div class="row no-gutters">
            <div class="col-xl-8 padding-xl-120-180 relative bg-purple">
                <div class="content content--extra-large-text zindex-3 relative">
                    <h1 class="headline-2"> FAQs </h1>
                    <p> If you have any questions that we haven’t covered here, please contact us and we’ll do the best we can
                        to answer them. </p>
                </div>
                <div class="bg-shape quater-border-filled gradient-3 top left size-120 rotate-180 color-white">
                    <div class=" bg-shape__inner animation-rotateLeft90 mobile-no-animation"> </div>
                </div>
                <div class="bg-shape quater-border-filled gradient-3 bottom right size-120 color-white">
                    <div class=" bg-shape__inner animation-rotateLeft90 mobile-no-animation"> </div>
                </div>
            </div>
            <div class="col-xl-4 d-none d-xl-block padding-xl relative bg-purple2">
                <div class="bg-shape quater-border-double bottom left size-120 rotate-90 color-white" data-animation-delay="400">
                    <div class=" bg-shape__inner animation-rotateLeft90 mobile-no-animation"> </div>
                </div>
                <div class="bg-shape size-300 quater-filled gradient-1 top right rotate-270 color-white">
                    <div class=" bg-shape__inner animation-rotateLeft90 mobile-no-animation" data-animation-delay="400"> </div>
                </div>
            </div>
        </div>
    </div>
</header>

<main class="l-main">
    <div class="section">
        <div class="bg-shape full-border-single color-purple size-180 center-left-outside">
            <div class="bg-shape__inner"></div>
        </div>
        <div class="bg-shape full-border-single color-purple size-180 center-right-outside">
            <div class="bg-shape__inner"></div>
        </div>
        <div class="container-m zindex-3">
            <div class="row">
                <div class="col-xl-12">
                    <ul class="expanding-list bg-lightOffWhite js-load-more-container">
                        @foreach($faqs as $faq)
                        <li class="expanding-list__item">
                            <button class="expanding-list__btn js-expand-btn">
                                <span class="expanding-list__headline headline-5 color-black">{{$faq->question}}</span> <span type="button" class="expanding-list__icon "></span> </button>
                            <div class="expanding-list__content content" style="display: none">
                                @if($faq->answer)
                                <p style="white-space:pre-line;">{{$faq->answer}}
                                </p>
                                @endif
                                @if($faq->answer2)
                                <ul>
                                    <?php
                                    $answerArray = explode('.', $faq->answer2);
                                    ?>
                                    @foreach ($answerArray as $answer)
                                    @if (!$loop->last)
                                    <li>{{ $answer }}.</li>
                                    @endif
                                    @endforeach
                                </ul>
                                @endif
                                @if($faq->flag == "Yes")
                                <p><span> <a href="{{url('/get-in-touch')}}" target="_blank" class="btn btn--primary">Speak to one of our specialists here.</a></span></p>
                                @endif
                            </div>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection

@section('scripts')
@endsection
@extends('layouts.web')

@section('title')
Blogs & Insights | Choice Accountants
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
                    <h1 class="headline-2"> Blogs & Insights </h1>
                    <!-- <p> If you have any questions that we haven’t covered here, please contact us and we’ll do the best we can
                        to answer them. </p> -->
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
    <div class="section section--p">
        <div class="container">
            <div class="row row--g-24">
                @foreach($allblogs as $blog)
                <a href="{{ url('/' . $blog->slug) }}" title="{{$blog->title}}" class="block block--insight link-hover col-md-6 col-xl-4">
                    <picture class=" block__image-frame ">
                        <img class="block__image" width="5760" height="3713" src="/{{$blog->image}}" onerror="this.onerror=null;this.src='/assets/media/blankimg.svg'" alt="{{$blog->imgAlt}}">
                    </picture>
                    @if(isset($blog->service))
                    <p class="block__preheadline"> {{$blog->service->name}} </p>
                    @else
                    <p class="block__preheadline"> {{$blog->serviceId}} </p>
                    @endif
                    <div class="block__title-wrap">
                        <h2 class="block__headline headline-5"> <span class="link-hover__text">{{$blog->title}}</span> </h2>
                        <svg class="block__icon link-hover__arrow" width="28" height="24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 61.21 53.63">
                            <g id="Icon_feather-arrow-down" data-name="Icon feather-arrow-down">
                                <path id="horizontal-line" data-name="horizontal-line" d="M2,26.82H59.21" fill="none" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Path_33" data-name="Path 33" d="M34.43,2.83l24.78,23.99-24.78,23.99" fill="none" stroke-linecap="round" stroke-linejoin="round" />
                            </g>
                        </svg>
                    </div> <time class="block_time small-text" datetime="2023-06-29 00:00:00"> {{ \Carbon\Carbon::parse($blog->created_at)->format('jS F Y') }} </time>
                </a>
                @endforeach
            </div>
        </div>
    </div>
</main>
@endsection

@section('scripts')
@endsection
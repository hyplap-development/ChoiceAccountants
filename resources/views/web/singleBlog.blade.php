@extends('layouts.web')

@section('title')
{{$blog->title}} | Choice Accountants Australia
@endsection

@section('meta')
@show

@section('style')
@endsection

@section('content')
<main>
    <header class="l-header">
        <div class="container-fluid">
            <div class="row no-gutters">
                <div class="order-lg-2 col-lg-8 bg-purple padding-blog">
                    <div class="grid__col-content zindex-3 relative mx-width-720">
                        <div class="breadcrumbs ">
                            <ul>
                                <li><a href="{{url('/blog')}}">Blog</a></li>
                                <li>{{$blog->subtitle}}</li>
                            </ul>
                        </div>
                        <h1 class="headline-2 mb-5em"> {{$blog->subtitle}}
                        </h1>
                        <div class="flex-container">
                            @if($blog->writer)
                            <div class="d-inline-flex align-items-center"> <svg class="fill-white" width="20" height="20" aria-label="Author">
                                    <use xmlns:xlink="http://www.w3.org/1999/xlink" href="/web/images/icons.svg#icon-author"> </use>
                                </svg> <span class="ml-10em normal-text"> {{$blog->writer}} </span> 
                            </div>
                            @endif
                            <div class="d-inline-flex align-items-center"> <svg class="fill-white" width="20" height="20" aria-label="Published at">
                                    <use xmlns:xlink="http://www.w3.org/1999/xlink" href="/web/images/icons.svg#icon-date"> </use>
                                </svg> <time class="ml-10em normal-text" datetime="2022-10-26 00:00:00"> {{ \Carbon\Carbon::parse($blog->created_at)->format('jS F Y') }} </time>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=" order-lg-1 col-lg-4 relative">
                    <picture class=" frame frame--image-covered frame--landscape-larger-mobile frame--landscape-tablet ">
                        <img class="frame__media" width="1772" height="1772" decoding="async" src="/{{$blog->image}}" onerror="this.onerror=null;this.src='/assets/media/blankimg.svg'" alt="{{$blog->imgAlt}}">
                    </picture>
                </div>
            </div>
        </div>
    </header>
    <section class="section section--blog">
        <div class="container-blog-xs content">
            <p style="text-align: justify; white-space:pre-line;">
                {{$blog->description1}}
                <br>
                {{$blog->description2}}
            </p>
        </div>
    </section>
</main>
@endsection

@section('scripts')
@endsection
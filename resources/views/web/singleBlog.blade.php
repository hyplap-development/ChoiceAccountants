@extends('layouts.web')

@section('title')
{{$blog->title}} | Choice Accountants Australia
@endsection

@section('meta')
<link rel="canonical" href="{{url('our-blogs')}}/{{$blog->slug}}" />
@if(isset($blog->seo->metaTitle))
<meta name="title" content="{{ $blog->seo->metaTitle }}">
@endif
@if(isset($blog->seo->metaDescription))
<meta name="description" content="{{$blog->seo->metaDescription}}">
@endif
@if(isset($blog->seo->metaKeyword))
<meta name="keywords" content="{{$blog->seo->metaKeyword}}">
@endif
@if(isset($blog->seo->title))
<title>{{$blog->seo->title}}</title>
@endif
@if(isset($blog->seo->metaRobot))
<meta name="robots" content="{{$blog->seo->metaRobot}}">
@endif
@if(isset($blog->seo->metaAuthor))
<meta name="author" content="{{$blog->seo->metaAuthor}}">
@endif
@if(isset($blog->seo->ogTitle))
<meta property="og:title" content="{{$blog->seo->ogTitle}}">
@endif
@if(isset($blog->seo->ogDescription))
<meta property="og:description" content="{{$blog->seo->ogDescription}}">
@endif
<meta property="og:url" content="{{url('our-blogs')}}/{{$blog->slug}}">
@if(isset($blog->seo->ogImage))
<meta name="og:image" content="{{$blog->seo->ogImage}}">
@endif
@if(isset($blog->seo->twitterTitle))
<meta name="twitter:title" content="{{$blog->seo->twitterTitle}}">
@endif
@if(isset($blog->seo->twitterDescription))
<meta name="twitter:description" content="{{$blog->seo->twitterDescription}}">
@endif
@if(isset($blog->seo->twitterImage))
<meta name="twitter:image" content="{{$blog->seo->twitterImage}}">
@endif
@if(isset($blog->seo->twitterType))
<meta name="twitter:card" content="{{$blog->seo->twitterType}}">
@endif
@if(isset($blog->seo->fbogTitle))
<meta name="facebook:title" content="{{$blog->seo->fbogTitle}}">
@endif
@if(isset($blog->seo->fbogDescription))
<meta name="facebook:description" content="{{$blog->seo->fbogDescription}}">
@endif
@if(isset($blog->seo->fbogType))
<meta property="og:type" content="{{$blog->seo->fbogType}}">
@endif
@if(isset($blog->seo->fbogSiteName))
<meta property="og:site_name" content="{{$blog->seo->fbogSiteName}}">
@endif
@if(isset($blog->seo->ipTitle))
<meta itemprop="name" content="{{$blog->seo->ipTitle}}">
@endif
@if(isset($blog->seo->ipDescription))
<meta itemprop="description" content="{{$blog->seo->ipDescription}}">
@endif
@if(isset($blog->seo->dcTitle))
<meta name="DC.title" content="{{$blog->seo->dcTitle}}">
@endif
@if(isset($blog->seo->dcDescription))
<meta name="DC.description" content="{{$blog->seo->dcDescription}}">
@endif
@if(isset($blog->seo->dcCreator))
<meta name="DC.creator" content="{{$blog->seo->dcCreator}}">
@endif
@if(isset($blog->seo->schema1))
<script>
{!!$blog->seo->schema1!!}
</script>
@endif
@if(isset($blog->seo->schema2))
<script>
{!!$blog->seo->schema2!!}
</script>
@endif
@endsection

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
<!doctype html>
<html lang="en-GB">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="favicon.png">
    <title>
        @section('title')
        @show
    </title>

    @section('meta')
    @show

    <link rel="stylesheet" href="{{asset('/web/styles/main.css')}}">

    <style>
        @font-face {
            font-family: "Plus Jakarta Sans";
            font-weight: 400;
            font-style: normal;
            font-display: swap;
            src: url("fonts/PlusJakartaSans-Regular.woff2") format("woff2"), url("fonts/PlusJakartaSans-Regular.woff") format("woff")
        }

        @font-face {
            font-family: "Plus Jakarta Sans";
            font-weight: 500;
            font-style: normal;
            font-display: swap;
            src: url("fonts/PlusJakartaSans-Medium.woff2") format("woff2"), url("fonts/PlusJakartaSans-Medium.woff") format("woff")
        }

        @font-face {
            font-family: "Poppins-Medium";
            font-weight: 500;
            font-style: normal;
            font-display: swap;
            src: url("fonts/Poppins-Medium.woff2") format("woff2"), url("fonts/Poppins-Medium.woff") format("woff")
        }

        /*# sourceMappingURL=fonts.css.map */
    </style>

    <style>
        .glightbox-container {
            width: 100%;
            height: 100%;
            position: fixed;
            top: 0;
            left: 0;
            z-index: 999999 !important;
            overflow: hidden;
            -ms-touch-action: none;
            touch-action: none;
            -webkit-text-size-adjust: 100%;
            -webkit-backface-visibility: hidden;
            outline: none;
            overflow: hidden
        }

        .glightbox-container.inactive {
            display: none
        }

        .glightbox-container .gcontainer {
            position: relative;
            width: 100%;
            height: 100%;
            z-index: 9999;
            overflow: hidden
        }

        .glightbox-container .gslider {
            transition: -webkit-transform .4s ease;
            transition: transform .4s ease;
            transition: transform .4s ease, -webkit-transform .4s ease;
            transition: transform .4s ease, -webkit-transform .4s ease;
            height: 100%;
            left: 0;
            top: 0;
            width: 100%;
            position: relative;
            overflow: hidden;
            display: -ms-flexbox !important;
            display: -webkit-flex !important;
            display: flex !important;
            -ms-flex-pack: center;
            -webkit-justify-content: center;
            justify-content: center;
            -ms-flex-align: center;
            -webkit-align-items: center;
            align-items: center;
            -webkit-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0)
        }

        .glightbox-container .gslide {
            width: 100%;
            position: absolute;
            opacity: 1;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            display: -ms-flexbox;
            display: -webkit-flex;
            display: flex;
            -ms-flex-align: center;
            -webkit-align-items: center;
            align-items: center;
            -ms-flex-pack: center;
            -webkit-justify-content: center;
            justify-content: center;
            opacity: 0
        }

        .glightbox-container .gslide.current {
            opacity: 1;
            z-index: 99999;
            position: relative
        }

        .glightbox-container .gslide.prev {
            opacity: 1;
            z-index: 9999
        }

        .glightbox-container .gslide-inner-content {
            width: 100%
        }

        .glightbox-container .ginner-container {
            position: relative;
            width: 100%;
            display: -ms-flexbox;
            display: -webkit-flex;
            display: flex;
            -ms-flex-pack: center;
            -webkit-justify-content: center;
            justify-content: center;
            -ms-flex-direction: column;
            -webkit-flex-direction: column;
            flex-direction: column;
            max-width: 100%;
            margin: auto;
            height: 100vh
        }

        .glightbox-container .ginner-container.gvideo-container {
            width: 100%
        }

        .glightbox-container .ginner-container.desc-bottom,
        .glightbox-container .ginner-container.desc-top {
            -ms-flex-direction: column;
            -webkit-flex-direction: column;
            flex-direction: column
        }

        .glightbox-container .ginner-container.desc-left,
        .glightbox-container .ginner-container.desc-right {
            max-width: 100% !important
        }

        .gslide iframe,
        .gslide video {
            outline: none !important;
            border: none;
            min-height: 165px;
            -webkit-overflow-scrolling: touch;
            overflow-scrolling: touch;
            -ms-touch-action: auto;
            touch-action: auto
        }

        .gslide-image {
            -ms-flex-align: center;
            -webkit-align-items: center;
            align-items: center
        }

        .gslide-image img {
            max-height: 100vh;
            display: block;
            max-width: 100%;
            margin: 0;
            padding: 0;
            float: none;
            outline: none;
            border: none;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            max-width: 100vw;
            width: auto;
            height: auto;
            object-fit: cover;
            -ms-touch-action: none;
            touch-action: none;
            margin: auto;
            min-width: 200px
        }

        .desc-top .gslide-image img,
        .desc-bottom .gslide-image img {
            width: auto
        }

        .desc-left .gslide-image img,
        .desc-right .gslide-image img {
            width: auto;
            max-width: 100%
        }

        .gslide-image img.zoomable {
            position: relative
        }

        .gslide-image img.dragging {
            cursor: -webkit-grabbing !important;
            cursor: grabbing !important;
            transition: none
        }

        .gslide-video {
            width: 100%;
            max-width: 100%;
            position: relative;
            width: 100vh;
            max-width: 100vh;
            width: 100% !important
        }

        .gslide-video .gvideo-wrapper {
            width: 100%;
            margin: auto
        }

        .gslide-video::before {
            content: "";
            display: block;
            position: absolute;
            width: 100%;
            height: 100%;
            background: rgba(255, 0, 0, .34);
            display: none
        }

        .gslide-video.playing::before {
            display: none
        }

        .gslide-video.fullscreen {
            max-width: 100% !important;
            min-width: 100%
        }

        .gslide-video.fullscreen video {
            max-width: 100% !important;
            width: 100% !important
        }

        .gslide-inline {
            background: #fff;
            padding: 20px;
            text-align: left;
            max-height: calc(100vh - 40px);
            overflow: auto
        }

        .ginlined-content {
            overflow: auto;
            display: block !important;
            opacity: 1
        }

        .gslide-external {
            display: -ms-flexbox;
            display: -webkit-flex;
            display: flex;
            width: 100%;
            min-width: 100%;
            background: #fff;
            padding: 0;
            overflow: auto;
            max-height: 62vh
        }

        .gslide-media {
            display: block;
            display: -ms-inline-flexbox;
            display: -webkit-inline-flex;
            display: inline-flex;
            display: -ms-flexbox;
            display: -webkit-flex;
            display: flex;
            width: auto
        }

        .zoomed .gslide-media {
            box-shadow: none !important
        }

        .desc-top .gslide-media,
        .desc-bottom .gslide-media {
            margin: 0 auto;
            -ms-flex-direction: column;
            -webkit-flex-direction: column;
            flex-direction: column
        }

        .gslide-description {
            position: relative
        }

        .gslide-description.description-left,
        .gslide-description.description-right {
            max-width: 100%
        }

        .gslide-description.description-bottom,
        .gslide-description.description-top {
            margin: 0 auto;
            width: 100%
        }

        .gslide-description p {
            margin-bottom: 12px
        }

        .gslide-description p::last-child {
            margin-bottom: 0
        }

        .zoomed .gslide-description {
            display: none
        }

        .glightbox-mobile .glightbox-container .gslide-description {
            height: auto !important;
            width: 100%;
            background: transparent;
            position: absolute;
            bottom: 15px;
            padding: 19px 11px;
            max-width: 100vw !important;
            -ms-flex-order: 2 !important;
            -webkit-order: 2 !important;
            order: 2 !important;
            max-height: 78vh;
            overflow: auto !important;
            background: linear-gradient(to bottom, rgba(0, 0, 0, 0) 0%, rgba(0, 0, 0, 0.75) 100%);
            transition: opacity .3s linear;
            padding-bottom: 50px
        }

        .glightbox-mobile .glightbox-container .gslide-title {
            color: #fff;
            font-size: 1em
        }

        .glightbox-mobile .glightbox-container .gslide-desc {
            color: #a1a1a1
        }

        .glightbox-mobile .glightbox-container .gslide-desc a {
            color: #fff;
            font-weight: bold
        }

        .glightbox-mobile .glightbox-container .gslide-desc * {
            color: inherit
        }

        .glightbox-mobile .glightbox-container .gslide-desc string {
            color: #fff
        }

        .glightbox-mobile .glightbox-container .gslide-desc .desc-more {
            color: #fff;
            opacity: .4
        }

        .gdesc-open .gslide-media {
            transition: opacity .5s ease;
            opacity: .4
        }

        .gdesc-open .gdesc-inner {
            padding-bottom: 30px
        }

        .gdesc-closed .gslide-media {
            transition: opacity .5s ease;
            opacity: 1
        }

        .greset {
            transition: all .3s ease
        }

        .gabsolute {
            position: absolute
        }

        .grelative {
            position: relative
        }

        .glightbox-desc {
            display: none !important
        }

        .glightbox-open {
            overflow: hidden
        }

        .gloader {
            height: 25px;
            width: 25px;
            -webkit-animation: lightboxLoader .8s infinite linear;
            animation: lightboxLoader .8s infinite linear;
            border: 2px solid #fff;
            border-right-color: transparent;
            border-radius: 50%;
            position: absolute;
            display: block;
            z-index: 9999;
            left: 0;
            right: 0;
            margin: 0 auto;
            top: 47%
        }

        .goverlay {
            width: 100%;
            height: 100%;
            position: fixed;
            top: 0;
            left: 0;
            background: #000;
            will-change: opacity
        }

        .glightbox-mobile .goverlay {
            background: #000
        }

        .gprev,
        .gnext,
        .gclose {
            background-repeat: no-repeat;
            z-index: 99999;
            cursor: pointer;
            width: 26px;
            height: 44px;
            display: block;
            background-position: 0 0;
            border: none
        }

        .gprev svg,
        .gnext svg,
        .gclose svg {
            display: block;
            width: 100%;
            height: auto
        }

        .gprev.disabled,
        .gnext.disabled,
        .gclose.disabled {
            opacity: .1
        }

        .gprev .garrow,
        .gnext .garrow,
        .gclose .garrow {
            stroke: #fff
        }

        iframe.wait-autoplay {
            opacity: 0
        }

        .glightbox-closing .gnext,
        .glightbox-closing .gprev,
        .glightbox-closing .gclose {
            opacity: 0 !important
        }

        .glightbox-clean .gslide-description,
        .glightbox-modern .gslide-description {
            background: #fff
        }

        .glightbox-clean .gdesc-inner,
        .glightbox-modern .gdesc-inner {
            padding: 22px 20px
        }

        .glightbox-clean .gslide-title,
        .glightbox-modern .gslide-title {
            font-size: 1em;
            font-weight: normal;
            font-family: arial;
            color: #000;
            margin-bottom: 19px;
            line-height: 1.4em
        }

        .glightbox-clean .gslide-desc,
        .glightbox-modern .gslide-desc {
            font-size: .86em;
            margin-bottom: 0;
            font-family: arial;
            line-height: 1.4em
        }

        .glightbox-clean .gslide-video,
        .glightbox-modern .gslide-video {
            background: #000
        }

        .glightbox-clean .gprev,
        .glightbox-clean .gnext,
        .glightbox-clean .gclose,
        .glightbox-modern .gprev,
        .glightbox-modern .gnext,
        .glightbox-modern .gclose {
            background-color: rgba(0, 0, 0, .12)
        }

        .glightbox-clean .gprev:hover,
        .glightbox-clean .gnext:hover,
        .glightbox-clean .gclose:hover,
        .glightbox-modern .gprev:hover,
        .glightbox-modern .gnext:hover,
        .glightbox-modern .gclose:hover {
            background-color: rgba(0, 0, 0, .2)
        }

        .glightbox-clean .gprev path,
        .glightbox-clean .gnext path,
        .glightbox-clean .gclose path,
        .glightbox-modern .gprev path,
        .glightbox-modern .gnext path,
        .glightbox-modern .gclose path {
            fill: #fff
        }

        .glightbox-clean button:focus:not(.focused):not(.disabled),
        .glightbox-modern button:focus:not(.focused):not(.disabled) {
            outline: none
        }

        .glightbox-clean .gprev,
        .glightbox-modern .gprev {
            position: absolute;
            top: -100%;
            left: 30px;
            width: 40px;
            height: 56px
        }

        .glightbox-clean .gnext,
        .glightbox-modern .gnext {
            position: absolute;
            top: -100%;
            right: 30px;
            width: 40px;
            height: 56px
        }

        .glightbox-clean .gclose,
        .glightbox-modern .gclose {
            width: 35px;
            height: 35px;
            top: 15px;
            right: 10px;
            position: absolute;
            opacity: .7;
            background-position: -59px 2px
        }

        .glightbox-clean .gclose svg,
        .glightbox-modern .gclose svg {
            width: 20px
        }

        .glightbox-clean .gclose:hover,
        .glightbox-modern .gclose:hover {
            opacity: 1
        }

        .gfadeIn {
            -webkit-animation: gfadeIn .5s ease;
            animation: gfadeIn .5s ease
        }

        .gfadeOut {
            -webkit-animation: gfadeOut .5s ease;
            animation: gfadeOut .5s ease
        }

        .gslideOutLeft {
            -webkit-animation: gslideOutLeft .3s ease;
            animation: gslideOutLeft .3s ease
        }

        .gslideInLeft {
            -webkit-animation: gslideInLeft .3s ease;
            animation: gslideInLeft .3s ease
        }

        .gslideOutRight {
            -webkit-animation: gslideOutRight .3s ease;
            animation: gslideOutRight .3s ease
        }

        .gslideInRight {
            -webkit-animation: gslideInRight .3s ease;
            animation: gslideInRight .3s ease
        }

        .gzoomIn {
            -webkit-animation: gzoomIn .5s ease;
            animation: gzoomIn .5s ease
        }

        .gzoomOut {
            -webkit-animation: gzoomOut .5s ease;
            animation: gzoomOut .5s ease
        }

        @-webkit-keyframes lightboxLoader {
            0% {
                -webkit-transform: rotate(0deg);
                transform: rotate(0deg)
            }

            100% {
                -webkit-transform: rotate(360deg);
                transform: rotate(360deg)
            }
        }

        @keyframes lightboxLoader {
            0% {
                -webkit-transform: rotate(0deg);
                transform: rotate(0deg)
            }

            100% {
                -webkit-transform: rotate(360deg);
                transform: rotate(360deg)
            }
        }

        @-webkit-keyframes gfadeIn {
            from {
                opacity: 0
            }

            to {
                opacity: 1
            }
        }

        @keyframes gfadeIn {
            from {
                opacity: 0
            }

            to {
                opacity: 1
            }
        }

        @-webkit-keyframes gfadeOut {
            from {
                opacity: 1
            }

            to {
                opacity: 0
            }
        }

        @keyframes gfadeOut {
            from {
                opacity: 1
            }

            to {
                opacity: 0
            }
        }

        @-webkit-keyframes gslideInLeft {
            from {
                opacity: 0;
                -webkit-transform: translate3d(-60%, 0, 0);
                transform: translate3d(-60%, 0, 0)
            }

            to {
                visibility: visible;
                -webkit-transform: translate3d(0, 0, 0);
                transform: translate3d(0, 0, 0);
                opacity: 1
            }
        }

        @keyframes gslideInLeft {
            from {
                opacity: 0;
                -webkit-transform: translate3d(-60%, 0, 0);
                transform: translate3d(-60%, 0, 0)
            }

            to {
                visibility: visible;
                -webkit-transform: translate3d(0, 0, 0);
                transform: translate3d(0, 0, 0);
                opacity: 1
            }
        }

        @-webkit-keyframes gslideOutLeft {
            from {
                opacity: 1;
                visibility: visible;
                -webkit-transform: translate3d(0, 0, 0);
                transform: translate3d(0, 0, 0)
            }

            to {
                -webkit-transform: translate3d(-60%, 0, 0);
                transform: translate3d(-60%, 0, 0);
                opacity: 0;
                visibility: hidden
            }
        }

        @keyframes gslideOutLeft {
            from {
                opacity: 1;
                visibility: visible;
                -webkit-transform: translate3d(0, 0, 0);
                transform: translate3d(0, 0, 0)
            }

            to {
                -webkit-transform: translate3d(-60%, 0, 0);
                transform: translate3d(-60%, 0, 0);
                opacity: 0;
                visibility: hidden
            }
        }

        @-webkit-keyframes gslideInRight {
            from {
                opacity: 0;
                visibility: visible;
                -webkit-transform: translate3d(60%, 0, 0);
                transform: translate3d(60%, 0, 0)
            }

            to {
                -webkit-transform: translate3d(0, 0, 0);
                transform: translate3d(0, 0, 0);
                opacity: 1
            }
        }

        @keyframes gslideInRight {
            from {
                opacity: 0;
                visibility: visible;
                -webkit-transform: translate3d(60%, 0, 0);
                transform: translate3d(60%, 0, 0)
            }

            to {
                -webkit-transform: translate3d(0, 0, 0);
                transform: translate3d(0, 0, 0);
                opacity: 1
            }
        }

        @-webkit-keyframes gslideOutRight {
            from {
                opacity: 1;
                visibility: visible;
                -webkit-transform: translate3d(0, 0, 0);
                transform: translate3d(0, 0, 0)
            }

            to {
                -webkit-transform: translate3d(60%, 0, 0);
                transform: translate3d(60%, 0, 0);
                opacity: 0
            }
        }

        @keyframes gslideOutRight {
            from {
                opacity: 1;
                visibility: visible;
                -webkit-transform: translate3d(0, 0, 0);
                transform: translate3d(0, 0, 0)
            }

            to {
                -webkit-transform: translate3d(60%, 0, 0);
                transform: translate3d(60%, 0, 0);
                opacity: 0
            }
        }

        @-webkit-keyframes gzoomIn {
            from {
                opacity: 0;
                -webkit-transform: scale3d(0.3, 0.3, 0.3);
                transform: scale3d(0.3, 0.3, 0.3)
            }

            to {
                opacity: 1
            }
        }

        @keyframes gzoomIn {
            from {
                opacity: 0;
                -webkit-transform: scale3d(0.3, 0.3, 0.3);
                transform: scale3d(0.3, 0.3, 0.3)
            }

            to {
                opacity: 1
            }
        }

        @-webkit-keyframes gzoomOut {
            from {
                opacity: 1
            }

            50% {
                opacity: 0;
                -webkit-transform: scale3d(0.3, 0.3, 0.3);
                transform: scale3d(0.3, 0.3, 0.3)
            }

            to {
                opacity: 0
            }
        }

        @keyframes gzoomOut {
            from {
                opacity: 1
            }

            50% {
                opacity: 0;
                -webkit-transform: scale3d(0.3, 0.3, 0.3);
                transform: scale3d(0.3, 0.3, 0.3)
            }

            to {
                opacity: 0
            }
        }

        @media(min-width: 769px) {
            .glightbox-container .ginner-container {
                width: auto;
                height: auto;
                -ms-flex-direction: row;
                -webkit-flex-direction: row;
                flex-direction: row
            }

            .glightbox-container .ginner-container.desc-top .gslide-description {
                -ms-flex-order: 0;
                -webkit-order: 0;
                order: 0
            }

            .glightbox-container .ginner-container.desc-top .gslide-image,
            .glightbox-container .ginner-container.desc-top .gslide-image img {
                -ms-flex-order: 1;
                -webkit-order: 1;
                order: 1
            }

            .glightbox-container .ginner-container.desc-left .gslide-description {
                -ms-flex-order: 0;
                -webkit-order: 0;
                order: 0
            }

            .glightbox-container .ginner-container.desc-left .gslide-image {
                -ms-flex-order: 1;
                -webkit-order: 1;
                order: 1
            }

            .gslide-image img {
                max-height: 97vh;
                max-width: calc(100% - 20px);
                max-width: 100%
            }

            .gslide-image img.zoomable {
                cursor: -webkit-zoom-in;
                cursor: zoom-in
            }

            .zoomed .gslide-image img.zoomable {
                cursor: -webkit-grab;
                cursor: grab
            }

            .gslide-inline {
                max-height: 95vh
            }

            .gslide-external {
                max-height: 95vh
            }

            .gslide-description.description-left,
            .gslide-description.description-right {
                max-width: 275px
            }

            .glightbox-open {
                height: auto
            }

            .goverlay {
                background: rgba(0, 0, 0, .92)
            }

            .glightbox-clean .gslide-media,
            .glightbox-modern .gslide-media {
                box-shadow: 1px 2px 9px 0px rgba(0, 0, 0, .65)
            }

            .glightbox-clean .gprev,
            .glightbox-modern .gprev {
                top: 45%
            }

            .glightbox-clean .gnext,
            .glightbox-modern .gnext {
                top: 45%
            }
        }

        @media(min-width: 992px) {

            .glightbox-clean .gclose,
            .glightbox-modern .gclose {
                right: 20px
            }
        }

        @media screen and (max-height: 420px) {
            .goverlay {
                background: #000
            }
        }

        .gslide-media.gslide-external iframe {
            height: 55vh !important;
            min-height: 400px !important
        }
    </style>

    <style>
        fscript {
            display: none
        }
    </style>

    @section('style')
    @show

</head>

<body>
    <nav class="l-navbar js-navbar">
        <div class="l-navbar__container"> <a href="{{url('/')}}" title="Homepage" class="l-navbar__logo"> <img src="/web/images/logo.png" width="197" height="68" alt="Choice Accountants"> </a> <button type="button" class="l-navbar__burger burger js-burger" aria-label="Open menu"> <span class="burger__line"></span> </button>
            <div class="l-navbar__sidebar">
                <ul class="l-navbar__list js-menu-wrapper">
                    <li> <a href="{{url('/')}}" title="Home-choice accountants" class="l-navbar__list-link"> Home </a> </li>
                    <li> <button class="l-navbar__list-link l-navbar__list-link--dropdown js-dropdown"> <span>Our Services</span>
                            <svg href="/web/images/icons/logo.png" class="l-navbar__dropdown-icon" width="10" height="5">
                                <use xmlns:xlink="" href="/web/images/icons/logo.png"> </use>
                            </svg> </button>
                        <div class="l-navbar__dropdown">
                            <ul class="l-navbar__inner-list">
                                @foreach($departments as $department)
                                <li> <a href="{{url('/our-services')}}/{{$department->slug}}" class="l-navbar__inner-list-link" title="{{$department->name}}"> {{$department->name}} </a></li>
                                @endforeach
                            </ul>
                        </div>
                    </li>
                    <li> <button class="l-navbar__list-link l-navbar__list-link--dropdown js-dropdown"> <span>About Choice</span>
                            <svg class="l-navbar__dropdown-icon" width="10" height="5">
                                <use xmlns:xlink="" href="/web/images/icons/logo.png"> </use>
                            </svg> </button>
                        <div class="l-navbar__dropdown">
                            <ul class="l-navbar__inner-list">
                                <li> <a href="{{url('/about-choice/our-story')}}" title="Story" class="l-navbar__inner-list-link "> Story Behind Choice & Our Process </a> </li>
                                <li> <a href="{{url('/about-choice/people')}}" title="Team" class="l-navbar__inner-list-link "> Our Team </a></li>
                                <li> <a href="{{url('/about-choice/our-clients')}}" title="Clients" class="l-navbar__inner-list-link "> Our Clients </a></li>
                                <li> <a href="{{url('/faq')}}" title="FAQ" class="l-navbar__inner-list-link "> FAQ </a> </li>
                            </ul>
                        </div>
                    </li>
                    <li> <a href="about-choice/careers.html" title="career Opportunities" class="l-navbar__list-link"> Career Opportunities </a></li>
                    <li> <a href="{{url('/get-in-touch')}}" title="Contact" class="l-navbar__list-link"> Contact </a> </li>
                    <li> <a href="https://platinumaccountants.portal.accountants/login" title="Contact" class="l-navbar__list-link"> Login MYOB </a> </li>
                </ul>
            </div>
        </div>
    </nav>

    @section('content')
    @show

    <footer class="l-footer bg-purple2">
        <div class="l-footer__container">
            <div class="l-footer__logo-area bg-purple">
                <a href="{{url('/')}}" class="l-footer__logo">
                    <img src="/web/images/logo_white.png" width="287" height="70">
                </a>
                <div class="l-footer__bg-shape l-footer__bg-shape--logo bg-shape quater-border-filled gradient-3">
                    <div class="bg-shape__inner animation-rotateRight90"></div>
                </div>
            </div>
            <div class="l-footer__newsletter-area bg-pink">
                <div class="relative zindex-3">
                    <img src="/web/images/cpa.png" style="width: 20%;outline: none;">
                    <div class="mt-20em mb-20em">
                        <p> </p>
                    </div>
                    <p>Choice Accountants, is a CPA Practice. Liability limited by a scheme approved under Professional Standards Legislation</p>
                    <div class="l-footer__newsletter-form">
                        <div id="hubspot-newsletter-form"></div>
                    </div>
                </div>
                <div class="l-footer__bg-shape l-footer__bg-shape--newsletter bg-shape quater-border-double color-white">
                    <div class="bg-shape__inner animation-rotateRight90" data-animation-delay="400"></div>
                </div>
            </div>
            <div class="l-footer__list-area bg-purple2" style="padding-bottom: 0;">
                <div class="relative zindex-3">
                    <ul class="l-footer__list">
                        <li> <span class="l-footer__list-item-link">Best Services </span>
                            <ul class="l-footer__inner-list">
                                @foreach($services as $service)
                                <li> <a class="l-footer__inner-list-item-link hover-pink" href="{{url('/our-services')}}/{{$service->department->slug}}/{{$service->slug}}" title="Housing">
                                        {{$service->name}}
                                    </a>
                                </li>
                                @endforeach
                            </ul>
                        </li>
                        <li> <span class="l-footer__list-item-link"> What we do </span>
                            <ul class="l-footer__inner-list">
                                @foreach($departments as $department)
                                <li> <a class="l-footer__inner-list-item-link hover-pink" href="{{url('/our-services')}}/{{$department->slug}}" title="{{$department->name}}">{{$department->name}} </a> </li>
                                @endforeach
                            </ul>
                        </li>
                        <li> <span class="l-footer__list-item-link"> Choice </span>
                            <ul class="l-footer__inner-list">
                                <li> <a class="l-footer__inner-list-item-link hover-pink" href="{{url('/about-choice/our-story')}}" title="About"> Story
                                        Behind Choice & Our Process
                                    </a>
                                </li>
                                <li> <a class="l-footer__inner-list-item-link hover-pink" href="{{url('/about-choice/people')}}" title="Our Team"> Our
                                        Team
                                    </a>
                                </li>
                                <li> <a class="l-footer__inner-list-item-link hover-pink" href="{{url('/about-choice/our-clients')}}" title="Clients">
                                        Our Clients
                                    </a>
                                </li>

                                <li> <a class="l-footer__inner-list-item-link hover-pink" href="{{url('/faq')}}" title="Faq">
                                        FAQ
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li> <a href="{{url('/blog')}}" title="Blogs & Insights" class="l-footer__list-item-link hover-pink"> Blogs &
                                Insights </a>
                            <ul class="l-footer__inner-list">
                                @foreach($blogs as $blog)
                                <li> <a class="l-footer__inner-list-item-link hover-pink" href="{{ url('/' . $blog->slug) }}" title="{{$blog->title}}">
                                        {{$blog->title}}
                                    </a>
                                </li>
                                @endforeach
                            </ul>
                        </li>
                    </ul>

                    <div class="content content--small-text">
                        <div>
                            <a href="#" class="d-inline-block mr-30em color-white hover-pink" title="Terms &amp; Conditions">Terms &amp; Conditions</a>
                            <a href="{{url('/privacy-policy')}}" class="d-inline-block mr-30em color-white hover-pink" title="Privacy Policy"> Privacy Policy</a>
                        </div>
                        <div class=" mt-20em mb-20em">
                            <p> Choice Accountants, 51 Ernest Ave, Chipping Norton NSW 2170, Australia<br />
                                Copyright © Choice Accountants 2023 
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="l-footer__bg-shape l-footer__bg-shape--corner bg-shape quater-filled gradient-1">
                <div class="bg-shape__inner animation-rotateRight90" data-animation-offset="100%"></div>
            </div>
        </div>
    </footer>

    <script type='text/javascript' src='{{asset("/web/scripts/vendor.NqUTCl2z7yeXLPX7fxH6.js")}}'></script>
    <script type='text/javascript' src='{{asset("/web/scripts/app.NqUTCl2z7yeXLPX7fxH6.js")}}'></script>
    <script type='text/javascript' src='{{asset("/web/scripts/instantPage.js")}}' fetchpriority="low" type="module"></script>

    <!-- <script>
        (function(w, d) {
            w.addEventListener('LazyLoad::Initialized', function(e) {
                w.lazyLoadInstance = e.detail.instance;
            }, false);
            var b = d.getElementsByTagName('head')[0];
            var s = d.createElement("script");
            s.async = true;
            var v = !("IntersectionObserver" in w) ? "lazyloadPolyfill.js" : "lazyloadIntersectionObserver.js";
            s.src = "/scripts/" + v;
            w.lazyLoadOptions = {
                elements_selector: ".lazy",
                threshold: 0,
                callback_enter: function(element) {
                    /* for elements that have lazy loaded background image with media queries */
                    var css = element.getAttribute('data-style');
                    if (css) {
                        css = css.replace(/(\r\n|\n|\r)/gm, "");
                        var style = document.createElement('style');
                        var head = document.getElementsByTagName('head')[0];
                        head.appendChild(style);
                        style.setAttribute("type", "text/css");
                        if (style.styleSheet) {
                            style.styleSheet.cssText = css;
                        } else {
                            var styleText = document.createTextNode(css);
                            style.appendChild(styleText);
                        }
                    }
                }
            };
            b.appendChild(s);
        }(window, document));
    </script> -->
    @section('scripts')
    @show

</body>

</html>
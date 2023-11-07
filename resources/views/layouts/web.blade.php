<!doctype html>
<html lang="en-GB">

<head>
    <meta charset="utf-8">
    <meta name="language" content="English">
    <meta name="referrer" content="origin-when-crossorigin" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="/web/images/favicon.png">
    <title>
        @section('title')
        @show
    </title>
    @php
    $url = url()->current();
    @endphp
    <link rel="alternate" href="https://choice.accountants/" hreflang="en-IN" />
    <link rel="alternate" href="https://choice.accountants/" hreflang="en-AE" />
    <!-- canonical -->
    <link rel="canonical" href="{{ $url }}" />
    <!-- og:url -->
    <meta property="og:url" content="{{ $url }}" />

    <meta name="google-site-verification" content="yGl2VcwbVKq97znzeWGfzlhDaoAM10Q4_VOfMdH-j58" />
    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-WB4CQ43Z');
    </script>
    <!-- End Google Tag Manager -->
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-B54H9Q9JYZ"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-B54H9Q9JYZ');
    </script>


    @section('meta')
    @show
    <link href="{{asset('assets/plugins/global/plugins.bundle.css')}}" rel="stylesheet" type="text/css" />

    <style>
        @font-face {
            font-family: "Plus Jakarta Sans";
            font-weight: 400;
            font-style: normal;
            font-display: swap;
            src: url("/fonts/PlusJakartaSans-Regular.woff2") format("woff2"), url("/fonts/PlusJakartaSans-Regular.woff") format("woff")
        }

        @font-face {
            font-family: "Plus Jakarta Sans";
            font-weight: 500;
            font-style: normal;
            font-display: swap;
            src: url("/fonts/PlusJakartaSans-Medium.woff2") format("woff2"), url("/fonts/PlusJakartaSans-Medium.woff") format("woff")
        }

        @font-face {
            font-family: "Poppins-Medium";
            font-weight: 500;
            font-style: normal;
            font-display: swap;
            src: url("/fonts/Poppins-Medium.woff2") format("woff2"), url("/fonts/Poppins-Medium.woff") format("woff")
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

    <style>
        #custom-form {
            /* max-width: 400px; */
            margin: 0 auto;
            /* padding: 20px; */
            /* background-color: #fff; */
            /* border: 1px solid #ddd; */
            border-radius: 5px;
            /* box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); */
        }

        label {
            display: block;
            margin-bottom: 6px;
            /* font-weight: bold; */
        }

        input[type="text"],
        input[type="email"],
        input[type="tel"],
        textarea {
            width: 100%;
            padding: 8px;
            margin-bottom: 12px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        textarea {
            resize: vertical;
        }

        button[type="submit"] {
            background-color: #fff;
            color: #268d44;
            border: none;
            margin-top: 10px;
            padding: 10px 20px;
            border-radius: 3px;
            cursor: pointer;
            width: 100%;
        }

        #privacy-policy {
            margin-top: 10px;
        }

        /*  */
    </style>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{asset('/web/styles/main.css')}}">

    @section('style')
    @show

</head>

<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WB4CQ43Z" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <nav class="l-navbar js-navbar">
        <div class="l-navbar__container"> <a href="{{url('/')}}" title="Homepage" class="l-navbar__logo"> <img src="/web/images/logo.webp" width="197" height="68" alt="Choice Accountants"> </a> <button type="button" class="l-navbar__burger burger js-burger" aria-label="Open menu"> <span class="burger__line"></span> </button>
            <div class="l-navbar__sidebar">
                <ul class="l-navbar__list js-menu-wrapper">
                    <li> <a href="{{url('/')}}" title="Home-choice accountants" class="l-navbar__list-link"> Home </a> </li>
                    @if($departments->count() > 0)
                    <li> <button class="l-navbar__list-link l-navbar__list-link--dropdown js-dropdown"> <span>Our Services</span>
                            <svg href="/web/images/icons/dropdown.svg" class="l-navbar__dropdown-icon" width="10" height="5">
                                <use xmlns:xlink="" href="/web/images/icons/dropdown.svg"> </use>
                            </svg> </button>
                        <div class="l-navbar__dropdown">
                            <ul class="l-navbar__inner-list">
                                @foreach($departments as $department)
                                <li> <a href="{{url('/our-services')}}/{{$department->slug}}" class="l-navbar__inner-list-link" title="{{$department->name}}"> {{$department->name}} </a></li>
                                @endforeach
                            </ul>
                        </div>
                    </li>
                    @endif
                    <li> <button class="l-navbar__list-link l-navbar__list-link--dropdown js-dropdown"> <span>About Choice</span>
                            <svg class="l-navbar__dropdown-icon" width="10" height="5">
                                <use xmlns:xlink="" href="/web/images/icons/dropdown.svg"> </use>
                            </svg> </button>
                        <div class="l-navbar__dropdown">
                            <ul class="l-navbar__inner-list">
                                <li> <a href="{{url('/about-choice/our-story')}}" title="Story" class="l-navbar__inner-list-link "> Story Behind Choice & Our Process </a> </li>
                                @if($teams->count() > 0)
                                <li> <a href="{{url('/about-choice/people')}}" title="Team" class="l-navbar__inner-list-link "> Our Team </a></li>
                                @endif
                                @if($clients->count() > 0)
                                <li> <a href="{{url('/about-choice/our-clients')}}" title="Clients" class="l-navbar__inner-list-link "> Our Clients </a></li>
                                @endif
                                @if($faqs->count() > 0)
                                <li> <a href="{{url('/faq')}}" title="FAQ" class="l-navbar__inner-list-link "> FAQ </a> </li>
                                @endif
                            </ul>
                        </div>
                    </li>
                    <li> <a href="{{url('/about-choice/careers')}}" title="career Opportunities" class="l-navbar__list-link"> Career Opportunities </a></li>
                    <li> <a href="{{url('/get-in-touch')}}" title="Contact" class="l-navbar__list-link"> Contact </a> </li>
                    <li> <a href="https://platinumaccountants.portal.accountants/login" title="Contact" class="l-navbar__list-link"> Login MYOB </a> </li>
                </ul>
            </div>
        </div>

    </nav>

    <!-- Enquiry Modal -->
    <div class="modal fade" id="enquirymodal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content cardnostyle">
                <div class="modal-body p-0">
                    <div class="row">
                        <div class="col-lg-6 pe-0 d-lg-block d-none">
                            <div class="modalbg"></div>
                        </div>
                        <div class="col-lg-6 col-12 ps-lg-0">
                            <div class="grid__col  grid__col--4k-pushed-to-left relative">
                                <div class="form form--card bg-purple max-width-720 form-wrapper-18 ">
                                    <div class="relative zindex-3">
                                        <div id="hubspotform-18"></div>
                                        <div class="form-wrapper-18">
                                            <div class="js-form-content">
                                                <div class="modal-header d-flex flex-row c-white align-content-center justify-content-center p-0 mb-2" style="border: none;">
                                                    <h6 class="fs-5">Enquire Today</h6>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" style="color: #fff !important;"><i class="fa-solid fa-xmark" style="color: #ffffff !important;font-size: 20px;"></i></button>
                                                </div>
                                                <form action="{{url('/enquirysend')}}" style="display: block;" id="custom-form" method="POST" accept-charset="UTF-8" enctype="multipart/form-data" novalidate>
                                                    @csrf
                                                    <div class="">
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <label for="fname">First Name *</label>
                                                                <input type="text" id="fname" name="fname" placeholder="Enter Your First Name" onkeyup="checkfname1()">
                                                                <span id="nameerror"></span>

                                                            </div>
                                                            <div class="col-md-12">
                                                                <label for="phone">Email *</label>
                                                                <input type="text" id="email" name="email" placeholder="Enter Your Email" onkeyup="checkemail1()">
                                                                <span id="emailerror"></span>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <label for="service">Services *</label>
                                                                <select name="serviceId" id="serviceId" style="margin-bottom: 12px;border: 1px solid #ccc;border-radius: 3px;">
                                                                    <option value="">Select Service</option>
                                                                </select>
                                                                <span id="selecterror"></span>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <button class="btn btn--secondary btn--purple mt-10em w-100" type="button" id="submit-button">
                                                                    <span class="btn__text">Submit Details</span>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                                <div id="thankyouEnquireDiv" style="display: none;">
                                                    <div class="" style="display: flex; flex-direction: column; justify-content: center; align-items: center;">
                                                        <h2>Thank You</h2>
                                                        <p>We have received your contact request. We aim to respond to all enquiries within 24 hours. In case of emergency you can contact to given number. Meanwhile, feel free to explore our website.</p>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="bg-shape size-144 quater-border-filled gradient-3 top right rotate-270">
                                    <div class="bg-shape__inner animation-rotateRight90 mobile-no-animation" data-animation-delay="600">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    @section('content')
    @show

    <footer class="l-footer bg-purple2">
        <div class="l-footer__container">
            <div class="l-footer__logo-area bg-purple">
                <a href="{{url('/')}}" class="l-footer__logo">
                    <img src="/web/images/logo_white.webp" alt="choice accountants- top cpa firm in Australia" width="287" height="70">
                </a>
                <div class="l-footer__bg-shape l-footer__bg-shape--logo bg-shape quater-border-filled gradient-3">
                    <div class="bg-shape__inner animation-rotateRight90"></div>
                </div>
            </div>
            <div class="l-footer__newsletter-area bg-pink">
                <div class="relative zindex-3">
                    <img src="/web/images/cpa.webp" alt="choice accountants- top cpa firm in Australia" style="width: 20%;outline: none;">
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
                        @if($services->count() > 0)
                        <li> <span class="l-footer__list-item-link">Best Services </span>
                            <ul class="l-footer__inner-list">
                                @foreach($services as $service)
                                <li> <a class="l-footer__inner-list-item-link hover-pink" href="{{url('/our-services')}}/{{$service->department ? $service->department->slug : ''}}/{{$service->slug}}" title="{{$service->name}}">
                                        {{$service->name}}
                                    </a>
                                </li>
                                @endforeach
                            </ul>
                        </li>
                        @endif
                        @if($departments->count() > 0)
                        <li> <span class="l-footer__list-item-link"> What we do </span>
                            <ul class="l-footer__inner-list">
                                @foreach($departments as $department)
                                <li> <a class="l-footer__inner-list-item-link hover-pink" href="{{url('/our-services')}}/{{$department->slug}}" title="{{$department->name}}">{{$department->name}} </a> </li>
                                @endforeach
                            </ul>
                        </li>
                        @endif
                        <li> <span class="l-footer__list-item-link"> Choice </span>
                            <ul class="l-footer__inner-list">
                                <li> <a class="l-footer__inner-list-item-link hover-pink" href="{{url('/about-choice/our-story')}}" title="About"> Story
                                        Behind Choice & Our Process
                                    </a>
                                </li>
                                @if($teams->count() > 0)
                                <li> <a class="l-footer__inner-list-item-link hover-pink" href="{{url('/about-choice/people')}}" title="Our Team"> Our
                                        Team
                                    </a>
                                </li>
                                @endif
                                @if($clients->count() > 0)
                                <li> <a class="l-footer__inner-list-item-link hover-pink" href="{{url('/about-choice/our-clients')}}" title="Clients">
                                        Our Clients
                                    </a>
                                </li>
                                @endif
                                @if($faqs->count() > 0)
                                <li> <a class="l-footer__inner-list-item-link hover-pink" href="{{url('/faq')}}" title="Faq">
                                        FAQ
                                    </a>
                                </li>
                                @endif
                            </ul>
                        </li>
                        @if($blogs->count() > 0)
                        <li> <a href="{{url('/blog')}}" title="Blogs & Insights" class="l-footer__list-item-link hover-pink"> Blogs &
                                Insights </a>
                            <ul class="l-footer__inner-list">
                                @foreach($blogs as $blog)
                                <li> <a class="l-footer__inner-list-item-link hover-pink" href="{{url('/our-blogs')}}/{{$blog->slug}}" title="{{$blog->title}}">
                                        {{$blog->title}}
                                    </a>
                                </li>
                                @endforeach
                            </ul>
                        </li>
                        @endif
                    </ul>

                    <div class="content content--small-text">
                        <div>
                            <a href="#" class="d-inline-block mr-30em color-white hover-pink" title="Terms &amp; Conditions">Terms &amp; Conditions</a>
                            <a href="{{url('/privacy-policy')}}" class="d-inline-block mr-30em color-white hover-pink" title="Privacy Policy"> Privacy Policy</a>
                        </div>
                        <div class=" mt-20em mb-20em">
                            <p> Choice Accountants, 21 Remembrance Driveway, Tahmoor, NSW 2573<br />
                                Copyright © Choice Accountants & Advisors Pty Ltd 2023

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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script type='text/javascript' src='{{asset("/web/scripts/vendor.NqUTCl2z7yeXLPX7fxH6.js")}}'></script>
    <script type='text/javascript' src='{{asset("/web/scripts/app.NqUTCl2z7yeXLPX7fxH6.js")}}'></script>
    <script type='text/javascript' src='{{asset("/web/scripts/instantPage.js")}}' fetchpriority="low" type="module"></script>

    <!-- js for enquiry modal -->
    <script>
        $(document).ready(function() {
            var modalShown = false;

            var scrollThreshold = 100;

            function showModalOnScroll() {
                if (!modalShown) {

                    var url = window.location.href;
                    var urlsplit = url.split('/');

                    $('#enquirymodal').modal('show');

                    // check if url contains our-services/

                    var lastsegment = '';
                    if (url.includes('our-services/')) {

                        // count how many / in url
                        var count = (url.match(/\//g) || []).length;
                        console.log(count);
                        if (count == 5) {
                            var lastsegment = urlsplit[urlsplit.length - 1];
                            console.log(lastsegment);

                            $.ajax({
                                type: "post",
                                url: "{{url('/getServiceBySlug')}}",
                                data: {
                                    "_token": "{{ csrf_token() }}",
                                    "serviceSlug": lastsegment
                                },
                                dataType: "json",
                                success: function(response) {
                                    console.log(response);
                                    var options = '<option value="">Select Service</option>';
                                    var options = '<option value="' + response.service.id + '">' + response.service.name + '</option>';

                                    $('#serviceId').html(options);
                                },
                                error: function(response) {
                                    console.log(response);
                                }
                            });
                        } else {
                            var lastsegment = urlsplit[urlsplit.length - 1];
                            console.log(lastsegment);

                            $.ajax({
                                type: "post",
                                url: "{{url('/getServiceByDept')}}",
                                data: {
                                    "_token": "{{ csrf_token() }}",
                                    "deptSlug": lastsegment
                                },
                                dataType: "json",
                                success: function(response) {
                                    console.log(response);
                                    var options = '<option value="">Select Service</option>';
                                    $.each(response.services, function(index, value) {
                                        options += '<option value="' + value.id + '">' + value.name + '</option>';
                                    });
                                    $('#serviceId').html(options);
                                },
                                error: function(response) {
                                    console.log(response);
                                }
                            });
                        }
                        console.log(lastsegment);
                    } else {
                        $.ajax({
                            type: "post",
                            url: "{{url('/getServiceByDept')}}",
                            data: {
                                "_token": "{{ csrf_token() }}",
                                "deptSlug": ''
                            },
                            dataType: "json",
                            success: function(response) {
                                console.log(response);
                                var options = '<option value="">Select Service</option>';
                                $.each(response.services, function(index, value) {
                                    options += '<option value="' + value.id + '">' + value.name + '</option>';
                                });
                                $('#serviceId').html(options);
                            },
                            error: function(response) {
                                console.log(response);
                            }
                        });
                    }

                    modalShown = true;
                }
            }

            // Attach the scroll event listener
            $(window).on('scroll', function() {
                var scrollPosition = $(window).scrollTop();
                if (scrollPosition >= scrollThreshold) {
                    showModalOnScroll();
                }
            });
        });
    </script>

    <script>
        function checkfname1() {
            var fnameInput = document.getElementById('fname');
            var fnameValidation = document.getElementById('nameerror');
            var button = document.getElementById('submit-button');

            var fnameRegex = /^[a-zA-Z ]*$/;

            if (fnameInput.value.match(fnameRegex)) {
                fnameValidation.textContent = '';
                button.disabled = false;
            } else {
                fnameValidation.textContent = 'Please enter valid name';
                fnameValidation.style.color = 'red';
                button.disabled = true;
            }
        }

        function checkemail1() {
            var emailInput = document.getElementById('email');
            var emailValidation = document.getElementById('emailerror');
            var button = document.getElementById('submit-button');

            var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

            if (emailInput.value.match(emailRegex)) {
                emailValidation.textContent = '';
                button.disabled = false;
            } else {
                emailValidation.textContent = 'Please enter valid email';
                emailValidation.style.color = 'red';
                button.disabled = true;

            }
        }
    </script>

    <script>
        document.getElementById('submit-button').addEventListener('click', function(event) {
            event.preventDefault();
            var fname = document.getElementById('fname').value;
            var email = document.getElementById('email').value;
            var serviceId = document.getElementById('serviceId').value;
            var nameError = document.getElementById('nameerror');
            var emailerror = document.getElementById('emailerror');
            var selectError = document.getElementById('selecterror');

            nameError.textContent = '';
            emailerror.textContent = '';
            selectError.textContent = '';

            if (fname.trim() === '') {
                nameError.textContent = 'Please enter first name';
                nameError.style.color = 'red';
            }

            if (email.trim() === '') {
                emailerror.textContent = 'Please enter email';
                emailerror.style.color = 'red';
            }

            if (serviceId === '') {
                selectError.textContent = 'Please select service';
                selectError.style.color = 'red';
            } else {
                selectError.textContent = '';
            }

            if (fname.trim() === '' || email.trim() === '' || serviceId === '') {
                return;
            }

            var formData = new FormData($('#custom-form')[0]);
            $.ajax({
                type: "POST",
                url: "{{ url('/enquirysend') }}",
                data: formData,
                processData: false,
                contentType: false,
                success: function(response) {
                    // Hide the form and the h1 element and show the thank you message and close button
                    $('#custom-form, .modal-header h1').fadeOut(400, function() {
                        $('#thankyouEnquireDiv').fadeIn(700);
                    });
                },
                error: function(response) {
                    console.log(response);
                }
            });
        });
    </script>

    @section('scripts')
    @show

</body>

</html>
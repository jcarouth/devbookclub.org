<!DOCTYPE html>
<html lang="{{ $page->language ?? 'en' }}">
    <head>
        <title>{{ $page->title ?  $page->title . ' | ' : '' }}{{ $page->siteName }}</title>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="referrer" content="always">

        <meta name="description" content="{{ $page->description }}">

        <meta property="og:site_name" content="Dev Book Club">
        <meta property="og:url" content="{{ $page->getUrl() }}">
        <meta property="og:title" content="{{ $page->title ?? $page->siteName }}">
        <meta property="og:description" content="{{ $page->description }}">

        <meta property="twitter:card" content="summary_large_image">
        <meta property="twitter:site" content="@_devbookclub">
        <meta property="twitter:creator" content="@_devbookclub">
        <meta property="twitter:image" content="{{ $page->baseUrl }}/assets/images/static/{{ $page->twitter_image ?? 'devbookclub-twitter-large.png' }}">

        <link rel="canonical" href="{{ $page->getUrl() }}">
        <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">

        <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
        <link rel="manifest" href="/site.webmanifest">
        <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
        <meta name="msapplication-TileColor" content="#2b5797">
        <meta name="theme-color" content="#fafafa">

        <style>
            [x-cloak] {
                display: none !important;
            }
        </style>

        @if ($page->production)
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-1FKR7ZQZRH"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'G-1FKR7ZQZRH');
        </script>
        @endif
        <script defer src="{{ mix('js/main.js', 'assets/build') }}"></script>
    </head>
    <body class="flex flex-col min-h-screen bg-white font-sans antialiased text-gray-800">
        <header class="bg-gray-50">
            <div class="container mx-auto px-3 py-3 flex flex-row justify-between">
                <a class="flex-grow" href="/">
                    <svg class="w-48 h-12">
                        <title>Dev Book Club</title>
                        <use xlink:href="/assets/build/icons/spritemap.svg#sprite-wordmark-dbc"></use>
                    </svg>
                </a>
                <span class="flex-none w-12 py-2">
                    <svg class="w-4 h-4 ml-auto fill-current hidden">
                        <use xlink:href="/assets/build/icons/spritemap.svg#sprite-bars"></use>
                    </svg>
                </span>
            </div>
        </header>

        <nav class="py-3 bg-gradient-to-b from-gray-900 to-gray-700 text-lg text-white">
            <div class="container mx-auto px-3 flex flex-col md:flex-row space-y-1 md:space-y-0 md:space-x-6">
                <a href="/rsvp/">RSVP</a>
                <a href="/pages/scholarship/">Scholarship</a>
                <a href="/pages/about/">About</a>
                <a href="/pages/code-of-conduct/">Code of Conduct</a>
            </div>
        </nav>

        <main class="h-full mb-auto" role="main">
            @yield('body')
        </main>

        <aside class="mt-10 lg:mt-24 bg-gradient-to-b from-gray-600 to-gray-900">
            @include('_components.newsletter-inline')
        </aside>

        <footer class="lg:px-3 bg-gray-900 text-white">
            <hr class="container mx-auto mt-8 border-gray-500">
            <div class="container mx-auto py-8 lg:flex lg:items-center lg:justify-between space-y-6">
                <div class="space-x-6 flex items-center justify-center lg:order-2">
                    <a class="" href="https://twitter.com/@_devbookclub" rel="noopener" target="_blank" aria-label="Follow @_devbookclub on Twitter">
                        <svg class="w-6 h-6 fill-current"><use xlink:href="/assets/build/icons/spritemap.svg#sprite-twitter"></use></svg>
                    </a>
                    <a class="" href="https://www.youtube.com/user/devbookclub" aria-label="Subscribe to DevBookClub on YouTube" rel="noopener" target="_blank">
                        <svg class="w-6 h-6 fill-current"><use xlink:href="/assets/build/icons/spritemap.svg#sprite-youtube"></use></svg>
                    </a>
                </div>
                <p class="lg:order-1 text-center lg:text-left">&copy; {{ date('Y') }} Dev Book Club. All rights reserved.</p>
            </div>
        </footer>
    </body>
</html>

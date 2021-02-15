<!DOCTYPE html>
<html lang="{{ $page->language ?? 'en' }}">
    <head>
        <title>{{ $page->title }}</title>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="referrer" content="always">

        <meta name="description" content="{{ $page->description }}">

        <meta property="og:site_name" content="Dev Book Club">
        <meta property="og:url" content="{{ $page->getUrl() }}">
        <meta property="og:title" content="{{ $page->title }}">
        <meta property="og:description" content="{{ $page->description }}">

        <meta property="twitter:card" content="summary">
        <meta property="twitter:site" content="@_devbookclub">
        <meta property="twitter:creator" content="@_devbookclub">
        <meta property="twitter:image" content="{{ $page->baseUrl }}/assets/images/logo-web-blue.png">

        <link rel="canonical" href="{{ $page->getUrl() }}">
        <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">

        <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
        <link rel="manifest" href="/site.webmanifest">

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
    </head>
    <body class="flex flex-col min-h-screen bg-gray-100 font-sans antialiased text-gray-800">
        <header>
            <div class="container flex flex-row justify-between md:px-3 mx-auto p-3">
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
        <main class="flex-auto" role="main">
            @yield('body')
        </main>
        <footer class="container p-3 mt-8 mx-auto text-center">
            <div>
                <a class="inline-block w-10 mx-2" href="https://twitter.com/@_devbookclub" rel="noopener" target="_blank" aria-label="Follow @_devbookclub on Twitter">
                    <svg class="w-10 h-10 fill-current"><use xlink:href="/assets/build/icons/spritemap.svg#sprite-twitter"></use></svg>
                </a>
                <a class="inline-block w-10 mx-2" href="https://www.youtube.com/user/devbookclub" aria-label="Subscribe to DevBookClub on YouTube" rel="noopener" target="_blank">
                    <svg class="w-10 h-10 fill-current"><use xlink:href="/assets/build/icons/spritemap.svg#sprite-youtube"></use></svg>
                </a>
            </div>
            <div>Copyright &copy; 2020 Dev Book Club</div>
        </footer>
    </body>
</html>

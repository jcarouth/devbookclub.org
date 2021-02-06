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
    <body class="flex flex-col min-h-screen bg-devbookclub-blue font-sans antialiased" style="color: #0C5179;">
        <main class="flex-auto" role="main">
            @yield('body')
        </main>
    </body>
</html>

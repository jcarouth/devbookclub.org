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

        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link rel="canonical" href="{{ $page->getUrl() }}">
        <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
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
        <script src="https://cdn.usefathom.com/script.js" data-site="BSPWFCNX" defer></script>
        @else
        <script>
            window.fathom = {
                trackGoal(goal, value) { console.log(`Fathom goal track goal:${goal} value:${value}`); },
            }
        </script>
        @endif
        <script defer src="{{ mix('js/main.js', 'assets/build') }}"></script>
    </head>
    <body class="flex flex-col min-h-screen bg-white font-sans antialiased text-gray-800">
        <header x-data="{ navOpen: false}" class="bg-gradient-to-b from-gray-900 to-gray-700 text-white">
            <div class="container flex max-w-6xl mx-auto px-3 py-3 items-center">
                <div class="flex-shrink-0">
                    <a class="flex space-x-2" href="/">
                        <svg class="w-8 h-8 fill-current">
                            <title class="sr-only">Dev Book Club</title>
                            <use xlink:href="/assets/build/icons/spritemap.svg#sprite-logo-solid"></use>
                        </svg>
                        <div class="my-auto font-brand text-3xl tracking-wide">Dev Book Club</div>
                    </a>
                </div>
                <div class="flex-grow">
                    <nav class="hidden md:flex md:flex-row justify-end space-x-6">
                        <a class="text-sm uppercase leading-9" href="/rsvp/">RSVP US/CA</a>
                        <a class="text-sm uppercase leading-9" href="/rsvp-uk/">RSVP UK/EU</a>
                        <a class="text-sm uppercase leading-9" href="/pages/about/">About</a>
                        <a class="text-sm uppercase leading-9" href="/pages/code-of-conduct/">Code of Conduct</a>
                    </nav>
                    <span @click="navOpen = !navOpen" class="my-auto md:hidden">
                        <svg class="w-4 h-4 ml-auto fill-current">
                            <use x-show="navOpen === false" xlink:href="/assets/build/icons/spritemap.svg#sprite-bars"></use>
                            <use x-cloak x-show="navOpen === true" xlink:href="/assets/build/icons/spritemap.svg#sprite-times"></use>
                        </svg>
                    </span>
                </div>

            </div>

            <div x-cloak x-show="navOpen === true" class="px-5 py-3 flex flex-col md:hidden space-y-2 text-lg">
                <a class="text-sm uppercase" href="/rsvp/">RSVP US/CA</a>
                <a class="text-sm uppercase" href="/rsvp-uk/">RSVP UK/EU</a>
                <a class="text-sm uppercase" href="/pages/about/">About</a>
                <a class="text-sm uppercase" href="/pages/code-of-conduct/">Code of Conduct</a>
            </div>
        </header>

        <main class="h-full mb-auto" role="main">
            @yield('body')
        </main>

        <aside class="mt-10 lg:mt-24 bg-gradient-to-b from-gray-600 to-gray-900">
            @include('_components.newsletter-inline')
        </aside>

        <footer class="px-3 bg-gray-900 text-white">
            <hr class="container max-w-6xl mx-auto mt-8 border-gray-500">
            <div class="container max-w-6xl mx-auto py-8 lg:flex lg:items-center lg:justify-between space-y-6 lg:space-y-0">
                <div class="space-x-6 flex items-center justify-center lg:order-2">
                    <a class="" href="https://twitter.com/_devbookclub" rel="noopener" target="_blank" aria-label="Follow @_devbookclub on Twitter">
                        <svg class="w-6 h-6 fill-current"><use xlink:href="/assets/build/icons/spritemap.svg#sprite-twitter"></use></svg>
                    </a>
                    <a class="" href="https://www.youtube.com/user/devbookclub" aria-label="Subscribe to DevBookClub on YouTube" rel="noopener" target="_blank">
                        <svg class="w-6 h-6 fill-current"><use xlink:href="/assets/build/icons/spritemap.svg#sprite-youtube"></use></svg>
                    </a>
                    <a href="https://join.slack.com/t/thedevbookclub/shared_invite/zt-myoznyjb-q3LqO5XAO1IKtx28zbk9ew" rel="noopener" aria-label="Join us on Slack">
                        <svg class="w-6 h-6 fill-current"><use xlink:href="/assets/build/icons/spritemap.svg#sprite-slack"></use></svg>
                    </a>
                    <a href="https://discord.gg/U4M7ZVfM6u" rel="noopener" aria-label="Join DevBookClub on Discord">
                        <svg class="w-6 h-6 fill-current"><use xlink:href="/assets/build/icons/spritemap.svg#sprite-discord"></use></svg>
                    </a>
                </div>
                <p class="lg:order-1 text-center lg:text-left">&copy; {{ date('Y') }} Dev Book Club. All rights reserved. A <a class="underline" href="https://twitter.com/jcarouth">Jeff Carouth</a> project. <a class="underline" href="/pages/privacy-policy/">Privacy policy</a>.</p>
            </div>
        </footer>
    </body>
</html>

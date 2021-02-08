<?php

use Illuminate\Support\Str;
use TightenCo\Jigsaw\Jigsaw;
use samdark\sitemap\Sitemap;

/** @var $container \Illuminate\Container\Container */
/** @var $events \TightenCo\Jigsaw\Events\EventBus */

/**
 * You can run custom code at different stages of the build process by
 * listening to the 'beforeBuild', 'afterCollections', and 'afterBuild' events.
 *
 * For example:
 *
 * $events->beforeBuild(function (Jigsaw $jigsaw) {
 *     // Your code here
 * });
 */
$events->afterBuild(function (Jigsaw $jigsaw) {
    $excludes = [
        '/assets/*',
        '/android-chrome-192x192.png',
        '/android-chrome-512x512.png',
        '/apple-touch-icon.png',
        '*/favicon.ico',
        '*/favicon*.png',
        '*/404.html',
        '/site.webmanifest',
    ];

    $baseUrl = $jigsaw->getConfig('baseUrl');
    $sitemap = new Sitemap($jigsaw->getDestinationPath() . '/sitemap.xml');

    collect($jigsaw->getOutputPaths())
        ->reject(fn ($path) => Str::is($excludes, $path))
        ->each(function ($path) use ($baseUrl, $sitemap) {
            $sitemap->addItem(rtrim($baseUrl, '/') . $path, time(), Sitemap::DAILY);
        });

    $sitemap->write();
});

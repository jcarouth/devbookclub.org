<?php

return [
    'production' => false,
    'baseUrl' => 'http://localhost:8000',
    'siteName' => 'Dev Book Club',
    'description' => 'As developers we need to constantly learn and grow. The Dev Book Club is a chance to read through and discuss what you are learning with fellow devs of all skill levels and backgrounds.',
    'collections' => [
        'pages' => [
            'path' => 'pages/{-slug}',
        ],
        'books' => [
            'path' => 'books/{-slug}',
        ]
    ],
];

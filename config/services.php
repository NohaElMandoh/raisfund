<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, Postmark, AWS and more. This file provides the de facto
    | location for this type of information, allowing packages to have
    | a conventional file to locate the various service credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],
    'facebook' => [
        'client_id' => '2555994254702684',
        'client_secret' => '16322ac27a75d3bb787c04bba7daf56e',
        'redirect' => 'http://localhost/aSaas/auth/facebook/callback',
    ],
    'google' => [
        'client_id' => '661744318895-28ttanm3kaisaggg91ban9s0dtsati2i.apps.googleusercontent.com',
        'client_secret' => '0_24PKd7x2NPdAAYa3Sn0iW0',
        'redirect' => 'http://localhost/aSaas/auth/google/callback',
        ],
];

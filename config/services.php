<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, Mandrill, and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
    ],

    'mandrill' => [
        'secret' => env('MANDRILL_SECRET'),
    ],

    'ses' => [
        'key'    => env('SES_KEY'),
        'secret' => env('SES_SECRET'),
        'region' => 'us-east-1',
    ],

    'stripe' => [
        'model'  => App\User::class,
        'key'    => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
    ],
    
    'github' => [
        'client_id' => env('GITHUB_API_ID'),
        'client_secret' => env('GITHUB_SECRET'),
        'redirect' => '',
    ],
    
    'twitter' => [
        'client_id' => env('TWITTER_API_ID'),
        'client_secret' => env('TWITTER_SECRET'),
        'redirect' => '',
    ],
    
    'facebook' => [
        'client_id' => env('FACEBOOK_API_ID'),
        'client_secret' => env('FACEBOOK_SECRET'),
        'redirect' => '',
    ],
    
    'google' => [
        'client_id' => env('GOOGLE_API_ID'),
        'client_secret' => env('GOOGLE_SECRET'),
        'redirect' => '',
    ],
];

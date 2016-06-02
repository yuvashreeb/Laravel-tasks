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
    'ses' => [
        'key' => env('SES_KEY'),
        'secret' => env('SES_SECRET'),
        'region' => 'us-east-1',
    ],
    'sparkpost' => [
        'secret' => env('SPARKPOST_SECRET'),
    ],
    'stripe' => [
        'model' => App\User::class,
        'key' => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
    ],
    'facebook' => [
        'client_id' => '238993363142601',
        'client_secret' => '823a0c8c8fc56b624f630bedf9945b20',
        'redirect' => 'http://laravel-tasks.karmanya.dev/facebook/callback',
    ],
    'google' => [
        'client_id' => '261728152530-bvaq896lr55edkq1vbvts76fi03hbqch.apps.googleusercontent.com',
        'client_secret' => 'u1PWISBP29rNetGoy6ff5HBs',
        'redirect' => 'http://laravel-tasks.karmanya.dev/google/callback',
    ],
    'linkedin' => [
        'client_id' => '75p9yo8wfiuvw8',
        'client_secret' => 'AOZ6cOv3RjNnP1tT',
        'redirect' => 'http://laravel-tasks.karmanya.dev/linkedin/callback',
    ],
];

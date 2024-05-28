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

    'firebase' => [
        'api_key' => env('AIzaSyAM5RWO1Hu26lXFybafs0is0dIq9koUE9c'),
        'auth_domain' => env('pa-iii-877d1.firebaseapp.com'),
        'project_id' => env('pa-iii-877d1'),
        'storage_bucket' => env('pa-iii-877d1.appspot.com'),
        'messaging_sender_id' => env('388387846271'),
        'app_id' => env('1:388387846271:web:8c59f77cbabe608710274a')
    ],

];

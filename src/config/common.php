<?php


return [
    'authentication' => [
        'client_id' => env('CLIENT_ID'),
        'client_secret' => env('CLIENT_SECRET'),
        'oauth_url' => env("API_URL") . "/oauth/token"
    ],
];

<?php

return [
    'username' => env('DA_USERNAME'),

    'oauth' => [
        'token_url' => 'https://www.deviantart.com/oauth2/token',
        'client_id' => env('DA_CLIENT_ID'),
        'secret'    => env('DA_SECRET'),
    ],
];

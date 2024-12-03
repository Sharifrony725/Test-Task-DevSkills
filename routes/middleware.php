<?php

use App\Http\Middleware\AuthenticateCustom;


return [
    'auth.custom' => AuthenticateCustom::class,
];

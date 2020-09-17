<?php

return [
//  SEMYSMS_URL = https://semysms.net/api/3/sms.php
//  SEMYSMS_DEVICE = 162979
//  SEMYSMS_TOKEN = e1494f0d38a19bee33cce78280f92fbb

    /*
    |--------------------------------------------------------------------------
    | Application Name
    |--------------------------------------------------------------------------
    |
    | This value is the name of your application. This value is used when the
    | framework needs to place the application's name in a notification or
    | any other location as required by the application or its packages.
    |
    */

    'sms_url' => env('SEMYSMS_URL', false),

    /*
    |--------------------------------------------------------------------------
    | Application Environment
    |--------------------------------------------------------------------------
    |
    | This value determines the "environment" your application is currently
    | running in. This may determine how you prefer to configure various
    | services the application utilizes. Set this in your ".env" file.
    |
    */

    'sms_device' => env('SEMYSMS_DEVICE', false),

    /*
    |--------------------------------------------------------------------------
    | Application Debug Mode
    |--------------------------------------------------------------------------
    |
    | When your application is in debug mode, detailed error messages with
    | stack traces will be shown on every error that occurs within your
    | application. If disabled, a simple generic error page is shown.
    |
    */

    'sms_token' => env('SEMYSMS_TOKEN', false),

];

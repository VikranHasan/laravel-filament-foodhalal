<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/send-test-email', function () {
        Mail::raw('This is a test email sent using Resend!', function ($message) {
            $message->to('example@gmail.com')
                    ->subject('Test Email from Laravel using Resend');
        });
    });

<?php

use App\Mail\EmailSend;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/sendmail', function () {
    Mail::to('jgraphics73@gmail.com')->send(new EmailSend());

    // $record = new EmailSend([
    //     'recipient_email' => $recipient,
    //     'email_template' => $body,
    //     'time_sent' => now(),
    // ]);
    // $record->save();

    return response('Email Sent');
});


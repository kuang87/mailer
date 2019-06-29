<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    //$subscriber = \App\Subscriber::find('68e32b2e-e485-3d65-b898-81d69bd3f20b');
    //return (new \App\Mail\TestMail($subscriber))->render();

    //$subscribers = \App\Subscriber::take(10)->get();

    //foreach ($subscribers as $subscriber) {
    //    \Illuminate\Support\Facades\Mail::to($subscriber->email)->queue(new \App\Mail\TestMail($subscriber));
    //}
    \App\Jobs\TestJob::dispatch(\Ramsey\Uuid\Uuid::uuid4()->toString());
});

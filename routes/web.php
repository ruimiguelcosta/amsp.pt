<?php

use App\Actions\Http\Contacts\StoreContactAction;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::post('/contact', StoreContactAction::class)->name('contact.store');

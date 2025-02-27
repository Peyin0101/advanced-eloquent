<?php

use App\Http\Controllers\GuestbookController;
use Illuminate\Support\Facades\Route;

Route::redirect('/', '/guestbook');
Route::get('/guestbook/approve', [GuestbookController::class, 'unapproved'])->name('guestbook.unapproved');
Route::resource('/guestbook', GuestbookController::class)->only(['index', 'store', 'update', 'destroy']);
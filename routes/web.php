<?php

use App\Livewire\About;
use App\Livewire\Contact;
use App\Livewire\Meet;
use Illuminate\Support\Facades\Route;

Route::get('/', About::class)->name('about');
Route::get('meet-the-writer', Meet::class)->name('meet');
Route::get('contact-me', Contact::class)->name('contact');


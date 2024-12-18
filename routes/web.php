<?php

use App\Livewire\About;
use App\Livewire\Contact;
use App\Livewire\DigitalPublication;
use App\Livewire\Meet;
use App\Livewire\PrintPublication;
use Illuminate\Support\Facades\Route;

Route::get('/', About::class)->name('about');
Route::get('meet-the-writer', Meet::class)->name('meet');
Route::get('contact-me', Contact::class)->name('contact');
Route::get('print-publication', PrintPublication::class)->name('print');
Route::get('digital-publication', DigitalPublication::class)->name('digital');



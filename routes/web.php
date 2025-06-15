<?php

use App\Livewire\Demo;
use Illuminate\Support\Facades\Route;

Route::get('/', Demo::class)->name('demo');

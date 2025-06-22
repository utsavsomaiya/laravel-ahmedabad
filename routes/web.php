<?php

use App\Livewire\Demo;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Route;

Log::info('on `master` branch');

Route::get('/', Demo::class)->name('demo');

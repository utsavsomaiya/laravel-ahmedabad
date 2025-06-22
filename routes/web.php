<?php

use App\Livewire\Demo;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Route;

Log::channel('stack')->debug('Needs to do for conflict');

Route::get('/', Demo::class)->name('demo');

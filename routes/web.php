<?php

use App\Livewire\Demo;
use Illuminate\Support\Facades\Route;

logger()->info('on `master` branch');

Route::get('/', Demo::class)->name('demo');

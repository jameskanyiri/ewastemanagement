<?php

use App\Http\Controllers\backend\DashboardComponent;
use App\Livewire\Backend\DashboardComponent as BackendDashboardComponent;
use App\Livewire\Backend\RegisterItem;
use App\Livewire\Backend\VerifyItem;
use App\Livewire\Frontend\HomeComponent;
use Illuminate\Support\Facades\Route;

Route::get('/', HomeComponent::class)->name('home');

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified',])->group(function () {
    Route::get('/dashboard', BackendDashboardComponent::class)->name('dashboard');
    Route::get('/register-new-item', RegisterItem::class)->name('register.item');
    Route::get('/verify-item/{serial_number?}', VerifyItem::class)->name('verify.item');
});

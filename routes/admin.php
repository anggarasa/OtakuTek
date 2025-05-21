<?php

use App\Livewire\Admin\Category\CrudCategory;
use Illuminate\Support\Facades\Route;

Route::prefix('admin')->name('admin.')->middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/dashboard', function() {
        return view('dashboard');
    })->name('dashboard');

    Route::prefix('crud')->name('crud.')->group(function () {
        Route::get('/category', CrudCategory::class)->name('category');
    });
});

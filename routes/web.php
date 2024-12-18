<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\TicketController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminUserController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DestinationController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PackageController;
use App\Http\Controllers\PurchaseController;


// Rute untuk halaman utama
Route::get("/", [HomeController::class, "index"])->name("index");

Route::middleware(['guest'])->group(function () {
    Route::get('login', [AuthController::class, 'login'])->name('login');
    Route::post('login', [AuthController::class, 'login_action'])->name('login.action');
    Route::get('register', [AuthController::class, 'register'])->name('register');
    Route::post('register', [AuthController::class, 'register_action'])->name('register.action');
});

Route::middleware(['auth'])->group(function () {
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});

Route::get("/destinations", [HomeController::class, "destinations"])->name("destinations");
Route::get("/destination/{destination:slug}", [HomeController::class, "detailDestination"])->name("destination.detail");
Route::get("purchase/{package:slug}", [PurchaseController::class, "index"])->name("purchase.index");

Route::get("/tours", [HomeController::class, "tours"])->name("tours");
Route::get("/about", [HomeController::class, "about"])->name("about");
Route::get("/contact", [HomeController::class, "contact"])->name("contact");



Route::middleware(['auth'])->prefix('admin')->group(function () {
    Route::get('dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');

    Route::get('users', [AdminUserController::class, 'index'])->name('admin.user.index');
    Route::put('users/update/{id}', [AdminUserController::class, 'update'])->name('admin.user.update');
    Route::delete('users/delete/{id}', [AdminUserController::class, 'destroy'])->name('admin.user.destroy');

    Route::get('package', [PackageController::class, 'index'])->name('admin.package.index');
    Route::get('package/create', [PackageController::class, 'create'])->name('admin.package.create');
    Route::post('package', [PackageController::class, 'store'])->name('admin.package.store');
    Route::get('package/{package}/edit', [PackageController::class, 'edit'])->name('admin.package.edit');
    Route::put('package/{package}', [PackageController::class, 'update'])->name('admin.package.update');
    Route::delete('package/{package}', [PackageController::class, 'destroy'])->name('admin.package.destroy');

    Route::get('destination', [DestinationController::class, 'index'])->name('admin.destination');
    Route::get('destination/create', [DestinationController::class, 'create'])->name('admin.destination.create');
    Route::post('destination', [DestinationController::class, 'store'])->name('admin.destination.store');
    Route::get('destination/{id}/edit', [DestinationController::class, 'edit'])->name('admin.destination.edit');
    Route::put('destination/{id}', [DestinationController::class, 'update'])->name('admin.destination.update');
    Route::delete('destination/{id}', [DestinationController::class, 'destroy'])->name('admin.destination.destroy');

    Route::get('history', [AdminController::class, 'history'])->name('admin.history');
});

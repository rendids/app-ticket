<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\TicketController;
use App\Http\Controllers\AdminController;
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

// Rute untuk halaman destinasi
Route::get("/destinations", [HomeController::class, "destinations"])->name("destinations");
Route::get("/tours", [HomeController::class, "tours"])->name("tours");
Route::get("/about", [HomeController::class, "about"])->name("about");
Route::get("/contact", [HomeController::class, "contact"])->name("contact");

Route::get('packages/{id}', [PackageController::class, 'show'])->name('packages.show');
Route::post('purchase', [PurchaseController::class, 'store']);

Route::get('purchases', [PurchaseController::class, 'history']);
Route::get('purchases/{id}', [PurchaseController::class, 'show']);


Route::middleware(['auth'])->group(function () {
    Route::get('dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');

    Route::get('packages', [PackageController::class, 'index'])->name('admin.packages.index');
    Route::get('packages/create', [PackageController::class, 'create'])->name('admin.packages.create');
    Route::post('packages', [PackageController::class, 'store'])->name('admin.packages.store');
    Route::get('packages/{id}/edit', [PackageController::class, 'edit'])->name('admin.packages.edit');
    Route::put('packages/{id}', [PackageController::class, 'update'])->name('admin.packages.update');
    Route::delete('packages/{id}', [PackageController::class, 'destroy'])->name('admin.packages.destroy');
    
    Route::get('tickets/create', [TicketController::class, 'create'])->name('admin.tickets.create');
    Route::post('tickets', [TicketController::class, 'store'])->name('admin.tickets.store');
    Route::get('tickets/{id}/edit', [TicketController::class, 'edit'])->name('admin.tickets.edit');
    Route::put('tickets/{id}', [TicketController::class, 'update'])->name('admin.tickets.update');
    Route::delete('tickets/{id}', [TicketController::class, 'destroy'])->name('admin.tickets.destroy');

    Route::get('destination', [DestinationController::class, 'index'])->name('admin.destination');
    Route::get('history', [AdminController::class, 'history'])->name('admin.history');
});

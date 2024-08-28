<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\AdminEventController;
use App\Http\Controllers\Admin\AdminTicketController;

Route::middleware(['guest'])->group(function () {
    Route::get('/admin-login', [AuthController::class, 'adminLogin'])->name("showAdminLogin");
    Route::post('/admin-login', [AuthController::class, 'adminPostLogin'])->name("postAdminLogin");
    Route::get('/login', [AuthController::class, 'login'])->name("showLogin");
    Route::post('/login', [AuthController::class, 'postLogin'])->name("postLogin");
    Route::get('/signup', [AuthController::class, 'signup'])->name("showSignup");
    Route::post('/signup', [AuthController::class, 'postSignup'])->name("postSignup");
    Route::get('/logout', [AuthController::class, 'logout'])->name("logout");
    });

    Route::get('/', [\App\Http\Controllers\Clients\HomeController::class,'index'])->name('home');
    Route::post('/paynow/update', [\App\Http\Controllers\Clients\HomeController::class,'paynowUpdate'])->name('paynowUpdate');
    Route::get('/payment-confirmation', [\App\Http\Controllers\Clients\HomeController::class,'paymentConfirmation'])->name('paymentConfirmation');
    Route::get('/cart/{id}', [\App\Http\Controllers\Clients\HomeController::class,'cart'])->name('cart');
    Route::middleware(['revalidate', 'auth','isAdmin'])->group(function () {

        Route::get('/admin-dashboard', [DashboardController::class, 'index'])->name("showAdminDashboard");
        Route::get('/admin-events', [AdminEventController::class, 'index'])->name("showAdminEvent");
        Route::get('/admin-create-events', [AdminEventController::class, 'create'])->name("createEvent");
        Route::post('/admin-store-events', [AdminEventController::class, 'store'])->name("storeEvent");

        Route::get('/admin-tickets/{id}', [AdminTicketController::class, 'index'])->name("showAdminTicket");
        Route::get('/admin-create-tickets/{id}', [AdminTicketController::class, 'create'])->name("createTicket");
        Route::post('/admin-store-ticket', [AdminTicketController::class, 'store'])->name("storeTicket");
        });
        Route::middleware(['revalidate', 'auth'])->group(function () {
            Route::get('/paynow', [\App\Http\Controllers\Clients\HomeController::class,'paynow'])->name('paynow');

            Route::get('/checkout', [\App\Http\Controllers\Clients\HomeController::class,'checkout'])->name('checkout');
            Route::post('/paynow-payment', [\App\Http\Controllers\Clients\HomeController::class,'paynow'])->name('paynowPayment');
        });

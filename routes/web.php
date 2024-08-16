<?php


use App\Http\Controllers\Front\HomeController;
use App\Http\Controllers\Admin\AdminHomeController;
use App\Http\Controllers\Admin\AdminLoginController;
use App\Http\Controllers\Admin\AdminProfileController;
use App\Http\Controllers\Admin\EventController;
use App\Http\Controllers\Admin\PresensiController;
use App\Http\Controllers\User\SignUpController;
use App\Http\Controllers\User\LoginController;
use App\Http\Controllers\User\UserHomeController;
use App\Http\Controllers\User\UserProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


// Front 

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/berita', [HomeController::class, 'berita'])->name('berita');
Route::get('/detail-berita', [HomeController::class, 'detail_berita'])->name('detail_berita');


// Admin 
Route::prefix('admin')->group(function() {
    Route::get('/login', [AdminLoginController::class, 'login'])->name('admin_login');
    Route::post('/login-submit', [AdminLoginController::class, 'login_submit'])->name('admin_login_submit');
    Route::get('/forget-password', [AdminLoginController::class, 'forget_password'])->name('admin_forget_password');
    Route::post('/forget-password-submit', [AdminLoginController::class, 'forget_password_submit'])->name('admin_forget_password_submit');
    Route::get('/reset-password/{token}/{email}', [AdminLoginController::class, 'reset_password'])->name('admin_reset_password');
    Route::post('/reset-password-submit', [AdminLoginController::class, 'reset_password_submit'])->name('admin_reset_password_submit');
    Route::get('/logout', [AdminLoginController::class, 'logout'])->name('admin_logout');
  
    
    Route::middleware(['auth:admin','role:main_admin'])->group(function() 
    {
        Route::get('/home', [AdminHomeController::class, 'index'])->name('admin_home');
        Route::get('/profile', [AdminProfileController::class, 'profile'])->name('admin_profile');
        Route::post('/profile-submit', [AdminProfileController::class, 'profile_submit'])->name('admin_profile_submit');
    });
    
    Route::middleware(['auth:admin','role:extracurricular_admin'])->group(function() 
    {
        Route::get('/extracurricular/home', [AdminHomeController::class, 'eskul_index'])->name('admin_extracurricular_home');
        // Profile
        Route::get('/extracurricular/profile', [AdminProfileController::class, 'eskul_profile'])->name('admin_extracurricular_profile');
        Route::post('/extracurricular/profile-submit', [AdminProfileController::class, 'eskul_profile_submit'])->name('admin_extracurricular_profile_submit');
        // Presensi
        Route::get('/extracurricular/presensi', [PresensiController::class, 'index'])->name('admin_extracurricular_presensi');
        Route::get('/extracurricular/form/presensi', [EventController::class, 'form'])->name('admin_extracurricular_presensi_form');
        // Route::post('/extracurricular/form/presensi-submit', [EventController::class, 'store'])->name('admin_extracurricular_presensi_form_submit');
    });
  });

// User
    Route::get('/sign_up', [SignUpController::class, 'index'])->name('sign_up');
    Route::post('/sign_up-submit', [SignUpController::class, 'sign_up_submit'])->name('sign_up_submit');
    Route::get('/login', [LoginController::class, 'login'])->name('login');
    Route::post('/login-submit', [LoginController::class, 'login_submit'])->name('login_submit');
    Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
    Route::get('forget_password', [LoginController::class, 'forget_password'])->name('forget_password');

    Route::get('/dashboard', [UserHomeController::class, 'index'])->name('user_dashboard')->middleware('user:web');
    Route::get('/profile', [UserProfileController::class, 'profile'])->name('user_profile')->middleware('user:web');





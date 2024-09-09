<?php

use App\Http\Controllers\Admin\AdminBeritaController;
use App\Http\Controllers\Admin\AdminEskulController;
use App\Http\Controllers\Front\HomeController;
use App\Http\Controllers\Admin\AdminHomeController;
use App\Http\Controllers\Admin\AdminLoginController;
use App\Http\Controllers\Admin\AdminMemberController;
use App\Http\Controllers\Admin\AdminProfileController;
use App\Http\Controllers\Admin\EskulController;
use App\Http\Controllers\Admin\PresensiController;
use App\Http\Controllers\BeritaController;
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
Route::get('/berita', [BeritaController::class, 'index'])->name('berita');
Route::get('/detail-berita', [BeritaController::class, 'show'])->name('detail_berita');


// Admin
Route::prefix('admin')->group(function () {
    Route::get('/login', [AdminLoginController::class, 'login'])->name('admin_login');
    Route::post('/login-submit', [AdminLoginController::class, 'login_submit'])->name('admin_login_submit');
    Route::get('/forget-password', [AdminLoginController::class, 'forget_password'])->name('admin_forget_password');
    Route::post('/forget-password-submit', [AdminLoginController::class, 'forget_password_submit'])->name('admin_forget_password_submit');
    Route::get('/reset-password/{token}/{email}', [AdminLoginController::class, 'reset_password'])->name('admin_reset_password');
    Route::post('/reset-password-submit', [AdminLoginController::class, 'reset_password_submit'])->name('admin_reset_password_submit');
    Route::middleware('auth')->group(function () {
    Route::get('/logout', [AdminLoginController::class, 'logout'])->name('admin_logout');


        Route::middleware('admin')->group(function () {
            Route::get('/home', [AdminHomeController::class, 'index'])->name('admin_home');
            // Admin
            Route::get('/show', [AdminEskulController::class, 'index'])->name('admin_show');
            Route::get('/add', [AdminEskulController::class, 'add'])->name('add_admin');
            Route::post('-submit', [AdminEskulController::class, 'store'])->name('add_admin_submit');
            Route::get('/edit/{id}', [AdminEskulController::class, 'edit'])->name('admin_edit');
            Route::post('/update/{id}', [AdminEskulController::class, 'update'])->name('admin_update');
            Route::get('/delete/{id}', [AdminEskulController::class, 'delete'])->name('admin_delete');
            // Member
            Route::get('/member/show', [AdminMemberController::class, 'index'])->name('member_show');
            Route::get('/member/delete/{id}', [AdminMemberController::class, 'delete'])->name('member_delete');
            // Profile
            Route::get('/profile', [AdminProfileController::class, 'profile'])->name('admin_profile');
            Route::post('/profile-submit', [AdminProfileController::class, 'profile_submit'])->name('admin_profile_submit');
            // Eskul
            Route::get('/eskul/show', [EskulController::class, 'index'])->name('eskul_show');
            Route::get('/eskul/add', [EskulController::class, 'add'])->name('eskul_add');
            Route::post('/eskul/add-submit', [EskulController::class, 'store'])->name('eskul_add_submit');
            Route::get('/eskul/edit/{id}', [EskulController::class, 'edit'])->name('eskul_edit');
            Route::post('/eskul/update/{id}', [EskulController::class, 'update'])->name('eskul_update');
            Route::get('/eskul/delete/{id}', [EskulController::class, 'delete'])->name('eskul_delete');
            // Berita
            Route::get('/berita-category/show', [AdminBeritaController::class, 'all_news_categories'])->name('news_category_show');
            Route::get('/berita-category/add', [AdminBeritaController::class, 'news_categories_add'])->name('news_category_add');
            Route::post('/berita-category/submit', [AdminBeritaController::class, 'news_categories_store'])->name('news_category_submit');
            Route::get('/berita-category/edit/{id}', [AdminBeritaController::class, 'news_categories_edit'])->name('news_category_edit');
            Route::post('/berita-category/update/{id}', [AdminBeritaController::class, 'news_categories_update'])->name('news_category_update');
            Route::get('/berita-category/delete/{id}', [AdminBeritaController::class, 'news_categories_delete'])->name('news_category_delete');
            Route::get('/berita/show', [AdminBeritaController::class, 'all_news'])->name('news_show');
            Route::get('/berita/add',[AdminBeritaController::class,'add'])->name('admin_news_add');
            Route::post('/berita-submit',[AdminBeritaController::class,'store_news'])->name('admin_news_submit');
            Route::get('/berita/edit/{id}',[AdminBeritaController::class, 'news_edit'])->name ('admin_news_edit');

        });

        Route::middleware('role')->group(function () {
            Route::get('/extracurricular/home', [AdminHomeController::class, 'eskul_index'])->name('admin_extracurricular_home');
            // Profile
            Route::get('/extracurricular/profile', [AdminProfileController::class, 'eskul_profile'])->name('admin_extracurricular_profile');
            Route::post('/extracurricular/profile-submit', [AdminProfileController::class, 'eskul_profile_submit'])->name('admin_extracurricular_profile_submit');
            // Member
            Route::get('/extracurricular/member', [AdminMemberController::class, 'member_eskul'])->name('member_eskul_show');
            // Presensi
            Route::get('/extracurricular/presensi', [PresensiController::class, 'index'])->name('admin_extracurricular_presensi');
            Route::post('/extracurricular/presensi-submit', [PresensiController::class, 'store'])->name('admin_extracurricular_presensi_form_submit');
            Route::get('/extracurricular/presensi/show/{event_id}', [PresensiController::class, 'presensi'])->name('admin_extracurricular_presensi_show');            
            Route::post('/extracurricular/presensi/{event_id}/submit', [PresensiController::class, 'presensi_submit'])->name('admin_extracurricular_presensi_submit');
            Route::get('/extracurricular/presensi/history', [PresensiController::class, 'history'])->name('presensi_history_all');   
            Route::get('/extracurricular/presensi/generate-report', [PresensiController::class, 'generateReport'])->name('generate_report');    
        });
    });
});
// User
Route::get('/sign_up', [SignUpController::class, 'index'])->name('sign_up');
Route::post('/sign_up-submit', [SignUpController::class, 'sign_up_submit'])->name('sign_up_submit');
Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/login-submit', [LoginController::class, 'login_submit'])->name('login_submit');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('forget_password', [LoginController::class, 'forget_password'])->name('forget_password');
Route::get('confirmation_code', [LoginController::class, 'confirmation_code'])->name('confirmation_code');
Route::get('/dashboard', [UserHomeController::class, 'index'])->name('user_dashboard')->middleware('user:web');
Route::get('/profile', [UserProfileController::class, 'profile'])->name('user_profile')->middleware('user:web');

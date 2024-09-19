<?php
use Illuminate\Support\Facades\Route;
// Front
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\Admin\TaskController;

use App\Http\Controllers\Front\HomeController;
use App\Http\Controllers\User\LoginController;
use App\Http\Controllers\User\NilaiController;
use App\Http\Controllers\Admin\EskulController;
use App\Http\Controllers\User\SignUpController;
use App\Http\Controllers\Front\ContactController;
use App\Http\Controllers\User\UserHomeController;
use App\Http\Controllers\User\UserTaskController;
use App\Http\Controllers\Admin\PresensiController;
use App\Http\Controllers\Admin\AdminHomeController;
use App\Http\Controllers\Admin\AdminEskulController;

use App\Http\Controllers\Admin\AdminLoginController;
use App\Http\Controllers\User\UserProfileController;
use App\Http\Controllers\Admin\AdminBeritaController;
use App\Http\Controllers\Admin\AdminMemberController;
use App\Http\Controllers\Admin\AdminProfileController;
use App\Http\Controllers\Admin\AdminHomePageController;
use App\Http\Controllers\Admin\AdminKomentarController;
use App\Http\Controllers\Admin\AdminNilaiAkhirController;
use App\Http\Controllers\Front\KomentarController;

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
Route::get('/detail-berita/{id}', [HomeController::class, 'detail_berita'])->name('detail_berita');
Route::post('/send-contact', [ContactController::class, 'send_messagee'])->name('send_contact');
Route::post('/send-comentar', [KomentarController::class, 'store'])->name('send_comentar')->middleware('user');


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
            Route::post('/berita/update/{id}',[AdminBeritaController::class, 'news_update'])->name ('admin_news_update');
            Route::get('/berita/delete/{id}', [AdminBeritaController::class, 'news_delete'])->name('admin_news_delete');
            Route::get('/berita/komentars', [AdminKomentarController::class, 'index'])->name('admin_komentar');
            
            // Konten Manajemen 
            Route::get('/home-banner', [AdminHomePageController::class, 'banner'])->name('home_banner_show');
            Route::post('home-banner-submit', [AdminHomePageController::class, 'banner_submit'])->name('home_banner_submit');
            Route::get('/about/show',[AdminHomePageController::class,'about'])->name('about_show');
            Route::post('/about-submit', [AdminHomePageController::class, 'about_submit'])->name('about_submit');
            Route::get('/home-service-section', [AdminHomePageController::class, 'service'])->name('home_service_show');
            Route::post('home-service-submit', [AdminHomePageController::class, 'service_submit'])->name('home_service_submit');
            Route::get('/testimonial-section', [AdminHomePageController::class, 'testimonial'])->name('home_testimonial_show');
            Route::post('home-testimonial-submit', [AdminHomePageController::class, 'testimonial_submit'])->name('home_testimonial_submit'); 
            Route::get('/footer-section', [AdminHomePageController::class, 'footer'])->name('home_footer_show');
            Route::post('home-footer-submit', [AdminHomePageController::class, 'footer_submit'])->name('home_footer_submit'); 

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
            Route::get('/extracurricular/presensi/create', [PresensiController::class, 'create'])->name('presensi_create');
            Route::get('/extracurricular/presensi/history', [PresensiController::class, 'history'])->name('presensi_history_all');   
            Route::get('/extracurricular/presensi/preview-report', [PresensiController::class, 'preview_report'])->name('preview_report'); 
            // Manajemen Tugas 
            Route::get('/extracurricular/task-manajemen', [TaskController::class, 'index'])->name('admin_extracurricular_task_manajement');
            Route::get('/extracurricular/task-manajemen/all', [TaskController::class, 'all'])->name('admin_extracurricular_task_manajement_all');
            Route::get('/extracurricular/task-manajemen/create', [TaskController::class, 'create'])->name('admin_extracurricular_task_manajement_create');
            Route::post('/extracurricular/task-manajemen/submit', [TaskController::class, 'store'])->name('admin_extracurricular_task_manajement_create_submit');
            Route::get('/extracurricular/task-manajemen/edit/{id}', [TaskController::class, 'edit'])->name('admin_extracurricular_task_manajement_edit');
            Route::post('/extracurricular/task-manajemen/update/{id}', [TaskController::class, 'update'])->name('admin_extracurricular_task_manajement_update');
            Route::get('/extracurricular/task-manajemen/delete/{id}', [TaskController::class, 'delete'])->name('admin_extracurricular_task_manajement_delete');                 
            // Nilai Akhir
            Route::get('/extracurricular/grade', [AdminNilaiAkhirController::class, 'index'])->name('admin_extracurricular_grade'); 
            Route::post('/extracurricular/grade-submit', [AdminNilaiAkhirController::class, 'store'])->name('admin_extracurricular_grade_submit'); 
         });
    });
});


// User
    Route::get('/sign_up', [SignUpController::class, 'index'])->name('sign_up');
    Route::post('/sign_up-submit', [SignUpController::class, 'sign_up_submit'])->name('sign_up_submit');
    Route::get('/login', [LoginController::class, 'login'])->name('login');
    Route::post('/login-submit', [LoginController::class, 'login_submit'])->name('login_submit');
    Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
    Route::get('/forget-password', [LoginController::class, 'forget_password'])->name('user_forget_password');
    Route::post('/forget-password-submit', [LoginController::class, 'forget_password_submit'])->name('user_forget_password_submit');
    Route::get('/reset-password/{token}/{email}', [LoginController::class, 'reset_password'])->name('user_reset_password');
    Route::post('/reset-password-submit', [LoginController::class, 'reset_password_submit'])->name('user_reset_password_submit');

    Route::get('/dashboard', [UserHomeController::class, 'index'])->name('user_dashboard')->middleware('user:web');
    Route::get('/profile', [UserProfileController::class, 'profile'])->name('user_profile')->middleware('user:web');
    Route::post('/profile-submit', [UserProfileController::class, 'profile_submit'])->name('user_profile_submit')->middleware('user:web');
    Route::get('/task',[UserTaskController::class, 'index'])->name('user_task')->middleware('user:web');
    Route::get('/nilai-akhir',[NilaiController::class, 'index'])->name('user_nilai_akhir')->middleware('user:web');




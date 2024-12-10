<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admincontroller;
use App\Http\Controllers\Admin\AdminSkillController;
use App\Http\Controllers\Admin\AdminAboutController;
use App\Http\Controllers\Admin\AdminContactController;
use App\Http\Controllers\Admin\AdminCertificateController;
use App\Http\Controllers\Admin\AdminProjectController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/', [HomeController::class, 'index'])->name('home.index');
Route::post('/', [AdminContactController::class, 'store'])->name('admin.contact.store');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::prefix('admin')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'index'])->middleware('auth', 'admin');
    Route::get('/home', [AdminController::class, 'home'])->name('admin.home');
    Route::get('/about', [AdminController::class, 'about'])->name('admin.about');
    Route::get('/certificate', [AdminController::class, 'certificate'])->name('admin.certificate');
    Route::get('/project', [AdminController::class, 'project'])->name('admin.project');
    Route::get('/skill', [AdminController::class, 'skill'])->name('admin.skill');
    Route::get('/contact', [AdminController::class, 'contact'])->name('admin.contact');

    Route::resource('/dashboard/skill', AdminSkillController::class);
    Route::get('/skill', [AdminSkillController::class, 'index'])->middleware(['auth', 'admin'])->name('admin.skill');
    Route::get('/skill/create', [AdminSkillController::class, 'create'])->middleware(['auth', 'admin'])->name('admin.skill.create');
    Route::get('/skill/{id}', [AdminSkillController::class, 'show'])->middleware(['auth', 'admin'])->name('admin.skill.show');
    Route::post('/skill', [AdminSkillController::class, 'store'])->middleware(['auth', 'admin'])->name('admin.skill.store');
    Route::delete('/skill/{id}', [AdminSkillController::class, 'destroy'])->middleware(['auth', 'admin'])->name('admin.skill.destroy');
    Route::get('/skill/{id}/edit', [AdminSkillController::class, 'edit'])->middleware(['auth', 'admin'])->name('admin.skill.edit');
    Route::put('/skill/{id}', [AdminSkillController::class, 'update'])->middleware(['auth', 'admin'])->name('admin.skill.update');

    Route::resource('/dashboard/about', AdminAboutController::class);
    Route::get('/about', [AdminAboutController::class, 'index'])->middleware(['auth', 'admin'])->name('admin.about');
    Route::get('/about/create', [AdminAboutController::class, 'create'])->middleware(['auth', 'admin'])->name('admin.about.create');
    Route::get('/about/{id}', [AdminAboutController::class, 'show'])->middleware(['auth', 'admin'])->name('admin.about.show');
    Route::post('/about', [AdminAboutController::class, 'store'])->middleware(['auth', 'admin'])->name('admin.about.store');
    Route::delete('/about/{id}', [AdminAboutController::class, 'destroy'])->middleware(['auth', 'admin'])->name('admin.about.destroy');
    Route::get('/about/{id}/edit', [AdminAboutController::class, 'edit'])->middleware(['auth', 'admin'])->name('admin.about.edit');
    Route::put('/about/{id}', [AdminAboutController::class, 'update'])->middleware(['auth', 'admin'])->name('admin.about.update');

    Route::resource('/dashboard/certificate', AdminCertificateController::class);
    Route::get('/certificate', [AdminCertificateController::class, 'index'])->middleware(['auth', 'admin'])->name('admin.certificate');
    Route::get('/certificate/create', [AdminCertificateController::class, 'create'])->middleware(['auth', 'admin'])->name('admin.certificate.create');
    Route::get('/certificate/{id}', [AdminCertificateController::class, 'show'])->middleware(['auth', 'admin'])->name('admin.certificate.show');
    Route::post('/certificate', [AdminCertificateController::class, 'store'])->middleware(['auth', 'admin'])->name('admin.certificate.store');
    Route::delete('/certificate/{id}', [AdminCertificateController::class, 'destroy'])->middleware(['auth', 'admin'])->name('admin.certificate.destroy');
    Route::get('/certificate/{id}/edit', [AdminCertificateController::class, 'edit'])->middleware(['auth', 'admin'])->name('admin.certificate.edit');
    Route::put('/certificate/{id}', [AdminCertificateController::class, 'update'])->middleware(['auth', 'admin'])->name('admin.certificate.update');
    
    Route::resource('/dashboard/project', AdminProjectController::class);
    Route::get('/project', [AdminProjectController::class, 'index'])->middleware(['auth', 'admin'])->name('admin.project');
    Route::get('/project/create', [AdminProjectController::class, 'create'])->middleware(['auth', 'admin'])->name('admin.project.create');
    Route::get('/project/{id}', [AdminProjectController::class, 'show'])->middleware(['auth', 'admin'])->name('admin.project.show');
    Route::post('/project', [AdminProjectController::class, 'store'])->middleware(['auth', 'admin'])->name('admin.project.store');
    Route::delete('/project/{id}', [AdminProjectController::class, 'destroy'])->middleware(['auth', 'admin'])->name('admin.project.destroy');
    Route::get('/project/{id}/edit', [AdminProjectController::class, 'edit'])->middleware(['auth', 'admin'])->name('admin.project.edit');
    Route::put('/project/{id}', [AdminProjectController::class, 'update'])->middleware(['auth', 'admin'])->name('admin.project.update');

    Route::resource('/dashboard/contact', AdminContactController::class);
    Route::get('/contact', [AdminContactController::class, 'index'])->middleware(['auth', 'admin'])->name('admin.contact');
    Route::get('/contact/create', [AdminContactController::class, 'create'])->middleware(['auth', 'admin'])->name('admin.contact.create');
    Route::get('/contact/{id}', [AdminContactController::class, 'show'])->middleware(['auth', 'admin'])->name('admin.contact.show');
    Route::delete('/contact/{id}', [AdminContactController::class, 'destroy'])->middleware(['auth', 'admin'])->name('admin.contact.destroy');
    Route::get('/contact/{id}/edit', [AdminContactController::class, 'edit'])->middleware(['auth', 'admin'])->name('admin.contact.edit');
    Route::put('/contact/{id}', [AdminContactController::class, 'update'])->middleware(['auth', 'admin'])->name('admin.contact.update');
});

require __DIR__ . '/auth.php';
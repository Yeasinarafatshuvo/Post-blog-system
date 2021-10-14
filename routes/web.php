<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;




//Frontend Route Start
Route::get('/', [FrontendController::class, 'index']);
Route::get('/frontend/post', [FrontendController::class, 'show_post'])->name('frontend.post');
Route::get('/frontend/member', [FrontendController::class, 'show_member'])->name('frontend.member');
Route::get('/frontend/about', [FrontendController::class, 'about'])->name('frontend.about');


Route::middleware(['auth'])->group(function(){
    // Admin Route
    Route::get('/admin/frontpage',[AdminController::class, 'show_frontpage'])->name('admin.frontpage');
    //Member route start
    Route::get('/admin/member/add',[MemberController::class, 'create'])->name('admin.member.create');
    Route::post('/admin/member/add',[MemberController::class, 'store'])->name('admin.member.store');
    Route::get('/admin/member/show',[MemberController::class, 'show_member'])->name('admin.member.show');
    Route::get('/admin/member/edit/{id}',[MemberController::class, 'edit'])->name('admin.member.edit');
    Route::put('/admin/member/edit/{id}',[MemberController::class, 'update'])->name('admin.member.update');
    Route::get('/admin/member/delete/{id}',[MemberController::class, 'destroy'])->name('admin.member.delete');
    // member route end

    //start post route

    Route::get('/admin/post/add', [PostController::class, 'create'])->name('admin.post.create');
    Route::post('/admin/post/add', [PostController::class, 'store'])->name('admin.post.store');
    Route::get('/admin/post/show', [PostController::class, 'show_post'])->name('admin.post.show');
    Route::get('/admin/post/edit/{id}', [PostController::class, 'edit'])->name('admin.post.edit');
    Route::put('/admin/post/edit/{id}', [PostController::class, 'update'])->name('admin.post.edit');
    Route::get('/admin/post/delete/{id}', [PostController::class, 'destroy'])->name('admin.post.delete');

    //end post route

    //logout route
    Route::get('/admin/logout', [AuthenticatedSessionController::class, 'destroy'])->name('admin.logout');

});





Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


require __DIR__.'/auth.php';

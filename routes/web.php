<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\DashboardPostController;
use App\Http\Controllers\DashboardAdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PasswordController;
use App\Http\Controllers\PostCommentController;
use App\Models\Category;
use App\Models\User;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function(){
    return view('home', [
        "title" => "Home",
        'active' => 'home'
    ]);
});


//challenge option 
Route::get('/challenge', function(){
    return view('challenge', [
        "title" => "challenge"
    ]);
});


Route::get('/about', function(){
    return view('about', [
        "title" => "about",
        'active' => 'about',
        "name" => "Firda Rosiana",
        "email" => "rosiana@gmai.ac.id",
        "image" => "3.jpg"
    ]);
});

Route::get('/login',[LoginController::class, 'login'])->name('login')->middleware('guest');
Route::post('/login',[LoginController::class, 'authenticate']); 
Route::post('/logout',[LoginController::class, 'logout']);


Route::get('/register',[RegisterController::class,'register'])->middleware('guest');
Route::post('/register',[RegisterController::class,'store']);

Route::get('/dashboard', function(){
    return view('dashboard.index',[
        'title' => 'My dashboard',
        'active' => 'dashboard'
        ]);
})->middleware('auth');

Route::get('/dashboard/posts/checkSlug', [DashboardPostController::class, 'checkSlug'])
->middleware('auth');

Route::resource('/dashboard/posts', DashboardPostController::class)->middleware('auth');


Route::get('/forgotpass', function(){
    return view('forgotpass', [
        "title" => "forgotpass"
    ]);
});

Route::get('/settings', function(){
    return view('/user/settings', [
        "title" => "settings"
    ]);
});

Route::get('/changepw', function(){
    return view('/user/changepw', [
        "title" => "Ubah Password"
    ]);
});


Route::get('/posts', [PostController::class, 'index']);
Route::get('posts/{post:slug}', [PostController::class, 'show'])->middleware('auth');

Route::get('/', function(){
    return view('home', [
        'title' => 'Home',
        'active' => 'home',
        'categories' => Category::all(),
    ]);
});

Route::get('/categories/{category:slug}', function(Category $category) {
    return view('posts',[
        'title' => "Post By Category :  $category->name",
        'active' => 'categories',
        'posts' => $category->posts->load('category', 'user')
    ]);
});

#user settings
Route::get('/account/profile', [UserController::class, 'index']);
Route::patch('/account', [UserController::class,'update'])
->name('account.update');

#admin dashboard
Route::get('/dashboard/admin', [DashboardAdminController::class, 'index']);
Route::get('/dashboard/admin/category', [CategoryController::class, 'index']);
Route::get('/dashboard/admin/user', [UserController::class, 'dashboard_user']);

#category
Route::post('/dashboard/admin/category/store', [CategoryController::class,'store']);
Route::get('/dashboard/admin/category/checkSlug', [CategoryController::class, 'checkSlug']);
Route::get('/dashboard/admin/category/delete{id}', [CategoryController::class,'delete']);


Route::post('/post-comment/{id}', [PostCommentController::class,'store']);
// Route::get('/post-comment/delete{id}', [PostCommentController::class,'delete']);

#password change for user
Route::get('/account/change-password', [PasswordController::class,'edit'])->middleware('auth');
Route::patch('password', [PasswordController::class,'update'])
        ->name('account.password.update')->middleware('auth');


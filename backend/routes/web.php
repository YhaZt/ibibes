<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JoinController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;

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

// Route::get('/', function () {
//     return view('home.index');
// });
// Route::get('/contact', function () {
//     return view('home.contact');
// });
// Route::get('/about', function () {
//     return view('home.about');
// });
// Route::get('/join', function () {
//     return view('Homepage.join');
// });
Route::get('/', [HomeController::class, 'index']);
Route::post('login', [AuthController::class, 'login'])->name('login');

Route::get('/join-mentor', function () {
    return view('join.register-mentor');
});
Route::get('/join-investor', function () {
    return view('join.register-investor');
});
Route::get('/test', function () {
    return view('news.index');
});
Route::get('/program', function () {
    return view('Homepage.program');
});
Route::get('/news-announcement', [NewsController::class, 'index'])->name('home.news');
Route::get('/manage-news', [NewsController::class, 'create'])->name('admin.news-management');
Route::get('/news/{id}', [NewsController::class, 'show'])->name('news.show');
Route::resource('news', NewsController::class);

Route::get('/join-incubatee', [JoinController::class, 'showJoinIncubateeForm'])->name('showJoinIncubateeForm');
Route::post('/join-incubatees', [JoinController::class, 'store_Incubatee'])->name('incubatees.store_Incubatee');
Route::post('/join-mentors', [JoinController::class, 'store_Mentor'])->name('mentors.store_Mentor');
Route::post('/join-investors', [JoinController::class, 'store_Investor'])->name('investors.store_investor');


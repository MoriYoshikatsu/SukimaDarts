<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppuserController;  //外部にあるPostControllerクラスをインポート。
use App\Http\Controllers\FollowController;
use App\Http\Controllers\TripController;
use App\Http\Controllers\GoodController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\SpotCategoryController;
use App\Http\Controllers\SpotController;
use App\Http\Controllers\SpotTripController;

/*Route::get('/', function () {
    return view('home2');
   });
*/

Route::get('/', [SpotCategoryController::class, 'destination'])->name('destination');
Route::get('/firstpin', [SpotController::class, 'firstpin'])->name('firstpin');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\WorkerController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', function () {
    return redirect()->route('products.index');
});

Route::resource('products', ProductController::class);
Route::resource('worker', WorkerController::class);
// Route::get('/worker/insert',[WorkerController::class,'mywork'])->name('worker.store');
// Route::post('/worker/insert',[WorkerController::class,'myinsert'])->name('worker.store');
//  Route::get('worker/select',[WorkerController::class,'select'])->name('worker.select');
//  Route::get('worker/select/{worker}/worker.edit',[WorkerController::class,'edit'])->name('worker.update');
//  Route::put('worker/select{worker}/worker.edit',[WorkerController::class,'myupdate'])->name('worker.edit');
//  Route::delete('worker/select{worker}',[WorkerController::class,'destroy'])->name('worker.destroy');




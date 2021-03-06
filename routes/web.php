<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::get('/examples', function () {
    return view('examples');
})->name('examples');

Route::post('/contact', function (Request $request) {
    $contact = $request->validate([
        'name' => 'required',
        'email' => 'required|email',
        'phone' => 'required|numeric',
        'message' => 'required',
    ]);

    return back()->with('success_message', 'We received your message successfully and will get back to you shortly!');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

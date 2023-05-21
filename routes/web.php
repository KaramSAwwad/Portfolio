<?php

use App\Http\Controllers\DownloadController;
use App\Http\Middleware\LanguageManager;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LangController;
use Mcamara\LaravelLocalization\LaravelLocalization;

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


Route::group(['prefix' => (new Mcamara\LaravelLocalization\LaravelLocalization)->setLocale(),'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]], function()
{
    /** ADD ALL LOCALIZED ROUTES INSIDE THIS GROUP **/
    Route::get('/', function()
    {
        return View('welcome');
    })->name('show.welcome.page');

    Route::get('/download', [DownloadController::class, 'downloadFile'])->name('download.my.cv');
    Route::post('/send-email', [App\Http\Controllers\ContactController::class, 'sendEmail'])->name('send-email');

});

//Route::get('/download/{filename}', [DownloadController::class, 'downloadFile']);





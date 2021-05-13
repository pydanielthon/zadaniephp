<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApkaController;

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

Route::get('products', [ApkaController::class, 'index']);
// Route::get('products/create-step-one', 'ApkaController@createStepOne')->name('products.create.step.one');
Route::get(
    'products/create-step-one',
    [ApkaController::class, 'createStepOne']
)->name('apka.create.step.one');

Route::post(
    'products/create-step-one',
    [ApkaController::class, 'createStepOne']
)->name('apka.create.step.one.post');

// Route::post('products/create-step-one', 'ApkaController@postCreateStepOne')->name('products.create.step.one.post');

// Route::get('products/create-step-two', 'ApkaController@createStepTwo')->name('products.create.step.two');
// Route::post('products/create-step-two', 'ApkaController@postCreateStepTwo')->name('products.create.step.two.post');

// Route::get('products/create-step-three', 'ApkaController@createStepThree')->name('products.create.step.three');
// Route::post('products/create-step-three', 'ApkaController@postCreateStepThree')->name('products.create.step.three.post');
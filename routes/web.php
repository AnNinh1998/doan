<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\KhoaController;
use App\Http\Controllers\BacsyController;
use App\Http\Controllers\KhachhangController;
use App\Http\Controllers\DichvuController;

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
//Front end
Route::get('/',[HomeController::class,'index']);
Route::get('/trang-chu',[HomeController::class,'index']);
//Customer
Route::get('admin/cilent/danhsach',[KhachhangController::class,'getDanhsach']);
Route::get('admin/cilent/Singup',[KhachhangController::class,'getDangky']);
Route::post('admin/cilent/Singup',[KhachhangController::class,'postDangky']);
//admin
Route::get('/admin',[AdminController::class,'index']);
Route::get('/dashboard',[AdminController::class,'showdashboard']);
Route::post('/admin_dashboard',[AdminController::class,'dashboard']);
Route::get('/logout',[AdminController::class,'logout']);

//KhoaController
Route::group(['prefix'=>'admin'], function(){
    //faculty
    Route::group(['prefix'=>'khoa'],function(){
        Route::get('danhsach',[KhoaController::class,'getDanhsach']);

        Route::get('/them',[KhoaController::class,'getThem']);
        Route::post('/them',[KhoaController::class,'postThem']);
    });

    //doctor
    Route::group(['prefix'=>'bacsy'],function(){
        Route::get('danhsach',[BacsyController::class,'getDanhsach']);

        Route::get('/them',[BacsyController::class,'getThem']);
        Route::post('/them',[BacsyController::class,'postThem']);

        Route::get('sua/{id}',[BacsyController::class,'getSua']);
        Route::post('sua/{id}',[BacsyController::class,'postSua']);

        Route::get('xoa/{id}',[BacsyController::class,'getXoa']);
    });

    //Service
    Route::group(['prefix'=>'dichvu'],function(){
        Route::get('danhsach',[DichvuController::class,'getDanhsach']);

        Route::get('/them',[DichvuController::class,'getThem']);
        Route::post('/them',[DichvuController::class,'postThem']);

        Route::get('sua/{id}',[DichvuController::class,'getSua']);
        Route::post('sua/{id}',[DichvuController::class,'postSua']);

        Route::get('xoa/{id}',[DichvuController::class,'getXoa']);

        Route::post('admin/dichvu/danhsach',[DichvuController::class,'export_csv']);

        Route::get('chi-tiet-dich-vu/{product_id}',[DichvuController::class,'detail_Service']);
    });
});
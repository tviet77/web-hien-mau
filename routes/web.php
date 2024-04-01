<?php

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
    return view('block.index');
})->name('trangchu');
// thao tác đăng nhập
Route::get('/login',[
    'as'=>'taikhoan.login',
    'uses'=>'UserController@login',
]);

Route::post('/xulilogin',[
    'as'=>'taikhoan.xulilogin',
    'uses'=>'UserController@xulilogin',
]);

Route::get('/dangxuat',[
    'as'=>'taikhoan.dangxuat',
    'uses'=>'UserController@dangxuat',
]);

// can bo
Route::prefix('taikhoan')->group(function(){
    Route::get('/index',[
        'as'=>'taikhoan.index',
        'uses'=>'UserController@index_taikhoan',
    ]);
    Route::get('/getbyid/{id}',[
        'as'=>'taikhoan.getbyid',
        'uses'=>'UserController@getbyid',
    ]);
    Route::put('/edit',[
        'as'=>'taikhoan.edit',
        'uses'=>'UserController@edit',
    ]);
    Route::get('/delete/{id}',[
        'as'=>'taikhoan.delete',
        'uses'=>'UserController@delete',
    ]);
});
Route::prefix('import')->group(function(){
    Route::get('/index_tonvinh',[
        'as'=>'import.index_tonvinh',
        'uses'=>'ExceltonvinhController@index_tonvinh',
    ]);
    Route::post('/xuly_tonvinh',[
        'as'=>'import.xuly_tonvinh',
        'uses'=>'ExceltonvinhController@xuly_tonvinh',
    ]);

});
// kiểm duyệt
Route::prefix('kiemduyet')->group(function(){
    Route::get('/index',[
        'as'=>'kiemduyet.index',
        'uses'=>'LichsuexcelltonvinhController@index_kiemduyet',
    ]);
    Route::post('/xulyimport_one',[
        'as'=>'kiemduyet.xulyimport_one',
        'uses'=>'LichsuexcelltonvinhController@xulyimport_one',
    ]);
    Route::post('/xulyimport_check',[
        'as'=>'kiemduyet.xulyimport_check',
        'uses'=>'LichsuexcelltonvinhController@xulyimport_check',
    ]);
    Route::get('/getbyvungdot/{id_vung}/{id_dot}',[
        'as'=>'kiemduyet.getbyvungdot',
        'uses'=>'LichsuexcelltonvinhController@getbyvungdot',
    ]);
});
Route::prefix('nguoihienmau')->group(function(){
    Route::get('/index',[
        'as'=>'nguoihienmau.index',
        'uses'=>'NguoihienmauController@index',
    ]);
    Route::post('/xulitimkiem',[
        'as'=>'nguoihienmau.xulitimkiem',
        'uses'=>'NguoihienmauController@xulitimkiem',
    ]);
});

Route::prefix('timkiem')->group(function(){
    Route::get('/timkiemnguoi',[
        'as'=>'timkiem.timkiemnguoi',
        'uses'=>'TimkiemController@timkiemnguoi',
    ]);
    Route::post('/xulitimkiem',[
        'as'=>'timkiem.xulitimkiem',
        'uses'=>'TimkiemController@xulitimkiem',
    ]);
    Route::get('/timkiemedit/{id}',[
        'as'=>'timkiem.timkiemedit',
        'uses'=>'TimkiemController@timkiemedit',
    ]);
    Route::post('/xulysuatimkiem',[
        'as'=>'timkiem.xulysuatimkiem',
        'uses'=>'TimkiemController@xulysuatimkiem',
    ]);



});

    Route::get('/xuatfiletonvinh',[
        'as'=>'xuatfiletonvinh',
        'uses'=>'LichsuexcelltonvinhController@xuatfileindex',
    ]);
    Route::get('/quenmatkhau',[
        'as'=>'quenmatkhau',
        'uses'=>'UserController@quenmatkhau',
    ]);

// tuowngf

Route::get('/import/benhvien','ExcelbenhvienController@import_show')-> name('page.import_show');
Route::post('/import/benhvien','ExcelbenhvienController@import_stores') -> name('page.import_stores');
// taif khoan
Route::get('/register','UserController@show_register') -> name('page.show_register');
Route::post('register','UserController@store') -> name('page.post');
Route::post('/test','UserController@test') -> name('page.post');

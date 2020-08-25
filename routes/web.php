<?php

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
Auth::routes();

/*
|------------------------------------------------------------------------------------
| Admin
|------------------------------------------------------------------------------------
*/
Route::group(['prefix' => ADMIN, 'as' => ADMIN . '.', 'middleware'=>['auth', 'Role:10']], function () {
    Route::get('/', 'DashboardController@index')->name('dash');
    Route::resource('users', 'Admin\UserController');
    Route::resource('aturan', 'Admin\AturanController');
    Route::resource('article', 'Admin\ArticleController');
    Route::resource('gejala', 'Admin\GejalaController');
    Route::resource('penyakit', 'Admin\PenyakitController');
    Route::resource('basispengetahuan', 'Admin\BasisPengetahuanController');
    Route::resource('konsultasi', 'Admin\KonsultasiController');
    Route::resource('riwayat', 'Admin\RiwayatController');
    Route::resource('faq', 'Admin\FaqController');
    Route::get('konsultasi/{id}','Admin\KonsultasiController@show')->name('konsultasi.hasil');
});

Route::group(['namespace' => 'Web'], function(){
    Route::get('/','WebController@index')->name('home');
    Route::get('faq','WebController@faq')->name('faq');
    Route::get('blog','WebController@blog')->name('blog');
    Route::get('blog/{article}', 'WebController@blogDetail')->name('blog.detail');
    Route::get('diagnosa','WebController@diagnosa')->name('diagnosa');
    Route::post('diagnosa','WebController@diagnosaSubmit')->name('diagnosa.submit');
    Route::get('diagnosa/{id}','WebController@diagnosaShow')->name('diagnosa.hasil');
});

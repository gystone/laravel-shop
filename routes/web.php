<?php

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

//首页
Route::get('/', 'PagesController@root')->name('root');

Auth::routes();

Route::group(['middleware' => 'auth'], function () {
    //手动发送验证邮箱
    Route::get('/email_verification/send', 'EmailVerificationController@send')->name('email_verification.send');
    //邮箱验证提示
    Route::get('/email_verify_notice', 'PagesController@emailVerifyNotice')->name('email_verify_notice');
    //核销邮件验证码
    Route::get('/email_verification/verify', 'EmailVerificationController@verify')->name('email_verification.verify');

    //需要验证邮箱才可使用的路由
    Route::group(['middleware' => 'email_verified'], function () {

    });
});
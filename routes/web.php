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

/**
 * Landing Page for Portal
 */
Route::get('/', 'LandingController@index')->name('landing.index');
/**
 * Student Registrant
 */
Route::get('/create-account', 'Admin\RegistrationController@form_create_account')->name('student.form_create_account');
Route::post('/create-account', 'Admin\RegistrationController@do_create_account')->name('student.do_create_account');

Auth::routes();
Route::group(['middleware' => ['auth']], function () {
    Route::get('/replace', 'HomeController@index')->name('index');
    Route::get('home', 'HomeController@index')->name('home');

    /** route manajemen menu */
    Route::get('menu', 'Admin\MenuController@index')->middleware(['permission:menu-read'])->name('menu');
    Route::get('menu/{id}', 'Admin\MenuController@menuDetail')->middleware(['permission:menu-read'])->name('menu.detail');
    Route::post('menu-create', 'Admin\MenuController@create')->middleware(['permission:menu-create'])->name('menu.create');
    Route::put('menu-update', 'Admin\MenuController@update')->middleware(['permission:menu-update'])->name('menu.update');
    Route::get('menu-delete/{id}', 'Admin\MenuController@delete')->middleware(['permission:menu-delete'])->name('menu.delete');

    /** route manajemen role */
    Route::get('roles', 'Admin\RoleController@index')->middleware(['permission:role-read'])->name('roles');
    Route::get('roles/{id}/show', 'Admin\RoleController@show')->middleware(['permission:role-read'])->name('roles.show');
    Route::get('roles/create', 'Admin\RoleController@create')->middleware(['permission:role-create'])->name('roles.create');
    Route::get('roles/{id}/edit', 'Admin\RoleController@edit')->middleware(['permission:role-update'])->name('roles.edit');
    Route::post('roles/store', 'Admin\RoleController@store')->middleware(['permission:role-create'])->name('roles.store');
    Route::post('roles/{id}/update', 'Admin\RoleController@update')->middleware(['permission:role-update'])->name('roles.update');
    Route::post('roles/delete', 'Admin\RoleController@delete')->middleware(['permission:role-delete'])->name('roles.delete');

    /** route manajemen user */
    Route::get('users', 'Admin\UserController@index')->middleware(['permission:user-read'])->name('users');
    Route::get('users/{id}/show', 'Admin\UserController@show')->middleware(['permission:user-read'])->name('users.show');
    Route::get('users/create', 'Admin\UserController@create')->middleware(['permission:user-create'])->name('users.create');
    Route::get('users/{id}/edit', 'Admin\UserController@edit')->middleware(['permission:user-update'])->name('users.edit');
    Route::post('users/store', 'Admin\UserController@store')->middleware(['permission:user-create'])->name('users.store');
    Route::post('users/{id}/update', 'Admin\UserController@update')->middleware(['permission:user-update'])->name('users.update');
    Route::post('users/delete', 'Admin\UserController@delete')->middleware(['permission:user-delete'])->name('users.delete');

    /** route manajemen registration */
    Route::get('registration', 'Admin\RegistrationController@form_register')->name('student.form_register');
    Route::post('registration', 'Admin\RegistrationController@do_register')->name('student.do_register');
});
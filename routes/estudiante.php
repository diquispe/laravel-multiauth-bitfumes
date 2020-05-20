<?php

Route::group(['namespace' => 'Estudiante'], function() {
    Route::get('/', 'HomeController@index')->name('estudiante.dashboard');

    // Login
    Route::get('login', 'Auth\LoginController@showLoginForm')->name('estudiante.login');
    Route::post('login', 'Auth\LoginController@login');
    Route::post('logout', 'Auth\LoginController@logout')->name('estudiante.logout');

    // Register
    Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('estudiante.register');
    Route::post('register', 'Auth\RegisterController@register');

    // Passwords
    Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('estudiante.password.email');
    Route::post('password/reset', 'Auth\ResetPasswordController@reset');
    Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('estudiante.password.request');
    Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('estudiante.password.reset');

    // Must verify email
    Route::get('email/resend','Auth\VerificationController@resend')->name('estudiante.verification.resend');
    Route::get('email/verify','Auth\VerificationController@show')->name('estudiante.verification.notice');
    Route::get('email/verify/{id}/{hash}','Auth\VerificationController@verify')->name('estudiante.verification.verify');
});
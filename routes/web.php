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


Route::get('/', 'SiteController@postberita');

Auth::routes();
Auth::routes(['verify' => true]);

Route::get('speedtest','SiteController@speed');

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home/edit/{uuid}', 'HomeController@useredit')->name('user.edit');
Route::post('/user/update/{uuid}', 'HomeController@userupdate')->name('user.update');
Route::get('/user/logout', 'Auth\LoginController@logoutUser')->name('user.logout');
Route::get('/changePassword','HomeController@showChangePasswordForm')->name('changePass');
Route::post('/changePassword','HomeController@changePassword')->name('changePassword');
Route::get('home/pdf', 'HomeController@pdf')->name('downloadpdf');
Route::get('/profile/edit/{uuid}', 'ProfileController@editprofile')->name('editprofile');
Route::post('/profile/update/{uuid}', 'ProfileController@updateprofile')->name('updateprofile');
Route::get('user/payment/{uuid}', 'PaymentController@payment')->name('payment');
Route::post('user/payment/update/{uuid}', 'PaymentController@paymentupdate')->name('payment.update');

// Route Admin
Route::group(['prefix' => 'admin'], function(){
    Route::get('login', 'AuthAdmin\LoginController@showLoginForm')->name('admin.login');
    Route::post('login', 'AuthAdmin\LoginController@login')->name('admin.login.submit');
    Route::get('/', 'AdminController@index')->name('admin.home');
    Route::get('/logout', 'AuthAdmin\LoginController@logout')->name('admin.logout');
    Route::get('/password/reset', 'AuthAdmin\ForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
    Route::post('/password/email', 'AuthAdmin\ForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
    Route::get('/password/reset/{token}', 'AuthAdmin\ResetPasswordController@showResetForm')->name('admin.password.reset');
    Route::post('/password/reset', 'AuthAdmin\ResetPasswordController@reset');

    Route::get('/datauser', 'AdminController@datauser')->name('datauser');
    Route::get('/datauser/{uuid}', 'AdminController@datauserid')->name('datauser.id');
    Route::post('/datauser/{uuid}/update', 'AdminController@datauserupdate')->name('datauser.update');
    Route::delete('datauser/{uuid}/delete', 'AdminController@deletePayment')->name('deletePayment');
    Route::get('export/datauser', 'AdminController@export')->name('export.excel');
    Route::post('import/datauser', 'AdminController@import')->name('import.excel');
    Route::get('changePasswordAdmin', 'AdminController@changePasswordAdmin')->name('PassAdmin');
    Route::post('changePasswordAdmin', 'AdminController@changePasswordAdminPost')->name('PostAdmin');
    Route::get('create/akun/adminsilahkanbuatakunadminagarbisakalianmanipulasinya0907enambelas', 'AdminController@createAdmin')->name('createAdmin');
    Route::post('create/akun/adminsilahkanbuatakunadminagarbisakalianmanipulasinya0907enambelaskosongsembilan', 'AdminController@createAdminStore')->name('createAdminStore');
    Route::delete('datadelete/{uuid}', 'AdminController@delete')->name('delete.user');
    ROute::get('dataAdmin', 'AdminController@dataAdmin')->name('dataAdmin');
    Route::get('dataAdmin/{uuid}', 'AdminController@deleteAdmin')->name('delete');
    Route::get('posts', 'PostController@index')->name('posts');
    Route::get('/contact', 'ContactController@showContactForm')->name('contact');
    Route::post('/contact', 'ContactController@sendMail');
    Route::get('addpost', [
        'uses' => 'PostController@addpost',
        'as' => 'add.post'
    ]);

});

Route::get('post/{slug}', [
    'uses' => 'SiteController@singlepost',
    'as' => 'singlepost'
]);


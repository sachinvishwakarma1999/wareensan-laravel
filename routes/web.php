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

Route::get('/', function () {
    if (Auth::guest())
        return view('auth.login');
    else
        return view('home');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => ['auth']], function() {
    Route::resource('roles','RoleController');
    Route::resource('users','UserController');
    Route::resource('products','ProductController');
    Route::resource('claimants','ClaimantController');
    Route::resource('objectors','ObjectorController');
    Route::resource('deceaseds','DeceasedController');

    Route::post('claimant-add-deceased', 'ClaimantController@addDeceased')->name('claimants.add.deceased');
    Route::post('claimant-add-postcode', 'ClaimantController@addPostcode')->name('claimants.add.postcode');
    Route::post('claimant-add-payment/{id}', 'ClaimantController@addPayment')->name('claimants.add.payment');
    Route::get('claimant-deceased/{id}', 'ClaimantController@deceased')->name('claimants.deceased');
    Route::get('claimant-payment-datatable/{id}', 'ClaimantController@paymentDatatable')->name('claimants.paymentdatatable');

    Route::post('objector-add-deceased', 'ObjectorController@addDeceased')->name('objectors.add.deceased');
    Route::get('objector-deceased/{id}', 'ObjectorController@deceased')->name('objectors.deceased');
    Route::post('objector-destroy-deceased', 'ObjectorController@destroyDeceased')->name('objectors.destroy.deceased');

    Route::post('deceased/add-media', 'DeceasedController@storeMedia')->name('deceased.storeMedia');
    Route::post('deceased/actionedit', 'DeceasedController@actionedit')->name('deceased.actionedit');
    Route::post('deceased/remove-media', 'DeceasedController@removeMedia')->name('deceased.removeMedia');
    Route::post('deceased/{id}/add-reason', 'DeceasedController@addReason')->name('deceaseds.add.reason');

    Route::get('events', 'EventController@index')->name('events.index');
    Route::post('events/add', 'EventController@store')->name('events.store');
    Route::post('events/edit', 'EventController@update')->name('events.update');
    Route::post('events/destroy', 'EventController@destroy')->name('events.destroy');
    Route::get('events/data', 'EventController@list')->name('events.list');

    Route::get('overview', 'OverviewController@index')->name('overview.index');

    Route::get('report', 'ReportController@index')->name('report.index');

    Route::get('export-pdf', 'ReportController@createPDF')->name('report.createpdf');

    Route::get('overview/claimant-datatable', 'OverviewController@claimantDatatable')->name('overview.claimantdatatable');
    Route::post('overview/add-claimant', 'OverviewController@addClaimant')->name('overview.add.claimant');

    Route::get('user-roles', 'UserRoleController@index')->name('user-roles.index');
    Route::post('user-roles/store', 'UserRoleController@store')->name('user-roles.store');
    Route::post('user-roles/update', 'UserRoleController@update')->name('user-roles.update');
    Route::get('user-roles/{id}', 'UserRoleController@edit')->where('id', '[0-9]+')->name('user-roles.edit');

    Route::get('exhumation-map', 'ExhumationController@index')->name('exhumation.index');
    Route::get('blk-9', 'ExhumationController@block_map')->name('exhumation.blk');
    Route::get('n-1-13-ection-1', 'ExhumationController@nSectionOne_map')->name('exhumation.n-section-one');
    Route::get('n-1-13-ection-2', 'ExhumationController@nSectionTwo_map')->name('exhumation.n-section-two');
    Route::get('n-1-13-ection-3', 'ExhumationController@nSectionThree_map')->name('exhumation.n-section-three');

    Route::get('exhumation-getdata', 'ExhumationController@getData')->name('exhumation.getdata');
    Route::post('exhumation-add-schedule', 'ExhumationController@addSchedule')->name('exhumation.addSchedule');
    Route::post('exhumation-search', 'ExhumationController@search')->name('exhumation.search');
});

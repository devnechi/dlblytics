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
    return view('welcome');
});

Auth::routes();


Route::get('/admin', 'AdminController@index')->name('admin')->middleware('admin');
Route::get('/manager', 'ManagerController@index')->name('manager')->middleware('manager');
Route::get('/user', 'UserController@index')->name('user')->middleware('user');



Route::get('/home', 'HomeController@index')->name('home');
// admin update data
Route::get('/update', 'AdminUpdateDataController@index')->name('update');
// admin manage users
// AdminManageUsersController
Route::get('/manage-users', 'AdminManageUsersController@index')->name('manage-users');
Route::get('/create-user', 'AdminManageUsersController@create')->name('create-user');
Route::get('/add-new-disaggregate', 'AdminManageUsersController@create')->name('add-new-disaggregate');

Route::get('/manage-pillars', 'AdminPillarsController@index')->name('manage-pillars');
Route::get('/add-new-pillar', 'AdminPillarsController@create')->name('add-new-pillar');
Route::resource('pillars', 'AdminPillarsController');



// ADMIN MANAGING kpis manage-kpis
Route::get('/manage-kpis', 'DataKpiController@index')->name('manage-kpis');
Route::get('/create-new-kpi', 'DataKpiController@create')->name('create-new-kpi');

Route::resource('kpis', 'DataKpiController');

// finance Admin routes
Route::get('/finance-dashboard', 'FinanceAdminController@index')->name('finance-dashboard')->middleware('finance-dashboard');


// monitoring and evaluation routes
Route::get('/monitoring-evaluation-dashboard', 'mneController@index')->name('monitoring-evaluation-dashboard')->middleware('monitoring-evaluation-dashboard');
// cb routes
Route::get('/capacity-building-dashboard', 'cbController@index')->name('capacity-building-dashboard')->middleware('capacity-building-dashboard');
// IS routes
Route::get('/institutional-strengthening-dashboard', 'isController@index')->name('institutional-strengthening-dashboard')->middleware('institutional-strengthening-dashboard');
// RI routes
Route::get('/research-innovation-dashboard', 'riController@index')->name('research-innovation-dashboard')->middleware('research-innovation-dashboard');
// CE routes
Route::get('/community-engagement-dashboard', 'ceController@index')->name('community-engagement-dashboard')->middleware('community-engagement-dashboard');
// DS routes
Route::get('/data-science-dashboard', 'dsController@index')->name('data-science-dashboard')->middleware('data-science-dashboard');
// Comms routes
Route::get('/communication-channels-dashboard', 'commsController@index')->name('communication-channels-dashboard')->middleware('communication-channels-dashboard');
// Normal User routes
Route::get('/members-area-dashboard', 'nuController@index')->name('members-area-dashboard')->middleware('members-area-dashboard');
// donor routes
Route::get('/dlab-donors-dashboard', 'donorController@index')->name('dlab-donors-dashboard')->middleware('dlab-donors-dashboard');

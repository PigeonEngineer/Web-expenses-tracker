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

//  Route::get('old', function () {
//     return view('Budget/Index-noTmp');
//  });


Route::get('logout', 'Auth\LoginController@logout');

Route::resource('Budget', 'BudgetController');
Route::resource('Category', 'CategoryController');
Route::resource('Categorys_budget', 'Categorys_budgetController');
Route::resource('Expense', 'ExpenseController');
Route::resource('Setting', 'SettingController');
Route::resource('UserManagement', 'UserManagementController');
Route::resource('BudgetManagement', 'BudgetManagementController');
Route::resource('ExpenseManagement', 'ExpenseManagementController');
Route::resource('Users_expense', 'Users_expenseController');
Route::get('statistics', 'StatisticsController@getStats');
Route::get('about', 'AboutController@getAbout');
Route::get('profile', 'ProfileController@getProfile');
Auth::routes();

Route::get('/', 'HomeController@index');

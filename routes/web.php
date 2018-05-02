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
    return view('welcome');
});

Route::get('about', function () {
    return view('about');
});
Route::get ('newHome', 'NewMainController@getmaincontr');
Route::resource('Budget', 'BudgetController');
Route::resource('Category', 'CategoryController');
Route::resource('Categorys_budget', 'Categorys_budgetController');
Route::resource('Expense', 'ExpenseController');
Route::resource('Setting', 'SettingController');
Route::resource('Users_expense', 'Users_expenseController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

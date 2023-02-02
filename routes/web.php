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
    return view('plateform');
});
/*route:: get('/plateform',function() {
	return view ('plateform');
});*/
route:: get('/SignUp',function() {
	return view ('signup');
});
route:: get('/SignIn',function() {
	return view ('signin');
});
route:: get('/createjointeam',function() {
	return view ('createjoinbtn');
});

route:: get('/profile',function() {
	return view ('Profile');
});
route:: get('/TeamProfile',function() {
	return view ('TeamProfile');
});
Route::get('/challenges', [App\Http\Controllers\ChallengesController::class, 'index'])->name('challengelist');
Auth::routes();
Route::post('/answer/submit/{id}', 'AnswerController@submitAnswer')->name('answer.submit');
Route::get('/userlist', [App\Http\Controllers\UsersController::class, 'index'])->name('userslist');

Route::get('/logout', 'Auth\LoginController@logout');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/teamslist', [App\Http\Controllers\TeamsController::class, 'index'])->name('teamslist');
Route::prefix('teams')->group(function() {
    Route::get('/login','Auth\TeamsLoginController@showLoginForm')->name('teams.login');
    Route::get('/register','Auth\TeamsLoginController@showRegisterForm')->name('teams.register');
    Route::post('/login', 'Auth\TeamsLoginController@login')->name('teams.login.submit');
    Route::post('/register', 'Auth\TeamsLoginController@register')->name('teams.register.create');
    Route::get('logout/', 'Auth\TeamsLoginController@logout')->name('teams.logout');
    Route::get('/', 'Auth\TeamsController@index')->name('teams.dashboard');
   }) ;

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\StaycationController;
use App\Http\Controllers\CalenderController;
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
    return view('homepage');
});

Route::get('/hotelDetails', function () {
    return view('hoteldetails');
});
Route::get('/imagegallery', function () {
    return view('imagegallery');
});
Route::get('/reservations', function () {
    return view('staycations.hostreservation');
});

Route::get('reservations/{staycation}', [StaycationController::class, 'guestreservation'])->name('staycations.guestreservation');

Auth::routes();


//for role management
Route::group(['middleware' => ['auth']], function() {
    Route::resource('roles', RoleController::class);
    Route::resource('users', UserController::class);
    Route::get('home', [StaycationController::class, 'indexes']);
    Route::get('image', [StaycationController::class, 'indexess'])->name('staycations.filter');
    Route::get('staycations/{staycation}/display', [StaycationController::class, 'display'])->name('staycations.display');
    Route::resource('staycations', StaycationController::class);
    
    // Route::get('/calendar', 'App\Http\Controllers\StaycationController@calendar')->name('staycations.calendar');
    // Route::get('/index', 'StaycationController@index')->name('staycations.index');
});


//i'll use this code on the future reference please don't remove -dominic
// Route::get('/owner', function(){
//     return "Owner of current team.";
// })->middleware('auth', 'teamowner');

/**
 * Teamwork routes
 */
Route::group(['prefix' => 'teams', 'namespace' => 'Teamwork'], function()
{
    Route::get('/', [App\Http\Controllers\Teamwork\TeamController::class, 'index'])->name('teams.index');
    Route::get('create', [App\Http\Controllers\Teamwork\TeamController::class, 'create'])->name('teams.create');
    Route::post('teams', [App\Http\Controllers\Teamwork\TeamController::class, 'store'])->name('teams.store');
    Route::get('edit/{id}', [App\Http\Controllers\Teamwork\TeamController::class, 'edit'])->name('teams.edit');
    Route::put('edit/{id}', [App\Http\Controllers\Teamwork\TeamController::class, 'update'])->name('teams.update');
    Route::delete('destroy/{id}', [App\Http\Controllers\Teamwork\TeamController::class, 'destroy'])->name('teams.destroy');
    Route::get('switch/{id}', [App\Http\Controllers\Teamwork\TeamController::class, 'switchTeam'])->name('teams.switch');

    Route::get('members/{id}', [App\Http\Controllers\Teamwork\TeamMemberController::class, 'show'])->name('teams.members.show');
    Route::get('members/resend/{invite_id}', [App\Http\Controllers\Teamwork\TeamMemberController::class, 'resendInvite'])->name('teams.members.resend_invite');
    Route::post('members/{id}', [App\Http\Controllers\Teamwork\TeamMemberController::class, 'invite'])->name('teams.members.invite');
    Route::delete('members/{id}/{user_id}', [App\Http\Controllers\Teamwork\TeamMemberController::class, 'destroy'])->name('teams.members.destroy');

    Route::get('accept/{token}', [App\Http\Controllers\Teamwork\AuthController::class, 'acceptInvite'])->name('teams.accept_invite');



});
Route::get('calendar-event', [CalenderController::class, 'index'])->name('calendar.index');
Route::post('calendar-crud-ajax', [CalenderController::class, 'calendarEvents']);

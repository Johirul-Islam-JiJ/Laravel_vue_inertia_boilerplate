<?php

use App\Http\Controllers as Controllers;
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

Route::get('/', Controllers\WelcomeController::class)->name('welcome');

require __DIR__ . '/auth.php';

Route::get('/dashboard', [Controllers\HomeController::class, 'dashboard'])->middleware('auth')->name('dashboard');

Route::group(['middleware' => ['auth', 'permit:admin,super-admin']], function () {
    Route::resource('/users', Controllers\UserController::class);
    Route::post('/users/{user}/restore', [Controllers\UserController::class, 'restore'])
        ->name('users.restore');
    Route::delete('/users/{user}/delete', [Controllers\UserController::class, 'forceDelete'])
        ->name('users.force.delete')->can('force-delete');
    Route::get('/users/{user}/assign-roles', [Controllers\UserController::class, 'assignRolesForm'])
        ->name('users.assign.roles.form');
    Route::post('/users/{user}/assign-roles', [Controllers\UserController::class, 'assignRoles'])
        ->name('users.assign.roles');

    Route::resource('/roles', Controllers\RoleController::class)->except('show');
    Route::post('/role/{role}/restore', [Controllers\RoleController::class, 'restore'])
        ->name('roles.restore');
    Route::delete('/role/{role}/delete', [Controllers\RoleController::class, 'forceDelete'])
        ->name('roles.force.delete')
        ->can('force-delete');
    Route::get('/roles/{role}/assign-permissions', [Controllers\RoleController::class, 'assignPermissionsForm'])
        ->name('roles.assign.permissions.form');
    Route::post('/roles/{role}/assign-permissions', [Controllers\RoleController::class, 'assignPermissions'])
        ->name('roles.assign.permissions');

    Route::resource('/permissions', Controllers\PermissionController::class)->except('show');
    Route::post('/permissions/{permission}/restore', [Controllers\PermissionController::class, 'restore'])
        ->name('permissions.restore');
    Route::delete('/permissions/{permission}/delete', [Controllers\PermissionController::class, 'forceDelete'])
        ->name('permissions.force.delete')
        ->can('force-delete');

    Route::resource('/settings', Controllers\SettingsController::class)
        ->only('edit', 'update');

    Route::get('logs', [Controllers\LogController::class, 'index'])->name('logs.index');
});

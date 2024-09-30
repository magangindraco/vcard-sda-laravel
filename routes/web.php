<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;

Route::get('/', function () {
    return redirect()->route('employees.index');
});

Route::resource('employees', EmployeeController::class);
Route::get('v/{username}', [EmployeeController::class, 'show'])->name('vcard.show');

Route::get('admin/employees/create', [EmployeeController::class, 'create'])->name('admin.employees.create');
Route::post('admin/employees', [EmployeeController::class, 'store'])->name('admin.employees.store');

Route::resource('employees', EmployeeController::class);

Route::get('/v/{username}', [EmployeeController::class, 'show']);
Route::post('/admin/employees', [EmployeeController::class, 'store'])->name('employees.store');

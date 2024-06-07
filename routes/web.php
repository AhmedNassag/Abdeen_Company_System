<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\GeneralController;
use App\Http\Controllers\Dashboard\RoleController;
use App\Http\Controllers\Dashboard\UserController;
use App\Http\Controllers\Dashboard\CategoryController;

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

// Route::get('/', function () {
//     return view('auth.login');
// });
    
Auth::routes(['register' => false]);
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/', [HomeController::class, 'index']);



//general routes
Route::get('show_file/{folder_name}/{photo_name}', [GeneralController::class, 'show_file'])->name('show_file');
Route::get('download_file/{folder_name}/{photo_name}', [GeneralController::class, 'download_file'])->name('download_file');
Route::get('allNotifications', [GeneralController::class, 'allNotifications'])->name('allNotifications');
Route::get('markAllAsRead', [GeneralController::class, 'markAllAsRead'])->name('markAllAsRead');



/************************************************** START ADMIN ROUTES **************************************************/
Route::Group(['prefix' => 'admin', 'middleware' => 'auth'], function () { 

    //roles
    Route::resource('role', RoleController::class);
    Route::post('roleDelete', [RoleController::class, 'delete'])->name('role.delete');


    //user
    Route::get('user', [UserController::class, 'index'])->name('user.index');
    Route::post('user/store', [UserController::class, 'store'])->name('user.store');
    Route::get('user/edit/{id}', [UserController::class, 'edit'])->name('user.edit');
    Route::post('user/update', [UserController::class, 'update'])->name('user.update');
    Route::delete('user/destroy/{id}', [UserController::class, 'destroy'])->name('user.destroy');
    Route::post('userDeleteSelected', [UserController::class, 'deleteSelected'])->name('user.deleteSelected');
    Route::get('userShowNotification/{id}', [UserController::class, 'showNotification'])->name('user.showNotification');   
    Route::get('userChangeStatus/{id}', [UserController::class, 'changeStatus'])->name('user.changeStatus');


    //category
    Route::get('category', [CategoryController::class, 'index'])->name('category.index');
    Route::post('category/store', [CategoryController::class, 'store'])->name('category.store');
    Route::post('category/update', [CategoryController::class, 'update'])->name('category.update');
    Route::delete('category/destroy/{id}', [CategoryController::class, 'destroy'])->name('category.destroy');
    Route::post('categoryDeleteSelected', [CategoryController::class, 'deleteSelected'])->name('category.deleteSelected');
    Route::get('categoryShowNotification/{id}/{notification_id}', [CategoryController::class, 'showNotification'])->name('category.showNotification');
});
/************************************************** END ADMIN ROUTES **************************************************/




/************************************************** start pages **************************************************/
Route::get('Add-addReview-Maintenance', function() { return view('pages.Add-addReview-Maintenance'); });
Route::get('add-car', function() { return view('pages.add-car'); });
Route::get('add-Directors-approval', function() { return view('pages.add-Directors-approval'); });
Route::get('add-Externalvisits', function() { return view('pages.add-Externalvisits'); });
Route::get('add-GeneralSettings', function() { return view('pages.add-GeneralSettings'); });
Route::get('add-hardware', function() { return view('pages.add-hardware'); });
Route::get('add-Internal-visits', function() { return view('pages.add-Internal-visits'); });
Route::get('add-Maintenance-request', function() { return view('pages.add-Maintenance-request'); });
Route::get('add-Oil-change', function() { return view('pages.add-Oil-change'); });
Route::get('add-Periodic-inspection', function() { return view('pages.add-Periodic-inspection'); });
Route::get('add-Request-spare-part', function() { return view('pages.add-Request-spare-part'); });
Route::get('Add-Review-Maintenance', function() { return view('pages.Add-Review-Maintenance'); });
Route::get('all-Attendance-departure-report', function() { return view('pages.all-Attendance-departure-report'); });
Route::get('all-Evaluations', function() { return view('pages.all-Evaluations'); });
Route::get('all-Malfunctions', function() { return view('pages.all-Malfunctions'); });
Route::get('all-mission-Reports', function() { return view('pages.all-mission-Reports'); });
Route::get('all-Repetitive-asks', function() { return view('pages.all-Repetitive-asks'); });
Route::get('all-task-report', function() { return view('pages.all-task-report'); });
Route::get('all-view-statistics', function() { return view('pages.all-view-statistics'); });
Route::get('Attendance-departure-report', function() { return view('pages.Attendance-departure-report'); });
Route::get('car', function() { return view('pages.car'); });
Route::get('Causes-malfunctions', function() { return view('pages.Causes-malfunctions'); });
Route::get('Chat', function() { return view('pages.Chat'); });
Route::get('create-Evaluations', function() { return view('pages.create-Evaluations'); });
Route::get('Directors-approval', function() { return view('pages.Directors-approval'); });
Route::get('edit-group-permissions', function() { return view('pages.edit-group-permissions'); });
Route::get('employees', function() { return view('pages.employees'); });
Route::get('Examination-definitions', function() { return view('pages.Examination-definitions'); });
Route::get('Externalvisits', function() { return view('pages.Externalvisits'); });
Route::get('GeneralSettings', function() { return view('pages.GeneralSettings'); });
Route::get('hardware', function() { return view('pages.hardware'); });
Route::get('index', function() { return view('pages.index'); });
Route::get('Internal-visits', function() { return view('pages.Internal-visits'); });
Route::get('Logo', function() { return view('pages.Logo'); });
Route::get('Maintenance-request', function() { return view('pages.Maintenance-request'); });
Route::get('Malfunctions-tasks', function() { return view('pages.Malfunctions-tasks'); });
Route::get('mission', function() { return view('pages.mission'); });
Route::get('mission-Reports', function() { return view('pages.mission-Reports'); });
Route::get('name-multiple-selection', function() { return view('pages.name-multiple-selection'); });
Route::get('Oil-change', function() { return view('pages.Oil-change'); });
Route::get('pages-profile-user', function() { return view('pages.pages-profile-user'); });
Route::get('Periodic-inspection', function() { return view('pages.Periodic-inspection'); });
Route::get('Personal-tasks', function() { return view('pages.Personal-tasks'); });
Route::get('Programming-permissions', function() { return view('pages.Programming-permissions'); });
Route::get('question', function() { return view('pages.question'); });
Route::get('Reasons-visiting', function() { return view('pages.Reasons-visiting'); });
Route::get('Repetitive-asks', function() { return view('pages.Repetitive-asks'); });
Route::get('Request-spare-part', function() { return view('pages.Request-spare-part'); });
Route::get('task-report', function() { return view('pages.task-report'); });
Route::get('Work-sites', function() { return view('pages.Work-sites'); });
/************************************************** end pages **************************************************/









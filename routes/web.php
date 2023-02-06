<?php

use App\Http\Controllers\StudentController;
use App\Models\Student;
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

// Route::get('/', function () {
//     $date = date('Y-m-d H:i:s');
//     //dd(compact("date"));
//     return view('test', ['date' => $date, 'name' => 'Coumba']);
// });


// Route::get('/students/create', function () {
//     return view('students.create');
// });

// Route::get('/students/get-all-students', function () {
//     $students = Student::all();
//     //dd(compact(('students')));
//     return view('students.index', compact('students'));
// });

route::resource("/student", StudentController::class);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

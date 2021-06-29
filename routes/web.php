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

Route::get('/pdf', [App\Http\Controllers\PagesController::class, 'pdf'])->name('pages.pdf');


Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'dashboard'])->name('home.dashboard');








//----------------------------------------------------
//              why this project?
//----------------------------------------------------
/*
- Just a new project to test some stuff:
    1- a pdf viewer from a private resource
    2- bootstrap admin panel 
    3- others.
*/


//----------------------------------------------------
//              funPagesController{}
//----------------------------------------------------
/*
- this funtion will display a pdf from a public folder: 
         PagesController@pdfFromPublicFile()

- this one will display a pdf file from a private folder, which is /test/storage/file.pdf


*/

//----------------------------------------------------
//              bootstrap admin panel
//----------------------------------------------------
/*
- I will use SB admin 2, which is a very famous bootstrap admin panel
  .. this is it: 

- I can modify it by myself, but I will follow this tutorial cuz it's more convenient: 
    https://www.youtube.com/watch?v=DLU8YF2WrWk&t=13s&ab_channel=TechToolIndia

- make auth.

- I'll use this  default controller for all admin panel functions: 
         homeController

-


*/

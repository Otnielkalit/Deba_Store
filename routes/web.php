<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

use App\Http\Controllers\AdminController;

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




Route::get("/",[HomeController::class,"index"]);

Route::get("/users",[AdminController::class,"users"]);

Route::get("/deletemenu/{id}",[AdminController::class,"deletemenu"]);

Route::get("/foodmenu",[AdminController::class,"foodmenu"]);

Route::post("/uploadfood",[AdminController::class,"uploadfood"]);

Route::get("/deleteuser/{id}",[AdminController::class,"deleteuser"]);

Route::get("/updateview/{id}",[AdminController::class,"updateview"]);

Route::post("/update/{id}",[AdminController::class,"update"]);

Route::get("/redirects",[HomeController::class,"redirects"]);

Route::post("/reservation",[AdminController::class,"reservation"]);

Route::get("/viewreservation",[AdminController::class,"viewreservation"]);

Route::get("/viewagen",[AdminController::class,"viewagen"]);

Route::post("/uploadagen",[AdminController::class,"uploadagen"]);

Route::get("/updateagen/{id}",[AdminController::class,"updateagen"]);

Route::post("/updatefoodagen/{id}",[AdminController::class,"updatefoodagen"]);

Route::get("/deleteagen/{id}",[AdminController::class,"deleteagen"]);

Route::post("/addcart/{id}",[HomeController::class,"addcart"]);

Route::get("/showcart/{id}",[HomeController::class,"showcart"]);

Route::get("/addmenu",[AdminController::class,"addmenu"]);

Route::get("/addagen",[AdminController::class,"addagen"]);


Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LayoutsController;
use App\Http\Controllers\PasswordController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\UserController;
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

//İNDEX ROUTE

//Route::get('/', function () {return view('index');});
Route::get("/", [ProjectController::class, "index"]);
//HAKKIMDA ROUTE

Route::get("abaout", [HomeController::class, "abaoutMe"]);

//TABLOLAR

Route::get("categories", [CategoryController::class, "showCategories"])->name("categories.show");
Route::get("users", [UserController::class, "showUsers"])->name("users.show");
Route::get("sliders", [SliderController::class, "showSliders"])->name("sliders.show");


//PRODUCTS

Route::resource("/products", ProductController::class);
Route::get("/products-export", [ProductController::class, "export"])->name("products.export");
Route::get("/products-deneme", [ProductController::class, "deneme"])->name("products.deneme");
Route::post("/products-import", [ProductController::class, "import"])->name("products.import");

//LOGİN

Route::get('/forgot-password', [PasswordController::class, 'forgot'])->name('login.forgot-password');
Route::post('/send-password', [PasswordController::class, 'send'])->name('login.send-password');


<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PizzaController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\PizzaProductController;


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

//LOGIN RUTA

Route::get('/login', function () {
    return view('login');
});

//LOGOUT RUTA

Route::get('/logout', function () {
    Session::forget('customer');
    return redirect('login');
});

Route::post('/login', [CustomerController::class, 'login']);

Route::get("/",[PizzaProductController::class,'index']);

Route::get("detail/{id}",[PizzaProductController::class,'detail']);
Route::get("search",[PizzaProductController::class,'search']);

Route::post("add_to_cart",[PizzaProductController::class,'addToCart']);
Route::get("cartlist",[PizzaProductController::class,'cartList']); 

Route::get("removecart/{id}",[PizzaProductController::class,'removeCart']); 

Route::get("ordernow",[PizzaProductController::class,'orderNow']); 
Route::post("orderplace",[PizzaProductController::class,'orderPlace']);
Route::get("myorders",[PizzaProductController::class,'myOrders']);

/*
Route::get('/pizzas', [PizzaController::class, 'index'])->name('pizzas.index')->middleware('auth');
Route::get('/pizzas/create', [PizzaController::class, 'create'])->name('pizzas.create');
Route::post('/pizzas', [PizzaController::class, 'store'])->name('pizzas.store');
Route::get('/pizzas/{id}', [PizzaController::class, 'show'])->name('pizzas.show')->middleware('auth');
Route::delete('/pizzas/{id}', [PizzaController::class, 'destroy'])->name('pizzas.destroy')->middleware('auth');
*/


// Auth::routes([
//     'register' => true,
//   ]);
  
//Route::get('/users/profile', [EditProfileController::class, 'edit'])->name('users.edit-profile')->middleware('auth');

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

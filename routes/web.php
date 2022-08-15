<?php

use App\Http\Controllers\ExpenseController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SeveralController;
use App\Http\Controllers\ToxicologicalController;
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




// login
Route::get("/entrar", [LoginController::class, "index"])->name("login.index");
Route::post("/entrar", [LoginController::class, "authenticate"])->name("login.authenticate");
Route::get("/sair", [LoginController::class, "logout"])->name("login.logout");


// Rotas restritas
Route::group(["middleware" => "web"], function () {
    Route::get('/', [HomeController::class, "index"])->name("home");

    // Serviços
    Route::get("/servicos/exames-toxicologicos/listar", [ToxicologicalController::class, "index"])->name("toxicological.index");
    Route::get("/servicos/exames-toxicologicos/novo", [ToxicologicalController::class, "create"])->name("toxicological.create");
    Route::post("/servicos/exames-toxicologicos/novo", [ToxicologicalController::class, "store"])->name("toxicological.store");

    Route::get("/servicos/diversos/listar", [SeveralController::class, "index"])->name("several.index");
    Route::get("/servicos/diversos/novo", [SeveralController::class, "create"])->name("several.create");
    Route::post("/servicos/diversos/novo", [SeveralController::class, "store"])->name("several.store");

    Route::get("/despesas/listar", [ExpenseController::class, "index"])->name("expense.index");
    Route::get('/despesas/novo', [ExpenseController::class, 'create'])->name('expense.create');
    Route::post('/despesas/novo', [ExpenseController::class, 'store'])->name('expense.store');
});
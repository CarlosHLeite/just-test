<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\PaymentsController;
use App\Http\Controllers\FuncionarioController;
use App\Http\Controllers\MaintenanceController;
use App\Http\Controllers\GeneralServiceController;
use App\Http\Controllers\ProductSupplierController;
use App\Http\Controllers\ServiceSupplierController;
use App\Http\Controllers\EmployeePermissionController;
use App\Http\Controllers\PurchaseRequisitionController;



/* Rotas relacionadas ao Usuario */

Route::get('/', [UserController::class, 'loginPage'])->name('login');
Route::post('/login', [UserController::class, 'login']);
Route::post('/logout', [UserController::class, 'logout']);
Route::get('/settings', [UserController::class, 'settings']);
Route::get('/forgot-password', [UserController::class, 'forgotPassword']);
Route::get('/profile', [UserController::class, 'profile']);

Route::get('/register', [UserController::class, 'index']);
Route::post('/register', [UserController::class, 'register']);



/* Rotas relacionadas as Ordens de Serviços Gerais */
Route::get('/order/general-services', [GeneralServiceController::class, 'index'])->middleware('auth');
Route::get('/order/general-service/create', [GeneralServiceController::class, 'create'])->middleware('auth');
Route::get('/order/general-service/{id}', [GeneralServiceController::class, 'show'])->middleware('auth');
Route::get('/order/general-service/{id}/edit', [GeneralServiceController::class, 'edit'])->middleware('auth');

/* Rotas relacionadas as Ordens de Manutenção */
Route::get('/order/maintenance', [MaintenanceController::class, 'index']);
Route::get('/order/maintenance/create', [MaintenanceController::class, 'create']);
Route::get('/order/maintenance/{id}', [MaintenanceController::class, 'show']);
Route::get('/order/maintenance/{id}/edit', [MaintenanceController::class, 'edit']);

/* Rotas relacionado aos Clientes */
Route::get('/clients', [ClientController::class, 'index']);
Route::get('/client/create', [ClientController::class, 'create']);
Route::get('/client/{id}', [ClientController::class, 'show']);
route::get('/client/{id}/edit', [ClientController::class, 'edit']);

/* Rotas relacionado aos Fornecedores de Produtos */
Route::get('/supplier/products', [ProductSupplierController::class, 'index']);
Route::get('/supplier/product/create', [ProductSupplierController::class, 'create']);
Route::get('/supplier/product/{id}', [ProductSupplierController::class, 'show']);
route::get('/supplier/product/{id}/edit', [ProductSupplierController::class, 'edit']);

/* Rotas relacionado aos Fornecedores de Serviços */
Route::get('/supplier/services', [ServiceSupplierController::class, 'index']);
Route::get('/supplier/service/create', [ServiceSupplierController::class, 'create']);
Route::get('/supplier/service/{id}', [ServiceSupplierController::class, 'show']);
route::get('/supplier/service/{id}/edit', [ServiceSupplierController::class, 'edit']);

/* Rotas relacionado aos Fornecedores de Produtos */
Route::get('/payments', [PaymentsController::class, 'index']);
Route::get('/payment/create', [PaymentsController::class, 'create']);
Route::get('/payment/{id}', [PaymentsController::class, 'show']);
route::get('/payment/{id}/edit', [PaymentsController::class, 'edit']);

/* Rotas relacionado a Requisições de Compras */
Route::get('/purchase-requisition', [PurchaseRequisitionController::class, 'index']);

/* Rotas relacionado aos funcionarios */
Route::get('/employees', [EmployeeController::class, 'index']);

/* Rotas relacionado as permissões dadas aos funcionarios */
Route::get('/employees/permissions', [EmployeePermissionController::class, 'index']);

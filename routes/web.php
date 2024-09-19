<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ServiceController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/', [AdminController::class, 'index'])->name('index');


// registration services
Route::get('/Partnership Firm Registration', [ServiceController::class, 'partnershipFirm'])->name('Partnership Firm Registration');
Route::get('/One Person Company', [ServiceController::class, 'onePerson'])->name('One Person Company');
Route::get('/Private LTD Company ', [ServiceController::class, 'privateLimited'])->name('Private LTD Company ');
Route::get('/Limited Liability Partnership (LLP)', [ServiceController::class, 'LLP'])->name('Limited Liability Partnership (LLP)');
Route::get('/Section 8 Company NGO', [ServiceController::class, 'section8'])->name('Section 8 Company NGO');
Route::get('/Producer Company ', [ServiceController::class, 'producerCompany'])->name('Producer Company');
Route::get('/Nidhi Company Registration', [ServiceController::class, 'nidhiCompany'])->name('Nidhi Company Registration');
Route::get('/Public LTD Company ', [ServiceController::class, 'publicLimited'])->name('Public LTD Company ');
Route::get('/Microfinance Company (Section 8)', [ServiceController::class, 'microfinanceSection8'])->name('Microfinance Company (Section 8)');
Route::get('/Indian Subsidiary Company', [ServiceController::class, 'indianSubidiary'])->name('Indian Subsidiary Company');
Route::get('/Microfinance Company NBFC (RBI Registered)', [ServiceController::class, 'microfinanceNBFC'])->name('Microfinance Company NBFC (RBI Registered)');


// Taxation & Return services
// Route::get('/Partnership Firm Registration', [ServiceController::class, 'CustomerLogin'])->name('Partnership Firm Registration');
// Route::get('/One Person Company', [ServiceController::class, 'CustomerLogin'])->name('One Person Company');
// Route::get('/Private LTD Company ', [ServiceController::class, 'CustomerLogin'])->name('Private LTD Company ');
// Route::get('/Limited Liability Partnership (LLP)', [ServiceController::class, 'CustomerLogin'])->name('Limited Liability Partnership (LLP)');
// Route::get('/Section 8 Company NGO', [ServiceController::class, 'CustomerLogin'])->name('Section 8 Company NGO');
// Route::get('/Producer Company ', [ServiceController::class, 'CustomerLogin'])->name('Producer Company ');
// Route::get('/Nidhi Company Registration', [ServiceController::class, 'CustomerLogin'])->name('Nidhi Company Registration');
// Route::get('/Public LTD Company ', [ServiceController::class, 'CustomerLogin'])->name('Public LTD Company ');
// Route::get('/Microfinance Company (Section 8)', [ServiceController::class, 'CustomerLogin'])->name('Microfinance Company (Section 8)');
// Route::get('/Indian Subsidiary Company', [ServiceController::class, 'CustomerLogin'])->name('Indian Subsidiary Company');
// Route::get('/Microfinance Company NBFC (RBI Registered)', [ServiceController::class, 'CustomerLogin'])->name('Microfinance Company NBFC (RBI Registered)');

// Audit & Compliances


// Consultancy


// Marketing & Branding


//Admin Controllers

Route::get('/admin/login', [AdminController::class, 'showLoginForm'])->name('admin.loginForm');

Route::group(['middleware' => 'Admin'], function () {
    Route::post('/admin-login', [AdminController::class, 'AdminLogin'])->name('admin.login');
    Route::get('/admin-logout', [AdminController::class, 'AdminLogout'])->name('admin.logout');
});



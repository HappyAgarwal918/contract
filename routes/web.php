<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\contractformController;
use App\Http\Controllers\admin\contractController;
use App\Http\Controllers\admin\locationController;
use App\Http\Controllers\admin\vendorController;
use App\Http\Controllers\admin\landlordController;
use App\Http\Controllers\admin\tenantController;
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
    if (Auth::guest())
    {
        return view('auth.login');
    }
    elseif(Auth::user()->IsAdmin == '1')
    {
        return view('admin.dashboard');
    }
    elseif(Auth::user()->IsAdmin == '0')
    {
        return view('home');
    }
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

Route::get('clients', [contractformController::class, 'client'])->name('client');

Route::get('property/form', [contractformController::class, 'form1'])->name('form1');
Route::post('property/form/save', [contractformController::class, 'save_form'])->name('save_form');

Route::get('leasing/form', [contractformController::class, 'form2'])->name('form2');
Route::post('leasing/form/save', [contractformController::class, 'save_form2'])->name('save_form2');

Route::get('vendor/form', [contractformController::class, 'form3'])->name('form3');
Route::post('vendor/form/save', [contractformController::class, 'save_form3'])->name('save_form3');

Route::get('purchaser/form', [contractformController::class, 'form4'])->name('form4');
Route::post('purchaser/form/save', [contractformController::class, 'save_form4'])->name('save_form4');

Route::get('landlord/form', [contractformController::class, 'form5'])->name('form5');
Route::post('landlord/form/save', [contractformController::class, 'save_form5'])->name('save_form5');

Route::get('tenant/form', [contractformController::class, 'form6'])->name('form6');
Route::post('tenant/form/save', [contractformController::class, 'save_form6'])->name('save_form6');


// cms

Route::group(['prefix' => 'contract'], function () {
    Route::get('/', [contractController::class, 'contracts'])->name('contracts');
    Route::get('{uid}', [contractController::class, 'contract'])->name('contract');
    Route::get('edit/{uid}', [contractController::class, 'edit_contract'])->name('edit_contract');
    Route::post('edited/{uid}', [contractController::class, 'contract_edited'])->name('contract_edited');
    Route::get('delete/{id}', [contractController::class, 'destroycontract'])->name('destroycontract');
});

Route::group(['prefix' => 'location'], function () {
    Route::get('/', [locationController::class, 'locations'])->name('locations');
    Route::post('new', [locationController::class, 'addnew_location'])->name('addnew_location');
    Route::get('edit/{id}', [locationController::class, 'location_edit'])->name('location_edit');
    Route::post('edited/{id}', [locationController::class, 'location_edited'])->name('location_edited');
    Route::get('delete/{id}', [locationController::class, 'destroylocation'])->name('destroylocation');
});

Route::group(['prefix' => 'vendor'], function () {
    Route::get('/', [vendorController::class, 'vendors'])->name('vendors');
    Route::post('new', [vendorController::class, 'addnew_vendor'])->name('addnew_vendor');
    Route::get('edit/{id}', [vendorController::class, 'vendor_edit'])->name('vendor_edit');
    Route::post('edited/{id}', [vendorController::class, 'vendor_edited'])->name('vendor_edited');
    Route::get('delete/{id}', [vendorController::class, 'destroyvendor'])->name('destroyvendor');
});

Route::group(['prefix' => 'landlord'], function () {
    Route::get('/', [landlordController::class, 'landlords'])->name('landlords');
    Route::post('new', [landlordController::class, 'addnew_landlord'])->name('addnew_landlord');
    Route::get('edit/{id}', [landlordController::class, 'landlord_edit'])->name('landlord_edit');
    Route::post('edited/{id}', [landlordController::class, 'landlord_edited'])->name('landlord_edited');
    Route::get('delete/{id}', [landlordController::class, 'destroylandlord'])->name('destroylandlord');
});

Route::group(['prefix' => 'tenant'], function () {
    Route::get('/', [tenantController::class, 'tenants'])->name('tenants');
    Route::post('new', [tenantController::class, 'addnew_tenant'])->name('addnew_tenant');
    Route::get('edit/{id}', [tenantController::class, 'tenant_edit'])->name('tenant_edit');
    Route::post('edited/{id}', [tenantController::class, 'tenant_edited'])->name('tenant_edited');
    Route::get('delete/{id}', [tenantController::class, 'destroytenant'])->name('destroytenant');
});

require __DIR__.'/auth.php';

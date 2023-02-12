<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\ProductShowController;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\HomeComponent;
use App\Http\Livewire\Admin\Showproductcomponent;
use App\Http\Livewire\ContactComponent;
use App\Http\Livewire\NatuurgerichtePrincipes;
use App\Http\Livewire\OnzeDiensten;
use App\Http\Livewire\OnzeTherapeuten;
use App\Http\Livewire\ReservationComponent;
use App\Http\Livewire\User\UserDashboardComponent;
use App\Http\Livewire\Admin\AdminDashboardComponent;
use App\Http\Livewire\Admin\ProductComponent;
use App\Http\Livewire\Admin\ServiceComponent;
use App\Http\Livewire\Admin\ServiceAddComponent;
use App\Http\Livewire\Admin\InvoiceSystemeReelComponent;
use App\Http\Livewire\Admin\EmployeeRegistrationComponent;
use App\Http\Livewire\Admin\AddProductComponent;
use App\Http\Livewire\Admin\AddCustomerComponent;
use App\Http\Livewire\Admin\AddEmployeeComponent;
use App\Http\Livewire\Admin\ProductDetailsComponent;
use App\Http\Livewire\Admin\EditProductComponent;
use App\Http\Livewire\Admin\InvoiceSystemComponent;
use App\Http\Livewire\Admin\CustomerManagementSystemComponent;

use App\Http\Livewire\Admin\ViewEmployeeInfo;
use App\Http\Livewire\Admin\EditEmployeeInfo;
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
Route::get('/', HomeComponent::class)->name('home.index');
Route::get('/contact', ContactComponent::class)->name('contact.index');
Route::get('/natuurgerichte-principes', NatuurgerichtePrincipes::class)->name('natuurgerichte-principes.index');
Route::get('/onze-diensten', OnzeDiensten::class)->name('onze-diensten.index');
Route::get('/onze-therapeuten', OnzeTherapeuten::class)->name('onze-therapeuten.index');
Route::get('/reservation-component', ReservationComponent::class)->name('reservation-component.index');


/*Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
*/

Route::middleware(['auth'])->group(function () {
    Route::get('/user/dashboard', UserDashboardComponent::class)->name('user.dashboard');
});

Route::middleware(['authadmin'])->group(function () {
    Route::get('/admin/dashboard', AdminDashboardComponent::class)->name('admin.dashboard');
    Route::get('/admin/Products', ProductComponent::class)->name('admin.products');
    Route::get('/admin/EmpolyeeRegistration', EmployeeRegistrationComponent::class)->name('admin.employee');
});

Route::middleware(['onlyauthadmin'])->group(function () {
    Route::get('/admin/Products/add', AddProductComponent::class)->name('admin.products.add');
    Route::get('/admin/Products/edit/{id}', EditProductComponent::class)->name('admin.products.edit');
    Route::get('/admin/Products/delete/{id}', [ProductComponent::class, 'DeleteBrand']);
    Route::get('/admin/Products/show/{id}',Showproductcomponent::class)->name('show.product');
    Route::get('/admin/EmpolyeeRegistration/add', AddEmployeeComponent::class)->name('admin.employe.add');
    

    Route::get('/admin/CustomerSystemeManagement/add', AddCustomerComponent::class)->name('admin.customer.add');
//invoice systeme
    Route::get('/admin/InvoiceSystem', InvoiceSystemComponent::class)->name('admin.invoice');
    Route::get('/admin/InvoiceSystemReel', InvoiceSystemeReelComponent::class)->name('admin.invoice.res.systeme');
    //customer management systeme
    
    Route::get('/admin/CustomerManagementSysteme/', CustomerManagementSystemComponent::class)->name('admin.customer.management');
    //services 
    Route::get('/admin/Services',ServiceComponent::class)->name('admin.services');
    Route::get('/admin/Services/add',ServiceAddComponent::class)->name('admin.services.add');

    // employee crud
    Route::post('/admin/EmpolyeeRegistration/save', [EmployeeController::class, "store"])->name('admin.employee.save');
    Route::get('/admin/EmpolyeeRegistration/{employee}/edit', EditEmployeeInfo::class)->name('admin.employee.edit');
    Route::get('/admin/EmpolyeeRegistration/{employee}/view', ViewEmployeeInfo::class)->name('admin.employee.view');
    Route::put('/admin/EmpolyeeRegistration/{employee}', [EmployeeController::class, "update"])->name('admin.employee.update');
    Route::delete('/admin/EmpolyeeRegistration/{employee}/delete', [EmployeeController::class, "destroy"])->name('admin.employee.destroy');
    Route::get('/admin/EmpolyeeRegistration/{employee}', [EmployeeController::class, "print"])->name('admin.employee.print');
});
require __DIR__ . '/auth.php';

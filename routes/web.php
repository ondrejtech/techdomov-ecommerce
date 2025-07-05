<?php

use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\RegisterController;
use App\Http\Controllers\Frontend\CategoryController;
use App\Http\Controllers\Frontend\PagesController;
use App\Http\Controllers\Frontend\ProductController;
use App\Http\Controllers\Frontend\Root\ViewController;
use App\Http\Controllers\Frontend\ShoppingCartController;
use App\Http\Controllers\Frontend\SuperCategoryController;
use App\Http\Controllers\Admin\MySettingsController;
use App\Livewire\Admin\Login;
use Illuminate\Support\Facades\Route;

Route::prefix('IT')->group(function () {
    Route::get('/{CategoryCode}/{ProId}', [ProductController::class, 'product_detail'])->name('product.view')->middleware('user.check');
});

Route::prefix('search/')->group(function () {
    Route::get('{ProId}', [ProductController::class, 'product_list_search'])->name('product.search');
});
Route::prefix('info/')->group(function () {
    Route::get('{RootCategoryName}/{RootCategoryCode}', [ViewController::class, 'view'])->name('category.root');
    Route::get('{SuperCategoryName}/{RootCategoryCode}/{SuperCategoryCode}', [SuperCategoryController::class, 'index'])->name('category.super');
    Route::get('{CategoryName}/{RootCategoryCode}/{SuperCategoryCode}/{CategoryCode}', [CategoryController::class, 'index'])->name('category');
});

Route::prefix('/')->group(function () {
    Route::get('/', [PagesController::class, 'index'])->name('index');
    Route::get('/shopping-cart', [ShoppingCartController::class, 'index'])->name('shopping-cart');
    Route::get('{ProducerName}', [PagesController::class, 'searchViaManufacturer'])->name('search-via.manufacturer');
});


Route::prefix('pages')->group(function () {
    Route::get('panel-navigator-vendor', [PagesController::class, 'vendor_page'])->name('vendor.page');
    Route::get('product-index-list', [PagesController::class, 'product_index'])->name('product.index');
});

Route::prefix('documents')->group(function () {
    Route::get('/order-detail/{order_number}', [ShoppingCartController::class, 'order_detail'])->name('documents.order_detail');
    Route::post('/checkout', [ShoppingCartController::class, 'checkout'])->name('documents.checkout');
    Route::get('/success/{order_number}', [ShoppingCartController::class, 'success'])->name('checkout.success');
    Route::get('/cancel/{order_number}', [ShoppingCartController::class, 'cancel'])->name('checkout.cancel');

});

Route::prefix('admin/')->group(function () {
    Route::get('login', Login::class)->name('admin.login');
    Route::get('register',[RegisterController::class,'index'])->name('admin.register');
    Route::get('dashboard',[RegisterController::class,'dashboard'])->name('admin.dashboard')->middleware('user.check');
    Route::get('my-orders',[RegisterController::class,'orders'])->name('admin.my-orders')->middleware('user.check');
    Route::get('my-orders-items', [RegisterController::class, 'myOrdersItems'])->name('admin.orders-items')->middleware('user.check');
    Route::get('my-invoices', [RegisterController::class, 'myInvoices'])->name('admin.my-invoices')->middleware('user.check');
    Route::get('my-complaints', [RegisterController::class, 'myComplaints'])->name('admin.my-complaints')->middleware('user.check');
    Route::get('credit-note', [RegisterController::class, 'creditNote'])->name('admin.credit-note')->middleware('user.check');
    Route::get('statistics-sales-by-category', [RegisterController::class, 'statisticsSalesByCategory'])->name('admin.statistics-sales-by-category')->middleware('user.check');
    Route::get('my-settings', [MySettingsController::class,'mySettings'])->name('admin.my-settings')->middleware('user.check');
});

Route::prefix('admin/my-complaints/')->group(function(){
    Route::get('how-complaints', [RegisterController::class, 'howComplaints'])->name('admin.how-complaints');
    Route::get('create-complaint-numbers', [RegisterController::class, 'createComplaintNumbers'])->name('admin.create-complaint-number');
    Route::get('complaints-list', [RegisterController::class, 'complaintList'])->name('admin.complaint-list');
    Route::get('discrepancies-with-goods', [RegisterController::class, 'discrepanciesWithGoods'])->name('admin.discrepancies-with-goods');
    Route::get('inconsistencies-with-forwarding', [RegisterController::class, 'inconsistenciesWithForwarding'])->name('admin.inconsistencies-with-forwarding');
    Route::get('claims-technicians', [RegisterController::class, 'claimsTechnicians'])->name('admin.claims-technicians');
    Route::get('guarantees', [RegisterController::class, 'guarantees'])->name('admin.guarantees');
    Route::get('complaint-order', [RegisterController::class, 'complaintOrder'])->name('admin.complaint-order');
})->middleware('user.check');

Route::prefix('admin/my-settings')->group(function(){
    Route::get('my-account', [MySettingsController::class,'myAccount'])->name('admin.my-settings.my-account');
    Route::get('gdpr', [MySettingsController::class,'gdpr'])->name('admin.my-settings.my-account.gdpr');
    Route::get('secured', [MySettingsController::class, 'secured'])->name('admin.my-settings.secured');
    Route::get('settings-eshop', [MySettingsController::class,'settingsEshop'])->name('admin.my-settings.settings-eshop');
    Route::get('access-history', [MySettingsController::class,'accessHistory'])->name('admin.my-settings.access-history');
    Route::get('overview-users-by-branch', [MySettingsController::class,'overviewUsersByBranch'])->name('admin.my-settings.overview-users-by-branch');
    Route::get('settings-b2c', [MySettingsController::class,'settingsB2C'])->name('admin.my-settings.settings-b2c');
})->middleware('user.check');



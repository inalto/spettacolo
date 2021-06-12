<?php

use App\Http\Controllers\Admin\AuditLogController;
use App\Http\Controllers\Admin\ContactCompanyController;
use App\Http\Controllers\Admin\ContactContactController;
use App\Http\Controllers\Admin\ContractController;
use App\Http\Controllers\Admin\CrmCustomerController;
use App\Http\Controllers\Admin\CrmDocumentController;
use App\Http\Controllers\Admin\CrmNoteController;
use App\Http\Controllers\Admin\CrmStatusController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\Admin\PersonController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\TemplateController;
use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::redirect('/', '/login');

Auth::routes(['register' => false]);

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => ['auth']], function () {
    Route::get('/', [HomeController::class, 'index'])->name('home');

    // Permissions
    Route::resource('permissions', PermissionController::class, ['except' => ['store', 'update', 'destroy']]);

    // Roles
    Route::resource('roles', RoleController::class, ['except' => ['store', 'update', 'destroy']]);

    // Users
    Route::resource('users', UserController::class, ['except' => ['store', 'update', 'destroy']]);

    // Contract
    Route::post('contracts/media', [ContractController::class, 'storeMedia'])->name('contracts.storeMedia');
    Route::resource('contracts', ContractController::class, ['except' => ['store', 'update', 'destroy']]);

    // Person
    Route::resource('people', PersonController::class, ['except' => ['store', 'update', 'destroy']]);

    // Contact Company
    Route::resource('contact-companies', ContactCompanyController::class, ['except' => ['store', 'update', 'destroy']]);

    // Contact Contacts
    Route::resource('contact-contacts', ContactContactController::class, ['except' => ['store', 'update', 'destroy']]);

    // Audit Logs
    Route::resource('audit-logs', AuditLogController::class, ['except' => ['store', 'update', 'destroy', 'create', 'edit']]);

    // Crm Status
    Route::resource('crm-statuses', CrmStatusController::class, ['except' => ['store', 'update', 'destroy']]);

    // Crm Customer
    Route::resource('crm-customers', CrmCustomerController::class, ['except' => ['store', 'update', 'destroy']]);

    // Crm Note
    Route::resource('crm-notes', CrmNoteController::class, ['except' => ['store', 'update', 'destroy']]);

    // Crm Document
    Route::post('crm-documents/media', [CrmDocumentController::class, 'storeMedia'])->name('crm-documents.storeMedia');
    Route::resource('crm-documents', CrmDocumentController::class, ['except' => ['store', 'update', 'destroy']]);

    // Template
    Route::resource('templates', TemplateController::class, ['except' => ['store', 'update', 'destroy']]);
});

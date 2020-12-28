<?php

use Dcat\Admin\LogViewer\Http\Controllers;
use Illuminate\Support\Facades\Route;

Route::get('auth/log-viewer', Controllers\LogViewerController::class.'@index')->name('log-viewer-index');
Route::get('auth/log-viewer/{file}', Controllers\LogViewerController::class.'@index')->name('log-viewer-file');
Route::get('auth/log-viewer/{file}/tail', Controllers\LogViewerController::class.'@tail')->name('log-viewer-tail');

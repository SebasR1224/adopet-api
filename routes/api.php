<?php

use App\Http\Controllers\AnimalReports\AnimalReportController;
use App\Http\Controllers\AnimalReports\AnimalReportManagementController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::post('/report-abandoned-animal', [AnimalReportController::class, 'reportAbandonedAnimal']);
Route::get('/report-abandoned-animal', [AnimalReportManagementController::class, 'index']);

<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\FixedDepositController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IpoController;
use App\Http\Controllers\Auth\InvestwellController;
use App\Http\Controllers\Auth\OtpController;

Route::post('/blogs/upload-image', [BlogController::class, 'uploadBlogImage']);
Route::post('/fixed-deposits/upload-image', [FixedDepositController::class, 'uploadFixedDepositImage']);
Route::post('/fixed-deposits/delete-image', [FixedDepositController::class, 'deleteFixedDepositImage']);
Route::post('ipos', [IpoController::class,'store'])->name('ipos.store');

// routes for login via phone number 
Route::post('/auth/phone', [OtpController::class, 'sendOtp']);
Route::post('/auth/validate-otp', [OtpController::class, 'validateOtp']);
Route::post('/auth/login-investwell', [InvestwellController::class, 'loginInvestwell']);

Route::fallback(function(){
    return response()->json([
      'message' => 'Not Found.'
    ], 404);
});
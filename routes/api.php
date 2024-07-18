<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProductListController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VisitorController;

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get("visitor", [VisitorController::class, "GetVisitorDetails"]);
Route::post("contact", [ContactController::class, "SendContactDetails"]);
Route::get("category", [CategoryController::class, "Category"]);
Route::get("productlistbyremark/{remark}", [ProductListController::class, "ProductListByRemark"]);
 
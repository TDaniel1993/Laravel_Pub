<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\DrinkController;
use App\Http\Controllers\api\TypeController;
use App\Http\Controllers\api\PackageController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::get( "/getdrinks", [ DrinkController::class, "getDrinks" ]);
Route::get( "/getdrink", [ DrinkController::class, "getDrink" ]);
Route::post( "/newdrink", [ DrinkController::class, "newDrink" ]);
Route::put( "/updatedrink", [ DrinkController::class, "updateDrink" ]);
Route::delete( "/deletedrink/{id}", [ DrinkController::class, "destroyDrink" ]);
Route::get( "/gettypes", [ TypeController::class, "getTypes" ]);
Route::get( "/gettype", [ TypeController::class, "getType" ]);
Route::post( "/newtype", [ TypeController::class, "newType" ]);
Route::delete( "/deletetype/{id}", [ TypeController::class, "destroyType" ]);
Route::put( "/updatetype", [ TypeController::class, "updateType" ]);
Route::get( "/getpackages", [ PackageController::class, "getPackages" ]);
Route::get( "/getpackage", [ PackageController::class, "getPackage" ]);
Route::post( "/newpackage", [ PackageController::class, "newPackage" ]);
Route::delete( "/deletepackage/{id}", [ PackageController::class, "destroyPackage" ]);

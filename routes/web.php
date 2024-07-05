<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\JenisController;
use App\Http\Controllers\StockController;
use App\Http\Controllers\LocationController;

use App\Models\Category;
use App\Models\Jenis;
use App\Models\Product;
use App\Models\Stock;
use App\Models\Location;

Route::get('/', function () {
    return view('index');
});

Route::get("/create", function() {
    $categories = Category::all();
    $jenis = Jenis::all();
    $products = Product::all();
    $locations = Location::all();
    $stocks = Stock::all();

    return view('create', [
        "categories" => $categories,
        "jenis" => $jenis,
        "products" => $products,
        "locations" => $locations,
        "stocks" => $stocks,
    ]);
});
Route::post("/create/category", [CategoryController::class, "create"]);
Route::post("/create/jenis", [JenisController::class, "create"]);
Route::post("/create/product", [ProductController::class, "create"]);
Route::post("/create/location", [LocationController::class, "create"]);
Route::post("/create/stock", [StockController::class, "create"]);

// Route::resource("/jenis", JenisController::class);
Route::get("/categories", [CategoryController::class, "index"]);
Route::get("/categories/{id}", [CategoryController::class, "show"]);
Route::put("/categories/{id}", [CategoryController::class, "update"]);
Route::delete("/categories/{id}", [CategoryController::class, "delete"]);

Route::get("/jenis", [JenisController::class, "index"]);
Route::get("/jenis/{id}", [JenisController::class, "show"]);
Route::put("/jenis/{id}", [JenisController::class, "update"]);
Route::delete("/jenis/{id}", [JenisController::class, "delete"]);

Route::get("/products", [ProductController::class, "index"]);
Route::get("/products/{id}", [ProductController::class, "show"]);
Route::put("/products/{id}", [ProductController::class, "update"]);
Route::delete("/products/{id}", [ProductController::class, "delete"]);

Route::get("/locations", [LocationController::class, "index"]);
Route::get("/locations/{id}", [LocationController::class, "show"]);
Route::put("/locations/{id}", [LocationController::class, "update"]);
Route::delete("/locations/{id}", [LocationController::class, "delete"]);

Route::get("/stocks", [StockController::class, "index"]);
Route::get("/stocks/{id}", [StockController::class, "show"]);
Route::put("/stocks/{id}", [StockController::class, "update"]);
Route::delete("/stocks/{id}", [StockController::class, "delete"]);

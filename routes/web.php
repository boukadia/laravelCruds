<?php

use App\Http\Controllers\produitController;
use Illuminate\Support\Facades\Route;


Route::get("/",[produitController::class,'store']);
Route::get("/form",[produitController::class,'show'])->name("form");
Route::post("/createPr",[produitController::class,'create']);
Route::get("{id}/edit",[produitController::class,'edit'])->name ("edit");
Route::post("{id}/update",[produitController::class,'update'])->name ("update");
Route::get("{id}/delete",[produitController::class,'delete'])->name("delete");

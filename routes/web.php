<?php

use App\Http\Controllers\AdministrasiController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::middleware(['guest'])->group(function () {
  Route::get("/login-administrasi", [AuthController::class, "index"])->name("login");
  Route::post("/login-administrasi", [AuthController::class, "login"]);
});

Route::middleware(['auth'])->group(function () {
  Route::get("/data-administrasi", [AdministrasiController::class, "index"]);
  Route::get("/data-administrasi/review-file/{id}", [AdministrasiController::class, "rewiewFile"]);
  Route::get("/data-administrasi/change-status-arsip/{id}", [AdministrasiController::class, "changeStatusArsip"]);
  Route::get("/data-administrasi/edit/{administrasi}", [AdministrasiController::class, "edit"]);
  Route::put("/data-administrasi/{administrasi}", [AdministrasiController::class, "update"]);
  Route::delete("/data-administrasi/{administrasi}", [AdministrasiController::class, "destroy"]);
  Route::put("/change-status-arsip", [AdministrasiController::class, "changeStatusArsip"]);
  Route::get("/export/pdf", [AdministrasiController::class, "export"]);

  Route::get("/logout", [AuthController::class, "logout"]);
  Route::put("/change-password", [AuthController::class, "changePassword"]);
});

Route::get("/", [AdministrasiController::class, "formInput"]);
Route::post("/", [AdministrasiController::class, "formStore"]);
Route::get("/page-finished", [AdministrasiController::class, "pageFinished"]);

Route::get("/peraturan-perusahaan", [AdministrasiController::class, "pp"]);

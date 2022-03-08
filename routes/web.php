<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FoController;
use App\Http\Controllers\AnggotaController;
use App\Http\Controllers\BmController;
use App\Http\Controllers\EditOrderControllerFO;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route FO

// Route::get('/', function () {
//     return view('fo.pooling-order-VFO',[
//         "title" => "Pooling Order"
//     ]);
// });
Route::get('/', [FoController::class, 'dashboard']);
Route::get('/dashboard', [FoController::class, 'dashboard']);
Route::get('/pooling-order', [FoController::class, 'poolingorder']);
Route::get('/order', [FoController::class, 'order']);
Route::get('/edit-order', [FoController::class, 'editorder']);

// //edit order
// Route::get('/data-pelanggan', [EditOrderControllerFO::class, 'datapelanggan']);
// Route::get('/data-order', [EditOrderControllerFO::class, 'dataorder']);
// Route::get('/kondisi-unit', [EditOrderControllerFO::class, 'kondisiunit']);
// Route::get('/rekap-transaksi', [EditOrderControllerFO::class, 'rekaptransaksi']);
// Route::get('/data-tambahan', [EditOrderControllerFO::class, 'datatambahan']);
// Route::get('/data-extra', [EditOrderControllerFO::class, 'dataextra']);
// Route::get('/las', [EditOrderControllerFO::class, 'las']);
// //end Edit Order

Route::get('/struktur-kredit', [FoController::class, 'strukturkredit']);
Route::get('/penerimaan-uang', [FoController::class, 'penerimaanuang']);
Route::get('/cetak-buku-anggota', [FoController::class, 'cetakbukuanggota']);
Route::get('/profil-fo', [FoController::class, 'profilfo']);
//endrouteFO

//RouteAnggota
Route::get('/kartu-anggota', [AnggotaController::class, 'kartuanggota']);
Route::get('/pinjaman', [AnggotaController::class, 'pinjaman']);
Route::get('/simpanan', [AnggotaController::class, 'simpanan']);
ROute::get('/profil-ag', [AnggotaController::class, "profilag"]);
//endrouteAnggota

//RouteBM
Route::get('/lap-dt-ag', [BmController::class, 'lapdtag']);
Route::get('/lap-peng-pinj', [BmController::class, 'lappengpinj']);
Route::get('/lap-keuangan', [BmController::class, 'lapkeuangan']);
Route::get('/profil-bm', [BmController::class, 'profilbm']);
//endrouteBM

// Route::get('/', function () {
//     return view('fo.pooling-order-VFO',[
//         "title" => "Pooling Order"
//     ]);
// });

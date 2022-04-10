<?php

use App\Models\Pooling;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BmController;
use App\Http\Controllers\FoController;
use App\Http\Controllers\AnggotaController;



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
// Route::get('/', [FoController::class, 'poolingorder']);
// Route::get('/anggota', [FoController::class, 'anggota']);
Route::get('/pooling-order/{id}', function ($id) {
    return view('fo.pooling-order-VFO', [
        "title" => "single post",
        "pooling" => Pooling::find($id)
    ]);
});
// Route::get('/pooling-order', [FoController::class, 'poolingorder']);
Route::get('/order', [FoController::class, 'order']);
Route::get('/edit-order', [FoController::class, 'editorder']);
Route::get('/struktur-kredit', [FoController::class, 'strukturkredit']);
Route::get('/penerimaan-uang', [FoController::class, 'penerimaanuang']);
// Route::get('/pembayaran', [FoController::class, 'pembayaran']);
Route::get('/cetak-buku-anggota', [FoController::class, 'cetakbukuanggota']);
Route::get('/profil-fo', [FoController::class, 'profilfo']);
Route::get('/print-buku-anggota', [FoController::class, 'printbukuag']);
//endrouteFO

//RouteAnggota
Route::get('/kartu-anggota', [AnggotaController::class, 'kartuanggota']);
Route::get('/pinjaman', [AnggotaController::class, 'pinjaman']);
Route::get('/simpanan', [AnggotaController::class, 'simpanan']);
ROute::get('/profil-ag', [AnggotaController::class, "profilag"]);
//endrouteAnggota

//RouteBM
Route::get('/lap-dt-ag', [BmController::class, 'lapdtag']);
Route::get('/lap-keuangan', [BmController::class, 'lapkeuangan']);
Route::get('/profil-bm', [BmController::class, 'profilbm']);
Route::get('/detail-ag', [BmController::class, 'detailag']);
//endrouteBM

Route::get('/login', function () {
    return view('login', [
        "title" => "Login"
    ]);
});
Route::get('/ss', function () {
    return view('templatebaru', [
        "title" => "Pooling Order"
    ]);
});

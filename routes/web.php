<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BmController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\FoOrderController;
use App\Http\Controllers\AgAnggotaController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\FoAnggotaController;

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

// Route::get('/', [AnggotaController::class, 'kartuanggota']);

//Route FO

// Route::get('/', function () {
//     return view('fo.pooling-order-VFO', [
//         "title" => "Pooling Order"
//     ]);
// });

// Route::get('/', [FoController::class, 'poolingorder']);

// Route::get('/pooling-order/{id}', function ($id) {
//     return view('fo.pooling-order-VFO', [
//         "title" => "single post",
//         "pooling" => Pooling::find($id)
//     ]);
// });

//=======================
Route::get('/', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('auth');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/dashboard/home', function () {
    return view('dashboard.layouts.dashboard', [
        "title" => "Dashboard",
    ]);
})->middleware('auth');

Route::get('/dashboard/profile', [ProfileController::class, 'index'])->middleware('auth');
Route::put('/dashboard/update-profile/{user}', [ProfileController::class, 'updateprofile'])->name('update-profile');
Route::get('/dashboard/setting', [ProfileController::class, 'setting'])->middleware('auth');
Route::put('/dashboard/update-setting/{user}', [ProfileController::class, 'updatesetting'])->name('update-setting');

// Route::resource('/dashboard/profile', ProfileController::class)->middleware('auth');

//=======================

Route::name('allusers')->middleware('auth')->group(
    function () {
        //Finance Officer Route
        Route::get('/dashboard/pooling-order', [FoOrderController::class, 'poolingorder']);
        Route::resource('/dashboard/anggotas', FoAnggotaController::class);
        // Route::get('/dashboard/anggotas/{id}', [FoAnggotaController::class, 'show']);

        Route::resource('/dashboard/orders', FoOrderController::class);
        // Route::get('/dashboard/orders', [FoOrderController::class, 'index']);
        // Route::get('/dashboard/orders/{order:id}', [FoOrderController::class, 'show']);
        //endRoute FO

        //Anggota Route
        Route::get('/dashboard/kartu-anggota', [AgAnggotaController::class, 'index']);
        Route::get('/dashboard/pinjaman', [AgAnggotaController::class, 'pinjaman']);
        Route::get('/dashboard/simpanan', [AgAnggotaController::class, 'simpanan']);
        //endRoute Anggota

        //BM Route
        Route::get('/dashboard/lap-dt-ag', [BmController::class, 'index']);
        Route::get('/dashboard/lap-dt-ag/{anggota:id}', [BmController::class, 'show']);
        Route::get('/dashboard/lap-keuangan', [BmController::class, 'lapkeuangan']);
        //endRoute BM
    }
);








// Route::get('/pooling-order', [FoController::class, 'index']);


// Route::get('/order', [FoController::class, 'order']);
// Route::get('/edit-order', [FoController::class, 'editorder']);
// Route::get('/struktur-kredit', [FoController::class, 'strukturkredit']);
// Route::get('/penerimaan-uang', [FoController::class, 'penerimaanuang']);
// // Route::get('/pembayaran', [FoController::class, 'pembayaran']);
// Route::get('/cetak-buku-anggota', [FoController::class, 'cetakbukuanggota']);
// Route::get('/profil-fo', [FoController::class, 'profilfo']);
// Route::get('/print-buku-anggota', [FoController::class, 'printbukuag']);
// //endrouteFO

// //RouteAnggota

// Route::get('/pinjaman', [FoController::class, 'pinjaman']);
// Route::get('/simpanan', [FoController::class, 'simpanan']);
// ROute::get('/profil-ag', [FoController::class, "profilag"]);
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

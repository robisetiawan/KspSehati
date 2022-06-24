<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BmController;
use App\Http\Controllers\BpkbkController;
use App\Http\Controllers\BpkbmController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PinjamController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\FoOrderController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DownloadController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SimpananController;
use App\Http\Controllers\AgAnggotaController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FoAnggotaController;
use App\Http\Controllers\CetakBukuAgController;
use App\Http\Controllers\PenerimaanUangController;
// use App\Http\Livewire\PinjamTable;

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

Route::get('/dashboard/home', [DashboardController::class, 'index'])->middleware('auth');

Route::get('/dashboard/profile', [ProfileController::class, 'index'])->middleware('auth');
Route::put('/dashboard/update-profile/{user}', [ProfileController::class, 'updateprofile'])->name('update-profile');
Route::get('/dashboard/setting', [ProfileController::class, 'setting'])->middleware('auth');
Route::put('/dashboard/update-setting/{user}', [ProfileController::class, 'updatesetting'])->name('update-setting');

// Route::resource('/dashboard/profile', ProfileController::class)->middleware('auth');

//=======================

//Finance Officer Route
Route::name('fo')->middleware('fo')->group(
    function () {
        Route::get('/dashboard/pooling-order', [FoOrderController::class, 'poolingorder']);
        Route::get('/dashboard/pooling-order/cari', [FoOrderController::class, 'caripoolingorder']);

        Route::resource('/dashboard/anggotas', FoAnggotaController::class);
        // Route::get('/dashboard/anggotas/{anggota}', [SimpananTable::class, 'mount']);
        Route::resource('/dashboard/employee', EmployeeController::class);

        Route::resource('/dashboard/orders', FoOrderController::class);

        Route::resource('/dashboard/bpkb-masuk', BpkbmController::class);
        Route::get('/dashboard/bpkbm/tambah', [SearchController::class, 'bpkbm']);
        Route::get('/dashboard/bpkbm/search', [SearchController::class, 'bpkbmcari']);
        Route::get('/dashboard/bpkbm/{id}/cetak', [BpkbmController::class, 'print']);

        Route::resource('/dashboard/bpkb-keluar', BpkbkController::class);
        Route::get('/dashboard/bpkbk/tambah', [SearchController::class, 'bpkbk']);
        Route::get('/dashboard/bpkbk/search', [SearchController::class, 'bpkbkcari']);
        Route::get('/dashboard/bpkbk/{id}/cetak', [BpkbkController::class, 'print']);

        Route::resource('/dashboard/pinjaman', PinjamController::class);
        // Route::get('/dashboard/orders', [FoOrderController::class, 'index']);
        // Route::get('/dashboard/orders/{order:id}', [FoOrderController::class, 'show']);
        Route::get('/dashboard/struktur-kredit', [FoOrderController::class, 'strukturkredit']);
        Route::get('/dashboard/struktur-kredit/cari', [FoOrderController::class, 'caristrukturkredit']);

        Route::resource('/dashboard/penerimaan-uang', PenerimaanUangController::class);
        Route::get('/dashboard/penuang/search', [SearchController::class, 'penusearch']);
        Route::get('/dashboard/penerimaan-uang/{id}/cetak', [PenerimaanUangController::class, 'cetak']);

        Route::resource('/dashboard/tambah-simpanan', SimpananController::class);
        Route::get('/dashboard/tambah', [SimpananController::class, 'crianggota']);
        Route::get('/dashboard/tambah/cari', [SimpananController::class, 'cari']);

        Route::get('/dashboard/cetak-buku-anggota', [CetakBukuAgController::class, 'cetak']);
        Route::get('/dashboard/cetak-buku-anggota/cari', [CetakBukuAgController::class, 'caricetak']);
        Route::get('/dashboard/cetak-buku-anggota/cari/{id}', [CetakBukuAgController::class, 'print']);

        Route::get('/export-data-anggota', [FoAnggotaController::class, 'AnggotaExport']);

        Route::get('/download/berkas/{berkas}', [DownloadController::class, 'dberkas']);
        Route::get('/hapus_berkas/{id}', [DownloadController::class, 'hberkas']);

        Route::get('/download/fisik/{fisik}', [DownloadController::class, 'dfisik']);
        Route::get('/hapus_fisik/{id}', [DownloadController::class, 'hfisik']);

        Route::get('/download/surat/{surat}', [DownloadController::class, 'dsurat']);
        Route::get('/hapus_surat/{id}', [DownloadController::class, 'hsurat']);

        Route::get('/coba', function () {
            return view('coba', [
                "title" => "Pooling Order"
            ]);
        });
    }
);
//endRoute FO


//Anggota Route
Route::name('anggota')->middleware('anggota')->group(
    function () {
        Route::get('/dashboard/kartu-anggota', [AgAnggotaController::class, 'index']);
        Route::get('/dashboard/pinjaman', [AgAnggotaController::class, 'pinjaman']);
        Route::get('/dashboard/simpanan', [AgAnggotaController::class, 'simpanan']);
    }
);
//endRoute Anggota


//BM Route
Route::name('bm')->middleware('bm')->group(
    function () {
        Route::get('/dashboard/lap-dt-ag', [BmController::class, 'index']);
        Route::get('/dashboard/lap-dt-ag/{id}', [BmController::class, 'detail']);
        Route::get('/dashboard/lap-dt-employee', [BmController::class, 'employee']);
        Route::get('/dashboard/lap-dt-employee/{id}', [BmController::class, 'detailemployee']);
        Route::get('/dashboard/lap-dt-employee/bawa_ag/{id}', [BmController::class, 'bawaag']);
        Route::get('/dashboard/lap-dt-employee/detail_ag/{idemp}/{idag}', [BmController::class, 'detailag']);
        // Route::get('/dashboard/lap-dt-ag/{anggota:id}', [BmController::class, 'show']);
        Route::get('/dashboard/lap-keuangan', [BmController::class, 'lapkeuangan']);
    }
);
//endRoute BM







// Route::get('/pooling-order', [FoController::class, 'index']);


// Route::get('/order', [FoController::class, 'order']);
// Route::get('/edit-order', [FoController::class, 'editorder']);
Route::get('/struktur-kredit', [ProfileController::class, 'strukturkredit']);
Route::get('/penerimaan-uang', [ProfileController::class, 'penerimaanuang']);
// // Route::get('/pembayaran', [ProfileController::class, 'pembayaran']);
Route::get('/cetak-buku-anggota', [ProfileController::class, 'cetakbukuanggota']);
Route::get('/print-buku-anggota', [ProfileController::class, 'printbukuag']);
// Route::get('/profil-fo', [FoController::class, 'profilfo']);
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

// Route::get('/login', function () {
//     return view('login', [
//         "title" => "Login"
//     ]);
// });
// Route::get('/ss', function () {
//     return view('templatebaru', [
//         "title" => "Pooling Order"
//     ]);
// });
Route::get('routes', function () {
    $routeCollection = Route::getRoutes();

    echo "<table style='width:100%'>";
    echo "<tr>";
    echo "<td width='10%'><h4>HTTP Method</h4></td>";
    echo "<td width='10%'><h4>Route</h4></td>";
    echo "<td width='10%'><h4>Name</h4></td>";
    echo "<td width='70%'><h4>Corresponding Action</h4></td>";
    echo "</tr>";
    foreach ($routeCollection as $value) {
        echo "<tr>";
        echo "<td>" . $value->methods()[0] . "</td>";
        echo "<td>" . $value->uri() . "</td>";
        echo "<td>" . $value->getName() . "</td>";
        echo "<td>" . $value->getActionName() . "</td>";
        echo "</tr>";
    }
    echo "</table>";
});

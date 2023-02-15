<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });


// contoh routing
Route::get('/mahasiswa', function() {
    $arrMahasiswa = ["Tika", "Tuti", "Tasya", "Tania", "Tiara"];
    return view('universitas.mahasiswa')->with('mahasiswa', $arrMahasiswa) ;
});

Route::get('/dosen', function() {
    $arrDosen = ["Sandika", "Eko Kurniawan"];
    return view('universitas.dosen')->with('dosen', $arrDosen);
});

Route::get('/gallery', function(){
    return view('universitas.galeri');
});

// Route::get('mahasiswa', function() {
//     $nama = 'Tya Kirana Putri';
//     $nilai = -10;
//     return view('universitas.mahasiswa', compact('nama', 'nilai'));
// });

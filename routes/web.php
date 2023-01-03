<?php

use App\Http\Controllers\GuruController;
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

Route::get('/', function () {
    return view('welcome');
});



Route::get('/login', function () {
    return view('Pengguna.Login');
})->name('login');

Route::post('/postlogin', 'LoginController@postlogin')->name('postlogin');
Route::get('/logout', 'LoginController@logout')->name('logout');

Route::group(['middleware' => ['auth']], function () {
    route::get('/beranda', 'BerandaController@index');
});

Route::get('/data-guru', 'GuruController@index')->name('data-guru');
Route::get('/create-guru', 'GuruController@create')->name('create-guru');
Route::post('/simpan-guru', 'GuruController@store')->name('simpan-guru');
Route::get('/edit-guru/{id}', 'GuruController@edit')->name('edit-guru');
Route::post('/update-guru/{id}', 'GuruController@update')->name('update-guru');
Route::get('/delete-guru/{id}', 'GuruController@destroy')->name('delete-guru');

Route::get('/data-jadwal', 'JadwalController@index')->name('data-jadwal');
Route::get('/create-jadwal', 'JadwalController@create')->name('create-jadwal');
Route::post('/simpan-jadwal', 'JadwalController@store')->name('simpan-jadwal');
Route::get('/edit-jadwal/{id}', 'JadwalController@edit')->name('edit-jadwal');
Route::post('/update-jadwal/{id}', 'JadwalController@update')->name('update-jadwal');
Route::get('/delete-jadwal/{id}', 'JadwalController@destroy')->name('delete-jadwal');


Route::get('/data-kelas', 'KelasController@index')->name('data-kelas');
Route::get('/create-kelas', 'KelasController@create')->name('create-kelas');
Route::post('/simpan-kelas', 'KelasController@store')->name('simpan-kelas');
Route::get('/edit-kelas/{id}', 'KelasController@edit')->name('edit-kelas');
Route::post('/update-kelas/{id}', 'KelasController@update')->name('update-kelas');
Route::get('/delete-kelas/{id}', 'KelasController@destroy')->name('delete-kelas');

Route::get('/data-mapel', 'MapelController@index')->name('data-mapel');
Route::get('/create-mapel', 'MapelController@create')->name('create-mapel');
Route::post('/simpan-mapel', 'MapelController@store')->name('simpan-mapel');
Route::get('/edit-mapel/{id}', 'MapelController@edit')->name('edit-mapel');
Route::post('/update-mapel/{id}', 'MapelController@update')->name('update-mapel');
Route::get('/delete-mapel/{id}', 'MapelController@destroy')->name('delete-mapel');

Route::get('/data-siswa', 'SiswaController@index')->name('data-siswa');
Route::get('/create-siswa', 'SiswaController@create')->name('create-siswa');
Route::post('/simpan-siswa', 'SiswaController@store')->name('simpan-siswa');
Route::get('/edit-siswa/{id}', 'SiswaController@edit')->name('edit-siswa');
Route::post('/update-siswa/{id}', 'SiswaController@update')->name('update-siswa');
Route::get('/delete-siswa/{id}', 'SiswaController@destroy')->name('delete-siswa');
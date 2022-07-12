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

// Auth::routes();

//AuthController
Route::get('/login_admin', 'Auth_adminController@login');
Route::get('/logout_admin', 'Auth_adminController@logout');
Route::post('/postlogin_admin', 'Auth_adminController@postlogin');

//DashboardAdminController
Route::get('/home_admin', 'DashboardAdminController@index');

//AdminController
Route::get('/Admin', 'AdminController@index');
Route::get('/Profil_admin', 'AdminController@profile');
Route::get('/TambahAdmin', 'AdminController@create');
Route::get('/EditAdmin/{b}', 'AdminController@edit');
Route::get('/HapusAdmin/{a}', 'AdminController@destroy');
Route::post('/ProsesTambahAdmin', 'AdminController@store');
Route::post('/ProsesEditAdmin/{c}', 'AdminController@update');

//Users_adminController
Route::get('/User_admin','Users_adminController@index');
Route::get('/TambahUser_admin', 'Users_adminController@create');
Route::get('/Edit_user_admin/{x}', 'Users_adminController@edit');
Route::get('/Hapus_user_admin/{h}', 'Users_adminController@destroy');
Route::post('/ProsesTambahUser_admin', 'Users_adminController@store');
Route::post('/ProsesEditUser_admin/{i}', 'Users_adminController@update');

//Supplier_adminController
Route::get('/Supplier_admin','Supplier_adminController@index');
Route::get('/TambahSupplier_admin','Supplier_adminController@create');
Route::get('/Edit_supplier/{d}','Supplier_adminController@edit');
Route::get('/Hapus_supplier/{f}','Supplier_adminController@destroy');
Route::post('/ProsesTambahSupplier','Supplier_adminController@store');
Route::post('/ProsesEditSupplier/{e}','Supplier_adminController@update');

//Kategori_adminController
Route::get('/Kategori_admin','Kategori_adminController@index');
Route::get('/TambahKategori_admin','Kategori_adminController@create');
Route::get('/Edit_kategori_admin/{g}','Kategori_adminController@edit');
Route::get('/Hapus_kategori_admin/{h}','Kategori_adminController@destroy');
Route::post('/ProsesTambahKategori_admin','Kategori_adminController@store');
Route::post('/ProsesEditKategori_admin/{i}','Kategori_adminController@update');

//Produk_adminController
Route::get('/Produk_admin','Produk_adminController@index');
Route::get('/TambahProduk_admin','Produk_adminController@create');
Route::get('/Edit_produk_admin/{j}','Produk_adminController@edit');
Route::get('/Detail_produk_admin/{m}','Produk_adminController@show');
Route::get('/Hapus_produk_admin/{k}','Produk_adminController@destroy');
Route::post('/ProsesTambahProduk_admin','Produk_adminController@store');
Route::post('/ProsesEditProduk_admin/{l}','Produk_adminController@update');

//Jasakirim_adminController
Route::get('/Jasakirim_admin','Jasakirim_adminController@index');
Route::get('/TambahJasakirim_admin','Jasakirim_adminController@create');
Route::get('/Edit_jasakirim_admin/{x}','Jasakirim_adminController@edit');
Route::get('/Hapus_jasakirim_admin/{y}','Jasakirim_adminController@destroy');
Route::post('/ProsesTambahJasakirim_admin','Jasakirim_adminController@store');
Route::post('/ProsesEditJasakirim_admin/{z}','Jasakirim_adminController@update');

//Review_adminController
Route::get('/Review_admin','Review_adminController@index');
Route::get('/TambahReview_admin','Review_adminController@create');
Route::get('/Edit_review_admin/{q}','Review_adminController@edit');
Route::get('/Hapus_review_admin/{w}','Review_adminController@destroy');
Route::post('/ProsesTambahReview_admin','Review_adminController@store');
Route::post('/ProsesEditReview_admin/{e}','Review_adminController@update');

//Survei_adminController
Route::get('/Survei_admin','Survei_adminController@index');
Route::get('/TambahSurvei_admin','Survei_adminController@create');
Route::get('/Edit_survei_admin/{r}','Survei_adminController@edit');
Route::get('/Hapus_survei_admin/{t}','Survei_adminController@destroy');
Route::post('/ProsesTambahSurvei_admin','Survei_adminController@store');
Route::post('/ProsesEditSurvei_admin/{y}','Survei_adminController@update');

//Pertanyaansurvei_adminController
Route::get('/Pertanyaansurvei_admin','Pertanyaansurvei_adminController@index');
Route::get('/TambahPertanyaansurvei_admin','Pertanyaansurvei_adminController@create');
Route::get('/Edit_pertanyaan_survei_admin/{l}','Pertanyaansurvei_adminController@edit');
Route::get('/Hapus_pertanyaan_survei_admin/{m}','Pertanyaansurvei_adminController@destroy');
Route::post('/ProsesTambahPertanyaansurvei_admin','Pertanyaansurvei_adminController@store');
Route::post('/ProsesEditPertanyaansurvei_admin/{n}','Pertanyaansurvei_adminController@update');

//Voucher_adminController
Route::get('/Voucher_admin','Voucher_adminController@index');
Route::get('/TambahVoucher_admin','Voucher_adminController@create');
Route::get('/Edit_voucher_admin/{u}','Voucher_adminController@edit');
Route::get('/Hapus_voucher_admin/{i}','Voucher_adminController@destroy');
Route::post('/ProsesTambahVoucher_admin','Voucher_adminController@store');
Route::post('/ProsesEditVoucher_admin/{o}','Voucher_adminController@update');

//Order_adminController
Route::get('/Order_admin','Order_adminController@index');
Route::get('/TambahOrder_admin','Order_adminController@create');
Route::get('/Detail_order_admin/{m}','Order_adminController@show');
Route::get('/Edit_order_admin/{j}','Order_adminController@edit');
Route::get('/Hapus_order_admin/{l}','Order_adminController@destroy');
Route::post('/ProsesTambahOrder_admin','Order_adminController@store');
Route::post('/ProsesEditOrder_admin/{n}','Order_adminController@update');

//Custom_adminController
Route::get('/Custom_admin','Custom_adminController@index');
Route::get('/TambahCustom_admin','Custom_adminController@create');
Route::get('/Edit_custom_admin/{g}','Custom_adminController@edit');
Route::get('/Hapus_custom_admin/{h}','Custom_adminController@destroy');
Route::post('/ProsesTambahCustom_admin','Custom_adminController@store');
Route::post('/ProsesEditCustom_admin/{i}','Custom_adminController@update');

//Transaksi_adminController
Route::get('/Transaksi_admin','Transaksi_adminController@index');
Route::get('/TambahTransaksi_admin','Transaksi_adminController@create');
Route::get('/Edit_transaksi_admin/{o}','Transaksi_adminController@edit');
Route::get('/Hapus_transaksi_admin/{p}','Transaksi_adminController@destroy');
Route::post('/ProsesTambahTransaksi_admin','Transaksi_adminController@store');
Route::post('/ProsesEditTransaksi_admin/{f}','Transaksi_adminController@update');

//Pembelian_adminController
Route::get('/Pembelian_admin','Pembelian_adminController@index');
Route::get('/TambahPembelian_admin','Pembelian_adminController@create');
Route::get('/Edit_pembelian_admin/{j}','Pembelian_adminController@edit');
Route::get('/Hapus_pembelian_admin/{u}','Pembelian_adminController@destroy');
Route::post('/ProsesTambahPembelian_admin','Pembelian_adminController@store');
Route::post('/ProsesEditPembelian_admin/{a}','Pembelian_adminController@update');

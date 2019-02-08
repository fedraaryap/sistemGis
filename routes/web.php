<?php

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

Route::get('/login', 'Auth\LoginController@showLoginForm');
Route::get('/dashboard','Admin\AdminController@dashboard')->name('dashboard');
Route::get('/register', 'Auth\RegisterController@showregisterForm');
Route::post('/register', 'Auth\RegisterController@postregisterForm')->name('register');
Route::get('/login', 'Auth\LoginController@showLoginForm');
Route::post('/login', 'Auth\LoginController@postLoginForm')->name('login');
Route::get('/logout', 'Auth\RegisterController@logout')->name('logout');
Route::get('/desa', 'DaftarDesa\DesaController@desa');

//Route Menu Potensi
Route::get('/kelembagaan', 'PotensiDesa\kelembagaan\KelembagaanController@index')->name('lem');
Route::get('/ekonomi', 'PotensiDesa\LembagaEkonomiController@ekonomi');
Route::get('/pertanian', 'PotensiDesa\PertanianController@pertanian');
Route::get('/perternakan', 'PotensiDesa\PerternakanController@perternakan');
Route::get('/ruangpublik', 'PotensiDesa\RuangPublikController@RuangPublik');
Route::get('/sarprasdesa', 'PotensiDesa\SarprasDesaController@SarprasDesa');
Route::get('/sarpraspemerintah', 'PotensiDesa\SarprasPemerintahanController@SarprasPemerintahan');
Route::get('/sda', 'PotensiDesa\SdaController@sda');
Route::get('/sdm', 'PotensiDesa\SdmController@sdm');
Route::get('/umum', 'PotensiDesa\UmumController@umum');


//----------------------------------------------------------data induk--------------------------------------------------------------------

//bahan galian
Route::get('/galian', 'DataInduk\BahanGalianController@index')->name('galian');
Route::get('/galian/Tambah', 'DataInduk\BahanGalianController@create');
Route::post('/galian/Tambah', 'DataInduk\BahanGalianController@store')->name('galian.simpan');
Route::get('/galian/{id}/edit', 'DataInduk\BahanGalianController@edit')->name('galian.edit');
Route::put('/galian/{id}/update', 'DataInduk\BahanGalianController@update')->name('galian.update');
Route::get('/galian/{id}/delete', 'DataInduk\BahanGalianController@destroy')->name('galian.delete');

//Batas Wilayah
Route::get('/bataswil', 'DataInduk\BatasWilayahController@index')->name('bataswil');
Route::get('/bataswil/Tambah', 'DataInduk\BatasWilayahController@create');
Route::post('/bataswil/Tambah', 'DataInduk\BatasWilayahController@store')->name('bataswil.simpan');
Route::get('/bataswil/{id}/edit', 'DataInduk\BatasWilayahController@edit')->name('bataswil.edit');
Route::put('/bataswil/{id}/update', 'DataInduk\BatasWilayahController@update')->name('bataswil.update');
Route::get('/bataswil/{id}/delete', 'DataInduk\BatasWilayahController@destroy')->name('bataswil.delete');


//Hutan
Route::get('/hutan', 'DataInduk\HutanController@index')->name('hutan');
Route::get('/hutan/tambah', 'DataInduk\HutanController@create');
Route::post('/hutan/tambah', 'DataInduk\HutanController@store')->name('hutan.simpan');
Route::get('/hutan/{id}/edit', 'DataInduk\HutanController@edit')->name('hutan.edit');
Route::put('/hutan/{id}/edit', 'DataInduk\HutanController@update')->name('hutan.update');
Route::get('/hutan/{id}/delete', 'DataInduk\HutanController@destroy')->name('hutan.delete');


//jumlah Angkutan
Route::get('/jumangkut', 'DataInduk\JumlahAngkutanController@index')->name('jumangkut');
Route::get('/jumangkut/tambah', 'DataInduk\JumlahAngkutanController@create');
Route::post('/jumangkut/tambah', 'DataInduk\JumlahAngkutanController@store')->name('jumangkut.simpan');
Route::get('/jumangkut/{id}/edit', 'DataInduk\JumlahAngkutanController@edit')->name('jumangkut.edit');
Route::put('/jumangkut/{id}/edit', 'DataInduk\JumlahAngkutanController@update')->name('jumangkut.update');
Route::get('/jumangkut/{id}/delete', 'DataInduk\JumlahAngkutanController@destroy')->name('jumangkut.delete');



//jumlah Budidaya ikan
Route::get('/jumbudikan', 'DataInduk\JumlahBudidayaIkanController@index')->name('jumbudikan');
Route::get('/jumbudikan/tambah', 'DataInduk\JumlahBudidayaIkanController@create');
Route::post('jumbudikan/tambah', 'DataInduk\JumlahBudidayaIkanController@store')->name('jumbudikan.simpan');
Route::get('/jumbudikan/{id}/edit', 'DataInduk\JumlahBudidayaIkanController@edit')->name('jumbudikan.edit');
Route::put('/jumbudikan/{id}/edit', 'DataInduk\JumlahBudidayaIkanController@update')->name('jumbudikan.update');
Route::get('/jumbudikan/{id}/delete', 'DataInduk\JumlahBudidayaIkanController@destroy')->name('jumbudikan.delete');



//jumlah lembaga politik
Route::get('/jumlempolitik', 'DataInduk\JumlahLembagaPolitikController@index')->name('jumlempolitik');
Route::get('/jumlempolitik/tambah', 'DataInduk\JumlahLembagaPolitikController@create');
Route::post('/jumlempolitik/tambah', 'DataInduk\JumlahLembagaPolitikController@store')->name('jumlempolitik.simpan');
Route::get('/jumlempolitik/{id}/edit', 'DataInduk\JumlahLembagaPolitikController@edit')->name('jumlempolitik.edit');
Route::put('/jumlempolitik/{id}/edit', 'DataInduk\JumlahLembagaPolitikController@update')->name('jumlempolitik.update');
Route::get('/jumlempolitik/{id}/delete', 'DataInduk\JumlahLembagaPolitikController@destroy')->name('jumlempolitik.delete');


//jumlah Orang
Route::get('/orang', 'DataInduk\JumlahOrangController@index')->name('orang');
Route::get('/orang/tambah', 'DataInduk\JumlahOrangController@create');
Route::post('/orang/tambah', 'DataInduk\JumlahOrangController@store')->name('orang.simpan');
Route::get('/orang/{id}/edit', 'DataInduk\JumlahOrangController@edit')->name('orang.edit');
Route::put('/orang/{id}/edit', 'DataInduk\JumlahOrangController@update')->name('orang.update');
Route::get('/orang/{id}/delete', 'DataInduk\JumlahOrangController@destroy')->name('orang.delete');


//jumlah pemilik lahan
Route::get('/jumpemlahan', 'DataInduk\JumlahPemilikLahanController@index')->name('jumpemlahan');
Route::get('/jumpemlahan/tambah', 'DataInduk\JumlahPemilikLahanController@create');
Route::post('/jumpemlahan/tambah', 'DataInduk\JumlahPemilikLahanController@store')->name('jumpemlahan.simpan');
Route::get('/jumpemlahan/{id}/edit', 'DataInduk\JumlahPemilikLahanController@edit')->name('jumpemlahan.edit');
Route::put('/jumpemlahan/{id}/edit', 'DataInduk\JumlahPemilikLahanController@update')->name('jumpemlahan.update');
Route::get('/jumpemlahan/{id}/delete', 'DataInduk\JumlahPemilikLahanController@destroy')->name('jumpemlahan.delete');


//jumlah produksi
Route::get('/jumproduksi', 'DataInduk\JumlahProduksiController@index')->name('jumproduksi');
Route::get('/jumproduksi/tambah', 'DataInduk\JumlahProduksiController@create');
Route::post('/jumproduksi/tambah', 'DataInduk\JumlahProduksiController@store')->name('jumproduksi.simpan');
Route::get('/jumproduksi/{id}/edit', 'DataInduk\JumlahProduksiController@edit')->name('jumproduksi.edit');
Route::put('/jumproduksi/{id}/edit', 'DataInduk\JumlahProduksiController@update')->name('jumproduksi.update');
Route::get('/jumproduksi/{id}/delete', 'DataInduk\JumlahProduksiController@destroy')->name('jumproduksi.delete');


//jumlah sdm Desa
Route::get('/jumsdmdesa', 'DataInduk\JumlahSdmDesaController@index')->name('jumsdmdesa');
Route::get('/jumsdmdesa/tambah', 'DataInduk\JumlahSdmDesaController@create');
Route::post('/jumsdmdesa/tambah', 'DataInduk\JumlahSdmDesaController@store')->name('jumsdmdesa.simpan');
Route::get('/jumsdmdesa/{id}/edit', 'DataInduk\JumlahSdmDesaController@edit')->name('jumsdmdesa.edit');
Route::put('/jumsdmdesa/{id}/edit', 'DataInduk\JumlahSdmDesaController@update')->name('jumsdmdesa.update');
Route::get('/jumsdmdesa/{id}/delete', 'DataInduk\JumlahSdmDesaController@destroy')->name('jumsdmdesa.delete');


//jumlah sdm pendidikan
Route::get('/jumsdmpend', 'DataInduk\JumlahSdmPendidikanController@index')->name('jumsdmpend');
Route::get('/jumsdmpend/tambah', 'DataInduk\JumlahSdmPendidikanController@create');
Route::post('/jumsdmpend/tambah', 'DataInduk\JumlahSdmPendidikanController@store')->name('jumsdmpend.simpan');
Route::get('/jumsdmpend/{id}/edit', 'DataInduk\JumlahSdmPendidikanController@edit')->name('jumsdmpend.edit');
Route::put('/jumsdmpend/{id}/edit', 'DataInduk\JumlahSdmPendidikanController@update')->name('jumsdmpend.update');
Route::get('/jumsdmpend/{id}/delete', 'DataInduk\JumlahSdmPendidikanController@destroy')->name('jumsdmpend.delete');


//jumlah status Sdm
Route::get('jumstatsdm', 'DataInduk\JumlahStatusSdmController@index')->name('jumstatsdm');
Route::get('/jumstatsdm/tambah', 'DataInduk\JumlahStatusSdmController@create');
Route::post('/jumstatsdm/tambah', 'DataInduk\JumlahStatusSdmController@store')->name('jumstatsdm.simpan');
Route::get('/jumstatsdm/{id}/edit', 'DataInduk\JumlahStatusSdmController@edit')->name('jumstatsdm.edit');
Route::put('/jumstatsdm/{id}/edit', 'DataInduk\JumlahStatusSdmController@update')->name('jumstatsdm.update');
Route::get('/jumstatsdm/{id}/delete', 'DataInduk\JumlahStatusSdmController@destroy')->name('jumstatsdm.delete');


//jumlah usia sdm
Route::get('/jumusiasdm', 'DataInduk\JumlahUsiaSdmController@index')->name('jumusiasdm');
Route::get('/jumusiasdm/tambah', 'DataInduk\JumlahUsiaSdmController@create');
Route::post('/jumusiasdm/tambah', 'DataInduk\JumlahUsiaSdmController@store')->name('jumusiasdm.simpan');
Route::get('/jumusiasdm/{id}/edit', 'DataInduk\JumlahUsiaSdmController@edit')->name('jumusiasdm.edit');
Route::put('/jumusiasdm/{id}/edit', 'DataInduk\JumlahUsiaSdmController@update')->name('jumusiasdm.update');
Route::get('/jumlah/{id}/delete', 'DataInduk\JumlahUsiaSdmController@destroy')->name('jumusiasdm.delete');

//kebisingan
Route::get('/bising', 'DataInduk\KebisinganController@index')->name('bising');
Route::get('/bising/tambah', 'DataInduk\KebisinganController@create');
Route::post('/bising/tambah', 'DataInduk\KebisinganController@store')->name('bising.simpan');
Route::get('/bising/{id}/edit', 'DataInduk\KebisinganController@edit')->name('bising.edit');
Route::put('/bising/{id}/edit', 'DataInduk\KebisinganController@update')->name('bising.update');
Route::get('/bising/{id}/delete', 'DataInduk\KebisinganController@destroy')->name('bising.delete');

//kualitas angkatan
Route::get('/angkatan', 'DataInduk\KualitasAngkatanController@index')->name('angkatan');
Route::get('/angkatan/tambah', 'DataInduk\KualitasAngkatanController@create');
Route::post('/angkatan/tambah', 'DataInduk\KualitasAngkatanController@store')->name('angkatan.simpan');
Route::get('/angkatan/{id}/edit', 'DataInduk\KualitasAngkatanController@edit')->name('angkatan.edit');
Route::put('/angkatan/{id}/edit', 'DataInduk\KualitasAngkatanController@update')->name('angkatan.update');
Route::get('/angkatan/{id}/delete', 'DataInduk\KualitasAngkatanController@destroy')->name('angkatan.delete');


//udara
Route::get('/udara', 'DataInduk\KualitasUdaraController@index')->name('udara');
Route::get('/udara/tambah', 'DataInduk\KualitasUdaraController@create');
Route::post('/udara/tambah', 'DataInduk\KualitasUdaraController@store')->name('udara.simpan');
Route::get('/udara/{id}/edit', 'DataInduk\KualitasUdaraController@edit')->name('udara.edit');
Route::put('/udara/{id}/edit', 'DataInduk\KualitasUdaraController@update')->name('udara.update');
Route::get('/udara/{id}/delete', 'DataInduk\KualitasUdaraController@destroy')->name('udara.delete');


//lembaga keamanan
Route::get('/lemkeamanan', 'DataInduk\LembagaKeamananController@index')->name('lemkeamanan');
Route::get('/lemkeamanan/tambah', 'DataInduk\LembagaKeamananController@create');
Route::post('/lemkeamanan/tambah', 'DataInduk\LembagaKeamananController@store')->name('lemkeamanan.simpan');
Route::get('/lemkeamanan/{id}/edit', 'DataInduk\LembagaKeamananController@edit')->name('lemkeamanan.edit');
Route::put('/lemkeamanan/{id}/edit', 'DataInduk\LembagaKeamananController@update')->name('lemkeamanan.update');
Route::get('/lemkeamanan/{id}/delete', 'DataInduk\LembagaKeamananController@destroy')->name('lemkeamanan.delete');


//Lembaga Pendidikan
Route::get('/lempendidikan', 'DataInduk\LembagaPendidikanController@index')->name('lemp');
Route::get('/lempendidikan/tambah', 'DataInduk\LembagaPendidikanController@create');
Route::post('/lempendidikan/tambah', 'DataInduk\LembagaPendidikanController@store')->name('lemp.simpan');
Route::get('/lempendidikan/{id}/edit', 'DataInduk\LembagaPendidikanController@edit')->name('lemp.edit');
Route::put('/lempendidikan/{id}/edit', 'DataInduk\LembagaPendidikanController@update')->name('lemp.update');
Route::get('/lempendidikan/{id}/delete', 'DataInduk\LembagaPendidikanController@destroy')->name('lemp.delete');


//luas lahan
Route::get('luaslahan', 'DataInduk\LuasLahanController@index')->name('luaslahan');
Route::get('/luaslahan/tambah', 'DataInduk\LuasLahanController@create');
Route::post('/luaslahan/tambah', 'DataInduk\LuasLahanController@store')->name('luaslahan.simpan');
Route::get('/luaslahan/{id}/edit', 'DataInduk\LuasLahanController@edit')->name('luaslahan.edit');
Route::put('/luaslahan/{id}/edit', 'DataInduk\LuasLahanController@update')->name('luaslahan.update');
Route::get('/luaslahan/{id}/delete', 'DataInduk\LuasLahanController@destroy')->name('luaslahan.delete');

//luas wilayah
Route::get('/luas', 'DataInduk\LuasWilayahController@index')->name('luas');
Route::get('/luas/tambah', 'DataInduk\LuasWilayahController@create');
Route::post('/luas/tambah', 'DataInduk\LuasWilayahController@store')->name('luas.simpan');
Route::get('/luas/{id}/edit', 'DataInduk\LuasWilayahController@edit')->name('luas.edit');
Route::put('/luas/{id}/edit', 'DataInduk\LuasWilayahController@update')->name('luas.update');
Route::get('/luas/{id}/delete', 'DataInduk\LuasWilayahController@destroy')->name('luas.delete');


//mekanisme pemasaran sda
Route::get('/mekpemsda', 'DataInduk\MekanismePemasaranSdaController@index')->name('mekpemsda');
Route::get('/mekpemsda/tambah', 'DataInduk\MekanismePemasaranSdaController@create');
Route::post('/mekpemsda/tambah', 'DataInduk\MekanismePemasaranSdaController@store')->name('mekpemsda.simpan');
Route::get('/mekpemsda/{id}/edit', 'DataInduk\MekanismePemasaranSdaController@edit')->name('mekpemsda.edit');
Route::put('/mekpemsda/{id}/edit', 'DataInduk\MekanismePemasaranSdaController@update')->name('mekpemsda.update');
Route::get('/mekpemsda/{id}/delete', 'DataInduk\MekanismePemasaranSdaController@destroy')->name('mekpemsda.delete');


//pekan ternak
Route::get('/pakan', 'DataInduk\PakanTernakController@index')->name('pakan');
Route::get('/pakan/tambah', 'DataInduk\PakanTernakController@create');
Route::post('/pakan/tambah', 'DataInduk\PakanTernakController@store')->name('pakan.simpan');
Route::get('/pakan/{id}/edit', 'DataInduk\PakanTernakController@edit')->name('pakan.edit');
Route::put('/pakan/{id}/edit', 'DataInduk\PakanTernakController@update')->name('pakan.update');
Route::get('/pakan/{id}/delete', 'DataInduk\PakanTernakController@destroy')->name('pakan.delete');

//perangkat Desa
Route::get('/perangkat', 'DataInduk\PerangkatDesaController@index')->name('perangkat');
Route::get('/perangkat/tambah', 'DataInduk\PerangkatDesaController@create');
Route::post('/perangkat/tambah', 'DataInduk\PerangkatDesaController@store')->name('perangkat.simpan');
Route::get('/perangkat/{id}/edit', 'DataInduk\PerangkatDesaController@edit')->name('perangkat.edit');
Route::put('/perangkat/{id}/edit', 'DataInduk\PerangkatDesaController@update')->name('perangkat.update');
Route::get('/perangkat/{id}/delete', 'DataInduk\PerangkatDesaController@destroy')->name('perangkat.delete');

//populasi ternak
Route::get('/populasi', 'DataInduk\PopulasiTernakController@index')->name('populasi');
Route::get('/populasi/tambah', 'DataInduk\PopulasiTernakController@create');
Route::post('/populasi/tambah', 'DataInduk\PopulasiTernakController@store')->name('populasi.simpan');
Route::get('/populasi/{id}/edit', 'DataInduk\PopulasiTernakController@edit')->name('populasi.edit');
Route::put('/populasi/{id}/edit', 'DataInduk\PopulasiTernakController@update')->name('populasi.update');
Route::get('/populasi/{id}/delete', 'DataInduk\PopulasiTernakController@destroy')->name('populasi.delete');


//potensi air
Route::get('/potensiair', 'DataInduk\PotensiAirController@index')->name('potensiair');
Route::get('/potensiair/tambah', 'DataInduk\PotensiAirController@create');
Route::post('/potensiair/tambah', 'DataInduk\PotensiAirController@store')->name('potensiair.simpan');
Route::get('/potensiair/{id}/edit', 'DataInduk\PotensiAirController@edit')->name('potensiair.edit');
Route::put('/potensiair/{id}/edit', 'DataInduk\PotensiAirController@update')->name('potensiair.update');
Route::get('/potensiair/{id}/delete', 'DataInduk\PotensiAirController@destroy')->name('potensiair.delete');




//produktifitas pertanian
Route::get('/produkpert', 'DataInduk\ProduktifitasPertanianController@index')->name('produkpert');
Route::get('/produkpert/tambah', 'DataInduk\ProduktifitasPertanianController@create');
Route::post('/produkpert/tambah', 'DataInduk\ProduktifitasPertanianController@store')->name('produkpert.simpan');
Route::get('/produkpert/{id}/edit', 'DataInduk\ProduktifitasPertanianController@edit')->name('produkpert.edit');
Route::put('/produkpert/{id}/edit', 'DataInduk\ProduktifitasPertanianController@update')->name('produkpert.update');
Route::get('/produkpert/{id}/delete', 'DataInduk\ProduktifitasPertanianController@destroy')->name('produkpert.delete');


//status prasarana lainnya
Route::get('/statpraslainnya', 'DataInduk\StatPrasaranaLainnyaController@index')->name('statpraslainnya');
Route::get('/statpraslainnya/tambah', 'DataInduk\StatPrasaranaLainnyaController@create');
Route::post('/statpraslainnya/tambah', 'DataInduk\StatPrasaranaLainnyaController@store')->name('statpraslainnya.simpan');
Route::get('/statpraslainnya/{id}/edit', 'DataInduk\StatPrasaranaLainnyaController@edit')->name('statpraslainnya.edit');
Route::put('/statpraslainnya/{id}/edit', 'DataInduk\StatPrasaranaLainnyaController@update')->name('statpraslainnya.update');
Route::get('/statpraslainnya/{id}/delete', 'DataInduk\StatPrasaranaLainnyaController@destroy')->name('statpraslainnya.delete');


//status sarpras pemerintahan
Route::get('/sarpem', 'DataInduk\StatSarprasPemerintahController@index')->name('sarpem');
Route::get('/sarpem/tambah', 'DataInduk\StatSarprasPemerintahController@create');
Route::post('/sarpem/tambah', 'DataInduk\StatSarprasPemerintahController@store')->name('sarpem.simpan');
Route::get('/sarpem/{id}/edit', 'DataInduk\StatSarprasPemerintahController@edit')->name('sarpem.edit');
Route::put('/sarpem/{id}/edit', 'DataInduk\StatSarprasPemerintahController@update')->name('sarpem.update');
Route::get('/sarpem/{id}/delete', 'DataInduk\StatSarprasPemerintahController@destroy')->name('sarpem.delete');


//status sumber air
Route::get('/statsumair', 'DataInduk\StatSumberAirController@index')->name('statsumair');
Route::get('/statsumair/tambah', 'DataInduk\StatSumberAirController@create');
Route::post('/statsumair/tambah', 'DataInduk\StatSumberAirController@store')->name('statsumair.simpan');
Route::get('/statsumair/{id}/edit', 'DataInduk\StatSumberAirController@edit')->name('statsumair.edit');
Route::put('/statsumair/{id}/edit', 'DataInduk\StatSumberAirController@update')->name('statsumair.update');
Route::get('/statsumair/{id}/delete', 'DataInduk\StatSumberAirController@destroy')->name('statsumair.delete');



//status air
Route::get('/statair', 'DataInduk\StatusAirController@index')->name('statair');
Route::get('/statair/tambah', 'DataInduk\StatusAirController@create');
Route::post('/statair/tambah', 'DataInduk\StatusAirController@store')->name('statair.simpan');
Route::get('/statair/{id}/edit', 'DataInduk\StatusAirController@edit')->name('statair.edit');
Route::put('/statair/{id}/edit', 'DataInduk\StatusAirController@update')->name('statair.update');
Route::get('/statair/{id}/delete', 'DataInduk\StatusAirController@destroy')->name('statair.delete');


//status jasa usaha
Route::get('/statjasausaha', 'DataInduk\StatusJasaUsahaController@index')->name('statjasausaha');
Route::get('/statjasausaha/tambah', 'DataInduk\StatusJasaUsahaController@create');
Route::post('/statjasausaha/tambah', 'DataInduk\StatusJasaUsahaController@store')->name('statjasausaha.simpan');
Route::get('/statjasausaha/{id}/edit', 'DataInduk\StatusJasaUsahaController@edit')->name('statjasausaha.edit');
Route::put('/statjasausaha/{id}/edit', 'DataInduk\StatusJasaUsahaController@update')->name('statjasausaha.update');
Route::get('/statjasausaha/{id}/delete', 'DataInduk\StatusJasaUsahaController@destroy')->name('statjasausaha.delete');

//status lahan
Route::get('/statlahan', 'DataInduk\StatusLahanController@index')->name('statlahan');
Route::get('/statlahan/tambah', 'DataInduk\StatusLahanController@create');
Route::post('/statlahan/tambah', 'DataInduk\StatusLahanController@store')->name('statlahan.simpan');
Route::get('/statlahan/{id}/edit', 'DataInduk\StatusLahanController@edit')->name('statlahan.edit');
Route::put('/statlahan/{id}/edit', 'DataInduk\StatusLahanController@update')->name('statlahan.update');
Route::get('/statlahan/{id}/delete', 'DataInduk\StatusLahanController@destroy')->name('statlahan.delete');


//status orbitas
Route::get('/statorbitasi', 'DataInduk\StatusOrbitasiController@index')->name('statorbitasi');
Route::get('/statorbitasi/tambah', 'DataInduk\StatusOrbitasiController@create');
Route::post('/statorbitasi/tambah', 'DataInduk\StatusOrbitasiController@store')->name('statorbitasi.simpan');
Route::get('/statorbitasi/{id}/edit', 'DataInduk\StatusOrbitasiController@edit')->name('statorbitasi.edit');
Route::put('/statorbitasi/{id}/edit', 'DataInduk\StatusOrbitasiController@update')->name('statorbitasi.update');
Route::get('/statorbitasi/{id}/delete', 'DataInduk\StatusOrbitasiController@destroy')->name('statorbitasi.delete');


//status Prasarana
Route::get('/statprasarana', 'DataInduk\StatusPrasaranaController@index')->name('statprasarana');
Route::get('/statprasarana/tambah', 'DataInduk\StatusPrasaranaController@create');
Route::post('/statprasarana/tambah', 'DataInduk\StatusPrasaranaController@store')->name('statprasarana.simpan');
Route::get('/statprasarana/{id}/edit', 'DataInduk\StatusPrasaranaController@edit')->name('statprasarana.edit');
Route::put('/statprasarana/{id}/edit', 'DataInduk\StatusPrasaranaController@update')->name('statprasarana.update');
Route::get('/statprasarana/{id}/delete', 'DataInduk\StatusPrasaranaController@destroy')->name('statprasarana.delete');


//Status sarana transportasi
Route::get('/stattrans', 'DataInduk\StatusSaranaTransportasiController@index')->name('stattrans');
Route::get('/stattrans/tambah', 'DataInduk\StatusSaranaTransportasiController@create');
Route::post('/stattrans/tambah', 'DataInduk\StatusSaranaTransportasiController@store')->name('stattrans.simpan');
Route::get('/stattrans/{id}/edit', 'DataInduk\StatusSaranaTransportasiController@edit')->name('stattrans.edit');
Route::put('/stattrans/{id}/edit', 'DataInduk\StatusSaranaTransportasiController@update')->name('stattrans.update');
Route::get('/stattrans/{id}/delete', 'DataInduk\StatusSaranaTransportasiController@destroy')->name('stattrans.delete');

//tahun
Route::get('/tahun', 'DataInduk\TahunController@index')->name('tahun');
Route::get('/tahun/tambah', 'DataInduk\TahunController@create');
Route::post('/tahun/tambah', 'DataInduk\TahunController@store')->name('tahun.simpan');
Route::get('/tahun/{id}/edit', 'DataInduk\TahunController@edit')->name('tahun.edit');
Route::put('/tahun/{id}/edit', 'DataInduk\TahunController@update')->name('tahun.update');
Route::get('/tahun/{id}/delete', 'DataInduk\TahunController@destroy')->name('tahun.delete');


//tenaga kerja
Route::get('/tenagaker', 'DataInduk\TenagaKerjaController@index')->name('tenagakerja');
Route::get('/tenagaker/tambah', 'DataInduk\TenagaKerjaController@create');
Route::post('/tenagaker/tambah', 'DataInduk\TenagaKerjaController@store')->name('tenagakerja.simpan');
Route::get('/tenagaker/{id}/edit', 'DataInduk\TenagaKerjaController@edit')->name('tenagakerja.edit');
Route::put('/tenagaker/{id}/edit', 'DataInduk\TenagaKerjaController@update')->name('tenagakerja.update');
Route::get('/tenagaker/{id}/delete', 'DataInduk\TenagaKerjaController@destroy')->name('tenagakerja.delete');


//wilayah
Route::get('/wilayah', 'DataInduk\WilayahController@index')->name('wilayah');
Route::get('/wilayah/tambah', 'DataInduk\WilayahController@create');
Route::post('/wilayah/tambah', 'DataInduk\WilayahController@store')->name('wilayah.simpan');
Route::get('/wilayah/{id}/edit', 'DataInduk\WilayahController@edit')->name('wilayah.edit');
Route::put('/wilayah/{id}/edit', 'DataInduk\WilayahController@update')->name('wilayah.update');
Route::get('/wilayah/{id}/delete', 'DataInduk\WilayahController@destroy')->name('wilayah.delete');



//------------------------------------------------------------------------------------------------------------------------------------------------
//------------------------------------------------------------------------------------------------------------------------------------------------

//airbersih
Route::get('/airbersih', 'Referensi\AirBersihController@index')->name('air_bersih');
Route::get('/airbersih/tambah', 'Referensi\AirBersihController@create');
Route::post('/airbersih/tambah', 'Referensi\AirBersihController@store')->name('air_bersih.simpan');
Route::get('/airbersih/{id}/edit','Referensi\AirBersihController@edit')->name('air_bersih.edit');
Route::put('/airbersih/{id}/edit','Referensi\AirBersihController@update')->name('air_bersih.update');
Route::get('/airbersih/{id}/delete','Referensi\AirBersihController@destroy')->name('air_bersih.delete');


//airpanas
Route::get('/airpanas', 'Referensi\AirpanasController@index')->name('air_panas');
Route::get('/airpanas/tambah', 'Referensi\AirpanasController@create');
Route::post('/airpanas/tambah', 'Referensi\AirpanasController@store')->name('air_panas.simpan');
Route::get('/airpanas/{id}/edit','Referensi\AirpanasController@edit')->name('air_panas.edit');
Route::put('/airpanas/{id}/edit','Referensi\AirpanasController@update')->name('air_panas.update');
Route::get('/airpanas/{id}/delete','Referensi\AirpanasController@destroy')->name('air_panas.delete');


//batas
Route::get('/batas', 'Referensi\BatasController@index')->name('batas');
Route::get('/batas/tambah', 'Referensi\BatasController@create');
Route::post('/batas/tambah', 'Referensi\BatasController@store')->name('batas.simpan');
Route::get('/batas/{id}/edit','Referensi\BatasController@edit')->name('batas.edit');
Route::put('batas/{id}/edit','Referensi\BatasController@update')->name('batas.update');
Route::get('/batas/{id}/delete','Referensi\BatasController@destroy')->name('batas.delete');



//Dampak Pengolahan Hutan
Route::get('/pengolahanhutan', 'Referensi\DampakPengolahanHutanController@index')->name('pengolahanhutan');
Route::get('/pengolahanhutan/tambah', 'Referensi\DampakPengolahanHutanController@create');
Route::post('/pengolahanhutan/tambah', 'Referensi\DampakPengolahanHutanController@store')->name('pengolahanhutan.simpan');
Route::get('/pengolahanhutan/{id}/edit','Referensi\DampakPengolahanHutanController@edit')->name('pengolahanhutan.edit');
Route::put('/pengolahanhutan/{id}/edit','Referensi\DampakPengolahanHutanController@update')->name('pengolahanhutan.update');
Route::get('/pengolahanhutan/{id}/delete','Referensi\DampakPengolahanHutanController@destroy')->name('pengolahanhutan.delete');


//ekonomi jasa usaha
Route::get('/ekojas', 'Referensi\EkonomiJasaUsahaController@index')->name('ekojas');
Route::get('/ekojas/tambah', 'Referensi\EkonomiJasaUsahaController@create');
Route::post('/ekojas/tambah', 'Referensi\EkonomiJasaUsahaController@store')->name('ekojas.simpan');
Route::get('/ekojas/{id}/edit','Referensi\EkonomiJasaUsahaController@edit')->name('ekojas.edit');
Route::put('/ekojas/{id}/edit','Referensi\EkonomiJasaUsahaController@update')->name('ekojas.update');
Route::get('/ekojas/{id}/delete','Referensi\EkonomiJasaUsahaController@destroy')->name('ekojas.delete');

//jenis Angkutan
Route::get('/jenisangkutan', 'Referensi\JenisAngkutanController@index')->name('jenisangkutan');
Route::get('/jenisangkutan/tambah', 'Referensi\JenisAngkutanController@create');
Route::post('/jenisangkutan/tambah', 'Referensi\JenisAngkutanController@store')->name('jenisangkutan.simpan');
Route::get('/jenisangkutan/{id}/edit','Referensi\JenisAngkutanController@edit')->name('jenisangkutan.edit');
Route::put('/jenisangkutan/{id}/edit','Referensi\JenisAngkutanController@update')->name('jenisangkutan.update');
Route::get('/jenisangkutan/{id}/delete','Referensi\JenisAngkutanController@destroy')->name('jenisangkutan.delete');






//jenis keamanan
Route::get('/keamanan', 'Referensi\JenisKeamananController@index')->name('keamanan');
Route::get('/keamanan/tambah', 'Referensi\JenisKeamananController@create');
Route::post('/keamanan/tambah', 'Referensi\JenisKeamananController@store')->name('keamanan.simpan');
Route::get('/keamanan/{id}/edit','Referensi\JenisKeamananController@edit')->name('keamanan.edit');
Route::put('/keamanan/{id}/edit','Referensi\JenisKeamananController@update')->name('keamanan.update');
Route::get('/keamanan/{id}/delete','Referensi\JenisKeamananController@destroy')->name('keamanan.delete');


//jenispendidikan
Route::get('/pendidikan', 'Referensi\JenisPendidikanController@index')->name('jenis_pendidikan');
Route::get('/pendidikan/tambah', 'Referensi\JenisPendidikanController@create');
Route::post('/pendidikan/tambah', 'Referensi\JenisPendidikanController@store')->name('jenis_pendidikan.simpan');
Route::get('/pendidikan/{id}/edit','Referensi\JenisPendidikanController@edit')->name('jenis_pendidikan.edit');
Route::put('/pendidikan/{id}/edit','Referensi\JenisPendidikanController@update')->name('jenis_pendidikan.update');
Route::get('/pendidikan/{id}/delete','Referensi\JenisPendidikanController@destroy')->name('jenis_pendidikan.delete');



//jenis Prasarana Sarana
Route::get('/jenprassar', 'Referensi\jenisPrasaranaSaranaController@index')->name('jenprassar');
Route::get('/jenprassar/tambah', 'Referensi\jenisPrasaranaSaranaController@create');
Route::post('/jenprassar/tambah', 'Referensi\jenisPrasaranaSaranaController@store')->name('jenprassar.simpan');
Route::get('/jenprassar/{id}/edit','Referensi\jenisPrasaranaSaranaController@edit')->name('jenprassar.edit');
Route::put('/jenprassar/{id}/edit','Referensi\jenisPrasaranaSaranaController@update')->name('jenprassar.update');
Route::get('/jenprassar/{id}/delete','Referensi\jenisPrasaranaSaranaController@destroy')->name('jenprassar.delete');




//jenisproduktifitas
Route::get('/produktifitas', 'Referensi\JenisProduktifitasController@index')->name('jenis_produktifitas');
Route::get('/produktifitas/tambah', 'Referensi\JenisProduktifitasController@create');
Route::post('/produktifitas/tambah', 'Referensi\JenisProduktifitasController@store')->name('jenis_produktifitas.simpan');
Route::get('/produktifitas/{id}/edit','Referensi\JenisProduktifitasController@edit')->name('jenis_produktifitas.edit');
Route::put('/produktifitas/{id}/edit','Referensi\JenisProduktifitasController@update')->name('jenis_produktifitas.update');
Route::get('/produktifitas/{id}/delete','Referensi\JenisProduktifitasController@destroy')->name('jenis_produktifitas.delete');


//jenisternak
Route::get('/ternak', 'Referensi\JenisTernakController@index')->name('jenis_ternak');
Route::get('/ternak/tambah', 'Referensi\JenisTernakController@create');
Route::post('/ternak/tambah', 'Referensi\JenisTernakController@store')->name('jenis_ternak.simpan');
Route::get('/ternak/{id}/edit','Referensi\JenisTernakController@edit')->name('jenis_ternak.edit');
Route::put('/ternak/{id}/edit','Referensi\JenisTernakController@update')->name('jenis_ternak.update');
Route::get('/ternak/{id}/delete','Referensi\JenisTernakController@destroy')->name('jenis_ternak.delete');


//tingkat Kebisingan
Route::get('/kebisingan', 'Referensi\TingkatKebisinganController@index')->name('kebisingan');
Route::get('/kebisingan/tambah', 'Referensi\TingkatKebisinganController@create');
Route::post('/kebisingan/tambah', 'Referensi\TingkatKebisinganController@store')->name('kebisingan.simpan');
Route::get('/kebisingan/{id}/edit','Referensi\TingkatKebisinganController@edit')->name('kebisingan.edit');
Route::put('/kebisingan/{id}/edit','Referensi\TingkatKebisinganController@update')->name('kebisingan.update');
Route::get('/kebisingan/{id}/delete','Referensi\TingkatKebisinganController@destroy')->name('kebisingan.delete');



//hutan
Route::get('/konhutan', 'Referensi\KondisiHutanController@index')->name('kondisi_hutan');
Route::get('/konhutan/tambah','referensi\KondisiHutanController@create');
Route::post('/konhutan/tambah','referensi\KondisiHutanController@store')->name('kondisi_hutan.simpan');
Route::get('/konhutan/{id}/edit','Referensi\KondisiHutanController@edit')->name('kondisi_hutan.edit');
Route::put('/konhutan/{id}/edit','Referensi\KondisiHutanController@update')->name('kondisi_hutan.update');
Route::get('/konhutan/{id}/delete','Referensi\KondisiHutanController@destroy')->name('kondisi_hutan.delete');



//pemasaran
Route::get('/pemasaran', 'Referensi\MekanismePemasaranController@index')->name('mekanisme_pemasaran');
Route::get('/pemasaran/tambah','referensi\MekanismePemasaranController@create');
Route::post('/pemasaran/tambah','referensi\MekanismePemasaranController@store')->name('mekanisme_pemasaran.simpan');
Route::get('/pemasaran/{id}/edit','Referensi\MekanismePemasaranController@edit')->name('mekanisme_pemasaran.edit');
Route::put('/pemasaran/{id}/edit','Referensi\MekanismePemasaranController@update')->name('mekanisme_pemasaran.update');
Route::get('/pemasaran/{id}/delete','Referensi\MekanismePemasaranController@destroy')->name('mekanisme_pemasaran.delete');


//namasekolah
Route::get('/sekolah', 'Referensi\NamaSekolahController@index')->name('nama_sekolah');
Route::get('/sekolah/tambah', 'Referensi\NamaSekolahController@create');
Route::post('/sekolah/tambah', 'Referensi\NamaSekolahController@store')->name('nama_sekolah.simpan');
Route::get('/sekolah/{id}/edit','Referensi\NamaSekolahController@edit')->name('nama_sekolah.edit');
Route::put('/sekolah/{id}/edit','Referensi\NamaSekolahController@update')->name('nama_sekolah.update');
Route::get('/sekolah/{id}/delete','Referensi\NamaSekolahController@destroy')->name('nama_sekolah.delete');


//Orbitasi
Route::get('/orbitasi', 'Referensi\OrbitasiController@index')->name('orbitasi');
Route::get('/orbitasi/tambah', 'Referensi\OrbitasiController@create');
Route::post('/orbitasi/tambah', 'Referensi\OrbitasiController@store')->name('orbitasi.simpan');
Route::get('/orbitasi/{id}/edit','Referensi\OrbitasiController@edit')->name('orbitasi.edit');
Route::put('/orbitasi/{id}/edit','Referensi\OrbitasiController@update')->name('orbitasi.update');
Route::get('/orbitasi/{id}/delete','Referensi\OrbitasiController@destroy')->name('orbitasi.delete');



//partaipolitik
Route::get('/partai', 'Referensi\PartaiPolitikController@index')->name('partai_politik');
Route::get('/partai/tambah', 'Referensi\PartaiPolitikController@create');
Route::post('/partai/tambah', 'Referensi\PartaiPolitikController@store')->name('partai_politik.simpan');
Route::get('/partai/{id}/edit','Referensi\PartaiPolitikController@edit')->name('partai_politik.edit');
Route::put('/partai/{id}/edit','Referensi\PartaiPolitikController@update')->name('partai_politik.update');
Route::get('/partai/{id}/delete','Referensi\PartaiPolitikController@destroy')->name('partai_politik.delete');

//wisata
Route::get('/wisata', 'Referensi\PotensiWisataController@index')->name('wisata');
Route::get('/wisata/tambah','referensi\PotensiWisataController@create');
Route::post('/wisata/tambah','referensi\PotensiWisataController@store')->name('wisata.simpan');
Route::get('/wisata/{id}/edit','Referensi\PotensiWisataController@edit')->name('wisata.edit');
Route::put('/wisata/{id}/edit','Referensi\PotensiWisataController@update')->name('wisata.update');
Route::get('/wisata/{id}/delete','Referensi\PotensiWisataController@destroy')->name('wisata.delete');

//prasarana lainnya
Route::get('/praslainya', 'Referensi\PrasaranaLainnyaController@index')->name('praslainya');
Route::get('/praslainya/tambah','referensi\PrasaranaLainnyaController@create');
Route::post('/praslainya/tambah','referensi\PrasaranaLainnyaController@store')->name('praslainya.simpan');
Route::get('/praslainya/{id}/edit','Referensi\PrasaranaLainnyaController@edit')->name('praslainya.edit');
Route::put('/praslainya/{id}/edit','Referensi\PrasaranaLainnyaController@update')->name('praslainya.update');
Route::get('/praslainya/{id}/delete','Referensi\PrasaranaLainnyaController@destroy')->name('praslainya.delete');


//produksi
Route::get('/produksi', 'Referensi\ProduksiController@index')->name('produksi');
Route::get('/produksi/tambah', 'Referensi\ProduksiController@create');
Route::post('/produksi/tambah', 'Referensi\ProduksiController@store')->name('produksi.simpan');
Route::get('/produksi/{id}/edit', 'Referensi\ProduksiController@edit')->name('produksi.edit');
Route::put('/produksi/{id}/edit', 'Referensi\ProduksiController@update')->name('produksi.update');
Route::get('/produksi/{id}/delete', 'Referensi\ProduksiController@destroy')->name('produksi.delete');



//pengelolaan hutan
Route::get('/pengolahanhutan', 'Referensi\PengolahanHutanController@index')->name('pengolahan_hutan');
Route::get('/pengolahanhutan/tambah','referensi\PengolahanHutanController@create');
Route::post('/pengolahanhutan/tambah','referensi\PengolahanHutanController@store')->name('pengolahan_hutan.simpan');
Route::get('/pengolahanhutan/{id}/edit','Referensi\PengolahanHutanController@edit')->name('pengolahan_hutan.edit');
Route::put('/pengolahanhutan/{id}/edit','Referensi\PengolahanHutanController@update')->name('pengolahan_hutan.update');
Route::get('/pengolahanhutan/{id}/delete','Referensi\PengolahanHutanController@destroy')->name('pengolahan_hutan.delete');


//sarana transportasi
Route::get('/sartrans', 'Referensi\SaranaTransportasiController@index')->name('sartrans');
Route::get('/sartrans/tambah','referensi\SaranaTransportasiController@create');
Route::post('/sartrans/tambah','referensi\SaranaTransportasiController@store')->name('sartrans.simpan');
Route::get('/sartrans/{id}/edit','Referensi\SaranaTransportasiController@edit')->name('sartrans.edit');
Route::put('/sartrans/{id}/edit','Referensi\SaranaTransportasiController@update')->name('sartrans.update');
Route::get('/sartrans/{id}/delete','Referensi\SaranaTransportasiController@destroy')->name('sartrans.delete');

//sarpras pemerintahan
Route::get('/sarpraspem', 'Referensi\SarprasPemerintahanController@index')->name('SarprasPem');
Route::get('/sarpraspem/tambah','referensi\SarprasPemerintahanController@create');
Route::post('/sarpraspem/tambah','referensi\SarprasPemerintahanController@store')->name('SarprasPem.simpan');
Route::get('/sarpraspem/{id}/edit','Referensi\SarprasPemerintahanController@edit')->name('SarprasPem.edit');
Route::put('/sarpraspem/{id}/edit','Referensi\SarprasPemerintahanController@update')->name('SarprasPem.update');
Route::get('/sarpraspem/{id}/delete','Referensi\SarprasPemerintahanController@destroy')->name('SarprasPem.delete');


//sumber air
Route::get('/sumber', 'Referensi\SumberAirController@index')->name('sumber_air');
Route::get('/sumber/tambah', 'Referensi\SumberAirController@create');
Route::post('/sumber/tambah', 'Referensi\SumberAirController@store')->name('sumber_air.simpan');
Route::get('/sumber/{id}/edit', 'Referensi\SumberAirController@edit')->name('sumber_air.edit');
Route::put('/sumber/{id}/edit', 'Referensi\SumberAirController@update')->name('sumber_air.update');
Route::get('/sumber/{id}/delete', 'Referensi\SumberAirController@destroy')->name('sumber_air.delete');


//taman
Route::get('/taman', 'Referensi\TamanController@index')->name('taman');
Route::get('/taman/tambah','referensi\TamanController@create');
Route::post('/taman/tambah','referensi\TamanController@store')->name('taman.simpan');
Route::get('/taman/{id}/edit','Referensi\TamanController@edit')->name('taman.edit');
Route::put('/taman/{id}/edit','Referensi\TamanController@update')->name('taman.update');
Route::get('/taman/{id}/delete','Referensi\TamanController@destroy')->name('taman.delete');


//wilayah lahan 
Route::get('/lahan', 'Referensi\WilayahLahanController@index')->name('wilayah_lahan');
Route::get('/lahan/tambah','Referensi\WilayahLahanController@create');
Route::post('/lahan/tambah','Referensi\WilayahLahanController@store')->name('wilayah_lahan.simpan');
Route::get('/lahan/{id}/edit','Referensi\WilayahLahanController@edit')->name('wilayah_lahan.edit');
Route::put('/lahan/{id}/edit','Referensi\WilayahLahanController@update')->name('wilayah_lahan.update');
Route::get('/lahan/{id}/delete','Referensi\WilayahLahanController@destroy')->name('wilayah_lahan.delete');


//status kepemilikan
Route::get('/kepemilikan','Referensi\StatusKepemilikanController@index')->name('kepemilikan');
Route::get('/kepemilikan/tambah','Referensi\StatusKepemilikanController@create');
Route::post('/kepemilikan/tambah','Referensi\StatusKepemilikanController@store')->name('kepemilikan.simpan');
Route::get('/kepemilikan/{id}/edit','Referensi\StatusKepemilikanController@edit')->name('kepemilikan.edit');
Route::put('/kepemilikan/{id}/edit','Referensi\StatusKepemilikanController@update')->name('kepemilikan.update');
Route::get('/kepemilikan/{id}/delete','Referensi\StatusKepemilikanController@destroy')->name('kepemilikan.delete');


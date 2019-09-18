@extends('layouts.dashboard')

@section('content')
<?php
$JasaUsaha = [1=>' USAHA DAN HIBURAN',
2=>' Bioskop',
3=>' Film Keliling',
4 =>'Sandiwara/Drama',
5=>' Group Lawak',
6 =>'Sirkus Keliling/Topeng Monyet Dll',
7=>' Wayang Orang/Golek',
8=>' Group Musik/Band',
9 =>'Group Vocal/Paduan Suara',
10 =>' USAHA JASA DAN PERDAGANGAN',
11 =>' Pasar hasil bumi/Tradisional/Harian',
12 =>' Pasar mingguan',
13 =>' Pasar bulanan',
14 =>' Pasar Kaget/Pasar Khusus',
15 =>' Jumlah Usaha toko/kios',
16 =>' Swalayan',
17 =>' Warung serba ada',
18 =>' Toko Kelonlong',
19 =>' Usaha Peternakan',
20=>'  Usaha Perikanan',
21 =>' Usaha perkebunan',
22 =>' Usaha minum(Kemasan, dll)',
23 =>' Industri farmasi',
24 =>' Industri Karoseri/Cat mobil',
25 =>' Industri penyamakan kulit',
26 =>' Penitipan Kendaraan',
27 =>' Penitipan Kendaraan bermotor',
28 =>' Industri perakitan elektronik',
29 =>' Pengolahan kayu',
30 =>' USAHA JASA GAS, LISTRIK',
31 =>' Usaha penyewaan tenaga listrik',
32 =>' SPBU',
33 =>' Pangkalan minyak tanah',
34 =>' Pengecer gas dan BBM',
35 =>' Usaha air minum kemasan/isi ulang',
36 =>' USAHA JASA KETERAMPILAN',
37 =>' Tukang Kayu',
38 =>' Tukang Batu',
39 =>' Tukang Batu Akik',
40 =>' Tukang Jahit/bordir',
41 =>' Tukang ukur',
42 =>' Tukang Service Elektronik',
43 =>' Tukang Besi',
44=>'  Tukang Gali sumur',
45 =>' Tukang Pijat',
46=>'  USAHA JASA DAN KONSULTASI',
47=>' Notaris',
48 =>' Pengacara/Advocat',
49 =>' Konsultan Manajemen',
50 =>' Konsultan Teknis',
51 =>' Pejabat Pembuat akte tanah',
52 =>' USAHA JASA PENGINAPAN',
53=>'  loshmesh',
54 =>' Wisma',
55 =>' Asrama',
56 =>' Persewaan kamar',
57=>'  Kontrakan Rumah',
58 =>' Mess',
59 =>' Hotel',
60=>'  Home stay',
61 =>' Villa',
62 =>' Townhouse',
];
$desa = [1=>'Totoharjo',2=>'Hata',3=>'bakauhani',4=>'kelawi',5=>'semanak'];


?>



<div class="content-header">
      <h1>
      Status Jasa Usaha
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
        <li class="active">Here</li>
      </ol>
    </section>
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Input/Ubah Status Jasa Usaha</h3>
            </div>

            <!-- /.box-header -->
            <!-- form start -->
          <form role="form" method="post" action="{{route('statjasausaha.simpan')}}">
              {{ csrf_field() }}
              <div class="box-body">
                <div class="form-group">
                        <label for="id_desa">Desa</label>
                    <select class="form-control" name="id_desa">
                      <option value="" selected disabled></option>
                        @foreach($desa AS $desa =>$des )
                    <option value="{{ $desa }}">{{ $des }}</option>
                        @endforeach
                </select>
                 <label for="id_jasa_usaha">Jenis Jasa Usaha</label>
                  <select class="form-control" name="id_jasa_usaha">
                    <option value="" selected disabled></option>
                  @foreach($JasaUsaha AS $JasaUsaha =>$jasa )
                    <option value="{{ $JasaUsaha }}">{{ $jasa }}</option>
                  @endforeach
                </select>
                 
                   <label for="jumlah_unit_usaha">Jumlah Unit Usaha</label>
                  <input type="number" class="form-control" name="jumlah_unit_usaha" id="jumlah_unit_usaha" placeholder="masukan data">
                  <label for="jenis_produksi_kegiatan">Jenis Produksi Kegiatan</label>
                  <input type="number" class="form-control" name="jenis_produksi_kegiatan" id="jenis_produksi_kegiatan" placeholder="masukan data">
                  <label for="tenaga_kerja_usaha">Tenaga Kerja Usaha</label>
                  <input type="number" class="form-control" name="tenaga_kerja_usaha" id="tenaga_kerja_usaha" placeholder="masukan data">
                 

               
                 
          
           
                 
          </form>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Simpan</button>
                <a href="{{ url()->previous() }}" class="btn btn-danger">Batal</a>
              </div>
            </form>
        
  <!-- /.content -->
  </div>
  </section>
</div>


@endsection
@extends('layouts.dashboard')

@section('content')
<?php
$JenisPrasarana = [1 =>' JENIS PRASARANA DAN SARANA',
2 =>'Jalan Desa / Kelurahan',
3=>' Panjang Jalan Aspal',
4 =>'Panjang Jalan Makadam',
5=>'Panjang Jalan Tanah',
6=>' Panjang Jalan Sirtu',
7 =>'Panjang Jalan Konblok / Semen / Belon',
8 =>'Jalan Antar Desa / Kelurahan / Kecamatan',
9=>' Panjang Jalan Aspal',
10=>' Panjang Jalan Makadam',
11 =>' Panjang Jalan Tanah',
12 =>' Panjang Jalan Sirtu',
13=>'  Panjang Jalan Konblok / Semen / Belon',
14 =>' Jalan Kabupaten yang melewati Desa / Kelurahan',
15 =>' Panjang Jalan Aspal',
16 =>' Panjang Jalan Makadam',
17 =>' Panjang Jalan Tanah',
18=>'  Panjang Jalan Sirtu',
19 =>' Panjang Jalan Konblok / Semen / Belon',
20=>'  Jalan Provinsi yang melewati Desa / Kelurahan',
21=>'  Panjang Jalan Aspal',
22 =>' Panjang Jalan Makadam',
23 =>' Panjang Jalan Tanah',
24 =>' Panjang Jalan Sirtu',
25 =>' Panjang Jalan Konblok / Semen / Belon',
26=>'  Panjang Jalan Negara',
27 =>' Panjang Jalan Aspal',
28 =>' Panjang Jalan Makadam',
29=>'  Panjang Jalan Makadam',
30 =>' Panjang Jalan Sirtu',
31 =>' Panjang Jalan Konblok / Semen / Belon',
32=>'  Jumlah Jembatan Besi',
33=>'  Jumlah Jembatan Beton',
34 =>' Jumlah Jembatan Besi',
35 =>' Jumlah Jembatan Kayu',
36=>'  Prasaran Angkutan Darat',
37 =>' Jumlah Pangkalan Ojek',
38 =>' Jumlah Stasion KA',
39 =>' Jumlah Bis Angkutan',
40=>'  Pendesaan / Perkotaan',
41 =>' PRASARANA IRIGASI',
42 =>' Saluran Primer',
43 =>' Saluran Sekunder',
44=>'  Saluran Tersier',
45 =>' Pintu Sadap',
46 =>' Pintu Pembagi Air'
];
$SatuanPrasarana = [1 =>'KM',
2 =>'Lokasi',
3=>' Unit',
4=>' Orang',
5 =>'Buah ',
6=>' KK'
];

$Kondisi =['Baik','Buruk'];
$desa = [1=>'Totoharjo',2=>'Hata',3=>'bakauhani',4=>'kelawi',5=>'semanak'];

?>



<div class="content-header">
      <h1>
      Status Prasarana
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
              <h3 class="box-title">Input/Ubah Status Prasarana</h3>
            </div>

            <!-- /.box-header -->
            <!-- form start -->
          <form role="form" method="post" action="{{route('statprasarana.simpan')}}">
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

                  
                 <label for="id_jenis_prasarana">Jenis Prasarana</label>
                  <select class="form-control" name="id_jenis_prasarana">
                    <option value="" selected disabled></option>
                  @foreach($JenisPrasarana AS $JenisPrasarana =>$pra )
                    <option value="{{ $JenisPrasarana }}">{{ $pra }}</option>
                  @endforeach
                </select>

                         <label for="id_satuan_prasarana">Satuan Prasarana</label>
                  <select class="form-control" name="id_satuan_prasarana">
                    <option value="" selected disabled></option>
                  @foreach($SatuanPrasarana AS $SatuanPrasarana =>$sat )
                    <option value="{{ $SatuanPrasarana }}">{{ $sat }}</option>
                  @endforeach
                </select>
                         <label for="kondisi_prasarana_sarana">Kondisi Prasarana</label>
                  <select class="form-control" name="kondisi_prasarana_sarana">
                    <option value="" selected disabled></option>
                  @foreach($Kondisi AS $Kondisi =>$kon )
                    <option value="{{ $Kondisi }}">{{ $kon }}</option>
                  @endforeach
                </select>
                 
                 
                   <label for="angka_kondisi">Angka Kondisi</label>
                  <input type="number" class="form-control" name="angka_kondisi" id="angka_kondisi" placeholder="masukan data">
           
                 
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
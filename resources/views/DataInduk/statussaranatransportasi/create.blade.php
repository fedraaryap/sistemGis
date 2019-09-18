@extends('layouts.dashboard')

@section('content')
<?php
$SaranaTransportasi = [1 =>' SARANA TRANSPORTASI DARAT',
2 =>'Bus Umum',
3 =>'Truck Umum',
4=>' Angkutan Per Desa / Kelurahan',
5 =>'Ojek',
6 =>'Delman / Bendi / Cidomo',
7 =>'Becak',
8 =>'Kereta Api',
9 =>'PRASARANA TRANSPORTASI LAUT / SUNGAI',
10 =>' Jumlah Tambajan Prahu',
11 =>' Jumlah Pelabuhan Kapal Penumpang',
12 =>' Jumlah Pelabuhan Kapal Barang',
13 =>' PRASARANASA TRANSPORTASI LAUT / SUNGAI',
14 =>' Perahu Motor',
15 =>' Kapal Antar Pulau',
16 =>' Perahu Antar Pulau ',
17 =>' Jet Boat',
18 =>' Kapal Pesiar',
19 =>' PRASARANA TRANSPORTASI UDARA',
20 =>' Lapangan Terbang Nasional / International',
21 =>' Lapangan Terbang Perintis',
22  =>'Lapangan Terbang Domestik',
23 =>' Lapangan Terbang Konvensional'
];
$Keberadaan = ['ada','tidak ada'
];

$desa = [1=>'Totoharjo',2=>'Hata',3=>'bakauhani',4=>'kelawi',5=>'semanak'];
?>



<div class="content-header">
      <h1>
      Status Status Sarana Transportasi
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
              <h3 class="box-title">Input/Ubah Status Sarana Transportasi</h3>
            </div>

            <!-- /.box-header -->
            <!-- form start -->
          <form role="form" method="post" action="{{route('stattrans.simpan')}}">
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

                  
                 <label for="id_sarana_transportasi">Jenis Sarana Transportasi</label>
                  <select class="form-control" name="id_sarana_transportasi">
                    <option value="" selected disabled></option>
                  @foreach($SaranaTransportasi AS $SaranaTransportasi =>$trans )
                    <option value="{{ $SaranaTransportasi }}">{{ $trans }}</option>
                  @endforeach
                </select>

                 <label for="keberadaan_transportasi">Keberadaan</label>
                  <select class="form-control" name="keberadaan_transportasi">
                    <option value="" selected disabled></option>
                  @foreach($Keberadaan AS $Keberadaan =>$keb )
                    <option value="{{ $Keberadaan }}">{{ $keb }}</option>
                  @endforeach
                </select>
                  <label for="jumlah">Jumlah</label>
                  <input type="number" class="form-control" name="jumlah" id="jumlah" placeholder="masukan data">
           
                 
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
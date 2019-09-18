@extends('layouts.dashboard')

@section('content')
<?php
$AirBersih = [1=>' Mata air ', 
2 =>'sumur Gali ', 
3 =>'Sumur Pompa ',
4 =>'Hidran Umum ',
5 =>'PAM ',
6 =>'Pipa ', 
7 =>'Sungai  ',
8 =>'Embung-Embung', 
9 =>'Bak Penampungan air hujan ',
10  =>'Beli dari Tangki swasta ',
11  =>'Depot isi Ulang'
 
];
$AirPanas = [1 =>' Gunung Berapi',
2=>' Geyser'
];
$ApakahBersih = [0=>'tidak',1=>'ada'];
$ApakahPanas = [0=>'tidak',1=>'ada'];

$desa = [1=>'Totoharjo',2=>'Hata',3=>'bakauhani',4=>'kelawi',5=>'semanak'];

?>



<div class="content-header">
      <h1>
      Status Air
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
              <h3 class="box-title">Input/Ubah Status Air</h3>
            </div>

            <!-- /.box-header -->
            <!-- form start -->
          <form role="form" method="post" action="{{route('statair.simpan')}}">
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
                  
                 <label for="a_airpanas">Apakah Air Bersih</label>
                  <select class="form-control" name="a_airpanas">
                    <option value="" selected disabled></option>
                  @foreach($ApakahBersih AS $ApakahBersih =>$abersih )
                    <option value="{{ $ApakahBersih }}">{{ $abersih }}</option>
                  @endforeach
                </select>

                <label for="id_air_bersih">Jenis Air Bersih</label>
                  <select class="form-control" name="id_air_bersih">
                    <option value="" selected disabled></option>
                  @foreach($AirBersih AS $AirBersih =>$bersih )
                    <option value="{{ $AirBersih }}">{{ $bersih }}</option>
                  @endforeach
                </select>

                   <label for="a_airpanas">Apakah Sumber Air Panas</label>
                  <select class="form-control" name="a_airpanas">
                    <option value="" selected disabled></option>
                  @foreach($ApakahPanas AS $ApakahPanas =>$apanas )
                    <option value="{{ $ApakahPanas }}">{{ $apanas }}</option>
                  @endforeach
                </select>

                  <label for="id_air_panas">Sumber Air Panas</label>
                  <select class="form-control" name="id_air_panas">
                    <option value="" selected disabled></option>
                  @foreach($AirPanas AS $AirPanas =>$panas )
                    <option value="{{ $AirPanas }}">{{ $panas }}</option>
                  @endforeach
                </select>
                 
                 
                   <label for="pemanfaatan">Pemanfaatan</label>
                  <input type="text" class="form-control" name="pemanfaatan" id="pemanfaatan" placeholder="masukan data">
              

               
                 
          
           
                 
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
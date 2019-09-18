@extends('layouts.dashboard')

@section('content')
<?php
$Orbitasi = [1  =>'JARAK KE IBU KOTA KECAMATAN',
2 =>'Lama Jarak Tempuh ke Ibu Kota Kecamatan dengan', 
3 =>'Kendaraan Bermotor',
4 =>'Lama Jarak Tempuh ke Ibu Kota Kecamatan dengan ',
5 =>'Berjalan Kaki atau Kendaraan Non Bermotor',
6 =>'Kendaraan Umum Ke Ibu Kota Kecamatan',
7=>' JARAK KE IBU KOTA KABUPATEN/KOTA',
8=>' Lama Jarak Tempuh ke Ibu Kota Kabupaten/Kota ',
9 =>'dengan Kendaraan Bermotor',
10=>'  Lama Jarak Tempuh ke Ibu Kota Kabupaten/Kota ',
11 =>' dengan Berjalan Kaki atau Kendaraan Non Bermotor',
12 =>' Kendaraan Umum Ke Ibu Kota Kabupaten/Kota',
13 =>' JARAK KE IBU KOTA PROVINSI',
14 =>' Lama Jarak Tempuh ke Ibu Kota Provinsi dengan', 
15=>'  Kendaraan Bermotor',
16=>'  Lama Jarak Tempuh ke Ibu Kota Provinsi dengan ',
17 =>' Berjalan Kaki atau Kendaraan Non Bermotor',
18=>'  Kendaraan Umum Ke Ibu Kota Provinsi'
];
$SatuanOrbitasi = [2=>'  c',
3=>' m',
1 =>'m'
];
$Status = [ 1=>'ada',0=>'tidak ada'
];

$desa = [1=>'Totoharjo',2=>'Hata',3=>'bakauhani',4=>'kelawi',5=>'semanak'];
?>



<div class="content-header">
      <h1>
      Status Orbitasi
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
              <h3 class="box-title">Input/Ubah Status Orbitasi</h3>
            </div>

            <!-- /.box-header -->
            <!-- form start -->
          <form role="form" method="post" action="{{route('statorbitasi.simpan')}}">
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
                  
                 <label for="id_orbitasi">Orbitasi</label>
                  <select class="form-control" name="id_orbitasi">
                    <option value="" selected disabled></option>
                  @foreach($Orbitasi AS $Orbitasi =>$orb )
                    <option value="{{ $Orbitasi }}">{{ $orb }}</option>
                  @endforeach
                </select>

                 <label for="id_satuan_orbitasi">Satuan Orbitasi</label>
                  <select class="form-control" name="id_satuan_orbitasi">
                    <option value="" selected disabled></option>
                  @foreach($SatuanOrbitasi AS $SatuanOrbitasi =>$sat )
                    <option value="{{ $SatuanOrbitasi }}">{{ $sat }}</option>
                  @endforeach
                </select>
                  <label for="status_angka">Status Angka</label>
                  <input type="number" class="form-control" name="status_angka" id="status_angka" placeholder="masukan data">
           
                 
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
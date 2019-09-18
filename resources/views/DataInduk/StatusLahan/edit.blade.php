@extends('layouts.dashboard')

@section('content')
<?php
$Taman = [1 =>'Taman desa',
2 =>'Tanah Adat',
3 =>'Tanah Kas Desa'
];
$Wisata = [1 =>' Laut',
2=>' Danau',
3 =>'Goa',
4 =>'Gunung',
5 =>'Agrowisata',
6 =>'Hutan Khusus',
7=>' Cagar budaya',
8=>' Arung Jeram',
9=>' Situs Sejarah dan Museum',
10 =>' Air Terjun'
];
$Ataman = [0=>'tidak',1=>'ada'];
$Awisata = [0=>'tidak',1=>'ada'];
$Keberadaan = [0=>'tidak',1=>'ada'];

$desa = [1=>'Totoharjo',2=>'Hata',3=>'bakauhani',4=>'kelawi',5=>'semanak'];

?>



<div class="content-header">
      <h1>
      Status Lahan
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
              <h3 class="box-title">Input/Ubah Status Lahan</h3>
            </div>

            <!-- /.box-header -->
            <!-- form start -->
          <form role="form" method="post" action="{{route('statlahan.update'$data->id_status_lahan)}}">
              {{ csrf_field() }}
              {{method_field('PUT')}}
              <div class="box-body">
                <div class="form-group">
                         <label for="id_desa">Desa</label>
                    <select class="form-control" name="id_desa">
                      <option value="" selected disabled></option>
                        @foreach($desa AS $desa =>$des )
                    <option value="{{ $desa }}">{{ $des }}</option>
                        @endforeach
                </select>

                  
                 <label for="a_taman">Apakah Taman</label>
                  <select class="form-control" name="a_taman">
                    <option value="" selected disabled></option>
                  @foreach($Ataman AS $Ataman =>$ataman )
                    <option value="{{ $Ataman }}">{{ $ataman }}</option>
                  @endforeach
                </select>

                <label for="id_taman">Jenis Taman</label>
                  <select class="form-control" name="id_taman">
                    <option value="" selected disabled></option>
                  @foreach($Taman AS $Taman =>$taman )
                    <option value="{{ $Taman }}">{{ $taman }}</option>
                  @endforeach
                </select>

                      <label for="a_wisata">Apakah Wisata</label>
                  <select class="form-control" name="a_wisata">
                    <option value="" selected disabled></option>
                  @foreach($Awisata AS $Awisata =>$awisata )
                    <option value="{{ $Awisata }}">{{ $awisata }}</option>
                  @endforeach
                </select>

                <label for="id_wisata">Lokasi Wisata</label>
                  <select class="form-control" name="id_wisata">
                    <option value="" selected disabled></option>
                  @foreach($Wisata AS $Wisata =>$wisata )
                    <option value="{{ $Wisata }}">{{ $wisata }}</option>
                  @endforeach
                </select>

                  <label for="keberadaan">Keberadaan</label>
                  <select class="form-control" name="keberadaan">
                    <option value="" selected disabled></option>
                  @foreach($Keberadaan AS $Keberadaan =>$ada )
                    <option value="{{ $Keberadaan }}">{{ $ada }}</option>
                  @endforeach
                </select>

                   <label for="luas">luas</label>
                  <input type="text" class="form-control" name="luas" id="luas" placeholder="masukan data">
                   <label for="tingkat_pemanfaatan">Tingkat Pemanfaatn</label>
                  <input type="text" class="form-control" name="tingkat_pemanfaatan" id="tingkat_pemanfaatan" placeholder="masukan data">
              

               
                 
          
           
                 
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
@extends('layouts.dashboard')

@section('content')
<?php
$RangeAngkatan = [1=>'0-1',
2=>'1-3',
3=>'3-5',
4=>'6-7',
5=>'7-12',
6=>'12-15',
7=>'15-18',
8=>'18-60',
9=>'3-6',
10=>'7-18',
11=>'18-56',
12=>'12-56'
];
$JenisKelamin = [1=>'Laki-Laki',2=>'Perempuan'
];

$desa = [1=>'Totoharjo',2=>'Hata',3=>'bakauhani',4=>'kelawi',5=>'semanak'];

?>



<div class="content-header">
      <h1>
      kualitas Angkatan
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
              <h3 class="box-title">Input/Ubah kualitas Angkatan</h3>
            </div>

            <!-- /.box-header -->
            <!-- form start -->
          <form role="form" method="post" action="{{route('angkatan.update',$data->id_angkatan)}}">
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

               <label for="id_range">Usia</label>
                  <select class="form-control" name="id_range">
                    <option value="" selected disabled></option>
                  @foreach($RangeAngkatan AS $RangeAngkatan =>$angkatan )
                    <option value="{{ $RangeAngkatan }}">{{ $angkatan }}</option>
                  @endforeach
                </select>


                  <label for="jenis_angkatan">Jenis Angkatan</label>
                  <input type="text" class="form-control" name="jenis_angkatan" id="jenis_angkatan" placeholder="masukan data">
                   
                    <label for="jk_angkatan">Jenis Kelamin</label>
                  <select class="form-control" name="jk_angkatan">
                    <option value="" selected disabled></option>
                  @foreach($JenisKelamin AS $JenisKelamin =>$jk )
                    <option value="{{ $JenisKelamin }}">{{ $jk }}</option>
                  @endforeach
                </select>
              
                 
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
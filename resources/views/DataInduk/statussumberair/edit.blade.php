  @extends('layouts.dashboard')

@section('content')
<?php
$SumberAir = [1=>' SUNGAI',
2=>' Jumlah sungai',
3 =>'Tercemar',
4 =>'Pendangkalan/Pengendapan',
5 =>'Lumpuer Tinggi',
6 =>'Keruh',
7 =>'Memenuhi Baku Mutu Air',
8 =>'Berkurangnya Biota Sungai',
9 =>'Kering',
10  =>'RAWA',
11  =>'Luas Rawa',
12 =>' Pemanfaatan',
13  =>'perikanan darat maupun laut',
14 =>' Air Baku untuk',
15 =>' Pengolahan Air Minum',
16 =>' Cuci dan Mandi',
17 =>' Irigasi',
18 =>' Buang Air Besar',
19  =>'perikanan',
20 =>' Sayuran',
21 =>' Pembudidayaan Hutan Mangrove',
22  =>'DANAU / WADUK / SITU',
23 =>' Luas',
24 =>' Pemanfaatan',
25 =>' perikanan',
26 =>' Air Minum / Air Beku',
27 =>' Cuci dan Mandi',
28 =>' Irigasi',
29 =>' Buang Air Besar',
30 =>' Pembangkit Listrik',
31 =>' Prasarana Transportasi',
32 =>' Tercemar',
33 =>' Pendangkalan',
34 =>' Keruh',
35 =>' Berlumpur'
];
$Status = ['Ya','tidak'
];

$desa = [1=>'Totoharjo',2=>'Hata',3=>'bakauhani',4=>'kelawi',5=>'semanak'];
?>



<div class="content-header">
      <h1>
      Status Sumber Air
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
              <h3 class="box-title">Input/Ubah Status Sumber Air</h3>
            </div>

            <!-- /.box-header -->
            <!-- form start -->
          <form role="form" method="post" action="{{route('statsumair.update',$data->id_status_sumber)}}">
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
                 <label for="id_sumber_air">Sumber Air</label>
                  <select class="form-control" name="id_sumber_air">
                    <option value="" selected disabled></option>
                  @foreach($SumberAir AS $SumberAir =>$air )
                    <option value="{{ $SumberAir }}">{{ $air }}</option>
                  @endforeach
                </select>

                      <label for="status_sumber">Status Sumber</label>
                  <select class="form-control" name="status_sumber">
                    <option value="" selected disabled></option>
                  @foreach($Status AS $Status =>$stat )
                    <option value="{{ $Status }}">{{ $stat }}</option>
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
@extends('layouts.dashboard')

@section('content')



<div class="content-header">
      <h1>
      Potensi Sumber Daya Alam
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
              <h3 class="box-title">Potensi Sumber Daya Alam</h3>
            </div>

            <!-- /.box-header -->
            <!-- form start -->
          <form role="form" method="post" action="{{route('sdm.simpan')}}">
              {{ csrf_field() }}



              <div class="box-body">
                <div class="form-group">
               <label for="id_tenaga_kerja">Tenaga Kerja</label>
                  <select class="form-control" name="id_tenaga_kerja">
                    <option value="" selected  ></option>
                  @foreach($TenagaKerja AS $kerja =>$ker )
                    <option value="{{ $ker->id_tenaga_kerja }}">{{ $ker->id_tenaga_kerja }}</option>
                  @endforeach
                </select>

               <label for="id_jumlah_sdm">Jumlah Sdm Desa </label>
                  <select class="form-control" name="id_jumlah_sdm">
                    <option value="" selected  ></option>
                  @foreach($JumlahSdmDesa AS $jumsdm =>$sdm )
                    <option value="{{ $sdm->id_jumlah_sdm }}">{{ $sdm->id_jumlah_sdm }}</option>
                  @endforeach
                </select>

             
               <label for="id_sdm_pendidikan">Jumlah Sdm Pendidikan </label>
                  <select class="form-control" name="id_sdm_pendidikan">
                    <option value="" selected  ></option>
                  @foreach($JumlahSdmPendidikan AS $pendidikan =>$pen )
                    <option value="{{ $pen->id_sdm_pendidikan }}">{{ $pen->id_sdm_pendidikan }}</option>
                  @endforeach
                </select>

             
               <label for="id_jumlah_status">Jumlah Status Sdm  </label>
                  <select class="form-control" name="id_jumlah_status">
                    <option value="" selected  ></option>
                  @foreach($JumlahStatusSdm AS $galian =>$gal )
                    <option value="{{ $gal->id_jumlah_status }}">{{ $gal->id_jumlah_status }}</option>
                  @endforeach
                </select>

                  <label for="id_usia_sdm">Jumlah Usia Sdm  </label>
                  <select class="form-control" name="id_usia_sdm">
                    <option value="" selected  ></option>
                  @foreach($JumlahUsiaSdm AS $usia =>$usi )
                    <option value="{{ $usi->id_usia_sdm }}">{{ $usi->id_usia_sdm }}</option>
                  @endforeach
                </select>


                  <label for="id_angkatan">Kualitas Angkatan  </label>
                  <select class="form-control" name="id_angkatan">
                    <option value="" selected  ></option>
                  @foreach($KualitasAngkatan AS $angkat =>$ang )
                    <option value="{{ $ang->id_angkatan }}">{{ $ang->id_angkatan }}</option>
                  @endforeach
                </select>




              
                 
          </form>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Simpan</button>
                <a href="{{ url()->previous() }}" class="btn btn-danger">Batal</a>
              </div>
            </form>
                 </div>
        </div>
      </div>

       
  <!-- /.content -->
</section>
</div>


@endsection
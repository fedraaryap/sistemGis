@extends('layouts.dashboard')

@section('content')



<div class="content-header">
      <h1>
      Potensi Pertanian
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
              <h3 class="box-title">Lihat Data Potensi Pertanian</h3>
            </div>

            <!-- /.box-header -->
            <!-- form start -->
          <form role="form" method="post" action="{{route('pertanian.simpan')}}">
              {{ csrf_field() }}



              <div class="box-body">
                <div class="form-group">
               <label for="id_luas_lahan">Luas Lahan Pertanian</label>
                  <select class="form-control" name="id_luas_lahan">
                    <option value="" selected  ></option>
                  @foreach($LuasLahan AS $lahan =>$lhn )
                    <option value="{{ $lhn->id_luas_lahan }}">{{ $lhn->id_luas_lahan }}</option>
                  @endforeach
                </select>

           
               <label for="id_pemilik">Jumlah Pemilik Lahan</label>
                  <select class="form-control" name="id_pemilik">
                    <option value="" selected disabled></option>
                  @foreach($JumlahPemilikLahan AS $pemilik =>$pem )
                    <option value="{{ $pem->id_pemilik }}">{{ $pem->id_pemilik }}</option>
                  @endforeach
                </select>

                 <label for="id_produktifitas">Produktifitas Pertanian</label>
                  <select class="form-control" name="id_produktifitas">
                    <option value="" selected disabled></option>
                  @foreach($ProduktifitasPertanian AS $perta =>$per )
                    <option value="{{ $per->id_produktifitas }}">{{ $per->id_produktifitas }}</option>
                  @endforeach
                </select>
           
                <label for="id_hutan">Hutan</label>
                  <select class="form-control" name="id_hutan">
                    <option value="" selected disabled></option>
                  @foreach($Hutan AS $hutan =>$htn )
                    <option value="{{ $htn->id_hutan }}">{{ $htn->id_hutan }}</option>
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
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
          <form role="form" method="post" action="{{route('sda.simpan')}}">
              {{ csrf_field() }}



              <div class="box-body">
                <div class="form-group">
               <label for="id_status_sumber">Status Sumber Air</label>
                  <select class="form-control" name="id_status_sumber">
                    <option value="" selected  ></option>
                  @foreach($StatSumberAir AS $sumber =>$sum )
                    <option value="{{ $sum->id_status_sumber }}">{{ $sum->id_status_sumber }}</option>
                  @endforeach
                </select>

               <label for="id_potensi_air">Potensi Air </label>
                  <select class="form-control" name="id_potensi_air">
                    <option value="" selected  ></option>
                  @foreach($PotensiAir AS $potensi =>$pot )
                    <option value="{{ $pot->id_potensi_air }}">{{ $pot->id_potensi_air }}</option>
                  @endforeach
                </select>

             
               <label for="id_status_air">Status Air </label>
                  <select class="form-control" name="id_status_air">
                    <option value="" selected  ></option>
                  @foreach($StatusAir AS $status =>$sta )
                    <option value="{{ $sta->id_status_air }}">{{ $sta->id_status_air }}</option>
                  @endforeach
                </select>

             
               <label for="id_galian">Bahan Galian </label>
                  <select class="form-control" name="id_galian">
                    <option value="" selected  ></option>
                  @foreach($BahanGalian AS $galian =>$gal )
                    <option value="{{ $gal->id_galian }}">{{ $gal->id_galian }}</option>
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
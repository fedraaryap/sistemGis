@extends('layouts.dashboard')

@section('content')



<div class="content-header">
      <h1>
      Ruang Publik
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
              <h3 class="box-title">Lihat Data Ruang Publik</h3>
            </div>

            <!-- /.box-header -->
            <!-- form start -->
          <form role="form" method="post" action="{{route('ruangpublik.simpan')}}">
              {{ csrf_field() }}



              <div class="box-body">
                <div class="form-group">
               <label for="id_kualitas">Kualitas Udara</label>
                  <select class="form-control" name="id_kualitas">
                    <option value="" selected  ></option>
                  @foreach($KualitasUdara AS $uadara =>$udr )
                    <option value="{{ $udr->id_kualitas }}">{{ $udr->id_kualitas }}</option>
                  @endforeach
                </select>

           
               <label for="id_kebisingan">Kebisingan</label>
                  <select class="form-control" name="id_kebisingan">
                    <option value="" selected disabled></option>
                  @foreach($Kebisingan AS $bising =>$bis )
                    <option value="{{ $bis->id_kebisingan }}">{{ $bis->id_kebisingan }}</option>
                  @endforeach
                </select>

                 <label for="id_status_lahan">Status Lahan</label>
                  <select class="form-control" name="id_status_lahan">
                    <option value="" selected disabled></option>
                  @foreach($StatusLahan AS $lahan =>$lhn )
                    <option value="{{ $lhn->id_status_lahan }}">{{ $lhn->id_status_lahan }}</option>
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
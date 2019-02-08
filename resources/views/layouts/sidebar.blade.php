<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar user panel (optional) -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="adminlte/dist/img/avatar.png" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Admin</p>
          <!-- Status -->
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>

      <!-- search form (Optional) -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
              <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
              </button>
            </span>
        </div>
      </form>
      <!-- /.search form -->

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu" data-widget="tree">
      <li><a href="{{url('dashboard')}}"><i class="fa fa-link"></i> <span>Dashboard</span></a></li>
        <li><a href="{{url('desa')}}"><i class="fa fa-link"></i> <span>Daftar Desa</span></a></li>
        <li class="treeview">
          <a href="{{url('potensi')}}"><i class="fa fa-link"></i> <span>Data Potensi</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{url('ekonomi')}}">Lembaga Ekonomi Desa</a></li>
            <li><a href="{{url('kelembagaan')}}">Potensi Kelembagaan</a></li>
            <li><a href="{{url('pertanian')}}">Potensi Pertanian</a></li>
            <li><a href="{{url('perternakan')}}">Potensi Perternakan</a></li>
            <li><a href="{{url('sarprasdesa')}}">Sarana Prasarana Desa</a></li>
            <li><a href="{{url('sda')}}">Potensi SDA</a></li>
            <li><a href="{{url('sdm')}}">Potensi SDM</a></li>
            <li><a href="{{url('umum')}}">Potensi Umum</a></li>
            <li><a href="{{url('sarpraspemerintah')}}">Sarana Prasarana Pemerintahan</a></li>
            <li><a href="{{url('ruangpublik')}}">Ruang Publik</a></li>
          </ul>
        </li>
        <li class="treeview">
         <a href="{{url('datainduk')}}"><i class="fa fa-link"></i> <span>Data Induk</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{url('galian')}}">Bahan Galian</a></li>
            <li><a href="{{url('bataswil')}}">Batas Wilayah</a></li>
            <li><a href="{{url('hutan')}}">Hutan</a></li>
            <li><a href="{{url('jumangkut')}}">Jumlah Angkutan</a></li>
            <li><a href="{{url('jumbudikan')}}">Jumlah Budidaya Ikan</a></li>
            <li><a href="{{url('jumlempolitik')}}">Jumlah Lembaga Politik</a></li>
            <li><a href="{{url('orang')}}">Jumlah Orang</a></li>
            <li><a href="{{url('jumpemlahan')}}">Jumlah Pemilik Lahan</a></li>
            <li><a href="{{url('jumproduksi')}}">Jumlah Produksi</a></li>
            <li><a href="{{url('jumsdmdesa')}}">Jumlah Sdm Desa</a></li>
            <li><a href="{{url('jumsdmpend')}}">Jumlah Sdm Pendidikan</a></li>
            <li><a href="{{url('jumstatsdm')}}">Jumlah status sdm</a></li>
            <li><a href="{{url('jumusiasdm')}}">Jumlah Usia Sdm</a></li>
            <li><a href="{{url('bising')}}">Kebisingan</a></li>
            <li><a href="{{url('angkatan')}}">Kualitas Angkatan</a></li>
            <li><a href="{{url('udara')}}">Kualitas Udara</a></li>
            <li><a href="{{url('lemkeamanan')}}">Lembaga keamanan</a></li>
            <li><a href="{{url('lempendidikan')}}">Lembaga Pendidikan</a></li>
            <li><a href="{{url('luaslahan')}}">Luas Lahan</a></li>
            <li><a href="{{url('luas')}}">Luas Wilayah</a></li>
            <li><a href="{{url('mekpemsda')}}">Mekanisme Pemasaran Sda</a></li>
            <li><a href="{{url('pakan')}}">Pakan Ternak</a></li>
            <li><a href="{{url('perangkat')}}">Perangkat Desa</a></li>
            <li><a href="{{url('populasi')}}">Populasi Ternak</a></li>
             <li><a href="{{url('potensiair')}}">Potensi Air</a></li>
             <li><a href="{{url('produkpert')}}">Produktifitas Pertanian</a></li>
             <li><a href="{{url('statpraslainnya')}}">Status Prasarana Lainnya</a></li>
             <li><a href="{{url('statair')}}">Status Air</a></li>
             <li><a href="{{url('statjasausaha')}}">Status Jasa Usaha</a></li>
             <li><a href="{{url('statlahan')}}">Status Lahan</a></li>
             <li><a href="{{url('statorbitasi')}}">Status Orbitasi</a></li>
             <li><a href="{{url('statprasarana')}}">Status Prasarana</a></li>
             <li><a href="{{url('stattrans')}}">Status Sarana Transportasi</a></li>
             <li><a href="{{url('sarpem')}}">Status Sarpras Pemerintahan</a></li>
             <li><a href="{{url('statsumair')}}">Status Sumber Air</a></li>
             <li><a href="{{url('tahun')}}">Tahun</a></li>
             <li><a href="{{url('tenagaker')}}">Tenaga Kerja</a></li>
             <li><a href="{{url('wilayah')}}">Wilayah</a></li>        

          </ul>
        


          <li class="treeview">
          <a href="#"><i class="fa fa-link"></i> <span>Data Referensi</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>

          <ul class="treeview-menu">
            <li><a href="{{url('airbersih')}}">Air Bersih</a></li>
            <li><a href="{{url('airpanas')}}">Air Panas</a></li>
            <li><a href="{{url('batas')}}">Batas Wilayah</a></li>
            <li><a href="{{url('pengolahanhutan')}}">Dampak Pengolahan Hutan</a></li>
            <li><a href="{{url('ekojas')}}">Ekonomi Jasa Usaha</a></li>

            <li><a href="{{url('jenisangkutan')}}">Jenis Angkutan</a></li>
            <li><a href="{{url('keamanan')}}">Jenis Keamanan</a></li>
            <li><a href="{{url('pendidikan')}}">Jenis Pendidikan</a></li>

            <li><a href="{{url('jenprassar')}}">Jenis Prasarana Sarana</a></li>

            <li><a href="{{url('produktifitas')}}">Jenis Produktifitas</a></li>
            <li><a href="{{url('ternak')}}">Jenis Ternak</a></li>
            <li><a href="{{url('kebisingan')}}">Tingkat Kebisingan</a></li>
            <li><a href="{{url('konhutan')}}">Kondisi Hutan</a></li>
            <li><a href="{{url('pemasaran')}}">Mekanisme Pemasaran</a></li>
            <li><a href="{{url('sekolah')}}">Nama Sekolah</a></li>

            <li><a href="{{url('orbitasi')}}">Orbitasi</a></li>

            <li><a href="{{url('partai')}}">Partai Politik</a></li>
            <li><a href="{{url('wisata')}}">Wisata</a></li>

            <li><a href="{{url('praslainya')}}">Prasarana Lainnya</a></li>

            <li><a href="{{url('produksi')}}">Produksi Ternak dan Perikanan</a></li>

            <li><a href="{{url('sartrans')}}">Sarana Transportasi</a></li>
            <li><a href="{{url('sarpraspem')}}">Sarana Prasarana Pemerintahan</a></li>
            <li><a href="{{url('sumber')}}">Sumber Air</a></li>
            
            
            <li><a href="{{url('taman')}}">Taman</a></li>
            <li><a href="{{url('lahan')}}">Jenis Lahan</a></li>
            <li><a href="{{url('kepemilikan')}}">Status Kepemilikan</a></li>
          </ul>
        </li>
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>

  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li class="active"><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
      <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane active" id="control-sidebar-home-tab">
        <h3 class="control-sidebar-heading">Recent Activity</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:;">
              <i class="menu-icon fa fa-birthday-cake bg-red"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                <p>Will be 23 on April 24th</p>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

        <h3 class="control-sidebar-heading">Tasks Progress</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:;">
              <h4 class="control-sidebar-subheading">
                Custom Template Design
                <span class="pull-right-container">
                    <span class="label label-danger pull-right">70%</span>
                  </span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

      </div>
      <!-- /.tab-pane -->
      <!-- Stats tab content -->
      <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
      <!-- /.tab-pane -->
      <!-- Settings tab content -->
      <div class="tab-pane" id="control-sidebar-settings-tab">
        <form method="post">
          <h3 class="control-sidebar-heading">General Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Report panel usage
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Some information about this general settings option
            </p>
          </div>
          <!-- /.form-group -->
        </form>
      </div>
      <!-- /.tab-pane -->
    </div>
  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
  immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
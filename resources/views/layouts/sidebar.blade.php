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
      <li><a href="{{url('dashboard')}}"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
        <li><a href="{{url('desa')}}"><i class="fa fa-th"></i> <span>Daftar Desa</span></a></li>
        <li class="treeview">
        <!-- <a href="{{url('potensi')}}"><i class="fa fa-table"></i> <span>Data Potensi</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{url('ekonomi')}}"><i class="fa fa-circle-o"></i> Lembaga Ekonomi Desa</a></li>
            <li><a href="{{url('kelembagaan')}}"><i class="fa fa-circle-o"></i> Potensi Kelembagaan</a></li>
            <li><a href="{{url('pertanian')}}"><i class="fa fa-circle-o"></i> Potensi Pertanian</a></li>
            <li><a href="{{url('perternakan')}}"><i class="fa fa-circle-o"></i> Potensi Perternakan</a></li>
            <li><a href="{{url('sarprasdesa')}}"><i class="fa fa-circle-o"></i> Sarana Prasarana Desa</a></li>
            <li><a href="{{url('sda')}}"><i class="fa fa-circle-o"></i> Potensi SDA</a></li>
            <li><a href="{{url('sdm')}}"><i class="fa fa-circle-o"></i> Potensi SDM</a></li>
            <li><a href="{{url('umum')}}"><i class="fa fa-circle-o"></i> Potensi Umum</a></li>
            <li><a href="{{url('sarpraspemerintah')}}"><i class="fa fa-circle-o"></i> Sarana Prasarana Pemerintah</a></li>
            <li><a href="{{url('ruangpublik')}}"><i class="fa fa-circle-o"></i> Ruang Publik</a></li>
          </ul>
        </li>
      -->
        <li class="treeview">
         <a href="{{url('datainduk')}}"><i class="fa fa-table"></i> <span>Potensi Desa</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <!-- <li><a href="{{url('galian')}}"><i class="fa fa-circle-o text-red"></i>Bahan Galian</a></li> -->
            <li><a href="{{url('bataswil')}}"><i class="fa fa-circle-o text-red"></i>Batas Wilayah</a></li>
            <li><a href="{{url('hutan')}}"><i class="fa fa-circle-o text-red"></i>Hutan</a></li>
            <li><a href="{{url('jumangkut')}}"><i class="fa fa-circle-o text-red"></i>Jumlah Angkutan</a></li>
            <li><a href="{{url('jumbudikan')}}"><i class="fa fa-circle-o text-red"></i>Jumlah Budidaya Ikan</a></li>
            <li><a href="{{url('jumlempolitik')}}"><i class="fa fa-circle-o text-red"></i>Jumlah Lembaga Politik</a></li>
            <li><a href="{{url('orang')}}"><i class="fa fa-circle-o text-red"></i>Jumlah Orang</a></li>
            <li><a href="{{url('jumpemlahan')}}"><i class="fa fa-circle-o text-red"></i>Jumlah Pemilik Lahan</a></li>
            <li><a href="{{url('jumproduksi')}}"><i class="fa fa-circle-o text-red"></i>Jumlah Produksi</a></li>
            <li><a href="{{url('jumsdmdesa')}}"><i class="fa fa-circle-o text-red"></i>Jumlah Sdm Desa</a></li>
            <li><a href="{{url('jumsdmpend')}}"><i class="fa fa-circle-o text-red"></i>Jumlah Sdm Pendidikan</a></li>
            <li><a href="{{url('jumstatsdm')}}"><i class="fa fa-circle-o text-red"></i>Jumlah status sdm</a></li>
            <li><a href="{{url('jumusiasdm')}}"><i class="fa fa-circle-o text-red"></i>Jumlah Usia Sdm</a></li>
            <li><a href="{{url('bising')}}"><i class="fa fa-circle-o text-red"></i>Kebisingan</a></li>
            <li><a href="{{url('angkatan')}}"><i class="fa fa-circle-o text-red"></i>Kualitas Angkatan</a></li>
            <li><a href="{{url('udara')}}"><i class="fa fa-circle-o text-red"></i>Kualitas Udara</a></li>
            <li><a href="{{url('lemkeamanan')}}"><i class="fa fa-circle-o text-red"></i>Lembaga keamanan</a></li>
            <li><a href="{{url('lempendidikan')}}"><i class="fa fa-circle-o text-red"></i>Lembaga Pendidikan</a></li>
            <li><a href="{{url('luaslahan')}}"><i class="fa fa-circle-o text-red"></i>Luas Lahan</a></li>
            <li><a href="{{url('luas')}}"><i class="fa fa-circle-o text-red"></i>Luas Wilayah</a></li>
            <!-- <li><a href="{{url('mekpemsda')}}"><i class="fa fa-circle-o text-red"></i>Mekanisme Pemasaran Sda</a></li> -->
            <li><a href="{{url('pakan')}}"><i class="fa fa-circle-o text-red"></i>Pakan Ternak</a></li>
            <li><a href="{{url('perangkat')}}"><i class="fa fa-circle-o text-red"></i>Perangkat Desa</a></li>
            <li><a href="{{url('populasi')}}"><i class="fa fa-circle-o text-red"></i>Populasi Ternak</a></li>
             <li><a href="{{url('potensiair')}}"><i class="fa fa-circle-o text-red"></i>Potensi Air</a></li>
             <li><a href="{{url('produkpert')}}"><i class="fa fa-circle-o text-red"></i>Produktifitas Pertanian</a></li>
             <li><a href="{{url('statpraslainnya')}}"><i class="fa fa-circle-o text-red"></i>Status Prasarana Lainnya</a></li>
             <li><a href="{{url('statair')}}"><i class="fa fa-circle-o text-red"></i>Status Air</a></li>
             <li><a href="{{url('statjasausaha')}}"><i class="fa fa-circle-o text-red"></i>Status Jasa Usaha</a></li>
             <li><a href="{{url('statlahan')}}"><i class="fa fa-circle-o text-red"></i>Status Lahan</a></li>
             <li><a href="{{url('statorbitasi')}}"><i class="fa fa-circle-o text-red"></i>Status Orbitasi</a></li>
             <li><a href="{{url('statprasarana')}}"><i class="fa fa-circle-o text-red"></i>Status Prasarana</a></li>
             <li><a href="{{url('stattrans')}}"><i class="fa fa-circle-o text-red"></i>Status Sarana Transportasi</a></li>
             <li><a href="{{url('sarpem')}}"><i class="fa fa-circle-o text-red"></i>Status Sarpras Pemerintahan</a></li>
             <li><a href="{{url('statsumair')}}"><i class="fa fa-circle-o text-red"></i>Status Sumber Air</a></li>
             <li><a href="{{url('tahun')}}"><i class="fa fa-circle-o text-red"></i>Tahun</a></li>
             <li><a href="{{url('tenagaker')}}"><i class="fa fa-circle-o text-red"></i>Tenaga Kerja</a></li>
             <li><a href="{{url('wilayah')}}"><i class="fa fa-circle-o text-red"></i>Wilayah</a></li>        

          </ul>
        


          <li class="treeview">
          <a href="#"><i class="fa fa-table"></i> <span>Data Referensi</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>

          <ul class="treeview-menu">
            <li><a href="{{url('airbersih')}}"><i class="fa fa-circle-o text-yellow"></i>Air Bersih</a></li>
            <li><a href="{{url('airpanas')}}"><i class="fa fa-circle-o text-yellow"></i>Air Panas</a></li>
            <li><a href="{{url('batas')}}"><i class="fa fa-circle-o text-yellow"></i>Batas Wilayah</a></li>
            <li><a href="{{url('pengolahanhutan')}}"><i class="fa fa-circle-o text-yellow"></i>Dampak Pengolahan Hutan</a></li>
            <li><a href="{{url('ekojas')}}"><i class="fa fa-circle-o text-yellow"></i>Ekonomi Jasa Usaha</a></li>

            <li><a href="{{url('jenisangkutan')}}"><i class="fa fa-circle-o text-yellow"></i>Jenis Angkutan</a></li>
            <li><a href="{{url('keamanan')}}"><i class="fa fa-circle-o text-yellow"></i>Jenis Keamanan</a></li>
            <li><a href="{{url('pendidikan')}}"><i class="fa fa-circle-o text-yellow"></i>Jenis Pendidikan</a></li>

            <li><a href="{{url('jenprassar')}}"><i class="fa fa-circle-o text-yellow"></i>Jenis Prasarana Sarana</a></li>

            <li><a href="{{url('produktifitas')}}"><i class="fa fa-circle-o text-yellow"></i>Jenis Produktifitas</a></li>
            <li><a href="{{url('ternak')}}"><i class="fa fa-circle-o text-yellow"></i>Jenis Ternak</a></li>
            <li><a href="{{url('kebisingan')}}"><i class="fa fa-circle-o text-yellow"></i>Tingkat Kebisingan</a></li>
            <li><a href="{{url('konhutan')}}"><i class="fa fa-circle-o text-yellow"></i>Kondisi Hutan</a></li>
            <li><a href="{{url('pemasaran')}}"><i class="fa fa-circle-o text-yellow"></i>Mekanisme Pemasaran</a></li>
            <li><a href="{{url('sekolah')}}"><i class="fa fa-circle-o text-yellow"></i>Nama Sekolah</a></li>

            <li><a href="{{url('orbitasi')}}"><i class="fa fa-circle-o text-yellow"></i>Orbitasi</a></li>

            <li><a href="{{url('partai')}}"><i class="fa fa-circle-o text-yellow"></i>Partai Politik</a></li>
            <li><a href="{{url('wisata')}}"><i class="fa fa-circle-o text-yellow"></i>Wisata</a></li>

            <li><a href="{{url('praslainya')}}"><i class="fa fa-circle-o text-yellow"></i>Prasarana Lainnya</a></li>

            <li><a href="{{url('produksi')}}"><i class="fa fa-circle-o text-yellow"></i>Produksi Ternak dan Perikanan</a></li>

            <li><a href="{{url('sartrans')}}"><i class="fa fa-circle-o text-yellow"></i>Sarana Transportasi</a></li>
            <li><a href="{{url('sarpraspem')}}"><i class="fa fa-circle-o text-yellow"></i>Sarana Prasarana Pemerintahan</a></li>
            <li><a href="{{url('sumber')}}"><i class="fa fa-circle-o text-yellow"></i>Sumber Air</a></li>
            
            
            <li><a href="{{url('taman')}}"><i class="fa fa-circle-o text-yellow"></i>Taman</a></li>
            <li><a href="{{url('lahan')}}"><i class="fa fa-circle-o text-yellow"></i>Jenis Lahan</a></li>
            <li><a href="{{url('kepemilikan')}}"><i class="fa fa-circle-o text-yellow"></i>Status Kepemilikan</a></li>
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
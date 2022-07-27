
<div class="nk-sidebar">         
    <div class="nk-nav-scroll">
        <ul class="metismenu" id="menu">
            <li class="nav-label">Dashboard</li>
            <li>
                <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                    <i class="icon-speedometer menu-icon"></i><span class="nav-text">Dashboard</span>
                </a>
                <ul aria-expanded="false">
                    
                    <li><a href="{{route('devisi.HomeDevisi')}}">Home</a></li>
                </ul>
            </li>   
            <li class="nav-label">Apps</li>
            <li>
                <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                    <i class="icon-envelope menu-icon"></i> <span class="nav-text">Surat</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{route('devisi.MasukDevisi')}}">Surat Masuk</a></li>
                    <li><a href="{{route('devisi.KeluarDevisi')}}">Surat Keluar</a></li>
                    <li><a href="{{route('devisi.DisposisiDevisi')}}">Disposisi</a></li>
                    <li><a href="{{route('devisi.MemoDevisi')}}">Memo</a></li>
                </ul>
            </li>
            <li>
                <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                    <i class="icon-note menu-icon"></i><span class="nav-text">Data</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{route('devisi.KategoriDevisi')}}">Kategori Surat</a></li>
                    <li><a href="{{route('devisi.JenisDevisi')}}">Jenis Surat</a></li>
                    <li><a href="{{route('devisi.DirektoratDevisi')}}">Direktorat</a></li>
                    <li><a href="{{route('devisi.DevisiDevisi')}}">Devisi</a></li>
                    <li><a href="{{route('devisi.DepartemenDevisi')}}">Departemen</a></li>
                    <li><a href="{{route('devisi.SeksiDevisi')}}">Seksi</a></li>
                    <li><a href="{{route('devisi.LevelDevisi')}}">Level Jabatan</a></li>
                    <li><a href="{{route('devisi.PegawaiDevisi')}}">Pegawai</a></li>
                </ul>
            </li>
        </ul>
    </div>
</div>
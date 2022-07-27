
<div class="nk-sidebar">         
    <div class="nk-nav-scroll">
        <ul class="metismenu" id="menu">
            <li class="nav-label">Dashboard</li>
            <li>
                <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                    <i class="icon-speedometer menu-icon"></i><span class="nav-text">Dashboard</span>
                </a>
                <ul aria-expanded="false">
                    
                    <li><a href="{{route('seksi.HomeSeksi')}}">Home</a></li>
                </ul>
            </li>   
            <li class="nav-label">Apps</li>
            <li>
                <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                    <i class="icon-envelope menu-icon"></i> <span class="nav-text">Surat</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{route('seksi.MasukSeksi')}}">Surat Masuk</a></li>
                    <li><a href="{{route('seksi.KeluarSeksi')}}">Surat Keluar</a></li>
                    <li><a href="{{route('seksi.DisposisiSeksi')}}">Disposisi</a></li>
                    <li><a href="{{route('seksi.MemoSeksi')}}">Memo</a></li>
                </ul>
            </li>
            <li>
                <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                    <i class="icon-note menu-icon"></i><span class="nav-text">Data</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{route('seksi.KategoriSeksi')}}">Kategori Surat</a></li>
                    <li><a href="{{route('seksi.JenisSeksi')}}">Jenis Surat</a></li>
                    <li><a href="{{route('seksi.DirektoratSeksi')}}">Direktorat</a></li>
                    <li><a href="{{route('seksi.DevisiSeksi')}}">Devisi</a></li>
                    <li><a href="{{route('seksi.DepartemenSeksi')}}">Departemen</a></li>
                    <li><a href="{{route('seksi.SeksiSek')}}">Seksi</a></li>
                    <li><a href="{{route('seksi.LevelSeksi')}}">Level Jabatan</a></li>
                    <li><a href="{{route('seksi.PegawaiSeksi')}}">Pegawai</a></li>
                </ul>
            </li>
        </ul>
    </div>
</div>
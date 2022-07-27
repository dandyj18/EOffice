
<div class="nk-sidebar">         
    <div class="nk-nav-scroll">
        <ul class="metismenu" id="menu">
            <li class="nav-label">Dashboard</li>
            <li>
                <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                    <i class="icon-speedometer menu-icon"></i><span class="nav-text">Dashboard</span>
                </a>
                <ul aria-expanded="false">
                    
                    <li><a href="{{route('departemen.HomeDep')}}">Home</a></li>
                </ul>
            </li>   
            <li class="nav-label">Apps</li>
            <li>
                <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                    <i class="icon-envelope menu-icon"></i> <span class="nav-text">Surat</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{route('departemen.MasukDep')}}">Surat Masuk</a></li>
                    <li><a href="{{route('departemen.KeluarDep')}}">Surat Keluar</a></li>
                    <li><a href="{{route('departemen.DisposisiDep')}}">Disposisi</a></li>
                    <li><a href="{{route('departemen.MemoDep')}}">Memo</a></li>
                </ul>
            </li>
            <li>
                <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                    <i class="icon-note menu-icon"></i><span class="nav-text">Data</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{route('departemen.KategoriDep')}}">Kategori Surat</a></li>
                    <li><a href="{{route('departemen.JenisDep')}}">Jenis Surat</a></li>
                    <li><a href="{{route('departemen.DirektoratDep')}}">Direktorat</a></li>
                    <li><a href="{{route('departemen.DevisiDep')}}">Devisi</a></li>
                    <li><a href="{{route('departemen.DepartemenDep')}}">Departemen</a></li>
                    <li><a href="{{route('departemen.SeksiDep')}}">Seksi</a></li>
                    <li><a href="{{route('departemen.LevelDep')}}">Level Jabatan</a></li>
                    <li><a href="{{route('departemen.PegawaiDep')}}">Pegawai</a></li>
                </ul>
            </li>
        </ul>
    </div>
</div>
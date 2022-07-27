
<div class="nk-sidebar">         
    <div class="nk-nav-scroll">
        <ul class="metismenu" id="menu">
            <li class="nav-label">Dashboard</li>
            <li>
                <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                    <i class="icon-speedometer menu-icon"></i><span class="nav-text">Dashboard</span>
                </a>
                <ul aria-expanded="false">
                    
                    <li><a href="{{route('direktur.HomeDirektur')}}">Home</a></li>
                </ul>
            </li>   
            <li class="nav-label">Apps</li>
            <li>
                <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                    <i class="icon-envelope menu-icon"></i> <span class="nav-text">Surat</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{route('direktur.MasukDirektur')}}">Surat Masuk</a></li>
                    <li><a href="{{route('direktur.KeluarDirektur')}}">Surat Keluar</a></li>
                    <li><a href="{{route('direktur.DisposisiDirektur')}}">Disposisi</a></li>
                    <li><a href="{{route('direktur.MemoDirektur')}}">Memo</a></li>
                </ul>
            </li>
            <li>
                <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                    <i class="icon-note menu-icon"></i><span class="nav-text">Data</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{route('direktur.KategoriDirektur')}}">Kategori Surat</a></li>
                    <li><a href="{{route('direktur.JenisDirektur')}}">Jenis Surat</a></li>
                    <li><a href="{{route('direktur.DirektoratDirektur')}}">Direktorat</a></li>
                    <li><a href="{{route('direktur.DevisiDirektur')}}">Devisi</a></li>
                    <li><a href="{{route('direktur.DepartemenDirektur')}}">Departemen</a></li>
                    <li><a href="{{route('direktur.SeksiDirektur')}}">Seksi</a></li>
                    <li><a href="{{route('direktur.LevelDirektur')}}">Level Jabatan</a></li>
                    <li><a href="{{route('direktur.PegawaiDirektur')}}">Pegawai</a></li>
                </ul>
            </li>
        </ul>
    </div>
</div>
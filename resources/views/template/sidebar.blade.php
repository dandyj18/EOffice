
<div class="nk-sidebar">         
    <div class="nk-nav-scroll">
        <ul class="metismenu" id="menu">
            <li class="nav-label">Dashboard</li>
            <li>
                <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                    <i class="icon-speedometer menu-icon"></i><span class="nav-text">Dashboard</span>
                </a>
                <ul aria-expanded="false">
                    
                    <li><a href="{{route('dashboard')}}">Home</a></li>
                </ul>
            </li>   
            <li class="nav-label">Apps</li>
            <li>
                <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                    <i class="icon-envelope menu-icon"></i> <span class="nav-text">Surat</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{route('surat_masuk')}}">Surat Masuk</a></li>
                    <li><a href="{{route('surat_keluar')}}">Surat Keluar</a></li>
                    <li><a href="{{route('disposisi')}}">Disposisi</a></li>
                    <li><a href="{{route('memo')}}">Memo</a></li>
                </ul>
            </li>
            <li>
                <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                    <i class="icon-note menu-icon"></i><span class="nav-text">Data</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{route('kategori')}}">Kategori Surat</a></li>
                    <li><a href="{{route('jenis')}}">Jenis Surat</a></li>
                    <li><a href="{{route('direktorat')}}">Direktorat</a></li>
                    <li><a href="">Devisi</a></li>
                    <li><a href="{{route('departemen')}}">Departemen</a></li>
                    <li><a href="">Seksi</a></li>
                    <li><a href="{{route('level')}}">Level Jabatan</a></li>
                    <li><a href="{{route('pegawai')}}">Pegawai</a></li>
                </ul>
            </li>
        </ul>
    </div>
</div>
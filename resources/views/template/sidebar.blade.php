
<div class="nk-sidebar">         
    <div class="nk-nav-scroll">
        <ul class="metismenu" id="menu">
            <li class="nav-label">Dashboard</li>
            <li>
                <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                    <i class="icon-speedometer menu-icon"></i><span class="nav-text">Dashboard</span>
                </a>
                <ul aria-expanded="false">
                    
                    <li><a href="{{route('admin.dashboard')}}">Home</a></li>
                </ul>
            </li>   
            <li class="nav-label">Apps</li>
            <li>
                <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                    <i class="icon-envelope menu-icon"></i> <span class="nav-text">Surat</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{route('admin.surat_masuk')}}">Surat Masuk</a></li>
                    <li><a href="{{route('admin.surat_keluar')}}">Surat Keluar</a></li>
                    <li><a href="{{route('admin.disposisi')}}">Disposisi</a></li>
                    <li><a href="{{route('admin.memo')}}">Memo</a></li>
                </ul>
            </li>
            <li>
                <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                    <i class="icon-note menu-icon"></i><span class="nav-text">Data</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{route('admin.kategori')}}">Kategori Surat</a></li>
                    <li><a href="{{route('admin.jenis')}}">Jenis Surat</a></li>
                    <li><a href="{{route('admin.direktorat')}}">Direktorat</a></li>
                    <li><a href="{{route('admin.devisi')}}">Devisi</a></li>
                    <li><a href="{{route('admin.departemen')}}">Departemen</a></li>
                    <li><a href="{{route('admin.seksi')}}">Seksi</a></li>
                    <li><a href="{{route('admin.level')}}">Level Jabatan</a></li>
                    <li><a href="{{route('admin.pegawai')}}">Pegawai</a></li>
                </ul>
            </li>
        </ul>
    </div>
</div>
<!DOCTYPE html>
<html class="h-100" lang="en">
    
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>REGISTRASI E-OFFICE</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('../../../assets/images/favicon.png')}}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link href="{{asset('asset/css/style.css')}}" rel="stylesheet">
    <script src="asset/jquery/jquery-3.6.0.js"></script>
</head>

<body class="h-100">
    
    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="loader">
            <svg class="circular" viewBox="25 25 50 50">
                <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3" stroke-miterlimit="10" />
            </svg>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->

    

    <div class="login-form-bg h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100">
                <div class="col-xl-6">
                    <div class="form-input-content">
                        <div class="card login-form mb-0">
                            <div class="card-body pt-5">
                                
                                <a class="text-center">
                                    <h4>REGISTRASI</h4>
                                </a>
        
                                <form class="mt-5 mb-5 login-input" action="{{URL::route('register')}}" method="POST">
                                    @csrf

                                    
                                    <div class="form-group">
                                        <input type="text" id="name" name="name" class="form-control input-Default @error('name') is-invalid @enderror"  placeholder="Name" required value="{{ old('name')}}">
                                        @error('name')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <input type="email" id="email" name="email" class="form-control input-Default @error('email') is-invalid @enderror"  placeholder="Email" required value="{{ old('email')}}">
                                        @error('email')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <input type="password" id="password" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" required>
                                        @error('password')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <input type="password" id="password_confirmation" name="password_confirmation" class="form-control @error('password_confirmation') is-invalid @enderror" placeholder="Password Confirmation" required>
                                        @error('password_confirmation')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <select class="custom-select mr-sm-2" name="role_id" id="role_id" required="required" aria-label="Default select example" >
                                            <option disabled selected>Pilih Role</option>

                                            @foreach($role as $key => $value)
                                                @if($key == 1)
                                                    @continue
                                                @endif
                                                <option value="{{ $key }}">{{ $value }}</option>
                                            @endforeach
                                        </select>
                                        @error('role_id')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="jabatan-form form-group">
                                        <input type="text" id="jabatan" name="jabatan" class="form-control @error('jabatan') is-invalid @enderror"  placeholder="Jabatan" required value="{{ old('jabatan')}}">
                                        @error('jabatan')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="jk-form">
                                        <label for="jenis_kelamin">
                                            Jenis Kelamin
                                        </label>
                                        <div class="form-check">
                                            <input type="radio" name="jenis_kelamin" class="form-check-input @error('jenis_kelamin') is-invalid @enderror" id="jenis_kelamin" value="Laki-Laki">
                                            <label for="jkL" class="form-check-label">
                                                Laki - Laki
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input type="radio" name="jenis_kelamin" class="form-check-input @error('jenis_kelamin') is-invalid @enderror" id="jenis_kelamin" value="Perempuan">
                                            <label for="jkP" class="form-check-label">
                                                Perempuan
                                            </label>
                                        </div>
                                        @error('jenis_kelamin')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <textarea id="alamat" name="alamat" class="form-control h-150px @error('alamat') is-invalid @enderror" placeholder="Alamat" required rows="6">{{ old('alamat')}}</textarea>
                                        @error('alamat')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <button class="btn login-form__btn submit w-100">Sign in</button>
                                </form>
                                    <p class="mt-5 login-form__footer">Have account <a href="{{route('login')}}" class="text-primary">Sign Up </a> now</p>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    

    <!--**********************************
        Scripts
    ***********************************-->
    <script src="{{asset('asset/plugins/common/common.min.js')}}"></script>
    <script src="{{asset('asset/js/custom.min.js')}}"></script>
    <script src="{{asset('asset/js/settings.js')}}"></script>
    <script src="{{asset('asset/js/gleek.js')}}"></script>
    <script src="{{asset('asset/js/styleSwitcher.js')}}"></script>
</body>
</html>






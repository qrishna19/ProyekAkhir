<div class="navbar navbar-expand-lg m-0" style="background-color: #f8fafc;">
    <a class="navbar-brand">
        <img src="{{asset('asset/logo.png')}}" height="30" alt="logo" loading="lazy"> 
    </a>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto pt-2">
            @guest
            @if (Route::has('login'))
            <li class="nav-item">
                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
            </li>
            @endif

            @if (Route::has('register'))
            <li class="nav-item">
                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
            </li>
            @endif
            @else
            <li class="nav-item pl-3">
                <a href="/profil" class="nav-link">
                    {{ Auth::user()->name }}
                    <img src="{{asset('asset/mdi_account_circle.png')}}" height="30" alt="logo" loading="lazy"></span>
                </a>
            </li>

            <li class="nav-item dropdown pl-3">
                <a href="#" class="nav-link" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                    <img src="{{asset('asset/mdi_notifications.png')}}" height="30" alt="logo" loading="lazy">
                </a>

                <ul class="dropdown-menu dropdown-menu-right" style="min-width: 250px;">
                    <li class="dropdown-item text-center pt-3">
                        <p> <a href="/mahasiswa"><b>Ahmad Rifal</b></a> Menambahkan anda dalam sebuah proyek</p>
                    </li>
                    <hr>
                    <li class="dropdown-item text-center">
                        <p> <a href="/mahasiswa"><b>pale</b></a> Menambahkan anda dalam sebuah proyek</p>
                    </li>
                </ul>

            </li>

            <li class="nav-item dropdown pl-3">
                <a href="#" class="nav-link" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                    <img src="{{asset('asset/mdi_arrow_drop_down.png')}}" height="30" alt="logo" loading="lazy">
                </a>

                <ul class="dropdown-menu dropdown-menu-right" style="min-width: 250px;">
                    <li class="dropdown-item pt-4 pl-5 pb-4">
                        <div class="row">
                            <div class="col-3">
                                <img src="{{asset('asset/ellipse.png')}}" height="50" alt="logo" loading="lazy">
                            </div>

                            <div class="col pt-2">
                                <p class="pl-3"><b>{{ Auth::user()->name }}</b></p>
                                <p class="pl-3">{{ Auth::user()->tipe_user }}</p>
                            </div>
                        </div>
                    </li>
                    <li class="pt-3">
                        <a href="/mahasiswa" style="color:black">
                            <p class="pl-5">Edit Profile</p>
                        </a>
                    </li>
                    <li>
                        <a href="/mahasiswa" style="color:black">
                            <p class="pl-5">Pengaturan & Privasi</p>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('logout') }}" style="color:black" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                            <p class="pl-5">{{ __('Logout') }}</p>
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </li>
                    @endguest
                </ul>
            </li>
        </ul>
    </div>
</div>
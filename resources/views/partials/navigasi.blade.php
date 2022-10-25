<nav class="navbar navbar-expand-md navbar-light border-bottom" style="background-color: #4a4d58">
    <div class="container text-center">
        
            <ul class="navbar-nav col-md-1">
           
            <p class="text-white"><b>Bebek Restorasi</b></p>
            </ul>
    
            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav mx-auto">
                <li class="nav-item mx-5">
                    <a class="nav-link text-white" href="{{ route('home') }}">Home</a>
                </li>
                <li class="nav-item dropdown mx-5">
                    <a class="nav-link text-white dropdown" href="#kategori">Category</a>
                </li>
                <li class="nav-item mx-5">
                    <a class="nav-link text-white" href="#about">About</a>
                </li>
                <li class="nav-item mx-5">
                    <a class="nav-link text-white" href="#galeri">Gallery</a>
                </li>
                <li class="nav-item mx-5">
                    <a class="nav-link text-white" href="#contact">Contact</a>
                </li>
                
                <!-- Authentication Links -->
            </ul>
            <ul class="navbar-nav col-md-1">
                @guest
                    @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link text-white" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                    @endif
    
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link text-white" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown ms-auto">
                        <a class="nav-link dropdown-toggle d-flex align-items-center" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            {{ Auth::user()->nama }}
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a href="{{ route('user.profil', ['id' => Auth::user()->id]) }}" class="dropdown-item">Profile</a>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>
                            
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>
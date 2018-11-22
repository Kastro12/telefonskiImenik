<nav class="navbar navbar-expand-lg navbar-light">
    <a class="logo navbar-brand" href="#"><img src="{{asset('img/phone.png')}}"> </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="{{asset('/')}}">Tel. imenik </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{asset('/grafikon')}}">Grafikon</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{asset('/mapa')}}">Mapa</a>
            </li>

            @guest
                <li class="nav-item">
                    <a class="nav-link disabled" href="{{asset('/login')}}">LOGIN</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="{{asset('/register')}}">REGISTER</a>
                </li>
            @else
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        <b>    {{ Auth::user()->name }}   </b> <span class="caret"></span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right">
                        

                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
        document.getElementById('logout-form').submit();">
                            <b>    {{ __('Logout') }}  </b>
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li>
            @endguest

        </ul>
        <span id="boja">Promeni boju</span>

    </div>
    <div id="se">
        <search-box></search-box>
    </div>

    <div class="prikazBoja">
        <div class="izaberi" id="plava"></div>
        <div class="izaberi" id="crvena"></div>
        <div class="izaberi" id="narandzasta"></div>
        <div class="izaberi" id="zelena"></div>
        <div class="izaberi" id="bela"></div>
    </div>

</nav>

<header class="header header-top-transparent">
    <nav class="navbar navbar-expand-lg  navbar-dark bg-dark top-top">
        <div class="container">
            <a class="navbar-brand" href="#"><img src="{{asset('assets/images/logo-light.png')}}" alt="logo" class="logo-default pt-1"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ">
                    <li class="nav-item  ml-5 active">
                        <a class="nav-link ml-5 " href="#"><span class="sr-only">(current)</span></a>
                    </li>

{{--                    <li class="nav-item">--}}
{{--                        <a class="nav-link" href="#">Stores</a>--}}
{{--                    </li>--}}
                    @if(auth()->user()->getRoleNames()->first()==='Admin')
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('user.index')}}">Perdoruesit</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('item.index')}}">Ushqimet</a>
                    </li>

{{--                    <li class="nav-item dropdown">--}}
{{--                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
{{--                            Orders <i class="fa fa-chevron-down"></i>--}}
{{--                        </a>--}}
{{--                        <div class="dropdown-menu" aria-labelledby="navbarDropdown1">--}}
{{--                            <a class="dropdown-item" href="#">Action</a>--}}
{{--                            <a class="dropdown-item" href="#">Another action</a>--}}
{{--                            <div class="dropdown-divider"></div>--}}
{{--                            <a class="dropdown-item" href="#">Something else here</a>--}}
{{--                        </div>--}}
{{--                    </li>--}}
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('reservation.index')}}">Rezervimet</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('report')}}">Raporti</a>
                    </li>
                        @endif
                </ul>

            <div class="navbar-nav ml-auto">
                <div class="form-inline text-right  my-2 my-lg-0">
                    <a class="nav-link text-uppercase" href="#">
                        <img class="w-15 rounded-circle" src="{{asset('assets/images/avtar-2.jpg')}}" alt="">
                        {{auth()->user()->name}}
                    </a>
                </div>

                <div class="form-inline align-right my-2 my-lg-0">
                    <a class="nav-link text-uppercase" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        <i class="fa fa-sign-in"></i>
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </div>
            </div>
        </div>
    </nav>
</header>

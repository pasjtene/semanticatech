<div id="first-nav">
    <div class="first-nav-items">

        @guest
        <a class="nav-lin" href="{{ route('login') }}">{{ __('Login') }}</a>
        <a class="nav-lin" href="{{ route('register') }}">{{ __('Register') }}</a>
        <a href="{{url('/lang/fr')}}">Francais</a>
        <a href="{{('/lang/en')}}">English</a>
        @else
            <a href="{{url('/lang/fr')}}">Francais</a>
            <a href="{{('/lang/en')}}">English</a>

            <div id="cti-nav-f">


                <div class="nav_bar">
                    <div class="nav-items">
                        <ul>
                            <li class="ctidropdown">
                                <a href="/anglais" class="dropbtn">
                                    {{ Auth::user()->name }} <i class="fa fa-caret-down"></i>
                                </a>

                                <div class="dropdown-content">
                                    <a class="dropdown-item" href="#">
                                        My profile
                                    </a>


                                    <a class="dropdown-item" href="/anglais/tests/{{ Auth::user()->id }}">
                                        My tests
                                    </a>

                                    <a class="dropdown-item" href="/anglais/tests/{{ Auth::user()->id }}/all">
                                        All tests
                                    </a>

                                    <a class="dropdown-item" href="/exam/questions/">
                                        EXAMS
                                    </a>

                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>

                                </div>



                            </li>
                        </ul>

                    </div>

                </div>

            </div>

            @endguest
            <div class=""><i class="fa fa-search"></i></div>
    </div>
</div>
<div id="search-bar">Enter your search items here</div>
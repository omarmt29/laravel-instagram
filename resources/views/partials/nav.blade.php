<nav class="fixed flex bg-slate-800  justify-between items-center top-0 w-full px-12">
    <div>
        <a href="{{ route('home') }}" class="text-white font-semibold">HOME</a>
    </div>
    <div class=" flex  items-center justify-end text-white">
        @guest
        <a href="{{ route('login') }}" class="font-semibold hover:text-red-300 hover:bg-slate-500 text-white px-3 py-4  focus:outline-red-500">Login</a>

        <a href="{{ route('register') }}" class="font-semibold hover:text-red-300 hover:bg-slate-500 text-white px-3 py-4  focus:outline-red-500">Register</a>
        @endguest

        @auth
        <div style="color:white" class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
            <a class="dropdown-item hover:text-red-300 hover:bg-slate-500 px-3 py-4" href="{{ route('logout') }}" onclick="event.preventDefault(); 
                                    document.getElementById('logout-form').submit();">
                LOGOUT
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </div>
        @endauth
    </div>
</nav>
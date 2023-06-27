@extends(layout.app)
@section('content')
<div>
    <h1>user</h1>

    @auth
    <div class="text-black bg-red-300 p-3" aria-labelledby="navbarDropdown">
        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); 
                                                        document.getElementById('logout-form').submit();">
            LOGOUT
        </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
    </div>
    @endauth
</div>
@endsection
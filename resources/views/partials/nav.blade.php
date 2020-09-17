<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="{{ route('home') }}">Laravel Project</a>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
        <li class="nav-item"><a href="{{ route('about') }}" class="nav-link {{ setActive('about')}}">About</a></li>
        <li class="nav-item"><a href="{{ route('contact') }}" class="nav-link {{ setActive('contact')}}">Contact</a></li>
        <li class="nav-item"><a href="{{ route('projects.index') }}" class="nav-link {{ setActive('projects.*')}}">Projects</a></li>
        
        @guest
            <li class="nav-item"><a href="{{ route('login') }}" class="nav-link">Login</a></li>
        @else
            <li class="nav-item">
                <a href="#" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();" class="nav-link">Logout</a>
            </li>
        @endguest
    </ul>
    </div>
</nav>

<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
    @csrf
</form>
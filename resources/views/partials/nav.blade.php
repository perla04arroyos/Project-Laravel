<nav>
    <ul>
        <li><a href="{{ route('home') }}" class="{{ setActive('home')}}">Home</a></li>
        <li><a href="{{ route('about') }}" class="{{ setActive('about')}}">About</a></li>
        <li><a href="{{ route('contact') }}" class="{{ setActive('contact')}}">Contact</a></li>
        <li><a href="{{ route('projects.index') }}" class="{{ setActive('projects.*')}}">Projects</a></li>
        
        @guest
            <li><a href="{{ route('login') }}">Login</a></li>
        @else
            <li>
                <a href="#" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">Logout</a>
            </li>
        @endguest
    </ul>
</nav>

<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
    @csrf
</form>
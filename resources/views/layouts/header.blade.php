<!-- This is menu for desktop site -->

<header class="header">
    <div class="header_content d-flex flex-row align-items-center justify-content-start">
        <div class="logo"><a href="homepage">Hotel MS</a></div>
        <div class="ml-auto d-flex flex-row align-items-center justify-content-start">
            <nav class="main_nav">
                <ul class="d-flex flex-row align-items-start justify-content-start">
                    <li><a href="/">Home</a></li>
                    <li ><a href="about">About us</a></li>
                    <li><a href="contact">Contact</a></li>
                    <li><a href="rooms">Rooms</a></li>
                    <li><a href="spa">Spa</a></li>
                </ul>
            </nav>

            <div style="right:-20px;">
            @guest
                <div class="book_button"><a href="login">Log in</a></div>
                <div class="book_button"><a href="register">Register</a></div>
            @else
                <p style="color:white; text-align:center;">Welcome, {{ Auth::user()->name }}!</p>

                <a class="dropdown-item" style="color:royalblue; font-weight:bold;" href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                   document.getElementById('logout-form').submit();">
                    {{ __('Logout?') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>

        @endif
            </div>
            <!-- Hamburger Menu -->
            <div class="hamburger"><i class="fa fa-bars" aria-hidden="true"></i></div>
        </div>
    </div>
</header>
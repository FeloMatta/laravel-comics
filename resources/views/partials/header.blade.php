<header>
    <div class="blue-bar">
        <div class="container">
            <a href="#">
                DC POWER&#x2122VISA&#x00AE;
            </a>
            <a href="#">
                ADDITIONAL DC SITES
                <i class="fa-solid fa-caret-down"></i>
            </a>
        </div>
    </div><!-- CHIUSUR BLUE BAR  -->
    <div class="main-bar">
        <div class="container">
            <div class="logo-box">
                <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="dc-logo">
            </div><!-- CHIUSURA LOGO-BOX  -->
            <div class="navbar">
                <ul>
                    @foreach ($navbar as $navitem)
                        <li>
                            <a
                                href="{{ $navitem['link'] }}"
                                class="@if($loop->index == 1) active @endif"
                            >
                                {{ $navitem['title'] }}
                            </a>
                        </li>
                    @endforeach
                </ul>
                <div class="search-box">
                    <input type="text" placeholder="Search">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </div>
            </div><!-- CHIUSUR NAVBAR  -->
        </div><!-- CHIUSURA CONTAINER  -->
    </div><!-- CHIUSUR MAIN BAR  -->
</header>
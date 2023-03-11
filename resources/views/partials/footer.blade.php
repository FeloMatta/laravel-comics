<footer>
    <div class="blue-menu">
        <div class="container">
            <ul>
                @foreach ($blueMenu as $item)
                    <li>
                        <a href="{{ $item['link'] }}">
                            <img src="{{ Vite::asset($item['img']) }}" alt="{{ $item['title'] }}">
                            <span>{{ $item['title'] }}</span>
                        </a>
                    </li>
                @endforeach
            </ul>
        </div><!-- CHIUSURA CONTAINER -->
    </div><!-- CHIUSURA BLUE-MENU -->
    <div class="navlist">
        <div class="container">
            <nav>
                <div class="col">
                    <div class="list">
                        <h3>DC COMICS</h3>
                        <ul>
                            @foreach ($dcComicsContent as $item)
                                <li>
                                    <a href="{{ $item['link'] }}"> {{ $item['title'] }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="list">
                        <h3>SHOP</h3>
                        <ul>
                            @foreach ($shopContent as $item)
                                <li>
                                    <a href="{{ $item['link'] }}"> {{ $item['title'] }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div><!-- CHIUSURA COL1 -->
                <div class="col">
                    <h3>DC</h3>
                    <ul>
                        @foreach ($dcContent as $item)
                            <li>
                                <a href="{{ $item['link'] }}"> {{ $item['title'] }}</a>
                            </li>
                        @endforeach
                    </ul>
                </div><!-- CHIUSURA COL2 -->
                <div class="col">
                    <h3>SITES</h3>
                    <ul>
                        @foreach ($sitesContent as $item)
                            <li>
                                <a href="{{ $item['link'] }}"> {{ $item['title'] }}</a>
                            </li>
                        @endforeach
                    </ul>
                </div><!-- CHIUSURA COL3 -->
            </nav>
            <div class="logo-box"></div>
        </div><!-- CHIUSURA CONTAINER -->
    </div><!-- CHIUSURA NAV-LIST -->
    <div class="social-bar">
        <div class="container">
            <a class="button" href="#">sign-up now!</a>
            <div class="social-box">
                <span>FOLLOW US</span>
                @foreach ($socialList as $item)
                    <a href="{{ $item['link'] }}">
                        <img src="{{ Vite::asset($item['img']) }}" alt="{{ $item['social'] }}">
                    </a>
                @endforeach
            </div>
        </div><!-- CHIUSURA CONTAINER -->
    </div><!-- CHIUSURA SOCIAL-BAR -->
</footer>
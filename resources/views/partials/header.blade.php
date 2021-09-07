<header>
    <div class="headerbox d-flex justify-content-around">
            <div class="logo">
                <a href="{{route('homepage')}}">
                    <img src="{{ asset('img/logo.png') }}" alt="" >
                </a>
            </div>
            <div class="main-menu">
                    <ul class="nav justify-content-center">
                        @foreach ($nav as $link)
                            <li class="nav-item">
                                <a class="nav-link active text-uppercase" aria-current="page" href="{{route($link['url'])}}">{{ $link['text']}}</a>
                            </li>
                        @endforeach
            </div>
            <div class="search d-flex align-items-center">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            </div>
                 {{-- <ul class="nav justify-content-center">
                    <li class="nav-item">
                    <a class="nav-link active text-uppercase" aria-current="page" >Characters</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active text-uppercase" aria-current="page" href="{{route('comicspage')}}">Comics</a>
                        </li>
                    <li class="nav-item">
                        <a class="nav-link active text-uppercase" aria-current="page" >Movies</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active text-uppercase" aria-current="page" >Tv</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active text-uppercase" aria-current="page" >Games</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active text-uppercase" aria-current="page" >Videos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active text-uppercase" aria-current="page" >News</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active text-uppercase" aria-current="page" >Shop</a>
                    </li>
                </ul> --}}
    </div>
</div>
</header>
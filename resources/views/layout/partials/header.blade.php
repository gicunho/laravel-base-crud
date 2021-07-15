<!-- Site Header -->
<header>
    <!-- Top Menu -->
    <div id="top_menu">
        <div class="my-container">
            <span class="pr-5">DC POWER&#8480; VISA&#9415; </span>
            <span>additional dc sites <i class="fas fa-caret-down"></i></span>
        </div>
    </div>
    <!-- /Top Menu -->

    <!-- Nav -->
    <nav class="my-container d-flex justify-content-between py-2">
        <!-- Logo -->
        <div id="logo">
            <img src="{{asset('/img/dc-logo.png')}}" alt="">
        </div>
        <!-- Links -->
        <div id="links">
{{--             @foreach ($nav_links as $link)
            <a href="{{route($link['href'])}}">{{$link['name']}}</a>
            @endforeach --}}
            <a href="{{route('comics')}}">COMICS</a>
        </div>
        <!-- Search -->
        <div id="search" class="text-right">
            <input type="text" name="search" id="search" placeholder="Search">
            <div class="fas fa-search"></i>
        </div>
    </nav>
    <!-- /Nav -->
</header>
<!-- /Site Header -->
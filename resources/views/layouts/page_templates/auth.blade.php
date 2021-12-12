<main class="h-100">
    <div class="main-panel">
        @include('layouts.navbars.navs.auth')
        <div class="container-fluid">
            <div class="row">
                @include('layouts.navbars.sidebar')
                @yield('content')
                @include('layouts.footers.auth')
            </div>
        </div>
    </div>
</main>

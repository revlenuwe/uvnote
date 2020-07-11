<!DOCTYPE html>
<html lang="en">
<head>
    @include('guest.partials.head')
    @stack('css')
</head>
<body>

<header class="header bg-dark">
    <nav class="navbar navbar-static-top navbar-expand-lg header-sticky">
        <div class="container-fluid">
            <button id="nav-icon4" type="button" class="navbar-toggler" data-toggle="collapse"
                    data-target=".navbar-collapse">
                <span></span>
                <span></span>
                <span></span>
            </button>
            <a class="navbar-brand" href="/">
                LOGO
            </a>

            <div class="add-listing">

                <a class="btn btn-white btn-md" href="/"> <i class="fas fa-plus-circle"></i> Create note</a>
            </div>
        </div>
    </nav>
</header>


@yield('content')

@include('guest.partials.footer')

@stack('scripts')

</body>
</html>

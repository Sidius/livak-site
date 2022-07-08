<!-- Navbar Start -->
<nav class="navbar fixed-top shadow-sm navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-lg-5">
    <a href="{{ route('home') }}" class="navbar-brand ml-lg-3">
        <h1 class="m-0 display-5"><span class="text-primary">Глав</span>ная</h1>
    </a>
    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse px-lg-3" id="navbarCollapse">
        <div class="navbar-nav m-auto py-0">
            @section('menu_links')
                <a href="#home" class="nav-item nav-link active">Главная</a>
                <a href="#about" class="nav-item nav-link">О себе</a>
                <a href="#quality" class="nav-item nav-link">Образование, интересы &amp; опыт</a>
                <a href="#poems" class="nav-item nav-link">Поэтическая страничка</a>
            @show
        </div>
    </div>
</nav>
<!-- Navbar End -->

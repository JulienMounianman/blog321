<nav class="navbar navbarcolor">
    <div class="navbar-brand">
        <a class="navbar-item" href="#">
            Blog321
        </a>

        <div class="navbar-burger burger" data-target="navMenubd">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>

    <div id="navMenubd" class="navbar-menu">
        <div class="navbar-start">
            <a class="navbar-item " href="{{ route('UserIndex') }}">
                Membres
            </a>
            <a class="navbar-item" href="{{ route('CatIndex') }}">

                Categories
            </a>
            <a class="navbar-item" href="">

                Posts
            </a>
        </div>
    </div>
</nav>
<nav class="breadcrumb" aria-label="breadcrumbs">
    <ul>
        <li><a href="{{ route('NewCat') }}"><span class="icon is-small"><i class="fa fa-home"></i></span><span>Nouvelles catégories</span></a></li>
        <li><a href="#"><span class="icon is-small"><i class="fa fa-book"></i></span><span>Documentation</span></a></li>
        <li><a href="#"><span class="icon is-small"><i class="fa fa-puzzle-piece"></i></span><span>Components</span></a></li>
        <li class="is-active"><a href="#" aria-current="page"><span class="icon is-small"><i class="fa fa-thumbs-up" aria-hidden="true"></i></span><span>Breadcrumb</span></a></li>
    </ul>
</nav>
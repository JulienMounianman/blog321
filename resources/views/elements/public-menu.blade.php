<nav class="navbar navbar-default">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Subarashii</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li><a href="{{ route('PostIndex') }}"><i class="glyphicon glyphicon-file"></i> Posts</a></li>
                <li><a href="{{ route('UserIndex') }}"><i class="glyphicon glyphicon-user"></i> Membres</a></li>
                <li><a href="{{ route('CatIndex') }}"><i class="glyphicon glyphicon-book"></i> Catégories</a></li>
                <li><a href="{{ route('TagIndex') }}"><i class="glyphicon glyphicon-tags"></i> Tags</a></li>
                <li><a href="{{ route('AnimeIndex') }}"><i class="glyphicon glyphicon-film"></i> Anime</a></li>
                <li><a href="{{ route('AnimeIndex') }}"><i class="glyphicon glyphicon-list-alt"></i> Classement</a></li>

                @component('elements.user-menu')@endcomponent
            </ul>
        </div>


    </div>
</nav>









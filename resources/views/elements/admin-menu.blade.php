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
                <li><a href="{{ url('/') }}" class="navbar-item"><i class="fa fa-fw fa-globe"></i> Site public</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Article <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="{{ route('AdminPostIndex') }}" class="navbar-item">
                                <i class="glyphicon glyphicon-list"></i> Liste
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('AdminPostCreate') }}" class="navbar-item">
                                <i class="glyphicon glyphicon-plus"></i> Nouveau post
                            </a>
                        </li>

                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Categories <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="{{ route('AdminCatIndex') }}" class="navbar-item">
                                <i class="glyphicon glyphicon-list"></i> Liste
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('AdminCatCreate') }}" class="navbar-item">
                                <i class="glyphicon glyphicon-plus"></i> Nouvelle catégorie
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Tags <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="{{ route('AdminTagIndex') }}" class="navbar-item">
                                <i class="glyphicon glyphicon-list"></i> Liste
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('AdminTagCreate') }}" class="navbar-item">
                                <i class="glyphicon glyphicon-plus"></i> Nouveau tag
                            </a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="{{ route('AdminUserIndex') }}" class="navbar-item">
                        <i class="glyphicon glyphicon-user"></i> Membres
                    </a>
                </li>


                @component('elements.user-menu')@endcomponent
            </ul>
        </div>


    </div>
</nav>

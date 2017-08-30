<html>
<head>
    <title>Blog321 - @yield('title')</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.5.1/css/bulma.min.css"/>
    <link rel="stylesheet" href="/css/font-awesome.css"/>
    <style>
        .navbarcolor {
            background-color: #9d9d9d;
        }
        .contenu {
            background-color: #5bc0de;

        }
    </style>

</head>
<body>

<div class="container">
    @component('elements.navbar')
    @endcomponent
<div class="contenu">

    @if (Session::has('message'))
        <div class="message">
            <div class="message-header"> Information </div>
            <div class="message-body">
                        {{session('message')}}
            </div>
        </div>
    @endif
    <h1 class="title"> @yield('title')</h1>
        @if($errors->any())
            <div class="message is-danger">
                <div class="message-header">Erreur de formulaire </div>
                <div class="message-body">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach

                    </ul>
                </div>

            </div>

        @endif
    @yield('content')
</div>
</div>
</body>

</html>
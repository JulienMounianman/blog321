<html>
<head>
    <title>Blog321 - @yield('title')</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.5.1/css/bulma.min.css"/>

</head>
<body>

<div class="container">
    @component('elements.navbar')
    @endcomponent


    @if (Session::has('message'))
        <div class="message">
            <div class="message-header"> Information </div>
            <div class="message-body">
                        {{session('message')}}
            </div>
        </div>
    @endif
    <h1 class="title"> @yield('title')</h1>
    @yield('content')
</div>
</body>

</html>
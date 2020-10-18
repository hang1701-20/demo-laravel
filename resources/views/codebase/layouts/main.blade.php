<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield("title")</title>
</head>
<body>
    <aside>
        @section('sidebar')
            this is the sidebar fgfgfgf
        @show
    </aside>

    <div class="main">
        @yield("content")
    </div>

    <div class="second">
        @yield("second")
    </div>
</body>
</html>

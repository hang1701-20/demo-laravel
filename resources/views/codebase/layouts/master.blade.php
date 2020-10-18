<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield("title")</title>
    <link rel="stylesheet" href="{{ asset("css/master.css") }}">
    <script src="{{asset("js/abc.js")}}"></script>
</head>
<body>
<div class="page-wrap">
    @include("codebase.partials.header")
    @include("codebase.partials.navigation")
    <div class="main">
        @include("codebase.partials.sidebar")
        <main>
            <img src="{{asset("images/1e.jpg")}}" alt="">
            @yield("content")
        </main>
    </div>
    @include("codebase.partials.footer")
</div>
</body>
</html>


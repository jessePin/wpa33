<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello - @yield("title")</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="{{ asset('js/app.js') }}"></script>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                @section("sidebar")
                    <h1>This is main</h1>
                @show
            </div>
        </div>
        @yield("content")
        <div class="row">
            <div class="col-12">
                @yield("another",View::make("test"))
            </div>
        </div>
    </div>
    @stack("script")
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    
    <title>@yield("title")</title>
</head>
<body>
    <header>
        <div class="nav">
            <div class="container-fluid">
                @yield("title")
            </div>
        </div>
    </header>
    <div class="container py-4">
        @yield("content")
    </div>
</body>
</html>
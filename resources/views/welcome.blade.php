<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>App Network</title>

    @vite('resources/css/app.css')
</head>

<body>
    <h1>Welcome to the App Network</h1>
    <p>Click the button below</p>

    <a href="/apps">Click</a>
</body>

</html>
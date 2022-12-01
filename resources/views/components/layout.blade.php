<!DOCTYPE html>
<html lang="en" style="height: 100%">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link
            href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap"
            rel="stylesheet"
        />
        <link rel="icon" href="{{asset('assets/images/favicon.png')}}" type="image/png">
        <title>Corona Time</title>
        @vite('resources/css/app.css')
        @vite('resources/js/validation.js')
        <script src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    </head>
    <body {{$attributes->
        merge(['class'])}}>
        {{ $slot }}
    </body>
</html>

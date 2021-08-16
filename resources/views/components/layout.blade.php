<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? __('Wishlist') }}</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <x-header/>

    <div class="container mx-auto mt-16 px-4 sm:px-6 lg:px-8">
        {{ $slot }}
    </div>

    <x-footer/>
</body>
</html>

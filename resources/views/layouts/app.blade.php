<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eventor</title>

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>

    <!-- HEADER -->
    @include('partials.header')

    <!-- MAIN CONTENT (Har page ka content yaha aayega) -->
    <main>
        @yield('content')
    </main>

    <!-- FOOTER -->
    @include('partials.footer')

</body>
</html>
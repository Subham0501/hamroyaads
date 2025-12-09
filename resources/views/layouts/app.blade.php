<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Hamro Yaad - Custom Gifting Made Easy')</title>
    <meta name="description" content="Create beautiful custom gift websites for any occasion. Personalize templates, add QR codes, and share your love with the world.">
    
    <style>
        /* Fallback styles to ensure content is visible */
        body {
            background-color: #0a0a0a;
            color: #ffffff;
            margin: 0;
            padding: 0;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, sans-serif;
        }
    </style>
</head>
<body class="bg-[#0a0a0a] text-white antialiased" style="scroll-behavior: smooth;">
    @yield('content')
</body>
</html>

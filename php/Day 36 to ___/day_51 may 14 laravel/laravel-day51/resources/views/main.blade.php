<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ShopEase - Modern E-commerce Website</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/product.css') }}">
   
</head>
<body class="bg-gray-50 overflow-x-hidden">

@include('layout.nav')


@yield('content');

@include('layout.footer');

   <script src="{{ asset('js/script.js') }}"></script>
   <script src="{{ asset('js/product.js') }}"></script>

</body>
</html>
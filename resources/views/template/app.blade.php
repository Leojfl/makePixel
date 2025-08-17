<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Make Pixel</title>
    <style>
        .bg-content {
            background-color: #FBF7EB;
        }
        .container {
            max-width: 80%;
            margin: 0 auto;
            background-color: #fff;
            height: 100%;
        }
        .section {
            padding: 20px;
        }
        .button {
            display: inline-block;
            padding: 10px 20px;
            background-color: #4CAF50;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            text-align: center;
        }
        .card-shadow {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}
    </style>
</head>
<body class="bg-content">
    <div class="container card-shadow">
        @include('template.header')

        <div class="px-4">
            @yield('content')
        </div>

        @include('template.footer')
    </div>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/app.css">
    <title>
        @yield('title')
    </title>
</head>
<body>
    <div class="content">
        @yield('content')
    </div>
    @include('partials.footer')
<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
<script src="/js/app.js"></script>
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
</body>
</html>
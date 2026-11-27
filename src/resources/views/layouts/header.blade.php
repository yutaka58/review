<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <link rel="stylesheet" href="{{ asset('css/layouts/header.css') }}">
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
    @yield('css')

    <title>review_FreeMarket</title>
</head>

<body>
<header>
    <div class="header-grid">
        <div class="header-title">
            <img src="storage/img/COACHTECHヘッダーロゴ.png" alt="coachtechロゴ">
        </div>
    </div>
</header>

<main>
    @yield('content')
</main>

    
</body>
</html>
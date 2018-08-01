<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Compressed CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/foundation-sites@6.5.0-rc.2/dist/css/foundation.min.css" integrity="sha256-iJQ8dZac/jUYHxiEnZJsyVpKcdq2sQvdA7t02QFmp30= sha384-SplqNBo/0ZlvSdwrP/riIPDozO5ck8+yIm++KVqyMAC53S6m3BaV+2OLpi7ULOOh sha512-ho6hK4sAWdCeqopNZWNy1d9Ok2hzfTLQLcGSr8ZlRzDzh6tNHkVoqSl6wgLsqls3yazwiG9H9dBCtSfPuiLRCQ==" crossorigin="anonymous">
    <title>Photoshow</title>
</head>
<body>
    @include('partials.topbar')
    <br>
    <div class="row">
        @include('partials.messages')
        @yield('content')
    </div>
</body>
</html>
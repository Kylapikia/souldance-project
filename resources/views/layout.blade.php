<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <title>Soul Dance Academy</title>
    <style>
        li{
            list-style: none;
            display: inline;
        }
        footer,header{
            background-color: yellow;
        }
        body{
            background-color: #5bc0de;
        }
    </style>
</head>
<body>
<header>
<nav>
    <ul>
        <li>Home</li>
        <li>About</li>
        <li>Contact</li>
    </ul>
</nav>
</header>
<div class="container-fluid">
    @yield('content')
</div>
<p>Placeholder text Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum vel tincidunt justo,
    sit amet tincidunt neque. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus
    mus. Vestibulum pharetra lacinia nisi, vel finibus augue rutrum vel. Vivamus et elementum urna. In hac
    habitasse platea dictumst.
</p>
@yield('footer')
<footer>------ Footer placeholder ------</footer>
</body>
</html>

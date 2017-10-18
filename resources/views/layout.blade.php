<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - Soul Dance Academy</title>
    <link rel="stylesheet" href="/css/style.css" type="text/css">
    <link rel="stylesheet" type="text/css" href="/css/mobile.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <script src="/js/mobile.js" type="text/javascript"></script>
</head>
<body>
<div id="page">
    <div id="header">
        <div>
            <a href="home" class="logo"><img src="images/logo1.jpg" alt=""></a>
            <p>Believe and you can achieve</p>
            <ul id="navigation">
                <li>
                    <a href="home">Home</a>
                </li>
                <li class="menu selected">
                    <a href="about">About</a>
                    <ul class="primary">
                        <li>
                            <a href="classes">Classes</a>
                        </li>
                    </ul>
                </li>
                <li class="menu">
                    <a href="news">Blog</a>
                    <ul class="secondary">
                        <li>
                            <a href="gallery">Gallery</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="contact">Contact</a>
                </li>
            </ul>
        </div>
    </div>
    @yield('content')
    <div id="footer">
        <div>
            <p>&copy; 2017 Soul Dance Academy. All Rights Reserved.</p>
        </div>
    </div>
</div>
</body>
</html>

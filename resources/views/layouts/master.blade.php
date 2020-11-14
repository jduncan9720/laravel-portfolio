<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
          integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link href="css/app.css" rel="stylesheet" type="text/css" media="all" />
</head>
<body>
<nav class="nav1">
    <ul class="topNav">
        <li><a href="/"><i class="fas fa-home"></i></a></li>
        <li class="github"><i class="fab fa-github"></i><span> Github</span><a
                href="https://github.com/jduncan9720">
                jduncan9720</a></li>
        <li class="linkedin"><i class="fab fa-linkedin"></i><span> LinkedIn</span><a
                href="https://www.linkedin.com/in/jduncan-9720/">
                jduncan-9720</a></li>
        <li class="mainAbout"><a class="linkSpace" href="/about">About</a></li>
        <!-- <li><a class="linkSpace" href="#projectsLink">Projects</a></li> -->
        <li><a class="linkSpace" href="#portfolioLink">Portfolio</a></li>
        <li><a class="linkSpace" href="/contact">Contact</a></li>
    </ul>
</nav>

@yield ('content')
<footer>
    <p>Copyright &#169; 2020 Joshua Duncan. All Right Reserved.</p>
</footer>
<script type="text/javascript" src="/js/app.js"> </script>
</body>
</html>

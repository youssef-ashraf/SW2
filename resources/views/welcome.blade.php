<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>HomePage</title>
        <link rel="stylesheet" href="{{ URL::asset('css/home.css') }}">
    </head>
    <body>
        <header>
            <div class="wrapper">
                <div class="logo">
                   <img src="{{ URL::asset('photos/login/download (1).png') }}">
                </div>
                <ul class="nav-area">
                    <li> <a href="#">Home</a></li>
                    <li> <a href="#">About</a></li>
                    <li> <a href="#">Service</a></li>
                    <li> <a href="#">Profile</a></li>
                    <li> <a href="login">Register/Login</a></li>
                </ul>
            </div>
            <div class="Welcome-text">
               <h1>WE ARE CREATIVE</h1>
               <a href="#">contact us</a>   
            </div>                
        </header>    
    </body>
</html>
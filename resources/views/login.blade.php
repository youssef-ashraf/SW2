<!doctype html>
<html>

    <head>
        <title>login and registeration</title>
        <link rel="stylesheet" href="{{ URL::asset('css/login.css') }}">
    </head>
    <body>
        <div class="public">
            <div class="form-box"  style="filter: none;">
                <div class="button-box">
                    <div id="btn"></div>
                    <button type="button" class="toggle-btn" onclick="login()">Login</button>
                    <button type="button" class="toggle-btn" onclick="register()">Register</button>
                </div>   
                <div class="social-icons">
                    <img src="{{ URL::asset('photos/login/download (1).png') }}">
                    <img src="{{ URL::asset('photos/login/s-l400.jpg') }}">
                    <img src="{{ URL::asset('photos/login/images.jpg') }}">
                </div> 
            
			<form id="login" action="/login" method="post" class="input-group">
				{{ csrf_field() }}
                <input type="email" class="input-field" placeholder="User Email" required id="email" name="email">
                <input type="password" minlength="8" class="input-field" placeholder="User Password" required id="password" name="password">
                <input type="checkbox" class="check-box" > <span>Remember password</span>
                <button type="submit" class="submit-btn ">Log in</button>
            </form>
			<form id="register" class="input-group" action="/register" method="post">
				{{ csrf_field() }}
                <input type="text" class="input-field" placeholder="Username" required id="name" name="name">
                <input type="email" class="input-field" placeholder="Email" required name="email">
                <input type="password" minlength="8" class="input-field" placeholder="User Password" required id="passowrd" name="passowrd">
                <input type="checkbox" class="check-box" > <span>Iagree to the terms </span>
                <button type="submit" class="submit-btn ">Register</button>
            </form>
            </div>
        
        </div>
        <script>
        
          var x=document.getElementById("login");
          var y=document.getElementById("register");
          var z=document.getElementById("btn");

         function register()
         {
             x.style.left ="-400px";
             y.style.left ="50px";
             z.style.left ="110px";
         }
         function login()
         {
             x.style.left ="50px";
             y.style.left ="450px";
             z.style.left ="0px";
         }


        </script>
    </body>
</html>
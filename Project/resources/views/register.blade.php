<!DOCTYPE html>
<html>
<head>
	<title>register test</title>
</head>
<body>

	<form action="/register" method="post" >
	    {{ csrf_field() }}
  		<label for="fname">name:</label><br>
 		<input type="text" id="name" name="name"><br>
  		<label for="lname">passowrd:</label><br>
  		<input type="text" id="passowrd" name="passowrd"><br>
  		<label for="email">email</label><br>
  		<input type="text"  name="email"><br>
  		<button type="submit" >register</button>
 	</form>

</body>
</html>
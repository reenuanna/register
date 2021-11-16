<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<a href="/regview">Register</a>
@foreach($result as $val)
{{$val->name}}
@endforeach
<a href="/userlogin">Login</a>
<!-- &nbsp;&nbsp;&nbsp;<a href="/addT">ADD T</a> -->
&nbsp;&nbsp;&nbsp;<a href="/movie">ADD movie</a>
</body>
</html>
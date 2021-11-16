<!DOCTYPE html>
<html>
<head>
<title>Register</title>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container">
<div class="row">
<div class="vol-sm-4"></div>
<div class="vol-sm-4">
<form method="post" action="/register">\
    @csrf
<div class="form-group">
<label>Name</label>
<input type="text" name="name" class="form-control">
</div>
<div class="form-group"><label>Email</label>
<input type="email" name="email" class="form-control"></div>
<div class="form-group">
<label>Mobile</label>
<input type="text" name="mobile" class="form-control">
</div>
<div class="form-group">
<label>Password</label>
<input type="password" name="password" class="form-control">
</div>
<div class="form-group" >
<input type="submit" name="save" value="Save" class="btn btn-primary">
</div>
</form>
</div>
<div class="vol-sm-4"></div>
</div>
</div>
</body>

</html>
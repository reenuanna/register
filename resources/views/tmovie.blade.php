<!DOCTYPE html>
<html>
<head>
<title>Register</title>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
<div class="container">
<div class="row">
<div class="vol-sm-4"></div>
<div class="vol-sm-4">
<form method="post" action="/tmovie">
    @csrf
<div class="form-group">
<label>Name</label>
<select class="form-control" id="tid">
	<option value="default" selected="selected" disabled="disabled">Select T</option>
	@foreach($result as $val)
	<option value="{{$val->id}}">{{$val->tname}}</option>
	@endforeach
</select>
</div>

<div class="form-group">
<label >Movie Name</label>
<select class="form-control" id="mid">
	<option value="default" selected="selected" disabled="disabled">Select Movie</option>
	
</select>
</div>

</form>
</div>
<div class="vol-sm-4"></div>
</div>
</div>
<script type="text/javascript">
	$(document).ready(function(){
		$('#tid').on('change',function()
		{
			var x = $('#tid').val();
			// alert(x)
			 $.ajax({
				type:"get",
				url:"/getmovie/"+x,
				
				success:function(response) {   
                $('#mid').html(response);                
            
            }
        });
		});
	});
</script>
</body>

</html>
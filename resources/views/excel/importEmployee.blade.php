<!DOCTYPE html>
<html>
	<head>
		<title>Employee Info</title>
	</head>
<body>
	<form action="postImport" method="post"  enctype="multipart/form-data" >
		<input type="hidden" name="_token" value="{{csrf_token()}}">
		<input type="file" name="acount">
		<input type="submit" value="Import"></input>
	</form>
</body>	
</html>
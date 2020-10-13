<!DOCTYPE>
<!DOCTYPE html>
<html>
<head>
	<title>Upload File</title>
</head>
<body>

	<form action="upload" method="POST" enctype="multipart/form-data">
@csrf
		<input type="file" name="user_img"><br>
         
         <button type="submit">Upload File</button>

</body>
</html>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<title>Upload files</title>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-sm-4"></div>
			<div class="col-sm-4">
				<form action="upload.php" method="POST" enctype="multipart/form-data">
				<div class="input-group mt-5">
					<div class="">
						<input type="file" name="file">
						<button class="btn btn-primary mt-2" name="submit" type="submit">Sent</button>
						
					</div>
					<hr>
				</div>
			</form>				
			</div>
			<div class="col-sm-4"></div>
		</div>
	</div>
</body>
</html>
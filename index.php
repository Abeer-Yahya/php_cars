<!DOCTYPE html>
<html lang="en">
<head>
	<title>Cars</title>
</head>
<body>
	<center>
		<h1>Storing Form data in Database</h1>
		<form action="insert.php" method="post">
			
<p>
			<label for="CarID">CarID:</label>
			<input type="text" name="CarID" id="CarID">
			</p>

			
<p>
			<label for="Image">Image:</label>
			<input type="url" name="Image" id="Image">
			</p>

			
<p>
			<label for="Model">Model:</label>
			<input type="text" name="Model" id="Model">
			</p>

			
<p>
			<label for="Price">Price($):</label>
			<input type="number" name="Price" id="Price">
			</p>

			
<p>
			<label for="Color">Color:</label>
			<input type="text" name="Color" id="Color">
			</p>

			<input type="submit" value="Submit">
		</form>
	</center>
</body>
</html>

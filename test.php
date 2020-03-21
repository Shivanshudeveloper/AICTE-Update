<?php include './src/php/dbh.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<script src="./ckeditor/ckeditor.js"></script>
	<link rel="stylesheet" href="styles/style.css">
</head>
<body>
	<div class="container">
		<div class="ed-frm">
			<h2>Insert</h2>

			<form action="./src/php/main.php" method="post">
				<textarea name="editor" id="editor" cols="30" rows="10">
					Test Content Here Up
				</textarea>

				<button name="submit_test" type="submit">Submit</button>
			</form>
		</div>
	</div>

	<?php
		include './src/php/dbh.php';

		$sql = "SELECT * FROM content;";
		$result = mysqli_query($conn, $sql);
		while ($row = mysqli_fetch_assoc($result)) {
			echo $row['content'] . '<br />';
		}

	?>

<script>
	CKEDITOR.replace('editor');
</script>

</body>
</html>
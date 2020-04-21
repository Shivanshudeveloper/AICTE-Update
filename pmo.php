<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AICTE</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body >
<?php include './includes/header.inc.php' ?>
<center>
    <img class="w-25 mb-4" src="https://www.aicte-india.org/sites/default/files/logo_new.png" alt="AICTE">
</center>
<h2 class="text-center">
	VVIP/PMO References
</h2>

<button onclick="window.print();" class="float-right mr-2 mt-2 btn btn-primary">
    Print Simple
</button>


<?php 
if ($_SESSION['department'] == "VCMOffice" || $_SESSION['department'] == "CMOffice" || $_SESSION['department'] == "MSOffice" || $_SESSION['department'] == "CCO") {
	echo '
	<a href="./edit_pmo.php" class="float-right m-2 btn btn-primary">
		Edit
	</a>
	';
}
?>
	


<br>
<br>
<br>

<?php
include './src/php/dbh.php';
$sql = "SELECT * FROM information WHERE name = 'VVIP/PMO References';";
$result = mysqli_query($conn, $sql);
if ($row = mysqli_fetch_assoc($result)) {
	echo $row['description'];
}

?>
<?php 
    echo "<h5 class='mt-4'>Document Printed On: ".date("Y-m-d")." At time: ".date("h:i:sa")."</h5>";
?>
<!-- ************************************************************************** -->
</body>

</html>

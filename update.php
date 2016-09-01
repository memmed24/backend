<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="" method="post" enctype="multipart/form-data">
		<input type="text" name="header" placeholder="header"> <br>
		<textarea name="text" placeholder="new text" id="txt" cols="40" rows="5"></textarea> <br>
		<input type="file" name="picture"> <br>
		<input type="submit" class="btn btn-success" name="submit">
	</form>
</body>
<?php
include "db.php";
	if(isset($_POST['submit'])){
		$id = $_GET['id'];
		$header = $_POST['header'];
		$txt = $_POST['text'];
		$file = $_FILES['picture'];
		$target_dir = "images/";
		$target_file = $target_dir.basename($file['name']);

		move_uploaded_file($file['tmp_name'], $target_file);
		$sql = "UPDATE news SET header='$header', text='$txt', photo='$target_file' WHERE id='$id'";
		$query = mysqli_query($db_con, $sql);

		if ($query) {
			header('Location: admin.php');
		}else{
			echo "error launched";
		}
	} 
?>
</html>
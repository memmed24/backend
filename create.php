<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
	<link href='http://fonts.googleapis.com/css?family=Monda' rel='stylesheet' type='text/css'>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<style>
body{
	background-color: #111111
}
		input{
			margin-bottom: 5px;
		}
		input[type="text"]{
			outline:none;
			font-size:12px;
			color:#666;
			width:215px;
			padding:3px;
			margin-top: 50px;
			margin-left: 600px;
		}
		textarea{
			outline:none;
			width: 215px;
			font-size:12px;
			color:#666;
			padding:3px;

			margin-left: 600px;
		}
		input[type="submit"]{
			outline:none;
			font-size:12px;
			width:215px;
			padding:3px;

			margin-left: 600px;
		}
		input[type="file"]{
			outline:none;
			font-size:12px;
			width:215px;
			padding:3px;
			margin-left: 600px;
		}
		#login{
			background-color: #222222;
		}
	</style>
<body>
	<section id="header">
			<div class="header_top">
				<div class="wrap">
					<div class="logo">
						<a href="index.html"><img src="images/logo.png" alt="" /></a>
					</div>
					<div class="login_button">
						<ul>
							<li><a href="admin.php">Exit</a><li>
						</ul>
					</div>
				<div class="clear"></div>
			</div>
		</div>
	</section>
	<section id="add">
		<form action="" method="post" enctype="multipart/form-data">
			<input type="text" name="header" placeholder="header"> <br>
			<textarea name="text" placeholder="text" id="txt" cols="40" rows="5"></textarea>
<!-- 			<input type="text" name="text" placeholder="text"> <br> -->
			<input type="file" name="picture">
			<input type="submit" class="btn btn-success" name="submit">
		</form>
	</section>
	<?php 
		include 'db.php';
		if(isset($_POST['submit'])){
			$new_header = $_POST['header'];
			$new_text = $_POST['text'];
			$file = $_FILES['picture'];
			$target_dir = "images/";
			$target_file = $target_dir.basename($file['name']);

			move_uploaded_file($file['tmp_name'], $target_file);

			$sql = "INSERT INTO news(header,text,photo) VALUES('$new_header', '$new_text', '$target_file')";	
			$query = mysqli_query($db_con, $sql);

			if ($query) {
				header('Location: admin.php');
			}else{
				echo "error launched";
			}
		
	}
	 ?>
</body>
</html>
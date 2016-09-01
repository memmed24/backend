<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
	<link href='http://fonts.googleapis.com/css?family=Monda' rel='stylesheet' type='text/css'>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
	<section id="header">
			<div class="header_top">
				<div class="wrap">
					<div class="logo">
						<a href="index.php	"><img src="images/logo.png" alt="" /></a>
					</div>
					<div class="login_button">
						<ul>
							<li><a href="check.php">Exit</a><li>
						</ul>
					</div>
				<div class="clear"></div>
			</div>
		</div>
	</section>
	<section id="">
		<a href="create.php" class="btn btn-success">Add a new news</a>
	</section>
	<section id="table">
		<table class="table table-hover">
		<?php 
			include "db.php";
			if($db_con){
				$sql = "SELECT * FROM news";
				$query = mysqli_query($db_con, $sql);
		 ?>
			<thead>
				<tr>
					<th>Header</th>
					<th>Text</th>
					<th>Photo</th>
					<th >Action</th>
				</tr>
			</thead>
			<tbody>
				<?php while ($row = mysqli_fetch_assoc($query)){ ?>
				<tr> 
					<td> <?php print_r($row['header']); ?> </td>
					<td> <?php print_r($row['text']); ?> </td>
					<td> <img style="height:100px;" src="<?= $row['photo']; ?>"</td>
					<td> 
						<a class="btn btn-primary" href= "update.php?id= <?= $row['id'] ?>">Update</a>
						<a class="btn btn-danger" href="delete.php?id=<?= $row['id'] ?>">Delete</a>
					</td>
				</tr>
				<?php } ?>
			</tbody>
			<?php } ?>
		</table>
	</section>
</body>
</html>
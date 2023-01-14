<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Users</title>
	<style>
		body{
			background-color: white;
		}
	</style>
</head>
<body>
	<a href="../home/home.php">Return</a>
	<?php
  


	$connection = new PDO('mysql:host=localhost;dbname=thelouvre', "root", "");
 

	$delete_id = @$_GET['delete_id'];

	if ( $delete_id ) {
		
		$query = $connection->prepare('DELETE FROM users WHERE userId = ?');
		$query->execute( [ $delete_id ] );
	}



	$query = $connection->prepare('SELECT * FROM  users ');
	$query->execute();
	$rows = $query->fetchAll();

?>



<table border=2 cellpadding=2 cellspacing=3 width="60%">
	<tr>
		<th>userId</th>
		<th>name</th>
		<th>email</th>
		<th>password</th>
		<th></th>
<?php


foreach( $rows as $row ) {
	
	// htmlspecialchars служи да предотврятяване на грешки при въведени "специални" символи в базата..
	// Просто запомнете, че вашите полетата трябва да бъдат така направени преди да се отпечатат в сайта, за да няма проблеми с данните
	
	$row['userId'] = htmlspecialchars( $row['userId'], ENT_QUOTES );
	$row['name'] = htmlspecialchars( $row['name'], ENT_QUOTES );
	$row['email'] = htmlspecialchars( $row['email'], ENT_QUOTES );
	$row['pass'] = htmlspecialchars( $row['pass'], ENT_QUOTES );
?>

	<tr>
		<td>
				<?= $row["userId"] ?>
		</td>
		<td>
				<?= $row["name"] ?> 
		</td>
		<td>
				<?= $row["email"] ?> 
		</td>
		<td>
				<?= $row["pass"] ?> 
		</td>
		<td>
			<a href="?delete_id=<?= $row['userId'] ?>">Delete</a>
		</td>
	</tr>

<?php
}
?>

</table>
<br>

</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />    <link
    rel="stylesheet"
    href="/node_modules/bootstrap/dist/css/bootstrap.min.css"
  />
  <link rel="stylesheet" href="/css/main.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inconsolata:wght@200;300&family=Kdam+Thmor+Pro&family=Unica+One&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
	<link rel="stylesheet" href="admin.css">
	<title>Users</title>
</head>
<body>
	<a href="../home/home.php" class="return-btn btn text-uppercase fw-bold m-3"></a>
	<?php
  


	$connection = new PDO('mysql:host=localhost;dbname=thelouvre', "root", "");
 

	$delete_id = @$_GET['delete_id'];

	if ( $delete_id ) {
		
		$query = $connection->prepare('DELETE FROM user WHERE userId = ?');
		$query->execute( [ $delete_id ] );
	}



	$query = $connection->prepare('SELECT * FROM  user ');
	$query->execute();
	$rows = $query->fetchAll();

?>



<div class="container">
  <table class="table table-striped table-dark table-bordered table-hover">
    <thead>
      <tr>
        <th>userId</th>
        <th>name</th>
        <th>email</th>
        <th>password</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
		<?php
		foreach( $rows as $row ) {
			$row['userId'] = htmlspecialchars( $row['userId'], ENT_QUOTES );
			$row['name'] = htmlspecialchars( $row['name'], ENT_QUOTES );
			$row['email'] = htmlspecialchars( $row['email'], ENT_QUOTES );
			$row['pass'] = htmlspecialchars( $row['pass'], ENT_QUOTES );
		?>
		
		<tr>
			<td><?= $row["userId"] ?></td>
			<td><?= $row["name"] ?></td>
			<td><?= $row["email"] ?></td>
			<td><?= $row["pass"] ?></td>
			<td>
				<a href="?delete_id=<?= $row['userId'] ?>" class="btn btn-danger btn-sm">Delete</a>
			</td>
      	</tr>
		<?php
        }
      ?>
    </tbody>
  </table>
</div>

<script src="/node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>
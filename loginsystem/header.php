<?php
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<header>
	<nav>
		<div class="main-wrapper">
			<div class="nav-login">
				<?php
					if (isset($_SESSION['u_id'])) {
						echo '<form action="/loginsystem/profile.php" method="POST">
							<button type="submit" name="submit">Profile</button>
						</form>';
						echo '<form action="/loginsystem/post.php" method="POST">
							<button type="submit" name="submit">Create</button>
						</form>';
						echo '<form action="includes/logout.inc.php" method="POST">
							<button type="submit" name="submit">Logout</button>
						</form>';
					} else {
						echo '<form action="includes/login.inc.php" method="POST">
							<input type="text" name="uid" placeholder="Username/e-mail">
							<input type="password" name="pwd" placeholder="password">
							<button type="submit" name="submit">Login</button>
						</form>';
					}
				?>
			</div>
		</div>
	</nav>
</header>
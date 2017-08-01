

<!-- <section class="main-container">
	<div class="main-wrapper">
		<?php
			// if (isset($_SESSION['u_id'])) {
			// 	echo "<p style='color:red;'>"."You are logged in!";
			// 	echo "<p style='color:red;'>".$_SESSION['u_uid'];
			// }
			// else{
			// 	echo '<h2>'.'Home'.'</h2>';
			// }
		?>
	</div>
</section>
 -->

<?php
	include_once 'header.php';
	if (isset($_SESSION['u_id'])) {
		header("/loginsystem/profile.php");
		exit();
	}
?>

<section class="main-container">
	<div class="main-wrapper">
		<h2>Signup</h2>
		<form class="signup-form" action="includes/signup.inc.php" method="POST">
			<input type="text" name="first" placeholder="Firstname">
			<input type="text" name="last" placeholder="Lastname">
			<input type="text" name="email" placeholder="E-mail">
			<input type="text" name="uid" placeholder="Username">
			<input type="password" name="pwd" placeholder="Password">
			<button type="submit" name="submit">Sign up</button>
		</form>
	</div>
</section>

<?php
	include_once 'footer.php';
?>
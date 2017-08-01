<?php
	include_once 'header.php';
?>

<section class="main-container">
	<div class="main-wrapper">
		<?php
				echo "<p style='color:red;'>"."You are logged in!";
				echo "<p style='color:red;'>".$_SESSION['u_uid'];
		?>
	</div>
</section>

<?php
	include_once 'footer.php';
?>
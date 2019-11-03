<?php
	include_once 'db_connection.php';
	include_once 'header_login.php';
	if(!($_SESSION['identity']))
	{
		header("Location: login_page.php");
		exit();
	}
?>

<form class="gen_ac" action="access_quiz_process.php" method="POST">
	<p class="gen_ac_title">Enter the access code to begin the quiz.</p>
	<input type="text" name="access_code" id="access_code" required autocomplete="off">
	<br><br>
	<button type="submit" class="submit_signup" name="check_ac">Submit</button>
	<br>
	<?php

		if(isset($_GET['ac']))
		{
			if($_GET['ac']=="wrong")
			{
				echo '<p class="error">Wrong access code.</p>';
				echo '<script type="text/javascript">document.getElementById("access_code").style.border="solid tomato";
				document.getElementById("access_code").style.borderWidth="0px 0px 1.5px 0px";</script>';
			}
			else if($_GET['ac']=="over")
			{
				echo '<p class="error">This quiz has already been attempted.</p>';
				echo '<script type="text/javascript">document.getElementById("access_code").style.border="solid tomato";
				document.getElementById("access_code").style.borderWidth="0px 0px 1.5px 0px";</script>';
			}
		}
	?>

</form>

<?php

	include_once 'footer_login.php';
?>
<?php

	include_once 'header_login.php';
	if(!($_SESSION['identity']))
	{
		header("Location: login_page.php");
		exit();
	}
	
?>

<p class="sub_head">Change password</p>
<form action="acc_details_process.php" method="POST">
	<div class="inp_f">
		<p>Old password</p>
		<input type="password" name="old_pwd" id="old_pwd" required>
		<br>
		<input type="checkbox" name="checkbox" onclick="check()" class="checkbox" autocomplete="off">Show Password?

			<script type="text/javascript">
				i=0;
				function check()
				{
					if(i%2==0)
					{
						document.getElementById('old_pwd').type="text";
						i++;
					}
					else
					{
						document.getElementById('old_pwd').type="password";
						i++;
					}
				}
			</script>
			<?php

				if(isset($_GET['oldpwd']))
				{
					$error=$_GET['oldpwd'];
					if($error="wrong")
					{
						echo '<p class="error">Wrong Password</p>';
						echo '<script type="text/javascript">document.getElementById("old_pwd").style.border="solid tomato";
						document.getElementById("old_pwd").style.borderWidth="0px 0px 1.5px 0px";</script>';

					}
				}
				?>
			


	
</div>
<br>
	<div class="inp_f">
		<p>New password</p>
		<input type="password" name="new_pwd" id="new_pwd" required>
		<br>
		<input type="checkbox" name="checkbox" onclick="check1()" class="checkbox" autocomplete="off">Show Password?

			<script type="text/javascript">
				i=0;
				function check1()
				{
					if(i%2==0)
					{
						document.getElementById('new_pwd').type="text";
						i++;
					}
					else
					{
						document.getElementById('new_pwd').type="password";
						i++;
					}
				}
			</script>
	</div>
	<br>
	<div class="inp_f">
		<p>Confirm password</p>
		<input type="password" name="confirm_new_pwd" id="confirm_new_pwd" required>
		<br>
		<input type="checkbox" name="checkbox" onclick="check2()" class="checkbox" autocomplete="off">Show Password?

			<script type="text/javascript">
				i=0;
				function check2()
				{
					if(i%2==0)
					{
						document.getElementById('confirm_new_pwd').type="text";
						i++;
					}
					else
					{
						document.getElementById('confirm_new_pwd').type="password";
						i++;
					}
				}
			</script>
	</div>
	<?php
		if(isset($_GET['pwd']))
		{
			$error=$_GET['pwd'];
			if($error="dontmatch")
			{
				echo '<p class="error">Passwords do not match.</p>';
						echo '<script type="text/javascript">document.getElementById("new_pwd").style.border="solid tomato";
															document.getElementById("confirm_new_pwd").style.border="solid tomato";
															document.getElementById("new_pwd").style.borderWidth="0px 0px 1.5px 0px";
															document.getElementById("confirm_new_pwd").style.borderWidth="0px 0px 1.5px 0px";</script>';			}
		}
	 ?>
	<br>
	<br>
	<button type="submit" name="submit_cpass" class="submit_signup">Submit</button>



<?php

	include_once 'footer_login.php';
?>
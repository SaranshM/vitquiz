<?php

	include_once 'header.php';
?>

<p class="sub_head">LOGIN</p>
	
	<form method="POST" action="login_page_process.php">
		<div class="inp_f">
			<p>USERNAME</p>
			<input type="text" name="username" id="username" required>
			<?php

				if(isset($_GET['username']))
				{	
					$error=$_GET['username'];
					if($error=="dne")
					{
						echo '<p class="error">This username does not exist</p>';
						echo '<script type="text/javascript">document.getElementById("username").style.border="solid tomato";
						document.getElementById("username").style.borderWidth="0px 0px 1.5px 0px";</script>';
					}
				}

			?>

		</div>
		<br>
		<div class="inp_f>">
			<p>PASSWORD</p>
			
			<input type="password" name="pwd" id="pwd" required autocomplete="off">
			<br>
			<input type="checkbox" name="checkbox" onclick="check()" class="checkbox">Show Password?

			<script type="text/javascript">
				i=0;
				function check()
				{
					if(i%2==0)
					{
						document.getElementById('pwd').type="text";
						i++;
					}
					else
					{
						document.getElementById('pwd').type="password";
						i++;
					}
				}
			</script>
			

			<?php

				if(isset($_GET['login']))
				{	
					$error=$_GET['login'];
					if($error=="pwd")
					{
						echo '<p class="error">Wrong Password</p>';
						echo '<script type="text/javascript">document.getElementById("pwd").style.border="solid tomato";
						document.getElementById("pwd").style.borderWidth="0px 0px 1.5px 0px";</script>';
					}
				}

			?>
		</div>
		<br>
		
			<br>
		
		<button type="submit" name="submit_login" class="submit">LOGIN</button>
	</form>

<?php

	include_once 'footer.php';
?>
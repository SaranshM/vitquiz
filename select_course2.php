<?php

	include_once 'db_connection.php';
	include_once 'header_login.php';
	if(!($_SESSION['identity']))
	{
		header("Location: login_page.php");
		exit();
	}
	
?>

<form class="gen_ac" action="show_score2.php" method="POST">
	<p class="gen_ac_title">Search course :</p>
	<input list="department" name="select_course" required class="quiz_input" autocomplete="off">
		<datalist id="department">
			<?php
				$username=$_SESSION['username'];

				$sqlx="SELECT access_code FROM student_quiz_details WHERE username='$username';";
				$resultx=mysqli_query($connect,$sqlx);
				while($access_codes=mysqli_fetch_assoc($resultx))
				{
					$tempx=$access_codes['access_code'];

					$sqly="SELECT course_code FROM quiz WHERE access_code='$tempx';";
					$resulty=mysqli_query($connect,$sqly);
					$coursex=mysqli_fetch_assoc($resulty)['course_code'];
					echo "<option value='".$coursex."'></option>";


				}

			?>
		</datalist>
		<br>
		<br>
		<p class="gen_ac_title">Select quiz number :</p>
		<input list="quiz_number" name="quiz_number" required class="quiz_input" autocomplete="off">
		<datalist id="quiz_number">
			<option value="Quiz 1"></option>
			<option value="Quiz 2"></option>
		</datalist>
		<?php

				if(isset($_GET['course']))
				{	
					$error=$_GET['course'];
					if($error=="inv")
					{
						echo '<p class="error">No records found.</p>';
						echo '<script type="text/javascript">document.getElementById("department").style.border="solid tomato";</script>';
					}
				}

			?>
		<br><br>
	<button type="submit" class="select_course">Submit</button>
</form>


<?php

	include_once 'footer_login.php';
?>
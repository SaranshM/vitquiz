<?php

	include_once 'db_connection.php';
	include_once 'header_login.php';
	if(!($_SESSION['identity']))
	{
		header("Location: login_page.php");
		exit();
	}
	$username=$_SESSION['username'];

?>


<form class="gen_ac" action="display_quiz.php" method="POST">
	<p class="gen_ac_title">Search course :</p>
	<input list="department" name="select_course" required class="quiz_input" autocomplete="off">
		<datalist id="department">
			<?php


				$sql1="SELECT course_code FROM quiz WHERE username='$username';";
				$result1=mysqli_query($connect,$sql1);
				

				//$sql2="SELECT quiz_number FROM quiz;";
				//$result2=mysqli_query($connect,$sql2);
				

				while(($course_name=mysqli_fetch_assoc($result1)))// && ($the_quiz=mysqli_fetch_assoc($result2)))
				{
					$temp1=$course_name['course_code'];
					//$temp2=$the_quiz['quiz_number'];
					echo "<option value='".$temp1."'></option>";
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
						echo '<script type="text/javascript">document.getElementById("department").style.border="solid tomato";
						document.getElementById("department").style.borderWidth="0px 0px 1.5px 0px";</script>';
					}
				}

			?>
		<br><br>


	<button type="submit" class="select_course">Submit</button>
</form>


<?php

	include_once 'footer_login.php';
?>




<?php 
	include_once 'header_login.php';
	include_once 'db_connection.php';
	if(!($_SESSION['identity']))
	{
		header("Location: login_page.php");
		exit();
	}
?>

<p class="sub_head"><?php echo $_POST['select_course']; ?></p>



<table class="score">
	<tr>
		<th>S.NO.</th>
		<th>QUIZ NUMBER</th>
		<th>SCORE</th>
	</tr>

<?php
	if(isset($_POST['select_course']))
	{
		$course=$_POST['select_course'];
		$username=$_SESSION['username'];
		$quiz_number=$_POST['quiz_number'];
		$sql="SELECT access_code FROM quiz WHERE course_code='$course' AND quiz_no='$quiz_number';";
		$result=mysqli_query($connect,$sql);
		$aye=mysqli_num_rows($result);
		$i=1;
		if($aye>0)
		{
			while($acs=mysqli_fetch_assoc($result))
			{
				$tempy=$acs['access_code'];

				$sqlz="SELECT score FROM student_quiz_details WHERE access_code='$tempy' AND username='$username';";
				$resultz=mysqli_query($connect,$sqlz);
				if(mysqli_num_rows($resultz)>0)
				{
					echo "<tr>
						<td>".$i."</td>".
						"<td>".$quiz_number."</td>".
						"<td>".mysqli_fetch_assoc($resultz)['score']."/10"."</td>".
						"</tr>";
						$i++;
				}
			}
		}

		else
		{
			header("Location: select_course2.php?course=inv");
		}
	}
?>

</table>

<?php

	include_once 'footer_login.php';
?>
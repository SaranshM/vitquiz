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
		<th>STUDENT</th>
		<th>SCORE</th>
	</tr>

<?php
	if(isset($_POST['select_course']))
	{
		$course=$_POST['select_course'];
		$username=$_SESSION['username'];
		$quiz_number=$_POST['quiz_number'];
		$sql="SELECT access_code FROM quiz WHERE course_code='$course' AND username='$username' AND quiz_no='$quiz_number';";
		$result=mysqli_query($connect,$sql);
		$aye=mysqli_num_rows($result);
		if($aye==1)
		{
			$ac=mysqli_fetch_assoc($result)['access_code'];
			$sqlx="SELECT username FROM student_quiz_details WHERE access_code='$ac';";
			$resultx=mysqli_query($connect,$sqlx);

			$sqly="SELECT score FROM student_quiz_details WHERE access_code='$ac';";
			$resulty=mysqli_query($connect,$sqly);

			$i=1;
			while(($row=mysqli_fetch_assoc($resultx)) && ($qw=mysqli_fetch_assoc($resulty)))
			{
				
				echo "<tr>
						<td>".$i."</td>".
						"<td>".$quiz_number."</td>".
						"<td>".$row['username']."</td>".
						"<td>".$qw['score']."/10"."</td>".
						"</tr>";
				$i++;
			}


		}

		

		// $sql1="SELECT score FROM quiz_score WHERE course='$course' AND faculty='$username' AND quiz_number='$quiz_number';";
		// $result1=mysqli_query($connect,$sql1);
		// $aye1=mysqli_num_rows($result1);
		// $i=1;
		// if($aye>0)
		// {
		// 	while(($row=mysqli_fetch_assoc($result)) && ($qw=mysqli_fetch_assoc($result1)))
		// 	{
				
		// 		echo "<tr>
		// 				<td>".$i."</td>".
		// 				"<td>".$quiz_number."</td>".
		// 				"<td>".$row['student']."</td>".
		// 				"<td>".$qw['score']."/10"."</td>".
		// 				"</tr>";
		// 		$i++;
		// 	}
		// }
		else
		{
			header("Location: select_course.php?course=inv");
		}
	}
?>

</table>

<?php

	include_once 'footer_login.php';
?>
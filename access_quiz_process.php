<?php

	include_once 'db_connection.php';
	session_start();
	if(isset($_POST['check_ac']))
	{
		$entered_ac=$_POST['access_code'];
		$sql="SELECT access_code FROM quiz WHERE access_code='$entered_ac'";
		$result=mysqli_query($connect,$sql);

		
		if(mysqli_num_rows($result)==1)
		{
			$_SESSION['access_code']=$entered_ac;
			$username=$_SESSION['username'];
  			$sqlx="SELECT accessed_or_not FROM student_quiz_details WHERE access_code='$entered_ac' and username='$username';";
  			$resultx=mysqli_query($connect,$sqlx);

  			if(mysqli_num_rows($resultx)==1)
  			{
  				if(mysqli_fetch_assoc($resultx)['accessed_or_not'])
  				{
  					header("Location: access_quiz.php?ac=over");
  				}
  				else
  				{
  					header("Location: quiz_rules.php");
  				}
			}
			else
			{
				$sqlx="SELECT course_code FROM quiz WHERE access_code='$entered_ac';";
				$resultx=mysqli_query($connect,$sqlx);

				$sqly="SELECT faculty FROM quiz WHERE access_code='$entered_ac';";
				$resulty=mysqli_query($connect,$sqly);


				$sqlz="SELECT quiz_no FROM quiz WHERE access_code='$entered_ac';";
				$resultz=mysqli_query($connect,$sqlz);

				$course=mysqli_fetch_assoc($resultx)['course'];
				$faculty=mysqli_fetch_assoc($resulty)['faculty'];
				$quiz_number=mysqli_fetch_assoc($resultz)['quiz_number'];

				$student=$_SESSION['username'];
				$sql1="INSERT INTO student_quiz_details(access_code,username,accessed_or_not,score) VALUES('$entered_ac','$student',0,0);";
	    		mysqli_query($connect,$sql1);
				header("Location: quiz_rules.php");
			}
		}
		else
	    {
			header("Location: access_quiz.php?ac=wrong");
	    }
	}
	
	?>
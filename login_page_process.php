<?php

	include_once 'db_connection.php';

	$flag1=0;

	if(isset($_POST['submit_login']))
	{
		$username=mysqli_real_escape_string($connect,$_POST['username']);
		$pwd=mysqli_real_escape_string($connect,$_POST['pwd']);

		$query1="SELECT username FROM faculty WHERE username='$username';";
		$query2="SELECT username FROM student WHERE username='$username';";
		$result1=mysqli_query($connect,$query1);
		$result2=mysqli_query($connect,$query2);
		if(mysqli_num_rows($result1)==1)
		{
			$query_1="SELECT pwd FROM faculty WHERE username='$username';";

			$result_1=mysqli_query($connect,$query_1);
			// while($pwds=mysqli_fetch_assoc($result_1))
			// {
			// 	if($pwd==$pwds['pwd'])
			// 	{
			// 		$flag1=1;
			// 		break;
			// 	}
			// }
			if(mysqli_num_rows($result_1)==1 && password_verify($pwd,mysqli_fetch_assoc($result_1)['pwd']))
			{
				session_start();
				$_SESSION['username']=$username;
				$_SESSION['identity']="faculty";
				header("Location: login_success_faculty.php");
			}
			else
			{
				header("Location: login_page.php?login=pwd");
				exit();
			}
			
		}
	
		else if(mysqli_num_rows($result2)==1)
		{
			$query_2="SELECT pwd FROM student WHERE username='$username';";
			$result_2=mysqli_query($connect,$query_2);
			// while($pwds=mysqli_fetch_assoc($result_2))
			// {
			// 	if($pwd==$pwds['pwd'])
			// 	{
			// 		$flag1=1;
			// 		break;
			// 	}
			// }
			if(mysqli_num_rows($result_2)==1 && password_verify($pwd,mysqli_fetch_assoc($result_2)['pwd']))
			{

				session_start();
				$_SESSION['username']=$username;
				$_SESSION['identity']="student";
				header("Location: login_success_student.php");
			}
			else
			{
				header("Location: login_page.php?login=pwd");
				exit();
			}
		}
		else
		{
			header("Location: login_page.php?username=dne");
		}
	}
	
?>
<?php

	include_once 'db_connection.php';
	session_start();
	$identity=$_SESSION['identity'];
	if(isset($_POST['submit_cpass']))
	{
		$username=$_SESSION['username'];
		$old_pwd=$_POST['old_pwd'];
		$sql="SELECT pwd FROM $identity WHERE username='$username';";
		$result=mysqli_query($connect,$sql);
		if(password_verify($old_pwd,mysqli_fetch_assoc($result)['pwd']))
		{
			
			$new_pass=$_POST['new_pwd'];
			$new_pass2=$_POST['confirm_new_pwd'];

			if($new_pass==$new_pass2)
			{
				$hashed_new_pass=password_hash($new_pass,PASSWORD_DEFAULT);
				$sql2="UPDATE $identity SET pwd='$hashed_new_pass' WHERE username='$username';";
				mysqli_query($connect,$sql2);
				if($identity=="student")
				{
					header("Location: login_success_student.php?pwd=reset");
				}
				else
				{
					header("Location: login_success_faculty.php?pwd=reset");
				}

			}
			else
			{
				header("Location: acc_details.php?pwd=dontmatch");
			}
		}
		else
		{
			header("Location: acc_details.php?oldpwd=wrong");
		}

	}
?>
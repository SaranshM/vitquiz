<?php
	include_once 'header_login.php';
	include_once 'db_connection.php';
	if(!($_SESSION['identity']))
	{
		header("Location: login_page.php");
		exit();
	}
	if(isset($_POST['submit_attempted_quiz']) || $_GET['time']=="over")
	{
		$stud_answer=array($_POST['correct_option1'],$_POST['correct_option2'],$_POST['correct_option3'],$_POST['correct_option4'],$_POST['correct_option5'],$_POST['correct_option6'],$_POST['correct_option7'],$_POST['correct_option8'],$_POST['correct_option9'],$_POST['correct_option10']);
		$access_code=$_SESSION['access_code'];
		$username=$_SESSION['username'];
		$score=0;
		$qs=['q1','q2','q3','q4','q5','q6','q7','q8','q9','q10'];

		for($i=0;$i<10;$i++)
		{
			$tempx=$qs[$i];
			$sqlx="SELECT a_c FROM $tempx WHERE access_code='$access_code';";
			$resultx=mysqli_query($connect,$sqlx);
			$ansx=mysqli_fetch_assoc($resultx)['a_c'];
			$ansx=rtrim($ansx);
			if($ansx==$stud_answer[$i])
			{
				$score++;
			}
		}
		
		$sql1="UPDATE student_quiz_details SET score=$score,accessed_or_not=1 WHERE access_code='$access_code' AND username='$username';";
		mysqli_query($connect,$sql1);


	}

	
	
?>



<div class="show_score">
	<p class="title_div">Your score :</p>

	<?php
		echo "<p class='f_score'>".$score."/10</p>";
	?>
	
	
</div>

<?php

	include_once 'footer_login.php';
?>
<?php

	include_once 'db_connection.php';
	session_start();
	if(isset($_POST['submit_quiz']))
	{
		$faculty=$_SESSION['username'];
		$quiz_number=$_SESSION['quiz_no'];
		$department=$_SESSION['course_to_edit'];
		$_SESSION['department']=$department;
		$_SESSION['quiz_number']=$quiz_number;
		$q1=$_POST['q1'];
		$q1_a1=$_POST['q1_a1'];
		$q1_a2=$_POST['q1_a2'];
		$q1_a3=$_POST['q1_a3'];
		$q1_a4=$_POST['q1_a4'];
		$correct_option1=$_POST['correct_option1'];
		$q2=$_POST['q2'];
		$q2_a1=$_POST['q2_a1'];
		$q2_a2=$_POST['q2_a2'];
		$q2_a3=$_POST['q2_a3'];
		$q2_a4=$_POST['q2_a4'];
		$correct_option2=$_POST['correct_option2'];
		$q3=$_POST['q3'];
		$q3_a1=$_POST['q3_a1'];
		$q3_a2=$_POST['q3_a2'];
		$q3_a3=$_POST['q3_a3'];
		$q3_a4=$_POST['q3_a4'];
		$correct_option3=$_POST['correct_option3'];
		$q4=$_POST['q4'];
		$q4_a1=$_POST['q4_a1'];
		$q4_a2=$_POST['q4_a2'];
		$q4_a3=$_POST['q4_a3'];
		$q4_a4=$_POST['q4_a4'];
		$correct_option4=$_POST['correct_option4'];
		$q5=$_POST['q5'];
		$q5_a1=$_POST['q5_a1'];
		$q5_a2=$_POST['q5_a2'];
		$q5_a3=$_POST['q5_a3'];
		$q5_a4=$_POST['q5_a4'];
		$correct_option5=$_POST['correct_option5'];
		$q6=$_POST['q6'];
		$q6_a1=$_POST['q6_a1'];
		$q6_a2=$_POST['q6_a2'];
		$q6_a3=$_POST['q6_a3'];
		$q6_a4=$_POST['q6_a4'];
		$correct_option6=$_POST['correct_option6'];
		$q7=$_POST['q7'];
		$q7_a1=$_POST['q7_a1'];
		$q7_a2=$_POST['q7_a2'];
		$q7_a3=$_POST['q7_a3'];
		$q7_a4=$_POST['q7_a4'];
		$correct_option7=$_POST['correct_option7'];
		$q8=$_POST['q8'];
		$q8_a1=$_POST['q8_a1'];
		$q8_a2=$_POST['q8_a2'];
		$q8_a3=$_POST['q8_a3'];
		$q8_a4=$_POST['q8_a4'];
		$correct_option8=$_POST['correct_option8'];
		$q9=$_POST['q9'];
		$q9_a1=$_POST['q9_a1'];
		$q9_a2=$_POST['q9_a2'];
		$q9_a3=$_POST['q9_a3'];
		$q9_a4=$_POST['q9_a4'];
		$correct_option9=$_POST['correct_option9'];
		$q10=$_POST['q10'];
		$q10_a1=$_POST['q10_a1'];
		$q10_a2=$_POST['q10_a2'];
		$q10_a3=$_POST['q10_a3'];
		$q10_a4=$_POST['q10_a4'];
		$correct_option10=$_POST['correct_option10'];
		$text_file=$_SESSION['quiz_file'];

		$sqla="SELECT access_code FROM quiz WHERE username='$faculty' AND quiz_no='$quiz_number' AND course_code='$department';";
		$resulta=mysqli_query($connect,$sqla);
		$access_code=mysqli_fetch_assoc($resulta)['access_code'];

		

			//$sql="INSERT INTO quiz (course,faculty,q1,q1_a1,q1_a2,q1_a3,q1_a4,correct_option1,q2,q2_a1,q2_a2,q2_a3,q2_a4,correct_option2,q3,q3_a1,q3_a2,q3_a3,q3_a4,correct_option3,q4,q4_a1,q4_a2,q4_a3,q4_a4,correct_option4,q5,q5_a1,q5_a2,q5_a3,q5_a4,correct_option5,q6,q6_a1,q6_a2,q6_a3,q6_a4,correct_option6,q7,q7_a1,q7_a2,q7_a3,q7_a4,correct_option7,q8,q8_a1,q8_a2,q8_a3,q8_a4,correct_option8,q9,q9_a1,q9_a2,q9_a3,q9_a4,correct_option9,q10,q10_a1,q10_a2,q10_a3,q10_a4,correct_option10,quiz_number) VALUES('$department','$faculty','$q1','$q1_a1','$q1_a2','$q1_a3','$q1_a4','$correct_option1','$q2','$q2_a1','$q2_a2','$q2_a3','$q2_a4','$correct_option2','$q3','$q3_a1','$q3_a2','$q3_a3','$q3_a4','$correct_option3','$q4','$q4_a1','$q4_a2','$q4_a3','$q4_a4','$correct_option4','$q5','$q5_a1','$q5_a2','$q5_a3','$q5_a4','$correct_option5','$q6','$q6_a1','$q6_a2','$q6_a3','$q6_a4','$correct_option6','$q7','$q7_a1','$q7_a2','$q7_a3','$q7_a4','$correct_option7','$q8','$q8_a1','$q8_a2','$q8_a3','$q8_a4','$correct_option8','$q9','$q9_a1','$q9_a2','$q9_a3','$q9_a4','$correct_option9','$q10','$q10_a1','$q10_a2','$q10_a3','$q10_a4','$correct_option10','$quiz_number');";

		$sql2="UPDATE questions SET q1='$q1' , q2='$q2' ,q3='$q3' ,q4='$q4' ,q5='$q5' ,q6='$q6' ,q7='$q7' ,q8='$q8' ,q9='$q9' ,q10='$q10' WHERE access_code='$access_code';";
		mysqli_query($connect,$sql2);

		$question=array('q1','q2','q3','q4','q5','q6','q7','q8','q9','q10');
		$option=array(array($q1_a1,$q1_a2,$q1_a3,$q1_a4,$correct_option1),array($q2_a1,$q2_a2,$q2_a3,$q2_a4,$correct_option2),array($q3_a1,$q3_a2,$q3_a3,$q3_a4,$correct_option3),array($q4_a1,$q4_a2,$q4_a3,$q4_a4,$correct_option4),array($q5_a1,$q5_a2,$q5_a3,$q5_a4,$correct_option5),array($q6_a1,$q6_a2,$q6_a3,$q6_a4,$correct_option6),array($q7_a1,$q7_a2,$q7_a3,$q7_a4,$correct_option7),array($q8_a1,$q8_a2,$q8_a3,$q8_a4,$correct_option8),array($q9_a1,$q9_a2,$q9_a3,$q9_a4,$correct_option9),array($q10_a1,$q10_a2,$q10_a3,$q10_a4,$correct_option10));
		

		for($i=0;$i<10;$i++)
		{
			$tempx=$question[$i];
			$a1=$option[$i][0];
			$a2=$option[$i][1];
			$a3=$option[$i][2];
			$a4=$option[$i][3];
			$correct_option=$option[$i][4];
			$sqlx="INSERT INTO $tempx(access_code,a1,a2,a3,a4,a_c) VALUES('$access_code','$a1','$a2','$a3','$a4','$correct_option');";

			$sqlx="UPDATE $tempx SET a1='$a1' , a2='$a2' , a3='$a3' , a4='$a4' , a_c='$correct_option' WHERE access_code='$access_code';";
			mysqli_query($connect,$sqlx);
		}

			header("Location: login_success_faculty.php?quiz=edit");
		
	}
?>

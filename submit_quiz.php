<?php

	include_once 'db_connection.php';
	session_start();
	if(isset($_POST['submit_quiz']))
	{
		$i=0;
		$_SESSION['course']=$_POST['department'];
		$faculty=$_SESSION['username'];
		$quiz_number=$_POST['quiz_number'];
		$department_f=$_POST['department'];
		$department="";
		for($i=0;$i<7;$i++)
		{
			$department=$department.$department_f[$i];
		}
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
		$access_code=$_POST['access_code'];
		$text_file=$_SESSION['quiz_file'];
		$imgs=array(10);
		for($i=0;$i<10;$i++)
		{
			$tempx="q".($i+1)."_img";
			$filex=$_FILES[$tempx];

			$file_name=$filex['name'];
			$file_tmp_name=$filex['tmp_name'];
			$file_error=$filex['error'];

			$file_ext_temp=explode('.',$file_name);
			$file_ext=strtolower(end($file_ext_temp));

			if($file_ext=='png' || $file_ext=='jpg' || $file_ext=='jpeg')
			{
				if($file_error===0)
				{
					$file_new_name="img".uniqid('',true).".".$file_ext;
					$file_dest="images/".$file_new_name;
					move_uploaded_file($file_tmp_name,$file_dest);
					$imgs[$i]=$file_dest;
				}
				else
				{
					header("Location: create_quiz.php?error=r_error");	
				}
			}
			else
			{
				header("Location: create_quiz.php?error=invalid");
			}
		}
		

			//$sql="INSERT INTO quiz (course,faculty,q1,q1_a1,q1_a2,q1_a3,q1_a4,correct_option1,q2,q2_a1,q2_a2,q2_a3,q2_a4,correct_option2,q3,q3_a1,q3_a2,q3_a3,q3_a4,correct_option3,q4,q4_a1,q4_a2,q4_a3,q4_a4,correct_option4,q5,q5_a1,q5_a2,q5_a3,q5_a4,correct_option5,q6,q6_a1,q6_a2,q6_a3,q6_a4,correct_option6,q7,q7_a1,q7_a2,q7_a3,q7_a4,correct_option7,q8,q8_a1,q8_a2,q8_a3,q8_a4,correct_option8,q9,q9_a1,q9_a2,q9_a3,q9_a4,correct_option9,q10,q10_a1,q10_a2,q10_a3,q10_a4,correct_option10,quiz_number) VALUES('$department','$faculty','$q1','$q1_a1','$q1_a2','$q1_a3','$q1_a4','$correct_option1','$q2','$q2_a1','$q2_a2','$q2_a3','$q2_a4','$correct_option2','$q3','$q3_a1','$q3_a2','$q3_a3','$q3_a4','$correct_option3','$q4','$q4_a1','$q4_a2','$q4_a3','$q4_a4','$correct_option4','$q5','$q5_a1','$q5_a2','$q5_a3','$q5_a4','$correct_option5','$q6','$q6_a1','$q6_a2','$q6_a3','$q6_a4','$correct_option6','$q7','$q7_a1','$q7_a2','$q7_a3','$q7_a4','$correct_option7','$q8','$q8_a1','$q8_a2','$q8_a3','$q8_a4','$correct_option8','$q9','$q9_a1','$q9_a2','$q9_a3','$q9_a4','$correct_option9','$q10','$q10_a1','$q10_a2','$q10_a3','$q10_a4','$correct_option10','$quiz_number');";

		$sql1="INSERT INTO quiz(access_code,username,course_code,quiz_no,text_file) VALUES ('$access_code','$faculty','$department','$quiz_number','$text_file');";
		mysqli_query($connect,$sql1);

		$sql2="INSERT INTO questions(access_code,q1,q2,q3,q4,q5,q6,q7,q8,q9,q10,q1_img,q2_img,q3_img,q4_img,q5_img,q6_img,q7_img,q8_img,q9_img,q10_img) VALUES('$access_code','$q1','$q2','$q3','$q4','$q5','$q6','$q7','$q8','$q9','$q10','$imgs[0]','$imgs[1]','$imgs[2]','$imgs[3]','$imgs[4]','$imgs[5]','$imgs[6]','$imgs[7]','$imgs[8]','$imgs[9]');";
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
			mysqli_query($connect,$sqlx);
		}

			header("Location: login_success_faculty.php?quiz=created");
		
	}
?>

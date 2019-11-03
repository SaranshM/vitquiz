<?php
	include_once 'db_connection.php';
	include_once 'header_login.php';
    if(!($_SESSION['identity']))
    {
        header("Location: login_page.php");
        exit();
    }
    else
    {
    	$course=$_POST['select_course'];
    	$_SESSION['course_to_edit']=$course;
    	$quiz_no=$_POST['quiz_number'];
    	$_SESSION['quiz_no']=$quiz_no;
    	$faculty=$_SESSION['username'];
    	$sql="SELECT text_file FROM quiz WHERE username='$faculty' AND course_code='$course' AND quiz_no='$quiz_no'";
    	$result=mysqli_query($connect,$sql);
    	$file_dest=mysqli_fetch_assoc($result)['text_file'];
    	 $quiz_deets=explode("\n",file_get_contents($file_dest));
    }

?>

<form action="save_editted_quiz.php" method="POST" class="quiz_form">
	
  <div class="inp_f2">
    <p>First question :</p>
    <input type="text" name="q1" class="quiz_input" required autocomplete="off" value="<?php echo $quiz_deets[3]; ?>">
    <br><br>
    <p>Option A :</p>
    <input type="text" name="q1_a1" class="quiz_input" required autocomplete="off" value="<?php echo $quiz_deets[4]; ?>">
    <br><br>
    <p>Option B</p>
    <input type="text" name="q1_a2" class="quiz_input" required autocomplete="off" value="<?php echo $quiz_deets[5]; ?>">
    <br><br>
    <p>Option C</p>
    <input type="text" name="q1_a3" class="quiz_input" required autocomplete="off" value="<?php echo $quiz_deets[6]; ?>">
    <br><br>
    <p>Option D</p>
    <input type="text" name="q1_a4" class="quiz_input" required autocomplete="off" value="<?php echo $quiz_deets[7]; ?>">
    <br><br>
    <p>Correct option</p>
    <select name="correct_option1" required class="quiz_input" autocomplete="off">
        <option value="<?php echo $quiz_deets[8]; ?>" selected hidden><?php echo $quiz_deets[8]; ?></option>
    	<option value="A">A</option>
    	<option value="B">B</option>
    	<option value="C">C</option>
    	<option value="D">D</option>
    </select>
  </div>
  <br>
    <div class="inp_f2">
    <p>Second question :</p>
    <input type="text" name="q2" class="quiz_input" required autocomplete="off" value="<?php echo $quiz_deets[10]; ?>">
    <br><br>
    <p>Option A :</p>
    <input type="text" name="q2_a1" class="quiz_input" required autocomplete="off" value="<?php echo $quiz_deets[11]; ?>">
    <br><br>
    <p>Option B</p>
    <input type="text" name="q2_a2" class="quiz_input" required autocomplete="off" value="<?php echo $quiz_deets[12]; ?>">
    <br><br>
    <p>Option C</p>
    <input type="text" name="q2_a3" class="quiz_input" required autocomplete="off" value="<?php echo $quiz_deets[13]; ?>">
    <br><br>
    <p>Option D</p>
    <input type="text" name="q2_a4" class="quiz_input" required autocomplete="off" value="<?php echo $quiz_deets[14]; ?>">
    <br><br>
    <p>Correct option</p>
    <select name="correct_option2" required class="quiz_input" autocomplete="off">
    	<option value="<?php echo $quiz_deets[15]; ?>" selected hidden><?php echo $quiz_deets[15]; ?></option>
    	<option value="A">A</option>
    	<option value="B">B</option>
    	<option value="C">C</option>
    	<option value="D">D</option>
    </select>
  </div>
	<br>
  <div class="inp_f2">
    <p>Third question :</p>
    <input type="text" name="q3" class="quiz_input" required autocomplete="off" value="<?php echo $quiz_deets[17]; ?>">
    <br><br>
    <p>Option A :</p>
    <input type="text" name="q3_a1" class="quiz_input" required autocomplete="off" value="<?php echo $quiz_deets[18]; ?>">
    <br><br>
    <p>Option B</p>
    <input type="text" name="q3_a2" class="quiz_input" required autocomplete="off" value="<?php echo $quiz_deets[19]; ?>">
    <br><br>
    <p>Option C</p>
    <input type="text" name="q3_a3" class="quiz_input" required autocomplete="off" value="<?php echo $quiz_deets[20]; ?>">
    <br><br>
    <p>Option D</p>
    <input type="text" name="q3_a4" class="quiz_input" required autocomplete="off" value="<?php echo $quiz_deets[21]; ?>">
    <br><br>
    <p>Correct option</p>
    <select name="correct_option3" required class="quiz_input" autocomplete="off">
    	<option value="<?php echo $quiz_deets[22]; ?>" selected hidden><?php echo $quiz_deets[22]; ?></option>
    	<option value="A">A</option>
    	<option value="B">B</option>
    	<option value="C">C</option>
    	<option value="D">D</option>
    </select>
  </div>
	<br>
<div class="inp_f2">
    <p>Fourth question :</p>
    <input type="text" name="q4" class="quiz_input" required autocomplete="off" value="<?php echo $quiz_deets[24]; ?>">
    <br><br>
    <p>Option A :</p>
    <input type="text" name="q4_a1" class="quiz_input" required autocomplete="off" value="<?php echo $quiz_deets[25]; ?>">
    <br><br>
    <p>Option B</p>
    <input type="text" name="q4_a2" class="quiz_input" required autocomplete="off" value="<?php echo $quiz_deets[26]; ?>">
    <br><br>
    <p>Option C</p>
    <input type="text" name="q4_a3" class="quiz_input" required autocomplete="off" value="<?php echo $quiz_deets[27]; ?>">
    <br><br>
    <p>Option D</p>
    <input type="text" name="q4_a4" class="quiz_input" required autocomplete="off" value="<?php echo $quiz_deets[28]; ?>">
    <br><br>
    <p>Correct option</p>
    <select name="correct_option4" required class="quiz_input" autocomplete="off">
    	<option value="<?php echo $quiz_deets[29]; ?>" selected hidden><?php echo $quiz_deets[29]; ?></option>
    	<option value="A">A</option>
    	<option value="B">B</option>
    	<option value="C">C</option>
    	<option value="D">D</option>
    </select>
  </div>
	<br>
<div class="inp_f2">
    <p>Fifth question :</p>
    <input type="text" name="q5" class="quiz_input" required autocomplete="off" value="<?php echo $quiz_deets[31]; ?>">
    <br><br>
    <p>Option A :</p>
    <input type="text" name="q5_a1" class="quiz_input" required autocomplete="off" value="<?php echo $quiz_deets[32]; ?>">
    <br><br>
    <p>Option B</p>
    <input type="text" name="q5_a2" class="quiz_input" required autocomplete="off" value="<?php echo $quiz_deets[33]; ?>">
    <br><br>
    <p>Option C</p>
    <input type="text" name="q5_a3" class="quiz_input" required autocomplete="off" value="<?php echo $quiz_deets[34]; ?>">
    <br><br>
    <p>Option D</p>
    <input type="text" name="q5_a4" class="quiz_input" required autocomplete="off" value="<?php echo $quiz_deets[35]; ?>">
    <br><br>
    <p>Correct option</p>
    <select name="correct_option5" required class="quiz_input" autocomplete="off">
    	<option value="<?php echo $quiz_deets[36]; ?>" selected hidden><?php echo $quiz_deets[36]; ?></option>
    	<option value="A">A</option>
    	<option value="B">B</option>
    	<option value="C">C</option>
    	<option value="D">D</option>
    </select>
  </div>
	<br>
<div class="inp_f2">
    <p>Sixth question :</p>
    <input type="text" name="q6" class="quiz_input" required autocomplete="off" value="<?php echo $quiz_deets[38]; ?>">
    <br><br>
    <p>Option A :</p>
    <input type="text" name="q6_a1" class="quiz_input" required autocomplete="off" value="<?php echo $quiz_deets[39]; ?>">
    <br><br>
    <p>Option B</p>
    <input type="text" name="q6_a2" class="quiz_input" required autocomplete="off" value="<?php echo $quiz_deets[40]; ?>">
    <br><br>
    <p>Option C</p>
    <input type="text" name="q6_a3" class="quiz_input" required autocomplete="off" value="<?php echo $quiz_deets[41]; ?>">
    <br><br>
    <p>Option D</p>
    <input type="text" name="q6_a4" class="quiz_input" required autocomplete="off" value="<?php echo $quiz_deets[42]; ?>">
    <br><br>
    <p>Correct option</p>
    <select name="correct_option6" required class="quiz_input" autocomplete="off">
    	<option value="<?php echo $quiz_deets[43]; ?>" selected hidden><?php echo $quiz_deets[43]; ?></option>
    	<option value="A">A</option>
    	<option value="B">B</option>
    	<option value="C">C</option>
    	<option value="D">D</option>
    </select>
  </div>
	<br>
<div class="inp_f2">
    <p>Seventh question :</p>
    <input type="text" name="q7" class="quiz_input" required autocomplete="off" value="<?php echo $quiz_deets[45]; ?>"> 
    <br><br>
    <p>Option A :</p>
    <input type="text" name="q7_a1" class="quiz_input" required autocomplete="off" value="<?php echo $quiz_deets[46]; ?>">
    <br><br>
    <p>Option B</p>
    <input type="text" name="q7_a2" class="quiz_input" required autocomplete="off" value="<?php echo $quiz_deets[47]; ?>">
    <br><br>
    <p>Option C</p>
    <input type="text" name="q7_a3" class="quiz_input" required autocomplete="off" value="<?php echo $quiz_deets[48]; ?>">
    <br><br>
    <p>Option D</p>
    <input type="text" name="q7_a4" class="quiz_input" required autocomplete="off" value="<?php echo $quiz_deets[49]; ?>">
    <br><br>
    <p>Correct option</p>
    <select name="correct_option7" required class="quiz_input" autocomplete="off">
    	<option value="<?php echo $quiz_deets[50]; ?>" selected hidden><?php echo $quiz_deets[50]; ?></option>
    	<option value="A">A</option>
    	<option value="B">B</option>
    	<option value="C">C</option>
    	<option value="D">D</option>
    </select>
  </div>
<br>
<div class="inp_f2">
    <p>Eighth question :</p>
    <input type="text" name="q8" class="quiz_input" required autocomplete="off" value="<?php echo $quiz_deets[52]; ?>">
    <br><br>
    <p>Option A :</p>
    <input type="text" name="q8_a1" class="quiz_input" required autocomplete="off" value="<?php echo $quiz_deets[53]; ?>">
    <br><br>
    <p>Option B</p>
    <input type="text" name="q8_a2" class="quiz_input" required autocomplete="off" value="<?php echo $quiz_deets[54]; ?>">
    <br><br>
    <p>Option C</p>
    <input type="text" name="q8_a3" class="quiz_input" required autocomplete="off" value="<?php echo $quiz_deets[55]; ?>">
    <br><br>
    <p>Option D</p>
    <input type="text" name="q8_a4" class="quiz_input" required autocomplete="off" value="<?php echo $quiz_deets[56]; ?>">
    <br><br>
    <p>Correct option</p>
    <select name="correct_option8" required class="quiz_input" autocomplete="off">
    	<option value="<?php echo $quiz_deets[57]; ?>" selected hidden><?php echo $quiz_deets[57]; ?></option>
    	<option value="A">A</option>
    	<option value="B">B</option>
    	<option value="C">C</option>
    	<option value="D">D</option>
    </select>
  </div>
	<br>
<div class="inp_f2">
    <p>Ninth question :</p>
    <input type="text" name="q9" class="quiz_input" required autocomplete="off" value="<?php echo $quiz_deets[59]; ?>">
    <br><br>
    <p>Option A :</p>
    <input type="text" name="q9_a1" class="quiz_input" required autocomplete="off" value="<?php echo $quiz_deets[60]; ?>">
    <br><br>
    <p>Option B</p>
    <input type="text" name="q9_a2" class="quiz_input" required autocomplete="off" value="<?php echo $quiz_deets[61]; ?>">
    <br><br>
    <p>Option C</p>
    <input type="text" name="q9_a3" class="quiz_input" required autocomplete="off" value="<?php echo $quiz_deets[62]; ?>">
    <br><br>
    <p>Option D</p>
    <input type="text" name="q9_a4" class="quiz_input" required autocomplete="off" value="<?php echo $quiz_deets[63]; ?>">
    <br><br>
    <p>Correct option</p>
    <select name="correct_option9" required class="quiz_input" autocomplete="off">
    	<option value="<?php echo $quiz_deets[64]; ?>" selected hidden><?php echo $quiz_deets[64]; ?></option>
    	<option value="A">A</option>
    	<option value="B">B</option>
    	<option value="C">C</option>
    	<option value="D">D</option>
    </select>
  </div>
	<br>
<div class="inp_f2">
    <p>Tenth question :</p>
    <input type="text" name="q10" class="quiz_input" required autocomplete="off" value="<?php echo $quiz_deets[66]; ?>">
    <br><br>
    <p>Option A :</p>
    <input type="text" name="q10_a1" class="quiz_input" required autocomplete="off" value="<?php echo $quiz_deets[67]; ?>">
    <br><br>
    <p>Option B</p>
    <input type="text" name="q10_a2" class="quiz_input" required autocomplete="off" value="<?php echo $quiz_deets[68]; ?>">
    <br><br>
    <p>Option C</p>
    <input type="text" name="q10_a3" class="quiz_input" required autocomplete="off" value="<?php echo $quiz_deets[69]; ?>">
    <br><br>
    <p>Option D</p>
    <input type="text" name="q10_a4" class="quiz_input" required autocomplete="off" value="<?php echo $quiz_deets[70]; ?>">
    <br><br>
    <p>Correct option</p>
    <select name="correct_option10" required class="quiz_input" autocomplete="off">
    	<option value="<?php echo $quiz_deets[71]; ?>" selected hidden><?php echo $quiz_deets[71]; ?></option>
    	<option value="A">A</option>
    	<option value="B">B</option>
    	<option value="C">C</option>
    	<option value="D">D</option>
    </select>
  </div>
    <br>
   </div>

<button type="submit" name="submit_quiz" class="submit_signup">SAVE QUIZ</button>

</form>



<?php
	include_once 'footer_login.php';
?>
<?php 
	
	include_once 'header_login.php';
	if(!($_SESSION['identity']))
    {
        header("Location: login_page.php");
        exit();
    }

?>

	<form class="rule_form">

		<h1 style="font-size:250%">Format ( include in your text file ) :</h1>
		<br>

		<p style="color:red">** The file should be a text file ie with an .txt extension. </p>
		<p style="color:red">** 10 questions, each with 4 options.</p>

		
	  	<div class="rules" style="font-size:90% ; line-height: 50%">
	        <p>Course Code ( All in capital letters )</p>
	        <p>Quiz 1 (or) Quiz 2</p>
	        <p>Leave a line</p>
	        <p>First Question</p>
	        <p>First Option</p>
	        <p>Second Option</p>
	        <p>Third Option</p>
	        <p>Fourth Option</p>
	        <p>A / B / C / D</p>
	        <p>Leave a line<p>
	        <p>Second Question</p>
	        <p>So on</p>
      	</div>

      	<p style="color:green"> Example : </p>
      	<br>
      	<br>

      	<img src="images/format.PNG" alt="example" style="width:70% ; border:solid 1px ;">

    </form>

	<form action="create_quiz.php" method="POST" enctype="multipart/form-data" id="upload_form">
		<label for="quiz_file" id="label">Select the text file :</label>
		<br>
		<input type="file" name="quiz_file" id="quiz_file">
		<br>
		<button type="submit" name="submit_file" id="submit_file">Review Quiz</button>
	</form>

<?php

	include_once 'footer_login.php';
?>
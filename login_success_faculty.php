<?php

	include_once 'header_login.php';
	if(!($_SESSION['identity']))
	{
		header("Location: login_page.php");
		exit();
	}
	
	if(isset($_GET['quiz']))
	{
		if($_GET['quiz']=='created')
		{
			echo "<h1 id='quiz_done'>Quiz has been created and can be accessed by your students using the access code.</h1>";
		}
	}


?>

<div class="create_quiz">
	<p class="title_div">Create a quiz for your students.</p>
	<hr>
	<a href="upload_file.php" class="quiz_buttons">CREATE QUIZ</a>
</div>
<div class="view_scores">
	<p class="title_div">View quiz scores of your students.</p>
	<hr>
	<a href="select_course.php" class="quiz_buttons">VIEW SCORES</a>
</div>
<div class="edit_quiz">
	<p class="title_div">Edit one of your quizes.</p>
	<hr>
	<a href="edit_quiz1.php" class="quiz_buttons">EDIT QUIZ</a>
</div>

<?php

	include_once 'footer_login.php';
?>
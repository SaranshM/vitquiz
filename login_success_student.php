<?php

	include_once 'header_login.php';
	if(!($_SESSION['identity']))
	{
		header("Location: login_page.php");
		exit();
	}

?>

<div class="create_quiz" style="position: relative; left:25%;">
	<p class="title_div_stud">Take up a quiz.</p>
	<hr>
	<a href="access_quiz.php" class="quiz_buttons">QUIZ</a>
</div>
<div class="view_scores" style="position: relative; left:25%;">
	<p class="title_div_stud">View your quiz scores.</p>
	<hr>
	<a href="select_course2.php" class="quiz_buttons">SCORES</a>
</div>

<?php

	include_once 'footer_login.php';
?>
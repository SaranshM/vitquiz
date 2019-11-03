<?php
  include_once 'header_login.php';  
  include_once 'db_connection.php';
  if(!($_SESSION['identity']))
  {
    header("Location: login_page.php");
    exit();
  }
  
?>

<form class="rule_form" action="attempt_quiz.php" method="POST">
      <h1 class="rules_title">INSTRUCTIONS</h1>
      <div class="rules">
        <p>1. This is a quiz for the course <?php 
                                                $access_code=$_SESSION['access_code'];
                                                $sql="SELECT course_code FROM quiz WHERE access_code='$access_code';";
                                                $result=mysqli_query($connect,$sql);
                                                $course=mysqli_fetch_assoc($result)['course_code'];
                                                echo $course; 
                                            ?>.</p>
        <p>2. The quiz can only be attempted once.</p>
        <p>3. The quiz will last for 15 minutes.</p>
        <p>4. There will be 10 MCQs in the quiz.</p>
        <p>5. For every correct answer : +1</p>
        <p>6. No negative marking.</p>
        <p>7. Once the quiz is completed, click the 'Submit Quiz' button.</p>
      </div>
      <button type="submit" class="submit_signup" name="start_quiz">Start Quiz</button>
    </form>

    <?php
      include_once 'footer_login.php';
    ?>


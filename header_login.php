<!DOCTYPE html>
  <html>
    <head>
      <title>Welcome</title>
      <link rel="stylesheet" href="css_login.css?version=1">
    </head>
<?php
  session_start();
  if(!($_SESSION['identity']))
  {
    header("Location: login_page.php");
    exit();
  }
  if($_SESSION['identity']=="faculty")
  {
    echo 
    '<header>
      <div id="heading">
        <h1 id="title"><a href="login_success_faculty.php" id="title_link">VIT QUIZ</a></h1>
      </div>
      <div id="nav_bar">
        <nav>
          <a href="acc_details.php">Change Password</a>
          <a href="logout.php">Log Out</a>
        </nav>
      </div>
    </header>
    <body>';
  }
  else
  {
    echo '
    <header>
      <div id="heading">
        <h1 id="title"><a href="login_success_student.php" id="title_link">VIT QUIZ</a></h1>
      </div>
      <div id="nav_bar">
        <nav>
          <a href="acc_details.php">Change Password</a>
          <a href="logout.php">Log Out</a>
        </nav>
      </div>
    </header>
    <body>';
  }
?>
      


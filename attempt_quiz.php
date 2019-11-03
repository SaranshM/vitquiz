<?php
	include_once 'db_connection.php';
	include_once 'header_login.php';
    if(!($_SESSION['identity']))
    {
        header("Location: login_page.php");
        exit();
    }

?>

<script type="text/javascript">

	setTimeout(function(){
		document.getElementsByClassName('quiz_form')[0].submit();
	}, 902000);
</script>

<script type="text/javascript">


function startTimer(duration, display) {
    var timer = duration, minutes, seconds;


    setInterval(function () {
        minutes = parseInt(timer / 60, 10);
        seconds = parseInt(timer % 60, 10);

        minutes = minutes < 10 ? "0" + minutes : minutes;
        seconds = seconds < 10 ? "0" + seconds : seconds;

        display.textContent = minutes + ":" + seconds;

        if (--timer < 0) {
            timer = duration;
        }
        if(minutes<1)
        {
        	shake_dah_booty();
        	document.getElementById('time').style.color="rgb(255,0,0)";
        	document.getElementById('time').style.backgroundImage="-webkit-linear-gradient(top,rgb(255,255,255),rgb(240,240,240))";
        	if(seconds%2==0)
        	{
        		document.getElementById('time').style.border="solid rgb(255,0,0) 1px";
        		


        	}
        	else
        	{
        		document.getElementById('time').style.border="solid rgb(0,0,0) 1px";
        		
        	}
        }
    }, 1000);
}

window.onload = function () {
    var fiveMinutes = 60*15,
        display = document.querySelector('#time');
    startTimer(fiveMinutes, display);
};
</script>

<p id="time">15:00</p>

<form class="quiz_form" action="submit_attempted_quiz.php?time=over" method="POST">
	<?php
		if(isset($_POST['start_quiz']))
		{
			$access_code=$_SESSION['access_code'];
            $sql1="SELECT q1,q2,q3,q4,q5,q6,q7,q8,q9,q10 FROM questions WHERE access_code='$access_code';";
            $result1=mysqli_query($connect,$sql1);
            $qs=mysqli_fetch_assoc($result1);

            $sql2="SELECT q1_img,q2_img,q3_img,q4_img,q5_img,q6_img,q7_img,q8_img,q9_img,q10_img FROM questions WHERE access_code='$access_code';";
            $result2=mysqli_query($connect,$sql2);
            $imgs=mysqli_fetch_assoc($result2);            

            $question=['q1','q2','q3','q4','q5','q6','q7','q8','q9','q10'];

            $image=['q1_img','q2_img','q3_img','q4_img','q5_img','q6_img','q7_img','q8_img','q9_img','q10_img'];

            for($i=0;$i<10;$i++)
            {
                $tempx=$question[$i];
                $sqlx="SELECT a1,a2,a3,a4 FROM $tempx WHERE access_code='$access_code';";
                $resultx=mysqli_query($connect,$sqlx);
                $optionx=mysqli_fetch_assoc($resultx);

                $q_no=$question[$i];
                $q=$qs[$q_no];

                $image_no=$image[$i];
                $f_img=$imgs[$image_no];

                echo "<p class='questions'>".($i+1).". ".$q."</p><br>";
                echo "<img src='".$f_img."' style='width:50% ; margin: 2% 0% 4% 5% ;'><br>";
                echo "<p class='options'>A. ".$optionx['a1']."</p>";
                echo "<p class='options'>B. ".$optionx['a2']."</p>";
                echo "<p class='options'>C. ".$optionx['a3']."</p>";
                echo "<p class='options'>D. ".$optionx['a4']."</p>";
                echo "<select name='correct_option".($i+1)."' required class='quiz_answer' autocomplete='off'>
                <option>Option</option>
                <option value='A'>A</option>
                <option value='B'>B</option>
                <option value='C'>C</option>
                <option value='D'>D</option>
                </select>";
                echo "<hr class='in_quiz'>";

            }
		}
	?>
	<button type="submit" name="submit_attempted_quiz" class="submit_quiz">Submit Quiz</button>
</form>


<?php
	include_once 'footer_login.php';
?>
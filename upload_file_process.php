<?php

	if(isset($_POST['submit_file']))
	{
		$file=$_FILES['quiz_file'];
		
		$file_name=$file['name'];
		$file_tmp_name=$file['tmp_name'];
		$file_error=$file['error'];

		$file_ext_temp=explode('.',$file_name);
		$file_ext=strtolower(end($file_ext_temp));

		if($file_ext=='txt')
		{
			if($file_error===0)
			{
				$file_new_name="quiz".uniqid('',true).".".$file_ext;
				echo $file_new_name."<br>";
				$file_dest="uploads/".$file_new_name;
				move_uploaded_file($file_tmp_name,$file_dest);
				$quiz_deets=explode("\n",file_get_contents($file_dest));
				print_r($quiz_deets);
			}
			else
			{
				header("Location: upload_file.php?error=r_error");		
			}
		}
		else
		{
			header("Location: upload_file.php?error=invalid");
		}
	}

?>
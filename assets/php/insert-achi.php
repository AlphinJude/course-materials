<?php
include ('config.php');
$academic_year=$_POST['academic_year'];
$name=$_POST['name'];
$co_curricular=$_POST['co_curricular'];
$event_name=$_POST['event_name'];
$venue=$_POST['venue'];
$award=$_POST['award'];
$event_date=$_POST['event_date'];
$itemValues=0;
$filename = $_FILES['certificate']['name'];
				$filepath = "../papers/". $filename;
				echo $filepath;
				$extension = pathinfo($filename, PATHINFO_EXTENSION);
				$image = $_FILES['certificate']['tmp_name'];
				//echo 'Test';
                //$filepath = "downloads/";
				if(move_uploaded_file($image, $filepath))
				{
					$itemValues++;
					$sql="INSERT INTO achievements (academic_year,name,co_curricular,event_name,venue,award,a_date,certificate,c_path)VALUES('$academic_year',
                    '$name','$co_curricular','$event_name','$venue','$award','$event_date','$filename','$filepath');";			
					mysqli_query($conn, $sql);
                    echo $sql;
					// $updaterem = "UPDATE regulation_subject SET status_code='1', path='$filepath' WHERE regulation_id='".$_POST['regulation_id']."' AND subject_id='".$_POST["subject_id"][$i]."';";
					// mysqli_query($conn, $updaterem);
				}
if($itemValues==0) {
	echo "<script>
				alert('Item already exists, or you are trying insert empty spaces!');
				window.location = 'achievements.php';
			</script>";
}

else{
	echo "<script>
			alert('Form submitted successfully!');
			window.location = 'achievements.php';
		</script>";
}
?>
<?php
include ('config.php');
$academic_year=$_POST['academic_year'];
$role=$_POST['role'];
$name=$_POST['name'];
$course=$_POST['course'];
$venue=$_POST['venue'];
$duration=$_POST['duration'];
$marks=$_POST['marks'];
$event_date=$_POST['event_date'];
$itemValues=0;
$filename = $_FILES['o_certificate']['name'];
				$filepath = "../papers/". $filename;
				echo $filepath;
				$extension = pathinfo($filename, PATHINFO_EXTENSION);
				$image = $_FILES['o_certificate']['tmp_name'];
				//echo 'Test';
                //$filepath = "downloads/";
				if(move_uploaded_file($image, $filepath))
				{
					$itemValues++;
					$sql="INSERT INTO online_certification (academic_year,o_role,name,course_name,venue,duration,marks,date,o_certificate,path) VALUES
                    ('$academic_year','$role','$name','$course','$venue','$duration','$marks','$event_date','$filename','$filepath');";			
					mysqli_query($conn, $sql);
                    echo $sql;
					// $updaterem = "UPDATE regulation_subject SET status_code='1', path='$filepath' WHERE regulation_id='".$_POST['regulation_id']."' AND subject_id='".$_POST["subject_id"][$i]."';";
					// mysqli_query($conn, $updaterem);
				}
if($itemValues==0) {
	echo "<script>
				alert('Item already exists, or you are trying insert empty spaces!');
				window.location = 'online-certification.php';
			</script>";
}

else{
	echo "<script>
			alert('Form submitted successfully!');
			window.location = 'online-certification.php';
		</script>";
}
?>
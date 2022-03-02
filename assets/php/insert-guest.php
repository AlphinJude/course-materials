<?php
include ('config.php');
$role=$_POST['role'];
$academic_year=$_POST['academic_year'];
$topic=$_POST['topic'];
$date=$_POST['date'];
$duration=$_POST['duration'];
$resource_person=$_POST['resource_person'];
$venue=$_POST['venue'];
$itemValues=0;
$filename = $_FILES['attachments']['name'];
				$filepath = "../papers/". $filename;
				echo $filepath;
				$extension = pathinfo($filename, PATHINFO_EXTENSION);
				$image = $_FILES['attachments']['tmp_name'];
                if(move_uploaded_file($image, $filepath))
				{
                    $itemValues++;
					$sql="INSERT INTO guest_lecture (role,year,topic,date,duration,resource_person,venue,attachments,path) VALUES
                    ('$role','$academic_year','$topic','$date','$duration','$resource_person','$venue','$filename','$filepath');";			
					mysqli_query($conn, $sql);
                    echo $sql;
					// $updaterem = "UPDATE regulation_subject SET status_code='1', path='$filepath' WHERE regulation_id='".$_POST['regulation_id']."' AND subject_id='".$_POST["subject_id"][$i]."';";
					// mysqli_query($conn, $updaterem);
				}
if($itemValues==0) {
    echo "<script>
                alert('Item already exists, or you are trying insert empty spaces!');
                window.location = 'guest-lectures.php';
            </script>";
}

else{
    echo "<script>
            alert('Form submitted successfully!');
            window.location = 'guest-lectures.php';
        </script>";
}                
?>
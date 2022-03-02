<?php
include ('config.php');
$regulation_id=$_POST['regulation_id'];
$itemCount = count($_POST['subject_id']);
$itemValues=0;
for($i=0;$i<$itemCount;$i++) {
	if($_FILES['image']['name'][$i]=="")
	echo (" ");
	else
    echo ($_FILES['image']['name'][$i]);
	{
			$countQuery = "select count(*) from main where regulation_id = '" . $_POST["regulation_id"]  . "' and subject_id = '" . $_POST["subject_id"][$i] . "'";
			$countResult = mysqli_query($conn, $countQuery);
			$countRow=mysqli_fetch_row($countResult);
			$count = $countRow[0];

			if($count == 0){
				$itemValues++;
				$filename = $_FILES['image']['name'][$i];
				$filepath ="../downloads/". $filename;
				// echo $filepath;
				$filepathh ="assets/downloads/".$filename;
				// echo $filepathh;
				// $extension = pathinfo($filename, PATHINFO_EXTENSION);
				$image = $_FILES['image']['tmp_name'][$i];
                // $filepath = "downloads/";
				if(move_uploaded_file($image, $filepath))
				{
                $sql="INSERT INTO main (regulation_id, subject_id,file_name) VALUES ('" . $_POST["regulation_id"] . "','" . $_POST["subject_id"][$i] . "','$filename')";			
				mysqli_query($conn, $sql);
				// echo $sql;
				$updaterem = "UPDATE regulation_subject SET status_code='1', path='$filepathh' WHERE regulation_id='".$_POST['regulation_id']."' AND subject_id='".$_POST["subject_id"][$i]."';";
				mysqli_query($conn, $updaterem);
			}
			}

			else {
				$itemValues++;
				$filename = $_FILES['image']['name'][$i];
   				//$filepath = "downloads/";
				$filepath ="../downloads/". $filename;
				//  echo $filepath;
				$filepathh ="assets/downloads/".$filename;
				//  echo $filepathh;
				//$extension = pathinfo($filename, PATHINFO_EXTENSION);
				$image = $_FILES['image']['tmp_name'][$i];
				if(move_uploaded_file($image, $filepath)){
				

				$update ="UPDATE main SET file_name ='$filename' WHERE regulation_id ='".$_POST['regulation_id']."' AND subject_id='".$_POST["subject_id"][$i]."';";
				mysqli_query($conn, $update);

				$updaterem = "UPDATE regulation_subject SET status_code='2', path='$filepathh' WHERE regulation_id='".$_POST['regulation_id']."' AND subject_id='".$_POST["subject_id"][$i]."';";
				mysqli_query($conn, $updaterem);
			}
		  }
		}

	}
	
if($itemValues!=0) {
	echo "<script>
	alert('File(s) uploaded succesfully!');
	window.location = '../../';
	</script>";
}

else {
echo "<script>
		alert('Error while recording usage! Please try again.');
		window.location = '../../';
	</script>";
}
?>
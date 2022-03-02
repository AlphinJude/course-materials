<?php
	include ('config.php');
	$itemValues=0;
	$academic_year=$_POST['academic_year'];
	$author=$_POST['author'];
	$title=$_POST['title'];
	$journal_name=$_POST['journal_name'];
	$journal_type=$_POST['journal_type'];
	$journal_url=$_POST['journal_url'];
	$impact=$_POST['impact'];
	$doi=$_POST['doi'];
	$issn=$_POST['issn'];
	$issue=$_POST['issue'];
	$volume=$_POST['volume'];
	$page_no=$_POST['page_no'];
	$month=$_POST['month'];
	// $file=$_POST['file'];
	
	$filename = $_FILES['file']['name'];
	$filepath = "../papers/". $filename;
	echo $filepath;
	$extension = pathinfo($filename, PATHINFO_EXTENSION);
	$image = $_FILES['file']['tmp_name'];
	//echo 'Test';
	//$filepath = "downloads/";
	if(move_uploaded_file($image, $filepath))
	{
		$itemValues++;
		$sql="INSERT INTO publication (academic_year,author_name,title,journal_name,journal_type,journal_url,impact_factor,doi,issn,
		issue,volumn,page_no,month_pub,attach_file,path) VALUES 
		('$academic_year','$author','$title','$journal_name','$journal_type','$journal_url','$impact',
		'$doi','$issn','$issue','$volume','$page_no','$month','$filename','$filepath');";
		mysqli_query($conn, $sql);
		// echo $sql;
		// $updaterem = "UPDATE regulation_subject SET status_code='1', path='$filepath' WHERE regulation_id='".$_POST['regulation_id']."' AND subject_id='".$_POST["subject_id"][$i]."';";
		// mysqli_query($conn, $updaterem);
	}
if($itemValues==0) {
	echo "<script>
				alert('Item already exists, or you are trying insert empty spaces!');
				window.location = 'publications.php';
			</script>";
}

else{
	echo "<script>
			alert('Form submitted successfully!');
			window.location = 'publications.php';
		</script>";
}
?>

<?php
      include ('config.php');
      $regulation_id = $_POST['regulation_id'];

      $sem= $_POST['sem'];
      $itemCount = count($_POST["subject_id"]);
      $itemValues=0;
      $query = "INSERT INTO subject (subject_id,subject_name) VALUES ";
      $flag = true;
  
      for($i=0;$i<$itemCount;$i++) {
        if(($_POST["regulation_id"]!='Select Regulation') && ($_POST["sem"]!='Select Semester')){
            if(!empty($_POST["subject_id"][$i])) {
                $trimId=trim($_POST["subject_id"][$i]);
                $trimName=trim($_POST["subject_name"][$i]);
    
                if(($trimId!='')&&($trimName!='')){
                    $countQuery = "select count(*) from subject where subject_id = '" . $trimId . "'";
                    $countResult = mysqli_query($conn, $countQuery);
                    $countRow=mysqli_fetch_row($countResult);
                    $count = $countRow[0];
                    $queryValue = "";
    
                    if($count == 0){
                        $itemValues++;
                        $queryValue = "('" . $trimId . "','" . $trimName . "')";
                        $sql = $query.$queryValue;
                        mysqli_query($conn, $sql);
            
                        $sup = "INSERT INTO regulation_subject (regulation_id,subject_id,sem,status_code,path) VALUES ('$regulation_id','". $trimId ."','$sem','0',NULL);";
                        mysqli_query($conn, $sup);
                        
                        
                    }
                }    
            }
        }
        if (($_POST["regulation_id"]=='Select Regulation') && ($_POST["sem"]=='Select Semester')) {
            $flag = false;
        }
    }
       
if(($_POST["regulation_id"] == 'Select Regulation') && ($_POST["sem"] =='Select Semester')) {
    echo "<script>
                alert('Seems like the Regulation and Semester are not selected.');
                window.location = 'add-sub.php';
            </script>";
}
else if ($flag) {
    echo "<script>
        alert('$itemValues New Subject(s) Added!');
        window.location = 'add-sub.php';
    </script>";
}
else {
    echo "<script>
                alert('Seems like the Regulation and Semester are not selected.');
                window.location = 'add-sub.php';
            </script>";
}
          
?>
      
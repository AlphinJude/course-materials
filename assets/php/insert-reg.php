<?php
    include ('config.php');
    $itemCount = count($_POST["regulation_id"]);
        $itemValues=0;
        $query = "INSERT INTO regulation (regulation_id, regulation_year) VALUES ";

        for($i=0;$i<$itemCount;$i++) {
  
            if(!empty($_POST["regulation_id"][$i])) {
                $trimId=trim($_POST["regulation_id"][$i]);
    
                if(($trimId!='')){
                    $countQuery = "select count(*) from regulation where regulation_id = 'R" . $trimId . "'";
                    $countResult = mysqli_query($conn, $countQuery);
                    $countRow=mysqli_fetch_row($countResult);
                    $count = $countRow[0];
                    $queryValue = "";
    
                    if($count == 0){
                        $itemValues++;
                        $queryValue = "('R" . $trimId . "','" . $trimId . "')";
                        $sql = $query.$queryValue;
                        mysqli_query($conn, $sql);

                       
                    }
                }    
            }
        }
     if($itemValues==0) {
            echo "<script>
                        alert('Regulation already exists, or you are trying insert empty spaces!');
                        window.location = 'add-reg.php';
                    </script>";
        }
        
     else{
            echo "<script>
                    alert('$itemValues New Regulation(s) Added!');
                    window.location = 'add-reg.php';
                </script>";
        }
?>
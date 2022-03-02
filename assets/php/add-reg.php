<?php
    session_start();
    include ('config.php');
?>
<!DOCTYPE html>
<html lang >
<head>
<meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Regulations</title>
      <link rel="icon" href="../icons/favicon.ico" type="image/x-icon">
      <link rel="stylesheet" href="../jquery/export/dataTables.bootstrap4.min.css">
      <link rel="stylesheet" href="../jquery/export/bootstrap.css">
      <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <?php include("header.php"); ?>
    
    <div class="wrapper">
        <div id="add-regulation" class="add-entity-container">
            <button type="button" class="close-button" onclick="closeAddRegulation()">
                <img src="../icons/close.svg" alt="close" id="close-icon">
            </button>
            <form action="insert-reg.php" method="post">
                <div class="input-row">
                    <div id="regulation-input" class="container2">
                        <div class="title">Add Regulation</div>
                        <input type="text" class="inputbox" id="regulation_id" name="regulation_id[]" placeholder="Enter new regulation">
                    </div>
                </div>
                <div class="buttons-container">
                    <button type="button" class="button" onclick="addregulation()">
                        Add More
                    </button>
                    <button type="submit" name="submit" class="button">
                        Insert
                    </button>
                </div>
            </form>
        </div>
        <div class="title">REGULATIONS</div>
        <div class="container1">
            <!-- <form action=""> -->
            <table id="regulation" class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>REGULATION</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        $query = "SELECT * FROM regulation;";
                        
                        $result = mysqli_query($conn, $query);
                        while($row = mysqli_fetch_array($result)) {  
                            echo '<tr>
                                <td>'.$row["regulation_id"].'</td>
                                <td>'.$row["regulation_year"].'</td>
                            </tr>';
                        }
                        $_SESSION["subject_id"]=' ';
                    ?>     
                </tbody>     
            </table>
            <!-- </form> -->
        </div>
        <div class="buttons-container">
            <button type="submit" class="button" name="btn" id="form-submit" onclick="addNewRegulation()">
                Add New Regulation
            </button>
        </div>    
    </div>
    
    <?php include("footer.php"); ?>

    <script src="../js/main.js"></script>
    <script type="text/javascript" src="../jquery/export/jquery-3.5.1.js"></script>
    <script type="text/javascript" src="../jquery/export/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="../jquery/export/dataTables.bootstrap4.min.js"></script>
    <script>
        $(document).ready(function() {
          $('#regulation').DataTable();
        });
    </script>
</body>
</html>
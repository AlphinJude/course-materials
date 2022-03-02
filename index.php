<?php
  session_start();
  error_reporting(0);
  include("assets/php/config.php");
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="theme-color" content="#167436">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Materials</title>
    <link rel="icon" href="assets/icons/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="assets/jquery/export/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="assets/jquery/export/bootstrap.css">
    <link rel="stylesheet" href="assets/css/style.css">
  </head>
  <body>
    <div class="header">
      <img src="assets/images/logo.png" class="img">
    </div>
    <ul class="nav">
      <li>
          <a href="#">Materials</a>
          <ul>
            <li><a href="index.php">Download Materials</a></li>
            <li><a href="assets/php/add-reg.php">Add Regulation</a></li>
            <li><a href="assets/php/add-sub.php">Add Subject</a></li>
            <li><a href="assets/php/achievements.php">Achievements</a></li>
            <li><a href="assets/php/publications.php">Publications</a></li>
            <li><a href="assets/php/online-certification.php">Online Certifications</a></li>
            <li><a href="assets/php/guest-lectures.php">Guest Lectures</a></li>
            <li><a href="assets/php/report.php">Report</a></li>
          </ul>
      </li>
    </ul>
    <!-- <div class="topnav">
      <a href="index.php" class="active">Materials</a>
      <a href="assets/php/add-reg.php">Add Regulation</a>
      <a href="assets/php/add-sub.php">Add Subject</a>
      <a href="assets/php/achievements.php">Achievements</a>
      <a href="assets/php/publications.php">Publications</a>
      <a href="assets/php/online-certification.php">Online Certifications</a>
      <a href="assets/php/guest-lectures.php">Guest Lectures</a>
      <a href="assets/php/report.php">Report</a>
    </div> -->
    <div class="container1">
      <form method="post">
        <div class="input-row">
          <div class="select-regulation selection">
            <label>Regulation</label>
            <select class="inputbox" name= "regulation_id" id="regulation_id">
              <option value="Select Regulation">Select Regulation</option>
              <?php 
                        $query = "SELECT * FROM regulation;";
                        
                        $result = mysqli_query($conn, $query);
                        while($row = mysqli_fetch_array($result)) {  
                            echo '<tr>
                                <td>
                                  <option value="'.$row["regulation_id"].'">'.$row["regulation_year"].'</option>
                                </td>
                            </tr>';
                        }
                        $_SESSION["subject_id"]=' ';
                    ?>     
            </select> 
          </div>

          <div class="select-semester selection">
            <label>Semester</label>
            <select class="inputbox" name="sem" id="sem">
              <option value="Select Semester">Select Semester</option>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
              <option value="6">6</option>
              <option value="7">7</option>
              <option value="8">8</option>
            </select> 
          </div>

          <button type="submit" class="button">
            Get Files
          </button>
        </div>
      </form>
      <div class="details"> 
        <div class="buttons-container">
          <div class="reg-info">
            <span>Regulation</span>
            <span>
              <?php
                $regulation_id = $_POST['regulation_id'];
                $_SESSION["regulation_id"]=' ';
                $regulation = explode("R",$regulation_id);
                echo '<input type="text" value="'.$regulation[1].'" disabled>';
              ?>
            </span>
          </div>
          <div class="sem-info">
            <span>Semester</span>
            <span>
              <?php
                $sem = $_POST['sem'];
                echo '<input type="text" value="'.$sem.'" disabled>';
                
              ?>
              
            </span>
          </div>
        </div>
      </div>
      <form action='assets/php/update.php' method='post' enctype="multipart/form-data" >
        <?php
          echo'
          <input type="text" value="'.$_POST['regulation_id'].'" name="regulation_id" hidden>';
        ?>
        <div class="table-responsive"> 
          <table id="materials" class="table table-striped table-bordered files-table">
            <thead>
              <tr>
                <th>CODE</th>
                <th>COURSE NAME</th>
                <th>STATUS</th>
                <th>EDIT FILES</th>
              </tr>
            </thead>
            <tbody>
              <?php 
                $_SESSION["regulation_id"]='';
                $regulation_id = $_POST['regulation_id'];
                $sem = $_POST['sem'];

                if($_SESSION["regulation_id"]==$regulation_id and $_SESSION["sem"]==$sem){}

                $query = "SELECT rs.path,rs.subject_id, 
                            s.subject_name, rs.status_code, si.status 
                            FROM ((regulation_subject as rs
                              INNER JOIN subject as s
                                  ON rs.subject_id = s.subject_id)
                                  INNER JOIN status_info as si
                                  ON rs.status_code = si.status_code) WHERE regulation_id='$regulation_id' AND sem='$sem'
                                  group by subject_id;";
              
                $result = mysqli_query($conn, $query);
                while($row = mysqli_fetch_array($result)) {  
                  if($row["path"]=="") {
                    echo '  
                      <tr>  
                      <td>
                      <input type="text" class="input-box" name="subject_id[]" id="subject_id" value="'.$row["subject_id"].'" readonly="readonly">
                      </td>
                          <td>'.$row["subject_name"].'</td>
                      <td class="status">
                      <input type="text" class="input-box" name="" value="'.$row["status"].'" readonly>
                      </td>
                      <td>
                      <input type="file"  name="image[]" id="file_name">
                      </td>

                      </tr>
                    ';  
                  }
                  else {
                      echo '  
                      <tr>  
                        <td>
                        <input type="text" class="input-box" name="subject_id[]" id="subject_id" value="'.$row["subject_id"].'" readonly>
                        </td>
                        <td>
                          <a href="'.$row["path"].'" download>
                            <button type="button" class="download-button">
                              <img src="assets/icons/file-download.svg" class="download-icon">
                              <p>'.$row["subject_name"].'</p>
                            </button>
                          </a>
                        </td>
                        <td class="status">
                          <input type="text" class="input-box" name="" value="'.$row["status"].'" readonly>
                        </td>
                        <td>
                          <input type="file" class="input-box" name="image[]" id="file_name">
                        </td>
                      </tr>  
                      ';  
                  }
                }
                $_SESSION["subject_id"]=' ';
              ?>     
            </tbody>     
          </table>
        </div>
        <?php
          echo '
            <div class="buttons-container">
              <button type="submit" class="button" name="btn" id="form-submit">
                Update
              </button>
            </div>
          ';
        ?>
      </form>
    </div>
    <?php include("assets/php/footer.php"); ?>
    <!-- <script type="text/javascript" src="main.js"></script> -->
    <script type="text/javascript" src="assets/jquery/export/jquery-3.5.1.js"></script>
    <script type="text/javascript" src="assets/jquery/export/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="assets/jquery/export/dataTables.bootstrap4.min.js"></script>
    <script>
        $(document).ready(function() {
          $('#materials').DataTable();
        });
    </script>
  </body>
</html>
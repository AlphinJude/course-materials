<!DOCTYPE html>
<?php
    session_start();
    error_reporting(0);
    include("config.php");
?>
<html lang="en">
    <head>
    <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Subjects</title>
        <link rel="icon" href="../icons/favicon.ico" type="image/x-icon">
        <link rel="stylesheet" href="../jquery/export/dataTables.bootstrap4.min.css">
        <link rel="stylesheet" href="../jquery/export/bootstrap.css">
        <link rel="stylesheet" href="../css/style.css">
    </head>
    <body>
        <?php include("header.php"); ?>
        <div class="wrapper">
            <form method="post">
                <div class="input-row">
                <div class="select-regulation">
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
                                    </tr>
                                ';
                            }
                            $_SESSION["subject_id"]=' ';
                        ?>
                    </select> 
                </div>

                <div class="select-semester">
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
                    Get Subjects
                </button>
                </div>
            </form>

            <div class="title">SUBJECTS</div>
            <div class="container1">
                <?php
                    echo'
                        <input type="text" value="'.$_POST['regulation_id'].'" name="regulation_id" hidden>
                    ';
                ?>

                <table id="subjects-table" class="table table-striped table-bordered files-table">
                    <thead>
                        <tr>
                            <th>CODE</th>
                            <th>COURSE NAME</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        $_SESSION["regulation_id"]='';
                        $regulation_id = $_POST['regulation_id'];
                        $sem = $_POST['sem'];

                        if($_SESSION["regulation_id"]==$regulation_id and $_SESSION["sem"]==$sem){}

                        $query = "SELECT rs.subject_id, 
                                    s.subject_name
                                    FROM ((regulation_subject as rs
                                        INNER JOIN subject as s
                                            ON rs.subject_id = s.subject_id)
                                            INNER JOIN status_info as si
                                            ON rs.status_code = si.status_code) WHERE regulation_id='$regulation_id' AND sem='$sem'
                                            group by subject_id;";
                        
                        $result = mysqli_query($conn, $query);
                        while($row = mysqli_fetch_array($result)) {  
                            echo '  
                                <tr>  
                                    <td>
                                    <input type="text" class="input-box" name="subject_id[]" id="subject_id" value="'.$row["subject_id"].'" readonly>
                                    </td>
                                    <td>'.$row["subject_name"].'</td>
                                </tr>
                            ';  
                        }
                        $_SESSION["subject_id"]=' ';
                        ?>     
                    </tbody>     
                </table>
            </div>
            <div class="buttons-container">
                <button type="submit" class="button" name="btn" id="form-submit" onclick="addNewSubject()">
                    Add New Subject
                </button>
            </div>  

            <div id="add-subject" class="add-entity-container">
                <form action="insert-sub.php" method="post">

                    <button type="button" class="close-button" onclick="closeAddSubject()">
                        <img src="../icons/close.svg" alt="close" id="close-icon">
                    </button>

                    <?php
                        echo'
                            <input type="text" value="'.$_POST['regulation_id'].'" name="regulation_id" hidden>
                            <input type="text" value="'.$_POST['sem'].'" name="sem" hidden>
                        ';
                    ?>

                    <div class="title">Add New Subject</div>
                    <div class="container1">
                        <table id="subjects" class="table">
                            <thead>
                                <tr>
                                    <th>SUBJECT ID</th>
                                    <th>SUBJECT NAME</th>
                                </tr>
                            </thead>
                            <tbody id="add-subject-table">
                                <tr>
                                    <td>
                                        <input type="text" id="subject_id" class="inputbox" name="subject_id[]" placeholder="Enter Subject Id" required>
                                    </td>
                                    <td>
                                        <input type="text" id="subject_name" class="inputbox" name="subject_name[]" placeholder="Enter Subject Name" required>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="buttons-container">
                        <button type="button" id="add-item" class="button" name="add-item" onclick="addItemRow()">
                            Add More
                        </button>
                        <button type="submit" class="button" name="update" value="">
                            Insert
                        </button>
                    </div>
                </form>
            </div>
        </div>

        <?php include("footer.php"); ?>
        
        <script type="text/javascript" src="../js/main.js"></script>
        <script type="text/javascript" src="../jquery/export/jquery-3.5.1.js"></script>
        <script type="text/javascript" src="../jquery/export/jquery.dataTables.min.js"></script>
        <script type="text/javascript" src="../jquery/export/dataTables.bootstrap4.min.js"></script>
        <script>
            $(document).ready(function() {
                $('#subjects-table').DataTable();
            });
        </script>
    </body>
</html>
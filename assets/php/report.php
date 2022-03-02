<?php
   session_start();
   error_reporting(0);
   include("config.php"); 
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Report</title>
        <link rel="icon" href="../icons/favicon.ico" type="image/x-icon">
        <link rel="stylesheet" href="../jquery/export/dataTables.bootstrap4.min.css">
        <link rel="stylesheet" href="../jquery/export/bootstrap.css">
        <link rel="stylesheet" href="../css/style.css">
    </head>
    <body>
        <?php include('header.php');?>
        <div class="wrapper">
            <div class="container">
                <h1 class="title">REPORT</h1>
                <form action="" method="post" enctype="multipart/form-data">
                    <div id="report-input" class="input-row">
                        <div class="selection">
                            <label>Academic Year</label>
                            <select class="inputbox" name="academic_year" id="academic-year">
                            <option value="Select Academic Year">Select Regulation</option>
                            <?php
                                $query = "SELECT DISTINCT g.year FROM guest_lecture g
                                UNION
                                SELECT DISTINCT onc.academic_year from online_certification onc
                                UNION 
                                SELECT DISTINCT a.academic_year from achievements a
                                UNION
                                SELECT DISTINCT pub.academic_year from publication pub;";
                                
                                $result = mysqli_query($conn, $query);
                                while($row = mysqli_fetch_array($result)) {  
                                    echo '<option value="'.$row["year"].'">'.$row["year"].'</option>';
                                }
                            ?>     
                            </select> 
                        </div>
                        <div class="selection">
                            <label>Report Type</label>
                            <select class="inputbox" name="report" id="report">
                                <option value="Select Report Type">Select Report Type</option>
                                <option value="1">Achievements</option>
                                <option value="2">Guest Lecture</option>
                                <option value="3">Online Certification</option>
                                <option value="4">Publication</option>
                            </select> 
                        </div>
                        <button type="submit" class="button">
                            Generate Report
                        </button>
                    </form>
                </div>
                <div id="report-box" class="container1">
                    <?php 
                        $_SESSION["academic_year"]='';
                        $academic_year=$_POST['academic_year'];
                        //   echo $_SESSION["academic_year"];
                        //   echo $academic_year;
                        $report=$_POST['report'];
                        // echo $report;
                        if($report=='1') {
                                echo '
                                    <h1 class="table-title">Achievements - Report</h1>
                                    <div class="table-responsive"> 
                                        <table id="achievements-table" class="table table-striped table-bordered files-table">
                                            <thead>
                                                <tr>
                                                    <th>ACADEMIC YEAR</th>
                                                    <th>STUDENT NAME</th>
                                                    <th>CO - CURRICULAR</th>
                                                    <th>EVENT NAME</th>
                                                    <th>VENUE</th>
                                                    <th>AWARD</th>
                                                    <th>DATE</th>
                                                    <th>CERTIFICATE</th>
                                                </tr>
                                            </thead>
                                            <tbody>';
                                                $query = "SELECT * FROM achievements WHERE academic_year='$academic_year';";
                                                $result = mysqli_query($conn, $query);

                                                while($row = mysqli_fetch_array($result)) {  
                                                    echo '
                                                        <tr>  
                                                            <td>'.$row["academic_year"].'</td>
                                                            <td>'.$row["name"].'</td>
                                                            <td>'.$row["co_curricular"].'</td>
                                                            <td>'.$row["event_name"].'</td>
                                                            <td>'.$row["venue"].'</td>
                                                            <td>'.$row["award"].'</td>
                                                            <td>'.$row["a_date"].'</td>
                                                            <td>'.$row["certificate"].'</td>
                                                        </tr>  
                                                    ';
                                                }
                                    echo'
                                            </tbody>     
                                        </table>
                                    </div>
                                ';
                            } else if($report=='2') {
                                echo '
                                    <h1 class="table-title">Guest Lectures - Report</h1>
                                    <div class="table-responsive"> 
                                        <table id="guest-lectures-table" class="table table-striped table-bordered files-table">
                                            <thead>
                                                <tr>
                                                    <th>Role</th>
                                                    <th>Academic year</th>
                                                    <th>Topic</th>
                                                    <th>Date</th>
                                                    <th>Duration</th>
                                                    <th>Resource Person</th>
                                                    <th>Venue</th>
                                                    <th>Attachments</th>
                                                </tr>
                                            </thead>
                                            <tbody>';
                                                $query = "SELECT * FROM guest_lecture  WHERE year='$academic_year';";
                                                $result = mysqli_query($conn, $query);

                                                while($row = mysqli_fetch_array($result)) {  
                                                    echo '
                                                        <tr>  
                                                            <td>'.$row["role"].'</td>
                                                            <td>'.$row["year"].'</td>
                                                            <td>'.$row["topic"].'</td>
                                                            <td>'.$row["date"].'</td>
                                                            <td>'.$row["duration"].'</td>
                                                            <td>'.$row["resource_person"].'</td>
                                                            <td>'.$row["venue"].'</td>
                                                            <td>'.$row["attachments"].'</td>
                                                        </tr>  
                                                    ';
                                            }
                                echo'
                                            </tbody>     
                                        </table>
                                    </div>
                                ';
                            } else if($report=='3') {
                                echo '
                                    <h1 class="table-title">Online Certifications / FDP - Report</h1>
                                    <div class="table-responsive"> 
                                        <table id="online-certifications-table" class="table table-striped table-bordered files-table">
                                            <thead>
                                                <tr>
                                                    <th>Academic year</th>
                                                    <th>Role</th>
                                                    <th>Name</th>
                                                    <th>Course Name</th>
                                                    <th>Venue</th>
                                                    <th>Duration</th>
                                                    <th>Marks</th>
                                                    <th>Date</th>
                                                    <th>Certificate</th>
                                                </tr>
                                            </thead>
                                            <tbody>';
                                                $query = "SELECT * FROM online_certification WHERE academic_year='$academic_year';";
                                                $result = mysqli_query($conn, $query);

                                                while($row = mysqli_fetch_array($result)) {  
                                                    echo '
                                                        <tr>  
                                                            <td>'.$row["academic_year"].'</td>
                                                            <td>'.$row["o_role"].'</td>
                                                            <td>'.$row["name"].'</td>
                                                            <td>'.$row["course_name"].'</td>
                                                            <td>'.$row["venue"].'</td>
                                                            <td>'.$row["duration"].'</td>
                                                            <td>'.$row["marks"].'</td>
                                                            <td>'.$row["date"].'</td>
                                                            <td>'.$row["o_certificate"].'</td>
                                                        </tr>  
                                                    ';
                                            }
                                echo'
                                            </tbody>     
                                        </table>
                                    </div>
                                ';
                            } else if($report=='4'){
                                echo '
                                    <h1 class="table-title">Publications - Report</h1>
                                    <div class="table-responsive"> 
                                        <table id="publications-table" class="table table-striped table-bordered files-table">
                                            <thead>
                                                <tr>
                                                    <th>Academic year</th>
                                                    <th>Author Name</th>
                                                    <th>Title</th>
                                                    <th>Journal Name</th>
                                                    <th>Journal Type</th>
                                                    <th>Journal URL</th>
                                                    <th>Impact Factor</th>
                                                    <th>DOI</th>
                                                    <th>ISSN</th>
                                                    <th>Issue</th>
                                                    <th>Volume</th>
                                                    <th>No Of Pages</th>
                                                    <th>Month</th>
                                                    <th>File</th>
                                                </tr>
                                            </thead>
                                            <tbody>';
                                                $query = "SELECT * FROM publication WHERE academic_year='$academic_year';";
                                                $result = mysqli_query($conn, $query);

                                                while($row = mysqli_fetch_array($result)) {  
                                                    echo '
                                                        <tr>  
                                                            <td>'.$row["academic_year"].'</td>
                                                            <td>'.$row["author_name"].'</td>
                                                            <td>'.$row["title"].'</td>
                                                            <td>'.$row["journal_name"].'</td>
                                                            <td>'.$row["journal_type"].'</td>
                                                            <td>'.$row["journal_url"].'</td>
                                                            <td>'.$row["impact_factor"].'</td>
                                                            <td>'.$row["doi"].'</td>
                                                            <td>'.$row["issn"].'</td>
                                                            <td>'.$row["issue"].'</td>
                                                            <td>'.$row["volumn"].'</td>
                                                            <td>'.$row["page_no"].'</td>
                                                            <td>'.$row["month_pub"].'</td>
                                                            <td>'.$row["attach_file"].'</td>
                                                        </tr>  
                                                    ';
                                            }
                                echo'
                                            </tbody>     
                                        </table>
                                    </div>
                                ';
                            } else 
                                echo '
                                    <h1 class="table-title">Please choose credientials to generate report.</h1>
                                ';
                            
                    ?>
                </div>
            </div>
        </div>
        <?php include('footer.php'); ?>
    
        <script type="text/javascript" src="../js/main.js"></script>
        <script type="text/javascript" src="../jquery/export/jquery-3.5.1.js"></script>
        <script type="text/javascript" src="../jquery/export/jquery.dataTables.min.js"></script>
        <script type="text/javascript" src="../jquery/export/dataTables.bootstrap4.min.js"></script>
        <script>
            $(document).ready(function() {
                $('#achievements-table').DataTable();
                // $('#online-certifications-table').DataTable();
                $('#guest-lectures-table').DataTable();
                $('#publications-table').DataTable();
                
                

                $('#online-certifications-table').DataTable({
                    dom: 'Bfrtip',
                    buttons: [
                        'copy', 'csv', 'excel', 'pdf', 'print'
                    ]
                });
            });
        </script>
    </body>
</html>
<?php
    session_start();
    include("config.php");
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Online Certification</title>
        <link rel="icon" href="../icons/favicon.ico" type="image/x-icon">
        <link rel="stylesheet" href="../jquery/export/bootstrap.css">
        <link rel="stylesheet" href="../css/style.css">
    </head>
  
    <body>
        <?php include('header.php'); ?>
        <div class="wrapper">
            <div class="container">
                <h1 class="title">ONLINE CERTIFICATION / FDP</h1>
                <form action="insert-online.php" method="post" enctype="multipart/form-data">
                <div class="details">
                    <div class="input-row">
                            <label for="academic_year">Academic Year </label>
                            <input type="text" id="academic_year" class="inputbox" name="academic_year" placeholder="Example: 2021-2022" required/> 
                    </div>
                    <div class="input-row">
                        <label for="select_role">Role</label>
                        <select class="inputbox" name="role" id="role" required>
                            <option value="Select Role">Select Role</option>
                            <option value="faculty">Faculty</option>
                            <option value="student">Student</option>
                        </select> 
                    </div>
                    <div class="input-row">
                        <label for="name">Name</label>
                        <input type="text" id="name" class="inputbox" name="name" placeholder="Enter your name" required>
                    </div>
                    <div class="input-row">
                        <label for="course">Course / FDP Name</label>
                        <input type="text" id="course" class="inputbox" name="course" placeholder="Enter course title / FDP name" required>
                    </div>
                    <div class="input-row">
                        <label for="duration">Platform / Venue</label>
                        <input type="text" id="venue" class="inputbox" name="venue" placeholder="Enter online platform / FDP venue" required>
                    </div>
                    <div class="input-row">
                        <label for="duration">Duration</label>
                        <input type="text" id="duration" class="inputbox" name="duration" placeholder="Enter course / FDP duration" required>
                    </div>
                    <div class="input-row">
                        <label for="marks">Marks</label>
                        <input type="number" id="marks" class="inputbox" name="marks" placeholder="Enter marks" required>
                    </div>
                    <div class="input-row">
                        <label for="event_date">Date</label for="event_date">
                        <input type="date" id="event_date" class="inputbox" name="event_date" placeholder="Enter event date" required>
                    </div>
                    <div class="input-row">
                        <label for="o_certificate">Certificate</label>
                        <input type="file" id="o_certificate" class="inputbox" name="o_certificate" placeholder="Enter certificate" required>
                    </div>
                </div>
                <div class="buttons-container">
                        <button type="submit" class="button">
                            Submit
                        </button>
                    </div>
                </form>
            </div>
        </div>
        <?php include('footer.php'); ?>
    </body>
</html>






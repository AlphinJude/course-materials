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
                <h1 class="title">GUEST LECTURE</h1>
                <form action="insert-guest.php" method="post" enctype="multipart/form-data">
                <div class="details">
                <div class="input-row">
                        <label for="select_role">Select Role</label>
                        <select class="inputbox" name="role" id="role" required>
                            <option value="Select Role">Select Role</option>
                            <option value="academic">Academic</option>
                            <option value="industry">Industry</option>
                            <option value="alumini">Alumini</option>
                            <option value="resource">Acted as a resource person</option>
                        </select> 
                    </div>
                    <div class="input-row">
                        <label for="academic_year">Academic Year </label>
                        <input type="text" id="academic_year" class="inputbox" name="academic_year" placeholder="Example: 2021-2022" required>
                    </div>
                    <div class="input-row">
                        <label for="topic">Topic</label>
                        <input type="text" id="topic" class="inputbox" name="topic" placeholder="Enter topic of the lecture" required>
                    </div>
                    <div class="input-row">
                        <label for="date">Date</label>
                        <input type="date" id="lecture-date" class="inputbox" name="date" placeholder="Pick date" required>
                    </div>
                    <div class="input-row">
                        <label for="duration">Duration</label>
                        <input type="text" id="duration" class="inputbox" name="duration" placeholder="Enter duration" required>
                    </div>
                    <div class="input-row">
                        <label for="resource_person">Resource Person</label>
                        <input type="text" id="resource_person" class="inputbox" name="resource_person" placeholder="Enter the name of the resource person" required>
                    </div>
                    <div class="input-row">
                        <label for="venue">Venue</label>
                        <input type="text" id="venue" class="inputbox" name="venue" placeholder="Enter venue" required>
                    </div>
                    <div class="input-row">
                        <label for="attachments">Attachments</label>
                        <input type="file" id="attachments" class="inputbox" name="attachments" placeholder="Attach files" required>
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
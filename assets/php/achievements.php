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
        <title>Achievements</title>
        <link rel="icon" href="../icons/favicon.ico" type="image/x-icon">
        <link rel="stylesheet" href="../jquery/export/bootstrap.css">
        <link rel="stylesheet" href="../css/style.css">
    </head>
  
    <body>
        <?php include('header.php'); ?> 
        <div class="wrapper">
            <div class="container">
                <h1 class="title">ACHIEVEMENTS</h1>
                <form action="insert-achi.php" method="post" enctype="multipart/form-data">
                    <div class="details">   
                        <div class="input-row">
                                <label for="academic_year">Academic year </label>
                                <input type="text" id="academic_year" class="inputbox" name="academic_year" placeholder="Example: 2021-2022"/> 
                        </div>
                        <div class="input-row">
                            <label for="name">Name</label>
                            <input type="text" id="name" class="inputbox" name="name" placeholder="Enter name" required>
                        </div>
                        <div class="input-row">
                            <label for="co_curricular">Co Curricular</label>
                            <input type="text" id="co_curricular" class="inputbox" name="co_curricular" placeholder="Enter co-curricular" required>
                        </div>
                        <div class="input-row">
                            <label for="event_name">Event Name</label>
                            <input type="text" id="event_name" class="inputbox" name="event_name" placeholder="Enter event name" required>
                        </div>
                        <div class="input-row">
                            <label for="venue">Venue</label>
                            <input type="text" id="venue" class="inputbox" name="venue" placeholder="Enter venue" required>
                        </div>
                        <div class="input-row">
                            <label for="award">Award</label>
                            <input type="text" id="award" class="inputbox" name="award" placeholder="Enter award" required>
                        </div>
                        <div class="input-row">
                            <label for="event_date">Date</label>
                            <input type="date" id="event_date" class="inputbox" name="event_date" placeholder="Enter event date" required>
                        </div> 
                        <div class="input-row">
                            <label for="certificate">Upload Certificate</label>
                            <input type="file" id="certificate" class="inputbox" name="certificate" placeholder="Upload certificate" required>
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







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
        <title>Publications</title>
        <link rel="icon" href="../icons/favicon.ico" type="image/x-icon">
        <link rel="stylesheet" href="../jquery/export/bootstrap.css">
        <link rel="stylesheet" href="../css/style.css">
    </head>

    <body>
        <?php include('header.php'); ?>
        <div class="wrapper">
            <div class="container">
                <h1 class="title">PUBLICATIONS</h1>
                <form action="insert-pub.php" method="post" enctype="multipart/form-data">
                    <div class="details">
                        <div class="input-row">
                            <label for="academic_year">Academic Year </label>
                            <input type="text" id="academic_year" class="inputbox" name="academic_year" placeholder="Example: 2021-2022" required/> 
                        </div>
                        <div class="input-row">        
                            <label for="author">Author's Name</label>
                            <input type="text" id="author" class="inputbox" name="author" placeholder="Enter author name" required>
                        </div>
                        <div class="input-row">
                            <label for="title">Title</label>
                            <input type="text" id="title" class="inputbox" name="title" placeholder="Enter title" required>
                        </div>
                        <div class="input-row">
                            <label for="journal_name">Journal Name</label>
                            <input type="text" id="journal_name" class="inputbox" name="journal_name" placeholder="Enter journal name" required>
                        </div>
                        <div class="input-row">
                            <label for="journal_type">Journal Type</label>
                            <input type="text" id="journal_type" class="inputbox" name="journal_type" placeholder="Enter journal type" required>
                        </div>
                        <div class="input-row">
                            <label for="doi">Journal URL</label>
                            <input type="text" id="journal_url" class="inputbox" name="journal_url" placeholder="Enter journal URL" required>
                        </div>
                        <div class="input-row">
                            <label for="impact">Impact Factor</label>
                            <input type="text" id="impact" class="inputbox" name="impact" placeholder="Enter impact factor" required>
                        </div>
                        <div class="input-row">
                            <label for="doi">DOI</label>
                            <input type="text" id="doi" class="inputbox" name="doi" placeholder="Enter DOI" required>
                        </div>
                        <div class="input-row">
                            <label for="issn">ISSN</label>
                            <input type="text" id="issn" class="inputbox" name="issn" placeholder="ISSN here" required>
                        </div>
                        <div class="input-row">
                            <label for="issue">Issue</label>
                            <input type="text" id="issue" class="inputbox" name="issue" placeholder="Enter issue" required>
                        </div>
                        <div class="input-row">
                            <label for="volume">Volume</label>
                            <input type="number" id="volumn" class="inputbox" name="volume" placeholder="Enter volume" required>
                        </div>
                        <div class="input-row">
                            <label for="page_no">Page No</label>
                            <input type="number" id="page_no" class="inputbox" name="page_no" placeholder="Enter page no" required>
                        </div>
                        <div class="input-row">
                            <label for="month">Month Of Publication</label>
                            <input type="month" id="month" class="inputbox" name="month" placeholder="Enter month" required>
                        </div>
                        <div class="input-row">
                            <label for="file">File</label>
                            <input type="file" id="file" class="inputbox" name="file" min="1900" max="2099" step="1" value="2021" placeholder="Enter academic year"> 
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
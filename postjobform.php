<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Post a Job Vacancy</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
   <div class="header-background"></div>
  <div class="header-background1"></div>


<div class="area" >
            <ul class="circles">
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
            </ul>
    </div >

    <div class="container">
        <h1>Post a Job Vacancy</h1>
        <form action="postjobprocess.php" method="post">
            <label for="position_id">Position ID:</label>
            <input type="text" id="position_id" name="position_id" maxlength="5" pattern="ID[0-9]{3}" title="Must start with 'ID' followed by three digits (e.g., ID001)" required>

            <label for="title">Title:</label>
            <input type="text" id="title" name="title" maxlength="10" required>

            <label for="description">Description:</label>
            <textarea id="description" name="description" maxlength="250" required></textarea>

            <label for="closing_date">Closing Date:</label>
            <input type="text" id="closing_date" name="closing_date" value="<?php echo date('d/m/y'); ?>" required>

            <label>Position:</label>
            <input type="radio" name="position" value="Full Time" required> Full Time
            <input type="radio" name="position" value="Part Time" required> Part Time

            <label>Contract:</label>
            <input type="radio" name="contract" value="On-going" required> On-going
            <input type="radio" name="contract" value="Fixed Term" required> Fixed Term

            <label>Location:</label>
            <input type="radio" name="location" value="On site" required> On site
            <input type="radio" name="location" value="Remote" required> Remote

            <label>Accept Application by:</label>
            <input type="checkbox" name="accept_post" value="Post"> Post
            <input type="checkbox" name="accept_email" value="Email"> Email

            <input type="submit" value="Submit">
        </form>
        <p><a href="index.php">Return to Home Page</a></p>
    </div>
</body>
</html>

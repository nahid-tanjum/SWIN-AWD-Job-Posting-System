<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Search Job Vacancies</title>
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
        <h1>Search Job Vacancies</h1>
        <form action="searchjobprocess.php" method="get">
            <label for="search_title">Job Title:</label>
            <input type="text" id="search_title" name="search_title">

            <h3>Advanced Search Criteria</h3>

            <label for="search_position">Position:</label>
            <select id="search_position" name="search_position">
                <option value="">Any</option>
                <option value="Full Time">Full Time</option>
                <option value="Part Time">Part Time</option>
            </select>

            <label for="search_contract">Contract:</label>
            <select id="search_contract" name="search_contract">
                <option value="">Any</option>
                <option value="On-going">On-going</option>
                <option value="Fixed Term">Fixed Term</option>
            </select>

            <label for="search_application">Accept Application By:</label>
            <select id="search_application" name="search_application">
                <option value="">Any</option>
                <option value="Post">Post</option>
                <option value="Email">Email</option>
            </select>

            <label for="search_location">Location:</label>
            <select id="search_location" name="search_location">
                <option value="">Any</option>
                <option value="On site">On site</option>
                <option value="Remote">Remote</option>
            </select>

            <input type="submit" value="Search">
        </form>
        <p><a href="index.php">Return to Home Page</a></p>
    </div>
</body>
</html>

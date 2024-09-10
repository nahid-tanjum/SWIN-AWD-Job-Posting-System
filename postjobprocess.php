<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post Job</title>
    <link rel="stylesheet" href="style.css"> <!-- Adjust the path accordingly -->
<style>

label {
  color: white;
  font-size: 1.5rem;
}
input {
  width: 4rem;
  height: 4rem;
  cursor: pointer;
}

.confetti-container {
  user-select: none;
  z-index: 10;
}
.confetti {
  position: fixed;
  left: 0;
  right: 0;
  display: flex;
  /* width: 600px; */
  /* height: 600px; */
  /* overflow: hidden; */
}

.confetti .square {
  width: 1rem;
  height: 1rem;
  background-color: var(--bg);
  transform: rotate(-140deg);
}

.confetti .rectangle {
  width: 1rem;
  height: 0.5rem;
  background-color: var(--bg);
}

.confetti .hexagram {
  width: 0;
  height: 0;
  border-left: 0.5rem solid transparent;
  border-right: 0.5rem solid transparent;
  border-bottom: 1rem solid var(--bg);
  position: relative;
}

.confetti .hexagram:after {
  content: "";
  width: 0;
  height: 0;
  border-left: 0.5rem solid transparent;
  border-right: 0.5rem solid transparent;
  border-top: 1rem solid var(--bg);
  position: absolute;
  top: 0.33rem;
  left: -0.5rem;
}

.confetti .pentagram {
  width: 0rem;
  height: 0rem;
  display: block;
  margin: 0.5rem 0;
  border-right: 1rem solid transparent;
  border-bottom: 0.7rem solid var(--bg);
  border-left: 1rem solid transparent;
  transform: rotate(35deg);
  position: relative;
}
.confetti .pentagram:before {
  content: "";
  width: 0;
  height: 0;
  display: block;
  border-bottom: 0.8rem solid var(--bg);
  border-left: 0.3rem solid transparent;
  border-right: 0.3rem solid transparent;
  transform: rotate(-35deg);
  position: absolute;
  top: -0.45rem;
  left: -0.65rem;
}
.confetti .pentagram:after {
  content: "";
  width: 0rem;
  height: 0rem;
  display: block;
  border-right: 1rem solid transparent;
  border-bottom: 0.7rem solid var(--bg);
  border-left: 1rem solid transparent;
  transform: rotate(-70deg);
  position: absolute;
  top: 0.03rem;
  left: -1.05rem;
}

.confetti .dodecagram {
  background: var(--bg);
  width: 0.8rem;
  height: 0.8rem;
  position: relative;
}

.confetti .dodecagram:before {
  content: "";
  height: 0.8rem;
  width: 0.8rem;
  background: var(--bg);
  transform: rotate(30deg);
  position: absolute;
  top: 0;
  left: 0;
}
.confetti .dodecagram:after {
  content: "";
  height: 0.8rem;
  width: 0.8rem;
  background: var(--bg);
  transform: rotate(60deg);
  position: absolute;
  top: 0;
  left: 0;
}

.confetti .wavy-line {
  position: relative;
}
.confetti .wavy-line::after,
.confetti .wavy-line::before {
  content: "";
  height: 1rem;
  width: 8rem;
  background-size: 2rem 1rem;
  position: absolute;
  left: -9rem;
  transform: rotate(90deg);
}

.confetti .wavy-line::before {
  background-image: linear-gradient(
    45deg,
    transparent,
    transparent 50%,
    var(--bg) 50%,
    transparent 60%
  );
  top: 1rem;
}
.confetti .wavy-line::after {
  background-image: linear-gradient(
    -45deg,
    transparent,
    transparent 50%,
    var(--bg) 50%,
    transparent 60%
  );
}

.confetti i {
  width: 3rem;
  height: 3rem;
  margin: 0 0.2rem;
  animation-name: confetti;
  animation-timing-function: linear;
  animation-iteration-count: infinite;
  animation-duration: calc(70s / var(--speed));
}

.confetti i:nth-child(even) {
  transform: rotate(90deg);
}

@keyframes confetti {
  0% {
    transform: translateY(-100vh);
  }

  100% {
    transform: translateY(100vh);
  }
}</style>
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

<div class="confetti-container">
      <div class="confetti">
        <i style="--speed: 10; --bg: yellow" class="square"></i>
        <i style="--speed: 18; --bg: white" class="pentagram"></i>
        <i style="--speed: 29; --bg: green" class="rectangle"></i>
        <i style="--speed: 17; --bg: blue" class="hexagram"></i>
        <i style="--speed: 33; --bg: red" class="pentagram"></i>
        <i style="--speed: 26; --bg: yellow" class="dodecagram"></i>
        <i style="--speed: 24; --bg: pink" class="wavy-line"> </i>
        <i style="--speed: 5; --bg: blue" class="wavy-line"></i>
        <i style="--speed: 40; --bg: white" class="square"></i>
        <i style="--speed: 17; --bg: green" class="rectangle"></i>
        <i style="--speed: 25; --bg: white" class="square"></i>
        <i style="--speed: 18; --bg: green" class="rectangle"></i>
        <i style="--speed: 15; --bg: yellow" class="wavy-line"> </i>
        <i style="--speed: 32; --bg: yellow" class="pentagram"></i>
        <i style="--speed: 25; --bg: white" class="square"></i>
        <i style="--speed: 18; --bg: green" class="rectangle"></i>
        <i style="--speed: 37; --bg: yellow" class="dodecagram"></i>
        <i style="--speed: 23; --bg: pink" class="wavy-line"></i>
        <i style="--speed: 37; --bg: red" class="dodecagram"></i>
        <i style="--speed: 37; --bg: pink" class="wavy-line"></i>
        <i style="--speed: 36; --bg: white" class="hexagram"></i>
        <i style="--speed: 32; --bg: green" class="wavy-line"></i>
        <i style="--speed: 32; --bg: yellow" class="pentagram"></i>
        <i style="--speed: 29; --bg: white" class="square"></i>
        <i style="--speed: 18; --bg: green" class="rectangle"></i>
        <i style="--speed: 37; --bg: red" class="dodecagram"></i>
        <i style="--speed: 23; --bg: pink" class="wavy-line"> </i>
        <i style="--speed: 30; --bg: pink" class="rectangle"></i>
        <i style="--speed: 30; --bg: red" class="square"></i>
        <i style="--speed: 18; --bg: red" class="pentagram"></i>
        <i style="--speed: 19; --bg: green" class="rectangle"></i>
        <i style="--speed: 16; --bg: blue" class="hexagram"></i>
        <i style="--speed: 23; --bg: red" class="pentagram"></i>
        <i style="--speed: 34; --bg: yellow" class="dodecagram"></i>
        <i style="--speed: 39; --bg: pink" class="wavy-line"></i>
        <i style="--speed: 40; --bg: purple" class="square"></i>
        <i style="--speed: 21; --bg: green" class="rectangle"></i>
        <i style="--speed: 14; --bg: white" class="square"></i>
        <i style="--speed: 38; --bg: green" class="rectangle"></i>
        <i style="--speed: 19; --bg: red" class="dodecagram"></i>
        <i style="--speed: 29; --bg: pink" class="wavy-line"> </i>
        <i style="--speed: 21; --bg: white" class="hexagram"></i>
        <i style="--speed: 17; --bg: purple" class="wavy-line"></i>
        <i style="--speed: 32; --bg: yellow" class="pentagram"></i>
        <i style="--speed: 23; --bg: white" class="square"></i>
        <i style="--speed: 18; --bg: green" class="rectangle"></i>
        <i style="--speed: 37; --bg: red" class="dodecagram"></i>
        <i style="--speed: 48; --bg: pink" class="wavy-line"> </i>
        <i style="--speed: 38; --bg: pink" class="rectangle"></i>
        <i style="--speed: 13; --bg: red" class="pentagram"></i>
        <i style="--speed: 49; --bg: yellow" class="dodecagram"></i>
        <i style="--speed: 19; --bg: cyan" class="wavy-line"></i>
        <i style="--speed: 15; --bg: steelblue" class="square"></i>
        <i style="--speed: 10; --bg: yellow" class="square"></i>
        <i style="--speed: 18; --bg: white" class="pentagram"></i>
        <i style="--speed: 29; --bg: green" class="rectangle"></i>
        <i style="--speed: 17; --bg: blue" class="hexagram"></i>
        <i style="--speed: 33; --bg: red" class="pentagram"></i>
        <i style="--speed: 26; --bg: yellow" class="dodecagram"></i>
        <i style="--speed: 24; --bg: pink" class="wavy-line"> </i>
        <i style="--speed: 5; --bg: white" class="wavy-line"></i>
        <i style="--speed: 40; --bg: purple" class="square"></i>
        <i style="--speed: 17; --bg: green" class="rectangle"></i>
        <i style="--speed: 25; --bg: white" class="square"></i>
        <i style="--speed: 18; --bg: green" class="rectangle"></i>
        <i style="--speed: 15; --bg: cyan" class="wavy-line"> </i>
        <i style="--speed: 32; --bg: yellow" class="pentagram"></i>
        <i style="--speed: 45; --bg: white" class="square"></i>
        <i style="--speed: 18; --bg: green" class="rectangle"></i>
        <i style="--speed: 37; --bg: red" class="dodecagram"></i>
        <i style="--speed: 23; --bg: pink" class="wavy-line"> </i>
        <i style="--speed: 37; --bg: red" class="dodecagram"></i>
        <i style="--speed: 37; --bg: pink" class="wavy-line"> </i>
        <i style="--speed: 26; --bg: white" class="hexagram"></i>
        <i style="--speed: 32; --bg: cyan" class="wavy-line"></i>
        <i style="--speed: 32; --bg: yellow" class="pentagram"></i>
        <i style="--speed: 45; --bg: white" class="square"></i>
        <i style="--speed: 18; --bg: green" class="rectangle"></i>
        <i style="--speed: 37; --bg: red" class="dodecagram"></i>
        <i style="--speed: 23; --bg: pink" class="wavy-line"> </i>
        <i style="--speed: 50; --bg: pink" class="rectangle"></i>
        <i style="--speed: 30; --bg: red" class="square"></i>
        <i style="--speed: 18; --bg: red" class="pentagram"></i>
        <i style="--speed: 19; --bg: green" class="rectangle"></i>
        <i style="--speed: 16; --bg: blue" class="hexagram"></i>
        <i style="--speed: 23; --bg: red" class="pentagram"></i>
        <i style="--speed: 33; --bg: yellow" class="dodecagram"></i>
        <i style="--speed: 39; --bg: white" class="wavy-line"></i>
        <i style="--speed: 40; --bg: orange" class="square"></i>
        <i style="--speed: 21; --bg: green" class="rectangle"></i>
        <i style="--speed: 14; --bg: white" class="square"></i>
        <i style="--speed: 38; --bg: green" class="rectangle"></i>
        <i style="--speed: 19; --bg: red" class="dodecagram"></i>
        <i style="--speed: 29; --bg: pink" class="wavy-line"> </i>
        <i style="--speed: 34; --bg: white" class="hexagram"></i>
        <i style="--speed: 17; --bg: indigo" class="wavy-line"></i>
        <i style="--speed: 32; --bg: yellow" class="pentagram"></i>
        <i style="--speed: 23; --bg: white" class="square"></i>
        <i style="--speed: 18; --bg: green" class="rectangle"></i>
        <i style="--speed: 37; --bg: red" class="dodecagram"></i>
        <i style="--speed: 48; --bg: pink" class="wavy-line"> </i>
        <i style="--speed: 38; --bg: pink" class="rectangle"></i>
        <i style="--speed: 13; --bg: red" class="pentagram"></i>
        <i style="--speed: 49; --bg: yellow" class="dodecagram"></i>
        <i style="--speed: 19; --bg: purple" class="wavy-line"></i>
        <i style="--speed: 15; --bg: cyan" class="square"></i>
      </div>
    </div>


<?php
// Retrieve form data
$position_id = $_POST['position_id'];
$title = $_POST['title'];
$description = $_POST['description'];
$closing_date = $_POST['closing_date'];
$position = $_POST['position'];
$contract = $_POST['contract'];
$location = $_POST['location'];
$accept_post = isset($_POST['accept_post']) ? 'Post' : '';
$accept_email = isset($_POST['accept_email']) ? 'Email' : '';

// Validate all fields
if(empty($position_id) || empty($title) || empty($description) || empty($closing_date) || empty($position) || empty($contract) || empty($location)) {
    echo "<div class='container'><p>All fields are required. <a href='postjobform.php'>Try again</a>.</p></div>";
    exit();
}

// Validate Position ID pattern
if (!preg_match("/^ID[0-9]{3}$/", $position_id)) {
    echo "<div class='container'><p>Invalid Position ID format. It must start with 'ID' followed by three digits. <a href='postjobform.php'>Try again</a>.</p></div>";
    exit();
}

// Validate date format (dd/mm/yy)
if (!preg_match("/^\d{2}\/\d{2}\/\d{2}$/", $closing_date)) {
    echo "<div class='container'><p>Invalid date format. Use dd/mm/yy. <a href='postjobform.php'>Try again</a>.</p></div>";
    exit();
}

// Define a relative path for the directory
$dir = __DIR__ . "/../../data/jobs";
if (!is_dir($dir)) {
    if (!mkdir($dir, 0777, true)) {
        echo "<div class='container'><p>Failed to create directory. Please check directory permissions. <a href='postjobform.php'>Try again</a>.</p></div>";
        exit();
    }
}

// Check the uniqueness of Position ID
$file_path = "$dir/positions.txt";
if (file_exists($file_path)) {
    $file = fopen($file_path, "r");
    if ($file) {
        while ($line = fgets($file)) {
            $data = explode("\t", $line);
            if ($data[0] == $position_id) {
                echo "<div class='container'><p>Position ID must be unique. <a href='postjobform.php'>Try again</a>.</p></div>";
                fclose($file);
                exit();
            }
        }
        fclose($file);
    }
}

// Save data to text file
$file = fopen($file_path, "a");
if ($file) {
    $data = "$position_id\t$title\t$description\t$closing_date\t$position\t$contract\t$location\t$accept_post\t$accept_email\n";
    fwrite($file, $data);
    fclose($file);
    echo "<div class='container'><p>Job vacancy posted successfully. <a href='index.php'>Return to Home Page</a>.</p></div>";
} else {
    echo "<div class='container'><p>Failed to open the file. Please check file permissions. <a href='postjobform.php'>Try again</a>.</p></div>";
}
?>
</body>
</html>
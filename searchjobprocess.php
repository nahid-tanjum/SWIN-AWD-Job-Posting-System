<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post Job</title>
    <link rel="stylesheet" href="style.css"> <!-- Adjust the path accordingly -->
    <script src="https://cdn.jsdelivr.net/npm/canvas-confetti@1.5.1/dist/confetti.min.js"></script>

<style>label {
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


    <div class="area">
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
    </div>


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
// Retrieve search criteria from the form
$search_title = isset($_GET['search_title']) ? $_GET['search_title'] : '';
$search_position = isset($_GET['search_position']) ? $_GET['search_position'] : '';
$search_contract = isset($_GET['search_contract']) ? $_GET['search_contract'] : '';
$search_application = isset($_GET['search_application']) ? $_GET['search_application'] : '';
$search_location = isset($_GET['search_location']) ? $_GET['search_location'] : '';

// Validate the existence of the "positions.txt" file
$file_path = __DIR__ . "/../../data/jobs/positions.txt";
if (!file_exists($file_path)) {
    echo "<div class='container'><p>Job data file does not exist. <a href='index.php'>Return to Home Page</a>.</p></div>";
    exit();
}

// Get today's date in the same format as the closing date field
$today = date('d/m/y');

// Open the file for reading
$file = fopen($file_path, "r");
$results = [];

// Search through the file line by line
while ($line = fgets($file)) {
    $data = explode("\t", trim($line));

    // Handle missing fields gracefully by using a ternary operator or default values
    $position_id = isset($data[0]) ? $data[0] : '';
    $title = isset($data[1]) ? $data[1] : '';
    $description = isset($data[2]) ? $data[2] : '';
    $closing_date = isset($data[3]) ? $data[3] : '';
    $position = isset($data[4]) ? $data[4] : '';
    $contract = isset($data[5]) ? $data[5] : '';
    $location = isset($data[6]) ? $data[6] : '';
    $accept_post = isset($data[7]) ? $data[7] : '';
    $accept_email = isset($data[8]) ? $data[8] : '';

    // Convert the closing date and today's date into DateTime objects for comparison
    $closing_date_object = DateTime::createFromFormat('d/m/y', $closing_date);
    $today_object = DateTime::createFromFormat('d/m/y', $today);

    // Check if the job's closing date is later than or equal to today
    if ($closing_date_object < $today_object) {
        continue; // Skip job vacancies that have closed before today
    }

    // Check if each search criteria matches the data
    $matches = true;

    if ($search_title && stripos($title, $search_title) === false) {
        $matches = false;
    }
    if ($search_position && $position != $search_position) {
        $matches = false;
    }
    if ($search_contract && $contract != $search_contract) {
        $matches = false;
    }
    if ($search_application) {
        $application_match = false;
        if ($search_application == "Post" && $accept_post == "Post") {
            $application_match = true;
        }
        if ($search_application == "Email" && $accept_email == "Email") {
            $application_match = true;
        }
        if (!$application_match) {
            $matches = false;
        }
    }
    if ($search_location && $location != $search_location) {
        $matches = false;
    }

    if ($matches) {
        $results[] = $data;
    }
}

fclose($file);

// Sort results by closing date from most future to today
usort($results, function($a, $b) {
    $date_a = DateTime::createFromFormat('d/m/y', isset($a[3]) ? $a[3] : '');
    $date_b = DateTime::createFromFormat('d/m/y', isset($b[3]) ? $b[3] : '');

    if ($date_a == $date_b) return 0;
    return ($date_a < $date_b) ? 1 : -1;
});

// Display results
echo "<div class='container'>";
if (empty($results)) {
    echo "<p>No job vacancies found. <a href='searchjobform.php'>Try again</a>.</p>";
} else {
    echo "<h1>Search Results</h1>";
    foreach ($results as $result) {
        $position_id = isset($result[0]) ? $result[0] : '';
        $title = isset($result[1]) ? $result[1] : '';
        $description = isset($result[2]) ? $result[2] : '';
        $closing_date = isset($result[3]) ? $result[3] : '';
        $position = isset($result[4]) ? $result[4] : '';
        $contract = isset($result[5]) ? $result[5] : '';
        $location = isset($result[6]) ? $result[6] : '';
        $accept_post = isset($result[7]) ? $result[7] : '';
        $accept_email = isset($result[8]) ? $result[8] : '';

        echo "<div class='result'>";
        echo "<p><strong>Position ID:</strong> $position_id</p>";
        echo "<p><strong>Title:</strong> $title</p>";
        echo "<p><strong>Description:</strong> $description</p>";
        echo "<p><strong>Closing Date:</strong> $closing_date</p>";
        echo "<p><strong>Position:</strong> $position</p>";
        echo "<p><strong>Contract:</strong> $contract</p>";
        echo "<p><strong>Location:</strong> $location</p>";
        echo "<p><strong>Accept Application By:</strong> " . ($accept_post ? "Post " : "") . ($accept_email ? "Email" : "") . "</p>";
        echo "</div><hr>";
    }
    echo "<p><a href='searchjobform.php'>Return to Search</a></p>";
    echo "<p><a href='index.php'>Return to Home Page</a></p>";
    
}
echo "</div>";
?>

</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laboratory Activity No. 7</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
define('NAME', 'Kristine Agcay Chan');
define('STUDENT_NUMBER', '2021-08104-MN-0');
define('ADDRESS', 'San, Agustin, San Jose, Occidental Mindoro');
define('EMAILADDRESS', 'chankristineagcay@gmail.com');
define('CONTACTNUMBER', '09056403292');
define('WEBADDRESS', 'kristineachan@iskolarngbayan.pup.edu.ph');
define('LABTITLE', 'Laboratory Activity No. 8');
define('DESCRIPTION', 'String Functions in PHP');

$school = 'POLYTECHNIC UNIVERSITY OF THE PHILIPPINES';
$course = 'Bachelor of Science in Computer Engineering';
$yearlevel = '3rd Year';
$dateofbirth = 'July, 2003';
$gender = 'Female';
?>

<!-- Header Section -->
<header>
    <h1><?php echo NAME; ?></h1>
    <p>Student Number: <?php echo STUDENT_NUMBER; ?></p>
    <p>School: <?php echo $school; ?></p>
    <p>Course: <?php echo $course; ?></p>
    <p>Lab Title: <?php echo LABTITLE; ?></p>
</header>

    <nav>
		<ul>
		 <li><a href="lab1.php">Hello World</a></li>
		 <li><a href="lab2.php">Creating Basic PHP Script</a></li>
		 <li><a href="lab3.php">Working with Data Types and Operators</a></li>
		 <li><a href="lab4.php">Functions and Control Structures</a></li>
		 <li><a href="lab5.php">Functions and Control Structures - Magic Square</a></li>
		 <li><a href="lab6.php">String Functions in PHP</a></li>
         <li><a href="lab7.php">Regular Expression</a></li>
         <li><a href="lab8.php">Array Manipulations – Word Counter</a></li>
         <li><a href="lab9.php">Handling User Input – User Registration</a></li>
         <li><a href="lab10.php">Handling User Input – Dynamic Page</a></li>
		 <li><a href="lab11.php">Managing State Information Using Session – Login Page</a></li>
         <li><a href="lab12.php"> Managing State Information Using Cookies – Login Page</a></li>
         <li><a href="lab13.php"> Sending Email</a></li>

		</ul>
    </nav>

<!-- Content Section -->
<section id="content">
    <h1>Array Manipulations – Word Counter</h1>
    <?php
$text = (isset($_POST['text'])) ? $_POST['text'] : '';

if (isset($_POST['reset'])) {
    $text = ''; 
}

echo '<form method="post">';
echo '<label for="text-input" id="text-label" class="input-text">Enter text:</label>';
echo '<textarea name="text" style="width:500px; padding: 5px;"></textarea>';
echo '</textarea><br />';
echo '<input type="submit" class="process-btn" name="submit" value="Process">&nbsp;';
echo '<input type="submit" class="reset-btn"  name="reset" value="Reset">&nbsp;'; 
echo '</form>';

$text = preg_replace('/[^a-zA-Z0-9 ]/', '', trim($text));


$colors = [
    '#00CCFF', '#FFD700', '#FF69B4', '#00FF00', '#8A2BE2',
    '#00FFFF', '#DC143C', '#FF8C00', '#C0C0C0', '#FF4500',
    '#FFA07A', '#00CED1', '#7FFF00', '#DDA0DD', '#3CB371',
    '#9370DB', '#2E8B57', '#8B008B', '#20B2AA', '#00FF7F'
];
if ($text != '') {
    $text = strtolower($text);

    $allwords = explode(' ', $text);

    $uniquewordlist = array_unique($allwords);

    sort($uniquewordlist);

    if (reset($uniquewordlist) == '') {
        $deleteditem = array_shift($uniquewordlist);
    }

    foreach ($uniquewordlist as $word) $counter[$word] = 0;
    $totalwords = 0;
    foreach ($allwords as $word) {
        if ($word != '') {
            $counter[$word]++;
            $totalwords++;
        }
    }

    echo '<table border=1 style="width:500px">';
    echo '<tr><td colspan=4 align=center>Array Manipulation - Word Counter</td></tr>';
    echo '<tr><td>No.</td><td>Word</td><td>Frequency</td><td>Percent</td></tr>';
    $i = 1;
    foreach ($uniquewordlist as $word) {
        $color = current($colors);

        $length = number_format($counter[$word] / $totalwords * 100.00, 2);
        echo '<tr>';
        echo '<td>', $i, '.</td>';
        echo '<td>', $word, '</td>';
        echo '<td>', $counter[$word], '</td>';
        echo '<td style="background:', $color, '">', $length, '%</td>';
        echo '</tr>';

        next($colors);
        if (current($colors) === false) {
            reset($colors);
        }
        $i++;
    }
    echo '</table>';
}
?>

</section>


<footer>
    <p>&copy; <?php echo date("Y"); ?> CHAN, Kristine A.. All rights reserved.</p>
</footer>

</body>
</html>

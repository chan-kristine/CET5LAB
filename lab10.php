<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laboratory Activity No. 10</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
define('NAME', 'Kristine Agcay Chan');
define('STUDENT_NUMBER', '2021-08104-MN-0');
define('ADDRESS', 'San Agustin, San Jose, Occidental Mindoro');
define('EMAILADDRESS', 'chankristineagcay@gmail.com');
define('CONTACTNUMBER', '09056403292');
define('WEBADDRESS', 'kristineachan@iskolarngbayan.pup.edu.ph');
define('LABTITLE', 'Laboratory Activity No. 10');
define('DESCRIPTION', 'Handling User Input - Dynamic Page');

$school = 'POLYTECHNIC UNIVERSITY OF THE PHILIPPINES';
$course = 'Bachelor of Science in Computer Engineering';
$yearlevel = '3rd Year';
$dateofbirth = 'July 01, 2003';
$gender = 'Female';

?>
	
	<?php
	$myinteger = 10;
	$myfloat = 10.57;
	$mystring = '10 apples';
	$myboolean = true;
	$mynull = null;
	$myarray = array(1, 2, 3);
	?>

  <!-- Header Section -->
<header>
    <h1><?php echo NAME; ?></h1>
    <p>Student Number: <?php echo STUDENT_NUMBER; ?></p>
    <p>School: <?php echo $school; ?></p>
    <p>Course: <?php echo $course; ?></p>
    <p>Lab Title: <?php echo LABTITLE; ?></p>


</header>

    <!-- Navigation Section -->
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

    <?php
    $links = array(
        'lab10_home.php'    => 'Home',
        'lab10_vision.php'  => 'Vision',
        'lab10_mission.php' => 'Mission',
        'lab10_history.php' => 'History',
    );

    echo '<table width=100% border=1>';
    // navigation section
    echo '<tr><td>';
    echo '<img src="logo.png" alt="Logo" class="logo">';
    foreach ($links as $key => $value)
        echo '&nbsp;<a href="?page=', $key, '"> ', $value, ' </a>&nbsp;';
    echo '</td></tr>';

    // dynamic content
    echo '<tr><td>';
    if (isset($_GET['page'])) {
        $page = $_GET['page'];
        if (is_readable($page))
            include_once($page);
        else
            echo 'File <strong>', $page, '</strong> not found!';
    } else {
        reset($links);
        include_once(key($links));
    }
    echo '</td></tr>';
    echo '</table>';
    ?>

</section>


<footer>
    <p>&copy; <?php echo date("Y"); ?> CHAN, Kristine A.. All rights reserved.</p>
</footer>

</body>
</html>
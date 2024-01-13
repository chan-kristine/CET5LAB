<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laboratory Activity No. 2</title>
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
    define('LABTITLE', 'Laboratory Activity No. 2');
    define('DESCRIPTION', 'Creating Basic PHP Script');
	?>
	
	<?php
	$school = 'POLYTECHNIC UNIVERSITY OF THE PHILIPPINES';
	$course = 'Bachelor of Science in Computer Engineering';
	$yearlevel = '3rd Year';
	$dateofbirth = 'July 01, 2003';
	$gender = 'Female';
	?>

<body>
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
    <section>
        <h2><?php echo LABTITLE; ?></h2>
        <p><?php echo DESCRIPTION; ?></p>

        <?php
        // Variables
        $school = 'POLYTECHNIC UNIVERSITY OF THE PHILIPPINES';
        $course = 'Bachelor of Science in Computer Engineering';
        $yearlevel = '3rd Year';
        $dateofbirth = 'July 01, 2003';
        $gender = 'Female';

        // Output
        echo '<table width="95%" border="1" style="border-collapse: collapse;">';
        echo '<tr><td colspan="2"><strong>My Academic Information</strong></td></tr>';
        echo '<tr><td>School</td><td>', $school, '</td></tr>';
        echo '<tr><td>Course</td><td>', $course, '</td></tr>';
        echo '<tr><td>Year Level</td><td>', $yearlevel, '</td></tr>';
        echo '<tr><td>Date of Birth</td><td>', $dateofbirth, '</td></tr>';
        echo '<tr><td>Sex</td><td>', $gender, '</td></tr>';
        echo '</table>';
        ?>
    </section>

    <!-- Footer Section -->
    <footer>
        <p>&copy; <?php echo date('Y'); ?> <?php echo NAME; ?> :: Rundate <?php echo date('m/d/Y'); ?></p>
    </footer>

</body>

</html>

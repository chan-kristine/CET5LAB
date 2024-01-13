<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laboratory Activity No. 3</title>
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
    define('LABTITLE', 'Laboratory Activity No. 3');
    define('DESCRIPTION', 'Working with Data Types and Operators');
	?>
	
	<?php
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
			echo '<table width="95%" border=1 style="border-collapse: collapse;">';
			echo '<tr><td colspan=2><strong>My Academic Information</strong></td></tr>';
			echo '<tr><td>School</td><td>', $school, '</td></tr>';
			echo '<tr><td>Course</td><td>', $course, '</td></tr>';
			echo '<tr><td>Year Level</td><td>', $yearlevel, '</td></tr>';
			echo '<tr><td>Date of Birth</td><td>', $dateofbirth, '</td></tr>';
			echo '<tr><td>Sex</td><td>', $gender, '</td></tr>';
			echo '</table>'
        ?>
		
		 <h2 id=data-types>1. PHP Data Types</h2>
        <table border="1">
            <?php
                // 1a. $myinteger
                echo '<tr><td>1a. $myinteger</td><td>', var_dump($myinteger), '</td></tr>';
                // 1b. $myfloat
                echo '<tr><td>1b. $myfloat</td><td>', var_dump($myfloat), '</td></tr>';
                // 1c. $mystring
                echo '<tr><td>1c. $mystring</td><td>', var_dump($mystring), '</td></tr>';
                // 1d. $myboolean
                echo '<tr><td>1d. $myboolean</td><td>', var_dump($myboolean), '</td></tr>';
                // 1e. $mynull
                echo '<tr><td>1e. $mynull</td><td>', var_dump($mynull), '</td></tr>';
                // 1f. $myarray
                echo '<tr><td>1f. $myarray</td><td>', var_dump($myarray), '</td></tr>';
                // 1g. $myinteger == $mystring
                echo '<tr><td>1g. $myinteger == $mystring</td><td>', var_dump($myinteger == $mystring), '</td></tr>';
                // 1h. $myinteger === $mystring
                echo '<tr><td>1h. $myinteger === $mystring</td><td>', var_dump($myinteger === $mystring), '</td></tr>';
            ?>
        </table>

        <h2>2. PHP Arithmetic Operators</h2>
        <table border="1">
            <?php
                // 2a. $myinteger + 10
                echo '<tr><td>2a. $myinteger + 10</td><td>', var_dump($myinteger + 10), '</td></tr>';
                // 2b. $myinteger - 5
                echo '<tr><td>2b. $myinteger - 5</td><td>', var_dump($myinteger - 5), '</td></tr>';
                // 2c. $myinteger * 2
                echo '<tr><td>2c. $myinteger * 2</td><td>', var_dump($myinteger * 2), '</td></tr>';
                // 2d. $myinteger / 3
                echo '<tr><td>2d. $myinteger / 3</td><td>', var_dump($myinteger / 3), '</td></tr>';
                // 2e. $myboolean + 1
                echo '<tr><td>2e. $myboolean + 1</td><td>', var_dump($myboolean + 1), '</td></tr>';
                // 2f. $mystring * 2
                echo '<tr><td>2f. $mystring * 2</td><td>', var_dump($mystring * 2), '</td></tr>';
            ?>
        </table>

        <h2>3. PHP Bitwise Operators</h2>
        <table border="1">
            <?php
                // 3a. $myinteger & 8
                echo '<tr><td>3a. $myinteger & 8</td><td>', var_dump($myinteger & 8), '</td></tr>';
                // 3b. $myinteger | 8
                echo '<tr><td>3b. $myinteger | 8</td><td>', var_dump($myinteger | 8), '</td></tr>';
                // 3c. $myinteger << 1
                echo '<tr><td>3c. $myinteger << 1</td><td>', var_dump($myinteger << 1), '</td></tr>';
                // 3d. $myinteger >> 1
                echo '<tr><td>3d. $myinteger >> 1</td><td>', var_dump($myinteger >> 1), '</td></tr>';
            ?>
        </table>

        <h2>4. PHP Comparison Operators</h2>
        <table border="1">
            <?php
                // 4a. $myinteger == 10
                echo '<tr><td>4a. $myinteger == 10</td><td>', var_dump($myinteger == 10), '</td></tr>';
                // 4b. $myinteger > 10
                echo '<tr><td>4b. $myinteger > 10</td><td>', var_dump($myinteger > 10), '</td></tr>';
                // 4c. $myinteger >= 10
                echo '<tr><td>4c. $myinteger >= 10</td><td>', var_dump($myinteger >= 10), '</td></tr>';
                // 4d. $myinteger < 20
                echo '<tr><td>4d. $myinteger < 20</td><td>', var_dump($myinteger < 20), '</td></tr>';
                // 4e. $myinteger <= 20
                echo '<tr><td>4e. $myinteger <= 20</td><td>', var_dump($myinteger <= 20), '</td></tr>';
                // 4f. $myinteger == $mystring
                echo '<tr><td>4f. $myinteger == $mystring</td><td>', var_dump($myinteger == $mystring), '</td></tr>';
                // 4g. $myinteger === $mystring
                echo '<tr><td>4g. $myinteger === $mystring</td><td>', var_dump($myinteger === $mystring), '</td></tr>';	
			?>
		</table>
	</section>

    <!-- Footer Section -->
    <footer>
    <p>&copy; <?php echo date("Y"); ?> CHAN, Kristine A.. All rights reserved.</p>
    </footer>

    <!-- JavaScript files -->
    <script>
        document.getElementById("studentName").innerHTML = "New Student Name";
    </script>
</body>
</html>

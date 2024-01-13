<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laboratory Activity No. 6</title>
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
define('LABTITLE', 'Laboratory Activity No. 6');
define('DESCRIPTION', 'String Functions in PHP');

$school = 'POLYTECHNIC UNIVERSITY OF THE PHILIPPINES';
$course = 'Bachelor of Science in Computer Engineering';
$yearlevel = '3rd Year';
$dateofbirth = 'July 01, 2003';
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
    <h1>String Functions in PHP</h1>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
    <input type="text" name="string" value="<?php echo isset($_POST['string']) ? htmlspecialchars($_POST['string']) : ''; ?>"><br /><br />
    <input type="submit" value="Apply Functions">
    <input type="submit" value="    Reset    "></td>
</form>

    <?php
    if (isset($_POST['string'])) {
        $string = $_POST['string'];

        echo '<h2>String Functions Results</h2>';
        echo '<table border="1" cellpadding="5">';
        
        // 1. Original value of String
        echo '<tr><td>Original value of String</td><td>' . htmlspecialchars($string) . '</td></tr>';
        
        // 2. Number of characters
        echo '<tr><td>Number of characters</td><td>' . strlen($string) . '</td></tr>';
        
        // 3. Number of words
        echo '<tr><td>Number of words</td><td>' . str_word_count($string) . '</td></tr>';
        
        // 4. First character to uppercase
        echo '<tr><td>First character to uppercase</td><td>' . ucfirst($string) . '</td></tr>';
        
        // 5. First character of each word to uppercase
        echo '<tr><td>First character of each word to uppercase</td><td>' . ucwords($string) . '</td></tr>';
        
        // 6. To lowercase
        echo '<tr><td>To lowercase</td><td>' . strtolower($string) . '</td></tr>';
        
        // 7. To uppercase
        echo '<tr><td>To uppercase</td><td>' . strtoupper($string) . '</td></tr>';
        
        // 8. Without leading spaces
        echo '<tr><td>Without leading spaces</td><td>' . ltrim($string) . '</td></tr>';
        
        // 9. Without trailing spaces
        echo '<tr><td>Without trailing spaces</td><td>' . rtrim($string) . '</td></tr>';
        
        // 10. Without leading and trailing spaces
        echo '<tr><td>Without leading and trailing spaces</td><td>' . trim($string) . '</td></tr>';
        
        // 11. MD5 value of String
        echo '<tr><td>MD5 value of String</td><td>' . md5($string) . '</td></tr>';
        
        // 12. Base64 value of String
        echo '<tr><td>Base64 value of String</td><td>' . base64_encode($string) . '</td></tr>';
        
        // 13. First 16 characters
        echo '<tr><td>First 16 characters</td><td>' . substr($string, 0, 16) . '</td></tr>';
        
        // 14. Last 4 characters
        echo '<tr><td>Last 4 characters</td><td>' . substr($string, -4) . '</td></tr>';
        
        // 15. 4 characters starting from the 20th position
        echo '<tr><td>4 characters starting from the 20th Position</td><td>' . (strlen($string) >= 20 ? substr($string, 19, 4) : '') . '</td></tr>';
        
        // 16. Position of the word "guide"
        $posGuide = strpos($string, 'guide');
        echo '<tr><td>Position of the word "guide"</td><td>' . ($posGuide !== false ? $posGuide : 'Not found') . '</td></tr>';
        
        // 17. Position of the word "UE"
        $posUE = strpos($string, 'UE');
        echo '<tr><td>Position of the word "UE"</td><td>' . ($posUE !== false ? $posUE : 'Not found') . '</td></tr>';
        
        // 18. "HTML" word in uppercase
        echo '<tr><td>"HTML" word in uppercase</td><td>' . str_ireplace('html', 'HTML', $string) . '</td></tr>';
        
        // 19. "<INPUT>" word in uppercase
        echo '<tr><td>"<INPUT>" word in uppercase</td><td>' . htmlspecialchars(str_ireplace('<input>', '<INPUT>', $string)) . '</td></tr>';
        
        // 20. String converted to array
        $stringArray = explode(' ', $string);
        echo '<tr><td>String converted to array</td><td><pre>' . print_r($stringArray, true) . '</pre></td></tr>';
        
        echo '</table>';
    }
    ?>
</section>


<footer>
    <p>&copy; <?php echo date("Y"); ?> CHAN, Kristine A.. All rights reserved.</p>
</footer>

</body>
</html>

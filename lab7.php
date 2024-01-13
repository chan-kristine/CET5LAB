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
define('LABTITLE', 'Laboratory Activity No. 7');
define('DESCRIPTION', 'String Functions in PHP');

$school = 'POLYTECHNIC UNIVERSITY OF THE PHILIPPINES';
$course = 'Bachelor of Science in Computer Engineering';
$yearlevel = '3rd Year';
$dateofbirth = 'July, 2003';
$gender = 'Female';

function validatePattern($pattern, $value) {
    return preg_match($pattern, $value);
}

$patterns = [
    ['String containing "PHP"', '/PHP/'],
    ['Starting with "PHP"', '/^PHP/'],
    ['Ends with "PHP"', '/PHP$/'],
    ['String equal to "PHP"', '/^PHP$/'],
    ['Word starting with letter "C"', '/^C\w*/'],
    ['Non-empty lowercase string', '/^[a-z]+$/'],
    ['Non-empty uppercase string', '/^[A-Z]+$/'],
    ['Minimum 10 letters Maximum 20 letters', '/^[a-zA-Z]{10,20}$/'],
    ['Minimum 10 digits Maximum 20 digits', '/^\d{10,20}$/'],
    ['Minimum 10 characters Maximum 20 characters', '/^.{10,20}$/'],
    ['Valid PHP variable name', '/^\$\w+/'],
    ['Valid PHP constant name', '/^[A-Z_][A-Z0-9_]*$/'],
    ['Valid decimal (base-10) integer', '/^-?\d+$/'],
    ['Valid float number', '/^-?\d*\.\d+$/'],
    ['5-letter string', '/^[a-zA-Z]{5}$/'],
    ['5-digit string', '/^\d{5}$/'],
    ['5 ASCII characters', '/^.{5}$/'],
    ['5 non-alphanumeric characters', '/^\W{5}$/'],
    ['Passing Grade (1.00,1.25,1.50 to 3.00)', '/^[1-3](\.\d{2})?$/'],
    ['Sub-domain Name (Ex. .edu or .ue.edu or .ccss.ue.edu)', '/^(?:[a-zA-Z0-9-]+\.)+[a-zA-Z]{2,6}$/']
];

$errors = [];
$isValid = true;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    foreach ($patterns as $index => $pattern_item) {
        $i = $index + 1;
        $description = $pattern_item[0];
        $regexPattern = $pattern_item[1];
        $fieldName = "field$i";
        $value = isset($_POST[$fieldName]) ? $_POST[$fieldName] : '';
        
        if (!validatePattern($regexPattern, $value)) {
            $errors[$i] = 'Invalid';
            $isValid = false;
        }
    }
}

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
    <h1>Regular Expression Test</h1>
    <?php
    if ($isValid) {
        echo '<div class="success-message">All patterns are valid.</div>';
    }
    ?>
    <form method='post' class='regex-form'>
        <table class="regex-table" >
            <tr>
                <td>No.</td>
                <td>Description</td>
                <td>String</td>
                <td>RegEx Pattern</td>
                <td>Result</td>
                <td>Action</td>
            </tr>
            <?php foreach ($patterns as $index => $pattern_item) : ?>
                <?php
                $i = $index + 1;
                $description = $pattern_item[0];
                $regexPattern = $pattern_item[1];
                $fieldName = "field$i";
                $value = isset($_POST[$fieldName]) ? $_POST[$fieldName] : '';
                $result = '';

                if (isset($_POST["validate-all"])) {
                    if (validatePattern($regexPattern, $value)) {
                        $result = 'Valid';
                    } else {
                        $result = 'Invalid';
                    }
                }
                ?>
                <tr>
                    <td><?php echo $i; ?></td>
                    <td><?php echo $description; ?></td>
                    <td><input type='text' name='<?php echo $fieldName; ?>' value='<?php echo $value; ?>' size='40'></td>
                    <td><?php echo $regexPattern; ?></td>
                    <td><?php echo $result; ?></td>
                    <td></td>
                </tr>
            <?php endforeach; ?>
            <tr>
                <td colspan="5"></td>
                <td>
                    <input type='submit' name='validate-all' value='Validate All' class='validate-button'>&nbsp;
                    <input type='submit' name='reset' value='Reset All' class='reset-button'>
                </td>
            </tr>
        </table>
    </form>

    <div class="missing-patterns">
        <?php foreach ($patterns as $index => $pattern_item) : ?>
            <?php
            $description = $pattern_item[0];
            $regexPattern = $pattern_item[1];

            if (empty($regexPattern)) {
                echo "<p>$description</p>";
            }
            ?>
        <?php endforeach; ?>
    </div>
</section>

<footer>
    <p>&copy; <?php echo date("Y"); ?> CHAN, Kristine A.. All rights reserved.</p>
</footer>

</body>
</html>

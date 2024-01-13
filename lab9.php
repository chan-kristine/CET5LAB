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
define('ADDRESS', 'San Agustin, San Jose, Occidental Mindoro');
define('EMAILADDRESS', 'chankristineagcay@gmail.com');
define('CONTACTNUMBER', '09056403292');
define('WEBADDRESS', 'kristineachan@iskolarngbayan.pup.edu.ph');
define('LABTITLE', 'Laboratory Activity No. 9');
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
<h1>User Registration Test</h1>
    <?php
function generate_textbox($name, $value) {
    return '<input type="text" name="' . $name . '" value="' . $value . '">';
}

function generate_password($name, $value) {
    return '<input type="password" name="' . $name . '" value="' . $value . '">';
}

function generate_textarea($name, $value) {
    return '<textarea name="' . $name . '">' . $value . '</textarea>';
}

function generate_checkbox($name) {
    return '<input type="checkbox" name="' . $name . '">';
}

$lastname = isset($_POST['txtLastname']) ? $_POST['txtLastname'] : '';
$firstname = isset($_POST['txtFirstname']) ? $_POST['txtFirstname'] : '';
$middlename = isset($_POST['txtMiddlename']) ? $_POST['txtMiddlename'] : '';
$emailaddress = isset($_POST['txtEmail']) ? $_POST['txtEmail'] : '';
$username = isset($_POST['txtUsername']) ? $_POST['txtUsername'] : '';
$password = isset($_POST['txtPassword']) ? $_POST['txtPassword'] : '';
$confirmpassword = isset($_POST['txtConfirmPassword']) ? $_POST['txtConfirmPassword'] : '';
$comments = isset($_POST['txtComments']) ? $_POST['txtComments'] : '';
$agree = isset($_POST['chkAgree']) ? $_POST['chkAgree'] : '';

if (count($_POST) == 0) {
    echo '<form method="post" action="lab9.php">';
    echo '<table>';
    echo '<tr><td colspan=2><strong>Registration Form</td></tr>';
    echo '<tr><td>Last Name</td><td>', generate_textbox('txtLastname', $lastname), '</td></tr>';
    echo '<tr><td>First Name</td><td>', generate_textbox('txtFirstname', $firstname), '</td></tr>';
    echo '<tr><td>Middle Name</td><td>', generate_textbox('txtMiddlename', $middlename), '</td></tr>';
    echo '<tr><td>Email Address</td><td>', generate_textbox('txtEmail', $emailaddress), '</td></tr>';
    echo '<tr><td>Username</td><td>', generate_textbox('txtUsername', $username), '</td></tr>';
    echo '<tr><td>Password</td><td>', generate_password('txtPassword', $password), '</td></tr>';
    echo '<tr><td>Confirm Password</td><td>', generate_password('txtConfirmPassword', $confirmpassword), '</td></tr>';
    echo '<tr><td>Comments</td><td>', generate_textarea('txtComments', $comments), '</td></tr>';
    echo '<tr><td>Agree</td><td>', generate_checkbox('chkAgree'), '</td></tr>';

    echo '<tr><td colspan=2>';
    echo '<input type="submit" name="btnRegister" value="Register">&nbsp;';
    echo '<input type="reset" name="btnReset" value="Reset">&nbsp;';
    echo '</td></tr>';

    echo '</table>';
    echo '</form>';
} else {
    echo '<table>';
    echo '<tr><td colspan=2 align=center><strong>FORM SUBMITTED</td></tr>';

    echo '<tr><td>Last Name</td><td>', $lastname, '</td></tr>';
    echo '<tr><td>First Name</td><td>', $firstname, '</td></tr>';
    echo '<tr><td>Middle Name</td><td>', $middlename, '</td></tr>';
    echo '<tr><td>Email Address</td><td>', $emailaddress, '</td></tr>';
    echo '<tr><td>Username</td><td>', $username, '</td></tr>';
    echo '<tr><td>Password</td><td>', $password, '</td></tr>';
    echo '<tr><td>Confirm Password</td><td>', $confirmpassword, '</td></tr>';
    echo '<tr><td>Comments</td><td>', $comments, '</td></tr>';
    echo '<tr><td>Agree</td><td>', $agree, '</td></tr>';

    echo '</table>';
}
?>


</section>


<footer>
    <p>&copy; <?php echo date("Y"); ?> CHAN, Kristine A.. All rights reserved.</p>
</footer>

</body>
</html>

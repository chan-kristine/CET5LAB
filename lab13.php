<?php
ob_start(); // Start output buffering

// Start the session at the very beginning
session_start();

// Define constants
define('NAME', 'Kristine A. Chan');
define('STUDENT_NUMBER', '2021-08104-MN-0');
define('ADDRESS', 'San Agustin, San Jose, Occidental Mindoro');
define('EMAILADDRESS', 'chankristineagcay@gmail.com');
define('CONTACTNUMBER', '09056403292');
define('WEBADDRESS', 'kristineachan@iskolarngbayan.pup.edu.ph');
define('LABTITLE', 'Laboratory Activity No. 13');
define('DESCRIPTION', 'Sending Email');

// Additional variables
$school = 'POLYTECHNIC UNIVERSITY OF THE PHILIPPINES';
$course = 'Bachelor of Science in Computer Engineering';
$yearlevel = '3rd Year';
$dateofbirth = 'March 06, 2003';
$gender = 'Female';

// Process the form data
$from    = (isset($_POST['txtFrom'])) ? $_POST['txtFrom'] : '';
$to      = (isset($_POST['txtTo'])) ? $_POST['txtTo'] : '';
$subject = (isset($_POST['txtSubject'])) ? $_POST['txtSubject'] : '';
$message = (isset($_POST['txtMessage'])) ? $_POST['txtMessage'] : '';

// Mail settings
ini_set('sendmail_from', $from);
ini_set('smtp_port', 25);
ini_set('SMTP', '10.10.10.22');

if (count($_POST) > 0) {
    if (mail($to, $subject, $message)) {
        echo 'Message sent';
    } else {
        echo 'Message sending failed!';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laboratory Activity No. 13</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        body, h1, h2, p, ul, li {
            margin-top: 5px;
            padding: 0;
        }

        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
        }

        header {
            background-color: #5F9568;
            color: #fff;
            padding: 10px;
        }

        header h1 {
            margin-bottom: 10px;
        }

        nav {
            background-color: #eee;
            padding: 20px;
            width: 300px;
            height: 1000%;
            float: left;
        }

        nav ul {
            list-style-type: none;
        }

        nav ul li {
            margin-bottom: 20px;
        }

        nav a {
            text-decoration: none;
            color: #000;
            font-weight: bold;
            display: block;
            padding: 10px;
        }

        nav a:hover {
            background-color: #588960;
            color: #fff;
        }

        form {
            max-width: 500px;
            margin-left: 40%;
            margin-top: 20px;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 8px;
        }

        input[type="text"],
        input[type="password"],
        input[type="submit"],
        textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #507C58;
            color: #fff;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #588960;
        }

        p.error-message {
            color: red;
            font-weight: bold;
            margin-top: -10px;
        }

        p.welcome-message {
            color: #333;
            font-weight: bold;
        }

        input[type="submit"].logout {
            background-color: #507C58;
            color: #fff;
        }

        input[type="submit"].logout:hover {
            background-color: #588960;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        table,
        th,
        td {
            border: 1px solid #ddd;
        }

        th,
        td {
            padding: 15px;
            text-align: left;
        }

        th {
            background-color: #333;
            color: white;
        }

        p#welcomemsg {
            text-align: justify;
        }

        footer {
            background-color: #588961;
            color: #fff;
            padding: 10px;
            text-align: center;
            clear: both;
        }

        footer p {
            margin: 0;
        }
    </style>
</head>
<body>
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

    <!-- PHP Mail Form -->
    <section>
        <form method="post">
            From: <input type="text" name="txtFrom" value="<?php echo $from; ?>"><br>
            To: <input type="text" name="txtTo" value="<?php echo $to; ?>"><br>
            Subject: <input type="text" name="txtSubject" value="<?php echo $subject; ?>"><br>
            Message: <textarea name="txtMessage"><?php echo $message; ?></textarea><br>
            <input type="submit" name="btnSubmit" value="Send">
        </form>
    </section>

    <footer>
        <p>&copy; <?php echo date("Y"); ?> CHAN, Kristine A.. All rights reserved.</p>
    </footer>
</body>
</html>

<?php
ob_end_flush(); // End output buffering and send the output
?>

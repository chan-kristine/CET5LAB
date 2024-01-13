
<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laboratory Activity No. 11</title>
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
        input[type="submit"] {
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
            background-color: #507C58;;
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

        table, th, td {
            border: 1px solid #ddd;
        }

        th, td {
            padding: 15px;
            text-align: left;
        }

        th {
            background-color: #333;
            color: white;
        }
        /* Navigation styles */
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

        p#welcomemsg {
            text-align:justify;
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
<?php
	define('NAME', 'Kristine Agcay Chan');
    define('STUDENT_NUMBER', '2021-08104-MN-0');
    define('ADDRESS', 'San Agustin, San Jose, Occidental Mindoro');
    define('EMAILADDRESS', 'chankristineagcay@gmail.com');
    define('CONTACTNUMBER', '09056403292');
    define('WEBADDRESS', 'kristineachan@iskolarngbayan.pup.edu.ph');
	define('LABTITLE', 'Laboratory Activity No. 11');
	define('DESCRIPTION', 'Managing State Information Using Session – Login Page');
	?>
	
	<?php
	$school = 'POLYTECHNIC UNIVERSITY OF THE PHILIPPINES';
	$course = 'Bachelor of Science in Computer Engineering';
	$yearlevel = '3rd Year';
	$dateofbirth = 'March 06, 2003';
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
    
    <?php
    echo '<form method="post">';
    if (isset($_POST['login']))
        process_form();
    elseif (isset($_POST['logout']))
        process_logout();
    elseif (isset($_SESSION['username']))
        generate_welcomepage();
    else
        generate_loginform();
    echo '</form>';
    ?>

    <?php
    function generate_loginform(){
        // Item 1. print a textbox field (name="username")
        echo 'Username: <input type="text" name="username"><br>';

        // Item 2. print a password field (name="password")
        echo 'Password: <input type="password" name="password"><br>';

        // Item 3. print a submit button (name="login" value="Login")
        echo '<input type="submit" name="login" value="Login">';
        // Refer to your lab9.php for generating form elements
    }

    function process_form() {
        // Item 4. Assign $_POST['username'] to $username
        // Item 5. Assign $_POST['password'] to $password
        $username = $_POST['username'];
        $password = $_POST['password'];

        if ((trim($username) != '') && ($password == '12345')) {
            // Item 6. store $username to $_SESSION['username']
            $_SESSION['username'] = $username;

            // Item 7. store $password to $_SESSION['password']
            $_SESSION['password'] = $password;

            // Item 8. call the function generate_welcomepage()
            generate_welcomepage();
        } else {
            // Item 9. call the function generate_loginerror()
            generate_loginerror();

            // Item 10. call the function generate_loginform()
            generate_loginform();
        }
    }

    function generate_loginerror(){
        // Item 11. print a message "Login Failed"
        echo '<p style="color: red;"><strong>Login Failed</strong></p>';
    }

    function process_logout(){
        if (isset($_SESSION['username']))
            echo '<p style="color: green;"><strong>Logout Successful</strong></p>';

        // Item 12. call the function that destroys the session
        session_destroy();

        // Item 13. call the function generate_loginform()
        generate_loginform();
    }

    function generate_welcomepage(){
        $username = $_SESSION['username'];

        // Item 14. print a welcome back message with username
        echo "<strong><p>Welcome back, $username!</p></strong>";

        // Item 15. print a <p>LoremIpsum</p> paragraph
        echo '<p id="welcomemsg">We are delighted to have you here. Enjoy your stay and explore all the wonderful things our website has to offer.</p>';

        // Item 16. print a submit button (name="logout" value="Logout")
        echo '<input type="submit" name="logout" value="Logout">';
    }
    ?>

    
<footer>
        <p>&copy; <?php echo date("Y"); ?> CHAN, Kristine A.. All rights reserved.</p>
    </footer>

</body>

</html>

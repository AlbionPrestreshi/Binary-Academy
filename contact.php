<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // process the form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // validate the form data
    $errors = array();
    if (empty($name)) {
        $errors[] = 'Name is required';
    }
    if (empty($email)) {
        $errors[] = 'Email is required';
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = 'Email is not valid';
    }
    if (empty($message)) {
        $errors[] = 'Message is required';
    }

    // if there are no errors, save the form data to the database
    if (empty($errors)) {
        $db_host = 'localhost';
        $db_user = 'root';
        $db_pass = '';
        $db_name = 'swiss_collection';

        $conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
        if (!$conn) {
            die('Connection failed: ' . mysqli_connect_error());
        }

        $sql = "INSERT INTO contact (name, email, message) VALUES ('$name', '$email', '$message')";
        if (mysqli_query($conn, $sql)) {
            echo '<p class="success">Your message has been saved!</p>';
            $name = $email = $message = '';
        } else {
            echo '<p class="error">Sorry, there was a problem saving your message. Please try again later.</p>';
        }

        mysqli_close($conn);
    } else {
        // if there are errors, display them
        echo '<ul class="error">';
        foreach ($errors as $error) {
            echo "<li>$error</li>";
        }
        echo '</ul>';
    }
}

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
    <link rel="stylesheet" href="contact.css">

</head>

<body>
<div class="header">
        <div class="inner_header">
            <div class="logo">
                <h1><i>Binary <span>Academy</span></i></h1>
            </div>
            <ul class="lista">
                <a href="index.php">
                    <li>Home</li>
                </a>
                <a href="aboutus.php">
                    <li>About us</li>
                </a>
                <a href="#">
                    <li>Contact</li>
                </a>
                <a href="./Logforma/login_form.php">   
                    <li>Log in</li>
                </a>
            

            </ul>
        </div>
    </div>

    <section id="section-w">
        <div class="box-wrapper">
            <div class="info  ">
                <h2 class="title">Contact Information</h2>
                <h3 class="titlee">Fill up the form and our team will contact
                    you within 12 hours</h3>
                <ul class="info-details">
                    <li>
                        <i class="fas fa-phone-alt"></i>
                        <span>Phone: </span> <a href="tel: +38349456123">+38349456123</a>
                    </li>

                    <li>
                        <i class="fas fa-paper-plane"></i>
                        <span>Email: </span> <a href="mailto:info@yoursite.com">BinaryAcademy@gmail.com</a>
                    </li>
                </ul>
                <br>


                <ul class="social-icon">
                    <li>
                        <a href="#">
                            <i class="fab fa-facebook"></i>
                        </a>
                    </li>

                    <li>
                        <a href="#">
                            <i class="fab fa-twitter"></i>
                        </a>
                    </li>

                    <li>
                        <a href="#">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </li>


                    <li>
                        <a href="#">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </li>
                </ul>
            </div>

            <div class="formwrap">
                <form action="#" method="post">
                    <h2 class="formtitle">Send us a message</h2>
                    <div class="fields">
                        <div class="group">
                            <input type="text" class="firstn"  id="name" name="name" value="<?php echo($name); ?>">
                        </div>
                        <div class="group">
                            <input type="email" class="email" id="email" name="email" value="<?php echo($email); ?>">
                        </div>
                        <div class="group">
                            <textarea id="message" name="message"><?php echo ($message); ?></textarea>
                        </div>
                    </div>
                    <input type="submit" value="Send Message" class="submit-button">
                </form>
            </div>

        </div>
    </section>

    <footer>

        <h4>Copyrights – Bianry Academy | All rights reserved 2021.</h4>

    </footer>

</body>
 
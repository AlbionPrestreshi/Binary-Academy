<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // process the form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $category = $_POST['category'];

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
    if (empty($category)) {
        $errors[] = 'category is required';
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

        $sql = "INSERT INTO aplications (name, email, category) VALUES ('$name', '$email', '$category')";
        if (mysqli_query($conn, $sql)) {
            echo '<p class="success">Your message has been saved!</p>';
            $name = $email = $category = '';
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
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
            <title>Apliko</title>
            <link rel="stylesheet" href="Apliko.css">
        </head>
    <body>

                <h1 id= "h1"style="text-align: center; color: red;">Aplikoni tani dhe fitoni -20% zbritje!</h1>
        
        <div class="login">

              
               <form class="forma" action="" method="post">
                        <h1>APLIKO TANI!</h1>
                        <div>
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" <?php echo($name); ?>>
    </div>
    <div>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" <?php echo($email); ?>>
    </div>
    <div>
        <label for="category">category:</label>
        <select id="category" name="category">
            <option value="">Select a category</option>
            <option value="sales" <?php if ($category == 'sales') echo 'selected'; ?>>Sales</option>
            <option value="support" <?php if ($category == 'support') echo 'selected'; ?>>Support</option>
            <option value="billing" <?php if ($category == 'billing') echo 'selected'; ?>>Billing</option>
        </select>
    </div>
                   
                    <input type="submit" name="Submit">
                
                </form>
            
        </div>
        
    
    
    </body>
</html>
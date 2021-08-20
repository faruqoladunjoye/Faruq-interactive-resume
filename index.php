<?php

    include("config.php");

    if($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['submit'])){
        // define variables and set to empty values
        function test_input($data) {
          $data = trim($data);
          $data = stripslashes($data);
          $data = htmlspecialchars($data); 
          return $data;
        }
          $email = test_input($_POST["email"]);
          $subject = test_input($_POST["subject"]);
          $message = test_input($_POST["message"]);

          $sql = "INSERT INTO contact (email, subject, message) VALUES ('$email', '$subject', '$message')";
          if(mysqli_query($conn, $sql)){
            header("Location: response.html");
            exit;
          } else {
              echo 'Query error: ' . mysqli_error($conn);
          }

    }      
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Faruq Resume</title>
</head>
<body>

    <header>
        <div>
        <h1>I am Faruq Oladunjoye</h1>
         <p>Backend Developer</p>
        </div>
    </header>
    <hr>
        <div>
            <h2>About me</h2>
            <p><img src="./images/img-01.jpg" width="500px" alt=""></p>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
    <hr>
        <div>
            <h2>Projects</h2>

            <img src="./images/img-02.jpg" width="500px" alt="">
            <h3 class="h5">Amelia App</h3>
            <p>June 2017</p>

            <img src="./images/img-03.jpg" width="500px" alt="">
            <h3 class="h5">Portland</h3>
            <p>March 2017</p>

            <img src="./images/img-04.jpg" width="500px" alt="">
            <h3 class="h5">Denz for Nilon</h3>
            <p>Jan 2017</p>
        </div>
    <hr>
        <div>
            <div>
                <h2>Work</h2>
                <h3>Web developer - Dthes-Tekh Institute</h3>
                <small>May 2021 - Jul 2021</small>
                <p>Leo vel orci porta non pulvinar neque laoreet suspendisse interdum. Vitae ultricies leo integer malesuada nunc. Imperdiet proin fermentum leo vel orci porta non pulvinar neque. Fermentum leo vel orci porta non. Posuere sollicitudin aliquam ultrices sagittis. Aliquam faucibus purus in massa tempor nec.</p>
            </div>

            <div>
              <h3>Web developer - Soft-Web Digital</h3>
              <small>Aug 2021 - present</small>
              <p>Fermentum leo vel orci porta non. Posuere sollicitudin aliquam ultrices sagittis. Aliquam faucibus purus in massa tempor nec.</p>
            </div>

        </div>
        
    <hr>
        <div>
            <h2>Education</h2>
            <small>2016 - present</small>
            <h3>Computer sciences</h3>
            <p>University of Lagos</p>
        </div>
    <hr>
    <div>
        <h2>Contact</h2>
        <form action="index.php" method="POST">
            <input type="email" placeholder="Email" name="email" required><br><br>
            <input type="text" placeholder="Subject" name="subject" required><br><br>
            <textarea name="message" rows="4" cols="50" placeholder="Message" required></textarea><br><br>
            <input type="submit" value="Send" name="submit">
        </form>
    </div>

    <hr>

    <footer>
    <p>©All right reserved. Faruq Oladunjoye</p>
    </footer>

    
</body>
</html>
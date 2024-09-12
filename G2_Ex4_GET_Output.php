<?php

$message = "";
//<!-- GET -->
/*Checks the form */ 
if ($_SERVER["REQUEST_METHOD"] == "GET") {
   
    $name = isset($_GET['name']) ? htmlspecialchars(string: $_GET['name']) : '';
    $birthday = isset($_GET['birthday']) ? htmlspecialchars(string: $_GET['birthday']) :'';
    $birthplace= isset($_GET['birthplace']) ? htmlspecialchars(string: $_GET['birthplace']) :'';
    $gender = isset($_GET['gender']) ? htmlspecialchars(string: $_GET['gender']) :'';
    $status = isset($_GET['status']) ? htmlspecialchars(string: $_GET ['status']) :'';
    $citizenship = isset($_GET['citizenship']) ? htmlspecialchars(string: $_GET ['citizenship']) :'';
    $email = isset($_GET['email']) ? htmlspecialchars(string: $_GET ['email']) :'';
    $number = isset($_GET['number']) ? htmlspecialchars(string: $_GET ['number']) :'';
    $address = isset($_GET['address']) ? htmlspecialchars(string: $_GET ['address']) :'';
    $course= isset($_GET['course']) ? htmlspecialchars(string: $_GET ['course']) :'';
    $studnum = isset($_GET['studnum']) ? htmlspecialchars(string: $_GET ['studnum']) :'';
    $insemail = isset($_GET['insemail']) ? htmlspecialchars(string: $_GET ['insemail']) :'';
   

    /**OUTPUT */
    $message =  "<b>Name: </b>" .$name . "<br>".
                "<b>Birthday: </b>" . $birthday . "<br>" .
                "<b>Birthplace: </b>". $birthplace . "<br>" .
                "<b>Gender: </b>". $gender . "<br>" .            
                "<b>Status: </b>" . $status . "<br>" .
                "<b>Citizenship: </b>". $citizenship . "<br>".
                "<b>Email: </b>". $email . "<br>".
                "<b>Number: </b>". $number . "<br>" .
                "<b>Address: </b>". $address . "<br>".
                "<b>Course: </b>". $course . "<br>" .
                "<b>Student No.: </b>" . $studnum . "<br>" .
                "<b>Institutional Email: </b>" . $insemail . "<br>";
}
?>

<!DOCTYPE HTML>  
<html lang = "en">
<head>
<meta charset = "UTF-8"> 
    <meta name = "viewport" content = "width = device-width, initial-scale=1.0"> 
    <title>INFORMATION</title> 
</head>

<style>
        body {
            font-family: Arial, sans-serif;
            margin: 50px;
            background-image: url(background2.jpg);    
            background-repeat: no-repeat;
            background-size: cover;
            background-attachment: fixed;
        }

        h1 {
            font-size: 15px;
        }

        .container {
            width: fit-content;
            margin: 93px auto;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            background: transparent;
            border: 2px solid rgba(255, 255, 255, .5);
            backdrop-filter: blur(50px);
            box-shadow: 0 0 30px rgba(0, 0, 0, .5);
        }

        p {
            font-size: 20px;
            color: #333;
            margin-bottom: 20px;
        }

        a {
            color: #c53ca3;
            display:flex;
            text-decoration: none;
            font-weight: bold;
            justify-content: right;
        }

        a:hover {
            color: black;
            text-decoration: none;
        }
  
        input[type="Go back"] {
            background-color: #c53ca3;
            color: #fff;
            padding: 15px 25px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            display: block;         
        }

        input[type="Go back"]:hover {
            background-color: #ccc;
        }
</style>

<body>
<div class = "container">
        <!-- Display the the user's information after submitting -->
        <h1>Your Information</h1>
        <p><?php echo $message; ?></p>
        <a href="G2_Ex4_GET.php">BACK</a>
    </div>
</body>
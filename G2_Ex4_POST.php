<!DOCTYPE HTML>  
<html lang = "en">
<head>
<meta charset = "UTF-8"> 
    <meta name = "viewport" content = "width = device-width, initial-scale=1.0"> 
    <title>GROUP 2 - EXERCISE #4</title> 
</head>
<!-- POST -->
<style>
        body {
            font-family: Arial, sans-serif;
            margin: 50px;
            background-image: url(studentbackground.jpg);    
            background-repeat: no-repeat;
            background-size: cover;
            background-attachment: fixed;
        }

        h3 {
            text-align: center;
            font-family: Helvetica, sans-serif;
            font-size: 30px;
            font-weight: bold;
        }

        h2 {
            text-align: center;
        }

        h1 {
            font-size: 16px;
            text-decoration: underline;
        }

        .container {
            width: 40%;
            margin: 40px auto;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            background: transparent;
            border: 2px solid rgba(255, 255, 255, .5);
            backdrop-filter: blur(20px);
            box-shadow: 0 0 30px rgba(0, 0, 0, .5);
        }

        input[type="text"], input[type="email"], input[type="tel"] {
            width: 95%;
            padding: 10px;
            border: 1px solid #c53ca3;
            border-radius: 5px;
            position: relative;
            border-bottom: 2px solid  #ccc;
            margin: 8px 0;
        }

        input[type="text"]:hover, input[type="email"]:hover, input[type="tel"]:hover {
            border-color: #aaa;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
        }

        input[type="date"] {
            width: 95%;
            padding: 10px;
            border: 1px solid #c53ca3;
            border-radius: 5px;
            position: relative;
            border-bottom: 2px solid #ccc;
            margin: 10px 0;
            appearance: none;
        }
        
        input[type="date"]::-webkit-calendar-picker-icon {
            display: block;
            position: absolute;
            top: 50%;
            right: 10px;
            transform: translateY(-50%);
            cursor: pointer;
        }
  
        input[type="date"]:hover::-webkit-calendar-picker-icon {
            opacity: 0.8;
        }

        input[type="submit"] {
            background-color: #c53ca3;
            color: #fff;
            padding: 15px 25px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            display: block;
            display: block;
            margin: auto;
        }

        input[type="submit"]:hover {
            background-color: #ccc; 
            color: black;
        }
</style>

<body>
    <h3>STUDENT INFORMATION</h3>
    <div class="container">
        <form method="POST" action="G2_Ex4_POST_Output.php">
            <h1>Personal Details</h1>  <!-- Form that consists of textboxes where user can input their information -->
            Name: <input type="text" name="name" placeholder= "Enter Fullname" required> 
            Birthday: <input type="date" id="birthday" name="birthday"> 
            Birthplace: <input type="text" name="birthplace" placeholder= "Enter Birthplace" required>
            Gender:
                    <input type="radio" name="gender" value="Female">Female
                    <input type="radio" name="gender" value="Male">Male
                    <input type="radio" name="gender" value="Other">Other
                    <br><br> 
            Status:
                    <input type="radio" name="status" value="Single">Single
                    <input type="radio" name="status" value="Married">Married
                    <input type="radio" name="status" value="Other">Other
                    <br><br>
            Citizenship: <input type="text" name="citizenship" placeholder= "Enter Citizenship" required> 
            <br><br>

            <h1>Contact Details</h1>
            E-mail: <input type="text" name="email" placeholder= "Enter E-mail"required> 
            Contact No.: <input type="text" name="number"placeholder= "Phone Number" required> 
            Address: <input type="text" name="address" placeholder= "Full Address" required>
            <br><br>
 
            <h1>Program of Study</h1>
            Course: <input type="text" name="course" placeholder= "Enter Course" required> 
            Student Number: <input type="text" name="studnum" placeholder= "Enter Student Number" required>
            Institutional Email: <input type = "text" name = "insemail" placeholder = "Enter Institutional Email" required>
            <br><br>
  
            <input type="submit" name="submit" value="Submit"> 
</form>
</div>
</body>
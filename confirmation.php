<!DOCTYPE HTML>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Comments Form - Response</title>
    </head>

    <body>
        <!--All PHP scripts need to go inside these tags-->
        <?php
            #Form values are assigned to PHP variables for output
            $name = $_POST["name"];
            $address = $_POST["address"];
            $email = $_POST["email"];
            $phone = $_POST["phone"];
            $gender = $_POST["gender"];
            $course = $_POST["course"];            

            #Concatenate strings with variable values to display the
            #results of the form
            echo "<p>Hi <b><i>$name</i></b>, thank you for your details: </p>";
            echo "<p>Name:  <b><i>$name </b></i> <br> Address:  <b><i>$address</i></b><br> Email:  <b><i>$email</i></b><br> Phone Number:<b><i> $phone</b></i></p>";
            echo "<p>We will reply to you within one working week, to: <b><i>$email</i></b></p>";
            
            
            

            require_once "database.php";
           
            $name = mysqli_real_escape_string($link, $name);
            $address = mysqli_real_escape_string($link, $address);
            $email = mysqli_real_escape_string($link, $email);
            $phone = mysqli_real_escape_string($link, $phone);
           
            $q = 'INSERT INTO user_data (name, address, email, phone, gender, course) VALUES ("'.$name.'","'.$address.'","'.$email.'","'.$phone.'","'.$gender.'","'.$course.'")';
            


            $r = mysqli_query($link, $q);

            if ($r) {
                echo '<h2>Query Successful!</h2>';
            }

            else{
                echo '<p>'.mysqli_error($link).'</p>';
            };

            


            mysqli_close($link);


           
        ?>
    </body>

</html>

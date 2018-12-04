<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>JBL Sign Up Form</title>
        <style>
            .error
            {
                color: red;
            }
        </style>
    </head>
    <body>
        <?php
        $name = $email = $gender = $city = $country = "";
        $nameErr = $emailErr = $genderErr = $cityErr = $countryErr = "";
        
        if ($_SERVER["REQUEST_METHOD"] == "POST") 
        {
            if (empty($_POST["name"])) 
            {
               $nameErr = "Name is required";
            }
            else 
            {
               $name = test_input($_POST["name"]);
            }
  
            if (empty($_POST["email"])) 
            {
            $emailErr = "Email is required";
            } 
            else 
            {
            $email = test_input($_POST["email"]);
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) 
                {
                $emailErr = "Invalid email format";
                }
            }
            
            if (empty($_POST["gender"])) 
            {
            $genderErr = "Gender is required";
            } 
            else 
            {
            $gender = test_input($_POST["gender"]);
            }
            
            if (empty($_POST["city"])) 
            {
               $cityErr = "City is required";
            }
            else 
            {
               $city = test_input($_POST["name"]);
            }
            
            if (empty($_POST["country"])) 
            {
               $countryErr = "Country Name is required";
            }
            else 
            {
               $city = test_input($_POST["country"]);
            }
    }
    
    function test_input($data) 
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }  
    ?>
        <h2>Jitco (BD) Limited Sign-Up form</h2>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        Name: <input type="text" name="name">
        <span class="error">* <?php echo $nameErr;?></span>
        <br><br>
        
        E-mail: <input type="text" name="email">
        <span class="error">* <?php echo $emailErr;?></span>
        <br><br>
        
        Gender:
        <input type="radio" name="gender" value="female">Female
        <input type="radio" name="gender" value="male">Male
        <span class="error">* <?php echo $genderErr;?></span>
        <br><br>
        
        City: <input type="text" name="city">
        <span class="error">* <?php echo $cityErr;?></span>
        <br><br>
        
        Country: <input type="text" name="country">
        <span class="error">* <?php echo $countryErr;?></span>
        <br><br>
        
        <input type="submit" name="submit" value="Signup">
        </form>
        
        <?php
        echo "<h2>Your Submitted Data :</h2>";
        echo $name;
        echo "<br>";
        echo $email;
        echo "<br>";
        echo $gender;
        echo "<br>";
        echo $city;
        echo "<br>";
        echo $country;
        echo "<br>";
        ?>
    </body>
</html>

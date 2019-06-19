<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Practice 1</title>
    <style>
        .error {color: #FF0000;}
    </style>
</head>
<body>
    <?php 
    //define variables and set to empty values
    $name = $email = $website = $comment = $gender ="";
    $nameErr = $emailErr = $genderErr = $websiteErr ="";

    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        if(empty($_POST["name"])){
            $nameErr = "Name is required";
        } else {
            $name = test_input($_POST["name"]);
        }
        if(empty($_POST["email"])){
            $emailErr = "Email is required";
        } else {
            $email = test_input($_POST["email"]);
        }
        if(empty($_POST["website"])){
            $website = "";
        } else {
            $website = test_input($_POST["website"]);
        }
        if(empty($_POST["comment"])){
            $comment = "";
        } else {
            $comment = test_input($_POST["comment"]);
        }
        if(empty($_POST["gender"])){
            $genderErr = "Gender is required";
        } else {
            $gender = test_input($_POST["gender"]);
        }
    }

    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
      }
    ?>

    <h2>PHP Form Validatiion Example</h2>
    <p><span class="error">* required field</span></p>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
        Name: <input type="text" name="name" id="">
        <span class="error">* <?php echo $nameErr;?></span>
        <br><br>
        Email: <input type="text" name="email" id="">
        <span class="error">* <?php echo $nameErr;?></span>
        <br><br>
        Website: <input type="text" name="website" id="">
        <br><br>
        Comment: <textarea name="comment" id="" cols="30" rows="5"></textarea>
        <br><br>
        Gender:
        <input type="radio" name="gender" id="" value="female">Female
        <input type="radio" name="gender" id="" value="male">Male
        <input type="radio" name="gender" id="" value="other">other
        <span class="error">* <?php echo $genderErr;?></span>
        <br><br>
        <input type="submit" name="submit" value="Submit">
    </form>

    <?php 
    echo "<h2> Your Input: </h2>";
    echo "Name :";
     echo $name;
    echo "<br>";
    echo "Email :".$email;
    echo "<br>";
    echo "Website".$website;
    echo "<br>";
    echo "Comment".$comment;
    echo "<br>";
    echo "Gender".$gender;
    ?>
</body>
</html>
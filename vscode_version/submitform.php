<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    
    <title>DED Discovery Project</title>
</head>

<body>
   
   <?php
        if(isset($_POST["submit_form"])) {
            
        }
        $name = $_POST["Name"];
        $email = $_POST["Email"];

        $fs = fopen("current.csv", "a");
        fwrite($fs, $name . ", " . $email . "\n");
        fclose($fs);
        echo "hello";
        
        header("Location: submitted.html");
        exit;
        
    ?>

<body>
</html>
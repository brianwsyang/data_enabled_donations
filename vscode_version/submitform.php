    <?php
        if($_POST["submit_form"] == "submit") {
            //not sure if the code below should go inside this
        }

            $name = $_POST["Name"];
            $email = $_POST["Email"];

            $fs = fopen("current.csv", "a");
            fwrite($fs, $name . ", " . $email . "\n");
            fclose($fs);

            header("Location: submitted.html");
            exit;
        
    ?>
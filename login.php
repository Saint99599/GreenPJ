<html>
    <head>
        
    </head>
    <body>
    <?php
        include('connect.php');
        $username = mysqli_real_escape_string($connect, $_POST["username"]);
        $password = mysqli_real_escape_string($connect, $_POST["password"]);

        $qLogin = "SELECT id FROM user WHERE username = '$username' AND password = '$password'";
        $resultLogin = $connect->query($qLogin);
        $rowLogin = mysqli_fetch_array($resultLogin);

        if ($resultLogin->num_rows > 0) {
            header("Location: home.php?IDUser=" . $rowLogin['id']);
        } else {
            echo '<script type="text/JavaScript"> 
                    alert(\'Wrong username or password!\');
                </script>';
            include("index.php");
        }
    ?>
    </body>
</html>
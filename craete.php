<?php 
    include('connect.php');
    $IDUser = $_POST['IDUser'];

    $qUserS = "SELECT id, FName, LName FROM user WHERE id = '$IDUser'";
    $resultUserS = $connect->query($qUserS);
    $rowUserS = mysqli_fetch_array($resultUserS);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Webboard</title>
</head>

<body>
    <div class="container">
    <nav class="navbar bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Navbar</a>
                <a class="navbar-brand" href="#"><?php echo $rowUserS['FName'] . " " . $rowUserS['LName'] ?></a>
            </div>
        </nav>

    
        <form class="" method="post" action="insert.php">
            <table class="table align-middle mb-0 bg-white table-hover">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th><input class="" type="text" name="Title" ></th>
                    </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <td>about</td>
                        <td><input class="" type="text" name="About" ></td>
                        </tr>
                    </tbody>
                </table>
                <?php echo "<input type='hidden' name='IDUser' value='$IDUser'>";?>
            <input class="btnForm" type="submit" value="submit">
        </form>
    </div>
</body>

</html>
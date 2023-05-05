<?php 
    include('connect.php');
        $qPost = "SELECT * FROM post";
        $resultPost = $connect->query($qPost);
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
        <!-- As a link -->
        <nav class="navbar bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Navbar</a>
            </div>
        </nav>

        <div><a href="craete.php"><input type="button" value="create"/></a></div>
       
        <table class="table align-middle mb-0 bg-white table-hover">
            <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>About</th>
                <th></th>
            </tr>
            </thead>
            <tbody>
                <?php
                    while ($rowPost = mysqli_fetch_array($resultPost)) {
                        echo "<tr>";
                        echo '<form class="" method="get" action="post.php">';
                        echo '<td>' . $rowPost['ID'] . '</td>';
                        echo '<td>' . $rowPost['Title'] . '</td>';
                        echo '<td>' . $rowPost['About'] . '</td>';
                        echo '<input type="hidden" name="Title" value="' . $rowPost['Title'] . '">';
                        echo '<td><input class="btnForm" type="submit" value="submit"></td>';
                        echo '</form>';
                        echo "</tr>";
                    }
                $connect->close();
                ?>
            </tbody>
        </table>
    </div>
</body>

</html>
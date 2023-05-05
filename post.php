<?php 
    include('connect.php');
    $IDUser = $_GET['IDUser'];
    $qUserS = "SELECT id, FName, LName FROM user WHERE id = '$IDUser'";
    $resultUserS = $connect->query($qUserS);
    $rowUserS = mysqli_fetch_array($resultUserS);

    $IDPost = $_GET['ID'];
    
    $qPost = "SELECT * FROM post WHERE ID = $IDPost";
    $resultPost = $connect->query($qPost);
    $rowPost = mysqli_fetch_array($resultPost);

    $qComment = "SELECT * FROM comment WHERE IDPost = $IDPost";
    $resultComment = $connect->query($qComment);
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
                <a class="navbar-brand" href="#"><?php echo $rowUserS['FName'] . " " . $rowUserS['LName'] ?></a>
            </div>
        </nav>
       
        <table class="table align-middle mb-0 bg-white table-hover">
            <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Title</th>
                <th>About</th>
            </tr>
            </thead>
            <tbody>
                <?php
                    echo "<tr>";
                    echo "<td>" . $rowPost['ID'] . "</td>";
                    echo '<td>' . $rowPost['IDUser'] . '</td>';
                    echo "<td>" . $rowPost['Title'] . "</td>";
                    echo "<td>" . $rowPost['About'] . "</td>";
                    echo "</tr>";
                ?>
            </tbody>
        </table>

        <form method="post" action="insertComment.php">
            <table class="table align-middle mb-0 bg-white table-hover">
                <thead>
                    <tr>
                        <th>Comment</th>
                        <?php 
                            echo "<input type='hidden' name='IDUser' value='$IDUser'>";
                            echo "<input type='hidden' name='IDPost' value='$IDPost'>"; 
                        ?>
                        <th><input type="text" name="Comment" ></th>
                    </tr>
                </thead>
            </table>
            <input type="submit" value="Comment">
        </form>


        <table class="table align-middle mb-0 bg-white table-hover">
            <thead>
            <?php
                while ($rowComment = mysqli_fetch_array($resultComment)) {
                    $qUserA = "SELECT id, FName, LName FROM user WHERE id = {$rowComment['IDUser']}";
                    $resultUserA = $connect->query($qUserA);
                    $rowUserA = mysqli_fetch_array($resultUserA);
                    echo "<tr>";
                    echo '<td>' . $rowUserA['FName'] . " " . $rowUserA['LName'] . '</td>';
                    echo "<th>" . $rowComment['comment'] . "</th>";
                    echo "</tr>";
                }
                $connect->close();
            ?>
            </thead>
        </table>
    </div>
</body>

</html>
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
        <?php 
            include('connect.php');
            $IDUser = $_POST['IDUser'];
            $IDPost = $_POST['IDPost'];
            $Comment = $_POST['Comment'];
            $insertComment = "INSERT INTO comment (IDPost, IDUser, comment) VALUES ('$IDPost', '$IDUser', '$Comment')";
            $connect->query($insertComment);
            echo $insertComment;
            header("Location: post.php?IDUser=$IDUser&ID=$IDPost");
            $connect->close();
        ?>  
    </body>

</html>
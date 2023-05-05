<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles/login.css">
</head>
<body> 
    <div class="container">
        <div class="boxRight">
            <form method="post" class="" action="login.php">
                <h1 style="">LOG IN</h1>
                <div class="inputBox">
                    <input class="input" type="text" name="username" required="required">
                    <span>USERNAME</span>
                </div>
                <div class="inputBox">
                    <input class="input" type="password" name="password" required="required">
                    <span>PASSWORD</span>
                </div>
                <input type="submit" class="btn" value="Login">
            </form>
        </div>
    </div>
</body>
</html>
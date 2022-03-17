<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login form</title>
    <link rel="stylesheet" href="css/main.css" />
</head>

<body>

    <!-- header/nav -->
    
        <?php include_once("header.php")?>
    
        
    <main class="short">
        <div class="login-form">
            <h1>login form</h1>
            <form action="#" method="post">
                <p>Username</p>
                <input type="text" name="User" placeholder="username">
                <p>password</p>
                <input type="password" name="password" placeholder="password">
                <button type="submit">login</button>
            </form>
        </div>
    </main>
    <footer>
        <h1>pizza/footer</h1>
    </footer>
    
    <script src="js/login.js"></script>
</body>
</html>
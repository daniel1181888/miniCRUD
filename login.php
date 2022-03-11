<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gewoon pizza</title>
    <link rel="stylesheet" href="css/main.css" />
</head>

<body>

    <!-- header/nav -->
    <header>
        <nav>
            <ul>
                <li><a href="index.php">pizzas</a></li>
                <li><a href="drinken.php">drinken</a></li>
                <li><a href="login.php">login</a></li>
            </ul>
        </nav>
    </header>
<main>
    <main id="main-holder">
        <h1 id="login-header">login</h1>

        <div id="login-header">
            <p id="login-error-msg">Invalid username <span id="error-msg-second-line">and/or password</span></p>
        </div>

        <form id="login-form" action="loginreg.php" method="post">
            <input type="text" name="username" id="username-field" class="login-form-field" placeholder="Username">
            <input type="password" name="password" id="password-field" class="lofin-form-field" placeholder="password">
            <input type="submit" value="Login" id="login-form-submit" name="knop">
        </form>
    </main>
</main>

</body>

</html>
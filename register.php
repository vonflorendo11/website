<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <nav class="navbar" >
    <a href="AboutUs.html"> About Us </a>
    </nav>
    
    <h1>Welcome To AcadBuddy</h1>
    <p>We prioritize deadlines and productivity</p>

    <div class="box">

        <div class="login-container">
            <h2>Login</h2>

            <form action="login.php" method="POST">

                <label for="username">Username:</label><br>

                <input type="text" id="username" name="username" placeholder="Ex. Dynastyyy11" required><br><br>

                <label for="email">Email:</label><br>

                <input type="text" id="email" name="email" placeholder="Ex. asdsad@gmail.com" required><br><br>

                <label for="number">Contact Number:</label><br>

                <input type="text" id="number" name="number" placeholder="Ex. 0969696969" required><br><br>

                <label for="password">Password:</label><br>

                <input type="password" id="password" name="password" placeholder="Ex. $15685:'1" required><br><br>

                <input type="submit" value="Login">

                <a href="index.php"> Already have an account? Click here <a>

            </form>
        </div>
    </div>
</body>
</html>

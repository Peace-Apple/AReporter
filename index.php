<head>
    <link rel="stylesheet" href="assets/style.css" />
</head>
<body class="auth">
    <h3>Welcome to A-REPORTER, report an accident today!</h3>
    <div class="auth-forms">
        <div class="login">
            <h2>Login</h2>
            <form action="checklogin.php" method="post">
                <input type="text" name="username" id="username" placeholder="Enter Username" required="required" />
                <br><br>
                <input type="password" name="password" id="password" placeholder=" Enter Password" required="required" />
                <br><br>
                <input type="submit" name="submit" value="Login"/>
            </form>
            <p><a href="register.php">No account? Register Now!</a></p>
        </div>
    </div>
</body>

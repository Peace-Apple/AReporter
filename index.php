<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="assets/style.css" />
</head>
<body>
    <nav>
        <header>
            <div>
                <ul>
                    <li><a href="#">A-Reporter<a></li>
                    <li><a href="#">Accidents<a></li>
                    <li><a href="#">Report Accident<a></li>
                    <li><a href="#">Login<a></li>
                    <li><a href="#">Signup<a></li>
                    <li><a href="#">Logout<a></li>
                </ul>
            </div>
        </header>
    </nav>
    <div>
        <form action="submit.php" method="post">
            First Name: <br>
            <input type="text" name="firstname"/>
            <br><br>
            Last Name: <br>
            <input type="text" name="lastname"/>
            <br><br>
            <input type="submit" value="Submit"/>
        </form>
    </div>
    <footer>
        <div>
            <div>
                <ul>
                    <li>Contact us</li>
                    <li>0800-800 800</li>
                </ul>
            </div>
            <div>
                <ul>
                    <li>Legal</li>
                    <li>Terms of use</li>
                    <li>FAQs</li>
                </ul>
            </div>
            <div>
                <ul>
                    <li>Contact us</li>
                    <li>0800-800 800</li>
                </ul>
            </div>
            <div>
                <div>
                    <p>© <?= date('Y')?> All Rights Reserved.</p>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>

<!DOCTYPE html>
<html>

<body>
    <div class="flex-center">
        <?php
        $lowerUsername = strtolower($_POST["username"]);
        $username = $_POST["username"];
        $password = $_POST["password"];

        if (strlen($lowerUsername) > 0 && strlen($password) > 0) {
            echo "<h1>Welcome, $username!</h1>";
        } elseif (strlen($lowerUsername) > 0) {
            echo "<h1>Invalid Password</h1>";
        } elseif (strlen($password) > 0) {
            echo "<h1>Invalid Username</h1>";
        } else {
            echo "<h1>Invalid Username and Password</h1>";
        }
        ?>
        <h3>Go back to <a href="./index.php">Home</a></h2>
    </div>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Rubik&family=Sen&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Sen, sans-serif;
        }

        body {
            background: #292C34;
            color: #DCDFE4;
        }

        a {
            color: #2b73b5;
            text-decoration: none;
        }

        .flex-center {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
    </style>

</body>

</html>
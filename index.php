<?php
$brandName = "Lorem Ipsum";
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lorem Ipsum</title>
</head>

<body>
    <div class="flex-center">

        <div>
            <h1><?php echo $brandName ?></h1>
            <form action="welcome.php" method="post">
                <div class="input">
                    <label for="username">Username</label>
                    <input name="username" autocomplete="username" type="text" placeholder="Enter your Username">
                </div>
                <div class="input">
                    <label for="password">Password</label>
                    <input name="password" autocomplete="password" type="password" placeholder="Enter your Password">
                </div>
                <input class="submit" type="submit">
            </form>
        </div>
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

        .flex-center {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .input {
            margin: 2rem 0;
        }

        .submit {
            width: 100%;
            height: 50px;
            border: none;
            border-radius: 10px;
            background: #202229;
            color: #DCDFE4;
            font-size: 1.2rem;
            font-weight: 300;
            padding: 0;
            margin: -0.25rem 0;
            outline: none;
            cursor: pointer;
            transition-duration: 300ms;
        }

        .submit:hover {
            background: #DCDFE4;
            color: #202229;
        }

        input {
            width: 100%;
            height: 50px;
            border: none;
            border-bottom: 2px solid #DCDFE4;
            background: transparent;
            color: #DCDFE4;
            font-size: 1.2rem;
            font-weight: 300;
            padding: 0;
            margin: -0.25rem 0;
            outline: none;
        }
    </style>
</body>
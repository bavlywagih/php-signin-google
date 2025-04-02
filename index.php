<!DOCTYPE html>
<html dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login With Google</title>
    <style>
        .login-with-google-btn:hover {
            background-color: #357AE8;
            color: #ffffff;
        }

        .login-with-google-btn {
            transition: background-color .3s, box-shadow .3s;
            padding: 12px 16px 12px 42px;
            border: none;
            border-radius: 3px;
            box-shadow: 0 -1px 0 rgba(0, 0, 0, .04), 0 1px 1px rgba(0, 0, 0, .25);
            color: #757575;
            font-weight: 500;
            background-color: white;
            font-size: 16px;
            font-weight: bold;
            border: none;
            border-radius: 30px;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: background-color 0.3s ease;
        }

        .login-with-google-btn span {
            display: flex;
            align-items: center;
        }

        body,
        html {
            margin: 0;
            padding: 0;
            height: 100%;
            font-family: Arial, sans-serif;
            background-color: #ffffff;
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100%;
        }
    </style>
</head>

<body>
    <div class="container">
        <a href="./login.php" class="login-with-google-btn" id="googleSignInBtn">
            <span>Login With Google</span>
            <img class="google-logo" src="./googleIcon.png" alt="Google" width="20">
        </a>
    </div>

</body>

</html>
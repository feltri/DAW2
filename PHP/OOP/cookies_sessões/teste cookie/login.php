<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    

    <style>
        body{
            display: flex;
            align-items: center !important;
            justify-content: center !important;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
        }

        .login{
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
        }

        input{
            width: 500px;
            padding: 5px;
            margin: 5px;
        }

        #submit{
            width: 150px;
            margin-top: 20px;
            border-radius: 20px;
        }
    </style>
</head>

<body>
    <div class="login">
        <h2>LOGIN</h2>

        <input type="text" placeholder="Digite seu usuário">

        <input type="password" placeholder="Digite sua senha">

        <input type="submit" id="submit">
    </div>

    <?php
    //http://localhost:8000/cookies_sess%C3%B5es/teste%20cookie/login.php
    ?>
</body>
</html>
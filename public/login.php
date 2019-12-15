<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login page</title>
</head>
<body>
    <input type="text" name="username" id="username" placeholder="Email or Nickname">
    <br>
    <input type="password" name="password" id="password" placeholder="Password">
    <br>
    <button type="submit" id="login">Se connecter</button>


    <p id="errorLogin" class="errors">Username and/or password are invalid.</p>
    <p id="errorParam" class="errors">Cant't get data from the server.</p>

    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="./js/utilities.js"></script>
    <script src="./js/app.js"></script>
</body>
</html>
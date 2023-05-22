<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    .input-wrapper{
        display: flex;
        flex-direction: column;
        width: 300px;
    }
</style>
<body>
    <form action="LoginAction.php" method="post">
        <div class="input-wrapper">
            <label for="username">Username</label>
            <input type="text" name="username" placeholder="masukan nama anda...">
        </div>
        <div class="input-wrapper">
            <label for="email">Email</label>
            <input type="text" name="email" placeholder="masukan email anda...">
        </div>
        <div class="input-wrapper">
            <label for="password">Password</label>
            <input type="password" name="password" placeholder="*******">
        </div>
        <button type="submit">SUBMIT</button>
    </form>
</body>
</html>
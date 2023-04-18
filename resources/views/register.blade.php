<html>
    <head>
        <title>registraino</title>
</head>
<body>
    <center>registratoin form</center>
    <form method="POST" action="">
        @csrf
        <input type="text" name="name">name:<br>
        <input type="password" name="password">passowd:<br>
        <input type="email" name="email">email:<br>
        <button name="register" type="submit"> click me</button><br>
        already  a user? click here to 
        <a href="http://localhost/chat-radha/public/login">login</a>
</form>
</body>
</html>
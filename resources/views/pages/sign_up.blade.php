<html>
<body>
    <form action="{{ url('/signuppe')}}" method="POST">
        @csrf
    name &nbsp;<input type="text" name="name" id=""><br>
    Email &nbsp;<input type="text" name="email" id=""><br>
    phone Number &nbsp;<input type="text" name="phone" id=""><br>
    Username &nbsp;<input type="text" name="username" id=""><br>
    Password &nbsp;<input type="text" name="password" id=""><br>
    repeatPassword &nbsp;<input type="text" name="repeat" id=""><br><br>
    <input type="submit" value="submit">
</form>
</body>
</html>